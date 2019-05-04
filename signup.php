<html>
	<head>
		<title>Signup</title>
		<script>
			function fun()
			{
				var a = document.getElementById("answer");
				a.style.display = "block";
			}
			</script>
	
	</head>
	<body style="background-image:url('download.jpg');background-repeat:no-repeat;background-size:cover;">
			<form method="POST" action="return.php" onsubmit="return validateForm()">
			<h1 style="text-align:center;">Signup</h1><br /><br />
			<div style="padding-left:600px;font-size:20px;">
			<pre>Name      :<input type="text" name="name1" required></pre><br />
			<pre>Username  :<input type="text" name="username1" required></pre><br />
			<pre>Mobile    :<input type="text" name="mobile" required></pre><br />
			<pre>Password  :<input type="password" name="password" required></pre><br />
			<select name="vall" onchange="fun()">
			<option  value="0" selected disabled>select a security question</option>
			<option value="1">what is your first Pet name?</option>
			<option value="2">what is your favourite dish?</option>
			<option value="3">what is the city you were born?</option>
		<!--	<option value="4">By which nick name did your grandfather call you?</option> -->
			</select>
			<br /><br />
			<input type="text" name="answer" id="answer" placeholder="answer" style="display:none" required /> 
			<br /><br />
			<input type="submit" value = "Submit"><br />
			</div>
		</form>
	</body>
</html>