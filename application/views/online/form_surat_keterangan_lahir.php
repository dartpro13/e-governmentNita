<link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/plugins/select2/select2.min.css">
<link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/bootstrap/css/bootstrap.min.css">
 <!-- Font Awesome -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
 <!-- Ionicons -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
 <!-- daterange picker -->
 <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/plugins/daterangepicker/daterangepicker.css">
 <!-- bootstrap datepicker -->
 <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/plugins/datepicker/datepicker3.css">
 <!-- iCheck for checkboxes and radio inputs -->
 <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/plugins/iCheck/all.css">
 <!-- Bootstrap Color Picker -->
 <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/plugins/colorpicker/bootstrap-colorpicker.min.css">
 <!-- Bootstrap time Picker -->
 <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/plugins/timepicker/bootstrap-timepicker.min.css">
 <!-- Select2 -->
 <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/plugins/select2/select2.min.css">
 <!-- Theme style -->
 <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/dist/css/AdminLTE.min.css">
 <!-- AdminLTE Skins. Choose a skin from the css/skins
      folder instead of downloading all of them to reduce the load. -->
 <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/dist/css/skins/_all-skins.min.css">
<!-- Content Wrapper. Contains page content -->

<!-- Content Wrapper. Contains page content -->
    <!-- Content Header (Page header) -->
   <section class="content-header">
     <h1>
       Form Surat Keterangan Lahir

     </h1>
     <ol class="breadcrumb">
       <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
       <li><a href="#">Forms</a></li>
       <li class="active">General Elements</li>
     </ol>
   </section>

   <!-- Main content -->
   <section class="content">
     <div class="row">
       <!-- left column -->
       <div class="col-md-12">
         <!-- general form elements -->
         <div class="box box-primary">
           <div class="box-header with-border">
             <h3 class="box-title">Yang bertanda tangan dibawah ini</h3>
           </div>
           <!-- /.box-header -->
           <!-- form start -->
           <?php
           foreach ($penduduk as $data) {

           }
            ?>
           <?php if($status=="edit"){
             ?><form role="form" action="<?php echo site_url() ?>/proses/edit_surat_keterangan_lahir_act/<?= $idS;?>" method="POST">
             <?php
           } else if($status=="create"){
             ?><form role="form" action="<?php echo site_url() ?>/Online/simpan_surat_keterangan_lahir" method="POST">
             <?php
           }?>

             <div class="box-body">
               <div class="col-md-6">
               <div class="form-group">

                 <label for="exampleInputEmail1">Nama</label>
                 <?php if($status=="edit"){
                   ?><input type="text" class="form-control" name="nama" value="<?= $namaSurat;?>">
                   <?php
                 } else if($status=="create"){
                   ?><input type="text" class="form-control" name="nama" >
                   <?php
                 }?>

               </div>

               </div>

               <div class="col-md-6">

                <div class="form-group">
                 <label for="exampleInputPassword1">Jabatan</label>
                <select class="form-control" name="jabatan">
                   <option>Kepala Desa</option>
                   <option>Kaur</option>
                   <option>Sekretaris</option>
                   <option>Warga Desa</option>
                 </select>
               </div>

               </div>
             </div>
             <!-- /.box-body -->

             <div class="box-header with-border">
             <h3 class="box-title">Dengan ini menyatakan bahwa</h3>
           </div>



              <input type="hidden" class="form-control" name="nik" value="<?php echo $data->nik ?>" >


             <div class="box-body">
               <div class="col-md-6">
               <div class="form-group">
                 <label for="exampleInputEmail1">Nama</label>
                 <input type="text" class="form-control" name="nama" value="<?php echo $data->nama ?>" disabled >
               </div>

               <div class="form-group">
                 <label for="exampleInputEmail1">NIK</label>
                 <input type="text" class="form-control" name="nama" value="<?php echo $data->nik ?>" disabled >
               </div>

               <div class="form-group">
                 <label for="exampleInputEmail1">Tempat Lahir</label>
                 <input type="text" class="form-control" name="nama" value="<?php echo $data->tmp_lahir ?>" disabled >
               </div>

               <div class="form-group">
                 <label for="exampleInputEmail1">Tgl Lahir</label>
                 <input type="text" class="form-control" name="nama" value="<?php echo $data->tgl_lahir ?>" disabled >
               </div>

               <div class="form-group">
                 <label for="exampleInputEmail1">Agama</label>
                 <input type="text" class="form-control" name="nama" value="<?php echo $data->agama ?>" disabled >
               </div>

               </div>

               <div class="col-md-6">

                <div class="form-group">


                <div class="form-group">
                 <label for="exampleInputEmail1">Status Perkawinan</label>
                 <input type="text" class="form-control" name="nama" value="<?php echo $data->status_perkawinan ?>" disabled >
               </div>

                <div class="form-group">
                 <label for="exampleInputEmail1">Jenis Kelamin</label>
                 <input type="text" class="form-control" name="nama" value="<?php echo $data->j_kelamin ?>" disabled >
               </div>

               <div class="form-group">
                 <label for="exampleInputEmail1">Pekerjaan</label>
                 <input type="text" class="form-control" name="nama" value="<?php echo $data->pekerjaan ?>" disabled >
               </div>

               <div class="form-group">
                 <label for="exampleInputEmail1">Kewarganegaraan</label>
                 <input type="text" class="form-control" name="nama" value="<?php echo $data->kewarganegaraan ?>" disabled >
               </div>

               <div class="form-group">
                 <label for="exampleInputEmail1">Alamat</label>
                 <input type="text" class="form-control" name="nama" value="<?php echo $data->alamat ?>" disabled >
               </div>

               </div>

               </div>

               <div class="col-md-12">
                 <div class="form-group">
                 <label for="exampleInputEmail1">Keperluan</label>
                 <?php if($status=="edit"){
                   ?><textarea name="keperluan" class="form-control" style="height:30vh;"><?= $keperluan;?></textarea>
                   <?php
                 } else if($status=="create"){
                   ?><textarea name="keperluan" class="form-control" style="height:30vh;"></textarea>
                   <?php
                 }?>

               </div>
               </div>
                 <center><h3>Persyaratan</h3></center>
                <div class="col-md-6">

                <div class="form-group">

                    <div class="form-group">
                     <label for="exampleInputEmail1">Nomor yang bisa dihubungi</label>
                     <input type="text" class="form-control" name="nomor_hp" placeholder="contoh: 081210113977">
                   </div>
                <div class="form-group">
                 <label for="exampleInputEmail1">File Persyaratan</label>
                 <input type="file" name="berkas" class="form-inline" /><br>
                    <small>silahkan masukkan kedalam zip/rar file berkas persyaratan anda</small><br><br>
                    <small>Berkas Persayaratan meliputi: </small><br>
                    <small>*)Foto KTP</small><br>
                    <small>**)Foto KK</small><br>
                    <small>***)Foto Surat Pengantar RT/RW</small><br>
                    <small>****)Foto Akte Kelahiran</small>
                   
                </div>
               </div>

               </div>
             </div>
             <!-- /.box-body -->

             <div class="box-footer">
               <button type="submit" onclick="al()" class="btn btn-primary">Submit</button>
                 <a href="<?=base_url()?>"><button type="button" class="btn btn-warning">Back to Home</button></a>
             </div>
           </form>
         </div>
         <!-- /.box -->



       </div>
       <!--/.col (left) -->

     </div>
     <!-- /.row -->
   </section>
   <!-- /.content -->
 <!-- /.content-wrapper -->
 <script>
 function al(){alert("surat anda sudah di proses dan tersimpan di database, silahkan tunggu balasan dari pihak desa. Terimakasih!");}
 </script>
