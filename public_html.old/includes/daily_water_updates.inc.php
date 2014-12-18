<?php include 'common.inc.php'?>
<?php

$user_id="0"; $no_of_glass="0"; $strValue="0";

if(isset($_SESSION['UserID']))
{
	$user_id=$_SESSION['UserID'];
}

$daily_date=date('Y-m-d');


	$query_r = "SELECT * FROM tbl_daily_water where user_id=".$user_id." and date='$daily_date'";
	////echo $query_r;
	$result_r = mysql_query($query_r);
	if($result_r != "") {
	$rowcount = mysql_num_rows($result_r);
	if($rowcount > 0) {
		
		while($row_r = mysql_fetch_assoc($result_r)) {
			extract($row_r);
				$no_of_glass=$row_r['no_of_glass'];
				$strValue = $no_of_glass;
				if($strValue=="" || $strValue=="undefined") 
				{
					$strValue="0";
				}
		}
	}
}
					
				
					
					


echo $strValue;
?>
