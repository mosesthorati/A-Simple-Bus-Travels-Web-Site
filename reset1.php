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
		
	}
.cla{
	padding-top:100px;
	font-size:30px;
	text-align:center;
	
	
} </style>";

	$name = $_POST['name'];
	$val = $_POST['pass'];
	
	$sql = "update users set password = '$val' where username = '$name'";
$dff = mysqli_query($conn, $sql);

if(!$dff)
	echo "<div class='cla'>error while resetting password</div>";

else
	echo "<div class='cla'>Password changed Succesfully</div>";


	mysqli_close($conn);
			
			
			
			
	
	
	
	
?>