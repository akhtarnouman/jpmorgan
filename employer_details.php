<?php session_start();
//require_once 'auth_check.php';
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
<div style="height: 500px;  overflow: auto;">
<table id="rounded-corner" summary="Companies Details" >
    <thead>
<form action="mark_visibility.php" method="post">
<?php
$employer_id=$_GET['id'];
$query="select role from job where employer_id='".$employer_id."'";
$query2="select name from employer where employer_id='".$employer_id."'";
$result=mysqli_query($db,$query);
$result2=mysqli_query($db,$query2);
if(!$result || !$result2)
	{
		exit("ERROR!!!");
	}
$row=mysqli_fetch_array($result);
$row2=mysqli_fetch_array($result2);
$number_of_rows=mysqli_num_rows($result);
$number_of_columns=mysqli_num_fields($result);

if($number_of_rows==0)
	exit("<br><br><div align\"center\"><font size=\"4\" color=\"red\"><b>NO JOB OPPURTUNITIES OFFERED</b></font><br></div>");
else
	{
	$keys=array_keys($row);
	print"<div align=\"center\"><h2 class=\"f\">JOB OPPURTUNITIES AT ".strtoupper($row2['name'])." (".$employer_id.")</h2></div>";
	for($i=0;$i<$number_of_columns;$i++)
				print "<th scope=\"col\" class=\"rounded-company\">". strtoupper($keys[2*$i+1])."</th>";
			
	$_SESSION['rows']=$number_of_rows;
	for($i=0;$i<$number_of_rows;$i++)
		{
		print "<tr align=\"center\">";
		$values=array_values($row);
		for($j=0;$j<$number_of_columns;$j++)
			{
			$value=htmlspecialchars($values[2*$j+1]);
			if($j==0)
				print "<td><a href=\"employer_role_criteria.php?id=".$employer_id."\">".strtoupper(str_replace('_',' ',$value))."</td>";
			else
				print "<td>".$value."</td>";
			}
		$row=mysqli_fetch_array($result);
		}
	print "</tbody></table> </div></div></form>";
	}
 ?>
</body>
</html>
