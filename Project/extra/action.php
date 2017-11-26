<?php

session_start();

$username = $_POST['username'];
$password = $_POST['password'];

if ($username&&$password)

{

$connect = mysql_connect("localhost", "root", "you850407") or die ("Couldn't connect!");
mysql_select_db("") or die("Couldn't find db");

$query = mysql_query("SELECT * FROM users WHERE username='$username'");

$numrows = mysql_num_rows($query);


}

?>
