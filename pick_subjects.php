<!DOCTYPE HTML>
<html>
<head>
<title>
Pick A Subject....
</title>
</head>
<body>

<?php 
echo "<form action = 'to_index.php' method = 'POST'> ";
echo "Pick a Subject here";
echo "<select name = subject_picker>";
echo "<option>"; echo 'Agriculture' ; echo "</option>";
echo "<option>"; echo 'Ndebele' ; echo "</option>";
echo "<option>"; echo 'English' ; echo "</option>";
echo "<option>"; echo 'Maths' ; echo "</option>";
echo "</select>";
echo " <input type = 'submit' name = 'index' value = 'NEXT'>" ;
echo "</form>";

 ?>

</body>
</html>