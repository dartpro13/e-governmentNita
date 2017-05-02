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
      <a class="form-inline" href="<?= base_url()?>index.php/Online/">
        <button type="button" class="btn btn-primary">
          back
        </button>
      </a>
      <form action="<?=base_url();?>/index.php/Upload/upload_act/<?=$kodeSurat;?>" method="post" enctype="multipart/form-data" class="form-inline">
	<input type="file" name="berkas" class="form-inline" />
	  <input type="submit" class="btn btn-primary" value="Next">
          </form>
        </center>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
