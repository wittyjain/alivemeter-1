<script type="text/javascript" src="<?php echo $strHostName?>/js/health_steup_validation.js"></script>
<script type="text/javascript" src="<?php echo $strHostName?>/js/health_steup_insert_retrive.js"></script>
<script type="text/javascript" src="<?php echo $strHostName;?>/lib/jquery-1.10.1.min.js"></script>
<script>
function ShowPatients(type, row)
{	
	/*if(type=="Show")
	{
		document.getElementById("AcceptLink"+row).style.display="none";	
		document.getElementById("ViewDetails"+row).style.display="";	
		
	}
	else
	{
		document.getElementById("ViewDetails"+row).style.display="";	
	}*/
	var vlink = document.getElementById("ViewDetails"+row);
	
	vlink.click();
	
	
}
</script>

<?php
if(isset($_SESSION['UserDocID']))
{
	$user_id=$_SESSION['UserDocID'];
}
else
{
	$user_id="0";
}

if(!isset($_SESSION['UserDocID']))
{
	Alertandredirect("Sorry! Session is expired.", 'index.php');
}




if(isset($_SESSION['UserType']))
{
	$user_type=$_SESSION['UserType'];
}
else
{
	$user_type="0";
}


//Alert ($acceptid);

?>
<section>
  <div class="top_ou">
    <div class="top_in">
      <div class="top">
        <div class="cal_12" style="padding-top: 45px; padding-bottom: 20px;">
        
        <?php 
			$doctor_count=$get_retrive->GetClients_Count();
			//Alert ($doctor_count);
		?>
          <?php $retrive_Array=$get_retrive->GetClients()  ?>
          <?php  while($get_array = mysql_fetch_array( $retrive_Array )){?>
          <div class="DvFloat" style="border: solid 0px #990033; padding-bottom:30px;">
            <div class="adviceonline_md" style="padding-bottom: 15px;">
              <div class="photoareabg">
               <?php $patient_img=GetValue("select image1 as col from tbl_users where user_id=".$get_array['user_id'], "col");?> 
                 <div class="nutritionistphoto"> <img src="<?php echo $strHostName;?>/profile_pic/<?php echo $patient_img?>" alt="" title="" border="0" style="width:101px; height:101px;"> </div>
              </div>
              <div class="nutritionistright">
                <div class="DvFloat">
                  <div class="DvFloat f_grey" style="font-size: 18px;"> <?php echo $patient_name=GetValue("select name as col from tbl_users where user_id=".$get_array['user_id'], "col")?> </div>
                
                 
                  <div class="f_grey welcomedv" style="border:solid 0px red; width:80%;">
                    <div class="DvFloat">
                      <div style="float:left; width:120px;">
                        <div class="DvFloat">
                          <div style="width: 30%; float: left;"><span style="font-weight: bold;">Sex:</span></div>
                          <div style="width: 50%; float: left;"><?php echo $patient_gender=GetValue("select gender as col from tbl_users where user_id=".$get_array['user_id'], "col")?></div>
                        </div>
                        <div style="width: 30%; float: left;"><span style="font-weight: bold;">Age:</span></div>
                        <div style="width: 50%; float: left;">
                        	<?php $patient_age=GetValue("select dob as col from tbl_users where user_id=".$get_array['user_id'], "col");
								$age = floor((time() - strtotime($patient_age))/31556926); echo $age;	
							?>
                        </div>
                      </div>
                      <div style="float:left; width:450px;">
                      <?php 
					  		$followup_id=$get_array['followup_id'];
							
							$followed_date=GetValue("select created_date as col from tbl_doctor_comment where compose_id=".$followup_id, "col");
							$followed_doc_id=GetValue("select doctor_id as col from tbl_doctor_comment where compose_id=".$followup_id, "col");
							$followed_doc_name=GetValue("select doctor_name as col from tbl_doctor where doctor_id=".$followed_doc_id, "col");
							
							if($followup_id>0)
							{
								$strFollow="";
							}
							else
							{
								$strFollow="none";
							}
							
							$followedbyDoc=GetValue("select compose_id as col from tbl_doctor_comment where compose_id=".$followup_id, "col");
							//Alert ($followedbyDoc);
					  ?>
                      	
                       
                        <div style="width: 100%; float: left; margin-top:0px;"><span style="font-weight: bold;">
                        		<?php if($get_array['query_type']=="1") {?>
                                	New query on <?php echo date('d-M-Y h:i:s',strtotime($get_array['created_date']));?>
                                <?php } else { ?>
                                  Follow up query <?php echo date('d-M-Y h:i:s',strtotime($get_array['created_date']));?>
                                <?php } ?>
                        </span></div>
                        <div style="width: 100%; float: left;"><?php echo truncate(str_replace("\\","",$get_array['complaint']),150);?></div>
                        
                        <div class="DvFloat" id="dvFollow" style="display:<?php echo $strFollow;?>; padding:10px 0;">
                          <?php if($followedbyDoc!="" && $followedbyDoc!="0") { ?>
                        	<div class="DvFloat">
                            		<span style="font-weight: bold;">Follow on:</span> <?php echo date('d-M-Y',strtotime($followed_date));?></span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <span style="font-weight: bold;">Followed by:</span> <?php echo $followed_doc_name;?> 
                            </div>
                           <?php } ?>
                        	
                        </div>
                      </div>
                      <div style="width:80px; float: left; border:solid 0px green; text-align:center; margin-top:-38px;"> 
                      		
						<a class="button4" id="AcceptLink<?php echo $get_array['mail_id']?>" onclick="javascript:Patient_Ins('<?php echo $get_array['mail_id']?>')" style="cursor:pointer; float:left;">Accept</a>
                              
                                 
                     		<a class="button2" id="ViewDetails<?php echo $get_array['mail_id']?>"  style="cursor:pointer; float:left; width:100px; display:none;" href="<?php echo $strHostName;?>/page_doctor.php?dir=doctor/details&patient_id=<?php echo $converter->encode($get_array['user_id'])?>&compose_id=<?php echo $converter->encode($get_array['mail_id']);?>>">View Details</a>
                          
						  
						 
						
                            <input type="hidden" name="txtClientID<?php echo $get_array['mail_id']?>" id="txtClientID<?php echo $get_array['mail_id']?>" value="<?php echo $get_array['user_id']?>">
                            <input type="hidden" name="txtDoctorID<?php echo $get_array['mail_id']?>" id="txtDoctorID<?php echo $get_array['mail_id']?>" value="<?php echo $user_id;?>">
                            <input type="hidden" name="txtAcceptID<?php echo $get_array['mail_id']?>" id="txtAcceptID<?php echo $get_array['mail_id']?>" value="">
                  			<input type="hidden" name="txtComposeID<?php echo $get_array['mail_id']?>" id="txtComposeID<?php echo $get_array['mail_id']?>" value="<?php echo $get_array['mail_id']?>">
                           <input type="hidden" name="txtType<?php echo $get_array['mail_id']?>" id="txtType<?php echo $get_array['mail_id']?>" value="<?php echo $user_type?>">
                      </div>
                    </div>
                    <div class="DvFloat">
                    	<div style="float:left; width:120px;">&nbsp;</div>
                    	<div style="float:left; width:450px;">
						<?php if ($get_array['video_query_requirement']=="Yes") { ?>
	                        <div style="width:500px; float: left; border:solid 0px green; text-align:left; margin-top:15px; font-size:12px; color:red;"><img src="<?php echo $strHostName;?>/images/video_icon.jpg" style="width:25px; float: left; margin-top: -8px;" align="absmiddle"/>&nbsp;&nbsp; (This patient need video query.)</div>
						<?php } ?>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php  } ?>
            
            
            <?php if ($doctor_count=="0") { ?>
            		<div class="dvFloat" style="color:red; text-align:center; height:250px;">Sorry! No queries are avaiable.</div>
            	
            <?php } ?>
            
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>
</section>
