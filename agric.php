<!DOCTYPE HTML>
<html>
<head>
<title>Topics.</title>
</head>
<body bgcolor="FF89FF">

 

<?php
include 'configure.php';
$conn = mysqli_connect($hostName , $userName , $password , $database);


?>

<form action= "get_script_topic_and_content.php" method="POST">

<table border="2" bgcolor="fbf4ff">

		<tr>

		<th>Date</th>
		<th>Topics</th>
		<th>Objectives</th>
		<th>Competencies</th>
		<th>Media</th>
		<th>References</th>
		<th>Assumed Knowledge</th>
		<th>Methods and Activities</th>
		<th>Evaluation</th>
		
		</tr>
		
	<tr>
		
		<td>
		
			<?php
		
		print (Date ("l f d, y"));
		
		?>
		
		</td>
		
			<td>
			
			<br>TOPICS<br>
			
	 		
			
	 <select name = "topics">
		<option value="Reading">Reading</option>
		<option value="Writing">Writing</option>
		<option value="Speaking">Speaking</option>
	</select>
		
			<br>
			<br>
			
			NUMBER OF LESSONS
		<input type="number" name="Number Of Lessons">	
			
			</td>
			
			
			<td>By the end of the lesson pupils should be able to:
		
			<br>
<select name = "objectives">
<option value="read the set words">read the set words</option>
<option value="Identify words phonetically">Identify words phonetically</option>
		<option value="Say words">Say words</option>
			</td>			
		
		<td> Competencies </td>
						<br>
		<td>  <select name = "competencies">
		<option value="read the set words"> getting from database </option>
			</td>	
			
			
			
			
			<td>
			<input type= "checkbox" name="work" > Work Cards<br>
			<input type= "checkbox" name= "charts" > Charts<br>
			<input type= "checkbox" name="flash" > Flash Cards<br>
			<input type= "checkbox" name="you_tube" > YouTube Videos<br>
			<input type= "checkbox" name="wiki" > Wikipedia<br>
			<input type= "checkbox" name="posta" > Posters<br>
			
			
			</td>
			
			
			<td>Generated automatically. </td>
			
			
			<td>Word identification, Pronunciation.</td>
			
			
			<td>This section is generated automatically during rendering. </td>
			
			
			<td>      </td>
			
		</tr>
		
	
</table>

<input type="submit" name="next" value="NEXT">
	</form>
<?php
mysqli_close($conn); 
?>
</body>
</html>					