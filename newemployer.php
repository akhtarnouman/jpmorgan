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
	<div class="reg-card">
	<form action="" method="post">
	<h1>Employer Registration</h1>
	<table>
<tr><td><p>Name:</p></td><td><input type="text" id="fname" required="true"></input></td></tr>
<tr><td><p>Type:</p></td><td><select id="lname">
<option value="">--Select Type--</option>
<option value="IT">IT</option>
<option value="Accounting/Finance">Accounting/Finance</option>
<option value="Retail">Retail</option>
<option value="Construction">Construction</option>
<option value="Advertising">Advertising</option>
<option value="Agriculture/Dairy">Agriculture/Dairy</option>
<option value="Animation">Animation</option>
<option value="Interior_Designing">Interior Designing</option>
<option value="Insurance_agency">Insurance_agency</option>
<option value="Hardware_and_Networking">Hardware and Networking</option>
<option value="Food_Processing">Food Processing</option>
<option value="GemsandJewellwery">Gems and Jewellwery</option>
<option value="HotelsandRestaurants">Hotels and Restaurants</option>
<option value="HeavyMachinesIndustry">Heavy Machines Industry</option>
<option value="Telecom">Telecom</option>
<option value="Travel">Travel</option>
<option value="Media">Media</option>
<option value="NGO/SocialService">NGO/SocialService</option>
<option value="Security/Lawenforcement">Security/Lawenforcement</option>
<option value="Wellness">Wellness/Fitness/Sports</option>
<option value="Others">Others</option>

</select></td></tr>
	<tr><td>Employer id:</td><td><input type="text" id="eid" required="true"/></td></tr>
	<tr><td>Username:</td><td><input type="text" id="uname" required="true"/></td></tr>
	<tr><td>Password:</td><td><input type="text" id="pswd" required="true"/></td></tr>
	<tr><td>Confirm Password:</td><td><input type="text" id="cpswd" required="true"/></td></tr>
	</table><br/><br/>
	<input type="submit" class="button button-submit" value="Add" />
	</form>
	</div>
</body>
</html>