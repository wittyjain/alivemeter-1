<?php include("common.inc.php"); ?>
<?php
$cmtid=0;  $condition="";


//Alert($user_id); 
$created_date=date('Y-m-d h:i:s'); 
 

if(isset($_GET['cmtid'])){$cmtid=$_GET['cmtid'];}


if(isset($_GET['type'])){$type=$_GET['type'];}


if($type=="Approve")
{
	$query = "update ".Post_Comment." set approved=1 where post_comment_id in (".$cmtid.")";
	mysql_query($query);



	if($cmtid != "" || $cmtid!=0) {

		$article_ids = explode(",", $cmtid);
			foreach($article_ids as $article_id) {
				$user_id=GetValue("select user_id as col from ".Post_Comment." where post_comment_id =$article_id", "col");
				
				$artid=GetValue("select article_id as col from ".Post_Comment." where post_comment_id =$article_id", "col");
				
					Alert ($user_id);
				if($artid=="") { $artid=0; }
				
			//	Alert ($artid);
				$rowcount=GetValue("select count(*) as col from ".Post_Comment." a where article_id=$artid and user_id=".$user_id." and  post_comment_id in (select common_id from tbl_total_reward_points b where a.post_comment_id=b.common_id and type='Story')", "col");
				
				
				
				//Alert($user_id);
			//	echo ("select count(*) as col from ".Post_Comment." a where article_id=$artid and user_id=".$user_id." and  post_comment_id in (select common_id from tbl_total_reward_points b where a.post_comment_id=b.common_id)");
				
				//Alert($article_id);
				if ($article_id > 0) {
						Alert($rowcount);
						if ($rowcount <= 0) {
							$reward_point="5";
							
							$data1 = array(
								'user_id'=> $user_id,
								'type'=>'Story',
								'reward_points'=>$reward_point,
								'common_id'=>$article_id,
								'created_date'=>$created_date,
								'isactive'=>1,
								'isdeleted'=>0,
								
							);
							$post_comment_id =$db->insert_array(Total_Reward_Points, $data1);
						}
					
				}
				
				
			}
	}

}
else
{
	
	$query = "update ".Post_Comment." set approved=0 where post_comment_id in (".$cmtid.")";
	mysql_query($query);
	
	
	if($cmtid != "" || $cmtid!=0) {

		$article_ids = explode(",", $cmtid);
			foreach($article_ids as $article_id) {
				if ($article_id > 0) {
					$user_id=GetValue("select user_id as col from ".Post_Comment." where post_comment_id =$article_id", "col");
					$query = "delete FROM tbl_total_reward_points WHERE type='Story' and common_id = ".$article_id." and user_id=".$user_id;
					//echo $query;
					$result = mysql_query($query);
				}
				
				
			}
	}

	
}
//echo $query;

?>

