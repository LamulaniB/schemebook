<!DOCTYPE html>
<html>
<head>
<title>Login Page.</title>

<link rel="stylesheet" type="text/css" href="index.css">

</head>

<div align="center">

<table border="1" cellspacing="2" cellpadding="9" bgcolor="scarlet" >



<div align="center">

<?php echo "<h1> Login in. </h1> ";  ?>

<table border="1" cellspacing="2" cellpadding="9" bgcolor="cyan" >

<form action= "get_loging.php"  method="POST">


<tr><td> <h3>  Username: </h3> </td><td> <input type="text" name="username" required> </td></tr>

<br>
<br>

<tr><td> 
<h3>Password: </h3> </td> <td>
<input type="password" name="password" required>
</td> </tr>

</div>

<tr><td>
<input type="submit" name="Submit"  Value = "Log In"/></td>
</form>


<td>
<form action= "sign-up_reg.php"  method="POST">
<input type="submit" name="sign-up"  Value = "Sign Up"/>
</form>
<br>
<br>
<form action= "get_password.php"  method="POST">
<input type="submit" name="forgot"  Value = "Forgot Password"/>
</form>
</td>
</tr>



</div>
</table>

<br>
<br>






</table>
</div>






</body>
</html>