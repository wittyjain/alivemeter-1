<script type="text/javascript" src="<?php echo $strHostName?>/js/health_steup_validation.js"></script>
<script type="text/javascript" src="<?php echo $strHostName?>/js/health_steup_insert_retrive.js"></script>

<?php
if(isset($_GET['cid']))
{
	$cid=$converter->decode($_GET['cid']);
}
?>
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
                      <label class="formlabel1" style="width:100%;">
                      	 <h2 class="Tab_Title" >View Redeem Points of <?php echo $user_name=GetValue("select name as col from tbl_users where user_id=".$cid, "col")?> </h2>
                     </label>
                    </div>
                    <div class="DvFloat" style="padding:15px;"> 
                    
                    		Total Points : <?php echo $getuserrewardpoints=GetValue("select sum(reward_points) col from ".Total_Reward_Points."  where user_id=".$cid."", "col");?>
                    </div>
                  </div>
                  		<table cellpadding="0" cellspacing="0"  style="width:100%;float:left;" >
                              <tr>
                                
                                 <td class="tbl_head" width="25%"> Type</td>
                                 <td class="tbl_head" width="25%"> Reward Points</td>
                                 <td class="tbl_head" width="25%"> Date</td>
                                
                              </tr>
                               
                               <?php
							   
							    $query="select * from " .Total_Reward_Points. " where user_id=".$cid;
								//echo $query;
								$result = mysql_query($query);
								if($result != "") {
									$rowcount = mysql_num_rows($result);
									if($rowcount > 0) {
										while($row = mysql_fetch_assoc($result)) {
											extract($row);
										
											?>
                              <tr>
                              
                                <td class="tdborder" style="padding:10px 0 10px 18px;" ><?php echo $row['type'];?> </td>
                                <td class="tdborder" style="padding:10px 0 10px 18px;" ><?php echo $row['reward_points'];?> </td>
                                <td class="tdborder" style="padding:10px 0 10px 18px;" ><?php echo date('d-M-Y',strtotime($row['created_date']))?></td>
                                  
                                  	
                                 
                        
                              </tr>
                             <?php }}} ?>
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

