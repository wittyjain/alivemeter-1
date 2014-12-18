<script type="text/javascript" src="<?php echo $strHostName?>/js/health_steup_validation.js"></script>
<script type="text/javascript" src="<?php echo $strHostName?>/js/health_steup_insert_retrive.js"></script>
<script type="text/javascript">
function showlink(iid)
{
	document.getElementById("DvVideoWindow").style.display="";
	
	var linkvalue=document.getElementById("txtVideoLink"+iid).value;
	///alert (linkvalue);
	
	document.getElementById("DvVideoWindow").src=document.getElementById("txtVideoLink"+iid).value;
	
	
}
</script>

<?php $iDay="0";$iMonth="0";$iYear="0";
$random=(strtotime('now')*33);
$random_2=(strtotime('now')*55);

$today_date=date('Y-m-d');

$user_id=$_SESSION['UserID'];



///Alert ($to_time);

?>

<?php include "includes/dashboard_top.inc.php";?>
<section>

<div class="cal_full_size">
<div class="cal_12 m_outo">
  <?php include "includes/dashboard_links.inc.php";?>
  <div class="dvFloat">
    <div class="dvWrapper">
      <div style=" padding:20px 0px 35px 0px">
         	 <div class="dvFloat">
	             <p>Hello <?php echo $_SESSION['UserName']?>,</p>
               
                <?php
						$query = "SELECT * FROM  ".Md_Appoint." where isdeleted=0 and patient_id=$user_id and app_date='".$today_date."'";
						// echo $query;
						$result = mysql_query($query);							
						if($result != "") {	
							$rowcount  = mysql_num_rows($result);
							if($rowcount > 0) {
								while($row = mysql_fetch_assoc($result)) {
								$i=1;
									extract($row);
									$complaint=GetValue("select subject as col from tbl_compose where mail_id=".$row['compose_id'], "col");
									$md_name=GetValue("select doctor_name as col from tbl_doctor where doctor_id=".$row['md_id'], "col");
									
									$now_time=date('H:i:s');


									$from_time = date('G:i',  strtotime($row['time_from'].' - 5 minute'));
									$to_time = date('G:i',  strtotime($row['time_to'].' + 5 minute'));
									
									$app_f_time = ($row['time_from']);
									$app_t_time = ($row['time_to']);
										
									if($row['time_slot']=="PM")
									{
										
										
										$app_f_time = ($row['time_from']+(12.00));
										$app_t_time = ($row['time_to']+(12.00));
										$app_t_time =  number_format("".$app_t_time."",2);
										
										
										
										$to_time = ($app_t_time+0.05);
										$to_time =  number_format("".$to_time."",2);
										
										
										
										$from_time = ($app_f_time));
										$from_time =  number_format("".$from_time."",2);
									
									}
												
																		 
						?>   
                 <div class="dvFloat" style="padding:20px 0 0 0;">Your Video appointment is confirmed today. </div>
                 
                 <div class="dvFloat" style="padding:20px 0 50px 0;">
                 		<table width="100%" border="0" cellspacing="10" cellpadding="0" style="font-size:11px;">
                              <tr>
                                <td>Appointment Time</td>
                                <td>:</td>
                                <td>From: <?php echo date('g:i',  strtotime($row['time_from']));?> to <?php echo date('g:i',  strtotime($row['time_to']));?></td>
                              </tr>
                              
                               <tr>
                                <td>Appointment For</td>
                                <td>:</td>
                                <td><?php echo $complaint;?></td>
                              </tr>
                              
                               <tr>
                                <td>Appointment With</td>
                                <td>:</td>
                                <td><?php echo $md_name;?></td>
                              </tr>
                              
                               <tr>
                                <td>Video Link</td>
                                <td>:</td>
                                <td>
                                
                                
                                
                                  <input type="hidden" name="txtVideoLink<?php echo $i;?>" id="txtVideoLink<?php echo $i;?>"  value="<?php echo $row['videolink'];?>" />
                                  
  		 <?php if( (date('G:i', strtotime($now_time))>= date('G:i',  strtotime($from_time))) && (date('G:i',  strtotime($now_time))<= date('G:i',  strtotime($to_time)))) {?>	
									
                                    <a onclick="javascript:showlink('<?php echo $i;?>');">Click Here to Start Videochat.</a>
                                  <?php } else { ?>  
                                    <a href="#">Click Here to Start Videochat.</a>
                                   <?php } ?> 
                                </td>
                              </tr>
                             
                              
                         
                              
                             
                            </table>

                 </div>
                  <?php $i=$i+1;?>
               <?php }}} ?>     
               					 <div>
                              		
                                 	 <iframe src="" width="330" height="250" frameborder="0" style="display:none; text-align:center; background-color:#000;" id="DvVideoWindow">
                                        </iframe>
                                   
                              </div>
             </div>
      </div>
    </div>
  </div>
</div></div>

</section>
