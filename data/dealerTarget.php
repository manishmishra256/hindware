<?php

	//create connection
	$mysqli = new mysqli("localhost","root1","hindware","hindware");
	if($mysqli->connect_error)
	{
		die("$mysqli->connect_errno: $mysqli->connect_error");
	}

	/* Global variables*/
	$arr = array();
	$dealerCode=100426;

	if (isset($_POST)) {
		$dealerCode =$_POST["dealerCode"];
	}

	//create query
	$query="SELECT dt.DealerCode, SUM(dt.Jan+dt.Feb+dt.Mar)*1000 as Target,  SUM(sh.Net_Exfactory) as Sales FROM `Dealer-Target` dt LEFT OUTER JOIN `Sales-History` sh ON dt.DealerCode = sh.DealerCode WHERE dt.FY='2013-14' AND  dt.DealerCode=? GROUP BY dt.DealerCode";

	$stmt = $mysqli->stmt_init();
	if(!$stmt->prepare($query))
	{
	    print "Failed to prepare statement\n";
	    exit();
	}
	else
	{
		$stmt->bind_param("s", $dealerCode);
		
		$stmt->execute();
        $result = $stmt->get_result();
        while ($row = $result->fetch_array(MYSQLI_NUM))
        {
        	$arr[] = array(
						"Sales" => $row[0],
						"Target"=>$row[1],
						"Achievement"=>round(($row['0']/$row['1'])* 100,2)
					); 
        }
	}	

	$stmt->close();
	$mysqli->close();

	header('Content-Type: application/json');
	echo json_encode($arr);
?>