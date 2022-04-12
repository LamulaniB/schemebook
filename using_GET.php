<html>
<head>
<title>My Subject selector</title>
</head>

<form action = "<?php echo $_SERVER['PHP_SELF']; ?>" method = "GET" >
<select name="subjects[]"  id = "subs" multiple>

		<option value="Agriculture">Agriculture</option>
		<option value="English">English</option>
		<option value="Ndebele">Ndebele</option>
		<option value="Mathematics">Mathematics</option>
		<option value="Heritage and Social Studies">Heritage and Social Studies</option>
		<option value="Science and Technology">Science and Technology</option>
		<option value="PE and Sport And Mass Display">PE and Sport And Mass Display</option>
		<option value="Visual and Performing Arts">Visual and Performing Arts</option>
</select>

<input type= "submit"   name="selector" value="send">
</form>



<?php 
if(array_key_exists('subjects' , $_GET)) {
$description = join('selector ' , $_GET['subjects']);
$subs = " {$description} is my favorite subject...";
	echo "$subs";
}
 ?>

<p> These Are The Words....</p>

<p id="para">Hit me</p>

<script>
function fun() {
	alert("WELCOME TO JAVA SCRIPT");
	document.getElementById("subs").style.display = "none";
}
</script>

<button onclick = "fun()">CLICK HERE</button>


 
 
 
