<html>
<head>
	<title>
		QUEST
	</title>
<!--
<link href="poll.css" rel="stylesheet" type="text/css" />
<link href="style.css" rel="stylesheet" type="text/css" />
-->
</head>
<body>
<div align="center">
<?php
mysql_connect("localhost", "root", "cfg2014!")or die();
 mysql_select_db("questalliance") or die();
$query="SELECT name, mobile, email FROM student WHERE id='1ms11cs121';";
$result=mysql_query($query);
if(!$result)
		exit("ERROR!!!");
$row=mysql_fetch_array($result);
$number_of_rows=mysql_num_rows($result);
$number_of_columns=mysql_num_fields($result);
 ?>
 
</body>
</html>
