<?php

	/* Global variables*/
	$host ="localhost";
	$username ="root1";
	$password ="hindware";
	$dbName ="hindware";
	
	$EmpCode;
	$RouteDate;
	$Area;
		
	if (isset($_POST)) {
		$EmpCode=$_POST["empCode"];
		$RouteDate=$_POST["routeDate"];
		$Area=$_POST["area"];
		
	}
	else{
		$host ="localhost";
		$username ="root1";
		$password ="hindware";
		$dbName ="hindware";	
	}

	//create connection
	$mysqli = new mysqli($host,$username,$password,$dbName);
	if($mysqli->connect_error)
	{
		die("$mysqli->connect_errno: $mysqli->connect_error");
	}

	//create query
	$query="insert into `RoutePlan` (`EmpCode`, `Date`,`Area`) values (?,?,?)";
	
	$stmt = $mysqli->stmt_init();
	if(!$stmt->prepare($query))
	{
	    print "Failed to prepare statement\n";
	    exit();
	}
	else
	{
		$stmt->bind_param("sss", $EmpCode, $RouteDate, $Area);

		$stmt->execute();
        $result = $stmt->get_result();

        echo "Record Inserted Successfully";
        exit();
     }

     echo "Some Error Occured While Inserting The Record";
?>