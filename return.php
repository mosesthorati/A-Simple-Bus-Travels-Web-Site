<?php
	$var =mysqli_connect("localhost","root","","lptravels");
	if(!$var)
	{
		die("Connection Failed:");
	}
	else
	{
		#echo "Connected Succesfully";
	}
	$name = $_POST['name1'];
	$username = $_POST['username1'];
	$mobile = $_POST['mobile'];
	$password = $_POST['password'];
	$val = $_POST['vall'];
	$ans = $_POST['answer'];
	$sql = "insert into users(name,mobile,password,username,qvalue,answer) values('$name','$mobile','$password','$username','$val','$ans')";
	$mn =  mysqli_query($var,$sql);
	if($mn == true)
	{
		echo "<p style='padding-top:200px; text-align:center;'>Account Succesfully Created! ";
		echo ' <a href = "login.php" style="font-size:30px;">Return to login page!</a></p>';
	}
	else
	{
		echo "error in creating account";
	}
	mysqli_close($var);
?>