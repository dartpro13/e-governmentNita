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
            <?php if($status=="edit"){
            foreach ($penduduk as $data) {

            }
              ?><form role="form" action="<?php echo site_url() ?>/proses/edit_penduduk_act/<?= $idS;?>" method="POST">
              <?php
            } else if($status=="create"){
              ?><form role="form" action="<?php echo site_url() ?>/proses/input_penduduk" method="POST">
              <?php
            }?>
              <div class="box-body">
                <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nik</label>
                  <?php if($status=="edit"){
                    
              ?>
                    <input type="number" class="form-control" name="nik" value="<?=$data->nik;?>">
                    <?php
            } else if($status=="create"){
              ?><input type="number" class="form-control" name="nik" >
                <?php
            }?>    
                </div>
                
                <div class="form-group">
                  <label for="exampleInputPassword1">Nama</label>
                  <?php if($status=="edit"){
                    
              ?>
                  <input type="text" class="form-control" name="nama" placeholder="Masukan Nama"value="<?=$data->nama;?>">
                   <?php
            } else if($status=="create"){
              ?><input type="text" class="form-control" name="nama" placeholder="Masukan Nama">
                     <?php
            }?> 
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
                   <?php if($status=="edit"){
                    
              ?>
                  <input type="text" class="form-control" name="tmp" value="<?=$data->tmp_lahir;?>">
                  <?php
            } else if($status=="create"){
              ?><input type="text" class="form-control" name="tmp" >
                   <?php
            }?> 
                </div>
                
                </div>

                <div class="col-md-6">
                
                 <div class="form-group">
                  <label for="exampleInputPassword1">Tgl Lahir</label>
                  <?php if($status=="edit"){
                    
              ?>
                  <input type="date" class="form-control" name="tgl" value="<?=$data->tgl_lahir;?>">
                  <?php
            } else if($status=="create"){
              ?><input type="date" class="form-control" name="tgl" >
                      <?php
            }?> 
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
                  <?php if($status=="edit"){
                    
              ?>
                 <input type="text" class="form-control" name="pekerjaan" value="<?=$data->pekerjaan;?>">
                 <?php
            } else if($status=="create"){
              ?><input type="text" class="form-control" name="pekerjaan" >
                      <?php
            }?> 
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
                  <a href="/pa_nita/index.php/dashboard/"><button type="button" class="btn btn-warning">Cancel</button></a>
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