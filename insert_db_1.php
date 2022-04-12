<!DOCTYPE html>
<html>
<head>
<title>INSERT PAGE</title>
</head>
<body>



<?php
require "configure.php";
$conn = mysqli_connect($hostName , $userName , $password , $database );
$db_database = mysqli_select_db($conn, $database);

$insert_user 	= $_POST['username']; 
 $insert_pwd 	= $_POST['password']; 
 $insert_mail 	= $_POST['email']; 
 $insert_phone = $_POST['phone']; 
$validator = "econooooo";

$SQL = " INSERT INTO `users`(
`Username`,
 `Password`,
 `Email`,
 `Phone` ,
 `Validation`
)
VALUES ( 
		'$insert_user' , 
		'$insert_pwd' , 
		'$insert_mail' , 
		'$insert_phone' ,
		'$validator'	) " ;

$result = mysqli_query($conn , $SQL);

if(!$result) { 
 		echo "<br>Error inserting records. Please Try Again" ; } 	
 else {
 			echo "Records inserted."; }
		
// echo "<a href = http://localhost:8080/wordpress/selecting_tbl.php> Click here</a> to see your inserts";
				
mysqli_close($conn);



?>	
	

</body>
</html>
