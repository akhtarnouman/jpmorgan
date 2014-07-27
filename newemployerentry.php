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
    $con=mysqli_connect("localhost","root","cfg2014!","questalliance");
    if (mysqli_connect_errno())
    { 
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    $sql="INSERT INTO employer(`employer_id`, `password`, `type`, `name`) VALUES ('$_POST[eid]','$_POST[pswd]','$_POST[type]','$_POST[name]')";
    if (!mysqli_query($con,$sql))
    {
        die('Error: ' . mysqli_error($con));
    }
    $sql1="INSERT INTO logintable(`uname`, `pswd`, `profiletype`, `id`) VALUES ('$_POST[uname]','$_POST[pswd]','company','$_POST[eid]')";
    if (!mysqli_query($con,$sql1))
    {
        die('Error: ' . mysqli_error($con));
    }
    echo "Registration Successful!! ";
    mysqli_close($con);
    ?>
    <a href="loginpage.php">Click here</a>
  </center>
  </div>
</body>
</html>