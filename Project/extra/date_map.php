<?php
include("user-profile-information.php");
?>
<?php
$map = $date = $hour = $minute = "";
if ($_SERVER["REQUEST_METHOD"] == "GET"){
    if(isset($_GET["which_map"])){
        $map = $_GET["which_map"];
    }
    if(isset($_GET["which_date"])){
        $date = $_GET["which_date"];
        
    }
    if(isset($_GET["which_hour"])){
        $hour = $_GET["which_hour"];

    }
    if(isset($_GET["which_minute"])){
        $minute = $_GET["which_minute"];
    }
    if(!(empty($date))){
        $tempDate = $date;
        $python = "D:\\Python36\\python.exe";
        $pythonscript = "C:\\xampp\\htdocs\\Project\\python\\ff3-4.py";
        $tempString = explode("-",$tempDate);

        $tempHour = $hour;
        if((int)$hour < 10 )
            $hour = '0'.$hour;
        if((int)$minute < 10)
            $minute = '0'.$minute;

        $item = $tempString[0].$tempString[1].$tempString[2].'-'.$hour.$minute.'-'.$row["userid"];
        echo ("$item");
        $cmd = exec("$python pythonscript $item");
        echo ("$cmd");

    }
}

?>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css" />
    <script type="text/javascript" src="https://code.jquery.com/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="http://d3js.org/d3.v3.min.js" charset="utf-8"></script>
    
    <style>
    path {stroke-width: 4;fill: none;}
    .axis {shape-rendering: crispEdges;}
    .x.axis line {stroke: lightgrey;}
    .x.axis .minor {stroke-opacity:.5;}
    .x.axis path {display: none;}
    .y.axis line, .y.axis path {fill: none;stroke: #000;stroke-width: 1;}
</style>

<title>Date and Map</title>

<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/bootstrap.css" rel="stylesheet">
<!-- Custom CSS -->
<link href="css/simple-sidebar.css" rel="stylesheet">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/admin.css">
    <link rel="stylesheet" href="custom_css/date_map_css.css">
</head>

<body style="background-color: white;" onload="additems();">

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper" style="padding-left:0px;left:0px;">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <p style="margin:0px;">PULSER 2.0</p>
                </li>
                <li>
                    <a href="dash4.php"><span class="glyphicon glyphicon-equalizer"  style="padding-right:4px;"></span>   儀表板</a>
                </li>
                <li>
                    <a href="date_map1.php"><span class="glyphicon glyphicon-th-list"  style="padding-right:4px;"></span>   紀錄搜尋</a>
                </li>
                <li>
                    <a href="#"><span class="glyphicon glyphicon-user" style="padding-right:4px;"></span>   社群</a>
                </li>
                <li>
                    <a href="#"><span class="glyphicon glyphicon-book" style="padding-right:4px;"></span>   說明</a>
                </li>
                <li>
                    <a href="#"><span class="glyphicon glyphicon-info-sign" style="padding-right:4px;"></span>   關於我們</a>
                </li>
                <li>
                    <a href="#"><span class="glyphicon glyphicon-earphone" style="padding-right:4px;"></span>   聯絡我們</a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid" style="padding-right: 0px;padding-left: 0px;background-color: #110f0f;margin-bottom: 0px;">

                <ul class="nav navbar-nav navbar-right" style="margin-right: 0px; ">
                    <li>
                        <a href="" style="font-size:18px;color:#adadba;">
                            <span class="glyphicon glyphicon-bell"></span>   提醒
                        </a>
                    </li>
                    <li>
                        <a href="config5.php" style="font-size:18px;color:#adadba;">
                            <span class="glyphicon glyphicon-user"></span>   <?php echo $row["user_email"]?>
                        </a>
                    </li>
                    <li>
                        <a href="user_login.php" style="font-size:18px;color:#adadba;">
                            <span class="glyphicon glyphicon-log-in" ></span>   登出
                        </a>
                    </li>
                    <li class="dropdown">
                      <a class="dropdown-toggle" type="button" data-toggle="dropdown" href="#" style="font-size:20px;color:#adadba;">
                          <span class="glyphicon glyphicon-cog"></span>
                      </a>
                      <ul class="dropdown-menu" style="text-align: center;font-size:15px;">
                        <li><a href="#">個人化設定</a></li>
                        <li><a href="#">帳號管理</a></li>
                        <li><a href="#">通知設定</a></li>
                        <li><a href="#">裝置設定</a></li>
                        <li class="divider"></li>
                        <li><a href="#">關於我們</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- /#page-content-wrapper -->


<div id="page-wrapper">

    <div class="container-fluid" style="padding-left:270px;">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class="page-header">
                    紀錄搜尋
                </h1>
            </div>
            <div class="clearfix">
            </div>
            <div class="text-center">
             <ol class="breadcrumb">
              <li>
                <span style="font-size:18px;color:#000;" class="glyphicon glyphicon-calendar"></span>
                <label id="DATE" style="font-size:18px;color:#000;font-weight: normal;"></label></li>
                <li>
                    <a href="date_map1.php" style="font-size:18px;color:#adadba;">
                        <span class="glyphicon glyphicon-remove" style="color:#870012;"></span>無配對使用裝置
                    </a>
                </li>
            </ol>
        </div>
    </div>
    <!-- /.row -->
    <div class="date_map_page-content text-center">
        <!--beginning of date and pick div-->
        <form method="get" action="date_map1.php">
            <div class="map_and_datepicker">
                <div class="map_and_datepicker_padding text-left">
                    <!--map-select-->
                    <div>
                        <div class="date_map_select">
                            <label>選擇圖型:</label>
                            <select id="map_select" name="which_map">
                              <option value="raw" <?php if("raw" == $map) echo "selected = 'selected'"?>>原始圖型</option>
                              <option value="fft" <?php if("fft" == $map) echo "selected = 'selected'"?>>FFT圖型</option>
                              <option value="fft_30" 
                              <?php if("fft_30" == $map) echo "selected = 'selected'"?>>FFT-30圖型</option>
                          </select>
                          <div></div>
                      </div>
                  </div>
                  <!--map-select-->
                  <div style="height:20px;"></div>
                  <!--datepicker-->
                  <div>
                    <div class="date_map_input_datepicker">
                        <label>選擇日期:</label>
                        <input id="thedate" type="text" class="datepicker_input_text" name="which_date" 
                        value=<?php echo $date?>>
                        <span class="glyphicon glyphicon-calendar"></span>
                    </div>
                </div>
                <!--datepicker-->
                <div style="height:20px;"></div>
                <!--time-->
                <div>
                    <div class="timepicker">
                        <label id="title">選擇時間:</label>
                        <select id="timepicker_select_hour" name = "which_hour">
                            <option <?php if($hour == $hour) echo "selected = 'selected'"?>><?php echo $hour?></option>
                        </select>
                        <label id="timepicker_hour">時</label>
                        <select id ="timepicker_select_minute" name ="which_minute">
                            <option 
                            <?php if($minute == $minute) echo "selected = 'selected'"?>><?php echo $minute?> 
                            </option>
                        </select>
                        <label id="timepicker_minute">分</label>
                    </div>
                </div>
                <!--time-->
                <!--input-button-ok-->
                <div>
                    <div class="input_button_ok">
                        <div class="text-right input_button_padding">
                            <input type="submit" value="確認">
                        </div>
                    </div>
                </div>
                <!--input-button-ok-->
            </div>
        </div>
    </form>
    <!--end of date and pick div-->
    <div style="height:30px;"></div>
    <!--beginning of map div-->
    <div class="map_div">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title map_div_h3">
                    <i class="fa fa-bar-chart-o fa-fw"></i>
                    <label id="map_label">原始圖形</label>
                </h3>
            </div>
            <div class="panel-body">
                <div id="graph" class="aGraph">
                </div>
            </div>
        </div>

    </div>
    <!--end of map div-->
</div>
</div>

</div>

<!-- /.row -->

</div>
<!-- /#wrapper -->
</div>

<!-- jQuery -->

<!-- Bootstrap Core JavaScript -->
<script type='text/javascript' src='//code.jquery.com/jquery-2.0.2.js'></script>                       
<script type="text/javascript" src="//code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<link rel="stylesheet" type="text/css" href="//code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
<script src="js/bootstrap.min.js"></script>
<script src="js/nonemap.js"></script>
<script src="js/date_map_map.js"></script>
<script src="js/datepicker.js"></script>
<script src="js/today_date.js"></script>


<script type='text/javascript'>
    $( document ).ready(function() {

        d3.select("svg").remove();
        var x = document.getElementById("map_select").value;
        if(x == 'raw'){
            x = "原始圖型";
            $.ajax({
                type: 'GET',
                url: 'fromPython.php',
                dataType: "json",  
                success: function(data) {
                    getRaw(data[5]);
                },
                error: function() {
                    alert("ERROR");
                }
            });
        }
        else if(x == 'fft')
        {
            x = "FFT圖型";
            $.ajax({
                type: 'GET',
                url: 'fromPython.php',
                dataType: "json",  
                success: function(data) {
                    getFFT30(data[4],data[0]);
                },
                error: function() {
                    alert("ERROR");
                }
            });
        }
        else{
            x = "FFT-30圖型";
            $.ajax({
                type: 'GET',
                url: 'fromPython.php',
                dataType: "json",  
                success: function(data) {
                    getFFT(data[4],data[0]);
                },
                error: function() {
                    alert("ERROR");
                }
            });
        }
        document.getElementById("map_label").innerHTML = x;

});
</script>
<script>
 function additems(){
    var select_hour = document.getElementById("timepicker_select_hour");
    var n=1;
    for(n=1;n<=24;n++)
    {
        if(n<10)
        {
            var h = '0'+n;
            select_hour.options[select_hour.options.length] = new Option(h, n);
        }
        else{
            select_hour.options[select_hour.options.length] = new Option(n, n);
        }
    }
    var select_minute = document.getElementById("timepicker_select_minute");
    for(n=1;n<=60;n++)
    {
        if(n<10)
        {
            var m = '0'+n;
            select_minute.options[select_minute.options.length] = new Option(m, n);
        }
        else{
            select_minute.options[select_minute.options.length] = new Option(n, n);
        }
    }
}
</script>

<?php
mysqli_close($link);
?>

</body>

</html>

