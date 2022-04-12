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
?>
<?php
$result = mysqli_query($conn , " SELECT * FROM `mathematics` WHERE `Grade` = 'Grade 5' ");

if(mysqli_num_rows($result) > 0)
{  ?> 
<table boarder = '3'>
<tr><td> Fname </td></tr>
<tr><td> Fname </td></tr>
<tr><td> Fname </td></tr>
<tr><td> Fname </td></tr>
<tr><td> Fname </td></tr>

<?php

$i = 0;
while ($row = mysqli_fetch_array($result)) { 
 ?>
<tr> <td> <?php echo $row['topics'] ; ?> </td>  
<tr> <td> <?php echo $row['topics'] ; ?> </td> 
<tr> <td> <?php echo $row['topics'] ; ?> </td> 
<tr> <td> <?php echo $row['topics'] ; ?> </td> 
<tr> <td> <?php echo $row['topics'] ; ?> </td> 
<?php
$i++;
 }
 ?>
 </table>
 <?php }else {echo "No records found"; } ?>
 
  
<form action = "<?php echo $_SERVER['PHP_SELF']; ?>" method = "GET" >
Meee  <input type="radio" name="box[]"  id = "subs" multiple>
<?php if (isset($box) && $box == "Meee ") echo "checked";?>

<?php for($s = 0 ; $s <= 10 ; $s++) {echo "<table border = '3' ><tr><td> hello <input type = 'checkbox' name = 'box[]'  id = 'subs' multiple >  </td></tr>" ; }?>

<input type = "submit" name = "sender" value = "SEE">

</form>

<?php 
if(array_key_exists('box' , $_GET)) {
$description = join('sender' , $_GET['box']);
$subs = " {$description} is my favorite subject...";
	echo "$subs";
}
 ?>


</body>
</html>
