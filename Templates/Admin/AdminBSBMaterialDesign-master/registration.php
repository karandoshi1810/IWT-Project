<?php
session_start();
include 'Connection.php';
if(isset($_POST['register']))
{
	$namesurname = $_POST['namesurname'];
	$email = $_POST['email'];
	$pwd = $_POST['password'];
	$cpwd = $_POST['confirm'];

	$sql = "insert into registration values('".$namesurname."','".$email."','".$pwd."','".$cpwd."')";
	if(mysqli_query($conn,$sql))
	{
		echo "Record Saved";
		header("Location:index.php");
		
		$_SESSION["uname"] = $namesurname;
		$_SESSION["email"] = $email;
		$_SESSION["admin"] = true;	
	}
	else
	{
		echo "Record not saved";
	}

}
?>