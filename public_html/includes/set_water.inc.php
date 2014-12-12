<?php include "common.inc.php" ?>
<?php
	$user_id="0"; $date="";
	
	if(isset($_SESSION['UserID']))
	{
		$user_id=$_SESSION['UserID'];
	}
	else
	{
		$user_id=0;
	}
	$date=$_GET['date'];
	
	$query = "Delete from  ".Water."  where user_id=".$user_id." and date='".$date."'";
	mysql_query($query); 

	$Water=$_GET['Water'];
	
	$data = array(
		'user_id' => $user_id,
		'date' => $date,
		'type' => "Water",
		'no_of_glass' => $Water-1,
	);
	
	$Water_ID =$db->insert_array(Water, $data);
	
	$water_glass=$Water-1;
	
///	$strValue = "true###".$water_glass;

///echo $strValue;



?>