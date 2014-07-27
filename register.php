<?php session_start();
require_once 'dbcon.php';
header('Cache-Control: no-cache, must-revalidate');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
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
				<a href="#">Quest Alliance</a>
			</div>		
		</div>
	</div>
	<div class="reg-card">
	<?php
$query="INSERT into registration (employer_id,id) values('".$_GET['eid']."','".$_GET['id']."')";
$result=mysqli_query($db,$query);
if(!$result)
	exit("<br>YOU HAVE ALREADY REGISTERED<br>");
exit("<br>YOU HAVE SUCCESSFULLY REGISTERED, WAIT FOR FURTHER INTIMATION ON INTERVIEW DATES<br>");
?>
</div>
</body>
</html>