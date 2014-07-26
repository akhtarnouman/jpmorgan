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
<div style="height: 500px;  overflow: auto;">
<table id="rounded-corner" summary="Companies Details" >
<thead>
<?php
$employer_id=$_GET['id'];
$query="select role,salary,locality,working_hours,transport_facilities,incentives,accomodation from job where employer_id='".$employer_id."'";
$result=mysqli_query($db,$query);
if(!$result)
	{
		exit("ERROR!!!".$query);
	}
$row=mysqli_fetch_array($result);
$number_of_rows=mysqli_num_rows($result);
$number_of_columns=mysqli_num_fields($result);

if($number_of_rows==0)
	exit("<br><br><div align\"center\"><font size=\"4\" color=\"red\"><b>JOB SPECIFICATION NOT MENTIONED</b></font><br></div>");
else
	{
	print"<div align=\"center\"><h2 class=\"f\"> Job specification<br>".$row['role']."(".$employer_id.")</h2></div>";
	$keys=array_keys($row);
	for($i=0;$i<$number_of_columns;$i++)
	{
		if($i==0)continue;
		print "<th scope=\"col\" class=\"rounded-company\">". strtoupper($keys[2*$i+1])."</th>";
	}	
	$_SESSION['rows']=$number_of_rows;
	for($i=0;$i<$number_of_rows;$i++)
		{
		print "<tr align=\"center\">";
		$values=array_values($row);
		for($j=0;$j<$number_of_columns;$j++)
			{
			$value=htmlspecialchars($values[2*$j+1]);
			if($j==0)continue;
			print "<td>".$value."</td>";
			}
		$row=mysqli_fetch_array($result);
		}
	print "</tbody></table> </div>";
	print"<button onclick=\"location.href ='eligible_students.php?id=".$employer_id."';\" class=\"c\">FIND ELIGIBLE STUDENTS</button></div>";
}
?>
</body>
</html>
