<!--
  Author: W3layouts
  Author URL: http://w3layouts.com
  License: Creative Commons Attribution 3.0 Unported
  License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php 
    include "config.php";
    checkJamesDB($host,$user,$password);



  function checkJamesDB($host,$user,$password){
    include "config.php";
    $link = mysql_connect($host, $user, $password);
    $db_list = mysql_list_dbs($link);
    //เช็ค DB 
    $i = 0;
    $cnt = mysql_num_rows($db_list);
    while ($i < $cnt) {
      echo mysql_db_name($db_list, $i).":".$databaseName."<br>";
        if(mysql_db_name($db_list, $i)==$databaseName){
          echo "Found!! ";
          break;
        }
        $i++;
    }
    // $sql = "CREATE DATABASE james";
    // $result = mysql_query($sql);
    // if ($result) {
      // echo "success";
      mysql_select_db($databaseName, $link) or die('Could not select database.');
      $sql = "CREATE TABLE members (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,email VARCHAR(30) NOT NULL,password VARCHAR(40) NOT NULL);";
      $result = mysql_query($sql);
      if ($result) {
          echo "success";
      }else{
          echo "fail";
      }
    // }
    mysql_close($link);
  }

 ?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8" /> 
<!-- Meta tag Keywords -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Sales Inquiry Form Responsive Widget Template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="text/javascript" src="js/jquery.js"></script>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Meta tag Keywords -->
<!-- css files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all">
<link href="css/login.css" rel="stylesheet" type="text/css" media="all">
<!-- //css files -->
<!-- online-fonts -->
<link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login</title>

 
    <link href="css/bootstrap.min.css" rel="stylesheet">


    <link href="css/business-casual.css" rel="stylesheet">


    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

   <div class="brand">Cham-Chan Garden</div>
    <div class="address-bar">Chanthaburi</div>

    <!-- Navigation -->
    <?php include "navbar.php"; ?>
    <?php 
      if(isset($_SESSION["email"])){
        header( "location: cart.php" );
        exit(0);
        return;
      }
     ?>
    <div class="container">

      <div class="row">
          <div class="box">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                  <div class="panel panel-login">
                    <div class="panel-heading">
                      <div class="row">
                        <div class="col-xs-6">
                          <a href="#" class="active" id="login-form-link">Login</a>
                        </div>
                        <div class="col-xs-6">
                          <a href="#" id="register-form-link">Register</a>
                        </div>
                      </div>
                      <hr>
                    </div>
                    <div class="panel-body">
                      <div class="row">
                        <div class="col-lg-12">
                          <form id="login-form" action="authen.php" method="post" role="form" style="display: block;">
                            <div class="form-group">
                              <input type="text" name="login-email" id="email" tabindex="1" class="form-control" placeholder="email" value="">
                            </div>
                            <div class="form-group">
                              <input type="password" name="login-password" id="password" tabindex="2" class="form-control" placeholder="Password">
                            </div>
                            <div class="form-group text-center">
                              <input type="checkbox" tabindex="3" class="" name="remember" id="remember">
                              <label for="remember"> Remember Me</label>
                            </div>
                            <div class="form-group">
                              <div class="row">
                                <div class="col-sm-6 col-sm-offset-3">
                                  <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
                                </div>
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="row">
                                <div class="col-lg-12">
                                  <div class="text-center">
                                    <a href="http://phpoll.com/recover" tabindex="5" class="forgot-password">Forgot Password?</a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </form>
                          <form id="register-form" action="authen.php" method="post" role="form" style="display: none;">
                            <div class="form-group">
                              <input type="email" name="regis-email" id="regis-email" tabindex="1" class="form-control" placeholder="Email Address" value="">
                            </div>
                            <div class="form-group">
                              <input type="password" name="regis-password" id="regis-password" tabindex="2" class="form-control" placeholder="Password">
                            </div>
                            <div class="form-group">
                              <input type="password" name="regis-confirm-password" id="regis-confirm-password" tabindex="2" class="form-control" placeholder="Confirm Password">
                            </div>
                            <div class="form-group">
                              <div class="row">
                                <div class="col-sm-6 col-sm-offset-3">
                                  <input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" id="regisbtn" value="Register Now">
                                </div>
                              </div>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          </div>
      </div>
    <!-- /.container -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script>
      $(function() {
          $('#login-form-link').click(function(e) {
          $("#login-form").delay(100).fadeIn(100);
          $("#register-form").fadeOut(100);
          $('#register-form-link').removeClass('active');
          $(this).addClass('active');
          e.preventDefault();
        });
        $('#register-form-link').click(function(e) {
          $("#register-form").delay(100).fadeIn(100);
          $("#login-form").fadeOut(100);
          $('#login-form-link').removeClass('active');
          $(this).addClass('active');
          e.preventDefault();
        });

      });
      </script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
