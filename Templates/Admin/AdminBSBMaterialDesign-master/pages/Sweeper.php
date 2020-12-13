<!--<!DOCTYPE html>
<html>
<head>
	<title>Animals Problem</title>
	<style type="text/css">
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
}
</head>
<body>
	<table style="position: relative;height: 300px; top: 170px;color:white;font-family: Times Roman;" class="center">
		<tr>
			<th style=" background-color: #FF1493">UNIQUE ID</th>
			<th style="width: 80%; background-color: #FF1493">DESCRIPTION</th>
		</tr>

		<tr style="background-color: #33BBC1;text-align: center;">
			<td>TESTING 1</td>
			<td>DESCRIPTION 1</td>
		</tr>

		<tr style="background-color: #33BBC1;text-align: center;">
			<td>TESTING 2</td>
			<td>DESCRIPTION 2</td>
		</tr>

		<tr style="background-color: #33BBC1; text-align:center;">
			<td>TESTING 3</td>
			<td>DESCRIPTION 3</td>
		</tr>
	</table>
</body>
</html>-->


<?php
    session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Sweeper Problem</title>

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
<style type="text/css">
 table,th,td{
            border: 1px solid black;
            border-collapse: collapse;
            align-self: center;
            margin-left: 300px;
            background-color: #FF5722;
            margin-top: 100px;

        }
  
th,td{
    background-color:pink; 
    padding: 10px;
    }
	</style>
}

</style>
</head>

<body class="theme-red">
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
                <a class="navbar-brand" href="widgets/../../index.html">Cleanliness and Water Management</a>
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
                    <li class="header">MAIN NAVIGATION</li>
                    <li>
                        <a href="../index.php">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="typography.php">
                            <i class="material-icons">text_fields</i>
                            <span>Complain Tracking</span>
                        </a>
                    </li>
                    <li>
                        <a href="../TimeManagement.php">
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
                            <i class="material-icons">layers</i>
                            <span>IoT Dustbin</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="../IoTDustbin.php">Tracking</a>          
                                <a href="../History_Dustbin.html">History</a>
                            </li>
                        </ul>
                    </li>

                    <!--<li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">swap_calls</i>
                            <span>Complain</span>
                        </a>
                        <ul class="ml-menu">
                           <li>
                                <a href="Leakage.php">Leakage Problem</a>
                            </li>
                            <li>
                                <a href="Animals.php">Dying of Animals</a>
                            </li>
                            <li>
                                <a href="Dustbin.php">Dustbins</a>
                            </li>

                            <li>
                                <a href="Sweeper.php">Sweepers</a>
                            </li>
                            <li>
                                <a href="Others.php">Others</a>
                            </li>
                    </li>-->
                    
                   
            </div>
            <!-- #Menu -->
           
        </aside>
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
        <aside id="rightsidebar" class="right-sidebar">
            <ul class="nav nav-tabs tab-nav-right" role="tablist">
               
                <li role="presentation"><a href="#settings" data-toggle="tab">SETTINGS</a></li>
            </ul>
            <div class="tab-content">
               
                <div role="tabpanel" class="tab-pane fade" id="settings">
                    <div class="demo-settings">
                        <p>GENERAL SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Report Panel Usage</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Email Redirect</span>
                                <div class="switch">
                                    <label><input type="checkbox"><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                        <p>SYSTEM SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Notifications</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Auto Updates</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                        <p>ACCOUNT SETTINGS</p>
                        <ul class="setting-list">
                            <li>
                                <span>Offline</span>
                                <div class="switch">
                                    <label><input type="checkbox"><span class="lever"></span></label>
                                </div>
                            </li>
                            <li>
                                <span>Location Permission</span>
                                <div class="switch">
                                    <label><input type="checkbox" checked><span class="lever"></span></label>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </aside>
        <!-- #END# Right Sidebar -->
    </section>

    <section class="content">
            <!-- Body Copy -->
             <?php

                $server = "localhost";
                $user = "root";
                $pass = "";
                $dbname = "user";
                $conn = mysqli_connect($server,$user,$pass,$dbname);
                if(!$conn)
                {
                    echo "Not Connected";
                }
                else
                {
                    echo "Connected";
                }
                $sql = "select * from leakage";
                $result = mysqli_query($conn,$sql);

                echo "<table border='10'>

                <tr>
                <th>Complain ID</th>
                <th>Ward Number</th>
                <th>Description</th>
                <th>Address</th>
                </tr>";

                while ($row=mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>".$row['complain_id'].".</td>";
                echo "<td>".$row['Ward_no'].".</td>";
                echo "<td>".$row['Address'].".</td>";
                echo "<td>".$row['Complain_Info'].".</td>";
                
                }
                echo "</table>";

            ?>
            
                
            
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