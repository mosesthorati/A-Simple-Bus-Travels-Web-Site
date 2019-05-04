<?php

$user = $_POST['username'];
echo '
<html>
	<head>
	<title>LP Travels</title>
	<style>
	body{
			padding:30px;
			font-style:italic;
			font-size:30px;
			background-image:url("back.jpg");
			background-repeat:no-repeat;
			background-size:100% 100%;
			background-position:fixed;
		
			}
			
	</style>
	<script>
	
	function validateForm() {
    var x = document.forms["myForm"]["from_city"].value;
	var y = document.forms["myForm"]["to_city"].value;
	if (x == "" && y == "") {
        alert("Please select From city and To city");
        return false;
    }
    if (x == "") {
        alert("Please select From city");
        return false;
    }
	if (y == "") {
        alert("Please select To city");
        return false;
    }
}
	
	
	
	
	</script>
		
	</head>
	<body>
		<h1 style="text-align:center; color:white;" >Welcome to LP Travels</h1>
		</div><p style="text-align:center; color:green; "><b> welcome '.$user.' </b></p>
		
		<form action="trans.php" style="padding-left:540px;" method="POST" />
		<input name="username" type="text" value='.$user.' style="display:none;"  readonly />
		<input type="Submit"  value="My Transactions" />
		</form>
		<div style="position:relative; width:700px; padding-left:350px;">
			<form method ="POST" name="myForm" action="seer2.php" onsubmit="return validateForm()">
			<div style="width:300px;float:left;">
			<p style="color:green;"><b>From :</	b></p>
			<select name="from_city" required>
				<option  selected="selected" value="" 	disabled>select a city</option>
				<option value = "Hyderabad">Hyderabad</option>
				<option value = "Goa">Goa</option>
				<option value = "Mumbai">Mumbai</option>
				<option value = "Bangalore">Bangalore</option>
			</select>
			</div>
		<div style="width:300px;float:right;">
			<p style="color:green;" ><b>To :</b></p>
			<select name = "to_city" required>
				<option selected="selected" value="" disabled>select a city</option>
				<option value = "Hyderabad">Hyderabad</option>
				<option value = "Goa">Goa</option>
				<option value = "Bangalore">Bangalore</option>
				<option value = "Mumbai">Mumbai</option>
			</select>
			<input name="username" type="text" value='.$user.' style="display:none;"  readonly />
		</div>
		<br />
		<br />
		<br />
		<div style="width:300px; padding-left:150px;">
		<p style="color:green;" ><b>Date of journey:</b></p>
		 <input type="date" name="date" required />
		</div>
		<br />
	
		<div style="width:300px; padding-left:160px;">
		<input style="width:100px;height:30px;    " type="Submit" value="Submit" />
		
		</div></form>
		</div>
	</body>
</html>
';
?>