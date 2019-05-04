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
	echo "<style>
	body{
		background-image : linear-gradient(to right, #A8FF78 , #78FFD6);
		
		
		
	}
	</style>";
	$name = $_POST['cus'];
	$mob = $_POST['mobile'];
	$age = $_POST['age'];
	$aadhar = $_POST['aadhar'];
	$gen = $_POST['gender'];
	$busid = $_POST['busid'];
	$seatno = $_POST['seatno'];
	$jdate = $_POST['datee'];
	$uid = $_POST['username']; #add after login page.
	//echo $name.$mob.$age.$aadhar.$gen.$id;
	$sqll = "select * from customer where c_name='$name' and aadhar='$aadhar' and mobile='$mob' and age='$age' and gender='$gen' and bus_num='$busid' and jdate='$jdate' and seatno='$seatno'";
	$anss = mysqli_query($conn, $sqll);
	$p = mysqli_fetch_assoc($anss);
	if($p['c_name']==$name)
	{
		echo "<p style='padding:100px; font-size:50px; text-align:center;'>Your transaction Id : ".$p['transid']."</p>";
		echo '<p style="font-size:25px; text-align:center;">Transaction Successful </p>';
		echo "<form id='myform' action='LP.php'  method='POST' style=' padding-left:555px;' ><input type='text' name='username' style='display:none;' value='$uid'  readonly />
	<input type='submit'  value='return to home page' onclick='fun()'  /></form>
				<script type='text/javascript' >
				function fun()
				{
					    document.getElementById('myform').submit();
				}</script>";
	}
	else
	{
		
	$transid = uniqid();
	$sql="insert into customer(c_name,aadhar,mobile,age,gender,bus_num,jdate,seatno,transid,userid) values('$name','$aadhar','$mob','$age','$gen','$busid','$jdate','$seatno','$transid','$uid')";
	$ans=mysqli_query($conn, $sql);
	$sql1="select seat_capacity from bus where bus_no='$busid'";
	$ans1=mysqli_query($conn, $sql1);
	$row = mysqli_fetch_assoc($ans1);
	$n = $row["seat_capacity"] - 1;
	//echo '<p>'.$n.'</p>';
	$sql2="update bus set seat_capacity='$n' where bus_no='$busid'";
	$ans2=mysqli_query($conn, $sql2);
	
	
	$v = 's'.($seatno-1);
//	echo $v;
	$no = 1;
	$sql33 = "update seats set ".$v."='$no' where bus_no='$busid'  and date='$jdate'";
	#$sql3="select ".$v." from seats where bus_num='$busid' and date=$jdate'";
	$ans33=mysqli_query($conn, $sql33);
	#$row1 = mysqli_fetch_assoc($ans3);
		
		echo '<p style="padding:100px; font-size:50px; text-align:center;">Your transaction Id : '.$transid.'</p>';
			echo '<p style="font-size:25px; text-align:center;">Transaction Successful </p>';
			echo "<form id='myform' action='LP.php'  method='POST' style=' padding-left:555px;' ><input type='text' name='username' style='display:none;' value='$uid'  readonly />
	<input type='submit'  value='return to home page' onclick='fun()'  /></form>
				<script type='text/javascript' >
				function fun()
				{
					    document.getElementById('myform').submit();
				}</script>";
	}
		mysqli_close($conn);
?>