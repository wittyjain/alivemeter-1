<script type="text/javascript" src="<?php echo $strHostName?>/js/health_steup_validation.js"></script>
<script type="text/javascript" src="<?php echo $strHostName?>/js/health_steup_insert_retrive.js"></script>
<section>
  <div class="top_ou">
    <div class="top_in" style="border: solid 0px #000066;">
      <div class="top">
        <div class="cal_12">
          &nbsp;
        </div>
        <div class="b_crumb">&nbsp;</div>
      </div>
    </div>
  </div>
</section>


<section>
<div class="cal_full_size" style="margin-top:-50px;">
<div class="cal_12 m_outo">
  <div class="dvFloat">
    <div class="dvWrapper">
      <div style=" padding:0px 0px 35px 0px">
         		<?php include "includes/summary_left.inc.php";?>
        	<div class="health_dashboard_div_right">
    		<div class="DvFloat">
	<div  style="width:99%; border:solid 0px red;">
                 <div class="dvFloat formpadding1" style="padding-top:20px">
                    <div class="formlabel1" style="padding-left:0px; padding-bottom:10px;">
                      <label class="formlabel1">
                      	 <h2 class="Tab_Title">View Redeem Points</h2>
                     </label>
                    </div>
                    <div class="formcontrol2"> &nbsp; </div>
                  </div>
                  		<table cellpadding="0" cellspacing="0"  style="width:100%;float:left;" >
                              <tr>
                                <td class="tbl_head" width="25%"> Member Name </td>
                                 <td class="tbl_head" width="25%"> Total Points</td>
                                 <td class="tbl_head" width="25%"> Total Redeem Points</td>
                                 <td class="tbl_head" width="25%"> Pending Points</td>
                                  <td class="tbl_head" width="25%"> Summary</td>
                              </tr>
                               <?php $retrive_Array=$get_retrive->ViewReedemPoints()  ?>
                              <?php  while($get_array = mysql_fetch_array( $retrive_Array ))
							   {
							   	$getuserrewardpoints=GetValue("select sum(reward_points) col from ".Total_Reward_Points."  where user_id=".$get_array['user_id']."", "col");
								$totalpoints=GetValue("select sum(redeem_points) col from ".Redeem_Points."  where user_id=".$get_array['user_id']."", "col");
								if($totalpoints=="")
								{
									$totalpoints="0";
								}
								
								$pendingpoints=$getuserrewardpoints-$totalpoints;

							   ?>
                              <tr id="tr_deal_id_<?php echo $get_array['id']*121?>">
                                <td class="tdborder" style="padding:10px 0 10px 18px;" ><?php echo $user_name=GetValue("select name as col from tbl_users where user_id=".$get_array['user_id'], "col")?> </td>
                                <td class="tdborder" style="padding:10px 0 10px 18px;" ><?php echo $getuserrewardpoints;?> </td>
                                <td class="tdborder" style="padding:10px 0 10px 18px;" ><?php echo $totalpoints;?> </td>
                                <td class="tdborder" style="padding:10px 0 10px 18px;" ><?php echo $pendingpoints;?> </td>
                                  <td class="tdborder" style="padding:10px 0px 0px 10px;" >
                                  	<a style="cursor:pointer;" target="_blank" href="<?php echo $strHostName;?>/page.php?dir=summary/reward_details/view&cid=<?php echo $converter->encode($get_array['user_id']);?>"><img src="images/register_steps/view_icon.jpg" alt=""></a>
                    				<a style="cursor:pointer;" target="_blank" href="<?php echo $strHostName;?>/page.php?dir=summary/redeem_details/view"><img src="images/register_steps/view_icon.jpg" alt=""></a>
              		
                                 </td>
                                 
                        
                              </tr>
                              <?php  } ?>
                              <tr>
                                <td colspan="4" style="display:none">
                                    <?php echo $pagingLink ?>
                                </td>
                              </tr>
                        </table>
               		
                 </div>
        	</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div></div>
</section>

