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
    <h2 class="f">STUDENT LISTING</h2><hr>
    </div>
<form method="post" action="notify_students.php">
<div align="center">
<table id="rounded-corner" summary="Companies Details" >
<thead>
<?php
if($_SESSION['c']==0)
{$employer_id=$_GET['id'];
$_SESSION['eid']=$employer_id;$_SESSION['c']=1;}
else
	$employer_id=$_SESSION['eid'];
$query="select employer_id, role, salary, locality, working_hours, transport_facilities, incentives, accomodation from job where employer_id='".$employer_id."'";
$query2="select id, role, salary, locality, working_hours, transport_facilities, incentives, accomodation from student_pref where 1";
$query4="";
$result=mysqli_query($db,$query);
$result2=mysqli_query($db,$query2);
if(!$result || !$result2)
	{
		exit("ERROR!!!<br>".$query."<br>".$query2);
	}
$row=mysqli_fetch_array($result);
$criterias=array_values($row);
$number_of_rows=mysqli_num_rows($result2);
$number_of_columns=mysqli_num_fields($result2);
$row2=mysqli_fetch_array($result2);
print"<div align=\"center\"><h2>Role - '".$row['role']."' at (".$employer_id.")</h2></div>";
	for($i=0;$i<$number_of_rows;$i++)
		{
		$values=array_values($row2);
		$count=0;
		for($j=0;$j<$number_of_columns;$j++)
			{
			if($j==0)continue;
			$value=$values[2*$j+1];
			$criteria=$criterias[2*$j+1];
			if($value==$criteria)
				$count++;
			}
		$percentage=round(($count/7)*100);
		$query4="UPDATE student SET match_percentage = ".$percentage." WHERE id='".$values[1]."'";
		//$result4=mysqli_multi_query($db,$query4);
		$result4=mysqli_query($db,$query4);
		if(!$result4)
			exit("ERROR4!!!".$query4);
		$row2=mysqli_fetch_array($result2);
		}
	
$query3="select id, name, mobile, email, match_percentage from student ORDER BY match_percentage DESC";
$result3=mysqli_query($db,$query3);
if(!$result3)
	{
		exit("ERROR3!!!");
	}
$row3=mysqli_fetch_array($result3);
$number_of_rows=mysqli_num_rows($result3);
$number_of_columns=mysqli_num_fields($result3);

if($number_of_rows==0)
	exit("<br><br><div align\"center\"><font size=\"4\" color=\"red\"><b>NO STUDENTS IN THIS SECTION</b></font><br></div>");
else
	{
	$keys=array_keys($row3);
	print "<th scope=\"col\" class=\"rounded-company\">SELECT</th>";
	for($i=0;$i<$number_of_columns;$i++)
	{
		if($i==0||$i==3)continue;
		print "<th scope=\"col\" class=\"rounded-company\">". strtoupper($keys[2*$i+1])."</th>";
	}	
	print "<th scope=\"col\" class=\"rounded-company\">MATCH</th>";
	for($i=0;$i<$number_of_rows;$i++)
		{
		print "<tr align=\"center\">";
		$values=array_values($row3);
		print "<td><input type=\"checkbox\" name=\"selected_students[]\" value=".$values[1]."/></td>";
		for($j=0;$j<$number_of_columns;$j++)
			{
			$value=htmlspecialchars($values[2*$j+1]);
			if($j==0)continue;
			if($j==1)print "<td><a href=\"student_resume.php?id=".$values[1]."\">".$value."</a></td>";
			else if($j==4)print "<td>".$value."%</td>";
			else 	print "<td>".$value."</td>";
			}
		$row3=mysqli_fetch_array($result3);
		}
	}
	print "</tbody></table> ";
	?>
	<br/><br/>
	Message : <textarea name="msg" size="200" placeholder="Enter message" required="true"></textarea><br/><br/>
	<input class="button button-submit" onclick="" type="submit" value="NOTIFY STUDENTS" name="notify"></div>
	</form>
</div>
</body>
</html>
