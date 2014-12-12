<script>
function showaform()
{ 
	document.getElementById('ShowADiv').style.display = 'block';
	
	if(document.getElementById("HideADivLink")!=null)
	{
		document.getElementById('HideADivLink').style.display = ''; 
	}
	
	if(document.getElementById("ShowADivLink")!=null)
	{
		document.getElementById('ShowADivLink').style.display = 'none'; 
	}
	
	
}

function showACancel()
{ 
	document.getElementById('ShowADiv').style.display = 'none'; 
	if(document.getElementById("ShowADivLink")!=null)
	{
		document.getElementById('ShowADivLink').style.display = ''; 
	}
	
	if(document.getElementById("HideADivLink")!=null)
	{
		document.getElementById('HideADivLink').style.display = 'none'; 
	}
	

	
}
</script>
<?php $iDay="0";$iMonth="0";$iYear="0";  $commondoctortype="txt_AL_Doctor_Consulted"; $commondoctorID="dvAllergyDoctor";

$type="Allergies";
//Alert ($random);
$iYearcurrent=2014;
$iYearcurrent1=2014;
$allergies_count =GetValue("select Count(*)  as col from tbl_allergies  where user_id=".$_SESSION['UserID']." and isactive=1 and isdeleted=0 ","col");
				$allergies_count_na=GetValue("select Count(*) as col from tbl_user_not_applicable where user_id=".$_SESSION['UserID']." and isactive=1 and isdeleted=0 and type='Allergies'","col");
$allergies_count=$allergies_count+$allergies_count_na;

/*$upload_count = $db->select("SELECT * FROM  tbl_doc_consult_gallery where userid=".$_SESSION['UserID']." and isactive=1 and isdelete=0 and type='Allergies'"); 
$upload_count = $db->row_count;

if($upload_count=="" || $upload_count=="")
{
	$upload_count="0";
}*/

?>

<div style="width:99%; border:solid 0px red;">
                  <div class="dvFloat formpadding">
                    <div class="formlabel1">
                      <label class="formlabel1">
                      		<?php if($dir=="health/allergies") { ?>
                        	<h2 class="Tab_Title">Allergies</h2>
                        <?php } else { ?>
                        	<h2 class="Tab_Title">LIST</h2>
                        <?php } ?> 
                      </label>
                    </div>
                    <div class="formcontrol2"> &nbsp; </div>
                  </div>
                  <div class="dvFloat formpadding1" id="dvAllergies" name="dvAllergies" style="border-bottom:0px;">
                    &nbsp;
                  </div>
                  <div class="dvFloat"  style="display:<?php if($_SESSION['UserType']!="Doctor"  && $_SESSION['UserType']!="MD" && $_SESSION['UserType']!="Nutritionist"){ echo "";} else { echo "none"; } ?>"> 
      <div class="dvFloat formpadding1" style="padding-top:20px;">
                    <div class="formlabel1">
                      <?php if($_SESSION['UserType']!="Doctor" && $_SESSION['UserType']!="MD" && $_SESSION['UserType']!="Nutritionist"){ ?>
					 <label class="formlabel1" style="border:solid 0px red; width:500px; padding: 0px 13px 0px 13px;">
                           <?php if($dir=="health/allergies") { ?>
                        	<a  onClick="showaform();" style="cursor:pointer"><img src="images/nutritionist/add_to_list.jpg" alt="" title="" border="0" style="float:left; margin-right:10px;"  id="ShowADivLink"></a>
                             <a  onClick="showACancel();" style="cursor:pointer">
                    	<img src="images/nutritionist/add_minus.jpg" alt="" title="" border="0" style="float:left; margin-right:10px; display:none;"  id="HideADivLink">
                    </a>
                    
                    
                        <?php } else { ?>
                        	 <h2 class="Tab_Title" style="border:solid 0px green; width:110px; float:left;">Add to list</h2>
                        <?php } ?>
                        <h5 style="color:red; display:none;  width:200px; float:left; font-size:13px;" id="dvEditAll"> (You are editing selected list.)</h5>
                      </label>
					   <?php } else { ?>
           					 <h2 class="Tab_Title" style="border:solid 0px green; width:110px; float:left;">View list</h2>
					 <?php } ?>
                    </div>
                    <div class="formcontrol2" style="display: none;"> &nbsp; </div>
                  </div>
                  <?php if($dir=="health/allergies") { ?>
                     <div class="dvFloat" id="ShowADiv" style="display:none;">
                     <?php } else { ?>
                      <div class="dvFloat" id="ShowADiv">
                     <?php } ?>
                  
                  <div class="dvFloat formpadding1">
                    <div class="formlabel1">
                      <label class="formlabel1">Allergic to<span class="redtxt">*</span> </label>
                    </div>
                    <div class="formcontrol2" style="width: 437px;">
                       <input type="text" name="txt_AL_Allergicto" id="txt_AL_Allergicto" value="" style="width: 238px;" />
                       <input id="txt_Allergies_ID" name="txt_Allergies_ID" value="" type="hidden"/>
                     
                    </div>
                  </div>
                  
                  <div class="dvFloat formpadding1">
                    <div class="formlabel1">
                      <label class="formlabel1">Reaction<span class="redtxt">*</span> </label>
                    </div>
                    <div class="formcontrol2" style="width: 437px;">
                      <input type="text" name="txt_AL_Allergic_Reaction" id="txt_AL_Allergic_Reaction" value="" style="width: 238px;" />
                    </div>
                  </div>
                  <div class="dvFloat formpadding1">
                    <div class="formlabel1">
                      <label class="formlabel1">Status <span class="redtxt">*</span> </label>
                    </div>
                    <div class="formcontrol2" style="width: 437px;">
                      <select id="txt_AL_Allergic_Status" name="txt_AL_Allergic_Status" title="" style="width: 250px;"  >
                        <option value="0" selected="selected">Select</option>
						<option value="Unknown">Unknown</option>
						<option value="Active">Active</option>
                        <option value="Inactive">Inactive</option>
                      </select>
                    </div>
                  </div>
                  <div class="dvFloat formpadding1">
                    <div class="formlabel1">
                      <label class="formlabel1">Last Observed on<span class="redtxt">*</span> </label>
                    </div>
                    <div class="formcontrol2" style="width: 437px;">
                      <div class="dvFloat">
                        <div style="float:left; padding:0px 18px 0px 0px">
                          <select  id="txt_AL_Allergic_Day"  name="txt_AL_Allergic_Day"  style="width:60px;" onblur="javascript:setuploadate('Allergy');">
                            <option value="0" selected="selected">DD</option>
                            <?php for($iDay=1;$iDay < 32;$iDay++){ ?>
                                <option value="<?php echo $iDay?>"><?php echo $iDay?></option>
                            <?php } ?>
                          </select>
              
              
              
                        </div>
                        <div style="float:left; padding:0px 19px 0px 0px">
                          <select  id="txt_AL_Allergic_Month"  name="txt_AL_Allergic_Month"  style="width:65px;" onblur="javascript:setuploadate('Allergy');">
                               <option value="0" selected="selected">MM</option>
                            <?php for($iMonth=1;$iMonth < 13;$iMonth++){ ?>
                                <option value="<?php echo $iMonth?>"><?php echo $iMonth?></option>
                            <?php } ?>
                          </select>
                        </div>
                        <div style="float:left; padding:0px 0px 0px 0px">
                          
                          <select  id="txt_AL_Allergic_Year"  name="txt_AL_Allergic_Year"  style="width:88px;" onblur="javascript:setuploadate('Allergy');">
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
                      <label class="formlabel1">Doctor Consulted<span class="redtxt">*</span> </label>
                    </div>
                    <div class="formcontrol2" style="width: 437px;">
                    <div id="dvAllergyDoctor">
					  <?php $DoctorArray=$get_retrive->GetDoctor(999,0,'Doctor') ;  ?>	
                      <select  id="txt_AL_Doctor_Consulted" name="txt_AL_Doctor_Consulted" style="width: 250px;">
                        <option value="0">Select Doctor</option>
                         <?php  while($doctor = mysql_fetch_array( $DoctorArray )){?>
                            <option value="<?php echo $doctor['doctor_id']?>"><?php echo $doctor['doctor_name']?></option>
                         <?php }?>
                      </select>
                  </div>
		  <div class="div_input_text1" style="font-size: 12px; padding-left: 0px;">Did not find your Doctor in List? <span style="text-decoration: underline;"><a class="btnclickhere" onclick="javascript:SetScroll(); ViewDoctor('dvAllergyDoctor', 'txt_AL_Doctor_Consulted');" style="cursor:pointer;">Click here</a></span> to Add One 
			</div>
		</div>
                  </div>
                  <div class="dvFloat formpadding1">
                    <div class="formlabel1">
                      <label class="formlabel1">Consultation Date </label>
                    </div>
                    <div class="formcontrol2" style="width: 437px;">
                      <div class="dvFloat">
                        <div style="float:left; padding:0px 18px 0px 0px">
                          <select  id="txt_AL_Allergic_ConsultationDay"  name="txt_AL_Allergic_ConsultationDay"  style="width:60px;" onblur="javascript:setuploadate('Allergy');">
                            <option value="0" selected="selected">DD</option>
                            <?php for($iDay=1;$iDay < 32;$iDay++){ ?>
                                <option value="<?php echo $iDay?>"><?php echo $iDay?></option>
                            <?php } ?>
                          </select>
                          
                        </div>
                        <div style="float:left; padding:0px 19px 0px 0px">
                          <select  id="txt_AL_Allergic_ConsultationMonth"  name="txt_AL_Allergic_ConsultationMonth"  style="width:65px;" onblur="javascript:setuploadate('Allergy');">
                           <option value="0" selected="selected">MM</option>
                            <?php for($iMonth=1;$iMonth < 13;$iMonth++){ ?>
                                <option value="<?php echo $iMonth?>"><?php echo $iMonth?></option>
                            <?php } ?>
                          </select>
                        </div>
                        <div style="float:left; padding:0px 0px 0px 0px">
                          <select id="txt_AL_Allergic_ConsultationYear"  name="txt_AL_Allergic_ConsultationYear"  style="width:88px;" onblur="javascript:setuploadate('Allergy');">
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
                      <label class="formlabel1"> </label>
                    </div>
                    <div class="formcontrol2" style="width: 437px;">
                    	<div style=" width:250px; height:31px; float:left;padding-right:10px; border:solid 0px red;"> 
                         <a style="cursor: pointer;" target="_parent" onClick="javascript:SetScroll(); RetriveReocrds_Upload('dvUploadGallery','Allergies'); Popup.showModal('dvpopup-form1',null,null,{'screenColor':'#333333','screenOpacity':.6});"> <img src="images/register_steps/upload_prescription.jpg" alt="" width="250px" height="31px" /> </a> 
                       	</div>
                      
                      <div style="font-size:12px; border:solid 0px green; padding-left:0px; text-align:left;" class="div_input_text1" id="dvUploadRep1">
                            <input type="hidden" name="txtUploadCount1" id="txtUploadCount1" value="<?php echo $upload_count;?>" />
                            (Total <span id="dvTotalReports1">0</span> reports are uploaded.)
                      </div>
                   
                       </div>
                  </div>
                  <div class="dvFloat formpadding1"  style="padding:10px 0px 25px 0px">
                    <div class="formlabel1"> &nbsp; </div>
                    <div class="formcontrol2" style="width: 437px;">
                      <div style=" width:84px; height:30px; float:left;padding-right:10px;"> <a class="button4" onclick="javascript:Allergies_Ins(this);" style="cursor:pointer;">SUBMIT</a></div>
                      <?php if($dir!="health/allergies") { ?>
                         	 <?php if ($allergies_count>0) { ?> 
                              <div style="width:156px; height:30px; float:left;padding-right:10px;" id="dvAllNA"> <a class="button2" style="background-color:#767676;">NOT APPLICABLE</a></div>
                              <?php } else { ?>
                             <div style=" width:156px; height:30px; float:left;padding-right:10px;" id="dvAllNA1"> <a class="button2" onclick="javascript:Not_Applicable_Record('Allergies','3','Yes','dvAllNA1');" style="cursor:pointer">NOT APPLICABLE</a></div>
                              <?php } ?><br />
		      					<div class="dvFloat" style="font-size:12px; padding-top:10px;  color:#666666; text-align:left;">(<span style="font-weight: bold;">Note:</span> If you don&lsquo;t have the data now, you can<br />submit it later by clicking Not Applicable button.)</div>
                          
                          
                          <div style=" width:156px; height:30px; float:left;padding-right:10px; display:none;"> <a class="button2" >SKIP FOR NOW</a></div>
                      <?php } else { ?>
                      		<div style=" width:85px; height:30px; float:left;padding-right:10px; display:none;"> <a class="button2" onClick="showACancel();" >Cancel</a></div>
                      <?php } ?>
                    </div>
                  </div>
                  
                  <?php if($dir!="health/allergies") { ?>
                      <div class="dvFloat formpadding1"  style="padding:15px 0px">
						<div style=" width:156px; height:30px; float:left;padding-right:20px;"> <a href="#"  onclick="javascript:countries.expandit(2)" ><img src="images/register_steps/medication_strip_dis.jpg" alt="" /></a></div>
						<div style=" width:156px; height:30px; float:right;padding-right:75px;">
							
                           
            
             <a href="#" onclick="javascript:OpenTab('3','true')" id="aDNextTab_3" style="cursor:text;display:<?php if($allergies_count > 0) {echo "none" ;}?>"><img src="images/register_steps/hospitalization_strip_g.jpg" alt="" /></a>
             
             <a href="#" onclick="javascript:OpenTab('3','true')" id="aENextTab_3" style="cursor:pointer;display:<?php if($allergies_count== 0) {echo "none" ;}?>"><img src="images/register_steps/hospitalization_strip.jpg" alt="" /></a> 
             
                           <!-- <a href="#" onclick="javascript:OpenTab('3','true')"><img src="images/register_steps/hospitalization_strip.jpg" alt="" /></a>-->
                            
                            
							<a  onclick="javascript:countries.expandit(6)" id="dvNextTabOn_3" style="display:none"  href="#"><img src="images/register_steps/hospitalization_strip.jpg" alt="" /></a>
						</div>
					  </div>
                  <?php } ?>
                   </div>
                </div>
					</div>