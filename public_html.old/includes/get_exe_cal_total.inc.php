<?php include("common.inc.php"); ?>
<?php
	$value="0";  $strValue=""; $today_total_exe_cal="0";
	
	if(isset($_GET['value']))
	{
		$value = $_GET['value'];
	}
	
	if(isset($_GET['date']))
	{
		$date = $_GET['date'];
		$cur_date=date('Y-m-d',strtotime($date));
	}
	
	$today_total_exe_cal = GetValue("SELECT sum(cal*min) as col FROM tbl_diet_exercise WHERE diet_plan_id=".$value." and selected_date='".$cur_date."'", "col");
	
	if($today_total_exe_cal=="")
	{
		$today_total_exe_cal="0";
	}
	echo $today_total_exe_cal." cal";
?>

