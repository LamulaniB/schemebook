<!DOCTYPE HTML>
<html>
<head>
<title><<<<<<<<<Index>>>>>>>>>></title>

<?php 

header("Content-Type: application/vnd.ms-word");
header("Expires: 0");
header("Cache-Control: must-revalidate , post-check = 0, pre-check = 0");
header("content-disposition:attachment;filename=Report.docx");

?>



</head>

<body>

<?php
$filename = "topics.php";
$html = file_get_contents($filename);
$tags = "<br>";
$test = strip_tags($page , $html);
$breaks = array("<br/>" , "<br>" , "<br/>");
$text = str_ireplace($breaks , "\r\n" , $test);
$text = iconv('UTF-8' , 'ASCII//TRANSLIT' , $text);
$handle = fopen("newdoc.docx" , "w+");
fwrite($handle, $text);
fclose($handle);
 ?>

</body>
</html>