<?php include 'common.inc.php'?>
<?php
	$month="0";$year="0"; $diet_count="0";
	if(isset($_GET['month_1']))
	{
		$month=$_GET['month_1'];
	}
	if(isset($_GET['year_1']))
	{
		$year=$_GET['year_1'];
	}
    $date=date($year.'/'.$month.'/01');
    $timestamp = strtotime($date);
	$MonthName = date('F', $timestamp);
	$MonthNo= date('m', $timestamp);
	$YearName = date('Y', $timestamp);
	$Day = date('d', $timestamp);
	$DayName = date('D', $timestamp);
	$bg = "#fff";
	$color = "#000000";
	$strMonthName=$MonthName;
	$daysinmonth=cal_days_in_month(01,$MonthNo,$YearName);
	$daysinmonth=$daysinmonth+1;
	
	$user_id="0";
	if(isset($_SESSION['UserMDID']))
	{
		$user_id=$_SESSION['UserMDID'];
	}
	else if (isset($_GET['md_id']))
	{
		$user_id=$_GET['md_id'];
	}
	
			
		
	 
?>
<div class="dvWrapper" >

  <div  style="background-color:#FFFFFF; float:left">
	<div class="DvFloat" style="padding: 20px; border-bottom: solid 0px #c5c5c5;">
	  <div class="DvFloat">
		<div style="width: 22px; float: left; height: 22px;">
			<a style="cursor:pointer;" onclick="javascript:Retrive_Calender_Months('Prev','MD')">
				<img src="<?php echo $strHostName?>/images/prev_md_paging.png" />
			</a>
		</div>

		<div style="width: 904px; float: left; text-align: center; font-size: 28px;font-family: 'myriad_web_proregular'; font-weight: bold;" class="f_grey"><?php echo $strMonthName . " - " . $YearName ?></div>
		
		<div style="width: 22px; float: left; height: 22px;">
			<a style="cursor:pointer;" onclick="javascript:Retrive_Calender_Months('Next','MD')">
				<img src="<?php echo $strHostName?>/images/next_md_paging.png" />
			</a>
		</div>
	  </div>
	</div>
  </div>
  
  <div style="float:left; width:966px; height:auto; border:solid 1px #bababa">
	<div class="dvFloat">
	<?php for($i=1;$i<2;$i++){?>
		 <?php for($iDay=1;$iDay < 8;$iDay++){?>
		 <?php $date = $YearName."/".$MonthNo."/".$iDay?>
		  <div class="Calender_box_Head"><?php  echo date('l', strtotime($date));?> </div>
		  <?php }?>
          
	<?php } ?>
   
	</div>
	 <div class="dvFloat">
     
    
	<?php for($i=1;$i<$daysinmonth;$i++){?>
   <?php 
   		$daily_date=$YearName."-".$MonthNo."-".$i;
   ?>
   
   <?php
   	//	echo "SELECT count(*) as col FROM md_appointment where md_id=".$user_id." and app_date='$daily_date' and other_app='Video_Query' and patient_id in (select user_id from tbl_compose where accept=1";
   ?>
  
		<a href="<?php echo $strHostName;?>/page_doctor.php?dir=calendar/md_appointments&alived=<?php echo $i;?>&alivem=<?php echo $MonthNo;?>&alivey=<?php echo $YearName;?>&UserMDID=<?php echo $user_id;?>">
			  <div class="Calender_box1">
				<div class="dvgreen_calender"><?php echo $i?></div>
				<br>
				<table cellpadding="0" cellspacing="0" style="width:100%;line-height:17px;">
				  <tr>
					 
						
							<?php
							$video_query_count = GetValue("SELECT count(*) as col FROM  ".Md_Appoint." where md_id=".$user_id." and app_date='$daily_date' and other_app='Video_Query'", "col"); 
  						
						
						$accepted_query=GetValue("SELECT count(*) as col FROM md_appointment where md_id=".$user_id." and app_date='$daily_date' and other_app='Video_Query' and patient_id in (select user_id from tbl_compose where accept=1) and compose_id in (select mail_id from tbl_compose where accept=1)", "col");
						
						
						$rejected_query=GetValue("SELECT count(*) as col FROM md_appointment where md_id=".$user_id." and app_date='$daily_date' and other_app='Video_Query' and patient_id in (select user_id from tbl_compose where accept=0) and compose_id in (select mail_id from tbl_compose where accept=0)", "col");
						
						
						$pending_query=GetValue("SELECT count(*) as col FROM md_appointment where md_id=".$user_id." and app_date='$daily_date' and other_app='Video_Query' and patient_id in (select user_id from tbl_compose where accept=2) and compose_id in (select mail_id from tbl_compose where accept=2)", "col");
					
					
						
						
						
						//	echo "SELECT count(*) as col FROM  ".Md_Appoint." where md_id=".$user_id." and app_date='$daily_date' and other_app='Video_Query";
  			
							if($video_query_count=="" || $video_query_count=="0")
							{
								echo "<td class='Calender_left' style='padding-top:15px;height:30px;'>Video Query</td><td class='Calender_right'>0</td>";
							}
							else
							{
								echo "<td class='Calender_left' style='padding-top:15px;background:#989125;height:55px;color:white; font-size:11px; width:100px;'>Video Query<br><br>
								<div style='float:left; text-align:left; font-size:11px; padding-top:15px; width:100%;'>Accepted : ".$accepted_query." </div>
								<div style='float:left; text-align:left; font-size:11px; padding-top:15px;'>Rejected : ".$rejected_query." </div>
								<div style='float:left; text-align:left; font-size:11px; padding-top:15px;'>Pending : ".$pending_query." </div>
								
								</td>
								<td class='Calender_right' style='background:#989125;color:white; font-size:11px;'>".$video_query_count."<br>
								
								</td>
								
									
								
								";
							}
							?>
						
						 
				  </tr>
                  
				   <tr>
					
					
							<?php
							$Other_App_query_count = GetValue("SELECT count(*) as col FROM  ".Md_Appoint." where md_id=".$user_id." and app_date='$daily_date' and other_app='Other_App' ", "col"); 
							
						//	echo "SELECT count(*) as col FROM  ".Md_Appoint." where md_id=".$user_id." and app_date='$daily_date' and other_app='Other_App";
							
							
							if($Other_App_query_count=="" || $Other_App_query_count=="0")
							{
								echo "<td class='Calender_left' style='height:32px;'>Other Apt</td><td class='Calender_right'>0</td>";
							}
							else
							{
								echo "<td class='Calender_left' style='background:#545481;height:32px;color:white;'>Other Apt</td><td class='Calender_right' style='background:#545481;color:white;'>".$Other_App_query_count."</td>";
							}
							?>
						
						
				  </tr>
				</table>
			  </div>
		</a>
	
	  
   
   <?php } ?>
	</div>
  </div>
</div>