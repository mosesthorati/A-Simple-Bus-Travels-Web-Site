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
	$user = $_POST['username'];
	$name1 = $_POST['from_city'];
	$name2 = $_POST['to_city'];
	$date  = $_POST['date'];
	echo "<style>body{background-image :linear-gradient(to right ,rgba(255,0,0,0.7),rgba(0,0,255,0.7));
			font-style:italic;
			font-family: "."Times New Roman".", Times, serif;
			font-size:20px;
			padding-top:200px;
			padding-left:50px;}</style>";
	$sql = "SELECT * FROM bus WHERE from_city = '$name1' AND to_city = '$name2' AND journey_date = '$date'";
	$df = mysqli_query($conn, $sql);
	echo "<br>"."<pre style='font-size:30px;'>  from"."		"."to"."        "."price"."	    "."bus no"."	"."available seats"."<br></pre>";
	
	if (mysqli_num_rows($df) > 0) {
		while($row = mysqli_fetch_assoc($df)) {
			echo "<pre> ".$row["from_city"]."	        ".$row["to_city"]."	        ".$row["price"]."          	".$row["bus_no"]."			".$row["seat_capacity"]."</pre>";
			echo "<form action='booknow.php' method='post' >
			<input type='text' name='username' style='display:none;' value='$user'  readonly />
			<input type='text' value=".$row['bus_no']." readonly style='display:none;' name='busid' />
			<input type='datee' name='datee' readonly style='display:none' value=".$date." />
			<input type='submit' value='BookNow' />
			</form>";
		}
	}
	mysqli_close($conn);
?>