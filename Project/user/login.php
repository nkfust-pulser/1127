<?php
   include("connect_account.php");
   session_start();

   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form

      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']);

      $sql = "SELECT * FROM users WHERE username = '$myusername' AND password = '$mypassword' ";
      $result = mysqli_query($db,$sql);

      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];

      $count = mysqli_num_rows($result);

      // If result matched $myusername and $mypassword, table row must be 1 row

      if($count == 1) {
          $_SESSION[$myusername];
         $_SESSION['username'] = $myusername;

         header("location: dash4.php");
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>

<html lang="zh-Hant">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PULSER 2.0</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
      <link rel="stylesheet" href="css/login.css">
    </head>


    <body>
      <form method="post" action="">

        <div class="container">
          <div class="col-lg-4 col-md-3 col-sm-2"></div>
          <div class="col-lg-4 col-md-6 col-sm-8">
            <div class="logo">歡迎使用PULSER 2.0</div>
            <div class="row loginbox">
              <div class="col-lg-12 text-center"> <span class="singtext">PUSLER 2.0</span> </div>
              <div class="col-lg-12 col-md-12 col-sm-12">
                <input class="form-control" name="username" type="text" placeholder="請輸入帳號...">
              </div>
              <div class="col-lg-12  col-md-12 col-sm-12">
                <input class="form-control" name="password" type="password" placeholder="請輸入密碼...">
              </div>
              <div class="col-lg-12  col-md-12 col-sm-12">
                <input type="hidden" name="refer" value="
                <?php echo (isset($_GET['refer'])) ? $_GET['refer'] : 'login.php'; ?>">
                <button type="submit" class="btn submitButton">
                  登入 </a>
                </div>
                <br>
              </div>
              <div class="col-lg-4 col-md-3 col-sm-2"></div>
            </div>
          </form>
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
          <script src="js/bootstrap.min.js"></script>
        </body>
        </html>
