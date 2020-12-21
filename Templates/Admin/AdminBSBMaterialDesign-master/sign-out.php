<?php
    session_unset();
    session_destroy();
    header("Location:pages/examples/sign-in.php");
?>