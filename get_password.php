<!DOCTYPE html>
<html>
<head>
<title>Login Page.</title>

<link rel="stylesheet" type="text/css" href="index.css">

</head>
<body>


<?php

 

echo "<table boarder = '2'>";

echo "<form action = 'get_Password.php' method = 'POST' >" ;



echo "<tr> <td>";
echo "<br> <br>";
echo "OR you can enter the email that you registered to receive your password via email.";
echo "<br> <br>";
echo "Recovery Email.";
echo "<input type = 'email' name = 'email'  >";
echo "<br> <br>";
echo " </td>";

echo "<tr> <td>";
echo "<input type = 'submit' name = 'recovery' value = 'GET MY PASSWORD'>";
echo " </td>";


echo "</table>";

 


?>





</body>
</html>