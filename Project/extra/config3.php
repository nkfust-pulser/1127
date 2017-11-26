<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'you850407');
define('DB_DATABASE', 'members');
$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

// Create connection
$conn = new mysqli(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT fft FROM dataquanity";

$query = $conn->query($sql);

if ( ! $query ) {
	echo mysql_error();
	die;
}

$data = array();

for ($x = 0; $x < mysqli_num_rows($query); $x++) {
	$row = mysqli_fetch_assoc($query);
	$data[] = $row['fft']; 
}

mysqli_close($db);

?>
