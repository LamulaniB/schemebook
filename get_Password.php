<!DOCTYPE html>
<html>
<head>
<title>Login Page.</title>

<link rel="stylesheet" type="text/css" href="index.css">

</head>
<body>

<?php 
require 'configure.php';
$conn = mysqli_connect($hostName, $userName, $password, $database);
$db_found = mysqli_select_db($conn, $database);
if($db_found) { echo "Database Found>>>...";} 
else {print "No Database Found>>>";}


$get_email = $_POST['email'];
$SQL = "SELECT `password` FROM `users` WHERE `email` = '$get_email'  ";
$result = mysqli_query($conn, $SQL);
while($db_field = mysqli_fetch_assoc($result)) 
{ echo  "Your Password is>> " . $db_field ['password'] ; }





//$get_phone = $_POST['phone'];
//$selector = "SELECT `password` FROM `users` WHERE `phone number` = '$get_phone' ";
//$set_phone = mysqli_query($conn, $selector);
//while($gettor = mysqli_fetch_assoc($set_phone)) 
//{ echo  "Your Password is>> " . $gettor ['password']; }		





mysqli_close($conn);




?>



</body>
</html>