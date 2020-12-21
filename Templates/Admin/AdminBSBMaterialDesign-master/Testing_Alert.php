<?php
           session_start();
           $complainID=$_SESSION["complainID"];
           echo $complainID;
           $email_user = $_SESSION["email"];
           $server = "localhost";
           $user = "root";
           $password = "";
           $db = "user";
           $connection = mysqli_connect($server,$user,$password,$db);
           $query = "insert into complainhistory select * from complain where complainid=$complainID";
           if(mysqli_query($connection,$query))
           {
              echo "<script>alert('Complain delete complain)</script>";
           }
?>