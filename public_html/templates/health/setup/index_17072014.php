<script type="text/javascript" src="<?php echo $strHostName?>/js/health_steup_validation.js"></script>
<script type="text/javascript" src="<?php echo $strHostName?>/js/health_steup_insert_retrive.js"></script>
<script>
function ViewDoctor(name, id)
{
	document.getElementById("DvDoctorForm").style.display="";
	document.getElementById("txtCommonDoctorType").value=name;
	document.getElementById("txtCommonDoctorID").value=id;
}
function showCancel()
{ 
	document.getElementById('DvDoctorForm').style.display = 'none'; 
}
</script>

<?php
	$login_count = $db->select("SELECT * FROM  tbl_user_track where user_id=".$_SESSION['UserID'].""); 
	$login_count = $db->row_count;
	
	//Alert ($login_count);
?>
<section>
  <div class="top_ou">
    <div class="top_in">
      <div class="top">
        <div class="b_crumb">&nbsp;</div>
         <div class="cal_12" style="padding-top: 15px;">
        	<h3 class="f_red" style="font-size:22px;">Great start towards healthy living! </h3>
            <p style="padding:15px 0 30px 0; line-height:25px;">Now create your personalized electronic health record (EHR) in our health set-up which will initiate your Health Dashboard. This process will take some time, remember for every good thing one needs to invest time. Every second spend on building your EHR will ensure your doctor knows you completely and can provide you with the best solution and bring convenience at your figure tips. If you wish to skip and fill the details later you can do so and access the health set-up on your profile drop down post log in.</p>

        </div>
        <h1 style="text-transform: inherit; font-size: 24px; display:none;">Update your <span class="f_green"> Health</span> & <span class="f_blue">Wealth</span> setup</h1>
        <h1 style="text-transform: inherit; font-size: 24px; margin-left:-30px;">Update your <span class="f_green"> Health</span> setup</h1>
        
        <div class="cal_12" style="padding-top: 15px;">
          <div class="hw_setupleft" style="padding-left:320px;">
            <div class="h_boxbg">
              <div class="health_icon"><img src="images/health_setup_icon.png" alt="" title="" border="0"></div>
              <div class="health_title"><span style="font-size: 30px; text-transform: uppercase;" class="f_green">Health</span><br>
                <span style="font-size: 30px; text-transform: uppercase;" class="f_darkblack">Setup</span> </div>
              <div style="width: 138px; float: left; padding-left: 90px; margin-top: 10px; text-align: center;">
                <div class="update_btn"><a href="#" class="buttongreen" onClick="javascript:Popup.showModal('dvpopup-form',null,null,{'screenColor':'#333333','screenOpacity':.6});">UPDATE NOW<span></span></a></div>
              </div>
            </div>
            <div class="h_greenbg"></div>
            <div style="width:600px; float: left; padding-bottom:50px; border:solid 0px green; margin-left:-143px;">
              <?php if($login_count>1) { ?>
                  <ul style="border:solid 0px red; float:left;width:300px;">
                    <?php if($doc_consult_count==0) { ?>
                         <li style="color:red;">Please complete Doctor Consultation.</li>
                    <?php } ?>
                    <?php if($medication_count==0) { ?>
                         <li style="color:red;">Please complete Medication.</li>
                    <?php } ?>
                    <?php if($allergies_count==0) { ?>
                         <li style="color:red;">Please complete Allergies.</li>
                    <?php } ?>
                    <?php if($hospitalization_count==0) { ?>
                         <li style="color:red;">Please complete Hospitalization.</li>
                    <?php } ?>
                    <?php if($immunization_count==0) { ?>
                         <li style="color:red;">Please complete Immunization.</li>
                    <?php } ?>
                    
                 </ul>
                <ul style="border:solid 0px red; float:left;width:150px;">
                 	 <?php if($health_problem_count==0) { ?>
                         <li style="color:red;">Please complete Health Problem.</li>
                    <?php } ?>
					 <?php if($family_history_count==0) { ?>
                         <li style="color:red;">Please complete Family History.</li>
                    <?php } ?>
                    <?php if($blood_pressure_count==0) { ?>
                         <li style="color:red;">Please complete Blood Pressure.</li>
                    <?php } ?>
                    <?php if($sugar_profile_count==0) { ?>
                         <li style="color:red;">Please complete Sugar Profile.</li>
                    <?php } ?>
                    <?php if($life_style_count==0) { ?>
                         <li style="color:red;">Please complete Life Style.</li>
                    <?php } ?>
                    <?php if($lipid_profile_count==0) { ?>
                         <li style="color:red;">Please complete Lipid Profile.</li>
                    <?php } ?>
                 </ul>
              <?php } ?>
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </div>
</section>
</div>
</section>
<div id="dvpopup-form" style="text-align: center; width: 100%;position:absoulte;margin:0px; margin-top:15px; display:none  ">
  <table cellpadding="0" cellspacing="0" border="0" width="100%" align="center">
    <tr>
      <td style="text-align:right; border:solid 0px red; float:right"><div style="margin: 5px 0px 0px -23px; position: absolute; text-align:right"> <a href="javascript:Popup.hide('dvpopup-form');" target="_parent" style="text-decoration: none; color: #fff;"> <img src="images/close.png" alt="" title="" border="0" /> </a> </div></td>
    </tr>
    <tr>
      <td valign="top" align="center" style="padding: 10px 10px 10px 10px;"><div class="DvFloat">

	  <!--<p><a href="javascript:countries.cycleit('prev')" style="margin-right: 25px; text-decoration:none">Back</a> <a href="javascript: countries.expandit(3)">Click here to select last tab</a> <a href="javascript:countries.cycleit('next')" style="margin-left: 25px; text-decoration:none">Forward</a></p>-->


          <div class="TabDv">
            <div  style="background-color:#666666;padding:10px 5px;">
			
              <ul id="tabstabs" class="shadetabs">
                <li  class="selected"><a href="#" rel="tabs1" class="selected" >Doctor Consultaion</a></li>
                <li><a href="#" rel="tabs2">Medication</a></li>
                <li><a href="#" rel="tabs3">Allergies</a></li>
                <li><a href="#" rel="tabs4">Hospitalization</a></li>
                <li><a href="#" rel="tabs5" >Immunization</a></li>
                <li><a href="#" rel="tabs6">Health Problems</a></li>
                <li><a href="#" rel="tabs7">Family History</a></li>
                <li><a href="#" rel="tabs8">Daily Tracking</a></li>
              </ul>
            </div>
            <div class="TabContentDetails">
              <div id="tabs1" class="tabcontent">
                <?php include "view_files/doc_consult.inc.php";?>
              </div>
              <div id="tabs2" class="tabcontent">
                <?php include "view_files/medication.inc.php";?>
              </div>
              <div id="tabs3" class="tabcontent">
                <?php include "view_files/allergies.inc.php";?>
              </div>
              <div id="tabs4" class="tabcontent"> 
                <?php include "view_files/hospitalization.inc.php";?>
              </div>
              <div id="tabs5" class="tabcontent">
                <?php include "view_files/immunization.inc.php";?>
              </div>
              <div id="tabs6" class="tabcontent">
                <?php include "view_files/health_problems.inc.php";?>
              </div>
              <div id="tabs7" class="tabcontent">
                <?php include "view_files/family_history.inc.php";?>
              </div>
              <div id="tabs8" class="tabcontent">
                <?php include "view_files/daily_tracking.inc.php";?>
              </div>
          </div>
        </div></div></td>
    </tr>
  </table>
</div>
<div id="dvpopup-form1" style="text-align: center; width: 780px;position:absoulte;margin-left:15%; margin-top:15px;display:none ">
  <table cellpadding="0" cellspacing="0" border="0" width="400px" align="center">
    <tr>
      <td align="center" style="padding: 10px 37px 10px 350px"><div style="margin: 15px 0px 0px 333px; position: absolute;"> <a href="javascript:Popup.hide('dvpopup-form1');" target="_parent" style="text-decoration: none; color: #fff;"> <img src="images/close.png" alt="" title="" border="0" /> </a> </div></td>
    </tr>
    <tr>
      <td valign="top" align="center" style="padding: 10px 10px 10px 10px;"><div class="DvFloat">
          <div class="dvWhitePopup_Box">
			<?php include "view_files/upload_gallery.inc.php";?>
          </div>
        </div></td>
    </tr>
  </table>
</div>

<div id="dvpopup-form2" style="text-align: center; width: 780px;position:absoulte;margin-left:15%; margin-top:15px;display:none ">
  <table cellpadding="0" cellspacing="0" border="0" width="400px" align="center">
    <tr>
      <td align="center" style="padding: 10px 37px 10px 350px"><div style="margin: 15px 0px 0px 333px; position: absolute;"> <a href="javascript:Popup.hide('dvpopup-form2');" target="_parent" style="text-decoration: none; color: #fff;"> <img src="images/close.png" alt="" title="" border="0" /> </a> </div></td>
    </tr>
    <tr>
      <td valign="top" align="center" style="padding: 10px 10px 10px 10px;"><div class="DvFloat">
          <div class="dvWhitePopup_Box">
			<?php include "view_files/upload_gallery_1.inc.php";?>
          </div>
        </div></td>
    </tr>
  </table>
</div>



<div class="frmclickhere" id="DvDoctorForm" style="display:none; position:absolute; z-index:99999; text-align:center; top:100px; margin:0 auto; left:400px;">
    <form method="post" id="signup" action="">
        <div style="border-bottom: solid 2px #d4d4d4; background-color: #f7f8f3; padding: 12px 11px; float: left; width: 95%; font-size: 14px; font-weight: bold;">
            Add Doctor 
         </div>
         <div style="text-align:right; margin-top:-50px; float:right;">
            <a onClick="showCancel();"><img src="<?php echo $strHostName;?>/images/close.png" /></a>
         </div>
         <?php include "view_files/common_doctor.inc.php";?>
        
    </form>
</div> 



<input type="hidden" name="txtDocConsultCount" id="txtDocConsultCount" value="<?php echo $doc_consult_count;?>"  />
<input type="hidden" name="txtMedicationCount" id="txtMedicationCount" value="<?php echo $medication_count;?>"  />
<input type="hidden" name="txtAllergiesCount" id="txtAllergiesCount" value="<?php echo $allergies_count;?>"  />
<input type="hidden" name="txtHospitalizationCount" id="txtHospitalizationCount" value="<?php echo $hospitalization_count;?>"  />
<input type="hidden" name="txtImmunizationCount" id="txtImmunizationCount" value="<?php echo $immunization_count;?>"  />
<input type="hidden" name="txtHealthProblemCount" id="txtHealthProblemCount" value="<?php echo $health_problem_count;?>"  />
<input type="hidden" name="txtFamilyHistoryCount" id="txtDocConsultCount" value="<?php echo $family_history_count;?>"  />
<input type="hidden" name="txtDocConsultCount" id="txtDocConsultCount" value="<?php echo $blood_pressure_count;?>"  />
<input type="hidden" name="txtDocConsultCount" id="txtDocConsultCount" value="<?php echo $sugar_profile_count;?>"  />
<input type="hidden" name="txtDocConsultCount" id="txtDocConsultCount" value="<?php echo $life_style_count;?>"  />
<input type="hidden" name="txtDocConsultCount" id="txtDocConsultCount" value="<?php echo $lipid_profile_count;?>"  />

<script>RetriveReocrds('Doc_Consult','dvDocConsult');</script>

<script type="text/javascript">

var countries=new ddtabcontent("tabstabs");
countries.setpersist(true);
countries.setselectedClassTarget("link"); //"link" or "linkparent"
countries.init();

var countries1=new ddtabcontent("tabstabs1");
countries1.setpersist(true);
countries1.setselectedClassTarget("link"); //"link" or "linkparent"
countries1.init();

</script>
<script>
	Pres_Report_Show_Hide();
    Intake_Reminder_Show_Hide();
	Purchase_Reminder_Show_Hide();
	Daily_Frequency_enabledisable();
</script>

</body>
</html>

<script type="text/javascript" src="<?php echo $strHostName;?>/js/jquery.form-2.4.0.min.js"></script>
<script type="text/javascript" src="<?php echo $strHostName;?>/js/jqeasy.dropdown.min.js"></script>

