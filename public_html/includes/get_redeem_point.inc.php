<?php include("common.inc.php"); ?>
<?php
$value=0;  $redeem_points="0";

//Alert($user_id); 
$created_date=date('Y-m-d h:i:s'); 
 
if(isset($_GET['value'])){$value=$_GET['value'];}


if(isset($_SESSION['UserID'])){$user_id=$_SESSION['UserID'];}

$cpnleft=GetValue("select total_coupons col from ".Reward_Points."  where reward_points_id=".$value."", "col");

$getredeempoints=GetValue("select reedem_points col from ".Reward_Points."  where reward_points_id=".$value."", "col");
//Alert($getredeempoints);

$getuserrewardpoints=GetValue("select sum(reward_points) col from ".Total_Reward_Points."  where user_id=".$user_id."", "col");
//Alert($getuserrewardpoints);

if($getuserrewardpoints > $getredeempoints)
{
	$redeem_points=$getuserrewardpoints-$getredeempoints; 
}
else
{
	$redeem_points="0"; 
}

$rowcount=GetValue("select Count(*) as col from ".Redeem_Points."  where coupon_id=".$value." and user_id=".$user_id."", "col");
//Alert ($rowcount);

	if ($redeem_points > 0) {
			//Alert($rowcount);
			
				
				$data1 = array(
					'user_id'=> $user_id,
					'coupon_id'=>$value,
					'redeem_points'=>$getredeempoints,
					'created_date'=>$created_date,
					'isactive'=>1,
					'isdeleted'=>0,
					
				);
				$cpn_id =$db->insert_array(Redeem_Points, $data1);
				
				$cpnleft=$cpnleft-1;
				
				$query = "update ".Reward_Points." set total_coupons=".$cpnleft." where reward_points_id=".$value;
				mysql_query($query);
			
		
	}
	

?>

