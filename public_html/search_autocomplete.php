<?php include("includes/common.inc.php"); ?>
<?php
	
//sleep( 3 );
// no term passed - just exit early with no response
if (empty($_GET['term'])) exit ;
$q = strtolower($_GET["term"]);
if(trim($q)==""){exit;}
// remove slashes if they were magically added
if (get_magic_quotes_gpc()) $q = stripslashes($q);

$result = array();

$type=$_GET['type'];
//Alert ($type);

//$search=$_GET['search'];
$String="";

if($type=="Receipe"){
        $query = "SELECT id,name FROM tbl_recipe WHERE isdeleted = 0 and approved=1 and name LIKE '".$q."%' order by name";
	$primary_result = mysql_query($query);
	$query = "SELECT id,name FROM tbl_recipe WHERE isdeleted = 0 and approved=1 and name LIKE '% ".$q."%' order by name";
	$secondary_result = mysql_query($query);
	$query = "SELECT id,name FROM tbl_recipe WHERE isdeleted = 0 and approved=1 and name LIKE '%".$q."%' and name NOT LIKE '".$q."%' and name NOT LIKE '% ".$q."%' order by name";
	$tertiary_result = mysql_query($query);
	if ($primary_result != "") {
		$rowcount = mysql_num_rows($primary_result);
		if ($rowcount > 0 && count($result)<80) {
		while ($row = mysql_fetch_array($primary_result)) {
			 $id = $row['id'];
			 $key = $row['name'];
			 array_push($result, array("id"=>$id, "label"=>$key, "value" => strip_tags($key)));
			 if (count($result) > 80)
				break;
			}
		}
	}
	if ($secondary_result != "") {
		$rowcount = mysql_num_rows($secondary_result);
		if ($rowcount > 0 && count($result)<80) {
		while ($row = mysql_fetch_array($secondary_result)) {
			 $id = $row['id'];
			 $key = $row['name'];
			 array_push($result, array("id"=>$id, "label"=>$key, "value" => strip_tags($key)));
			 if (count($result) > 80)
				break;
			}
		}
	}
	if ($tertiary_result != "") {
		$rowcount = mysql_num_rows($tertiary_result);
		if ($rowcount > 0 && count($result)<80) {
		while ($row = mysql_fetch_array($tertiary_result)) {
			 $id = $row['id'];
			 $key = $row['name'];
			 array_push($result, array("id"=>$id, "label"=>$key, "value" => strip_tags($key)));
			 if (count($result) > 80)
				break;
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
		if ($rowcount > 0 && $count(result)<80) {
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
		if ($rowcount > 0 && $count(result)<80) {
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
		if ($rowcount > 0 && $count(result)<80) {
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
			/// $id = $row['id']."###".$row['calorie'];
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

else if($type=="ExerciseNew"){
	
	$query = "SELECT id,name,calorie FROM tbl_exercise WHERE isdeleted = 0 order by name";
	$result1 = mysql_query($query);
	if ($result1 != "") {
		$rowcount = mysql_num_rows($result1);
		if ($rowcount > 0) {
		while ($row = mysql_fetch_array($result1)) {
			 $id = $row['id'];
			 $key = $row['name'];
			 $calorie = $row['calorie'];
			 $id = $row['id']."###".$row['calorie'];
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
echo json_encode($result);

?>
