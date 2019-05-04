<?php
$conn =mysqli_connect("localhost","root","","lptravels");
	if(!$conn)
	{
		die("Connection Failed:");
	}
	else
	{
		#echo "Connected Succesfully";
	}

echo "<style>
	body{
		background-image : linear-gradient(to right, #bc4e9c , #f80759 );
		
	} </style>";

$name = $_POST['namee'];
$sql = "select * from users where username='$name'";
$dff = mysqli_query($conn, $sql);
if (mysqli_num_rows($dff) > 0) {
		echo "<div style='padding-left:300px; padding-top:100px;' >Please answer the security question to reset your password";

		while($row = mysqli_fetch_assoc($dff)) {
			if($row['qvalue']== 1)
				echo "<p>what is your first pet name?</p>";
			if($row['qvalue']== 2)
				echo "<p>what is your favourite dish?</p>";
			if($row['qvalue']== 3)
				echo "<p>what is the city you were born?</p>";
			echo "<form method='POST' action='reset.php' >
				<input type='text' required name='ans' />
				<input type='text' value='$name' style='display:none;' name='name'  />
				<input type='Submit' />
				</form></div>";
		}
}
else
{
	echo"<p>No account found</p>";
}



	mysqli_close($conn);




?>