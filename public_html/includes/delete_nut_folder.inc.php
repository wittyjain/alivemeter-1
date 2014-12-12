<?php include "common.inc.php";?>
<?php
	$record_id="0";
	if(isset($_GET['folderid'])) {
		$folderid = ($_GET['folderid']);
		//Alert ($type);
	}

	$query = "delete from  ".Nut_Folder." where id=".$folderid;
	mysql_query($query); 
	
	//echo $query;
	echo "Record deleted successfully.";
	
?>