<?php
session_start();
//include 'D:/users/Software/Xampp/htdocs/Project/Templates/Admin/AdminBSBMaterialDesign-master/plugins/jquery-validation/jquery.validate.js';
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
					echo "Email:".$row['email']."<br>Password:".$row['password'];
					echo "<br> Query successfull";
					$namesurname = $row['name'];
					
					//$sql = "insert into login values('".$email."','".$pwd."')";

					$_SESSION['email'] = $email;
					$_SESSION['uname'] = $namesurname;
					header("Location:/Project/Templates/Admin/AdminBSBMaterialDesign-master/index.php");
					exit();
				}
				else
				{
					echo "<br> Query not successfull";
					header("Location:/Project/Templates/Admin/AdminBSBMaterialDesign-master/index.php","Please enter valid credentials!!");
					//header("");
				}
			}
		}
		else
		{
			
			"<html>
			<body>

				document.getElementsByName(password).autofocus;
				
			</body>
			</html>";
			header("Location:sign-in.php");
		}
		//document.getElementById('password').required=true;
		
	}

	else
	{
		//document.getElementById('email').placeholder='Incorrect E-mail ID';
		"<html>
		<body>

			document.getElementsByName(email).autofocus;
			
		</body>
		</html>";
		header("Location:sign-in.php");
		
	}
	//$sql = "select * from registration where email='".$email."',password='".$pwd."' ";
	
	
}
?>