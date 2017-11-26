
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


    d3.text("Original.txt", function(error, data2) {
      if (error){console.log(error);}
      var data=[];
      data = d3.csv.parseRows(data2);



      var i;
      var min=data[0];
      for(i=0;i<data.length;i++)
      {
        if(parseFloat(data[i]) < parseFloat(min) ) min=data[i];
      }
      console.log(min);

     var m = [80, 80, 80, 80]; // margins
    var w = 1300- m[1] - m[3]; // width
    var h = 700 - m[0] - m[2]; // height
    var x = d3.scale.linear().domain([0, data.length]).range([0, w]);

 var x1 = d3.scale.ordinal().domain(["0","1","2","3","4","5","6","7","8","9","10","11","12","13","14","15","16",
  "17","18","19","20","21","22","23","24","25","26","27","28","29","30"]).rangePoints([0, w]);

    var y = d3.scale.linear().domain([min, d3.max(data)]).range([h, 0]);


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


  });




</script>
</body>
</html>
