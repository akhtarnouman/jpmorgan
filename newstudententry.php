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
  <center>
    <?php
    //retrieve data from student
    $con=mysqli_connect("localhost","root","","questalliance");
    if (mysqli_connect_errno())
    { 
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    $sql="INSERT INTO `student`(`id`, `name`, `email`, `mobile`, `dob`, `nationality`, `languages`, `tenth_pc`, `tenth_board`, `twelth_pc`, `twelth_board`, `school`, `college`, `degree_pc`, `degree_board`, `tenth_cs`, `tenth_yr`, `twelth_cs`, `twelth_yr`, `degree_cs`, `degree_yr`, `degree_insti`, `strengths`, `hobbies`, `courses`, `experience`, `batch_no`, `gender`, `locality`, `address`) VALUES ('$_POST[sid]','$_POST[fname]','$_POST[email]','$_POST[mob]','$_POST[dob]','$_POST[nation]','$_POST[language]','$_POST[sslc_gpa]','$_POST[sslc_board]','$_POST[pu_gpa]','$_POST[pu_board]','$_POST[sslc_inst]','$_POST[pu_inst]','$_POST[oth_gpa]','$_POST[oth_board]','sslc',$_POST[sslc_year],'puc',$_POST[pu_year],'oth',$_POST[oth_year],'$_POST[oth_inst]','$_POST[keyst]','$_POST[personalint]','$_POST[certcourse]','$_POST[expr]',10,'$_POST[gender]','locality','$_POST[address]')";
    if (!mysqli_query($con,$sql))
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