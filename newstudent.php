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
		</div>
	</div>
	<div class="reg-card">
	<form action="newstudententry.php" method="post">
		<h1>Student Enrollment</h1><hr><br/>
		<h2>Basic Details:</h2>
		<table cellspacing="2px" cellpadding="5px">
			<tr><td>Student ID:</td><td><input type="text" name="sid" required="true"></input></td></tr>
			<tr><td>First Name:</td><td><input type="text" name="fname" required="true"></input></td></tr>
			<tr><td>Last Name:</td><td><input type="text" name="lname" required="true"></input></td></tr>
			<tr><td>Date of Birth:</p></td><td><input type="date" name="dob" required="true"></input></td></tr>
			<tr><td>Email-id:</td><td><input type="text" name="email" required="true"></input></td></tr>
			<tr><td>Mobile:</td><td><input type="text" name="mob" required="true"></input></td></tr>
			<tr><td>Nationality:</p></td><td><input type="text" name="nation"/></td></tr>
			<tr><td>Language:</td><td><input type="text" name= "language" required="true"/></td></tr>
			<tr><td>Address:</td><td><input type="text" name= "address" required="true"/></td></tr>
			<tr><td>Gender:</td><td><input type="text" name= "gender" required="true"/></td></tr>
			<tr><td>Username:</td><td><input type="text" name= "uname" required="true"/></td></tr>
			<tr><td>Password:</td><td><input type="text" name= "pswd" required="true"/></td></tr>
		</table>
		<h2>Education Details:</h2>
		<table cellspacing="2px" cellpadding="5px">
			<tr><th>Course</th><th>Year</th><th>School/College</th><th>Board</th><th>Percentage/GPA</th></tr>
			<tr><td>SSLC</td>
			<td><input type="text" name="sslc_year" /></td>
			<td><input type="text" name="sslc_inst" /></td>
			<td><input type="text" name="sslc_board" /></td>
			<td><input type="text" name="sslc_gpa" /></td>
			</tr>
			<tr><td>PUC/Diploma</td>
			<td><input type="text" name="pu_year" /></td>
			<td><input type="text" name="pu_inst" /></td>
			<td><input type="text" name="pu_board" /></td>
			<td><input type="text" name="pu_gpa" /></td>
			</tr>

			<tr><td>Others</td>
			<td><input type="text" name="oth_year" /></td>
			<td><input type="text" name="oth_inst" /></td>
			<td><input type="text" name="oth_board" /></td>
			<td><input type="text" name="oth_gpa" /></td>
			</tr>

		</table>

		<h2>Key Strengths:</h2>
		<textarea name="keyst" size="200" required="true"></textarea>

		<h2>Personal Interests</h2>
		<textarea name="personalint" size="200" required="true"></textarea>

		<h2>Work Experience</h2>
		<textarea name="expr" size="200" ></textarea>

		<h2>Certification Courses</h2>
		<textarea name="certcourse" size="200" ></textarea>
		<br/><br/>
		<input class="button button-submit" type="submit" value="submit" />
	</form>
	</div>
</body>
</html>