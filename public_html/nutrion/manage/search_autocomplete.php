<?php include("../includes/common.inc.php"); ?>
<?php
	
//sleep( 3 );
// no term passed - just exit early with no response
if (empty($_GET['term'])) exit ;
$q = strtolower($_GET["term"]);
if(trim($q)==""){exit;}
// remove slashes if they were magically added
if (get_magic_quotes_gpc()) $q = stripslashes($q);

$result = array();
$type="";
$search="";
if(isset($_GET['type']))
{
	$type=$_GET['type'];
}

if(isset($_GET['search']))
{
	$search=$_GET['search'];
}
$String="";

if($type=="key"){
	$query = "SELECT * FROM " . Raw . " WHERE isdeleted = 0  and ingredientname like '%$q%' order by ingredientname";
	//echo $query;
	$result1 = mysql_query($query);
	if ($result1 != "") { 
		$rowcount = mysql_num_rows($result1);
		if ($rowcount > 0) {
		while ($row = mysql_fetch_array($result1)) {
			 $id = $row['id'];
			 $key = $row['ingredientname'];
			 if (strpos(strtolower($key), $q) !== false) {
				array_push($result, array("id"=>$id, "label"=>$key, "value" => strip_tags($key)));
			  }
			if (count($result) > 11)
				break;
				
			}
		}
	}
$String="No ingredientname available";

}
 
 
 
 if($type=="recipe"){
	$query = "SELECT * FROM " . Recipe . " WHERE isdeleted = 0  and name like '%$q%' order by name";
	//echo $query;
	$result1 = mysql_query($query);
	if ($result1 != "") { 
		$rowcount = mysql_num_rows($result1);
		if ($rowcount > 0) {
		while ($row = mysql_fetch_array($result1)) {
			 $id = $row['id'];
			 $key = $row['name'];
			 if (strpos(strtolower($key), $q) !== false) {
				array_push($result, array("id"=>$id, "label"=>$key, "value" => strip_tags($key)));
			  }
			if (count($result) > 11)
				break;
				
			}
		}
	}
$String="No ingredientname available";

}
 



if(isset($result[0])=="" && $type!="Products")
{
	$key=$String;
	array_push($result, array("id"=>0, "label"=>$key, "value" => strip_tags($key)));
}
// 4json_encode is available in PHP 5.2 and above, or you can install a PECL module in earlier versions
echo json_encode($result);

?>