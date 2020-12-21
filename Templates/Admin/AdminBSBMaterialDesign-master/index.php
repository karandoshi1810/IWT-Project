<?php
    session_start();
    include "Connection.php";
    if(!isset($_SESSION['admin'])){
        header("location:pages/examples/sign-in.php");
        die("Please register or log-in first");
     }
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Home</title>
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

     <!-- Range Slider Css -->
     <link href="../../plugins/ion-rangeslider/css/ion.rangeSlider.css" rel="stylesheet" />
    <link href="../../plugins/ion-rangeslider/css/ion.rangeSlider.skinFlat.css" rel="stylesheet" />

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
                    <li class="active">
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
                    <li>
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
                                <a href="IoTDustbin.php">Tracking</a>
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
        <div class="container-fluid">
            <div class="block-header">
                <h2>DASHBOARD</h2>
            </div>

            <!-- Widgets -->
            <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-red hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">playlist_add_check</i>
                        </div>
                        <div class="content">
                            <div class="text">NEW COMPLAINTS</div>
                            <?php
                                $server = "localhost";
                                $user = "root";
                                $pass = "";
                                $dbname = "user";
                                $conn = mysqli_connect($server,$user,$pass,$dbname);
                                $sql = "select * from complain";
                                $result=mysqli_query($conn,$sql);
                                $records=mysqli_num_rows($result);
                            ?>
                            <div class="number count-to" data-from="0" data-to="<?php echo $records; ?>" data-speed="15" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-indigo hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">help</i>
                        </div>
                        <div class="content">
                            <div class="text">TOTAL ADMINS</div>
                            <?php
                                $server = "localhost";
                                $user = "root";
                                $pass = "";
                                $dbname = "user";
                                $conn = mysqli_connect($server,$user,$pass,$dbname);
                                $sql = "select * from signup";
                                $result=mysqli_query($conn,$sql);
                                $records_visitors=mysqli_num_rows($result);
                            ?>
                            <div class="number count-to" data-from="0" data-to="<?php echo $records_visitors ?>" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-lime hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">forum</i>
                        </div>
                        <div class="content">
                            <div class="text">FEEDBACK</div>
                            <?php
                                $server = "localhost";
                                $user = "root";
                                $pass = "";
                                $dbname = "user";
                                $conn = mysqli_connect($server,$user,$pass,$dbname);
                                $sql = "select * from feedback";
                                $result_feedback=mysqli_query($conn,$sql);
                                $records_feeedback = mysqli_num_rows($result_feedback);
                            ?>
                            <div class="number count-to" data-from="0" data-to="<?php echo $records_feeedback ?>" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-yellow hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">person_add</i>
                        </div>
                        <div class="content">
                            <div class="text">PENDING COMPLAINTS</div>
                            <?php
                                $server = "localhost";
                                $user = "root";
                                $pass = "";
                                $dbname = "user";
                                $conn = mysqli_connect($server,$user,$pass,$dbname);
                                $sql = "select * from complain";
                                $result_pending_complaints=mysqli_query($conn,$sql);
                                $records_pending_complaints = mysqli_num_rows($result_pending_complaints);
                            ?>
                            <div class="number count-to" data-from="0" data-to="<?php echo $records_pending_complaints ?>" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Widgets -->
           
            <!--<div class="row clearfix">-->
                <!-- Answered Tickets -->
                <!--<div class="col-xs-8 col-sm-8 col-md-6 col-lg-6">
                    <div class="card">
                        <div class="body bg-teal">
                            <div class="font-bold m-b--35">ANSWERED TICKETS</div>
                            <ul class="dashboard-stat-list">
                                <li>
                                    TODAY
                                    <span class="pull-right"><b>12</b> <small>TICKETS</small></span>
                                </li>
                                <li>
                                    YESTERDAY
                                    <span class="pull-right"><b>15</b> <small>TICKETS</small></span>
                                </li>
                                <li>
                                    LAST WEEK
                                    <span class="pull-right"><b>90</b> <small>TICKETS</small></span>
                                </li>
                                <li>
                                    LAST MONTH
                                    <span class="pull-right"><b>342</b> <small>TICKETS</small></span>
                                </li>
                                <li>
                                    LAST YEAR
                                    <span class="pull-right"><b>4 225</b> <small>TICKETS</small></span>
                                </li>
                                <li>
                                    ALL
                                    <span class="pull-right"><b>8 752</b> <small>TICKETS</small></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>-->
                <!-- #END# Answered Tickets -->

                <div class="row clearfix">
                <!-- Task Info -->
                <div class="col-xs-8 col-sm-8 col-md-6 col-lg-5.5">
                    <div class="card">
                        <div class="header bg-amber">
                            <h2 font-bold m-b--35>Task Info</h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-hover dashboard-task-infos">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Task</th>
                                            <th>Status</th>
                                            <th>Manager</th>
                                            <th>Progress</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $server = "localhost";
                                            $user = "root";
                                            $pass = "";
                                            $dbname = "admin";
                                            $conn = mysqli_connect($server,$user,$pass,$dbname);
                                            $sql = "select * from task";
                                            $result = mysqli_query($conn,$sql);


                                            while ($row=mysqli_fetch_array($result)) {
                                                echo "<tr>";
                                                echo "<td>".$row['task_number']."</td>";
                                                echo "<td>".$row['task']."</td>";
                                                echo "<td>".$row['status']."</td>";
                                                echo "<td>".$row['manager']."</td>";
                                                echo "<td>".$row['progress']."%</td>";
                                                echo "</tr>";
                                            }
                                        ?>
                                    </tbody>
                                        <div class="col-xs-3 col-sm-2 col-md-3 col-lg-3">
                                            <!--<button type="submit" class="btn bg-blue waves-effect" onsubmit="window.location.href='Add_Task.php';" name="addTask"> <i class="material-icons" >add</i> <span class="icon-name">Task</span> </button>-->
                                            <button type="button" class="btn btn-default waves-effect m-r-20" data-toggle="modal" data-target="#smallModal" ><i class="material-icons" >add_circle_outline</i> <span class="icon-name">ADD TASK</button>
                                        </div>
                                        <div class="col-xs-3 col-sm-2 col-md-3 col-lg-3" style="padding-left:140px;">
                                            <!--<button type="submit" class="btn bg-blue waves-effect" onsubmit="window.location.href='Add_Task.php';" name="addTask"> <i class="material-icons" >add</i> <span class="icon-name">Task</span> </button>-->
                                            <button type="button" class="btn btn-default waves-effect m-r-20" data-toggle="modal" data-target="#smallModal1" ><i class="material-icons" >remove_circle_outline</i> <span class="icon-name">DELETE TASK</button>    
                                            
                                        </div>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- #END# Task Info -->

                <!-- Information(Paragraph) -->
                <div class="col-xs-8 col-sm-8 col-md-6 col-lg-6">
                    <div class="card">
                    <div class="header bg-blue">
                            <h2 font-bold m-b--35>Information</h2>
                    </div>
                        <p>Cleanliness adds more value to personal and social life. Since good habits are contagious, it is possible to teach 
                           children, neighbours and illiterates on the importance of cleanliness, by being a role model. With a collective effort,
                           cleanliness and in turn, good health and happiness are within reach. Water is essential to life for all living organisms 
                           on Earth.  Because of absence of water on other planets life is absent over there.  We are so fortunate to have so many water bodies 
                           on our mother planet.</p>

                        <p>    Pure and clean water is equal to the divine magic potion “amrutham”, as it makes us live long and healthy.  
                        So pure water is elixir of life.</p>
                    </div>
                </div>
                <!-- #END# Information(Paragraph) -->

            </div>

                <!-- Browser Usage -->
                <div class="col-xs-8 col-sm-6 col-md-6 col-lg-8">
                    <div class="card">
                            <div class="header bg-pink">
                                <h2>Calender</h2>
                            </div>
                            <div class="body">
                                <iframe src="https://calendar.google.com/calendar/embed?src=dgkuhmc9gvi72grg9rien06nu0%40group.calendar.google.com&ctz=Asia%2FKolkata" style="border: 0" width="500" height="390" frameborder="0" scrolling="no"></iframe>
                            </div>
                    </div>
                </div>
                <!-- #END# Browser Usage -->
            </div>
        </div>
    </section>

    



        <div class="modal fade" id="smallModal" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="smallModalLabel">Add Task</h4>
                        </div>
                        <form action="updateTask.php" method = "POST">
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <div class="form-line">
                                        <label>Task:</label><input type="text" name="task" id="task" class="form-control" placeholder="Description">
                                        
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <div class="form-line">
                                        <label>Status</label><br><br>
                            
                                        <select class="form-control show-tick" name="status" id="status">
                                            <option value="">-- Please select --</option>
                                            <option value="Doing">Doing</option>
                                            <option value="To-Do">To-Do</option>
                                            <option value="On Hold">On Hold</option>
                                            <option value="Wait-Approval">Wait-Approval</option>
                                            <option value="Suspended">Suspended</option>
                                        </select>       
                                    </div>                     
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <div class="form-line">
                                        <label>Manager:</label><input type="text" name="manager" id="manager" class="form-control" placeholder="Manager Name">
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-3">
                                <div class="form-group">
                                    <div class="form-line">
                                        <label>Progress:</label><input type="text" name="progress" id="progress" class="form-control" placeholder="Progress">
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <input type="submit" class="btn btn-link waves-effect" name="addTask" value="SAVE CHANGES">
                                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                            </div>

                        </form><br><br>
                       
                    </div>
                </div>
        </div>


        <div class="modal fade" id="smallModal1" tabindex="-1" role="dialog">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="smallModalLabel">Delete Task</h4>
                        </div>
                        <form action="updateTask.php" method = "POST">
                            <div class="col-sm-3">
                                <div class="form-group">
                                    <div class="form-line">
                                        <label>Task ID:</label><input type="text" name="task_delete" id="task_delete" class="form-control" placeholder="Task ID">
                                        
                                    </div>
                                </div>
                            </div><br>
                            <div class="modal-footer">
                                <input type="submit" class="btn btn-link waves-effect" name="deleteTask" value="DELETE TASK">
                                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                            </div>

                        </form><br><br>
                       
                    </div>
                </div>
        </div>



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

    <!-- Demo Js -->
    <script src="js/demo.js"></script>
</body>

</html>
