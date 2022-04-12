<?php 
$date = date('d/m/Y');	  echo $date ;    	 
?>

<?php 	

echo "<td>";	echo "<div align = 'center'>"; 
echo "<select name = 'topics_content'>" ;

echo "<option> Choose your Topics" ; echo "</option>" ; 
$topics_topics =  (mysqli_query($conn, " SELECT `Topics` FROM `$subjects` WHERE `Grades` = '$grader' "));


while ($data = mysqli_fetch_array($topics_topics))
		{
echo "<option>" ; echo $data['Topics']  ;  echo "</option>";			
}	
echo "</select>"; 
echo "</div>";
echo "</td>";

 ?>


 
 <?php 
 	
echo "<td>";	echo "<div align = 'center'>"; 
echo " <b> By the end of the lesson<br>pupils Should Be Able to<br> </b>: 
<select name = 'objectives'>" ;
echo "<option> Choose your Objectives" ; echo "</option>" ; 
echo "</option>" ; 
$topics_objectives = mysqli_query($conn, " SELECT Objectives FROM `$subjects` WHERE Grades = '$grader' ");
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
$competencies = mysqli_query($conn, " SELECT Competencies FROM competencies  ;  ");
while ($data = mysqli_fetch_array($competencies)){

echo "<option>" ; echo $data['Competencies']  ; echo "</option>";
}	
echo "</select>"; 

echo "</div>";
 echo "</td>"; 
 
 
  ?>
  
 <?php 
 echo "<td>";	echo "<div align = 'center'>"; 
echo "<select name = 'Reference'>" ;
echo "<option> Choose your References here..." ; echo "</option>" ; echo "</option>" ; 
$references = mysqli_query($conn, " SELECT `Reference` FROM `$subjects` WHERE `Grades` = '$grader' ");
while ($data = mysqli_fetch_array($references)){
echo "<option>" ; echo $data['Reference']  ; echo "</option>";
}	
echo "</select>"; 
echo "</div>";
 echo "</td>"; 
 
 ?>


 
 <?php 	
echo "<td>";	echo "<div align = 'center'>"; 
echo "<select name = 'Resources'>" ;
echo "<option>" ; echo "</option>" ; 
echo "</option>" ; 
$resources = mysqli_query($conn, " SELECT `Resources` FROM `mathematics`; ");
    	
while ($data = mysqli_fetch_array($resources)){
echo "<option>" ; echo $data['Resources']  ; echo "</option>";
}	
echo "</select>"; 
echo "</div>";
 echo "</td>"; 
?>
 
<?php 

echo "<td>";	echo "<div align = 'center'>"; 
echo "<select name = 'MethodsAndActvities'>" ;
echo "<option> Choose your Methods and Activities" ; echo "</option>" ; echo "</option>" ; 
$methodology = mysqli_query($conn, " SELECT `Methods And Activities` FROM `methods and activities` WHERE `Grades` = '$grader' ");
while ($data = mysqli_fetch_array($methodology)){
echo "<option>" ; echo $data['Methods and Activities']  ; echo "</option>";
}	
echo "</select>"; 
echo "</div>";
 echo "</td>";
?>

<?php
echo "<td>";	echo "<div align = 'center'>"; 
echo "Evaluation"; echo "</div>";
 echo "</td>";
 ?>

</tr>
