<?php
session_start();
    include "connection.php";
  
        $to_email = "krupaljivrajani86861@gmail.com";
        $subject = "UniqueID";
        $ID = (rand(1000000,99000000));
       if (mail('krupaljivrajani86861@gmail.com', ' ','Your UniqueID is =>'.$ID)) {
    echo '<script> alert("UniqueID sent successfully.") </script>';
  }
     else {
    echo '<script> alert("UniqueID cannot be sent successfully.") </script>';;
}
    
    
?>