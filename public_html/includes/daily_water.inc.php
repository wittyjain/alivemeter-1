<?php
if(isset($_GET['alived']) || isset($_GET['alivem']) || isset($_GET['alivey']))
	{
		$date=$_GET['alivey']."-".$_GET['alivem']."-".$_GET['alived'];
		
	}
	else
	{
		$date=date("Y-m-d");
	}
?>
<iframe frameborder="0" id="iWater"  src="<?php echo $strHostName?>/includes/daily_water_frame.inc.php?date=<?php echo $date;?>" scrollbars="0" style="width:100%;" width="100%" height="250px" scrolling="no"></iframe>

