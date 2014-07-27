<?php session_start();
require_once 'dbcon.php';
header('Cache-Control: no-cache, must-revalidate');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');?>
<html>
<head>
	<title>
		QUEST
	</title>
<link href="poll.css" rel="stylesheet" type="text/css" />
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div align="center">
<button name="create_job" onclick="location.href = 'view_students.php';" class="a">CREATE A JOB</button><br><br>
<button name="view_history" onclick="location.href = 'newstudent.php';" class="a">CANDIDATES LIST</button><br><br>
</div>
</body>
</html>
