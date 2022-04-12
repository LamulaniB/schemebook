<!DOCTYPE html>
<html>
<head>
<title> Selecting Table </title>
</head>

<body>

<?php 
require 'configure.php';
$conn = mysqli_connect($hostName, $userName, $password , $database);


$db_found = mysqli_select_db($conn, $database);

if($db_found) {
echo "Database has been located at >>>>> $database ...";
}

else {
	print "No Database found>>>";
			}
			
if($db_found) {
$SQL = "SELECT * FROM users";
$result = mysqli_query($conn, $SQL);

while($db_field = mysqli_fetch_assoc($result)) 

{echo "Username>>>> <BR>"; 
echo $db_field ['username'];
echo "<BR>";

echo 'Password>>>>> ';
echo $db_field ['password'];
echo "<br>";
}
	}
	
//echo "<a href = 'index_ins.php'> Click here </a>";

mysqli_close($conn);

?>


</body>
</html>