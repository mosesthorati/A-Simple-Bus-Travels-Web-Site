
<?php
		$user = $_POST['username'];
	//echo $id.time();
	echo "<br />";
	//echo uniqid(mt_rand(),true);
	
	echo "<style> body{ background-image:linear-gradient(to bottom , #DDD6F3 ,#FAACA8);}</style>";

	echo "<form action='success.php' method='POST' >";
		echo "<input type='text' name='username'  value='$user' style='display:none' readonly />";
	echo "<p>Date of journey : </p><input name='datee' type='text' value=".$_POST['datee']." readonly />";
	echo "<p>Seat No : </p><input type='text' name='seatno' value=".$_POST['seatno']." readonly />";
	echo "<p>bus No : </p><input type='text' name='busid' value=".$_POST['busid']." readonly />";
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
	echo '<br /><br /><br /><input style="width:100px;height:30px;text-align:center"  type="Submit" value="Submit" /> </form>';
	echo "<br /><br /><br />";
	?>