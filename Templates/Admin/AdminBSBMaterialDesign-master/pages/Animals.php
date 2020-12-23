
<?php
    session_start();
    include "Connection.php";
    if(!isset($_SESSION['admin'])){
        header("location:examples/sign-in.php");
        die();
     }
     if(isset($_POST['received_animals_complain']))
     {
         $complainID=$_SESSION["complainID"];
         $email_user = $_SESSION["email_user"];
         if(mail($email_user,'Update regarding your complaint '.$complainID,'Respected citizen,
         We are sorry for the inconvinency. We have received your complain and we will make our best and swift efforts to take care of pick up and cleaning of dead animals in your area.
         Regards and Thank you.'))
         {
             echo "<script>alert('Complain status has been updated')</script>";
         }
         else
         {
             echo "<script>alert('Complain status cannot be updated')</script>";
         }
     }
 
     if(isset($_POST['resolved_animals_complain']))
     {
         $complainID=$_SESSION["complainID"];
         $email_user = $_SESSION["email_user"];
         if(mail($email_user,'Update regarding your complaint '.$complainID,'Respected citizen,
          Your complain for dead animal/s has been resolved. Please contact us if you face any inconviniency.
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
         $query = "select * from complain where complainid=$complainID";
         $result=mysqli_query($connection,$query);
         $row = mysqli_fetch_array($result);

         $insert_query = "insert into complainhistory values('".$row["uniqueid"]."','".$row["complainid"]."',0000000000,00000000'".$row["address"]."','".$row["complaininfo"]."')";

         mysqli_query($conn,$insert_query);
        
         $delete_query = "delete from complain where complainid=$complainID";
         mysqli_query($connection,$delete_query);
     }
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Animals Problem</title>

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
                                <a href="iot_dustbin.php">Tracking</a>          
                                <!--<a href="../History_Dustbin.php">History</a>-->
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
             <!--Dead Animals Complaints -->
             <div class="row clearfix">
                <div class="col-xs-8 col-sm-8 col-md-6 col-lg-12">
                    <div class="card">
                        <div class="header bg-amber">
                            <h2>DEAD ANIMALS COMPLAINTS</h2>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover dashboard-task-infos dataTable js-basic-example" id="table">
                            <input type="button" id="print" name="print" value="Print" class="btn bg-pink waves-effect waves-light" onclick=printData() style="margin-right:10px;">
                            <input type="button" id="sort" name="sort" value="Sort" class="btn bg-pink waves-effect waves-light" onclick=sortTable()>
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
                                            $sql = "select * from complain where problem='Died'";
                                            $result = mysqli_query($conn,$sql);


                                            while ($row=mysqli_fetch_array($result)) {
                                                $id = $row['complainid'];
                                                $_SESSION['complainID'] = $id;
                                                $email_user = $row['email'];
                                                $_SESSION['email_user'] = $email_user;
                                                echo '<form method="POST">';
                                                echo "<tr>";
                                                echo "<td>".$row['complainid']."</td>";
                                                echo "<td>".$row['address']."</td>";
                                                echo "<td>".$row['problem']."</td>";
                                                echo "<td>".$row['complaininfo']."</td>";
                                                echo "<td>".'<input type="submit" name="received_animals_complain" value="RECEIVED" class="btn bg-blue waves-effect waves-light">'."</td>";
                                                echo "<td>".'<input type="submit" name="resolved_animals_complain" value="RESOLVED" class="btn bg-cyan waves-effect waves-light">'."</td>";
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
            <!--#End# Leakage Complaints-->
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

    <script>
        function printData()
        {
            var divToPrint=document.getElementById("table");
            newWin= window.open("");
            newWin.document.write(divToPrint.outerHTML);
            newWin.print();
            newWin.close();
        }
    </script>

<script>
    function sortTable() {
    var table, rows, switching, i, x, y, shouldSwitch;
    table = document.getElementById("table");
    switching = true;
    /*Make a loop that will continue until
    no switching has been done:*/
    while (switching) {
        //start by saying: no switching is done:
        switching = false;
        rows = table.rows;
        /*Loop through all table rows (except the
        first, which contains table headers):*/
        for (i = 1; i < (rows.length - 1); i++) {
        //start by saying there should be no switching:
        shouldSwitch = false;
        /*Get the two elements you want to compare,
        one from current row and one from the next:*/
        x = rows[i].getElementsByTagName("TD")[0];
        y = rows[i + 1].getElementsByTagName("TD")[0];
        //check if the two rows should switch place:
        if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
            //if so, mark as a switch and break the loop:
            shouldSwitch = true;
            break;
        }
        }
        if (shouldSwitch) {
        /*If a switch has been marked, make the switch
        and mark that a switch has been done:*/
        rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
        switching = true;
        }
    }
    }
</script>
</body>

</html>