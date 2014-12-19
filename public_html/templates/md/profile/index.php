<?php
if(!isset($_SESSION['UserMDID']))
{
	Alertandredirect("Sorry! Session is expired.", 'index.php');
}
?>
<?php
if(isset($_SESSION['UserMDID']))
{
	$user_id=$_SESSION['UserMDID'];
}
else
{
	$user_id="0";
}
//Alert ($_SESSION['UserMDID']);

if(isset($_SESSION['UserType']))
{
	$user_type=$_SESSION['UserType'];
}
else
{
	$user_type="0";
}

$last_visit = GetValue("SELECT time as col FROM tbl_user_track  WHERE user_id = ".$_SESSION['UserMDID']." and user_type = '".$_SESSION['UserType']."' order by id desc limit 1,1", "col");

if($last_visit=="" || $last_visit=="0")
{
	$last_visit=date('d-M-Y h:i:s');
}

$patient_count = $db->select("SELECT * FROM ".Doc_Comment." where md_id=".$_SESSION['UserMDID']." and type='MD'"); 
$patient_count = $db->row_count;

?>
<section>
  <div class="top_ou">
    <div class="top_in">
      <div class="top">
        <div class="cal_12" style="padding-top: 45px; padding-bottom: 20px;">
            <div class="cal_12" style="border-bottom: solid 0px #CCCCCC;padding-bottom:20px;">
            	<div class="adviceonline_md">
                	<div class="DvFloat">
                    	<div class="DvFloat">
                        	<div class="photoareabg">
                              <div class="nutritionistphoto">
                              	<img src="images/nutritionist_photo.png" alt="" title="" border="0">
                              </div>
                            </div>
                            <div class="nutritionistright" style="border:solid 0px green;">
                            	<div class="DvFloat">
                                	<div class="DvFloat f_grey" style="font-size: 18px; border: solid 0px #0066FF;">Welcome! <?php echo $_SESSION['UserDocName'];?></div>
                                    <div class="f_grey welcomedv" style="margin-top:-15px;">
                                    	<div class="DvFloat" style="float:left; border:solid 0px red; margin-left:555px; width:290px;">
                                            <div style="width:150px; float: left; border:solid 0px green;"><span style="font-weight: bold;">Your Last visit:</span></div>
                                            <div style="width:130px; float: left; border:solid 0px black; padding-left: 10px;"><?php echo date('d-M-Y h:i:s',strtotime($last_visit)); ?></div>
                                            
                                        </div>
                                        
                                        <div class="DvFloat" style="float:left; border:solid 0px red; margin-left:555px; width:290px;">
                                            <div style="width:150px; float: left; border:solid 0px green;"><span style="font-weight: bold;">Total Clients Accepted:</span></div>
                                            <div style="width:130px; float: left; border:solid 0px black; padding-left: 10px;"><?php echo $patient_count;?></div>
                                            
                                            
                                            <div style="width:150px; float: left; border:solid 0px green;"><span style="font-weight: bold;">Fresh Queries:</span></div>
                                            <div style="width:130px; float: left; border:solid 0px black; padding-left: 10px;">
											<?php 
												$fresh_query=GetValue("SELECT count(compose_id) as col FROM tbl_doctor_comment where type='MD' and md_id=".$_SESSION['UserMDID']." and compose_id  in (select mail_id from tbl_compose where query_type=1)", "col");
												echo $fresh_query;
											?></div>
                                            
                                            <div style="width:150px; float: left; border:solid 0px green;"><span style="font-weight: bold;">Follow up queries</span></div>
                                            <div style="width:130px; float: left; border:solid 0px black; padding-left: 10px;">
											<?php 
													$follow_query=GetValue("SELECT count(compose_id) as col FROM tbl_doctor_comment where type='MD' and md_id=".$_SESSION['UserMDID']." and compose_id  in (select mail_id from tbl_compose where query_type=2)", "col");
													echo $follow_query;
												?></div>
                                        </div>
                                        
                                        
                                         <div class="DvFloat" style="float:left; border:solid 0px red; margin-left:555px; width:290px; margin-top:0px;">
                                            <div style="width:150px; float: left; border:solid 0px green;"><span style="font-weight: bold;">Patients accepted:</span></div>
                                            <div style="width:130px; float: left; border:solid 0px black; padding-left: 10px;">
                                            	<?php 
											$accepted_count = $db->select("SELECT * FROM tbl_md_comment where isactive=1 and isdeleted=0 and rejected=0 and md_id=".$user_id); 
											$accepted_count = $db->row_count;
										
											echo $accepted_count;?>
                                            </div>
                                            
                                            
                                            <div style="width:150px; float: left; border:solid 0px green;"><span style="font-weight: bold;">Patients delayed:</span></div>
                                            <div style="width:130px; float: left; border:solid 0px black; padding-left: 10px;">
											<?php 
												$delayed_count = $db->select("SELECT * FROM  tbl_doctor_comment where isactive=1 and isdeleted=0 and md_id=".$user_id." and compose_id not in (select compose_id from tbl_md_comment)");
										
									///	echo "SELECT * FROM  tbl_doctor_comment where isactive=1 and isdeleted=0 and md_id=".$user_id." and compose_id not in (select compose_id from tbl_md_comment)";
											$delayed_count = $db->row_count;
										
												echo $delayed_count;
											?></div>
                                            
                                            
                                            
                                              <div style="width:150px; float: left; border:solid 0px green;"><span style="font-weight: bold;">Patients rejected:</span></div>
                                            <div style="width:130px; float: left; border:solid 0px black; padding-left: 10px;">
											<?php 
												$rejected_count = $db->select("SELECT * FROM tbl_md_comment where isactive=1 and isdeleted=0 and rejected=1 and md_id=".$user_id); 
												$rejected_count = $db->row_count;
										
												echo $rejected_count;
											?>
                                            </div>
                                            
                                            
                                            <div style="width:150px; float: left; border:solid 0px green;"><span style="font-weight: bold;">Video Query Accepted:</span></div>
                                            <div style="width:130px; float: left; border:solid 0px black; padding-left: 10px;">
											<?php 
												$accepted_query=GetValue("SELECT count(*) as col FROM md_appointment where md_id=".$user_id." and other_app='Video_Query' and patient_id in (select user_id from tbl_compose where accept=1) and compose_id in (select mail_id from tbl_compose where accept=1)", "col");
										
												echo $accepted_query;
											?>
                                            </div>
                                            
                                            
                                            
                                        </div>
                                        
                                        
                                        
                                        
                                        
                                        
                                        
                                        <div class="DvFloat" style="margin-top:-120px;">
                                        
                                                <div class="DvFloat" style="padding-top: 14px;">Please click on the get queries tab below to start getting patient queries.</div>
                                                <div class="DvFloat" style="padding: 20px 0px;"><div style="width:312px; height:30px; float:left;"> 
                                                <a href="<?php echo $strHostName;?>/page_doctor.php?dir=md/client" class="button" style="text-align:center; padding: 0px 25px 0px 20px;">CLICK HERE TO GET QUERIES</a></div></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</section>
