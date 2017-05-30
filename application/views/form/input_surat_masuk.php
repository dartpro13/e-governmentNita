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
              <h3 class="box-title">Yang bertanda tangan dibawah ini</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            
            <?php if($status=="edit"){
            foreach ($surat as $data) {

            }
              ?><form role="form" action="<?php echo site_url() ?>/proses/edit_surat_kelakuan_baik_act/<?= $idS;?>" method="POST">
              <?php
            } else if($status=="create"){
              ?><form role="form" action="<?php echo site_url() ?>/proses/simpan_surat_kelakuan_baik" method="POST">
              <?php
            }?>

              
              <div class="box-body">
                <div class="col-md-6">
                 <div class="form-group">
                  <label for="exampleInputPassword1">Nama Pegawai</label>
                  <input type="text" class="form-control" name="nama" placeholder="Masukan Nama">
                </div>
                
                <div class="form-group">
                  <label for="exampleInputPassword1">No Surat</label>
                  <?php if($status=="edit"){
                    ?><input type="text" class="form-control" name="nomor_surat" value=<?=$data->file?>>
                    <?php
                    } else if($status=="create"){
                    ?><input type="text" class="form-control" name="nomor_surat" placeholder="Masukan Nomor Surat">
                    <?php
                    }?>
                </div>
                
				<div class="form-group">
                  <label for="exampleInputPassword1">Perihal</label>
                   <?php if($status=="edit"){
                    ?><input type="text" class="form-control" name="perihal" value=<?=$data->perihal?> >
                    <?php
                    } else if($status=="create"){
                    ?><input type="text" class="form-control" name="perihal" >
                    <?php
                    }?>
                </div>
				
				<div class="form-group">
                  <label for="exampleInputPassword1">Untuk Tanggal</label>
                  <input type="date" class="form-control" name="tgl" >
                </div>
				
				<div class="form-group">
                  <label for="exampleInputPassword1">Ditujukan</label>
                   <?php if($status=="edit"){
                    $ditujukan = str_replace(" ", "-", $data->ditujukan);
                    ?><input type="text" class="form-control" name="ditujukan" value=<?=$ditujukan;?> >
                    <?php
                    } else if($status=="create"){
                    ?><input type="text" class="form-control" name="ditujukan" >
                    <?php
                    }?>
                </div>
				
				<div class="form-group">
                  <label for="exampleInputPassword1">Jabatan</label>
                  <select class="form-control" name="jabatan">
                    <option>Kepala Desa</option>
                    <option>Sekretaris</option>
                  </select>
                </div>
				
				<div class="form-group">
                  <label for="exampleInputPassword1">Pengirim</label>
                   <?php if($status=="edit"){
                    $pengirim = str_replace(" ", "-", $data->pengirim);
                    ?><input type="text" class="form-control" name="pengirim" value=<?=$pengirim?> >
                    <?php
                    } else if($status=="create"){
                    ?><input type="text" class="form-control" name="pengirim" >
                    <?php
                    }?>
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
