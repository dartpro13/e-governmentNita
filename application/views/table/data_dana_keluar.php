<!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url() ?>/assets/admin/plugins/datatables/dataTables.bootstrap.css">

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Tables
        <small>advanced tables</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>No Bukti Keluar</th>
                  <th>Triwulan</th>
                  <th>Tgl Keluar</th>
                  <th>Uraian Pengeluaran</th>
                  <th>Total Pengeluaran</th>
                  <th>Upload Bukti Transfer</th>
                  <th>Aksi</th>
                </tr>
                </thead>
                <tbody>

                  <?php 
                  $no=0;
                  foreach ($dana_keluar as $dana) {
                    $no++;
                   ?>
                <tr>
                  <td><?php echo $no ?></td>
                  <td><?php echo $dana->no_bukti_keluar ?></td>
                  <td><?php echo $dana->triwulan ?></td>
                  <td><?php echo $dana->tgl_keluar ?></td>
                  <td><?php echo $dana->uraian_keluar ?></td>
                   <td>Rp <?php echo number_format($dana->total_pengeluaran,0,',','.') ?></td>
                   <td><?php echo $dana->upload_bukti_keluar ?></td>
                   <td>
                    <a href="">
                      <i class="fa fa-edit"></i>
                    </a>
                    <a href="">
                      <i class="fa fa-trash"></i>
                    </a>
                   </td>
                </tr>
                
                <?php } ?>
                </tfoot>
              </table>

              
            </div>
            <!-- /.box-body -->
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
