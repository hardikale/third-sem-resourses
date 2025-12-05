<?php
session_start();
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
<h1> Home<h1>
<div><h4>Welcome 
<?php 

echo $_SESSION['username']=$username;?></h4></div>

<div><a href="logout.php">Logout</a></div> 
 </body>
 </html>
 