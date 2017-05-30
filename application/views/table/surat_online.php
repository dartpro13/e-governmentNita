<!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url() ?>/assets/admin/plugins/datatables/dataTables.bootstrap.css">

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Surat Online
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
                  <th>NIK Pembuat</th>
                  <th>Jenis Surat</th>
                  <th>Keperluan</th>
                  <th>No.HP</th>
                  <th>File Persyaratan</th>
                  <th>Status</th>
                  <th>Action</th>

                </tr>
                </thead>
                <tbody>

                  <?php
                  foreach ($surat as $value) {

                   ?>
                <tr>
                    <td><?php echo $value->nik_pembuat?></td>
                    <td><?php echo $value->jenis_surat ?></td>
                    <td><?php echo $value->keperluan ?></td>
                    <td><?php echo $value->no_hp ?></td>
                    <?php
                  foreach ($file as $value1) {

                   ?>
                    <td><a href="<?php echo base_url().'file/'.$value1->nama_file ?>" download>download</a></td>
                    <?php
                  }
                    ?>
                    <td><?php echo $value->status ?></td>
                  <td>
                    <a href="<?php echo site_url() ?>/proses/ubah_status/<?php echo $value->id ?>">
                      <i class="fa fa-check"></i>
                    </a>
                      
                    <a href="<?php echo site_url() ?>/proses/sms/<?php echo $value->id ?>">
                      <i class="fa fa-envelope"></i>
                    </a>
                    <!-- <a href="<?php echo site_url() ?>/proses/delete/<?php echo $value->id_surat ?>">
                      <i class="fa fa-remove"></i>
                    </a> -->
<!--
                    <a href="<?php echo site_url() ?>/cetak/suratpengantarktp/<?php echo $value->no_surat ?>" target="_blank">
                      <i class="fa fa-print"></i>
                    </a>
-->
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
