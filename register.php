<!DOCTYPE html>
<html>
<head>
	<title>User Login</title>
	<link rel="stylesheet" type="text/css" href="registerstyle.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head> 
<body>
	<div class="register-box">
		<img src="avatar.png" class="avatar">
		<h1>User Registration</h1><br>
		<form action="registervalidation.php" method="post">
			<div class="form-group">
			<label for="name">Full Name</label>
			<input type="text" id="name" class="form-control" name="name" placeholder="Enter Your Name" required>
		    </div>
		    <div class="form-group">
			<label for="email">Email</label>
			<input type="text" id="email" class="form-control" name="email" placeholder="Enter Your Email" required>
		    </div>
		    <div class="form-group">
		    	<label for="gender">Gender</label>
		    	<div>
			<input type="text" id="gender" class="form-control" name="gender" placeholder="Enter Your Gender" required>
				</div>
			</div>
		    <div>
		    	<label for="number">Phone Number</label>
			<input type="number" id="number" class="form-control" name="num" placeholder="Enter Your Number" required><br>
		    </div>
		    <div>
		    	<label for="password">Password</label>
			<input type="password" id="password" class="form-control" name="password" placeholder="Enter Your password" required><br>
		    </div>
		    <div>
		    	<input type="submit" class="btn btn-primary w-100" value="Sign Up" name="signup"><br><br>
		    </div>
	    </form>
	    <div>
		    	<form method="POST" action="login.php">
		    	<label>Already have an account login here</label><br>
		    	<input type="submit" class="btn btn-primary w-100" value="Login"><br>
		    </div>
		 </form>   
</body>
</html>
						