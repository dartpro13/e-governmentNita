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
                  <th>Nik</th>
                  <th>Nama</th>
                  <th>Jenis Kelamin</th>
                  <th>Agama</th>
                  <th>Tmp / Tgl Lahir</th>
                  <th>Status</th>
                  <th>Kewarganegaraan</th>
                  <th>Pekerjaan</th>
                  <th>Alamat</th>
                  <th>Aksi</th>
                  
                </tr>
                </thead>
                <tbody>

                  <?php 
                  $no=0;
                  foreach ($penduduk as $data) {
                      
                      
                    $no++;
                   ?>
                <tr>
                  <td><?php echo $no ?></td>
                  <td><?php echo $data->nik ?></td>
                  <td><?php echo $data->nama ?></td>
                  <td><?php echo $data->j_kelamin ?></td>
                  <td><?php echo $data->agama ?></td>
                   <td><?php echo $data->tmp_lahir." / ".$data->tgl_lahir ?></td>
                  <td><?php echo $data->status_perkawinan ?></td>
                  <td><?php echo $data->kewarganegaraan ?></td>
                  <td><?php echo $data->pekerjaan ?></td>
                  <td><?php echo $data->alamat ?></td>
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
