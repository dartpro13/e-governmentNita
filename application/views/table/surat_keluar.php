<!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url() ?>/assets/admin/plugins/datatables/dataTables.bootstrap.css">

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Surat Keluar Keseluruhan
        <small>kantordesa-banjar.com</small>
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
              <h3 class="box-title">Data Surat Keluar Keseluruhan</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>ID Surat</th>
                  <th>Nama Pembuat</th>
                  <th>Nik</th>
                  <th>Keperluan</th>
                  <th>Jenis Surat</th>
                  
                </tr>
                </thead>
                <tbody>

                  <?php
                  foreach ($spkk as $values) {

                   ?>
                <tr>
                    <td><?php echo $values->id_surat?></td>
                    <td><?php echo $values->nama ?></td>
                    <td><?php echo $values->nik ?></td>
                    <td><?php echo $values->keperluan ?></td>
                    <td>Surat Pengantar KK</td>
                  
                </tr>

                <?php } ?>
                    <?php
                  foreach ($spktp as $values) {

                   ?>
                <tr>
                    <td><?php echo $values->id_surat?></td>
                    <td><?php echo $values->nama ?></td>
                    <td><?php echo $values->nik ?></td>
                    <td><?php echo $values->keperluan ?></td>
                    <td>Surat Pengantar KTP</td>
                  
                </tr>

                <?php } ?>
                    <?php
                  foreach ($skb as $values) {

                   ?>
                <tr>
                    <td><?php echo $values->id_surat?></td>
                    <td><?php echo $values->nama ?></td>
                    <td><?php echo $values->nik ?></td>
                    <td><?php echo $values->keperluan ?></td>
                    <td>Surat Kelakuan Baik</td>
                  
                </tr>

                <?php } ?>
                    <?php
                  foreach ($skl as $values) {

                   ?>
                <tr>
                    <td><?php echo $values->id_surat?></td>
                    <td><?php echo $values->nama ?></td>
                    <td><?php echo $values->nik_pengaju ?></td>
                    <td><?php echo $values->keperluan ?></td>
                    <td>Surat Keterangan Lahir</td>
                  
                </tr>

                <?php } ?>
                    <?php
                  foreach ($spd as $values) {

                   ?>
                <tr>
                    <td><?php echo $values->id_surat?></td>
                    <td><?php echo $values->nama ?></td>
                    <td><?php echo $values->nik ?></td>
                    <td><?php echo $values->keperluan ?></td>
                    <td>Surat Pengantar KK</td>
                  
                </tr>

                <?php } ?>
                    <?php
                  foreach ($skp as $values) {

                   ?>
                <tr>
                    <td><?php echo $values->id_surat?></td>
                    <td><?php echo $values->nama ?></td>
                    <td><?php echo $values->nik ?></td>
                    <td><?php echo $values->keperluan ?></td>
                    <td>Surat Pengantar KK</td>
                  
                </tr>

                <?php } ?>
                    <?php
                  foreach ($skpj as $values) {

                   ?>
                <tr>
                    <td><?php echo $values->id_surat?></td>
                    <td><?php echo $values->nama ?></td>
                    <td><?php echo $values->nik ?></td>
                    <td><?php echo $values->keperluan ?></td>
                    <td>Surat Pengantar KK</td>
                  
                </tr>

                <?php } ?>
                    <?php
                  foreach ($sku as $values) {

                   ?>
                <tr>
                    <td><?php echo $values->id_surat?></td>
                    <td><?php echo $values->nama ?></td>
                    <td><?php echo $values->nik ?></td>
                    <td><?php echo $values->keperluan ?></td>
                    <td>Surat Pengantar KK</td>
                  
                </tr>

                <?php } ?>
                    <?php
                  foreach ($sprh as $values) {

                   ?>
                <tr>
                    <td><?php echo $values->id_surat?></td>
                    <td><?php echo $values->nama ?></td>
                    <td><?php echo $values->nik ?></td>
                    <td><?php echo $values->keperluan ?></td>
                    <td>Surat Pengantar KK</td>
                  
                </tr>

                <?php } ?>
                    <?php
                  foreach ($spkb as $values) {

                   ?>
                <tr>
                    <td><?php echo $values->id_surat?></td>
                    <td><?php echo $values->nama ?></td>
                    <td><?php echo $values->nik ?></td>
                    <td><?php echo $values->keperluan ?></td>
                    <td>Surat Pengantar KK</td>
                  
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
