<!DOCTYPE HTML>
<html>
<head>
<title>Topics.</title>

<?php 

//header("Content-Type: application/vnd.ms-word");
//header("Expires: 0");
//header("Cache-Control: must-revalidate , post-check = 0, pre-check = 0");
//header("content-disposition:attachment;filename=Myschemebook.docx");

?>

</head>
<body>

<div class="coveredTopics" align="left">
<h4> <?php $_POST['subjects'];  ?> </h4>
<br>
<h4> <?php $_POST['grades'];  ?> </h4>
<br>
<div class="coveredTopics" align="center">
<h4>Topics to be covered</h4> <br>
<?php echo $_POST['topics_content'] ; ?>  <br>
<?php echo $_POST['topics_content'] ; ?>
<?php echo $_POST['lessons'];?>


</div>





<table border="1" cellspacing="4" cellpadding="3">

		<tr>
		
		<th>Date/Week</th>
		<th>Topics</th>
		<th>Objectives</th>
		<th>Competencies</th>
		<th>References</th>
		<th>Media</th>
		<th>Methods and Activities</th>
		<th>Evaluation</th>
		
		</tr>

<tr><?php include "getScript.php";  ?></tr>



<input type = "submit" name = "downloader" value = "DOWNLOAD DOCUMENT" >




</table>



</body>
</html>
