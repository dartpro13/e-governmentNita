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
              <h3 class="box-title">Quick Example</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="<?php echo site_url() ?>/proses/input_penduduk" method="POST">
              <div class="box-body">
                <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nik</label>
                  <input type="number" class="form-control" name="nik" >
                </div>
                
                <div class="form-group">
                  <label for="exampleInputPassword1">Nama</label>
                  <input type="text" class="form-control" name="nama" placeholder="Masukan Nama">
                </div>
                
                <div class="form-group">
                  <label for="exampleInputPassword1">jenis Kelamin</label>
                   <select class="form-control" name="j_kelamin">
                    <option>Laki-laki</option>
                    <option>Perempuan</option>
                  </select>
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Agama</label>
                  <select class="form-control" name="agama">
                    <option>Islam</option>
                    <option>Kristen</option>
                    <option>Hindu</option>
                    <option>Budha</option>
                  </select>
                  
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Tempat Lahir</label>
                   <input type="text" class="form-control" name="tmp" >
                  
                </div>
                
                </div>

                <div class="col-md-6">
                
                 <div class="form-group">
                  <label for="exampleInputPassword1">Tgl Lahir</label>
                  <input type="date" class="form-control" name="tgl" >
                </div>
                
                 <div class="form-group">
                  <label for="exampleInputPassword1">Status Perkawinan</label>
                 <select class="form-control" name="status">
                    <option>Sudah Kawin</option>
                    <option>Belum Kawin</option>
                    <option>Janda / Duda</option>
                  </select>
                </div>

                 <div class="form-group">
                  <label for="exampleInputPassword1">Kewarganegaraan</label>
                  <select class="form-control" name="kwn">
                    <option>Indonesia</option>
                    
                  </select>
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Pekerjaan</label>
                  <input type="text" class="form-control" name="pekerjaan" >
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Alamat</label>
                  <textarea class="form-control" name="alamat" style="height:20vh;"></textarea>
                </div>


                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
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
  </div>
  <!-- /.content-wrapper -->