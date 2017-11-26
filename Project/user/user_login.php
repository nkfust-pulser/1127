<?php session_start();?>
<?php
   include("connect_account.php");

   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form

      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']);

      $sql = "SELECT * FROM members_account WHERE userid = '$myusername' AND password = '$mypassword' ";
      $result = mysqli_query($db,$sql);

      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];

      $count = mysqli_num_rows($result);

      // If result matched $myusername and $mypassword, table row must be 1 row

      if($count == 1) {
          $_SESSION[$myusername];
         $_SESSION['username'] = $myusername;
         header("location: profile.php?$myusername;");
      }else {
         $error = "登入帳號或密碼錯誤!";
      }
   }
?>
