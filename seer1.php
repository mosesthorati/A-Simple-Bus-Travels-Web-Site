<?php 

$conn =mysqli_connect("localhost","root","","lptravels");
if(!$conn)
	{
		die("Connection Failed:");
	}
	else
	{
		//echo "Connected Succesfully";
	}
	$name1 = $_POST['from_city'];
	$name2 = $_POST['to_city'];
	$date  = $_POST['date'];
	echo "<style>body{background-image :linear-gradient(to right ,rgba(255,0,0,0.7),rgba(0,0,255,0.7));
			font-style:italic;
			font-family: "."Times New Roman".", Times, serif;
			font-size:20px;}</style>";
	$sql = "SELECT * FROM bus WHERE from_city = '$name1' AND to_city = '$name2' AND journey_date = '$date'";
	$df = mysqli_query($conn, $sql);
	echo "<br>"."<pre style='font-size:30px;'>  from"."		"."to"."        "."price"."	    "."bus no"."	"."available seats"."<br></pre>";
	$countt=1;
	if (mysqli_num_rows($df) > 0) {
		while($row = mysqli_fetch_assoc($df)) {
			echo "<pre>".$countt.".)".$row["from_city"]."	        ".$row["to_city"]."	        ".$row["price"]."          	".$row["bus_no"]."			".$row["seat_capacity"]."</pre>";
			$countt++;
		}
	}
	echo '<br /><form method="POST" action="success.php" name="success"><div style="padding-left:300px;"><p>please select the bus</p>';
	echo '<select name="busid" >';
	echo "<option disabled selected>select a bus</option>";
	$countt = 1;
		$df = mysqli_query($conn, $sql);
	if (mysqli_num_rows($df) > 0) {
		while($row = mysqli_fetch_assoc($df))
	{
		echo '<option value='.$row["bus_no"].'>'.$countt.'</option>';
		$countt++;
		//echo '<p>'.$row["bus_no"].'</p>';
	}
	}
	echo "</select>";
	echo "</br><p>Name :</p>";
	echo '<input type="text" name="cus" required>';
	echo "<p>mobile :</p>";
	echo '<input type="number" name="mobile" required>';
	echo "<p>Age :</p>";
	echo '<input type="number" name="age" required min="5">';
	echo "<p>Aadhar :</p>";
	echo '<input type="text" name="aadhar" required>';
	echo "<p>Gender :</p>";
	echo '<select name="gender">';
		echo '<option  selected="selected" disabled>select gender</option>';
		echo '<option value = "Male">Male</option>';
		echo '<option value = "Female">Female</option></select>';
	echo '<br /><br /><br /><input style="width:100px;height:30px;text-align:center"  type="Submit" value="Submit" /> <br /><br /><br /></form></div>';
	mysqli_close($conn);
?>