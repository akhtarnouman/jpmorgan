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
		</div>
	</div>
	<div class="resumepage">
	<p><span id="head">Student List</span></p><hr><br/>
<div >
	<title>
		QUEST
	</title>
<link href="poll.css" rel="stylesheet" type="text/css" />
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div align="center">
<?php
$query="SELECT S.id, S.name, S.mobile, S.email FROM shortlisted AS SH, student AS S WHERE S.id=SH.id";
$result=mysqli_query($db,$query);
if(!$result)
		exit("ERROR!!!");
$row=mysqli_fetch_array($result);
$number_of_rows=mysqli_num_rows($result);
$number_of_columns=mysqli_num_fields($result);
 ?>
 <table id="rounded-corner" summary="Companies Details" >
    <thead>
<?php
if($number_of_rows==0)
	print("NO SHORTLISTED STUDENTS");
else
	{
	$keys=array_keys($row);
		print "<tr >";
	for($i=0;$i<$number_of_columns;$i++)
	{
		if($i==0)continue;
		$head=$keys[2*$i+1];
		$head=str_replace('_',' ',$head);
		print "<th scope=\"col\" class=\"rounded-head\"> ".strtoupper($head)." </th>";
	}
		print "  </tr>";
	print "</thead>";
for($i=0;$i<$number_of_rows;$i++)
		{
		print "<tr align=\"center\">";
		$values=array_values($row);
		for($j=0;$j<$number_of_columns;$j++)
			{
			$value=htmlspecialchars($values[2*$j+1]);
			if($j==0)continue;
			else if($j==1)
				print "<td><a href=\"student_resume.php?id=".$values[1]."\">".$value."</a></td>";
			else 
				print "<td>".$value."</td>";
			}
		print "</tr>";
		$row=mysqli_fetch_array($result);
		}
	}
	print "</table>";

?>
</div>
</body>
</html>
