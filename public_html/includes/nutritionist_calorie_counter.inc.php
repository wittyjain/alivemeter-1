<script type="text/javascript" src="<?php echo $strHostName;?>/js/PopUp.js"></script>
<script type="text/javascript">
function Get_Nut_CC_CommentDate(date1)
{
	//alert ("dfdf");
	document.getElementById("txtComDate").value=date1;
	
}

function Get_Nut_CC_CommentDate1(date1, cmt1, cmt2, cmt3, cmt4)
{
	//alert ("dfdf");
	document.getElementById("txtComDate").innerHTML=date1;
	document.getElementById("dvCom1").innerHTML=cmt1;
	document.getElementById("dvCom2").innerHTML=cmt2;
	document.getElementById("dvCom3").innerHTML=cmt3;
	document.getElementById("dvCom4").innerHTML=cmt4;
}

</script>
<?php
$compose_id="0"; $parent_id="0";
if(isset($_GET['compose_id'])){
	$compose_id=$_GET['compose_id'];
}

if(isset($_GET['parent_id'])){
	$parent_id=$_GET['parent_id'];
}
?>
<div class="DvFloat" style="border: solid 0px #0066CC; margin-top:-20px;">
	<ul id="countrytabs_sub" class="shadetabs2">
		<li><a href="#" rel="country1_sub" class="selected">View Comments</a></li>
		<li><a href="#" rel="country2_sub">Add Comments</a></li>
	</ul>
</div>
<div style="border: 0px solid gray; width: 965px; float: left; margin-bottom: 1em; padding: 10px 0px; background-color: #FFFFFF; color: #666666;">
 <div id="country1_sub" class="tabcontent">
	  <div class="DvFloat">
		<table width="100%" border="0" cellpadding="3" cellspacing="3">
		  <tr>
			<td class="gray_bg f_grey" style="width: 78px; font-size: 12px; padding: 8px; font-weight: bold;">Date</td>
			<td class="gray_bg f_grey" style="width: 120px; font-size: 12px; padding: 8px; font-weight: bold;">Calorie Burned</td>
			<td class="gray_bg f_grey" style="width: 120px; font-size: 12px; padding: 8px; font-weight: bold;">Calorie Consumed</td>
			<td class="gray_bg f_grey" style="width: 120px; font-size: 12px; padding: 8px; font-weight: bold;">Physical Activity</td>
			<td class="gray_bg f_grey" style="width: 75px; font-size: 12px; padding: 8px; font-weight: bold;"> Weight</td>
			<td class="gray_bg f_grey" style="width: 75px; font-size: 12px; padding: 8px; font-weight: bold;">Arms</td>
			<td class="gray_bg f_grey" style="width: 75px; font-size: 12px; padding: 8px; font-weight: bold;">Hips</td>
			<td class="gray_bg f_grey" style="width: 75px; font-size: 12px; padding: 8px; font-weight: bold;">Thigh</td>
            <td class="gray_bg f_grey" style="width: 75px; font-size: 12px; padding: 8px; font-weight: bold;">Goal Weight</td>
			<td class="gray_bg f_grey" style="width: 75px; font-size: 12px; padding: 8px; font-weight: bold;">Comments</td>
		  </tr>
		  <?php 
			
			if(isset($_SESSION['UserNutID'])){
				$nutritionist_id=$_SESSION['UserNutID'];
			}
			
			
			if(isset($_GET['patient_id'])){
				$patient_id=$converter->decode($_GET['patient_id']);
				/// for setting sesstion for user in iframe
				$_SESSION['UserID']=$patient_id;
			}
			else
			{
				$patient_id=0;
			}
			$j=1;

			$retrive_Array=array();$get_array=array();
			$retrive_Array_1=array();$get_array_1=array();
			$strDate='';


			$retrive_Array=$get_retrive->GetCalCounter_Nut($patient_id);

			?>

			<?php  while($get_array = mysql_fetch_array( $retrive_Array )){?>
			
			<?php
				
				$retrive_Array_1=$get_retrive->GetCalCounter_Date($patient_id,$get_array['date']);
				$curr_wgt="0";$current_waist="0";$current_hips="0";$current_arm="0"; $goal_wgt="0"; $date="";
				$cal_consume="0";$cal_burn="0";$cal_physical="0"; $curr_wgt_date=date('d-M-Y');
				while($get_array_1 = mysql_fetch_array( $retrive_Array_1 )){
					
					
					$recoreddate=date('Y-m-d', strtotime($get_array['date']));
					
					//$query = "SELECT * FROM tbl_calorie_det where isdeleted=0 and weight_date='".$recoreddate."'  limit 1";
					$query = "SELECT * FROM tbl_calorie_det where isdeleted=0 and created_date='".$recoreddate."'and user_id=".$patient_id."  limit 1";
					//echo $query;
					$result = mysql_query($query);
					if($result != "") {
					$rowcount = mysql_num_rows($result);
						if($rowcount > 0) {	
							while($row = mysql_fetch_assoc($result)) {

								$current_hips=$row['current_hips'];
								$current_arm=$row['current_arm'];
								$current_waist=$row['current_waist'];
								$curr_wgt=$row['curr_wgt'];
								$curr_wgt_date=date('d-M-Y', strtotime($row['weight_date']));
								$curr_arm_date=date('d-M-Y', strtotime($row['arms_date']));
								$curr_waist_date=date('d-M-Y', strtotime($row['waist_date']));
								$curr_hips_date=date('d-M-Y', strtotime($row['hips_date']));
							}
						}
						else
						{
							$query = "SELECT * FROM tbl_calorie_det where isdeleted=0 and created_date < '".$recoreddate."' and user_id=".$patient_id."  order by id desc limit 1";
							//echo $query;
							$result = mysql_query($query);
							if($result != "") {
							$rowcount = mysql_num_rows($result);
								if($rowcount > 0) {	
									while($row = mysql_fetch_assoc($result)) {
		
										$current_hips=$row['current_hips'];
										$current_arm=$row['current_arm'];
										$current_waist=$row['current_waist'];
										$curr_wgt=$row['curr_wgt'];
										
										$curr_wgt_date=date('d-M-Y', strtotime($row['weight_date']));
										$curr_arm_date=date('d-M-Y', strtotime($row['arms_date']));
										$curr_waist_date=date('d-M-Y', strtotime($row['waist_date']));
										$curr_hips_date=date('d-M-Y', strtotime($row['hips_date']));
									}
								}
							}
						}
					}
					
					
					if($curr_wgt=="0" || $curr_wgt=="")
					{
						$curr_wgt_date="No Date";
					}
					
					
					if($current_arm=="0" || $current_arm=="")
					{
						$curr_wgt_date="No Date";
					}
					
					
					if($current_hips=="0" || $current_hips=="")
					{
						$curr_wgt_date="No Date";
					}
					
					if($current_waist=="0" || $current_waist=="")
					{
						$curr_wgt_date="No Date";
					}
					
					
					
					
					if($get_array_1['Type']=="Physical")
					{
						$cal_physical=round($get_array_1['cal']);
					}
					else if($get_array_1['Type']=="Burned")
					{
						$cal_burn=$get_array_1['cal'];
						///$cal_burn=number_format($cal_burn,0);
					}
					else if($get_array_1['Type']=="Consumed")
					{
						$cal_consume=$get_array_1['cal'];
						///$cal_consume=number_format($cal_consume,0);
					}
					
					$curdate=date('Y-m-d', strtotime($get_array['date']));
					$viewdate=date('d-M-Y', strtotime($get_array['date']));
					
					$cal_burn_cmt=GetValue("select comment as col from tbl_nutritionist_cal_comm where record_date='".$get_array['date']."'", "col");
					$cons_comment=GetValue("select cons_comment as col from tbl_nutritionist_cal_comm where record_date='".$get_array['date']."'", "col");
					$physical_comment=GetValue("select physical_comment as col from tbl_nutritionist_cal_comm where record_date='".$get_array['date']."'", "col");
					$size_comment=GetValue("select size_comment as col from tbl_nutritionist_cal_comm where record_date='".$get_array['date']."'", "col");
					
					
				}
				
				
				
				$goal_wgt=GetValue("select goal_wgt as col from tbl_calorie where user_id=".$patient_id."", "col");
				
				
				if($goal_wgt!="" || $goal_wgt!="0")
					{
					$goal_wgt_date=GetValue("select updated_date as col from tbl_calorie where goal_wgt=".$goal_wgt, "col");
				$goal_wgt_date=date('d-M-Y', strtotime($goal_wgt_date));
					}
					else
					{
						$goal_wgt_date="0";
					}
				
				
				
			?>
			
			<tr>
			<td class="gray_bg f_grey" style="width: 78px; font-size: 12px; padding: 8px; text-align: center;">
				<?php echo date('d-m-Y', strtotime($get_array['date']))?>
			</td>
			<td class="gray_bg f_grey" style="width: 120px; font-size: 12px; padding: 8px; text-align: center;"><?php echo $cal_burn ?> cal</td>
			<td class="gray_bg f_grey" style="width: 120px; font-size: 12px; padding: 8px; text-align: center;"><?php echo $cal_consume ?> cal</td>
			<td class="gray_bg f_grey" style="width: 120px; font-size: 12px; padding: 8px; text-align: center;"><?php echo $cal_physical ?> Mins</td>
			<td class="gray_bg f_grey" style="width: 75px; font-size: 12px; padding: 8px; text-align: center;">
            	<a href="#" class="tooltiphover"> <?php echo $curr_wgt ?> kg <span><img class="callout" src="<?php echo $strHostName;?>/images/callout.gif" /><div style="font-size:12px; text-align:left;"><?php echo $curr_wgt_date;?></div></span></a>
            </td>
			<td class="gray_bg f_grey" style="width: 75px; font-size: 12px; padding: 8px; text-align: center;"><a href="#" class="tooltiphover"> <?php echo $current_arm ?> cm<span><img class="callout" src="<?php echo $strHostName;?>/images/callout.gif" /><div style="font-size:12px; text-align:left;"><?php echo $curr_wgt_date;?></div></span></a>
            </td>
			<td class="gray_bg f_grey" style="width: 75px; font-size: 12px; padding: 8px; text-align: center;"><a href="#" class="tooltiphover"> <?php echo $current_hips ?> cm<span><img class="callout" src="<?php echo $strHostName;?>/images/callout.gif" /><div style="font-size:12px; text-align:left;"><?php echo $curr_wgt_date;?></div></span></a>
			</td>
			<td class="gray_bg f_grey" style="width: 75px; font-size: 12px; padding: 8px; text-align: center;"><a href="#" class="tooltiphover"><?php echo $current_waist ?> cm<span><img class="callout" src="<?php echo $strHostName;?>/images/callout.gif" /><div style="font-size:12px; text-align:left;"><?php echo $curr_wgt_date;?></div></span></a></td>
            <td class="gray_bg f_grey" style="width: 75px; font-size: 12px; padding: 8px; text-align: center;"> 
			<a href="#" class="tooltiphover"><?php echo $goal_wgt ?> kg<span><img class="callout" src="<?php echo $strHostName;?>/images/callout.gif" /><div style="font-size:12px; text-align:left;"><?php echo $goal_wgt_date;?></div></span></a>
			</td>
			<td class="gray_bg f_grey" style="width: 85px; font-size: 12px; padding: 8px; text-align: center;">
				<a onClick="javascript:Get_Nut_CC_CommentDate1('<?php echo $viewdate;?>','<?php echo $cal_burn_cmt;?>', '<?php echo $cons_comment;?>','<?php echo $physical_comment;?>','<?php echo $size_comment;?>');  Popup.showModal('dvpopup-showdietplan',null,null,{'screenColor':'#333333','screenOpacity':.6}); " style="cursor:pointer;">View Comments</a>
			</td>
		  <?php } ?>
          <div id="dvpopup-showdietplan" style="text-align: center; width: 623px; display: none; position:absoulte; margin-top:65px; margin-left:350px; background-color:#fff; padding:10px;">
      
             <div style="margin: 0px 0px 0px 600px; position: absolute; text-align:right; float: right"> <a href="javascript:Popup.hide('dvpopup-showdietplan');" target="_parent" style="text-decoration: none; color: #fff; border: solid 0px #993300; cursor: pointer;"> <img src="images/close.png" alt="" title="" border="0" /> </a> 
            </div>
              
              <div class="dvFloat">
              		
                    <div class="dvFloat" style="padding:4px; background-color:#99cc00; color:#fff; text-align:left;">
                    	View Comments of <span id="txtComDate"></span>
                    </div>
                      <input type="hidden" name="txtComDate" id="txtComDate" value="" />
                     <div class="dvFloat" style="padding:4px; text-align:left; margin-top:15px;">
                    	<div style="float:left; width:30%;">Calorie Burned Comment</div>
                        <div style="float:left; width:10%; text-align:center;">:</div>
                        <div style="float:left; width:50%;"><span id="dvCom1"></span></div>
                     </div>
                    
                    <div class="dvFloat" style="padding:4px; text-align:left; margin-top:15px;">
                    	<div style="float:left; width:30%;">Calorie Consumed Comment</div>
                        <div style="float:left; width:10%; text-align:center;">:</div>
                         <div style="float:left; width:50%;"><span id="dvCom2"></span></div>
                        
                    </div>
                    
                    
                     <div class="dvFloat" style="padding:4px; text-align:left; margin-top:15px;">
                    	<div style="float:left; width:30%;">Physical Activity Comment</div>
                        <div style="float:left; width:10%; text-align:center;">:</div>
                         <div style="float:left; width:50%;"><span id="dvCom3"></span></div>
                    </div>
                    
                     <div class="dvFloat" style="padding:4px; text-align:left; margin-top:15px;">
                    	<div style="float:left; width:30%;">Physical Size Comment</div>
                        <div style="float:left; width:10%; text-align:center;">:</div>
                       <div style="float:left; width:50%;"><span id="dvCom4"></span></div>
                        
                    </div>
              </div>
              
              
            </div>
		  </tr>
		</table>
	  </div>
  </div>
  <div id="country2_sub" class="tabcontent">
		<table width="100%" border="0" cellpadding="3" cellspacing="3">
		  <tr>
			<td class="gray_bg f_grey" style="width: 78px; font-size: 12px; padding: 8px; font-weight: bold;">Date</td>
			<td class="gray_bg f_grey" style="width: 120px; font-size: 12px; padding: 8px; font-weight: bold;">Calorie Burned</td>
			<td class="gray_bg f_grey" style="width: 120px; font-size: 12px; padding: 8px; font-weight: bold;">Calorie Consumed</td>
			<td class="gray_bg f_grey" style="width: 120px; font-size: 12px; padding: 8px; font-weight: bold;">Physical Activity</td>
			<td class="gray_bg f_grey" style="width: 75px; font-size: 12px; padding: 8px; font-weight: bold;"> Weight</td>
			<td class="gray_bg f_grey" style="width: 75px; font-size: 12px; padding: 8px; font-weight: bold;">Arms</td>
			<td class="gray_bg f_grey" style="width: 75px; font-size: 12px; padding: 8px; font-weight: bold;">Hips</td>
			<td class="gray_bg f_grey" style="width: 75px; font-size: 12px; padding: 8px; font-weight: bold;">Thigh</td>
            <td class="gray_bg f_grey" style="width: 75px; font-size: 12px; padding: 8px; font-weight: bold;">Goal Weight</td>
			<td class="gray_bg f_grey" style="width: 75px; font-size: 12px; padding: 8px; font-weight: bold;">Comments</td>
		  </tr>
		  <?php 
			if(isset($_GET['patient_id'])){
				$patient_id=$converter->decode($_GET['patient_id']);
				/// for setting sesstion for user in iframe
				$_SESSION['UserID']=$patient_id;
			}
			else
			{
				$patient_id=0;
			}
			$j=1;

			$retrive_Array=array();$get_array=array();
			$retrive_Array_1=array();$get_array_1=array();
			$strDate='';

			 $page=1;$page_count=7;$newpagenumber="2";$retrive_Array=array();$get_array=array();
			$retrive_Array=$get_retrive->GetCalCounter($patient_id, $page_count);
			$nume=$get_retrive->GetCalCounter_Count($patient_id);
			
			//Alert($nume);
			//Alert($page_count);
			//Alert($newpagenumber);
			
			if($nume !="0")
						{
							
							$newpagenumber=($nume/$page_count);
							if($newpagenumber==""){$newpagenumber="0";}else{$newpagenumber=$newpagenumber+1;}
							$newpagenumber=round($newpagenumber);
							//Alert($page);
							if($page > $newpagenumber)
							{
								$newpagenumber=1;
							}
							else
							{
								$newpagenumber="";
							}
						}
						$pagingLink = getPagingLinkCalorie($nume,$page_count,'',$newpagenumber,$strHostName."/page_doctor.php?dir=nutritionist/details&patient_id=".$_GET['patient_id']."&compose_id=".$_GET['compose_id']."&parent_id=".$_GET['parent_id']);
	

			?>

			<?php  while($get_array = mysql_fetch_array( $retrive_Array )){?>
			
			<?php
				
				$retrive_Array_1=$get_retrive->GetCalCounter_Date($patient_id,$get_array['date']);
				$curr_wgt="0";$current_waist="0";$current_hips="0";$current_arm="0"; $date=""; $goal_wgt="0";
				$cal_consume="0";$cal_burn="0";$cal_physical="0"; $curr_wgt_date=date('d-M-Y');
				while($get_array_1 = mysql_fetch_array( $retrive_Array_1 )){
					
					$recoreddate=date('Y-m-d', strtotime($get_array['date']));
					
					$query = "SELECT * FROM tbl_calorie_det where isdeleted=0 and weight_date='".$recoreddate."' and user_id=".$patient_id."  limit 1";
					//echo $query;
					$result = mysql_query($query);
					if($result != "") {
					$rowcount = mysql_num_rows($result);
						if($rowcount > 0) {	
							while($row = mysql_fetch_assoc($result)) {

								$current_hips=$row['current_hips'];
								$current_arm=$row['current_arm'];
								$current_waist=$row['current_waist'];
								$curr_wgt=$row['curr_wgt'];
								$curr_wgt_date=date('d-M-Y', strtotime($row['weight_date']));
							}
						}
						else
						{
							$query = "SELECT * FROM tbl_calorie_det where isdeleted=0 and weight_date < '".$recoreddate."' and user_id=".$patient_id."  order by id desc limit 1";
							//echo $query;
							$result = mysql_query($query);
							if($result != "") {
							$rowcount = mysql_num_rows($result);
								if($rowcount > 0) {	
									while($row = mysql_fetch_assoc($result)) {
		
										$current_hips=$row['current_hips'];
										$current_arm=$row['current_arm'];
										$current_waist=$row['current_waist'];
										$curr_wgt=$row['curr_wgt'];
										$curr_wgt_date=date('d-M-Y', strtotime($row['weight_date']));
									}
								}
							}
						}
					}
					
					//$goal_wgt=$get_array_1['goal_wgt'];
					
					if($get_array_1['Type']=="Physical")
					{
						$cal_physical=round($get_array_1['cal']);
					}
					else if($get_array_1['Type']=="Burned")
					{
						$cal_burn=$get_array_1['cal'];
						////$cal_burn=number_format($cal_burn,0);
					}
					else if($get_array_1['Type']=="Consumed")
					{
						$cal_consume=$get_array_1['cal'];
						///$cal_consume=number_format($cal_consume,0);
					}
					
					$date=date('d-m-Y', strtotime($get_array['date']));
					$curdate=date('Y-m-d', strtotime($get_array['date']));
					
					
					$curr_wgt_date=GetValue("select updated_date as col from tbl_calorie_det where curr_wgt=".$curr_wgt, "col");
					$curr_wgt_date=date('d-M-Y', strtotime($curr_wgt_date));
					
					if($curr_wgt=="0" || $curr_wgt=="")
					{
						$curr_wgt_date="No Date";
					}
					
					
					$goal_wgt=GetValue("select goal_wgt as col from tbl_calorie where user_id=".$patient_id, "col");
					$goal_wgt_date=GetValue("select updated_date as col from tbl_calorie where goal_wgt=".$goal_wgt, "col");
					$goal_wgt_date=date('d-M-Y', strtotime($goal_wgt_date));
				}
			?>

			<tr id="dvrecord">
			<td class="gray_bg f_grey" style="width: 78px; font-size: 12px; padding: 8px; text-align: center;">
				<?php echo $date; ?>
			</td>
			<td class="gray_bg f_grey" style="width: 120px; font-size: 12px; padding: 8px; text-align: center;"><?php echo $cal_burn ?> cal</td>
			<td class="gray_bg f_grey" style="width: 120px; font-size: 12px; padding: 8px; text-align: center;"><?php echo $cal_consume ?> cal</td>
			<td class="gray_bg f_grey" style="width: 120px; font-size: 12px; padding: 8px; text-align: center;">
				<?php echo $cal_physical ?> Mins</td>
			<td class="gray_bg f_grey" style="width: 75px; font-size: 12px; padding: 8px; text-align: center;">
            	<a href="#" class="tooltiphover"> <?php echo $curr_wgt ?> kg <span><img class="callout" src="<?php echo $strHostName;?>/images/callout.gif" /><div style="font-size:12px; text-align:left;"><?php echo $curr_wgt_date;?></div></span></a>
            </td>
			<td class="gray_bg f_grey" style="width: 75px; font-size: 12px; padding: 8px; text-align: center;"><a href="#" class="tooltiphover"> <?php echo $current_arm ?> cm<span><img class="callout" src="<?php echo $strHostName;?>/images/callout.gif" /><div style="font-size:12px; text-align:left;"><?php echo $curr_wgt_date;?></div></span></a>
            </td>
			<td class="gray_bg f_grey" style="width: 75px; font-size: 12px; padding: 8px; text-align: center;"><a href="#" class="tooltiphover"> <?php echo $current_hips ?> cm<span><img class="callout" src="<?php echo $strHostName;?>/images/callout.gif" /><div style="font-size:12px; text-align:left;"><?php echo $curr_wgt_date;?></div></span></a>
			</td>
			<td class="gray_bg f_grey" style="width: 75px; font-size: 12px; padding: 8px; text-align: center;"><a href="#" class="tooltiphover"><?php echo $current_waist ?> cm<span><img class="callout" src="<?php echo $strHostName;?>/images/callout.gif" /><div style="font-size:12px; text-align:left;"><?php echo $curr_wgt_date;?></div></span></a></td>
            <td class="gray_bg f_grey" style="width: 75px; font-size: 12px; padding: 8px; text-align: center;"> 
			<a href="#" class="tooltiphover"><?php echo $goal_wgt ?> kg<span><img class="callout" src="<?php echo $strHostName;?>/images/callout.gif" /><div style="font-size:12px; text-align:left;"><?php echo $goal_wgt_date;?></div></span></a>
			</td>
			<td class="gray_bg f_grey" style="width: 85px; font-size: 12px; padding: 8px; text-align: center;">
				<?php if(date('d-M-Y',strtotime($curdate))==date('d-M-Y')){?>
					<a onClick="javascript:Get_Nut_CC_CommentDate('<?php echo $curdate;?>');  Popup.showModal('dvpopup-sendnewdietplan',null,null,{'screenColor':'#333333','screenOpacity':.6}); " style="cursor:pointer;">Add Comment</a>
				<?php } ?>
				&nbsp;
			</td>
            
		  <?php } ?>
          
		 <div id="dvpopup-sendnewdietplan" style="text-align: center; width: 623px; display: none; position:absoulte; margin-top:65px; margin-left:350px; background-color:#fff; padding:10px;">
      
             <div style="margin: 0px 0px 0px 600px; position: absolute; text-align:right; float: right"> <a href="javascript:Popup.hide('dvpopup-sendnewdietplan');" target="_parent" style="text-decoration: none; color: #fff; border: solid 0px #993300;"> <img src="images/close.png" alt="" title="" border="0" /> </a> 
            </div>
              
              <div class="dvFloat">
              		
                    <div class="dvFloat" style="padding:4px; background-color:#99cc00; color:#fff; text-align:left;">
                    	Add Comment	
                    </div>
                    
                     <div class="dvFloat" style="padding:4px; text-align:left; margin-top:15px;">
                    	<div style="float:left; width:30%;">Calorie Burned Comment</div>
                        <div style="float:left; width:50%;">
                         <textarea name="txtNutComment" id="txtNutComment" style="width:95%; height:40px;"></textarea></div>
                         <input type="hidden" name="txtPatientId" id="txtPatientId" value="<?php echo $patient_id?>" />
                         <input type="hidden" name="txtNutId" id="txtNutId" value="<?php echo $nutritionist_id?>" />
                         <input type="hidden" name="txtComDate" id="txtComDate" value="" />
                         <input type="hidden" name="txtCommentID" id="txtCommentID" value="" />
                         
                         
                          <input type="hidden" name="txtRePatientId" id="txtRePatientId" value="<?php echo $converter->encode($patient_id);?>" />
                          <input type="hidden" name="txtReComposeId" id="txtReComposeId" value="<?php echo $compose_id;?>" />
                          <input type="hidden" name="txtParentId" id="txtParentId" value="<?php echo $parent_id;?>" />
                    </div>
                    
                    <div class="dvFloat" style="padding:4px; text-align:left; margin-top:15px;">
                    	<div style="float:left; width:30%;">Calorie Consumed Comment</div>
                        <div style="float:left; width:50%;"><textarea name="txtConsComment" id="txtConsComment" style="width:95%; height:40px;"></textarea></div>
                        
                    </div>
                    
                    
                     <div class="dvFloat" style="padding:4px; text-align:left; margin-top:15px;">
                    	<div style="float:left; width:30%;">Physical Activity Comment</div>
                        <div style="float:left; width:50%;"><textarea name="txtPhysicalActivityComment" id="txtPhysicalActivityComment" style="width:95%; height:40px;"></textarea></div>
                        
                    </div>
                    
                     <div class="dvFloat" style="padding:4px; text-align:left; margin-top:15px;">
                    	<div style="float:left; width:30%;">Physical Size Comment</div>
                        <div style="float:left; width:50%;"><textarea name="txtSizeComment" id="txtSizeComment" style="width:95%; height:40px;"></textarea></div>
                        
                    </div>
                    
                    
                     <div class="dvFloat" style="padding:4px; text-align:left;">
                    	<div style="float:left; width:30%;">&nbsp;</div>
                        <div style="float:left; width:50%;"> <a class="button2" style="width:80px; cursor: pointer;"  onclick="javascript:Add_Comment();">Send</a></div>
                        
                    </div>
                
              
              </div>
              
              
            </div>
		</table>
        <div class="DvFloat" style="padding:10px 0 20px 0; display:none;">
                  <div style="text-align: center; padding: 10px 0px; width: 967px; float: left; border: solid 0px #000000;">
                    <div class="pagination_md">
                     
                      <div style="width: 917px; float: left; border: solid 0px #006600;">
                      	<?php echo $pagingLink ?>
                       </div>
                    
                    </div>
                  </div>
                </div>
  </div>
</div>


<script type="text/javascript">
	var countrytabs_sub=new ddtabcontent("countrytabs_sub")
	countrytabs_sub.setpersist(true)
	countrytabs_sub.setselectedClassTarget("link") //"link" or "linkparent"
	countrytabs_sub.init();
	//Get_Nut_CC_CommentDate();
</script>
