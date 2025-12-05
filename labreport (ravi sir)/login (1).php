<?php
session_start();

$db=mysqli_connect("localhost","root","","authentication");
if(isset($_POST['login_btn']))
{
	
	$username=mysqli_real_escape_string($db,$_POST['username']);
	$password=mysqli_real_escape_string($db,$_POST['password']);
	$password=md5($password);
	$sql="SELECT * FROM users WHERE username='$username' AND password='$password'";
	$result=mysqli_query($db,$sql);
	if(mysqli_num_rows($result)==1)
	{
		$_SESSION['message']="You are logged in ";
		$_SESSION['username']=$username;
		
		
		
	}
	else
	{
		$_SESSION['message']="Username and password incorrect";
		
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
 <form method="post" action="home.php">
 <table>
 <tr>
 <td>Username:</td>
 <td><input type="text" name="username" class="textInput"></td>
 </tr>
 
 <tr>
 <td>Password:</td>
 <td><input type="password" name="password" class="textInput"></td>
 </tr>
 
 <tr>
 <td>:</td>
 <td><input type="submit" name="login_btn" value="Login"></td>
 </tr>
 </table>
 </form>
 </body>
 </html>
 