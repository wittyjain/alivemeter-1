<div class="nutritionistright">
                            	<div class="DvFloat">
                                	<div class="DvFloat f_grey" style="font-size: 18px;">Welcome! <?php echo $_SESSION['UserDocName'];?></div>
                                    <div class="f_grey welcomedv">
                                    	<div class="DvFloat">
                                            <div style="width: 25%; float: left;"><span style="font-weight: bold;">Your Last visit:</span></div>
                                            <div style="width: 25%; float: left;"><?php echo date('d-M-Y h:i:s',strtotime($last_visit)); ?></div>
                                           
                                        </div>
                                        <div class="DvFloat" style="padding-top: 14px;">
                                            <div style="width: 20%; float: left;"><span style="font-weight: bold;">Total Clients:</span></div>
                                            <div style="width: 5%; float: left;"><?php echo $patient_count;?></div>
                                             <div style="width: 20%; float: left;"><span style="font-weight: bold;">Fresh Queries:</span></div>
                                            <div style="width: 5%; float: left;">
											<?php 
												$fresh_query=GetValue("SELECT count(compose_id) as col FROM tbl_doctor_comment where type='MD' and md_id=".$_SESSION['UserMDID']." and compose_id  in (select mail_id from tbl_compose where query_type=1)", "col");
												echo $fresh_query;
											?></div>
                                             <div style="width: 25%; float: left;"><span style="font-weight: bold;">Follow up queries</span></div>
                                            <div style="width: 10%; float: left;">
                                            	<?php 
													$follow_query=GetValue("SELECT count(compose_id) as col FROM tbl_doctor_comment where type='MD' and md_id=".$_SESSION['UserMDID']." and compose_id  in (select mail_id from tbl_compose where query_type=2)", "col");
													echo $follow_query;
												?>
                                            </div>
                                        </div>
                                        
                                        
                                        <div class="DvFloat" style="padding-top: 14px;">
                                            <div style="width: 25%; float: left;"><span style="font-weight: bold;">Patients accepted:</span></div>
                                            <div style="width: 5%; float: left;">
											<?php 
											$accepted_count = $db->select("SELECT * FROM tbl_md_comment where isactive=1 and isdeleted=0 and rejected=0 and md_id=".$user_id); 
											$accepted_count = $db->row_count;
										
											echo $accepted_count;?></div>
                                             <div style="width: 25%; float: left;"><span style="font-weight: bold;">Patients delayed:</span></div>
                                            <div style="width: 5%; float: left;">
											<?php 
												$delayed_count = $db->select("SELECT * FROM  tbl_doctor_comment where isactive=1 and isdeleted=0 and md_id=".$user_id." and patient_id not in (select patient_id from tbl_md_comment)");
												
											$delayed_count = $db->row_count;
										
												echo $delayed_count;
											?></div>
                                             <div style="width: 25%; float: left;"><span style="font-weight: bold;">Patients rejected:</span></div>
                                            <div style="width: 10%; float: left;">
                                            	<?php 
												$rejected_count = $db->select("SELECT * FROM tbl_md_comment where isactive=1 and isdeleted=0 and rejected=1 and md_id=".$user_id); 
												$rejected_count = $db->row_count;
										
												echo $rejected_count;
											?>
                                            </div>
                                        </div>
                                         
                                        <div class="DvFloat" style="padding-top: 14px;">Please click on the get queries tab below to start getting patient queries.</div>
                                        <div class="DvFloat" style="padding: 20px 0px;"><div style="width:312px; height:30px; float:left;"> 
                                        <a href="<?php echo $strHostName;?>/page_doctor.php?dir=md/client" class="button" style="text-align:center; padding: 0px 25px 0px 20px;">CLICK HERE TO GET QUERIES</a></div></div>
                                    </div>
                                </div>
                            </div>