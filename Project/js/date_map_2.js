document.getElementById("submitForm").addEventListener("submit", myFunction);
    function myFunction2() {
        d3.select("svg").remove();
        var x = document.getElementById("map_select").value;
        if(x == 'raw'){
            x = "原始圖型";
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
        }
        else if(x == 'fft')
        {
            x = "FFT圖型";
            $.ajax({
                type: 'GET',
                url: 'fromPython.php',
                dataType: "json",  
                success: function(data) {
                    getFFT30(data[4],data[0]);
                },
                error: function() {
                    alert("ERROR");
                }
            });
        }
        else{
            x = "FFT-30圖型";
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
        }
        document.getElementById("map_label").innerHTML = x;
    }
