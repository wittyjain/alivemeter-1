<?php include("common.inc.php"); ?>
<?php
$cmtid=0;  $condition="";
$created_date=date('Y-m-d h:i:s'); 

if(isset($_GET['cmtid'])){$cmtid=$_GET['cmtid'];}


if(isset($_GET['type'])){$type=$_GET['type'];}


if($type=="Approve")
{
	$query = "update ".User_Reviews." set approved=1 where user_review_id in (".$cmtid.")";
	mysql_query($query);

	if($cmtid != "" || $cmtid!=0) {

		$article_ids = explode(",", $cmtid);
			foreach($article_ids as $article_id) {
				$user_id=GetValue("select user_id as col from ".User_Reviews." where user_review_id =$article_id", "col");
				
				
				$rowcount=GetValue("select count(*) as col from ".User_Reviews." a where user_review_id=$article_id and user_id=".$user_id." and  user_review_id in (select common_id from tbl_total_reward_points b where a.user_review_id=b.common_id and b.type='User_Reviews')", "col");
				
				
				
				 
				if ($article_id > 0) {
						Alert($rowcount);
						if ($rowcount <= 0) {
							$reward_point="10";
							
							$data1 = array(
								'user_id'=> $user_id,
								'type'=>'User_Reviews',
								'reward_points'=>$reward_point,
								'common_id'=>$article_id,
								'created_date'=>$created_date,
								'isactive'=>1,
								'isdeleted'=>0,
								
							);
							$user_review_id =$db->insert_array(Total_Reward_Points, $data1);
						}
					
				}
				
				
			}
	}

}
else
{
	$query = "update ".User_Reviews." set approved=0 where user_review_id in (".$cmtid.")";
	mysql_query($query);

	if($cmtid != "" || $cmtid!=0) {

		$article_ids = explode(",", $cmtid);
			foreach($article_ids as $article_id) {
				if ($article_id > 0) {
					$user_id=GetValue("select user_id as col from ".User_Reviews." where user_review_id =$article_id", "col");
					$query = "delete FROM tbl_total_reward_points WHERE type='User_Reviews' and common_id = ".$article_id." and user_id=".$user_id;
					//echo $query;
					$result = mysql_query($query);
				}
				
				
			}
	}
}
//echo $query;

?>

