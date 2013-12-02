<?php


// Connection with MYSQL

$config['table_name'] = "CForm";   

$Con = mysql_connect("","root","$@cur!ty");
if (!$Con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("Hindware", $Con);


	$DealerCode=$_REQUEST["DealerCode"];
	
	$the_query="SELECT SrNo,SapCode,DealerCode,CFDate,InvoiceNo,InvoiceDate,Amount as Amt,Division,Period,Year,Plant FROM `CForm` a where `DealerCode`='$DealerCode'";
	
	$result = mysql_query($the_query) or die(mysql_error());

    header('Content-type:application/json');

	if (!$result = mysql_query($the_query))     die("Record Not Found");   
	
while($row = mysql_fetch_array($result))
{
    extract($row);
    $channel['items'][] = array(
        'SrNo' => $SrNo,
        'SapCode' => $SapCode,
        'DealerCode' => $DealerCode,
        'CFDate' => $CFDate,        
        'InvoiceNo' => $InvoiceNo,
        'InvoiceDate' => $InvoiceDate,
        'Amt' => $Amt,
        'Division' => $Division,
        'Period' => $Period,
        'Year' => $Year,
        'Plant' => $Plant                
    );
}   
$channels = array($channel);
//$rss = (object) array('rss'=> array('channels'=>$channels));
$channels = (object) array('channels'=>$channels);
//$json = json_encode($channels);
$json = json_encode($channel);
echo $json;

	//mysql_free_result($rs_check);
	
?>
