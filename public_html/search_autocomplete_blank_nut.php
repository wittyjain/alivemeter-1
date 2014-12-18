<?php include("includes/common.inc.php"); ?>
<?php


$result = array();
$type=$_GET['type'];

$String="";

if(isset($_SESSION['UserID']))
{
	$user_id=$_SESSION['UserID'];
}
else
{
	$user_id=0;
}

if($type=="Receipe"){
	$query = "SELECT recipe_ids FROM tbl_user_food_history where user_id=".$user_id." ";
	$user_food_history = mysql_query($query);
	if ($user_food_history != "") {
		$rowcount = mysql_num_rows($user_food_history);
		if ($rowcount > 0 && count($result)<80) {
			$row = mysql_fetch_array($user_food_history);
			$user_search_array = array();
			$user_search_array = explode (',',$row['recipe_ids']);
			for($i=0; $i<count($user_search_array); $i++){
			 	$id = $user_search_array[$i];
			 	$query = "SELECT name FROM tbl_recipe WHERE isdeleted = 0 and approved=1 and id = ".$user_search_array[$i]." ";
			 	$recipe_name = mysql_query($query);
			 	if(mysql_num_rows($recipe_name) > 0){
			 		$recipe = mysql_fetch_array($recipe_name);
			 		$key = $recipe['name'];
			 		echo "<li class = 'ui-menu-item' role = 'presentation'> <a id='ui-id-6' class = 'ui-corner-all' tabindex = '-1'>$key</a></li>";
					//array_push($result, array("id"=>$id, "label"=>$key, "value" => strip_tags($key)));
			 		if (count($result) > 80)
						break;
			 	}
			}
		}
	}
	$String="No records found";
}

if($result[0]=="" && $type!="Venue")
{
	$key=$String;
	array_push($result, array("id"=>0, "label"=>$key, "value" => strip_tags($key)));
}
// 4json_encode is available in PHP 5.2 and above, or you can install a PECL module in earlier versions
//for($i=0; $i<count($result); $i++){
//}
//echo json_encode($result);

?>
