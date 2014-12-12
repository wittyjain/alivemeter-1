<script>
function showsform()
{ 
	document.getElementById('ShowSDiv').style.display = 'block';
	
	 if(document.getElementById("HideSDivLink")!=null)
	{
		document.getElementById('HideSDivLink').style.display = ''; 
	}
	
	
	if(document.getElementById("ShowSDivLink")!=null)
	{
		document.getElementById('ShowSDivLink').style.display = 'none'; 
	}


	
}

function showSCancel(){ 
	document.getElementById('ShowSDiv').style.display = 'none'; 
	
	if(document.getElementById("ShowSDivLink")!=null)
	{
		document.getElementById('ShowSDivLink').style.display = ''; 
	}
	
	if(document.getElementById("HideSDivLink")!=null)
	{
		document.getElementById('HideSDivLink').style.display = 'none'; 
	}
	
	
	
}
</script>
<?php $iDay="0";$iMonth="0";$iYear="0";?>
<?php 
if(isset($_GET['dir'])) {
	$dir = $_GET['dir'];
}
$iYearcurrent=2014;
$iYearcurrent1=2014;
$iYearcurrent2=2014;
$iYearcurrent3=2014;
$sugar_profile_count =GetValue("select Count(*)  as col from tbl_sugar_profile where user_id=".$_SESSION['UserID']." and isactive=1 and isdeleted=0 ","col");
				$sugar_profile_count_na=GetValue("select Count(*) as col from tbl_user_not_applicable where user_id=".$_SESSION['UserID']." and isactive=1 and isdeleted=0 and type='Sugar_Profile'","col");
$sugar_profile_count=$sugar_profile_count+$sugar_profile_count_na;
?>
<div  style="width:98%; border:solid 0px red;">
                          <div class="dvFloat formpadding">
                            <div class="formlabel1">
                              <label class="formlabel1">
                               <?php if($dir=="daily_tracking/sugar_profile") { ?>
                                <h2 class="Tab_Title"></h2>
                            <?php } else { ?>
                                <h2 class="Tab_Title">LIST</h2>
                            <?php } ?>
                              </label>
                            </div>
                            <div class="formcontrol2" style="display: none;"> &nbsp; </div>
                          </div>
                           <?php if($dir!="daily_tracking/sugar_profile") { ?>
                              <div class="dvFloat formpadding1" id="dvSugar_Profile" name="dvSugar_Profile" style="border-bottom:0px;">
                                &nbsp;
                              </div>
                          <?php } ?>
                          <div class="dvFloat formpadding1" style="padding-top:0px;">
                            <div class="formlabel1">
                             <label class="formlabel1" style="border:solid 0px red; width:500px; padding:0px 13px;">
                              		<?php if($dir=="daily_tracking/sugar_profile") { ?>
                                        <a  onClick="showsform();" style="cursor:pointer"><img src="images/nutritionist/add_to_list.jpg" alt="" title="" border="0" style="float:left; margin-right:10px;" id="ShowSDivLink"></a>
                                        
                                          <a  onClick="showSCancel();" style="cursor:pointer">
                    	<img src="images/nutritionist/add_minus.jpg" alt="" title="" border="0" style="float:left; margin-right:10px; display:none;"  id="HideSDivLink">
                    </a>
                    
                    
                                        <a href="<?php echo $strHostName ?>/page.php?dir=health/calendar "> <img src="<?php echo $strHostName ?>/images/tracking_app.png"alt="" title="" border="0" /> </a>
                                    <?php } else { ?>
                                          <h2 class="Tab_Title" style="border:solid 0px green; width:110px; float:left;">Add to list</h2>
                                    <?php } ?>
                                       <h5 style="color:red; display:none;  width:200px; float:left; font-size:13px;" id="dvEditSugar"> (You are editing selected list.)</h5>
                              </label>
                            </div>
                            <div class="formcontrol2" style="display: none;"> &nbsp; </div>
                          </div>
                           <?php if($dir=="daily_tracking/sugar_profile") { ?>
                                     <div class="dvFloat" id="ShowSDiv" style="display:none;">
                                     <?php } else { ?>
                                      <div class="dvFloat" id="ShowSDiv">
                                     <?php } ?>
                          <div class="dvFloat formpadding1">
                            <div class="formlabel1-1">
                              <label class="formlabel1-1p">&nbsp;</label>
                            </div>
                            <div class="formcontrol2-2">
                              <label>Fasting Blood Sugar </label>
                            </div>
                            <div class="formcontrol2-2">
                              <label>Post Parandial (PPBS)</label>
                            </div>
                            <div class="formcontrol2-2">
                              <label>Urine Blood Sugar</label>
                            </div>
                            <div class="formcontrol2-2">
                              <label>Random Blood Sugar</label>
                            </div>
                          </div>
                          	  

                          <div class="dvFloat formpadding1">
                            <div class="formlabel1-1">
                              <label class="formlabel1-1p">Date <span class="redtxt">*</span></label>
                                <input id="txt_Sugar_Profile_ID" name="txt_Sugar_Profile_ID" value="" type="hidden"/>
                            </div>
                            <div class="formcontrol2-2">
                              <div class="dvFloat">
                                <div style="float:left; padding:0px 7px 0px 0px">
                                   <select id="DT_FBS_Date"  name="DT_FBS_Date"  style="width:50px;" onchange="javascript:setsugardate();">
                                    <option value="0" selected="selected">DD</option>
                                    <?php for($iDay=1;$iDay < 32;$iDay++){ ?>
                                        <option value="<?php echo $iDay?>"><?php echo $iDay?></option>
                                    <?php } ?>
                                  </select>
                                  
                                </div>
                                <div style="float:left; padding:0px 7px 0px 0px">
                                  <select  id="DT_FBS_Month"  name="DT_FBS_Month"  style="width:50px;" onchange="javascript:setsugardate();">
                                   <option value="0" selected="selected">MM</option>
                                    <?php for($iMonth=1;$iMonth < 13;$iMonth++){ ?>
                                        <option value="<?php echo $iMonth?>"><?php echo $iMonth?></option>
                                    <?php } ?>
                                  </select>
                                  
                                </div>
                                <div style="float:left; padding:0px 0px 0px 0px">
                                  <select  id="DT_FBS_Year"  name="DT_FBS_Year"  style="width:60px;" onchange="javascript:setsugardate();">
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
                            <div class="formcontrol2-2">
                              <div class="dvFloat">
                                <div style="float:left; padding:0px 7px 0px 0px">
                                   <select  id="DT_PPBS_Date"  name="DT_PPBS_Date"  style="width:50px;" onchange="javascript:setsugardate();">
                                    <option value="0" selected="selected">DD</option>
                                    <?php for($iDay=1;$iDay < 32;$iDay++){ ?>
                                        <option value="<?php echo $iDay?>"><?php echo $iDay?></option>
                                    <?php } ?>
                                  </select>
                                  
                                </div>
                                <div style="float:left; padding:0px 7px 0px 0px">
                                  <select  id="DT_PPBS_Month"  name="DT_PPBS_Month"  style="width:50px;" onchange="javascript:setsugardate();"> 
                                   <option value="0" selected="selected">MM</option>
                                    <?php for($iMonth=1;$iMonth < 13;$iMonth++){ ?>
                                        <option value="<?php echo $iMonth?>"><?php echo $iMonth?></option>
                                    <?php } ?>
                                  </select>
                                  
                                </div>
                                <div style="float:left; padding:0px 0px 0px 0px">
                                  <select  id="DT_PPBS_Year"  name="DT_PPBS_Year"  style="width:60px;" onchange="javascript:setsugardate();">
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
                            <div class="formcontrol2-2">
                              <div class="dvFloat">
                                <div style="float:left; padding:0px 7px 0px 0px">
                                  <select  id="DT_UBS_Date"  name="DT_UBS_Date"  style="width:50px;" onchange="javascript:setsugardate();">
                                    <option value="0" selected="selected">DD</option>
                                    <?php for($iDay=1;$iDay < 32;$iDay++){ ?>
                                        <option value="<?php echo $iDay?>"><?php echo $iDay?></option>
                                    <?php } ?>
                                  </select>
                                  
                                </div>
                                <div style="float:left; padding:0px 7px 0px 0px">
                                  <select  id="DT_UBS_Month"  name="DT_UBS_Month"  style="width:50px;" onchange="javascript:setsugardate();">
                                   <option value="0" selected="selected">MM</option>
                                    <?php for($iMonth=1;$iMonth < 13;$iMonth++){ ?>
                                        <option value="<?php echo $iMonth?>"><?php echo $iMonth?></option>
                                    <?php } ?>
                                  </select>
                                  
                                </div>
                                <div style="float:left; padding:0px 0px 0px 0px">
                                   <select  id="DT_UBS_Year"  name="DT_UBS_Year"  style="width:60px;" onchange="javascript:setsugardate();">
                                    <option value="0">YYYY</option>
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
                                   <select  id="DT_RBS_Date"  name="DT_RBS_Date"  style="width:50px;" onchange="javascript:setsugardate();">
                                    <option value="0" selected="selected">DD</option>
                                    <?php for($iDay=1;$iDay < 32;$iDay++){ ?>
                                        <option value="<?php echo $iDay?>"><?php echo $iDay?></option>
                                    <?php } ?>
                                  </select>
                                  
                                </div>
                                <div style="float:left; padding:0px 7px 0px 0px">
                                   <select  id="DT_RBS_Month"  name="DT_RBS_Month"  style="width:50px;" onchange="javascript:setsugardate();">
                                   <option value="0" selected="selected">MM</option>
                                    <?php for($iMonth=1;$iMonth < 13;$iMonth++){ ?>
                                        <option value="<?php echo $iMonth?>"><?php echo $iMonth?></option>
                                    <?php } ?>
                                  </select>
                                  
                                </div>
                                <div style="float:left; padding:0px 0px 0px 0px">
                                  <select  id="DT_RBS_Year"  name="DT_RBS_Year"  style="width:60px;" onchange="javascript:setsugardate();">
                                    <option value="0">YYYY</option>
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
                          </div>
                          <div class="dvFloat formpadding1">
                            <div class="formlabel1-1">
                              <label class="formlabel1-1p">Result<span class="redtxt">*</span> </label>
                            </div>
                            <div class="formcontrol2-2">
                              <input type="text" name="txt_Result_FBS" id="txt_Result_FBS" value="" placeholder="" style="width: 163px;" />
                            </div>
                            <div class="formcontrol2-2">
                              <input type="text" name="txt_Result_PPBS" id="txt_Result_PPBS" value="" placeholder="" style="width: 163px;" />
                            </div>
                            <div class="formcontrol2-2">
                              <input type="text" name="txt_Result_UBS" id="txt_Result_UBS" value="" placeholder="" style="width: 163px;" />
                            </div>
                            <div class="formcontrol2-2">
                              <input type="text" name="txt_Result_RBS" id="txt_Result_RBS" value="" placeholder="" style="width: 163px;" />
                            </div>
                          </div>
                          <div class="dvFloat formpadding1">
                            <div class="formlabel1-1">
                              <label class="formlabel1-1p">Range </label>
                            </div>
                            <div class="formcontrol2-2">
                              <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                <tr>
                                  <td style="width: 63px;"><input type="text" name="txt_Range_FBS" id="txt_Range_FBS" value="" placeholder="" style="width: 67px;" /></td>
                                  <td style="width: 1px;" valign="middle">-</td>
                                  <td style="width: 63px;"><input type="text" name="txt_Range_FBS1" id="txt_Range_FBS1" value="" placeholder="" style="width: 67px;" /></td>
                                </tr>
                              </table>
                            </div>
                            <div class="formcontrol2-2">
                              <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                <tr>
                                  <td style="width: 63px;"><input type="text" name="txt_Range_PPBS" id="txt_Range_PPBS" value="" placeholder="" style="width: 67px;" /></td>
                                  <td style="width: 1px;" valign="middle">-</td>
                                  <td style="width: 63px;"><input type="text" name="txt_Range_PPBS1" id="txt_Range_PPBS1" value="" placeholder="" style="width: 67px;" /></td>
                                </tr>
                              </table>
                            </div>
                            <div class="formcontrol2-2">
                              <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                <tr>
                                  <td style="width: 63px;"><input type="text" name="txt_Range_UBS" id="txt_Range_UBS" value="" placeholder="" style="width: 67px;" /></td>
                                  <td style="width: 1px;" valign="middle">-</td>
                                  <td style="width: 63px;"><input type="text" name="txt_Range_UBS1" id="txt_Range_UBS1" value="" placeholder="" style="width: 67px;" /></td>
                                </tr>
                              </table>
                            </div>
                            <div class="formcontrol2-2">
                              <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                <tr>
                                  <td style="width: 63px;"><input type="text" name="txt_Range_RBS" id="txt_Range_RBS" value="" placeholder="" style="width: 68px;" /></td>
                                  <td style="width: 1px;" valign="middle">-</td>
                                  <td style="width: 63px;"><input type="text" name="txt_Range_RBS1" id="txt_Range_RBS1" value="" placeholder="" style="width: 68px;" /></td>
                                </tr>
                              </table>
                            </div>
                          </div>
                          <div class="dvFloat formpadding1">
                            <div class="formlabel1-1">
                              <label class="formlabel1-1p">Unit </label>
                            </div>
                            <div class="formcontrol2-2">
                              <input type="text" name="txt_Unit_FBS" id="txt_Unit_FBS" value=""  style="width: 163px;" placeholder="mg/dl" />
                            </div>
                            <div class="formcontrol2-2">
                              <input type="text" name="txt_Unit_PPBS" id="txt_Unit_PPBS" value="" style="width: 163px;" placeholder="mg/dl"  />
                            </div>
                            <div class="formcontrol2-2">
                              <input type="text" name="txt_Unit_UBS" id="txt_Unit_UBS" value=""  style="width: 163px;"  placeholder="mg/dl" />
                            </div>
                            <div class="formcontrol2-2">
                              <input type="text" name="txt_Unit_RBS" id="txt_Unit_RBS" value="" style="width: 163px;" placeholder="mg/dl" />
                            </div>
                          </div>
                          <div class="dvFloat formpadding"  style="padding:10px 0px 15px 0px">
                            <div class="formlabel1-1p">&nbsp;</div>
                            <div style="float: left; border: solid 0px #006600; width:730px;">
                             
                               <div style="width:84px; height:30px; float:left; padding-right:10px; padding-left:15px; border: solid 0px #0000CC;"> <a class="button4" onclick="javascript:checkduplicationprofile('Sugar_Profile', this);" style="cursor:pointer;">SUBMIT</a></div>
                                <?php if($dir!="daily_tracking/sugar_profile") { ?>
                                  
                                  <?php if ($sugar_profile_count>0) { ?> 
                                      <div style="width:156px; height:30px; float:left;padding-right:10px;" id="dvSugarProfileNA"> <a class="button2" style="background-color:#767676;">NOT APPLICABLE</a></div>
                                      <?php } else { ?>
                                        <div style=" width:156px; height:30px; float:left;padding-right:10px;" id="dvSugarProfileNA1"> <a class="button2"  onclick="javascript:Not_Applicable_Record('Sugar_Profile','9','Yes','dvSugarProfileNA1');" style="cursor:pointer">NOT APPLICABLE</a></div>
                                  <?php } ?>
                                     <div class="dvFloat" style="font-size:12px; padding-top:10px;  color:#666666; text-align:left; padding-left: 15px;">(<span style="font-weight: bold;">Note:</span> If you don&lsquo;t have the data now, you can<br />submit it later by clicking Not Applicable button.)</div>
                                 
                                  <div style=" width:156px; height:30px; float:left;padding-right:10px; display:none;"> <a class="button2" >SKIP FOR NOW</a></div>
                              <?php } else { ?>
                                    <div style="width:85px; height:30px; float:left;padding-right:10px; display:none;"> <a class="button2" onClick="showSCancel();" style="cursor:pointer;" >Cancel</a></div>
                              <?php } ?>
                               
                               
                             
                             
                             
                            </div>
                          </div>
                          <div class="dvFloat formpadding1"  style="padding:0px 0px 25px 15px; text-align: left;">
                            <div class="formlabel1-1p">&nbsp;</div>
                            <div style="float: left; border: solid 0px #006600; width: 875px; padding-left: 0px;">
                              <div style="padding-bottom:10px; padding-top: 10px; color:#c02c3e">Standard Blood Sugar chart: </div>
                              <div class="dvFloat">
                                
                              </div>
                              <div class="dvFloat" style="padding-top: 20px;">
                                <table cellpadding="5" cellspacing="0" border="0" style="width:80%; border: solid 0px #CCCCCC;">
                                 	<tr>
                                    <td style="border-top: solid 1px #CCCCCC; border-left: solid 1px #CCCCCC; border-right: solid 0px #CCCCCC; border-bottom:  solid 0px #CCCCCC; padding: 10px; text-align: left; width: 150px;"></td>
                                    <td style="border-top: solid 1px #CCCCCC; border-left: solid 1px #CCCCCC; border-right: solid 0px #CCCCCC; border-bottom:  solid 0px #CCCCCC; padding: 10px; text-align:center; width: 150px; font-size: 13px; font-family: 'myriad_web_proregular'; color: #666666;" colspan="2">Fasting Value (mg / dl)</td>
                                   
                                    <td style="border: solid 1px #CCCCCC; padding: 10px; text-align: right; width: 150px; font-size: 13px; font-family: 'myriad_web_proregular'; color: #666666;">Post Prandial (mg / dl)</td>
                                  </tr>
                                    <tr>
                                    <td style="border-top: solid 1px #CCCCCC; border-left: solid 1px #CCCCCC; border-right: solid 0px #CCCCCC; border-bottom:  solid 1px #CCCCCC; padding: 10px; text-align: left; width: 150px; font-size: 13px; font-family: 'myriad_web_proregular'; color: #666666;">Category of a Person</td>
                                    <td style="border-top: solid 1px #CCCCCC; border-left: solid 1px #CCCCCC; border-right: solid 0px #CCCCCC; border-bottom:  solid 1px #CCCCCC; padding: 10px; text-align: right; width: 150px; font-size: 13px; font-family: 'myriad_web_proregular'; color: #666666;">Minimum Values</td>
                                    <td style="border-top: solid 1px #CCCCCC; border-left: solid 1px #CCCCCC; border-right: solid 0px #CCCCCC; border-bottom:  solid 1px #CCCCCC; padding: 10px; text-align: right; width: 150px; font-size: 13px; font-family: 'myriad_web_proregular'; color: #666666;">Maximum Values</td>
                                    <td style="border-top: solid 0px #CCCCCC; border-left: solid 1px #CCCCCC; border-right: solid 1px #CCCCCC; border-bottom:  solid 1px #CCCCCC; padding: 10px; text-align: right; width: 150px; font-size: 13px; font-family: 'myriad_web_proregular'; color: #666666;">Value 2 hours after consuming glucose</td>
                                  </tr>
                                  <tr>
                                    <td style="border-top: solid 0px #CCCCCC; border-left: solid 1px #CCCCCC; border-right: solid 0px #CCCCCC; border-bottom:  solid 1px #CCCCCC; padding: 10px; text-align: left; width: 150px; font-size: 13px; font-family: 'myriad_web_proregular'; color: #666666;">Normal</td>
                                    <td style="border-top: solid 0px #CCCCCC; border-left: solid 1px #CCCCCC; border-right: solid 0px #CCCCCC; border-bottom:  solid 1px #CCCCCC; padding: 10px; text-align: right; width: 150px; font-size: 13px; font-family: 'myriad_web_proregular'; color: #666666;">70</td>
                                    <td style="border-top: solid 0px #CCCCCC; border-left: solid 1px #CCCCCC; border-right: solid 0px #CCCCCC; border-bottom:  solid 1px #CCCCCC; padding: 10px; text-align: right; width: 150px; font-size: 13px; font-family: 'myriad_web_proregular'; color: #666666;">100</td>
                                    <td style="border-top: solid 0px #CCCCCC; border-left: solid 1px #CCCCCC; border-right: solid 1px #CCCCCC; border-bottom:  solid 1px #CCCCCC; padding: 10px; text-align: right; width: 150px; font-size: 13px; font-family: 'myriad_web_proregular'; color: #666666;">Less than 140</td>
                                  </tr>
                                  <tr>
                                    <td style="border-left: solid 1px #CCCCCC; border-right: solid 0px #CCCCCC; border-bottom:  solid 1px #CCCCCC; padding: 10px; text-align: left; font-size: 13px; font-family: 'myriad_web_proregular'; color: #666666;">Early Diabetes</td>
                                    <td style="border-left: solid 1px #CCCCCC; border-right: solid 0px #CCCCCC; border-bottom:  solid 1px #CCCCCC; padding: 10px; text-align: right; font-size: 13px; font-family: 'myriad_web_proregular'; color: #666666;">101</td>
                                    <td style="border-left: solid 1px #CCCCCC; border-right: solid 0px #CCCCCC; border-bottom:  solid 1px #CCCCCC; padding: 10px; text-align: right; font-size: 13px; font-family: 'myriad_web_proregular'; color: #666666;">126</td>
                                    <td style="border-left: solid 1px #CCCCCC; border-right: solid 1px #CCCCCC; border-bottom:  solid 1px #CCCCCC; padding: 10px; text-align: right; font-size: 13px; font-family: 'myriad_web_proregular'; color: #666666;">140 to 200</td>
                                  </tr>
                                  <tr>
                                    <td style="border-left: solid 1px #CCCCCC; border-right: solid 0px #CCCCCC; border-bottom:  solid 1px #CCCCCC; padding: 10px; text-align: left; font-size: 13px; font-family: 'myriad_web_proregular'; color: #666666;">Established Diabetes</td>
                                    <td style="border-left: solid 1px #CCCCCC; border-right: solid 0px #CCCCCC; border-bottom:  solid 1px #CCCCCC; padding: 10px; text-align: right; font-size: 13px; font-family: 'myriad_web_proregular'; color: #666666;">More than 126</td>
                                    <td style="border-left: solid 1px #CCCCCC; border-right: solid 0px #CCCCCC; border-bottom:  solid 1px #CCCCCC; padding: 10px; text-align: right; font-size: 13px; font-family: 'myriad_web_proregular'; color: #666666;">-</td>
                                    <td style="border-left: solid 1px #CCCCCC; border-right: solid 1px #CCCCCC; border-bottom:  solid 1px #CCCCCC; padding: 10px; text-align: right; font-size: 13px; font-family: 'myriad_web_proregular'; color: #666666;">More than 200</td>
                                  </tr>
                                </table>
                              </div>
                            </div>
                          </div>
                           <?php if($dir!="daily_tracking/sugar_profile") { ?>
                           	<div style=" width:156px; height:30px; float:left;padding:20px;"> <a href="#"  onclick="javascript:countries1.expandit(1)" ><img src="images/register_steps/bloodpressure_strip_dis.jpg" alt="" /></a></div>
								<div style=" width:156px; height:30px; float:right; padding-right:75px; padding-top: 20px;">
								
                                
                                   <a href="#" onclick="javascript:OpenTab('9','true')" id="aDNextTab_9" style="cursor:text;display:<?php if($sugar_profile_count > 0) {echo "none" ;}?>"><img src="images/register_steps/lipidprofile_strip_g.jpg" alt="" /></a>
             
             <a href="#" onclick="javascript:OpenTab('9','true')" id="aENextTab_9" style="cursor:pointer;display:<?php if($sugar_profile_count== 0) {echo "none" ;}?>"><img src="images/register_steps/lipidprofile_strip.jpg" alt="" /></a> 
             
             
                                	<!--<a href="#" onclick="javascript:OpenTab('9','true')"><img src="images/register_steps/lipidprofile_strip.jpg" alt="" /></a>-->
									<a  onclick="javascript:countries1.expandit(5)" id="dvNextTabOn_9" style="display:none"  href="#"><img src="images/register_steps/lipidprofile_strip.jpg" alt="" /></a>
								</div>
							 </div>
                           <?php } ?>
                          <div class="formcontrol2" style="float:left"> </div>
                        </div>
                        
</div>