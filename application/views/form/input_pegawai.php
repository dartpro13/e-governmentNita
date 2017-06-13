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
                <?php if($status=="edit"){
            foreach ($pegawai as $data) {

            }
              ?><form role="form" action="<?php echo site_url() ?>/proses/edit_pegawai_act/<?= $idS;?>" method="POST">
              <?php
            } else if($status=="create"){
              ?><form role="form" action="<?php echo site_url() ?>/proses/input_pegawai" method="POST">
              <?php
            }?>
              <div class="box-body">
                <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputEmail1">NIP</label>
                    <?php if($status=="edit"){
                     ?>
                  <input type="number" class="form-control" name="nip" value="<?=$data->nip?>">
                    <?php }else if($status=="create"){
                    ?>
                    <input type="number" class="form-control" name="nip">
                    <?php
                    }?>
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Nama</label>
                    <?php if($status=="edit"){
                     ?>
                   <input type="text" class="form-control" name="nama" placeholder="Masukan Nama" value="<?=$data->nama?>">
                  <?php }else if($status=="create"){
                    ?>
                     <input type="text" class="form-control" name="nama" placeholder="Masukan Nama">
                  <?php
                    }?>
                </div>
                
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="text" class="form-control" name="password" placeholder="Masukan password">
                </div>
                
                <div class="form-group">
                  <label for="exampleInputPassword1">No HP</label>
                    <?php if($status=="edit"){
                     ?>
                    <input type="number" class="form-control" name="nohp" placeholder="Masukan No HP" value="<?= $data->no_hp;?>">
                    <?php }else if($status=="create"){
                    ?>
                   <input type="number" class="form-control" name="nohp" placeholder="Masukan No HP">
                  <?php
                    }?>
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