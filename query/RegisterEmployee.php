<?php
		$EmpCode=$_POST["EmpCode"];
		$EmpName=$_POST["EmpName"];
		$State=$_POST["State"];
		$Territory=$_POST["Territory"];
		$Division=$_POST["Division"];
		$Reporting=$_POST["Reporting"];
		$ReportingEmpCode=$_POST["ReportingEmpCode"];
		$IMEI=$_POST["IMEI"];
		$Password=$_POST["Password"];

			//$rsChk= mysql_query("SELECT * FROM `EmpMaster` WHERE `EmpCode`='$EmpCode'");
			if($Cnt!=0)
				echo "Employee Code Already Exists";
				exit();
			}
			$rsChk1= "SELECT * FROM `EmpMaster` WHERE `EmpCode`='$ReportingEmpCode'";
			$Cnt1=0;
			foreach ($conn->query($rsChk1) as $row) {
			if($Cnt1==0)
			{
				exit();
			}
			
		$query="insert into `EmpMaster` (`EmpCode`, `EmpName`,`State`,`Territory`,`Division`,`Reporting`,`ReportingEmpCode`,`IMEI`,`Password`) values (?,?,?,?,?,?,?,?,?)";
?>