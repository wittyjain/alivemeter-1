<script type="text/javascript" src="<?php echo $strHostName?>/js/health_steup_validation.js"></script>
<script type="text/javascript" src="<?php echo $strHostName?>/js/health_steup_insert_retrive.js"></script>
 <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
 <script src="<?php echo $strHostName?>/js/highcharts.js"></script>
  <script src="<?php echo $strHostName?>/js/daily_measurement_track_charts.js"></script>
<script type="text/javascript">
function showform()
{ 
	document.getElementById('divCalForm').style.display = 'block';
	document.getElementById('HideMeasureDivLink').style.display = ''; 
	document.getElementById('ShowMeasureDivLink').style.display = 'none';
 }

document.getElementById("txt_HD_Result_Triglyceride").focus();

function showCancel()
{
	document.getElementById('divCalForm').style.display = 'none'; 
		document.getElementById('ShowMeasureDivLink').style.display = ''; 
	document.getElementById('HideMeasureDivLink').style.display = 'none'; 
}
</script>


</head>

<?php include "includes/dashboard_top.inc.php";?>
<section>
  <div class="cal_full_size">
    <div class="cal_12 m_outo">
     <?php include "includes/dashboard_links.inc.php";?>
      <div class="dvFloat">
        <div class="dvWrapper">
          <div style="padding:35px 0px 35px 0px">
            <div class="health_dashboard_div_left">
             	<?php include "includes/calorie_setup_left.inc.php";?>
            </div>
            <div class="health_dashboard_div_right" style="width: 804px;">
            	<div class="DvFloat" style="margin-top: -35px;"><?php include "includes/dashboard_sublinks.inc.php";?></div>
            	<!--<div class="DvFloat"><div style="width: 51%; float: right; text-align: right; padding: 5px 0px;"><img src="images/shair_icon.gif" alt="" title="" border="0" style="border: solid 0px #000000;"></div></div>-->
              <div class="DvFloat">
                  <div class="DvFloat">
                    <div style="width: 80%; float: left; border: solid 0px #3300CC;"><div class="TabDv">
                          <div style="width:760px; border:solid 0px red;" id="divtab8">
                      <div style="padding:20px 5px 20px 5px;">
                        <div class="DvFloat">
                          <div style="width: 49%; float: left;padding-left:70px;"><span class="f_grey" style="font-size: 15px; ">Weight Record</span></div>
                        </div>
                      </div>
                      <div class="DvFloat">
                        <div class="TabDv">
							<div  style="padding:0px 0px 0px 70px;">
								<ul id="tabstabs1" class="shadetabs1">
								  <li ><a href="#" rel="tabs1a"> 1 WEEK </a></li>
								  <li><a href="#" rel="tabs2b">1 MONTH</a></li>
								  <li><a href="#" rel="tabs3b">1 year</a></li>
								</ul>
								</div>
								<div class="TabContentDetails">
								<div id="tabs1a" class="tabcontent">
								
								<?php
									$fromdate = date('Y-M-d');									
									$todate = strtotime("+7 day", strtotime($fromdate));
									$fromdate = date('Y-M-d',strtotime($fromdate));
									$todate = date('Y-M-d',$todate);
								?>
								<input type="hidden" id="txtcurr_wgt_resultFromDate" name="txtcurr_wgt_resultFromDate" value="<?php echo $fromdate?>"/>
								<input type="hidden" id="txtcurr_wgt_resultToDate" name="txtcurr_wgt_resultToDate" value="<?php echo $todate?>"/>
								<input type="hidden" id="txtWeekDays" name="txtWeekDays" value="7"/>

								<div  style="width:755px; border:solid 0px red;">
										<div class="DvFloat">
											  <div class="DvFloat" style="padding: 15px 0px; border-bottom: solid 1px #c5c5c5;">
												<div class="DvFloat">
												   <div style="width: 22px; float: left; height: 22px;">
														<a style="cursor:pointer;" onclick="javascript:GetChartDetails('curr_wgt_result','Prev')">
															<img src="<?php echo $strHostName?>/images/prev_md_paging.png" />
														</a>
													</div>

													 <div style="width: 695px; float: left; text-align: center; font-size: 15px; font-weight: bold;" class="f_grey" id="dvcurr_wgt_resultMonthYearCaption"><?php echo $fromdate." - " . $todate ?></div>
													
													<div style="width: 22px; float: left; height: 22px;">
														<a style="cursor:pointer;" onclick="javascript:GetChartDetails('curr_wgt_result','Next')">
															<img src="<?php echo $strHostName?>/images/next_md_paging.png" />
														</a>
													</div>
												</div>
												<div class="DvFloat" style="padding-top: 5px;"  id="curr_wgt_result_Chart"> 
												&nbsp;
												</div>
											  </div>
										</div>
								  </div>
								</div>
								<div id="tabs2b" class="tabcontent">
								  <?php
									$fromdate = date('Y-M-d');									
									$todate = strtotime("+30 day", strtotime($fromdate));
									$fromdate = date('Y-M-d',strtotime($fromdate));
									$todate = date('Y-M-d',$todate);
								?>
								<input type="hidden" id="txtcurr_wgt_resultFromDateMonth" name="txtcurr_wgt_resultFromDateMonth" value="<?php echo $fromdate?>"/>
								<input type="hidden" id="txtcurr_wgt_resultToDateMonth" name="txtcurr_wgt_resultToDateMonth" value="<?php echo $todate?>"/>
								<input type="hidden" id="txtWeekDaysMonth" name="txtWeekDaysMonth" value="30"/>

								<div  style="width:755px; border:solid 0px red;">
										<div class="DvFloat">
											  <div class="DvFloat" style="padding: 15px 0px; border-bottom: solid 1px #c5c5c5;">
												<div class="DvFloat">
												   <div style="width: 22px; float: left; height: 22px;">
														<a style="cursor:pointer;" onclick="javascript:GetChartDetails('curr_wgt_resultMonth','Prev')">
															<img src="<?php echo $strHostName?>/images/prev_md_paging.png" />
														</a>
													</div>

													 <div style="width: 695px; float: left; text-align: center; font-size: 15px; font-weight: bold;" class="f_grey" id="dvcurr_wgt_resultMonthYearCaptionMonth">&nbsp;</div>
													
													<div style="width: 22px; float: left; height: 22px;">
														<a style="cursor:pointer;" onclick="javascript:GetChartDetails('curr_wgt_resultMonth','Next')">
															<img src="<?php echo $strHostName?>/images/next_md_paging.png" />
														</a>
													</div>
												</div>
												<div class="DvFloat" style="padding-top: 5px;"  id="curr_wgt_result_ChartMonth"> 
												&nbsp;
												</div>
											  </div>
										</div>
								  </div>
								</div>
								<div id="tabs3b" class="tabcontent">
										<?php
											$fromdate = date('Y-M-d');									
											$todate = strtotime("+365 day", strtotime($fromdate));
											$fromdate = date('Y-M-d',strtotime($fromdate));
											$todate = date('Y-M-d',$todate);
										?>
										<input type="hidden" id="txtcurr_wgt_resultFromDateYearly" name="txtcurr_wgt_resultFromDateYearly" value="<?php echo $fromdate?>"/>
										<input type="hidden" id="txtcurr_wgt_resultToDateYearly" name="txtcurr_wgt_resultToDateYearly" value="<?php echo $todate?>"/>
										<input type="hidden" id="txtWeekDaysYearly" name="txtWeekDaysYearly" value="365"/>

										<div  style="width:755px; border:solid 0px red;">
												<div class="DvFloat">
													  <div class="DvFloat" style="padding: 15px 0px; border-bottom: solid 1px #c5c5c5;">
														<div class="DvFloat">
														   <div style="width: 22px; float: left; height: 22px;">
																<a style="cursor:pointer;" onclick="javascript:GetChartDetails('curr_wgt_resultYearly','Prev')">
																	<img src="<?php echo $strHostName?>/images/prev_md_paging.png" />
																</a>
															</div>

															 <div style="width: 695px; float: left; text-align: center; font-size: 15px; font-weight: bold;" class="f_grey" id="dvcurr_wgt_resultMonthYearCaptionYearly">&nbsp;</div>
															
															<div style="width: 22px; float: left; height: 22px;">
																<a style="cursor:pointer;" onclick="javascript:GetChartDetails('curr_wgt_resultYearly','Next')">
																	<img src="<?php echo $strHostName?>/images/next_md_paging.png" />
																</a>
															</div>
														</div>
														<div class="DvFloat" style="padding-top: 5px;"  id="curr_wgt_result_ChartYearly"> 
														&nbsp;
														</div>
													  </div>
												</div>
										  </div>
								</div>
							</div>
                        </div>
                      </div>
                     <!--Start-->
                      <div style="padding:0px 5px 20px 5px;">
                        <div class="DvFloat" style="padding:20px 5px 0px 0px;">
                          <div style="width: 49%; float: left;padding-left:70px;"><span class="f_grey" style="font-size: 15px; ">Waist Record</span></div>
                        </div>
                      </div>
                      <div class="DvFloat">
                        <div class="TabDv">
                          <div  style="padding:0px 0px 0px 70px;">
                            <ul id="tabstabs2" class="shadetabs2">
                              <li ><a href="#" rel="tabs1a1"> 1 WEEK </a></li>
                              <li><a href="#" rel="tabs2b1">1 MONTH</a></li>
                              <li><a href="#" rel="tabs3c1">1 year</a></li>
                            </ul>
                          </div>
                          <div class="TabContentDetails2">
                             <div id="tabs1a1" class="tabcontent">
								
								<?php
									$fromdate = date('Y-M-d');									
									$todate = strtotime("+7 day", strtotime($fromdate));
									$fromdate = date('Y-M-d',strtotime($fromdate));
									$todate = date('Y-M-d',$todate);
								?>
								<input type="hidden" id="txtcurr_waist_resultFromDate" name="txtcurr_waist_resultFromDate" value="<?php echo $fromdate?>"/>
								<input type="hidden" id="txtcurr_waist_resultToDate" name="txtcurr_waist_resultToDate" value="<?php echo $todate?>"/>
								<input type="hidden" id="txtWeekDayscurr_waist_result" name="txtWeekDayscurr_waist_result" value="7"/>

								<div  style="width:755px; border:solid 0px red;">
										<div class="DvFloat">
											  <div class="DvFloat" style="padding: 15px 0px; border-bottom: solid 1px #c5c5c5;">
												<div class="DvFloat">
												   <div style="width: 22px; float: left; height: 22px;">
														<a style="cursor:pointer;" onclick="javascript:GetChartDetails('curr_waist_result','Prev')">
															<img src="<?php echo $strHostName?>/images/prev_md_paging.png" />
														</a>
													</div>

													 <div style="width: 695px; float: left; text-align: center; font-size: 15px; font-weight: bold;" class="f_grey" id="dvcurr_waist_resultMonthYearCaption"><?php echo $fromdate." - " . $todate ?></div>
													
													<div style="width: 22px; float: left; height: 22px;">
														<a style="cursor:pointer;" onclick="javascript:GetChartDetails('curr_waist_result','Next')">
															<img src="<?php echo $strHostName?>/images/next_md_paging.png" />
														</a>
													</div>
												</div>
												<div class="DvFloat" style="padding-top: 5px;"  id="curr_waist_result_Chart"> 
												&nbsp;
												</div>
											  </div>
										</div>
								  </div>
								</div>
								<div id="tabs2b1" class="tabcontent">
								  <?php
									$fromdate = date('Y-M-d');									
									$todate = strtotime("+30 day", strtotime($fromdate));
									$fromdate = date('Y-M-d',strtotime($fromdate));
									$todate = date('Y-M-d',$todate);
								?>
								<input type="hidden" id="txtcurr_waist_resultFromDateMonth" name="txtcurr_waist_resultFromDateMonth" value="<?php echo $fromdate?>"/>
								<input type="hidden" id="txtcurr_waist_resultToDateMonth" name="txtcurr_waist_resultToDateMonth" value="<?php echo $todate?>"/>
								<input type="hidden" id="txtWeekDaysMonthcurr_waist_result" name="txtWeekDaysMonthcurr_waist_result" value="30"/>

								<div  style="width:755px; border:solid 0px red;">
										<div class="DvFloat">
											  <div class="DvFloat" style="padding: 15px 0px; border-bottom: solid 1px #c5c5c5;">
												<div class="DvFloat">
												   <div style="width: 22px; float: left; height: 22px;">
														<a style="cursor:pointer;" onclick="javascript:GetChartDetails('curr_waist_resultMonth','Prev')">
															<img src="<?php echo $strHostName?>/images/prev_md_paging.png" />
														</a>
													</div>

													 <div style="width: 695px; float: left; text-align: center; font-size: 15px; font-weight: bold;" class="f_grey" id="dvcurr_waist_resultMonthYearCaptionMonth">&nbsp;</div>
													
													<div style="width: 22px; float: left; height: 22px;">
														<a style="cursor:pointer;" onclick="javascript:GetChartDetails('curr_waist_resultMonth','Next')">
															<img src="<?php echo $strHostName?>/images/next_md_paging.png" />
														</a>
													</div>
												</div>
												<div class="DvFloat" style="padding-top: 5px;"  id="curr_waist_result_ChartMonth"> 
												&nbsp;
												</div>
											  </div>
										</div>
								  </div>
								</div>
								<div id="tabs3c1" class="tabcontent">
										<?php
											$fromdate = date('Y-M-d');									
											$todate = strtotime("+365 day", strtotime($fromdate));
											$fromdate = date('Y-M-d',strtotime($fromdate));
											$todate = date('Y-M-d',$todate);
										?>
										<input type="hidden" id="txtcurr_waist_resultFromDateYearly" name="txtcurr_waist_resultFromDateYearly" value="<?php echo $fromdate?>"/>
										<input type="hidden" id="txtcurr_waist_resultToDateYearly" name="txtcurr_waist_resultToDateYearly" value="<?php echo $todate?>"/>
										<input type="hidden" id="txtWeekDaysYearlycurr_waist_result" name="txtWeekDaysYearlycurr_waist_result" value="365"/>

										<div  style="width:755px; border:solid 0px red;">
												<div class="DvFloat">
													  <div class="DvFloat" style="padding: 15px 0px; border-bottom: solid 1px #c5c5c5;">
														<div class="DvFloat">
														   <div style="width: 22px; float: left; height: 22px;">
																<a style="cursor:pointer;" onclick="javascript:GetChartDetails('curr_waist_resultYearly','Prev')">
																	<img src="<?php echo $strHostName?>/images/prev_md_paging.png" />
																</a>
															</div>

															 <div style="width: 695px; float: left; text-align: center; font-size: 15px; font-weight: bold;" class="f_grey" id="dvcurr_waist_resultMonthYearCaptionYearly">&nbsp;</div>
															
															<div style="width: 22px; float: left; height: 22px;">
																<a style="cursor:pointer;" onclick="javascript:GetChartDetails('curr_waist_resultYearly','Next')">
																	<img src="<?php echo $strHostName?>/images/next_md_paging.png" />
																</a>
															</div>
														</div>
														<div class="DvFloat" style="padding-top: 5px;"  id="curr_waist_result_ChartYearly"> 
															&nbsp;
														</div>
													  </div>
												</div>
										  </div>
								</div>
							</div>
                          </div>
                        </div>
                       <!--End-->

					    <!--Start-->
                      <div style="padding:0px 5px 20px 5px;">
                        <div class="DvFloat" style="padding:20px 5px 0px 0px;">
                          <div style="width: 49%; float: left;padding-left:70px;"><span class="f_grey" style="font-size: 15px; ">Hips Record</span></div>
                        </div>
                      </div>
                      <div class="DvFloat">
                        <div class="TabDv">
                          <div  style="padding:0px 0px 0px 70px;">
                            <ul id="tabstabs3" class="shadetabs2">
                              <li ><a href="#" rel="tabs1a3"> 1 WEEK </a></li>
                              <li><a href="#" rel="tabs2b3">1 MONTH</a></li>
                              <li><a href="#" rel="tabs3c3">1 year</a></li>
                            </ul>
                          </div>
                          <div class="TabContentDetails2">
                             <div id="tabs1a3" class="tabcontent">
								
								<?php
									$fromdate = date('Y-M-d');									
									$todate = strtotime("+7 day", strtotime($fromdate));
									$fromdate = date('Y-M-d',strtotime($fromdate));
									$todate = date('Y-M-d',$todate);
								?>
								<input type="hidden" id="txtcurr_hips_resultFromDate" name="txtcurr_hips_resultFromDate" value="<?php echo $fromdate?>"/>
								<input type="hidden" id="txtcurr_hips_resultToDate" name="txtcurr_hips_resultToDate" value="<?php echo $todate?>"/>
								<input type="hidden" id="txtWeekDayscurr_hips_result" name="txtWeekDayscurr_hips_result" value="7"/>

								<div  style="width:755px; border:solid 0px red;">
										<div class="DvFloat">
											  <div class="DvFloat" style="padding: 15px 0px; border-bottom: solid 1px #c5c5c5;">
												<div class="DvFloat">
												   <div style="width: 22px; float: left; height: 22px;">
														<a style="cursor:pointer;" onclick="javascript:GetChartDetails('curr_hips_result','Prev')">
															<img src="<?php echo $strHostName?>/images/prev_md_paging.png" />
														</a>
													</div>

													 <div style="width: 695px; float: left; text-align: center; font-size: 15px; font-weight: bold;" class="f_grey" id="dvcurr_hips_resultMonthYearCaption"><?php echo $fromdate." - " . $todate ?></div>
													
													<div style="width: 22px; float: left; height: 22px;">
														<a style="cursor:pointer;" onclick="javascript:GetChartDetails('curr_hips_result','Next')">
															<img src="<?php echo $strHostName?>/images/next_md_paging.png" />
														</a>
													</div>
												</div>
												<div class="DvFloat" style="padding-top: 5px;"  id="curr_hips_result_Chart"> 
												&nbsp;
												</div>
											  </div>
										</div>
								  </div>
								</div>
								<div id="tabs2b3" class="tabcontent">
								  <?php
									$fromdate = date('Y-M-d');									
									$todate = strtotime("+30 day", strtotime($fromdate));
									$fromdate = date('Y-M-d',strtotime($fromdate));
									$todate = date('Y-M-d',$todate);
								?>
								<input type="hidden" id="txtcurr_hips_resultFromDateMonth" name="txtcurr_hips_resultFromDateMonth" value="<?php echo $fromdate?>"/>
								<input type="hidden" id="txtcurr_hips_resultToDateMonth" name="txtcurr_hips_resultToDateMonth" value="<?php echo $todate?>"/>
								<input type="hidden" id="txtWeekDaysMonthcurr_hips_result" name="txtWeekDaysMonthcurr_hips_result" value="30"/>

								<div  style="width:755px; border:solid 0px red;">
										<div class="DvFloat">
											  <div class="DvFloat" style="padding: 15px 0px; border-bottom: solid 1px #c5c5c5;">
												<div class="DvFloat">
												   <div style="width: 22px; float: left; height: 22px;">
														<a style="cursor:pointer;" onclick="javascript:GetChartDetails('curr_hips_resultMonth','Prev')">
															<img src="<?php echo $strHostName?>/images/prev_md_paging.png" />
														</a>
													</div>

													 <div style="width: 695px; float: left; text-align: center; font-size: 15px; font-weight: bold;" class="f_grey" id="dvcurr_hips_resultMonthYearCaptionMonth">&nbsp;</div>
													
													<div style="width: 22px; float: left; height: 22px;">
														<a style="cursor:pointer;" onclick="javascript:GetChartDetails('curr_hips_resultMonth','Next')">
															<img src="<?php echo $strHostName?>/images/next_md_paging.png" />
														</a>
													</div>
												</div>
												<div class="DvFloat" style="padding-top: 5px;"  id="curr_hips_result_ChartMonth"> 
												&nbsp;
												</div>
											  </div>
										</div>
								  </div>
								</div>
								<div id="tabs3c3" class="tabcontent">
										<?php
											$fromdate = date('Y-M-d');									
											$todate = strtotime("+365 day", strtotime($fromdate));
											$fromdate = date('Y-M-d',strtotime($fromdate));
											$todate = date('Y-M-d',$todate);
										?>
										<input type="hidden" id="txtcurr_hips_resultFromDateYearly" name="txtcurr_hips_resultFromDateYearly" value="<?php echo $fromdate?>"/>
										<input type="hidden" id="txtcurr_hips_resultToDateYearly" name="txtcurr_hips_resultToDateYearly" value="<?php echo $todate?>"/>
										<input type="hidden" id="txtWeekDaysYearlycurr_hips_result" name="txtWeekDaysYearlycurr_hips_result" value="365"/>

										<div  style="width:755px; border:solid 0px red;">
												<div class="DvFloat">
													  <div class="DvFloat" style="padding: 15px 0px; border-bottom: solid 1px #c5c5c5;">
														<div class="DvFloat">
														   <div style="width: 22px; float: left; height: 22px;">
																<a style="cursor:pointer;" onclick="javascript:GetChartDetails('curr_hips_resultYearly','Prev')">
																	<img src="<?php echo $strHostName?>/images/prev_md_paging.png" />
																</a>
															</div>

															 <div style="width: 695px; float: left; text-align: center; font-size: 15px; font-weight: bold;" class="f_grey" id="dvcurr_hips_resultMonthYearCaptionYearly">&nbsp;</div>
															
															<div style="width: 22px; float: left; height: 22px;">
																<a style="cursor:pointer;" onclick="javascript:GetChartDetails('curr_hips_resultYearly','Next')">
																	<img src="<?php echo $strHostName?>/images/next_md_paging.png" />
																</a>
															</div>
														</div>
														<div class="DvFloat" style="padding-top: 5px;"  id="curr_hips_result_ChartYearly"> 
															&nbsp;
														</div>
													  </div>
												</div>
										  </div>
								</div>
							</div>
                          </div>
                        </div>
                       <!--End-->

					   <!--Start-->
                      <div style="padding:0px 5px 20px 5px;">
                        <div class="DvFloat" style="padding:20px 5px 0px 0px;">
                          <div style="width: 49%; float: left;padding-left:70px;"><span class="f_grey" style="font-size: 15px; ">Arms Record</span></div>
                        </div>
                      </div>
                      <div class="DvFloat">
                        <div class="TabDv">
                          <div  style="padding:0px 0px 0px 70px;">
                            <ul id="tabstabs4" class="shadetabs2">
                              <li ><a href="#" rel="tabs1a4"> 1 WEEK </a></li>
                              <li><a href="#" rel="tabs2b4">1 MONTH</a></li>
                              <li><a href="#" rel="tabs3c4">1 year</a></li>
                            </ul>
                          </div>
                          <div class="TabContentDetails2">
                             <div id="tabs1a4" class="tabcontent">
								
								<?php
									$fromdate = date('Y-M-d');									
									$todate = strtotime("+7 day", strtotime($fromdate));
									$fromdate = date('Y-M-d',strtotime($fromdate));
									$todate = date('Y-M-d',$todate);
								?>
								<input type="hidden" id="txtcurr_arms_resultFromDate" name="txtcurr_arms_resultFromDate" value="<?php echo $fromdate?>"/>
								<input type="hidden" id="txtcurr_arms_resultToDate" name="txtcurr_arms_resultToDate" value="<?php echo $todate?>"/>
								<input type="hidden" id="txtWeekDayscurr_arms_result" name="txtWeekDayscurr_arms_result" value="7"/>

								<div  style="width:755px; border:solid 0px red;">
										<div class="DvFloat">
											  <div class="DvFloat" style="padding: 15px 0px; border-bottom: solid 1px #c5c5c5;">
												<div class="DvFloat">
												   <div style="width: 22px; float: left; height: 22px;">
														<a style="cursor:pointer;" onclick="javascript:GetChartDetails('curr_arms_result','Prev')">
															<img src="<?php echo $strHostName?>/images/prev_md_paging.png" />
														</a>
													</div>

													 <div style="width: 695px; float: left; text-align: center; font-size: 15px; font-weight: bold;" class="f_grey" id="dvcurr_arms_resultMonthYearCaption"><?php echo $fromdate." - " . $todate ?></div>
													
													<div style="width: 22px; float: left; height: 22px;">
														<a style="cursor:pointer;" onclick="javascript:GetChartDetails('curr_arms_result','Next')">
															<img src="<?php echo $strHostName?>/images/next_md_paging.png" />
														</a>
													</div>
												</div>
												<div class="DvFloat" style="padding-top: 5px;"  id="curr_arms_result_Chart"> 
												&nbsp;
												</div>
											  </div>
										</div>
								  </div>
								</div>
								<div id="tabs2b4" class="tabcontent">
								  <?php
									$fromdate = date('Y-M-d');									
									$todate = strtotime("+30 day", strtotime($fromdate));
									$fromdate = date('Y-M-d',strtotime($fromdate));
									$todate = date('Y-M-d',$todate);
								?>
								<input type="hidden" id="txtcurr_arms_resultFromDateMonth" name="txtcurr_arms_resultFromDateMonth" value="<?php echo $fromdate?>"/>
								<input type="hidden" id="txtcurr_arms_resultToDateMonth" name="txtcurr_arms_resultToDateMonth" value="<?php echo $todate?>"/>
								<input type="hidden" id="txtWeekDaysMonthcurr_arms_result" name="txtWeekDaysMonthcurr_arms_result" value="30"/>

								<div  style="width:755px; border:solid 0px red;">
										<div class="DvFloat">
											  <div class="DvFloat" style="padding: 15px 0px; border-bottom: solid 1px #c5c5c5;">
												<div class="DvFloat">
												   <div style="width: 22px; float: left; height: 22px;">
														<a style="cursor:pointer;" onclick="javascript:GetChartDetails('curr_arms_resultMonth','Prev')">
															<img src="<?php echo $strHostName?>/images/prev_md_paging.png" />
														</a>
													</div>

													 <div style="width: 695px; float: left; text-align: center; font-size: 15px; font-weight: bold;" class="f_grey" id="dvcurr_arms_resultMonthYearCaptionMonth">&nbsp;</div>
													
													<div style="width: 22px; float: left; height: 22px;">
														<a style="cursor:pointer;" onclick="javascript:GetChartDetails('curr_arms_resultMonth','Next')">
															<img src="<?php echo $strHostName?>/images/next_md_paging.png" />
														</a>
													</div>
												</div>
												<div class="DvFloat" style="padding-top: 5px;"  id="curr_arms_result_ChartMonth"> 
												&nbsp;
												</div>
											  </div>
										</div>
								  </div>
								</div>
								<div id="tabs3c4" class="tabcontent">
										<?php
											$fromdate = date('Y-M-d');									
											$todate = strtotime("+365 day", strtotime($fromdate));
											$fromdate = date('Y-M-d',strtotime($fromdate));
											$todate = date('Y-M-d',$todate);
										?>
										<input type="hidden" id="txtcurr_arms_resultFromDateYearly" name="txtcurr_arms_resultFromDateYearly" value="<?php echo $fromdate?>"/>
										<input type="hidden" id="txtcurr_arms_resultToDateYearly" name="txtcurr_arms_resultToDateYearly" value="<?php echo $todate?>"/>
										<input type="hidden" id="txtWeekDaysYearlycurr_arms_result" name="txtWeekDaysYearlycurr_arms_result" value="365"/>

										<div  style="width:755px; border:solid 0px red;">
												<div class="DvFloat">
													  <div class="DvFloat" style="padding: 15px 0px; border-bottom: solid 1px #c5c5c5;">
														<div class="DvFloat">
														   <div style="width: 22px; float: left; height: 22px;">
																<a style="cursor:pointer;" onclick="javascript:GetChartDetails('curr_arms_resultYearly','Prev')">
																	<img src="<?php echo $strHostName?>/images/prev_md_paging.png" />
																</a>
															</div>

															 <div style="width: 695px; float: left; text-align: center; font-size: 15px; font-weight: bold;" class="f_grey" id="dvcurr_arms_resultMonthYearCaptionYearly">&nbsp;</div>
															
															<div style="width: 22px; float: left; height: 22px;">
																<a style="cursor:pointer;" onclick="javascript:GetChartDetails('curr_arms_resultYearly','Next')">
																	<img src="<?php echo $strHostName?>/images/next_md_paging.png" />
																</a>
															</div>
														</div>
														<div class="DvFloat" style="padding-top: 5px;"  id="curr_arms_result_ChartYearly"> 
															&nbsp;
														</div>
													  </div>
												</div>
										  </div>
								</div>
							</div>
                          </div>
                        </div>
                       <!--End-->



                      </div>
                     
                    
                      </div>
                    <div style="width: 12%; float: right; border: solid 0px #999900;">
                    	<div class="DvFloat" style="display:none">
                        	<select id="lipid_Cholesterol_Year" name="lipid_Cholesterol_Year" tabindex="1" class="existing_event" style="width: 45px;">
                            	<option value="Weight">Weight</option>
                                <option value="Waist">Waist</option>
                                <option value="Hips">Hips</option>
                                <option value="Arms">Arms</option>
                            </select>
                        </div>
                    </div>
                  </div>
                  
                  <div class="DvFloat" style="border: solid 0px #00CC00; margin-bottom: 25px;">
                    <div  style="width:99.6%; border:solid 0px red; ">
                      <div class="dvFloat formpadding1" style="padding:0px 0px 5px 0px; border-bottom: solid 1px #e1e1e1;"> 
                      		<a onClick="showform();" style="cursor:pointer"><img src="images/nutritionist/add_to_list.jpg" alt=""  id="ShowMeasureDivLink"/></a> 
                            
                            <a  onClick="showCancel();" style="cursor:pointer">
                    	<img src="images/nutritionist/add_minus.jpg" alt="" title="" border="0" style="float:left; margin-right:10px; display:none;"  id="HideMeasureDivLink">
                    </a>
                    
                       </div>
                      <div class="dvFloat" style="display: none;" id="divCalForm">
                     		<?php include "view_files/measurement.inc.php"; ?>
                      </div>
                    </div>
                  </div>
                  </div>
            </div>
          </div>
      </div>
    </div>
  </div>
  </div>
</section>
<script>RetriveReocrds('CalorieDet','dvCalorieDet');</script>

<script type="text/javascript">

 


 
var countries1_1=new ddtabcontent("tabstabs1");
countries1_1.setpersist(true);
countries1_1.setselectedClassTarget("link"); //"link" or "linkparent"
countries1_1.init();

var countries1_2=new ddtabcontent("tabstabs2");
countries1_2.setpersist(true);
countries1_2.setselectedClassTarget("link"); //"link" or "linkparent"
countries1_2.init();


var countries1_3=new ddtabcontent("tabstabs3");
countries1_3.setpersist(true);
countries1_3.setselectedClassTarget("link"); //"link" or "linkparent"
countries1_3.init();


var countries1_4=new ddtabcontent("tabstabs4");
countries1_4.setpersist(true);
countries1_4.setselectedClassTarget("link"); //"link" or "linkparent"
countries1_4.init();
 
</script>
<script>//RetriveReocrds_DailyTracking('Blood_Pressure','dvBlood_Pressure');

GetChartDetails('curr_wgt_result','');
</script>