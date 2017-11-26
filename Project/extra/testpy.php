
<html>
<head><script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
</head>
<body>
	
</body>
<script type="text/javascript">


	$.ajax({
		type: 'GET',
		url: 'fromPython.php',
		dataType: "json",  
		success: function(data) {
			console.log(data);
		},
		error: function() {
			alert("ERROR");
		}
	});



</script>

</html>
