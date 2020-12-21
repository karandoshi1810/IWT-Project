<?php
    session_start();
    $server = "localhost";
	$user = "root";
    $pass = "";
	$dbname = "admin";
	$conn = mysqli_connect($server,$user,$pass,$dbname);

    if(isset($_POST['addTask']))
    {
        $task = $_POST['task'];
        echo $task;
        $status = $_POST['status'];
        $manager = $_POST['manager'];
        $progress = $_POST['progress'];
        $sql = "insert into task (task,status,manager,progress) values('$task','$status','$manager','$progress')";
        if(mysqli_query($conn,$sql))
        {
            echo "record saved";
            header("Location:index.php");
        }
        else
        {
            echo "Record not saved".mysqli_error($conn);
        }            

    }


    if(isset($_POST['deleteTask']))
    {
        $taskID = $_POST['task_delete'];
        $sql = "delete from task where task_number='$taskID'";
        if(mysqli_query($conn,$sql))
        {
            echo "record saved";
            header("Location:index.php");
        }
        else
        {
            echo "Record not saved".mysqli_error($conn);
        }            

    }
?>