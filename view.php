<?php
    $name = "Directi";    //take from session!!
    $default = "SELECT S.USN,S.NAME,S.SEM,S.BRANCH,S.DEGREE,S.CGPA FROM registration AS R, student AS S WHERE S.USN=R.USN AND R.COMPANY='".$name."' AND R.";
    $attended = $default."ATTENDANCE=TRUE";
    $not_attended = $default."ATTENDANCE=FALSE";
    $placed = $default."PLACED=TRUE";
    $not_placed = $default."PLACED=FALSE";
    
    function print_tab($query)
    {
        $db=mysqli_connect("localhost","root","","placement");
    if (mysqli_connect_errno()) {
                echo "Failed to connect to MySQL: " . mysqli_connect_error();
                }	

        $result=mysqli_query($db,$query);
    if(!$result)
        {
            exit("CONNECTION ERROR!!!");
        }
    $row=mysqli_fetch_array($result);
    $number_of_rows=mysqli_num_rows($result);
    $number_of_columns=mysqli_num_fields($result);

    if($number_of_rows==0)
        echo("NO STUDENTS HAVE REGISTERED");
    else
        {
        
    $keys=array_keys($row);

    print "<table id=\"rounded-corner\" summary=\"Companies Details\" style=\"\" ><thead>";
        print "<tr >";
        for($i=0;$i<$number_of_columns;$i++){
            if($i==0)print "<th scope=\"col\" class=\"rounded-company\">". $keys[2*$i+1] ."</th>";
                else
                if($i<5){
                print "<th scope=\"col\" class=\"rounded-head\"> ". $keys[2*$i+1] ." </th>";
                }
                else
                {print "<th scope=\"col\" class=\"rounded-q4\"> ". $keys[2*$i+1] ." </th>";}
            }
            print "  </tr> </thead> <tbody >";
        for($i=0;$i<$number_of_rows;$i++)
            {
            print "<tr >";
            $values=array_values($row);
            for($j=0;$j<$number_of_columns;$j++)
                {
                $value=htmlspecialchars($values[2*$j+1]);
                    print "<td>".$value."</td>";
                }
            print "</tr>";
            $row=mysqli_fetch_array($result);
            }
        print "</tbody></table>";
        }
    }

?>
<html>
<head>
	<title>
		MSRIT Placement Cell
	</title>
    <link href="poll.css" rel="stylesheet" type="text/css" />
	<link href="admin_view.css" rel="stylesheet" type="text/css" />
	<link href="style.css" rel="stylesheet" type="text/css" />
    <link href="tab_view.css" rel="stylesheet" type="text/css" />
    <div id='cssmenu'>
		<ul>
			<img src="logo.png" >
            <li ><a href="#">Logout</a></li>
		</ul>
	</div>
    <script language="Javascript" type="text/javascript">
    function viewSectionTab (tabname)
        {
        document.getElementById('viewSection1').style.display = 'none';
        document.getElementById('viewSection2').style.display = 'none';
        document.getElementById('viewSection3').style.display = 'none';
        document.getElementById('viewSection4').style.display = 'none';
        document.getElementById(tabname).style.display = 'block';
		var id="at";
		if(tabname=="viewSection2")
		id="na";
		else if(tabname=="viewSection3")
		id="pl";
		else if(tabname=="viewSection4")
		id="np";
		
		document.getElementById('xl_button').innerHTML="<button class=b onclick=\"location.href = 'ExportExcel.php?id="+id+"&company=<?php echo $name; ?>'\">Download as Excel</button>" ;
		
        }
        function displayTabs(name) {
		document.getElementById('viewSection11').className="nonactive";
        document.getElementById('viewSection22').className="nonactive";
        document.getElementById('viewSection33').className="nonactive";
        document.getElementById('viewSection44').className="nonactive";
        document.getElementById(name).className="active";
  
    }
    </script>
</head>
    <body>
	
<table class="viewsTable">
<div class="viewsSectionTabs" style="float:left; width:100%;">
 <tr class="viewsRow">

 <ul id="viewSectiontabs" style="border-right:1px solid #e9e7e8; margin:11px 0px 0px 0px;">
   <td>
   <li id="viewSection11" class="active" onclick="javascript:displayTabs('viewSection11');viewSectionTab('viewSection1'); return false;">Attended</li>
  </td>
  <td>
  <li id="viewSection22" class="nonactive" onclick="javascript:displayTabs('viewSection22');viewSectionTab('viewSection2'); return false;">Not Attended</li>
  </td>
  <td >
  <li id="viewSection33" class="nonactive" onclick="javascript:displayTabs('viewSection33');viewSectionTab('viewSection3'); return false;">Placed</li>
  </td>
  <td >
  <li id="viewSection44" class="nonactive" onclick="javascript:displayTabs('viewSection44');viewSectionTab('viewSection4'); return false;">Not Placed</li>
  </td>
 </ul>
</div>
  </td>
 </tr>
</table>
</br>
<span id="xl_button" style="float:right;"><?php print "<button class=b onclick=\"location.href = 'ExportExcel.php?id=at&company=$name'\">Download as Excel</button>";?></span>
</div>
<div class="viewsSectionMain" align="center">
 <div id="viewSection1"  style="display: block; margin: 0px;">
	<ul class="views">
    <?php print_tab($attended);?>
	</ul>
 </div>
 <div id="viewSection2"  style="display: none; margin: 0px;">
	<ul class="views">
   <?php print_tab($not_attended);?>
	</ul>

 </div>
 <div id="viewSection3" style="display: none; margin: 0px;">
  <ul class="views">
   <?php print_tab($placed);?>
  </ul>
 </div>
 <div id="viewSection4" style="display: none; margin: 0px;">
  <ul class="views">
   <?php print_tab($not_placed);?>
  </ul>
 </div>

</div>



    </body>
</html>