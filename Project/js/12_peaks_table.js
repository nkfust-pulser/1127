
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