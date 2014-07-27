<html>
<head>
	<meta charset="UTF-8">
	<title>Quest Alliance</title>
	<script src='jquery-2.1.1.min.js'></script>
   <script src='datatable.js'></script>
   <script src='jeditable.js'></script>
   <link rel='stylesheet' type='text/css' href='tablestyle.css'>
<script>
	var oTable;
$(document).ready(function() {
	/* Apply the jEditable handlers to the table */
	$('#example').DataTable();
} );
</script>
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
	</div><br/><br/>
<?php
mysql_connect("localhost", "root", "")or die();
 mysql_select_db("questalliance") or die();
  $result = mysql_query("SELECT * FROM student;") or die();
  if(!$result)
		exit("ERROR!!!");
$row=mysql_fetch_array($result);
if(!$row)
 exit("no rows!");
$number_of_rows=mysql_num_rows($result);
$number_of_columns=mysql_num_fields($result);
?>
<table id="example" class='display'>
<thead>
<!--
    <tr>
    <th>USN</th>
    <th name='firstname' id='2'>Name</th>
    <th>Mobile</th>
	<th>Email</th>
    </tr>
    </thead>
-->
<?php
	$keys=array_keys($row);
		print "<tr>";
	for($i=1;$i<$number_of_columns*2;$i+=2){
	$head=$keys[$i];
		$head=str_replace('_',' ',$head);
		print "<th>".strtoupper($head)."</th>";
		}
		print "  </tr>";
	print "</thead><tbody>";
	for($i=0;$i<$number_of_rows;$i++)
		{
		print "<tr>";
		$values=array_values($row);
		for($j=1;$j<$number_of_columns*2;$j+=2)
			{
			$value=htmlspecialchars($values[$j]);
				print "<td>".$value."</td>";
			}
		print "</tr>";
		$row=mysql_fetch_array($result);
		}
	print "</tbody></table>";

?>
	
<!--
   
-->
     </table>
	 </body>
	 </html>