<?php
session_start();
include 'Connection.php';
if(isset($_POST['login']))
{
	$email = $_POST['email'];
	$pwd = $_POST['password'];
	//$email_ptrn = /@/i;
	if(strlen($email)!=0 && strpos($email, '@') !== false && (strpos($email, 'gmail') !== false || strpos($email, 'yahoo') !== false || strpos($email, 'marwadiuniversity.ac.in') !== false ))
	{
		if(strlen($pwd)!=0 && strlen($pwd)>6)
		{
			$sql = "select * from registration where email='".$email."' and password='".$pwd."' ";
			$result = mysqli_query($conn,$sql);
			echo "<br>";
			$row= mysqli_fetch_array($result);
			if(is_array($row))
			{
				if($row['email']==$email && $row['password'] == $pwd)
				{
					$namesurname = $row['name'];
					
					$_SESSION['email'] = $email;
					$_SESSION['uname'] = $namesurname;
					$_SESSION['admin'] = true;
					header("Location:../../index.php");
				
				}
				else
				{
					echo "<br> Query not successfull";
					header("Location:sign-up.php","Please enter valid credentials!!");
					//header("");
				}
			}
		}
		else
		{
			header("Location:sign-in.php");
		}	
	}

	else
	{
		header("Location:sign-in.php");
	}
	//$sql = "select * from registration where email='".$email."',password='".$pwd."' ";
	
	
}
?>