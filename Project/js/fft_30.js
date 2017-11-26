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


function getFFT(FFTdata,len2){
    var data2 = FFTdata.split(" ");
    var FFTlen = parseInt(len2);
    var jj;
    var data=[];
    for(jj=0;jj<FFTlen;jj++){
        data[jj]=parseFloat(data2[jj]);
    }
    console.log(data[0],data[1000]);
    console.log(data);
    var m = [80, 80, 80, 80]; // margins
    var w = 1300- m[1] - m[3]; // width
    var h = 500 - m[0] - m[2]; // height

    var x = d3.scale.linear().domain([0, data.length]).range([0, w]);

    var y = d3.scale.linear().domain([d3.min(data), d3.max(data)]).range([h, 0]);

    var line = d3.svg.line()
    // assign the X function to plot our line as we wish
    .x(function(d,i) { return x(i); })
    .y(function(d) { return y(d); })

    var graph = d3.select("#graph3").append("svg:svg")
    .attr("width", w + m[1] + m[3])
    .attr("height", h + m[0] + m[2])
    .append("svg:g")
    .attr("transform", "translate(" + m[3] + "," + m[0] + ")");

    // create yAxis
    var xAxis = d3.svg.axis().scale(x).tickPadding(15).tickSize(-h).tickSubdivide(true);
    // Add the x-axis.
    graph.append("svg:g")
    .attr("class", "x axis")
    .attr("transform", "translate(-2," + h + ")")
    .call(xAxis)
    .style("font-size","20px")
    .select(".domain")
    .remove();

    graph.append("svg:text")      // text label for the x axis
    .attr("x", 560 )
    .attr("y", 410 )
    .style("text-anchor", "middle")
    .style("font-size","25px")
    .style("font-weight","bold")
    .text("#Data");

    var yAxisLeft = d3.svg.axis().scale(y).ticks(6).orient("left");
    // Add the y-axis to the left
    graph.append("svg:g")
    .attr("class", "y axis")
    .style("font-size","18px")
    .attr("transform", "translate(-25,0)")
    .call(yAxisLeft);

    graph.append("svg:path").attr("d", line(data)).attr("stroke","blue");

}