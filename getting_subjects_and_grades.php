<!DOCTYPE HTML>
<html> 
<head> 
<title> Getting Subjects and Grades. </title>
</head>
<body> 

<!-- <form action = "<?php echo $_SERVER['PHP_SELF']; ?>" method = "GET" >
<select name="subjects[]" multiple> 
<button onclick="myFunction()"> Copy to subjects </button>

<script>
function myFuntion() 
		{
		document.getElementById("Agriculture").value = document.getElementById("subjects").value;
		}

</script>
<option value="Agriculture">Agriculture</option>
 	<option value="English">English</option>
		<option value="Ndebele">Ndebele</option>
		<option value="Mathematics">Mathematics</option>
		<option value="Heritage and Social Studies">Heritage and Social Studies</option>
		<option value="Science and Technology">Science and Technology</option>
		<option value="PE and Sport And Mass Display">PE and Sport And Mass Display</option>
		<option value="Visual and Performing Arts">Visual and Performing Arts</option>
</select>
-->-->

<input type= "submit"   name="selector" value="send">
<br><br><br>
</form>

<?php if(array_key_exists('selector' , $_GET)) {
			$description = join(' ' , $_GET['subjects']);
			echo "{$description}";
	}
	
	 ?>


</body>
</html>
