<?php
   include('Connection.php');
   session_start();
      
   if(!isset($_SESSION['login_user_faculty'])){
      header("location:../Login/index.html");
      die();
   }
?>