<!DOCTYPE>
<html> 
<head> 
<title> Connection to the Data Base.</title>
</head>
<!--
accessing_db.php -->
<body>

<?php
require "configure.php";
$conn = mysqli_connect($hostName, $userName, $password, $database);

if($conn) {echo "Database connection Established to $database "; }
echo "<br>";
echo  "<a href = 'scheme_book.php'>Click here</a>";



 ?>
</body>
</html>