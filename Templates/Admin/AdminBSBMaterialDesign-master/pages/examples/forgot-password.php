<?php
    session_start();
    include 'Connection.php';
    $str = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefcghijklmnopqrstuvwxyz0123456789@";
    
    $new_password = "";
    if(isset($_POST['generate']))
    {
        $email = $_POST['email'];
        $sql = "select * from registration where email='".$email."' ";
        if(mysqli_query($conn,$sql)!=FALSE)
        {
            
            $new_password = substr(str_shuffle($str),1,8);
            $update = "insert into login (email,forgotPassword) values('$email','$new_password')";
            $result = mysqli_query($conn,$update);
            $update_regis = "UPDATE registration SET password = '$new_password' WHERE email='$email' ";
            $result1 = mysqli_query($conn,$update_regis);
            mail($email,'New Password','Respected user,
            Your new password for the portal is '.$new_password);
            header("Location:sign-in.php");
        }
        else
        {
            echo '<script>alert("You are not authorized to enter this portal")</script>';
            header("Location:forgot-password.php");
        }
       
    }
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Forgot Password</title>
    <!-- Favicon-->
    <link rel="icon" href="../../favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="../../plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="../../plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="../../plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="../../css/style.css" rel="stylesheet">
</head>

<body class="fp-page">
    <div class="fp-box">
        <div class="card">
            <div class="body">
                <form id="forgot_password" method="POST">
                    <div class="msg">
                        Enter your email address that have been provided to you. We'll send you an email with new password.
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">email</i>
                        </span>
                        <div class="form-line">
                            <input type="email" class="form-control" name="email" placeholder="Email" required autofocus>
                        </div>
                    </div>

                    <button class="btn btn-block btn-lg bg-pink waves-effect" type="submit" name="generate">RESET MY PASSWORD</button>

                    <div class="row m-t-20 m-b--5 align-center">
                        <a href="sign-in.php">Sign In!</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Jquery Core Js -->
    <script src="../../plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="../../plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="../../plugins/node-waves/waves.js"></script>

    <!-- Validation Plugin Js -->
    <script src="../../plugins/jquery-validation/jquery.validate.js"></script>

    <!-- Custom Js -->
    <script src="../../js/admin.js"></script>
    <script src="../../js/pages/examples/forgot-password.js"></script>

</body>

</html>