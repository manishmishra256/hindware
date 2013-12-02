<?php
//require("connection.php");

// Connection with MYSQL
$Con = mysql_connect("","root","$@cur!ty");

if (!$Con)
  {
  die('Could not connect: ' . mysql_error());
  }


mysql_select_db("Hindware", $Con);

	
	$SapCode=$_REQUEST["SapCode"];
	$DealerCode=$_REQUEST["DealerCode"];
	$dob=$_REQUEST["dob"];
	$anniversary=$_REQUEST["anniversary"];

	
	$Location=$_REQUEST["Location"];
	
	$TMName=$_REQUEST["TMName"];
	$telephone2=$_REQUEST["telephone2"];

	$State=$_REQUEST["State"];
	
	
	$Teritery=$_REQUEST["Teritery"];
	$Name=$_REQUEST["Name"];
	$AreaCode=$_REQUEST["AreaCode"];
	$Address=$_REQUEST["Address"];
	$ContactPerson=$_REQUEST["ContactPerson"];
	$Contact_No=$_REQUEST["Contact_No"];
	
	$PhNo=$_REQUEST["PhNo"];
	$MailId=$_REQUEST["MailId"];
	$PANNo=$_REQUEST["PANNo"];
	$TINNo=$_REQUEST["TINNo"];
	$PO_No=$_REQUEST["PO_No"];
	$Auth_SignatoryOnCheq=$_REQUEST["Auth_SignatoryOnCheq"];
	$Security_CheqDetail=$_REQUEST["Security_CheqDetail"];
	$SalesOfficer=$_REQUEST["SalesOfficer"];
	$Status=$_REQUEST["Status"];
	
	$DivDistCh=$_REQUEST["DivDistCh"];
	$Anyother=$_REQUEST["Anyother"];
	$Comments=$_REQUEST["Comments"];
	$DealerImage=$_REQUEST["DealerImage"];
	$BrandingImage=$_REQUEST["BrandingImage"];
	
			$rsChk= mysql_query("SELECT * FROM `DealerInfo` WHERE `DealerCode`='$DealerCode'");
				$Cnt=0;
				while($row = mysql_fetch_row($rsChk))
				{
					$Cnt=$Cnt+1;
				}
				if($Cnt!=0)
				{
					//echo "Dealer Code already exists";
					//exit();
					//$query="update `DealerInfo` set `TMCode`='$SapCode',`DOB`='$dob',`anniversary`='$anniversary',`City`='$Location',`TMEmployeeCode`='$TMName',`Telephone1`='$State',`Region`='$Teritery',`Name`='$Name',`AreaCode`='$AreaCode',`Address`='$Address',`ContactPerson`='$ContactPerson',`Contact_No`='$Contact_No',`PhNo`='$PhNo',`MailId`='$MailId',`PANNo`='$PANNo',`TINNo`='$TINNo',`PO_No`='$PO_No',`Auth_SignatoryOnCheq`='$Auth_SignatoryOnCheq',`Security_CheqDetail`='$Security_CheqDetail',`SalesOfficer`='$SalesOfficer',`Status`='$Status',`DivDistCh`='$DivDistCh',`Anyother`='$Anyother',`Comments`='$Comments' where `DealerCode`='$DealerCode'";
					$query="update `DealerInfo` set `TMCode`='$SapCode',`DOB`='$dob',`anniversary`='$anniversary',`City`='$Location',`TMEmployeeCode`='$TMName',`Telephone1`='$State',`Telephone2`='$telephone2',`Region`='$Teritery',`Name`='$Name',`AreaCode`='$AreaCode',`Address`='$Address',`Contact_No`='$Contact_No',`PhNo`='$PhNo',`MailId`='$MailId',`PANNo`='$PANNo',`TINNo`='$TINNo',`PO_No`='$PO_No',`Auth_SignatoryOnCheq`='$Auth_SignatoryOnCheq',`Security_CheqDetail`='$Security_CheqDetail',`SalesOfficer`='$SalesOfficer',`Status`='$Status',`DivDistCh`='$DivDistCh',`Anyother`='$Anyother',`Comments`='$Comments' where `DealerCode`='$DealerCode'";

					mysql_query($query) or die(mysql_error());
				}
				else
				{
					$query="insert into `DealerInfo` (`TMCode`, `DealerCode`,`DOB`,`anniversary`,`City`,`TMEmployeeCode`,`Telephone1`,`Telephone2`,`Region`,`Name`,`AreaCode`,`Address`,`Contact_No`,`PhNo`,`MailId`,`PANNo`,`TINNo`,`PO_No`,`Auth_SignatoryOnCheq`,`Security_CheqDetail`,`SalesOfficer`,`Status`,`DivDistCh`,`Anyother`,`Comments`) values ('$SapCode','$DealerCode','$dob','$anniversary','$Location','$TMName','$State','$telephone2','$Teritery','$Name','$AreaCode','$Address','$Contact_No','$PhNo','$MailId','$PANNo','$TINNo','$PO_No','$Auth_SignatoryOnCheq','$Security_CheqDetail','$SalesOfficer','$Status','$DivDistCh','$Anyother','$Comments')";
					mysql_query($query) or die(mysql_error());
				}
			
		
		$rsSrNo= mysql_query("SELECT max(`SrNo`) FROM `DealerInfo`");
			while($row1 = mysql_fetch_row($rsSrNo))
				{
					$NewSrNo=$row1[0]+1;
				}
					
		if(strlen($DealerImage)>16)
			{
				$thefile = base64_decode($DealerImage);   
				//$FileName=$DealerCode . ".JPG";
				$FileName=$NewSrNo . ".JPG";
				file_put_contents($FileName,$thefile);
				copy($FileName,"images/$FileName");
				unlink($FileName);
			}
		if(strlen($BrandingImage)>16)
			{
				$thefile = base64_decode($BrandingImage);   
				$FileName=$DealerCode ."_Brand_.JPG";
				file_put_contents($FileName,$thefile);
				copy($FileName,"images/$FileName");
				unlink($FileName);
			}
	
	echo "successfully Registered";
	//mysql_free_result($rs_check);
	
?>
