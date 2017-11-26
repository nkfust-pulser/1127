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
    <script src="//d3js.org/d3.v4.min.js"></script>

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
        <link href="css/plugins/morris.css" rel="stylesheet">
        <link href="css/sb-admin.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="css/admin.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js" />
        <script src="path/to/chartjs/dist/Chart.js"></script>
    </head>

    <body>

        <div id="wrapper">

            <!-- Sidebar -->
            <div id="sidebar-wrapper">
                <ul class="sidebar-nav">
                    <li class="sidebar-brand">
                        <p style="margin:0px;">PULSER 2.0</p>
                    </li>
                    <li>
                        <a href="#"><span class="glyphicon glyphicon-equalizer"  style="padding-right:4px;"></span>   儀表板</a>
                    </li>
                    <li>
                        <a href="history.php"><span class="glyphicon glyphicon-th-list"  style="padding-right:4px;"></span>   紀錄</a>
                    </li>
                    <li>
                        <a href="#"><span class="glyphicon glyphicon-search" style="padding-right:4px;"></span>   查詢</a>
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
                <div class="container-fluid" style="padding-right: 0px;padding-left: 0px;background-color: #272728;margin-bottom: 0px;">

                    <ul class="nav navbar-nav navbar-right" style="margin-right: 0px; ">
                        <li><a href="" style="font-size:18px;color:#adadba;"><span class="glyphicon glyphicon-bell"></span>   提醒</a></li>
                        <li><a href="profile.php" style="font-size:18px;color:#adadba;"><span class="glyphicon glyphicon-user"></span>   使用者</a></li>
                        <li><a href="logout.php" style="font-size:18px;color:#adadba;"><span class="glyphicon glyphicon-log-in" ></span>   登出</a></li>
                        <li class="dropdown">
                          <a class="dropdown-toggle" type="button" data-toggle="dropdown" href="#" style="font-size:20px;color:#adadba;"><span class="glyphicon glyphicon-cog"></span></a>
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
                        Dashboard 2.0
                    </h1>
                </div>
                <div class="clearfix"></div>
                <div class="text-center">
                 <ol class="breadcrumb">
                  <li><a href="" style="font-size:18px;color:#000;"><span class="glyphicon glyphicon-calendar"></span></a>
                      <label style="font-size:18px;color:#000;font-weight: normal;">今日  05/30</label></li>
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
                        <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> 脈搏測量分析(暫時)</h3>
                    </div>
                    <div class="panel-body">
                        <canvas id="myChart" style="height:150px;width:500px;"></canvas>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> 脈搏測量分析(暫時)</h3>
                    </div>
                    <div class="panel-body">
                        <canvas id="myChart1" style="height:150px;width:500px;"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> 脈搏測量分析(暫時)</h3>
                    </div>
                    <div class="panel-body">
                        <canvas id="myChart2" style="height:150px;width:500px;"></canvas>
                    </div>
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

<script src="js/plugins/morris/raphael.min.js"></script>
<script src="js/plugins/morris/morris.min.js"></script>
<script src="js/plugins/morris/morris-data.js"></script>
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Menu Toggle Script -->
<script>
    $("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
});

var m = [80, 80, 80, 80]; // margins
var w = 1600- m[1] - m[3]; // width
var h = 700 - m[0] - m[2]; // height
var x = d3.scale.linear().domain([0, data.length]).range([0, w]);

var x1 = d3.scale.ordinal().domain(["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16",
"17","18","19","20","21","22","23","24","25","26","27","28","29","30"]).rangePoints([0, w]);

var y = d3.scale.linear().domain([d3.min(data), d3.max(data)]).range([h, 0]);


var graph = d3.select("#graph").append("svg:svg")
.attr("width", w + m[1] + m[3])
.attr("height", h + m[0] + m[2])
.append("svg:g")
.attr("transform", "translate(" + m[3] + "," + m[0] + ")");


// create yAxis
var xAxis = d3.svg.axis()
.scale(x1)
.tickPadding(10)
.tickSize(-h);


//0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30]

// Add the x-axis.
graph.append("svg:g")
.attr("class", "x axis")
.attr("transform", "translate(0," + h + ")")
.call(xAxis)
.select(".domain")
.remove();

var yAxisLeft = d3.svg.axis().scale(y).ticks(6).orient("left");
// Add the y-axis to the left
graph.append("svg:g")
.attr("class", "y axis")
.attr("transform", "translate(-25,0)")
.call(yAxisLeft);

graph.selectAll("scatter-dots")
.data(data)
.enter().append("svg:circle")
.attr("cx", function (d,i) {  return x(i);  } )
.attr("cy", function (d) {  return y(d);  } )
.attr("r", 4);

</script>
<script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'line',

    // The data for our dataset
    data: {
    labels: ["January", "February", "March", "April", "May", "June", "July"],
    datasets: [{
    label: "FTT",
    backgroundColor: '#12a844',
    borderColor: '#12a844',
    data: [0, 10, 5, 2, 20, 30, 45],
}]
},

// Configuration options go here
options: {}
});

</script>


<script>
    var ctx = document.getElementById('myChart1').getContext('2d');
    var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'line',

    // The data for our dataset
    data: {
    labels: ["January", "February", "March", "April", "May", "June", "July"],
    datasets: [{
    label: "次數",
    fill:false,
    backgroundColor: '#1b45c4',
    borderColor: '#1b45c4',
    data: [0, 40, 5, 60, 20, 70, 20],
}]
},

// Configuration options go here
options: {}
});

</script>


<script>
    var ctx = document.getElementById('myChart2').getContext('2d');
    var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'line',

    // The data for our dataset
    data: {
    labels: ["January", "February", "March", "April", "May", "June", "July"],
    datasets: [{
    label: "週期",
    fill:false,
    backgroundColor: '#11ad2d',
    borderColor: '#11ad2d',
    data: [80, 20, 15, 20, 20, 55, 15],
}]
},

// Configuration options go here
options: {}
});

</script>

</body>

</html>
