<?php
    session_start();
    include "Connection.php";
    /*if(!isset($_SESSION['admin'])){
        header("location:pages/examples/sign-in.php");
        die();
     }*/
    if(isset($_POST['changeTime']))
    {
        $affected_ward = $_POST['ward'];
        $new_time = $_POST['datetime'];
        $to_email = "karan.doshi105417@marwadiuniversity.ac.in";
        if (mail('karan.doshi105417@marwadiuniversity.ac.in', 'New timings for water in your => '. $affected_ward, 'The updated timings for household water in your ward from tomorrow is=>'. $new_time, 'From: karan.doshi105417@marwadiuniversity.ac.in')) 
        {

            echo '<script> alert("Updated timings sent successfully.") </script>';
        } 
        else 
        {
            echo '<script> alert("Updated timings cannot be sent successfully.") </script>';
        }
    }
    
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Time Management</title>
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
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="../index.php">Cleanliness and Water Management</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <!-- Call Search -->
                    <li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="material-icons">search</i></a></li>
                    <!-- #END# Call Search -->
                    
                    
                    <li class="pull-right"><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="material-icons">more_vert</i></a></li>
                </ul>
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
                <img src="/Project/Templates/Admin/AdminBSBMaterialDesign-master/me-removebg.png" width="48" height="48" onerror="this.onerror=null;D:/users/Software/Xampp/htdocs/Project/Templates/Admin/AdminBSBMaterialDesign-master/images/user.png;" alt="Image not found" />
                    
                    
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
                            <i class="material-icons">text_fields</i>
                            <span>Complain Tracking</span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="TimeManagement.php">
                            <i class="material-icons">layers</i>
                            <span>Time Management</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">widgets</i>
                            <span>Recycling</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
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
                            <i class="material-icons">assignment</i>
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
                <div class="header">
                    <h2 align="center">
                        WATER TIMINGS MANAGEMENT
                    </h2><br><br>
                </div>
                <div class="container">
                        <form style="margin-left: 100px; left: 700px;"  method = "POST">
                                <label for="ward">Choose a ward:</label>
                               <select name="ward" id="ward" size="1">
                                    <option value="Ward-1"> Ward-1 </option>
                                    <option value="Ward-2"> Ward-2 </option>
                                    <option value="Ward-3"> Ward-3 </option>
                                    <option value="Ward-4"> Ward-4 </option>
                                    <option value="Ward-5"> Ward-5 </option>
                                    <option value="Ward-6"> Ward-6 </option>
                                    <option value="Ward-7"> Ward-7 </option>
                                    <option value="Ward-8"> Ward-8 </option>
                                    <option value="Ward-9"> Ward-9 </option>
                                    <option value="Ward-10"> Ward-10 </option>

                                    <option value="Ward-11"> Ward-11 </option>
                                    <option value="Ward-12"> Ward-12 </option>
                                    <option value="Ward-13"> Ward-13 </option>
                                    <option value="Ward-14"> Ward-14 </option>
                                    <option value="Ward-15"> Ward-15 </option>
                                    <option value="Ward-16"> Ward-16 </option>
                                    <option value="Ward-17"> Ward-17 </option>
                                    <option value="Ward-18"> Ward-18 </option>
                                    <option value="Ward-19"> Ward-19 </option>
                                    <option value="Ward-20"> Ward-20 </option>

                                    <option value="Ward-21"> Ward-21 </option>
                                    <option value="Ward-22"> Ward-22 </option>
                                    <option value="Ward-23"> Ward-23 </option>
                                    <option value="Ward-24"> Ward-24 </option>
                                    <option value="Ward-25"> Ward-25 </option>
                                    <option value="Ward-26"> Ward-26 </option>
                                    <option value="Ward-27"> Ward-27 </option>
                                    <option value="Ward-28"> Ward-28 </option>
                                    <option value="Ward-29"> Ward-29 </option>
                                </select>
                            <!--DateTime Picker -->
                            <label for="datetime" style = "margin-left:100px;">Choose a date and time:</label>
                            <input type="datetime-local" id="datetime" name="datetime"><br><br><br><br>
                            <!--<input type="submit" value = "Change Time" name = "changeTime" class="btn btn-primary waves-effect" style="margin-left:70px;"><br><br><br><br>-->
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" style="margin-left:260px;"><br><br>
                                    <button class="btn bg-green waves-effect" data-type="success" value="Change Time" name="changeTime">CHANGE TIME</button>
                            </div>
                            <!--#END# DateTime Picker -->
                        </form>
                </div>
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
