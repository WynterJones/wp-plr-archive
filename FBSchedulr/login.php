<?php 
define('PATH', dirname(__file__));
session_start();
if(file_exists(PATH . '/install.php'))
  header("Location: install.php");
$fail = false;

if(isset($_POST['user']) && isset($_POST['password'])){
  require_once(PATH . '/config.php');


  if(strip_tags($_POST['user'])==$user && strip_tags($_POST['password'])==$psw){
    $_SESSION['logged'] = true;
  }else{
    $fail = true;
  }
}

if(isset($_SESSION['logged']) && $_SESSION['logged']==true)
  header("Location: index.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Le styles -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style type="text/css">
  body {
    padding-top: 40px;
    padding-bottom: 40px;
    background-color: #f5f5f5;
  }

  .form-signin {
    max-width: 300px;
    padding: 19px 29px 29px;
    margin: 0 auto 20px;
    background-color: #fff;
    border: 1px solid #e5e5e5;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
    -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
    -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
    box-shadow: 0 1px 2px rgba(0,0,0,.05);
  }
  .form-signin .form-signin-heading,
  .form-signin .checkbox {
    margin-bottom: 10px;
  }
  .form-signin input[type="text"],
  .form-signin input[type="password"] {
    font-size: 16px;
    height: auto;
    margin-bottom: 15px;
    padding: 7px 9px;
  }

  </style>
  <link href="css/bootstrap-responsive.css" rel="stylesheet">

  <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <![endif]-->

      <!-- Fav and touch icons -->
      <link rel="apple-touch-icon-precomposed" sizes="144x144" href="ico/apple-touch-icon-144-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="114x114" href="ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="ico/apple-touch-icon-72-precomposed.png">
      <link rel="apple-touch-icon-precomposed" href="ico/apple-touch-icon-57-precomposed.png">
      <link rel="shortcut icon" href="ico/favicon.png">
    </head>

    <body>

      <div class="container">

        <form class="form-signin" method="POST">
          <img src="images/logo.png" style="display: block; margin: 0 auto">
          <h2 class="form-signin-heading">Login</h2>
          <input type="text" class="input-block-level" placeholder="User" name="user">
          <input type="password" class="input-block-level" placeholder="Password" name="password">
          <?php
          if($fail){
            ?>
            <div class="alert alert-error">
              <button type="button" class="close" data-dismiss="alert">&times;</button>
              Login fail
            </div>
            <?php
          }
          ?>
          <button class="btn btn-large btn-primary" type="submit">Login</button>

        </form>
      </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
  </body>
  </html>
