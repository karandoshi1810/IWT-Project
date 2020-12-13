<?php
    $affected_ward = $_POST['ward'];
    $new_time = $_POST['datetime'];
    echo $new_time."<br>". $affected_ward;
    
    /*$to = "IWT-Portal_Testing";
    $subject = "New timings for water in your ward-". $affected_ward;
    $body = "Hello Mike Check 1 2 3... 1 2 3..";
    $message = "The updated timings for household water in your ward from tomorrow is:". $new_time;
    $header = "From:karan.doshi105417@marwadiuniversity.ac.in";

    if(mail('IWT-Portal_Testing', 'New timings for water in your ward-'. $affected_ward, 'The updated timings for household water in your ward from tomorrow is:'. $new_time, 'From:karan.doshi105417@marwadiuniversity.ac.in'))
    {
        echo "Mail sent successfully";
    }
    else
    {
        echo "Error sending mail";
    }*/



$to_email = "karan.doshi105417@marwadiuniversity.ac.in";
$subject = "Simple Email Test via PHP";
$body = "Hi,nn This is test email send by PHP Script";
$headers = "From: sender\'s email";
 
if (mail('karan.doshi105417@marwadiuniversity.ac.in', 'New timings for water in your => '. $affected_ward, 'The updated timings for household water in your ward from tomorrow is=>'. $new_time, 'From: karan.doshi105417@marwadiuniversity.ac.in')) {
    echo "Email successfully sent to $to_email...";
    
} else {
    echo "Email sending failed...";
}
?>