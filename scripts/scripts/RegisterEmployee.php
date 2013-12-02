<?php
//require("connection.php");

// Connection with MYSQL
$Con = mysql_connect("","root","$@cur!ty");

if (!$Con)
  {
  die('Could not connect: ' . mysql_error());
  }


mysql_select_db("Hindware", $Con);

	
	$EmpCode=$_REQUEST["EmpCode"];
	$EmpName=$_REQUEST["EmpName"];
	$State=$_REQUEST["State"];
	
	$Territory=$_REQUEST["Territory"];
	$Division=$_REQUEST["Division"];
	$Reporting=$_REQUEST["Reporting"];
	$ReportingEmpCode=$_REQUEST["ReportingEmpCode"];
	$IMEI=$_REQUEST["IMEI"];
	$Password=$_REQUEST["Password"];
	
			$rsChk= mysql_query("SELECT * FROM `EmpMaster` WHERE `EmpCode`='$EmpCode'");
				$Cnt=0;
				while($row = mysql_fetch_row($rsChk))
				{
					$Cnt=$Cnt+1;
				}
				if($Cnt!=0)
				{
					echo "Employee Code Already Exists";
					exit();
				}
				
			$rsChk1= mysql_query("SELECT * FROM `EmpMaster` WHERE `EmpCode`='$ReportingEmpCode'");
				$Cnt1=0;
				while($row1 = mysql_fetch_row($rsChk1))
				{
					$Cnt1=$Cnt1+1;
				}
				if($Cnt1==0)
				{
					echo "Reporting Employee Code doese not Exists";
					exit();
				}			
				
		
		$query="insert into `EmpMaster` (`EmpCode`, `EmpName`,`State`,`Territory`,`Division`,`Reporting`,`ReportingEmpCode`,`IMEI`,`Password`) values ('$EmpCode','$EmpName','$State','$Territory','$Division','$Reporting','$ReportingEmpCode','$IMEI','$Password')";
		mysql_query($query) or die(mysql_error());
		
	echo "successfully Registered";
	//mysql_free_result($rs_check);
	
?>
