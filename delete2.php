<?php 
	session_start();
	require_once 'dbcon.php';
	$query = mysqli_prepare($db, "DELETE FROM student WHERE id=?");
	$query2=mysqli_prepare($db,"DELETE FROM student_pref WHERE id=?");
	$temp=$_POST['selected_students'];
	$count=count($temp);
	for($i=0;$i<$count;$i++)
		{
			$id=str_replace('/','',$temp[$i]);
			//print $id;
			mysqli_stmt_bind_param($query, "s", $id);
			mysqli_stmt_bind_param($query2, "s", $id);
			$result=mysqli_stmt_execute($query);
			$result=mysqli_stmt_execute($query2);
			//print $query."<br>".$query2."<br><br>";
			header('Location:delete_student.php');
		}
?>
