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
function getRaw(rawData){

    var data = rawData.split(" ");

    var i;
    var min=data[0];
    for(i=0;i<data.length;i++)
    {
        if(parseFloat(data[i]) < parseFloat(min) ) min=data[i];
    }
      //console.log(min);

     var m = [80, 80, 80, 80]; // margins
    var w = 1300- m[1] - m[3]; // width
    var h = 500 - m[0] - m[2]; // height
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
    .tickPadding(15)
    .tickSize(-h);


//0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30]

    // Add the x-axis.
    graph.append("svg:g")
    .attr("class", "x axis")
    .attr("transform", "translate(0," + h + ")")
    .call(xAxis)
    .style("font-size","18px")
    .select(".domain")
    .remove();


    graph.append("svg:text")      // text label for the x axis
    .attr("x", 560 )
    .attr("y", 410 )
    .style("text-anchor", "middle")
    .style("font-size","25px")
    .style("font-weight","bold")
    .text("Time(t)");

    var yAxisLeft = d3.svg.axis().scale(y).ticks(6).orient("left");
    // Add the y-axis to the left
    graph.append("svg:g")
    .attr("class", "y axis")
    .style("font-size","18px")
    .attr("transform", "translate(-25,0)")
    .call(yAxisLeft);

    graph.selectAll("scatter-dots")
    .data(data)
    .enter().append("svg:circle")
    .attr("cx", function (d,i) {  return x(i);  } )
    .attr("cy", function (d) {  return y(d);  } )
    .attr("r", 4)
    .attr("fill","#002259");


}

