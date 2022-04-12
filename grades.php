<!DOCTYPE HTML>
<html>
<head>
<link href="index.css" type="text/css" rel="stylesheet"/>
<title>
RECORD FETCHER
</title>
</head>
<body>

<?php
include "configure.php";
$conn = mysqli_connect( $hostName ,$userName, $password, $database);
$db_found = mysqli_select_db($conn , $database);

	?>	
	
	
					
<table border="2" cellpadding = "6" cellspacing = "3" align="center">
<form action="scheme_book.php" method = "POST">



<?php 
echo "<tr>

<td> <h1> Grades:</h1> </td> 
<td>"   ;


echo "<select name = 'grades'>" ;
echo "<option> Choose Grades here..." ; echo "</option>" ; 
$topics_topics = mysqli_query($conn, " SELECT * FROM `grades` ");
while ($data = mysqli_fetch_array($topics_topics))
		{
echo "<option>" ; echo $data['Grades']  ; echo "</option>" ;
}	
echo "</select>" ; 
	 	
  echo "</td>" ; echo "</tr> " ;
?>   
 
 
 <?php
echo "<tr>

<td> <h1> Term Selector </h1></td> <td>"   ;
$sql = "SELECT * FROM `term` " ;
$term_selector = mysqli_query($conn , $sql);
while ($data = mysqli_fetch_array($term_selector)){
echo  $data['Term'] . " <input type = 'checkbox' name = 'terms' > <br> " ; 
}
 echo "</td>";
 echo "</tr>" ;
?>

 <?php 
 echo "<tr>

<td> <h1> Number of Lessons  </h1></td> <td>"; echo "<input type = 'slider' name = 'lessons' >" ;
 ?>
 
 
<?php 	
echo " <tr><td> <h1> Subjects:</h1> </td>" ;
echo "<td>";	echo "<div align = 'center'>"; 
echo "<select name = 'subjects'>" ;
echo "<option> Choose your Subjects Here." ; echo "</option>" ;

$subject_label = mysqli_query($conn, " SELECT subjects FROM `subjects` ");
while ($data = mysqli_fetch_array($subject_label)){
echo "<option>" ; echo $data['subjects']  ; echo "</option>";
}	
echo "</select>"; 
echo "</div>";
 echo "</td>";
 
 ?>
 

   </td></tr>
   
   
   
   
<tr><td>
<input type="submit" name="send" value="Send"/>
</form>
  </td></tr>
<?php mysqli_close($conn); ?>
</table>













</body>
</html>
