<!DOCTYPE html>
<html>

<head>

<title>GetForms</title>


<?php 
header ("Location: http://localhost:8080/wordpress/2021/12/17/rubricpage")
?>


</head>


<body>


<form action="topics.php" method="$_GET"

<h5>Date:____</h5>
<?php
echo $_GET["date"];
echo $_GET(Date("d M Y")];
?>


<h5>Topic:____</h5>
<?php
echo $_GET["red"];
echo $_GET["write"];
echo $_GET["speak"];
?>

<h5>Lesson Number:____</h5>
<?php
echo $_GET["num_lessons"];
?>

<h5>Objectives:____</h5>
<?php
echo $_GET["obj1"];
echo $_GET["obj2"];
echo $_GET["obj3"];
?>

<h5>Media:____</h5>
<?php
echo $_GET["work"];
	break;
echo $_GET["charts"];
echo $_GET["flash"];
echo $_GET["youtube"];
echo $_GET["wiki"];
echo $_GET["posta"];
?>


<h5>Grade:____</h5>
<?php
echo $_GET["levels"];
?>


<h5>Surname:____</h5>
<?php
echo $_GET["Surname"];
?>

</body>
</html>>