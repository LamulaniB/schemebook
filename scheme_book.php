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
$grader 	= $_POST['grades'] ;
$subjects 	= $_POST['subjects'] ;
$terms 	= $_POST['terms'];
$lessons 	= $_POST['lessons'];


echo " This scheme book is for $grader"	;
echo " , the subject is $subjects "		;
echo " , term  $terms "			;
echo " , with  $lessons lessons per week👊🏿️"	;
?>
<br>


 <table border= '2' cellpadding= '3' cellspacing= '0'>

				<tr>
		<td>	Date/Week 	</td>
		<td>	Topic		</td>
		<td>	Objectives	</td>
		<td>	Competencies	</td>
		<td>	References	</td>
		<td>    Resources	</td>
		<td>	Methods and Activities </td>
		<td>	Evaluation	</td>
			</tr> 


<tr><td>
<?php include 'agric1.php'; ?>
</td></tr>


<input type= 'submit' name= 'update' value= 'Update' >
</form>
</table>
</body>
</html>
