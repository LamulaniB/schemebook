<!DOCTYPE HTML>
<html>
<head>
<title>REGISTRATION</title>
</head>
<body>



 <form action="insert_db_1.php" method="POST">
 <div align="center">
 <table border="2" cellspacing="6" cellpadding="1">
 <tr>
	 <td> Name:</td>  
	 <td><input type="text" name="username" required />  </td>
 
 </tr>
 <br>
 
 
<tr>
	<td>Surname:</td>  
	<td><input type="text" name="sbongo" required /> </td>
</tr>
<br> 

<tr>
	<td>Email:</td>
	<td><input type="text" name="email" required />  </td>
</tr>
<br> 

<tr>
	<td>Phone Number:</td>
	<td><input type="tel" placeholder="start with 263 without +" name="phone"/> 
</td>
</tr> 

<br> 

<?php 

echo " <tr><td>Password:</td> " ;
echo "<td> $Password = <input type= 'password'  name= 'password' required/> " ;


echo " <tr><td>Confirm Password:</td>" ;
echo "<td> $ConfirmPassword =  <input type=  'password' name= 'Cpassword' required/> </td> "; 

?>

<?php 

//if(isset($Password) && ( $Password != $ConfirmPassword)) 
//{ echo 'Your Password are not the same.';}

 ?>
</td>
</tr>
<br> 

<tr><td><input type="submit" name="sender" value="SEND"> </td> 
</tr>
</table>

</div> 

</form>
 
 
 
 
</body>
</html>