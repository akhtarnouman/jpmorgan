<?php session_start();
//require_once 'auth_check.php';
//require_once 'dbcon.php';
header('Cache-Control: no-cache, must-revalidate');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');?>
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
    <div class="resumepage">
    <div align="center">
    <h2 class="f">SELECT RECORDS</h2><hr><br/>
    </div>
    <div align="center">

    <table id="rounded-corner" summary="Student Details" >
    <tr><td><button class="button button-submit" name="company" onclick="location.href = 'employer_profile.php';">COMPANY PROFILE</button></td>
    <td><button class="button button-submit" name="company" onclick="location.href = 'student_profile.php';">STUDENT PROFILE</button></td></tr>
    </table>
</div>
</body>
</html>
