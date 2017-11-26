<?php
include("user-profile-information.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="http://d3js.org/d3.v3.min.js" charset="utf-8"></script>

    <style>
    path {stroke-width: 4;fill: none;}
    .axis {shape-rendering: crispEdges;}
    .x.axis line {stroke: lightgrey;}
    .x.axis .minor {stroke-opacity: .5;}
    .x.axis path {display: none;}
    .y.axis line, .y.axis path {fill: none;stroke: #000;stroke-width: 1;}
</style>

<title>Dashboard 4.0</title>

<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/bootstrap.css" rel="stylesheet">
<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
<!-- Custom CSS -->
<link href="custom_css/date_map_top_nav.css" rel="stylesheet">
<link href="custom_css/date_map_css.css" rel="stylesheet">
<link href="custom_css/date_map_sidebar.css" rel="stylesheet">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Custom Fonts -->

</head>

<body>
    <div id="wrapper">
        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand"><p>PULSER 2.0</p></li>
                <li><a href="dash4.php"><span class="glyphicon glyphicon-equalizer"></span>儀表板</a></li>
                <li><a href="date_map1.php"><span class="glyphicon glyphicon-th-list"></span>紀錄搜尋</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-user"></span>社群</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-book"></span>說明</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-info-sign"></span>關於我們</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-earphone"></span>聯絡我們</a></li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div>
            <div class="container-fluid topbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href=""><span class="glyphicon glyphicon-bell"></span>提醒</a></li>
                    <li><a href="config5.php"><span class="glyphicon glyphicon-user"></span><?php echo $row["user_email"]?></a></li>
                    <li><a href="logout.php"><span class="glyphicon glyphicon-log-in" ></span></a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->

    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1 class="page-header">Dashboard 2.0</h1>
                </div>
                <div class="clearfix"></div>
                <div class="text-center dash_title">
                   <ol class="breadcrumb">
                      <li>
                        <a>
                            <span class="glyphicon glyphicon-calendar dash4_today_span"></span>
                        </a>
                        <label id="DATE"></label>
                    </li>
                    <li>
                        <a href="" id="dash4_device_css">
                            <span id="dash4_device_sign" class="glyphicon glyphicon-remove"></span>
                            <label>無配對使用裝置<label>
                            </a>
                        </li>
                    </ol>
                </div>
            </div>
            <!-- /.row -->

            <!-- /.row -->


            <!-- /.row -->
            <div class="date_map_page-content text-center">
                <!--beginning of date and pick div-->
                <form method="get" action="fromPython.php">
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
                                value="<?php echo $date?>">
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
                                <input type="submit" value="確認" onclick="myFunction()">
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

        <!-- table -->
    </div>
    <!-- /.container-fluid -->

</div>

</div>
<!-- /#wrapper -->

<!-- jQuery -->


<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type='text/javascript'></script>

<!--custom_javascript-->

<script src="js/raw.js"></script>
<script src="js/fft.js"></script>
<script src="js/fft_30.js"></script>
<script src="js/12_peaks_table.js"></script>

<?php
mysqli_close($link);
?>

</body>

</html>

