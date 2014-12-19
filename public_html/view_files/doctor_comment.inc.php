<?php
if(isset($_GET['patient_id'])){
	$patient_id=$converter->decode($_GET['patient_id']);
	/// for setting sesstion for user in iframe
	$_SESSION['UserID']=$patient_id;
}
else
{
	$patient_id=0;
}

?>

 <style>
.dk_options_inner
{
	height:90px;
	overflow: auto;
	position: relative;
}
</style>
<div class="dvFloat formpadding1" id="dvDocComments" name="dvDocComments" style="border:0px;"> &nbsp; </div>
<div class="dvFloat formpadding1" id="dvMDComments" name="dvMDComments" style="border:0px;"> &nbsp; </div>

<?php
	//$id=$converter->encode("18");
	//echo $id;
	
if(isset($_SESSION['UserDocID']))
 {
	$doctor_id=$_SESSION['UserDocID'];
 }
 else
 {
	$doctor_id=0;
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

	
?>
<?php
 $strQuertyStyle="";
$doc_comment_id=GetValue("select comment_id as col from tbl_doctor_comment where compose_id=".$compose_id,"col");


if($doc_comment_id=="" || $doc_comment_id=="0")
{
	$strQuertyStyle="";
}
else
{
	$strQuertyStyle="none";
}

if(isset($_SESSION['UserDocID'])){
	$strQuertyStyle_1=GetValue("select rejected as col from tbl_md_comment where compose_id=".$compose_id." and doc_comment_id=".$doc_comment_id,"col");
	
	
	
	if($strQuertyStyle_1=="1")
	{
		$strQuertyStyle="";
	}
	
}

?>

<input type="hidden" name="txtPatientID" id="txtPatientID" value="<?php echo $patient_id;?>" style="width:20px;"/>
<input type="hidden" name="txtDoctorID" id="txtDoctorID" value="<?php echo $doctor_id;?>" style="width:20px;"/>
<input type="hidden" name="txtComposeID" id="txtComposeID" value="<?php echo $compose_id;?>" style="width:20px;"/>
<input type="hidden" name="txtAcceptID" id="txtAcceptID" value="<?php echo $accept_id;?>" style="width:20px;"/>
<input type="hidden" name="txtCommentID" id="txtCommentID" value="" style="width:20px;"/>
<input type="hidden" name="txtType" id="txtType" value="" style="width:20px;"/>
<div class="dvFloat" id="dvLoader" style="display:none; text-align:center; "><img src="<?php echo $strHostName;?>/images/loader.gif" /></div>
<div class="dvFloat" style="display:<?php echo $strQuertyStyle?>" id="trQuery">

 
<div class="DvFloat" style="border-bottom: solid 0px #e4e4e4;border-top: solid 1px #e4e4e4; margin:10px 0px 0px 0px">
   <div style="float:left; width:82.5%;"><h1 class="f_red" style="text-align: left; font-size: 18px; font-weight:bold;  margin: 7px;">doctor&rsquo;s comments</h1></div>
   <?php if($_SESSION['UserType']=="MD") { ?>
   <div style="float:left; width:15%; margin:10px 0;"><a href="<?php echo $strHostName;?>/page_doctor.php?dir=md/timings" target="_blank" class="button4" style="width:133px; height:23px;">View Visit Timings</a></div>
   <?php } ?>

</div>

   
  


<?php
$doc_name=""; $specialization="";  $hospital_name=""; $licence_no=""; 

$query = "SELECT * FROM ".Doctor." WHERE user_type='Admin' and 	doctor_id=".$doctor_id;
//echo $query;
$result = mysql_query(getPagingQuery($query, 10));
if($result != "") {
	$rowcount  = mysql_num_rows($result);
	if($rowcount > 0) {
		while($row = mysql_fetch_assoc($result)) {
			$doc_name=$row['doctor_name'];
			$specialization=$row['specialization'];
			$specialization_name=GetValue("select specialization_name as col from ".Specialization." where specialization_id=".$row['specialization'],"col");
			$hospital_name=$row['hospital_name'];
			$hosp_name=GetValue("select hospital_name as col from tbl_hospital_master where hospital_id=".$hospital_name, "col");
			//Alert($hosp_name);
			$licence_no=$row['licence_no'];
		}
	}
}
$strGetVideoQueryParameterYesNo="";
if ($strGetVideoQueryParameter=="Yes")
{
	//$strGetVideoQueryParameterYesNo="none";
}

?>

    
<div class="DvFloat" style="margin-bottom:30px;">
  <div style="float:left; width:450px; border:solid 0px red;" id="dvReferMD">
    <div class="DvFloat">&nbsp;</div>
   
    <div class="DvFloat">
      <div style="float:left;padding:5px 15px 0px 0px;">
        <input  type="radio" id="Refer_to_MD" name="Refer_to_Patient" value="" onclick="javascript:SetCommentType('MD')"/>
        Refer to MD
        
        
     
        
        </div>
      <div style="float:left;">
        <?php $DoctorArray=$get_retrive->GetMDLimit() ;  ?>	
          <select  id="ddl_MD_Doctor" name="ddl_MD_Doctor" style="width: 307px;">
            <option value="0">Select Doctor</option>
             <?php  while($doctor = mysql_fetch_array( $DoctorArray )){?>
                <option value="<?php echo $doctor['doctor_id']?>"><?php echo $doctor['doctor_name']?></option>
             <?php }?>
          </select>
      </div>
    </div>
    <div class="DvFloat" style="padding:10px 0px; display:none;"><b>Doctor Advice </b></div>
    <div class="DvFloat" style="padding:10px 0px; display:none;">
      <textarea id="txtMDAdvicePatient" name="txtMDAdvicePatient"></textarea>
    </div>
    <div class="DvFloat" style="padding:10px 0px"><b> For Internal Doctor Advice </b></div>
    <div class="DvFloat" style="padding:10px 0px">
      <textarea id="txtMDInternalAdvicePatient" name="txtMDInternalAdvicePatient" style="height:247px;"></textarea>
    </div>
    
  </div>
  
  
  
  <div style="float:left; width:480px; border:solid 0px red; display:<?php echo $strGetVideoQueryParameterYesNo;?>;"  id="dvSentPatient">
    <div class="DvFloat">&nbsp;</div>
    <div class="DvFloat">
      <div style="float:left;padding:5px 15px 0px 0px;">
        <input  type="radio"  id="Refer_to_Patient" name="Refer_to_Patient" value="" onclick="javascript:SetCommentType('Patient')"/>
        Send to patient<br>
     
         
        
        </div>
    </div>
    <div class="DvFloat" style="padding:10px 0px"><b>Doctor Advice </b></div>
    <div class="DvFloat" style="padding:10px 0px">
      <textarea id="txtAdvicePatient" name="txtAdvicePatient"></textarea>
    </div>
    <div class="DvFloat" style="padding:0px 0px"><b> For Internal Doctor Advice </b></div>
    <div class="DvFloat" style="padding:10px 0px">
      <textarea id="txtInternalAdvicePatient" name="txtInternalAdvicePatient"></textarea>
    </div>
   
  </div>
  
  <div class="DvFloat" style="line-height:25px; padding-bottom:25px;">
   	 <div style="float:left; width:220px;">
         Doctor Name <br />
         <input  type="text" id="txtDoctorName" name="txtDoctorName" value="<?php echo $doc_name;?>" style="width:190px;"/>
     </div>
     <div style="float:left; width:230px;">
         Specialization <br />
         <input  type="text" id="txtSpecialization" name="txtSpecialization" value="<?php echo $specialization_name;?>" style="width:180px;"/>
     </div>
      <div style="float:left; width:220px;">
         Hospital Name <br />
         <input  type="text" id="txtHospital" name="txtHospital" value="<?php echo $hosp_name;?>" style="width:190px;"/>
     </div>
      <div style="float:left; width:220px;">
         Licence No. <br />
         <input  type="text" id="txtLicenceNo" name="txtLicenceNo" value="<?php echo $licence_no;?>" style="width:190px;"/>
     </div>
</div>
  
   <div class="DvFloat">
      <div style=" width:450px; height:30px; float:left;">
        <a onclick="javascript:Doctor_Comment(this);"  class="button4" style="cursor:pointer; width:90px;" id="SendMDBtn">SEND TO MD</a></div>
        <div style=" width:480px; height:30px; float:left;padding-right:0px; display:<?php echo $strGetVideoQueryParameterYesNo;?>;">
       <a onclick="javascript:Doctor_Comment(this);"  class="button4" style="cursor:pointer; width:120px;" id="SendPatientBtn">SEND TO PATIENT</a></div>
    </div>
    
  
</div>

</div>

<div class="DvFloat" id="dvNext" style="display:none;">
      <div style=" width:90px; height:30px; float:left;padding:20px 0px; float:left;">
       <a href="<?php echo $strHostName;?>/page_doctor.php?dir=doctor/client" class="button4" style="cursor:pointer; width:50px; text-align:center;">Next</a></div>
 </div>
 
 
 
