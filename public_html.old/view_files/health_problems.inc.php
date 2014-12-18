<script>
function showhpform()
{ 
	document.getElementById('ShowHPDiv').style.display = 'block';
	document.getElementById('HideHPDivLink').style.display = ''; 
	document.getElementById('ShowHPDivLink').style.display = 'none';
}

function showHPCancel()
{ 
	document.getElementById('ShowHPDiv').style.display = 'none'; 
	document.getElementById('ShowHPDivLink').style.display = ''; 
	document.getElementById('HideHPDivLink').style.display = 'none'; 
}

function ADD_HP_PLUS_MINUS_RECORDS(type,graterCount)
{
	var count=document.getElementById("txtAdd"+type+"Prob").value;
	count=parseFloat(count);	
	if (count >= graterCount)
	{
		alert("You cannot add any more problem.");
		return false;
	}
	else
	{
		count=count+1;
	}
	//alert(count);
	document.getElementById("Dv"+type+"Problem"+count).style.display='';
	document.getElementById("txtAdd"+type+"Prob").value=count;

}


function RemoveCardProb(i)
{
	var count=document.getElementById("txtAddCardProb").value;
	count=parseFloat(count);	
 
	document.getElementById('DvCarbProblem'+i).style.display = 'none';
	count=count-1;
	document.getElementById("txtAddCardProb").value=count;
}

</script>

<?php $iDay="0";$iMonth="0";$iYear="0";$LoopProblem="1"; $iCardProb="1";$iEyeProb="6"; 
$iKidneyProb="12"; $iCirculationProb="18"; $iSkinProb="24"; $iDigestiveProb="30"; $iJointPaintsProb="36"; $iConstipationProb="42"; $iOtherProb="48";
 $commondoctortype="ddl_Health_Problem"; $commondoctorID="dvHealthDoc";
?>
<?php
	if(isset($_POST['txt_HP_Problem_1']))
	{
		//echo "sdf";
	}
	
if(isset($_GET['dir'])) {
	$dir = $_GET['dir'];
}

$health_problem_count =GetValue("select Count(*)  as col from tbl_health_problem  where user_id=".$_SESSION['UserID']." and isactive=1 and isdeleted=0 ","col");
				$health_problem_count_na=GetValue("select Count(*) as col from tbl_user_not_applicable where user_id=".$_SESSION['UserID']." and isactive=1 and isdeleted=0 and type='Health_Problems'","col");

$health_problem_count=$health_problem_count+$health_problem_count_na;





?>
<form  method="POST" id="frmHelathProblem" name="frmHelathProblem">
<div style="width:99%; border:solid 0px red;">  
                  <div class="dvFloat formpadding" >
                    <div class="formlabel1" >
                      <label class="formlabel1" >
                      	<?php if($dir=="health/health_problems") { ?>
                        	<h2 class="Tab_Title">HEALTH PROBLEM</h2>
                        <?php } else { ?>
                        	<h2 class="Tab_Title">LIST</h2>
                        <?php } ?>
                        
                      </label>
                    </div>
                    <div class="formcontrol2"> &nbsp; </div>
                  </div>
                  <div class="dvFloat formpadding1" style="padding:0px; border-bottom:0px;" id="dvHealth_Problems" name="dvHealth_Problems" >
                    &nbsp;
                  </div>
                    <div class="dvFloat"  style="display:<?php if($_SESSION['UserType']!="Doctor"  && $_SESSION['UserType']!="MD" && $_SESSION['UserType']!="Nutritionist"){ echo "";} else { echo "none"; } ?>"> 
                  <div class="dvFloat formpadding1" style="padding-top:20px">
                    <div class="formlabel1">
                     <label class="formlabel1" style="border:solid 0px red; width:490px;">
                     	<?php if($dir=="health/health_problems") { ?>
                        	<a  onClick="showhpform();" style="cursor:pointer"><img src="images/nutritionist/add_to_list.jpg" alt="" title="" border="0" style="float:left; margin-right:10px;" id="ShowHPDivLink"></a>
                            
                             <a  onClick="showHPCancel();" style="cursor:pointer">
                    	<img src="images/nutritionist/add_minus.jpg" alt="" title="" border="0" style="float:left; margin-right:10px; display:none;"  id="HideHPDivLink">
                    </a>
                    
                    
                        <?php } else { ?>
                        	<h2 class="Tab_Title" style="border:solid 0px green; width:110px; float:left;">Add to list</h2>
                        <?php } ?>
                      <h5 style="color:red; display:none;  width:200px; float:left; font-size:13px;" id="dvEditHealth"> (You are editing selected list.)</h5>
					  <input type="hidden" id="txt_Health_Problem_ID" name="txt_Health_Problem_ID"/>
                      </label>
                    </div>
                    <div class="formcontrol2" style="width: 288px;"> &nbsp; </div>
                  </div>
                  <?php if($dir=="health/health_problems") { ?>
                     <div class="dvFloat" id="ShowHPDiv" style="display:none;"> 
                     <?php } else { ?>
                      <div class="dvFloat" id="ShowHPDiv">
                     <?php } ?>
                  <div class="dvFloat formpadding1">
                    <div class="formlabel1" style="width:490px;">
                      <label class="formlabel1">Do you face any cardiac problems ?</label>
                    </div>
                    <div class="formcontrol2" style="width: 288px;">
                      <div style="float:left; text-align:left; width:32%; border:solid 0px red;">
                        <input type="radio" id="cardiacProblemsYes" name="cardiacProblems" value="Yes"  onclick="show19();" align="absmiddle" style=" margin-left: -1px; float: left; margin-top: 5px;">
                        <label for="Yes">Yes</label>
                        &nbsp;&nbsp;
                        <input type="radio" id="cardiacProblemsNo" name="cardiacProblems" value="No" checked  onclick="show20();"  align="absmiddle" style="margin-top: 5px;">
                        <label for="No">No</label>
                        &nbsp;&nbsp; </div>
                    </div>
                  </div>
                  <div class="dvFloat formpadding1" id="divShowHide9" style="display: none">
                    <div class="dvFloat" style="padding-top: 0px; text-align:left; margin-left:15px;">
                      <table cellpadding="0" cellspacing="0" style="width:100%; border:solid 0px #000000; text-align:left;">
                        <tr>
                          <td style="width:14%; border: solid 0px #990033;">Problem</td>
                          <td style="width:19%; border: solid 0px #990033;">Date Of Diagnosis</td>
                          <td style="width:29%; border: solid 0px #990033;">Consulting Specialist</td>
                        </tr>
				
						<?php for($LoopProblem=1;$LoopProblem < 6;$LoopProblem++){?>
                        <tr  style="display:<?php if($LoopProblem!=1){ echo "none"; }?>" id="DvCardProblem<?php echo $LoopProblem?>">
                          <td style="padding-top: 5px;">
							<input type="text" name="txt_HP_Problem_<?php echo $LoopProblem?>" id="txt_HP_Problem_<?php echo $LoopProblem?>" value=""/>

							<input type="hidden" name="txt_HP_Problem_Type<?php echo $LoopProblem?>" id="txt_HP_Problem_Type<?php echo $LoopProblem?>" value="Cardiac" />
                          </td>
                          <td style="padding-top: 0px; margin-top: -3px;"><div style="float:left; padding:0px 5px 0px 0px">
                              <select  id="ddl_HP_Problem_Day<?php echo $LoopProblem?>"  name="ddl_HP_Problem_Day<?php echo $LoopProblem?>"  style="width:50px;">
                               <option value="0" selected="selected">DD</option>
								<?php for($iDay=1;$iDay < 32;$iDay++){ ?>
									<option value="<?php echo $iDay?>"><?php echo $iDay?></option>
								<?php } ?>
                              </select>
                            </div>
                            <div style="float:left; padding:0px 5px 0px 0px">
                              <select   id="ddl_HP_Problem_Month<?php echo $LoopProblem?>"  name="ddl_HP_Problem_Month<?php echo $LoopProblem?>"  style="width:50px;">
                                <option value="0" selected="selected">MM</option>
								<?php for($iMonth=1;$iMonth < 13;$iMonth++){ ?>
									<option value="<?php echo $iMonth?>"><?php echo $iMonth?></option>
								<?php } ?>
                              </select>
                            </div>
                            <div style="float:left; padding:0px 0px 0px 0px">
                            <?php $iYearcurrent=2014;?>
                              <select   id="ddl_HP_Problem_Year<?php echo $LoopProblem?>"  name="ddl_HP_Problem_Year<?php echo $LoopProblem?>"  style="width:63px;">
                                <option value="0">YYYY</option>
				 					
                                     <?php for($iYear=1;$iYear < 20;$iYear++){ ?>
                                        <option value="<?php echo $iYearcurrent?>" ><?php echo $iYearcurrent?></option>
                                        <?php 
                                            $iYearcurrent=$iYearcurrent-1;
                                        ?>
                                     <?php } ?>
                              </select>
                            </div></td>
                          <td style="padding-top: 5px; text-align:left; width:250px;" valign="top" >
							
							<div id="dvHealthDoc<?php echo $LoopProblem?>">
							  <?php $DoctorArray=$get_retrive->GetDoctor(999,0,'Doctor') ;  ?>	
                              <select  id="ddl_Health_Problem<?php echo $LoopProblem?>" name="ddl_Health_Problem<?php echo $LoopProblem?>">
                                <option value="0">Select Doctor</option>
                                 <?php  while($doctor = mysql_fetch_array( $DoctorArray )){?>
                                    <option value="<?php echo $doctor['doctor_id']?>"><?php echo $doctor['doctor_name']?></option>
                                 <?php }?>
                              </select>
                          </div>
						  </td>
                          <td style="padding-top: 5px; text-align:left; display:none" valign="middle">
                          <a onclick="javascript:RemoveCardProb('<?php echo $LoopProblem?>');" style="cursor:pointer;"> X</a></td>
                        </tr>
                        
                       <?php } ?>
					    <tr style="display:''">
                          <td style="padding-top: 7px;"><a onclick="javascript:ADD_HP_PLUS_MINUS_RECORDS('Card',5);" style="cursor:pointer;"><img src="images/register_steps/add_another_eye_problem.jpg" alt="" title="" border="0"></a>
							<input type="hidden" id="txtAddCardProb" name="txtAddCardProb" value="<?php echo $iCardProb?>"/>
						  </td>
                          <td style="padding-left:0px;">&nbsp;</td>
                          <td style="font-size: 12px; padding-top: 14px; vertical-align: top; text-align: left;"><div class="div_input_text1" style="font-size: 12px; text-align: left; padding-left: 0px;">Did not find your Doctor in List? <span style="text-decoration: underline;"><a class="btnclickhere" onclick="javascript:SetScroll(); ViewDoctor('dvHealthDoc', 'ddl_Health_Problem');" style="cursor:pointer;">Click here</a></span> to Add One 
			</div> </td>
                        </tr>
                      </table>
                    </div>
                  </div>
                  <div class="dvFloat formpadding1" >
                    <div class="formlabel1"  style="width:490px;">
                      <label class="formlabel1">Do you face any eye related problems ?</label>
                    </div>
                    <div class="formcontrol2" style="width: 288px;">
                      <div style="float:left; text-align:left; width:32%; border:solid 0px red;">
                        <input type="radio" id="EyerelatedProblemsYes" name="EyerelatedProblems" value="Yes" onClick="show21();" align="absmiddle" style=" margin-left: -1px; float: left; margin-top: 5px;">
                        <label for="Yes">Yes</label>
                        &nbsp;&nbsp;
                        <input type="radio" id="EyerelatedProblemsNo" name="EyerelatedProblems" value="No" checked onClick="show22();" align="absmiddle" style="margin-top: 5px;">
                        <label for="No">No</label>
                        &nbsp;&nbsp; </div>
                    </div>
                  </div>
                  <div class="dvFloat formpadding1" id="divShowHide10" style="display: none">
                     <div class="dvFloat" style="padding-top: 0px; text-align:left; margin-left:15px;">
                      <table cellpadding="0" cellspacing="0" style="width:100%; border:solid 0px #000000">
                        <tr>
                          <td style="width:14%;padding-left:0px;">Problem</td>
                          <td style="width:19%;padding-left:0px;">Date Of Diagnosis</td>
                          <td style="width:29%;padding-left:0px;">Consulting Specialist</td>
                        </tr>
                       <?php for($LoopProblem=6;$LoopProblem < 12;$LoopProblem++){?>
                        <tr  style="display:<?php if($LoopProblem!=6){ echo "none"; }?>" id="DvEyeProblem<?php echo $LoopProblem?>">
                          <td style="padding-top: 5px;">
							<input type="text" name="txt_HP_Problem_<?php echo $LoopProblem?>" id="txt_HP_Problem_<?php echo $LoopProblem?>" value="" />

							<input type="hidden" name="txt_HP_Problem_Type<?php echo $LoopProblem?>" id="txt_HP_Problem_Type<?php echo $LoopProblem?>" value="Eye" />
                          </td>
                          <td style="padding-top: 0px; margin-top: -3px;"><div style="float:left; padding:0px 5px 0px 0px">
                              <select  id="ddl_HP_Problem_Day<?php echo $LoopProblem?>"  name="ddl_HP_Problem_Day<?php echo $LoopProblem?>"  style="width:50px;">
                               <option value="0" selected="selected">DD</option>
								<?php for($iDay=1;$iDay < 32;$iDay++){ ?>
									<option value="<?php echo $iDay?>"><?php echo $iDay?></option>
								<?php } ?>
                              </select>
                            </div>
                            <div style="float:left; padding:0px 5px 0px 0px">
                              <select   id="ddl_HP_Problem_Month<?php echo $LoopProblem?>"  name="ddl_HP_Problem_Month<?php echo $LoopProblem?>"  style="width:50px;">
                                <option value="0" selected="selected">MM</option>
								<?php for($iMonth=1;$iMonth < 13;$iMonth++){ ?>
									<option value="<?php echo $iMonth?>"><?php echo $iMonth?></option>
								<?php } ?>
                              </select>
                            </div>
                            <div style="float:left; padding:0px 0px 0px 0px">
                              <?php $iYearcurrent1=2014;?>
                              <select   id="ddl_HP_Problem_Year<?php echo $LoopProblem?>"  name="ddl_HP_Problem_Year<?php echo $LoopProblem?>"  style="width:63px;">
                                <option value="0">YYYY</option>
				 						 <?php for($iYear=1;$iYear < 20;$iYear++){ ?>
                                        <option value="<?php echo $iYearcurrent1?>" ><?php echo $iYearcurrent1?></option>
                                        <?php 
                                            $iYearcurrent1=$iYearcurrent1-1;
                                        ?>
                                     <?php } ?>
                              </select>
                            </div></td>
                          <td style="padding-top: 5px; text-align:left" valign="top" >
							
							<div id="dvHealthDoc<?php echo $LoopProblem?>">
							  <?php $DoctorArray=$get_retrive->GetDoctor(999,0,'Doctor') ;  ?>	
                              <select  id="ddl_Health_Problem<?php echo $LoopProblem?>" name="ddl_Health_Problem<?php echo $LoopProblem?>">
                                <option value="0">Select Doctor</option>
                                 <?php  while($doctor = mysql_fetch_array( $DoctorArray )){?>
                                    <option value="<?php echo $doctor['doctor_id']?>"><?php echo $doctor['doctor_name']?></option>
                                 <?php }?>
                              </select>
                          </div>
						  </td>
                        </tr>
                       <?php } ?>
					    <tr style="">
                          <td style="padding-top: 7px;"><a onclick="javascript:ADD_HP_PLUS_MINUS_RECORDS('Eye',11);" style="cursor:pointer;"><img src="images/register_steps/add_another_eye_problem.jpg" alt="" title="" border="0"></a>
							<input type="hidden" id="txtAddEyeProb" name="txtAddEyeProb" value="<?php echo $iEyeProb?>"/>
						  </td>
                          <td style="padding-left:0px;">&nbsp;</td>
                         <td style="font-size: 12px; padding-top: 14px; vertical-align: top; text-align: left;"><div class="div_input_text1" style="font-size: 12px; text-align: left; padding-left: 0px;">Did not find your Doctor in List? <span style="text-decoration: underline;"><a class="btnclickhere" onclick="javascript:SetScroll(); ViewDoctor('dvHealthDoc', 'ddl_Health_Problem');" style="cursor:pointer;">Click here</a></span> to Add One 
			</div> </td>
                        </tr>
                      </table>
                    </div>
                  </div>
                  <div class="dvFloat formpadding1">
                    <div class="formlabel1"  style="width:490px;">
                      <label class="formlabel1">Do you face any kidney related problems ?</label>
                    </div>
                    <div class="formcontrol2" style="width: 288px;">
                      <div style="float:left; text-align:left; width:32%; border:solid 0px red;">
                        <input type="radio" id="FaceProblemsYes" name="FaceProblems" value="Yes"  onclick="show5();" align="absmiddle" style=" margin-left: -1px; float: left; margin-top: 5px;">
                        <label for="Yes">Yes</label>
                        &nbsp;&nbsp;
                        <input type="radio" id="FaceProblemsNo" name="FaceProblems" value="No" checked  onclick="show6();" align="absmiddle" style="margin-top: 5px;">
                        <label for="No">No</label>
                        &nbsp;&nbsp; </div>
                    </div>
                  </div>
                  <div class="dvFloat formpadding1" id="divShowHide2" style="display: none">
                     <div class="dvFloat" style="padding-top: 0px; text-align:left; margin-left:15px;">
                      <table cellpadding="0" cellspacing="0" style="width:100%; border:solid 0px #000000">
                        <tr>
                          <td style="width:14%;padding-left:0px;">Problem</td>
                          <td style="width:19%;padding-left:0px;">Date Of Diagnosis</td>
                          <td style="width:29%;padding-left:0px;">Consulting Specialist</td>
                        </tr>
                       <?php for($LoopProblem=12;$LoopProblem < 18;$LoopProblem++){?>
                         <tr  style="display:<?php if($LoopProblem!=12){ echo "none"; }?>" id="DvKidneyProblem<?php echo $LoopProblem?>">
                          <td style="padding-top: 5px;">
							<input type="text" name="txt_HP_Problem_<?php echo $LoopProblem?>" id="txt_HP_Problem_<?php echo $LoopProblem?>" value="" />
							<input type="hidden" name="txt_HP_Problem_Type<?php echo $LoopProblem?>" id="txt_HP_Problem_Type<?php echo $LoopProblem?>" value="Kidney" />
                          </td>
                          <td style="padding-top: 0px; margin-top: -3px;"><div style="float:left; padding:0px 5px 0px 0px">
                              <select  id="ddl_HP_Problem_Day<?php echo $LoopProblem?>"  name="ddl_HP_Problem_Day<?php echo $LoopProblem?>"  style="width:50px;">
                               <option value="0" selected="selected">DD</option>
								<?php for($iDay=1;$iDay < 32;$iDay++){ ?>
									<option value="<?php echo $iDay?>"><?php echo $iDay?></option>
								<?php } ?>
                              </select>
                            </div>
                            <div style="float:left; padding:0px 5px 0px 0px">
                              <select   id="ddl_HP_Problem_Month<?php echo $LoopProblem?>"  name="ddl_HP_Problem_Month<?php echo $LoopProblem?>"  style="width:50px;">
                                <option value="0" selected="selected">MM</option>
								<?php for($iMonth=1;$iMonth < 13;$iMonth++){ ?>
									<option value="<?php echo $iMonth?>"><?php echo $iMonth?></option>
								<?php } ?>
                              </select>
                            </div>
                            <div style="float:left; padding:0px 0px 0px 0px">
                             <?php $iYearcurrent2=2014;?>
                              <select   id="ddl_HP_Problem_Year<?php echo $LoopProblem?>"  name="ddl_HP_Problem_Year<?php echo $LoopProblem?>"  style="width:63px;">
                                <option value="0">YYYY</option>
									 <?php for($iYear=1;$iYear < 20;$iYear++){ ?>
                                        <option value="<?php echo $iYearcurrent2?>" ><?php echo $iYearcurrent2?></option>
                                        <?php 
                                            $iYearcurrent2=$iYearcurrent2-1;
                                        ?>
                                     <?php } ?>
                              </select>
                            </div></td>
                          <td style="padding-top: 5px; text-align:left" valign="top" >
							
							<div id="dvHealthDoc<?php echo $LoopProblem?>">
							  <?php $DoctorArray=$get_retrive->GetDoctor(999,0,'Doctor') ;  ?>	
                              <select  id="ddl_Health_Problem<?php echo $LoopProblem?>" name="ddl_Health_Problem<?php echo $LoopProblem?>">
                                <option value="0">Select Doctor</option>
                                 <?php  while($doctor = mysql_fetch_array( $DoctorArray )){?>
                                    <option value="<?php echo $doctor['doctor_id']?>"><?php echo $doctor['doctor_name']?></option>
                                 <?php }?>
                              </select>
                          </div>
						  </td>
                        </tr>
						<?php } ?>
                        <tr style="">
                          <td style="padding-top: 7px;"><a onclick="javascript:ADD_HP_PLUS_MINUS_RECORDS('Kidney',17);" style="cursor:pointer;"><img src="images/register_steps/add_another_eye_problem.jpg" alt="" title="" border="0"></a>
							<input type="hidden" id="txtAddKidneyProb" name="txtAddKidneyProb" value="<?php echo $iKidneyProb?>"/>
						  </td>
                          <td style="padding-left:0px;">&nbsp;</td>
                         <td style="font-size: 12px; padding-top: 14px; vertical-align: top; text-align: left;"><div class="div_input_text1" style="font-size: 12px; text-align: left; padding-left: 0px;">Did not find your Doctor in List? <span style="text-decoration: underline;"><a class="btnclickhere" onclick="javascript:SetScroll(); ViewDoctor('dvHealthDoc', 'ddl_Health_Problem');" style="cursor:pointer;">Click here</a></span> to Add One 
			</div> </td>
                        </tr>
                       
					   
                      </table>
                    </div>
                  </div>
                  <div class="dvFloat formpadding1">
                    <div class="formlabel1"  style="width:490px;">
                      <label class="formlabel1" style="width: 370px;">Do you face any problems with blood circulation and sensation ?</label>
                    </div>
                    <div class="formcontrol2" style="width: 288px;">
                      <div style="float:left; text-align:left; width:32%; border:solid 0px red;">
                        <input type="radio" id="BloodcirculationYes" name="Bloodcirculation" value="Yes"  onclick="show7();" align="absmiddle" style=" margin-left: -1px; float: left; margin-top: 5px;">
                        <label for="Yes">Yes</label>
                        &nbsp;&nbsp;
                        <input type="radio" id="BloodcirculationNo" name="Bloodcirculation" value="No" checked  onclick="show8();" align="absmiddle" style="margin-top: 5px;">
                        <label for="No">No</label>
                        &nbsp;&nbsp; </div>
                    </div>
                  </div>
                  <div class="dvFloat formpadding1" id="divShowHide3" style="display: none">
                     <div class="dvFloat" style="padding-top: 0px; text-align:left; margin-left:15px;">
                      <table cellpadding="0" cellspacing="0" style="width:100%; border:solid 0px #000000">
                        <tr>
                          <td style="width:14%;padding-left:0px;">Problem</td>
                          <td style="width:19%;padding-left:0px;">Date Of Diagnosis</td>
                          <td style="width:29%;padding-left:0px;">Consulting Specialist</td>
                        </tr>
                        <?php for($LoopProblem=18;$LoopProblem < 24;$LoopProblem++){?>
                        <tr  style="display:<?php if($LoopProblem!=18){ echo "none"; }?>" id="DvCirculationProblem<?php echo $LoopProblem?>">
                          <td style="padding-top: 5px;">
							<input type="text" name="txt_HP_Problem_<?php echo $LoopProblem?>" id="txt_HP_Problem_<?php echo $LoopProblem?>" value="" />
							<input type="hidden" name="txt_HP_Problem_Type<?php echo $LoopProblem?>" id="txt_HP_Problem_Type<?php echo $LoopProblem?>" value="Circulation" />
                          </td>
                          <td style="padding-top: 0px; margin-top: -3px;"><div style="float:left; padding:0px 5px 0px 0px">
                              <select  id="ddl_HP_Problem_Day<?php echo $LoopProblem?>"  name="ddl_HP_Problem_Day<?php echo $LoopProblem?>"  style="width:50px;">
                               <option value="0" selected="selected">DD</option>
								<?php for($iDay=1;$iDay < 32;$iDay++){ ?>
									<option value="<?php echo $iDay?>"><?php echo $iDay?></option>
								<?php } ?>
                              </select>
                            </div>
                            <div style="float:left; padding:0px 5px 0px 0px">
                              <select   id="ddl_HP_Problem_Month<?php echo $LoopProblem?>"  name="ddl_HP_Problem_Month<?php echo $LoopProblem?>"  style="width:50px;">
                                <option value="0" selected="selected">MM</option>
								<?php for($iMonth=1;$iMonth < 13;$iMonth++){ ?>
									<option value="<?php echo $iMonth?>"><?php echo $iMonth?></option>
								<?php } ?>
                              </select>
                            </div>
                            <div style="float:left; padding:0px 0px 0px 0px">
                               <?php $iYearcurrent3=2014;?>
                              <select   id="ddl_HP_Problem_Year<?php echo $LoopProblem?>"  name="ddl_HP_Problem_Year<?php echo $LoopProblem?>"  style="width:63px;">
                                <option value="0">YYYY</option>
									
                                    
                                     <?php for($iYear=1;$iYear < 20;$iYear++){ ?>
                                        <option value="<?php echo $iYearcurrent3?>" ><?php echo $iYearcurrent3?></option>
                                        <?php 
                                            $iYearcurrent3=$iYearcurrent3-1;
                                        ?>
                                     <?php } ?>
                              </select>
                            </div></td>
                          <td style="padding-top: 5px; text-align:left" valign="top" >
							
							<div id="dvHealthDoc<?php echo $LoopProblem?>">
							  <?php $DoctorArray=$get_retrive->GetDoctor(999,0,'Doctor') ;  ?>	
                              <select  id="ddl_Health_Problem<?php echo $LoopProblem?>" name="ddl_Health_Problem<?php echo $LoopProblem?>">
                                <option value="0">Select Doctor</option>
                                 <?php  while($doctor = mysql_fetch_array( $DoctorArray )){?>
                                    <option value="<?php echo $doctor['doctor_id']?>"><?php echo $doctor['doctor_name']?></option>
                                 <?php }?>
                              </select>
                          </div>
						  </td>
                        </tr>  <?php } ?>
                        <tr style="">
                          <td style="padding-top: 7px;"><a onclick="javascript:ADD_HP_PLUS_MINUS_RECORDS('Circulation',23);" style="cursor:pointer;"><img src="images/register_steps/add_another_eye_problem.jpg" alt="" title="" border="0"></a>
							<input type="hidden" id="txtAddCirculationProb" name="txtAddCirculationProb" value="<?php echo $iCirculationProb?>"/>
						  </td>
                          <td style="padding-left:0px;">&nbsp;</td>
                          <td style="font-size: 12px; padding-top: 14px; vertical-align: top; text-align: left;"><div class="div_input_text1" style="font-size: 12px; text-align: left; padding-left: 0px;">Did not find your Doctor in List? <span style="text-decoration: underline;"><a class="btnclickhere" onclick="javascript:SetScroll(); ViewDoctor('dvHealthDoc', 'ddl_Health_Problem');" style="cursor:pointer;">Click here</a></span> to Add One 
			</div> </td>
                        </tr>
                     
                      </table>
                    </div>
                  </div>
                  <div class="dvFloat formpadding1">
                    <div class="formlabel1"  style="width:490px;">
                      <label class="formlabel1">Do you face any skin related problems ?</label>
                    </div>
                    <div class="formcontrol2" style="width: 288px;">
                      <div style="float:left; text-align:left; width:32%; border:solid 0px red;">
                        <input type="radio" id="FaceskinProblemsYes" name="FaceskinProblems" value="Yes"  onclick="show9();" align="absmiddle" style=" margin-left: -1px; float: left; margin-top: 5px;">
                        <label for="Yes">Yes</label>
                        &nbsp;&nbsp;
                        <input type="radio" id="FaceskinProblemsNo" name="FaceskinProblems" value="No" checked  onclick="show10();" align="absmiddle" style="margin-top: 5px;">
                        <label for="No">No</label>
                        &nbsp;&nbsp; </div>
                    </div>
                  </div>
                  <div class="dvFloat formpadding1" id="divShowHide4" style="display: none">
                     <div class="dvFloat" style="padding-top: 0px; text-align:left; margin-left:15px;">
                      <table cellpadding="0" cellspacing="0" style="width:100%; border:solid 0px #000000">
                        <tr>
                          <td style="width:14%;padding-left:0px;">Problem</td>
                          <td style="width:19%;padding-left:0px;">Date Of Diagnosis</td>
                          <td style="width:29%;padding-left:0px;">Consulting Specialist</td>
                        </tr>
                         <?php for($LoopProblem=24;$LoopProblem < 30;$LoopProblem++){?>
                       <tr  style="display:<?php if($LoopProblem!=24){ echo "none"; }?>" id="DvSkinProblem<?php echo $LoopProblem?>">
                          <td style="padding-top: 5px;">
							<input type="text" name="txt_HP_Problem_<?php echo $LoopProblem?>" id="txt_HP_Problem_<?php echo $LoopProblem?>" value="" />
							<input type="hidden" name="txt_HP_Problem_Type<?php echo $LoopProblem?>" id="txt_HP_Problem_Type<?php echo $LoopProblem?>" value="Skin" />
                          </td>
                          <td style="padding-top: 0px; margin-top: -3px;"><div style="float:left; padding:0px 5px 0px 0px">
                              <select  id="ddl_HP_Problem_Day<?php echo $LoopProblem?>"  name="ddl_HP_Problem_Day<?php echo $LoopProblem?>"  style="width:50px;">
                               <option value="0" selected="selected">DD</option>
								<?php for($iDay=1;$iDay < 32;$iDay++){ ?>
									<option value="<?php echo $iDay?>"><?php echo $iDay?></option>
								<?php } ?>
                              </select>
                            </div>
                            <div style="float:left; padding:0px 5px 0px 0px">
                              <select   id="ddl_HP_Problem_Month<?php echo $LoopProblem?>"  name="ddl_HP_Problem_Month<?php echo $LoopProblem?>"  style="width:50px;">
                                <option value="0" selected="selected">MM</option>
								<?php for($iMonth=1;$iMonth < 13;$iMonth++){ ?>
									<option value="<?php echo $iMonth?>"><?php echo $iMonth?></option>
								<?php } ?>
                              </select>
                            </div>
                            <div style="float:left; padding:0px 0px 0px 0px">
                               <?php $iYearcurrent4=2014;?>
                              <select   id="ddl_HP_Problem_Year<?php echo $LoopProblem?>"  name="ddl_HP_Problem_Year<?php echo $LoopProblem?>"  style="width:63px;">
                                <option value="0">YYYY</option>
				 					 <?php for($iYear=1;$iYear < 20;$iYear++){ ?>
                                        <option value="<?php echo $iYearcurrent4?>" ><?php echo $iYearcurrent4?></option>
                                        <?php 
                                            $iYearcurrent4=$iYearcurrent4-1;
                                        ?>
                                     <?php } ?>
                              </select>
                            </div></td>
                          <td style="padding-top: 5px; text-align:left" valign="top" >
							
							<div id="dvHealthDoc<?php echo $LoopProblem?>">
							  <?php $DoctorArray=$get_retrive->GetDoctor(999,0,'Doctor') ;  ?>	
                              <select  id="ddl_Health_Problem<?php echo $LoopProblem?>" name="ddl_Health_Problem<?php echo $LoopProblem?>">
                                <option value="0">Select Doctor</option>
                                 <?php  while($doctor = mysql_fetch_array( $DoctorArray )){?>
                                    <option value="<?php echo $doctor['doctor_id']?>"><?php echo $doctor['doctor_name']?></option>
                                 <?php }?>
                              </select>
                          </div>
						  </td>
                        </tr><?php } ?>
                         <tr style="">
                          <td style="padding-top: 7px;"><a onclick="javascript:ADD_HP_PLUS_MINUS_RECORDS('Skin',29);" style="cursor:pointer;"><img src="images/register_steps/add_another_eye_problem.jpg" alt="" title="" border="0"></a>
							<input type="hidden" id="txtAddSkinProb" name="txtAddSkinProb" value="<?php echo $iSkinProb?>"/>
						  </td>
                          <td style="padding-left:0px;">&nbsp;</td>
                          <td style="font-size: 12px; padding-top: 14px; vertical-align: top; text-align: left;"><div class="div_input_text1" style="font-size: 12px; text-align: left; padding-left: 0px;">Did not find your Doctor in List? <span style="text-decoration: underline;"><a class="btnclickhere" onclick="javascript:SetScroll(); ViewDoctor('dvHealthDoc', 'ddl_Health_Problem');" style="cursor:pointer;">Click here</a></span> to Add One 
			</div> </td>
                        </tr>
                       
                      </table>
                    </div>
                  </div>
                  <div class="dvFloat formpadding1">
                    <div class="formlabel1"  style="width:490px;">
                      <label class="formlabel1">Do you face any digestive problems ?</label>
                    </div>
                    <div class="formcontrol2" style="width: 288px;">
                      <div style="float:left; text-align:left; width:32%; border:solid 0px red;">
                        <input type="radio" id="DigestiveProblemsYes" name="DigestiveProblems" value="Yes" checked  onclick="show11();" align="absmiddle" style=" margin-left: -1px; float: left; margin-top: 5px;">
                        <label for="Yes">Yes</label>
                        &nbsp;&nbsp;
                        <input type="radio" id="DigestiveProblemsNo" name="DigestiveProblems" value="No" checked  onclick="show12();" align="absmiddle" style="margin-top: 5px;">
                        <label for="No">No</label>
                        &nbsp;&nbsp; </div>
                    </div>
                  </div>
                  <div class="dvFloat formpadding1" id="divShowHide5" style="display: none">
                     <div class="dvFloat" style="padding-top: 0px; text-align:left; margin-left:15px;">
                      <table cellpadding="0" cellspacing="0" style="width:100%; border:solid 0px #000000">
                        <tr>
                          <td style="width:14%;padding-left:0px;">Problem</td>
                          <td style="width:19%;padding-left:0px;">Date Of Diagnosis</td>
                          <td style="width:29%;padding-left:0px;">Consulting Specialist</td>
                        </tr>
                         <?php for($LoopProblem=30;$LoopProblem < 36;$LoopProblem++){?>
                          <tr  style="display:<?php if($LoopProblem!=30){ echo "none"; }?>" id="DvDigestiveProblem<?php echo $LoopProblem?>">
                          <td style="padding-top: 5px;">
							<input type="text" name="txt_HP_Problem_<?php echo $LoopProblem?>" id="txt_HP_Problem_<?php echo $LoopProblem?>" value="" />
							<input type="hidden" name="txt_HP_Problem_Type<?php echo $LoopProblem?>" id="txt_HP_Problem_Type<?php echo $LoopProblem?>" value="Digestive" />
                          </td>
                          <td style="padding-top: 0px; margin-top: -3px;"><div style="float:left; padding:0px 5px 0px 0px">
                              <select  id="ddl_HP_Problem_Day<?php echo $LoopProblem?>"  name="ddl_HP_Problem_Day<?php echo $LoopProblem?>"  style="width:50px;">
                               <option value="0" selected="selected">DD</option>
								<?php for($iDay=1;$iDay < 32;$iDay++){ ?>
									<option value="<?php echo $iDay?>"><?php echo $iDay?></option>
								<?php } ?>
                              </select>
                            </div>
                            <div style="float:left; padding:0px 5px 0px 0px">
                              <select   id="ddl_HP_Problem_Month<?php echo $LoopProblem?>"  name="ddl_HP_Problem_Month<?php echo $LoopProblem?>"  style="width:50px;">
                                <option value="0" selected="selected">MM</option>
								<?php for($iMonth=1;$iMonth < 13;$iMonth++){ ?>
									<option value="<?php echo $iMonth?>"><?php echo $iMonth?></option>
								<?php } ?>
                              </select>
                            </div>
                            <div style="float:left; padding:0px 0px 0px 0px">
                               <?php $iYearcurrent5=2014;?>
                              <select   id="ddl_HP_Problem_Year<?php echo $LoopProblem?>"  name="ddl_HP_Problem_Year<?php echo $LoopProblem?>"  style="width:63px;">
                                <option value="0">YYYY</option>
									
                                     <?php for($iYear=1;$iYear < 20;$iYear++){ ?>
                                        <option value="<?php echo $iYearcurrent5?>" ><?php echo $iYearcurrent5?></option>
                                        <?php 
                                            $iYearcurrent5=$iYearcurrent5-1;
                                        ?>
                                     <?php } ?>
                              </select>
                            </div></td>
                          <td style="padding-top: 5px; text-align:left" valign="top" >
							
							<div id="dvHealthDoc<?php echo $LoopProblem?>">
							  <?php $DoctorArray=$get_retrive->GetDoctor(999,0,'Doctor') ;  ?>	
                              <select  id="ddl_Health_Problem<?php echo $LoopProblem?>" name="ddl_Health_Problem<?php echo $LoopProblem?>">
                                <option value="0">Select Doctor</option>
                                 <?php  while($doctor = mysql_fetch_array( $DoctorArray )){?>
                                    <option value="<?php echo $doctor['doctor_id']?>"><?php echo $doctor['doctor_name']?></option>
                                 <?php }?>
                              </select>
                          </div>
						  </td>
                        </tr>   <?php } ?>
                         <tr style="">
                          <td style="padding-top: 7px;"><a onclick="javascript:ADD_HP_PLUS_MINUS_RECORDS('Digestive',35);" style="cursor:pointer;"><img src="images/register_steps/add_another_eye_problem.jpg" alt="" title="" border="0"></a>
							<input type="hidden" id="txtAddDigestiveProb" name="txtAddDigestiveProb" value="<?php echo $iDigestiveProb?>"/>
						  </td>
                          <td style="padding-left:0px;">&nbsp;</td>
                          <td style="font-size: 12px; padding-top: 14px; vertical-align: top; text-align: left;"><div class="div_input_text1" style="font-size: 12px; text-align: left; padding-left: 0px;">Did not find your Doctor in List? <span style="text-decoration: underline;"><a class="btnclickhere" onclick="javascript:SetScroll(); ViewDoctor('dvHealthDoc', 'ddl_Health_Problem');" style="cursor:pointer;">Click here</a></span> to Add One 
			</div> </td>
                        </tr>
                    
                      </table>
                    </div>
                  </div>
                  <div class="dvFloat formpadding1">
                    <div class="formlabel1"  style="width:490px;">
                      <label class="formlabel1">Do you face any joint pains ?</label>
                    </div>
                    <div class="formcontrol2" style="width: 288px;">
                      <div style="float:left; text-align:left; width:32%; border:solid 0px red;">
                        <input type="radio" id="JointpainsProblemsYes" name="JointpainsProblems" value="Yes" onClick="show13();" align="absmiddle" style=" margin-left: -1px; float: left; margin-top: 5px;">
                        <label for="Yes">Yes</label>
                        &nbsp;&nbsp;
                        <input type="radio" id="JointpainsProblemsNo" name="JointpainsProblems" value="No" checked onClick="show14();" align="absmiddle" style="margin-top: 5px;">
                        <label for="No">No</label>
                        &nbsp;&nbsp; </div>
                    </div>
                  </div>
                  <div class="dvFloat formpadding1" id="divShowHide6" style="display: none">
                     <div class="dvFloat" style="padding-top: 0px; text-align:left; margin-left:15px;">
                      <table cellpadding="0" cellspacing="0" style="width:100%; border:solid 0px #000000">
                        <tr>
                          <td style="width:14%;padding-left:0px;">Problem</td>
                          <td style="width:19%;padding-left:0px;">Date Of Diagnosis</td>
                          <td style="width:29%;padding-left:0px;">Consulting Specialist</td>
                        </tr>
                        <?php for($LoopProblem=36;$LoopProblem < 42;$LoopProblem++){?>
                        <tr  style="display:<?php if($LoopProblem!=36){ echo "none"; }?>" id="DvJointPaintsProblem<?php echo $LoopProblem?>">
                          <td style="padding-top: 5px;">
							<input type="text" name="txt_HP_Problem_<?php echo $LoopProblem?>" id="txt_HP_Problem_<?php echo $LoopProblem?>" value="" />
							<input type="hidden" name="txt_HP_Problem_Type<?php echo $LoopProblem?>" id="txt_HP_Problem_Type<?php echo $LoopProblem?>" value="JointPaints" />
                          </td>
                          <td style="padding-top: 0px; margin-top: -1px;"><div style="float:left; padding:0px 5px 0px 0px">
                              <select  id="ddl_HP_Problem_Day<?php echo $LoopProblem?>"  name="ddl_HP_Problem_Day<?php echo $LoopProblem?>"  style="width:50px;">
                               <option value="0" selected="selected">DD</option>
								<?php for($iDay=1;$iDay < 32;$iDay++){ ?>
									<option value="<?php echo $iDay?>"><?php echo $iDay?></option>
								<?php } ?>
                              </select>
                            </div>
                            <div style="float:left; padding:0px 5px 0px 0px">
                              <select   id="ddl_HP_Problem_Month<?php echo $LoopProblem?>"  name="ddl_HP_Problem_Month<?php echo $LoopProblem?>"  style="width:50px;">
                                <option value="0" selected="selected">MM</option>
								<?php for($iMonth=1;$iMonth < 13;$iMonth++){ ?>
									<option value="<?php echo $iMonth?>"><?php echo $iMonth?></option>
								<?php } ?>
                              </select>
                            </div>
                            <div style="float:left; padding:0px 0px 0px 0px">
                               <?php $iYearcurrent6=2014;?>
                              <select   id="ddl_HP_Problem_Year<?php echo $LoopProblem?>"  name="ddl_HP_Problem_Year<?php echo $LoopProblem?>"  style="width:63px;">
                                <option value="0">YYYY</option>
									 <?php for($iYear=1;$iYear < 20;$iYear++){ ?>
                                        <option value="<?php echo $iYearcurrent6?>" ><?php echo $iYearcurrent6?></option>
                                        <?php 
                                            $iYearcurrent6=$iYearcurrent6-1;
                                        ?>
                                     <?php } ?>
                              </select>
                            </div></td>
                          <td style="padding-top: 5px; text-align:left" valign="top" >
							<div id="dvHealthDoc<?php echo $LoopProblem?>">
							  <?php $DoctorArray=$get_retrive->GetDoctor(999,0,'Doctor') ;  ?>	
                              <select  id="ddl_Health_Problem<?php echo $LoopProblem?>" name="ddl_Health_Problem<?php echo $LoopProblem?>">
                                <option value="0">Select Doctor</option>
                                 <?php  while($doctor = mysql_fetch_array( $DoctorArray )){?>
                                    <option value="<?php echo $doctor['doctor_id']?>"><?php echo $doctor['doctor_name']?></option>
                                 <?php }?>
                              </select>
                          </div>
						  </td>
                        </tr>  <?php } ?>
                         <tr style="">
                          <td style="padding-top: 7px;"><a onclick="javascript:ADD_HP_PLUS_MINUS_RECORDS('JointPaints',41);" style="cursor:pointer;"><img src="images/register_steps/add_another_eye_problem.jpg" alt="" title="" border="0"></a>
							<input type="hidden" id="txtAddJointPaintsProb" name="txtAddJointPaintsProb" value="<?php echo $iJointPaintsProb?>"/>
						  </td>
                          <td style="padding-left:0px;">&nbsp;</td>
                          <td style="font-size: 12px; padding-top: 14px; vertical-align: top; text-align: left;"><div class="div_input_text1" style="font-size: 12px; text-align: left; padding-left: 0px;">Did not find your Doctor in List? <span style="text-decoration: underline;"><a class="btnclickhere" onclick="javascript:SetScroll(); ViewDoctor('dvHealthDoc', 'ddl_Health_Problem');" style="cursor:pointer;">Click here</a></span> to Add One 
			</div> </td>
                        </tr>
                     
                      </table>
                    </div>
                  </div>
                  <div class="dvFloat formpadding1">
                    <div class="formlabel1"  style="width:490px;">
                      <label class="formlabel1">Do you suffer from constipation ?</label>
                    </div>
                    <div class="formcontrol2" style="width: 288px;">
                      <div style="float:left; text-align:left; width:32%; border:solid 0px red;">
                        <input type="radio" id="ConstipationProblemsYes" name="ConstipationProblems" value="Yes" onClick="show15();" align="absmiddle" style=" margin-left: -1px; float: left; margin-top: 5px;">
                        <label for="Yes">Yes</label>
                        &nbsp;&nbsp;
                        <input type="radio" id="ConstipationProblemsNo" name="ConstipationProblems" value="No" checked onClick="show16();" align="absmiddle" style="margin-top: 5px;">
                        <label for="No">No</label>
                      </div>
                         </div>
                  </div>
                  <div class="dvFloat formpadding1" id="divShowHide7" style="display: none">
                     <div class="dvFloat" style="padding-top: 0px; text-align:left; margin-left:15px;">
                      <table cellpadding="0" cellspacing="0" style="width:100%; border:solid 0px #000000">
                        <tr>
                          <td style="width:14%;padding-left:0px;">Problem</td>
                          <td style="width:19%;padding-left:0px;">Date Of Diagnosis</td>
                          <td style="width:29%;padding-left:0px;">Consulting Specialist</td>
                        </tr>
                        <?php for($LoopProblem=42;$LoopProblem < 48;$LoopProblem++){?>
                        <tr  style="display:<?php if($LoopProblem!=42){ echo "none"; }?>" id="DvConstipationProblem<?php echo $LoopProblem?>">
                          <td style="padding-top: 5px;">
							<input type="text" name="txt_HP_Problem_<?php echo $LoopProblem?>" id="txt_HP_Problem_<?php echo $LoopProblem?>" value="" />
							<input type="hidden" name="txt_HP_Problem_Type<?php echo $LoopProblem?>" id="txt_HP_Problem_Type<?php echo $LoopProblem?>" value="Constipation" />
                          </td>
                          <td style="padding-top: 0px; margin-top: -3px;"><div style="float:left; padding:0px 5px 0px 0px">
                              <select  id="ddl_HP_Problem_Day<?php echo $LoopProblem?>"  name="ddl_HP_Problem_Day<?php echo $LoopProblem?>"  style="width:50px;">
                               <option value="0" selected="selected">DD</option>
								<?php for($iDay=1;$iDay < 32;$iDay++){ ?>
									<option value="<?php echo $iDay?>"><?php echo $iDay?></option>
								<?php } ?>
                              </select>
                            </div>
                            <div style="float:left; padding:0px 5px 0px 0px">
                              <select   id="ddl_HP_Problem_Month<?php echo $LoopProblem?>"  name="ddl_HP_Problem_Month<?php echo $LoopProblem?>"  style="width:50px;">
                                <option value="0" selected="selected">MM</option>
								<?php for($iMonth=1;$iMonth < 13;$iMonth++){ ?>
									<option value="<?php echo $iMonth?>"><?php echo $iMonth?></option>
								<?php } ?>
                              </select>
                            </div>
                            <div style="float:left; padding:0px 0px 0px 0px">
                               <?php $iYearcurrent7=2014;?>
                              <select   id="ddl_HP_Problem_Year<?php echo $LoopProblem?>"  name="ddl_HP_Problem_Year<?php echo $LoopProblem?>"  style="width:63px;">
                                <option value="0">YYYY</option>
				  <?php for($iYear=1;$iYear < 20;$iYear++){ ?>
                                        <option value="<?php echo $iYearcurrent7?>" ><?php echo $iYearcurrent7?></option>
                                        <?php 
                                            $iYearcurrent7=$iYearcurrent7-1;
                                        ?>
                                     <?php } ?>
                              </select>
                            </div></td>
                          <td style="padding-top: 5px; text-align:left" valign="top" >
							<div id="dvHealthDoc<?php echo $LoopProblem?>">
							  <?php $DoctorArray=$get_retrive->GetDoctor(999,0,'Doctor') ;  ?>	
                              <select  id="ddl_Health_Problem<?php echo $LoopProblem?>" name="ddl_Health_Problem<?php echo $LoopProblem?>">
                                <option value="0">Select Doctor</option>
                                 <?php  while($doctor = mysql_fetch_array( $DoctorArray )){?>
                                    <option value="<?php echo $doctor['doctor_id']?>"><?php echo $doctor['doctor_name']?></option>
                                 <?php }?>
                              </select>
                          </div>
						  </td>
                        </tr> <?php } ?>
                         <tr style="">
                          <td style="padding-top: 7px;"><a onclick="javascript:ADD_HP_PLUS_MINUS_RECORDS('Constipation',47);" style="cursor:pointer;"><img src="images/register_steps/add_another_eye_problem.jpg" alt="" title="" border="0"></a>
							<input type="hidden" id="txtAddConstipationProb" name="txtAddConstipationProb" value="<?php echo $iConstipationProb?>"/>
						  </td>
                          <td style="padding-left:0px;">&nbsp;</td>
                          <td style="font-size: 12px; padding-top: 14px; vertical-align: top; text-align: left;"><div class="div_input_text1" style="font-size: 12px; text-align: left; padding-left: 0px;">Did not find your Doctor in List? <span style="text-decoration: underline;"><a class="btnclickhere" onclick="javascript:SetScroll(); ViewDoctor('dvHealthDoc', 'ddl_Health_Problem');" style="cursor:pointer;">Click here</a></span> to Add One 
			</div> </td>
                        </tr>
                      
                      </table>
                    </div>
                  </div>
                  <div class="dvFloat formpadding1">
                    <div class="formlabel1"  style="width:490px;">
                      <label class="formlabel1">Do you face any other problems ? </label>
                    </div>
                    <div class="formcontrol2" style="width: 288px;">
                      <div style="float:left; text-align:left; width:32%; border:solid 0px red;">
                        <input type="radio" id="OtherProblemsYes" name="OtherProblems" value="Yes" onClick="show17();" align="absmiddle" style=" margin-left: -1px; float: left; margin-top: 5px;">
                        <label for="Yes">Yes</label>
                        &nbsp;&nbsp;
                        <input type="radio" id="OtherProblemsNo" name="OtherProblems" value="No" checked onClick="show18();" align="absmiddle" style="margin-top: 5px;">
                        <label for="No">No</label>
                        &nbsp;&nbsp; </div>
                    </div>
                  </div>
                  <div class="dvFloat formpadding1" id="divShowHide8" style="display: none">
                     <div class="dvFloat" style="padding-top: 0px; text-align:left; margin-left:15px;">
                      <table cellpadding="0" cellspacing="0" style="width:100%; border:solid 0px #000000">
                        <tr>
                          <td style="width:14%;padding-left:0px;">Problem</td>
                          <td style="width:19%;padding-left:0px;">Date Of Diagnosis</td>
                          <td style="width:29%;padding-left:0px;">Consulting Specialist</td>
                        </tr>
                        <?php for($LoopProblem=48;$LoopProblem < 54;$LoopProblem++){?>
                        <tr  style="display:<?php if($LoopProblem!=48){ echo "none"; }?>" id="DvOtherProblem<?php echo $LoopProblem?>">
                          <td style="padding-top: 5px;">
							<input type="text" name="txt_HP_Problem_<?php echo $LoopProblem?>" id="txt_HP_Problem_<?php echo $LoopProblem?>" value="" />
							<input type="hidden" name="txt_HP_Problem_Type<?php echo $LoopProblem?>" id="txt_HP_Problem_Type<?php echo $LoopProblem?>" value="Other" /> 
                          </td>
                          <td style="padding-top: 0px; margin-top: -3px;"><div style="float:left; padding:0px 5px 0px 0px">
                              <select  id="ddl_HP_Problem_Day<?php echo $LoopProblem?>"  name="ddl_HP_Problem_Day<?php echo $LoopProblem?>"  style="width:50px;">
                               <option value="0" selected="selected">DD</option>
								<?php for($iDay=1;$iDay < 32;$iDay++){ ?>
									<option value="<?php echo $iDay?>"><?php echo $iDay?></option>
								<?php } ?>
                              </select>
                            </div>
                            <div style="float:left; padding:0px 5px 0px 0px">
                              <select   id="ddl_HP_Problem_Month<?php echo $LoopProblem?>"  name="ddl_HP_Problem_Month<?php echo $LoopProblem?>"  style="width:50px;">
                                <option value="0" selected="selected">MM</option>
								<?php for($iMonth=1;$iMonth < 13;$iMonth++){ ?>
									<option value="<?php echo $iMonth?>"><?php echo $iMonth?></option>
								<?php } ?>
                              </select>
                            </div>
                            <div style="float:left; padding:0px 0px 0px 0px">
                             <?php $iYearcurrent8=2014;?>
                              <select   id="ddl_HP_Problem_Year<?php echo $LoopProblem?>"  name="ddl_HP_Problem_Year<?php echo $LoopProblem?>"  style="width:63px;">
                                <option value="0">YYYY</option>
				 <?php for($iYear=1;$iYear < 20;$iYear++){ ?>
                                        <option value="<?php echo $iYearcurrent8?>" ><?php echo $iYearcurrent8?></option>
                                        <?php 
                                            $iYearcurrent8=$iYearcurrent8-1;
                                        ?>
                                     <?php } ?>
                              </select>
                            </div></td>
                          <td style="padding-top: 5px; text-align:left" valign="top" >
							
							<div id="dvHealthDoc<?php echo $LoopProblem?>">
							  <?php $DoctorArray=$get_retrive->GetDoctor(999,0,'Doctor') ;  ?>	
                              <select  id="ddl_Health_Problem<?php echo $LoopProblem?>" name="ddl_Health_Problem<?php echo $LoopProblem?>">
                                <option value="0">Select Doctor</option>
                                 <?php  while($doctor = mysql_fetch_array( $DoctorArray )){?>
                                    <option value="<?php echo $doctor['doctor_id']?>"><?php echo $doctor['doctor_name']?></option>
                                 <?php }?>
                              </select>
                          </div>
						  </td>
                        </tr><?php } ?>
                        <tr style="">
                          <td style="padding-top: 7px;"><a onclick="javascript:ADD_HP_PLUS_MINUS_RECORDS('Other',53);" style="cursor:pointer;"><img src="images/register_steps/add_another_eye_problem.jpg" alt="" title="" border="0"></a>
							<input type="hidden" id="txtAddOtherProb" name="txtAddOtherProb" value="<?php echo $iOtherProb?>"/>
						  </td>
                          <td style="padding-left:0px;">&nbsp;</td>
                          <td style="font-size: 12px; padding-top: 14px; vertical-align: top; text-align: left;"><div class="div_input_text1" style="font-size: 12px; text-align: left; padding-left: 0px;">Did not find your Doctor in List? <span style="text-decoration: underline;"><a class="btnclickhere" onclick="javascript:SetScroll(); ViewDoctor('dvHealthDoc', 'ddl_Health_Problem');" style="cursor:pointer;">Click here</a></span> to Add One 
			</div> </td>
                        </tr>
                       
                      </table>
                    </div>
                  </div>
                  <div class="dvFloat formpadding1"  style="padding:10px 0px 25px 0px">
                    <div class="formlabel1" style="width:490px;"> &nbsp; </div>
                    <div class="formcontrol2" style="width: 288px;">
                      <div style=" width:90px; height:30px; float:left;margin-right:10px;">
					  		<button type="submit" id="btnHealthProblemSubmit"name="btnHealthProblemSubmit" class="button4" style="cursor:pointer;">Submit</button>&nbsp;&nbsp;&nbsp; </div>
					   
                        <?php if($dir!="health/health_problems") { ?>
                        <?php if ($health_problem_count>0 ) { ?> 
                              <div style="width:156px; height:30px; float:left;padding-right:10px;" id="dvHPNA"> <a class="button2" style="background-color:#767676;">NOT APPLICABLE</a></div>
                              <?php } else { ?>
                              <div style=" width:156px; height:30px; float:left;padding-right:10px;" id="dvHPNA1"> <a class="button2" onclick="javascript:Not_Applicable_Record('Health_Problems','6','Yes','dvHPNA1');" style="cursor:pointer">NOT APPLICABLE</a></div>
                              <?php } ?>
                              
                              <div class="dvFloat" style="font-size:12px; padding-top:10px; color:#666666; text-align: left;">(<span style="font-weight: bold;">Note:</span> If you don&lsquo;t have the data now, you can<br />submit it later by clicking Not Applicable button.)</div>
                       
                       
					  <?php } else { ?>
                    		 <div style=" width:84px; height:30px; float:left;padding-right:10px; display:none;"> <a href="#" class="button2" onClick="showHPCancel();">Cancel</a></div>
                    <?php } ?>
                     
                    </div>
                  </div>
                  
                  
                  
                  <?php if($dir!="health/health_problems") { ?>
                      <div class="dvFloat formpadding1"  style="padding:15px 0px">
						<div style=" width:156px; height:30px; float:left;padding-right:20px;"> <a href="#"  onclick="javascript:countries.expandit(8)" ><img src="images/register_steps/immunization_strip_dis.jpg" alt="" /></a></div>
						<div style=" width:156px; height:30px; float:right;padding-right:75px;">
						
                          <a href="#" onclick="javascript:OpenTab('6','true')" id="aDNextTab_6" style="cursor:text;display:<?php if($health_problem_count > 0) {echo "none" ;}?>"><img src="images/register_steps/familyhistory_strip_g.jpg" alt="" /></a>
             
             <a href="#" onclick="javascript:OpenTab('6','true')" id="aENextTab_6" style="cursor:pointer;display:<?php if($health_problem_count== 0) {echo "none" ;}?>"><img src="images/register_steps/familyhistory_strip.jpg" alt="" /></a> 
                        
                        	<!--<a href="#" onclick="javascript:OpenTab('6','true')"><img src="images/register_steps/familyhistory_strip.jpg" alt="" /></a>-->
							<a  onclick="javascript:countries.expandit(12)" id="dvNextTabOn_6" style="display:none"  href="#"><img src="images/register_steps/familyhistory_strip.jpg" alt="" /></a>
						</div>
					 </div>
                  <?php } ?>
                </div>
              
   </div>
                </div>
</form>