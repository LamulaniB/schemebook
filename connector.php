
<?php
require "configure.php";
$conn = mysqli_connect($hostName, $userName, $password);


$database = 'myschemes';


$db_found = mysqli_select_db($conn, $database);


if($db_found) 
{
		echo "Database found>>>>> $database ." ;
	
echo "<a href = 'selecting_tbl.php'> Click here </a>";
	}
	
else 

{
		echo "Database>>>> $database <<<<<<< was not found>>>>>>>>";
	
	}


mysqli_close($conn);

 ?>