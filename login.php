<html>
	<head>
	<title>LOGIN</title>
	<link rel="icon" type="image/png/jpg" href="/icoon.jpg" >
	<style>
	div{
		//border-style:inset;
		
	}
	
	
	
	</style>
	</head>
	<body style=" background-image:url('lback.jpg');background-repeat:no-repeat;background-size:cover;">
		<h1 style="text-align:center; font-size:50px; color:green;" >Welcome to LP Travels</h1>
		<h2 style="text-align:center;font-size:40px;">LOGIN</h2><br />
		<div style="padding-left:550px; position:static; width:100px; height:250px; font-size:25px;">
		<form method="POST" action="LPbef.php">
		<p>Username</p>
		<input type="text" name="username">
		<p>Password</p>
		<input type="password" name="password"><br /><br />
		<input type="submit" value="login"  >
		</form><br />
		</div>
				<p style="text-align:center; font-size:20px;" ><a style="color:red;" href="forgot.php">Forgot Password?</a></p>	
		<p style="text-align:center; font-size:20px;" >New user? <a style="color:red;" href="signup.php">SignUp</a></p>	
	</body>
</html>