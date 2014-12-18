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
					array_push($result, array("id"=>$id, "label"=>$key, "value" => strip_tags($key)));
			 		if (count($result) > 80)
						break;
			 	}
			}
		}
	}
$String="No records found";
}

else  if($type=="ReceipeNew"){
	$query = "SELECT id,name, portion FROM tbl_recipe WHERE isdeleted = 0 and approved=1 and name LIKE '".$q."%' order by name";
	$primary_result = mysql_query($query);
	$query = "SELECT id,name, portion FROM tbl_recipe WHERE isdeleted = 0 and approved=1 and name LIKE '% ".$q."%' order by name";
	$secondary_result = mysql_query($query);
	$query = "SELECT id,name, portion FROM tbl_recipe WHERE isdeleted = 0 and approved=1 and name LIKE '%".$q."%' and name NOT LIKE '".$q."%' and name NOT LIKE '% ".$q."%' order by name";
	$tertiary_result = mysql_query($query);

	if ($primary_result != "") {
		$rowcount = mysql_num_rows($primary_result);
		if ($rowcount > 0 && count(result)<80) {
		while ($row = mysql_fetch_array($primary_result)) {
			$cal=GetValue("select sum(energy) as col from tbl_recipe_det where parent_id=".$row['id'],"col");
			 $id = $row['id']."###".$row['portion']."###".$cal;
			 $key = $row['name'];
			 array_push($result, array("id"=>$id, "label"=>$key, "value" => strip_tags($key)));
			if (count($result) > 80)
				break;
				
			}
		}
	}
        if ($secondary_result != "") {
		$rowcount = mysql_num_rows($secondary_result);
		if ($rowcount > 0 && count(result)<80) {
		while ($row = mysql_fetch_array($secondary_result)) {
			$cal=GetValue("select sum(energy) as col from tbl_recipe_det where parent_id=".$row['id'],"col");
			 $id = $row['id']."###".$row['portion']."###".$cal;
			 $key = $row['name'];
			 array_push($result, array("id"=>$id, "label"=>$key, "value" => strip_tags($key)));
			if (count($result) > 80)
				break;
				
			}
		}
	}  
        if ($tertiary_result != "") {
		$rowcount = mysql_num_rows($tertiary_result);
		if ($rowcount > 0 && count(result)<80) {
		while ($row = mysql_fetch_array($tertiary_result)) {
			$cal=GetValue("select sum(energy) as col from tbl_recipe_det where parent_id=".$row['id'],"col");
			 $id = $row['id']."###".$row['portion']."###".$cal;
			 $key = $row['name'];
			 array_push($result, array("id"=>$id, "label"=>$key, "value" => strip_tags($key)));
			if (count($result) > 80)
				break;
				
			}
		}
	}

$String="No records found";
}

else if($type=="Exercise"){
	
	$query = "SELECT id,name,calorie FROM tbl_exercise WHERE isdeleted = 0 order by name";
	$result1 = mysql_query($query);
	if ($result1 != "") {
		$rowcount = mysql_num_rows($result1);
		if ($rowcount > 0) {
		while ($row = mysql_fetch_array($result1)) {
			 $id = $row['id'];
			 $key = $row['name'];
			 $calorie = $row['calorie'];
			 if (strpos(strtolower($key), $q) !== false) {
				array_push($result, array("id"=>$id, "label"=>$key, "value" => strip_tags($key)));
			  }
			if (count($result) > 30)
				break;
				
			}
		}
	}
$String="No records found";
}

else if($type=="Doctor"){
	
	$query = "SELECT doctor_id,doctor_name FROM tbl_doctor WHERE isdeleted = 0 and type='Doctor' and user_type='Admin' order by doctor_name";
	//echo $query;
	$result1 = mysql_query($query);
	if ($result1 != "") {
		$rowcount = mysql_num_rows($result1);
		if ($rowcount > 0) {
		while ($row = mysql_fetch_array($result1)) {
			 $id = $row['id'];
			 $key = $row['doctor_name'];
			 if (strpos(strtolower($key), $q) !== false) {
				array_push($result, array("id"=>$id, "label"=>$key, "value" => strip_tags($key)));
			  }
			if (count($result) > 50)
				break;
				
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
	echo "<li class = 'ui-menu-item' role = 'presentation'>
			<a id='ui-id-6' class = 'ui-corner-all' tabindex = '-1'>Testing </a>
		</li>";
//}
//echo json_encode($result);

?>
