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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="http://d3js.org/d3.v3.min.js" charset="utf-8"></script>
    <style>
    path {
      stroke-width: 4;
      fill: none;
  }


  .axis {
      shape-rendering: crispEdges;
  }

  .x.axis line {
      stroke: lightgrey;
  }

  .x.axis .minor {
      stroke-opacity: .5;
  }

  .x.axis path {
      display: none;
  }

  .y.axis line, .y.axis path {
      fill: none;
      stroke: #000;
      stroke-width: 1;
  }


</style>

<title>Dashboard 4.0</title>

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


</head>

<body style="background-color: white;">

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
                    <li><a href="" style="font-size:18px;color:#adadba;"><span class="glyphicon glyphicon-bell"></span>   提醒</a></li>
                    <li><a href="config5.php" style="font-size:18px;color:#adadba;"><span class="glyphicon glyphicon-user"></span>   <?php echo $row["user_email"]?></a></li>
                    <li><a href="logout.php" style="font-size:18px;color:#adadba;"><span class="glyphicon glyphicon-log-in" ></span>   登出</a></li>
                    <li class="dropdown">
                      <a class="dropdown-toggle" type="button" data-toggle="dropdown" href="#" style="font-size:20px;color:#adadba;">
                          <span class="glyphicon glyphicon-cog"></span></a>
                          <ul class="dropdown-menu" style="text-align: center;font-size:15px;">
                            <li><a href="#">個人化設定</a></li>
                            <li><a href="#">帳號管理</a></li>
                            <li><a href="#">通知設定</a></li>
                            <li><a href="#">裝置設定</a></li>
                            <li class="divider"></li>
                            <li><a href="#">關於我們</a></li></ul>
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
                            Dashboard 2.0
                        </h1>
                    </div>
                    <div class="clearfix"></div>
                    <div class="text-center">
                     <ol class="breadcrumb">
                      <li><a href="" style="font-size:18px;color:#000;"><span class="glyphicon glyphicon-calendar"></span></a>
                          <label id="DATE" style="font-size:18px;color:#000;font-weight: normal;"></label>
                      </li>
                      <li><a href="" style="font-size:18px;color:#adadba;"><span class="glyphicon glyphicon-remove" style="color:#870012;"></span>  無配對使用裝置</a></li>
                  </ol>
              </div>
          </div>
          <!-- /.row -->

          <!-- /.row -->

          <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-red">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-12 text-right">
                                <div style="font-size:18px;">
                                    <span class="glyphicon glyphicon-grain"></span>生理狀況
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
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-12 text-right">
                                <div style="font-size:18px;"><span class="glyphicon glyphicon-zoom-in"></span>測量</div>
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <span class="pull-left" style="display:block;">
                            <div>最近脈搏測量</div>
                            <div>過去2個禮拜平均</div>
                        </span>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="panel panel-yellow">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-12 text-right">
                                <div style="font-size:18px;"><span class="glyphicon glyphicon-tint"></span>健康值</div>
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <span class="pull-left" style="display:block;">
                            <div>最近脈搏測量</div>
                            <div><span class="glyphicon glyphicon-warning-sign"></span>危險</div>
                        </span>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="panel panel-red">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-12 text-right">
                                <div style="font-size:18px;"><span class="glyphicon glyphicon-equalizer"></span>建議</div>
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <span class="pull-left" style="display:block;">
                            <div>最近脈搏測量</div>
                            <div>醫師建議</div>
                        </span>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.row -->

        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i>原始圖形</h3>
                    </div>
                    <div class="panel-body">
                        <div id="graph" class="aGraph">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i>FFT</h3>
                    </div>
                    <div class="panel-body">
                        <div id="graph2" class="aGraph">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i>FFT_PeakLoad</h3>
                    </div>
                    <div class="panel-body">
                        <div id="graph3" class="aGraph">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="panel-heading">
                    <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i>12 Peaks</h3>
                </div>
                <div id="12Peaks">
                    <table class="table table-striped table-bordered table-list table-hover" 
                    id="table-peaks"  border='1' 
                    style="width: 100%;border: 2px solid black;text-align: center; font-size:20px;">
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td colspan="3"></td>
                        </tr>
                </table>
                </div>
            </div>
        </div>




        <!-- /.row -->


        <!-- /.row -->

    </div>
    <!-- /.container-fluid -->

</div>

</div>
<!-- /#wrapper -->

<!-- jQuery -->


<script src="js/jquery.js"></script>



<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<script>
    var today = new Date();
    var dd = today.getDate();
var mm = today.getMonth()+1; //January is 0!

var yyyy = today.getFullYear();
if(dd<10){
    dd='0'+dd;
} 
if(mm<10){
    mm='0'+mm;
} 
var today = '今日' + mm +'月 / '+ dd + '日';
document.getElementById("DATE").innerHTML = today;
</script>

<!-- Menu Toggle Script -->


<script src="js/raw.js"></script>
<script src="js/fft.js"></script>
<script src="js/fft_30.js"></script>

<script type='text/javascript'>

 $.ajax({
    type: 'GET',
    url: 'fromPython.php',
    dataType: "json",  
    success: function(data) {
      getPeaks(data[1],data[2],data[3],data[0]);
  },
  error: function() {
      alert("ERROR");
  }
});

 var label_t=document.getElementById("table-peaks");
    var labelArray=["index","Number","Value"];
    for(var i=0;i<labelArray.length;i++) {
        label_t.rows[0].cells[i].innerText = labelArray[i];
  } 




 function getPeaks(indexes,numbers,values,count){
    var pointCount = parseInt(count);
    var myArray = [indexes.split(" "),numbers.split(" "),values.split(" ")];
    var t = document.getElementById("table-peaks"); 
    for(var i=1;i<myArray[0].length;i++) { 
       for(var j=0;j<myArray.length;j++) { 
          t.rows[i].cells[j].innerText = myArray[j][i-1]; 
      }    
  }
  var len = myArray[0].length;
  for(var k=0;k<myArray.length;k++) {
        t.rows[len].cells[k].innerText = myArray[k][len-1];
      }
      t.rows[len+2].cells[0].innerText = "Point Count: " + pointCount;
}

</script>
<?php
mysqli_close($link);
?>

</body>

</html>

