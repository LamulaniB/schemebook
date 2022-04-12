<!DOCTYPE html>
<html>
<head>
<title> My Schemes </title>
</head>

<body>

<?php
include "configure.php";
$conn = mysqli_connect($hostName, $userName, $password, $database);
if(!$db_found = mysqli_select_db ($conn , $database)) 
{
die ("Error" . mysqli_connect_error());
}	echo ("Connection to $database established   ") ;
echo "<br>";
$SQL = " SELECT  Grades FROM grades ";
$result = mysqli_query($conn , $SQL);
if(mysqli_num_rows($result) > 0 ) 
{

while($row = mysqli_fetch_assoc($result))
{	
	echo  $row["Grades"] . "<br>" ; }
}



if($_POST['subjects']) {
	header('Location: http://localhost:8080/wordpress/scheme_book.php'); }
elseif(($_POST['subjects'])) {
	header('Location: http://localhost:8080/wordpress/topics.php'); }
;}
elseif(($_POST['subjects'])) {;}
elseif(($_POST['subjects'])) {;}
elseif(($_POST['subjects'])) {;}
elseif(($_POST['subjects'])) {;}
elseif(($_POST['subjects'])) {;}
elseif(($_POST['subjects'])) {}
elseif(($_POST['subjects'])) {;}
elseif(($_POST['subjects'])) {;}





		
mysqli_close($conn);
?>