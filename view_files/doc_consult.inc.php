<?php $iDay="0";$iMonth="0";$iYear="0"; $commondoctortype="ddl_Doc_Consulted"; $commondoctorID="dvDocCDoctor"; $docid=""; $diagnosed_cond=""; $upload_count="0";
$random=(strtotime('now')*33);
$random_1=(strtotime('now')*44);
$current_date=date('Y-m-d');

if(isset($_GET['dir'])) {
	$dir = $_GET['dir'];
}

if($dir=="health/prescription") {
	$type="Main";
}
else
{
	$type="Doc_Consult";
}
	
$iYearcurrent=2014;



/*$upload_count = $db->select("SELECT * FROM  tbl_doc_consult_gallery where userid=".$_SESSION['UserID']." and isactive=1 and isdelete=0 and type='Doc_Consult'"); 
$upload_count = $db->row_count;*/



//Alert($upload_count);
$doc_consult_count =GetValue("select Count(*)  as col from tbl_doc_consult  where user_id=".$_SESSION['UserID']." and isactive=1 and isdeleted=0 ","col");	
$doc_consult_count_na=GetValue("select Count(*) as col from tbl_user_not_applicable where user_id=".$_SESSION['UserID']." and isactive=1 and isdeleted=0 and type='Doc_Consult'","col");		
$doc_consult_count=$doc_consult_count+$doc_consult_count_na;

?>
<div style="width:100%; border:solid 0px red;">
	  <div class="dvFloat formpadding">
		<div class="formlabel1">
		  <label class="formlabel1">
		  		   <?php if($dir=="health/prescription") { ?>
                        	<h2 class="Tab_Title"></h2>
                        <?php } else { ?>
                        	<h2 class="Tab_Title">LIST</h2>
                        <?php } ?>
              
		  </label>
		</div>
		<div class="formcontrol2"> &nbsp; </div>
	  </div>
	  <div class="dvFloat formpadding1" id="dvDocConsult" name="dvDocConsult" style="border-bottom:0px;">
		&nbsp;
	  </div>
	  <div class="dvFloat formpadding1" style="padding-top:20px; border-bottom:solid 0px red; ">
		<div class="formlabel1">
		  <label class="formlabel1" style="border-bottom:solid 0px red; width:500px; padding:15px 13px;">

                            <?php if($dir=="health/prescription") { ?>
                        		  <a  onClick="showDform();" style="cursor:pointer"><img src="images/nutritionist/add_to_list.jpg" alt=""  id="ShowDDivLink"></a>
                                
                                   <a  onClick="showDCancel();" style="cursor:pointer">
                    	<img src="images/nutritionist/add_minus.jpg" alt="" title="" border="0" style="float:left; margin-right:10px; display:none;"  id="HideDDivLink">
                    </a>
							<?php } else { ?>
                                 <h2 class="Tab_Title" style="border:solid 0px green; width:110px; float:left;">Add to list </h2>
                            <?php } ?>	
                            <h5 style="color:red; display:none;  width:200px; float:left; font-size:13px;" id="dvEdit"> (You are editing selected list.)</h5>	 
                            </label>
                            
		</div>
		<div class="formcontrol2"> &nbsp; </div>
	  </div>
      <?php if($dir=="health/prescription") { ?>
     <div class="dvFloat" id="ShowDDiv" style="display:none;">
     <?php } else { ?>
      <div class="dvFloat" id="ShowDDiv">
     <?php } ?>
	  <div class="dvFloat formpadding1" id="">
		<div class="formlabel1">
		  <label class="formlabel1" style="line-height:15px;">Consultation Date <span class="redtxt">*</span></label>
		  <input id="txt_Doc_Consult_ID" name="txt_Doc_Consult_ID" value="<?php echo $docid;?>" type="hidden"/>
          <input id="txtCurrentDate" name="txtCurrentDate" value="<?php echo $current_date;?>" type="hidden"/>
      
		</div>
		<div class="formcontrol2">
		  <div class="dvFloat">
			<div style="float:left; padding:0px 19px 0px 0px">
			  <select  id="ddl_Doc_Day"  name="ddl_Doc_Day"  style="width:60px; color:#666666;" onblur="javascript:setuploadate('Doc_Consult');">
				<option value="0" selected="selected">DD</option>
				<?php for($iDay=1;$iDay < 32;$iDay++){ ?>
					<option value="<?php echo $iDay?>"><?php echo $iDay?></option>
				<?php } ?>
			  </select>
			</div>
			<div style="float:left; padding:0px 19px 0px 0px">
			  <select  id="ddl_Doc_Month"  name="ddl_Doc_Month"  style="width:65px; color:#666666;" onblur="javascript:setuploadate('Doc_Consult');">
			   <option value="0" selected="selected">MM</option>
				<?php for($iMonth=1;$iMonth < 13;$iMonth++){ ?>
					<option value="<?php echo $iMonth?>"><?php echo $iMonth?></option>
				<?php } ?>
			  </select>
			</div>
			<div style="float:left; padding:0px 0px 0px 0px">
			  <select  id="ddl_Doc_Year"  name="ddl_Doc_Year"  style="width:87px; color:#666666;" onblur="javascript:setuploadate('Doc_Consult');">
				<option value="0">YYYY</option>
				 <?php for($iYear=1;$iYear < 20;$iYear++){ ?>
					<option value="<?php echo $iYearcurrent?>" ><?php echo $iYearcurrent?></option>
                    <?php 
						$iYearcurrent=$iYearcurrent-1;
					?>
				 <?php } ?>
			  </select>
			</div>
		  </div>
		</div>
	  </div>
	  <div class="dvFloat formpadding1">
		<div class="formlabel1">
		  <label class="formlabel1">Doctor Consulted <span class="redtxt">*</span></label>
		</div>
		<div class="formcontrol2">
		  
          <div id="dvDocCDoctor">
          	  <?php $DoctorArray=$get_retrive->GetDoctor(999,0,'Doctor') ;  ?>	
              <select  id="ddl_Doc_Consulted" name="ddl_Doc_Consulted" style="color:#666666; width: 250px;">
                <option value="0">Select Doctor</option>
                 <?php  while($doctor = mysql_fetch_array( $DoctorArray )){?>
                    <option value="<?php echo $doctor['doctor_id']?>"><?php echo $doctor['doctor_name']?></option>
                 <?php }?>
              </select>
          </div>
          
		  <div class="div_input_text1" style="font-size: 12px;">Did not find your Doctor in List? <span style="text-decoration: underline;"><a class="btnclickhere" onclick="javascript:SetScroll(); ViewDoctor('dvDocCDoctor', 'ddl_Doc_Consulted');" style="cursor:pointer;">Click here</a></span> to Add One 
			</div>
		</div>
	  </div>
	  <div class="dvFloat formpadding1">
		<div class="formlabel1">
		  <label class="formlabel1">Do you want to store vital record ?</label>
		</div>
		<div class="formcontrol2">
		  <div style="float:left; text-align:left; width:30%; border:solid 0px red;">
			<input type="radio" id="vitalYes" name="Dc_Vital_Record" value="Yes" onClick="show1();" align="absmiddle" style=" margin-left: 0px; float: left; margin-top: 5px;">
			<label for="Male">Yes</label>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="radio" id="vitalNo" name="Dc_Vital_Record" value="No" onClick="show2();"  checked align="absmiddle" style="margin-top: 5px;">
			<label for="Female">No</label>
			&nbsp;&nbsp; </div>
		</div>
	  </div>
	  <div id="divShowHide" style="display: none">
		<div class="dvFloat formpadding1" >
		  <div class="formlabel1">
			<label class="formlabel2">Height</label>
		  </div>
		  <div class="formcontrol2">
			<input type="text" name="txt_Dc_Height" id="txt_Dc_Height" value="" />
			<div class="div_input_text1">(cms) </div>
		  </div>
		</div>
		<div class="dvFloat formpadding1">
		  <div class="formlabel1">
			<label class="formlabel2">Weight</label>
		  </div>
		  <div class="formcontrol2">
			<input type="text" name="txt_Dc_Weight" id="txt_Dc_Weight" value="" />
			<div class="div_input_text1">(kgs) </div>
		  </div>
		</div>
		<div class="dvFloat formpadding1">
		  <div class="formlabel1">
			<label class="formlabel2">Temperature </label>
		  </div>
		  <div class="formcontrol2">
			<input type="text" name="txt_Dc_Temperature" id="txt_Dc_Temperature" value="" />
			<div class="div_input_text1">(deg f) </div>
		  </div>
		</div>
		<div class="dvFloat formpadding1">
		  <div class="formlabel1">
			<label class="formlabel2">Pulse </label>
		  </div>
		  <div class="formcontrol2">
			<input type="text" name="txt_Dc_Pulse" id="txt_Dc_Pulse" value="" />
			<div class="div_input_text1">(beats/min) </div>
		  </div>
		</div>
		<div class="dvFloat formpadding1">
		  <div class="formlabel1">
			<label class="formlabel2">Blood Pressure </label>
		  </div>
		  <div class="formcontrol2">
			<input type="text" name="txt_Dc_Blood_Pressure" id="txt_Dc_Blood_Pressure" value="" />
			<div class="div_input_text1">(e.g. 80/100) </div>
		  </div>
		</div>
		<div class="dvFloat formpadding1">
		  <div class="formlabel1">
			<label class="formlabel2">Breathing Rate </label>
		  </div>
		  <div class="formcontrol2">
			<input type="text" name="txt_Dc_Breathing_Rate" id="txt_Dc_Breathing_Rate" value="" />
			<div class="div_input_text1">(breath/min) </div>
		  </div>
		</div>
		<div class="dvFloat formpadding1">
		  <div class="formlabel1">
			<label class="formlabel2">Body Mass index </label>
		  </div>
		  <div class="formcontrol2">
			<input type="text" name="txt_Dc_Body_Mass_index" id="txt_Dc_Body_Mass_index" value="" />
			<div class="div_input_text1">(kg/m2) </div>
		  </div>
		</div>
		<div class="dvFloat formpadding1">
		  <div class="formlabel1">
			<label class="formlabel2">Resting Heart Rate </label>
		  </div>
		  <div class="formcontrol2">
			<input type="text" name="txt_Dc_Resting_Heart_Rate" id="txt_Dc_Resting_Heart_Rate" value="" />
			<div class="div_input_text1">(beats/min)</div>
		  </div>
		</div>
		<div class="dvFloat formpadding1">
		  <div class="formlabel1">
			<label class="formlabel2">Note</label>
		  </div>
		  <div class="formcontrol2">
			<textarea id="txt_Dc_Note" name="txt_Dc_Note"></textarea>
		  </div>
		</div>
	  </div>
	  <div class="dvFloat formpadding1">
		<div class="formlabel1">
		  <label class="formlabel1">Do you want to store Diagnosed Condition ?</label>
		</div>
		<div class="formcontrol2">
		  <div style="float:left; text-align:left; width:30%; border:solid 0px red;">
			<input type="radio" id="diag_cond_Yes" name="Diagnosed_Condition" value="Yes"  onclick="show3();" align="absmiddle" style=" margin-left: 0px; float: left; margin-top: 5px;" />
			<label for="Male">Yes</label>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="radio" id="diag_cond_No" name="Diagnosed_Condition" value="No"  onclick="show4();" checked align="absmiddle" style="margin-top: 5px;" />
			<label for="Female">No</label>
			&nbsp;&nbsp; </div>
		</div>
	  </div>
	  <div id="divShowHide1" style="display: none">
		<div class="dvFloat formpadding1" >
		  <div class="formlabel1">
			<label class="formlabel2">Health Problem </label>
		  </div>
		  <div class="formcontrol2">
			<input type="text" name="txt_Dc_Health_Problem" id="txt_Dc_Health_Problem" value="" />
		  </div>
		</div>
		<div class="dvFloat formpadding1">
		  <div class="formlabel1">
			<label class="formlabel2">Diagnosed Condition </label>
		  </div>
		  <div class="formcontrol2">
			
           <?php $retrive_Array=$get_retrive->GetDignosedConditions()  ?>
              <select  id="cmb_Diagnosed_Condition" name="cmb_Diagnosed_Condition" style="color:#666666;">
                <option value="0">Select</option>
                 <?php  while($get_array = mysql_fetch_array( $retrive_Array )){?>
                    <option value="<?php echo $get_array['cond_id']?>"><?php echo $get_array['cond_name']?> </option>
                 <?php }?>
              </select>
              
            
		  </div>
		</div>
	  </div>
	  <div class="dvFloat formpadding1">
		<div class="formlabel1"> &nbsp; </div>
		<div class="formcontrol2">
		  <div style="width:250px; height:31px; float:left;padding-right:10px; border:solid 0px red;"> <a style="cursor: pointer;" target="_parent" onClick="javascript:SetScroll(); RetriveReocrds_Upload('dvUploadGallery','Doc_Consult');Popup.showModal('dvpopup-form1',null,null,{'screenColor':'#333333','screenOpacity':.6});"> <img src="images/register_steps/upload_prescription.jpg" alt="" width="250px" height="31px" /> </a> 
          	
          </div>
         
          <div style="font-size:12px; border:solid 0px green; padding-left:0px; text-align:left;" class="div_input_text1" id="dvUploadRep">
          		<input type="hidden" name="txtUploadCount" id="txtUploadCount" value="<?php echo $upload_count;?>" />
		  		(Total <span id="dvTotalReports"></span> reports are uploaded.)
          </div>
          
          <span></span>
		</div>
        
	  </div>
	  <div class="dvFloat formpadding1"  style="padding:10px 0px 25px 0px">
		<div class="formlabel1"> &nbsp; </div>
		<div class="formcontrol2">
		  <div style=" width:84px; height:30px; float:left;padding-right:10px;"> <a class="button4" onclick="javascript:Doc_Consult_Ins(this);" style="cursor:pointer;">SUBMIT</a></div>
            <?php if($dir!="health/prescription") { ?>
         <?php if ($doc_consult_count>0) { ?> 
		  <div style="width:156px; height:30px; float:left;padding-right:10px;" id="dvDocNA"> <a class="button2" style="background-color:#767676;">NOT APPLICABLE</a></div>
          <?php } else { ?>
          <div style="width:156px; height:30px; float:left;padding-right:10px;" id="dvDocNA1"> <a class="button2" onclick="javascript:Not_Applicable_Record('Doc_Consult','1','Yes','dvDocNA1');" style="cursor:pointer">NOT APPLICABLE</a></div>
          <?php } ?>
		  <div class="dvFloat" style="font-size:12px; padding-top:10px;  color:#666666; text-align:left;">(<span style="font-weight: bold;">Note:</span> If you don&lsquo;t have the data now, you can<br />submit it later by clicking Not Applicable button.)</div>
		 <?php } ?> 
         <?php if($dir=="health/prescription") { ?>  
		  <div style=" width:156px; height:30px; float:left;padding-right:10px; "> <a class="button2" onClick="javascript:showDCancel();"  >Cancel</a></div>
          <?php } ?>
		</div>
	  </div>
       <?php if($dir!="health/prescription") { ?>
	  <div class="dvFloat formpadding1"  style="padding:15px 0px">
		<div style=" width:156px; height:30px; float:right;padding-right:75px;">
          
            <a href="#" onclick="javascript:OpenTab('1','true')" id="aDNextTab_1" style="cursor:text;display:<?php if($doc_consult_count > 0) {echo"none" ;}?>"><img src="images/register_steps/medication_strip_g.jpg" alt="" /></a>
      
            <a href="#" onclick="javascript:OpenTab('1','true')" id="aENextTab_1" style="cursor:pointer;display:<?php if($doc_consult_count== 0) {echo"none" ;}?>"><img src="images/register_steps/medication_strip.jpg" alt="" /></a>
          
		<a  onclick="javascript:countries.expandit(2)" id="dvNextTabOn_1" style="display:none"  href="#"><img src="images/register_steps/medication_strip.jpg" alt="" /></a>
		</div>
	  </div>
      <?php } ?>
	</div>
    </div>
<script>
	document.getElementById("dvTotalReports").innerHTML=document.getElementById("txtUploadCount").value;
</script>