<?php
//require("connection.php");

// Connection with MYSQL
$Con = mysql_connect("","root","$@cur!ty");

if (!$Con)
  {
  die('Could not connect: ' . mysql_error());
  }


mysql_select_db("Hindware", $Con);

	
	//$SrNo=$_REQUEST["Name"];
	$EmpCode=$_REQUEST["EmpCode"];
	$RouteDate=$_REQUEST["RouteDate"];
	$Area=$_REQUEST["Area"];
	
	
		$query="insert into `RoutePlan` (`EmpCode`, `Date`,`Area`) values ('$EmpCode','$RouteDate','$Area')";
		mysql_query($query) or die(mysql_error());
			
		
	echo "successfully Registered";
	//mysql_free_result($rs_check);
	
?>
