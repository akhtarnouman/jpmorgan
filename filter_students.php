<?php session_start();
require_once 'dbcon.php';
?>
<html>
<head>
	<title>
		QUEST
	</title>
<link href="poll.css" rel="stylesheet" type="text/css" />
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div align="center">
        <table id="rounded-corner" summary="Student Details">
            <thead>
                <tr>
                    <th scope="col" class="rounded-company" colspan="2" style="border:0px; background: #008AFF -1px no-repeat;background-image: url('table-images/right.png'), 
                  url('table-images/left.png'); 
background-position: top right, top left;">SELECT FILTER</th>
			                </tr>
            </thead>
<form action="Filter_excel.php" method="post">

<tr> <td style="text-align:left;">CGPA</td><td>
<select name="checkcgpa">
  <option value="" selected>Select</option>
  <option value="abovecgpa">above</option>
  <option value="belowcgpa">below</option>
</select>
<input type="text" name="cgpa"></tr></td>

<tr><td style="text-align:left;">DOB</td><td>
<select name="checkdob">
  <option value="" selected>Select</option>
  <option value="beforedob">Before</option>
  <option value="afterdob">After</option>
</select>
<input type="date" name="dob"></tr></td>

<tr><td style="text-align:left;">Height</td><td>
<select name="checkheight">
  <option value="" selected>Select</option>
  <option value="aboveh">above</option>
  <option value="belowh">below</option>
</select>
<input type="text" name="height"></tr></td>

<tr> <td style="text-align:left;">Weight</td><td>
<select name="checkweight">
  <option value="" selected>Select</option>
  <option value="abovew">above</option>
  <option value="beloww">below</option>
</select>
<input type="text" name="weight"></tr></td>

<tr> <td style="text-align:left;">10th percentage</td><td>
<select name="check10pc">
  <option value="" selected>Select</option>
  <option value="above10">above</option>
  <option value="below10">below</option>
</select>
<input type="text" name="10pc"></tr></td>

<tr> <td style="text-align:left;">12th percentage</td><td>
<select name="check12pc">
  <option value="" selected>Select</option>
  <option value="above12">above</option>
  <option value="below12">below</option>
</select>
<input type="text" name="12pc"></tr></td>

<tr> <td style="text-align:left;">Diploma percentage</td><td>
<select name="checkdpc">
  <option value="" selected>Select</option>
  <option value="abovedp">above</option>
  <option value="belowdp">below</option>
</select>
<input type="text" name="dpc"></tr></td>

<tr> <td style="text-align:left;">UG percentage(PG students)</td><td>
<select name="checkugpc">
  <option value="" selected>Select</option>
  <option value="aboveug">above</option>
  <option value="belowug">below</option>
</select>
<input type="text" name="ugpc"></tr></td>

<tr> <td style="text-align:left;">CET Rank</td><td>
<select name="checkcet">
  <option value="" selected>Select</option>
  <option value="abovecet">above</option>
  <option value="belowcet">below</option>
</select>
<input type="text" name="CET"></tr></td>

<tr> <td style="text-align:left;">COMEDK Rank</td><td>
<select name="checkcomedk">
  <option value="" selected>Select</option>
  <option value="abovecomedk">above</option>
  <option value="belowcomedk">below</option>
</select>
<input type="text" name="COMEDK"></tr></td>

<tr> <td style="text-align:left;">PGCET Rank(PG students)</td><td>
<select name="checkpgcet">
  <option value="" selected>Select</option>
  <option value="abovepgcet">above</option>
  <option value="belowpgcet">below</option>
</select>
<input type="text" name="PGCET"></tr></td>

<tr> <td style="text-align:left;">GATE Rank (PG students)</td><td>
<select name="checkgate">
  <option value="" selected>Select</option>
  <option value="abovegate">above</option>
  <option value="belowgate">below</option>
</select>
<input type="text" name="GATE"></tr></td>

<tr> <td style="text-align:left;">Year Of Passing(10th)</td><td>
<select name="check10">
  <option value="" selected>Select</option>
  <option value="before10">before</option>
  <option value="after10">after</option>
</select>
<input type="text" name="YOP10" ></tr></td>

<tr> <td style="text-align:left;">Year Of Passing(12th)</td><td>
<select name="check12">
  <option value="" selected>Select</option>
  <option value="before12">before</option>
  <option value="after12">after</option>
</select>
<input type="text" name="YOP12" ></tr></td>

<tr> <td style="text-align:left;">Year Of Passing(Diploma)</td><td>
<select name="checkdp">
  <option value="" selected>Select</option>
  <option value="beforedp">before</option>
  <option value="afterdp">after</option>
</select>
<input type="text" name="YOPDP" ></tr></td>

<tr> <td style="text-align:left;">Year Of Passing(UG - for PG students)</td><td>
<select name="checkug">
  <option value="" selected>Select</option>
  <option value="beforeug">before</option>
  <option value="afterug">after</option>
</select>
<input type="text" name="YOPUG" ></tr></td>

<tr><td style="text-align:left;">Gender</td><td>
<select name="gender">
  <option value="" selected>Select</option>
  <option value="male">MALE</option>
  <option value="female">FEMALE</option>
</select>
</td></tr>

<tr><td style="text-align:left;">Physically Handicap</td><td>
<select name="Phy_hand">
  <option value="" selected>Select</option>
  <option value=TRUE>YES</option>
  <option value=FALSE>NO</option>
</select>
</td></tr>

<tr><td style="text-align:left;">Degree</td><td>
<select name="degree">
  <option value="" selected>Select</option>
  <option value="ug">UG</option>
  <option value="pg">PG</option>
</select>
</td></tr>

<tr><td style="text-align:left;">BE Branches</td><td style="text-align:left;">
 <input type="checkbox" name="branch[]" value="AT" > Architecture<br>
<input type="checkbox" name="branch[]" value="BT" > Biotechnology<br>
<input type="checkbox" name="branch[]" value="CV" > Civil<br>
<input type="checkbox" name="branch[]" value="CH" > Chemical<br>
<input type="checkbox" name="branch[]" value="CS" > Computer Science<br>
<input type="checkbox" name="branch[]" value="EE" > Electrical & Electonics<br>
<input type="checkbox" name="branch[]" value="EC" > Electronics & Communication<br>
<input type="checkbox" name="branch[]" value="IM" > Industrial Management<br>
<input type="checkbox" name="branch[]" value="ISE" > Information Science<br>
<input type="checkbox" name="branch[]" value="IT" > Instrumentation<br>
<input type="checkbox" name="branch[]" value="ML" > Medical Electronics<br>
<input type="checkbox" name="branch[]" value="TE" > Telecommunication<br>
<input type="checkbox" name="branch[]" value="ME" > Mechanical<br>
</td></tr>
<tr><td style="text-align:left;">M.TECH Branches</td><td style="text-align:left;">
<input type="checkbox" name="branch1[]" value="SCS" > Computer Science<br>
<input type="checkbox" name="branch1[]" value="SSE" > Software Engineering<br>
<input type="checkbox" name="branch1[]" value="LEC" > Digital Electronics<br>
<input type="checkbox" name="branch1[]" value="LVS" > VLSI & Embedded Systems<br>
<input type="checkbox" name="branch1[]" value="ECD" > CAID<br>
<input type="checkbox" name="branch1[]" value="LDC" > Digital Communication Engg.<br>
<input type="checkbox" name="branch1[]" value="MCM" > Computer Integrated Manufacturing Engg.<br>
<input type="checkbox" name="branch1[]" value="MSE" > Manufacturing Science & Engineering<br>
<input type="checkbox" name="branch1[]" value="MIA" > Industrial Engineering<br>
<input type="checkbox" name="branch1[]" value="BBT" > BioTechnology<br>
<input type="checkbox" name="branch1[]" value="MCA" > MCA

<tr><td style="text-align:left;">PLACED</td><td>
<select name="placed">
  <option value="" selected>Select</option>
  <option value="BELOW_FIVE">BELOW 5LPA</option>
  <option value="ABOVE_FIVE">ABOVE 5LPA</option>
  <option value="STAR">STAR</option>
</select>
</tr></td>
<tr  ><td style="border:none;" colspan="2">
<input type="submit" value="Filter">
</tr></td>
</table>
</div>
</form>
</body>
</html>