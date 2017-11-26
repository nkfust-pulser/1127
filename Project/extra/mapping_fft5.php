
<html>
<head>
  <title>RAW圖型化</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <script src="http://d3js.org/d3.v3.min.js" charset="utf-8"></script>


  <style>

    .axis line{
      shape-rendering: crispEdges;
      stroke: #000;
      fill: none;
      stroke-width: 1;

    }
    .x.axis line {
      stroke:#87888e;
      fill: none;

    }
    .x.axis .minor {
      stroke-opacity: .1;
    }
    .y.axis line {
      fill: none;
      stroke: #000;
    }
    .graph-svg-component {
      background-color: steelblue;
    }
    circle {
      fill: #202aad;
    }

  </style>
</head>


<body>
  <H1><b><center>RAW圖形化</center></b></H1>
  <div id="graph" class="aGraph" style="position:absolute;top:0px;left:0; float:left;"></div>



  <script type='text/javascript'>

  d3.text("result-2.txt", function(error, data) {
      
      console.log(data);
      
 /*     var jj;
      var data=[];
      for(jj=0;jj<1000;jj++){
        data[jj]=data2[jj];
      }
      console.log(data[0],data[2035]);

    var m = [80, 80, 80, 80]; // margins
    var w = 1300- m[1] - m[3]; // width
    var h = 600 - m[0] - m[2]; // height

    var x = d3.scale.linear().domain([0, data.length]).range([0, w]);

    var y = d3.scale.linear().domain([d3.min(data), d3.max(data)]).range([h, 0]);

    var line = d3.svg.line()
    // assign the X function to plot our line as we wish
    .x(function(d,i) { return x(i); })
    .y(function(d) { return y(d); })

    var graph = d3.select("#graph").append("svg:svg")
    .attr("width", w + m[1] + m[3])
    .attr("height", h + m[0] + m[2])
    .append("svg:g")
    .attr("transform", "translate(" + m[3] + "," + m[0] + ")");

    // create yAxis
    var xAxis = d3.svg.axis().scale(x).tickSize(-h).tickSubdivide(true);
    // Add the x-axis.
    graph.append("svg:g")
    .attr("class", "x axis")
    .attr("transform", "translate(-2," + h + ")")
    .call(xAxis)
    .select(".domain")
    .remove();

    var yAxisLeft = d3.svg.axis().scale(y).ticks(6).orient("left");
    // Add the y-axis to the left
    graph.append("svg:g")
    .attr("class", "y axis")
    .attr("transform", "translate(-25,0)")
    .call(yAxisLeft);

    graph.append("svg:path").attr("d", line(data));


*/

  });




</script>
</body>
</html>
