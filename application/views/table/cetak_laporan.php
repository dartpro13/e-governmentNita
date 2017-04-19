<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url() ?>/assets/admin/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url() ?>/assets/admin/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url() ?>/assets/admin/dist/css/skins/_all-skins.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url() ?>/assets/admin/plugins/iCheck/flat/blue.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?php echo base_url() ?>/assets/admin/plugins/morris/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url() ?>/assets/admin/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo base_url() ?>/assets/admin/plugins/datepicker/datepicker3.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url() ?>/assets/admin/plugins/daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo base_url() ?>/assets/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url() ?>/assets/admin/plugins/datatables/dataTables.bootstrap.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url() ?>/assets/admin/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url() ?>/assets/admin/dist/css/skins/_all-skins.min.css">


  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url() ?>/assets/admin/plugins/datatables/dataTables.bootstrap.css">

 

    <!-- Main content -->
    <section class="content">
      <div class="row">
      <div class="col-md-12 ">
          
          <div class="box">
            <div class="box-header">
              <center>
              <h2><i class="fa fa-pie-chart fa-2x"></i> Data Table With Full Features</h2>
              </center>
              
            </div>
            <!-- /.box-header -->
          <div class="col-md-6 col-xs-6" style="background-color:white; height:150vh;">
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
                  <td><?php echo $dana->jumlah ?></td>
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
          <div class="col-md-6 col-xs-6" style="background-color:white; height:150vh;">
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
                  <td><?php echo $keluar->total_pengeluaran ?></td>
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

<script type="text/javascript">
  print();
</script>