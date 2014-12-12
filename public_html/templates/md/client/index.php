<script type="text/javascript" src="<?php echo $strHostName?>/js/health_steup_validation.js"></script>
<script type="text/javascript" src="<?php echo $strHostName?>/js/health_steup_insert_retrive.js"></script>
<script type="text/javascript" src="<?php echo $strHostName;?>/lib/jquery-1.10.1.min.js"></script>
<script>
function ShowPatients(type, row)
{	
	if(type=="Show")
	{
		document.getElementById("AcceptLink"+row).style.display="none";	
		document.getElementById("ViewDetails"+row).style.display="";	
		
	}
	else
	{
		document.getElementById("ViewDetails"+row).style.display="";	
	}
}
</script>

<?php
if(isset($_SESSION['UserMDID']))
{
	$user_id=$_SESSION['UserMDID'];
}
else
{
	$user_id="0";
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
<?php
if(!isset($_SESSION['UserMDID']))
{
	Alertandredirect("Sorry! Session is expired.", 'index.php');
}
?>
<section>
  <div class="top_ou">
    <div class="top_in">
      <div class="top">
      
        <div class="cal_12" style="padding-top: 45px; padding-bottom: 20px;">
          <h1 class="f_red" style="text-align: left; font-size: 20px; margin-bottom: 25px; text-transform:uppercase; margin-left:15px;">Get Queries</h1>
          <?php $retrive_Array=$get_retrive->GetMDClients();
		  $nume=$get_retrive->GetMDClients_Count();
	// Alert ($nume);
		    ?>
          <?php  while($get_array = mysql_fetch_array( $retrive_Array )){?>
              <div class="DvFloat" style="border: solid 0px #990033; padding-bottom:30px;">
                <div class="adviceonline_md">
                  <div class="photoareabg">
                  <?php $patient_img=GetValue("select image1 as col from tbl_users where user_id=".$get_array['patient_id'], "col");?> 
                    <div class="nutritionistphoto"> <img src="<?php echo $strHostName;?>/profile_pic/<?php echo $patient_img?>" alt="" title="" border="0" style="width:101px; height:101px;"> </div>
                  </div>
                  <div class="nutritionistright">
                    <div class="DvFloat">
                      <div class="DvFloat f_grey" style="font-size: 18px;"> <?php echo $patient_name=GetValue("select name as col from tbl_users where user_id=".$get_array['patient_id'], "col")?> </div>
                    
                     
                      <div class="f_grey welcomedv" style="border:solid 0px red; width:80%;">
                        <div class="DvFloat">
                          <div style="float:left; width:120px;">
                            <div class="DvFloat">
                              <div style="width: 30%; float: left;"><span style="font-weight: bold;">Sex:</span></div>
                              <div style="width: 50%; float: left;"><?php echo $patient_gender=GetValue("select gender as col from tbl_users where user_id=".$get_array['patient_id'], "col")?></div>
                            </div>
                            <div style="width: 30%; float: left;"><span style="font-weight: bold;">Age:</span></div>
                            <div style="width: 50%; float: left;">
                            	<?php $patient_age=GetValue("select dob as col from tbl_users where user_id=".$get_array['patient_id'], "col");
									$age = floor((time() - strtotime($patient_age))/31556926); echo $age;
							?>
                            </div>
                            
                          </div>
                          <div style="float:left; width:450px;">
                          <?php 
                                $compose_id=$get_array['compose_id'];
                                $referred_date=GetValue("select created_date as col from tbl_doctor_comment where compose_id=".$compose_id, "col");
                                $followed_doc_id=GetValue("select doctor_id as col from tbl_doctor_comment where compose_id=".$compose_id, "col");
                                $referred_doc_name=GetValue("select doctor_name as col from tbl_doctor where doctor_id=".$followed_doc_id, "col");
								$internal_advice=GetValue("select doctor_internal_advice as col from tbl_doctor_comment where compose_id=".$compose_id, "col");
                                
                                $complaint=GetValue("select complaint as col from tbl_compose where mail_id=".$compose_id, "col");
                                $video_query=GetValue("select video_query_requirement as col from tbl_compose where mail_id=".$compose_id, "col");
                          ?>
                            
                           
                            <div style="width: 100%; float: left; margin-top:0px;"><span style="font-weight: bold;">Complaint on <?php echo date('d-M-Y h:i:s',strtotime($get_array['created_date']));?></span></div>
                            <div style="width: 100%; float: left;"><?php echo truncate($complaint,150);?></div>
                            
                            
                            <div class="DvFloat" id="dvFollow" style="padding:10px 0;">
                                <div class="DvFloat">
                                        <span style="font-weight: bold;">Referred on:</span> <?php echo date('d-M-Y h:i:s',strtotime($referred_date));?></span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <span style="font-weight: bold;">Referred by:</span> <?php echo $referred_doc_name;?> <br />	
                                        <span style="font-weight: bold;">Advice:</span> <?php echo $internal_advice;?> 
                                </div>
                                
                            </div>
                            <?php if ($video_query=="Yes") { ?>
                                <div class="DvFloat" style="text-align:left; margin-top:0px; font-size:12px; color:red;"> 
                                    <img src="<?php echo $strHostName;?>/images/video_icon.jpg" style="width:25px; float:left;" align="top"/>&nbsp;&nbsp;(This patient need video query.)
                              </div>
                            <?php } ?>
                          </div>
                          <div style="width:100px; float: left; border:solid 0px green; text-align:right; margin-top:-35px;"> 
                                
                                 
                                <a class="button2" id="ViewDetails<?php echo $get_array['comment_id']?>"  style="cursor:pointer; float:left; width:100px; display:'';"  href="<?php echo $strHostName;?>/page_doctor.php?dir=md/details&patient_id=<?php echo $converter->encode($get_array['patient_id'])?>&compose_id=<?php echo $converter->encode($get_array['compose_id']);?>">View Details</a>
                              
                              
                             
                            
                                <input type="hidden" name="txtClientID<?php echo $get_array['comment_id']?>" id="txtClientID<?php echo $get_array['comment_id']?>" value="<?php echo $get_array['patient_id']?>">
                                <input type="hidden" name="txtDoctorID<?php echo $get_array['comment_id']?>" id="txtDoctorID<?php echo $get_array['comment_id']?>" value="<?php echo $get_array['doctor_id'];?>">
                                <input type="hidden" name="txtAcceptID<?php echo $get_array['comment_id']?>" id="txtAcceptID<?php echo $get_array['comment_id']?>" value="">
                                <input type="hidden" name="txtComposeID<?php echo $get_array['comment_id']?>" id="txtComposeID<?php echo $get_array['comment_id']?>" value="<?php echo $get_array['compose_id']?>">
                                
                                <input type="hidden" name="txtType<?php echo $get_array['comment_id']?>" id="txtType<?php echo $get_array['comment_id']?>" value="<?php echo $user_type?>">
                              
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
		  <?php  } ?>
          
          <?php if($nume=="" || $nume=="0") { ?>
          		<div class="dvFloat" style="color:red; text-align:center; height:250px;">Sorry! No queries are avaiable.</div>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>
</section>
