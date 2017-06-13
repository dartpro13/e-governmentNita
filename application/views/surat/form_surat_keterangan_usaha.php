 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      
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
            <form role="form" action="<?php echo site_url() ?>/proses/simpan_surat_keterangan_usaha" method="POST">
              <div class="box-body">
                <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama</label>
                  <input type="text" class="form-control" name="nama" >
                </div>

                </div>

                <div class="col-md-6">
                
                 <div class="form-group">
                  <label for="exampleInputPassword1">Jabatan</label>
                 <select class="form-control" name="jabatan">
                    <option>Kepala Desa</option>
                    <option>Kaur</option>
                    <option>Sekretaris</option>
                  </select>
                </div>

                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-header with-border">
              <h3 class="box-title">Dengan ini menyatakan bahwa</h3>
            </div>

              <?php 
              foreach ($penduduk as $data) {
              
              }
               ?>

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
                 <textarea name="keperluan" class="form-control" style="height:30vh;"></textarea>
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