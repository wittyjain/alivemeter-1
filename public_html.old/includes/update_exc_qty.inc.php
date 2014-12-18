<?php include "common.inc.php";?>
<?php
	$type="";$id="0";$eng_cal="0";$min="0";
	if(isset($_GET['type']))
	{
		$type=$_GET['type'];
	}
	if(isset($_GET['id']))
	{
		$id=$_GET['id'];
		$id=$id/121;
	}
	if(isset($_GET['min']))
	{
		$min=$_GET['min'];
	}
	if(isset($_GET['eng_cal']))
	{
		$eng_cal=$_GET['eng_cal'];
	}

	if($type=="exce")
	{
		$data = array(
			'eng_cal' => $eng_cal*$min,
			'min' => $min,
		);
		$rows =$db->update_array(Exercise, $data, "id = $id");

		$strValue=$eng_cal*$min;
	}

echo $strValue;
?>