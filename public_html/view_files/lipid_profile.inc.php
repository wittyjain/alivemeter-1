<script>
function showlpform()
{ 
	document.getElementById('ShowLPDiv').style.display = 'block';
	
	 if(document.getElementById("HideLPDivLink")!=null)
	{
		document.getElementById('HideLPDivLink').style.display = ''; 
	}
	
	
	if(document.getElementById("ShowLPDivLink")!=null)
	{
		document.getElementById('ShowLPDivLink').style.display = 'none'; 
	}

	
}
function showLPCancel()
{ 
	document.getElementById('ShowLPDiv').style.display = 'none'; 
	
	if(document.getElementById("ShowLPDivLink")!=null)
	{
		document.getElementById('ShowLPDivLink').style.display = ''; 
	}
	
	if(document.getElementById("HideLPDivLink")!=null)
	{
		document.getElementById('HideLPDivLink').style.display = 'none'; 
	}
	


}
</script>
<?php $iDay="0";$iMonth="0";$iYear="0"; $triglyceride_blood_sugar_result=""; $triglyceride_blood_sugar_range=""; $edit_id="";
$triglyceride_blood_sugar_range1=""; $triglyceride_blood_sugar_unit=""; $ldl_result=""; $ldl_range=""; $ldl_range1="";
$ldl_unit=""; $hdl_result=""; $hdl_range=""; $hdl_range1=""; $hdl_unit=""; $cholesterol_result=""; $cholesterol_range=""; $cholesterol_range1=""; $cholesterol_unit="";
?>
<?php 
if(isset($_GET['dir'])) {
	$dir = $_GET['dir'];
}

if(isset($_GET['alived']) || isset($_GET['alivem']) || isset($_GET['alivey']))
{
	$date=$_GET['alivey']."-".$_GET['alivem']."-".$_GET['alived'];
	//Alert ($date);
}
else
{
	$date=date("Y-m-d");
}

$iYearcurrent1=2014;
$iYearcurrent2=2014;
$iYearcurrent3=2014;
$iYearcurrent4=2014;

$lipid_profile_count =GetValue("select Count(*)  as col from tbl_lipid_profile where user_id=".$_SESSION['UserID']." and isactive=1 and isdeleted=0 ","col");
$lipid_profile_count_na=GetValue("select Count(*) as col from tbl_user_not_applicable where user_id=".$_SESSION['UserID']." and isactive=1 and isdeleted=0 and type='Lipid_Profile'","col");


$lipid_profile_count=$lipid_profile_count+$lipid_profile_count_na;

if($dir=="calendar/daily_tracking") {

		$query = "SELECT * from ".Lipid_Profile." where isactive=1 and isdeleted=0 and user_id=$user_id and triglyceride_blood_sugar_date='$date' limit 1";
		$result = mysql_query($query);
		if($result != "") {
			$rowcount  = mysql_num_rows($result);
			if($rowcount > 0) {
				while($row = mysql_fetch_assoc($result)) {
					extract($row);
					
					$edit_id=$row['lipid_profile_id'];
					
				}
			}
		}
}

?>
<div  style="width:98%; border:solid 0px red;">
                        <div class="dvFloat formpadding">
                          <div class="formlabel1">
                            <label class="formlabel1">
							<?php if($dir=="daily_tracking/lipid_profile" || $dir=="calendar/daily_tracking") { ?>
                                <h2 class="Tab_Title"></h2>
                            <?php } else { ?>
                                <h2 class="Tab_Title">LIST</h2>
                            <?php } ?>                            </label>
                          </div>
                          <div class="formcontrol2" style="display: none;"> &nbsp; </div>
                        </div>
                       <?php if($dir!="calendar/daily_tracking" && $dir!="daily_tracking/lipid_profile") { ?>
                        <div class="dvFloat formpadding1" id="dvLipid_Profile" name="dvLipid_Profile" style="border-bottom:0px;">
                          &nbsp;
                        </div>
                       <?php } ?>
                       
                        <div class="dvFloat formpadding1" style="padding-top:0px;">
                          <div class="formlabel1">
                            <label class="formlabel1" style="border:solid 0px red; width:500px; padding:0px 0px;">
                            		<?php if($dir=="daily_tracking/lipid_profile") { ?>
                                       <a  onClick="showlpform();" style="cursor:pointer"><img src="images/nutritionist/add_to_list.jpg" alt="" title="" border="0" style="float:left; margin-right:10px;" id="ShowLPDivLink"></a>
                                       
                                        <a  onClick="showLPCancel();" style="cursor:pointer">
                    	<img src="images/nutritionist/add_minus.jpg" alt="" title="" border="0" style="float:left; margin-right:10px; display:none;"  id="HideLPDivLink">
                    </a>
                    
                    
                                        <a href="<?php echo $strHostName ?>/page.php?dir=health/calendar "> <img src="<?php echo $strHostName ?>/images/tracking_app.png"alt="" title="" border="0" /> </a>
                                    <?php } else { ?>
                                          <h2 class="Tab_Title" style="border:solid 0px green; width:110px; float:left;">Add to list</h2>
                                    <?php } ?>
                                    <h5 style="color:red; display:none;  width:200px; float:left; font-size:13px;" id="dvEditLipid"> (You are editing selected list.)</h5>
                            </label>
                          </div>
                          <div class="formcontrol2" style="display: none;"> &nbsp; </div>
                        </div>
                        <?php if($dir=="daily_tracking/lipid_profile") { ?>
                             <div class="dvFloat" id="ShowLPDiv" style="display:none;">
                             <?php } else { ?>
                              <div class="dvFloat" id="ShowLPDiv">
                             <?php } ?>
                        <div class="dvFloat formpadding1" style="padding-bottom: 0px;">
                          <div class="formlabel1-1">
                            <label class="formlabel1-1p">&nbsp;</label>
                          </div>
                          <div class="formcontrol2-2">
                            <label>Triglyceride </label>
                          </div>
                          <div class="formcontrol2-2">
                            <label>LDL</label>
                          </div>
                          <div class="formcontrol2-2">
                            <label>HDL</label>
                          </div>
                          <div class="formcontrol2-2">
                            <label>Cholesterol</label>
                          </div>
                        </div>
                        
                         
                        <div class="dvFloat formpadding1">
                          <div class="formlabel1-1">
                            <label class="formlabel1-1p">Date <span class="redtxt">*</span></label>
                              <input id="txt_Lipid_Profile_ID" name="txt_Lipid_Profile_ID" value="<?php echo $edit_id;?>" type="hidden"/>
                          </div>
                          <div class="formcontrol2-2">
                            <div class="dvFloat">
                              <div style="float:left; padding:0px 7px 0px 0px">
                                 <?php 
									   ?>
                                      
                                 <select id="Lipid_Triglyceride_Date"  name="Lipid_Triglyceride_Date"  style="width:50px;"  <?php if(isset($_GET['alived'])) { echo "disabled"; };?>  onchange="javascript:setsugardate_lipid();">
                                   	<?php if(isset($_GET['alived'])) { ?>
										<option value="<?php echo $_GET['alived'];?>" selected="selected"><?php echo $_GET['alived'];?></option>
                                    <?php } else { ?>
                                   		 <option value="0" selected="selected">DD</option>
									<?php } ?>
								
									<?php for($iDay=1;$iDay < 32;$iDay++){ ?>
                                      <option value="<?php echo $iDay?>"><?php echo $iDay?></option>
                                    <?php } ?>
                                  </select>
                              </div>
                                
                              <div style="float:left; padding:0px 7px 0px 0px">
                                 <select  id="Lipid_Triglyceride_Month"  name="Lipid_Triglyceride_Month"  style="width:50px;" <?php if(isset($_GET['alivem'])) { echo "disabled"; };?> onchange="javascript:setsugardate_lipid();">
                                   <?php if(isset($_GET['alivem'])) { ?>
										<option value="<?php echo $_GET['alivem'];?>" selected="selected"><?php echo $_GET['alivem'];?></option>
                                    <?php } else { ?>
                                   		 <option value="0" selected="selected">MM</option>
									<?php } ?>
                                    <?php for($iMonth=1;$iMonth < 13;$iMonth++){ ?>
                                        <option value="<?php echo $iMonth?>"><?php echo $iMonth?></option>
                                    <?php } ?>
                                  </select>
                                
                              </div>
                              <div style="float:left; padding:0px 0px 0px 0px">
                                <select  id="Lipid_Triglyceride_Year"  name="Lipid_Triglyceride_Year"  style="width:60px;" <?php if(isset($_GET['alivey'])) { echo "disabled"; };?> onchange="javascript:setsugardate_lipid();">
                                    <?php if(isset($_GET['alivey'])) { ?>
										<option value="<?php echo $_GET['alivey'];?>" selected="selected"><?php echo $_GET['alivey'];?></option>
                                    <?php } else { ?>
                                   		 <option value="0" selected="selected">YYYY</option>
									<?php } ?>
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
                          <div class="formcontrol2-2">
                            <div class="dvFloat">
                              <div style="float:left; padding:0px 7px 0px 0px">
                                <select id="lipid_LDL_Date"  name="lipid_LDL_Date"  style="width:50px;" <?php if(isset($_GET['alived'])) { echo "disabled"; };?> onchange="javascript:setsugardate_lipid();">
                                    <?php if(isset($_GET['alived'])) { ?>
										<option value="<?php echo $_GET['alived'];?>" selected="selected"><?php echo $_GET['alived'];?></option>
                                    <?php } else { ?>
                                   		 <option value="0" selected="selected">DD</option>
									<?php } ?>
                                    <?php for($iDay=1;$iDay < 32;$iDay++){ ?>
                                        <option value="<?php echo $iDay?>"><?php echo $iDay?></option>
                                    <?php } ?>
                                  </select>
                                
                              </div>
                              <div style="float:left; padding:0px 7px 0px 0px">
                                <select  id="lipid_LDL_Month"  name="lipid_LDL_Month"  style="width:50px;" <?php if(isset($_GET['alivem'])) { echo "disabled"; };?> onchange="javascript:setsugardate_lipid();">
                                   <?php if(isset($_GET['alivem'])) { ?>
										<option value="<?php echo $_GET['alivem'];?>" selected="selected"><?php echo $_GET['alivem'];?></option>
                                    <?php } else { ?>
                                   		 <option value="0" selected="selected">MM</option>
									<?php } ?>
                                    <?php for($iMonth=1;$iMonth < 13;$iMonth++){ ?>
                                        <option value="<?php echo $iMonth?>"><?php echo $iMonth?></option>
                                    <?php } ?>
                                  </select>
                                
                              </div>
                              <div style="float:left; padding:0px 0px 0px 0px">
                                <select  id="lipid_LDL_Year"  name="lipid_LDL_Year"  style="width:60px;" <?php if(isset($_GET['alivey'])) { echo "disabled"; };?> onchange="javascript:setsugardate_lipid();">
                                    <?php if(isset($_GET['alivey'])) { ?>
										<option value="<?php echo $_GET['alivey'];?>" selected="selected"><?php echo $_GET['alivey'];?></option>
                                    <?php } else { ?>
                                   		 <option value="0" selected="selected">YYYY</option>
									<?php } ?>
                                      <?php for($iYear=1;$iYear < 20;$iYear++){ ?>
                               	    <option value="<?php echo $iYearcurrent2?>" ><?php echo $iYearcurrent2?></option>
										<?php 
                                            $iYearcurrent2=$iYearcurrent2-1;
                                        ?>
                                     <?php } ?>
                                  </select>
                                
                              </div>
                            </div>
                          </div>
                          <div class="formcontrol2-2">
                            <div class="dvFloat">
                              <div style="float:left; padding:0px 7px 0px 0px">
                                  <select id="lipid_HDL_Date"  name="lipid_HDL_Date"  style="width:50px;" <?php if(isset($_GET['alived'])) { echo "disabled"; };?> onchange="javascript:setsugardate_lipid();">
                                    <?php if(isset($_GET['alived'])) { ?>
										<option value="<?php echo $_GET['alived'];?>" selected="selected"><?php echo $_GET['alived'];?></option>
                                    <?php } else { ?>
                                   		 <option value="0" selected="selected">DD</option>
									<?php } ?>
                                    <?php for($iDay=1;$iDay < 32;$iDay++){ ?>
                                        <option value="<?php echo $iDay?>"><?php echo $iDay?></option>
                                    <?php } ?>
                                  </select>
                                
                              </div>
                              <div style="float:left; padding:0px 7px 0px 0px">
                                <select  id="lipid_HDL_Month"  name="lipid_HDL_Month"  style="width:50px;" <?php if(isset($_GET['alivem'])) { echo "disabled"; };?> onchange="javascript:setsugardate_lipid();">
                                    <?php if(isset($_GET['alivem'])) { ?>
										<option value="<?php echo $_GET['alivem'];?>" selected="selected"><?php echo $_GET['alivem'];?></option>
                                    <?php } else { ?>
                                   		 <option value="0" selected="selected">MM</option>
									<?php } ?>
                                    <?php for($iMonth=1;$iMonth < 13;$iMonth++){ ?>
                                        <option value="<?php echo $iMonth?>"><?php echo $iMonth?></option>
                                    <?php } ?>
                                  </select>
                                
                              </div>
                              <div style="float:left; padding:0px 0px 0px 0px">
                                <select  id="lipid_HDL_Year"  name="lipid_HDL_Year"  style="width:60px;" <?php if(isset($_GET['alivey'])) { echo "disabled"; };?> onchange="javascript:setsugardate_lipid();">
                                     <?php if(isset($_GET['alivey'])) { ?>
										<option value="<?php echo $_GET['alivey'];?>" selected="selected"><?php echo $_GET['alivey'];?></option>
                                    <?php } else { ?>
                                   		 <option value="0" selected="selected">YYYY</option>
									<?php } ?>
                                      <?php for($iYear=1;$iYear < 20;$iYear++){ ?>
                               	    <option value="<?php echo $iYearcurrent3?>" ><?php echo $iYearcurrent3?></option>
										<?php 
                                            $iYearcurrent3=$iYearcurrent3-1;
                                        ?>
                                     <?php } ?>
                                  </select>
                                
                              </div>
                            </div>
                          </div>
                          <div class="formcontrol2-2">
                            <div class="dvFloat">
                              <div style="float:left; padding:0px 7px 0px 0px">
                                 <select id="lipid_Cholesterol_Date"  name="lipid_Cholesterol_Date"  style="width:50px;" <?php if(isset($_GET['alived'])) { echo "disabled"; };?> onchange="javascript:setsugardate_lipid();">
                                    <?php if(isset($_GET['alived'])) { ?>
										<option value="<?php echo $_GET['alived'];?>" selected="selected"><?php echo $_GET['alived'];?></option>
                                    <?php } else { ?>
                                   		 <option value="0" selected="selected">DD</option>
									<?php } ?>
                                    <?php for($iDay=1;$iDay < 32;$iDay++){ ?>
                                        <option value="<?php echo $iDay?>"><?php echo $iDay?></option>
                                    <?php } ?>
                                  </select>
                                
                              </div>
                              <div style="float:left; padding:0px 7px 0px 0px">
                                <select  id="lipid_Cholesterol_Month"  name="lipid_Cholesterol_Month"  style="width:50px;" <?php if(isset($_GET['alivem'])) { echo "disabled"; };?> onchange="javascript:setsugardate_lipid();">
                                    <?php if(isset($_GET['alivem'])) { ?>
										<option value="<?php echo $_GET['alivem'];?>" selected="selected"><?php echo $_GET['alivem'];?></option>
                                    <?php } else { ?>
                                   		 <option value="0" selected="selected">MM</option>
									<?php } ?>
                                    <?php for($iMonth=1;$iMonth < 13;$iMonth++){ ?>
                                        <option value="<?php echo $iMonth?>"><?php echo $iMonth?></option>
                                    <?php } ?>
                                  </select>
                                
                              </div>
                              <div style="float:left; padding:0px 0px 0px 0px">
                                <select  id="lipid_Cholesterol_Year"  name="lipid_Cholesterol_Year"  style="width:60px;" <?php if(isset($_GET['alivey'])) { echo "disabled"; };?> onchange="javascript:setsugardate_lipid();">
                                    <?php if(isset($_GET['alivey'])) { ?>
										<option value="<?php echo $_GET['alivey'];?>" selected="selected"><?php echo $_GET['alivey'];?></option>
                                    <?php } else { ?>
                                   		 <option value="0" selected="selected">YYYY</option>
									<?php } ?>
                                       <?php for($iYear=1;$iYear < 20;$iYear++){ ?>
                               	    <option value="<?php echo $iYearcurrent4?>" ><?php echo $iYearcurrent4?></option>
										<?php 
                                            $iYearcurrent4=$iYearcurrent4-1;
                                        ?>
                                     <?php } ?>
                                  </select>
                                	
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="dvFloat formpadding1">
                          <div class="formlabel1-1">
                            <label class="formlabel1-1p">Result<span class="redtxt">*</span> </label>
                          </div>
                          <div class="formcontrol2-2">
                            <input type="text" name="txt_Result_Triglyceride" id="txt_Result_Triglyceride" value="<?php echo $triglyceride_blood_sugar_result;?>" placeholder="" style="width: 163px;" />
                          </div>
                          <div class="formcontrol2-2">
                            <input type="text" name="txt_Result_LDL" id="txt_Result_LDL" value="<?php echo $ldl_result;?>" placeholder="" style="width: 163px;" />
                          </div>
                          <div class="formcontrol2-2">
                            <input type="text" name="txt_Result_HDL" id="txt_Result_HDL" value="<?php echo $hdl_result;?>" placeholder="" style="width: 163px;" />
                          </div>
                          <div class="formcontrol2-2">
                            <input type="text" name="txt_Result_Cholesterol" id="txt_Result_Cholesterol" value="<?php echo $cholesterol_result;?>" placeholder="" style="width: 163px;" />
                          </div>
                        </div>
                        <div class="dvFloat formpadding1">
                          <div class="formlabel1-1">
                            <label class="formlabel1-1p">Range </label>
                          </div>
                          <div class="formcontrol2-2">
                            <table width="100%" cellpadding="0" cellspacing="0" border="0">
                              <tr>
                                <td style="width: 63px;"><input type="text" name="txt_Range_Triglyceride" id="txt_Range_Triglyceride" value="<?php echo $triglyceride_blood_sugar_range;?>" placeholder="" style="width: 67px;" /></td>
                                <td style="width: 1px;" valign="middle">-</td>
                                <td style="width: 63px;"><input type="text" name="txt_Range_Triglyceride1" id="txt_Range_Triglyceride1" value="<?php echo $triglyceride_blood_sugar_range1;?>" placeholder="" style="width: 67px;" /></td>
                              </tr>
                            </table>
                          </div>
                          <div class="formcontrol2-2">
                            <table width="100%" cellpadding="0" cellspacing="0" border="0">
                              <tr>
                                <td style="width: 63px;"><input type="text" name="txt_Range_LDL" id="txt_Range_LDL" value="<?php echo $ldl_range;?>" placeholder="" style="width: 67px;" /></td>
                                <td style="width: 1px;" valign="middle">-</td>
                                <td style="width: 63px;"><input type="text" name="txt_Range_LDL1" id="txt_Range_LDL1" value="<?php echo $ldl_range1;?>" placeholder="" style="width: 67px;" /></td>
                              </tr>
                            </table>
                          </div>
                          <div class="formcontrol2-2">
                            <table width="100%" cellpadding="0" cellspacing="0" border="0">
                              <tr>
                                <td style="width: 63px;"><input type="text" name="txt_Range_HDL" id="txt_Range_HDL" value="<?php echo $hdl_range;?>" placeholder="" style="width: 67px;" /></td>
                                <td style="width: 1px;" valign="middle">-</td>
                                <td style="width: 63px;"><input type="text" name="txt_Range_HDL1" id="txt_Range_HDL1" value="<?php echo $hdl_range1;?>" placeholder="" style="width: 67px;" /></td>
                              </tr>
                            </table>
                          </div>
                          <div class="formcontrol2-2">
                            <table width="100%" cellpadding="0" cellspacing="0" border="0">
                              <tr>
                                <td style="width: 63px;"><input type="text" name="txt_Range_Cholesterol" id="txt_Range_Cholesterol" value="<?php echo $cholesterol_range;?>" placeholder="" style="width: 68px;" /></td>
                                <td style="width: 1px;" valign="middle">-</td>
                                <td style="width: 63px;"><input type="text" name="txt_Range_Cholesterol1" id="txt_Range_Cholesterol1" value="<?php echo $cholesterol_range1;?>" placeholder="" style="width: 68px;" /></td>
                              </tr>
                            </table>
                          </div>
                        </div>
                        <div class="dvFloat formpadding1">
                          <div class="formlabel1-1">
                            <label class="formlabel1-1p">Unit</label>
                          </div>
                          <div class="formcontrol2-2">
                            <input type="text" name="txt_Unit_Triglyceride" id="txt_Unit_Triglyceride" value="<?php echo $triglyceride_blood_sugar_unit;?>" placeholder="mg/dl"  style="width: 164px;" />
                          </div>
                          <div class="formcontrol2-2">
                            <input type="text" name="txt_Unit_LDL" id="txt_Unit_LDL" value="<?php echo $ldl_unit;?>" placeholder="mg/dl"  style="width: 163px;" />
                          </div>
                          <div class="formcontrol2-2">
                            <input type="text" name="txt_Unit_HDL" id="txt_Unit_HDL" value="<?php echo $hdl_unit;?>" placeholder="mg/dl" style="width: 163px;" />
                          </div>
                          <div class="formcontrol2-2">
                            <input type="text" name="txt_Unit_Cholesterol" id="txt_Unit_Cholesterol" value="<?php echo $cholesterol_unit;?>" placeholder="mg/dl"  style="width: 163px;" />
                          </div>
                        </div>
                        <div class="dvFloat formpadding"  style="padding:10px 0px 15px 0px">
                            <div class="formlabel1-1p">&nbsp;</div>
                            <div style="float: left; border: solid 0px #006600; width:730px;">
                              
                               <?php if($dir!="daily_tracking/lipid_profile"  && $dir!="calendar/daily_tracking") { ?>
                              		 <div style=" width:84px; height:30px; float:left; padding-right:10px; padding-left:15px;"> 
                               	<?php } else { ?>
                                	<div style=" width:84px; height:30px; float:right; padding-right:20px; padding-left:15px; border:solid 0px red;"> 
                                <?php } ?>
								
											
                                            <a class="button4" onclick="javascript:checkduplicationprofile('Lipid_Profile', this);" style="cursor:pointer;">SUBMIT</a>
                                            
                                  </div>
                               
                               
                               
                               <?php if($dir!="daily_tracking/lipid_profile"  && $dir!="calendar/daily_tracking") { ?>
                                   <?php if ($lipid_profile_count>0) { ?> 
                                      <div style="width:156px; height:30px; float:left;padding-right:10px;" id="dvLipidProfileNA"> <a class="button2" style="background-color:#767676;">NOT APPLICABLE</a></div>
                                      <?php } else { ?>
                                       <div style=" width:156px; height:30px; float:left;padding-right:10px;" id="dvLipidProfileNA1"> <a class="button2"  onclick="javascript:Not_Applicable_Record('Lipid_Profile','11','Yes','dvLipidProfileNA1');" style="cursor:pointer">NOT APPLICABLE</a></div>
                                  <?php } ?>
                                      <div class="dvFloat" style="font-size:12px; padding-top:10px;  color:#666666; text-align:left; padding-left: 15px;">(<span style="font-weight: bold;">Note:</span> If you don&lsquo;t have the data now, you can<br />submit it later by clicking Not Applicable button.)</div>
                                  <div style=" width:156px; height:30px; float:left;padding-right:10px; display:none;"> <a class="button2" >SKIP FOR NOW</a></div>
                              <?php } else { ?>
                                    <div style=" width:85px; height:30px; float:left;padding-right:10px; display:none;"> <a class="button2" onClick="showLPCancel();" style="cursor:pointer;">Cancel</a></div>
                              <?php } ?>
                                
                            </div>
                          </div>
                        <?php if($dir!="calendar/daily_tracking") { ?>   
	                        <div class="dvFloat formpadding1"  style="padding:0px 0px 25px 0px; text-align: left;">
                          <div class="formlabel1-1p">&nbsp;</div>
                          <div style="float: left; border: solid 0px #006600; width: 875px; padding-left: 15px;">
                            <div style="padding-bottom:10px; padding-top: 10px; color:#c02c3e">Standard Lipid Profile chart: </div>
                            <div class="dvFloat">
                              <table cellpadding="5" cellspacing="0" border="0" style="width:80%; border: solid 0px #CCCCCC;">
                                <tr>
                                  <td style="border-top: solid 1px #CCCCCC; border-left: solid 1px #CCCCCC; border-right: solid 0px #CCCCCC; border-bottom:  solid 1px #CCCCCC; padding: 10px; text-align: left; width: 150px; font-size: 13px; font-family: 'myriad_web_proregular'; color: #666666;">Tests</td>
                                  <td style="border-top: solid 1px #CCCCCC; border-left: solid 1px #CCCCCC; border-right: solid 0px #CCCCCC; border-bottom:  solid 1px #CCCCCC; padding: 10px; text-align: right; width: 150px; font-weight: bold; font-size: 13px; font-family: 'myriad_web_proregular'; color: #666666;">Desirable</td>
                                  <td style="border-top: solid 1px #CCCCCC; border-left: solid 1px #CCCCCC; border-right: solid 0px #CCCCCC; border-bottom:  solid 1px #CCCCCC; padding: 10px; text-align: right; width: 150px; font-weight: bold; font-size: 13px; font-family: 'myriad_web_proregular'; color: #666666;">Borderline</td>
                                  <td style="border: solid 1px #CCCCCC; padding: 10px; text-align: right; width: 150px; font-weight: bold; font-size: 13px; font-family: 'myriad_web_proregular'; color: #666666;">High Risk</td>
                                </tr>
                                <tr>
                                  <td style="border-left: solid 1px #CCCCCC; border-right: solid 0px #CCCCCC; border-bottom:  solid 1px #CCCCCC; padding: 10px; text-align: left; font-size: 13px; font-family: 'myriad_web_proregular'; color: #666666;">Cholesterol</td>
                                  <td style="border-left: solid 1px #CCCCCC; border-right: solid 0px #CCCCCC; border-bottom:  solid 1px #CCCCCC; padding: 10px; text-align: right; font-size: 13px; font-family: 'myriad_web_proregular'; color: #666666;">-</td>
                                  <td style="border-left: solid 1px #CCCCCC; border-right: solid 0px #CCCCCC; border-bottom:  solid 1px #CCCCCC; padding: 10px; text-align: right; font-size: 13px; font-family: 'myriad_web_proregular'; color: #666666;">200 - 239 mg/dl</td>
                                  <td style="border-left: solid 1px #CCCCCC; border-right: solid 1px #CCCCCC; border-bottom:  solid 1px #CCCCCC; padding: 10px; text-align: right; font-size: 13px; font-family: 'myriad_web_proregular'; color: #666666;">240 mg/dl</td>
                                </tr>
                                <tr>
                                  <td style="border-left: solid 1px #CCCCCC; border-right: solid 0px #CCCCCC; border-bottom:  solid 1px #CCCCCC; padding: 10px; text-align: left; font-size: 13px; font-family: 'myriad_web_proregular'; color: #666666;">Triglycerides</td>
                                  <td style="border-left: solid 1px #CCCCCC; border-right: solid 0px #CCCCCC; border-bottom:  solid 1px #CCCCCC; padding: 10px; text-align: right; font-size: 13px; font-family: 'myriad_web_proregular'; color: #666666;">-</td>
                                  <td style="border-left: solid 1px #CCCCCC; border-right: solid 0px #CCCCCC; border-bottom:  solid 1px #CCCCCC; padding: 10px; text-align: right; font-size: 13px; font-family: 'myriad_web_proregular'; color: #666666;">150 - 199 mg/dl</td>
                                  <td style="border-left: solid 1px #CCCCCC; border-right: solid 1px #CCCCCC; border-bottom:  solid 1px #CCCCCC; padding: 10px; text-align: right; font-size: 13px; font-family: 'myriad_web_proregular'; color: #666666;">200 - 499 mg/dl</td>
                                </tr>
                                <tr>
                                  <td style="border-left: solid 1px #CCCCCC; border-right: solid 0px #CCCCCC; border-bottom:  solid 1px #CCCCCC; padding: 10px; text-align: left; font-size: 13px; font-family: 'myriad_web_proregular'; color: #666666;">HDL Cholesterol</td>
                                  <td style="border-left: solid 1px #CCCCCC; border-right: solid 0px #CCCCCC; border-bottom:  solid 1px #CCCCCC; padding: 10px; text-align: right; font-size: 13px; font-family: 'myriad_web_proregular'; color: #666666;">60 mg/dl</td>
                                  <td style="border-left: solid 1px #CCCCCC; border-right: solid 0px #CCCCCC; border-bottom:  solid 1px #CCCCCC; padding: 10px; text-align: right; font-size: 13px; font-family: 'myriad_web_proregular'; color: #666666;">35-45 mg/dl</td>
                                  <td style="border-left: solid 1px #CCCCCC; border-right: solid 1px #CCCCCC; border-bottom:  solid 1px #CCCCCC; padding: 10px; text-align: right; font-size: 13px; font-family: 'myriad_web_proregular'; color: #666666;">-</td>
                                </tr>
                                <tr>
                                  <td style="border-left: solid 1px #CCCCCC; border-right: solid 0px #CCCCCC; border-bottom:  solid 1px #CCCCCC; padding: 10px; text-align: left; font-size: 13px; font-family: 'myriad_web_proregular'; color: #666666;">LDL Cholesterol</td>
                                  <td style="border-left: solid 1px #CCCCCC; border-right: solid 0px #CCCCCC; border-bottom:  solid 1px #CCCCCC; padding: 10px; text-align: right; font-size: 13px; font-family: 'myriad_web_proregular'; color: #666666;">60 - 130 mg/dl</td>
                                  <td style="border-left: solid 1px #CCCCCC; border-right: solid 0px #CCCCCC; border-bottom:  solid 1px #CCCCCC; padding: 10px; text-align: right; font-size: 13px; font-family: 'myriad_web_proregular'; color: #666666;">130-159 mg/dl</td>
                                  <td style="border-left: solid 1px #CCCCCC; border-right: solid 1px #CCCCCC; border-bottom:  solid 1px #CCCCCC; padding: 10px; text-align: right; font-size: 13px; font-family: 'myriad_web_proregular'; color: #666666;">160 - 189 mg/dl</td>
                                </tr>
                              </table>
                            </div>
                          </div>
                        </div>
                        <?php } ?>
                        
                         <?php if($dir!="daily_tracking/lipid_profile" && $dir!="calendar/daily_tracking") { ?>
                        	<div style=" width:156px; height:30px; float:left;padding:20px;"> <a href="#"  onclick="javascript:countries1.expandit(3)" ><img src="images/register_steps/sugarprofile_strip_dis.jpg" alt="" /></a></div>
								<div style=" width:156px; height:30px; float:right;padding-right:75px; padding-top: 20px;">
									
                                       <a href="#" onclick="javascript:OpenTab('11','true')" id="aDNextTab_10" style="cursor:text;display:<?php if($sugar_profile_count > 0) {echo "none" ;}?>"><img src="images/register_steps/lifestyle_strip_g.jpg" alt="" /></a>
             
             <a href="#" onclick="javascript:OpenTab('11','true')" id="aENextTab_10" style="cursor:pointer;display:<?php if($sugar_profile_count== 0) {echo "none" ;}?>"><img src="images/register_steps/lifestyle_strip.jpg" alt="" /></a> 
             
                                    
                                  <!--  <a href="#" onclick="javascript:OpenTab('11','true')"><img src="images/register_steps/lifestyle_strip.jpg" alt="" /></a>-->
									<a  onclick="javascript:countries1.expandit(7)" id="dvNextTabOn_10" style="display:none"  href="#"><img src="images/register_steps/lifestyle_strip.jpg" alt="" /></a>
								</div>
							 </div>
                        <?php } ?>
                      </div>
                    </div>
                    
