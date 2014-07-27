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
    <h2 class="f">JOBS SPECIFICATION</h2><hr>
    </div>
<div align="center">
<table summary="Companies Details" >
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
$_SESSION['role']=$row['role'];
if($number_of_rows==0)
	exit("<div align\"center\"><font size=\"4\" color=\"red\"><b>JOB SPECIFICATION NOT MENTIONED</b></font><br></div>");
else
	{
	print"<div align=\"center\"><h2>".$row['role']."(".$employer_id.")</h2></div>";
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
	print "</tbody></table> </div><br/><br/>";
	print"<div align=\"center\"><button class=\"button button-submit\" onclick=\"location.href ='eligible_students.php?id=".$employer_id."';\" >FIND ELIGIBLE STUDENTS</button></div><br>";
	print"<div align=\"center\"><button class=\"button button-submit\" onclick=\"location.href ='view_reg_students.php?id=".$employer_id."';\" >VIEW REGISTERED STUDENTS</button></div>";
}
?>
</body>
</html>
