<?php
session_start();
include 'connection.php';
if(isset($_POST['generate']))
{
	
	$uniqueid = $_POST['uniqueid'];
	$_SESSION['id'] = $uniqueid;
	$address = $_POST['address'];
	$complaininfo = $_POST['complaininfo'];
	$problem = $_POST['problem'];
	$complainid = (rand(1000000,99000000));
	
	$email = $_POST['email'];

	$sql = "insert into complain values('".$uniqueid."','".$address."','".$complaininfo."','".$problem."','".$complainid."','".$email."')";

	if(mysqli_query($conn,$sql))
	{
		 $to_email = $email;
        $subject = "UniqueID";
        $ID = (rand(1000000,99000000));
       if (mail($email, 'Complain-ID','Respected citizen Your ComplainID for your recent complain is =>'.$ID)) {
    	echo '<script> alert("ComplainID sent successfully.") </script>';
   	 	header("Location:new-complain.php");
	}
     else {
    	echo '<script> alert("ComplainID cannot be sent successfully.") </script>';;
		header("Location:new-complain.php");
		}
}	

}

?>