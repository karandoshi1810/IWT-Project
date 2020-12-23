<?php
session_start();
    include "connection.php";
  
        $to_email = "krupaljivrajani86861@gmail.com";
        $subject = "Simple Email Test via PHP";
        $ID = (rand(1000000,99000000));
       if (mail('krupaljivrajani86861@gmail.com', ' ','ComplainID is =>'.$ID)) {
    echo '<script> alert("ComplainID sent successfully.") </script>';
    header("Location:new-complain.php");
	}
     else {
    echo '<script> alert("ComplainID cannot be sent successfully.") </script>';;

}
    
    
?>