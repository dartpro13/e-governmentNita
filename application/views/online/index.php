<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title;?></title>
    <link href="<?= base_url().'assets/admin/bootstrap'?>/css/bootstrap.min.css" rel="stylesheet">
    <style>
    body{
      background-color:#DDD;
    }
    </style>
  </head>
  <body>
<small><?=$message;?></small>
    <div class="container">
      <p><br/></p>
      <div class="row">
        <div class="col-md-3">
          <div class="thumbnail">
            <a href="<?=base_url()?>index.php/Online/surat_kelakuan_baik/SKB">
              <img src="<?= $images;?>" alt="Lights" style="width:100%;background-color:cornflowerblue;">
              <div class="caption">
                <center><h5>Surat Kelakuan Baik</h5></center>
              </div>
            </a>
          </div>
        </div>
        <div class="col-md-3">
          <div class="thumbnail">
            <a href="<?=base_url()?>index.php/Upload/upload_persyaratan/SKL">
              <img src="<?= $images;?>" alt="Lights" style="width:100%;background-color:cornflowerblue;">
              <div class="caption">
                <center><h5>Surat Keterangan Lahir</h5></center>
              </div>
            </a>
          </div>
        </div>
        <div class="col-md-3">
          <div class="thumbnail">
            <a href="<?=base_url()?>index.php/Upload/upload_persyaratan/SPKTP">
              <img src="<?= $images;?>" alt="Lights" style="width:100%;background-color:cornflowerblue;">
              <div class="caption">
                <center><h5>Surat Pengantar KTP</h5></center>
              </div>
            </a>
          </div>
        </div>
        <div class="col-md-3">
          <div class="thumbnail">
            <a href="<?=base_url()?>index.php/Upload/upload_persyaratan/SPKK">
              <img src="<?= $images;?>" alt="Lights" style="width:100%;background-color:cornflowerblue;">
              <div class="caption">
                <center><h5>Surat Pengantar KK</h5></center>
              </div>
            </a>
          </div>
        </div>
        <div class="col-md-3">
          <div class="thumbnail">
            <a href="<?=base_url()?>index.php/Upload/upload_persyaratan/SKD">
              <img src="<?= $images;?>" alt="Lights" style="width:100%;background-color:cornflowerblue;">
              <div class="caption">
                <center><h5>Surat Keterangan Domisili</h5></center>
              </div>
            </a>
          </div>
        </div>
        <div class="col-md-3">
          <div class="thumbnail">
            <a href="<?=base_url()?>index.php/Upload/upload_persyaratan/SKP">
              <img src="<?= $images;?>" alt="Lights" style="width:100%;background-color:cornflowerblue;">
              <div class="caption">
                <center><h5>Surat Keterangan Pindah</h5></center>
              </div>
            </a>
          </div>
        </div>
        <div class="col-md-3">
          <div class="thumbnail">
            <a href="<?=base_url()?>index.php/Upload/upload_persyaratan/SKPJ">
              <img src="<?= $images;?>" alt="Lights" style="width:100%;background-color:cornflowerblue;">
              <div class="caption">
                <center><h5>Surat Keterangan Pas Jalan</h5></center>
              </div>
            </a>
          </div>
        </div>
        <div class="col-md-3">
          <div class="thumbnail">
            <a href="<?=base_url()?>index.php/Upload/upload_persyaratan/SKU">
              <img src="<?= $images;?>" alt="Lights" style="width:100%;background-color:cornflowerblue;">
              <div class="caption">
                <center><h5>Surat Keterangan Usaha</h5></center>
              </div>
            </a>
          </div>
        </div>
        <div class="col-md-3">
          <div class="thumbnail">
            <a href="<?=base_url()?>index.php/Upload/upload_persyaratan/SPRH">
              <img src="<?= $images;?>" alt="Lights" style="width:100%;background-color:cornflowerblue;">
              <div class="caption">
                <center><h5>Surat Pengesahan Riwayat Hidup</h5></center>
              </div>
            </a>
          </div>
        </div>
        <div class="col-md-3">
          <div class="thumbnail">
            <a href="<?=base_url()?>index.php/Upload/upload_persyaratan/SPKB">
              <img src="<?= $images;?>" alt="Lights" style="width:100%;background-color:cornflowerblue;">
              <div class="caption">
                <center><h5>Surat Pengesahan Kredit Bank</h5></center>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
