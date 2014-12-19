  <script src="<?php echo $strHostName?>/js/daily_total_calorie_track_charts.js"></script>
  <script src="<?php echo $strHostName?>/js/daily_calorie_track_charts.js"></script>
  
<script type="text/javascript">
function ChangeGraphs()
{
	if(document.getElementById("choseareport").value=="1")
	{
		document.getElementById("dvExerciseChartGraph").style.display="";
		document.getElementById("dvCalorieChartGraph").style.display="none";
	}
	else
	{
		document.getElementById("dvExerciseChartGraph").style.display="none";
		document.getElementById("dvCalorieChartGraph").style.display="";
	}
}

</script>
   
<div class="DvFloat" style="padding-top: 20px;">
             <div style="width: 37%; float: right; text-align: right; padding-top: 12px; display:'';">
                      <div class="DvFloat">
                        <div style="width: 100px; float: left; padding-top: 5px;" class="f_black">Choose a report</div>
                        <div style="width: 190px; float: right; text-align: left; border: solid 0px #000000;" class="f_black">
                          <select  id="choseareport" name="choseareport" tabindex="1" class="existing_event" style="width: 130px; color:#666666; font-size:13px;" onchange="javascript:ChangeGraphs();">
                            <option value="1">Excercise Minutes</option>
                            <option value="2">Calorie </option>
                          </select>
                        </div>
                      </div>
                    </div>
              <div class="DvFloat" id="dvExerciseChartGraph" style="display:'';">
                <div class="DvFloat">
                  <div style="width: 49%; float: left;"><span class="f_green" style="font-size: 18px; font-weight: bold;">Your Calorie Chart (Exercise In Minutes)</span></div>
                  <div style="width: 49%; float: left; text-align: right;">
                  	  <?php /*?><?php if($_SESSION['UserType']!="Doctor" && $_SESSION['UserType']!="MD" && $_SESSION['UserType']!="Nutritionist"){ ?>	
                        <img src="<?php echo $strHostName;?>/images/shair_icon.gif" alt="" title="" border="0" style="border: solid 0px #000000;">
                      <?php } ?><?php */?>
                   </div>
                </div>
                <div class="DvFloat" style="padding-bottom:0px;">
                  <div style="width: 62.7%; float: left; padding-top: 0px; border: solid 0px #000000;">
                  <div class="TabDv">
                <div style="margin-left: -5px;">
                  <ul id="tabstabs" class="shadetabs">
                    <li  class="selected"><a href="#" rel="tabs1" class="selected" >1 WEEK</a></li>
                    <li><a href="#" rel="tabs2" >1 MONTH</a></li>
                    <li><a href="#" rel="tabs3" style="display:'';">1 year</a></li>
                   
                  </ul>
                </div>
                <div class="TabContentDetails">
                  <div id="tabs1" class="tabcontent">
					  <?php
							$fromdate = date('Y-M-d');									
							$todate = strtotime("+6 day", strtotime($fromdate));
							$fromdate = date('Y-M-d',strtotime($fromdate));
							$todate = date('Y-M-d',$todate);
						?>
						<input type="hidden" id="txtexce_calorie_resultFromDate" name="txtexce_calorie_resultFromDate" value="<?php echo $fromdate?>"/>
						<input type="hidden" id="txtexce_calorie_resultToDate" name="txtexce_calorie_resultToDate" value="<?php echo $todate?>"/>
						<input type="hidden" id="txtWeekDays" name="txtWeekDays" value="6"/>

						<div  style="width:755px; border:solid 0px red;">
								<div class="DvFloat">
									  <div class="DvFloat" style="padding: 15px 0px; border-bottom: solid 1px #c5c5c5;">
										<div class="DvFloat">
										   <div style="width: 22px; float: left; height: 22px;">
												<a style="cursor:pointer;" onclick="javascript:GetChartDetails('exce_calorie_result','Prev')">
													<img src="<?php echo $strHostName?>/images/prev_md_paging.png" />
												</a>
											</div>

											 <div style="width: 695px; float: left; text-align: center; font-size: 15px; font-weight: bold;" class="f_grey" id="dvexce_calorie_resultMonthYearCaption"><?php echo $fromdate." - " . $todate ?></div>
											
											<div style="width: 22px; float: left; height: 22px;">
												<a style="cursor:pointer;" onclick="javascript:GetChartDetails('exce_calorie_result','Next')">
													<img src="<?php echo $strHostName?>/images/next_md_paging.png" />
												</a>
											</div>
										</div>
										<div class="DvFloat" style="padding-top: 5px;"  id="exce_calorie_result_Chart"> 
										&nbsp;
										</div>
									  </div>
								</div>
						  </div>
                  </div>
                   
                  <div id="tabs2" class="tabcontent">
                    <?php
									$fromdate = date('Y-M-d');									
									$todate = strtotime("+30 day", strtotime($fromdate));
									$fromdate = date('Y-M-d',strtotime($fromdate));
									$todate = date('Y-M-d',$todate);
								?>
								<input type="hidden" id="txtexce_calorie_resultFromDateMonth" name="txtexce_calorie_resultFromDateMonth" value="<?php echo $fromdate?>"/>
								<input type="hidden" id="txtexce_calorie_resultToDateMonth" name="txtexce_calorie_resultToDateMonth" value="<?php echo $todate?>"/>
								<input type="hidden" id="txtWeekDaysMonth" name="txtWeekDaysMonth" value="30"/>

								<div  style="width:755px; border:solid 0px red;">
										<div class="DvFloat">
											  <div class="DvFloat" style="padding: 15px 0px; border-bottom: solid 1px #c5c5c5;">
												<div class="DvFloat">
												   <div style="width: 22px; float: left; height: 22px;">
														<a style="cursor:pointer;" onclick="javascript:GetChartDetails('exce_calorie_resultMonth','Prev')">
															<img src="<?php echo $strHostName?>/images/prev_md_paging.png" />
														</a>
													</div>

													 <div style="width: 695px; float: left; text-align: center; font-size: 15px; font-weight: bold;" class="f_grey" id="dvexce_calorie_resultMonthYearCaptionMonth">&nbsp;</div>
													
													<div style="width: 22px; float: left; height: 22px;">
														<a style="cursor:pointer;" onclick="javascript:GetChartDetails('exce_calorie_resultMonth','Next')">
															<img src="<?php echo $strHostName?>/images/next_md_paging.png" />
														</a>
													</div>
												</div>
												<div class="DvFloat" style="padding-top: 5px;"  id="exce_calorie_result_ChartMonth"> 
												&nbsp;
												</div>
											  </div>
										</div>
								  </div>
                  </div>
                  <div id="tabs3" class="tabcontent">
                    <?php
											$fromdate = date('Y-M-d');									
											$todate = strtotime("+365 day", strtotime($fromdate));
											$fromdate = date('Y-M-d',strtotime($fromdate));
											$todate = date('Y-M-d',$todate);
										?>
										<input type="hidden" id="txtexce_calorie_resultFromDateYearly" name="txtexce_calorie_resultFromDateYearly" value="<?php echo $fromdate?>"/>
										<input type="hidden" id="txtexce_calorie_resultToDateYearly" name="txtexce_calorie_resultToDateYearly" value="<?php echo $todate?>"/>
										<input type="hidden" id="txtWeekDaysYearly" name="txtWeekDaysYearly" value="365"/>

										<div  style="width:755px; border:solid 0px red;">
												<div class="DvFloat">
													  <div class="DvFloat" style="padding: 15px 0px; border-bottom: solid 1px #c5c5c5;">
														<div class="DvFloat">
														   <div style="width: 22px; float: left; height: 22px;">
																<a style="cursor:pointer;" onclick="javascript:GetChartDetails('exce_calorie_resultYearly','Prev')">
																	<img src="<?php echo $strHostName?>/images/prev_md_paging.png" />
																</a>
															</div>

															 <div style="width: 695px; float: left; text-align: center; font-size: 15px; font-weight: bold;" class="f_grey" id="dvexce_calorie_resultMonthYearCaptionYearly">&nbsp;</div>
															
															<div style="width: 22px; float: left; height: 22px;">
																<a style="cursor:pointer;" onclick="javascript:GetChartDetails('exce_calorie_resultYearly','Next')">
																	<img src="<?php echo $strHostName?>/images/next_md_paging.png" />
																</a>
															</div>
														</div>
														<div class="DvFloat" style="padding-top: 5px;"  id="exce_calorie_result_ChartYearly"> 
														&nbsp;
														</div>
                                                        
													  </div>
												</div>
										  </div>
                  </div>
                  
                </div>
                
              </div>
              <div class="DvFloat" style="border:solid 0px red; width:800px;display:none;">
                   <div style="float:left; width:250px;">
                   		<div style="float:left; background-color:#7cb5ec; padding:7px; margin-right:5px;"></div>
                        <div style="float:left;">Running, 7.5mph (8 min mile)</div>
                   </div>
                   <div style="float:left; width:250px;">
                   		<div style="float:left; background-color:#434348; padding:7px; margin-right:5px;"></div>
                        <div style="float:left;">Brisk walking or jogging</div>
                   </div>
                   <div style="float:left; width:250px;">
                   		<div style="float:left; background-color:#90ed7d; padding:7px; margin-right:5px;"></div>
                        <div style="float:left;">Yard work (mowing, raking, digging)</div>
                   </div>
                </div>
                    </div>
                    
                  </div>
                  
                  
                </div>
                
                
                
                
                
                
                <div class="DvFloat" id="dvCalorieChartGraph" style="display:none;">
                <div class="DvFloat">
                  <div style="width: 49%; float: left;"><span class="f_green" style="font-size: 18px; font-weight: bold;">Calorie Chart</span></div>
                  <div style="width: 49%; float: left; text-align: right;">
                  	  <?php /*?><?php if($_SESSION['UserType']!="Doctor" && $_SESSION['UserType']!="MD" && $_SESSION['UserType']!="Nutritionist"){ ?>	
                        <img src="<?php echo $strHostName;?>/images/shair_icon.gif" alt="" title="" border="0" style="border: solid 0px #000000;">
                      <?php } ?><?php */?>
                   </div>
                </div>
                <div class="DvFloat" style="padding-bottom:0px;">
                  <div style="width: 62.7%; float: left; padding-top: 0px; border: solid 0px #000000;">
                  <div class="TabDv">
                <div>
                  <ul id="tabstabs2" class="shadetabs">
                    <li  class="selected"><a href="#" rel="tabs4" class="selected" >1 WEEK</a></li>
                    <li><a href="#" rel="tabs5" >1 MONTH</a></li>
                    <li><a href="#" rel="tabs6" style="display:none;">1 year</a></li>
                   
                  </ul>
                </div>
                <div class="TabContentDetails">
                  <div id="tabs4" class="tabcontent">
					  <?php
							$fromdate = date('Y-M-d');									
							$todate = strtotime("+6 day", strtotime($fromdate));
							$fromdate = date('Y-M-d',strtotime($fromdate));
							$todate = date('Y-M-d',$todate);
						?>
						<input type="hidden" id="txtcalorie_resultFromDate" name="txtcalorie_resultFromDate" value="<?php echo $fromdate?>"/>
						<input type="hidden" id="txtcalorie_resultToDate" name="txtcalorie_resultToDate" value="<?php echo $todate?>"/>
						<input type="hidden" id="txtCalWeekDays" name="txtCalWeekDays" value="6"/>

						<div  style="width:755px; border:solid 0px red;">
								<div class="DvFloat">
									  <div class="DvFloat" style="padding: 15px 0px; border-bottom: solid 1px #c5c5c5;">
										<div class="DvFloat">
										   <div style="width: 22px; float: left; height: 22px;">
												<a style="cursor:pointer;" onclick="javascript:GetChartDetails_Total('calorie_result','Prev')">
													<img src="<?php echo $strHostName?>/images/prev_md_paging.png" />
												</a>
											</div>

											 <div style="width: 695px; float: left; text-align: center; font-size: 15px; font-weight: bold;" class="f_grey" id="dvcalorie_resultMonthYearCaption"><?php echo $fromdate." - " . $todate ?></div>
											
											<div style="width: 22px; float: left; height: 22px;">
												<a style="cursor:pointer;" onclick="javascript:GetChartDetails_Total('calorie_result','Next')">
													<img src="<?php echo $strHostName?>/images/next_md_paging.png" />
												</a>
											</div>
										</div>
										<div class="DvFloat" style="padding-top: 5px;"  id="calorie_result_Chart"> 
										&nbsp;
										</div>
									  </div>
								</div>
						  </div>
                  </div>
                   
                  <div id="tabs5" class="tabcontent">
                    <?php
									$fromdate = date('Y-M-d');									
									$todate = strtotime("+30 day", strtotime($fromdate));
									$fromdate = date('Y-M-d',strtotime($fromdate));
									$todate = date('Y-M-d',$todate);
								?>
								<input type="hidden" id="txtcalorie_resultFromDateMonth" name="txtcalorie_resultFromDateMonth" value="<?php echo $fromdate?>"/>
								<input type="hidden" id="txtcalorie_resultToDateMonth" name="txtcalorie_resultToDateMonth" value="<?php echo $todate?>"/>
								<input type="hidden" id="txtCalWeekDaysMonth" name="txtCalWeekDaysMonth" value="30"/>

								<div  style="width:755px; border:solid 0px red;">
										<div class="DvFloat">
											  <div class="DvFloat" style="padding: 15px 0px; border-bottom: solid 1px #c5c5c5;">
												<div class="DvFloat">
												   <div style="width: 22px; float: left; height: 22px;">
														<a style="cursor:pointer;" onclick="javascript:GetChartDetails_Total('calorie_resultMonth','Prev')">
															<img src="<?php echo $strHostName?>/images/prev_md_paging.png" />
														</a>
													</div>

													 <div style="width: 695px; float: left; text-align: center; font-size: 15px; font-weight: bold;" class="f_grey" id="dvcalorie_resultMonthYearCaptionMonth">&nbsp;</div>
													
													<div style="width: 22px; float: left; height: 22px;">
														<a style="cursor:pointer;" onclick="javascript:GetChartDetails_Total('calorie_resultMonth','Next')">
															<img src="<?php echo $strHostName?>/images/next_md_paging.png" />
														</a>
													</div>
												</div>
												<div class="DvFloat" style="padding-top: 5px;"  id="calorie_result_ChartMonth"> 
												&nbsp;
												</div>
											  </div>
										</div>
								  </div>
                  </div>
                  <div id="tabs6" class="tabcontent">
                    <?php
											$fromdate = date('Y-M-d');									
											$todate = strtotime("+365 day", strtotime($fromdate));
											$fromdate = date('Y-M-d',strtotime($fromdate));
											$todate = date('Y-M-d',$todate);
										?>
										<input type="hidden" id="txtcalorie_resultFromDateYearly" name="txtcalorie_resultFromDateYearly" value="<?php echo $fromdate?>"/>
										<input type="hidden" id="txtcalorie_resultToDateYearly" name="txtcalorie_resultToDateYearly" value="<?php echo $todate?>"/>
										<input type="hidden" id="txtCalWeekDaysYearly" name="txtCalWeekDaysYearly" value="365"/>

										<div  style="width:755px; border:solid 0px red;">
												<div class="DvFloat">
													  <div class="DvFloat" style="padding: 15px 0px; border-bottom: solid 1px #c5c5c5;">
														<div class="DvFloat">
														   <div style="width: 22px; float: left; height: 22px;">
																<a style="cursor:pointer;" onclick="javascript:GetChartDetails('calorie_resultYearly','Prev')">
																	<img src="<?php echo $strHostName?>/images/prev_md_paging.png" />
																</a>
															</div>

															 <div style="width: 695px; float: left; text-align: center; font-size: 15px; font-weight: bold;" class="f_grey" id="dvcalorie_resultMonthYearCaptionYearly">&nbsp;</div>
															
															<div style="width: 22px; float: left; height: 22px;">
																<a style="cursor:pointer;" onclick="javascript:GetChartDetails('calorie_resultYearly','Next')">
																	<img src="<?php echo $strHostName?>/images/next_md_paging.png" />
																</a>
															</div>
														</div>
														<div class="DvFloat" style="padding-top: 5px;"  id="calorie_result_ChartYearly"> 
														&nbsp;
														</div>
                                                        
													  </div>
												</div>
										  </div>
                  </div>
                  
                </div>
                
              </div>
              <div class="DvFloat" style="border:solid 0px red; width:800px;display:none;">
                   <div style="float:left; width:250px;">
                   		<div style="float:left; background-color:#7cb5ec; padding:7px; margin-right:5px;"></div>
                        <div style="float:left;">Running, 7.5mph (8 min mile)</div>
                   </div>
                   <div style="float:left; width:250px;">
                   		<div style="float:left; background-color:#434348; padding:7px; margin-right:5px;"></div>
                        <div style="float:left;">Brisk walking or jogging</div>
                   </div>
                   <div style="float:left; width:250px;">
                   		<div style="float:left; background-color:#90ed7d; padding:7px; margin-right:5px;"></div>
                        <div style="float:left;">Yard work (mowing, raking, digging)</div>
                   </div>
                </div>
                    </div>
                    <div style="width: 37%; float: right; text-align: right; padding-top: 12px; display:none;">
                      <div class="DvFloat">
                        <div style="width: 100px; float: left; padding-top: 5px;" class="f_black">Chose a report</div>
                        <div style="width: 190px; float: right; text-align: left; border: solid 0px #000000;" class="f_black">
                          <select  id="choseareport" name="choseareport" tabindex="1" class="existing_event" style="width: 130px;">
                            <option value="Select">Excercise Minutes</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                
                
				<div class="DvFloat" style="padding-top:20px">
						<span class="f_green" style="font-size: 18px; font-weight: bold;">Medical reports  and Prescription </span>
				</div>
                <div class="DvFloat" style="border: solid 0px #666666; margin-left:-2px;">
                        <div class="TabDv">
                          <div  style="padding:10px 0px; margin-left:-2px;">
                            <ul id="tabstabs1" class="shadetabs1">
                              <li ><a href="#" rel="tabs1a"> Lab Reports </a></li>
                              <li><a href="#" rel="tabs2b"> Radiology Reports</a></li>
                              <li><a href="#" rel="tabs3b">Prescription</a></li>
                            </ul>
                          </div>
                          <div class="TabContentDetails" style="margin-left: -2px;">
                            <div id="tabs1a" class="tabcontent">
                              <div class="DvFloat" style="padding:10px 0px">
                                 <?php include "retrive_files/retrive_lab_reports.inc.php";?>
                              </div>
                            </div>
                            <div id="tabs2b" class="tabcontent">
                               <div class="DvFloat" style="padding:10px 0px">
                              	 <?php include "retrive_files/retrive_radiology_reports.inc.php";?>
                              </div>
                            </div>
                            <div id="tabs3b" class="tabcontent">
                               <div class="DvFloat" style="padding:10px 0px">
                              	 <?php include "retrive_files/retrive_prescription.inc.php";?>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
              </div>


<script> </script>
