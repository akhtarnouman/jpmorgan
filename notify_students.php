<?php
	session_start();
	echo $_SESSION['eid'];
	$temp=$_POST['selected_students'];
	$count=count($temp);
	for($i=0;$i<$count;$i++)
		{
			$id=str_replace('/','',$temp[$i]);
			echo "<br>".$id."<br>";
		}

?>