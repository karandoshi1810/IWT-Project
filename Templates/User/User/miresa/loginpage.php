<?php
session_start();
include 'connection.php';
if(isset($_POST['output']))
{
	
	$email = $_POST['email'];
	$password = $_POST['password'];
	
	
	if(strlen($email)!=0 && strpos($email, '@') !== false && (strpos($email, 'gmail') !== false || strpos($email, 'yahoo') !== false || strpos($email, 'marwadiuniversity.ac.in') !== false ))
	{
		if(strlen($password)!=0 && strlen($password)>6)
		{
			$sql = "select * from signup where email='".$email."' and psw='".$password."' ";
			$result = mysqli_query($conn,$sql);

			$row= mysqli_fetch_array($result);
			if(is_array($row))
			{
				if($row['email']==$email && $row['psw'] == $password)
				{
					echo "Email:".$row['email']."<br>Password:".$row['psw'];
					echo "<br> Query successfull";
					$namesurname = $row['name'];
					
					$_SESSION['email'] = $email;
					$_SESSION['uname'] = $namesurname;
					$_SESSION['user'] = true;
					header("Location:index.php");
					echo '<script> alert("You have LoggedIn successfully.") </script>';
				}
				
				else
				{

					echo "<br> Query not successfull";
					header("Location:Signup_form.php");
					echo '<script> alert("You have typed Incorrect Login Deatils.") </script>';
				}
			}
		}
				else
				{
					echo "<br>  password not successfull";
					header("Location:Signup_form.php");
				}	
	}
				else
				{
		//document.getElementById('email').placeholder='Incorrect E-mail ID';
					echo "<br>  email not successfull";
					header("Location:Signup_form.php");
			}
		
}
		
	
?>
