<?php include 'common.inc.php'?>
<?php
$user_id="0";
$page=1;$page_count=10;$newpagenumber="2";$retrive_Array=array();$get_array=array();$type="";
$fromdate=date('Y-m-d');$todate=date('Y-m-d');$rowCount="7";
/*Extra*/
$date_array=array();$fromdateEx_array=array();
$iStartAddDateLoop=1;
$iExistingAddDate=1;
/*Extra*/

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
	else if($rowCount> 10)
	{
		$rowCount=$rowCount-1;
	}
}
else
{
	$rowCount=1;
}


$fromdate=date('Y-m-d',strtotime($fromdate));
$todate=date('Y-m-d',strtotime($todate));


/*Extra*/
$dlTrakingCheckDate="";
$isAlreadyExisits="0";
if($type=="diastolicYearly" || $type=="systolicYearly")
{
	$fromdate_array=date('Y')."-01-01";
	$fromdate_array=date('M',strtotime($fromdate_array));
	$rowCount=$rowCount-1;
}
else
{
	$fromdate_array=date('d-M',strtotime($fromdate));
}



for($i=1;$i < ($rowCount+2);$i++)
{							
	
	
	$date_array[$i]=$fromdate_array;
	if($type=="diastolic" || $type=="systolic")
	{
		$fromdate_array = strtotime("+1 day", strtotime($fromdate_array));
		$fromdate_array = date('d-M',$fromdate_array);
	}
	if($type=="diastolicMonth" || $type=="systolicMonth")
	{
		$fromdate_array = strtotime("+1 day", strtotime($fromdate_array));
		$fromdate_array = date('d-M',$fromdate_array);
	}
	if($type=="diastolicYearly" || $type=="systolicYearly")
	{
		$fromdate_array = strtotime("+1 Month", strtotime($fromdate_array));
		$fromdate_array = date('M',$fromdate_array);
	}
	
}

 
/*Extra*/ 

if($type=="diastolicYearly" || $type=="systolicYearly")
{
	$retrive_Array=$get_retrive->Get_Blood_Pressure_Chart_Yearly($rowCount,$user_id,$fromdate,$todate);
}
else 
{
	$retrive_Array=$get_retrive->Get_Blood_Pressure_Chart($rowCount,$user_id,$fromdate,$todate);
}


$Result="0";
$Result1="0";
$months="0";
$line1_rs="0";
$line2_rs="0";
$line3_rs="0";
$line1="0";
$line2="0";
$line3="0";

$dob=GetValue("select dob as col from  tbl_users where user_id=".$_SESSION['UserID']."","col");
	$age=floor((time() - strtotime($dob))/31556926);
	
	
	
	if($type=="diastolic" ||  $type=="diastolicMonth" || $type=="diastolicYearly")
	{
		
            $query="SELECT * FROM " .Bp_Age_Masters. " WHERE min_age <= ".$age." and max_age>=".$age." order by min_age limit 1";
				//echo $query;
					 $result = mysql_query($query);
						if($result != "") {
							 $rowcount = mysql_num_rows($result);
								 if($rowcount > 0) {
									 while($row = mysql_fetch_assoc($result)) {
										 extract($row);
										 $line1=$row['dia_min'];
										 $line2=$row['dia_max'];
										 $line3=$row['dia_ave']; 
					}
				}
			}
	}


	if($type=="systolic" || $type=="systolicMonth" || $type=="systolicYearly")
	{
		
            $query="SELECT * FROM " .Bp_Age_Masters. " WHERE min_age <= ".$age." and max_age>=".$age." order by min_age limit 1";
				//echo $query;
					 $result = mysql_query($query);
						if($result != "") {
							 $rowcount = mysql_num_rows($result);
								 if($rowcount > 0) {
									 while($row = mysql_fetch_assoc($result)) {
										 extract($row);
										 $line1=$row['sys_min'];
										 $line2=$row['sys_max'];
										 $line3=$row['sys_ave']; 
					}
				}
			}
	}
	


while($get_array = mysql_fetch_array( $retrive_Array )){
	//$blood_pressure_systolic= explode("/",$get_array['blood_pressure_systolic']);

	$blood_pressure_systolic= $get_array['blood_pressure_systolic'];
	$blood_pressure_diatolic= $get_array['blood_pressure_diatolic'];
	
	
	$blood_pressure_systolic= number_format($blood_pressure_systolic,0);
	$blood_pressure_diatolic= number_format($blood_pressure_diatolic,0);
	
	/* age wise masters*/
	
	
		
	
		


	 
			/*Extra Dates*/
			for($iAddDate=$iStartAddDateLoop;$iAddDate < ($rowCount+2);$iAddDate++)
			{

				//Alert($date_array[$iAddDate]);
				//Alert($dlTrakingCheckDate);
				
				if($type=="diastolicYearly" || $type=="systolicYearly")
				{
					$dlTrakingCheckDate=date('M',strtotime($get_array['AvgMY']));
					
				}
				else
				{
					$dlTrakingCheckDate=date('d-M',strtotime($get_array['del_track_date']));		
				}	
				if($date_array[$iAddDate]==$dlTrakingCheckDate)
				{
					//Alert("Match");
					$iStartAddDateLoop=$iStartAddDateLoop+1;
					break;
				}
				else
				{

					//Alert($date_array[$iAddDate]);
					$iStartAddDateLoop=$iStartAddDateLoop+1;
					if($iExistingAddDate!="1")
					{
						if($date_array[$iAddDate]==$fromdateEx_array[$iExistingAddDate])
						{
							$iStartAddDateLoop=$iStartAddDateLoop+2;
							break;
						}
					}
					if($type=="diastolic")
					{
						$months=$months."/".date('d-M',strtotime($date_array[$iAddDate]));		
						$Result=$Result."/0";
					}
					else if ($type=="diastolicMonth")
					{
						$months=$months."/".date('d',strtotime($date_array[$iAddDate]));	
						$Result=$Result."/0";
					}	
					else if ($type=="diastolicYearly")
					{
						$months=$months."/".date('M',strtotime($date_array[$iAddDate]));	
						$Result=$Result."/0";
					}
					else if ($type=="systolic")
					{
						$months=$months."/".date('d-M',strtotime($date_array[$iAddDate]));	
						$Result1=$Result1."/0";
					}
					else if ($type=="systolicMonth")
					{
						$months=$months."/".date('d',strtotime($date_array[$iAddDate]));	
						$Result1=$Result1."/0";
					}
					else if ($type=="systolicYearly")
					{
						$months=$months."/".date('M',strtotime($date_array[$iAddDate]));	
						$Result1=$Result1."/0";
					}
					
					$line1_rs=$line1_rs."/".$line1;
					$line2_rs=$line2_rs."/".$line2;
					$line3_rs=$line3_rs."/".$line3;
					
				}
			}

		 /*Extra Dates*/

//Alert($months);
	
	if($type=="diastolic")
	{
		
		
		 

		$months=$months."/".date('d-M',strtotime($get_array['del_track_date']));		
		$Result=$Result."/".$blood_pressure_diatolic;
		$line1_rs=$line1_rs."/".$line1;
		$line2_rs=$line2_rs."/".$line2;
		$line3_rs=$line3_rs."/".$line3;
		
		$fromdateEx_array[$iExistingAddDate]=date('d-M',strtotime($get_array['del_track_date']));

		//$iStartAddDateLoop=$iStartAddDateLoop+1;

		//Alert("Start".$iStartAddDateLoop);
	}
	if($type=="diastolicMonth")
	{

		

		$months=$months."/".date('d',strtotime($get_array['del_track_date']));
		$Result=$Result."/".$blood_pressure_diatolic;
		$line1_rs=$line1_rs."/".$line1;
		$line2_rs=$line2_rs."/".$line2;
		$line3_rs=$line3_rs."/".$line3;

		$fromdateEx_array[$iExistingAddDate]=date('d',strtotime($get_array['del_track_date']));
	}

	if($type=="diastolicYearly")
	{
		$months=$months."/".date('M',strtotime($get_array['AvgMY']));
		$Result=$Result."/".$blood_pressure_diatolic;
		$line1_rs=$line1_rs."/".$line1;
		$line2_rs=$line2_rs."/".$line2;
		$line3_rs=$line3_rs."/".$line3;

		$fromdateEx_array[$iExistingAddDate]=date('M',strtotime($get_array['AvgMY']));
	}

	if($type=="systolic")
	{

		

		$months=$months."/".date('d-M',strtotime($get_array['del_track_date']));
		$Result1=$Result1."/".$blood_pressure_systolic;	
		$line1_rs=$line1_rs."/".$line1;
		$line2_rs=$line2_rs."/".$line2;
		$line3_rs=$line3_rs."/".$line3;

		$fromdateEx_array[$iExistingAddDate]=date('d-M',strtotime($get_array['del_track_date']));
	}
	
	
	
	
	if($type=="systolicMonth")
	{
		$months=$months."/".date('d',strtotime($get_array['del_track_date']));
		$Result1=$Result1."/".$blood_pressure_systolic;
		$line1_rs=$line1_rs."/".$line1;
		$line2_rs=$line2_rs."/".$line2;
		$line3_rs=$line3_rs."/".$line3;

		$fromdateEx_array[$iExistingAddDate]=date('d',strtotime($get_array['del_track_date']));
	}

	if($type=="systolicYearly")
	{
		$months=$months."/".date('M',strtotime($get_array['AvgMY']));
		$Result1=$Result1."/".$blood_pressure_systolic;	
		$line1_rs=$line1_rs."/".$line1;
		$line2_rs=$line2_rs."/".$line2;
		$line3_rs=$line3_rs."/".$line3;

		$fromdateEx_array[$iExistingAddDate]=date('M',strtotime($get_array['AvgMY']));
	}


	
 }

if($months!="0" && $Result!="0" || $months!="0" && $Result1!="0")
{

/*Extra*/


	if($iStartAddDateLoop < $rowCount+2)
	{
		for($iAddDate=$iStartAddDateLoop;$iAddDate < ($rowCount+2);$iAddDate++)
		{
			if($type=="diastolic")
			{
				$months=$months."/".date('d-M',strtotime($date_array[$iAddDate]));		
				$Result=$Result."/0";
			}
			else if ($type=="diastolicMonth")
			{
				$months=$months."/".date('d',strtotime($date_array[$iAddDate]));	
				$Result=$Result."/0";
			}
			else if ($type=="diastolicYearly")
			{
				$months=$months."/".date('M',strtotime($date_array[$iAddDate]));	
				$Result=$Result."/0";
			}
			else if ($type=="systolic")
			{
				$months=$months."/".date('d-M',strtotime($date_array[$iAddDate]));	
				$Result1=$Result1."/0";
			}
			else if ($type=="systolicMonth")
			{
				$months=$months."/".date('d',strtotime($date_array[$iAddDate]));	
				$Result1=$Result1."/0";
			}
			else if ($type=="systolicYearly")
			{
				$months=$months."/".date('M',strtotime($date_array[$iAddDate]));	
				$Result1=$Result1."/0";
			}
			 
			$line1_rs=$line1_rs."/".$line1;
			$line2_rs=$line2_rs."/".$line2;
			$line3_rs=$line3_rs."/".$line3;
		}
	}
}
/*Extra*/
if($months!="0" && $Result!="0")
{
	
	
	

	$months=substr($months,2);
	$Result=substr($Result,2);
	$line1_rs=substr($line1_rs,2);
	$line2_rs=substr($line2_rs,2);
	$line3_rs=substr($line3_rs,2);
	
	echo $months."###".$Result."###".$line1_rs."###".$line2_rs."###".$line3_rs;
}

else if($months!="0" && $Result1!="0")
{

	
	$months=substr($months,2);
	$Result1=substr($Result1,2);
	$line1_rs=substr($line1_rs,2);
	$line2_rs=substr($line2_rs,2);
	$line3_rs=substr($line3_rs,2);

	echo $months."###".$Result1."###".$line1_rs."###".$line2_rs."###".$line3_rs;
}
else
{

	if(isset($_GET['fromdate']))
	{
		$fromdate=$_GET['fromdate'];
	}
	if($type=="diastolicYearly" || $type=="systolicYearly")
	{
		$fromdate=date('Y')."-01-01";
		$fromdate=date('M',strtotime($fromdate));
		//$rowCount=$rowCount-1;
	}
	else
	{
		$fromdate=date('d-M',strtotime($fromdate));
	}
	
	
	$fromdate=date('Y-m-d',strtotime($fromdate));
	for($i=1;$i < ($rowCount+2);$i++)
	{								
		$Result=$Result."/0";
		if($type=="diastolic" || $type=="systolic")
		{
			$months=$months."/".date('d-M',strtotime($fromdate));
			$fromdate = strtotime("+1 day", strtotime($fromdate));
		}
		if($type=="diastolicMonth" || $type=="systolicMonth")
		{
			$months=$months."/".date('d',strtotime($fromdate));
			$fromdate = strtotime("+1 day", strtotime($fromdate));
		}
		if($type=="diastolicYearly" || $type=="systolicYearly")
		{
			$months=$months."/".date('M',strtotime($fromdate));
			$fromdate = strtotime("+1 Month", strtotime($fromdate));
		}
		//$fromdate = strtotime("+1 day", strtotime($fromdate));
		$fromdate = date('d-m-Y',$fromdate);
		$line1_rs=$line1_rs."/".$line1;
			$line2_rs=$line2_rs."/".$line2;
			$line3_rs=$line3_rs."/".$line3;
	}
	$months=substr($months,2);
	$Result=substr($Result,2);


	
		
		
		$line1_rs=substr($line1_rs,2);
	$line2_rs=substr($line2_rs,2);
	$line3_rs=substr($line3_rs,2);
	
	
	echo $months."###".$Result."###".$line1_rs."###".$line2_rs."###".$line3_rs;
}
	
	

?>
