<?php
session_start();
include 'connection.php';
if(isset($_POST['generate']))
{
	
	$uniqueid = $_POST['uniqueid'];
	$address = $_POST['address'];
	$typefeedback = $_POST['typefeedback'];
	$feedbackid = (rand(1000000,99000000));
	$email = $_POST['email'];

	$sql = "insert into feedback values('".$uniqueid."','".$address."','".$typefeedback."','".$feedbackid."','".$email."')";
	if(mysqli_query($conn,$sql))
	{
		if (mail($email, 'Thank you user','Respected citizen,
			We thank you for sending the feedback. It is very precious for us.')) {
    	echo '<script> alert("ComplainID sent successfully.") </script>';
    	header("Location:Feedbacks_user.php");
   	 	}
   	 	else
   	 	{
   	 		header("Location:Feedbacks_user.php");
   	 	}
	}
	else
	{
		echo '<script> alert("recyclingID sent successfully.") </script>';
   	 	header("Location:Feedbacks_user.php");
	}

}
?>