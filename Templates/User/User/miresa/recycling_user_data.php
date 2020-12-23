<?php
session_start();
include 'connection.php';
if(isset($_POST['apply']))
{
	
	$uniqueid = $_POST['uniqueid'];
	$typeofwaste = $_POST['typeofwaste'];
	$address = $_POST['address'];
	$recyclingid = (rand(1000000,99000000));
	$requestinfo = $_POST['requestinfo'];
	$email = $_POST['email'];
	

	$sql = "insert into recycling values('".$uniqueid."','".$typeofwaste."','".$address."','".$recyclingid."','".$requestinfo."','".$email."')";
	if(mysqli_query($conn,$sql))
	{
		echo '<script> alert("recyclingID sent successfully.") </script>';
		if (mail($email, 'Recycling-ID','Respected citizen Your ComplainID for your recent complain is =>'.$recyclingid)) {
    	echo '<script> alert("ComplainID sent successfully.") </script>';
   	 	header("Location:recycling_user.php");
   	 	}
	}
	else
	{
		echo "Record not saved::".mysqli_error($conn);
	}

}
?>