<?php
include 'connection.php';
?>


<!DOCTYPE html>
<html>
<head>
	<title>Water and Cleanliness management</title>
</head>
<body>
	<?php
		$sql = "select * from complain";
		$result=mysqli_query($conn,$sql);
		if(isset($_POST['generate']))
		echo "<table border='1'>

				<tr>
				<th>uniqueid</th>
				<th>address</th>
				<th>complaininfo</th>
				<th>problem</th>
				<th>complainid</th>
				<th>email</th>
				</tr>
		";
		while ($row=mysqli_fetch_array($result)) {
			echo "<tr>";
			echo "<td>".$row['uniqueid'].".</td>";
			echo "<td>".$row['address'].".</td>";
			echo "<td>".$row['complaininfo'].".</td>";
			echo "<td>".$row['problem'].".</td>";
			echo "<td>".$row['complainid'].".</td>";
			echo "<td>".$row['email'].".</td>";
		}
		echo "</table>";
	?>
</body>
</html>