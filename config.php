<?php
ob_start(); //Turns on output buffering
session_start();

$timezone = date_default_timezone_set("Asia/Kolkata");
$host = 'mysql';
$user = 'devuser';
$pass = 'devpass';
 $con = mysqli_connect($host,$user,$pass);  //connection variable

 if(mysqli_connect_errno())
 {
 	echo "Failed to connect ".mysqli_connect_errno();
 }

 
 ?>