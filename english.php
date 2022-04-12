<!DOCTYPE HTML>
<html>
<head>
<title>Topics.</title>
</head>
<body bgcolor="FF89FF">

 <form action = "$_SERVER['PHP_SELF']" method = 'GET' > ";	

<?php
include 'configure.php';
$conn = mysqli_connect($hostName , $userName , $password , $database);

echo " <input type = 'submit' id = 'sender' name = 'go' value = 'GO' >" ;


echo " <select name[] = $grader > 
<option> ECD A </option>
<option> ECD B </option>
<option> GRADE 1 </option>
<option> GRADE 2 </option>
<option> GRADE 3 </option>
<option> GRADE 4 </option>
<option> GRADE 5 </option>
<option> GRADE 6 </option>
<option> GRADE 7 </option>
</select> ";

if($grader) {

$SQL = " SELECT * FROM `topics` WHERE `Grade` = $_GET$['grader'] " ; 
$gettopics = mysqli_query($conn , $SQL);
}

echo "</form>"  
?>




<form action="get_script_topic_and_content.php" method="POST">
<table> 
<nav>
			<td><tr>		
							<li>FIND US.</li>
							
			</tr>
			</td>
			
			<tr>
			<td>
							<li>EDUCATIONAL MEDIA.</li>
							
			</tr>
			</td>		
					
			<tr>
			<td>	
							<li>TECHNICAL SUPPORT.</li>
			</tr>
			</td>
			
			<tr>
			<td>
							<li>WHATS APP SUPPORT.</li>
							
			</tr>
			</td>
			
			<tr>
			<td>
							<li>REPORT A BUG.</li> 
							
			</tr>
			</td>
			
</nav>

</table>




<p>Use this table below to customize your own scheme book. Please be advised that some sections of your scheme book will <br> 
be automatically generated during the rendering process, such as references and methods and activities <br>
since they  are heavily depended on the other sections of your scheme book. Also note that you can edit your final scheme book to fully <br>
customize it to your actual settings. 
</p>

<table border="2" bgcolor="ab44ff">

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
			
	<?php echo $gettopics ;  ?>  		
			
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
		
		</form>
</table>



<input type="submit" name="next" value="NEXT">

<?php
mysqli_close($conn); 
?>
<footer>
			<ol>
				<li>Tech-Stars.</li>
				<li>Contact Us Here.</li>
				<li>Technical Support.</li>
				<li>Social Media</li>
				<li>About Us.</li>
			</ol>
</footer>
</body>
</html>					