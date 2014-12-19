<?php
if(isset($_SESSION['UserClerkID']))
{
	$user_id=$_SESSION['UserClerkID'];
}
else
{
	$user_id="0";
}


if(isset($_SESSION['HospID']))
{
	$hospital_id=$_SESSION['HospID'];
}
else
{
	$hospital_id="0";
}

if(isset($_SESSION['UserType']))
{
	$user_type=$_SESSION['UserType'];
}
else
{
	$user_type="0";
}

$last_visit = GetValue("SELECT time as col FROM tbl_user_track  WHERE user_id = ".$_SESSION['UserClerkID']." and user_type = '".$_SESSION['UserType']."' order by id desc limit 1,1", "col");

$hospital_name = GetValue("SELECT hospital_name as col FROM tbl_hospital_master  WHERE hospital_id=".$hospital_id, "col");

$patient_count=GetValue("select count(doctor_id) as col from tbl_patients where doctor_id in (select doctor_id from tbl_doctor where hospital_name=".$hospital_id.")", "col");
//echo "select count(doctor_id) as col from tbl_patients where doctor_id in (select doctor_id from tbl_doctor where hospital_name=".$hospital_id.")";
//Alert ($patient_count);


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
                            <div class="nutritionistright">
                            	<div class="DvFloat">
                                	<div class="DvFloat f_grey" style="font-size: 18px;">Welcome! <?php echo $_SESSION['UserDocName'];?></div>
                                    <div class="f_grey welcomedv">
                                    	<div class="DvFloat">
                                            <div style="width: 25%; float: left;"><span style="font-weight: bold;">Your Last visit:</span></div>
                                            <div style="width: 25%; float: left;"><?php echo date('d-M-Y h:i:s',strtotime($last_visit)); ?></div>
                                            
                                        </div>
                                        <div class="DvFloat" style="padding-top: 14px; display:'';">
                                            <div style="width: 25%; float: left;"><span style="font-weight: bold;">Hospital Name</span></div>
                                            <div style="width: 25%; float: left;"><?php echo $hospital_name;?></div>
                                            <div style="width: 25%; float: left;"><span style="font-weight: bold;">Total Patients:</span></div>
                                            <div style="width: 25%; float: left;"><?php echo $patient_count;?></div>
                                            
                                        </div>
                                        <div class="DvFloat" style="padding-top: 14px; display:none;">Please click on the get queries tab below to start getting patient queries.</div>
                                        <div class="DvFloat" style="padding: 20px 0px;"><div style="width:450px; height:30px; float:left;"> 
                                        <a href="<?php echo $strHostName;?>/patients_delayed.php" class="button" style="text-align:center; padding: 0px 25px 0px 20px;">CLICK HERE TO GET Patients Summary</a></div></div>
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
