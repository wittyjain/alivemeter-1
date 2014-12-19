<?php
if(!isset($_SESSION['UserNutID']))
{
	Alertandredirect("Sorry! Session is expired.", 'index.php');
}
?>
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
                            <tr>
                            <td class="lightInboxbg21" style="border-bottom:solid 4px #fff;">Complaint Date</td>
                             <td class="lightInboxbg21" style="border-bottom:solid 4px #fff;">Referred Date</td>
                               <td class="lightInboxbg21" style="border-bottom:solid 4px #fff;">Referred By</td>
                            <td class="lightInboxbg21" style="border-bottom:solid 4px #fff;">Complaint</td>
                            <td class="lightInboxbg21" style="border-bottom:solid 4px #fff;">Patient Name</td>
                            <td class="lightInboxbg21" style="border-bottom:solid 4px #fff;">Reply</td>
                          
                           
                          </tr>

                             <?php $retrive_Array=$get_retrive->GetOldMDQueries()  ?>
                              <?php  while($get_array = mysql_fetch_array( $retrive_Array )){
							     $doc_name="-";
							  	 $mail_date=GetValue("select created_date as col from tbl_compose where mail_id=".$get_array['compose_id'], "col");
								 $referred_date=GetValue("select created_date as col from tbl_doctor_comment where compose_id=".$get_array['compose_id'], "col");
								 $complaint=GetValue("select complaint as col from tbl_compose where mail_id=".$get_array['compose_id'], "col");
								 $patient_name=GetValue("select name as col from tbl_users where user_id=".$get_array['patient_id'], "col");
								 $referto=GetValue("select ref_doctor_id as col from tbl_md_comment where compose_id=".$get_array['compose_id'], "col");
								 if($referto>0)
								 {
									 $doc_name=GetValue("select doctor_name as col from tbl_doctor where doctor_id=".$referto, "col");
								 }
								
								 $answered_date=$get_array['created_date'];
								if($answered_date=="")
								 {
								 	$answered_date="-";
								 }
								 else
								 {
								 	 $answered_date=date('d-M-Y h:i:s',strtotime($answered_date));
								 }
								 
								 if($referred_date=="")
								 {
								 	$referred_date="-";
								 }
								 else
								 {
								 	 $referred_date=date('d-M-Y h:i:s',strtotime($referred_date));
								 }
							  ?>
                           <tr>
                            <td class="lightInboxbg5"><?php echo  date('d-M-Y h:i:s',strtotime($mail_date));?></td>
                            <td class="lightInboxbg5"><?php echo  date('d-M-Y h:i:s',strtotime($referred_date));?></td>
                              <td class="lightInboxbg5"><?php echo $doc_name;?></td>
                            <td class="lightInboxbg21"><a href="<?php echo $strHostName;?>/page_doctor.php?dir=md/details&patient_id=<?php echo $converter->encode($get_array['patient_id']);?>&compose_id=<?php echo $converter->encode($get_array['compose_id'])?>&accept_id=<?php echo $converter->encode($get_array['accept_id']);?>" style="font-size: 13px; color: #666;"><?php echo $complaint;?> </a> </td>
                            <td class="lightInboxbg5"><?php echo $patient_name;?></td>
                            <td class="lightInboxbg5">
                            	<?php 
									echo $answered_date;
								?>
                            </td> 
                          
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
