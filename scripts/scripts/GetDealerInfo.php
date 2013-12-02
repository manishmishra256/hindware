<?php

// Connection with MYSQL

$config['table_name'] = "DealerInfo";   

$Con = mysql_connect("","root","$@cur!ty");
if (!$Con)
  {
  	die('Could not connect: ' . mysql_error());
  }

mysql_select_db("Hindware", $Con);


	$SapCode=$_REQUEST["SapCode"];	
	
	//$the_query="SELECT `SrNo`,`Name`,`SapCode`,(select EmpName from EmpMaster where EmpCode=(select `TMEmployeeCode` from `DealerMaster` where `SAPCode`=a.`SapCode`)) as `TMName`,(select `State` from `DealerMaster` where `SAPCode`=a.`SapCode`) as `State`,(select `Location` from `DealerMaster` where `SAPCode`=a.`SapCode`) as `Location`,(select `Teritory` from `DealerMaster` where `SAPCode`=a.`SapCode`) as `Teritery`,`DealerCode`,`AreaCode`,`Address`,`ContactPerson`,`PhNo`,`MailId`,`PANNo`,`TINNo`,`DivDistCh`,`Anyother` FROM `DealerInfo` a where `SapCode`='$SapCode'";
	
	$the_query="SELECT `SrNo`,`Name`,`DealerCode` as `SapCode`,(select EmpName from EmpMaster where EmpCode=a.TMEmployeeCode) as `TMName`,`Telephone1`,`City`,`Region`,`Telephone2`,`DealerCode`,`AreaCode`,`Address`,`Contact_No`,`PhNo`,`MailId`,`PANNo`,`TINNo`,`DivDistCh`,`Anyother` FROM `DealerInfo` a where `DealerCode`='$SapCode'";
	
	
	
	$result = mysql_query($the_query) or die(mysql_error());

    header('Content-type:application/json');

	if (!$result = mysql_query($the_query))     die("Record Not Found");   
	
while($row = mysql_fetch_array($result))
{
    extract($row);
    $channel['items'][] = array(
        'srno' => $SrNo,
        'Name' => $Name,
        'SapCode' => $SapCode,
        'TMName' => $TMName,
        'Telephone1' => $Telephone1,        
        'City' => $City,
        'Region' => $Region,
	 'Telephone2' => $Telephone2,
        'DealerCode' => $DealerCode,        
        'AreaCode' => $AreaCode,
        'Address' => $Address,
        'Contact_No' => $Contact_No,
        'PhNo' => $PhNo,
        'MailId' => $MailId,
        
        'PANNo' => $PANNo,
        'TINNo' => $TINNo,
        'DivDistCh' => $DivDistCh,
        'Anyother' => $Anyother
        
    );
}   
$channels = array($channel);

$channels = (object) array('channels'=>$channels);

$json = json_encode($channel);
echo $json;

	//mysql_free_result($rs_check);
	
?>
