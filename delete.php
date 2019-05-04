<?php

$seatno = $_POST['seat'];
$busid = $_POST['busid'];
$userid = $_POST['userid'];
$jdate = $_POST['jdat'];


$trans = $_POST['tran'];


$conn =mysqli_connect("localhost","root","","lptravels");
if(!$conn)
	{
		die("Connection Failed:");
	}
	else
	{
		//echo "Connected Succesfully";
	}
	
$sql1 = "delete from customer where transid='$trans'";

if (mysqli_query($conn, $sql1)) {
  
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
$sql1="select seat_capacity from bus where bus_no='$busid'";
	$ans1=mysqli_query($conn, $sql1);
	$row = mysqli_fetch_assoc($ans1);
	$n = $row["seat_capacity"] + 1;
	//echo '<p>'.$n.'</p>';
	$sql2="update bus set seat_capacity='$n' where bus_no='$busid'";
	if($ans2=mysqli_query($conn, $sql2))
	{
		echo "<p style='font-size:30px; text-align:center; padding-top:200px;'>deleted Succesfully</p><br />";
		echo "<form id='myform' action='LP.php'  method='POST' style=' padding-left:555px;' ><input type='text' name='username' style='display:none;' value='$userid'  readonly />
	<input type='submit'  value='return to home page' onclick='fun()'  /></form>
				<script type='text/javascript' >
				function fun()
				{
					    document.getElementById('myform').submit();
				}</script>";
				echo "<br /><br />";
		echo '<form action="trans.php" style="padding-left:565px;" method="POST" />
		<input name="username" type="text" value='.$userid.' style="display:none;"  readonly />
		<input type="Submit"  value="My Transactions" />
		</form>';
	}
	else{
		echo "error";
	}
		$v = 's'.($seatno-1);
//	echo $v;
	$no = 0;
	$sql33 = "update seats set ".$v."='$no' where bus_no='$busid'  and date='$jdate'";
	#$sql3="select ".$v." from seats where bus_num='$busid' and date=$jdate'";
	if($ans33=mysqli_query($conn, $sql33))
	{
	
	}
	else{
		echo "error";
	}
	
	









	mysqli_close($conn);

?>