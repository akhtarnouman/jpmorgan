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
<?php
if(!empty($_POST['validity']))
{
	$visibility=$_POST['validity'];
	$val=substr($visibility,0,5);
	if($val=="TRUE ")
		$bool=1;
	else if($val=="FALSE") 
		$bool=0;
	$eid=substr($visibility,5);
	$query="UPDATE employer SET validation_status=".$bool." WHERE employer_id='".$eid."';";
	$result=mysqli_query ($db,$query);
	if(!$result)
	{
		exit("ERROR!!!<br>");
	}
	header('Location:employer_profile.php');
}
$query="select employer_id,name,type from employer where validation_status=0";
$result=mysqli_query($db,$query);
if(!$result)
	{
		exit("ERROR!!!");
	}
$row=mysqli_fetch_array($result);
$number_of_rows=mysqli_num_rows($result);
$number_of_columns=mysqli_num_fields($result);

if($number_of_rows==0)
	exit("<br><br><div align\"center\"><font size=\"4\" color=\"red\"><b>NO COMPANIES FOR VALIDATION</b></font><br></div>");
else
	{
	$keys=array_keys($row);
	print"<div align=\"center\"><h2 class=\"f\"> LIST OF COMPANIES FOR VALIDATION</h2></div>";
	for($i=0;$i<$number_of_columns;$i++)
			{
			if($i==0)continue; 
			print "<th scope=\"col\" class=\"rounded-company\">". strtoupper($keys[2*$i+1])."</th>";
			}
		print "<th scope=\"col\" class=\"rounded-company\">STATUS</th>";	
	$_SESSION['rows']=$number_of_rows;
	for($i=0;$i<$number_of_rows;$i++)
		{
		print "<tr align=\"center\">";
		$values=array_values($row);
		for($j=0;$j<$number_of_columns;$j++)
			{
			$value=htmlspecialchars($values[2*$j+1]);
			if($j==0)continue; 
			if($j==1)
				print "<td><a href=\"employer_details.php?id=".$row['employer_id']."\">".strtoupper(str_replace('_',' ',$value))."</td>";
			else
				print "<td>".$value."</td>";
			}
		print "<td><form method=\"post\" action=\"\">YES &nbsp <input type=\"radio\" name=\"validity\" value=\"TRUE ".$values[1]."\" required> &nbsp&nbsp NO &nbsp<input type=\"radio\" name=\"validity\" value=\"FALSE".$values[1]."\" required> <input type=\"submit\" style=\"	font-size:12px;margin-top: 5px;padding: 5px 5px;\" value=\"VALIDATE\"></form></td></tr>";
		$row=mysqli_fetch_array($result);
		}
	print "</tbody></table> </div></div>";
	}
?>
<div align="center">
<table>
<tr><td ><form action="validate_employers.php" method="post">
<input type="submit" value="VALIDATING EMPLOYERS">
</form></td><td>
<form action="add_employer.php" method="post">
<input type="submit" value="ADD EMPLOYER">
</form><td></tr></table>
</div>
</body>
</html>
