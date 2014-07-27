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
    <h2 class="f">COMPANIES DETAILS</h2><hr><br/>
    </div>
<div align="center">
<table id="rounded-corner" summary="Companies Details" >
    <thead>
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
	print "</tbody></table><br/><br/> </div></div>";
	}
 ?>
</form>
 </body>
</html>
