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

<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'you850407');
define('DB_DATABASE', 'members');
$link = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

if(!$link){echo "connect error</br>";}
else{echo "successful connected</br>";}

$sql = "SELECT * FROM users_information";

mysqli_query($link, 'SET CHARACTER SET big5');
mysqli_query($link, "SET collation_connection = 'big_chinese_ci'");

$result = mysqli_query($link, $sql);
while($row = mysqli_fetch_assoc($result)){
  echo $row["username"]."-".$row["user_birthday"]."</br>";
}
mysqli_free_result($result);


mysqli_close($link);
?>

<body>
  <nav class="navbar navbar-inverse navbar-fixed-top" style="margin-bottom: 0px;">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#" ><span class="glyphicon glyphicon-home"></span></a><label class="navbar-brand label-header">PULSER 2.0</label>
      </div>

      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="" style="font-size:18px;"><span class="glyphicon glyphicon-user" style="padding-right:5px;"></span>使用者(名稱)</a></li>
          <li><a href="logout.php" style="font-size:18px;"><span class="glyphicon glyphicon-log-out" style="padding-right:5px;"></span>登出</a></li>
          <li><a href="" style="font-size:18px;"><span class="glyphicon glyphicon-cog"></span></a></li>
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
                <i class="fa fa-user-circle-o" aria-hidden="true" style="font-size: 20px;margin-right: 10px;"></i>使用者帳號
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
                  <input type="text" placeholder="請輸入姓名...." class="form-control" style="font-size:16px;">
                </div>
              </div>

              <div class="row">
                <div class="col-md-8 form-group">
                  <label style="font-size: 22px;padding-left: 10px;font-weight: normal;">信箱</label>
                  <input type="text" placeholder="example@mail.com...." class="form-control" style="font-size:16px;">
                </div>
              </div>

              <div class="row">
                <div class="col-md-8 form-group">
                  <label style="font-size: 22px;padding-left: 10px;font-weight: normal;">出生日期</label>
                  <div class="row">
                    <div class="col-md-4">
                      <select class="form-control" id="date-year">
                        <option value="none-day" selected>請選擇年分</option>
                        <option value="2017">2017</option>
                        <option value="2016">2016</option>
                        <option value="2015">2015</option>
                        <option value="2014">2014</option>
                        <option value="2013">2013</option>
                        <option value="2012">2012</option>
                      </select>
                    </div>

                    <div class="col-md-4">
                      <select class="form-control" id="date-month">
                        <option value="none-month" selected>請選擇月份</option>
                        <option value="1">1月</option>
                        <option value="2">2月</option>
                        <option value="3">3月</option>
                        <option value="4">4月</option>
                        <option value="5">5月</option>
                        <option value="6">6月</option>
                        <option value="7">7月</option>
                        <option value="8">8月</option>
                        <option value="9">9月</option>
                      </select>
                    </div>

                    <div class="col-md-4">
                      <select class="form-control" id="date-day">
                        <option value="none-day" selected>請選擇日</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                      </select>
                    </div>

                  </div>

                </div>
              </div>

              <div class="row">
                <div class="col-md-4 form-group">
                  <label style="font-size: 22px;padding-left: 10px;font-weight: normal;">性別</label>
                  <select class="form-control" id="gender">
                    <option value="none-day" selected>請選擇性別</option>
                    <option value="1">男性</option>
                    <option value="2">女性</option>
                    <option value="3">其他</option>
                  </select>
                </div>
              </div>

              <div class="row">
                <div class="col-md-8 form-group">
                  <label style="font-size: 22px;padding-left: 10px;font-weight: normal;">地區</label>
                  <input type="text" placeholder="請選擇地區...." class="form-control" style="font-size:16px;">
                </div>
              </div>

              <div class="row">
                <div class="col-md-7 form-group">
                  <label style="font-size: 22px;padding-left: 10px;font-weight: normal;">連絡電話</label>
                  <input type="text" placeholder="請輸入連絡電話...." class="form-control" style="font-size:16px;">
                </div>
              </div>

              <div class="row">
                <div class="col-md-10 form-group">
                  <div class="row">

                    <div class="col-md-4 form-group">
                      <label style="font-size: 22px;padding-left: 10px;font-weight: normal;">身高</label>
                      <input type="text" placeholder="身高cm" class="form-control" style="font-size:16px;">
                    </div>

                    <div class="col-md-4 form-group">
                      <label style="font-size: 22px;padding-left: 10px;font-weight: normal;">體重</label>
                      <input type="text" placeholder="體重kg" class="form-control" style="font-size:16px;">
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


</html>
