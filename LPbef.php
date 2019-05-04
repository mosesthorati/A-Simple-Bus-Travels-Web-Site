<?php
	$conn = mysqli_connect("localhost","root","","lptravels");
	if(!$conn)
	{
		die("Connection Failed:");
	}
	else
	{
		//echo "Connected Succesfully";
	}
	$user = $_POST['username'];
	$pass = $_POST['password'];
	$sql = "select * from users where username='$user' and password='$pass'";
	$p = mysqli_query($conn,$sql);
	$row = mysqli_fetch_assoc($p); 
	//echo $row['username'];
	if($row['username']==$user && $user != "")
	{
		echo "<html><head></head><body onload='fun()' ><form id='myform' action='LP.php' method='POST'><input type='text' name='username' value='$user'  readonly />
			<input type='submit' value='Submit'   style='display:none;'  /></form>
				<script type='text/javascript' >
				function fun()
				{
					    document.getElementById('myform').submit();
				}</script></body></html>";
	}
	else
	{
		header("Location:login.php");
	}
	$conn->close();
?>
		