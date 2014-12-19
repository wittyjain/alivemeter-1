<?php include "common.inc.php";?>
<?php
	$type="";$food_id="0";$food_qty="0";$min="0"; $receipe_id="0"; $todate="";
	if(isset($_GET['type']))
	{
		$type=$_GET['type'];
	}
	if(isset($_GET['food_id']))
	{
		$food_id=$_GET['food_id'];
		$food_id=$food_id/121;
	}
	if(isset($_GET['food_qty']))
	{
		$food_qty=$_GET['food_qty'];
	}
	
	if(isset($_GET['receipe_id']))
	{
		$receipe_id=$_GET['receipe_id'];
	}
	
	if(isset($_GET['todate']))
	{
		$todate=$_GET['todate'];
	}
	
	
		$data = array(
			'qty' => $food_qty,
			'type' => $type,
			'receipe_id' => $receipe_id,
			'date' => $todate,
		);
		$rows =$db->update_array(Food, $data, "id = $food_id");
		
	

?>