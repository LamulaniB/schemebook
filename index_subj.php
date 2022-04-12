<!DOCTYPE HTML>
<html>
<head>
<title>
RECORD FETCHER
</title>
</head>
<body>

<?php
include 'configure.php';
$conn = mysqli_connect($hostName , $userName , $password , $database);
$records = mysqli_query($conn, "SELECT * FROM subjects");
$while($data = mysqli_fetch_array($records)) {}

	?>
	
<h2>Scope And Sequence.</h2>


 

<table border="2" cellpadding="3" cellspacing="0">

				<tr>
		<td>	Date							</td>
		<td>	Topic							</td>
		<td>	Objectives					</td>
		<td>	References					</td>
		<td>	Media							</td>
		<td>	Methods and Activities	</td>
		<td>	Evaluation					</td>
			</tr>
		
	<tr>	
<td> 1 </td>
<td> 2 </td>
<td> 3 </td>
<td> 4 </td>
<td> 5 </td>
<td> 6 </td>
<td> 7 </td>

<?php mysqli_close($conn); ?>
</body>
</html>