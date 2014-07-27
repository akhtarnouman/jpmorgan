<?php
  session_start();
  	$con=mysqli_connect("localhost","root","","questalliance");
		if (mysqli_connect_errno())
		{	
  	  		echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}
    if($_POST['profile']=="company")
    {
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
        $result1 = mysqli_query($con,"SELECT * FROM employer WHERE employer_id='$row[id]'");
        $row1 = mysqli_fetch_array($result1);
        if($row1['validation_status']==1)
        {
          $_SESSION['name']=$row['uname'];
          $_SESSION['id']=$row['id'];
          header('Location: '.$_POST['profile'].'page.php');
        }
        else
        {
          echo "Username is yet to be authenticate! ";
          echo "<a href=\"loginpage.php\"> Click here!!";
          die();
        }
      }
    }
    else
    {
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
    }
?>