<?php
	session_start();
?>
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
				<a href="loginpage.php">Quest Alliance</a>
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
	<div align="center">
	<h1>COMPANY PAGE</h1><hr><br/><br/>
	<button class="button button-submit" name="create_job" onclick="location.href = 'newjob.php';" class="a">CREATE A JOB</button><br><br>
	<button class="button button-submit" name="view_history" onclick="location.href = 'view_students.php';" class="a">CANDIDATES LIST</button><br><br>
	</div>
	</div>
</body>
</html>