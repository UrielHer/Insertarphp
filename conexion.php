<?php

require_once 'config.php';
//$con=mysqli_connect()
$con=mysqli_connect($host,$user,$password,$db) or die ("conexion fallida");
//$sdb=mysqli_select_db($con,$db) or die ("La base de datos no existe");
//$con=new mysqli($host,$user,$password,$db);

?>