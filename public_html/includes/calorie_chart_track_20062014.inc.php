<?php include 'common.inc.php'?>
<?php
$user_id="0";
$page=1;$page_count=10;$newpagenumber="2";$retrive_Array=array();$get_array=array();$type="";
$fromdate=date('Y-m-d');$todate=date('Y-m-d');$rowCount="7";

if(isset($_SESSION['UserID']))
{
	$user_id=$_SESSION['UserID'];
}

if(isset($_GET['type']))
{
	$type=$_GET['type'];
}

if(isset($_GET['fromdate']))
{
	$fromdate=$_GET['fromdate'];
}

if(isset($_GET['todate']))
{
	$todate=$_GET['todate'];
}

if(isset($_GET['page'])){
	$page=$_GET['page'];
}
else
{
	$page=1;
}

if(isset($_GET['rowCount'])){
	$rowCount=$_GET['rowCount'];
	if($rowCount> 300)
	{
		$rowCount=12;
	}
}
else
{
	$rowCount=1;
}



$fromdate=date('Y-m-d',strtotime($fromdate));
$todate=date('Y-m-d',strtotime($todate));


$SeriesCount=GetValue("select GraterCount as col from vgratercount where date between '".$fromdate."' and '".$todate."'","col");

if($type=="exce_calorie_resultYearly")
{
	$retrive_Array=$get_retrive->Get_Calorie_Exce_Chart_Yearly($rowCount,$user_id,$fromdate,$todate);
}
else 
{
	$retrive_Array=$get_retrive->Get_Calorie_Exce_Chart($rowCount,$user_id,$fromdate,$todate);
}


$Result="0";
$Result1="0";
$Result2="0";
$Result3="0";
$Result4="0";

$months="0";$res_100="100";$result_json = array();
while($get_array = mysql_fetch_array( $retrive_Array )){
	
	$exce_calorie_result= $get_array['exce_calorie'];
		
	
	
	if($type=="exce_calorie_result")
	{
		$months=$months."/".date('d-M',strtotime($get_array['date']));
		$Result=$Result."/".$exce_calorie_result;
		$Result2=$Result2."/".$res_100;
	}
	if($type=="exce_calorie_resultMonth")
	{
		$months=$months."/".date('d',strtotime($get_array['date']));
		$Result=$Result."/".$exce_calorie_result;
		$Result2=$Result2."/".$res_100;
	}

	if($type=="exce_calorie_resultYearly")
	{
		$months=$months."/".$get_array['AvgMY'];
		$Result=$Result."/".$exce_calorie_result;
		$Result2=$Result2."/".$res_100;
	}

	
	
 }
 

if($months!="0" && $Result!="0")
{
	$months=substr($months,2);
	$Result=substr($Result,2);

	echo $months."###".$Result;
}


else
{
	$fromdate=date('Y',strtotime($fromdate));
	

	if($rowCount==12)
	{
		$months=$fromdate;
		echo "Year - ".$months."###"."0";
		return;
	}

	$fromdate=date('Y-m-d',strtotime($fromdate));
	for($i=1;$i < ($rowCount+2);$i++)
	{								
		$Result=$Result."/0";

		if($type=="exce_calorie_result")
		{
			$months=$months."/".date('d-M',strtotime($fromdate));
			$fromdate = strtotime("+1 day", strtotime($fromdate));
			$Result2=$Result2."/".$res_100;
		}
		if($type=="exce_calorie_resultMonth")
		{
			$months=$months."/".date('d',strtotime($fromdate));
			$fromdate = strtotime("+1 day", strtotime($fromdate));
			$Result2=$Result2."/".$res_100;
		}
		if($type=="exce_calorie_resultYearly")
		{
			$months=$months."/".date('M-Y',strtotime($fromdate));
			$fromdate = strtotime("+365 day", strtotime($fromdate));
			$Result2=$Result2."/".$res_100;
		}

		//$fromdate = strtotime("+1 day", strtotime($fromdate));
		$fromdate = date('d-m-Y',$fromdate);

	}
	$months=substr($months,2);
	$Result=substr($Result,2);
	
	echo $months."###".$Result;
}
	
	

?>
