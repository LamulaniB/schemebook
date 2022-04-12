<!DOCTYPE>
<HTML>
<head>
<title>Connector</title>
</head>

<body>

<?php
$hostName = "localhost";
$userName = "root";
$password = "";
$database = 'myschemes';

// Create connection
$conn = mysqli_connect($hostName, $userName, $password, $database);

// Check connection
if (!$conn) {
    die ( 'No connection because<br>' . mysqli_connect_error());
}
echo  "Connected successfully at $hostName <br>";


$conn = mysqli_connect($hostName, $userName, $password, $database);
if(!$db_found = mysqli_select_db ($conn , $database)) 
{
die ("Error" . mysqli_connect_error());
}	echo ("Connection to $database established   ") ;


mysqli_close($conn);
?>


</body>
</HTML>
