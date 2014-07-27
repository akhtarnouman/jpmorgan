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
{
	$employer_id=$_GET['id'];
	$_SESSION['eid']=$employer_id;$_SESSION['c']=1;
}
else
	$employer_id=$_SESSION['eid'];

$query="select R.id, S.name,S.mobile,S.email from student AS S, registration AS R WHERE R.id=S.id";
$result=mysqli_query($db,$query);
if(!$result)
	{
		exit("ERROR!!!");
	}
$row=mysqli_fetch_array($result);
$number_of_rows=mysqli_num_rows($result);
$number_of_columns=mysqli_num_fields($result);

if($number_of_rows==0)
	exit("<br><br><div align\"center\"><font size=\"4\" color=\"red\"><b>NO STUDENTS REGISTERED</b></font><br></div>");
else
	{
	$keys=array_keys($row);
	for($i=0;$i<$number_of_columns;$i++)
				{if($i==0)continue; print "<th scope=\"col\" class=\"rounded-head\">". strtoupper($keys[2*$i+1])."</th>";}
	print "<th scope=\"col\" class=\"rounded-head\">SELECT</th>";
	for($i=0;$i<$number_of_rows;$i++)
		{
		print "<tr align=\"center\">";
		$values=array_values($row);
		print "<td><input type=\"checkbox\" name=\"selected_students[]\" value=".$values[1]."/></td>";
		for($j=0;$j<$number_of_columns;$j++)
			{
			$value=htmlspecialchars($values[2*$j+1]);
				if($j==0)continue;
				else if($j==1){$value=strtoupper(str_replace('_',' ',$value));print "<td><a href=\"student_resume.php?id=".$values[1]."\">".$value."</a></td>";}
				else print "<td>".$value."</td>";
			}
		$row=mysqli_fetch_array($result);
		}
	print "</tbody></table>";

	}
	?>
	<br/><br/>
	Message : <textarea name="msg" size="200" placeholder="Enter message" required="true"></textarea><br/><br/>
	<input class="button button-submit" onclick="" type="submit" value="NOTIFY STUDENTS" name="notify"></div>
	</form>
</div>
</body>
</html>
