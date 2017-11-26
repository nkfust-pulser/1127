<?php
$python = "D:\\Python36\\python.exe";
$pythonscript = "C:\\xampp\\htdocs\\Project\\python\\python_dataProcessor\\ff3-4.py";

$item = "20171123-1030-david90";
$phptopython = exec("$python $pythonscript $item");
echo($phptopython);

$cmd = "$python $pythonscript";
exec("$cmd" , $output);

echo json_encode($output);

?>