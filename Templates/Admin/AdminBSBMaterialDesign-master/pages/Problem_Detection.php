
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

	if(isset($_POST['show']))
	{
		$problem = $_POST['group1'];
		if($problem=="Leakage Problem")
		{
			$sql = "select Leakage from complain";
			header("Location:/Project/Templates/Admin/AdminBSBMaterialDesign-master/pages/Leakage.php");
			$result = mysqli_query($conn,$sql);
			while($row=mysqli_fetch_array($result))
			{
		echo "ID is:".$row['id']." Name is:".$row['first_name']." Contact:".$row['contact']." Username:".$row['username']." Password:".$row['password']." Email:".$row['email'];
				echo "<br>";
			}
		}
		else if($problem=="Sweeper Problem")
		{
			
			echo $problem;
			$sql = "select Sweepers from complain";
			header("Location:Sweeper.php");
		}
		else if($problem=="Dustbin Problem")
		{
			$sql = "select Dustbin from complain";
			header("Location:Dustbin.php");
		}
		else if($problem=="Animals Problem")
		{
			$sql = "select Animals from complain";
			header("Location:Animals.php");
		}
		else if($problem=="Other Problems")
		{

			$sql = "select Others from complain";
			header("Location:Others.php");
		}
	  
	  }
?>
