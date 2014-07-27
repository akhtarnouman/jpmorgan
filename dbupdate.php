<?php
$changedval= htmlspecialchars($_POST['value']);
$rowval= htmlspecialchars($_POST['id']);
$colval= htmlspecialchars($_POST['colName']);
if($colval==22)
{
 $colname="strengths";
}
if($colval==25)
{ 
 $colname="experience";
}
if($colval==28)
{ 
 $colname="locality";
}
if($colval==29)
{ 
 $colname="address";
}

/*
switch(intval($colval))
{
case 2:
$colname="email";
break;
case 3:
$colname="mobile";
break;
case 6: 
$colname="languages";
break;
case 22: 
$colname="strengths";
break;
case 23: 
$colname="hobbies";
break;
case 24:
$colname="courses";
break;
case 25: 
$colname="experience";
break;
case 28: 
$colname="locality";
break;
case 29: 
$colname="address";
break
}
*/
mysql_connect("localhost", "root", "cfg2014!")or die();
 mysql_select_db("questalliance") or die();
 $result = mysql_query("UPDATE student SET ".$colname."='".$changedval."' WHERE id= '".$rowval."';") or die();
 //$result = mysql_query("UPDATE student SET strengths='".$changedval."' WHERE id= '".$rowval."';") or die();
 
echo $changedval;

 ?>