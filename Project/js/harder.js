function additems(){
 var today = new Date();
 var dd = today.getDate();
 var mm = today.getMonth()+1;
 if(dd<10) {
   dd='0'+dd
 }
 if(mm<10) {
  mm='0'+mm
}
var n;
for(n=0;n<7;n++)
  {
    var select = document.getElementById("daterange");
    if((dd+n)<31)
      {
        today = mm+'/'+(dd+n);
      }
      else if(mm<=12)
        {
          today =(mm+1)+'/'+(1+n);
        }
        else
          {
            today =(1) + '/' +(1+n);
          }
          select.options[select.options.length] = new Option(today, dd);
        }
      }




        function OnSelectedIndexChange()
        {
          if ((document.getElementById('timecrange').value == "0") &&(document.getElementById('daterange').value == "0")){
            location.href="fuckme.html";
          }
        }




        function addRow(){
          var table = document.getElementById("myTable");
          var row = table.insertRow(0);
          var avaliable=5;
          for(var create=0;create<avaliable;create++)
            {
              var row = table.insertRow(0);
              var cell0 = row.insertCell(0);
              cell0.innerHTML = "取消";
              var cell2 = row.insertCell(0);
              cell2.innerHTML = "會議室";
              var cell3 = row.insertCell(0);
              cell3.innerHTML = "可用時段";
              var cell4 = row.insertCell(0);
              cell4.innerHTML = "可使用日期";
            }
            var row = table.insertRow(0);
            var cell6 = row.insertCell(0);
            cell6.innerHTML = "取消";
            var cell2 = row.insertCell(0);
            cell2.innerHTML = "會議室";
            var cell3 = row.insertCell(0);
            cell3.innerHTML = "可用時段";
            var cell4 = row.insertCell(0);
            cell4.innerHTML = "可使用日期";
          }


          function deleteRow(r) {
            var i = r.parentNode.parentNode.rowIndex;
            document.getElementById("myTable").deleteRow(i);
          }

          function msg() {
            alert("你確定要預約嗎?");
          }
