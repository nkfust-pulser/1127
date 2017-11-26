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
<link href="custom_css/dash4_top_nav.css" rel="stylesheet">
<link href="custom_css/dash4_css.css" rel="stylesheet">
<link href="custom_css/dash4_sidebar.css" rel="stylesheet">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Custom Fonts -->

</head>

<body>
    <!-- sidebar and topnav -->
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
        <!--Sidebar-->

        <!-- top-nav -->
        <div>
            <div class="container-fluid topbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href=""><span class="glyphicon glyphicon-bell"></span>提醒</a></li>
                    <li><a href="config5.php"><span class="glyphicon glyphicon-user"></span><?php echo $row["user_email"]?></a></li>
                    <li><a href="logout.php"><span class="glyphicon glyphicon-log-in" ></span></a></li>
                </ul>
            </div>
        </div>
        <!-- top-nav -->
    </div>
    <!-- sidebar and topnav -->

    <!-- page-wrapper -->
    <div id="page-wrapper">
        <!-- page-wrapper-container-fluid -->
        <div class="container-fluid">
            <!--row of dashboard4.0-->
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1 class="page-header">Dashboard 2.0</h1>
                </div>
                <div class="clearfix"></div>
                <div class="text-center dash_title">
                   <ol class="breadcrumb">
                      <li>
                        <a><span class="glyphicon glyphicon-calendar dash4_today_span"></span></a>
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
            <!--row of dashboard4.0-->


            <!--4panel-row-->
            <div class="row">
                <!--red_panel-->
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-12 text-right">
                                    <div>
                                        <span class="glyphicon glyphicon-grain"></span><label>生理狀況</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel-footer">
                            <span class="pull-left">
                                <div>身高</div>
                                <div>體重</div>
                                <div>BMI</div>
                            </span>
                            <span class="pull-right">
                                <div><?php echo $row["user_height"];?>公分</div>
                                <div><?php echo $row["user_weight"];?>公斤</div>
                                <div><?php 
                                $bmi = (int)$row["user_height"]/(int)$row["user_weight"];
                                echo round($bmi,2);
                                ?>值</div>
                            </span>
                            <div class="clearfix"></div>
                        </div>

                    </div>
                </div>
                <!--red_panel-->
                <!--primary_panel-->
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-12 text-right">
                                    <div><span class="glyphicon glyphicon-zoom-in"></span>測量</div>
                                </div>
                            </div>
                        </div>
                        <div class="panel-footer">
                            <span class="pull-left">
                                <div>最近脈搏測量</div>
                                <div>過去2個禮拜平均</div>
                            </span>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <!--primary_panel-->
                <!--yellow_panel-->
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-12 text-right">
                                    <div><span class="glyphicon glyphicon-tint"></span>健康值</div>
                                </div>
                            </div>
                        </div>
                        <div class="panel-footer">
                            <span class="pull-left">
                                <div>最近脈搏測量</div>
                                <div><span class="glyphicon glyphicon-warning-sign"></span>危險</div>
                            </span>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <!--yellow_panel-->
                <!--green_panel-->
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-12 text-right">
                                    <div><span class="glyphicon glyphicon-equalizer"></span>建議</div>
                                </div>
                            </div>
                        </div>
                        <div class="panel-footer">
                            <span class="pull-left">
                                <div>最近脈搏測量</div>
                                <div>醫師建議</div>
                            </span>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <!--green_panel-->
            </div>
            <!--4panel-row-->

            <!--RAW-->
            <div class="row">
                <div class="col-lg-12 dash4_map">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title text-center"><i class="fa fa-bar-chart-o fa-fw"></i>
                                <label class="dash4_map_label ">原始圖形</label>
                            </h3>
                        </div>
                        <div class="panel-body">
                            <div id="graph" class="aGraph">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--RAW-->
            <div class="dash4_map_spacewhite"></div>
            <!--FFT-->
            <div class="row">
                <div class="col-lg-12 dash4_map">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title text-center">
                                <i class="fa fa-bar-chart-o fa-fw"></i>
                                <label class="dash4_map_label">FFT</label>
                            </h3>
                        </div>
                        <div class="panel-body">
                            <div id="graph2" class="aGraph">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--FFT-->
            <div class="dash4_map_spacewhite"></div>
            <!--FFT-PeakLoad-->
            <div class="row">
                <div class="col-lg-12 dash4_map">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title text-center">
                                <i class="fa fa-bar-chart-o fa-fw"></i>
                                <label class="dash4_map_label">FFT_PeakLoad</label>
                            </h3>
                        </div>
                        <div class="panel-body">
                            <div id="graph3" class="aGraph">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--FFT-PeakLoad-->

            <div class="dash4_map_spacewhite"></div>

            <!-- table -->
            <div class="row">
                <div class="col-lg-12 dash4_map">
                    <div class="panel-heading">
                        <h3 class="panel-title text-center">
                            <i class="fa fa-bar-chart-o fa-fw"></i>
                            <label class="dash4_map_label">12 Peaks</label>
                        </h3>
                    </div>
                    <div id="12Peaks">
                        <table class="table table-striped table-bordered table-list table-hover" id="table-peaks"  border='1'>
                            <tr><td></td><td></td><td></td></tr>
                            <tr><td></td><td></td><td></td></tr>
                            <tr><td></td><td></td><td></td></tr>
                            <tr><td></td><td></td><td></td></tr>
                            <tr><td></td><td></td><td></td></tr>
                            <tr><td></td><td></td><td></td></tr>
                            <tr><td></td><td></td><td></td></tr>
                            <tr><td></td><td></td><td></td></tr>
                            <tr><td></td><td></td><td></td></tr>
                            <tr><td></td><td></td><td></td></tr>
                            <tr><td></td><td></td><td></td></tr>
                            <tr><td></td><td></td><td></td></tr>
                            <tr><td></td><td></td><td></td></tr>
                            <tr><td colspan="3"></td></tr>
                        </table>
                    </div>
                </div>
            </div>
            <!-- table -->


        </div>
        <!-- page-wrapper-container-fluid -->
    </div>
    <!-- page-wrapper -->



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

