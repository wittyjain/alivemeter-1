<div class="dvFloat formpadding1" id="dvMDComments" name="dvMDComments" style="border:solid 0px red;"> &nbsp; </div>
<?php
	//$id=$converter->encode("18");
	//echo $id;
$iDay="0";$iMonth="0";$iYear="0";	
if(isset($_GET['patient_id'])){
	$patient_id=$converter->decode($_GET['patient_id']);
	/// for setting sesstion for user in iframe
	$_SESSION['UserID']=$patient_id;
}
else
{
	$patient_id=0;
}




if(isset($_GET['compose_id'])){
	$compose_id=$converter->decode($_GET['compose_id']);
	$accept_id = GetValue("SELECT accept_id as col FROM  ".Patients." where compose_id=".$compose_id, "col");
	
}
else
{
	$compose_id=0;
	$accept_id=0;
}

//Alert ($strGetVideoQueryParameter);
	
$iYearcurrent=2014;

$iDayCur=date('d');	
$iMonthCur=date('m');	
$iYearCur=date('Y');	


?>
<?php
 if(isset($_SESSION['UserMDID']))
 {
	$md_id=$_SESSION['UserMDID'];
 }
 else
 {
	$md_id=0;
 }

$doc_comment_id=GetValue("select comment_id as col from tbl_doctor_comment where compose_id=".$compose_id." and md_id=".$md_id." order by comment_id desc limit 1","col");
$doctor_id = GetValue("SELECT doctor_id as col FROM  ".Patients." where compose_id=".$compose_id, "col");
$hospital_id=GetValue("SELECT hospital_name as col FROM  ".Doctor." where doctor_id=".$md_id, "col");
//Alert ($compose_id);
$hospital_name=GetValue("SELECT hospital_name as col FROM  ".Hospital_Master." where hospital_id=".$hospital_id, "col");

$strQuertyStyle=GetValue("select comment_id as col from tbl_md_comment where compose_id=".$compose_id. " and doc_comment_id=".$doc_comment_id,"col");
//Alert ($strQuertyStyle);
if($strQuertyStyle=="" || $strQuertyStyle=="0")
{
	$strQuertyStyle="";
}
else
{
	$strQuertyStyle="none";
}


if($strGetVideoQueryParameter=="Yes")
{
	$strVideoQuertyStyle="";
	$strVideQueryValue="1";
}
else
{
	$strVideoQuertyStyle="none";
	$strVideQueryValue="0";
}

?>


<script>
function settimeslot()
{
	////alert ("dfdf");
	if(document.getElementById("ddl_App_From").selectedIndex > 17 || document.getElementById("ddl_App_To").selectedIndex > 17)
	{
		document.getElementById("ddl_App_Slot").value="PM";
	}
	else
	{
		document.getElementById("ddl_App_Slot").value="AM";
	}
	
	
	
}	
</script>

<input type="hidden" name="txtPatientID" id="txtPatientID" value="<?php echo $patient_id;?>" style="width:20px;"/>
<input type="hidden" name="txtDoctorID" id="txtDoctorID" value="<?php echo $doctor_id;?>" style="width:20px;"/>
<input type="hidden" name="txtMDID" id="txtMDID" value="<?php echo $md_id;?>" style="width:20px;"/>
<input type="hidden" name="txtComposeID" id="txtComposeID" value="<?php echo $compose_id;?>" style="width:20px;"/>
<input type="hidden" name="txtAcceptID" id="txtAcceptID" value="<?php echo $accept_id;?>" style="width:20px;"/>
<input type="hidden" name="txtCommentID" id="txtCommentID" value="" style="width:20px;"/>
<input type="hidden" name="txtType" id="txtType" value="Patient" style="width:20px;"/>
<input type="hidden" name="txtHospitalID" id="txtHospitalID" value="<?php echo $hospital_id;?>" style="width:20px;"/>
<input type="hidden" name="txtHospitalName" id="txtHospitalName" value="<?php echo $hospital_name;?>" style="width:20px;"/>
<input type="hidden" name="txtDoc_Comment_ID" id="txtDoc_Comment_ID" value="<?php echo $doc_comment_id;?>" style="width:20px;"/>


<div class="dvFloat" id="dvLoader" style="display:none; text-align:center; "><img src="<?php echo $strHostName;?>/images/loader.gif" /></div>
<div class="dvFloat" style="display:<?php echo $strQuertyStyle;?>" id="trQuery">
<div class="DvFloat" style="border-bottom: solid 0px #e4e4e4;border-top: solid 0px #e4e4e4; margin:10px 0px 0px 0px">
  
<div class="DvFloat" style="border-bottom: solid 0px #e4e4e4;border-top: solid 1px #e4e4e4; margin:10px 0px 0px 0px">
   <div style="float:left; width:82.5%;"><h1 class="f_red" style="text-align: left; font-size: 18px; font-weight:bold;  margin: 7px;">MD&rsquo;s comments</h1></div>
    <?php if($_SESSION['UserType']=="MD") { ?>
   <div style="float:left; width:15%; margin:10px 0;"><a href="<?php echo $strHostName;?>/page_doctor.php?dir=md/timings" target="_blank" class="button4" style="width:133px; height:23px;" name="VisitTimings">View Visit Timings</a></div>
   <?php } ?>
</div>



</div>
<div class="DvFloat" style="margin-bottom:30px;">

  
  
  <div style="float:left; width:480px; border:solid 0px red;">
    <div class="DvFloat">&nbsp;</div>
    <div class="DvFloat">
      <div style="float:left;padding:5px 15px 0px 0px;">
        <input  type="radio"  id="Refer_to_Patient" name="Refer_to_Patient" value="" checked="checked"/>
        Sent to patient<br>
     </div>
    </div>
    <input  type="hidden"  id="txtVideoQuery" name="txtVideoQuery" value="<?php echo $strVideQueryValue;?>"  style="float:left;"/>
    <div class="DvFloat" style="display:<?php echo $strVideoQuertyStyle;?>">
          <div style="float:left;padding:20px 15px 0px 0px;">
            Video Query Timings
         </div>
     	
        <div class="DvFloat" style="padding:10px 0px">
        	
            <div class="dvFloat">
            
			<div style="float:left; padding:0px 15px 0px 0px">
			  <select  id="ddl_App_Day"  name="ddl_App_Day"  style="width:56px;" onblur="javascript:setuploadate('');">
				<option value="0" selected="selected">DD</option>
				<?php for($iDay=1;$iDay < 32;$iDay++){ ?>
					<option value="<?php echo $iDay?>" <?php if ($iDayCur==$iDay) { echo "selected";}?>><?php echo $iDay?></option>
				<?php } ?>
			  </select>
              
                
			</div>
			<div style="float:left; padding:0px 15px 0px 0px">
			  <select  id="ddl_App_Month"  name="ddl_App_Month"  style="width:52px;" onblur="javascript:setuploadate();">
			   <option value="0" selected="selected">Month</option>
				<?php for($iMonth=1;$iMonth < 13;$iMonth++){ ?>
					<option value="<?php echo $iMonth?>"  <?php if ($iMonthCur==$iMonth) { echo "selected";}?>><?php echo $iMonth?></option>
				<?php } ?>
			  </select>
			</div>
			<div style="float:left; padding:0px 0px 0px 0px">
			  <select  id="ddl_App_Year"  name="ddl_App_Year"  style="width:56px;" onblur="javascript:setuploadate();">
				<option value="0">YYYY</option>
				 <?php for($iYear=1;$iYear < 20;$iYear++){ ?>
					<option value="<?php echo $iYearcurrent?>" <?php if ($iYearCur==$iYearcurrent) { echo "selected";}?>><?php echo $iYearcurrent?></option>
                    <?php 
						$iYearcurrent=$iYearcurrent+1;
					?>
				 <?php } ?>
			  </select>
			</div>
            
            <div style="float:left; padding:0px 15px 0px 20px">
			  <select  id="ddl_App_From"  name="ddl_App_From"  style="width:60px;" onchange="javascript:settimeslot();">
					<option value="0" selected="selected">From</option>
					<option value="8.00">8.00</option>
					<option value="8.15">8.15</option>
                    <option value="8.30">8.30</option>
					<option value="8.45">8.45</option>
                    <option value="9.00">9.00</option>
                    <option value="9.15">9.15</option>
                    <option value="9.30">9.30</option>
                    <option value="9.45">9.45</option>
                    <option value="10.00">10.00</option>
                    <option value="10.15">10.15</option>
                    <option value="10.30">10.30</option>
                    <option value="10.45">10.45</option>
                    <option value="11.00">11.00</option>
                    <option value="11.15">11.15</option>
                    <option value="11.30">11.30</option>
                    <option value="11.45">11.45</option>
                    <option value="12.00">12.00</option>
                    <option value="12.15">12.15</option>
                    <option value="12.30">12.30</option>
                    <option value="12.45">12.45</option>
                    <option value="1.00">1.00</option>
                    <option value="1.15">1.15</option>
                    <option value="1.30">1.30</option>
                    <option value="1.45">1.45</option>
                    <option value="1.45">2.00</option>
                    <option value="2.15">2.15</option>
                    <option value="2.30">2.30</option>
                    <option value="2.45">2.45</option>
                    <option value="3.00">3.00</option>
                    <option value="3.15">3.15</option>
                    <option value="3.30">3.30</option>
                    <option value="3.45">3.45</option>
                    <option value="4.00">4.00</option>
                    <option value="4.15">4.15</option>
                    <option value="4.30">4.30</option>
                    <option value="4.45">4.45</option>
                    <option value="5.00">5.00</option>
                    <option value="5.15">5.15</option>
                    <option value="5.30">5.30</option>
                    <option value="5.45">5.45</option>
                    <option value="6.00">6.00</option>
                    <option value="6.15">6.15</option>
                    <option value="6.30">6.30</option>
                    <option value="6.45">6.45</option>
                    <option value="7.00">7.00</option>
                    <option value="7.15">7.15</option>
                    <option value="7.30">7.30</option>
                    <option value="7.45">7.45</option>
                    
                    
			  </select>
			</div>
			<div style="float:left; padding:0px 15px 0px 0px">
			  <select  id="ddl_App_To"  name="ddl_App_To"  style="width:52px;" onchange="javascript:settimeslot();">
			   		<option value="0" selected="selected">To</option>
					<option value="8.15">8.15</option>
                    <option value="8.30">8.30</option>
					<option value="8.45">8.45</option>
                    <option value="9.00">9.00</option>
                    <option value="9.15">9.15</option>
                    <option value="9.30">9.30</option>
                    <option value="9.45">9.45</option>
                    <option value="10.00">10.00</option>
                    <option value="10.15">10.15</option>
                    <option value="10.30">10.30</option>
                    <option value="10.45">10.45</option>
                    <option value="11.00">11.00</option>
                    <option value="11.15">11.15</option>
                    <option value="11.30">11.30</option>
                    <option value="11.45">11.45</option>
                    <option value="12.00">12.00</option>
                    <option value="12.15">12.15</option>
                    <option value="12.30">12.30</option>
                    <option value="12.45">12.45</option>
                    <option value="1.00">1.00</option>
                    <option value="1.15">1.15</option>
                    <option value="1.30">1.30</option>
                    <option value="1.45">1.45</option>
                    <option value="1.45">2.00</option>
                    <option value="2.15">2.15</option>
                    <option value="2.30">2.30</option>
                    <option value="2.45">2.45</option>
                    <option value="3.00">3.00</option>
                    <option value="3.15">3.15</option>
                    <option value="3.30">3.30</option>
                    <option value="3.45">3.45</option>
                    <option value="4.00">4.00</option>
                    <option value="4.15">4.15</option>
                    <option value="4.30">4.30</option>
                    <option value="4.45">4.45</option>
                    <option value="5.00">5.00</option>
                    <option value="5.15">5.15</option>
                    <option value="5.30">5.30</option>
                    <option value="5.45">5.45</option>
                    <option value="6.00">6.00</option>
                    <option value="6.15">6.15</option>
                    <option value="6.30">6.30</option>
                    <option value="6.45">6.45</option>
                    <option value="7.00">7.00</option>
                    <option value="7.15">7.15</option>
                    <option value="7.30">7.30</option>
                    <option value="7.45">7.45</option>
                    <option value="8.00">8.00</option>
               </select>
			</div>
            
             <div style="float:left; padding:0px 15px 0px 0px">
			  <select  id="ddl_App_Slot"  name="ddl_App_Slot"  style="width:45px;">
			   		<option value="AM" selected="selected">AM</option>
					<option value="PM">PM</option>
                </select>
			</div>
		  </div>
        	
        </div>
    </div>
    
    
    <div class="DvFloat" style="padding:10px 0px"><b>Advice / Reason </b></div>
    <div class="DvFloat" style="padding:10px 0px">
      <textarea id="txtAdvicePatient" name="txtAdvicePatient"></textarea>
    </div>
    
    <div class="DvFloat" style="padding:10px 0px"><b>Internal Advice </b></div>
    <div class="DvFloat" style="padding:10px 0px">
      <textarea id="txtInternalAdvicePatient" name="txtInternalAdvicePatient"></textarea>
    </div>
    
    
    <div class="DvFloat" style="border:solid 0px red;">
      <div style=" width:160px; height:30px; float:left;padding-right:10px;">
       <a onclick="javascript:MD_Comment(this,0);"  class="button4" style="cursor:pointer;">SEND TO PATIENT</a></div>
       <?php if($_SESSION['UserType']=="MD" && $strGetVideoQueryParameter=="Yes") { ?>
           <div style=" width:90px; height:30px; float:left;padding-right:10px;">
           <a onclick="javascript:MD_Comment(this,1);"  class="button4" style="cursor:pointer;">Reject</a></div>
       <?php } ?>
    </div>
    
    </div>
  </div>
  
</div>
</div>

<div class="DvFloat" id="dvNext" style="display:none;">
      <div style=" width:90px; height:30px; float:left;padding:20px 0px; float:left;">
       <a href="<?php echo $strHostName;?>/page_doctor.php?dir=md/client" class="button4" style="cursor:pointer; width:50px; text-align:center;">Next</a></div>
 </div>