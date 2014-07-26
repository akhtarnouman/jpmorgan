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
<button name="VIEW" onclick="location.href = 'ug.php';" class="a">VIEW STUDENTS</button><br><br>
<button name="ADD" onclick="location.href = 'pg.php';" class="a">ADD STUDENTS</button><br><br>
<button name="ADD" onclick="location.href = 'pg.php';" class="a">ADD STUDENTS</button><br><br>
<button name="DELETE" onclick="location.href = 'filter.php';" class="a">DELETE STUDENTS</button>
</div>
</body>
</html>
