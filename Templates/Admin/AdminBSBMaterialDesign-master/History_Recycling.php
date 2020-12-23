<?php
    session_start();
    include "Connection.php";
    if(!isset($_SESSION['admin'])){
        header("location:pages/examples/sign-in.php");
        die();
     }
     if(isset($_POST['grant_voucher']))
     {
         $uniqueid = $_SESSION["uniqueid"];
         $recyclingID=$_SESSION["recyclingID"];
         $email_user = $_SESSION["email_user"];
         if(mail($email_user,'Update regarding your complaint '.$recyclingID,'Respected citizen,
         You have collected dry waste. You have been awarded a bus ticket from rajkot to junagadh. Just show this mail and you will recieve the reward.
         Regards and Thank you.'))
         {
             echo "<script>alert('Complain status has been updated')</script>";
         }
         else
         {
             echo "<script>alert('Complain status cannot be updated')</script>";
         }
         $server = "localhost";
         $user = "root";
         $password = "";
         $db = "user";

         $connection = mysqli_connect($server,$user,$password,$db);
         $query = "select * from recycling where recyclingid=$recyclingID";
         $result=mysqli_query($connection,$query);
         $row = mysqli_fetch_array($result);

         $insert_query = "insert into complainhistory values('".$row["uniqueid"]."',000000,000000,'".$row["recyclingid"]."','".$row["address"]."','".$row["requestinfo"]."')";

         mysqli_query($conn,$insert_query);
        
         $delete_query = "delete from recycling where recyclingid=$recyclingID";
         mysqli_query($connection,$delete_query);
     }
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Recycling History</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="plugins/morrisjs/morris.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="css/themes/all-themes.css" rel="stylesheet" />


   <style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}

table,th,td{
            border: 1px solid black;
            border-collapse: collapse;
        }
        table.center {
  margin-left: auto;
  margin-right: auto;
}
th,td{
    padding: 10px;
    }
</style>

</head>

<body class="theme-orange">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->

    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="../index.php">Cleanliness and Water Management</a>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                <img src="images/user.png" width="60" height="60" onerror="this.onerror=null;D:/users/Software/Xampp/htdocs/Project/Templates/Admin/AdminBSBMaterialDesign-master/images/user.png;" alt="Image not found" />
                    
                    
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?php
                            include 'Connection.php';
                            //$email = $_POST['email'];
                            //$password = $_POST['password'];
                            //$name = $_POST['uname'];
                            echo $_SESSION["uname"];
                            echo "<br>";
                            ?>

                    <div class="email">
                            <?php
                            include 'Connection.php';
                            //$email = $_POST['email'];
                            //$password = $_POST['password'];
                            //$name = $_POST['uname'];
                            
                            echo $_SESSION["email"];
                            
                            ?>

                    </div>
                    <div class="btn-group user-helper-dropdown">
                            <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                            <ul class="dropdown-menu pull-right">
                                <li><a href="sign-out.php"><i class="material-icons">exit_to_app</i>Sign Out</a></li>
                            </ul>
                    </div>
</div>
                    
                </div>
            </div>
            <!-- #User Info -->
                        <!-- Menu -->
                        <div class="menu">
                <ul class="list">
                    <li>
                        <a href="index.php">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="pages/typography.php">
                            <i class="material-icons">track_changes</i>
                            <span>Complain Tracking</span>
                        </a>
                    </li>
                    <li>
                        <a href="TimeManagement.php">
                            <i class="material-icons">watch_later</i>
                            <span>Time Management</span>
                        </a>
                    </li>
                    <li class = "active">
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">local_shipping</i>
                            <span>Recycling</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="Recycling.php">
                                    <span>Info</span>
                                </a>
                            </li>
                            <li>
                                <a href="History_Recycling.php">
                                    <span>History</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">delete</i>
                            <span>IoT Dustbin</span>
                        </a>
                         <ul class="ml-menu">
                            <li>
                                <a href="iot_dustbin.php">Tracking</a>
                                <!--<a href="History_Dustbin.php">History</a>-->
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="Feedback.php">
                            <i class="material-icons">feedback</i>
                            <span>Feedback</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- #Menu -->
        </aside>
    </section>
        <!-- #END# Left Sidebar -->
        
        <section class="content">
            <!--Requests from user -->
            <div class="row clearfix">
                <div class="col-xs-8 col-sm-8 col-md-6 col-lg-12">
                    <div class="card">
                        <div class="header bg-amber js-basic-example">
                            <h2>User Requests</h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dashboard-task-infos dataTable js-basic-example">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Address</th>
                                            <th>Type</th>
                                            <th>Description</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $server = "localhost";
                                            $user = "root";
                                            $pass = "";
                                            $dbname = "user";
                                            $conn = mysqli_connect($server,$user,$pass,$dbname);
                                            $sql = "select * from recycling";
                                            $result = mysqli_query($conn,$sql);


                                            while ($row=mysqli_fetch_array($result)) {
                                                $uniqueID = $row['uniqueid'];
                                                $_SESSION['uniqueid'] = $uniqueID;
                                                $id = $row['recyclingid'];
                                                $_SESSION['recyclingID'] = $id;
                                                $email_user = $row['email'];
                                                $_SESSION['email_user'] = $email_user;
                                                echo '<form method="POST">';
                                                echo "<tr>";
                                                echo "<td>".$row['recyclingid']."</td>";
                                                echo "<td>".$row['address']."</td>";
                                                echo "<td>".$row['typeofwaste']."</td>";
                                                echo "<td>".$row['requestinfo']."</td>";
                                                echo "<td>".'<input type="submit" name="grant_voucher" value="Grant Reward" class="btn bg-blue waves-effect waves-light">'."</td>";
                                                echo "</tr>";
                                                echo '</form>';
                                            }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            <!--#End# Requests from user-->
    </section>


    <!-- Jquery Core Js -->
    <script src="plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="plugins/node-waves/waves.js"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src="plugins/jquery-countto/jquery.countTo.js"></script>

    <!-- Morris Plugin Js -->
    <script src="plugins/raphael/raphael.min.js"></script>
    <script src="plugins/morrisjs/morris.js"></script>

    <!-- ChartJs -->
    <script src="plugins/chartjs/Chart.bundle.js"></script>

    <!-- Flot Charts Plugin Js -->
    <script src="plugins/flot-charts/jquery.flot.js"></script>
    <script src="plugins/flot-charts/jquery.flot.resize.js"></script>
    <script src="plugins/flot-charts/jquery.flot.pie.js"></script>
    <script src="plugins/flot-charts/jquery.flot.categories.js"></script>
    <script src="plugins/flot-charts/jquery.flot.time.js"></script>

    <!-- Sparkline Chart Plugin Js -->
    <script src="plugins/jquery-sparkline/jquery.sparkline.js"></script>

    <!-- Custom Js -->
    <script src="js/admin.js"></script>
    <script src="js/pages/index.js"></script>

    <!-- Demo Js -->
    <script src="js/demo.js"></script>
</body>

</html>
