<section>
  <div class="top_ou">
    <div class="top_in">
      <div class="top">
        <div class="cal_12" style="padding-top: 45px; padding-bottom:60px;">
            <div class="cal_12" style="border: solid 0px #0066CC;">
            	<div class="adviceonline_md">
                 <h1 class="f_red" style="text-align: left; font-size: 20px; margin-bottom: 7px; text-transform:uppercase">old queries</h1>
                	  <div class="DvFloat">
                        <table width="100%" border="0" cellpadding="0" cellspacing="0">
                             <?php $retrive_Array=$get_retrive->GetOldQueries()  ?>
                              <?php  while($get_array = mysql_fetch_array( $retrive_Array )){
							  	 $mail_date=GetValue("select created_date as col from tbl_compose where mail_id=".$get_array['randomid'], "col");
								 $complaint=GetValue("select complaint as col from tbl_compose where mail_id=".$get_array['randomid'], "col");
								 $patient_name=GetValue("select name as col from tbl_users where user_id=".$get_array['patient_id'], "col");
							  ?>
                           <tr>
                            <td class="lightInboxbg5"><?php echo  date('d-M-Y h:i:s',strtotime($mail_date));?></td>
                            <td class="lightInboxbg21"><a href="<?php echo $strHostName;?>/page_doctor.php?dir=doctor/details&patient_id=<?php echo $converter->encode($get_array['patient_id']);?>&query_id=<?php echo $converter->encode($get_array['randomid']);?>" style="font-size: 13px; color: #666;"><?php echo $complaint;?> </a> </td>
                            <td class="lightInboxbg3">To MD</td>
                            <td class="lightInboxbg4"><?php echo $patient_name;?></td>
                          </tr>
                          <tr>
                            <td class="f_white" colspan="5" style="height: 5px;"></td>
                          </tr>
                          
                            <?php  } ?>
                         </table>
                      </div>
                      
                   
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</section>
