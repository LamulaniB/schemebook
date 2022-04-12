<!DOCTYPE HTMl>
<HTML>
<head>
<title><<<<<<<<<<<<1111111111111>>>>>>>>>>>>></title>
</head>
<body>

<?php 
include 'configure.php';
$conn = mysqli_connect($hostName , $userName , $password , $database );
if($conn) 
		{echo "Connected to database >>> $database >>>>> <br>";
} 
else { echo "No connection <br>";}

echo "<select name = 'grading'>" ;
echo "<option> Choose your grade here.." ; echo "</option>" ; 
$SQL = "  SELECT `Grades` FROM `grades`  " ;
$grades = mysqli_query($conn, $SQL );
while ($data = mysqli_fetch_array($grades)) {
echo "<option>" ; echo $data[' Grades ']  ; echo "</option>";
}

echo "</select>";	
		
mysqli_close($conn);

?>


</body>
</html>