  <?php 
	$query_count=$get_retrive->GetRejectedQueriesDocCount();
	$retrive_Array=$get_retrive->GetRejectedQueries();
	//Alert ($query_count);
	
if(!isset($_SESSION['UserDocID']))
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
                 <h1 class="f_red" style="text-align: left; font-size: 20px; margin-bottom: 7px; text-transform:uppercase">Rejected queries (<?php echo $query_count;?>)</h1>
                	  <div class="DvFloat">
                        <table border="0" cellpadding="0" cellspacing="0" style="width:1000px;">
                          
                          <?php if ($query_count!="0") { ?>   
                            <tr>
                            <td class="lightInboxbg21" style="border-bottom:solid 1px #fff;">Complaint Date</td>
                             <td class="lightInboxbg21" style="border-bottom:solid 1px #fff;">Accepted Date</td>
                            <td class="lightInboxbg21" style="border-bottom:solid 1px #fff; width:200px;">Complaint</td>
                            <td class="lightInboxbg21" style="border-bottom:solid 1px #fff;">Patient Name</td>
                            <td class="lightInboxbg21" style="border-bottom:solid 1px #fff; width:100px;">Reply on</td>
                            <td class="lightInboxbg21" style="border-bottom:solid 1px #fff;">Refer To MD</td>
                           	 
                            		<td class="lightInboxbg21" style="border-bottom:solid 1px #fff;">Rejected By</td>
                          
                          </tr>
					<?php } ?>
                            
                              <?php  while($get_array = mysql_fetch_array( $retrive_Array )){
							   	 $md_name="-";
							  	 $mail_date=GetValue("select created_date as col from tbl_compose where mail_id=".$get_array['compose_id'], "col");
								 $complaint=GetValue("select complaint as col from tbl_compose where mail_id=".$get_array['compose_id'], "col");
								 $patient_name=GetValue("select name as col from tbl_users where user_id=".$get_array['patient_id'], "col");
								 $referto=GetValue("select md_id as col from tbl_doctor_comment where compose_id=".$get_array['compose_id'], "col");
								 if($referto>0)
								 {
									 $md_name=GetValue("select doctor_name as col from tbl_doctor where doctor_id=".$referto, "col");
								 }
								 
								// Alert($referto);
								 $answered_date=GetValue("select created_date as col from tbl_doctor_comment where compose_id=".$get_array['compose_id'], "col");
								 $md_answered_date=GetValue("select created_date as col from tbl_md_comment where compose_id=".$get_array['compose_id'], "col");
								 
								 if($answered_date=="")
								 {
								 	$answered_date="-";
								 }
								 else
								 {
								 	 $answered_date=date('d-M-Y h:i:s',strtotime($answered_date));
								 }
								 	$md_reply=GetValue("select comment_id as col from ".MD_Comment." where compose_id=".$get_array['compose_id'],"col");
									//Alert($md_reply);
							  ?>
                          
                           <tr>
                            <td class="lightInboxbg5"><?php echo  date('d-M-Y h:i:s',strtotime($mail_date));?></td>
                            <td class="lightInboxbg5"><?php echo  date('d-M-Y h:i:s',strtotime($md_answered_date));?></td>
                            <td class="lightInboxbg5">
                            	<a href="<?php echo $strHostName;?>/page_doctor.php?dir=doctor/details&patient_id=<?php echo $converter->encode($get_array['patient_id']);?>&compose_id=<?php echo $converter->encode($get_array['compose_id'])?>&accept_id=<?php echo $converter->encode($get_array['accept_id']);?>" style="font-size: 13px; color: #666; font-weight:bold;"><span style="color:<?php if($referto>0 && $md_reply=="")  { echo "red";}?>"><?php echo truncate($complaint,50);?></span></a> </td>
                            <td class="lightInboxbg5"><?php echo $patient_name;?></td>
                            <td class="lightInboxbg5">
                            	<?php 
									echo $answered_date;
								?>
                            </td> 
                            <td class="lightInboxbg5"><?php echo $md_name;?></td>
                             <?php if($get_array['rejected']=="0") { ?>
                                         <td class="lightInboxbg5">
                                         <?php 
                                           	echo "Patient";
                                         ?></td>
                               <?php } else { ?>
                                        <td class="lightInboxbg5">
                                         <?php  echo "MD";?></td>
                               <?php } ?>
                          </tr>
                         
                          <tr>
                            <td class="f_white" colspan="5" style="height: 5px;"></td>
                          </tr>
                          
                            <?php  } ?>
                            
            <?php if ($query_count=="0") { ?>
            		<div class="dvFloat" style="color:red; text-align:center; height:250px; display:'';">Sorry! No queries are avaiable.</div>
            	
            <?php } ?>
                         </table>
                      </div>
                      
                   
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</section>
