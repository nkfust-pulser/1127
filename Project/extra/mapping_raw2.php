<?php
include("config3.php");
?>
<html>
<head>
  <title>FFT圖型化</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <script src="http://d3js.org/d3.v3.min.js" charset="utf-8"></script>
  <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
  <style>
  path {
    stroke:  #202aad;
    stroke-width: 5;
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
  }
</style>
</head>


<body>
  <H1><b><center>FFT圖形化</center></b></H1>
  <div id="graph" class="aGraph" style="top:0px;left:0; float:left;"></div>
  <table width="100%" border="1" id="table1"></table>


  <script type='text/javascript'>

   $.ajax({
    type: 'GET',
    url: 'fromPython.php',
    dataType: "json",  
    success: function(data) {
      getPeaks(data[1],data[2],data[3]);
    },
    error: function() {
      alert("ERROR");
    }
  });


   function getPeaks(indexes,numbers,values){
    var myArray = [indexes.split(" "),numbers.split(" "),values.split(" ")]; 
    var t = document.getElementById("table1"); 
    for(var i=0;i<myArray[0].length;i++) { 
     t.insertRow(); 
     for(var j=0;j<myArray.length;j++) { 
      t.rows[i].insertCell(j);
      t.rows[i].cells[j].innerText = myArray[j][i]; 
    }    
  } 
}

</script>
<script type='text/javascript'>


  $.ajax({
    type: 'GET',
    url: 'fromPython.php',
    dataType: "json",  
    success: function(data) {
      getData(data[4]);
    },
    error: function() {
      alert("ERROR");
    }
  });


  function getData(fftdata){

    var data2 = fftdata.split(" ");
    var jj;
    var data=[];
    for(jj=0;jj<1000;jj++){
      data[jj]=parseFloat(data2[jj]);
    }
    console.log(data2);


    var m = [80, 80, 80, 80]; // margins
    var w = 1600- m[1] - m[3]; // width
    var h = 700 - m[0] - m[2]; // height

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



  }



</script>


</body>
</html>
