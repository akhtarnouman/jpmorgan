<?php
  session_start();
  	$con=mysqli_connect("localhost","root","cfg2014!","questalliance");
		if (mysqli_connect_errno())
		{	
  	  		echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
		$result = mysqli_query($con,"SELECT * FROM logintable WHERE uname='$_POST[user]' AND pswd='$_POST[pass]' AND profiletype='$_POST[profile]'");
		$row = mysqli_fetch_array($result);
  		if(!$row)
  		{
  			echo "Invalid Username or Password! ";
  			echo "<a href=\"loginpage.php\"> Click here!!";
  			die();
  		}
  		else
  		{
  			//echo $row['uname'];
        $_SESSION['name']=$row['uname'];
        $_SESSION['id']=$row['id'];
  		}	
  		mysqli_close($con);
  		header('Location: '.$_POST['profile'].'page.php');
?>