<?php session_start();
require_once 'dbcon.php';
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
<h2 class="f">DELETE RECORDS</h2><hr><br/>
</div>
<form method="post" action="delete2.php">
<div align="center">
<?php
$query="SELECT id, name, mobile, email FROM student WHERE 1";
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
	print("NO STUDENTS REGISTERED");
else
	{
	$keys=array_keys($row);
		print "<tr >";
		print "<th scope=\"col\" class=\"rounded-q4\">SELECT</th>";
	for($i=0;$i<$number_of_columns;$i++){
			if($i==0)continue;
			$head=$keys[2*$i+1];
			print "<th scope=\"col\" class=\"rounded-q4\"> ".strtoupper($head)." </th>";
		}
		
		print "  </tr>";
	print "</thead>";
for($i=0;$i<$number_of_rows;$i++)
		{
		print "<tr align=\"center\">";
		$values=array_values($row);
		print "<td><input type=\"checkbox\" name=\"selected_students[]\" value=".$values[1]."/></td>";
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
	print "</table><br/><br/>";

?>
<input class="button button-submit" type="submit" value="DELETE">
</div>
</form>
</div>
</body>
</html>
