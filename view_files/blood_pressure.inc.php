<script>
function showbpform()
{
	 document.getElementById('ShowBPDiv').style.display = 'block'; 
	 
	 
	if(document.getElementById("HideBPDivLink")!=null)
	{
		document.getElementById('HideBPDivLink').style.display = ''; 
	}
	
	
	if(document.getElementById("ShowBPDivLink")!=null)
	{
		document.getElementById('ShowBPDivLink').style.display = 'none'; 
	}
	
	
}

function showBPCancel()
{ 
	document.getElementById('ShowBPDiv').style.display = 'none'; 
	
	if(document.getElementById("ShowBPDivLink")!=null)
	{
		document.getElementById('ShowBPDivLink').style.display = ''; 
	}
	
	if(document.getElementById("HideBPDivLink")!=null)
	{
		document.getElementById('HideBPDivLink').style.display = 'none'; 
	}
	

}
</script>
<?php $iDay="0";$iMonth="0";$iYear="0";?>
<?php 
if(isset($_GET['dir'])) {
	$dir = $_GET['dir'];
}
$iYearcurrent=2014;
$blood_pressure_count =GetValue("select Count(*)  as col from tbl_blood_pressure  where user_id=".$_SESSION['UserID']." and isactive=1 and isdeleted=0 ","col");
$blood_pressure_count_na=GetValue("select Count(*) as col from tbl_user_not_applicable where user_id=".$_SESSION['UserID']." and isactive=1 and isdeleted=0 and type='Blood_Pressure'","col");
$blood_pressure_count=$blood_pressure_count+$blood_pressure_count_na;

$dob=GetValue("select dob as col from  tbl_users where user_id=".$_SESSION['UserID']."","col");
$age=floor((time() - strtotime($dob))/31556926);

?>
<div  style="width:98%; border:solid 0px red;">
                          <div class="dvFloat formpadding">
                            <div class="formlabel1">
                              <label class="formlabel1">
                              <?php if($dir=="health/daily_tracking") { ?>
                                <h2 class="Tab_Title"></h2>
                            <?php } else { ?>
                                <h2 class="Tab_Title">LIST</h2>
                            <?php } ?> 
                            
                              </label>
                            </div>
                            <div class="formcontrol2" style="display: none;"> &nbsp; </div>
                          </div>
                           <?php if($dir!="health/daily_tracking") { ?>
                          <div class="dvFloat formpadding1" id="dvBlood_Pressure" name="dvBlood_Pressure" style="border-bottom:0px;">
                            &nbsp;
                          </div>
                          
                          <?php } ?>
                          <div class="dvFloat formpadding1" style="padding-top:0px;">
                            <div class="formlabel1">
                              <label class="formlabel1" style="border:solid 0px red; width:500px; padding:0px 13px;">
                              		 <?php if($dir=="health/daily_tracking") { ?>
                                        <a  onClick="showbpform();" style="cursor:pointer"><img src="images/nutritionist/add_to_list.jpg" alt="" title="" border="0" style="float:left; margin-right:10px;" id="ShowBPDivLink"></a>
                                        
                                         <a  onClick="showBPCancel();" style="cursor:pointer">
                    	<img src="images/nutritionist/add_minus.jpg" alt="" title="" border="0" style="float:left; margin-right:10px; display:none;"  id="HideBPDivLink">
                    </a>
                    
                    
                                        <a href="<?php echo $strHostName ?>/page.php?dir=health/calendar "> <img src="<?php echo $strHostName ?>/images/tracking_app.png"alt="" title="" border="0" /> </a>
                                    <?php } else { ?>
                                        <h2 class="Tab_Title" style="border:solid 0px green; width:110px; float:left;">Add to list</h2>
                                        
                                    <?php } ?>
                                  <h5 style="color:red; display:none;  width:200px; float:left; font-size:13px;" id="dvEditBP"> (You are editing selected list.)</h5>
                              </label>
                            </div>
                            <div class="formcontrol2" style="display: none;"> &nbsp; </div>
                          </div>
                          <?php if($dir=="health/daily_tracking") { ?>
                         <div class="dvFloat" id="ShowBPDiv" style="display:none;">
                         <?php } else { ?>
                          <div class="dvFloat" id="ShowBPDiv">
                         <?php } ?>
                          <div class="dvFloat formpadding1">
                            <div class="formlabel1" style="width: 310px;">
                              <label class="formlabel1">Blood Pressure <span class="redtxt">*</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(e.g. 80/100)</label>
                                <input id="txt_Blood_Pressure_ID" name="txt_Blood_Pressure_ID" value="" type="hidden"/>
                            </div>
                            <div class="formcontrol2" style="width: 460px;">
                              <input type="text" name="txt_DelTrack_BP" id="txt_DelTrack_BP" value="" />
                            </div>
                          </div>
                          <div class="dvFloat formpadding1">
                            <div class="formlabel1" style="width: 310px;">
                              <label class="formlabel1">Unit </label>
                            </div>
                            <div class="formcontrol2" style="width: 460px;">
                              <input type="text" name="txt_DelTrack_Unit" id="txt_DelTrack_Unit" value="" placeholder="mmhg" />
                            </div>
                          </div>
                          <div class="dvFloat formpadding1">
                            <div class="formlabel1" style="width: 310px;">
                              <label class="formlabel1">Date Checked <span class="redtxt">*</span> </label>
                            </div>
                            <div class="formcontrol2" style="width: 460px;">
                              <div class="dvFloat">
                                <div style="float:left; padding:0px 15px 0px 0px">
                                  <select  id="cmb_DelTrack_Day"  name="cmb_DelTrack_Day"  style="width:60px;">
                                    <option value="0" selected="selected">DD</option>
                                    <?php for($iDay=1;$iDay < 32;$iDay++){ ?>
                                        <option value="<?php echo $iDay?>"><?php echo $iDay?></option>
                                    <?php } ?>
                                  </select>
                                  
                                  
                                </div>
                                <div style="float:left; padding:0px 15px 0px 0px">
                                  <select  id="cmb_DelTrack_Month"  name="cmb_DelTrack_Month"  style="width:65px;">
                                   <option value="0" selected="selected">MM</option>
                                    <?php for($iMonth=1;$iMonth < 13;$iMonth++){ ?>
                                        <option value="<?php echo $iMonth?>"><?php echo $iMonth?></option>
                                    <?php } ?>
                                  </select>
              
                                </div>
                                <div style="float:left; padding:0px 0px 0px 0px">
                                  <select  id="cmb_DelTrack_Year"  name="cmb_DelTrack_Year"  style="width:87px;">
                                   <option value="0" selected="selected">YYYY</option>
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
                          <div class="dvFloat formpadding"  style="padding:10px 0px 15px 0px">
                            <div class="formlabel1" style="width: 310px;"> &nbsp; </div>
                            <div class="formcontrol2" style="width: 460px;">
                              
                              <div style=" width:84px; height:30px; float:left;padding-right:10px;"> <a class="button4" onclick="javascript:checkduplication('Blood_Pressure', this);" style="cursor:pointer;" >SUBMIT</a></div>
                               <?php if($dir!="health/daily_tracking") { ?>
                                  
                            <?php if ($blood_pressure_count>0) { ?> 
                              <div style="width:156px; height:30px; float:left;padding-right:10px;" id="dvBPNA"> <a class="button2" style="background-color:#767676;">NOT APPLICABLE</a></div>
                              <?php } else { ?>
                              <div style=" width:156px; height:30px; float:left;padding-right:10px;" id="dvBPNA1">  <a class="button2" onclick="javascript:Not_Applicable_Record('Blood_Pressure','8','Yes','dvBPNA1');" style="cursor:pointer">NOT APPLICABLE</a></div>
                          <?php } ?>
                               <div class="dvFloat" style="font-size:12px; padding-top:10px;  color:#666666; text-align:left;">(<span style="font-weight: bold;">Note:</span> If you don&lsquo;t have the data now, you can<br />submit it later by clicking Not Applicable button.)</div>
                                  
                                 
                                  <div style=" width:156px; height:30px; float:left;padding-right:10px;display:none;"> <a class="button2" >SKIP FOR NOW</a></div>
                              <?php } else { ?>
                                    <div style=" width:85px; height:30px; float:left;padding-right:10px; display:none;"> <a class="button2" onClick="showBPCancel();" style="cursor:pointer;" >Cancel</a></div>
                              <?php } ?>
                      
              
                              
                              
                            </div>
                          </div>
                          <div class="dvFloat formpadding1"  style="padding:0px 0px 25px 0px">
                            <div class="formlabel1" style="width: 310px;"> &nbsp; </div>
                            <div class="formcontrol2" style="text-align: left; font-size: 13px; font-family: 'myriad_web_proregular'; width: 460px;">
                              <div class="div_input_text1"  style="padding-bottom:10px;color:#c02c3e; padding-left: 0px;"> Average Blood Pressure as per your age: </div>
                              <table cellpadding="5" cellspacing="0" border="0" style="border: solid 0px #CCCCCC; width:80%; font-size: 13px; font-family: 'myriad_web_proregular';">
                                <tr>
                                  <td style="padding:5px; border: solid 1px #CCCCCC; font-size: 13px; font-family: 'myriad_web_proregular'; color: #666666;">Minimum<br>
                                    (Diastolic/Systolic ) </td>
                                  <td style="padding:5px; border-top: solid 1px #CCCCCC; border-bottom: solid 1px #CCCCCC;border-right: solid 1px #CCCCCC; font-size: 13px; font-family: 'myriad_web_proregular'; color: #666666;">Average<br>
                                    (Diastolic/Systolic ) </td>
                                  <td style="padding:5px; border-top: solid 1px #CCCCCC; border-bottom: solid 1px #CCCCCC;border-right: solid 1px #CCCCCC; font-size: 13px; font-family: 'myriad_web_proregular'; color: #666666;">Maximum<br>
                                    (Diastolic/Systolic )</td>
                                </tr>
                                <?php
                                $query="SELECT * FROM " .Bp_Age_Masters. " WHERE min_age <= ".$age." and max_age>=".$age." order by min_age limit 1";
								//echo $query;
								   $result = mysql_query($query);
									  if($result != "") {
									    $rowcount = mysql_num_rows($result);
									      if($rowcount > 0) {
										     while($row = mysql_fetch_assoc($result)) {
											    extract($row);
								?>
                                <tr>
                                  <td  style="padding:5px;  border-left: solid 1px #CCCCCC; border-bottom: solid 1px #CCCCCC;border-right: solid 1px #CCCCCC;"><?php echo $row['dia_min']?>/<?php echo $row['sys_min']?></td>
                                  <td  style="padding:5px; border-bottom: solid 1px #CCCCCC;border-right: solid 1px #CCCCCC;"><?php echo $row['dia_ave']?>/<?php echo $row['sys_ave']?></td>
                                  <td style="padding:5px; border-bottom: solid 1px #CCCCCC;border-right: solid 1px #CCCCCC;"><?php echo $row['dia_max']?>/<?php echo $row['sys_max']?></td>
                                </tr>
                                <?php }}} ?>
                                
                              </table>
                              <div class="div_input_text1" style="font-size: 12px; padding-left: 0px; text-align: left; border:solid 0px red; width:800px;"><span style="font-weight: bold;">Note:</span> It is recommended that a physician be consulted for advice in event <br />of any doubts or need for therapy. The figures are indicative.</div>
                            </div>
                          </div>
                          <?php if($dir!="health/daily_tracking") { ?>
                           <div class="dvFloat formpadding1"  style="padding:15px 0px">
								<div style=" width:156px; height:30px; float:left;padding-right:20px;"> <a href="#"  onclick="javascript:countries.expandit(12)" ><img src="images/register_steps/familyhistory_strip_dis.jpg" alt="" /></a></div>
								<div style=" width:156px; height:30px; float:right;padding-right:75px;">
									
                                      <a href="#" onclick="javascript:OpenTab('8','true')" id="aDNextTab_8" style="cursor:text;display:<?php if($blood_pressure_count > 0) {echo "none" ;}?>"><img src="images/register_steps/sugarprofile_strip_g.jpg" alt="" /></a>
             
             <a href="#" onclick="javascript:OpenTab('8','true')" id="aENextTab_8" style="cursor:pointer;display:<?php if($blood_pressure_count== 0) {echo "none" ;}?>"><img src="images/register_steps/sugarprofile_strip.jpg" alt="" /></a> 
                                    
                                 <!--   <a href="#" onclick="javascript:OpenTab('8','true')"><img src="images/register_steps/sugarprofile_strip.jpg" alt="" /></a>-->
									<a  onclick="javascript:countries1.expandit(3)" id="dvNextTabOn_8" style="display:none"  href="#"><img src="images/register_steps/dailytracking_strip.jpg" alt="" /></a>
								</div>
							 </div>
                           <?php } ?>
                        </div>
                        
</div>