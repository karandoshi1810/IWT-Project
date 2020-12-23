<?php
session_start();
    include "connection.php";
  
        $to_email = "krupaljivrajani86861@gmail.com";
        $subject = "UniqueID";
        $ID = (rand(1000000,99000000));
       if (mail('krupaljivrajani86861@gmail.com', ' ','Your New password is =>'.$ID)) {
    echo '<script> alert("New Password sent successfully.") </script>';
  }
     else {
    echo '<script> alert("New Password cannot be sent successfully.") </script>';;
}
    
    
?>