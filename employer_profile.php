<?php session_start();
require_once 'dbcon.php';
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
    <h2 class="f">LIST OF REGISTERED EMPLOYERS</h2><hr><br/>
    </div>
<div align="center">
<table id="rounded-corner" summary="Companies Details" >
    <thead>
<form action="mark_visibility.php" method="post">
<?php

$query="select employer_id,name,type from employer where validation_status=1";
$result=mysqli_query($db,$query);
if(!$result)
	{
		exit("ERROR!!!");
	}
$row=mysqli_fetch_array($result);
$number_of_rows=mysqli_num_rows($result);
$number_of_columns=mysqli_num_fields($result);

if($number_of_rows==0)
	exit("<br><br><div align\"center\"><font size=\"4\" color=\"red\"><b>NO COMPANIES HAVE REGISTERED</b></font><br></div>");
else
	{
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
			if($j==1)
				print "<td><a href=\"employer_details.php?id=".$row['employer_id']."\">".strtoupper(str_replace('_',' ',$value))."</td>";
			else
				print "<td>".$value."</td>";
			}
		$row=mysqli_fetch_array($result);
		}
	print "</tbody></table> </div></form><br/><br/>";
	}
?>
<div align="center">
<table>
<tr><td ><form action="validate_employers.php" method="post">
<input class="button button-submit" type="submit" value="VALIDATE EMPLOYERS">
</form></td><td>
<form action="newemployer.php" method="post">
<input class="button button-submit" type="submit" value="ADD EMPLOYER">
</form><td></tr></table>
</div>
</div>
</body>
</html>
