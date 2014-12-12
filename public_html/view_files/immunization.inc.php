<script>
function showiform(){ 
	document.getElementById('ShowIDiv').style.display = 'block'; 
	
	
	if(document.getElementById("HideIDivLink")!=null)
	{
		document.getElementById('HideIDivLink').style.display = ''; 
	}
	
	
	if(document.getElementById("ShowIDivLink")!=null)
	{
		document.getElementById('ShowIDivLink').style.display = 'none'; 
	}
	
}

function showICancel()
{ 
	document.getElementById('ShowIDiv').style.display = 'none'; 
	
	if(document.getElementById("ShowIDivLink")!=null)
	{
		document.getElementById('ShowIDivLink').style.display = ''; 
	}
	
	
	if(document.getElementById("HideIDivLink")!=null)
	{
		document.getElementById('HideIDivLink').style.display = 'none'; 
	}

}
</script>
<?php $iDay="0";$iMonth="0";$iYear="0"; $iDay1="0";$iMonth1="0";$iYear1="0"; $iMinute="0"; $iHour="0";?>
<?php 
if(isset($_GET['dir'])) {
	$dir = $_GET['dir'];
}
$iYearcurrent=2014;
$iYearcurrent1=2014;
$immunization_count =GetValue("select Count(*)  as col from tbl_immunization  where user_id=".$_SESSION['UserID']." and isactive=1 and isdeleted=0 ","col");
$immunization_count_na=GetValue("select Count(*) as col from tbl_user_not_applicable where user_id=".$_SESSION['UserID']." and isactive=1 and isdeleted=0 and type='Immunization'","col");
$immunization_count=$immunization_count+$immunization_count_na;
?>

<div style="width:99%; border:solid 0px red;">
                  <div class="dvFloat formpadding">
                    <div class="formlabel1">
                      <label class="formlabel1">
						<?php if($dir=="health/immunization") { ?>
                        	<h2 class="Tab_Title">Immunization</h2>
                        <?php } else { ?>
                        	<h2 class="Tab_Title">LIST</h2>
                        <?php } ?>                      </label>
                    </div>
                    <div class="formcontrol2"> &nbsp; </div>
                  </div>
                  <div class="dvFloat formpadding1" id="dvImmunization" name="dvImmunization" style="border-bottom:0px;">
                     &nbsp;
                  </div>
                    <div class="dvFloat" style="display:<?php if($_SESSION['UserType']!="Doctor"  && $_SESSION['UserType']!="MD" && $_SESSION['UserType']!="Nutritionist"){ echo "";} else { echo "none"; } ?>" id="DvImmuView"> 
                  <div class="dvFloat formpadding1" style="padding-top:20px;">
                    <div class="formlabel1">
                         <?php if($_SESSION['UserType']!="Doctor" && $_SESSION['UserType']!="MD" && $_SESSION['UserType']!="Nutritionist"){ ?>
                       <label class="formlabel1" style="border:solid 0px red; width:500px; padding:15px 13px 0px 11px;">
                          <?php if($dir=="health/immunization") { ?>
                        	<a  onClick="showiform();" style="cursor:pointer"><img src="images/nutritionist/add_to_list.jpg" alt="" title="" border="0" style="float:left; margin-right:10px;" id="ShowIDivLink"></a>
                            
                              <a  onClick="showICancel();" style="cursor:pointer">
                    	<img src="images/nutritionist/add_minus.jpg" alt="" title="" border="0" style="float:left; margin-right:10px; display:none;"  id="HideIDivLink">
                    </a>
                    
                    
                        <?php } else { ?>
                        	 <h2 class="Tab_Title" style="border:solid 0px green; width:110px; float:left;">Add to list</h2>
                        <?php } ?>
                         <h5 style="color:red; display:none;  width:200px; float:left; font-size:13px;" id="dvEditImmu"> (You are editing selected list.)</h5>
                      </label>
                      <?php } else { ?>
                      	 <h2 class="Tab_Title" style="border:solid 0px green; width:110px; float:left;">View list</h2>
                      <?php } ?>
                    </div>
                    <div class="formcontrol2" style="display: none;"> &nbsp; </div>
                  </div>
                  <?php if($dir=="health/immunization") { ?>
                     <div class="dvFloat" id="ShowIDiv" style="display:none;">
                     <?php } else { ?>
                      <div class="dvFloat" id="ShowIDiv">
                     <?php } ?>
                  <div class="dvFloat formpadding1">
                    <div class="formlabel1">
                      <label class="formlabel1">Vaccine Name<span class="redtxt">*</span> </label>
                    </div>
                    <div class="formcontrol2" style="width: 438px;">
                      <input type="text" id="txt_immunization_Name" name="txt_immunization_Name" value="" style="width: 239px;">
                      <input id="txt_Immnunization_ID" name="txt_Immnunization_ID" value="" type="hidden"/>
                    </div>
                  </div>
                  <div class="dvFloat formpadding1">
                    <div class="formlabel1">
                      <label class="formlabel1">Date Administered<span class="redtxt">*</span> </label>
                    </div>
                    <div class="formcontrol2" style="width: 438px;">
                      <div class="dvFloat">
                        <div style="float:left; padding:0px 19px 0px 0px">
                          <select  id="txt_immunization_Date"  name="txt_immunization_Date"  style="width:60px;">
                            <option value="0">DD</option>
                            <?php for($iDay=1;$iDay < 32;$iDay++){ ?>
                                <option value="<?php echo $iDay?>"><?php echo $iDay?></option>
                            <?php } ?>
                          </select>
                       </div>
                        <div style="float:left; padding:0px 19px 0px 0px">
                          <select  id="txt_immunization_Month"  name="txt_immunization_Month"  style="width:65px;">
                           <option value="0">MM</option>
                            <?php for($iMonth=1;$iMonth < 13;$iMonth++){ ?>
                                <option value="<?php echo $iMonth?>"><?php echo $iMonth?></option>
                            <?php } ?>
                          </select>
                        </div>
                        <div style="float:left; padding:0px 0px 0px 0px">
                          <select  id="txt_immunization_Year"  name="txt_immunization_Year"  style="width:88px;">
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
                      <label class="formlabel1">Next Visit Reminder </label>
                    </div>
                    <div class="formcontrol2" style="width: 438px;">
                      <div class="dvFloat">
                        <div style="float:left; padding:0px 19px 0px 0px">
                           <select  id="txt_immunization_Date1"  name="txt_immunization_Date1"  style="width:60px;">
                            <option value="0">DD</option>
                            <?php for($iDay1=1;$iDay1 < 32;$iDay1++){ ?>
                                <option value="<?php echo $iDay1?>"><?php echo $iDay1?></option>
                            <?php } ?>
                          </select>
                          
                        </div>
                        <div style="float:left; padding:0px 19px 0px 0px">
                          <select  id="txt_immunization_Month1"  name="txt_immunization_Month1"  style="width:65px;">
                           <option value="0">MM</option>
                            <?php for($iMonth1=1;$iMonth1 < 13;$iMonth1++){ ?>
                                <option value="<?php echo $iMonth1?>"><?php echo $iMonth1?></option>
                            <?php } ?>
                          </select>
                          
                        </div>
                        <div style="float:left; padding:0px 15px 0px 0px">
                           <select  id="txt_immunization_Year1"  name="txt_immunization_Year1"  style="width:88px;">
                            <option value="0">YYYY</option>
                            <?php for($iYear1=1;$iYear1 < 3;$iYear1++){ ?>
                                <option value="<?php echo $iYearcurrent1?>" ><?php echo $iYearcurrent1?></option>
                                <?php 
                                    $iYearcurrent1=$iYearcurrent1+1;
                                ?>
                             <?php } ?>
                          </select>
                          
                          
                        </div>
                        <div style="float:left; padding:0px 15px 0px 0px; display:none;">
                          <select id="txt_immunization_hour" name="txt_immunization_hour" title=""  style="width:70px;">
                            <option value="0">HH</option>
                             <?php for($iHour=7;$iHour < 25;$iHour++){ ?>
                              <option value="<?php echo $iHour?>"><?php echo $iHour?></option>
                              <?php } ?>
                          </select>
                        </div>
                        <div style="float:left; padding:0px 0px 0px 0px;  display:none;">
                          <select  id="txt_immunization_Min" name="txt_immunization_Min" title=""  style="width:70px;">
                              <option value="0">Min</option>
                              <option value="0">0</option>
                              <option value="15">15</option>
                              <option value="30">30</option>
                              <option value="45">45</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                   <?php if($_SESSION['UserType']!="Doctor" && $_SESSION['UserType']!="MD" && $_SESSION['UserType']!="Nutritionist"){ ?>
	                  <div class="dvFloat formpadding1"  style="padding:10px 0px 25px 0px">
                    <div class="formlabel1"> &nbsp; </div>
                    <div class="formcontrol2" style="width: 438px;">
                      <div style=" width:84px; height:30px; float:left;padding-right:10px;"> <a class="button4" onclick="javascript:Immunization_Ins(this);" style="cursor:pointer;">SUBMIT</a></div>
                     
                      <?php if($dir!="health/immunization") { ?>
                         
                         	 <?php if ($immunization_count>0) { ?> 
                              <div style="width:156px; height:30px; float:left;padding-right:10px;" id="dvImmuNA"> <a class="button2" style="background-color:#767676;">NOT APPLICABLE</a></div>
                              <?php } else { ?>
                             <div style=" width:156px; height:30px; float:left;padding-right:10px;" id="dvImmuNA1"> <a class="button2" onclick="javascript:Not_Applicable_Record('Immunization','5','Yes','dvImmuNA1');" style="cursor:pointer">NOT APPLICABLE</a></div>
                              <?php } ?>
		      
              
        <div class="dvFloat" style="font-size:12px; padding-top:10px;  color:#666666; text-align:left;">(<span style="font-weight: bold;">Note:</span> If you don&lsquo;t have the data now, you can<br />submit it later by clicking Not Applicable button.)</div>
                         	 
                             
                             
                          <div style=" width:156px; height:30px; float:left;padding-right:10px;display:none;"> <a class="button2" >SKIP FOR NOW</a></div>
                      <?php } else { ?>
                      		<div style=" width:85px; height:30px; float:left;padding-right:10px; display:none;"> <a class="button2"  onClick="showICancel();" style="cursor:pointer;">Cancel</a></div>
                      <?php } ?>
                      
                    </div>
                  </div>
                  <?php } ?>
                  <?php if($dir!="health/immunization") { ?>
					<div class="dvFloat formpadding1"  style="padding:15px 0px">
						<div style=" width:156px; height:30px; float:left;padding-right:20px;"> <a href="#"  onclick="javascript:countries.expandit(6)" ><img src="images/register_steps/hospitalization_strip_dis.jpg" alt="" /></a></div>
						<div style=" width:156px; height:30px; float:right;padding-right:75px;">
							
                              <a href="#" onclick="javascript:OpenTab('5','true')" id="aDNextTab_5" style="cursor:text;display:<?php if($immunization_count > 0) {echo "none" ;}?>"><img src="images/register_steps/healthproblems_strip_g.jpg" alt="" /></a>
             
             <a href="#" onclick="javascript:OpenTab('5','true')" id="aENextTab_5" style="cursor:pointer;display:<?php if($immunization_count== 0) {echo "none" ;}?>"><img src="images/register_steps/healthproblems_strip.jpg" alt="" /></a> 
                            
                            
                        <!--    <a href="#" onclick="javascript:OpenTab('5','true')"><img src="images/register_steps/healthproblems_strip.jpg" alt="" /></a>-->
							<a  onclick="javascript:countries.expandit(10)" id="dvNextTabOn_5" style="display:none"  href="#"><img src="images/register_steps/healthproblems_strip.jpg" alt="" /></a>
						</div>
					 </div>
                  <?php } ?>
                  </div>
                </div>
</div>