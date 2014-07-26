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
<button name="VIEW" onclick="location.href = 'view_students.php';" class="a">VIEW STUDENTS</button><br><br>
<button name="ADD" onclick="location.href = 'newstudent.php';" class="a">ENROLL A STUDENT</button><br><br>
<button name="ADD" onclick="location.href = 'edit_student.php';" class="a">EDIT STUDENT RECORD</button><br><br>
<button name="DELETE" onclick="location.href = 'delete_student.php';" class="a">DELETE STUDENT RECORD</button><br><br>
<button name="DELETE" onclick="location.href = 'filter_student.php';" class="a">FILTER STUDENTS</button><br><br>
</div>
</body>
</html>
