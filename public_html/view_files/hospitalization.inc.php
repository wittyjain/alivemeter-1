<script>
function showhform()
{ 
	document.getElementById('ShowHDiv').style.display = 'block'; 
	
	if(document.getElementById("HideHDivLink")!=null)
	{
		document.getElementById('HideHDivLink').style.display = ''; 
	}
	
	
	if(document.getElementById("ShowHDivLink")!=null)
	{
		document.getElementById('ShowHDivLink').style.display = 'none'; 
	}
	
	
}
function showHCancel()
{ 
	document.getElementById('ShowHDiv').style.display = 'none';
	if(document.getElementById("ShowHDivLink")!=null)
	{
		document.getElementById('ShowHDivLink').style.display = ''; 
	}
	
	if(document.getElementById("HideHDivLink")!=null)
	{
		document.getElementById('HideHDivLink').style.display = 'none'; 
	}
	
	 
	
}
</script>
<?php $iDay="0";$iMonth="0";$iYear="0"; $commondoctortype="ddl_Doc_Consulted_hospital"; $commondoctorID="dvHospDoctor";?>
<?php 
if(isset($_GET['dir'])) {
	$dir = $_GET['dir'];
}
$iYearcurrent=2014;
$iYearcurrent1=2014;
$iYearcurrent2=2014;
$iYearcurrent3=2014;

$hospitalization_count=GetValue("select Count(*)  as col from tbl_hospital  where user_id=".$_SESSION['UserID']." and isactive=1 and isdeleted=0 ","col");
				$hospitalization_count_na=GetValue("select Count(*) as col from tbl_user_not_applicable where user_id=".$_SESSION['UserID']." and isactive=1 and isdeleted=0 and type='Hospitalization'","col");
				
$hospitalization_count=$hospitalization_count+$hospitalization_count_na;

?>
<div  style="width:99%; border:solid 0px red;">
                  <div class="dvFloat formpadding">
                    <div class="formlabel1">
                      
                      <label class="formlabel1">
						<?php if($dir=="health/hospitalization") { ?>
                        	<h2 class="Tab_Title">Hospitalization</h2>
                        <?php } else { ?>
                        	<h2 class="Tab_Title">LIST</h2>
                        <?php } ?>
                                              </label>
                    </div>
                    <div class="formcontrol2"> &nbsp; </div>
                  </div>
                  <div class="dvFloat formpadding1" id="dvHospitalization" name="dvHospitalization" style="border-bottom:0px;">
                    &nbsp;
                  </div>
                   <div  class="dvFloat" style="display:<?php if($_SESSION['UserType']!="Doctor" && $_SESSION['UserType']!="MD" && $_SESSION['UserType']!="Nutritionist"){ echo "";} else { echo "none"; } ?>">  
                  <div class="dvFloat formpadding1" style="padding-top:20px;">
                    <div class="formlabel1">
                      <?php if($_SESSION['UserType']!="Doctor" && $_SESSION['UserType']!="MD" && $_SESSION['UserType']!="Nutritionist"){ ?>
                     <label class="formlabel1" style="border:solid 0px red; width:500px; padding:15px 13px 0px 11px;">
                      	<?php if($dir=="health/hospitalization") { ?>
                        	<a  onClick="showhform();" style="cursor:pointer"><img src="images/nutritionist/add_to_list.jpg" alt="" title="" border="0" style="float:left; margin-right:10px;" id="ShowHDivLink"></a>
                            
                             <a  onClick="showHCancel();" style="cursor:pointer">
                    	<img src="images/nutritionist/add_minus.jpg" alt="" title="" border="0" style="float:left; margin-right:10px; display:none;"  id="HideHDivLink">
                    </a>
                    
                    
                        <?php } else { ?>
                        	 <h2 class="Tab_Title" style="border:solid 0px green; width:110px; float:left;">Add to list</h2>
                        <?php } ?>
                      <h5 style="color:red; display:none;  width:200px; float:left; font-size:13px;" id="dvEditHosp"> (You are editing selected list.)</h5>
                      </label>
                      <?php } else { ?>
                             <h2 class="Tab_Title" style="border:solid 0px green; width:110px; float:left;">View list</h2>
                       <?php } ?>
           
                    </div>
                    <div class="formcontrol2" style="display: none;"> &nbsp; </div>
                  </div>
                  <?php if($dir=="health/hospitalization") { ?>
                     <div class="dvFloat" id="ShowHDiv" style="display:none;">
                     <?php } else { ?>
                      <div class="dvFloat" id="ShowHDiv">
                     <?php } ?>
                     <div class="dvFloat formpadding1">
                    <div class="formlabel1">
                      <label class="formlabel1">Date of Hospitalization <span class="redtxt">*</span> </label>
					  <input type="hidden" id="txt_hospital_id" name="txt_hospital_id" />
                    </div>
                    <div class="formcontrol2" style="width: 438px;">
                      <div class="dvFloat">
                        <div style="float:left; padding:0px 15px 0px 0px">
                          <select id="cmb_Hospitalization_Date" title="" style="width:60px;">
                            <option value="0">DD</option>
                            <?php for($iDay=1;$iDay < 32;$iDay++){ ?>
								<option value="<?php echo $iDay?>"><?php echo $iDay?></option>
							<?php } ?>
                          </select>
                        </div>
                        <div style="float:left; padding:0px 15px 0px 0px">
                          <select id="cmb_Hospitalization_Month" title="" style="width:65px;">
                           
                             <option value="0" selected="selected">MM</option>
								<?php for($iMonth=1;$iMonth < 13;$iMonth++){ ?>
									<option value="<?php echo $iMonth?>"><?php echo $iMonth?></option>
								<?php } ?>
							  
                          </select>
                        </div>
                        <div style="float:left; padding:0px 0px 0px 0px">
                          <select id="cmb_Hospitalization_Year" name="cmb_Hospitalization_Year" title="" style="width:93px;">
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
                      <label class="formlabel1">Hospital Name<span class="redtxt">*</span> </label>
                    </div>
                    <div class="formcontrol2" style="width: 438px;">
                      <textarea id="txt_Hospitalization_Hospital_Name" name="txt_Hospitalization_Hospital_Name" ></textarea>
                    </div>
                  </div>
                  <div class="dvFloat formpadding1">
                    <div class="formlabel1">
                      <label class="formlabel1">Doctor Consulted <span class="redtxt">*</span> </label>
                    </div>
                    <div class="formcontrol2" style="width: 438px;">
                      <div id="dvHospDoctor">
						  <?php $DoctorArray=$get_retrive->GetDoctor(999,0,'Doctor') ;  ?>	
                          <select  id="ddl_Doc_Consulted_hospital" name="ddl_Doc_Consulted_hospital">
                            <option value="0">Select Doctor</option>
                             <?php  while($doctor = mysql_fetch_array( $DoctorArray )){?>
                                <option value="<?php echo $doctor['doctor_id']?>"><?php echo $doctor['doctor_name']?></option>
                             <?php }?>
                          </select>
                      </div>
                      <div class="div_input_text1" style="font-size: 12px; padding-left: 0px;">Did not find your Doctor in List? <span style="text-decoration: underline;"><a class="btnclickhere" onclick="javascript:SetScroll(); ViewDoctor('dvHospDoctor','ddl_Doc_Consulted_hospital');" style="cursor:pointer;">Click here</a></span> to Add One 
			</div>
                    </div>
                  </div>
                  <div class="dvFloat formpadding1">
                    <div class="formlabel1">
                      <label class="formlabel1">Reason of Admission<span class="redtxt">*</span> </label>
                    </div>
                    <div class="formcontrol2" style="width: 438px;">
                      <textarea id="txt_Hospitalization_Reason_of_Admission" name="txt_Hospitalization_Reason_of_Admission"></textarea>
                    </div>
                  </div>
                  <div class="dvFloat formpadding1">
                    <div class="formlabel1">
                      <label class="formlabel1">Diagnosis </label>
                    </div>
                    <div class="formcontrol2" style="width: 438px;">
                      <textarea id="txt_Hospitalization_Diagnosis" name="txt_Hospitalization_Diagnosis"></textarea>
                    </div>
                  </div>
                  <div class="dvFloat formpadding1">
                    <div class="formlabel1">
                      <label class="formlabel1" style="font-weight:bold;">Discharge Details </label>
                    </div>
                    <div class="formcontrol2" style="width: 438px;">
                        <input type="hidden" id="txt_Discharge_Details" name="txt_Discharge_Details" value="">
                     </div>
                    </div>
                  <div class="dvFloat formpadding1">
                    <div class="formlabel1">
                      <label class="formlabel1">Discharge Date<span class="redtxt">*</span></label>
                    </div>
                    <div class="formcontrol2" style="width: 438px;">
                      <div class="dvFloat">
                        <div style="float:left; padding:0px 15px 0px 0px">
                          <select id="cmb_Hospitalization_Discharge_Date" title="" style="width:60px;">
                            <option value="0" selected="selected">DD</option>
				<?php for($iDay=1;$iDay < 32;$iDay++){ ?>
					<option value="<?php echo $iDay?>"><?php echo $iDay?></option>
				<?php } ?>
                          </select>
                        </div>
                        <div style="float:left; padding:0px 15px 0px 0px">
                          <select id="cmb_Hospitalization_Discharge_Month" title="" style="width:65px;">
                           
                            <option value="0" selected="selected">MM</option>
				<?php for($iMonth=1;$iMonth < 13;$iMonth++){ ?>
					<option value="<?php echo $iMonth?>"><?php echo $iMonth?></option>
				<?php } ?>
			  
                          </select>
                        </div>
                        <div style="float:left; padding:0px 0px 0px 0px">
                          <select id="cmb_Hospitalization_Discharge_Year" title="" style="width:93px;">
                            	<option value="0">YYYY</option>
							   <?php for($iYear=1;$iYear < 20;$iYear++){ ?>
                                <option value="<?php echo $iYearcurrent1?>" ><?php echo $iYearcurrent1?></option>
                                <?php 
                                    $iYearcurrent1=$iYearcurrent1-1;
                                ?>
                             <?php } ?>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="dvFloat formpadding1">
                    <div class="formlabel1">
                      <label class="formlabel1">Diagnosis Summary </label>
                    </div>
                    <div class="formcontrol2" style="width: 438px;">
                      <textarea id="txt_Hospitalization_Diagnosis_Summary" name="txt_Instruction_For_Medicine"></textarea>
                    </div>
                  </div>
                  <div class="dvFloat formpadding1">
                    <div class="formlabel1">
                      <label class="formlabel1" style="font-weight:bold;">Follow-up Details </label>
                    </div>
                    <div class="formcontrol2" style="width: 438px;">
                    	<input type="hidden" id="txt_Follow_up_Details" name="txt_Follow_up_Details" value="" >
                     </div>
                  </div>
                  <div class="dvFloat formpadding1">
                    <div class="formlabel1">
                      <label class="formlabel1">Doctor Instruction </label>
                    </div>
                    <div class="formcontrol2" style="width: 438px;">
                      <textarea id="txt_Hospitalization_Doctor_Instruction" name="txt_Instruction_For_Medicine"></textarea>
                    </div>
                  </div>
                  <div class="dvFloat formpadding1">
                    <div class="formlabel1">
                      <label class="formlabel1">Next Visit Date </label>
                    </div>
                    <div class="formcontrol2" style="width: 438px;">
                      <div class="dvFloat">
                        <div style="float:left; padding:0px 15px 0px 0px">
                          <select id="cmb_Hospitalization_Next_Visit_Date" title="" style="width:60px;">
                          <option value="0" selected="selected">DD</option>
				<?php for($iDay=1;$iDay < 32;$iDay++){ ?>
					<option value="<?php echo $iDay?>"><?php echo $iDay?></option>
				<?php } ?>
                          </select>
                        </div>
                        <div style="float:left; padding:0px 15px 0px 0px">
                          <select id="cmb_Hospitalization_Next_Visit_Month" title="" style="width:65px;">
                           
                           <option value="0" selected="selected">MM</option>
				<?php for($iMonth=1;$iMonth < 13;$iMonth++){ ?>
					<option value="<?php echo $iMonth?>"><?php echo $iMonth?></option>
				<?php } ?>
			 
                          </select>
                        </div>
                        <div style="float:left; padding:0px 0px 0px 0px">
                          <select id="cmb_Hospitalization_Next_Visit_Year" title="" style="width:93px;">
                            <option value="0">YYYY</option>
                           <?php for($iYear=1;$iYear < 3;$iYear++){ ?>
                                <option value="<?php echo $iYearcurrent2?>" ><?php echo $iYearcurrent2?></option>
                                <?php 
                                    $iYearcurrent2=$iYearcurrent2+1;
                                ?>
                             <?php } ?>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="dvFloat formpadding1">
                    <div class="formlabel1">
                      <label class="formlabel1">Reminder Date</label>
                    </div>
                    <div class="formcontrol2" style="width: 438px;">
                      <div class="dvFloat">
                        <div style="float:left; padding:0px 15px 0px 0px">
                          <select id="cmb_Hospitalization_Reminder_Date" title="" style="width:60px;">
                            <option value="0" selected="selected">DD</option>
				<?php for($iDay=1;$iDay < 32;$iDay++){ ?>
					<option value="<?php echo $iDay?>"><?php echo $iDay?></option>
				<?php } ?>
                          </select>
                        </div>
                        <div style="float:left; padding:0px 15px 0px 0px">
                          <select id="cmb_Hospitalization_Reminder_Date_Month" title="" style="width:65px;">
                          
                           <option value="0" selected="selected">MM</option>
							<?php for($iMonth=1;$iMonth < 13;$iMonth++){ ?>
								<option value="<?php echo $iMonth?>"><?php echo $iMonth?></option>
							<?php } ?>
						  </select>
                           
                        </div>
                        <div style="float:left; padding:0px 0px 0px 0px">
                          <select id="cmb_Hospitalization_Reminder_Date_Year" title="" style="width:93px;">
                            <option value="0">YYYY</option>
                            <?php for($iYear=1;$iYear < 3;$iYear++){ ?>
                                <option value="<?php echo $iYearcurrent3?>" ><?php echo $iYearcurrent3?></option>
                                <?php 
                                    $iYearcurrent3=$iYearcurrent3+1;
                                ?>
                             <?php } ?>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                   <?php if($_SESSION['UserType']!="Doctor" && $_SESSION['UserType']!="MD" && $_SESSION['UserType']!="Nutritionist"){ ?>
                  <div class="dvFloat formpadding1"  style="padding:10px 0px 25px 0px">
                    <div class="formlabel1"> &nbsp; </div>
                    <div class="formcontrol2" style="width: 438px;">
                      <div style=" width:84px; height:30px; float:left;padding-right:10px;"> <a class="button4" onclick="javascript:Hospital_Ins(this);" style="cursor:pointer;">SUBMIT</a></div>
                       <?php if($dir!="health/hospitalization") { ?>
                           	
							
						   <?php if ($hospitalization_count>0) { ?> 
                              <div style="width:156px; height:30px; float:left;padding-right:10px;"  id="dvHospNA"> <a class="button2" style="background-color:#767676;">NOT APPLICABLE</a></div>
                              <?php } else { ?>
                              <div style=" width:156px; height:30px; float:left;padding-right:10px;" id="dvHospNA1"> <a class="button2" onclick="javascript:Not_Applicable_Record('Hospitalization','4','Yes','dvHospNA1');" style="cursor:pointer">NOT APPLICABLE</a></div>
                              <?php } ?>
		      
              <div class="dvFloat" style="font-size:12px; padding-top:10px;  color:#666666; text-align:left;">(<span style="font-weight: bold;">Note:</span> If you don&lsquo;t have the data now, you can<br />submit it later by clicking Not Applicable button.)</div>
                          
                         
                          <div style=" width:156px; height:30px; float:left;padding-right:10px;display:none;"> <a class="button2" >SKIP FOR NOW</a></div>
                      <?php } else { ?>
                      		<div style=" width:85px; height:30px; float:left;padding-right:10px; display:none;"> <a class="button2" onClick="showHCancel();" style="cursor:pointer;" >Cancel</a></div>
                      <?php } ?>
                    </div>
                  </div>
                  <?php } ?>
                  <?php if($dir!="health/hospitalization") { ?>
                     <div class="dvFloat formpadding1"  style="padding:15px 0px">
						<div style=" width:156px; height:30px; float:left;padding-right:20px;"> <a href="#"  onclick="javascript:countries.expandit(4)" ><img src="images/register_steps/allergies_strip_dis.jpg" alt="" /></a></div>
						<div style=" width:156px; height:30px; float:right;padding-right:75px;">
						
                        <a href="#" onclick="javascript:OpenTab('4','true')" id="aDNextTab_4" style="cursor:text;display:<?php if($hospitalization_count > 0) {echo "none" ;}?>"><img src="images/register_steps/immunization_strip_g.jpg" alt="" /></a>
             
             <a href="#" onclick="javascript:OpenTab('4','true')" id="aENextTab_4" style="cursor:pointer;display:<?php if($hospitalization_count== 0) {echo "none" ;}?>"><img src="images/register_steps/immunization_strip.jpg" alt="" /></a> 
             
                        
                        	<!--<a href="#" onclick="javascript:OpenTab('4','true')"><img src="images/register_steps/immunization_strip.jpg" alt="" /></a>-->
							<a  onclick="javascript:countries.expandit(8)" id="dvNextTabOn_4" style="display:none"  href="#"><img src="images/register_steps/immunization_strip.jpg" alt="" /></a>
						</div>
					 </div>
				  <?php } ?>
                  </div>
                </div>
</div>