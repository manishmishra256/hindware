<?php
		// Create connection
		$con= mysqli_connect("localhost","root","manish","hindware");
		// Check connection
		if (mysqli_connect_errno($con)){
				echo "Failed to connect to MySQL: " . mysqli_connect_error();
		}

		//select database
		mysqli_select_db($con,"hindware") or die(mysql_error());
		
		//create query
		
		$data = mysqli_query($con,"SELECT dt.DealerCode, SUM(dt.Jan+dt.Feb+dt.Mar)*1000 as Target,  SUM(sh.Net_Exfactory) as Sales FROM `Dealer-Target` dt LEFT OUTER JOIN `Sales-History` sh ON dt.DealerCode = sh.DealerCode WHERE
   			dt.FY='2013-14' AND  dt.DealerCode=100426 AND sh.Billing_Date >= STR_TO_DATE('1-7-2013','%d-%m-%Y') AND
   			sh.Billing_Date <= STR_TO_DATE('31-9-2013','%d-%m-%Y') GROUP BY dt.DealerCode") 
		 	or die(mysql_error()); 

	     //$data = mysqli_query($con,"SELECT SrNo as Sales, Total as Target, Apr as Achievement from `dealer-target`") 
		 //	or die(mysql_error());

		//execute query
		$info = mysqli_fetch_array($data);

		$arr = array();
		while($info = mysqli_fetch_array($data)) 
		{ 
			$arr[] = array(
						"Sales" => $info['Sales'],
						"Target"=>$info['Target'],
						"Achievement"=>((int)$info['Sales']/(int)$info['Target'])* 100
					); 
		};
		mysqli_close($con); 

		header('Content-Type: application/json');
		echo json_encode($arr);
?>