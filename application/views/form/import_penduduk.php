 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Form Input Penduduk
       
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
              <h3 class="box-title">Import Data Penduduk (.xls|.xlsx)</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="<?php echo site_url() ?>/proses/import_penduduk" method="POST" enctype="multipart/form-data">
              <div class="box-body">
                <div class="col-md-6">
                <div class="form-group">
<!--                  <label for="exampleInputEmail1">Import File</label>-->
                  <input type="file" class="form-control" name="data_penduduk" >
                </div>
                <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
                </div>
              </div>
              <!-- /.box-body -->

              
            </form>
          </div>
          <!-- /.box -->

          

        </div>
        <!--/.col (left) -->
        
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->