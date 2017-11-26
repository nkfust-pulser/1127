<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'you850407');
define('DB_DATABASE', 'members');
$link = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>