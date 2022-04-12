<!DOCTYPE html>
<html>

<head>
<title>Get Forms</title>


</head>



<body>

<?php
$name = $_POST['Name'];
$surname = $_POST['Surname'];
$grade = $_POST['levels'];
$school = $_POST['school'];
$ecnumber = $_POST['ec_number'];
$region = $_POST['region'];
$schooltype = $_POST['schoolType'];
 ?>



<?php 
require "configure.php";
$conn = mysqli_connect($hostName, $userName, $password, $database);
$db_found = mysqli_select_db($conn, $database);
if($db_found) 
{
		echo "Database found>>>>> $database ." ;
	
// echo "<a href = 'selecting_tbl.php'> Click here </a>";
	}
	
else 

{
		echo "Database>>>> $database <<<<<<< was not found>>>>>>>>";
	
	}



$SQL = " INSERT INTO `rubricpage` (`id`, `Name`, `Surname`, `Grade`, `Name of School`, `schoolType`, `EC Number`, `Region`) VALUES NULL , '$name' , '$surname' , '$grade' , '$school' , '$schooltype' , $ecnumber , '$region' )   ";

$db_found = mysqli_select_db($conn, $database);
$insertor = mysqli_query($conn , $SQL);
if($insertor) {
	echo "Your Records have been inserted";
	echo "<br>";
	//echo "<a href = http://localhost:8080/wordpress/selecting_tbl.php> Click here</a> to see your inserts";
			}
						
else { 

echo "No data inserted because >>> " . mysqli_error($result); 
	}

?>



<table border="1" cellspacing="2" cellpadding="3"> 
 
<tr> <td>
<h5>Name:</h5>
<?php
echo $_POST["Name"];
?>
</td> </tr>

<tr> <td>
<h5>Surname:</h5>
<?php
echo $_POST["Surname"];
?>
</td> </tr>


<tr> <td>
<h5>Phone:</h5>
<?php
echo $_POST["telephone"];
?>
</td> </tr>


<tr> <td>
<h5>Email:</h5>
<?php
echo $_POST["email"];
?>
</td> </tr>

<tr> <td>
<h5>EC number:</h5>
<?php
echo $_POST["ec_number"];
?>
</td> </tr>


<tr> <td>
<h5>Grade:</h5>
<?php
echo $_POST["levels"];
?>
</td> </tr>


<tr> <td>
<h5>Name of School:</h5>
<?php
echo $_POST["school"];
?>
</td> </tr>


<tr> <td>
<h5>Region:</h5>
<?php
echo $_POST["region"];
echo $_POST["matN"];
echo $_POST["matS"];
echo $_POST["manI"];
echo $_POST["midL"];
echo $_POST["mashE"];
echo $_POST["mashW"];
echo $_POST["mashC"];
echo $_POST["byo"];
echo $_POST["hre"];
echo $_POST["masV"];
?>
</td> </tr>

<tr> <td>
<h5>SCHOOL Type:</h5>
<?php
echo $_POST["schools"];
mysqli_close($conn);
?>
</td> </tr>
</table>


</body>
</html>>