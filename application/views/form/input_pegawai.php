 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Form Input Pegawai
       
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
            <form role="form" action="<?php echo site_url() ?>/proses/input_pegawai" method="POST">
              <div class="box-body">
                <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">NIP</label>
                  <input type="number" class="form-control" name="nip" >
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Nama</label>
                   <input type="text" class="form-control" name="nama" placeholder="Masukan Nama">
                  
                </div>
                
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="text" class="form-control" name="password" placeholder="Masukan password">
                </div>
                
                <div class="form-group">
                  <label for="exampleInputPassword1">No HP</label>
                   <input type="number" class="form-control" name="nohp" placeholder="Masukan No HP">
                  
                </div>

                
                
                </div>

                <div class="col-md-6">
                
                 <div class="form-group">
                  <label for="exampleInputPassword1">Jabatan</label>
                 <select class="form-control" name="jabatan">
                    <option>Lurah</option>
                    <option>Kaur</option>
                    <option>Sekretaris</option>
                  </select>
                </div>

               
                <div class="form-group">
                    <label for="exampleInputPassword1">Alamat</label>
                    <input type="text" class="form-control" name="alamat" >                    
                </div>
                <div class="col-md-6" style="padding:0">
                <div class="form-group">
                    <label for="exampleInputPassword1">RT</label>
                    <input type="text" class="form-control" name="rt" >                    
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Kecamatan</label>
                    <input type="text" class="form-control" name="kecamatan" >
                </div>
                
                </div>
                <div class="col-md-6" >
                <div class="form-group">
                    <label for="exampleInputPassword1">RW</label>
                    <input type="text" class="form-control" name="rw" >
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Kabupaten / Kota</label>
                    <input type="text" class="form-control" name="kabupaten" >                    
                </div>
                </div>
                <div class="form-group">  
                    <label for="exampleInputPassword1">Provinsi</label>
                    <input type="text" class="form-control" name="provinsi" >                    
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