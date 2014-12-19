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

if($type=="triglyceride_blood_sugar_resultYearly" || $type=="hdl_resultYearly"  || $type=="ldl_resultYearly" || $type=="cholesterol_resultYearly")
{
	$retrive_Array=$get_retrive->Get_Lipd_Pressure_Chart_Yearly($rowCount,$user_id,$fromdate,$todate);
}
else 
{
	$retrive_Array=$get_retrive->Get_Lipd_Pressure_Chart($rowCount,$user_id,$fromdate,$todate);
}


$Result="0";
$Result1="0";
$Result3="0";
$Result4="0";
$line1_rs="0";
$line2_rs="0";
$line3_rs="0";
$line4_rs="0";
$line5_rs="0";
$line6_rs="0";
$line1="100";
$line2="150";
$line3="200";
$line4="250";
$line5="300";
$line6="350";

$months="0";$res_100="100";
while($get_array = mysql_fetch_array( $retrive_Array )){
	//$blood_pressure_systolic= explode("/",$get_array['blood_pressure_systolic']);

	$triglyceride_blood_sugar_result= $get_array['triglyceride_blood_sugar_result'];
	$hdl_result= $get_array['hdl_result'];
	$ldl_blood_result= $get_array['ldl_result'];
	$cholesterol_blood_sugar_result= $get_array['cholesterol_result'];

	
		$line1="100";
		$line2="150";
		$line3="200";
		$line4="250";
		$line5="300";
		$line6="350";
		
	
	
	if($type=="triglyceride_blood_sugar_result")
	{
		
		$line1="149";
		$line2="151";
		$line3="199";
		$line4="500";
		$line5="300";
		$line6="350";

		$months=$months."/".date('d-M',strtotime($get_array['triglyceride_blood_sugar_date']));
		$Result=$Result."/".$triglyceride_blood_sugar_result;
		$line1_rs=$line1_rs."/".$line1;
		$line2_rs=$line2_rs."/".$line2;
		$line3_rs=$line3_rs."/".$line3;
		$line4_rs=$line4_rs."/".$line4;
		$line5_rs=$line5_rs."/".$line5;
		$line6_rs=$line6_rs."/".$line6;
	}
	if($type=="triglyceride_blood_sugar_resultMonth")
	{

		$line1="99";
		$line2="130";
		$line3="159";
		$line4="199";
		$line5="300";
		$line6="350";

		$months=$months."/".date('d',strtotime($get_array['triglyceride_blood_sugar_date']));
		$Result=$Result."/".$triglyceride_blood_sugar_result;
		$line1_rs=$line1_rs."/".$line1;
		$line2_rs=$line2_rs."/".$line2;
		$line3_rs=$line3_rs."/".$line3;
		$line4_rs=$line4_rs."/".$line4;
		$line5_rs=$line5_rs."/".$line5;
		$line6_rs=$line6_rs."/".$line6;
	}

	if($type=="triglyceride_blood_sugar_resultYearly")
	{

		$line1="99";
		$line2="130";
		$line3="159";
		$line4="199";
		$line5="300";
		$line6="350";

		$months=$months."/".$get_array['AvgMY'];
		$Result=$Result."/".$triglyceride_blood_sugar_result;
		$line1_rs=$line1_rs."/".$line1;
		$line2_rs=$line2_rs."/".$line2;
		$line3_rs=$line3_rs."/".$line3;
		$line4_rs=$line4_rs."/".$line4;
		$line5_rs=$line5_rs."/".$line5;
		$line6_rs=$line6_rs."/".$line6;
	}

	if($type=="hdl_result")
	{


		$line1="40";
		$line2="41";
		$line3="59";
		$line4="60";
		$line5="300";
		$line6="350";

		$months=$months."/".date('d-M',strtotime($get_array['triglyceride_blood_sugar_date']));
		$Result1=$Result1."/".$hdl_result;	
		$line1_rs=$line1_rs."/".$line1;
		$line2_rs=$line2_rs."/".$line2;
		$line3_rs=$line3_rs."/".$line3;
		$line4_rs=$line4_rs."/".$line4;
		$line5_rs=$line5_rs."/".$line5;
		$line6_rs=$line6_rs."/".$line6;
	}
	if($type=="hdl_resultMonth")
	{
		$line1="40";
		$line2="41";
		$line3="59";
		$line4="60";
		$line5="300";
		$line6="350";

		$months=$months."/".date('d',strtotime($get_array['triglyceride_blood_sugar_date']));
		$Result1=$Result1."/".$hdl_result;	
		$line1_rs=$line1_rs."/".$line1;
		$line2_rs=$line2_rs."/".$line2;
		$line3_rs=$line3_rs."/".$line3;
		$line4_rs=$line4_rs."/".$line4;
		$line5_rs=$line5_rs."/".$line5;
		$line6_rs=$line6_rs."/".$line6;
	}

	if($type=="hdl_resultYearly")
	{

		$line1="40";
		$line2="41";
		$line3="59";
		$line4="60";
		$line5="300";
		$line6="350";

		$months=$months."/".$get_array['AvgMY'];
		$Result1=$Result1."/".$hdl_result;
		$line1_rs=$line1_rs."/".$line1;
		$line2_rs=$line2_rs."/".$line2;
		$line3_rs=$line3_rs."/".$line3;
		$line4_rs=$line4_rs."/".$line4;
		$line5_rs=$line5_rs."/".$line5;
		$line6_rs=$line6_rs."/".$line6;
	}
	

	if($type=="ldl_result")
	{

		$line1="99";
		$line2="130";
		$line3="159";
		$line4="190";
		$line5="300";
		$line6="350";
		$months=$months."/".date('d-M',strtotime($get_array['triglyceride_blood_sugar_date']));
		$Result3=$Result3."/".$ldl_blood_result;	
		$line1_rs=$line1_rs."/".$line1;
		$line2_rs=$line2_rs."/".$line2;
		$line3_rs=$line3_rs."/".$line3;
		$line4_rs=$line4_rs."/".$line4;
		$line5_rs=$line5_rs."/".$line5;
		$line6_rs=$line6_rs."/".$line6;
	}
	if($type=="ldl_resultMonth")
	{

		$line1="199";
		$line2="200";
		$line3="239";
		$line4="240";
		$line5="300";
		$line6="350";
		$months=$months."/".date('d',strtotime($get_array['triglyceride_blood_sugar_date']));
		$Result3=$Result3."/".$ldl_blood_result;	
		$line1_rs=$line1_rs."/".$line1;
		$line2_rs=$line2_rs."/".$line2;
		$line3_rs=$line3_rs."/".$line3;
		$line4_rs=$line4_rs."/".$line4;
		$line5_rs=$line5_rs."/".$line5;
		$line6_rs=$line6_rs."/".$line6;
	}

	if($type=="ldl_resultYearly")
	{

		$line1="199";
		$line2="200";
		$line3="239";
		$line4="240";
		$line5="300";
		$line6="350";
		$months=$months."/".$get_array['AvgMY'];
		$Result3=$Result3."/".$ldl_blood_result;
		$line1_rs=$line1_rs."/".$line1;
		$line2_rs=$line2_rs."/".$line2;
		$line3_rs=$line3_rs."/".$line3;
		$line4_rs=$line4_rs."/".$line4;
		$line5_rs=$line5_rs."/".$line5;
		$line6_rs=$line6_rs."/".$line6;
	}



	if($type=="cholesterol_result")
	{
		$line1="199";
		$line2="200";
		$line3="239";
		$line4="240";
		$line5="300";
		$line6="350";


		$months=$months."/".date('d-M',strtotime($get_array['triglyceride_blood_sugar_date']));
		$Result4=$Result4."/".$cholesterol_blood_sugar_result;	
		$line1_rs=$line1_rs."/".$line1;
		$line2_rs=$line2_rs."/".$line2;
		$line3_rs=$line3_rs."/".$line3;
		$line4_rs=$line4_rs."/".$line4;
		$line5_rs=$line5_rs."/".$line5;
		$line6_rs=$line6_rs."/".$line6;
	}
	if($type=="cholesterol_resultMonth")
	{

		$line1="149";
		$line2="150";
		$line3="199";
		$line4="500";
		$line5="300";
		$line6="350";

		$months=$months."/".date('d',strtotime($get_array['triglyceride_blood_sugar_date']));
		$Result4=$Result4."/".$cholesterol_blood_sugar_result;	
		$line1_rs=$line1_rs."/".$line1;
		$line2_rs=$line2_rs."/".$line2;
		$line3_rs=$line3_rs."/".$line3;
		$line4_rs=$line4_rs."/".$line4;
		$line5_rs=$line5_rs."/".$line5;
		$line6_rs=$line6_rs."/".$line6;
	}

	if($type=="cholesterol_resultYearly")
	{

		$line1="149";
		$line2="150";
		$line3="199";
		$line4="500";
		$line5="300";
		$line6="350";
		$months=$months."/".$get_array['AvgMY'];
		$Result4=$Result4."/".$cholesterol_blood_sugar_result;
		$line1_rs=$line1_rs."/".$line1;
		$line2_rs=$line2_rs."/".$line2;
		$line3_rs=$line3_rs."/".$line3;
		$line4_rs=$line4_rs."/".$line4;
		$line5_rs=$line5_rs."/".$line5;
		$line6_rs=$line6_rs."/".$line6;
	}
	
 }
 

if($months!="0" && $Result!="0")
{
	$months=substr($months,2);
	$Result=substr($Result,2);
	$line1_rs=substr($line1_rs,2);
	$line2_rs=substr($line2_rs,2);
	$line3_rs=substr($line3_rs,2);
	$line4_rs=substr($line4_rs,2);
	$line5_rs=substr($line5_rs,2);
	$line6_rs=substr($line6_rs,2);
	echo $months."###".$Result."###".$line1_rs."###".$line2_rs."###".$line3_rs."###".$line4_rs."###".$line5_rs."###".$line6_rs;
}

else if($months!="0" && $Result1!="0")
{
	$months=substr($months,2);
	$Result1=substr($Result1,2);
	$line1_rs=substr($line1_rs,2);
	$line2_rs=substr($line2_rs,2);
	$line3_rs=substr($line3_rs,2);
	$line4_rs=substr($line4_rs,2);
	$line5_rs=substr($line5_rs,2);
	$line6_rs=substr($line6_rs,2);
	echo $months."###".$Result1."###".$line1_rs."###".$line2_rs."###".$line3_rs."###".$line4_rs."###".$line5_rs."###".$line6_rs;
}
else if($months!="0" && $Result3!="0")
{
	$months=substr($months,2);
	$Result3=substr($Result3,2);
	$line1_rs=substr($line1_rs,2);
	$line2_rs=substr($line2_rs,2);
	$line3_rs=substr($line3_rs,2);
	$line4_rs=substr($line4_rs,2);
	$line5_rs=substr($line5_rs,2);
	$line6_rs=substr($line6_rs,2);
	echo $months."###".$Result3."###".$line1_rs."###".$line2_rs."###".$line3_rs."###".$line4_rs."###".$line5_rs."###".$line6_rs;
}
else if($months!="0" && $Result4!="0")
{
	$months=substr($months,2);
	$Result4=substr($Result4,2);
	$line1_rs=substr($line1_rs,2);
	$line2_rs=substr($line2_rs,2);
	$line3_rs=substr($line3_rs,2);
	$line4_rs=substr($line4_rs,2);
	$line5_rs=substr($line5_rs,2);
	$line6_rs=substr($line6_rs,2);
	echo $months."###".$Result4."###".$line1_rs."###".$line2_rs."###".$line3_rs."###".$line4_rs."###".$line5_rs."###".$line6_rs;
}
else
{
	$fromdate=date('Y',strtotime($fromdate));
	

	if($rowCount==12)
	{
		$months=$fromdate;
		$line1_rs=$line1_rs."/".$line1;
		$line2_rs=$line2_rs."/".$line2;
		$line3_rs=$line3_rs."/".$line3;
		$line4_rs=$line4_rs."/".$line4;
		$line5_rs=$line5_rs."/".$line5;
		$line6_rs=$line6_rs."/".$line6;
		$line1_rs=substr($line1_rs,2);
		$line2_rs=substr($line2_rs,2);
		$line3_rs=substr($line3_rs,2);
		$line4_rs=substr($line4_rs,2);
		$line5_rs=substr($line5_rs,2);
		$line6_rs=substr($line6_rs,2);
		echo "Year - ".$months."###"."0###".$line1_rs."###".$line2_rs."###".$line3_rs."###".$line4_rs."###".$line5_rs."###".$line6_rs;
		return;
	}

	$fromdate=date('Y-m-d',strtotime($fromdate));
	for($i=1;$i < ($rowCount+2);$i++)
	{								
		$Result=$Result."/0";

		if($type=="triglyceride_blood_sugar_result" || $type=="hdl_result" || $type=="ldl_result" || $type=="cholesterol_result")
		{
			$months=$months."/".date('d-M',strtotime($fromdate));
			$fromdate = strtotime("+1 day", strtotime($fromdate));
			$line1_rs=$line1_rs."/".$line1;
			$line2_rs=$line2_rs."/".$line2;
			$line3_rs=$line3_rs."/".$line3;
			$line4_rs=$line4_rs."/".$line4;
			$line5_rs=$line5_rs."/".$line5;
			$line6_rs=$line6_rs."/".$line6;
		}
		if($type=="triglyceride_blood_sugar_resultMonth" || $type=="hdl_resultMonth" || $type=="ldl_resultMonth" || $type=="cholesterol_resultMonth")
		{
			$months=$months."/".date('d',strtotime($fromdate));
			$fromdate = strtotime("+1 day", strtotime($fromdate));
			$line1_rs=$line1_rs."/".$line1;
			$line2_rs=$line2_rs."/".$line2;
			$line3_rs=$line3_rs."/".$line3;
			$line4_rs=$line4_rs."/".$line4;
			$line5_rs=$line5_rs."/".$line5;
			$line6_rs=$line6_rs."/".$line6;
		}
		if($type=="triglyceride_blood_sugar_resultYearly" || $type=="hdl_resultYearly" || $type=="ldl_resultYearly" || $type=="cholesterol_resultYearly")
		{
			$months=$months."/".date('M-Y',strtotime($fromdate));
			$fromdate = strtotime("+365 day", strtotime($fromdate));
			$line1_rs=$line1_rs."/".$line1;
			$line2_rs=$line2_rs."/".$line2;
			$line3_rs=$line3_rs."/".$line3;
			$line4_rs=$line4_rs."/".$line4;
			$line5_rs=$line5_rs."/".$line5;
			$line6_rs=$line6_rs."/".$line6;
		}

		//$fromdate = strtotime("+1 day", strtotime($fromdate));
		$fromdate = date('d-m-Y',$fromdate);

	}
	$months=substr($months,2);
	$Result=substr($Result,2);
	$line1_rs=substr($line1_rs,2);
	$line2_rs=substr($line2_rs,2);
	$line3_rs=substr($line3_rs,2);
	$line4_rs=substr($line4_rs,2);
	$line5_rs=substr($line5_rs,2);
	$line6_rs=substr($line6_rs,2);
	echo $months."###".$Result."###".$line1_rs."###".$line2_rs."###".$line3_rs."###".$line4_rs."###".$line5_rs."###".$line6_rs;
}
	
	

?>
