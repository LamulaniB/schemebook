<!DOCTYPE html>
<html>
<head>
<title>Schemes_</title>
</head>
<body>

<?php
include 'configure.php';
$conn = mysqli_connect($hostName , $userName , $password , $database);
$records = mysqli_query($conn, "SELECT * FROM subjects");
while($data = mysqli_fetch_array($records))
	?>

<select name="subjects">
<option><?php echo $data['subjects']; ?> </option>
<option></option>
<option></option>
<option></option>
<option></option>



</select>



<table border="2" cellpadding="3" cellspacing="0">
<tr>
		<td>Date</td>
		<td>Topic</td>
		<td>Objectives</td>
		<td>References</td>
		<td>Media</td>
		<td>Methods and Activities</td>
		<td>Evaluation</td>
	</tr>
<?php 


$table_selector = "SELECT * FROM subjects";
$records = mysqli_query($conn, $table_selector);
$data = mysqli_fetch_array($records);
foreach($data as $records => $val) 

{




?>

<tr>
	<td> <?php print date('d/m/y'); ?>      </td>
	<td> <?php  ?>      </td>
	<td> <?php  ?>		 </td>
	<td> <?php  ?>      </td>
	<td> <?php  ?>      </td>
	<td> <?php  ?>      </td>
	<td> <?php  ?>      </td>
</tr>

</table>

<?php } ?>


</body> 
</html> 
