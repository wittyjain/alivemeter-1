<?php include 'common.inc.php'?>
<?php

$strdate=""; $type=""; $strValue=""; $table=""; $date="";$user_id="0";

if(isset($_SESSION['UserID']))
{
	$user_id=$_SESSION['UserID'];
}


if(isset($_GET['strdate']))
{
	$strdate=$_GET['strdate'];
}

if(isset($_GET['type']))
{
	$type=$_GET['type'];
}


if($type=="Sugar_Profile")
{
	$table="tbl_sugar_profile";
	$date="fasting_blood_sugar_date";
}


	$query_r = "SELECT * FROM ".$table." where ".$date."='".$strdate."' and user_id=".$user_id;
///	echo $query_r;
	$result_r = mysql_query($query_r);
	if($result_r != "") {
	$rowcount = mysql_num_rows($result_r);
	if($rowcount > 0) {
		
		while($row_r = mysql_fetch_assoc($result_r)) {
			extract($row_r);
				$strValue = "true";
				
		}
	}
}

echo $strValue;
?>
