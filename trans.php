<?php
$user = $_POST['username'];
echo "<p style='font-size:50px; text-align:center'; >History</p>";
$conn =mysqli_connect("localhost","root","","lptravels");
if(!$conn)
	{
		die("Connection Failed:");
	}
	else
	{
		//echo "Connected Succesfully";
	}
$sql = "select * from customer where userid='$user'";
$dff = mysqli_query($conn, $sql);
echo "<style> 
body
{
	
		background-image : linear-gradient(to right, #bc4e9c , #f80759 );
	
}
table, th, td {
   border: 3px solid black;
}
		table {
    width: 100%;
}
table{
	 border-collapse: collapse;
}



</style>";	
echo "<table style='text-align:center;' ><tr style='font-size:25px; text-align:center; ' ><td>travaler name</td><td>aadhar no</td><td>mobile no</td><td>age</td><td>gender</td><td>bus No</td><td>journey date</td><td>seat No</td><td>transid</td><td></td></tr>";
	if (mysqli_num_rows($dff) > 0) {
		
		while($row = mysqli_fetch_assoc($dff)) {
			echo "<tr><td>".$row['c_name']."</td>";
			echo "<td>".$row['aadhar']."</td>";
			echo "<td>".$row['mobile']."</td>";
			echo "<td>".$row['age']."</td>";
			echo "<td>".$row['gender']."</td>";
			$busnum = $row['bus_num'];
			echo "<td>$busnum</td>";
			$jdate = $row['jdate'];
			echo "<td>$jdate</td>";
			$seatno = $row['seatno'];
			echo "<td>$seatno</td>";
			$tra = $row['transid'];
			echo "<td>$tra</td>";
			echo "<td><form action='delete.php' method='POST'  style='padding-top:15px;' >
					<input type='text' value='$seatno' name='seat' readonly style='display:none;' />
					<input type='text' value='$tra' name='tran' readonly style='display:none;'  />
					<input type='text' value='$busnum' name='busid' readonly style='display:none;' />
					<input type='text' value='$user' name='userid' readonly style='display:none;' />
					<input type='text' value='$jdate' name='jdat' readonly style='display:none;' />
					<input ' type='Submit' value='Delete' /></form>
					</td></tr>";
		}
		
	}
	echo "</table>";


	mysqli_close($conn);




?>