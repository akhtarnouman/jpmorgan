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
<h2 class="f">LIST OF REGISTERED EMPLOYERS</h2>
</div>
<div align="center">
<div style="height: 500px;  overflow: auto;">
<table id="rounded-corner" summary="Companies Details" >
    <thead>
<form action="mark_visibility.php" method="post">
<?php

$query="select name,type from employer where 1";
$result=mysqli_query($db,$query);
if(!$result)
	{
		exit("ERROR!!!");
	}
$row=mysqli_fetch_array($result);
$number_of_rows=mysqli_num_rows($result);
$number_of_columns=mysqli_num_fields($result);

if($number_of_rows==0)
	exit("<br><br><div align\"center\"><font size=\"4\" color=\"red\"><b>NO COMPANY DETAILS ENTERED</b></font><br></div>");
else
	{
	$keys=array_keys($row);
	for($i=0;$i<$number_of_columns;$i++)
			if($i==0)
				print "<th scope=\"col\" class=\"rounded-company\">". strtoupper($keys[2*$i+1])."</th>";
			else if($i<9)
				print "<th scope=\"col\" class=\"rounded-head\"> ". strtoupper($keys[2*$i+1])." </th>";
			else
				print "<th scope=\"col\" class=\"rounded-q4\"> ".strtoupper($keys[2*$i+1])." </th>";
	//print "<th scope=\"col\" class=\"rounded-q4\">MARK VISIBILITY</th></tr></thead><tbody>";
	$_SESSION['rows']=$number_of_rows;
	for($i=0;$i<$number_of_rows;$i++)
		{
		print "<tr align=\"center\">";
		$values=array_values($row);
		for($j=0;$j<$number_of_columns;$j++)
			{
			$value=htmlspecialchars($values[2*$j+1]);
			if($j==0)$value=strtoupper(str_replace('_',' ',$value));
			print "<td><a href=\"\">".$value."</td>";
			if($j==0)
				{$_SESSION['company']=$value;}
			}
		//print "<td>YES &nbsp <input type=\"radio\" name=\"visibility\" value=\"TRUE ".$values[1]."\" required> &nbsp&nbsp NO &nbsp<input type=\"radio\" name=\"visibility\" value=\"FALSE".$values[1]."\" required> <input type=\"submit\" style=\"	font-size:12px;margin-top: 5px;padding: 5px 5px;\" value=\"MARK VISIBILITY\"></td></tr>";
		$row=mysqli_fetch_array($result);
		}
	print "</tbody></table> </div></div>";
?>
</form>
<div align="center">
<table>
<tr><td ><form action="edit.php" method="post">
<input style="width:105px; "type="submit" value="EDIT">
</form></td><td>
<form action="reg_details.php" method="post">
<input type="submit" value="REGISTRATION DETAILS">
</form><td></tr></table>
</div>
<?php }?>
</body>
</html>
