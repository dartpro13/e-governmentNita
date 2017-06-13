<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?= $assets.'img/logo.png';?>" sizes="16x16" type="image/png">
    <title><?=$title?></title>

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="<?= $assets.'css/style.css';?>" rel="stylesheet">

</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
    <div class="container">
  
  <div class="row" id="pwd-container">
    <div class="col-md-4"></div>
    
    <div class="col-md-4">
      <section class="login-form">
        <form action="login/login_process" method="post" role="login">
          <img src="<?= $assets.'img/logo.png';?>" class="img-responsive" alt="logo" style="height:200px;" />
          <input type="username" name="username" placeholder="Username" required class="form-control input-lg"/>
          
          <input type="password" name="password" class="form-control input-lg" id="password" placeholder="Password" required="" />
          
          
          <div class="pwstrength_viewport_progress"></div>
          
          
          <button type="submit" name="go" class="btn btn-lg btn-primary btn-block">Sign in</button>
          <div>
<!--            <a href="#">Create account</a> or <a href="#">reset password</a>-->
          </div>
          
        </form>
        
        <div class="form-links">
          <a href="http://www.kantordesa-banjar.com">www.kantordesa-banjar.com</a>
        </div>
      </section>  
      </div>
      <div class="col-md-4"></div>    
  </div>
</div>
     <script src="<?=$assets.'js/login.js';?>"></script>
    </body>
</html>