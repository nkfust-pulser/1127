<?php
require_once("connect_members.php");

$username = $password = "";
$username_err = $password_err = "";

if($_SERVER["REQUEST_METHOD"] == "POST")
{
  if(empty(trim($_POST["user_enter_username"]))){$username_err = '請輸入帳號';} 
  else{$username = trim($_POST["user_enter_username"]);}
  if(empty(trim($_POST['user_enter_password']))){$password_err = '請輸入密碼';} 
  else{$password = trim($_POST['user_enter_password']);}

    // Validate credentials
  if(empty($username_err) && empty($password_err))
  {
    $sql = "SELECT userid, password FROM members_account WHERE userid = ?";
    if($stmt = mysqli_prepare($link, $sql))
    {
    // Bind variables to the prepared statement as parameters
      mysqli_stmt_bind_param($stmt, "s", $param_username);
      // Set parameters
      $param_username = $username;
      // Attempt to execute the prepared statement
      if(mysqli_stmt_execute($stmt))
      { 
      // Store result
        mysqli_stmt_store_result($stmt);
      // Check if username exists, if yes then verify password
        if(mysqli_stmt_num_rows($stmt) == 1)
        { 
        // Bind result variables
          mysqli_stmt_bind_result($stmt, $username, $hashed_password);
          if(mysqli_stmt_fetch($stmt))
          {
            var_dump($hashed_password);
            var_dump($password);
            var_dump(password_verify($password, $hashed_password));
            if(password_verify($password, $hashed_password))
            {
              session_start();
              $_SESSION['login_user'] = $username;      
              header("location: profile.php");
            } 
            else{
              // Display an error message if password is not valid
              $password_err = '輸入密碼錯誤';
            }
          }
        } 
        else{
          $username_err = '找不到該帳號';
        }
      }
      else{
        echo "帳號或密碼錯誤!請重新輸入";
      }
    }
    mysqli_stmt_close($stmt);
  }
  mysqli_close($link);
}
?>
<html lang="zh-Hant">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PULSER 2.0</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="jquery-3.2.1.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!--external-css-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <!--custom-css-->
    <link href="custom_css/login_css.css" rel="stylesheet">
  </head>


  <body>

    <div>
      <div id="page-content-wrapper">
        <div class="container-fluid topnav_css">

          <ul class="nav navbar-nav navbar-left">
            <li><label id="title_css">PULSER 2.0</label></li>
            <li><a href="#"><label>產品</label></a></li>
            <li><a href="#"><label>應用程式</label></a></li>
            <li><a href="#"><label>說明</label></a></li>
            <li><a href="#"><label>服務</label></a></li>
            <li><a href="index.php"><span class="fa fa-home"></span></a></li>
          </ul>

          <ul class="nav navbar-nav navbar-right title_right">
            <li><a href="register.php"><label>註冊</label></a></li>
            <li><a><span class="fa fa-fa"></span></a></li>
            <li><a><span class="fa fa-facebook-official"></span></a></li>
            <li><a><span class="fa fa-instagram"></span></a></li>
            <li><a><span class="fa fa-google-plus-official"></span></a></li>
          </ul>

        </div>
      </div>
    </div>


    <div class="topnav_and_form_padding"></div>

    <form id = "myForm" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

      <div class="container">

        <div>
          <div class="loginbox">

            <div class="text-center form_title_padding"> 
              <span class="singtext2">PUSLER 2.0</span>
            </div>

            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
              <label class="form_label">帳號</label>
              <input class="form-control" name="user_enter_username" type="text" 
              value="<?php echo $username?>">
              <span class="help-block"><?php echo $username_err; ?></span>
            </div>

            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
              <label class="form_label">密碼</label>
              <input class="form-control" name="user_enter_password" type="password">
              <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            <div class="form_inside_padding"></div>
            <div class="text-center">
              <input type="hidden" name="refer" value=" <?php echo (isset($_GET['refer'])) ?$_GET['refer']:'login.php';?>">
              <button type="submit" class="btn submitButton">登入</button>
            </div>
          </div>

        </div>

      </form>


      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script type="text/javascript">
        $( document ).ready(function() {
          $('#myForm')[0].reset();
        });
      </script>
    </body>
    </html>
