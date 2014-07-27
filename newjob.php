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
                    <li>
                        <a href="logout.php">Log out</a>
                    </li>
                </ul>
            </div>			
		</div>
	</div>
	<div class="reg-card">
	<form action="newjobentry.php" method="post">
	<h1>Job Profile:</h1><hr><br/>
	<table cellspacing="2px" cellpadding="5px">
		<tr><td><p>Role:</p></td><td><input type="text" name="role"></input></td></tr>
		<tr><td><p>Salary:</p></td><td><input type="text" name="salary"></input></td></tr>
		<tr><td><p>Locality:</p></td><td><input type="text" name="locality"></input></td></tr>
		<tr><td><p>Working Hours:</p></td><td><input type="text" name="hrs"></input></td></tr>
		<tr><td><p>Transport Facilities:</p></td><td><input type="radio" name="transport" value="1">Yes</input></td><td><input type="radio" name="transport" value="0">No</input></td></tr>
		<tr><td><p>Incentives:</p></td><td><input type="radio" name="incentives" value="1">Yes</input></td><td><input type="radio" name="incentives" value="0">No</input></td></tr>
		<tr><td><p>Accommodation:</p></td><td><input type="radio" name="accommodation" value="1">Yes</input></td><td><input type="radio" name="accommodation" value="0">No</input></td></tr>
	</table><br/><br/>
	<center>
	<input class="button button-submit" type="submit" value="submit" />
	</center>
	</form>
	</div>
</body>
</html>