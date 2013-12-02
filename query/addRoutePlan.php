<?php

	/* Global variables*/
	$host;
	$username;
	$password;
	$dbName;

	$EmpCode;
	$RouteDate;
	$Area;

	if (isset($_POST)) {
		$host =$_POST["host"];
		$username =$_POST["username"];
		$password =$_POST["password"];
		$dbName =$_POST["dbName"];

		$EmpCode=$_POST["empCode"];
		$RouteDate=$_POST["routeDate"];
		$Area=$_POST["area"];
	}
	else{
		$host ="localhost";
		$username ="root";
		$password ="manish";
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
		$stmt->bind_param("s", $EmpCode, $RouteDate, $Area);

		$stmt->execute();
        $result = $stmt->get_result();

        echo "Record Inserted Successfully";
        exit();
     }

     echo "Some Error Occured While Inserting The Record";
?>