<?php
include("connect_members.php");

$sql = "SELECT * FROM users_information";

mysqli_query($link, 'SET CHARACTER SET UTF8');
mysqli_query($link, "SET collation_connection = 'utf8_unicode_ci");

$result = mysqli_query($link, $sql);
$row = mysqli_fetch_assoc($result);


$birthday_split = explode("-",$row["user_birthday"]);
$year = $birthday_split[0];
$month = $birthday_split[1];
$day = $birthday_split[2];
?>
