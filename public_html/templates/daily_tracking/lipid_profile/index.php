<script type="text/javascript" src="<?php echo $strHostName?>/js/health_steup_validation.js"></script>
<script type="text/javascript" src="<?php echo $strHostName?>/js/health_steup_insert_retrive.js"></script>
 <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
 <script src="<?php echo $strHostName?>/js/highcharts.js"></script>
  <script src="<?php echo $strHostName?>/js/daily_lipid_track_charts.js"></script>
<?php include "includes/dashboard_top.inc.php";?>
<section>
  <div class="cal_full_size">
    <div class="cal_12 m_outo">
        <?php include "includes/dashboard_links.inc.php";?>
      <div class="dvFloat">
        <div class="dvWrapper">
          <div style=" padding:0px 0px 35px 0px">
               <?php include "includes/dashboard_left.inc.php";?>
                <div class="health_dashboard_div_right" style="width: 804px;">
              <?php include "includes/dashboard_sublinks.inc.php";?>
              <div style="padding:0px 5px 20px 5px;">
                <div class="DvFloat" style="padding:10px 5px 0px 5px;">
                  <h1 class="f_red" style="text-align: left; font-size: 16px;  margin-bottom: 7px;">daily tracking</h1>
                </div>
              </div>
              <div class="TabDv">
                <div>
                 <ul id="tabstabs" class="shadetabs">
                    <li><a href="<?php echo $strHostName;?>/page.php?dir=health/daily_tracking">Blood Pressure</a></li>
                    <li><a href="<?php echo $strHostName;?>/page.php?dir=daily_tracking/sugar_profile">Sugar Profile</a></li>
                    <li class="selected"><a rel="tabs3"  class="selected">Lipid Profile</a></li>
                    <li><a href="<?php echo $strHostName?>/page.php?dir=daily_tracking/lifestyle" >Lifestyle</a></li>
                  </ul>
                </div>
                <div class="TabContentDetails">
                  <div id="tabs1" class="tabcontent">
					&nbsp;
                  </div>
                  <div id="tabs2" class="tabcontent">
                     &nbsp;
                  </div>
                  <div id="tabs3" class="tabcontent">
                    <div style="width:760px; border:solid 0px red;" id="divtab8">
                      <div style="padding:20px 5px 20px 5px;">
                        <div class="DvFloat">
                          <div style="width: 49%; float: left;padding-left:70px;"><span class="f_grey" style="font-size: 15px; ">Triglyceride Record</span></div>
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
									$todate = strtotime("+6 day", strtotime($fromdate));
									$fromdate = date('Y-M-d',strtotime($fromdate));
									$todate = date('Y-M-d',$todate);
								?>
								<input type="hidden" id="txttriglyceride_blood_sugar_resultFromDate" name="txttriglyceride_blood_sugar_resultFromDate" value="<?php echo $fromdate?>"/>
								<input type="hidden" id="txttriglyceride_blood_sugar_resultToDate" name="txttriglyceride_blood_sugar_resultToDate" value="<?php echo $todate?>"/>
								<input type="hidden" id="txtWeekDays" name="txtWeekDays" value="6"/>

								<div  style="width:755px; border:solid 0px red;">
										<div class="DvFloat">
											  <div class="DvFloat" style="padding: 15px 0px; border-bottom: solid 1px #c5c5c5;">
												<div class="DvFloat">
												   <div style="width: 22px; float: left; height: 22px;">
														<a style="cursor:pointer;" onclick="javascript:GetChartDetails('triglyceride_blood_sugar_result','Prev')">
															<img src="<?php echo $strHostName?>/images/prev_md_paging.png" />
														</a>
													</div>

													 <div style="width: 695px; float: left; text-align: center; font-size: 15px; font-weight: bold;" class="f_grey" id="dvtriglyceride_blood_sugar_resultMonthYearCaption"><?php echo $fromdate." - " . $todate ?></div>
													
													<div style="width: 22px; float: left; height: 22px;">
														<a style="cursor:pointer;" onclick="javascript:GetChartDetails('triglyceride_blood_sugar_result','Next')">
															<img src="<?php echo $strHostName?>/images/next_md_paging.png" />
														</a>
													</div>
												</div>
												<div class="DvFloat" style="padding-top: 5px;"  id="triglyceride_blood_sugar_result_Chart"> 
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
								<input type="hidden" id="txttriglyceride_blood_sugar_resultFromDateMonth" name="txttriglyceride_blood_sugar_resultFromDateMonth" value="<?php echo $fromdate?>"/>
								<input type="hidden" id="txttriglyceride_blood_sugar_resultToDateMonth" name="txttriglyceride_blood_sugar_resultToDateMonth" value="<?php echo $todate?>"/>
								<input type="hidden" id="txtWeekDaysMonth" name="txtWeekDaysMonth" value="30"/>

								<div  style="width:755px; border:solid 0px red;">
										<div class="DvFloat">
											  <div class="DvFloat" style="padding: 15px 0px; border-bottom: solid 1px #c5c5c5;">
												<div class="DvFloat">
												   <div style="width: 22px; float: left; height: 22px;">
														<a style="cursor:pointer;" onclick="javascript:GetChartDetails('triglyceride_blood_sugar_resultMonth','Prev')">
															<img src="<?php echo $strHostName?>/images/prev_md_paging.png" />
														</a>
													</div>

													 <div style="width: 695px; float: left; text-align: center; font-size: 15px; font-weight: bold;" class="f_grey" id="dvtriglyceride_blood_sugar_resultMonthYearCaptionMonth">&nbsp;</div>
													
													<div style="width: 22px; float: left; height: 22px;">
														<a style="cursor:pointer;" onclick="javascript:GetChartDetails('triglyceride_blood_sugar_resultMonth','Next')">
															<img src="<?php echo $strHostName?>/images/next_md_paging.png" />
														</a>
													</div>
												</div>
												<div class="DvFloat" style="padding-top: 5px;"  id="triglyceride_blood_sugar_result_ChartMonth"> 
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
										<input type="hidden" id="txttriglyceride_blood_sugar_resultFromDateYearly" name="txttriglyceride_blood_sugar_resultFromDateYearly" value="<?php echo $fromdate?>"/>
										<input type="hidden" id="txttriglyceride_blood_sugar_resultToDateYearly" name="txttriglyceride_blood_sugar_resultToDateYearly" value="<?php echo $todate?>"/>
										<input type="hidden" id="txtWeekDaysYearly" name="txtWeekDaysYearly" value="365"/>

										<div  style="width:755px; border:solid 0px red;">
												<div class="DvFloat">
													  <div class="DvFloat" style="padding: 15px 0px; border-bottom: solid 1px #c5c5c5;">
														<div class="DvFloat">
														   <div style="width: 22px; float: left; height: 22px;">
																<a style="cursor:pointer;" onclick="javascript:GetChartDetails('triglyceride_blood_sugar_resultYearly','Prev')">
																	<img src="<?php echo $strHostName?>/images/prev_md_paging.png" />
																</a>
															</div>

															 <div style="width: 695px; float: left; text-align: center; font-size: 15px; font-weight: bold;" class="f_grey" id="dvtriglyceride_blood_sugar_resultMonthYearCaptionYearly">&nbsp;</div>
															
															<div style="width: 22px; float: left; height: 22px;">
																<a style="cursor:pointer;" onclick="javascript:GetChartDetails('triglyceride_blood_sugar_resultYearly','Next')">
																	<img src="<?php echo $strHostName?>/images/next_md_paging.png" />
																</a>
															</div>
														</div>
														<div class="DvFloat" style="padding-top: 5px;"  id="triglyceride_blood_sugar_result_ChartYearly"> 
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
                          <div style="width: 49%; float: left;padding-left:70px;"><span class="f_grey" style="font-size: 15px; ">HDL Record</span></div>
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
									$todate = strtotime("+6 day", strtotime($fromdate));
									$fromdate = date('Y-M-d',strtotime($fromdate));
									$todate = date('Y-M-d',$todate);
								?>
								<input type="hidden" id="txthdl_resultFromDate" name="txthdl_resultFromDate" value="<?php echo $fromdate?>"/>
								<input type="hidden" id="txthdl_resultToDate" name="txthdl_resultToDate" value="<?php echo $todate?>"/>
								<input type="hidden" id="txtWeekDayshdl_result" name="txtWeekDayshdl_result" value="6"/>

								<div  style="width:755px; border:solid 0px red;">
										<div class="DvFloat">
											  <div class="DvFloat" style="padding: 15px 0px; border-bottom: solid 1px #c5c5c5;">
												<div class="DvFloat">
												   <div style="width: 22px; float: left; height: 22px;">
														<a style="cursor:pointer;" onclick="javascript:GetChartDetails('hdl_result','Prev')">
															<img src="<?php echo $strHostName?>/images/prev_md_paging.png" />
														</a>
													</div>

													 <div style="width: 695px; float: left; text-align: center; font-size: 15px; font-weight: bold;" class="f_grey" id="dvhdl_resultMonthYearCaption"><?php echo $fromdate." - " . $todate ?></div>
													
													<div style="width: 22px; float: left; height: 22px;">
														<a style="cursor:pointer;" onclick="javascript:GetChartDetails('hdl_result','Next')">
															<img src="<?php echo $strHostName?>/images/next_md_paging.png" />
														</a>
													</div>
												</div>
												<div class="DvFloat" style="padding-top: 5px;"  id="hdl_result_Chart"> 
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
								<input type="hidden" id="txthdl_resultFromDateMonth" name="txthdl_resultFromDateMonth" value="<?php echo $fromdate?>"/>
								<input type="hidden" id="txthdl_resultToDateMonth" name="txthdl_resultToDateMonth" value="<?php echo $todate?>"/>
								<input type="hidden" id="txtWeekDaysMonthhdl_result" name="txtWeekDaysMonthhdl_result" value="30"/>

								<div  style="width:755px; border:solid 0px red;">
										<div class="DvFloat">
											  <div class="DvFloat" style="padding: 15px 0px; border-bottom: solid 1px #c5c5c5;">
												<div class="DvFloat">
												   <div style="width: 22px; float: left; height: 22px;">
														<a style="cursor:pointer;" onclick="javascript:GetChartDetails('hdl_resultMonth','Prev')">
															<img src="<?php echo $strHostName?>/images/prev_md_paging.png" />
														</a>
													</div>

													 <div style="width: 695px; float: left; text-align: center; font-size: 15px; font-weight: bold;" class="f_grey" id="dvhdl_resultMonthYearCaptionMonth">&nbsp;</div>
													
													<div style="width: 22px; float: left; height: 22px;">
														<a style="cursor:pointer;" onclick="javascript:GetChartDetails('hdl_resultMonth','Next')">
															<img src="<?php echo $strHostName?>/images/next_md_paging.png" />
														</a>
													</div>
												</div>
												<div class="DvFloat" style="padding-top: 5px;"  id="hdl_result_ChartMonth"> 
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
										<input type="hidden" id="txthdl_resultFromDateYearly" name="txthdl_resultFromDateYearly" value="<?php echo $fromdate?>"/>
										<input type="hidden" id="txthdl_resultToDateYearly" name="txthdl_resultToDateYearly" value="<?php echo $todate?>"/>
										<input type="hidden" id="txtWeekDaysYearlyhdl_result" name="txtWeekDaysYearlyhdl_result" value="365"/>

										<div  style="width:755px; border:solid 0px red;">
												<div class="DvFloat">
													  <div class="DvFloat" style="padding: 15px 0px; border-bottom: solid 1px #c5c5c5;">
														<div class="DvFloat">
														   <div style="width: 22px; float: left; height: 22px;">
																<a style="cursor:pointer;" onclick="javascript:GetChartDetails('hdl_resultYearly','Prev')">
																	<img src="<?php echo $strHostName?>/images/prev_md_paging.png" />
																</a>
															</div>

															 <div style="width: 695px; float: left; text-align: center; font-size: 15px; font-weight: bold;" class="f_grey" id="dvhdl_resultMonthYearCaptionYearly">&nbsp;</div>
															
															<div style="width: 22px; float: left; height: 22px;">
																<a style="cursor:pointer;" onclick="javascript:GetChartDetails('hdl_resultYearly','Next')">
																	<img src="<?php echo $strHostName?>/images/next_md_paging.png" />
																</a>
															</div>
														</div>
														<div class="DvFloat" style="padding-top: 5px;"  id="hdl_result_ChartYearly"> 
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
                          <div style="width: 49%; float: left;padding-left:70px;"><span class="f_grey" style="font-size: 15px; ">LDL Record</span></div>
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
									$todate = strtotime("+6 day", strtotime($fromdate));
									$fromdate = date('Y-M-d',strtotime($fromdate));
									$todate = date('Y-M-d',$todate);
								?>
								<input type="hidden" id="txtldl_resultFromDate" name="txtldl_resultFromDate" value="<?php echo $fromdate?>"/>
								<input type="hidden" id="txtldl_resultToDate" name="txtldl_resultToDate" value="<?php echo $todate?>"/>
								<input type="hidden" id="txtWeekDaysldl_result" name="txtWeekDaysldl_result" value="6"/>

								<div  style="width:755px; border:solid 0px red;">
										<div class="DvFloat">
											  <div class="DvFloat" style="padding: 15px 0px; border-bottom: solid 1px #c5c5c5;">
												<div class="DvFloat">
												   <div style="width: 22px; float: left; height: 22px;">
														<a style="cursor:pointer;" onclick="javascript:GetChartDetails('ldl_result','Prev')">
															<img src="<?php echo $strHostName?>/images/prev_md_paging.png" />
														</a>
													</div>

													 <div style="width: 695px; float: left; text-align: center; font-size: 15px; font-weight: bold;" class="f_grey" id="dvldl_resultMonthYearCaption"><?php echo $fromdate." - " . $todate ?></div>
													
													<div style="width: 22px; float: left; height: 22px;">
														<a style="cursor:pointer;" onclick="javascript:GetChartDetails('ldl_result','Next')">
															<img src="<?php echo $strHostName?>/images/next_md_paging.png" />
														</a>
													</div>
												</div>
												<div class="DvFloat" style="padding-top: 5px;"  id="ldl_result_Chart"> 
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
								<input type="hidden" id="txtldl_resultFromDateMonth" name="txtldl_resultFromDateMonth" value="<?php echo $fromdate?>"/>
								<input type="hidden" id="txtldl_resultToDateMonth" name="txtldl_resultToDateMonth" value="<?php echo $todate?>"/>
								<input type="hidden" id="txtWeekDaysMonthldl_result" name="txtWeekDaysMonthldl_result" value="30"/>

								<div  style="width:755px; border:solid 0px red;">
										<div class="DvFloat">
											  <div class="DvFloat" style="padding: 15px 0px; border-bottom: solid 1px #c5c5c5;">
												<div class="DvFloat">
												   <div style="width: 22px; float: left; height: 22px;">
														<a style="cursor:pointer;" onclick="javascript:GetChartDetails('ldl_resultMonth','Prev')">
															<img src="<?php echo $strHostName?>/images/prev_md_paging.png" />
														</a>
													</div>

													 <div style="width: 695px; float: left; text-align: center; font-size: 15px; font-weight: bold;" class="f_grey" id="dvldl_resultMonthYearCaptionMonth">&nbsp;</div>
													
													<div style="width: 22px; float: left; height: 22px;">
														<a style="cursor:pointer;" onclick="javascript:GetChartDetails('ldl_resultMonth','Next')">
															<img src="<?php echo $strHostName?>/images/next_md_paging.png" />
														</a>
													</div>
												</div>
												<div class="DvFloat" style="padding-top: 5px;"  id="ldl_result_ChartMonth"> 
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
										<input type="hidden" id="txtldl_resultFromDateYearly" name="txtldl_resultFromDateYearly" value="<?php echo $fromdate?>"/>
										<input type="hidden" id="txtldl_resultToDateYearly" name="txtldl_resultToDateYearly" value="<?php echo $todate?>"/>
										<input type="hidden" id="txtWeekDaysYearlyldl_result" name="txtWeekDaysYearlyldl_result" value="365"/>

										<div  style="width:755px; border:solid 0px red;">
												<div class="DvFloat">
													  <div class="DvFloat" style="padding: 15px 0px; border-bottom: solid 1px #c5c5c5;">
														<div class="DvFloat">
														   <div style="width: 22px; float: left; height: 22px;">
																<a style="cursor:pointer;" onclick="javascript:GetChartDetails('ldl_resultYearly','Prev')">
																	<img src="<?php echo $strHostName?>/images/prev_md_paging.png" />
																</a>
															</div>

															 <div style="width: 695px; float: left; text-align: center; font-size: 15px; font-weight: bold;" class="f_grey" id="dvldl_resultMonthYearCaptionYearly">&nbsp;</div>
															
															<div style="width: 22px; float: left; height: 22px;">
																<a style="cursor:pointer;" onclick="javascript:GetChartDetails('ldl_resultYearly','Next')">
																	<img src="<?php echo $strHostName?>/images/next_md_paging.png" />
																</a>
															</div>
														</div>
														<div class="DvFloat" style="padding-top: 5px;"  id="ldl_result_ChartYearly"> 
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
                          <div style="width: 49%; float: left;padding-left:70px;"><span class="f_grey" style="font-size: 15px; ">Cholesterol Record</span></div>
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
									$todate = strtotime("+6 day", strtotime($fromdate));
									$fromdate = date('Y-M-d',strtotime($fromdate));
									$todate = date('Y-M-d',$todate);
								?>
								<input type="hidden" id="txtcholesterol_resultFromDate" name="txtcholesterol_resultFromDate" value="<?php echo $fromdate?>"/>
								<input type="hidden" id="txtcholesterol_resultToDate" name="txtcholesterol_resultToDate" value="<?php echo $todate?>"/>
								<input type="hidden" id="txtWeekDayscholesterol_result" name="txtWeekDayscholesterol_result" value="6"/>

								<div  style="width:755px; border:solid 0px red;">
										<div class="DvFloat">
											  <div class="DvFloat" style="padding: 15px 0px; border-bottom: solid 1px #c5c5c5;">
												<div class="DvFloat">
												   <div style="width: 22px; float: left; height: 22px;">
														<a style="cursor:pointer;" onclick="javascript:GetChartDetails('cholesterol_result','Prev')">
															<img src="<?php echo $strHostName?>/images/prev_md_paging.png" />
														</a>
													</div>

													 <div style="width: 695px; float: left; text-align: center; font-size: 15px; font-weight: bold;" class="f_grey" id="dvcholesterol_resultMonthYearCaption"><?php echo $fromdate." - " . $todate ?></div>
													
													<div style="width: 22px; float: left; height: 22px;">
														<a style="cursor:pointer;" onclick="javascript:GetChartDetails('cholesterol_result','Next')">
															<img src="<?php echo $strHostName?>/images/next_md_paging.png" />
														</a>
													</div>
												</div>
												<div class="DvFloat" style="padding-top: 5px;"  id="cholesterol_result_Chart"> 
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
								<input type="hidden" id="txtcholesterol_resultFromDateMonth" name="txtcholesterol_resultFromDateMonth" value="<?php echo $fromdate?>"/>
								<input type="hidden" id="txtcholesterol_resultToDateMonth" name="txtcholesterol_resultToDateMonth" value="<?php echo $todate?>"/>
								<input type="hidden" id="txtWeekDaysMonthcholesterol_result" name="txtWeekDaysMonthcholesterol_result" value="30"/>

								<div  style="width:755px; border:solid 0px red;">
										<div class="DvFloat">
											  <div class="DvFloat" style="padding: 15px 0px; border-bottom: solid 1px #c5c5c5;">
												<div class="DvFloat">
												   <div style="width: 22px; float: left; height: 22px;">
														<a style="cursor:pointer;" onclick="javascript:GetChartDetails('cholesterol_resultMonth','Prev')">
															<img src="<?php echo $strHostName?>/images/prev_md_paging.png" />
														</a>
													</div>

													 <div style="width: 695px; float: left; text-align: center; font-size: 15px; font-weight: bold;" class="f_grey" id="dvcholesterol_resultMonthYearCaptionMonth">&nbsp;</div>
													
													<div style="width: 22px; float: left; height: 22px;">
														<a style="cursor:pointer;" onclick="javascript:GetChartDetails('cholesterol_resultMonth','Next')">
															<img src="<?php echo $strHostName?>/images/next_md_paging.png" />
														</a>
													</div>
												</div>
												<div class="DvFloat" style="padding-top: 5px;"  id="cholesterol_result_ChartMonth"> 
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
										<input type="hidden" id="txtcholesterol_resultFromDateYearly" name="txtcholesterol_resultFromDateYearly" value="<?php echo $fromdate?>"/>
										<input type="hidden" id="txtcholesterol_resultToDateYearly" name="txtcholesterol_resultToDateYearly" value="<?php echo $todate?>"/>
										<input type="hidden" id="txtWeekDaysYearlycholesterol_result" name="txtWeekDaysYearlycholesterol_result" value="365"/>

										<div  style="width:755px; border:solid 0px red;">
												<div class="DvFloat">
													  <div class="DvFloat" style="padding: 15px 0px; border-bottom: solid 1px #c5c5c5;">
														<div class="DvFloat">
														   <div style="width: 22px; float: left; height: 22px;">
																<a style="cursor:pointer;" onclick="javascript:GetChartDetails('cholesterol_resultYearly','Prev')">
																	<img src="<?php echo $strHostName?>/images/prev_md_paging.png" />
																</a>
															</div>

															 <div style="width: 695px; float: left; text-align: center; font-size: 15px; font-weight: bold;" class="f_grey" id="dvcholesterol_resultMonthYearCaptionYearly">&nbsp;</div>
															
															<div style="width: 22px; float: left; height: 22px;">
																<a style="cursor:pointer;" onclick="javascript:GetChartDetails('cholesterol_resultYearly','Next')">
																	<img src="<?php echo $strHostName?>/images/next_md_paging.png" />
																</a>
															</div>
														</div>
														<div class="DvFloat" style="padding-top: 5px;"  id="cholesterol_result_ChartYearly"> 
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
                     <div class="dvFloat"  style="display:<?php if($_SESSION['UserType']!="Doctor"  && $_SESSION['UserType']!="MD" && $_SESSION['UserType']!="Nutritionist"){ echo "";} else { echo "none"; } ?>"> 
                   <?php include "view_files/lipid_profile.inc.php";?>
                   </div>
                  </div>
                  <div id="tabs4" class="tabcontent">
					madhu2
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

 


<script type="text/javascript">

 


var countries=new ddtabcontent("tabstabs");
countries.setpersist(true);
countries.setselectedClassTarget("link"); //"link" or "linkparent"
countries.init();

var countries1=new ddtabcontent("tabstabs1");
countries1.setpersist(true);
countries1.setselectedClassTarget("link"); //"link" or "linkparent"
countries1.init();



var countries2=new ddtabcontent("tabstabs2");
countries2.setpersist(true);
countries2.setselectedClassTarget("link"); //"link" or "linkparent"
countries2.init();

var countries_3=new ddtabcontent("tabstabs3");
countries_3.setpersist(true);
countries_3.setselectedClassTarget("link"); //"link" or "linkparent"
countries_3.init();

var countries_4=new ddtabcontent("tabstabs4");
countries_4.setpersist(true);
countries_4.setselectedClassTarget("link"); //"link" or "linkparent"
countries_4.init();

var countriesa=new ddtabcontent("tabstabsa");
countriesa.setpersist(true);
countriesa.setselectedClassTarget("link"); //"link" or "linkparent"
countriesa.init();




</script>

<script>//RetriveReocrds_DailyTracking('Blood_Pressure','dvBlood_Pressure');

GetChartDetails('triglyceride_blood_sugar_result','');
</script>
<script>
/*Pres_Report_Show_Hide();
Intake_Reminder_Show_Hide();
Purchase_Reminder_Show_Hide();
Daily_Frequency_enabledisable();*/
</script>
