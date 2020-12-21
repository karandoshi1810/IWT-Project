<?php
    session_start();
    include "Connection.php";
    if(!isset($_SESSION['admin'])){
        header("location:pages/examples/sign-in.php");
        die();
    }
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Feedback</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <a href="plugins/node-waves/waves.css" rel="stylesheet">

    <!-- Animation Css -->
    <link href="plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- JQuery DataTable Css -->
    <link href="plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">

     <!-- Range Slider Css -->
     <link href="plugins/ion-rangeslider/css/ion.rangeSlider.css" rel="stylesheet" />
    <link href="plugins/ion-rangeslider/css/ion.rangeSlider.skinFlat.css" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="plugins/morrisjs/morris.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="css/themes/all-themes.css" rel="stylesheet" />
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
            <div class="user-info" style="background-color: #FA8821">
                <div class="image">
                    <img src="images/user.png" width="60" height="60" onerror="this.onerror=null;D:/users/Software/Xampp/htdocs/Project/Templates/Admin/AdminBSBMaterialDesign-master/images/user.png;" alt="Image not found" />   

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
                <!--<li class="header">MAIN NAVIGATION</li>-->
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
                    <li>
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
                                <!--<a href="History_Dustbin.php">History</a>-->
                            </li>
                        </ul>
                    </li>

                    <li class="active">
                        <a href="Feedback.php">
                            <i class="material-icons">feedback</i>
                            <span>Feedback</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <!--<div class="legal">
                <div class="copyright">
                    &copy; 2020 - 2021 <a href="javascript:void(0);">Water and Cleanliness Management</a>.
                </div>     
                <div class="version">
                    <b>Version: </b> 1.0.0
                </div>
            </div>-->
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
    </section>

    <section class="content">
                <div class="row clearfix">
                <!-- Show Feedback -->
                <div class="col-lg-12 col-md-10 col-sm-10 col-xs-10">
                    <div class="card">
                        <div class="header bg-red">
                            <h2>FEEDBACKS</h2>
                        </div>
                        
                        <div class="body">
                        <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-exportable">
                                    <thead>
                                        <tr>
                                            <th>Feedback-ID</th>
                                            <th>Address</th>
                                            <th>Feedback</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $server = "localhost";
                                            $user = "root";
                                            $pass = "";
                                            $dbname = "user";
                                            $conn = mysqli_connect($server,$user,$pass,$dbname);
                                            $sql = "select * from feedback";
                                            $result = mysqli_query($conn,$sql);


                                            while ($row=mysqli_fetch_array($result)) {
                                                echo "<tr>";
                                                echo "<td>".$row['feedbackid']."</td>";
                                                echo "<td>".$row['address']."</td>";
                                                echo "<td>".$row['typefeedback']."</td>";
                                                echo "</tr>";
                                            }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
        <!--#End# Show Feedback-->
    </section>
     <!-- Jquery Core Js -->
     <script src="plugins/jquery/jquery.min.js"></script>

        <!-- Bootstrap Core Js -->
    <script src="plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

     <!-- Bootstrap Notify Plugin Js -->
     <script src="../../plugins/bootstrap-notify/bootstrap-notify.js"></script>

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

    <!-- RangeSlider Plugin Js -->
    <script src="../../plugins/ion-rangeslider/js/ion.rangeSlider.js"></script>

    <!-- Custom Js -->
    <script src="js/admin.js"></script>
    <script src="js/pages/index.js"></script>

    <!-- Jquery DataTable Plugin Js -->
    <script src="plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

    <!-- Demo Js -->
    <script src="js/demo.js"></script>
</body>

</html>