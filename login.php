<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<link rel="stylesheet" type="text/css" href="loginstyle.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>


	<div class="login-box">
		<img src="avatar.png" class="avatar img-responsive">
		<h1>User Login</h1><br>
		<form name="login" action="loginvalidation.php" method="POST">

			<div class="form-group">
			<label for="email1">Email</label>
			<input type="text" id="email1" class="form-control" name='uemail' value="" placeholder="Enter Your Email">
		    </div>

		    <div>
		    	<label for="password1">Password</label>
				<input type="password" value="" id="password1" class="form-control" name="password" placeholder="Enter Your Password"><br>
		    </div>

		    <div>
		    	<input type="submit" class="btn btn-primary w-100" value="Login" name="login"><br><br>
		    </div>
		</form>

		    <div>
		    	<form method="post" action="register.php">
		    	<label class="text-center">New User? Register here</label><br>
		    	<input type="submit" class="btn btn-primary w-100" value="Sign Up"><br>
		    </div>
	</div>
	    </form>

</body>
</html>




