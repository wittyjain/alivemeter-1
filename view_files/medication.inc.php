<script>
function showmform(){ 
	document.getElementById('ShowMDiv').style.display = 'block'; 
	
	if(document.getElementById("HideMediDivLink")!=null)
	{
		document.getElementById('HideMediDivLink').style.display = ''; 
	}
	
	if(document.getElementById("ShowMediDivLink")!=null)
	{
		document.getElementById('ShowMediDivLink').style.display = 'none'; 
	}
	
}


function showMCancel()
{ 
	
	document.getElementById('ShowMDiv').style.display = 'none'; 
	if(document.getElementById("ShowMediDivLink")!=null)
	{
		document.getElementById('ShowMediDivLink').style.display = ''; 
	}
	
	
	if(document.getElementById("HideMediDivLink")!=null)
	{
		document.getElementById('HideMediDivLink').style.display = 'none'; 
	}
	
	
	
}
</script>


<?php $iDay="0";$iMonth="0";$iYear="0";?>
<?php 
if(isset($_GET['dir'])) 
{
	$dir = $_GET['dir'];
}

if(isset($_GET['patient_id'])) 
{	
	$user_id=$_GET['patient_id'];
}
else
{
	$user_id=0;
}

$medication_count =GetValue("select Count(*)  as col from tbl_medication  where user_id=".$_SESSION['UserID']." and isactive=1 and isdeleted=0 ","col");
$medication_count_na=GetValue("select Count(*) as col from tbl_user_not_applicable where user_id=".$_SESSION['UserID']." and isactive=1 and isdeleted=0 and type='Medication'","col");
$medication_count=$medication_count+$medication_count_na;
//Alert ($user_id);
	
?>
<div  style="width:99%; border:solid 0px red;">
  <div class="dvFloat formpadding">
    <div class="formlabel1">
      <label class="formlabel1">
      <?php if($dir=="health/medication") { ?>
      <h2 class="Tab_Title">Medication</h2>
      <?php } else { ?>
      <h2 class="Tab_Title">LIST</h2>
      <?php } ?>
     	
      </label>
    </div>
    <div class="formcontrol2"> &nbsp; </div>
  </div>
  <div class="dvFloat formpadding1"  id="dvMedication" name="dvMedication" style="border-bottom:0px;"> 
  &nbsp; </div>
  <div class="dvFloat"  style="display:<?php if($_SESSION['UserType']!="Doctor"  && $_SESSION['UserType']!="MD" && $_SESSION['UserType']!="Nutritionist"){ echo "";} else { echo "none"; } ?>"> 
      <div class="dvFloat formpadding1" style="padding-top:20px;">
        <div class="formlabel1">
           <?php if($_SESSION['UserType']!="Doctor" && $_SESSION['UserType']!="MD" && $_SESSION['UserType']!="Nutritionist"){ ?>
                <label class="formlabel1" style="border-bottom:solid 0px red; width:500px; padding: 15px 13px 0px 13px;">
              <?php if($dir=="health/medication") { ?>
              		 <input type="hidden" value="1" id="MediDivID" />
                    <a  onClick="showmform();" style="cursor:pointer" >
                    	<img src="images/nutritionist/add_to_list.jpg" alt="" title="" border="0" style="float:left; margin-right:10px;" id="ShowMediDivLink">
                    </a>
                    
                    <a  onClick="showMCancel();" style="cursor:pointer;">
                    	<img src="images/nutritionist/add_minus.jpg" alt="" title="" border="0" style="float:left; margin-right:10px; display:none;"  id="HideMediDivLink">
                       
                    </a>
                   
              <?php } else { ?>
               <h2 class="Tab_Title" style="border:solid 0px green; width:110px; float:left;" >Add to list</h2>
              <?php } ?>
               <h5 style="color:red; display:none;  width:200px; float:left; font-size:13px;" id="dvEditMedi"> (You are editing selected list.)</h5>
              </label>
           <?php } else { ?>
           		 <h2 class="Tab_Title" style="border:solid 0px green; width:110px; float:left;">View list</h2>
           <?php } ?>
           
        </div>
        <div class="formcontrol2" style="display: none;"> &nbsp; </div>
      </div>
   <?php if($dir=="health/medication") { ?>
     <div class="dvFloat" id="ShowMDiv" style="display:none;">
     <?php } else { ?>
      <div class="dvFloat" id="ShowMDiv">
     <?php } ?>
      <div class="dvFloat formpadding1">
        <div class="formlabel1">
          <label class="formlabel1">Medicine<span class="redtxt">*</span> </label>
        </div>
        <div class="formcontrol2" style="width: 438px;">
          <input type="text" name="txt_MD_Medicine" id="txt_MD_Medicine" value="" />
          <input id="txt_MD_medication_id" name="txt_MD_medication_id" value="" type="hidden"/>
        </div>
      </div>
      <div class="dvFloat formpadding1">
        <div class="formlabel1">
          <label class="formlabel1">Dosage<span class="redtxt">*</span> </label>
        </div>
        <div class="formcontrol2" style="width: 438px;">
          <input type="text" name="txt_MD_Dosage" id="txt_MD_Dosage" value="" />
          <div class="div_input_text1" style="font-size: 12px;"> (500 mg/ 20ml, dosages per day) </div>
        </div>
      </div>
      <div class="dvFloat formpadding1">
        <div class="formlabel1">
          <label class="formlabel1">Duration <span class="redtxt">*</span> </label>
        </div>
        <div class="formcontrol2" style="width: 438px;">
          <input type="text" name="txt_MD_Duration" id="txt_MD_Duration" value="" />
          <div class="div_input_text1" style="font-size: 12px;">(no. of days or week) </div>
        </div>
      </div>
      <div class="dvFloat formpadding1">
        <div class="formlabel1">
          <label class="formlabel1">Currently Taking this Medicine ?<span class="redtxt">*</span> </label>
        </div>
        <div class="formcontrol2" style="width: 438px;">
          <div style="float:left; text-align:left; width:30%; border:solid 0px red;">
            <input type="radio" id="MedicineYes" name="txt_MD_Currently_Medicine" value="Yes" align="absmiddle" style=" margin-left: 0px; float: left; margin-top: 5px;">
            <label for="Yes">Yes</label>
            &nbsp;&nbsp;
            <input type="radio" id="MedicineNo" name="txt_MD_Currently_Medicine" value="No" checked  align="absmiddle" style="margin-top: 5px;">
            <label for="No">No</label>
            &nbsp;&nbsp; </div>
        </div>
      </div>
      <div class="dvFloat formpadding1">
        <div class="formlabel1">
          <label class="formlabel1">Followed Prescription ?<span class="redtxt">*</span> </label>
        </div>
        <div class="formcontrol2" style="width: 438px;">
          <div style="float:left; text-align:left; width:30%; border:solid 0px red;">
            <input type="radio" id="PreYes" name="txt_MD_Followed_Prescription" value="Yes" style="margin-left: 0px; float: left; margin-top: 5px;">
            <label for="Yes">Yes</label>
            &nbsp;&nbsp;
            <input type="radio" id="PreYes" name="txt_MD_Followed_Prescription" value="No" checked  align="absmiddle" style="margin-top: 5px;">
            <label for="No">No</label>
            &nbsp;&nbsp; </div>
        </div>
      </div>
      <div class="dvFloat formpadding1">
        <div class="formlabel1">
          <label class="formlabel1">Health Problem<span class="redtxt">*</span> </label>
        </div>
        <div class="formcontrol2" style="width: 438px;">
          <input type="text" name="txt_MD_Health_Problem" id="txt_MD_Health_Problem" value="" />
        </div>
      </div>
      <div class="dvFloat formpadding1">
        <div class="formlabel1">
          <label class="formlabel1">Instruction For Medicine </label>
        </div>
        <div class="formcontrol2" style="width: 438px;">
          <textarea id="txt_MD_Instruction_For_Medicine" name="txt_MD_Instruction_For_Medicine"></textarea>
        </div>
      </div>
      <div class="dvFloat formpadding1">
        <div class="formlabel1">
          <table cellpadding="0" cellspacing="0" style="width:200px;">
            <tr>
              <td valign="top" style="text-align:left; width:20px;"><input type="checkbox" id="Chk_MD_Setup_Intake_Reminder" name="Chk_MD_Setup_Intake_Reminder"  onchange="javascript:Intake_Reminder_Show_Hide();" /></td>
              <td valign="middle" style="text-align:left; width:170px;"><label for="Male">Setup Intake Reminder </label></td>
            </tr>
          </table>
        </div>
        <div class="formcontrol2" style="width: 438px;"> &nbsp; </div>
      </div>
      <div id="divIntake_Reminder" style="display:none">
        <div class="dvFloat formpadding1">
          <div class="formlabel1">
            <label class="formlabel2">Start Date </label>
          </div>
          <div class="formcontrol2" style="width: 438px;">
            <div class="dvFloat">
              <div style="float:left; padding:0px 15px 0px 0px">
                <select id="cmb_MD_Intake_Reminder_Start_Date"  name="cmb_MD_Intake_Reminder_Start_Date" title="" style="width:60px;">
                  <option value="0" selected="selected">DD</option>
                  <?php for($iDay=1;$iDay < 32;$iDay++){ ?>
                  <option value="<?php echo $iDay?>"><?php echo $iDay?></option>
                  <?php } ?>
                </select>
              </div>
              <div style="float:left; padding:0px 15px 0px 0px">
                <select id="cmb_MD_Intake_Reminder_Start_Month" name="cmb_MD_Intake_Reminder_Start_Month" title="" style="width:60px;">
                  <option value="0">MM</option>
                  <?php for($iMonth=1;$iMonth < 13;$iMonth++){ ?>
                  <option value="<?php echo $iMonth?>"><?php echo $iMonth?></option>
                  <?php } ?>
                </select>
              </div>
            </div>
          </div>
        </div>
        <div class="dvFloat formpadding1">
          <div class="formlabel1">
            <label class="formlabel2">End Date</label>
          </div>
          <div class="formcontrol2" style="width: 438px;">
            <div class="dvFloat">
              <div style="float:left; padding:0px 15px 0px 0px">
                <select id="cmb_MD_Intake_Reminder_End_Date" name="cmb_MD_Intake_Reminder_End_Date" title="" style="width:60px;">
                  <option value="0">DD</option>
                  <?php for($iDay=1;$iDay < 32;$iDay++){ ?>
                  <option value="<?php echo $iDay?>"><?php echo $iDay?></option>
                  <?php } ?>
                </select>
              </div>
              <div style="float:left; padding:0px 15px 0px 0px">
                <select id="cmb_MD_Intake_Reminder_End_Month" name="cmb_MD_Intake_Reminder_End_Month" title="" style="width:60px;">
                  <option value="0">MM</option>
                  <?php for($iMonth=1;$iMonth < 13;$iMonth++){ ?>
                  <option value="<?php echo $iMonth?>"><?php echo $iMonth?></option>
                  <?php } ?>
                </select>
              </div>
            </div>
          </div>
        </div>
        <div class="dvFloat formpadding1">
          <div class="formlabel1">
            <label class="formlabel2">Daily Frequency</label>
          </div>
          <div class="formcontrol2" style="width: 438px;">
            <div class="formcontrol2">
              <div class="dvFloat">
                <div style="float:left; padding:5px 10px 0px 0px; width:100px; text-align: left; margin-left: -3px;">
                  <table cellpadding="0" cellspacing="0" style="width:50px; text-align: left;">
                    <tbody>
                      <tr>
                        <td valign="top" style="text-align:left; width:20px;"><input type="checkbox" id="Chk_MD_Daily_Frequency_Morning" name="Chk_MD_Daily_Frequency_Morning" onChange="Daily_Frequency_enabledisable();" /></td>
                        <td valign="middle" style="text-align:left; width:30px;"><label for="Male">Morning </label></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div style="float:left; padding:5px 10px 0px 0px; width:100px;">
                  <table cellpadding="0" cellspacing="0" style="width:50px;">
                    <tbody>
                      <tr>
                        <td valign="top" style="text-align:left; width:20px;"><input type="checkbox" id="Chk_MD_Daily_Frequency_Afternoon" name="Chk_MD_Daily_Frequency_Afternoon" onChange="Daily_Frequency_enabledisable();" /></td>
                        <td valign="middle" style="text-align:left; width:30px;"><label for="Male">Afternoon</label></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div style="float:left; padding:5px 10px 0px 0px; width:100px;">
                  <table cellpadding="0" cellspacing="0" style="width:50px;">
                    <tbody>
                      <tr>
                        <td valign="top" style="text-align:left; width:20px;"><input type="checkbox" id="Chk_MD_Daily_Frequency_Evening" name="Chk_MD_Daily_Frequency_Evening" onChange="Daily_Frequency_enabledisable();" /></td>
                        <td valign="middle" style="text-align:left; width:30px;"><label for="Male">Evening </label></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div style="float:left; padding:5px 10px 0px 0px; width:100px;">
                  <table cellpadding="0" cellspacing="0" style="width:50px;">
                    <tbody>
                      <tr>
                        <td valign="top" style="text-align:left; width:20px;"><input type="checkbox" id="Chk_MD_Daily_Frequency_Night" name="Chk_MD_Daily_Frequency_Night" onChange="Daily_Frequency_enabledisable();" /></td>
                        <td valign="middle" style="text-align:left; width:30px;"><label for="Male">Night</label></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="dvFloat formpadding1">
          <div class="formlabel1">
            <label class="formlabel2">&nbsp;</label>
          </div>
          <div class="formcontrol2" style="width: 438px;">
            <div class="formcontrol2">
              <div class="dvFloat">
                <div style="float:left; padding:0px 5px 0px 0px">
                  <div style="float:left; padding:0px 5px 0px 0px">
                    <select id="Chk_MD_Daily_Frequency_HH_Morning" name="Chk_MD_Daily_Frequency_HH_Morning" title="" style="width:45px;" disabled>
                      <option value="0">HH</option>
                      <?php for($iHour=7;$iHour < 13;$iHour++){ ?>
                      <option value="<?php echo $iHour?>"><?php echo $iHour?></option>
                      <?php } ?>
                    </select>
                  </div>
                  <div style="float:left; padding:0px 5px 0px 0px">
                    <select id="Chk_MD_Daily_Frequency_Min_Morning" name="Chk_MD_Daily_Frequency_Min_Morning" title="" style="width:55px;" disabled>
                      <option value="Min">Min</option>
                      <option value="0">0</option>
                      <option value="5">5</option>
                      <option value="10">10</option>
                      <option value="15">15</option>
                      <option value="20">20</option>
                      <option value="25">25</option>
                      <option value="30">30</option>
                      <option value="35">35</option>
                      <option value="40">40</option>
                      <option value="45">45</option>
                      <option value="50">50</option>
                      <option value="55">55</option>
                    </select>
                  </div>
                </div>
                <div style="float:left; padding:0px 5px 0px 0px">
                  <div style="float:left; padding:0px 5px 0px 0px">
                    <select id="Chk_MD_Daily_Frequency_HH_Afternoon" name="Chk_MD_Daily_Frequency_HH_Afternoon" title="" style="width:45px;" disabled>
                      	  <option value="0">HH</option>
                          <option value="12">12</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                    </select>
                  </div>
                  <div style="float:left; padding:0px 5px 0px 0px">
                    <select id="Chk_MD_Daily_Frequency_Min_Afternoon" name="Chk_MD_Daily_Frequency_Min_Afternoon" title="" style="width:55px;" disabled>
                      <option value="Min">Min</option>
                      <option value="0">0</option>
                      <option value="5">5</option>
                      <option value="10">10</option>
                      <option value="15">15</option>
                      <option value="20">20</option>
                      <option value="25">25</option>
                      <option value="30">30</option>
                      <option value="35">35</option>
                      <option value="40">40</option>
                      <option value="45">45</option>
                      <option value="50">50</option>
                      <option value="55">55</option>
                    </select>
                  </div>
                </div>
                <div style="float:left; padding:0px 5px 0px 0px">
                  <div style="float:left; padding:0px 5px 0px 0px">
                    <select id="Chk_MD_Daily_Frequency_HH_Evening" name="Chk_MD_Daily_Frequency_HH_Evening" title="" style="width:45px;" disabled>
                      <option value="0">HH</option>
                       	  <option value="4">4</option>
                          <option value="5">5</option>
                          <option value="6">6</option>
                          <option value="7">7</option>
                    </select>
                  </div>
                  <div style="float:left; padding:0px 5px 0px 0px">
                    <select id="Chk_MD_Daily_Frequency_Min_Evening" name="Chk_MD_Daily_Frequency_Min_Evening" title="" style="width:55px;" disabled>
                      <option value="Min">Min</option>
                      <option value="0">0</option>
                       <option value="5">5</option>
                      <option value="10">10</option>
                      <option value="15">15</option>
                      <option value="20">20</option>
                      <option value="25">25</option>
                      <option value="30">30</option>
                      <option value="35">35</option>
                      <option value="40">40</option>
                      <option value="45">45</option>
                      <option value="50">50</option>
                      <option value="55">55</option>
                    </select>
                  </div>
                </div>
                <div style="float:left; padding:0px 5px 0px 0px">
                  <div style="float:left; padding:0px 5px 0px 0px">
                    <select id="Chk_MD_Daily_Frequency_HH_Night" name="Chk_MD_Daily_Frequency_HH_Night" title="" style="width:45px;" disabled>
                      <option value="0">HH</option>
                      	  <option value="8">8</option>
                          <option value="9">9</option>
                          <option value="10">10</option>
                          <option value="11">11</option>
                           <option value="12">12</option>
                    </select>
                  </div>
                  <div style="float:left; padding:0px 5px 0px 0px">
                    <select id="Chk_MD_Daily_Frequency_Min_Night" name="Chk_MD_Daily_Frequency_Min_Night" title="" style="width:55px;" disabled>
                      <option value="Min">Min</option>
                      <option value="0">0</option>
                      <option value="5">5</option>
                      <option value="10">10</option>
                      <option value="15">15</option>
                      <option value="20">20</option>
                      <option value="25">25</option>
                      <option value="30">30</option>
                      <option value="35">35</option>
                      <option value="40">40</option>
                      <option value="45">45</option>
                      <option value="50">50</option>
                      <option value="55">55</option>
                      
                    </select>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="dvFloat formpadding1">
        <div class="formlabel1">
          <table cellpadding="0" cellspacing="0" style="width:200px;">
            <tr>
              <td valign="top" style="text-align:left; width:20px;	"><input type="checkbox" id="Chk_MD_Setup_Purchase_Reminder" name="Chk_MD_Setup_Purchase_Reminder" onChange="javascript:Purchase_Reminder_Show_Hide();" /></td>
              <td valign="middle" style="text-align:left; width:170px;"><label for="Female">Setup Purchase Reminder </label></td>
            </tr>
          </table>
        </div>
        <div class="formcontrol2"> </div>
      </div>
      <div id="divPurchase_Reminder" style="display:none ">
        <div class="dvFloat formpadding1">
          <div class="formlabel1">
            <label class="formlabel2">Purchase Reminder<span class="redtxt">*</span> </label>
          </div>
          <div class="formcontrol2" style="width: 438px;">
            <div class="dvFloat">
              <div style="float:left; padding:0px 15px 0px 0px">
                <select id="cmb_MD_Purchase_Reminder_Date" name="cmb_MD_Purchase_Reminder_Date" title="" style="width:60px;">
                  <option value="0">DD</option>
                  <?php for($iDay=1;$iDay < 32;$iDay++){ ?>
                  <option value="<?php echo $iDay?>"><?php echo $iDay?></option>
                  <?php } ?>
                </select>
              </div>
              <div style="float:left; padding:0px 15px 0px 0px">
                <select id="cmb_MD_Purchase_Reminder_Month" name="cmb_MD_Purchase_Reminder_Month" title="" style="width:60px;">
                  <option value="0">MM</option>
                  <?php for($iMonth=1;$iMonth < 13;$iMonth++){ ?>
                  <option value="<?php echo $iMonth?>"><?php echo $iMonth?></option>
                  <?php } ?>
                </select>
              </div>
            </div>
          </div>
        </div>
        <div class="dvFloat formpadding1" style=" display:none;">
          <div class="formlabel1">
            <label class="formlabel2">Alert On </label>
          </div>
          <div class="formcontrol2">
            <div class="dvFloat">
              <div style="float:left; padding:0px 15px 0px 0px">
                <table cellpadding="0" cellspacing="0" style="width:50px;">
                  <tbody>
                    <tr>
                      <td valign="top" style="text-align:left; width:20px;	"><input type="checkbox" id="Chk_MD_Purchase_alert_Email" name="Chk_MD_Purchase_alert_Email"></td>
                      <td valign="middle" style="text-align:left; width:30px;"><label for="Male">Email </label></td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div style="float:left; padding:0px 15px 0px 0px">
                <table cellpadding="0" cellspacing="0" style="width:50px;">
                  <tbody>
                    <tr>
                      <td valign="top" style="text-align:left; width:20px;	"><input type="checkbox" id="Chk_MD_Purchase_alert_Mobile" name="Chk_MD_Purchase_alert_Mobile"></td>
                      <td valign="middle" style="text-align:left; width:30px;"><label for="Male">Mobile</label></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
       <?php if($_SESSION['UserType']!="Doctor" && $_SESSION['UserType']!="MD" && $_SESSION['UserType']!="Nutritionist"){ ?>
      	<div class="dvFloat formpadding1"  style="padding:10px 0px 25px 0px">
        <div class="formlabel1"> &nbsp; </div>
        <div class="formcontrol2" style="width: 438px;">
          <div style=" width:84px; height:30px; float:left;padding-right:10px;"> <a class="button4" onclick="javascript:Medication_Ins(this);" style="cursor:pointer;">SUBMIT</a></div>
          <?php if($dir!="health/medication") { ?>
          				
                        
          <?php if ($medication_count>0) { ?> 
		  <div style="width:156px; height:30px; float:left;padding-right:10px;" id="dvMediNA"> <a class="button2" style="background-color:#767676;">NOT APPLICABLE</a></div>
          <?php } else { ?>
         <div style=" width:156px; height:30px; float:left;padding-right:10px;" id="dvMediNA1"> <a class="button2" onclick="javascript:Not_Applicable_Record('Medication','2','Yes','dvMediNA1');" style="cursor:pointer" >NOT APPLICABLE</a></div>
          <?php } ?>
		     <div class="dvFloat" style="font-size:12px; padding-top:10px;  color:#666666; text-align:left;">
             	(<span style="font-weight: bold;">Note:</span> If you don&lsquo;t have the data now, you can<br />submit it later by clicking Not Applicable button.)
             </div> 
                        
          <div style=" width:156px; height:30px; float:left;padding-right:10px; display:none;"> <a class="button2" >SKIP FOR NOW</a></div>
          <?php } else { ?>
          <div style=" width:85px; height:30px; float:left;padding-right:10px; display:none;"> <a class="button2" onClick="showMCancel();" style="cursor:pointer;" >Cancel</a></div>
          <?php } ?>
        </div>
      </div>
      <?php } ?>
      
      <?php if($dir!="health/medication") { ?>
      <div class="dvFloat formpadding1"  style="padding:15px 0px">
        <div style=" width:156px; height:30px; float:left;padding-right:20px;"> <a href="#"  onclick="javascript:countries.expandit(0)" ><img src="images/register_steps/doctor_consultation_strip_dis.jpg" alt="" /></a></div>
        <div style=" width:156px; height:30px; float:right;padding-right:75px;">
			
             <a href="#" onclick="javascript:OpenTab('2','true')" id="aDNextTab_2" style="cursor:text;display:<?php if($medication_count > 0) {echo"none" ;}?>"><img src="images/register_steps/allergies_strip_g.jpg" alt="" /></a>
             
             <a href="#" onclick="javascript:OpenTab('2','true')" id="aENextTab_2" style="cursor:pointer;display:<?php if($medication_count== 0) {echo"none" ;}?>"><img src="images/register_steps/allergies_strip.jpg" alt="" /></a> 
            
           <!-- <a href="#" onclick="javascript:OpenTab('2','true')"><img src="images/register_steps/allergies_strip.jpg" alt="" /></a>-->
            
            
            
			<a  onclick="javascript:countries.expandit(4)" id="dvNextTabOn_2" style="display:none"  href="#"><img src="images/register_steps/allergies_strip.jpg" alt="" /></a>
		</div>
      </div>
      <?php } ?>
   </div>
  </div>
</div>
