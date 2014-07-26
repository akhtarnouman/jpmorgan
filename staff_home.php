<?php session_start();
//require_once 'auth_check.php';
//require_once 'dbcon.php';
header('Cache-Control: no-cache, must-revalidate');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');?>
<html>
<head>
	<title>
		QUEST
	</title>
	<link rel="shortcut icon" href="logo.ico" />
	<link href="student.css" rel="stylesheet" type="text/css" />
	<link href="student_style.css" rel="stylesheet" type="text/css" />
	<style type="text/css">
#rounded-corner td
{
	border: 0px;
	padding: 32px 30px 12px 30px;
}
#rounded-corner tbody tr:hover td
{
	background: #fff;
}
</style>
</head>
<body>

    <div align="center">

        <table id="rounded-corner" summary="Student Details" >
            <thead>
                <tr >
                    <th scope="col" class="rounded-company" colspan="2" style="border:0px; background: #008AFF -1px no-repeat;background-image: url('table-images/right.png'), 
                  url('table-images/left.png'); background-position: top right, top left;">Select</th></tr></thead>
<tr><td>
<button name="company" onclick="location.href = 'employer_profile.php';">COMPANY PROFILE</button></td>
<td><button name="company" onclick="location.href = 'student_profile.php';">STUDENT PROFILE</button></td></tr>
</table>
</div>
</body>
</html>
