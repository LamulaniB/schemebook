<!DOCTYPE html>
<html>
<head>
<title> Inserting into Table </title>
</head>

<body>

<?php 
require 'configure.php';
$conn = mysqli_connect($hostName, $userName, $password);

$database = 'myschemes';
$db_found = mysqli_select_db($conn, $database);


if($db_found) 
{
echo "This script inserts data inside a database>>>...";

else {
	print "No Database found>>>";
			}

	

mysqli_close($conn);

?>


</body>
</html>