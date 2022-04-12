<!DOCTYPE HTML>
<html>
<head>
<title>Topics.</title>
</head>

<body>

<?php include "get_script_topic_and_content.php";  ?>

<?php 
header("Content-Type: application/vnd.ms-word");
header("Expires: 0");
header("Cache-Control: must-revalidate , post-check = 0, pre-check = 0");
header("content-disposition:attachment;filename=Myschemebook.docx");

?>



</body>
</html>



