<?php

// Connection with MYSQL

$config['table_name'] = "SalesTarget";   

$Con = mysql_connect("","root","$@cur!ty");
if (!$Con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("Hindware", $Con);


	
	//$the_query="SELECT SrNo,EmpCode,Division,Product,Month,Year,Target,(select sum(NetExfactory) from `SalesHistory` where EmpCode=a.EmpCode and char(LEFT(MONTHNAME(BillingDate),3))=char(a.Month)and Product=a.Product) as TotalSale FROM `SalesTarget` a where `EmpCode`='$EmpCode' and `Division`='$Division' order by Division,Product,Month,Year";
	$the_query="SELECT `DealerCode`,`City`,`Region`,`Telephone1`,`Telephone2` from `Sheet1`";
	
	
	//echo $the_query;
	//exit();
	
	
	$result = mysql_query($the_query) or die(mysql_error());

    //header('Content-type:application/json');

	if (!$result = mysql_query($the_query))     die("Record Not Found");   
	
$CNT=1;
while($row = mysql_fetch_array($result))
{
	$DealerCode=$row[0];
	$City=$row[1];
	$Region=$row[2];
	$Telephone1=$row[3];
	$Telephone2=$row[4];

	$mySql="UPDATE `DealerInfo` SET `City`='$City',`Region`='$Region',`Telephone1`='$Telephone1',`Telephone2`='$Telephone2' WHERE `DealerCode`='$DealerCode'";
	mysql_query($mySql);
	$CNT=$CNT + 1;
}   
echo $CNT . " Records Updated";

	//mysql_free_result($rs_check);
	
?>
