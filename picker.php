<!DOCTYPE HTML>
<html>
<head>
<link href="index.css" type="text/css" rel="stylesheet"/>
<title>
Picker
</title>
</head>
<body>

<form action = "scheme_book.php" method=" POST">

<?php echo 

"<select name = 'grading'>" ;
echo "<option> Choose your Grades here.." ; echo "</option>" ;
$grd = " SELECT Grades FROM `grades` " ;
$grades = mysqli_query($conn, $grd );
while ($data = mysqli_fetch_array($grades)){
echo "<option>" ; echo $data['Grades']  ; echo "</option>";
}	
echo "</select>"; 
echo "</div>"; ?>


</form>





</body>
</html>
