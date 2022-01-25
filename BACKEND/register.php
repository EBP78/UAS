<!DOCTYPE html>

<html class="loading" lang="en" data-textdirection="ltr">
<?php
  include "includes/config.php";
  ob_start();
  session_start();
  if(isset($_POST['register'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $check = "select * from admin where adminEmail = '$email';";
    $check_run = mysqli_query($connection, $check);
    if (mysqli_num_rows($check_run)<1){
      $pass = $_POST['password'];
      $retype = $_POST['retype'];
      if($username != ""){
        if($email != ""){
          if($pass != ""){
            if ($pass == $retype){
              $pass = md5($_POST['password']);
              $query = "insert into admin values (null, '$username', '$email', '$pass');";
              $query_run = mysqli_query($connection, $query);
              header("location:login.php");  
            } else{
              echo "<script>
                    alert('password dan retype password masih belum sama!!!');
                    document.location='register.php'
              </script>";
            }
          } else{
            echo "<script>
              alert('password anda kosong');
              document.location='register.php'
            </script>";
          }
        } else {
          echo "<script>
              alert('email anda kosong');
              document.location='register.php'
            </script>";
        }
      } else{
        echo "<script>
              alert('username anda kosong');
              document.location='register.php'
            </script>";
      }
    } else{
      echo "<script>
              alert('email telah terdaftar!!!');
              document.location='register.php'
        </script>";
    }
  }
?>
  <!-- BEGIN: Head-->
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google.">
    <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template, eCommerce dashboard, analytic dashboard">
    <meta name="author" content="ThemeSelect">
    <title>EBP - BackEnd - Register</title>
    <link rel="apple-touch-icon" href="app-assets/images/favicon/apple-touch-icon-152x152.png">
    <link rel="shortcut icon" type="image/x-icon" href="app-assets/images/favicon/favicon-32x32.png">
    <link href="app-assets/css/icon.css?family=Material+Icons" rel="stylesheet">
    <!-- BEGIN: VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/vendors.min.css">
    <!-- END: VENDOR CSS-->
    <!-- BEGIN: Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/themes/vertical-dark-menu-template/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/themes/vertical-dark-menu-template/style.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/pages/register.min.css">
    <!-- END: Page Level CSS-->
    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/custom/custom.css">
    <!-- END: Custom CSS-->
  </head>
  <!-- END: Head-->
  <body class="vertical-layout page-header-light vertical-menu-collapsible vertical-dark-menu preload-transitions 1-column register-bg   blank-page blank-page" data-open="click" data-menu="vertical-dark-menu" data-col="1-column">
    <div class="row">
      <div class="col s12">
        <div class="container"><div id="register-page" class="row">
  <div class="col s12 m6 l4 z-depth-4 card-panel border-radius-6 register-card bg-opacity-8">
    <form class="login-form" method="POST">
      <div class="row">
        <div class="input-field col s12">
          <h5 class="ml-4">Register</h5>
        </div>
      </div>
      <div class="row margin">
        <div class="input-field col s12">
          <i class="material-icons prefix pt-2">person_outline</i>
          <input id="username" type="text" name="username" class="validate">
          <span class="helper-text" data-error="wrong" data-success="right"></span>
          <label for="username" class="center-align">Username</label>
        </div>
      </div>
      <div class="row margin">
        <div class="input-field col s12">
          <i class="material-icons prefix pt-2">mail_outline</i>
          <input id="email" type="email" name="email" class="validate">
          <span class="helper-text" data-error="wrong" data-success="right"></span>
          <label for="email">Email</label>
        </div>
      </div>
      <div class="row margin">
        <div class="input-field col s12">
          <i class="material-icons prefix pt-2">lock_outline</i>
          <input id="password" type="password" name="password" class="validate">
          <span class="helper-text" data-error="wrong" data-success="right"></span>
          <label for="password">Password</label>
        </div>
      </div>
      <div class="row margin">
        <div class="input-field col s12">
          <i class="material-icons prefix pt-2">lock_outline</i>
          <input id="password-again" type="password" name="retype" class="validate">
          <span class="helper-text" data-error="wrong" data-success="right"></span>
          <label for="password-again">Password again</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <button class="btn waves-effect waves-light border-round gradient-45deg-purple-deep-orange col s12" name="register">Register</button>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <p class="margin medium-small"><a href="login.php">Already have an account? Login</a></p>
        </div>
      </div>
    </form>
  </div>
</div>
        </div>
        <div class="content-overlay"></div>
      </div>
    </div>

    <!-- BEGIN VENDOR JS-->
    <script src="app-assets/js/vendors.min.js"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN THEME  JS-->
    <script src="app-assets/js/plugins.min.js"></script>
    <script src="app-assets/js/search.min.js"></script>
    <script src="app-assets/js/custom/custom-script.min.js"></script>
    <!-- END THEME  JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <!-- END PAGE LEVEL JS-->
    <?php
      ob_end_flush();
    ?> 
  </body>
</html>