<script type="text/javascript" src="<?php echo $strHostName?>/js/health_steup_validation.js"></script>
<script type="text/javascript" src="<?php echo $strHostName?>/js/health_steup_insert_retrive.js"></script>
<script type="text/javascript" src="<?php echo $strHostName;?>/lib/jquery-1.10.1.min.js"></script>
<script>
function ShowNo(type, row)
{	
	if(type=="Show")
	{
		document.getElementById("PhnNumber"+row).style.display="none";	
		document.getElementById("ViewNumber"+row).style.display="";	
		
	}
	else
	{
		document.getElementById("ViewNumber"+row).style.display="";	
	}
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
          <?php $retrive_Array=$get_retrive->GetMDClients()  ?>
          <?php  while($get_array = mysql_fetch_array( $retrive_Array )){?>
          <div class="DvFloat" style="border-bottom: solid 0px #990033; padding-bottom:30px;">
            <div class="adviceonline_md" style="border:solid 0px red; margin-bottom:15px;">
              <div class="photoareabg">
                <div class="nutritionistphoto"> <img src="images/nutritionist_photo.png" alt="" title="" border="0"> </div>
              </div>
              <div class="nutritionistright">
                <div class="DvFloat">
                  <div class="DvFloat f_grey" style="font-size: 18px;"> <?php echo $patient_name=GetValue("select name as col from tbl_users where user_id=".$get_array['patient_id'], "col")?>  <span style="font-size:14px;">(<?php echo $patient_gender=GetValue("select gender as col from tbl_users where user_id=".$get_array['patient_id'], "col")?>, 26 years)</span></div>
                
                 
                  <div class="f_grey welcomedv" style="border:solid 0px red; width:80%; float:left;">
                    <div class="DvFloat">
                      <div style="float:left; width:120px; display:none;">
                        <div class="DvFloat">
                          <div style="width: 30%; float: left;"><span style="font-weight: bold;">Sex:</span></div>
                          <div style="width: 50%; float: left;"><?php echo $patient_gender=GetValue("select gender as col from tbl_users where user_id=".$get_array['patient_id'], "col")?></div>
                        </div>
                        <div style="width: 30%; float: left;"><span style="font-weight: bold;">Age:</span></div>
                        <div style="width: 50%; float: left;">26 years</div>
                      </div>
                      <div style="width: 600px; float: left; padding-right:10px; margin-top:-10px;">
                      	<div style="width: 100%; float: left;"><span style="font-weight: bold;">Complaint:</span></div>
                        <div style="width: 100%; float: left;"><?php echo $complaint=GetValue("select complaint as col from tbl_compose where user_id=".$get_array['patient_id'], "col")?></div>
                        <div style="width: 500%; float: left; padding-top:5px;"><span style="font-weight: bold;">Referred By:</span></div>
                        <div style="width: 100%; float: left;"><?php echo $doc_name=GetValue("select doctor_name as col from tbl_doctor where doctor_id=".$get_array['doctor_id'],"col");?></div>
                        
                         <div style="width: 100%; float: left; padding-top:5px;"><span style="font-weight: bold;">Doctor Advice:</span></div>
                        <div style="width: 100%; float: left;"><?php echo $get_array['doctor_advice'];?></div>
                      </div>
                      <div style="width:50px; float: left; border:solid 0px green; text-align:center; margin-top:15px;"> 
                      		
							
                       <?php 
							$rd = GetValue("SELECT randomid as col FROM  ".Patients." where patient_id=".$get_array['patient_id'], "col");
							$doctor_id = GetValue("SELECT doctor_id as col FROM  ".Patients." where patient_id=".$get_array['patient_id'], "col");
							$isaccepted = GetValue("SELECT isaccepted as col FROM  ".Patients." where patient_id=".$get_array['patient_id'], "col");
							//Alert ($doctor_id);
						?>
                        
                               
						 	<a class="button4" id="PhnNumber<?php echo $get_array['mail_id']?>" onclick="javascript:Patient_Ins('<?php echo $get_array['mail_id']?>')" style="cursor:pointer; float:left;">Accept</a>
                              
                                 
                     		<a class="button2" id="ViewNumber<?php echo $get_array['mail_id']?>"  style="cursor:pointer; float:left; width:100px; display:none;" href="<?php echo $strHostName;?>/page_doctor.php?dir=doctor/details&patient_id=<?php echo $converter->encode($get_array['user_id'])?>&query_id=<?php echo $converter->encode($get_array['mail_id']);?>">View Details</a>
                          
						  
						 
						
                            <input type="hidden" name="txtClientID<?php echo $get_array['mail_id']?>" id="txtClientID<?php echo $get_array['mail_id']?>" value="<?php echo $get_array['user_id']?>">
                            <input type="hidden" name="txtDoctorID<?php echo $get_array['mail_id']?>" id="txtDoctorID<?php echo $get_array['mail_id']?>" value="<?php echo $user_id;?>">
                            <input type="hidden" name="txtAcceptID<?php echo $get_array['mail_id']?>" id="txtAcceptID<?php echo $get_array['mail_id']?>" value="">
                  			<input type="hidden" name="txtRandomID<?php echo $get_array['mail_id']?>" id="txtRandomID<?php echo $get_array['mail_id']?>" value="<?php echo $get_array['mail_id']?>">
                            <input type="hidden" value="<?php echo $rd;?>" />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <?php  } ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>
</section>
