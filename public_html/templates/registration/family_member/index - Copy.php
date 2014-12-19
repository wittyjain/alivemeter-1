<?php
if(!isset($_SESSION['UserID']))
{
	Alertandredirect("Sorry! Session is expired.", 'index.php');
}

?>
<script src="<?php echo $strHostName?>/js/step3_validation.js" type="text/javascript"></script>
<script src="<?php echo $strHostName?>/js/health_steup_insert_retrive.js" type="text/javascript"></script>
<?php $retrive_Array=$get_retrive->GetFamilyMembers();  ?>
<?php
	if(isset($_SESSION['UserID'])){
	$user_id=$_SESSION['UserID'];
	}
	else
	{
		$user_id=0;
	}
	
	$active_count = GetValue("SELECT Count(*) as col FROM  ".Users." where parent_id=$user_id order by name", "col"); 
	
	
	
?>
<section>
  <?php if ($doc_consult_count > 0 && $medication_count > 0 && $allergies_count > 0  && $hospitalization_count > 0 && $immunization_count > 0 && $health_problem_count > 0 && $family_history_count > 0 && $blood_pressure_count > 0 && $sugar_profile_count > 0 && $life_style_count > 0 && $lipid_profile_count > 0) { ?>
  <div class="dvFloat">
    <?php include "includes/dashboard_top.inc.php";?>
  </div>
  <?php } ?>
</section>
<section>
  <div class="top_ou">
    <div class="top_in" style="border: solid 0px #000066;">
      
      <div class="cal_12">
          <div class="DvFloat" style="z-index:9999; position:relative; margin-top:0px;">
          	<div class="afmleft">Aligned Family Member</div>
            <div class="afmright"><span id="dvTotalMemCount"><?php echo $active_count;?></span><span class="f_grey">/5</span></div>
          </div>
           <div class="afm">
           	<ul>
					<?php 
						$iLoop=0;
						while($get_array = mysql_fetch_array( $retrive_Array )){ 
						$image=$get_array['image1'];
					?>
             	 <li id="dv_User_<?php echo $get_array['user_id']*121;?>" style="display:''">
               		<div class="DvFloat">
                        <div class="img"><img src="profile_pic/<?php echo $get_array['image1'];?>" alt="" title="" border="0" style="width:127px; height:128px;"></div>
                        <div class="redtitle"><?php echo $get_array['name'];?></div>
                        <div class="redtitle" style="padding:0px;">
                        		<a href="<?php echo $strHostName;?>/page.php?dir=registration/step3&cid=<?php echo $converter->encode($get_array['user_id']);?>&record=<?php echo $converter->encode($get_array['user_id']);?>&mode=<?php echo $converter->encode('Edit');?>"><img src="images/register_steps/edit_icon.jpg" alt="" style="margin-top:5px;"></a>
                                
                                <a  onclick="javascript:Family_Member_Delete_By_Id('<?php echo  $converter->encode($get_array['user_id'])?>','<?php echo $get_array['user_id']*121?>')" style="cursor:pointer;"><img src="images/register_steps/delete_icon.jpg" alt="" style="margin-top:5px;"></a>
                                
                        </div>
                        <div class="DvFloat f_darkblack" style="padding: 11px 0px; text-align: center;">Reward Points</div>
                        <div class="DvFloat f_red" style="padding: 0px 0px 15px 0px; text-align: center; font-weight: bold;">
                        	
							<a href="#" class="tooltip">
							  	<?php $gain_points=GetValue("select sum(reward_points) as col from tbl_total_reward_points where user_id=".$get_array['user_id'], "col");?>
                                <?php $redeem_points=GetValue("select sum(redeem_points) as col from tbl_redeem_points where user_id=".$get_array['user_id'], "col");?>
                                <?php echo $pending_points=$gain_points-$redeem_points;?>
                              <span>
                                <img class="callout" src="<?php echo $strHostName;?>/images/callout.gif" />
                                 
                                 <table width="100%" border="0" cellspacing="0" cellpadding="0" style="line-height:20px; text-align:left;">
                                  <tr>
                                    <td style="font-size:12px;">Total Gain Points</td>
                                    <td style="text-align:center; width:10%;">:</td>
                                    <td style="font-size:12px;">
										<?php if($gain_points=="")
										{
											echo "0";
										}
										else
										{
											echo $gain_points;
										}
										?>
                                   </td>
                                  </tr>
                                  <tr>
                                    <td style="font-size:12px;">Redeem Points</td>
                                    <td style="text-align:center; width:10%">:</td>
                                    <td style="font-size:12px;">
                                    	<?php if($redeem_points=="")
										{
											echo "0";
										}
										else
										{
											echo $redeem_points;
										}
										?>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td style="font-size:12px;">Pending Points</td>
                                    <td style="text-align:center; width:10%">:</td>
                                    <td style="font-size:12px;">
                                    	<?php if($pending_points=="")
										{
											echo "0";
										}
										else
										{
											echo $pending_points;
										}
										?>
                                    </td>
                                  </tr>
                                </table>
							</span>
                            </a>
							
							
                        </div>
                    </div>
                </li>
              
                      <?php
					  	$iLoop=$iLoop+1;
					   } ?>    
                       
                       
                       <?php for($imember=$iLoop; $imember<5; $imember++){ ?>
						<li>
                            <div class="DvFloat">
                                <div class="img"><img src="images/afm/04.png" alt="" title="" border="0"></div>
                                <!--<div class="redtitle">Manisha Guin</div>
                                <div class="DvFloat f_darkblack" style="padding: 11px 0px; text-align: center;">Reward Points</div>
                                <div class="DvFloat f_red" style="padding: 0px 0px 15px 0px; text-align: center; font-weight: bold;">450</div>-->
                            </div>
                        </li>
                       <?php } ?>
           </ul>
           </div>
           
           <div class="DvFloat" style="border-bottom: dashed 1px #000; border-top: dashed 1px #000;">
          	<div class="afm_trp_dv" style="display:none;">total reward points:<span style="font-weight: bold;"> 2200</span></div>
            <div class="afm_btn_dv">
            	<div style="margin-top:0px; float: right;">
                	<?php if ($active_count>=5){ ?>
                    	<a class="buttonafm" style="width:209px; cursor:pointer;" onclick="javascript:alert ('You cannot add more than 5 family members.');">Align Family Member<span></span></a>
                    <?php } else { ?>
                        <a href="<?php echo $strHostName;?>/page.php?dir=registration/step3&mode=<?php echo $converter->encode('Add');?>" class="buttonafm" style="width:209px">Align Family Member<span></span></a>
                    <?php } ?>
                        
               </div>
            </div>
          </div>
        </div>
      
    </div>
  </div>
</section>

