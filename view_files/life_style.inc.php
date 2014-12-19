<script>
function showlform()
{
	 document.getElementById('ShowLDiv').style.display = 'block'; 
	 
	 if(document.getElementById("HideLLDivLink")!=null)
	{
		document.getElementById('HideLLDivLink').style.display = ''; 
	}
	
	
	if(document.getElementById("ShowLLDivLink")!=null)
	{
		document.getElementById('ShowLLDivLink').style.display = 'none'; 
	}
	

	
}
function showLCancel()
{ 
	document.getElementById('ShowLDiv').style.display = 'none';
	
	if(document.getElementById("ShowLLDivLink")!=null)
	{
		document.getElementById('ShowLLDivLink').style.display = ''; 
	}
	
	if(document.getElementById("HideLLDivLink")!=null)
	{
		document.getElementById('HideLLDivLink').style.display = 'none'; 
	}
	
	
	
}
</script>
<?php 
	
	$iDay="0";
	$iMonth="0";
	$iYear="0";
	
?>
<?php 
if(isset($_GET['dir'])) {
	$dir = $_GET['dir'];
}
$iYearcurrent1=2014;

$life_style_count =GetValue("select Count(*)  as col from tbl_life_style where user_id=".$_SESSION['UserID']." and isactive=1 and isdeleted=0 ","col");
				$life_style_count_na=GetValue("select Count(*) as col from tbl_user_not_applicable where user_id=".$_SESSION['UserID']." and isactive=1 and isdeleted=0 and type='Life_Style'","col");
				$life_style_count=$life_style_count+$life_style_count_na;

?>
<div  style="width:98%; border:solid 0px red;">
                        <div class="dvFloat formpadding">
                          <div class="formlabel1">
                            <label class="formlabel1">
							<?php if($dir=="daily_tracking/lifestyle") { ?>
                                <h2 class="Tab_Title"></h2>
                            <?php } else { ?>
                                <h2 class="Tab_Title">LIST</h2>
                            <?php } ?>                            </label>
                          </div>
                          <div class="formcontrol2" style="display: none;"> &nbsp; </div>
                        </div>
                        	<?php if($dir!="daily_tracking/lifestyle") { ?>
                                    <div class="dvFloat formpadding1" id="dvLife_Style" name="dvLife_Style" style="border-bottom:0px;">
                                         &nbsp;
                                    </div>
                       		<?php } ?>
                        <div class="dvFloat formpadding1" style="padding-top: 0px;">
                          <div class="formlabel1">
                            <label class="formlabel1" style="border:solid 0px red; width:500px; padding:0px 13px 0px 13px;">
                            	<?php if($dir=="daily_tracking/lifestyle") { ?>
                                          <a  onClick="showlform();" style="cursor:pointer"><img src="images/nutritionist/add_to_list.jpg" alt="" title="" border="0" style="float:left; margin-right:10px;" id="ShowLLDivLink"></a>
                                           <a  onClick="showLCancel();" style="cursor:pointer">
                    	<img src="images/nutritionist/add_minus.jpg" alt="" title="" border="0" style="float:left; margin-right:10px; display:none;"  id="HideLLDivLink">
                    </a>
                    
                    
                    
                                        <a href="<?php echo $strHostName ?>/page.php?dir=health/calendar "> <img src="<?php echo $strHostName ?>/images/tracking_app.png"alt="" title="" border="0" /> </a>
                                    <?php } else { ?>
                                          <h2 class="Tab_Title" style="border:solid 0px green; width:110px; float:left;">Add to list</h2>
                                    <?php } ?>
                                   <h5 style="color:red; display:none;  width:200px; float:left; font-size:13px;" id="dvEditLife"> (You are editing selected list.)</h5>
                            </label>
                          </div>
                          <div class="formcontrol2" style="display: none;"> &nbsp; </div>
                        </div>
                         <?php if($dir=="daily_tracking/lifestyle") { ?>
                                     <div class="dvFloat" id="ShowLDiv" style="display:none;">
                                     <?php } else { ?>
                                      <div class="dvFloat" id="ShowLDiv">
                                     <?php } ?>
                        
                        <div class="dvFloat formpadding1">
                          <div class="formlabel1" style="width: 190px;">
                            <label class="formlabel1">Date <span class="redtxt">*</span> </label>
                          </div>
                          <div class="formcontrol2" style="width: 430px;">
                            <div style="float:left; padding:0px 13px 0px 0px">
                              <select  id="Date_LS_Day"  name="Date_LS_Day"  style="width:60px;">
                                    <option value="0" selected="selected">DD</option>
                                    <?php for($iDay=1;$iDay < 32;$iDay++){ ?>
                                        <option value="<?php echo $iDay?>"><?php echo $iDay?></option>
                                    <?php } ?>
                                  </select>
                              
                            </div>
                            <div style="float:left; padding:0px 14px 0px 0px">
                              <select  id="Date_LS_Month"  name="Date_LS_Month"  style="width:65px;">
                                   <option value="0" selected="selected">MM</option>
                                    <?php for($iMonth=1;$iMonth < 13;$iMonth++){ ?>
                                        <option value="<?php echo $iMonth?>"><?php echo $iMonth?></option>
                                    <?php } ?>
                                  </select>
                              
                            </div>
                            <div style="float:left; padding:0px 0px 0px 0px">
                              <select  id="Date_LS_Year"  name="Date_LS_Year"  style="width:90px;">
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
                        
                         <div class="dvFloat formpadding1">
                          <div class="formlabel1" style="width: 190px; line-height:15px; padding-bottom: 0px; margin-bottom: 0px;">
                            <!--<label class="formlabel1">&nbsp;</label>-->
                          </div>
                          <div class="formcontrol2" style="width: 430px; border: solid 0px #333300; line-height:15px;">
                            <label class="formlabel1" style="width: 195px;border: solid 0px #151515;margin-right: 8px; float: left; padding-left: 0px; line-height:15px; font-weight: bold;">Current consumption</label>
                            <label class="formlabel1" style="width: 203px;border: solid 0px #484848; line-height:15px; font-weight: bold;">Set target consumption</label>
                          </div>
                        </div>
                        
                        <div class="dvFloat formpadding1">
                          <div class="formlabel1" style="width: 190px;">
                            <label class="formlabel1">Spirit</label>
                            <input id="txt_Life_Style_ID" name="txt_Life_Style_ID" value="" type="hidden"/>
                          </div>
                          <div class="formcontrol2" style="width: 430px; border: solid 0px #333300;">
                            <label class="formlabel1" style="width: 195px; border: solid 0px #151515; margin-right: 8px; padding-left: 0px; float: left;"><input type="text" name="txt_LSSpirit" id="txt_LSSpirit" value="" placeholder="" style="width: 182px;" /> <!--Set Weekly Update--><!--<div class="div_input_text1" style="font-size: 12px;">consumption per week</div>--></label>
                            <label class="formlabel1" style="width: 203px;border: solid 0px #484848;"><input type="text" name="txt_LSSpirit_Goal" id="txt_LSSpirit_Goal" value="" placeholder="Avg. weekly target (ml)" style="width: 182px;" /> <!-- <div class="div_input_text1" style="font-size: 12px;">consumption per week</div>--></label>
                          </div>
                        </div>
                        
                        <div class="dvFloat formpadding1">
                          <div class="formlabel1" style="width: 190px;">
                            <label class="formlabel1">Beer</label>
                            <input id="txt_Life_Style_ID" name="txt_Life_Style_ID" value="" type="hidden"/>
                          </div>
                          <div class="formcontrol2" style="width: 430px; border: solid 0px #333300;">
                            <label class="formlabel1" style="width: 195px; border: solid 0px #151515; margin-right: 8px; padding-left: 0px; float: left;"><input type="text" name="txt_LSBeer" id="txt_LSBeer" value=""  placeholder="" style="width: 182px;" /> <!--Set Weekly Update <div class="div_input_text1" style="font-size: 12px;">consumption per week</div>--></label>
                            <label class="formlabel1" style="width: 203px;border: solid 0px #484848;"><input type="text" name="txt_LSBeer_Goal" id="txt_LSBeer_Goal" value="" placeholder="Avg. weekly target (glasses)" style="width: 182px;" /> <!--<div class="div_input_text1" style="font-size: 12px;">consumption per week</div>--></label>
                          </div>
                        </div>
                        
                        
                        <div class="dvFloat formpadding1">
                          <div class="formlabel1" style="width: 190px;">
                            <label class="formlabel1">Cigarette</label>
                            <input id="txt_Life_Style_ID" name="txt_Life_Style_ID" value="" type="hidden"/>
                          </div>
                          <div class="formcontrol2" style="width: 430px; border: solid 0px #333300;">
                            <label class="formlabel1" style="width: 195px; border: solid 0px #151515; margin-right: 8px; padding-left: 0px; float: left;"><input type="text" name="txt_LSCigarette" id="txt_LSCigarette" value="" placeholder="" style="width: 182px;" /> <!--Set Daily Update <div class="div_input_text1" style="font-size: 12px;">consumption per week</div>--></label>
                            <label class="formlabel1" style="width: 203px;border: solid 0px #484848;"><input type="text" name="txt_LSCigarette_Goal" id="txt_LSCigarette_Goal" value="" placeholder="Daily target" style="width: 182px;" /> <!--<div class="div_input_text1" style="font-size: 12px;">consumption per week</div>--></label>
                          </div>
                        </div>
                        
                        <div class="dvFloat formpadding1">
                          <div class="formlabel1" style="width: 190px;">
                            <label class="formlabel1">Sleep<span class="redtxt">*</span></label>
                          </div>
                          <div class="formcontrol2" style="width: 430px; border: solid 0px #333300;">
                            <label class="formlabel1" style="width: 195px; border: solid 0px #151515; margin-right: 8px; padding-left: 0px; float: left;"><input type="text" name="txt_LSSleep" id="txt_LSSleep" value="" placeholder="" style="width: 182px;" /> <!--Set Daily Update <div class="div_input_text1" style="font-size: 12px;">consumption per week</div>--></label>
                            <label class="formlabel1" style="width: 203px;border: solid 0px #484848;"><input type="text" name="txt_LSSleep_Goal" id="txt_LSSleep_Goal" value="" placeholder="Daily target (hh:mm)" style="width: 182px;" /> <!--<div class="div_input_text1" style="font-size: 12px;">consumption per week</div>--></label>
                          </div>
                        </div>
                        
                        
                         <!--<div class="dvFloat formpadding1">
                          <div class="formlabel1">
                            <label class="formlabel1">Spirit Goal</label>
                           
                          </div>
                          <div class="formcontrol2" style="width: 430px;">
                            <input type="text" name="txt_LSSpirit_Goal" id="txt_LSSpirit_Goal" value="" placeholder="Set Goal" /> <div class="div_input_text1" style="font-size: 12px;">consumption per week</div>
                          </div>
                        </div>-->
                        
                        
                        <!--<div class="dvFloat formpadding1">
                          <div class="formlabel1">
                            <label class="formlabel1">Beer</label>
                          </div>
                          <div class="formcontrol2" style="width: 430px;">
                            <input type="text" name="txt_LSBeer" id="txt_LSBeer" value=""  placeholder="Set Weekly Update"/>
                            <div class="div_input_text1" style="font-size: 12px;">beer glasses per week</div>
                            
                          </div>
                        </div>
                         <div class="dvFloat formpadding1">
                          <div class="formlabel1">
                            <label class="formlabel1">Beer Goal</label>
                           
                          </div>
                          <div class="formcontrol2" style="width: 430px;" style="width: 430px;">
                            <input type="text" name="txt_LSBeer_Goal" id="txt_LSBeer_Goal" value="" placeholder="Set Goal" /> <div class="div_input_text1" style="font-size: 12px;">beer glasses per week</div>
                          </div>
                        </div>-->
                        
                        
                        <!--<div class="dvFloat formpadding1">
                          <div class="formlabel1">
                            <label class="formlabel1">Cigarette </label>
                          </div>
                          <div class="formcontrol2" style="width: 430px;">
                            <input type="text" name="txt_LSCigarette" id="txt_LSCigarette" value="" placeholder="Set Daily Update"/>
                             <div class="div_input_text1" style="font-size: 12px;">smoke per day</div>
                            
                          </div>
                        </div>
                         <div class="dvFloat formpadding1">
                          <div class="formlabel1">
                            <label class="formlabel1">Cigarette Goal</label>
                           
                          </div>
                          <div class="formcontrol2" style="width: 430px;">
                            <input type="text" name="txt_LSCigarette_Goal" id="txt_LSCigarette_Goal" value="" placeholder="Set Goal" /> <div class="div_input_text1" style="font-size: 12px;">smoke per day</div>
                          </div>
                        </div>-->
                        
                        
                        
                        <!--<div class="dvFloat formpadding1">
                          <div class="formlabel1">
                            <label class="formlabel1">Sleep<span class="redtxt">*</span></label>
                          </div>
                          <div class="formcontrol2" style="width: 430px;">
                            <input type="text" name="txt_LSSleep" id="txt_LSSleep" value="" placeholder="Set Daily Update" /> 
                              <div class="div_input_text1" style="font-size: 12px;">hours per day</div>
                        
                          </div>

                        </div>
                         <div class="dvFloat formpadding1">
                          <div class="formlabel1">
                            <label class="formlabel1">Sleep Goal</label>
                           
                          </div>
                          <div class="formcontrol2" style="width: 430px;">
                            <input type="text" name="txt_LSSleep_Goal" id="txt_LSSleep_Goal" value="" placeholder="Set Goal" /> <div class="div_input_text1" style="font-size: 12px;">hours per day</div>
                          </div>
                        </div>-->
                        
                        
                        <div class="dvFloat formpadding1">
                          <div class="formlabel1" style="width: 190px;">
                             <label class="formlabel1">Physical Stress<span class="redtxt">*</span> </label>
                          </div>
                          <div class="formcontrol2" style="width: 430px; border: solid 0px #333300;">
                            <label class="formlabel1" style="width: 195px; border: solid 0px #151515; margin-right: 8px; padding-left: 0px; float: left;">
                                <select id="txt_LSPhysicalStress" name="txt_LSPhysicalStress" title="" style="width: 194px;">
                                    <option value="0" selected="selected">Select</option>
                                    <option value="Mild">Mild</option>
                                    <option value="Moderate">Moderate</option>
                                    <option value="Severe">Severe</option>
                                    <option value="NA">NA</option>
                                  </select>
                              </label>
                            <label class="formlabel1" style="width: 203px;border: solid 0px #484848;">
                            <textarea id="txt_LSPhysicalStresstxt" name="txt_LSPhysicalStresstxt" placeholder="Details :" style="width: 182px; height: 70px;"></textarea></label>
                          </div>
                        </div>
                        
                        <div class="dvFloat formpadding1">
                          <div class="formlabel1" style="width: 190px;">
                             <label class="formlabel1">Mental Stress<span class="redtxt">*</span> </label>
                          </div>
                          <div class="formcontrol2" style="width: 430px; border: solid 0px #333300;">
                            <label class="formlabel1" style="width: 195px; border: solid 0px #151515; margin-right: 8px; padding-left: 0px; float: left;">
                                <select id="txt_LSMentalStress" name="txt_LSMentalStress" title="" style="width: 194px;">
                                    <option value="0" selected="selected">Select</option>
                                <option value="Mild">Mild</option>
                                <option value="Moderate">Moderate</option>
                                <option value="Severe">Severe</option>
                                <option value="NA">NA</option>
                                  </select>
                              </label>
                            <label class="formlabel1" style="width: 203px;border: solid 0px #484848;">
                            <textarea id="txt_LSMentalStresstxt" name="txt_LSMentalStresstxt" placeholder="Details :" style="width: 182px; height: 70px;"></textarea></label>
                          </div>
                        </div>
                        
                        <!--<div class="dvFloat formpadding1">
                          <div class="formlabel1" style="width: 190px;">
                            <label class="formlabel1">Physical Stress<span class="redtxt">*</span> </label>
                          </div>
                          <div class="formcontrol2" style="width: 430px;">
                            <div style="width: 195px; float: left; border: solid 1px #003300;">
                              <select id="txt_LSPhysicalStress" name="txt_LSPhysicalStress" title="" style="width: 182px;">
                                <option value="0" selected="selected">Select</option>
                                <option value="Mild">Mild</option>
                                <option value="Moderate">Moderate</option>
                                <option value="Severe">Severe</option>
                                <option value="NA">NA</option>
                              </select>
                            </div>
                            <div style="width: 60px; float: left; border: solid 0px #006600; text-align: center; padding-top: 8px; color: #666666;">Details :
                            <textarea id="txt_LSPhysicalStresstxt" name="txt_LSPhysicalStresstxt" style="width: 182px; height: 70px;"></textarea></div>
                          </div>
                        </div>-->
                        <!--<div class="dvFloat formpadding1">
                          <div class="formlabel1" style="width: 190px;">
                            <label class="formlabel1">Mental Stress<span class="redtxt">*</span> </label>
                          </div>
                          <div class="formcontrol2" style="width: 430px;">
                            <div style="width: 245px; float: left; border: solid 0px #003300;">
                              <select id="txt_LSMentalStress" name="txt_LSMentalStress"  title="">
                                <option value="0" selected="selected">Select</option>
                                <option value="Mild">Mild</option>
                                <option value="Moderate">Moderate</option>
                                <option value="Severe">Severe</option>
                                <option value="NA">NA</option>
                              </select>
                            </div>
                            <div style="width: 60px; float: left; border: solid 0px #006600; text-align: center; padding-top: 8px; color: #666666;">Details :</div>
                            <textarea id="txt_LSMentalStresstxt" name="txt_LSMentalStresstxt" style="width: 230px; height: 70px;"></textarea>
                          </div>
                        </div>-->
                        
                        <div class="dvFloat formpadding"  style="padding:10px 0px 15px 0px">
                          <div class="formlabel1" style="width: 190px;"> &nbsp; </div>
                          <div class="formcontrol2" style="width: 430px;">
                            <div style=" width:92px; height:30px; float:left;padding-right:10px;"> <a class="button4" onclick="javascript:checkduplicationprofile('Life_Style', this);" style="cursor:pointer;" >SUBMIT</a></div>
                            <?php if($dir!="daily_tracking/lifestyle") { ?>
                                  
                                  
                                  <?php if ($life_style_count>0) { ?> 
                                      <div style="width:156px; height:30px; float:left;padding-right:10px;" id="dvLifeStyleNA"> <a class="button2" style="background-color:#767676;">NOT APPLICABLE</a></div>
                                      <?php } else { ?>
                                       <div style=" width:156px; height:30px; float:left;padding-right:10px;" id="dvLifeStyleNA1"> <a class="button2"  onclick="javascript:Not_Applicable_Record('Life_Style','15','Yes','dvLifeStyleNA1');" style="cursor:pointer">NOT APPLICABLE</a></div>
                                  <?php } ?>
                                  
                                       <div class="dvFloat" style="font-size:12px; padding-top:10px;  color:#666666; text-align:left;">(<span style="font-weight: bold;">Note:</span> If you don&lsquo;t have the data now, you can<br />submit it later by clicking Not Applicable button.)</div>
                                  
                                  <div style=" width:156px; height:30px; float:left;padding-right:10px; display:none;"> <a class="button2" >SKIP FOR NOW</a></div>
                              <?php } else { ?>
                                    <div style=" width:92px; height:30px; float:left;padding-right:10px; display:none;"> <a class="button2" onClick="showLCancel();" style="cursor:pointer;">Cancel</a></div>
                              <?php } ?>
                          </div>
                        </div>
                        <div class="dvFloat formpadding1"  style="padding:15px 0px">
                          <?php if($dir!="daily_tracking/lifestyle") { ?>
	                          <div class="formlabel1">
                            <div style=" width:156px; height:30px; float:left;padding-right:20px;"> <a href="#"  onclick="javascript:countries1.expandit(5)" ><img src="images/register_steps/lipidprofile_strip_dis.jpg" alt="" /></a></div>
                            
                            
                          </div>
                          <div style=" width:156px; height:30px; float:right;padding-right:75px;"> 
                         	
								<div style=" width:156px; height:30px; float:right;padding-right:75px;">
									
                                    
                                    <a id="dvNextTabOn_10" onclick="javascript:OpenTab('10','true')" style="cursor:text;display:<?php if($life_style_count > 0) {echo "none" ;}?>"><img src="images/register_steps/health_dashboard_strip_g.jpg" alt="You are the last page of filling in details, you can continue for dashboard." title="You are the last page of filling in details, you can continue for dashboard." /></a>
                                    
                                    <a id="aENextTab_11" style="cursor:pointer;display:<?php if($life_style_count==0) {echo "none" ;}?>" onclick="javascript:OpenTab('10','true')"><img src="images/register_steps/health_dashboard_strip.jpg" alt="You are the last page of filling in details, you can continue for dashboard." title="You are the last page of filling in details, you can continue for dashboard." /></a>
                                    
                                    
								</div>
							 </div>
                            
                         </div>
                          <?php } ?>
                          <div class="formcontrol2" style="float:left"> </div>
                        </div>
                      </div>

