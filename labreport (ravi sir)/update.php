<?php
$id=$name=$address=$phone=$email=$gender=$dob="";

if(isset($_POST["btnUpdate"]))
{
		$id=$_POST["txtID"];
		$name=$_POST["txtName"];
		$address=$_POST["txtAddress"];
		$phone=$_POST["txtPhone"];
		$email=$_POST["txtEmail"];
		$gender=$_POST["txtGender"];
		$dob=$_POST["txtDOB"];
	//database connectivity
	$conn=mysqli_connect("localhost","root","","lict_bca_4_db");
	if(!$conn)
	{
		die ("Database connection fail");
	}
	//set sql command
	//$query="insert into tbStudent(ID,Name,Address,Phone,Email,Gender,DOB)
	       // values(NULL,'$name','$address','$phone','$email','$gender','$dob')";
$query="update tbStudent set Name='$name',Address='$address',
Phone='$phone',Email='$email',Gender='$gender',DOB='$dob' where ID='$id'";  
	
	if(mysqli_query($conn,$query))
	{
		echo "data updated";
	}
	else
	{
		echo "data update fail";
	}
	
}


?>

<html>
<head>
<title>Student Record Update</title>

</head>
<body>
<form action="update.php" method="post">
<h1> Student Record Updation Form</h1>
<table>
 <tr>
	<td>ID</td>
	<td><input type="text" name="txtID" value="<?php echo $id; ?>"></td>
</tr>
<tr>
	<td>Name</td>
	<td><input type="text" name="txtName" value="<?php echo $name; ?>"></td>
</tr>
<tr>
	<td>Address</td>
	<td><input type="text" name="txtAddress" value="<?php echo $address; ?>"></td>
</tr>
<tr>
	<td>Phone</td>
	<td><input type="text" name="txtPhone" value="<?php echo $phone; ?>"></td>
</tr>
<tr>
	<td>Email</td>
	<td><input type="text" name="txtEmail" value="<?php echo $email; ?>"></td>
</tr>
<tr>
	<td>Gender</td>
	<td><input type="text" name="txtGender" value="<?php echo $gender; ?>"></td>
</tr>
<tr>
	<td>DOB</td>
	<td><input type="text" name="txtDOB" value="<?php echo $dob; ?>"></td>
</tr>
<tr>
	<td></td>
	<td align="right"><input type="submit" name="btnUpdate" value="Update"></td>
</tr>

</table>
</form>

</body>
</html>
