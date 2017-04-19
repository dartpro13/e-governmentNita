<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Surat Kelakuan Baik</title>
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
<body>

    <div id="wrapper">

<div id="page-wrapper col-md-12">
           <!--  <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Detail Nilai </h1>

                </div>
               
            </div> -->
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table " id="dataTables-example">
                                
                                <tbody>
                                    
                                    <tr class="odd gradeX">
                                        <td>
                                            <div class="col-md-12">
                                                <div class="col-md-4 col-xs-4 col-sm-6 ">
                                            <img src="<?php echo base_url() ?>/assets/images/logo.png" class="img-responsive" style="width:40%;">
                                                </div>
                                                <div class="col-md-8 col-xs-8 col-sm-6 ">
                                                    <h3>PEMERINTAH KABUPATEN BULELENG</h3>
                                                    <h3 style="margin-left:10vh;">KECAMATAN BANJAR</h3>
                                                    <h3 style="margin-left:-1vh;">KELURAHAN KANTOR PEBEKEL BANJAR</h3>
                                                </div>
                                                
                                            </div>
                                            
                                            <?php 
                                            foreach ($surat as $value) {
                                            	# code...
                                            }
                                            foreach ($user as $data) {
                                            	# code...
                                            }
                                             ?>

                                            <div class="col-md-12">
                                            	<hr>
                                                <center>
                                                    <!-- <h2>CERTIFIKAT PENGHARGAAN</h2> -->
                                                    <h4><b><u>SURAT PENGANTAR KK</u></b></h4>
                                                    <h4><b>Nomor : <?php echo $value->id_surat ?> / XII / <?php echo date('Y') ?></b></h4>

                                                </center>
                                            </div>


                                            <div class="col-md-12" style="margin-top:5vh;">
                                            	<h4><b>1. Yang bertanda tangan dibawah ini :</b></h4>
                                                <div class="col-md-4 col-xs-4 col-sm-4">
                                                   <h4>NAMA</h4>
                                                </div>
                                                <div class="col-md-1 col-xs-1 col-sm-1">
                                                    :
                                                </div>

                                                <div class="col-md-7 col-xs-7 col-sm-7">
                                                 <h4 style="align:left;"><?php echo $value->nama ?></h4> 
                                                </div>
 												
 												<div class="col-md-4 col-xs-4 col-sm-4">
                                                   <h4>Jabatan</h4>
                                                </div>
                                                <div class="col-md-1 col-xs-1 col-sm-1">
                                                    :
                                                </div>

                                                <div class="col-md-7 col-xs-7 col-sm-7">
                                                 <h4 style="align:left;"><?php echo $value->jabatan ?></h4> 
                                                </div>
                                                
                                            </div>

                                            <div class="col-md-12" style="margin-top:5vh;">
                                            	<h4><b>2. Dengan ini menerangkan :</b></h4>
                                                <div class="col-md-4 col-xs-4 col-sm-4">
                                                   <h4>NAMA</h4>
                                                </div>
                                                <div class="col-md-1 col-xs-1 col-sm-1">
                                                    :
                                                </div>

                                                <div class="col-md-7 col-xs-7 col-sm-7">
                                                 <h4 style="align:left;"><?php echo $data->nama ?></h4> 
                                                </div>
 												
 												<div class="col-md-4 col-xs-4 col-sm-4">
                                                   <h4>Tempat Lahir</h4>
                                                </div>
                                                <div class="col-md-1 col-xs-1 col-sm-1">
                                                    :
                                                </div>

                                                <div class="col-md-7 col-xs-7 col-sm-7">
                                                 <h4 style="align:left;"><?php echo $data->tmp_lahir ?></h4> 
                                                </div>

                                                <div class="col-md-4 col-xs-4 col-sm-4">
                                                   <h4>Tanggal Lahir</h4>
                                                </div>
                                                <div class="col-md-1 col-xs-1 col-sm-1">
                                                    :
                                                </div>

                                                <div class="col-md-7 col-xs-7 col-sm-7">
                                                 <h4 style="align:left;"><?php echo $data->tgl_lahir ?></h4> 
                                                </div>

                                                <div class="col-md-4 col-xs-4 col-sm-4">
                                                   <h4>NIK</h4>
                                                </div>
                                                <div class="col-md-1 col-xs-1 col-sm-1">
                                                    :
                                                </div>

                                                <div class="col-md-7 col-xs-7 col-sm-7">
                                                 <h4 style="align:left;"><?php echo $data->nik ?></h4> 
                                                </div>

                                                <div class="col-md-4 col-xs-4 col-sm-4">
                                                   <h4>Agama</h4>
                                                </div>
                                                <div class="col-md-1 col-xs-1 col-sm-1">
                                                    :
                                                </div>

                                                <div class="col-md-7 col-xs-7 col-sm-7">
                                                 <h4 style="align:left;"><?php echo $data->agama ?></h4> 
                                                </div>
                                                
                                                 <div class="col-md-4 col-xs-4 col-sm-4">
                                                   <h4>Status Perkawinan</h4>
                                                </div>
                                                <div class="col-md-1 col-xs-1 col-sm-1">
                                                    :
                                                </div>

                                                <div class="col-md-7 col-xs-7 col-sm-7">
                                                 <h4 style="align:left;"><?php echo $data->status_perkawinan ?></h4> 
                                                </div>

                                                 <div class="col-md-4 col-xs-4 col-sm-4">
                                                   <h4>Jenis Kelamin</h4>
                                                </div>
                                                <div class="col-md-1 col-xs-1 col-sm-1">
                                                    :
                                                </div>

                                                <div class="col-md-7 col-xs-7 col-sm-7">
                                                 <h4 style="align:left;"><?php echo $data->j_kelamin ?></h4> 
                                                </div>

                                                 <div class="col-md-4 col-xs-4 col-sm-4">
                                                   <h4>Pekerjaan</h4>
                                                </div>
                                                <div class="col-md-1 col-xs-1 col-sm-1">
                                                    :
                                                </div>

                                                <div class="col-md-7 col-xs-7 col-sm-7">
                                                 <h4 style="align:left;"><?php echo $data->pekerjaan ?></h4> 
                                                </div>

                                                 <div class="col-md-4 col-xs-4 col-sm-4">
                                                   <h4>Kewarganegaraan</h4>
                                                </div>
                                                <div class="col-md-1 col-xs-1 col-sm-1">
                                                    :
                                                </div>

                                                <div class="col-md-7 col-xs-7 col-sm-7">
                                                 <h4 style="align:left;"><?php echo $data->kewarganegaraan ?></h4> 
                                                </div>

                                                 <div class="col-md-4 col-xs-4 col-sm-4">
                                                   <h4>Alamat</h4>
                                                </div>
                                                <div class="col-md-1 col-xs-1 col-sm-1">
                                                    :
                                                </div>

                                                <div class="col-md-7 col-xs-7 col-sm-7">
                                                 <h4 style="align:left;"><?php echo $data->alamat ?></h4> 
                                                </div>

                                                 
                                            </div>

                                             <div class="col-md-12" style="margin-top:5vh;">
                                            	<h4><b>Keperluan</b></h4>
                                                <div class="col-md-12 col-xs-12 col-sm-12">
                                                   <h4><?php echo $value->keperluan ?></h4>
                                                </div>
                                                
                                                
                                            </div>

                                           

                                            <div class="col-md-12" style="margin-top:10vh;">
                                                <h5 style="float:right;">Buleleng, <?php echo date('d-M-Y') ?></h5>

                                            </div>

                                            <div class="col-md-12" style="margin-top:5vh;">
                                                <h5 style="float:right; margin-right:5vh;">Kepala Desa</h5>

                                            </div>
                                        </td>
                                        
                                        
                                    </tr>
                                    
                                    
                                </tbody>
                            </table>

                            <!-- <a href="#"><button class="btn btn-danger">Download Nilai</button></a>
                             -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            
        </div>



 

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });

    </script>

    <script type="text/javascript">
    print();
    </script>


        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
