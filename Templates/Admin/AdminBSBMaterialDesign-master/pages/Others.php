
<?php
    session_start();
    include "Connection.php";
    if(!isset($_SESSION['admin'])){
        header("location:exapmles/sign-in.php");
        die();
     }
     if(isset($_POST['received_other_complain']))
     {
         $email_user=$_SESSION["email_user"];
         $complainID=$_SESSION["complainID"];
         //$email = S_POST[$row["email"]];
         if(mail($email_user,'Update regarding your complaint '.$complainID,'Respected citizen,
         We are sorry for the inconvinency. We have received your complain and we will make our best and swift efforts to fix the problem.
         Regards and Thank you.'))
         {
             echo "<script>alert('Complain status has been updated')</script>";
         }
         else
         {
             echo "<script>alert('Complain status cannot be updated')</script>";
         }
     }
 
     if(isset($_POST['resolved_other_complain']))
     {
         $complainID=$_SESSION["complainID"];
         $email_user = $_SESSION["email_user"];
         if(mail($email_user,'Update regarding your complaint '.$complainID,'Respected citizen,
          Your complain for water leakage has been resolved. Please contact us if you face any inconviniency.
         Regards and Thank you.'))
         {
             echo "<script>alert('Complain status has been updated')</script>";
         }
         else
         {
             echo "<script>alert('Complain status cannot be updated')</script>";
         }
     }
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Other Problem</title>

    <!-- Favicon-->
    <link rel="icon" href="../favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="../plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="../plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="../plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="../css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="../css/themes/all-themes.css" rel="stylesheet" />    
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
                <img src="../images/user.png" width="60" height="60" onerror="this.onerror=null;D:/users/Software/Xampp/htdocs/Project/Templates/Admin/AdminBSBMaterialDesign-master/images/user.png;" alt="Image not found" />
                    
                    

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
                                <li><a href="../sign-out.php"><i class="material-icons">exit_to_app</i>Sign Out</a></li>
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
                        <a href="../index.php">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="typography.php">
                            <i class="material-icons">track_changes</i>
                            <span>Complain Tracking</span>
                        </a>
                    </li>
                    <li>
                        <a href="../TimeManagement.php">
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
                                <a href="../Recycling.php">
                                    <span>Info</span>
                                </a>
                            </li>
                            <li>
                                <a href="/examples/sign-up.php">
                                    <span>Tenders</span>
                                </a>
                               
                            </li>

                            <li>
                               <a href="../History_Recycling.php">
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
                                <a href="../IoTDustbin.php">Tracking</a>          
                                <a href="../History_Dustbin.php">History</a>
                            </li>
                        </ul>
                    </li>  
                    <li>
                        <a href="../Feedback.php">
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
             <!--Other Complaints -->
             <div class="row clearfix">
                <div class="col-xs-8 col-sm-8 col-md-6 col-lg-12">
                    <div class="card">
                        <div class="header bg-amber js-basic-example">
                            <h2>OTHER COMPLAINTS</h2>
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
                                            <th>Contact No.</th>
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
                                            $sql = "select * from complain where problem='Other'";
                                            $result = mysqli_query($conn,$sql);


                                            while ($row=mysqli_fetch_array($result)) {
                                                $email_user = $row['email'];
                                                $id = $row['complainid'];
                                                $_SESSION['email_user'] = $email_user;
                                                $_SESSION['id'] = $id;
                                                echo '<form method="POST">';
                                                echo "<tr>";
                                                echo "<td>".$row['complainid']."</td>";
                                                echo "<td>".$row['address']."</td>";
                                                echo "<td>".$row['problem']."</td>";
                                                echo "<td>".$row['complaininfo']."</td>";
                                                echo "<td>".'<input type="submit" name="received_other_complain" value="RECEIVED" class="btn bg-blue waves-effect waves-light">'."</td>";
                                                echo "<td>".'<input type="submit" name="resolved_other_complain" value="RESOLVED" class="btn bg-cyan waves-effect waves-light">'."</td>";
                                                echo "</tr>";
                                                echo "</form>";
                                            }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            <!--#End# Other Complaints-->
    </section>

    <!-- Jquery Core Js -->
    <script src="../plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="../plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="../plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="../plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="../plugins/node-waves/waves.js"></script>

    <!-- Custom Js -->
    <script src="../js/admin.js"></script>

    <!-- Demo Js -->
    <script src="../js/demo.js"></script>
</body>

</html>