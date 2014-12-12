<?php include "../includes/common.inc.php";?>
<?php
	$record_id="0";
	if(isset($_GET['cid']))
	{
		$record_id = $converter->decode($_GET['cid']);
	}
	
	if(isset($_GET['insert_type']))
	{
		$insert_type = $_GET['insert_type'];
	}
	
	$retrive_Array=$get_retrive->Delete_Records($insert_type,$record_id);
	
	echo "Record deleted successfully.";
	
?>