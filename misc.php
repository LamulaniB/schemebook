<?php 

//grades
echo "<select name = 'grading'>" ;
echo "<option> Choose your Grade here.." ; echo "</option>" ; echo "</option>" ; 
$grades = mysqli_query($conn, " SELECT Grades FROM `grades` ");
while ($data = mysqli_fetch_array($grades)){
echo "<option>" ; echo $data['Grades']  ; echo "</option>";
}	
echo "</select>"; 
echo "</div>";
 
 
//Number of lessons.

echo "<br>";
echo "<br>";
echo "<div align = 'center' >";
echo "<input type= 'number' name = 'no_of_lessons' placeholder = 'No of lessons per week?' >"; echo "</div>";
echo "<br>";
echo "<br>";

//Subjects

echo "<div align = 'center'>"; 
echo "<select name = 'subjects'>" ;
echo "<option> Choose your Subject" ; echo "</option>" ; echo "</option>" ; 
 
if(array_key_exists('subjects' , $_GET)) {

$description = join(' ' , $_GET['subjects']);
$subs = " {$description} is my favorite subject...";
	echo "$subs";
}

$results = mysqli_query($conn, "SELECT * FROM subjects");
while ($data = mysqli_fetch_array($results)){
echo "<option>" ; echo $data['subjects']  ; echo "</option>";
}	
echo "</select>"; 
echo "</div>";


 
 
 ?>