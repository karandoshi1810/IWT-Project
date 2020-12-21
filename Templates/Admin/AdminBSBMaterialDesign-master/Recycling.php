<?php
    session_start();
    include "Connection.php";
    /*if(!isset($_SESSION['admin'])){
        header("location:pages/examples/sign-in.php");
        die();
     }*/
    if(isset($_POST['update']))
    {
        $server = "localhost";
        $user = "root";
        $pwd = "";
        $dbname = "admin";
        $conn = mysqli_connect($server,$user,$pwd,$dbname);
        
        $address = $_POST['address'];
        $weight = $_POST['weight'];
        $ground = $_POST['ground'];
        $sql = "insert into recycling values('".$address."','".$weight."','".$ground."')";
        if(mysqli_query($conn,$sql))
        {
            echo '<script>alert("Updated Successfully")</script>';
            header("Location:Recycling.php");
        }
        else
        {
            header("Location:index.php");
            echo '<script>alert("Cannot Updated Successfully")</script>';
        }

    }
    
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Recycling Waste Information</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet"/>

    <!-- Waves Effect Css -->
    <link href="plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Bootstrap Material Datetime Picker Css -->
    <link href="/Project/Templates/Admin/AdminBSBMaterialDesign-master/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet" />

    <!-- Bootstrap DatePicker Css -->
    <link href="/plugins/bootstrap-material-datetimepicker/css/bootstrap-datepicker.css" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="plugins/morrisjs/morris.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="css/themes/all-themes.css" rel="stylesheet" />


    <style>
  .card {
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    width: 100%;
    height: 0%;
    border-radius: 5p;
    background-color:white;
    left: 0px;
    top: 0px;
  }

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

img {
  border-radius: 5px 5px 0 0;
}

.container {
  padding: 2px 2px;
  position: relative;
  width: 100%;
  height: 100%;
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
                    </div>
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
                    <li class="active">
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">local_shipping</i>
                            <span>Recycling</span>
                        </a>
                        <ul class="ml-menu">
                            <li >
                                <a href="Recycling.php">
                                    <span>Info</span>
                                </a>
                            </li>
                            <li>
                                <a href="E:/KARAN-ICT/SEMESTER-5/IWT/Project/Templates/Admin/AdminBSBMaterialDesign-master/pages/examples/sign-up.php">
                                    <span>Tenders</span>
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
                                <a href="IoTDustbin.php">Tracking</a>
                                <a href="History_Dustbin.php">History</a>
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
        <!-- #END# Left Sidebar -->
        
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="header bg-amber">
                    <h2 align="center">
                        RECYCLING WASTE MANAGEMENT
                    </h2>
                </div>
                    <div class="container">

                    <form class="form-horizontal" method = "POST">
                                            <div class="form-group">
                                                <label for="address" class="col-sm-2 control-label">Dustbin Address</label>
                                                <div class="col-sm-10">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" id="address" name="address" placeholder="Dustbin Address" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="weight" class="col-sm-2 control-label">Weight of Waste</label>
                                                <div class="col-sm-10">
                                                    <div class="form-line">
                                                    <input type="text" class="form-control" id="weight" name="weight" placeholder="Weight of waste(in tonnes)" required>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="group" class="col-sm-2 control-label">Dumping Ground</label>
                                                <div class="col-sm-3">
                                                    <div class="form-line">
                                                        <select class="form-control show-tick" name="ground" id="ground">
                                                            <option value="">-- Please select --</option>
                                                            <option value="G1">Ground-1</option>
                                                            <option value="G2">Ground-2</option>
                                                            <option value="G3">Ground-3</option>
                                                            <option value="G4">Ground-4</option>
                                                            <option value="G5">Ground-5</option>
                                                        </select> 
                                                    </div>
                                                </div>
                                            </div><br><br><br>

                                            <div class="form-group">
                                                <div class="col-sm-offset-5 col-sm-10">
                                                    <button type="submit" class="btn btn-success" name="update">UPDATE DATA</button>
                                                </div>
                                            </div>
                    </form>
                        <!--<form method = "POST">

                            <div class="form-group">
                                <div class="form-line">
                                    <label>Name of citizen:</label><input type="text" name="citizenName" id="citizenName" class="form-control" placeholder="Name of citizen who requested to collect waste">
                                </div>
                            </div>

                                <div class="col-sm-5">
                                        <div class="form-group">
                                            <div class="form-line">
                                                <label>Contact Number:</label><input type="text" name="contactNo" id="contactNo" class="form-control" placeholder="Contact Number">
                                            </div>
                                        </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <label>Address of citizen:</label><input type="text" name="address" id="address" class="form-control" placeholder="Collection Area">
                                        </div>
                                    </div>
                                </div>
                                <br><br>
                                <div class="col-sm-5">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <label>Waste Weight:</label><input type="text" name="weight" id="weight" class="form-control" placeholder="Weight of waste">
                                        </div>
                                    </div>
                                </div>


                                <div class="col-sm-5">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <label>Ground</label><br><br>
                                                <select class="form-control show-tick" name="ground" id="ground">
                                                    <option value="">-- Please select --</option>
                                                    <option value="G1">Ground-1</option>
                                                    <option value="G2">Ground-2</option>
                                                    <option value="G3">Ground-3</option>
                                                    <option value="G4">Ground-4</option>
                                                    <option value="G5">Ground-5</option>
                                                </select>       
                                        </div>                     
                                    </div>
                                </div>

                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="submit" name="update" id="update" value="UPDATE" class="btn bg-green waves-effect"/>
                                        </div>                     
                                    </div>

                        </form>-->
                    </div><br><br>
            </div>
        </div>
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

    <!-- Autosize Plugin Js -->
    <script src="plugins/autosize/autosize.js"></script>

    <!-- Moment Plugin Js -->
    <script src="plugins/momentjs/moment.js"></script>

    <!-- Bootstrap Material Datetime Picker Plugin Js -->
    <script src="plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>

    <!-- Bootstrap Datepicker Plugin Js -->
    <script src="plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>

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

