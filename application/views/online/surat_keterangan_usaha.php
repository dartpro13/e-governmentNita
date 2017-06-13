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
   <!-- Content Header (Page header) -->
   <section class="content-header">
     <h1>
       Form Input Surat Keterangan Usaha

     </h1>
     <ol class="breadcrumb">
       <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
       <li><a href="#">Forms</a></li>
       <li class="active">General Elements</li>
     </ol>
   </section>

   <section class="content">

     <!-- SELECT2 EXAMPLE -->
     <div class="box box-default">
       <div class="box-header with-border">

         <div class="box-tools pull-right">
           <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
           <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
         </div>
       </div>
       <!-- /.box-header -->
       <div class="box-body">
         <div class="row">

           <form action="<?php echo site_url() ?>/Online/proses_surat_keterangan_usaha" method="POST">
           <div class="col-md-6">
              <div class="form-group">
               <label>NIK Penduduk</label>
               <select class="form-control select2" style="width: 100%;" name="nama">

                 <?php
                 foreach ($penduduk as $value) {
                   echo "<option value='$value->nik'>$value->nik</option>";
                 }
                  ?>
               </select>
             </div>

            <input type="submit" class="btn btn-primary" value="cari data">
               <a href="<?=base_url()?>"><button type="button" class="btn btn-warning">Back to Home</button></a>
           </div>
           </form>
           <!-- /.col -->
         </div>
         <!-- /.row -->
           <br>
           <div class="form-group">
                    <small>*) Silahkan cari NIK anda lalu klik cari data untuk melanjutkan pembuatan surat</small><br>
                    <small>**) Jika anda tidak menemukan NIK anda, silahkan hubungi pihak kantordesa-banjar.com untuk di proses</small><br>
                </div>
       </div>
       <!-- /.box-body -->

     </div>
     <!-- /.box -->


   </section>
   <!-- /.content -->
 <!-- /.content-wrapper -->
 <!-- jQuery 2.2.3 -->
<script src="<?php echo base_url() ?>assets/admin/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url() ?>assets/admin/bootstrap/js/bootstrap.min.js"></script>
<!-- Select2 -->
<script src="<?php echo base_url() ?>assets/admin/plugins/select2/select2.full.min.js"></script>
<!-- InputMask -->
<script src="<?php echo base_url() ?>assets/admin/plugins/input-mask/jquery.inputmask.js"></script>
<script src="<?php echo base_url() ?>assets/admin/plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="<?php echo base_url() ?>assets/admin/plugins/input-mask/jquery.inputmask.extensions.js"></script>
<!-- date-range-picker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="<?php echo base_url() ?>assets/admin/plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap datepicker -->
<script src="<?php echo base_url() ?>assets/admin/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- bootstrap color picker -->
<script src="<?php echo base_url() ?>assets/admin/plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="<?php echo base_url() ?>assets/admin/plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- SlimScroll 1.3.0 -->
<script src="<?php echo base_url() ?>assets/admin/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- iCheck 1.0.1 -->
<script src="<?php echo base_url() ?>assets/admin/plugins/iCheck/icheck.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url() ?>assets/admin/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url() ?>assets/admin/dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url() ?>assets/admin/dist/js/demo.js"></script>
 <script src="<?php echo base_url() ?>assets/admin/plugins/select2/select2.full.min.js"></script>

 <script>
 $(function () {
   //Initialize Select2 Elements
   $(".select2").select2();

   //Datemask dd/mm/yyyy
   $("#datemask").inputmask("dd/mm/yyyy", {"placeholder": "dd/mm/yyyy"});
   //Datemask2 mm/dd/yyyy
   $("#datemask2").inputmask("mm/dd/yyyy", {"placeholder": "mm/dd/yyyy"});
   //Money Euro
   $("[data-mask]").inputmask();

   //Date range picker
   $('#reservation').daterangepicker();
   //Date range picker with time picker
   $('#reservationtime').daterangepicker({timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A'});
   //Date range as a button
   $('#daterange-btn').daterangepicker(
       {
         ranges: {
           'Today': [moment(), moment()],
           'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
           'Last 7 Days': [moment().subtract(6, 'days'), moment()],
           'Last 30 Days': [moment().subtract(29, 'days'), moment()],
           'This Month': [moment().startOf('month'), moment().endOf('month')],
           'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
         },
         startDate: moment().subtract(29, 'days'),
         endDate: moment()
       },
       function (start, end) {
         $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
       }
   );

   //Date picker
   $('#datepicker').datepicker({
     autoclose: true
   });

   //iCheck for checkbox and radio inputs
   $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
     checkboxClass: 'icheckbox_minimal-blue',
     radioClass: 'iradio_minimal-blue'
   });
   //Red color scheme for iCheck
   $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
     checkboxClass: 'icheckbox_minimal-red',
     radioClass: 'iradio_minimal-red'
   });
   //Flat red color scheme for iCheck
   $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
     checkboxClass: 'icheckbox_flat-green',
     radioClass: 'iradio_flat-green'
   });

   //Colorpicker
   $(".my-colorpicker1").colorpicker();
   //color picker with addon
   $(".my-colorpicker2").colorpicker();

   //Timepicker
   $(".timepicker").timepicker({
     showInputs: false
   });
 });
</script>
