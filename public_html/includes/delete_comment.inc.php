<?php include("common.inc.php"); ?>
<?php
$cmtid=0;  $condition="";


//Alert($user_id); 
$created_date=date('Y-m-d h:i:s'); 
 

if(isset($_GET['cmtid'])){$cmtid=$_GET['cmtid'];}


if(isset($_GET['type'])){$type=$_GET['type'];}


	

if($cmtid != "" || $cmtid!=0) {

$article_ids = explode(",", $cmtid);
	foreach($article_ids as $article_id) {
		if ($article_id > 0) {
			$user_id=GetValue("select user_id as col from ".Post_Comment." where post_comment_id =$article_id", "col");
			$query = "delete FROM tbl_total_reward_points WHERE type='Story' and common_id = ".$article_id." and user_id=".$user_id;
			echo $query;
			$result = mysql_query($query);
		}
		
		
	}
}

	$query = "delete FROM ".Post_Comment." where post_comment_id in (".$cmtid.")";
mysql_query($query);



//echo $query;

?>

