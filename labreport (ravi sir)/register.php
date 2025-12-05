<?php
//connect to database
$db=mysqli_connect("localhost","root","","authentication");
if(isset($_POST['register_btn']))
{
	session_start();
	$username=mysqli_real_escape_string($db,$_POST['username']);
	$email=mysqli_real_escape_string($db,$_POST['email']);
	$password=mysqli_real_escape_string($db,$_POST['password']);
	$password2=mysqli_real_escape_string($db,$_POST['password2']);
if($password==$password2)
{
	//create user
	
	$sql="insert into users(username,email,password) VALUES('$username','$email','$password')";
	
	mysqli_query($db,$sql);
	
}
else
{
	$_SESSION['message']="The two password do not match";
	
}
}	

?>


<!DOCTYPE html>
<html>
<head>
<title> Register</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="header">
 <h1> Register</h1>
 </div>
 <form method="post" >
 <table>
 <tr>
 <td>Username:</td>
 <td><input type="text" name="username" class="textInput"></td>
 </tr>
 <tr>
 <td>Email:</td>
 <td><input type="email" name="email" class="textInput"></td>
 </tr>
 <tr>
 <td>Password:</td>
 <td><input type="password" name="password" class="textInput"></td>
 </tr>
 <tr>
 <td>Password Again:</td>
 <td><input type="password" name="password2" class="textInput"></td>
 </tr>
 <tr>
 <td>:</td>
 <td><input type="submit" name="register_btn" value="Register"></td>
 </tr>
 </table>
 </form>
 </body>
 </html>
 