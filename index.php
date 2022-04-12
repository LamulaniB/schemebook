<!DOCTYPE HTML>
<html>
<head>
<title><<<<<<<<<Index>>>>>>>>>></title>

<?php 
//header("Content-Type: application/vnd.ms-word");
//header("Expires: 0");
//header("Cache-Control: must-revalidate , post-check = 0, pre-check = 0");
//header("content-disposition:attachment;filename=Report.docx");

?>



</head>

<body>
<?php  ?>

<div class="form-group" align="center">
<form action= "insert_db_1.php" method = "POST">


<h3 style="float: inherit;">Please Sign up before accessing any Schemes of work...</h3>
<table border="3" cellspacing="3" cellpadding="4" bgcolor="magenta"> 

<tr bgcolor="cyan">
<td>
Username:<td> <input type = "text" name = "username" placeholder = "Enter name..." required /></td>
</td></tr>

<tr bgcolor="yellow"><td>
Password: <td><input type="password" name="password" placeholder="Enter Password" required /></td>
</td></tr>

<br>

<tr bgcolor="green"><td>
Email: <td><input type="email" name="email" placeholder="Enter email" required /></td>
</td></tr>

<br>

<tr bgcolor="purple"><td>
Phone Number: <td><input type="tel" name="phone" placeholder="Enter phone with Whats App" required /></td>
</td></tr>

<br>

<tr>
<td>
<input  type = "submit" name = "submit" value = "Log In" />
</form></td>

<td>
<form action= "sign-up_reg.php">
<input type="submit" name="sign-up"  Value = "Sign Up"/>
</form> </td>

<td>
<form action= "get_password.php">
<input type="submit" name="forgot"  Value = "Forgot Password"/>
</form>

</table>
</body>
</html>


