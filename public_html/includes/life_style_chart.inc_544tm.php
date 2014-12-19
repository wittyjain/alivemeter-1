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

if($type=="spirit_resultYearly" || $type=="beer_resultYearly"  || $type=="cigarette_resultYearly" || $type=="sleep_resultYearly")
{
	$retrive_Array=$get_retrive->Get_Life_Pressure_Chart_Yearly($rowCount,$user_id,$fromdate,$todate);
}
else 
{
	$retrive_Array=$get_retrive->Get_Life_Pressure_Chart($rowCount,$user_id,$fromdate,$todate);
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
$line1="0";
$line2="0";
$line3="0";
$line4="0";
$line5="0";
$line6="0";

$months="0";$res_100="100";
while($get_array = mysql_fetch_array( $retrive_Array )){
	//$blood_pressure_systolic= explode("/",$get_array['blood_pressure_systolic']);

	$spirit_result= $get_array['spirit'];
	$beer_result= $get_array['beer'];
	$ldl_blood_result= $get_array['cigarette'];
	$sleep_blood_sugar_result= $get_array['life_style_sleep'];
	 

	
	///Alert ($sleep_blood_sugar_result);
		
	$spirit_goal=GetValue("SELECT spirit_goal as col FROM tbl_life_style where user_id=".$user_id." order by life_style_id desc limit 1", "col");
	$beer_goal=GetValue("SELECT beer_goal as col FROM tbl_life_style where user_id=".$user_id." order by life_style_id desc limit 1", "col");
	$cigarette_goal=GetValue("SELECT cigarette_goal as col FROM tbl_life_style where user_id=".$user_id." order by life_style_id desc limit 1", "col");
	$life_style_sleep_goal=GetValue("SELECT life_style_sleep_goal as col FROM tbl_life_style where user_id=".$user_id." order by life_style_id desc limit 1", "col");
	
	
	
				
	
	if($type=="spirit_result")
	{
		$line1=$spirit_goal;
		$months=$months."/".date('d-M',strtotime($get_array['life_style_date']));
		$Result=$Result."/".$spirit_result;
		$line1_rs=$line1_rs."/".$line1;
		$line2_rs=$line2_rs."/".$line2;
		$line3_rs=$line3_rs."/".$line3;
		$line4_rs=$line4_rs."/".$line4;
		$line5_rs=$line5_rs."/".$line5;
		$line6_rs=$line6_rs."/".$line6;
	}
	
	if($type=="spirit_resultMonth")
	{
		$line1=$spirit_goal;
		$months=$months."/".date('d',strtotime($get_array['life_style_date']));
		$Result=$Result."/".$spirit_result;
		$line1_rs=$line1_rs."/".$line1;
		
	}

	if($type=="spirit_resultYearly")
	{
		$line1=$spirit_goal;
		$months=$months."/".$get_array['AvgMY'];
		$Result=$Result."/".$spirit_result;
		$line1_rs=$line1_rs."/".$line1;
		
	}

	if($type=="beer_result")
	{
		$line1=$beer_goal;
		$months=$months."/".date('d-M',strtotime($get_array['life_style_date']));
		$Result1=$Result1."/".$beer_result;	
		$line1_rs=$line1_rs."/".$line1;
		
	}
	if($type=="beer_resultMonth")
	{
		$line1=$beer_goal;
		$months=$months."/".date('d',strtotime($get_array['life_style_date']));
		$Result1=$Result1."/".$beer_result;	
		$line1_rs=$line1_rs."/".$line1;
		
	}

	if($type=="beer_resultYearly")
	{
		$line1=$beer_goal;
		$months=$months."/".$get_array['AvgMY'];
		$Result1=$Result1."/".$beer_result;
		$line1_rs=$line1_rs."/".$line1;
		
	}
	

	if($type=="cigarette_result")
	{
		$line1=$cigarette_goal;
		$months=$months."/".date('d-M',strtotime($get_array['life_style_date']));
		$Result3=$Result3."/".$ldl_blood_result;	
		$line1_rs=$line1_rs."/".$line1;
	
	}
	if($type=="cigarette_resultMonth")
	{
		$line1=$cigarette_goal;
		$months=$months."/".date('d',strtotime($get_array['life_style_date']));
		$Result3=$Result3."/".$ldl_blood_result;	
		$line1_rs=$line1_rs."/".$line1;
		
	}

	if($type=="cigarette_resultYearly")
	{
		$line1=$cigarette_goal;
		$months=$months."/".$get_array['AvgMY'];
		$Result3=$Result3."/".$ldl_blood_result;
		$line1_rs=$line1_rs."/".$line1;
		
	}



	if($type=="sleep_result")
	{
		$line1=$life_style_sleep_goal;
		$months=$months."/".date('d-M',strtotime($get_array['life_style_date']));
		$Result4=$Result4."/".$sleep_blood_sugar_result;	
		$line1_rs=$line1_rs."/".$line1;
		
	}
	if($type=="sleep_resultMonth")
	{
		$line1=$life_style_sleep_goal;
		$months=$months."/".date('d',strtotime($get_array['life_style_date']));
		$Result4=$Result4."/".$sleep_blood_sugar_result;	
		$line1_rs=$line1_rs."/".$line1;
		
	}

	if($type=="sleep_resultYearly")
	{
		$line1=$life_style_sleep_goal;
		$months=$months."/".$get_array['AvgMY'];
		$Result4=$Result4."/".$sleep_blood_sugar_result;
		$line1_rs=$line1_rs."/".$line1;
		
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

		if($type=="spirit_result" || $type=="beer_result" || $type=="cigarette_result" || $type=="sleep_result")
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
		if($type=="spirit_resultMonth" || $type=="beer_resultMonth" || $type=="cigarette_resultMonth" || $type=="sleep_resultMonth")
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
		if($type=="spirit_resultYearly" || $type=="beer_resultYearly" || $type=="cigarette_resultYearly" || $type=="sleep_resultYearly")
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
		//$fromdate = date('d-m-Y',$fromdate);
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
