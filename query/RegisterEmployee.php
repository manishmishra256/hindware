<?php	/* Global variables*/	$host ="localhost";	$username ="root1";	$password ="hindware";	$dbName ="hindware";	if (isset($_POST)) {
		$EmpCode=$_POST["EmpCode"];	
		$EmpName=$_POST["EmpName"];	
		$State=$_POST["State"];	
		$Territory=$_POST["Territory"];	
		$Division=$_POST["Division"];	
		$Reporting=$_POST["Reporting"];	
		$ReportingEmpCode=$_POST["ReportingEmpCode"];	
		$IMEI=$_POST["IMEI"];	
		$Password=$_POST["Password"];	}
	//create connection	$mysqli = new mysqli($host,$username,$password,$dbName);	if($mysqli->connect_error)	{		die("$mysqli->connect_errno: $mysqli->connect_error");	}	
			//$rsChk= mysql_query("SELECT * FROM `EmpMaster` WHERE `EmpCode`='$EmpCode'");			$sql="SELECT * FROM `EmpMaster` WHERE `EmpCode`='$EmpCode'";			$Cnt=0;			foreach ($mysqli->query($sql) as $row) {				$Cnt=$Cnt+1;			}
			if($Cnt!=0)			{
				echo "Employee Code Already Exists";
				exit();
			}
			$rsChk1= "SELECT * FROM `EmpMaster` WHERE `EmpCode`='$ReportingEmpCode'";
			$Cnt1=0;
			foreach ($conn->query($rsChk1) as $row) {				$Cnt=$Cnt+1;			}
			if($Cnt1==0)
			{				echo "Reporting Employee Code doese not Exists";
				exit();
			}
			
		$query="insert into `EmpMaster` (`EmpCode`, `EmpName`,`State`,`Territory`,`Division`,`Reporting`,`ReportingEmpCode`,`IMEI`,`Password`) values (?,?,?,?,?,?,?,?,?)";						$stmt = $mysqli->stmt_init();	if(!$stmt->prepare($query))	{	    print "Failed to prepare statement\n";	    exit();	}	else	{		$stmt->bind_param("sssssssss", $EmpCode, $EmpName, $State,$Territory,$Division,$Reporting,$ReportingEmpCode,$IMEI,$Password);		$stmt->execute();        $result = $stmt->get_result();        echo "Record Inserted Successfully";        exit();     }
?>
