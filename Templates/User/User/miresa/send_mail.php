<?php
session_start();
$email = $_POST['email'];
$to_email = "ict2018mu@googlegroups.com";
$subject = "Updates";
$body = "HI We are adding a new feature in it. please be updated Regards Rajkot MahaNagarpalika";
$headers = "From: sender\'s email";
 
if (mail($email, 'Updates ', 'HI We are adding a new feature in it. please be updated 
	Regards Rajkot MahaNagarpalika', 'From: krupal.jivrajani105468@marwadiuniversity.ac.in')) {
    echo '<script> alert("Email successfully sent to $to_email...")</script>';
    echo mail($to_email, $subject, $body, $headers);
    header("Location:index.php");
} else {
    echo '<script> alert("Email sending failed...")</script>';
}
?>