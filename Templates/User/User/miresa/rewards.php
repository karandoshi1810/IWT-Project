<form>
 <input   type="submit" name="generate" value="Submit">
</form>
<?php
$to_email = "krupaljivrajani86861@gmail.com";
$subject = "Rewards from RMC";
$body = "You have collected 1kg Dry waste. You have been awarded a bus ticket from rajkot to junagadh. \n Just show this mail and you will recieve the reward. \n Regards \n Rajkot Mahanagarpalika";
$headers = "From: sender\'s email";

 
if (mail('krupaljivrajani86861@gmail.com', 'Hello world ', 'You have collected 1kg Dry waste. You have been awarded a bus ticket from rajkot to junagadh. \n Just show this mail and you will recieve the reward. \n Regards \n Rajkot Mahanagarpalika', 'From: krupal.jivrajani105468@marwadiuniversity.ac.in'))
{
    echo '<script> alert("Email successfully sent")</script>';
    echo mail($to_email, $subject, $body, $headers);
} else {
    echo '<script> alert("Email sending failed...")</script>';
}
?>