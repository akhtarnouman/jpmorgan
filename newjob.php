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
	<form action="" method="post">
	<h1>Job Profile:</h1>
	<table cellspacing="2px" cellpadding="5px">
		<tr><td><p>Role:</p></td><td><input type="text" id="role"></input></td></tr>
		<tr><td><p>Salary:</p></td><td><input type="text" id="salary"></input></td></tr>
		<tr><td><p>Locality:</p></td><td><input type="text" id="locality"></input></td></tr>
		<tr><td><p>Working Hours:</p></td><td><input type="date" id="dob"></input></td></tr>
		<tr><td><p>Transport Facilities:</p></td><td><input type="radio" id="transport" value="yes">Yes</input></td><td><input type="radio" id="transport" value="no">No</input></td></tr>
		<tr><td><p>Incentives:</p></td><td><input type="radio" id="incentives" value="yes">Yes</input></td><td><input type="radio" id="incentives" value="no">No</input></td></tr>
		<tr><td><p>Accommodation:</p></td><td><input type="radio" id="accommodation" value="yes">Yes</input></td><td><input type="radio" id="accommodation" value="no">No</input></td></tr>
	</table>
	<input type="submit" value="submit" />
	</form>
	</div>
</body>
</html>