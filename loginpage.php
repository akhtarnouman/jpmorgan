<html>
<head>
	<meta charset="UTF-8">
	<title>Quest Alliance</title>
	<link rel="stylesheet" href="css/loginpage.css" type="text/css">
</head>
<body>
	<div id="header">
		<div>
			<div id="logo">
				<a href="#">Quest Alliance</a>
			</div>
			<div id="navigation">
				<ul>
					<li class="selected">
						<a href="loginpage.php">Home</a>
					</li>
					<li>
						<a href="#">About</a>
					</li>
				</ul>
			</div>
		</div>
	</div>

	<div class="login-card" align="center">
    	<h1>Log-in</h1><br>
  		<form name="myForm" action="login_verify.php" method="post">
    		<input type="text" name="user" value="" placeholder="Username">
    		<input type="password" name="pass" value="" placeholder="Password">
    		<select name="profile" size="1">
  				<option value="staff">Staff</option>
  				<option value="student">Student</option>
  				<option value="company">Company</option>
  			</select>
    		<input type="submit" name="login" class="login login-submit" value="Sign in">
  		</form>
  		<a href="newemployer.php">Company Registration </a>.<a href="newstudent.php"> Student Registration</a>
	</div>
</body>
</html>