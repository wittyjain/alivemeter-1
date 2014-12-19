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
}
else
{
	$rowCount=1;
}



$fromdate=date('Y-m-d',strtotime($fromdate));
$todate=date('Y-m-d',strtotime($todate));
	 
$retrive_Array=$get_retrive->Get_Blood_Pressure_Chart($rowCount,$user_id,$fromdate,$todate);


$Result="0";
$Result1="0";
$months="0";
while($get_array = mysql_fetch_array( $retrive_Array )){
	$blood_pressure_systolic= explode("/",$get_array['blood_pressure_systolic']);
	if(isset($blood_pressure_systolic['0']))
	{
		$Result=$Result."/".$blood_pressure_systolic['0'];
		
		
	}
	if(isset($blood_pressure_systolic['1']))
	{
		$Result1=$Result1."/".$blood_pressure_systolic['1'];
	}

	$months=$months."/".date('d-M',strtotime($get_array['del_track_date']));

	
 }
 
if($type=="diastolic")
{
	if($months!="0" && $Result!="0")
	{
		$months=substr($months,2);
		$Result=substr($Result,2);
		echo $months."###".$Result;
	}
	else
	{
		$fromdate=date('Y-m-d',strtotime($fromdate));
		
		for($i=1;$i < ($rowCount+2);$i++)
		{								
			$Result=$Result."/0";
			$months=$months."/".date('d-M',strtotime($fromdate));
			$fromdate = strtotime("+1 day", strtotime($fromdate));
			$fromdate = date('d-m-Y',$fromdate);

		}
		$months=substr($months,2);
		$Result=substr($Result,2);
		echo $months."###".$Result;
	}
	
	
}
?>
