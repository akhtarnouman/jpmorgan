<?php
	session_start();
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

	<div class="studentpage">
	<?php
		$name=$_SESSION['name'];
		$id=$_SESSION['id'];
		$con=mysqli_connect("localhost","root","","questalliance");
		$result = mysqli_query($con,"SELECT * FROM student WHERE id='$id'");
		$row = mysqli_fetch_array($result);
		echo "<span id=\"name\">".$row['name']."</span><br/><hr>";
		echo "<p><b>Address for communication: </b>".$row['address']."<br/>";
		echo "<b>Email-id: </b>".$row['email']."<br/>";
		echo "<b>Mobile: </b>".$row['mobile']."<br/>";
		echo "<b>Date of Birth: </b>".$row['dob']."<br/>";
		echo "<b>Nationality: </b>".$row['nationality']."<br/>";
		echo "<b>Languages known: </b>".$row['languages']."<br/><br/></p>";
		echo "<p><b>EDUCATION QUALIFICATION</b></p><hr>";
		echo "<table cellspacing=\"4px\" cellpadding=\"17px\">
          	<tr>
            	<th>Course</th>
            	<th>Year</th>
            	<th>School/College</th>
            	<th>Board</th>
            	<th>Percentage</th>
          	</tr>";
        echo "<tr>";
        echo "<td>".$row['tenth_cs']."</td>";
        echo "<td>".$row['tenth_yr']."</td>";
        echo "<td>".$row['school']."</td>";
        echo "<td>".$row['tenth_board']."</td>";
        echo "<td>".$row['tenth_pc']."%</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>".$row['twelth_cs']."</td>";
        echo "<td>".$row['twelth_yr']."</td>";
        echo "<td>".$row['college']."</td>";
        echo "<td>".$row['twelth_board']."</td>";
        echo "<td>".$row['twelth_pc']."%</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td>".$row['degree_cs']."</td>";
        echo "<td>".$row['degree_yr']."</td>";
        echo "<td>".$row['degree_insti']."</td>";
        echo "<td>".$row['degree_board']."</td>";
        echo "<td>".$row['degree_pc']."%</td>";
        echo "</tr></table><br/></p>";
        echo "<p><b>KEY STRENGTHS</b><br/><hr>";
       	$a=explode(".", $row['strengths']);
       	$i=1;
       	$j=sizeof($a)-1;
       	while ($i<$j) {
       		echo $a[$i]."<br/>";
       		$i+=1;
       	}
       	echo "<br/></p>";
       	echo "<p><b>PERSONAL INTERESTS</b><br/><hr>";
       	$a=explode(".", $row['hobbies']);
       	$i=1;
       	$j=sizeof($a)-1;
       	while ($i<$j) {
       		echo $a[$i]."<br/>";
       		$i+=1;
       	}
       	echo "<br/></p>";
       	echo "<p><b>WORK EXPERIENCE</b><br/><hr>";
       	$a=explode(".", $row['experience']);
       	$i=1;
       	$j=sizeof($a)-1;
       	while ($i<$j) {
       		echo $a[$i]."<br/>";
       		$i+=1;
       	}
       	echo "<br/></p>";
       	echo "<p><b>CERTIFICATION</b><br/><hr>";
       	$a=explode(".", $row['courses']);
       	$i=1;
       	$j=sizeof($a)-1;
       	while ($i<$j) {
       		echo $a[$i]."<br/>";
       		$i+=1;
       	}
       	echo "<br/></p>";        
	?>
	<form action="#">
		<input type="submit" class="button button-submit" value="Update profile">
	</form>
	</div>

	<div class="notification">
		<span id="head">NOTIFICATION</span><br/><hr>
		<?php
		$result1 = mysqli_query($con,"SELECT * FROM job");
		$row1 = mysqli_fetch_array($result1);
		if(!$row1)
		{
			echo "<p>No new notification</p>";
		}
		while ($row1 = mysqli_fetch_array($result1)) {
			echo "<p><b>Role:</b>".$row['role']."<br/>";
		}
		?>
	</div>
</body>
</html>