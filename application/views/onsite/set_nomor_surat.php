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

    <div class="container">
      <p><br/></p>
      <center>
      <a class="form-inline" href="<?= base_url()?>index.php/onsite/">
        <button type="button" class="btn btn-primary">
          back
        </button>
      </a>
      <input type="text" class="form-inline" value="<?= $kodeSurat.'/'.$tanggal.'/'.$bulan.'/'.$tahun.'/'.$jam.'/'.$menit?>" readonly>
      <?php
        $ks="";
        if($kodeSurat=="SKB"){
          $ks="surat_kelakuan_baik";
        }else if($kodeSurat=="SKL"){
          $ks="surat_keterangan_lahir";
        }else if($kodeSurat=="SPKTP"){
          $ks="surat_pengantar_ktp";
        }else if($kodeSurat=="SPKK"){
          $ks="surat_pengantar_kk";
        }else if($kodeSurat=="SKD"){
          $ks="surat_keterangan_domisili";
        }else if($kodeSurat=="SKP"){
          $ks="surat_keterangan_pindah";
        }else if($kodeSurat=="SKPJ"){
          $ks="surat_keterangan_pas_jalan";
        }else if($kodeSurat=="SKU"){
          $ks="surat_keterangan_usaha";
        }else if($kodeSurat=="SPRH"){
          $ks="surat_pengesahan_riwayat_hidup";
        }else if($kodeSurat=="SPKB"){
          $ks="surat_pengesahan_kredit_bank";
        }
       ?>
      <a class="form-inline" href="<?= base_url()?>index.php/onsite/<?=$ks.'/'.$kodeSurat.'/'.$tanggal.'/'.$bulan.'/'.$tahun.'/'.$jam.'/'.$menit?>">
        <button type="button" class="btn btn-primary">
          next
        </button>
      </a>
          </center>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
