<?php
include 'connection.php';
session_start();
if(isset($_POST['generate']))
{
	$name = $_POST['name'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$address = $_POST['address'];
	$pincode = $_POST['pincode'];
	$email = $_POST['email'];
	$mobileno = $_POST['mobileno'];
	$wardno = $_POST['wardno'];
	$psw = $_POST['psw'];
	$confirmpsw = $_POST['confirmpsw'];

	$sql = "insert into signup values('".$name."','".$city."','".$state."','".$address."','".$pincode."','".$email."','".$mobileno."',  '".$wardno."','".$psw."','".$confirmpsw."')";
	if(mysqli_query($conn,$sql))
	{
		  $to_email = $email;
        $subject = "UniqueID";
        $ID = (rand(1000000,99000000));
       if (mail($email, 'Unique ID','Your UniqueID is =>'.$ID)) {
    		echo '<script> alert("UniqueID sent successfully.") </script>';
    		header("Location:Signup_form.php");
  			}
     else {
    echo '<script> alert("UniqueID cannot be sent successfully.") </script>';;
}
		echo "Record Saved";
		header("Location:Login_form.php");
	}
	else
	{
		echo "Record not saved::".mysqli_error($conn);
		header("Location:Signup_form.php");
	}

}
?>