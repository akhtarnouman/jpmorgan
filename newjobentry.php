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
    </div>
  </div>
  <div class="reg-card">
  <center>
    <?php
    //retrieve data from student
    $con=mysqli_connect("localhost","root","","questalliance");
    if (mysqli_connect_errno())
    { 
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }    
    $sql1="INSERT INTO job(`employer_id`, `role`, `salary`, `locality`, `working_hours`, `transport_facilities`, `incentives`, `accomodation`) VALUES ('$_SESSION[id]','$_POST[role]','$_POST[salary]','$_POST[locality]',$_POST[hrs],$_POST[transport],$_POST[incentives],$_POST[accommodation])";
    if (!mysqli_query($con,$sql1))
    {
        die('Error: ' . mysqli_error($con));
    }
    echo "Registration Successful!! ";
    mysqli_close($con);
    ?>
    <a href="newjob.php">Click here</a>
  </center>
  </div>
</body>
</html>