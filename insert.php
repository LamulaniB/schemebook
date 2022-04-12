<!DOCTYPE HTML>
<html>
<head>

<title><<<<<<<<<Insert>>>>>>>>>></title>
</head>

<body>

<?php 
require "configure.php";
$conn = mysqli_connect($hostName, $userName, $password, $database);


$db_found = mysqli_select_db($conn, $database);
echo "db_found>>>>>>" . $db_found . "<<<<<<";


?>