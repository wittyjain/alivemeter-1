<?php
	$user_id=$_SESSION['UserID']; $diff_wgt="0"; $width="";
	
	
	
	$cur_wgt=GetValue("select curr_wgt as col from tbl_calorie where user_id=".$user_id, "col");
	$target_wgt=GetValue("select goal_wgt as col from tbl_calorie where user_id=".$user_id, "col");
	
	$kg_type=GetValue("select kg_type as col from tbl_calorie_consumed where user_id=".$user_id." order by calorie_id desc limit 1", "col");
	
	$updated_date=GetValue("select updated_date as col from tbl_calorie where user_id=".$user_id." order by calorie_id desc limit 1", "col");
	
	if($cur_wgt>$target_wgt)
	{
		$diff_wgt=$cur_wgt-$target_wgt;
	}
	else if($target_wgt > $cur_wgt)
	{
		$diff_wgt=$target_wgt-$cur_wgt;
	}
	
	
	
	$last_updated_wgt=GetValue("select curr_wgt as col from tbl_calorie_det where user_id=".$user_id." order by id desc limit 1", "col");
	
	if($last_updated_wgt=="" || $last_updated_wgt=="0")
	{
		$last_updated_wgt=GetValue("select curr_wgt as col from tbl_calorie where user_id=".$user_id." order by calorie_id desc limit 1", "col");
	}
	
	
	
	if($cur_wgt>$last_updated_wgt){
		$progress_wgt=$cur_wgt-$last_updated_wgt;
		$actual_width=$diff_wgt/$progress_wgt;
	}
	
	
	else if($last_updated_wgt>$cur_wgt){
		$progress_wgt=$last_updated_wgt-$cur_wgt;
		$actual_width=$diff_wgt/$progress_wgt;
	}
	
	else if($cur_wgt==$last_updated_wgt){
		$progress_wgt=$cur_wgt;
		$actual_width="0";
	}
	
	
	if($actual_width!="0")
	{
		$gwidth=(535/$actual_width);
		$graywidth=(535-$gwidth);
	}
	else
	{
		$gwidth="0";
		$graywidth=(535-$gwidth);
	}
	
	
	
	//Alert ($gwidth);
	//
	
	
	//Alert ($graywidth);

?>

<div class="DvFloat" style="padding-bottom:30px; border-bottom:solid 1px #c5c5c5">
                  <div class="Progress_Title">My Progress</div>
                  <div class="Progress_bar">
                    <div class="DvFloat">
                    	
                    		
                    
                    
                      <div class="Progress_left" style="border:solid 0px red; width:<?php echo $gwidth;?>px;">
                        <div class="DvFloat" style="color:#666; text-align:right; margin-top:-20px;">
                        	<?php if($actual_width=="0") { ?>
                            	
                            <?php } else { ?>
                        	<a href="#" class="tooltip1">
							<?php echo $progress_wgt;?>kg
                              
                              		<span>
                                <img class="callout1" src="<?php echo $strHostName;?>/images/callout1.gif" />
                                 
                                 <table border="0" cellspacing="0" cellpadding="0" style="line-height:20px; width:100%; border:solid 0px red;">
                                  <tr>
                                  	<td style="text-align:left; font-size:11px;">Gain <?php echo $progress_wgt;?> kg.</td>
                                  </tr>
                                
                                </table>
							</span>
                            </a>
                        <?php } ?>
                        </div>
                        <div class="DvFloat" style="padding-top:10px; color:#666; text-align:left">0 kg</div>
                      </div>
                      <div class="Progress_Right" style="border:solid 0px red; width:<?php echo $graywidth;?>px;">
                        <div class="DvFloat" style="padding-top:10px; color:#666; text-align:right">
							<a href="#" class="tooltip1">
								<?php echo $diff_wgt;?>kg
                              
                              		<span style="margin-top:-100px;">
                                <img class="callout1" src="<?php echo $strHostName;?>/images/callout1.gif" style="display:''; top:80px;" />
                                 
                                 <table border="0" cellspacing="0" cellpadding="0" style="line-height:20px; width:100%; border:solid 0px red;">
                                  <tr>
                                    <td style="font-size:12px;"><?php echo $kg_type?> <?php echo $diff_wgt;?>kg <br /> Goal recorded <br /> on
                                    <?php echo date('d-M-Y',strtotime($updated_date))?>
                                    
                                     </td>
                                  </tr>
                                
                                </table>
							</span>
                            </a>
                        
						
						
						</div>
                      </div>
                    </div>
                  </div>
                </div>