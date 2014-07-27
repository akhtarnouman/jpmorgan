<?php
	session_start();
	$eid=$_SESSION['eid'];
	$role=$_SESSION['role'];
	$temp=$_POST['selected_students'];
	$count=count($temp);
	for($i=0;$i<$count;$i++)
	{
			$id=str_replace('/','',$temp[$i]);
			//echo "<br>".$id."<br>";
			$con=mysqli_connect("localhost","root","","questalliance");
			$result = mysqli_query($con,"SELECT * FROM student WHERE id='$id'");
			print $id." ".$eid." ".$role."<br>";
			$result2 = mysqli_query($con,"INSERT INTO shortlisted (id,employer_id,role) VALUES('".$id."','".$eid."','".$role."')");
			$row = mysqli_fetch_array($result);
			$mno=$row['mobile'];
			//echo $row['mobile'];
			$msg=$_POST['msg'];
			//echo $msg;

			$post_data = array(
    // 'From' doesn't matter; For transactional, this will be replaced with your SenderId;
    // For promotional, this will be ignored by the SMS gateway
    'From'   => '8808891988',
    'To'    => "$mno",
    'Body'  => "$msg", //Incase you are wondering who Dr. Rajasekhar is http://en.wikipedia.org/wiki/Dr._Rajasekhar_(actor)
);
 
$exotel_sid = "msrit1"; // Your Exotel SID - Get it from here: http://my.exotel.in/Exotel/settings/site#api-settings
$exotel_token = "10ca801f0455248549a20d8d55984e0428806b70"; // Your exotel token - Get it from here: http://my.exotel.in/Exotel/settings/site#api-settings
 
$url = "https://".$exotel_sid.":".$exotel_token."@twilix.exotel.in/v1/Accounts/".$exotel_sid."/Sms/send";
 
$ch = curl_init();
curl_setopt($ch, CURLOPT_VERBOSE, 1);
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_FAILONERROR, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post_data));
 
$http_result = curl_exec($ch);
$error = curl_error($ch);
$http_code = curl_getinfo($ch ,CURLINFO_HTTP_CODE);
 
curl_close($ch);
 
print "Response = ".print_r($http_result);
header('Location: eligible_students.php');

	}



?>