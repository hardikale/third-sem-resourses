<?php
$id="";

if(isset($_POST["btnDelete"]))
{
		$id=$_POST["txtID"];
		
	//database connectivity
	$conn=mysqli_connect("localhost","root","","lict_bca_4_db");
	if(!$conn)
	{
		die ("Database connection fail");
	}
	//set sql command
	//$query="insert into tbStudent(ID,Name,Address,Phone,Email,Gender,DOB)
	       // values(NULL,'$name','$address','$phone','$email','$gender','$dob')";
		 $query="delete from tbStudent where ID='$id'";  
	
	if(mysqli_query($conn,$query))
	{
		echo "data deleted";
	}
	else
	{
		echo "data deletion fail";
	}
	
}


?>

<html>
<head>
<title>Student Record Delete</title>

</head>
<body>
<form action="delete.php" method="post">
<h1> Student Record Deletion Form</h1>
<table>
 <tr>
	<td>ID</td>
	<td><input type="text" name="txtID" value="<?php echo $id; ?>"></td>
</tr>

<tr>
	<td></td>
	<td align="right"><input type="submit" name="btnDelete" value="Delete"></td>
</tr>

</table>
</form>

</body>
</html>
