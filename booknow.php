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
	
	$busid = $_POST['busid'];
	$datee = $_POST['datee'];
	$sql = "SELECT * FROM seats WHERE bus_no = '$busid' AND date= '$datee' ";
	#echo $datee;
	#echo $busid;
	echo '<p style="font-size:50px;">Please Select Seat<p>';
	echo  "<style>body{background-image:linear-gradient(to right,red,blue);
			padding-top:50px;
		padding-left :100px;
	}
		#divv{
		//	border-style:inset;
		//	border-color:black;
			width:500px;
			height:900px;
			
		}
			#dis{
		height:80px;
		width:450px;
	//	border-style:inset;
	//	border-color:green;
		 position:absolute;
	
	}
	#dis > div {
		  float:left;
	}		
		#divvv{
		height:30px;
		width:200px;
	//	border-style:solid;
	//	border-color:white;
		}
#divvb{
		height:30px;
		width:200px;
	//	border-style:solid;
	//	border-color:white;

	
	}


	
	</style>";
		$user = $_POST['username'];
	$dff = mysqli_query($conn, $sql);
	if (mysqli_num_rows($dff) > 0) {
		
		while($row = mysqli_fetch_assoc($dff)) {
			echo "<div id='divv'><div id='dis'><div id='divvv'>";
			if($row['s0']==0)
			{
			echo "<form method='POST' action='seer3.php' >
			<input type='text' name='username'  value='$user' style='display:none' readonly />
			<input type='date' value='$datee' name='datee' style='display:none;' readonly />
			<input type='text' value='$busid' name='busid' style='display:none;' readonly />
			<input type='text' value='1' name='seatno' style='display:none;' readonly />
			<input type='submit' value='Seat1'  style='width:60px;'  />
			</form>";
			}
			else
			{
				echo "<input type='text' value='   Seat1' style='width:60px;' readonly />";
			}
			echo "</div><div id='divvb'>";
			if($row['s1']==0)
			{
			echo"<form method='POST' action='seer3.php' >
			<input type='text' name='username'  value='$user' style='display:none' readonly />
			<input type='date' value='$datee' name='datee' style='display:none;' readonly />
			<input type='text' value='$busid' name='busid' style='display:none;' readonly />
			<input type='text' value='2' name='seatno' style='display:none;' readonly />
			<input type='submit' value='Seat2'  style='width:60px;'  />
			</form>";
			}
			else
			{
				echo "<input type='text' value='   Seat2' readonly  style='width:60px;'   />";
			}
			echo "</div></div><br /><br /><br /><div id='dis'><div id='divvv'>";
			if($row['s2']==0)
			{
				echo "<form method='POST' action='seer3.php' >
				<input type='text' name='username'  value='$user' style='display:none' readonly />
			<input type='date' value='$datee' name='datee' style='display:none;' readonly />
			<input type='text' value='$busid' name='busid' style='display:none;' readonly />
			<input type='text' value='3' name='seatno' style='display:none;' readonly />
			<input type='submit' value='Seat3'  style='width:60px;'  />
			</form>";
			}
			else
			{
				echo "<input type='text' value='   Seat3' readonly  style='width:60px;'  />";
			}
			echo "</div><div id='divvb'>";
			if($row['s3']==0)
			{
				echo "<form method='POST' action='seer3.php' >
				<input type='text' name='username'  value='$user' style='display:none' readonly />
			<input type='date' value='$datee' name='datee' style='display:none;' readonly />
			<input type='text' value='$busid' name='busid' style='display:none;' readonly />
			<input type='text' value='4' name='seatno'  style='display:none;' readonly />
			<input type='submit' value='Seat4'  style='width:60px;'  />
			</form>";
			}
			else
			{
				echo "<input type='text' value='   Seat4' readonly   style='width:60px;'  />";
			}
			echo "</div></div><br /><br /><br /><div id='dis'><div id='divvv'>";
			if($row['s4']==0)
			{
				echo "<form method='POST' action='seer3.php' >
			<input type='date' value='$datee' name='datee' style='display:none;' readonly />
			<input type='text' name='username'  value='$user' style='display:none' readonly />
			<input type='text' value='$busid' name='busid' style='display:none;' readonly />
			<input type='text' value='5' name='seatno' style='display:none;' readonly />
			<input type='submit' value='Seat5'   style='width:60px;' />
			</form>";
			}
			else
			{
				echo "<input type='text' value='   Seat5' readonly  style='width:60px;'   />";
			}
			echo "</div><div id='divvb'>";
			if($row['s5']==0)
			{
				echo "<form method='POST' action='seer3.php' >
				<input type='text' name='username'  value='$user' style='display:none' readonly />
			<input type='date' value='$datee' name='datee' style='display:none;' readonly />
			<input type='text' value='$busid' name='busid' style='display:none;' readonly />
			<input type='text' value='6' name='seatno' style='display:none;' readonly />
			<input type='submit' value='Seat6'  style='width:60px;'  />
			</form>";
			}
			else
			{
				echo "<input type='text' value='   Seat6' readonly   style='width:60px;'  />";
			}
			echo "</div></div><br /><br /><br /><div id='dis'><div id='divvv'>";
			if($row['s6']==0)
			{
				echo "<form method='POST' action='seer3.php' >
				<input type='text' name='username'  value='$user' style='display:none' readonly />
			<input type='date' value='$datee' name='datee' style='display:none;' readonly />
			<input type='text' value='$busid' name='busid' style='display:none;' readonly />
			<input type='text' value='7' name='seatno' style='display:none;' readonly />
			<input type='submit' value='Seat7'   style='width:60px;' />
			</form>";
			}
			else
			{
				echo "<input type='text' value='   Seat7' readonly  style='width:60px;'   />";
			}
			echo "</div><div id='divvb'>";
			if($row['s7']==0)
			{
				echo "<form method='POST' action='seer3.php' >
				<input type='text' name='username'  value='$user' style='display:none' readonly />
			<input type='date' value='$datee' name='datee' style='display:none;' readonly />
			<input type='text' value='$busid' name='busid' style='display:none;' readonly />
			<input type='text' value='8' name='seatno' style='display:none;' readonly />
			<input type='submit' value='Seat8'  style='width:60px;'  />
			</form>";
			}
			else
			{
				echo "<input type='text' value='   Seat8' readonly   style='width:60px;'  />";
			}
			echo "</div></div><br /><br /><br /><div id='dis'><div id='divvv'>";
			if($row['s8']==0)
			{
				echo"<form method='POST' action='seer3.php' >
				<input type='text' name='username'  value='$user' style='display:none' readonly />
			<input type='date' value='$datee' name='datee' style='display:none;' readonly />
			<input type='text' value='$busid' name='busid' style='display:none;' readonly />
			<input type='text' value='9' name='seatno' style='display:none;' readonly />
			<input type='submit' value='Seat9' style='width:60px;'   />
			</form>";
			}
			else
			{
				echo "<input type='text' value='   Seat9' readonly  style='width:60px;'  />";
			}
			echo "</div><div id='divvb'>";
			if($row['s9']==0)
			{
				echo "<form method='POST' action='seer3.php' >
				<input type='text' name='username'  value='$user' style='display:none' readonly />
			<input type='date' value='$datee' name='datee' style='display:none;' readonly />
			<input type='text' value='$busid' name='busid' style='display:none;' readonly />
			<input type='text' value='10' name='seatno' style='display:none;' readonly />
			<input type='submit' value='Seat10'  style='width:60px;'  />
	
			</form>";
			}
			else
			{
				echo "<input type='text' value='   Seat10' readonly   style='width:60px;'  />";
			}
			echo "</div></div></div>";
		}
	}
	
		mysqli_close($conn);
?>