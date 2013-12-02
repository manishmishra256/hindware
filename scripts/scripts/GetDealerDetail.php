<?php
//require("connection.php");

// Connection with MYSQL

$config['mysql_host'] = ""; 
$config['mysql_user'] = "root"; 
$config['mysql_pass'] = "$@cur!ty"; 
$config['db_name']    = "Hindware"; 
$config['table_name'] = "DealerMaster";   

//connect to host 
mysql_connect($config['mysql_host'],$config['mysql_user'],$config['mysql_pass']); 
//select database 
@mysql_select_db($config['db_name']) or die( "Unable to select database"); 

	$xml= "<?xml version=\"1.0\" encoding=\"UTF-8\"?>"; 
	$root_element = $config['table_name']."H"; //images 
	$xml .= "<$root_element>"; 
	
	$sql="SELECT `Name`,`DealerCode`,`target`,`actual` FROM `DealerMaster`";		
	
	if (!$result = mysql_query($sql))     die("Record Not Found");   
	
	if(mysql_num_rows($result)>0) 
	{    
		while($result_array = mysql_fetch_assoc($result))    
		{       
			$xml .= "<".$config['table_name'].">";         
			//loop through each key,value pair in row       
				foreach($result_array as $key => $value)       
				{          
					//$key holds the table column name          
					$xml .= "<$key>";            
					//embed the SQL data in a CDATA element to avoid XML entity issues          
					$xml .= "<![CDATA[$value]]>";             
					//$xml .= "$value";
					//and close the element          
					$xml .= "</$key>";       
				}         
				$xml.="</".$config['table_name'].">";    
		}
		//close the root element 
		$xml .= "</$root_element>";   
		//send the xml header to the browser 
		header ("Content-Type:text/xml");    
		//output the XML data 
		echo $xml; 	
	}
	else
	{
		echo "Record Not Found" ;
	}

	//mysql_free_result($rs_check);
	
?>
