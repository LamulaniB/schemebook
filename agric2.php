<!DOCTYPE HTML>
<html>
<head>
<link href="index.css" type="text/css" rel="stylesheet"/>
<title>
Scheme Book Maker
</title>
</head>
<body>



<?php
include 'configure.php';
$conn = mysqli_connect($hostName , $userName , $password , $database);

				echo "<div align = 'center'>"; 
				echo "<h2>Scheme Book</h2>"; 
				echo "<br>";


?>

<form action= "get_script_topic_and_content.php" method="POST" >
 <?php
$grader 		= 		$_POST['grades'] ;
$subjects	= 		$_POST['subjects'] ;
echo " This scheme book is for $grader";
echo " , the subject is $subjects ";
?>
<br>

<table border="2" cellpadding="3" cellspacing="0">

				<tr>
		<td>	Date/Week					</td>
		<td>	Topic							</td>
		<td>	Objectives					</td>
		<td>	Competencies				</td>
		<td>	References					</td>
		<td>	Media							</td>
		<td>	Methods and Activities	</td>
		<td>	Evaluation					</td>
			</tr>
			
<tr>
<?php		

$date = date('m/d/Y');
			echo "<td>" ;  echo $date ;   echo "</td>";
		 ?>

<?php 	
		echo "<td>";	echo "<div align = 'center'>"; 
echo "<select name = 'topics_content'>" ;
echo "<option> Choose your Topics" ; echo "</option>" ; 
$topics_topics = mysqli_query($conn, " SELECT Topics FROM $subjects  WHERE Grades = '$grader' ");
while ($data = mysqli_fetch_array($topics_topics))
		{
echo "<option>" ; echo $data['Topics']  ; echo "</option>";
}	
echo "</select>"; 
echo "</div>";
 echo "</td>";
 
 ?>
 
 <?php  	
		echo "<td>";	echo "<div align = 'center'>"; 
echo " <b> By the end of the lesson<br>pupils Should Be Able to<br> </b>: 



<select name = 'objectives'>" ;
echo "<option> Choose your Objectives" ; echo "</option>" ; echo "</option>" ; 
$topics_objectives = mysqli_query($conn, " SELECT Objectives FROM $subjects WHERE Grades = '$grader' ;  ");
while ($data = mysqli_fetch_array($topics_objectives)){
echo "<option>" ; echo $data['Objectives']  ; echo "</option>";
}	
echo "</select>"; 
echo "</div>";
 echo "</td>";
 
 ?>

 
 <?php  echo "<td>";	echo "<div align = 'center'>"; 
echo "<select name = 'competencies'>" ;
echo "<option> Choose your Competencies here" ; echo "</option>" ; echo "</option>" ; 
$competencies = mysqli_query($conn, " SELECT `Competencies` FROM `competencies` WHERE `Subjects` = '$subjects' ;  ");
while ($data = mysqli_fetch_array($competencies)){
echo "<option>" ; echo $data['Page']  ; echo "</option>";
}	
echo "</select>"; 
echo "</div>";
 echo "</td>"; 
  ?>
  
 <?php 
 echo "<td>";	echo "<div align = 'center'>"; 
echo "<select name = 'references'>" ;
echo "<option> Choose your References here" ; echo "</option>" ; echo "</option>" ; 
$references = mysqli_query($conn, "SELECT `Page` FROM `reference` WHERE `Grades` = '$grader' ;  ");
while ($data = mysqli_fetch_array($references)){
echo "<option>" ; echo $data['Page']  ; echo "</option>";
}	
echo "</select>"; 
echo "</div>";
 echo "</td>"; 
 
 ?>


 
 <?php 	
echo "<td>";	echo "<div align = 'center'>"; 
echo "<select name = 'media'>" ;
echo "<option>Select  media here." ; echo "</option>" ; 
echo "</option>" ; 
$methods = mysqli_query($conn, 
" SELECT
    *
FROM
    `media`
WHERE
    `Grades`
    	= '$grader' ");
    	
while ($data = mysqli_fetch_array($methods)){
echo "<option>" ; echo $data['media']  ; echo "</option>";
}	
echo "</select>"; 
echo "</div>";
 echo "</td>"; 
?>
 
<?php 

echo "<td>";	echo "<div align = 'center'>"; 
echo "<select name = 'MethodsAndActvities'>" ;
echo "<option> Choose your Methods and Activities" ; echo "</option>" ; echo "</option>" ; 
$methodology = mysqli_query($conn, "SELECT `Methods And Activities` FROM `methods and activities` WHERE `Grades` = '$grader' ");
while ($data = mysqli_fetch_array($methodology)){
echo "<option>" ; echo $data['Methods and Activities']  ; echo "</option>";
}	
echo "</select>"; 
echo "</div>";
 echo "</td>";


?>
</tr>







<?php
include 'configure.php';
$conn = mysqli_connect($hostName , $userName , $password , $database);

				echo "<div align = 'center'>"; 
				echo "<h2>Scheme Book</h2>"; 
				echo "<br>";






?>

<form action= "get_script_topic_and_content.php" method="POST" >
 <?php
$grader 		= 		$_POST['grades'] ;
$subjects	= 		$_POST['subjects'] ;
echo " This scheme book is for $grader";
echo " , the subject is $subjects ";
?>
<br>

<table border="2" cellpadding="3" cellspacing="0">

				<tr>
		<td>	Date/Week					</td>
		<td>	Topic							</td>
		<td>	Objectives					</td>
		<td>	Competencies				</td>
		<td>	References					</td>
		<td>	Media							</td>
		<td>	Methods and Activities	</td>
		<td>	Evaluation					</td>
			</tr>
			
<tr>
<?php		

$date = date('m/d/Y');
			echo "<td>" ;  echo $date ;   echo "</td>";
		 ?>

<?php 	
		echo "<td>";	echo "<div align = 'center'>"; 
echo "<select name = 'topics_content'>" ;
echo "<option> Choose your Topics" ; echo "</option>" ; 
$topics_topics = mysqli_query($conn, " SELECT Topics FROM $subjects  WHERE Grades = '$grader' ");
while ($data = mysqli_fetch_array($topics_topics))
		{
echo "<option>" ; echo $data['Topics']  ; echo "</option>";
}	
echo "</select>"; 
echo "</div>";
 echo "</td>";
 
 ?>
 
 <?php  	
		echo "<td>";	echo "<div align = 'center'>"; 
echo " <b> By the end of the lesson<br>pupils Should Be Able to<br> </b>: 



<select name = 'objectives'>" ;
echo "<option> Choose your Objectives" ; echo "</option>" ; echo "</option>" ; 
$topics_objectives = mysqli_query($conn, " SELECT Objectives FROM $subjects WHERE Grades = '$grader' ;  ");
while ($data = mysqli_fetch_array($topics_objectives)){
echo "<option>" ; echo $data['Objectives']  ; echo "</option>";
}	
echo "</select>"; 
echo "</div>";
 echo "</td>";
 
 ?>

 
 <?php  echo "<td>";	echo "<div align = 'center'>"; 
echo "<select name = 'competencies'>" ;
echo "<option> Choose your Competencies here" ; echo "</option>" ; echo "</option>" ; 
$competencies = mysqli_query($conn, " SELECT `Competencies` FROM `competencies` WHERE `Subjects` = '$subjects' ;  ");
while ($data = mysqli_fetch_array($competencies)){
echo "<option>" ; echo $data['Page']  ; echo "</option>";
}	
echo "</select>"; 
echo "</div>";
 echo "</td>"; 
  ?>
  
 <?php 
 echo "<td>";	echo "<div align = 'center'>"; 
echo "<select name = 'references'>" ;
echo "<option> Choose your References here" ; echo "</option>" ; echo "</option>" ; 
$references = mysqli_query($conn, "SELECT `Page` FROM `reference` WHERE `Grades` = '$grader' ;  ");
while ($data = mysqli_fetch_array($references)){
echo "<option>" ; echo $data['Page']  ; echo "</option>";
}	
echo "</select>"; 
echo "</div>";
 echo "</td>"; 
 
 ?>


 
 <?php 	
echo "<td>";	echo "<div align = 'center'>"; 
echo "<select name = 'media'>" ;
echo "<option>Select  media here." ; echo "</option>" ; 
echo "</option>" ; 
$methods = mysqli_query($conn, 
" SELECT
    *
FROM
    `media`
WHERE
    `Grades`
    	= '$grader' ");
    	
while ($data = mysqli_fetch_array($methods)){
echo "<option>" ; echo $data['media']  ; echo "</option>";
}	
echo "</select>"; 
echo "</div>";
 echo "</td>"; 
?>
 
<?php 

echo "<td>";	echo "<div align = 'center'>"; 
echo "<select name = 'MethodsAndActvities'>" ;
echo "<option> Choose your Methods and Activities" ; echo "</option>" ; echo "</option>" ; 
$methodology = mysqli_query($conn, "SELECT `Methods And Activities` FROM `methods and activities` WHERE `Grades` = '$grader' ");
while ($data = mysqli_fetch_array($methodology)){
echo "<option>" ; echo $data['Methods and Activities']  ; echo "</option>";
}	
echo "</select>"; 
echo "</div>";
 echo "</td>";


?>
</tr>








<input type="submit" name="update" value="Update">
</form>


<input type="submit" name="update" value="Update">
</form>




</body>
</html>

