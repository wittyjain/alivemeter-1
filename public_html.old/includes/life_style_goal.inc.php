<?php include 'common.inc.php'?>
<?php

$user_id="0"; $spirit_goal="0"; $beer_goal="0"; $cigarette_goal="0"; $life_style_sleep_goal="0";

if(isset($_SESSION['UserID']))
{
	$user_id=$_SESSION['UserID'];
}




	$query_r = "SELECT * FROM tbl_life_style where user_id=".$user_id." order by life_style_id desc limit 1";
	$result_r = mysql_query($query_r);
	if($result_r != "") {
	$rowcount = mysql_num_rows($result_r);
	if($rowcount > 0) {
		
		while($row_r = mysql_fetch_assoc($result_r)) {
			extract($row_r);
				$spirit_goal=$row_r['spirit_goal'];
				$beer_goal=$row_r['beer_goal'];
				$cigarette_goal=$row_r['cigarette_goal'];
				$life_style_sleep_goal=$row_r['life_style_sleep_goal'];
			
				$strValue = "true###".$spirit_goal."###".$beer_goal."###".$cigarette_goal."###".$life_style_sleep_goal."###";
				
		}
	}
}
					
				
					
					


echo $strValue;
?>
