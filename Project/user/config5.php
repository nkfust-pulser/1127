<?php
include("user-profile-information.php");
?>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link  href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/bootstrap.css" rel="stylesheet">
  <!-- Custom CSS -->
  <link href="css/profile-sidebar.css" rel="stylesheet">
  <title>Login</title>
  <style>
    input[type="text"] {
      height:45px;
    }
  </style>

</head>


<body>
  <nav class="navbar navbar-inverse navbar-fixed-top" style="margin-bottom: 0px;">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a href="dash4.php" class="navbar-brand" href="#" ><span class="glyphicon glyphicon-home"></span></a><label class="navbar-brand label-header">PULSER 2.0</label>
      </div>

      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right" style="font-size: 20px;">

                <li><a href="index.php"><span class="glyphicon glyphicon-home"></span></a></li>
                <li><a href="config5.php"><span class="glyphicon glyphicon-user">
                    <label  style="font-family:verdana;padding-left:5px;"><?php echo $row["user_email"]?></label></span></a></li>
                <li><a href="register.php"><span class="glyphicon glyphicon-log-in"></span></a></li>
                <li class="dropdown">
                  <a class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-cog"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">個人化設定</a></li>
                    <li><a href="#">裝置設定</a></li>
                </ul>
            </li>

        </ul>
      </div>
    </div>
  </nav>



  <div class="container" >
    <div class="row">
      <div class="col-md-3">
        <div style="height:20px;">

        </div>

        <div class="panel panel-red">
          <div class="panel-heading">
            <div class="row">
              <div class="col-xs-12 text-left">
                <div style="font-size: 23px;">

                </div>
              </div>
            </div>
          </div>

          <div class="panel-footer">
            <span class="pull-left">
              <div style="font-size: 15px;">
                <i class="fa fa-user-circle-o" aria-hidden="true" style="font-size: 20px;margin-right: 10px;"></i>使用者帳號@ <?php echo $row["userid"]?>
              </div>
            </span>
            <div class="clearfix"></div>
          </div>

        </div>

        <ul class="sidebar-nav nav nav-pills nav-stacked shadow">

          <li class="active">
            <a href="#"><i class="fa fa-address-card-o" aria-hidden="true" style="font-size:20px;margin-right: 10px;"></i>個人資訊設定</a>
          </li>
          <li>
            <a href="#"><i class="fa fa-lock" aria-hidden="true" style="font-size:20px;margin-right: 10px;"></i>隱私與安全</a>
          </li>
          <li>
            <a href="#"><i class="fa fa-mobile" aria-hidden="true" style="font-size:20px;margin-right: 10px;"></i>裝置設定</a>
          </li>
          <li>
            <a href="#"><i class="fa fa-book" aria-hidden="true" style="font-size:20px;margin-right: 10px;"></i>說明</a>
          </li>
          <li>
            <a href="#"><i class="fa fa-users" aria-hidden="true" style="font-size:20px;margin-right: 10px;"></i>關於我們</a>
          </li>
          <li>
            <a href="#"><i class="fa fa-phone-square" aria-hidden="true" style="font-size:20px;margin-right: 10px;"></i>聯絡我們</a>
          </li>
          <div class="clearfix"></div>
        </ul>

        <div style="height:20px;">

        </div>

        <div class="panel">
          <div class="panel-footer">
            <span class="pull-left">
              <div style="font-size: 15px;">
                <i class="fa fa-cc" aria-hidden="true" style="font-size: 20px;"></i>
                <label style="font-family: Arial Black, sans-serif;margin:0;padding:0;">PULSER 2.0@2017</label>
              </div>
            </span>
            <div class="clearfix"></div>
          </div>
        </div>


      </div>




      <div class="col-md-8">
        <div class="panel ">

          <div class="panel-heading" style="background-color: #038480">
            <div class="row">
              <div class="col-xs-12 text-left" style="padding-left: 20px;">
                <div style="font-size: 30px;color:#ffffff;font-weight: bold;">個人資訊</div>
              </div>
            </div>
          </div>

          <div class="panel-footer">
            <form>
              <div class="row">
                <div class="col-md-5 form-group">
                  <label style="font-size: 22px;padding-left: 10px;font-weight: normal;">使用者姓名</label>
                  <input type="text" class="form-control" style="font-size:16px;" value ="<?php echo $row["user_real_name"];?>">
                </div>
              </div>

              <div class="row">
                <div class="col-md-8 form-group">
                  <label style="font-size: 22px;padding-left: 10px;font-weight: normal;">信箱</label>
                  <input type="text" class="form-control" style="font-size:16px;" 
                  value ="<?php echo $row["user_email"];?>">
                </div>
              </div>

              <div class="row">
                <div class="col-md-8 form-group">
                  <label style="font-size: 22px;padding-left: 10px;font-weight: normal;">出生日期</label>
                  <div class="row">
                    <div class="col-md-4">
                    	<label>年</label>
                      <input type="text" class="form-control" style="font-size:16px;" 
                  value ="<?php echo $year;?>">
                    </div>

                    <div class="col-md-4">
                    	<label>月</label>
                      <input type="text" class="form-control" style="font-size:16px;" 
                  value ="<?php echo $month;?>">
                    </div>

                    <div class="col-md-4">
                    	<label>日</label>
                      <input type="text" class="form-control" style="font-size:16px;" 
                  value ="<?php echo $day;?>">
                    </div>

                  </div>

                </div>
              </div>

              <div class="row">
                <div class="col-md-4 form-group">
                  <label style="font-size: 22px;padding-left: 10px;font-weight: normal;">性別</label>
                  <input type="text" class="form-control" style="font-size:16px;" 
                  value ="<?php echo $row["user_sex"];?>">
                </div>
              </div>

              <div class="row">
                <div class="col-md-8 form-group">
                  <label style="font-size: 22px;padding-left: 10px;font-weight: normal;">地區</label>
                  <input type="text" class="form-control" style="font-size:16px;"
                   value ="<?php echo $row["user_address"];?>">
                </div>
              </div>

              <div class="row">
                <div class="col-md-7 form-group">
                  <label style="font-size: 22px;padding-left: 10px;font-weight: normal;">連絡電話</label>
                  <input type="text" class="form-control" style="font-size:16px;"
                   value ="<?php echo $row["user_phonenumber"];?>">
                </div>
              </div>

              <div class="row">
                <div class="col-md-10 form-group">
                  <div class="row">

                    <div class="col-md-4 form-group">
                      <label style="font-size: 22px;padding-left: 10px;font-weight: normal;">身高</label>
                      <input type="text" class="form-control" style="font-size:16px;"
                       value ="<?php echo $row["user_height"];?>">
                    </div>

                    <div class="col-md-4 form-group">
                      <label style="font-size: 22px;padding-left: 10px;font-weight: normal;">體重</label>
                      <input type="text" class="form-control" style="font-size:16px;"
                       value ="<?php echo $row["user_weight"];?>">
                    </div>

                  </div>

                </div>


              </div>



            </form>
          </div>

        </div>
      </div>

    </div>
  </div>

</body>
<?php
mysqli_close($link);
?>


</html>
