<!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url() ?>/assets/admin/plugins/datatables/dataTables.bootstrap.css">

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"><i class="fa fa-pie-chart"></i> Data Table With Full Features</h3>
              <a href="<?php echo site_url() ?>/cetak/laporan" target="_blank">
              <button class="btn btn-danger" style="float:right;"><i class="fa fa-print"></i> Cetak Laporan</button>
              </a>
            </div>
            <!-- /.box-header -->
            <div class="col-md-6" style="background-color:white; height:150vh;">
            <div class="box-body">
              <table id="example" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th colspan="6"><center><h4><b>Penerimaan Dana</b></h4></center></th>
                  </tr>
                <tr>
                  <th>No</th>
                  <th>No Bukti Terima</th>
                  <th>Tgl Terima</th>
                  <th>Jumlah</th>
                  <th>Uraian Terima</th>
                  
                </tr>
                </thead>
                <tbody>

                  <?php 
                  $no=0;
                  $saldo=0;
                  foreach ($dana_masuk as $dana){
                      
                      $saldo += $dana->jumlah;
                    $no++;
                   ?>
                <tr>
                  <td><?php echo $no ?></td>
                  <td><?php echo $dana->no_bukti_terima ?></td>
                  <td><?php echo $dana->tgl_terima ?></td>
                  <td>Rp <?php echo number_format($dana->jumlah,0,',','.') ?></td>
                   <td><?php echo $dana->uraian_terima ?></td>
                   
                </tr>
                
                <?php } ?>


                </tfoot>
              </table>
              <h4><b>Sisa Saldo : Rp <?php echo number_format($saldo,0,',','.') ?></b></h4>
            </div>
            </div>
            <!-- /.box-body -->

              <!-- /.box-header -->
            <div class="col-md-6" style="background-color:white; height:150vh;">
            <div class="box-body">
              <table id="example" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th colspan="6"><center><h4><b>Pengeluaran Dana</b></h4></center></th>
                  </tr>
                <tr>
                  <th>No</th>
                  <th>No Bukti Terima</th>
                  <th>Tgl Terima</th>
                  <th>Jumlah</th>
                  <th>Uraian Terima</th>
                  
                </tr>
                </thead>
                <tbody>

                  <?php 
                  $no=0;
                  $saldo=0;
                  foreach ($dana_keluar as $keluar){
                      
                      $saldo += $keluar->total_pengeluaran;
                    $no++;
                   ?>
                <tr>
                  <td><?php echo $no ?></td>
                  <td><?php echo $keluar->no_bukti_keluar ?></td>
                  <td><?php echo $keluar->tgl_keluar ?></td>
                  <td>Rp <?php echo number_format($keluar->total_pengeluaran,0,',','.') ?></td>
                   <td><?php echo $keluar->uraian_keluar ?></td>
                   
                </tr>
                
                <?php } ?>

                

                </tfoot>
              </table>
              
               <h4><b>Total Pengeluaran : Rp <?php echo number_format($saldo,0,',','.') ?></b></h4>
            </div>
            </div>

          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- DataTables -->

  <!-- jQuery 2.2.3 -->
<script src="<?php echo base_url() ?>/assets/admin/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url() ?>/assets/admin/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url() ?>/assets/admin/plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url() ?>/assets/admin/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url() ?>/assets/admin/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url() ?>/assets/admin/dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url() ?>/assets/admin/dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>
