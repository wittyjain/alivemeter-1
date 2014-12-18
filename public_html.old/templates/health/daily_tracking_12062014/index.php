<script type="text/javascript" src="<?php echo $strHostName?>/js/health_steup_validation.js"></script>
<script type="text/javascript" src="<?php echo $strHostName?>/js/health_steup_insert_retrive.js"></script>
 <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
 <script src="<?php echo $strHostName?>/js/highcharts.js"></script>
  <script src="<?php echo $strHostName?>/js/daily_track_charts.js"></script>
<?php include "includes/dashboard_top.inc.php";?>
<section>
  <div class="cal_full_size">
    <div class="cal_12 m_outo">
        <?php include "includes/dashboard_links.inc.php";?>
      <div class="dvFloat">
        <div class="dvWrapper">
          <div style=" padding:0px 0px 35px 0px">
               <?php include "includes/dashboard_left.inc.php";?>
                <div class="health_dashboard_div_right">
              <?php include "includes/dashboard_sublinks.inc.php";?>
              <div style="padding:0px 5px 20px 5px;">
                <div class="DvFloat" style="padding:10px 5px 0px 5px;">
                  <h1 class="f_red" style="text-align: left; font-size: 16px;  margin-bottom: 7px;">daily tracking</h1>
                </div>
              </div>
              <div class="TabDv">
                <div>
                  <ul id="tabstabs" class="shadetabs">
                    <li  class="selected"><a rel="tabs1" class="selected" >Blood Pressure</a></li>
                    <li><a rel="tabs2">Sugar Profile</a></li>
                    <li><a rel="tabs3">Lipid Profile</a></li>
                    <li><a rel="tabs4">Lifestyle</a></li>
                  </ul>
                </div>
                <div class="TabContentDetails">
                  <div id="tabs1" class="tabcontent">
                    <div style="width:760px; border:solid 0px red;" id="divtab8">
                      <div style="padding:20px 5px 20px 5px;">
                        <div class="DvFloat">
                          <div style="width: 49%; float: left;padding-left:70px;"><span class="f_grey" style="font-size: 15px; ">Diastolic Record</span></div>
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
								<input type="hidden" id="txtDiastolicFromDate" name="txtDiastolicFromDate" value="<?php echo $fromdate?>"/>
								<input type="hidden" id="txtDiastolicToDate" name="txtDiastolicToDate" value="<?php echo $todate?>"/>
						
								<div  style="width:755px; border:solid 0px red;">
										<div class="DvFloat">
											  <div class="DvFloat" style="padding: 15px 0px; border-bottom: solid 1px #c5c5c5;">
												<div class="DvFloat">
												   <div style="width: 22px; float: left; height: 22px;">
														<a style="cursor:pointer;" onclick="javascript:GetChartDetails('diastolic','Prev')">
															<img src="<?php echo $strHostName?>/images/prev_md_paging.png" />
														</a>
													</div>

													 <div style="width: 695px; float: left; text-align: center; font-size: 15px; font-weight: bold;" class="f_grey" id="dvDiastolicMonthYearCaption"><?php echo $fromdate." - " . $todate ?></div>
													
													<div style="width: 22px; float: left; height: 22px;">
														<a style="cursor:pointer;" onclick="javascript:GetChartDetails('diastolic','Next')">
															<img src="<?php echo $strHostName?>/images/next_md_paging.png" />
														</a>
													</div>
												</div>
												<div class="DvFloat" style="padding-top: 5px;"  id="Diastolic_Chart"> 
												
												</div>
											  </div>
										</div>
								  </div>

 

								</div>
								<div id="tabs2b" class="tabcontent">
								  <div  style="width:755px; border:solid 0px red;">a</div>
								</div>
								<div id="tabs3b" class="tabcontent">
								  <div  style="width:755px; border:solid 0px red;">b</div>
								</div>
							</div>
                        </div>
                      </div>
                      <div style="padding:0px 5px 20px 5px;">
                        <div class="DvFloat" style="padding:20px 5px 0px 0px;">
                          <div style="width: 49%; float: left;padding-left:70px;"><span class="f_grey" style="font-size: 15px; ">Systolic Record</span></div>
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
                            <div id="tabs1a1" class="tabcontent2">
                              <div  style="width:755px; border:solid 0px red;">
                                <div class="DvFloat">
                                  <div class="DvFloat" style="padding: 15px 0px; border-bottom: solid 1px #c5c5c5;">
                                    <div class="DvFloat">
                                      <div style="width: 22px; float: left; height: 22px; background-image: url(images/prev_md_paging.png); background-repeat: no-repeat;"></div>
                                      <div style="width: 695px; float: left; text-align: center; font-size: 15px; font-weight: bold;" class="f_grey">27 Jan - 2 Feb 2014</div>
                                      <div style="width: 22px; float: left; height: 22px; background-image: url(images/next_md_paging.png); background-repeat: no-repeat;"></div>
                                    </div>
                                    <div class="DvFloat" style="padding-top: 5px;"> <img src="images/nutritionist/chart.jpg" alt="" title="" border="0"> </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div id="tabs2b1" class="tabcontent2">
                              <div  style="width:755px; border:solid 0px red;">sad</div>
                            </div>
                            <div id="tabs3c1" class="tabcontent2">
                              <div  style="width:755px; border:solid 0px red;">sad</div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="DvFloat">
                        <div  style="width:98%; border:solid 0px red;">
                          <div id="divShowHideForm" style="display: none">
                          <div class="dvFloat formpadding1" style="padding-top:10px">
                            <div class="formlabelHDB1">
                              <label class="formlabelHDB">Blood Pressure <span class="redtxt">*</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(e.g. 80/100)</label>
                            </div>
                            <div class="formcontrol22">
                              <input type="text" name="txt_HD_DelTrack_BP" id="txt_HD_DelTrack_BP " value="" />
                            </div>
                          </div>
                          <div class="dvFloat formpadding1">
                            <div class="formlabelHDB1">
                              <label class="formlabelHDB">Unit<span class="redtxt">*</span> </label>
                            </div>
                            <div class="formcontrol22">
                              <input type="text" name="txt_HD_DelTrack_Unit" id="txt_HD_DelTrack_Unit " value="" placeholder="fmn" />
                            </div>
                          </div>
                          <div class="dvFloat formpadding1">
                            <div class="formlabelHDB1">
                              <label class="formlabelHDB">Date Checked <span class="redtxt">*</span> </label>
                            </div>
                            <div class="formcontrol22">
                              <div class="dvFloat">
                                <div style="float:left; padding:0px 15px 0px 0px">
                                  <select id="cmb_HD_DelTrack_Date" name="cmb_HD_DelTrack_Date" tabindex="1" class="existing_event" style="width: 5px;">
                                    <option value="DD">DD</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                    <option>9</option>
                                    <option>10</option>
                                    <option>11</option>
                                    <option>12</option>
                                    <option>13</option>
                                    <option>14</option>
                                    <option>15</option>
                                    <option>16</option>
                                    <option>17</option>
                                    <option>18</option>
                                    <option>19</option>
                                    <option>20</option>
                                    <option>21</option>
                                    <option>22</option>
                                    <option>23</option>
                                    <option>24</option>
                                    <option>25</option>
                                    <option>26</option>
                                    <option>27</option>
                                    <option>28</option>
                                    <option>29</option>
                                    <option>30</option>
                                    <option>31</option>
                                  </select>
                                </div>
                                <div style="float:left; padding:0px 15px 0px 0px">
                                  <select id="cmb_HD_DelTrack_Month" name="cmb_HD_DelTrack_Month" tabindex="1" class="existing_event" style="width: 5px;">
                                    <option value="MM">MM</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                    <option>9</option>
                                    <option>10</option>
                                    <option>11</option>
                                    <option>12</option>
                                  </select>
                                </div>
                                <div style="float:left; padding:0px 0px 0px 0px">
                                  <select id="cmb_HD_DelTrack_Year" name="cmb_HD_DelTrack_Year" tabindex="1" class="existing_event" style="width: 8px;">
                                    <option value="YYYY">YYYY</option>
                                    <option>2006</option>
                                    <option>2007</option>
                                    <option>2008</option>
                                    <option>2009</option>
                                    <option>2014</option>
                                    <option>2010</option>
                                    <option>2011</option>
                                    <option>2012</option>
                                    <option>2013</option>
                                    <option>2014</option>
                                  </select>
                                </div>
                              </div>
                              <div class="div_input_text1" style="font-size: 12px; padding-left: 0px;"><span style="font-weight: bold;">Note:</span> It is recommended that a physician be consulted for advice in event of any doubts or need for therapy. 
                                The figures are indicative. </div>
                            </div>
                          </div>
                          <div class="dvFloat formpadding"  style="padding:10px 0px 15px 0px">
                            <div class="formlabelHDB1"> &nbsp; </div>
                            <div class="formcontrol22">
                              <div style=" width:84px; height:30px; float:left;padding-right:10px;"> <a href="#" class="button4">SUBMIT</a></div>
                              <div style=" width:84px; height:30px; float:left;padding-right:10px;"> <a  class="button2" onClick="showCancel();" style="cursor:pointer">Cancel</a></div>
                            </div>
                          </div>
                          <div class="dvFloat formpadding1"  style="padding:0px 0px 25px 0px">
                            <div class="formlabelHDB"> &nbsp; </div>
                            <div class="formcontrol22">
                              <div class="div_input_text1"  style="padding-bottom:10px;color:#c02c3e"> Average Blood Pressure as per your age: </div>
                              <table cellpadding="5" cellspacing="0" border="0" style="border: solid 0px #CCCCCC; width:100%;">
                                <tr>
                                  <td style="padding:5px;border: solid 1px #CCCCCC;">Minimum<br>
                                    (systolic / Diastolic) </td>
                                  <td style="padding:5px; border-top: solid 1px #CCCCCC; border-bottom: solid 1px #CCCCCC;border-right: solid 1px #CCCCCC;">Average<br>
                                    (systolic / Diastolic) </td>
                                  <td style="padding:5px; border-top: solid 1px #CCCCCC; border-bottom: solid 1px #CCCCCC;border-right: solid 1px #CCCCCC;">Maximum<br>
                                    (systolic / Diastolic)</td>
                                </tr>
                                <tr>
                                  <td  style="padding:5px;  border-left: solid 1px #CCCCCC; border-bottom: solid 1px #CCCCCC;border-right: solid 1px #CCCCCC;">105 / 73</td>
                                  <td  style="padding:5px; border-bottom: solid 1px #CCCCCC;border-right: solid 1px #CCCCCC;">117 / 77 </td>
                                  <td style="padding:5px; border-bottom: solid 1px #CCCCCC;border-right: solid 1px #CCCCCC;">120 / 81 </td>
                                </tr>
                              </table>
                            </div>
                          </div></div>
                        </div>
                      </div>
                    </div>
                   <?php include "view_files/blood_pressure.inc.php";?>
                  </div>
                  <div id="tabs2" class="tabcontent">
                    <div style="width:760px; border:solid 0px red;" id="divtab9">
                      <div style="padding:20px 5px 20px 5px;">
                        <div class="DvFloat">
                          <div style="width: 49%; float: left;padding-left:70px;"><span class="f_grey" style="font-size: 15px; ">Fasting Blood Sugar</span></div>
                        </div>
                      </div>
                      <div class="DvFloat">
                        <div class="TabDv">
                          <div  style="padding:0px 0px 0px 70px;">
                            <ul id="tabstabs3" class="shadetabs3">
                              <li ><a href="#" rel="tabs1a2"> 1 WEEK </a></li>
                              <li><a href="#" rel="tabs2b2">1 MONTH</a></li>
                              <li><a href="#" rel="tabs3b2">1 year</a></li>
                            </ul>
                          </div>
                          <div class="TabContentDetails">
                            <div id="tabs1a2" class="tabcontent3">
                              <div  style="width:755px; border:solid 0px red;">
                                <div class="DvFloat">
                                  <div class="DvFloat" style="padding: 15px 0px; border-bottom: solid 1px #c5c5c5;">
                                    <div class="DvFloat">
                                      <div style="width: 22px; float: left; height: 22px; background-image: url(images/prev_md_paging.png); background-repeat: no-repeat;"></div>
                                      <div style="width: 695px; float: left; text-align: center; font-size: 15px; font-weight: bold;" class="f_grey">27 Jan - 2 Feb 2014</div>
                                      <div style="width: 22px; float: left; height: 22px; background-image: url(images/next_md_paging.png); background-repeat: no-repeat;"></div>
                                    </div>
                                    <div class="DvFloat" style="padding-top: 5px;"> <img src="images/nutritionist/chart1.jpg" alt="" title="" border="0"> </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div id="tabs2b2" class="tabcontent3">
                              <div  style="width:755px; border:solid 0px red;"></div>
                            </div>
                            <div id="tabs3b2" class="tabcontent3">
                              <div  style="width:755px; border:solid 0px red;"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div style="padding:0px 5px 20px 5px;">
                        <div class="DvFloat" style="padding:20px 5px 0px 0px;">
                          <div style="width: 49%; float: left;padding-left:70px;"><span class="f_grey" style="font-size: 15px;">Blood Sugar After Meal (PPBS) </span></div>
                        </div>
                      </div>
                      <div class="DvFloat">
                        <div class="TabDv">
                          <div  style="padding:0px 0px 0px 70px;">
                            <ul id="tabstabs4" class="shadetabs4">
                              <li ><a href="#" rel="tabs1a3"> 1 WEEK </a></li>
                              <li><a href="#" rel="tabs2b3">1 MONTH</a></li>
                              <li><a href="#" rel="tabs3c3">1 year</a></li>
                            </ul>
                          </div>
                          <div class="TabContentDetails4">
                            <div id="tabs1a3" class="tabcontent4">
                              <div  style="width:755px; border:solid 0px red;">
                                <div class="DvFloat">
                                  <div class="DvFloat" style="padding: 15px 0px; border-bottom: solid 1px #c5c5c5;">
                                    <div class="DvFloat">
                                      <div style="width: 22px; float: left; height: 22px; background-image: url(images/prev_md_paging.png); background-repeat: no-repeat;"></div>
                                      <div style="width: 695px; float: left; text-align: center; font-size: 15px; font-weight: bold;" class="f_grey">27 Jan - 2 Feb 2014</div>
                                      <div style="width: 22px; float: left; height: 22px; background-image: url(images/next_md_paging.png); background-repeat: no-repeat;"></div>
                                    </div>
                                    <div class="DvFloat" style="padding-top: 5px;"> <img src="images/nutritionist/chart1.jpg" alt="" title="" border="0"> </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div id="tabs2b3" class="tabcontent4">
                              <div  style="width:755px; border:solid 0px red;">sad</div>
                            </div>
                            <div id="tabs3c3" class="tabcontent4">
                              <div  style="width:755px; border:solid 0px red;">sad</div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div style="padding:20px 5px 20px 5px;">
                        <div class="DvFloat">
                          <div style="width: 49%; float: left;padding-left:70px;"><span class="f_grey" style="font-size: 15px; ">Random Blood Sugar</span></div>
                        </div>
                      </div>
                      <div class="DvFloat">
                        <div class="TabDv">
                          <div  style="padding:0px 0px 0px 70px;">
                            <ul id="tabstabs5" class="shadetabs5">
                              <li ><a href="#" rel="tabs1a4"> 1 WEEK </a></li>
                              <li><a href="#" rel="tabs2b4">1 MONTH</a></li>
                              <li><a href="#" rel="tabs3b4">1 year</a></li>
                            </ul>
                          </div>
                          <div class="TabContentDetails5">
                            <div id="tabs1a4" class="tabcontent5">
                              <div  style="width:755px; border:solid 0px red;">
                                <div class="DvFloat">
                                  <div class="DvFloat" style="padding: 15px 0px; border-bottom: solid 1px #c5c5c5;">
                                    <div class="DvFloat">
                                      <div style="width: 22px; float: left; height: 22px; background-image: url(images/prev_md_paging.png); background-repeat: no-repeat;"></div>
                                      <div style="width: 695px; float: left; text-align: center; font-size: 15px; font-weight: bold;" class="f_grey">27 Jan - 2 Feb 2014</div>
                                      <div style="width: 22px; float: left; height: 22px; background-image: url(images/next_md_paging.png); background-repeat: no-repeat;"></div>
                                    </div>
                                    <div class="DvFloat" style="padding-top: 5px;"> <img src="images/nutritionist/chart1.jpg" alt="" title="" border="0"> </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div id="tabs2b4" class="tabcontent5">
                              <div  style="width:755px; border:solid 0px red;"></div>
                            </div>
                            <div id="tabs3b4" class="tabcontent5">
                              <div  style="width:755px; border:solid 0px red;"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div style="padding:0px 5px 20px 5px;">
                        <div class="DvFloat" style="padding:20px 5px 0px 0px;">
                          <div style="width: 49%; float: left;padding-left:70px;"><span class="f_grey" style="font-size: 15px;">Urine Blood Sugar </span></div>
                        </div>
                      </div>
                      <div class="DvFloat">
                        <div class="TabDv">
                          <div  style="padding:0px 0px 0px 70px;">
                            <ul id="tabstabs6" class="shadetabs6">
                              <li ><a href="#" rel="tabs1a5"> 1 WEEK </a></li>
                              <li><a href="#" rel="tabs2b5">1 MONTH</a></li>
                              <li><a href="#" rel="tabs3c5">1 year</a></li>
                            </ul>
                          </div>
                          <div class="TabContentDetails6">
                            <div id="tabs1a5" class="tabcontent6">
                              <div  style="width:755px; border:solid 0px red;">
                                <div class="DvFloat">
                                  <div class="DvFloat" style="padding: 15px 0px; border-bottom: solid 1px #c5c5c5;">
                                    <div class="DvFloat">
                                      <div style="width: 22px; float: left; height: 22px; background-image: url(images/prev_md_paging.png); background-repeat: no-repeat;"></div>
                                      <div style="width: 695px; float: left; text-align: center; font-size: 15px; font-weight: bold;" class="f_grey">27 Jan - 2 Feb 2014</div>
                                      <div style="width: 22px; float: left; height: 22px; background-image: url(images/next_md_paging.png); background-repeat: no-repeat;"></div>
                                    </div>
                                    <div class="DvFloat" style="padding-top: 5px;"> <img src="images/nutritionist/chart1.jpg" alt="" title="" border="0"> </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div id="tabs2b5" class="tabcontent6">
                              <div  style="width:755px; border:solid 0px red;">sad</div>
                            </div>
                            <div id="tabs3c5" class="tabcontent6">
                              <div  style="width:755px; border:solid 0px red;">sad</div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="DvFloat">
                        <div  style="width:98%; border:solid 0px red;">
                          
                           <div id="divShowHideForm1" style="display: none">
                          <div class="dvFloat formpadding1" style="padding-top:10px">
                            <div class="formlabel1-3">
                              <label class="formlabel1-1p">&nbsp;</label>
                            </div>
                            <div class="formcontrol2-3">
                              <label>Fasting Blood Sugar </label>
                            </div>
                            <div class="formcontrol2-3">
                              <label>Post Parandial (PPBS)</label>
                            </div>
                            <div class="formcontrol2-3">
                              <label>Urine Blood Sugar</label>
                            </div>
                            <div class="formcontrol2-3">
                              <label>Random Blood Sugar</label>
                            </div>
                          </div>
                          <div class="dvFloat formpadding1">
                            <div class="formlabel1-3">
                              <label class="formlabel1-1p">Date <span class="redtxt">*</span></label>
                            </div>
                            <div class="formcontrol2-3">
                              <div class="dvFloat">
                                <div style="float:left; padding:0px 3px 0px 0px">
                                  <select id="DT_FBS_Date" name="DT_FBS_Date" tabindex="1" class="existing_event" style="width: 0px;">
                                    <option value="DD">DD</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                    <option>9</option>
                                    <option>10</option>
                                    <option>11</option>
                                    <option>12</option>
                                    <option>13</option>
                                    <option>14</option>
                                    <option>15</option>
                                    <option>16</option>
                                    <option>17</option>
                                    <option>18</option>
                                    <option>19</option>
                                    <option>20</option>
                                    <option>21</option>
                                    <option>22</option>
                                    <option>23</option>
                                    <option>24</option>
                                    <option>25</option>
                                    <option>26</option>
                                    <option>27</option>
                                    <option>28</option>
                                    <option>29</option>
                                    <option>30</option>
                                    <option>31</option>
                                  </select>
                                </div>
                                <div style="float:left; padding:0px 3px 0px 0px">
                                  <select id="DT_FBS_Month" name="DT_FBS_Month" tabindex="1" class="existing_event" style="width:0px;">
                                    <option value="MM">MM</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                    <option>9</option>
                                    <option>10</option>
                                    <option>11</option>
                                    <option>12</option>
                                  </select>
                                </div>
                                <div style="float:left; padding:0px 0px 0px 0px">
                                  <select id="DT_FBS_Year" name="DT_FBS_Year" tabindex="1" class="existing_event" style="width: 0px;">
                                    <option value="YYYY">YYYY</option>
                                    <option>2006</option>
                                    <option>2007</option>
                                    <option>2008</option>
                                    <option>2009</option>
                                    <option>2014</option>
                                    <option>2010</option>
                                    <option>2011</option>
                                    <option>2012</option>
                                    <option>2013</option>
                                    <option>2014</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                            <div class="formcontrol2-3">
                              <div class="dvFloat">
                                <div style="float:left; padding:0px 3px 0px 0px">
                                  <select id="DT_PPBS_Date" name="DT_PPBS_Date" tabindex="1" class="existing_event" style="width: 0px;">
                                    <option value="DD">DD</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                    <option>9</option>
                                    <option>10</option>
                                    <option>11</option>
                                    <option>12</option>
                                    <option>13</option>
                                    <option>14</option>
                                    <option>15</option>
                                    <option>16</option>
                                    <option>17</option>
                                    <option>18</option>
                                    <option>19</option>
                                    <option>20</option>
                                    <option>21</option>
                                    <option>22</option>
                                    <option>23</option>
                                    <option>24</option>
                                    <option>25</option>
                                    <option>26</option>
                                    <option>27</option>
                                    <option>28</option>
                                    <option>29</option>
                                    <option>30</option>
                                    <option>31</option>
                                  </select>
                                </div>
                                <div style="float:left; padding:0px 3px 0px 0px">
                                  <select id="DT_PPBS_Month" name="DT_PPBS_Month" tabindex="1" class="existing_event" style="width: 0px;">
                                    <option value="MM">MM</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                    <option>9</option>
                                    <option>10</option>
                                    <option>11</option>
                                    <option>12</option>
                                  </select>
                                </div>
                                <div style="float:left; padding:0px 0px 0px 0px">
                                  <select id="DT_PPBS_Year" name="DT_PPBS_Year" tabindex="1" class="existing_event" style="width: 0px;">
                                    <option value="YYYY">YYYY</option>
                                    <option>2006</option>
                                    <option>2007</option>
                                    <option>2008</option>
                                    <option>2009</option>
                                    <option>2014</option>
                                    <option>2010</option>
                                    <option>2011</option>
                                    <option>2012</option>
                                    <option>2013</option>
                                    <option>2014</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                            <div class="formcontrol2-3">
                              <div class="dvFloat">
                                <div style="float:left; padding:0px 3px 0px 0px">
                                  <select id="DT_UBS_Date" name="DT_UBS_Date" tabindex="1" class="existing_event" style="width: 0px;">
                                    <option value="DD">DD</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                    <option>9</option>
                                    <option>10</option>
                                    <option>11</option>
                                    <option>12</option>
                                    <option>13</option>
                                    <option>14</option>
                                    <option>15</option>
                                    <option>16</option>
                                    <option>17</option>
                                    <option>18</option>
                                    <option>19</option>
                                    <option>20</option>
                                    <option>21</option>
                                    <option>22</option>
                                    <option>23</option>
                                    <option>24</option>
                                    <option>25</option>
                                    <option>26</option>
                                    <option>27</option>
                                    <option>28</option>
                                    <option>29</option>
                                    <option>30</option>
                                    <option>31</option>
                                  </select>
                                </div>
                                <div style="float:left; padding:0px 3px 0px 0px">
                                  <select id="DT_UBS_Month" name="DT_UBS_Month" tabindex="1" class="existing_event" style="width: 0px;">
                                    <option value="MM">MM</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                    <option>9</option>
                                    <option>10</option>
                                    <option>11</option>
                                    <option>12</option>
                                  </select>
                                </div>
                                <div style="float:left; padding:0px 0px 0px 0px">
                                  <select id="DT_UBS_Year" name="DT_UBS_Year" tabindex="1" class="existing_event" style="width: 0px;">
                                    <option value="YYYY">YYYY</option>
                                    <option>2006</option>
                                    <option>2007</option>
                                    <option>2008</option>
                                    <option>2009</option>
                                    <option>2014</option>
                                    <option>2010</option>
                                    <option>2011</option>
                                    <option>2012</option>
                                    <option>2013</option>
                                    <option>2014</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                            <div class="formcontrol2-3">
                              <div class="dvFloat">
                                <div style="float:left; padding:0px 3px 0px 0px">
                                  <select id="DT_RBS_Date" name="DT_RBS_Date" tabindex="1" class="existing_event" style="width: 0px;">
                                    <option value="DD">DD</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                    <option>9</option>
                                    <option>10</option>
                                    <option>11</option>
                                    <option>12</option>
                                    <option>13</option>
                                    <option>14</option>
                                    <option>15</option>
                                    <option>16</option>
                                    <option>17</option>
                                    <option>18</option>
                                    <option>19</option>
                                    <option>20</option>
                                    <option>21</option>
                                    <option>22</option>
                                    <option>23</option>
                                    <option>24</option>
                                    <option>25</option>
                                    <option>26</option>
                                    <option>27</option>
                                    <option>28</option>
                                    <option>29</option>
                                    <option>30</option>
                                    <option>31</option>
                                  </select>
                                </div>
                                <div style="float:left; padding:0px 3px 0px 0px">
                                  <select id="DT_RBS_Month" name="DT_RBS_Month" tabindex="1" class="existing_event" style="width: 0px;">
                                    <option value="MM">MM</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                    <option>9</option>
                                    <option>10</option>
                                    <option>11</option>
                                    <option>12</option>
                                  </select>
                                </div>
                                <div style="float:left; padding:0px 0px 0px 0px">
                                  <select id="DT_RBS_Year" name="DT_RBS_Year" tabindex="1" class="existing_event" style="width: 0px;">
                                    <option value="YYYY">YYYY</option>
                                    <option>2006</option>
                                    <option>2007</option>
                                    <option>2008</option>
                                    <option>2009</option>
                                    <option>2014</option>
                                    <option>2010</option>
                                    <option>2011</option>
                                    <option>2012</option>
                                    <option>2013</option>
                                    <option>2014</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="dvFloat formpadding1">
                            <div class="formlabel1-3">
                              <label class="formlabel1-1p">Result<span class="redtxt">*</span> </label>
                            </div>
                            <div class="formcontrol2-3">
                              <input type="text" name="txt_HD_Result_FBS" id="txt_HD_Result_FBS" value="" placeholder="" style="width: 153px;" />
                            </div>
                            <div class="formcontrol2-3">
                              <input type="text" name="txt_HD_Result_PPBS" id="txt_HD_Result_PPBS" value="" placeholder="" style="width: 153px;" />
                            </div>
                            <div class="formcontrol2-3">
                              <input type="text" name="txt_HD_Result_UBS" id="txt_HD_Result_UBS" value="" placeholder="" style="width: 153px;" />
                            </div>
                            <div class="formcontrol2-3">
                              <input type="text" name="txt_HD_Result_RBS" id="txt_HD_Result_RBS" value="" placeholder="" style="width: 153px;" />
                            </div>
                          </div>
                          <div class="dvFloat formpadding1">
                            <div class="formlabel1-3">
                              <label class="formlabel1-1p">Range <span class="redtxt">*</span> </label>
                            </div>
                            <div class="formcontrol2-3">
                              <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                <tr>
                                  <td style="width: 63px;"><input type="text" name="txt_HD_Range_RBS" id="txt_HD_Range_RBS1" value="" placeholder="" style="width: 63px;" /></td>
                                  <td style="width: 1px;" valign="middle">-</td>
                                  <td style="width: 63px;"><input type="text" name="txt_HD_Range_RBS" id="txt_HD_Range_RBS1" value="" placeholder="" style="width: 63px;" /></td>
                                </tr>
                              </table>
                            </div>
                            <div class="formcontrol2-3">
                              <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                <tr>
                                  <td style="width: 63px;"><input type="text" name="txt_HD_Range_PPBS" id="txt_HD_Range_PPBS" value="" placeholder="" style="width: 63px;" /></td>
                                  <td style="width: 1px;" valign="middle">-</td>
                                  <td style="width: 63px;"><input type="text" name="txt_HD_Range_PPBS1" id="txt_HD_Range_PPBS1" value="" placeholder="" style="width: 63px;" /></td>
                                </tr>
                              </table>
                            </div>
                            <div class="formcontrol2-3">
                              <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                <tr>
                                  <td style="width: 63px;"><input type="text" name="txt_HD_Range_UBS" id="txt_HD_Range_UBS" value="" placeholder="" style="width: 63px;" /></td>
                                  <td style="width: 1px;" valign="middle">-</td>
                                  <td style="width: 63px;"><input type="text" name="txt_HD_Range_UBS1" id="txt_HD_Range_UBS1" value="" placeholder="" style="width: 63px;" /></td>
                                </tr>
                              </table>
                            </div>
                            <div class="formcontrol2-3">
                              <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                <tr>
                                  <td style="width: 63px;"><input type="text" name="txt_HD_Range_RBS" id="txt_HD_Range_RBS" value="" placeholder="" style="width: 63px;" /></td>
                                  <td style="width: 1px;" valign="middle">-</td>
                                  <td style="width: 63px;"><input type="text" name="txt_HD_Range_RBS1" id="txt_HD_Range_RBS1" value="" placeholder="" style="width: 63px;" /></td>
                                </tr>
                              </table>

                            </div>
                          </div>
                          <div class="dvFloat formpadding1">
                            <div class="formlabel1-3">
                              <label class="formlabel1-1p">Unit<span class="redtxt">*</span> </label>
                            </div>
                            <div class="formcontrol2-3">
                              <input type="text" name="txt_HD_Unit_FBS" id="txt_HD_Unit_FBS" value="" placeholder="" style="width: 153px;" />
                            </div>
                            <div class="formcontrol2-3">
                              <input type="text" name="txt_HD_Unit_PPBS" id="txt_HD_Unit_PPBS" value="" placeholder="" style="width: 153px;" />
                            </div>
                            <div class="formcontrol2-3">
                              <input type="text" name="txt_HD_Unit_UBS" id="txt_HD_Unit_UBS" value="" placeholder="" style="width: 153px;" />
                            </div>
                            <div class="formcontrol2-3">
                              <input type="text" name="txt_HD_Unit_RBS" id="txt_HD_Unit_RBS" value="" placeholder="" style="width: 153px;" />
                            </div>
                          </div>
                          <div class="dvFloat formpadding"  style="padding:10px 0px 15px 0px">
                            <div class="formlabel1-1p">&nbsp;</div>
                            <div style="float: right; border: solid 0px #006600;">
                              <div style=" width:84px; height:30px; float:left; padding-right:10px;"> <a href="#" class="button4">SUBMIT</a></div>
                              <div style=" width:84px; height:30px; float:left;padding-right:10px;"> <a  class="button2" onClick="showCancel1();" style="cursor:pointer" >Cancel</a></div>
                            </div>
                          </div>
                          <div class="dvFloat formpadding1"  style="padding:0px 0px 25px 0px">
                            <div class="formlabel1-1p">&nbsp;</div>
                            <div style="float: left; border: solid 0px #006600; width: 875px; padding-left: 15px;">
                              <div style="padding-bottom:10px; padding-top: 10px; color:#c02c3e; font-weight:bold">Standard Blood Sugar chart: </div>
                              <div class="dvFloat" style="font-size:12px;">
                                <table cellpadding="5" cellspacing="0" border="0" style="width:80%; border: solid 0px #CCCCCC;">
                                  <tr>
                                    <td style="border: solid 1px #CCCCCC; text-align: center; vertical-align: middle;font-size:12px;">Category of a Person</td>
                                    <td style="padding: 5px 0px 0px 0px; border-right: solid 0px #CCCCCC; border-top: solid 1px #CCCCCC;  border-bottom: solid 1px #CCCCCC;font-size:12px;"><table width="100%" cellpadding="0" cellspacing="0" border="0">
                                        <tr>
                                          <td colspan="2" style="padding:5px; border: solid 0px #CCCCCC; text-align: center;font-size:12px;">Fasting Value (mg / dl)</td>
                                        </tr>
                                        <tr>
                                          <td style="padding:5px; border-left: solid 0px #CCCCCC; border-top: solid 1px #CCCCCC; border-bottom: solid 0px #CCCCCC; text-align: center;font-size:12px;">Minimum Values</td>
                                          <td style="padding:8px; border-top: solid 1px #CCCCCC; border-right: solid 0px #CCCCCC; border-left: solid 1px #CCCCCC; text-align: center;font-size:12px;">Maximum Values</td>
                                        </tr>
                                      </table></td>
                                    <td style="padding:0px; border: solid 1px #CCCCCC;"><table width="100%" cellpadding="0" cellspacing="0" border="0">
                                        <tr>
                                          <td style="padding:5px 0px 5px 15px; border: solid 0px #CCCCCC;font-size:12px;">Post Prandial (mg / dl)</td>
                                        </tr>
                                        <tr>
                                          <td style="padding:5px 0px 0px 15px; border-top: solid 1px #CCCCCC;font-size:12px;">Value 2 hours after consuming glucose</td>
                                        </tr>
                                      </table></td>
                                  </tr>
                                </table>
                              </div>
                              <div class="dvFloat" style="padding-top: 20px;">
                                <table cellpadding="5" cellspacing="0" border="0" style="width:80%; border: solid 0px #CCCCCC;font-size:12px;">
                                  <tr>
                                    <td style="border-top: solid 1px #CCCCCC; border-left: solid 1px #CCCCCC; border-right: solid 0px #CCCCCC; border-bottom:  solid 1px #CCCCCC; padding: 10px; text-align: left; width: 150px;font-size:12px;">Normal</td>
                                    <td style="border-top: solid 1px #CCCCCC; border-left: solid 1px #CCCCCC; border-right: solid 0px #CCCCCC; border-bottom:  solid 1px #CCCCCC; padding: 10px; text-align: right; width: 150px;font-size:12px;">70</td>
                                    <td style="border-top: solid 1px #CCCCCC; border-left: solid 1px #CCCCCC; border-right: solid 0px #CCCCCC; border-bottom:  solid 1px #CCCCCC; padding: 10px; text-align: right; width: 150px;font-size:12px;">100</td>
                                    <td style="border: solid 1px #CCCCCC; padding: 10px; text-align: right; width: 150px;font-size:12px;">Less than 140</td>
                                  </tr>
                                  <tr>
                                    <td style="border-left: solid 1px #CCCCCC; border-right: solid 0px #CCCCCC; border-bottom:  solid 1px #CCCCCC; padding: 10px; text-align: left;font-size:12px;">Early Diiabetes</td>
                                    <td style="border-left: solid 1px #CCCCCC; border-right: solid 0px #CCCCCC; border-bottom:  solid 1px #CCCCCC; padding: 10px; text-align: right;font-size:12px;">101</td>
                                    <td style="border-left: solid 1px #CCCCCC; border-right: solid 0px #CCCCCC; border-bottom:  solid 1px #CCCCCC; padding: 10px; text-align: right;font-size:12px;">126</td>
                                    <td style="border-left: solid 1px #CCCCCC; border-right: solid 1px #CCCCCC; border-bottom:  solid 1px #CCCCCC; padding: 10px; text-align: right;font-size:12px;">140 to 200</td>
                                  </tr>
                                  <tr>
                                    <td style="border-left: solid 1px #CCCCCC; border-right: solid 0px #CCCCCC; border-bottom:  solid 1px #CCCCCC; padding: 10px; text-align: left;font-size:12px;">Established Diabetes</td>
                                    <td style="border-left: solid 1px #CCCCCC; border-right: solid 0px #CCCCCC; border-bottom:  solid 1px #CCCCCC; padding: 10px; text-align: right;font-size:12px;">More than 126</td>
                                    <td style="border-left: solid 1px #CCCCCC; border-right: solid 0px #CCCCCC; border-bottom:  solid 1px #CCCCCC; padding: 10px; text-align: right;font-size:12px;">-</td>
                                    <td style="border-left: solid 1px #CCCCCC; border-right: solid 1px #CCCCCC; border-bottom:  solid 1px #CCCCCC; padding: 10px; text-align: right;font-size:12px;">More than 200</td>
                                  </tr>
                                </table>
                              </div>
                            </div>
                          </div>
                          <div class="formcontrol2" style="float:left"> </div></div>
                        </div>
                      </div>
                    </div>
                     <?php include "view_files/sugar_profile.inc.php";?>
                  </div>
                  <div id="tabs3" class="tabcontent">
                    <div style="width:760px; border:solid 0px red;" id="divtab10">
                      <div style="padding:20px 5px 20px 5px;">
                        <div class="DvFloat">
                          <div style="width: 49%; float: left;padding-left:70px;"><span class="f_grey" style="font-size: 15px; ">Cholestrol</span></div>
                        </div>
                      </div>
                      <div class="DvFloat">
                        <div class="TabDv">
                          <div  style="padding:0px 0px 0px 70px;">
                            <ul id="tabstabs7" class="shadetabs7">
                              <li ><a href="#" rel="tabs1a6"> 1 WEEK </a></li>
                              <li><a href="#" rel="tabs2b6">1 MONTH</a></li>
                              <li><a href="#" rel="tabs3b6">1 year</a></li>
                            </ul>
                          </div>
                          <div class="TabContentDetails7">
                            <div id="tabs1a6" class="tabcontent7">
                              <div  style="width:755px; border:solid 0px red;">
                                <div class="DvFloat">
                                  <div class="DvFloat" style="padding: 15px 0px; border-bottom: solid 1px #c5c5c5;">
                                    <div class="DvFloat">
                                      <div style="width: 22px; float: left; height: 22px; background-image: url(images/prev_md_paging.png); background-repeat: no-repeat;"></div>
                                      <div style="width: 695px; float: left; text-align: center; font-size: 15px; font-weight: bold;" class="f_grey">27 Jan - 2 Feb 2014</div>
                                      <div style="width: 22px; float: left; height: 22px; background-image: url(images/next_md_paging.png); background-repeat: no-repeat;"></div>
                                    </div>
                                    <div class="DvFloat" style="padding-top: 5px;"> <img src="images/nutritionist/chart1.jpg" alt="" title="" border="0"> </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div id="tabs2b6" class="tabcontent7">
                              <div  style="width:755px; border:solid 0px red;"></div>
                            </div>
                            <div id="tabs3b6" class="tabcontent7">
                              <div  style="width:755px; border:solid 0px red;"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div style="padding:0px 5px 20px 5px;">
                        <div class="DvFloat" style="padding:20px 5px 0px 0px;">
                          <div style="width: 49%; float: left;padding-left:70px;"><span class="f_grey" style="font-size: 15px;">Triglyceride </span></div>
                        </div>
                      </div>
                      <div class="DvFloat">
                        <div class="TabDv">
                          <div  style="padding:0px 0px 0px 70px;">
                            <ul id="tabstabs8" class="shadetabs8">
                              <li ><a href="#" rel="tabs1a7"> 1 WEEK </a></li>
                              <li><a href="#" rel="tabs2b7">1 MONTH</a></li>
                              <li><a href="#" rel="tabs3c7">1 year</a></li>
                            </ul>
                          </div>
                          <div class="TabContentDetails8">
                            <div id="tabs1a7" class="tabcontent8">
                              <div  style="width:755px; border:solid 0px red;">
                                <div class="DvFloat">
                                  <div class="DvFloat" style="padding: 15px 0px; border-bottom: solid 1px #c5c5c5;">
                                    <div class="DvFloat">
                                      <div style="width: 22px; float: left; height: 22px; background-image: url(images/prev_md_paging.png); background-repeat: no-repeat;"></div>
                                      <div style="width: 695px; float: left; text-align: center; font-size: 15px; font-weight: bold;" class="f_grey">27 Jan - 2 Feb 2014</div>
                                      <div style="width: 22px; float: left; height: 22px; background-image: url(images/next_md_paging.png); background-repeat: no-repeat;"></div>
                                    </div>
                                    <div class="DvFloat" style="padding-top: 5px;"> <img src="images/nutritionist/chart1.jpg" alt="" title="" border="0"> </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div id="tabs2b7" class="tabcontent8">
                              <div  style="width:755px; border:solid 0px red;">sad</div>
                            </div>
                            <div id="tabs3c7" class="tabcontent8">
                              <div  style="width:755px; border:solid 0px red;">sad</div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div style="padding:20px 5px 20px 5px;">
                        <div class="DvFloat">
                          <div style="width: 49%; float: left;padding-left:70px;"><span class="f_grey" style="font-size: 15px; ">HDL</span></div>
                        </div>
                      </div>
                      <div class="DvFloat">
                        <div class="TabDv">
                          <div  style="padding:0px 0px 0px 70px;">
                            <ul id="tabstabs9" class="shadetabs9">
                              <li ><a href="#" rel="tabs1a8"> 1 WEEK </a></li>
                              <li><a href="#" rel="tabs2b8">1 MONTH</a></li>
                              <li><a href="#" rel="tabs3b8">1 year</a></li>
                            </ul>
                          </div>
                          <div class="TabContentDetails9">
                            <div id="tabs1a8" class="tabcontent9">
                              <div  style="width:755px; border:solid 0px red;">
                                <div class="DvFloat">
                                  <div class="DvFloat" style="padding: 15px 0px; border-bottom: solid 1px #c5c5c5;">
                                    <div class="DvFloat">
                                      <div style="width: 22px; float: left; height: 22px; background-image: url(images/prev_md_paging.png); background-repeat: no-repeat;"></div>
                                      <div style="width: 695px; float: left; text-align: center; font-size: 15px; font-weight: bold;" class="f_grey">27 Jan - 2 Feb 2014</div>
                                      <div style="width: 22px; float: left; height: 22px; background-image: url(images/next_md_paging.png); background-repeat: no-repeat;"></div>
                                    </div>
                                    <div class="DvFloat" style="padding-top: 5px;"> <img src="images/nutritionist/chart1.jpg" alt="" title="" border="0"> </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div id="tabs2b8" class="tabcontent9">
                              <div  style="width:755px; border:solid 0px red;"></div>
                            </div>
                            <div id="tabs3b8" class="tabcontent9">
                              <div  style="width:755px; border:solid 0px red;"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div style="padding:0px 5px 20px 5px;">
                        <div class="DvFloat" style="padding:20px 5px 0px 0px;">
                          <div style="width: 49%; float: left;padding-left:70px;"><span class="f_grey" style="font-size: 15px;">LDL </span></div>
                        </div>
                      </div>
                      <div class="DvFloat">
                        <div class="TabDv">
                          <div  style="padding:0px 0px 0px 70px;">
                            <ul id="tabstabs10" class="shadetabs10">
                              <li ><a href="#" rel="tabs1a9"> 1 WEEK </a></li>
                              <li><a href="#" rel="tabs2b9">1 MONTH</a></li>
                              <li><a href="#" rel="tabs3c9">1 year</a></li>
                            </ul>
                          </div>
                          <div class="TabContentDetails10">
                            <div id="tabs1a9" class="tabcontent10">
                              <div  style="width:755px; border:solid 0px red;">
                                <div class="DvFloat">
                                  <div class="DvFloat" style="padding: 15px 0px; border-bottom: solid 1px #c5c5c5;">
                                    <div class="DvFloat">
                                      <div style="width: 22px; float: left; height: 22px; background-image: url(images/prev_md_paging.png); background-repeat: no-repeat;"></div>
                                      <div style="width: 695px; float: left; text-align: center; font-size: 15px; font-weight: bold;" class="f_grey">27 Jan - 2 Feb 2014</div>
                                      <div style="width: 22px; float: left; height: 22px; background-image: url(images/next_md_paging.png); background-repeat: no-repeat;"></div>
                                    </div>
                                    <div class="DvFloat" style="padding-top: 5px;"> <img src="images/nutritionist/chart1.jpg" alt="" title="" border="0"> </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div id="tabs2b9" class="tabcontent10">
                              <div  style="width:755px; border:solid 0px red;">sad</div>
                            </div>
                            <div id="tabs3c9" class="tabcontent10">
                              <div  style="width:755px; border:solid 0px red;">sad</div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="DvFloat">
                        <div  style="width:98%; border:solid 0px red;">
                          
                             <div id="divShowHideForm2" style="display:none"> <div class="dvFloat formpadding1" style="padding:10px 0px 0px 0px;">
                            <div class="formlabel1-3">
                              <label class="formlabel1-1p">&nbsp;</label>
                            </div>
                            <div class="formcontrol2-3">
                              <label>Triglyceride </label>
                            </div>
                            <div class="formcontrol2-3">
                              <label>LDL</label>
                            </div>
                            <div class="formcontrol2-3">
                              <label>HDL</label>
                            </div>
                            <div class="formcontrol2-3">
                              <label>Cholesterol</label>
                            </div>
                          </div>
                     
                          <div class="dvFloat formpadding1">
                            <div class="formlabel1-3">
                              <label class="formlabel1-1p">Date <span class="redtxt">*</span></label>
                            </div>
                            <div class="formcontrol2-3">
                              <div class="dvFloat">
                                <div style="float:left; padding:0px 3px 0px 0px">
                                  <select id="Lipid_Triglyceride_Date" name="Lipid_Triglyceride_Date" tabindex="1" class="existing_event" style="width: 0px;">
                                    <option value="DD">DD</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                    <option>9</option>
                                    <option>10</option>
                                    <option>11</option>
                                    <option>12</option>
                                    <option>13</option>
                                    <option>14</option>
                                    <option>15</option>
                                    <option>16</option>
                                    <option>17</option>
                                    <option>18</option>
                                    <option>19</option>
                                    <option>20</option>
                                    <option>21</option>
                                    <option>22</option>
                                    <option>23</option>
                                    <option>24</option>
                                    <option>25</option>
                                    <option>26</option>
                                    <option>27</option>
                                    <option>28</option>
                                    <option>29</option>
                                    <option>30</option>
                                    <option>31</option>
                                  </select>
                                </div>
                                <div style="float:left; padding:0px 3px 0px 0px">
                                  <select id="Lipid_Triglyceride_Month" name="Lipid_Triglyceride_Month" tabindex="1" class="existing_event" style="width: 0px;">
                                    <option value="MM">MM</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                    <option>9</option>
                                    <option>10</option>
                                    <option>11</option>
                                    <option>12</option>
                                  </select>
                                </div>
                                <div style="float:left; padding:0px 0px 0px 0px">
                                  <select id="Lipid_Triglyceride_Year" name="Lipid_Triglyceride_Year" tabindex="1" class="existing_event" style="width: 0px;">
                                    <option value="YYYY">YYYY</option>
                                    <option>2006</option>
                                    <option>2007</option>
                                    <option>2008</option>
                                    <option>2009</option>
                                    <option>2014</option>
                                    <option>2010</option>
                                    <option>2011</option>
                                    <option>2012</option>
                                    <option>2013</option>
                                    <option>2014</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                            <div class="formcontrol2-3">
                              <div class="dvFloat">
                                <div style="float:left; padding:0px 3px 0px 0px">
                                  <select id="lipid_LDL_Date" name="lipid_LDL_Date" tabindex="1" class="existing_event" style="width: 0px;">
                                    <option value="DD">DD</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                    <option>9</option>
                                    <option>10</option>
                                    <option>11</option>
                                    <option>12</option>
                                    <option>13</option>
                                    <option>14</option>
                                    <option>15</option>
                                    <option>16</option>
                                    <option>17</option>
                                    <option>18</option>
                                    <option>19</option>
                                    <option>20</option>
                                    <option>21</option>
                                    <option>22</option>
                                    <option>23</option>
                                    <option>24</option>
                                    <option>25</option>
                                    <option>26</option>
                                    <option>27</option>
                                    <option>28</option>
                                    <option>29</option>
                                    <option>30</option>
                                    <option>31</option>
                                  </select>
                                </div>
                                <div style="float:left; padding:0px 3px 0px 0px">
                                  <select id="lipid_LDL_Month" name="lipid_LDL_Month" tabindex="1" class="existing_event" style="width: 0px;">
                                    <option value="MM">MM</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                    <option>9</option>
                                    <option>10</option>
                                    <option>11</option>
                                    <option>12</option>
                                  </select>
                                </div>
                                <div style="float:left; padding:0px 0px 0px 0px">
                                  <select id="lipid_LDL_Year" name="lipid_LDL_Year" tabindex="1" class="existing_event" style="width: 0px;">
                                    <option value="YYYY">YYYY</option>
                                    <option>2006</option>
                                    <option>2007</option>
                                    <option>2008</option>
                                    <option>2009</option>
                                    <option>2014</option>
                                    <option>2010</option>
                                    <option>2011</option>
                                    <option>2012</option>
                                    <option>2013</option>
                                    <option>2014</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                            <div class="formcontrol2-3">
                              <div class="dvFloat">
                                <div style="float:left; padding:0px 3px 0px 0px">
                                  <select id="lipid_HDL_Date" name="lipid_HDL_Date" tabindex="1" class="existing_event" style="width: 0px;">
                                    <option value="DD">DD</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                    <option>9</option>
                                    <option>10</option>
                                    <option>11</option>
                                    <option>12</option>
                                    <option>13</option>
                                    <option>14</option>
                                    <option>15</option>
                                    <option>16</option>
                                    <option>17</option>
                                    <option>18</option>
                                    <option>19</option>
                                    <option>20</option>
                                    <option>21</option>
                                    <option>22</option>
                                    <option>23</option>
                                    <option>24</option>
                                    <option>25</option>
                                    <option>26</option>
                                    <option>27</option>
                                    <option>28</option>
                                    <option>29</option>
                                    <option>30</option>
                                    <option>31</option>
                                  </select>
                                </div>
                                <div style="float:left; padding:0px 3px 0px 0px">
                                  <select id="lipid_HDL_Month" name="lipid_HDL_Month" tabindex="1" class="existing_event" style="width: 0px;">
                                    <option value="MM">MM</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                    <option>9</option>
                                    <option>10</option>
                                    <option>11</option>
                                    <option>12</option>
                                  </select>
                                </div>
                                <div style="float:left; padding:0px 0px 0px 0px">
                                  <select id="lipid_HDL_Year" name="lipid_HDL_Year" tabindex="1" class="existing_event" style="width: 0px;">
                                    <option value="YYYY">YYYY</option>
                                    <option>2006</option>
                                    <option>2007</option>
                                    <option>2008</option>
                                    <option>2009</option>
                                    <option>2014</option>
                                    <option>2010</option>
                                    <option>2011</option>
                                    <option>2012</option>
                                    <option>2013</option>
                                    <option>2014</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                            <div class="formcontrol2-3">
                              <div class="dvFloat">
                                <div style="float:left; padding:0px 3px 0px 0px">
                                  <select id="lipid_Cholesterol_Date" name="lipid_Cholesterol_Date" tabindex="1" class="existing_event" style="width: 0px;">
                                    <option value="DD">DD</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                    <option>9</option>
                                    <option>10</option>
                                    <option>11</option>
                                    <option>12</option>
                                    <option>13</option>
                                    <option>14</option>
                                    <option>15</option>
                                    <option>16</option>
                                    <option>17</option>
                                    <option>18</option>
                                    <option>19</option>
                                    <option>20</option>
                                    <option>21</option>
                                    <option>22</option>
                                    <option>23</option>
                                    <option>24</option>
                                    <option>25</option>
                                    <option>26</option>
                                    <option>27</option>
                                    <option>28</option>
                                    <option>29</option>
                                    <option>30</option>
                                    <option>31</option>
                                  </select>
                                </div>
                                <div style="float:left; padding:0px 3px 0px 0px">
                                  <select id="lipid_Cholesterol_Month" name="lipid_Cholesterol_Month" tabindex="1" class="existing_event" style="width: 0px;">
                                    <option value="MM">MM</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                    <option>8</option>
                                    <option>9</option>
                                    <option>10</option>
                                    <option>11</option>
                                    <option>12</option>
                                  </select>
                                </div>
                                <div style="float:left; padding:0px 0px 0px 0px">
                                  <select id="lipid_Cholesterol_Year" name="lipid_Cholesterol_Year" tabindex="1" class="existing_event" style="width: 0px;">
                                    <option value="YYYY">YYYY</option>
                                    <option>2006</option>
                                    <option>2007</option>
                                    <option>2008</option>
                                    <option>2009</option>
                                    <option>2014</option>
                                    <option>2010</option>
                                    <option>2011</option>
                                    <option>2012</option>
                                    <option>2013</option>
                                    <option>2014</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="dvFloat formpadding1">
                            <div class="formlabel1-3">
                              <label class="formlabel1-1p">Result<span class="redtxt">*</span> </label>
                            </div>
                            <div class="formcontrol2-3">
                              <input type="text" name="txt_HD_Result_Triglyceride" id="txt_HD_Result_Triglyceride" value="" placeholder="" style="width: 153px;" />
                            </div>
                            <div class="formcontrol2-3">
                              <input type="text" name="txt_HD_Result_LDL" id="txt_HD_Result_LDL" value="" placeholder="" style="width: 153px;" />
                            </div>
                            <div class="formcontrol2-3">
                              <input type="text" name="txt_HD_Result_HDL" id="txt_HD_Result_HDL" value="" placeholder="" style="width: 153px;" />
                            </div>
                            <div class="formcontrol2-3">
                              <input type="text" name="txt_HD_Result_Cholesterol" id="txt_HD_Result_Cholesterol" value="" placeholder="" style="width: 153px;" />
                            </div>
                          </div>
                          <div class="dvFloat formpadding1">
                            <div class="formlabel1-3">
                              <label class="formlabel1-1p">Range <span class="redtxt">*</span> </label>
                            </div>
                            <div class="formcontrol2-3">
                              <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                <tr>
                                  <td style="width: 63px;"><input type="text" name="txt_HD_Range_Triglyceride" id="txt_HD_Range_Triglyceride" value="" placeholder="" style="width: 63px;" /></td>
                                  <td style="width: 1px;" valign="middle">-</td>
                                  <td style="width: 63px;"><input type="text" name="txt_HD_Range_Triglyceride1" id="txt_HD_Range_Triglyceride1" value="" placeholder="" style="width: 63px;" /></td>
                                </tr>
                              </table>
                            </div>
                            <div class="formcontrol2-3">
                              <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                <tr>
                                  <td style="width: 63px;"><input type="text" name="txt_HD_Range_LDL" id="txt_HD_Range_LDL" value="" placeholder="" style="width: 63px;" /></td>
                                  <td style="width: 1px;" valign="middle">-</td>
                                  <td style="width: 63px;"><input type="text" name="txt_HD_Range_LDL1" id="txt_HD_Range_LDL1" value="" placeholder="" style="width: 63px;" /></td>
                                </tr>
                              </table>
                            </div>
                            <div class="formcontrol2-3">
                              <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                <tr>
                                  <td style="width: 63px;"><input type="text" name="txt_HD_Range_HDL" id="txt_HD_Range_HDL" value="" placeholder="" style="width: 63px;" /></td>
                                  <td style="width: 1px;" valign="middle">-</td>
                                  <td style="width: 63px;"><input type="text" name="txt_HD_Range_HDL1" id="txt_HD_Range_HDL1" value="" placeholder="" style="width: 63px;" /></td>
                                </tr>
                              </table>
                            </div>
                            <div class="formcontrol2-3">
                              <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                <tr>
                                  <td style="width: 63px;"><input type="text" name="txt_HD_Range_Cholesterol" id="txt_HD_Range_Cholesterol" value="" placeholder="" style="width: 63px;" /></td>
                                  <td style="width: 1px;" valign="middle">-</td>
                                  <td style="width: 63px;"><input type="text" name="txt_HD_Range_Cholesterol1" id="txt_HD_Range_Cholesterol1" value="" placeholder="" style="width: 63px;" /></td>
                                </tr>
                              </table>
                            </div>
                          </div>
                          <div class="dvFloat formpadding1">
                            <div class="formlabel1-3">
                              <label class="formlabel1-1p">Unit<span class="redtxt">*</span> </label>
                            </div>
                            <div class="formcontrol2-3">
                              <input type="text" name="txt_HD_Unit_Triglyceride" id="txt_HD_Unit_Triglyceride" value="" placeholder="" style="width: 153px;" />
                            </div>
                            <div class="formcontrol2-3">
                              <input type="text" name="txt_HD_Unit_LDL" id="txt_HD_Unit_LDL" value="" placeholder="" style="width: 153px;" />
                            </div>
                            <div class="formcontrol2-3">
                              <input type="text" name="txt_HD_Unit_HDL" id="txt_HD_Unit_HDL" value="" placeholder="" style="width: 153px;" />
                            </div>
                            <div class="formcontrol2-3">
                              <input type="text" name="txt_HD_Unit_Cholesterol" id="txt_HD_Unit_Cholesterol" value="" placeholder="" style="width: 153px;" />
                            </div>
                          </div>
                          <div class="dvFloat formpadding"  style="padding:10px 0px 15px 0px">
                            <div class="formlabel1-1p">&nbsp;</div>
                            <div style="float: right; border: solid 0px #006600;">
                              <div style=" width:84px; height:30px; float:left; padding-right:10px;"> <a href="#" class="button4">SUBMIT</a></div>
                              <div style=" width:84px; height:30px; float:left;padding-right:10px;"> <a  class="button2" onClick="showCancel2();" style="cursor:pointer">Cancel</a></div>
                            </div>
                          </div>
                          <div class="dvFloat formpadding1"  style="padding:0px 0px 25px 0px">
                            <div class="formlabel1-1p">&nbsp;</div>
                            <div style="float: left; border: solid 0px #006600; width: 875px; padding-left: 15px;">
                              <div style="padding-bottom:10px; padding-top: 10px; color:#c02c3e">Standard Lipid Profile chart: </div>
                              <div class="dvFloat">
                                <table cellpadding="5" cellspacing="0" border="0" style="width:80%; border: solid 0px #CCCCCC;">
                                  <tr>
                                    <td style="border-top: solid 1px #CCCCCC; border-left: solid 1px #CCCCCC; border-right: solid 0px #CCCCCC; border-bottom:  solid 1px #CCCCCC; padding: 10px; text-align: left; width: 150px;">Tests</td>
                                    <td style="border-top: solid 1px #CCCCCC; border-left: solid 1px #CCCCCC; border-right: solid 0px #CCCCCC; border-bottom:  solid 1px #CCCCCC; padding: 10px; text-align: right; width: 150px; font-weight: bold;">Desirable</td>
                                    <td style="border-top: solid 1px #CCCCCC; border-left: solid 1px #CCCCCC; border-right: solid 0px #CCCCCC; border-bottom:  solid 1px #CCCCCC; padding: 10px; text-align: right; width: 150px; font-weight: bold;">Borderline</td>
                                    <td style="border: solid 1px #CCCCCC; padding: 10px; text-align: right; width: 150px; font-weight: bold;">High Risk</td>
                                  </tr>
                                  <tr>
                                    <td style="border-left: solid 1px #CCCCCC; border-right: solid 0px #CCCCCC; border-bottom:  solid 1px #CCCCCC; padding: 10px; text-align: left;">Cholesterol</td>
                                    <td style="border-left: solid 1px #CCCCCC; border-right: solid 0px #CCCCCC; border-bottom:  solid 1px #CCCCCC; padding: 10px; text-align: right;">-</td>
                                    <td style="border-left: solid 1px #CCCCCC; border-right: solid 0px #CCCCCC; border-bottom:  solid 1px #CCCCCC; padding: 10px; text-align: right;">200 - 239 mg/dl</td>
                                    <td style="border-left: solid 1px #CCCCCC; border-right: solid 1px #CCCCCC; border-bottom:  solid 1px #CCCCCC; padding: 10px; text-align: right;">240 mg/dl</td>
                                  </tr>
                                  <tr>
                                    <td style="border-left: solid 1px #CCCCCC; border-right: solid 0px #CCCCCC; border-bottom:  solid 1px #CCCCCC; padding: 10px; text-align: left;">Triglycerides</td>
                                    <td style="border-left: solid 1px #CCCCCC; border-right: solid 0px #CCCCCC; border-bottom:  solid 1px #CCCCCC; padding: 10px; text-align: right;">-</td>
                                    <td style="border-left: solid 1px #CCCCCC; border-right: solid 0px #CCCCCC; border-bottom:  solid 1px #CCCCCC; padding: 10px; text-align: right;">150 - 199 mg/dl</td>
                                    <td style="border-left: solid 1px #CCCCCC; border-right: solid 1px #CCCCCC; border-bottom:  solid 1px #CCCCCC; padding: 10px; text-align: right;">200 - 499 mg/dl</td>
                                  </tr>
                                  <tr>
                                    <td style="border-left: solid 1px #CCCCCC; border-right: solid 0px #CCCCCC; border-bottom:  solid 1px #CCCCCC; padding: 10px; text-align: left;">HDL Cholesterol</td>
                                    <td style="border-left: solid 1px #CCCCCC; border-right: solid 0px #CCCCCC; border-bottom:  solid 1px #CCCCCC; padding: 10px; text-align: right;">60 mg/dl</td>
                                    <td style="border-left: solid 1px #CCCCCC; border-right: solid 0px #CCCCCC; border-bottom:  solid 1px #CCCCCC; padding: 10px; text-align: right;">35-45 mg/dl</td>
                                    <td style="border-left: solid 1px #CCCCCC; border-right: solid 1px #CCCCCC; border-bottom:  solid 1px #CCCCCC; padding: 10px; text-align: right;">-</td>
                                  </tr>
                                  <tr>
                                    <td style="border-left: solid 1px #CCCCCC; border-right: solid 0px #CCCCCC; border-bottom:  solid 1px #CCCCCC; padding: 10px; text-align: left;">LDL Cholesterol</td>
                                    <td style="border-left: solid 1px #CCCCCC; border-right: solid 0px #CCCCCC; border-bottom:  solid 1px #CCCCCC; padding: 10px; text-align: right;">60 - 130 mg/dl</td>
                                    <td style="border-left: solid 1px #CCCCCC; border-right: solid 0px #CCCCCC; border-bottom:  solid 1px #CCCCCC; padding: 10px; text-align: right;">130-159 mg/dl</td>
                                    <td style="border-left: solid 1px #CCCCCC; border-right: solid 1px #CCCCCC; border-bottom:  solid 1px #CCCCCC; padding: 10px; text-align: right;">160 - 189 mg/dl</td>
                                  </tr>
                                </table>
                              </div>
                            </div>
                          </div></div>
                        </div>
                      </div>
                    </div>
                     <?php include "view_files/lipid_profile.inc.php";?>
                  </div>
                  <div id="tabs4" class="tabcontent">
                    <div style="width:760px; border:solid 0px red;" id="divtab11">
                      <div style="padding:20px 5px 20px 5px;">
                        <div class="DvFloat">
                          <div style="width: 49%; float: left;padding-left:70px;"><span class="f_grey" style="font-size: 15px; ">Alcohol</span></div>
                        </div>
                      </div>
                      <div class="DvFloat">
                        <div class="TabDv">
                          <div  style="padding:0px 0px 0px 70px;">
                            <ul id="tabstabs11" class="shadetabs11">
                              <li ><a href="#" rel="tabs1a10"> 1 WEEK </a></li>
                              <li><a href="#" rel="tabs2b10">1 MONTH</a></li>
                              <li><a href="#" rel="tabs3b10">1 year</a></li>
                            </ul>
                          </div>
                          <div class="TabContentDetails11">
                            <div id="tabs1a10" class="tabcontent11">
                              <div  style="width:755px; border:solid 0px red;">
                                <div class="DvFloat">
                                  <div class="DvFloat" style="padding: 15px 0px; border-bottom: solid 1px #c5c5c5;">
                                    <div class="DvFloat">
                                      <div style="width: 22px; float: left; height: 22px; background-image: url(images/prev_md_paging.png); background-repeat: no-repeat;"></div>
                                      <div style="width: 695px; float: left; text-align: center; font-size: 15px; font-weight: bold;" class="f_grey">27 Jan - 2 Feb 2014</div>
                                      <div style="width: 22px; float: left; height: 22px; background-image: url(images/next_md_paging.png); background-repeat: no-repeat;"></div>
                                    </div>
                                    <div class="DvFloat" style="padding-top: 5px;"> <img src="images/nutritionist/chart1.jpg" alt="" title="" border="0"> </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div id="tabs2b10" class="tabcontent11">
                              <div  style="width:755px; border:solid 0px red;"></div>
                            </div>
                            <div id="tabs3b10" class="tabcontent11">
                              <div  style="width:755px; border:solid 0px red;"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div style="padding:0px 5px 20px 5px;">
                        <div class="DvFloat" style="padding:20px 5px 0px 0px;">
                          <div style="width: 49%; float: left;padding-left:70px;"><span class="f_grey" style="font-size: 15px;">Beer </span></div>
                        </div>
                      </div>
                      <div class="DvFloat">
                        <div class="TabDv">
                          <div  style="padding:0px 0px 0px 70px;">
                            <ul id="tabstabs12" class="shadetabs12">
                              <li ><a href="#" rel="tabs1a11"> 1 WEEK </a></li>
                              <li><a href="#" rel="tabs2b11">1 MONTH</a></li>
                              <li><a href="#" rel="tabs3c11">1 year</a></li>
                            </ul>
                          </div>
                          <div class="TabContentDetails12">
                            <div id="tabs1a11" class="tabcontent12">
                              <div  style="width:755px; border:solid 0px red;">
                                <div class="DvFloat">
                                  <div class="DvFloat" style="padding: 15px 0px; border-bottom: solid 1px #c5c5c5;">
                                    <div class="DvFloat">
                                      <div style="width: 22px; float: left; height: 22px; background-image: url(images/prev_md_paging.png); background-repeat: no-repeat;"></div>
                                      <div style="width: 695px; float: left; text-align: center; font-size: 15px; font-weight: bold;" class="f_grey">27 Jan - 2 Feb 2014</div>
                                      <div style="width: 22px; float: left; height: 22px; background-image: url(images/next_md_paging.png); background-repeat: no-repeat;"></div>
                                    </div>
                                    <div class="DvFloat" style="padding-top: 5px;"> <img src="images/nutritionist/chart1.jpg" alt="" title="" border="0"> </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div id="tabs2b11" class="tabcontent12">
                              <div  style="width:755px; border:solid 0px red;">sad</div>
                            </div>
                            <div id="tabs3c11" class="tabcontent12">
                              <div  style="width:755px; border:solid 0px red;">sad</div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div style="padding:20px 5px 20px 5px;">
                        <div class="DvFloat">
                          <div style="width: 49%; float: left;padding-left:70px;"><span class="f_grey" style="font-size: 15px; ">Cigarette </span></div>
                        </div>
                      </div>
                      <div class="DvFloat">
                        <div class="TabDv">
                          <div  style="padding:0px 0px 0px 70px;">
                            <ul id="tabstabs13" class="shadetabs13">
                              <li ><a href="#" rel="tabs1a12"> 1 WEEK </a></li>
                              <li><a href="#" rel="tabs2b12">1 MONTH</a></li>
                              <li><a href="#" rel="tabs3b12">1 year</a></li>
                            </ul>
                          </div>
                          <div class="TabContentDetails13">
                            <div id="tabs1a12" class="tabcontent13">
                              <div  style="width:755px; border:solid 0px red;">
                                <div class="DvFloat">
                                  <div class="DvFloat" style="padding: 15px 0px; border-bottom: solid 1px #c5c5c5;">
                                    <div class="DvFloat">
                                      <div style="width: 22px; float: left; height: 22px; background-image: url(images/prev_md_paging.png); background-repeat: no-repeat;"></div>
                                      <div style="width: 695px; float: left; text-align: center; font-size: 15px; font-weight: bold;" class="f_grey">27 Jan - 2 Feb 2014</div>
                                      <div style="width: 22px; float: left; height: 22px; background-image: url(images/next_md_paging.png); background-repeat: no-repeat;"></div>
                                    </div>
                                    <div class="DvFloat" style="padding-top: 5px;"> <img src="images/nutritionist/chart1.jpg" alt="" title="" border="0"> </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div id="tabs2b12" class="tabcontent13">
                              <div  style="width:755px; border:solid 0px red;"></div>
                            </div>
                            <div id="tabs3b12" class="tabcontent13">
                              <div  style="width:755px; border:solid 0px red;"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div style="padding:0px 5px 20px 5px;">
                        <div class="DvFloat" style="padding:20px 5px 0px 0px;">
                          <div style="width: 49%; float: left;padding-left:70px;"><span class="f_grey" style="font-size: 15px;">Sleep </span></div>
                        </div>
                      </div>
                      <div class="DvFloat">
                        <div class="TabDv">
                          <div  style="padding:0px 0px 0px 70px;">
                            <ul id="tabstabs14" class="shadetabs14">
                              <li ><a href="#" rel="tabs1a13"> 1 WEEK </a></li>
                              <li><a href="#" rel="tabs2b13">1 MONTH</a></li>
                              <li><a href="#" rel="tabs3c13">1 year</a></li>
                            </ul>
                          </div>
                          <div class="TabContentDetails14">
                            <div id="tabs1a13" class="tabcontent14">
                              <div  style="width:755px; border:solid 0px red;">
                                <div class="DvFloat">
                                  <div class="DvFloat" style="padding: 15px 0px; border-bottom: solid 1px #c5c5c5;">
                                    <div class="DvFloat">
                                      <div style="width: 22px; float: left; height: 22px; background-image: url(images/prev_md_paging.png); background-repeat: no-repeat;"></div>
                                      <div style="width: 695px; float: left; text-align: center; font-size: 15px; font-weight: bold;" class="f_grey">27 Jan - 2 Feb 2014</div>
                                      <div style="width: 22px; float: left; height: 22px; background-image: url(images/next_md_paging.png); background-repeat: no-repeat;"></div>
                                    </div>
                                    <div class="DvFloat" style="padding-top: 5px;"> <img src="images/nutritionist/chart1.jpg" alt="" title="" border="0"> </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div id="tabs2b13" class="tabcontent14">
                              <div  style="width:755px; border:solid 0px red;">sad</div>
                            </div>
                            <div id="tabs3c13" class="tabcontent14">
                              <div  style="width:755px; border:solid 0px red;">sad</div>
                            </div>
                          </div>
                        </div>
                      </div>
                     
                      <div id="divShowHideForm3" style="display:none">
                      <div class="DvFloat">
                        <div class="DvFloat" style="padding:10px 0px 10px 0px; border-bottom:solid 1px #e4e4e4">
                          <table cellpadding="0" cellspacing="0" style="width:100%;">
                            <tr>
                              <td class="whitebox_Td_LS_H" style="text-align:left; font-weight:bold">Spirit<br>
                              </td>
                              <td class="WhiteSpace_Td2"></td>
                              <td class="whitebox_Td_LS" colspan="16" style="text-align:center; ">
                              <table  cellpadding="0" cellspacing="0" style="width:50%;">
                              <tr><td style="text-align:center; font-size:12px;vertical-align:middle"><b>Set a daily consumption goal:&nbsp;
                              </b></td>
                              <td style="text-align:center" ><input type="text" value="" id="txtBreakfast_qty" name="txtBreakfast_qty" placeholder="" style="width:30px;height:10px; text-align:center"></td>
                              <td style="vertical-align:middle">(ml per week)</td></tr>
                              </table>
                                </td>
                            </tr>
                            <tr>
                              <td class="whitebox_Td_LS">&nbsp;</td>
                              <td class="WhiteSpace_Td2"></td>
                              <td class="whitebox_Td_LS">Monday<br>
                                8-Jan-14 </td>
                              <td class="WhiteSpace_Td2"></td>
                              <td class="whitebox_Td_LS"> Tuesday<br>
                                9-Jan-14 </td>
                              <td class="WhiteSpace_Td2"></td>
                              <td class="whitebox_Td_LS">Wednesday<br>
                                10-Jan-14 </td>
                              <td class="WhiteSpace_Td2"></td>
                              <td class="whitebox_Td_LS">Thursday<br>
                                11-Jan-14</td>
                              <td class="WhiteSpace_Td2"></td>
                              <td class="whitebox_Td_LS">Friday<br>
                                12-Jan-14</td>
                              <td class="WhiteSpace_Td2"></td>
                              <td class="whitebox_Td_LS">Saturday<br>
                                13-Jan-14 </td>
                              <td class="WhiteSpace_Td2"></td>
                              <td class="whitebox_Td_LS">Sunday<br>
                                14-Jan-14</td>
                              <td class="WhiteSpace_Td2"></td>
                              <td class="whitebox_Td_LS">Week Total</td>
                              <td class="WhiteSpace_Td2"></td>
                            </tr>
                            <tr>
                              <td class="whitebox_Td_LS">&nbsp;</td>
                              <td class="WhiteSpace_Td2"></td>
                              <td class="LightGreybox_Td_LS"><input type="text" value="" id="txtBreakfast_qty" name="txtBreakfast_qty" placeholder="" style="width:50px; text-align:center"></td>
                              <td class="WhiteSpace_Td2"></td>
                              <td class="LightGreybox_Td_LS"><input type="text" value="" id="txtBreakfast_qty" name="txtBreakfast_qty" placeholder="" style="width:50px; text-align:center"></td>
                              <td class="WhiteSpace_Td2"></td>
                              <td class="LightGreybox_Td_LS"><input type="text" value="" id="txtBreakfast_qty" name="txtBreakfast_qty" placeholder="" style="width:50px; text-align:center"></td>
                              <td class="WhiteSpace_Td2"></td>
                              <td class="LightGreybox_Td_LS"><input type="text" value="" id="txtBreakfast_qty" name="txtBreakfast_qty" placeholder="" style="width:50px; text-align:center"></td>
                              <td class="WhiteSpace_Td2"></td>
                              <td class="LightGreybox_Td_LS"><input type="text" value="" id="txtBreakfast_qty" name="txtBreakfast_qty" placeholder="" style="width:50px; text-align:center"></td>
                              <td class="WhiteSpace_Td2"></td>
                              <td class="LightGreybox_Td_LS"><input type="text" value="" id="txtBreakfast_qty" name="txtBreakfast_qty" placeholder="" style="width:50px; text-align:center"></td>
                              <td class="WhiteSpace_Td2"></td>
                              <td class="LightGreybox_Td_LS"><input type="text" value="" id="txtBreakfast_qty" name="txtBreakfast_qty" placeholder="" style="width:50px; text-align:center"></td>
                              <td class="WhiteSpace_Td2"></td>
                              <td class="whitebox_Td_LS" style="padding-top:10px;vertical-align:top">45</td>
                              <td class="WhiteSpace_Td2"></td>
                            </tr>
                          </table>
                        </div>
                        <div class="DvFloat" style="padding:10px 0px 10px 0px; border-bottom:solid 1px #e4e4e4">
                          <table cellpadding="0" cellspacing="0" style="width:100%;">
                            <tr>
                              <td class="whitebox_Td_LS_H" style="text-align:left; font-weight:bold">Beer<br>
                              </td>
                              <td class="WhiteSpace_Td2"></td>
                              <td class="whitebox_Td_LS" colspan="16" style="text-align:left; ">
                              <table  cellpadding="0" cellspacing="0" style="width:55%;">
                              <tr><td style="text-align:center; font-size:12px;vertical-align:middle"><b>Set a weekly consumption goal:&nbsp;
                              </b></td>
                              <td style="text-align:center"><input type="text" value="" id="txtBreakfast_qty" name="txtBreakfast_qty" placeholder="" style="width:30px;height:10px; text-align:center"></td>
                              <td style="vertical-align:middle">(glasses per week)</td></tr>
                              </table>
                             </td>
                            </tr>
                            <tr>
                              <td class="whitebox_Td_LS">&nbsp;</td>
                              <td class="WhiteSpace_Td2"></td>
                              <td class="whitebox_Td_LS">Monday<br>
                                8-Jan-14 </td>
                              <td class="WhiteSpace_Td2"></td>
                              <td class="whitebox_Td_LS"> Tuesday<br>
                                9-Jan-14 </td>
                              <td class="WhiteSpace_Td2"></td>
                              <td class="whitebox_Td_LS">Wednesday<br>
                                10-Jan-14 </td>
                              <td class="WhiteSpace_Td2"></td>
                              <td class="whitebox_Td_LS">Thursday<br>
                                11-Jan-14</td>
                              <td class="WhiteSpace_Td2"></td>
                              <td class="whitebox_Td_LS">Friday<br>
                                12-Jan-14</td>
                              <td class="WhiteSpace_Td2"></td>
                              <td class="whitebox_Td_LS">Saturday<br>
                                13-Jan-14 </td>
                              <td class="WhiteSpace_Td2"></td>
                              <td class="whitebox_Td_LS">Sunday<br>
                                14-Jan-14</td>
                              <td class="WhiteSpace_Td2"></td>
                              <td class="whitebox_Td_LS">Week Total</td>
                              <td class="WhiteSpace_Td2"></td>
                            </tr>
                            <tr>
                              <td class="whitebox_Td_LS">&nbsp;</td>
                              <td class="WhiteSpace_Td2"></td>
                              <td class="LightGreybox_Td_LS"><input type="text" value="" id="txtBreakfast_qty" name="txtBreakfast_qty" placeholder="" style="width:50px; text-align:center"></td>
                              <td class="WhiteSpace_Td2"></td>
                              <td class="LightGreybox_Td_LS"><input type="text" value="" id="txtBreakfast_qty" name="txtBreakfast_qty" placeholder="" style="width:50px; text-align:center"></td>
                              <td class="WhiteSpace_Td2"></td>
                              <td class="LightGreybox_Td_LS"><input type="text" value="" id="txtBreakfast_qty" name="txtBreakfast_qty" placeholder="" style="width:50px; text-align:center"></td>
                              <td class="WhiteSpace_Td2"></td>
                              <td class="LightGreybox_Td_LS"><input type="text" value="" id="txtBreakfast_qty" name="txtBreakfast_qty" placeholder="" style="width:50px; text-align:center"></td>
                              <td class="WhiteSpace_Td2"></td>
                              <td class="LightGreybox_Td_LS"><input type="text" value="" id="txtBreakfast_qty" name="txtBreakfast_qty" placeholder="" style="width:50px; text-align:center"></td>
                              <td class="WhiteSpace_Td2"></td>
                              <td class="LightGreybox_Td_LS"><input type="text" value="" id="txtBreakfast_qty" name="txtBreakfast_qty" placeholder="" style="width:50px; text-align:center"></td>
                              <td class="WhiteSpace_Td2"></td>
                              <td class="LightGreybox_Td_LS"><input type="text" value="" id="txtBreakfast_qty" name="txtBreakfast_qty" placeholder="" style="width:50px; text-align:center"></td>
                              <td class="WhiteSpace_Td2"></td>
                             <td class="whitebox_Td_LS" style="padding-top:10px;vertical-align:top">45</td>
                              <td class="WhiteSpace_Td2"></td>
                            </tr>
                          </table>
                        </div>
                        <div class="DvFloat" style="padding:10px 0px 10px 0px; border-bottom:solid 1px #e4e4e4">
                          <table cellpadding="0" cellspacing="0" style="width:100%;">
                            <tr>
                              <td class="whitebox_Td_LS_H" style="text-align:left; font-weight:bold">Cigarette <br>
                              </td>
                              <td class="WhiteSpace_Td2"></td>
                              <td class="whitebox_Td_LS" colspan="16" style="text-align:left; "><table  cellpadding="0" cellspacing="0" style="width:55%;">
                              <tr><td style="text-align:center; font-size:12px;vertical-align:middle"><b>Set a weekly  consumption goal:
                              </b></td>
                              <td style="text-align:center"><input type="text" value="" id="txtBreakfast_qty" name="txtBreakfast_qty" placeholder="" style="width:30px;height:10px; text-align:center"></td>
                              <td style="vertical-align:middle">(smoked per day)</td></tr>
                              </table> </td>
                            </tr>
                            <tr>
                              <td class="whitebox_Td_LS">&nbsp;</td>
                              <td class="WhiteSpace_Td2"></td>
                              <td class="whitebox_Td_LS">Monday<br>
                                8-Jan-14 </td>
                              <td class="WhiteSpace_Td2"></td>
                              <td class="whitebox_Td_LS"> Tuesday<br>
                                9-Jan-14 </td>
                              <td class="WhiteSpace_Td2"></td>
                              <td class="whitebox_Td_LS">Wednesday<br>
                                10-Jan-14 </td>
                              <td class="WhiteSpace_Td2"></td>
                              <td class="whitebox_Td_LS">Thursday<br>
                                11-Jan-14</td>
                              <td class="WhiteSpace_Td2"></td>
                              <td class="whitebox_Td_LS">Friday<br>
                                12-Jan-14</td>
                              <td class="WhiteSpace_Td2"></td>
                              <td class="whitebox_Td_LS">Saturday<br>
                                13-Jan-14 </td>
                              <td class="WhiteSpace_Td2"></td>
                              <td class="whitebox_Td_LS">Sunday<br>
                                14-Jan-14</td>
                              <td class="WhiteSpace_Td2"></td>
                              <td class="whitebox_Td_LS">Week Total</td>
                              <td class="WhiteSpace_Td2"></td>
                            </tr>
                            <tr>
                              <td class="whitebox_Td_LS">&nbsp;</td>
                              <td class="WhiteSpace_Td2"></td>
                              <td class="LightGreybox_Td_LS"><input type="text" value="" id="txtCigarette " name="txtCigarette " placeholder="" style="width:50px; text-align:center"></td>
                              <td class="WhiteSpace_Td2"></td>
                              <td class="LightGreybox_Td_LS"><input type="text" value="" id="txtCigarette " name="txtCigarette " placeholder="" style="width:50px; text-align:center"></td>
                              <td class="WhiteSpace_Td2"></td>
                              <td class="LightGreybox_Td_LS"><input type="text" value="" id="txtCigarette " name="txtCigarette " placeholder="" style="width:50px; text-align:center"></td>
                              <td class="WhiteSpace_Td2"></td>
                              <td class="LightGreybox_Td_LS"><input type="text" value="" id="txtCigarette " name="txtCigarette " placeholder="" style="width:50px; text-align:center"></td>
                              <td class="WhiteSpace_Td2"></td>
                              <td class="LightGreybox_Td_LS"><input type="text" value="" id="txtCigarette " name="txtCigarette " placeholder="" style="width:50px; text-align:center"></td>
                              <td class="WhiteSpace_Td2"></td>
                              <td class="LightGreybox_Td_LS"><input type="text" value="" id="txtCigarette " name="txtCigarette " placeholder="" style="width:50px; text-align:center"></td>
                              <td class="WhiteSpace_Td2"></td>
                              <td class="LightGreybox_Td_LS"><input type="text" value="" id="txtCigarette " name="txtCigarette " placeholder="" style="width:50px; text-align:center"></td>
                              <td class="WhiteSpace_Td2"></td>
                              <td class="whitebox_Td_LS" style="padding-top:10px;vertical-align:top">45</td>
                              <td class="WhiteSpace_Td2"></td>
                            </tr>
                          </table>
                        </div>
                        <div class="DvFloat" style="padding:10px 0px 10px 0px; border-bottom:solid 1px #e4e4e4">
                          <table cellpadding="0" cellspacing="0" style="width:100%;">
                            <tr>
                              <td class="whitebox_Td_LS_H" style="text-align:left; font-weight:bold">Sleep<br>
                              </td>
                              <td class="WhiteSpace_Td2"></td>
                              <td class="whitebox_Td_LS" colspan="16" style="text-align:left; "><table  cellpadding="0" cellspacing="0" style="width:45%;">
                              <tr><td style="text-align:center; font-size:12px;vertical-align:middle"><b>Recomended Daily Sleep:                              </b></td>
                              <td style="text-align:center"><input type="text" value="" id="txtBreakfast_qty" name="txtBreakfast_qty" placeholder="" style="width:30px;height:10px; text-align:center"></td>
                              <td style="vertical-align:middle">(hours per day)</td></tr>
                              </table></td>
                            </tr>
                            <tr>
                              <td class="whitebox_Td_LS">&nbsp;</td>
                              <td class="WhiteSpace_Td2"></td>
                              <td class="whitebox_Td_LS">Monday<br>
                                8-Jan-14 </td>
                              <td class="WhiteSpace_Td2"></td>
                              <td class="whitebox_Td_LS"> Tuesday<br>
                                9-Jan-14 </td>
                              <td class="WhiteSpace_Td2"></td>
                              <td class="whitebox_Td_LS">Wednesday<br>
                                10-Jan-14 </td>
                              <td class="WhiteSpace_Td2"></td>
                              <td class="whitebox_Td_LS">Thursday<br>
                                11-Jan-14</td>
                              <td class="WhiteSpace_Td2"></td>
                              <td class="whitebox_Td_LS">Friday<br>
                                12-Jan-14</td>
                              <td class="WhiteSpace_Td2"></td>
                              <td class="whitebox_Td_LS">Saturday<br>
                                13-Jan-14 </td>
                              <td class="WhiteSpace_Td2"></td>
                              <td class="whitebox_Td_LS">Sunday<br>
                                14-Jan-14</td>
                              <td class="WhiteSpace_Td2"></td>
                              <td class="whitebox_Td_LS">Week Total</td>
                              <td class="WhiteSpace_Td2"></td>
                            </tr>
                            <tr>
                              <td class="whitebox_Td_LS">&nbsp;</td>
                              <td class="WhiteSpace_Td2"></td>
                              <td class="LightGreybox_Td_LS"><input type="text" value="" id="txtBreakfast_qty" name="txtBreakfast_qty" placeholder="" style="width:50px; text-align:center"></td>
                              <td class="WhiteSpace_Td2"></td>
                              <td class="LightGreybox_Td_LS"><input type="text" value="" id="txtBreakfast_qty" name="txtBreakfast_qty" placeholder="" style="width:50px; text-align:center"></td>
                              <td class="WhiteSpace_Td2"></td>
                              <td class="LightGreybox_Td_LS"><input type="text" value="" id="txtBreakfast_qty" name="txtBreakfast_qty" placeholder="" style="width:50px; text-align:center"></td>
                              <td class="WhiteSpace_Td2"></td>
                              <td class="LightGreybox_Td_LS"><input type="text" value="" id="txtBreakfast_qty" name="txtBreakfast_qty" placeholder="" style="width:50px; text-align:center"></td>
                              <td class="WhiteSpace_Td2"></td>
                              <td class="LightGreybox_Td_LS"><input type="text" value="" id="txtBreakfast_qty" name="txtBreakfast_qty" placeholder="" style="width:50px; text-align:center"></td>
                              <td class="WhiteSpace_Td2"></td>
                              <td class="LightGreybox_Td_LS"><input type="text" value="" id="txtBreakfast_qty" name="txtBreakfast_qty" placeholder="" style="width:50px; text-align:center"></td>
                              <td class="WhiteSpace_Td2"></td>
                              <td class="LightGreybox_Td_LS"><input type="text" value="" id="txtBreakfast_qty" name="txtBreakfast_qty" placeholder="" style="width:50px; text-align:center"></td>
                              <td class="WhiteSpace_Td2"></td>
                              <td class="whitebox_Td_LS" style="padding-top:10px;vertical-align:top">45</td>
                              <td class="WhiteSpace_Td2"></td>
                            </tr>
                          </table>
                        </div>
                        <div  style="padding:10px 0px 10px 0px; border-bottom:solid 0px #e4e4e4; float:right">
                          <div style=" width:84px; height:30px; float:left;padding-right:10px;"> <a href="#" class="button4">SUBMIT</a></div>
                          <div style=" width:84px; height:30px; float:left;padding-right:10px;"> <a  class="button2" onClick="showCancel3();" style="cursor:pointer">Cancel</a></div>
                        </div>
                      </div></div>
                    </div>
                     <?php include "view_files/life_style.inc.php";?>
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
<?php include 'includes/bottom.php'?>



<div id="dvpopup-form1" style="text-align: center; width: 100%;position:absoulte;margin:0px; margin-top:15px;  display:none ">
  <table cellpadding="0" cellspacing="0" border="0" width="100%" align="center">
    <tr>
      <td style="text-align:right; border:solid 0px red; float:right"><div style="margin: 5px 0px 0px -23px; position: absolute; text-align:right"> <a href="javascript:Popup.hide('dvpopup-form1');" target="_parent" style="text-decoration: none; color: #fff;"> <img src="images/close.png" alt="" title="" border="0" /> </a> </div></td>
    </tr>
    <tr>
      <td valign="top" align="center" style="padding: 10px 10px 10px 10px;"><div class="DvFloat">
          <div class="TabDv">
            <div  style="background-color:#666666;padding:10px 5px;">
              <ul id="tabstabs15" class="shadetabs15">
                <li  class="selected"><a href="#" rel="tabs151" class="selected" >Food </a></li>
                <li><a href="#" rel="tabs152"  >Excercise</a></li>
                <li><a href="#" rel="tabs153">Measurements</a></li>
                <li><a href="#" rel="tabs154">Blood Pressure</a></li>
                <li><a href="#" rel="tabs155" >Sugar Profile</a></li>
                <li><a href="#" rel="tabs156"> Lifestyle</a></li>
                <li><a href="#" rel="tabs157">Lipid Profile </a></li>
              </ul>
            </div>
            <div class="TabContentDetails15">
              <div id="tabs151" class="tabcontent15">
                <div style="width:690px; " id="divtab12">
                  <div  style="padding:10px 0px; text-align:center; margin:0 auto">
                    <center>
                      <ul id="calorie_tab" class="calorie_tab">
                        <li class="selected"><a href="#" rel="tabs151a" >Breakfast</a></li>
                        <li><a href="#" rel="tabs152a"  >Lunch</a></li>
                        <li><a href="#" rel="tabs153a">Snacks</a></li>
                        <li><a href="#" rel="tabs154a">Dinner</a></li>
                        <li><a href="#" rel="tabs155a">Water</a></li>
                      </ul>
                    </center>
                  </div>
                  <div class="calorieTabContentDetails">
                    <div id="tabs151a" class="calorie_tabcontent">
                      <div style="width:698px; border:solid 0px red;">
                        <div class="DvFloat" style="padding:10px 0px; border-bottom:solid 0px #c5c5c5">
                          <div style="float:left; text-align:left; width:360px;">
                            <input type="text" value="" id="txtBreakfast_Search" name="txtBreakfast_Search" style="color:#000;width:350px; height:18px; background-image:url(images/calorie_setup/search_icon.png); background-repeat:no-repeat; background-position:98% 50%" placeholder="What did you have today ?">
                          </div>
                          <div style="float:left; text-align:left; padding-left:10px;"> <img src="images/calorie_setup/suggest_by_nutritionist.jpg" alt=""></div>
                        </div>
                        <div class="DvFloat" style="padding:0px 0px 0px 0px; border-bottom:solid 1px #c5c5c5; text-align:left"> <span style="font-size:13px; color:#87ac26">BREAKFAST</span> </div>
                        <div class="dvFloat" style="border-bottom:solid 0px #cdcdcd;padding:10px 0px 0px 0px">
                          <h3 class="mypetsA" >
                            <div class="DvFloat" style="padding:0px 0px 0px 0px; border-bottom:solid 0px #c5c5c5; text-align:left">
                              <table cellpadding="0" cellspacing="0" style="width:100%;">
                                <tr>
                                  <td class="Brkfast_td" style="padding:0px;"><img src="images/calorie_setup/left_arrow_brkfst.jpg" alt="" /></td>
                                  <td class="Brkfast_td" style="width:240px;">Nylon Khaman Dhokla</td>
                                  <td class="Brkfast_td"><input type="text"   value="" id="txtBreakfast_qty" name="txtBreakfast_qty" placeholder="1" style="width:50px"/></td>
                                  <td class="Brkfast_td"><input type="text"   value="" id="txtBreakfast_qty" name="txtBreakfast_name" placeholder="Besa, Rawa, Sugar, Oil" style="width:200px"/></td>
                                  <td class="Brkfast_td"><input type="text"   value="" id="txtBreakfast_qty" name="txtBreakfast_calorie" placeholder="238" style="width:50px"/></td>
                                  <td class="Brkfast_td"><img src="images/calorie_setup/delete.png"  alt="" align="absmiddle" /></td>
                                  <td class="Brkfast_td">&nbsp;</td>
                                </tr>
                              </table>
                            </div>
                          </h3>
                          <div class="thepetA">
                            <div class="DvFloat" style="padding:10px 0px 0px 0px; border-top:solid 0px #c5c5c5">
                              <table cellpadding="0" cellspacing="0" style="width:100%;">
                                <tr>
                                  <td class="whitebox_Td1">CALORIES</td>
                                  <td class="WhiteSpace_Td1"></td>
                                  <td class="whitebox_Td1">CARBS</td>
                                  <td class="WhiteSpace_Td1"></td>
                                  <td class="whitebox_Td1">FAT</td>
                                  <td class="WhiteSpace_Td1"></td>
                                  <td class="whitebox_Td1">PROTEIN</td>
                                  <td class="WhiteSpace_Td1"></td>
                                  <td class="whitebox_Td1">SODIUM</td>
                                  <td class="WhiteSpace_Td1"></td>
                                  <td class="whitebox_Td1">SUGAR</td>
                                  <td class="WhiteSpace_Td1"></td>
                                </tr>
                                <tr>
                                  <td class="LightGreybox_Td">260</td>
                                  <td class="WhiteSpace_Td1"></td>
                                  <td class="LightGreybox_Td">74.24</td>
                                  <td class="WhiteSpace_Td1"></td>
                                  <td class="LightGreybox_Td">3.41</td>
                                  <td class="WhiteSpace_Td1"></td>
                                  <td class="LightGreybox_Td">13.14</td>
                                  <td class="WhiteSpace_Td1"></td>
                                  <td class="LightGreybox_Td">1020</td>
                                  <td class="WhiteSpace_Td1"></td>
                                  <td class="LightGreybox_Td">15.69</td>
                                  <td class="WhiteSpace_Td1"></td>
                                </tr>
                                <tr>
                                  <td colspan="11" style="height:8px;padding:0px"></td>
                                </tr>
                                <tr>
                                  <td class="FullLightGreybox_Td" colspan="11"><b>MICRO NURIENTS:</b> Potassium(mg): 288,  Vitamin A (carotene-mcg): <b>51.6</b>, Vitamin B1 (mg): <b>0.2</b>, Vitamin B2 (mg): <b>0.1 </b> Vitamin B3 (mg): <b>1</b>, Vitamin C (mg): <b>0.4</b>, Calcium (mg): <b>22.4</b>, Zinc (mg): <b>0.7</b>, Phosphorous  (mg): <b>132.4</b> </td>
                                </tr>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div id="tabs152a" class="calorie_tabcontent">
                      <div style="width:698px; border:solid 0px red;">
                        <div class="DvFloat" style="padding:10px 0px; border-bottom:solid 0px #c5c5c5">
                          <div style="float:left; text-align:left; width:360px;">
                            <input type="text" value="" id="txtBreakfast_Search" name="txtBreakfast_Search" style="color:#000;width:350px; height:18px; background-image:url(images/calorie_setup/search_icon.png); background-repeat:no-repeat; background-position:98% 50%" placeholder="What did you have today ?">
                          </div>
                          <div style="float:left; text-align:left; padding-left:10px;"> <img src="images/calorie_setup/suggest_by_nutritionist.jpg" alt=""></div>
                        </div>
                        <div class="DvFloat" style="padding:0px 0px 0px 0px; border-bottom:solid 1px #c5c5c5; text-align:left"> <span style="font-size:13px; color:#87ac26">LUNCH</span> </div>
                        <div class="DvFloat" style="padding:10px 0px 0px 0px; border-bottom:solid 0px #c5c5c5; text-align:left">
                          <table cellpadding="0" cellspacing="0" style="width:97%;background-color:#f0f0f0">
                            <tr>
                              <td class="Brkfast_td" style="padding:0px;"><img src="images/calorie_setup/left_arrow_brkfst.jpg" alt="" /></td>
                              <td class="Brkfast_td" style="width:240px;">Nylon Khaman Dhokla</td>
                              <td class="Brkfast_td"><input type="text"   value="" id="txtBreakfast_qty" name="txtBreakfast_qty" placeholder="1" style="width:50px; color:#000000"/></td>
                              <td class="Brkfast_td"><input type="text"   value="" id="txtBreakfast_qty" name="txtBreakfast_name" placeholder="Besa, Rawa, Sugar, Oil" style="width:200px;; color:#000000"/></td>
                              <td class="Brkfast_td"><input type="text"   value="" id="txtBreakfast_qty" name="txtBreakfast_calorie" placeholder="238" style="width:50px; color:#000000"/></td>
                              <td class="Brkfast_td"><img src="images/calorie_setup/delete.png"  alt="" align="absmiddle" /></td>
                              <td class="Brkfast_td"><img src="images/calorie_setup/brkfast_arrow.png"  alt="" align="absmiddle" /></td>
                            </tr>
                          </table>
                        </div>
                        <div class="DvFloat" style="padding:10px 0px 0px 0px; border-bottom:solid 0px #c5c5c5">
                          <table cellpadding="0" cellspacing="0" style="width:100%;">
                            <tr>
                              <td class="whitebox_Td1">CALORIES</td>
                              <td class="WhiteSpace_Td1"></td>
                              <td class="whitebox_Td1">CARBS</td>
                              <td class="WhiteSpace_Td1"></td>
                              <td class="whitebox_Td1">FAT</td>
                              <td class="WhiteSpace_Td1"></td>
                              <td class="whitebox_Td1">PROTEIN</td>
                              <td class="WhiteSpace_Td1"></td>
                              <td class="whitebox_Td1">SODIUM</td>
                              <td class="WhiteSpace_Td1"></td>
                              <td class="whitebox_Td1">SUGAR</td>
                              <td class="WhiteSpace_Td1"></td>
                            </tr>
                            <tr>
                              <td class="LightGreybox_Td">260</td>
                              <td class="WhiteSpace_Td1"></td>
                              <td class="LightGreybox_Td">74.24</td>
                              <td class="WhiteSpace_Td1"></td>
                              <td class="LightGreybox_Td">3.41</td>
                              <td class="WhiteSpace_Td1"></td>
                              <td class="LightGreybox_Td">13.14</td>
                              <td class="WhiteSpace_Td1"></td>
                              <td class="LightGreybox_Td">1020</td>
                              <td class="WhiteSpace_Td1"></td>
                              <td class="LightGreybox_Td">15.69</td>
                              <td class="WhiteSpace_Td1"></td>
                            </tr>
                            <tr>
                              <td colspan="11" style="height:8px;padding:0px"></td>
                            </tr>
                            <tr>
                              <td class="FullLightGreybox_Td" colspan="11"><b>MICRO NURIENTS: Potassium(mg)</b>: <b>288</b>,  Vitamin A (carotene-mcg): <b>51.6</b>, Vitamin B1 (mg): <b>0.2</b>, Vitamin B2 (mg): <b>0.1 </b> Vitamin B3 (mg): <b>1</b>, Vitamin C (mg): <b>0.4</b>, Calcium (mg): <b>22.4</b>, Zinc (mg): <b>0.7</b>, Phosphorous  (mg): <b>132.4</b> </td>
                            </tr>
                          </table>
                        </div>
                      </div>
                    </div>
                    <div id="tabs153a" class="calorie_tabcontent">
                      <div style="width:698px; border:solid 0px red;">
                        <div class="DvFloat" style="padding:10px 0px; border-bottom:solid 0px #c5c5c5">
                          <div style="float:left; text-align:left; width:360px;">
                            <input type="text" value="" id="txtBreakfast_Search" name="txtBreakfast_Search" style="color:#000;width:350px; height:18px; background-image:url(images/calorie_setup/search_icon.png); background-repeat:no-repeat; background-position:98% 50%" placeholder="What did you have today ?">
                          </div>
                          <div style="float:left; text-align:left; padding-left:10px;"> <img src="images/calorie_setup/suggest_by_nutritionist.jpg" alt=""></div>
                        </div>
                        <div class="DvFloat" style="padding:0px 0px 0px 0px; border-bottom:solid 1px #c5c5c5; text-align:left"> <span style="font-size:13px; color:#87ac26">SNACKS</span> </div>
                        <div class="DvFloat" style="padding:10px 0px 0px 0px; border-bottom:solid 0px #c5c5c5; text-align:left">
                          <table cellpadding="0" cellspacing="0" style="width:97%;background-color:#f0f0f0">
                            <tr>
                              <td class="Brkfast_td" style="padding:0px;"><img src="images/calorie_setup/left_arrow_brkfst.jpg" alt="" /></td>
                              <td class="Brkfast_td" style="width:240px;">Nylon Khaman Dhokla</td>
                              <td class="Brkfast_td"><input type="text"   value="" id="txtBreakfast_qty" name="txtBreakfast_qty" placeholder="1" style="width:50px; color:#000000"/></td>
                              <td class="Brkfast_td"><input type="text"   value="" id="txtBreakfast_qty" name="txtBreakfast_name" placeholder="Besa, Rawa, Sugar, Oil" style="width:200px;; color:#000000"/></td>
                              <td class="Brkfast_td"><input type="text"   value="" id="txtBreakfast_qty" name="txtBreakfast_calorie" placeholder="238" style="width:50px; color:#000000"/></td>
                              <td class="Brkfast_td"><img src="images/calorie_setup/delete.png"  alt="" align="absmiddle" /></td>
                              <td class="Brkfast_td"><img src="images/calorie_setup/brkfast_arrow.png"  alt="" align="absmiddle" /></td>
                            </tr>
                          </table>
                        </div>
                        <div class="DvFloat" style="padding:10px 0px 0px 0px; border-bottom:solid 0px #c5c5c5">
                          <table cellpadding="0" cellspacing="0" style="width:100%;">
                            <tr>
                              <td class="whitebox_Td1">CALORIES</td>
                              <td class="WhiteSpace_Td1"></td>
                              <td class="whitebox_Td1">CARBS</td>
                              <td class="WhiteSpace_Td1"></td>
                              <td class="whitebox_Td1">FAT</td>
                              <td class="WhiteSpace_Td1"></td>
                              <td class="whitebox_Td1">PROTEIN</td>
                              <td class="WhiteSpace_Td1"></td>
                              <td class="whitebox_Td1">SODIUM</td>
                              <td class="WhiteSpace_Td1"></td>
                              <td class="whitebox_Td1">SUGAR</td>
                              <td class="WhiteSpace_Td1"></td>
                            </tr>
                            <tr>
                              <td class="LightGreybox_Td">260</td>
                              <td class="WhiteSpace_Td1"></td>
                              <td class="LightGreybox_Td">74.24</td>
                              <td class="WhiteSpace_Td1"></td>
                              <td class="LightGreybox_Td">3.41</td>
                              <td class="WhiteSpace_Td1"></td>
                              <td class="LightGreybox_Td">13.14</td>
                              <td class="WhiteSpace_Td1"></td>
                              <td class="LightGreybox_Td">1020</td>
                              <td class="WhiteSpace_Td1"></td>
                              <td class="LightGreybox_Td">15.69</td>
                              <td class="WhiteSpace_Td1"></td>
                            </tr>
                            <tr>
                              <td colspan="11" style="height:8px;padding:0px"></td>
                            </tr>
                            <tr>
                              <td class="FullLightGreybox_Td" colspan="11"><b>MICRO NURIENTS: Potassium(mg)</b>: <b>288</b>,  Vitamin A (carotene-mcg): <b>51.6</b>, Vitamin B1 (mg): <b>0.2</b>, Vitamin B2 (mg): <b>0.1 </b> Vitamin B3 (mg): <b>1</b>, Vitamin C (mg): <b>0.4</b>, Calcium (mg): <b>22.4</b>, Zinc (mg): <b>0.7</b>, Phosphorous  (mg): <b>132.4</b> </td>
                            </tr>
                          </table>
                        </div>
                      </div>
                    </div>
                    <div id="tabs154a" class="calorie_tabcontent">
                      <div style="width:698px; border:solid 0px red;">
                        <div class="DvFloat" style="padding:10px 0px; border-bottom:solid 0px #c5c5c5">
                          <div style="float:left; text-align:left; width:360px;">
                            <input type="text" value="" id="txtBreakfast_Search" name="txtBreakfast_Search" style="color:#000;width:350px; height:18px; background-image:url(images/calorie_setup/search_icon.png); background-repeat:no-repeat; background-position:98% 50%" placeholder="What did you have today ?">
                          </div>
                          <div style="float:left; text-align:left; padding-left:10px;"> <img src="images/calorie_setup/suggest_by_nutritionist.jpg" alt=""></div>
                        </div>
                        <div class="DvFloat" style="padding:0px 0px 0px 0px; border-bottom:solid 1px #c5c5c5; text-align:left"> <span style="font-size:13px; color:#87ac26">DINNER</span> </div>
                        <div class="DvFloat" style="padding:10px 0px 0px 0px; border-bottom:solid 0px #c5c5c5; text-align:left">
                          <table cellpadding="0" cellspacing="0" style="width:97%;background-color:#f0f0f0">
                            <tr>
                              <td class="Brkfast_td" style="padding:0px;"><img src="images/calorie_setup/left_arrow_brkfst.jpg" alt="" /></td>
                              <td class="Brkfast_td" style="width:240px;">Nylon Khaman Dhokla</td>
                              <td class="Brkfast_td"><input type="text"   value="" id="txtBreakfast_qty" name="txtBreakfast_qty" placeholder="1" style="width:50px; color:#000000"/></td>
                              <td class="Brkfast_td"><input type="text"   value="" id="txtBreakfast_qty" name="txtBreakfast_name" placeholder="Besa, Rawa, Sugar, Oil" style="width:200px;; color:#000000"/></td>
                              <td class="Brkfast_td"><input type="text"   value="" id="txtBreakfast_qty" name="txtBreakfast_calorie" placeholder="238" style="width:50px; color:#000000"/></td>
                              <td class="Brkfast_td"><img src="images/calorie_setup/delete.png"  alt="" align="absmiddle" /></td>
                              <td class="Brkfast_td"><img src="images/calorie_setup/brkfast_arrow.png"  alt="" align="absmiddle" /></td>
                            </tr>
                          </table>
                        </div>
                        <div class="DvFloat" style="padding:10px 0px 0px 0px; border-bottom:solid 0px #c5c5c5">
                          <table cellpadding="0" cellspacing="0" style="width:100%;">
                            <tr>
                              <td class="whitebox_Td1">CALORIES</td>
                              <td class="WhiteSpace_Td1"></td>
                              <td class="whitebox_Td1">CARBS</td>
                              <td class="WhiteSpace_Td1"></td>
                              <td class="whitebox_Td1">FAT</td>
                              <td class="WhiteSpace_Td1"></td>
                              <td class="whitebox_Td1">PROTEIN</td>
                              <td class="WhiteSpace_Td1"></td>
                              <td class="whitebox_Td1">SODIUM</td>
                              <td class="WhiteSpace_Td1"></td>
                              <td class="whitebox_Td1">SUGAR</td>
                              <td class="WhiteSpace_Td1"></td>
                            </tr>
                            <tr>
                              <td class="LightGreybox_Td">260</td>
                              <td class="WhiteSpace_Td1"></td>
                              <td class="LightGreybox_Td">74.24</td>
                              <td class="WhiteSpace_Td1"></td>
                              <td class="LightGreybox_Td">3.41</td>
                              <td class="WhiteSpace_Td1"></td>
                              <td class="LightGreybox_Td">13.14</td>
                              <td class="WhiteSpace_Td1"></td>
                              <td class="LightGreybox_Td">1020</td>
                              <td class="WhiteSpace_Td1"></td>
                              <td class="LightGreybox_Td">15.69</td>
                              <td class="WhiteSpace_Td1"></td>
                            </tr>
                            <tr>
                              <td colspan="11" style="height:8px;padding:0px"></td>
                            </tr>
                            <tr>
                              <td class="FullLightGreybox_Td" colspan="11"><b>MICRO NURIENTS: Potassium(mg)</b>: <b>288</b>,  Vitamin A (carotene-mcg): <b>51.6</b>, Vitamin B1 (mg): <b>0.2</b>, Vitamin B2 (mg): <b>0.1 </b> Vitamin B3 (mg): <b>1</b>, Vitamin C (mg): <b>0.4</b>, Calcium (mg): <b>22.4</b>, Zinc (mg): <b>0.7</b>, Phosphorous  (mg): <b>132.4</b> </td>
                            </tr>
                          </table>
                        </div>
                      </div>
                    </div>
                    <div id="tabs155a" class="calorie_tabcontent">
                      <div style="width:698px; border:solid 0px red;">
                        <div class="DvFloat" style="padding:10px 0px 0px 0px; border-bottom:solid 0px #c5c5c5; text-align:left">
                          <table cellpadding="0" cellspacing="0" style="width:97%;background-color:#f0f0f0">
                            <tr>
                              <td class="Brkfast_td" style="padding:0px;"><img src="images/calorie_setup/left_arrow_brkfst.jpg" alt="" /></td>
                              <td class="Brkfast_td" style="width:240px;">Nylon Khaman Dhokla</td>
                              <td class="Brkfast_td"><input type="text"   value="" id="txtBreakfast_qty" name="txtBreakfast_qty" placeholder="1" style="width:50px; color:#000000"/></td>
                              <td class="Brkfast_td"><input type="text"   value="" id="txtBreakfast_qty" name="txtBreakfast_name" placeholder="Besa, Rawa, Sugar, Oil" style="width:200px;; color:#000000"/></td>
                              <td class="Brkfast_td"><input type="text"   value="" id="txtBreakfast_qty" name="txtBreakfast_calorie" placeholder="238" style="width:50px; color:#000000"/></td>
                              <td class="Brkfast_td"><img src="images/calorie_setup/delete.png"  alt="" align="absmiddle" /></td>
                              <td class="Brkfast_td"><img src="images/calorie_setup/brkfast_arrow.png"  alt="" align="absmiddle" /></td>
                            </tr>
                          </table>
                        </div>
                        <div class="DvFloat" style="padding:10px 0px 0px 0px; border-bottom:solid 0px #c5c5c5">
                          <table cellpadding="0" cellspacing="0" style="width:100%;">
                            <tr>
                              <td class="whitebox_Td1">CALORIES</td>
                              <td class="WhiteSpace_Td1"></td>
                              <td class="whitebox_Td1">CARBS</td>
                              <td class="WhiteSpace_Td1"></td>
                              <td class="whitebox_Td1">FAT</td>
                              <td class="WhiteSpace_Td1"></td>
                              <td class="whitebox_Td1">PROTEIN</td>
                              <td class="WhiteSpace_Td1"></td>
                              <td class="whitebox_Td1">SODIUM</td>
                              <td class="WhiteSpace_Td1"></td>
                              <td class="whitebox_Td1">SUGAR</td>
                              <td class="WhiteSpace_Td1"></td>
                            </tr>
                            <tr>
                              <td class="LightGreybox_Td">260</td>
                              <td class="WhiteSpace_Td1"></td>
                              <td class="LightGreybox_Td">74.24</td>
                              <td class="WhiteSpace_Td1"></td>
                              <td class="LightGreybox_Td">3.41</td>
                              <td class="WhiteSpace_Td1"></td>
                              <td class="LightGreybox_Td">13.14</td>
                              <td class="WhiteSpace_Td1"></td>
                              <td class="LightGreybox_Td">1020</td>
                              <td class="WhiteSpace_Td1"></td>
                              <td class="LightGreybox_Td">15.69</td>
                              <td class="WhiteSpace_Td1"></td>
                            </tr>
                            <tr>
                              <td colspan="11" style="height:8px;padding:0px"></td>
                            </tr>
                            <tr>
                              <td class="FullLightGreybox_Td" colspan="11"><b>MICRO NURIENTS: Potassium(mg)</b>: <b>288</b>,  Vitamin A (carotene-mcg): <b>51.6</b>, Vitamin B1 (mg): <b>0.2</b>, Vitamin B2 (mg): <b>0.1 </b> Vitamin B3 (mg): <b>1</b>, Vitamin C (mg): <b>0.4</b>, Calcium (mg): <b>22.4</b>, Zinc (mg): <b>0.7</b>, Phosphorous  (mg): <b>132.4</b> </td>
                            </tr>
                          </table>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div id="tabs152" class="tabcontent15">
                <div class="DvFloat" style="padding:10px 0px; border-bottom:solid 0px #c5c5c5">
                  <div style="margin:0 auto; text-align:center; width:410px;">
                    <input type="text" value="" id="txtBreakfast_Search" name="txtBreakfast_Search" style="color:#999;width:400px; height:18px; background-image:url(images/calorie_setup/search_icon.png); background-repeat:no-repeat; background-position:98% 50%" placeholder="How did you burnt your calories today?">
                  </div>
                </div>
                <div class="DvFloat" style="padding:10px 0px 0px 0px; border-bottom:solid 0px #c5c5c5">
                  <table cellpadding="0" cellspacing="0" style="width:60%;background-color:#f0f0f0">
                    <tr>
                      <td class="Brkfast_td" style="padding:0px;"><img src="images/calorie_setup/left_arrow_brkfst.jpg" alt="" /></td>
                      <td class="Brkfast_td" style="width:460px;"> Running, 7.5mph (8 min mile)</td>
                      <td class="Brkfast_td"><input type="text"   value="" id="txtBreakfast_qty" name="txtBreakfast_qty" placeholder="60 mins" style="width:50px;color:#666"/></td>
                      <td class="Brkfast_td"><input type="text"   value="" id="txtBreakfast_calorie" name="txtBreakfast_calorie" placeholder="880 cal" style="width:50px;color:#666"/></td>
                      <td class="Brkfast_td"><img src="images/calorie_setup/delete.png"  alt="" align="absmiddle" /></td>
                      <td class="Brkfast_td"><img src="images/calorie_setup/brkfast_arrow.png"  alt="" align="absmiddle" /></td>
                    </tr>
                  </table>
                </div>
              </div>
              <div id="tabs153" class="tabcontent15">
                <div class="DvFloat" style="text-align:left; font-size:14px;">
                  <div class="DvFloat" style="padding:10px 0px 10px 0px; border-bottom:solid 1px #e4e4e4;text-align:left; font-size:14px;">
                    <table cellpadding="0" cellspacing="0" style="width:100%;text-align:left; font-size:14px;">
                      <tr>
                        <td class="whitebox_Td_DT" colspan="186" style="text-align:left; "><b>Current Weight </b> </td>
                      </tr>
                      <tr>
                        <td class="whitebox_Td_DT">Monday<br>
                          8-Jan-14 </td>
                        <td class="WhiteSpace_Td2"></td>
                        <td class="whitebox_Td_DT"> Tuesday<br>
                          9-Jan-14 </td>
                        <td class="WhiteSpace_Td2"></td>
                        <td class="whitebox_Td_DT">Wednesday<br>
                          10-Jan-14 </td>
                        <td class="WhiteSpace_Td2"></td>
                        <td class="whitebox_Td_DT">Thursday<br>
                          11-Jan-14</td>
                        <td class="WhiteSpace_Td2"></td>
                        <td class="whitebox_Td_DT">Friday<br>
                          12-Jan-14</td>
                        <td class="WhiteSpace_Td2"></td>
                        <td class="whitebox_Td_DT">Saturday<br>
                          13-Jan-14 </td>
                        <td class="WhiteSpace_Td2"></td>
                        <td class="whitebox_Td_DT">Sunday<br>
                          14-Jan-14</td>
                        <td class="WhiteSpace_Td2"></td>
                        <td class="whitebox_Td_DT">Week Total</td>
                        <td class="WhiteSpace_Td2"></td>
                      </tr>
                      <tr>
                        <td class="LightGreybox_Td_DT"><input type="text" value="" id="txtCurrent_Weight1" name="txtCurrent_Weight1" placeholder="kg" style="width:50px; text-align:center"></td>
                        <td class="WhiteSpace_Td2"></td>
                        <td class="LightGreybox_Td_DT"><input type="text" value="" id="txtCurrent_Weight2" name="txtCurrent_Weight2" placeholder="kg" style="width:50px; text-align:center"></td>
                        <td class="WhiteSpace_Td2"></td>
                        <td class="LightGreybox_Td_DT"><input type="text" value="" id="txtCurrent_Weight3" name="txtCurrent_Weight3" placeholder="kg" style="width:50px; text-align:center"></td>
                        <td class="WhiteSpace_Td2"></td>
                        <td class="LightGreybox_Td_DT"><input type="text" value="" id="txtCurrent_Weight4" name="txtCurrent_Weight4" placeholder="kg" style="width:50px; text-align:center"></td>
                        <td class="WhiteSpace_Td2"></td>
                        <td class="LightGreybox_Td_DT"><input type="text" value="" id="txtCurrent_Weight5" name="txtCurrent_Weight5" placeholder="kg" style="width:50px; text-align:center"></td>
                        <td class="WhiteSpace_Td2"></td>
                        <td class="LightGreybox_Td_DT"><input type="text" value="" id="txtCurrent_Weight6" name="txtCurrent_Weight6" placeholder="kg" style="width:50px; text-align:center"></td>
                        <td class="WhiteSpace_Td2"></td>
                        <td class="LightGreybox_Td_DT"><input type="text" value="" id="txtCurrent_Weight7" name="txtCurrent_Weight7" placeholder="kg" style="width:50px; text-align:center"></td>
                        <td class="WhiteSpace_Td2"></td>
                        <td class="whitebox_Td_DT"></td>
                        <td class="WhiteSpace_Td2"></td>
                      </tr>
                    </table>
                  </div>
                  <div class="DvFloat" style="padding:10px 0px 10px 0px; border-bottom:solid 1px #e4e4e4">
                    <table cellpadding="0" cellspacing="0" style="width:100%;">
                      <tr>
                        <td class="whitebox_Td_DT" colspan="16" style="text-align:left; "><b>Current Waist</b> </td>
                      </tr>
                      <tr>
                        <td class="whitebox_Td_DT">Monday<br>
                          8-Jan-14 </td>
                        <td class="WhiteSpace_Td2"></td>
                        <td class="whitebox_Td_DT"> Tuesday<br>
                          9-Jan-14 </td>
                        <td class="WhiteSpace_Td2"></td>
                        <td class="whitebox_Td_DT">Wednesday<br>
                          10-Jan-14 </td>
                        <td class="WhiteSpace_Td2"></td>
                        <td class="whitebox_Td_DT">Thursday<br>
                          11-Jan-14</td>
                        <td class="WhiteSpace_Td2"></td>
                        <td class="whitebox_Td_DT">Friday<br>
                          12-Jan-14</td>
                        <td class="WhiteSpace_Td2"></td>
                        <td class="whitebox_Td_DT">Saturday<br>
                          13-Jan-14 </td>
                        <td class="WhiteSpace_Td2"></td>
                        <td class="whitebox_Td_DT">Sunday<br>
                          14-Jan-14</td>
                        <td class="WhiteSpace_Td2"></td>
                        <td class="whitebox_Td_DT">Week Total</td>
                        <td class="WhiteSpace_Td2"></td>
                      </tr>
                      <tr>
                        <td class="LightGreybox_Td_DT"><input type="text" value="" id="txtCurrent_Waist1" name="txtCurrent_Waist1" placeholder="cm" style="width:50px; text-align:center"></td>
                        <td class="WhiteSpace_Td2"></td>
                        <td class="LightGreybox_Td_DT"><input type="text" value="" id="txtCurrent_Waist2" name="txtCurrent_Waist2" placeholder="cm" style="width:50px; text-align:center"></td>
                        <td class="WhiteSpace_Td2"></td>
                        <td class="LightGreybox_Td_DT"><input type="text" value="" id="txtCurrent_Waist3" name="txtCurrent_Waist3" placeholder="cm" style="width:50px; text-align:center"></td>
                        <td class="WhiteSpace_Td2"></td>
                        <td class="LightGreybox_Td_DT"><input type="text" value="" id="txtCurrent_Waist4" name="txtCurrent_Waist4" placeholder="cm" style="width:50px; text-align:center"></td>
                        <td class="WhiteSpace_Td2"></td>
                        <td class="LightGreybox_Td_DT"><input type="text" value="" id="txtCurrent_Waist5" name="txtCurrent_Waist5" placeholder="cm" style="width:50px; text-align:center"></td>
                        <td class="WhiteSpace_Td2"></td>
                        <td class="LightGreybox_Td_DT"><input type="text" value="" id="txtCurrent_Waist6" name="txtCurrent_Waist6" placeholder="cm" style="width:50px; text-align:center"></td>
                        <td class="WhiteSpace_Td2"></td>
                        <td class="LightGreybox_Td_DT"><input type="text" value="" id="txtCurrent_Waist7" name="txtCurrent_Waist7" placeholder="cm" style="width:50px; text-align:center"></td>
                        <td class="WhiteSpace_Td2"></td>
                        <td class="whitebox_Td_DT"></td>
                        <td class="WhiteSpace_Td2"></td>
                      </tr>
                    </table>
                  </div>
                  <div class="DvFloat" style="padding:10px 0px 10px 0px; border-bottom:solid 1px #e4e4e4">
                    <table cellpadding="0" cellspacing="0" style="width:100%;">
                      <tr>
                        <td class="whitebox_Td_DT" colspan="16" style="text-align:left; "><b>Current Hips </b> </td>
                      </tr>
                      <tr>
                        <td class="whitebox_Td_DT">Monday<br>
                          8-Jan-14 </td>
                        <td class="WhiteSpace_Td2"></td>
                        <td class="whitebox_Td_DT"> Tuesday<br>
                          9-Jan-14 </td>
                        <td class="WhiteSpace_Td2"></td>
                        <td class="whitebox_Td_DT">Wednesday<br>
                          10-Jan-14 </td>
                        <td class="WhiteSpace_Td2"></td>
                        <td class="whitebox_Td_DT">Thursday<br>
                          11-Jan-14</td>
                        <td class="WhiteSpace_Td2"></td>
                        <td class="whitebox_Td_DT">Friday<br>
                          12-Jan-14</td>
                        <td class="WhiteSpace_Td2"></td>
                        <td class="whitebox_Td_DT">Saturday<br>
                          13-Jan-14 </td>
                        <td class="WhiteSpace_Td2"></td>
                        <td class="whitebox_Td_DT">Sunday<br>
                          14-Jan-14</td>
                        <td class="WhiteSpace_Td2"></td>
                        <td class="whitebox_Td_DT">Week Total</td>
                        <td class="WhiteSpace_Td2"></td>
                      </tr>
                      <tr>
                        <td class="LightGreybox_Td_DT"><input type="text" value="" id="txtCurrent_Hips1" name="txtCurrent_Hips1" placeholder="cm" style="width:50px; text-align:center"></td>
                        <td class="WhiteSpace_Td2"></td>
                        <td class="LightGreybox_Td_DT"><input type="text" value="" id="txtCurrent_Hips2" name="txtCurrent_Hips2" placeholder="cm" style="width:50px; text-align:center"></td>
                        <td class="WhiteSpace_Td2"></td>
                        <td class="LightGreybox_Td_DT"><input type="text" value="" id="txtCurrent_Hips3" name="txtCurrent_Hips3" placeholder="cm" style="width:50px; text-align:center"></td>
                        <td class="WhiteSpace_Td2"></td>
                        <td class="LightGreybox_Td_DT"><input type="text" value="" id="txtCurrent_Hips4" name="txtCurrent_Hips4" placeholder="cm" style="width:50px; text-align:center"></td>
                        <td class="WhiteSpace_Td2"></td>
                        <td class="LightGreybox_Td_DT"><input type="text" value="" id="txtCurrent_Hips5" name="txtCurrent_Hips5" placeholder="cm" style="width:50px; text-align:center"></td>
                        <td class="WhiteSpace_Td2"></td>
                        <td class="LightGreybox_Td_DT"><input type="text" value="" id="txtCurrent_Hips6" name="txtCurrent_Hips6" placeholder="cm" style="width:50px; text-align:center"></td>
                        <td class="WhiteSpace_Td2"></td>
                        <td class="LightGreybox_Td_DT"><input type="text" value="" id="txtCurrent_Hips7" name="txtCurrent_Hips7" placeholder="cm" style="width:50px; text-align:center"></td>
                        <td class="WhiteSpace_Td2"></td>
                        <td class="whitebox_Td_DT"></td>
                        <td class="WhiteSpace_Td2"></td>
                      </tr>
                    </table>
                  </div>
                  <div class="DvFloat" style="padding:10px 0px 10px 0px; border-bottom:solid 1px #e4e4e4">
                    <table cellpadding="0" cellspacing="0" style="width:100%;">
                      <tr>
                        <td class="whitebox_Td_DT" colspan="16" style="text-align:left; "><b>Current Arms </b> </td>
                      </tr>
                      <tr>
                        <td class="whitebox_Td_DT">Monday<br>
                          8-Jan-14 </td>
                        <td class="WhiteSpace_Td2"></td>
                        <td class="whitebox_Td_DT"> Tuesday<br>
                          9-Jan-14 </td>
                        <td class="WhiteSpace_Td2"></td>
                        <td class="whitebox_Td_DT">Wednesday<br>
                          10-Jan-14 </td>
                        <td class="WhiteSpace_Td2"></td>
                        <td class="whitebox_Td_DT">Thursday<br>
                          11-Jan-14</td>
                        <td class="WhiteSpace_Td2"></td>
                        <td class="whitebox_Td_DT">Friday<br>
                          12-Jan-14</td>
                        <td class="WhiteSpace_Td2"></td>
                        <td class="whitebox_Td_DT">Saturday<br>
                          13-Jan-14 </td>
                        <td class="WhiteSpace_Td2"></td>
                        <td class="whitebox_Td_DT">Sunday<br>
                          14-Jan-14</td>
                        <td class="WhiteSpace_Td2"></td>
                        <td class="whitebox_Td_DT">Week Total</td>
                        <td class="WhiteSpace_Td2"></td>
                      </tr>
                      <tr>
                        <td class="LightGreybox_Td_DT"><input type="text" value="" id="txtCurrent_Arms1" name="txtCurrent_Arms1" placeholder="cm" style="width:50px; text-align:center"></td>
                        <td class="WhiteSpace_Td2"></td>
                        <td class="LightGreybox_Td_DT"><input type="text" value="" id="txtCurrent_Arms2" name="txtCurrent_Arms2" placeholder="cm" style="width:50px; text-align:center"></td>
                        <td class="WhiteSpace_Td2"></td>
                        <td class="LightGreybox_Td_DT"><input type="text" value="" id="txtCurrent_Arms3" name="txtCurrent_Arms3" placeholder="cm" style="width:50px; text-align:center"></td>
                        <td class="WhiteSpace_Td2"></td>
                        <td class="LightGreybox_Td_DT"><input type="text" value="" id="txtCurrent_Arms4" name="txtCurrent_Arms4" placeholder="cm" style="width:50px; text-align:center"></td>
                        <td class="WhiteSpace_Td2"></td>
                        <td class="LightGreybox_Td_DT"><input type="text" value="" id="txtCurrent_Arms5" name="txtCurrent_Arms5" placeholder="cm" style="width:50px; text-align:center"></td>
                        <td class="WhiteSpace_Td2"></td>
                        <td class="LightGreybox_Td_DT"><input type="text" value="" id="txtCurrent_Arms6" name="txtCurrent_Arms6" placeholder="cm" style="width:50px; text-align:center"></td>
                        <td class="WhiteSpace_Td2"></td>
                        <td class="LightGreybox_Td_DT"><input type="text" value="" id="txtCurrent_Arms7" name="txtCurrent_Arms7" placeholder="cm" style="width:50px; text-align:center"></td>
                        <td class="WhiteSpace_Td2"></td>
                        <td class="whitebox_Td_DT"></td>
                        <td class="WhiteSpace_Td2"></td>
                      </tr>
                    </table>
                  </div>
                </div>
              </div>
              <div id="tabs154" class="tabcontent15">
                <div class="DvFloat" style="padding:10px 0px 10px 0px; border-bottom:solid 1px #e4e4e4;text-align:left; font-size:14px;">
                  <table cellpadding="0" cellspacing="0" style="width:100%;text-align:left; font-size:14px;">
                    <tr>
                      <td class="whitebox_Td_DT" colspan="186" style="text-align:left; "><b>Bloood Pressure </b> </td>
                    </tr>
                    <tr>
                      <td class="whitebox_Td_DT">Monday<br>
                        8-Jan-14 </td>
                      <td class="WhiteSpace_Td2"></td>
                      <td class="whitebox_Td_DT"> Tuesday<br>
                        9-Jan-14 </td>
                      <td class="WhiteSpace_Td2"></td>
                      <td class="whitebox_Td_DT">Wednesday<br>
                        10-Jan-14 </td>
                      <td class="WhiteSpace_Td2"></td>
                      <td class="whitebox_Td_DT">Thursday<br>
                        11-Jan-14</td>
                      <td class="WhiteSpace_Td2"></td>
                      <td class="whitebox_Td_DT">Friday<br>
                        12-Jan-14</td>
                      <td class="WhiteSpace_Td2"></td>
                      <td class="whitebox_Td_DT">Saturday<br>
                        13-Jan-14 </td>
                      <td class="WhiteSpace_Td2"></td>
                      <td class="whitebox_Td_DT">Sunday<br>
                        14-Jan-14</td>
                      <td class="WhiteSpace_Td2"></td>
                      <td class="whitebox_Td_DT">Week Total</td>
                      <td class="WhiteSpace_Td2"></td>
                    </tr>
                    <tr>
                      <td class="LightGreybox_Td_DT"><input type="text" value="" id="txtBloood_Pressure1" name="txtBloood_Pressure1" placeholder="80 / 100
" style="width:60px; text-align:center"></td>
                      <td class="WhiteSpace_Td2"></td>
                      <td class="LightGreybox_Td_DT"><input type="text" value="" id="txtBloood_Pressure2" name="txtBloood_Pressure2" placeholder="" style="width:60px; text-align:center"></td>
                      <td class="WhiteSpace_Td2"></td>
                      <td class="LightGreybox_Td_DT"><input type="text" value="" id="txtBloood_Pressure3" name="txtBloood_Pressure3" placeholder="" style="width:60px; text-align:center"></td>
                      <td class="WhiteSpace_Td2"></td>
                      <td class="LightGreybox_Td_DT"><input type="text" value="" id="txtBloood_Pressure4" name="txtBloood_Pressure4" placeholder="" style="width:60px; text-align:center"></td>
                      <td class="WhiteSpace_Td2"></td>
                      <td class="LightGreybox_Td_DT"><input type="text" value="" id="txtBloood_Pressure5" name="txtBloood_Pressure5" placeholder="" style="width:60px; text-align:center"></td>
                      <td class="WhiteSpace_Td2"></td>
                      <td class="LightGreybox_Td_DT"><input type="text" value="" id="txtBloood_Pressure6" name="txtBloood_Pressure6" placeholder="" style="width:60px; text-align:center"></td>
                      <td class="WhiteSpace_Td2"></td>
                      <td class="LightGreybox_Td_DT"><input type="text" value="" id="txtBloood_Pressure7" name="txtBloood_Pressure7" placeholder="" style="width:60px; text-align:center"></td>
                      <td class="WhiteSpace_Td2"></td>
                      <td class="whitebox_Td_DT"></td>
                      <td class="WhiteSpace_Td2"></td>
                    </tr>
                  </table>
                </div>
              </div>
              <div id="tabs155" class="tabcontent15">
                <div class="DvFloat" style="padding:10px 0px 10px 0px; border-bottom:solid 1px #e4e4e4;text-align:left; font-size:14px;">
                  <table cellpadding="0" cellspacing="0" style="width:100%;text-align:left; font-size:14px;">
                    <tr>
                      <td class="whitebox_Td_DT" colspan="18" style="text-align:left; "><b>Fasting Blood Sugar </b> </td>
                    </tr>
                    <tr>
                      <td class="whitebox_Td_DT">&nbsp;</td>
                      <td class="WhiteSpace_Td2"></td>
                      <td class="whitebox_Td_DT">Monday<br>
                        8-Jan-14 </td>
                      <td class="WhiteSpace_Td2"></td>
                      <td class="whitebox_Td_DT"> Tuesday<br>
                        9-Jan-14 </td>
                      <td class="WhiteSpace_Td2"></td>
                      <td class="whitebox_Td_DT">Wednesday<br>
                        10-Jan-14 </td>
                      <td class="WhiteSpace_Td2"></td>
                      <td class="whitebox_Td_DT">Thursday<br>
                        11-Jan-14</td>
                      <td class="WhiteSpace_Td2"></td>
                      <td class="whitebox_Td_DT">Friday<br>
                        12-Jan-14</td>
                      <td class="WhiteSpace_Td2"></td>
                      <td class="whitebox_Td_DT">Saturday<br>
                        13-Jan-14 </td>
                      <td class="WhiteSpace_Td2"></td>
                      <td class="whitebox_Td_DT">Sunday<br>
                        14-Jan-14</td>
                      <td class="WhiteSpace_Td2"></td>
                      <td class="whitebox_Td_DT">Week Total</td>
                      <td class="WhiteSpace_Td2"></td>
                    </tr>
                    <tr>
                      <td class="LightGreybox_Td_DT"><input type="text" value="" id="txtCurrent_Waist1" name="txtCurrent_Waist1" placeholder="Results" style="width:50px; text-align:center"></td>
                      <td class="WhiteSpace_Td2"></td>
                      <td class="LightGreybox_Td_DT"><input type="text" value="" id="txtCurrent_Weight1" name="txtCurrent_Weight1" placeholder="mmgh" style="width:50px; text-align:center"></td>
                      <td class="WhiteSpace_Td2"></td>
                      <td class="LightGreybox_Td_DT"><input type="text" value="" id="txtCurrent_Weight2" name="txtCurrent_Weight2" placeholder="mmgh" style="width:50px; text-align:center"></td>
                      <td class="WhiteSpace_Td2"></td>
                      <td class="LightGreybox_Td_DT"><input type="text" value="" id="txtCurrent_Weight3" name="txtCurrent_Weight3" placeholder="mmgh" style="width:50px; text-align:center"></td>
                      <td class="WhiteSpace_Td2"></td>
                      <td class="LightGreybox_Td_DT"><input type="text" value="" id="txtCurrent_Weight4" name="txtCurrent_Weight4" placeholder="mmgh" style="width:50px; text-align:center"></td>
                      <td class="WhiteSpace_Td2"></td>
                      <td class="LightGreybox_Td_DT"><input type="text" value="" id="txtCurrent_Weight5" name="txtCurrent_Weight5" placeholder="mmgh" style="width:50px; text-align:center"></td>
                      <td class="WhiteSpace_Td2"></td>
                      <td class="LightGreybox_Td_DT"><input type="text" value="" id="txtCurrent_Weight6" name="txtCurrent_Weight6" placeholder="mmgh" style="width:50px; text-align:center"></td>
                      <td class="WhiteSpace_Td2"></td>
                      <td class="LightGreybox_Td_DT"><input type="text" value="" id="txtCurrent_Weight7" name="txtCurrent_Weight7" placeholder="mmgh" style="width:50px; text-align:center"></td>
                      <td class="WhiteSpace_Td2"></td>
                      <td class="whitebox_Td_DT"></td>
                      <td class="WhiteSpace_Td2"></td>
                    </tr>
                  </table>
                </div>
                <div class="DvFloat" style="padding:10px 0px 10px 0px; border-bottom:solid 1px #e4e4e4">
                  <table cellpadding="0" cellspacing="0" style="width:100%;">
                    <tr>
                      <td class="whitebox_Td_DT" colspan="18" style="text-align:left; "><b>PPBS </b> </td>
                    </tr>
                    <tr>
                      <td class="whitebox_Td_DT">&nbsp;</td>
                      <td class="WhiteSpace_Td2"></td>
                      <td class="whitebox_Td_DT">Monday<br>
                        8-Jan-14 </td>
                      <td class="WhiteSpace_Td2"></td>
                      <td class="whitebox_Td_DT"> Tuesday<br>
                        9-Jan-14 </td>
                      <td class="WhiteSpace_Td2"></td>
                      <td class="whitebox_Td_DT">Wednesday<br>
                        10-Jan-14 </td>
                      <td class="WhiteSpace_Td2"></td>
                      <td class="whitebox_Td_DT">Thursday<br>
                        11-Jan-14</td>
                      <td class="WhiteSpace_Td2"></td>
                      <td class="whitebox_Td_DT">Friday<br>
                        12-Jan-14</td>
                      <td class="WhiteSpace_Td2"></td>
                      <td class="whitebox_Td_DT">Saturday<br>
                        13-Jan-14 </td>
                      <td class="WhiteSpace_Td2"></td>
                      <td class="whitebox_Td_DT">Sunday<br>
                        14-Jan-14</td>
                      <td class="WhiteSpace_Td2"></td>
                      <td class="whitebox_Td_DT">Week Total</td>
                      <td class="WhiteSpace_Td2"></td>
                    </tr>
                    <tr>
                      <td class="LightGreybox_Td_DT"><input type="text" value="" id="txtCurrent_Waist1" name="txtCurrent_Waist1" placeholder="Results" style="width:50px; text-align:center"></td>
                      <td class="WhiteSpace_Td2"></td>
                      <td class="LightGreybox_Td_DT"><input type="text" value="" id="txtCurrent_Waist1" name="txtCurrent_Waist1" placeholder="mmgh" style="width:50px; text-align:center"></td>
                      <td class="WhiteSpace_Td2"></td>
                      <td class="LightGreybox_Td_DT"><input type="text" value="" id="txtCurrent_Waist2" name="txtCurrent_Waist2" placeholder="mmgh" style="width:50px; text-align:center"></td>
                      <td class="WhiteSpace_Td2"></td>
                      <td class="LightGreybox_Td_DT"><input type="text" value="" id="txtCurrent_Waist3" name="txtCurrent_Waist3" placeholder="mmgh" style="width:50px; text-align:center"></td>
                      <td class="WhiteSpace_Td2"></td>
                      <td class="LightGreybox_Td_DT"><input type="text" value="" id="txtCurrent_Waist4" name="txtCurrent_Waist4" placeholder="mmgh" style="width:50px; text-align:center"></td>
                      <td class="WhiteSpace_Td2"></td>
                      <td class="LightGreybox_Td_DT"><input type="text" value="" id="txtCurrent_Waist5" name="txtCurrent_Waist5" placeholder="mmgh" style="width:50px; text-align:center"></td>
                      <td class="WhiteSpace_Td2"></td>
                      <td class="LightGreybox_Td_DT"><input type="text" value="" id="txtCurrent_Waist6" name="txtCurrent_Waist6" placeholder="mmgh" style="width:50px; text-align:center"></td>
                      <td class="WhiteSpace_Td2"></td>
                      <td class="LightGreybox_Td_DT"><input type="text" value="" id="txtCurrent_Waist7" name="txtCurrent_Waist7" placeholder="mmgh" style="width:50px; text-align:center"></td>
                      <td class="WhiteSpace_Td2"></td>
                      <td class="whitebox_Td_DT"></td>
                      <td class="WhiteSpace_Td2"></td>
                    </tr>
                  </table>
                </div>
                <div class="DvFloat" style="padding:10px 0px 10px 0px; border-bottom:solid 1px #e4e4e4">
                  <table cellpadding="0" cellspacing="0" style="width:100%;">
                    <tr>
                      <td class="whitebox_Td_DT" colspan="18" style="text-align:left; "><b>Urine Blood Sugar </b> </td>
                    </tr>
                    <tr>
                      <td class="whitebox_Td_DT">&nbsp;</td>
                      <td class="WhiteSpace_Td2"></td>
                      <td class="whitebox_Td_DT">Monday<br>
                        8-Jan-14 </td>
                      <td class="WhiteSpace_Td2"></td>
                      <td class="whitebox_Td_DT"> Tuesday<br>
                        9-Jan-14 </td>
                      <td class="WhiteSpace_Td2"></td>
                      <td class="whitebox_Td_DT">Wednesday<br>
                        10-Jan-14 </td>
                      <td class="WhiteSpace_Td2"></td>
                      <td class="whitebox_Td_DT">Thursday<br>
                        11-Jan-14</td>
                      <td class="WhiteSpace_Td2"></td>
                      <td class="whitebox_Td_DT">Friday<br>
                        12-Jan-14</td>
                      <td class="WhiteSpace_Td2"></td>
                      <td class="whitebox_Td_DT">Saturday<br>
                        13-Jan-14 </td>
                      <td class="WhiteSpace_Td2"></td>
                      <td class="whitebox_Td_DT">Sunday<br>
                        14-Jan-14</td>
                      <td class="WhiteSpace_Td2"></td>
                      <td class="whitebox_Td_DT">Week Total</td>
                      <td class="WhiteSpace_Td2"></td>
                    </tr>
                    <tr>
                      <td class="LightGreybox_Td_DT"><input type="text" value="" id="txtCurrent_Waist1" name="txtCurrent_Waist1" placeholder="Results" style="width:50px; text-align:center"></td>
                      <td class="WhiteSpace_Td2"></td>
                      <td class="LightGreybox_Td_DT"><input type="text" value="" id="txtCurrent_Hips1" name="txtCurrent_Hips1" placeholder="mmgh" style="width:50px; text-align:center"></td>
                      <td class="WhiteSpace_Td2"></td>
                      <td class="LightGreybox_Td_DT"><input type="text" value="" id="txtCurrent_Hips2" name="txtCurrent_Hips2" placeholder="mmgh" style="width:50px; text-align:center"></td>
                      <td class="WhiteSpace_Td2"></td>
                      <td class="LightGreybox_Td_DT"><input type="text" value="" id="txtCurrent_Hips3" name="txtCurrent_Hips3" placeholder="mmgh" style="width:50px; text-align:center"></td>
                      <td class="WhiteSpace_Td2"></td>
                      <td class="LightGreybox_Td_DT"><input type="text" value="" id="txtCurrent_Hips4" name="txtCurrent_Hips4" placeholder="mmgh" style="width:50px; text-align:center"></td>
                      <td class="WhiteSpace_Td2"></td>
                      <td class="LightGreybox_Td_DT"><input type="text" value="" id="txtCurrent_Hips5" name="txtCurrent_Hips5" placeholder="mmgh" style="width:50px; text-align:center"></td>
                      <td class="WhiteSpace_Td2"></td>
                      <td class="LightGreybox_Td_DT"><input type="text" value="" id="txtCurrent_Hips6" name="txtCurrent_Hips6" placeholder="mmgh" style="width:50px; text-align:center"></td>
                      <td class="WhiteSpace_Td2"></td>
                      <td class="LightGreybox_Td_DT"><input type="text" value="" id="txtCurrent_Hips7" name="txtCurrent_Hips7" placeholder="mmgh" style="width:50px; text-align:center"></td>
                      <td class="WhiteSpace_Td2"></td>
                      <td class="whitebox_Td_DT"></td>
                      <td class="WhiteSpace_Td2"></td>
                    </tr>
                  </table>
                </div>
                <div class="DvFloat" style="padding:10px 0px 10px 0px; border-bottom:solid 1px #e4e4e4">
                  <table cellpadding="0" cellspacing="0" style="width:100%;">
                    <tr>
                      <td class="whitebox_Td_DT" colspan="18" style="text-align:left; "><b>Random Blood Sugar </b> </td>
                    </tr>
                    <tr>
                      <td class="whitebox_Td_DT">&nbsp;</td>
                      <td class="WhiteSpace_Td2"></td>
                      <td class="whitebox_Td_DT">Monday<br>
                        8-Jan-14 </td>
                      <td class="WhiteSpace_Td2"></td>
                      <td class="whitebox_Td_DT"> Tuesday<br>
                        9-Jan-14 </td>
                      <td class="WhiteSpace_Td2"></td>
                      <td class="whitebox_Td_DT">Wednesday<br>
                        10-Jan-14 </td>
                      <td class="WhiteSpace_Td2"></td>
                      <td class="whitebox_Td_DT">Thursday<br>
                        11-Jan-14</td>
                      <td class="WhiteSpace_Td2"></td>
                      <td class="whitebox_Td_DT">Friday<br>
                        12-Jan-14</td>
                      <td class="WhiteSpace_Td2"></td>
                      <td class="whitebox_Td_DT">Saturday<br>
                        13-Jan-14 </td>
                      <td class="WhiteSpace_Td2"></td>
                      <td class="whitebox_Td_DT">Sunday<br>
                        14-Jan-14</td>
                      <td class="WhiteSpace_Td2"></td>
                      <td class="whitebox_Td_DT">Week Total</td>
                      <td class="WhiteSpace_Td2"></td>
                    </tr>
                    <tr>
                      <td class="LightGreybox_Td_DT"><input type="text" value="" id="txtCurrent_Waist1" name="txtCurrent_Waist1" placeholder="Results" style="width:50px; text-align:center"></td>
                      <td class="WhiteSpace_Td2"></td>
                      <td class="LightGreybox_Td_DT"><input type="text" value="" id="txtCurrent_Arms1" name="txtCurrent_Arms1" placeholder="mmgh" style="width:50px; text-align:center"></td>
                      <td class="WhiteSpace_Td2"></td>
                      <td class="LightGreybox_Td_DT"><input type="text" value="" id="txtCurrent_Arms2" name="txtCurrent_Arms2" placeholder="mmgh" style="width:50px; text-align:center"></td>
                      <td class="WhiteSpace_Td2"></td>
                      <td class="LightGreybox_Td_DT"><input type="text" value="" id="txtCurrent_Arms3" name="txtCurrent_Arms3" placeholder="mmgh" style="width:50px; text-align:center"></td>
                      <td class="WhiteSpace_Td2"></td>
                      <td class="LightGreybox_Td_DT"><input type="text" value="" id="txtCurrent_Arms4" name="txtCurrent_Arms4" placeholder="mmgh" style="width:50px; text-align:center"></td>
                      <td class="WhiteSpace_Td2"></td>
                      <td class="LightGreybox_Td_DT"><input type="text" value="" id="txtCurrent_Arms5" name="txtCurrent_Arms5" placeholder="mmgh" style="width:50px; text-align:center"></td>
                      <td class="WhiteSpace_Td2"></td>
                      <td class="LightGreybox_Td_DT"><input type="text" value="" id="txtCurrent_Arms6" name="txtCurrent_Arms6" placeholder="mmgh" style="width:50px; text-align:center"></td>
                      <td class="WhiteSpace_Td2"></td>
                      <td class="LightGreybox_Td_DT"><input type="text" value="" id="txtCurrent_Arms7" name="txtCurrent_Arms7" placeholder="mmgh" style="width:50px; text-align:center"></td>
                      <td class="WhiteSpace_Td2"></td>
                      <td class="whitebox_Td_DT"></td>
                      <td class="WhiteSpace_Td2"></td>
                    </tr>
                  </table>
                </div>
              </div>
              <div id="tabs156" class="tabcontent15">
                <div class="DvFloat" style="padding:10px 0px 10px 0px; border-bottom:solid 1px #e4e4e4;text-align:left; font-size:14px;">
                  <table cellpadding="0" cellspacing="0" style="width:100%;text-align:left; font-size:14px;">
                    <tr>
                      <td class="whitebox_Td_DT" colspan="186" style="text-align:left; "><b>Spirit </b> </td>
                    </tr>
                    <tr>
                      <td class="whitebox_Td_DT">Monday<br>
                        8-Jan-14 </td>
                      <td class="WhiteSpace_Td2"></td>
                      <td class="whitebox_Td_DT"> Tuesday<br>
                        9-Jan-14 </td>
                      <td class="WhiteSpace_Td2"></td>
                      <td class="whitebox_Td_DT">Wednesday<br>
                        10-Jan-14 </td>
                      <td class="WhiteSpace_Td2"></td>
                      <td class="whitebox_Td_DT">Thursday<br>
                        11-Jan-14</td>
                      <td class="WhiteSpace_Td2"></td>
                      <td class="whitebox_Td_DT">Friday<br>
                        12-Jan-14</td>
                      <td class="WhiteSpace_Td2"></td>
                      <td class="whitebox_Td_DT">Saturday<br>
                        13-Jan-14 </td>
                      <td class="WhiteSpace_Td2"></td>
                      <td class="whitebox_Td_DT">Sunday<br>
                        14-Jan-14</td>
                      <td class="WhiteSpace_Td2"></td>
                      <td class="whitebox_Td_DT">Week Total</td>
                      <td class="WhiteSpace_Td2"></td>
                    </tr>
                    <tr>
                      <td class="LightGreybox_Td_DT"><input type="text" value="" id="txtSpirit1" name="txtSpirit1" placeholder="" style="width:50px; text-align:center"></td>
                      <td class="WhiteSpace_Td2"></td>
                      <td class="LightGreybox_Td_DT"><input type="text" value="" id="txtSpirit2" name="txtSpirit2" placeholder="" style="width:50px; text-align:center"></td>
                      <td class="WhiteSpace_Td2"></td>
                      <td class="LightGreybox_Td_DT"><input type="text" value="" id="txtSpirit3" name="txtSpirit3" placeholder="" style="width:50px; text-align:center"></td>
                      <td class="WhiteSpace_Td2"></td>
                      <td class="LightGreybox_Td_DT"><input type="text" value="" id="txtSpirit4" name="txtSpirit4" placeholder="" style="width:50px; text-align:center"></td>
                      <td class="WhiteSpace_Td2"></td>
                      <td class="LightGreybox_Td_DT"><input type="text" value="" id="txtSpirit5" name="txtSpirit5" placeholder="" style="width:50px; text-align:center"></td>
                      <td class="WhiteSpace_Td2"></td>
                      <td class="LightGreybox_Td_DT"><input type="text" value="" id="txtSpirit6" name="txtSpirit6" placeholder="" style="width:50px; text-align:center"></td>
                      <td class="WhiteSpace_Td2"></td>
                      <td class="LightGreybox_Td_DT"><input type="text" value="" id="txtSpirit7" name="txtSpirit7" placeholder="" style="width:50px; text-align:center"></td>
                      <td class="WhiteSpace_Td2"></td>
                      <td class="whitebox_Td_DT"></td>
                      <td class="WhiteSpace_Td2"></td>
                    </tr>
                  </table>
                </div>
                <div class="DvFloat" style="padding:10px 0px 10px 0px; border-bottom:solid 1px #e4e4e4">
                  <table cellpadding="0" cellspacing="0" style="width:100%;">
                    <tr>
                      <td class="whitebox_Td_DT" colspan="16" style="text-align:left; "><b>Beer</b> </td>
                    </tr>
                    <tr>
                      <td class="whitebox_Td_DT">Monday<br>
                        8-Jan-14 </td>
                      <td class="WhiteSpace_Td2"></td>
                      <td class="whitebox_Td_DT"> Tuesday<br>
                        9-Jan-14 </td>
                      <td class="WhiteSpace_Td2"></td>
                      <td class="whitebox_Td_DT">Wednesday<br>
                        10-Jan-14 </td>
                      <td class="WhiteSpace_Td2"></td>
                      <td class="whitebox_Td_DT">Thursday<br>
                        11-Jan-14</td>
                      <td class="WhiteSpace_Td2"></td>
                      <td class="whitebox_Td_DT">Friday<br>
                        12-Jan-14</td>
                      <td class="WhiteSpace_Td2"></td>
                      <td class="whitebox_Td_DT">Saturday<br>
                        13-Jan-14 </td>
                      <td class="WhiteSpace_Td2"></td>
                      <td class="whitebox_Td_DT">Sunday<br>
                        14-Jan-14</td>
                      <td class="WhiteSpace_Td2"></td>
                      <td class="whitebox_Td_DT">Week Total</td>
                      <td class="WhiteSpace_Td2"></td>
                    </tr>
                    <tr>
                      <td class="LightGreybox_Td_DT"><input type="text" value="" id="txtBeer1" name="txtBeer1" placeholder="" style="width:50px; text-align:center"></td>
                      <td class="WhiteSpace_Td2"></td>
                      <td class="LightGreybox_Td_DT"><input type="text" value="" id="txtBeer2" name="txtBeer2" placeholder="" style="width:50px; text-align:center"></td>
                      <td class="WhiteSpace_Td2"></td>
                      <td class="LightGreybox_Td_DT"><input type="text" value="" id="txtBeer3" name="txtBeer3" placeholder="" style="width:50px; text-align:center"></td>
                      <td class="WhiteSpace_Td2"></td>
                      <td class="LightGreybox_Td_DT"><input type="text" value="" id="txtBeer4" name="txtBeer4" placeholder="" style="width:50px; text-align:center"></td>
                      <td class="WhiteSpace_Td2"></td>
                      <td class="LightGreybox_Td_DT"><input type="text" value="" id="txtBeer5" name="txtBeer5" placeholder="" style="width:50px; text-align:center"></td>
                      <td class="WhiteSpace_Td2"></td>
                      <td class="LightGreybox_Td_DT"><input type="text" value="" id="txtBeer6" name="txtBeer6" placeholder="" style="width:50px; text-align:center"></td>
                      <td class="WhiteSpace_Td2"></td>
                      <td class="LightGreybox_Td_DT"><input type="text" value="" id="txtBeer7" name="txtBeer7" placeholder="" style="width:50px; text-align:center"></td>
                      <td class="WhiteSpace_Td2"></td>
                      <td class="whitebox_Td_DT"></td>
                      <td class="WhiteSpace_Td2"></td>
                    </tr>
                  </table>
                </div>
                <div class="DvFloat" style="padding:10px 0px 10px 0px; border-bottom:solid 1px #e4e4e4">
                  <table cellpadding="0" cellspacing="0" style="width:100%;">
                    <tr>
                      <td class="whitebox_Td_DT" colspan="16" style="text-align:left; "><b>Cigarette </b> </td>
                    </tr>
                    <tr>
                      <td class="whitebox_Td_DT">Monday<br>
                        8-Jan-14 </td>
                      <td class="WhiteSpace_Td2"></td>
                      <td class="whitebox_Td_DT"> Tuesday<br>
                        9-Jan-14 </td>
                      <td class="WhiteSpace_Td2"></td>
                      <td class="whitebox_Td_DT">Wednesday<br>
                        10-Jan-14 </td>
                      <td class="WhiteSpace_Td2"></td>
                      <td class="whitebox_Td_DT">Thursday<br>
                        11-Jan-14</td>
                      <td class="WhiteSpace_Td2"></td>
                      <td class="whitebox_Td_DT">Friday<br>
                        12-Jan-14</td>
                      <td class="WhiteSpace_Td2"></td>
                      <td class="whitebox_Td_DT">Saturday<br>
                        13-Jan-14 </td>
                      <td class="WhiteSpace_Td2"></td>
                      <td class="whitebox_Td_DT">Sunday<br>
                        14-Jan-14</td>
                      <td class="WhiteSpace_Td2"></td>
                      <td class="whitebox_Td_DT">Week Total</td>
                      <td class="WhiteSpace_Td2"></td>
                    </tr>
                    <tr>
                      <td class="LightGreybox_Td_DT"><input type="text" value="" id="txtCurrent_Hips1" name="txtCurrent_Hips1" placeholder="" style="width:50px; text-align:center"></td>
                      <td class="WhiteSpace_Td2"></td>
                      <td class="LightGreybox_Td_DT"><input type="text" value="" id="txtCurrent_Hips2" name="txtCurrent_Hips2" placeholder="" style="width:50px; text-align:center"></td>
                      <td class="WhiteSpace_Td2"></td>
                      <td class="LightGreybox_Td_DT"><input type="text" value="" id="txtCurrent_Hips3" name="txtCurrent_Hips3" placeholder="" style="width:50px; text-align:center"></td>
                      <td class="WhiteSpace_Td2"></td>
                      <td class="LightGreybox_Td_DT"><input type="text" value="" id="txtCurrent_Hips4" name="txtCurrent_Hips4" placeholder="" style="width:50px; text-align:center"></td>
                      <td class="WhiteSpace_Td2"></td>
                      <td class="LightGreybox_Td_DT"><input type="text" value="" id="txtCurrent_Hips5" name="txtCurrent_Hips5" placeholder="" style="width:50px; text-align:center"></td>
                      <td class="WhiteSpace_Td2"></td>
                      <td class="LightGreybox_Td_DT"><input type="text" value="" id="txtCurrent_Hips6" name="txtCurrent_Hips6" placeholder="" style="width:50px; text-align:center"></td>
                      <td class="WhiteSpace_Td2"></td>
                      <td class="LightGreybox_Td_DT"><input type="text" value="" id="txtCurrent_Hips7" name="txtCurrent_Hips7" placeholder="" style="width:50px; text-align:center"></td>
                      <td class="WhiteSpace_Td2"></td>
                      <td class="whitebox_Td_DT"></td>
                      <td class="WhiteSpace_Td2"></td>
                    </tr>
                  </table>
                </div>
                <div class="DvFloat" style="padding:10px 0px 10px 0px; border-bottom:solid 1px #e4e4e4">
                  <table cellpadding="0" cellspacing="0" style="width:100%;">
                    <tr>
                      <td class="whitebox_Td_DT" colspan="16" style="text-align:left; "><b>Sleep </b> </td>
                    </tr>
                    <tr>
                      <td class="whitebox_Td_DT">Monday<br>
                        8-Jan-14 </td>
                      <td class="WhiteSpace_Td2"></td>
                      <td class="whitebox_Td_DT"> Tuesday<br>
                        9-Jan-14 </td>
                      <td class="WhiteSpace_Td2"></td>
                      <td class="whitebox_Td_DT">Wednesday<br>
                        10-Jan-14 </td>
                      <td class="WhiteSpace_Td2"></td>
                      <td class="whitebox_Td_DT">Thursday<br>
                        11-Jan-14</td>
                      <td class="WhiteSpace_Td2"></td>
                      <td class="whitebox_Td_DT">Friday<br>
                        12-Jan-14</td>
                      <td class="WhiteSpace_Td2"></td>
                      <td class="whitebox_Td_DT">Saturday<br>
                        13-Jan-14 </td>
                      <td class="WhiteSpace_Td2"></td>
                      <td class="whitebox_Td_DT">Sunday<br>
                        14-Jan-14</td>
                      <td class="WhiteSpace_Td2"></td>
                      <td class="whitebox_Td_DT">Week Total</td>
                      <td class="WhiteSpace_Td2"></td>
                    </tr>
                    <tr>
                      <td class="LightGreybox_Td_DT"><input type="text" value="" id="txtSleep1" name="txtSleep1" placeholder="" style="width:50px; text-align:center"></td>
                      <td class="WhiteSpace_Td2"></td>
                      <td class="LightGreybox_Td_DT"><input type="text" value="" id="txtSleep2" name="txtSleep2" placeholder="" style="width:50px; text-align:center"></td>
                      <td class="WhiteSpace_Td2"></td>
                      <td class="LightGreybox_Td_DT"><input type="text" value="" id="txtSleep3" name="txtSleep3" placeholder="" style="width:50px; text-align:center"></td>
                      <td class="WhiteSpace_Td2"></td>
                      <td class="LightGreybox_Td_DT"><input type="text" value="" id="txtSleep4" name="txtSleep4" placeholder="" style="width:50px; text-align:center"></td>
                      <td class="WhiteSpace_Td2"></td>
                      <td class="LightGreybox_Td_DT"><input type="text" value="" id="txtSleep5" name="txtSleep5" placeholder="" style="width:50px; text-align:center"></td>
                      <td class="WhiteSpace_Td2"></td>
                      <td class="LightGreybox_Td_DT"><input type="text" value="" id="txtSleep6" name="txtSleep6" placeholder="" style="width:50px; text-align:center"></td>
                      <td class="WhiteSpace_Td2"></td>
                      <td class="LightGreybox_Td_DT"><input type="text" value="" id="txtSleep7" name="txtSleep7" placeholder="" style="width:50px; text-align:center"></td>
                      <td class="WhiteSpace_Td2"></td>
                      <td class="whitebox_Td_DT"></td>
                      <td class="WhiteSpace_Td2"></td>
                    </tr>
                  </table>
                </div>
              </div>
              <div id="tabs157" class="tabcontent15">
                <div  style="width:98%; border:solid 0px red;">
                  <div class="dvFloat formpadding1" style="padding:10px 0px 0px 0px;">
                    <div class="formlabel1-3">
                      <label class="formlabel1-1p">&nbsp;</label>
                    </div>
                    <div class="formcontrol2-3">
                      <label>Triglyceride </label>
                    </div>
                    <div class="formcontrol2-3">
                      <label>LDL</label>
                    </div>
                    <div class="formcontrol2-3">
                      <label>HDL</label>
                    </div>
                    <div class="formcontrol2-3">
                      <label>Cholesterol</label>
                    </div>
                  </div>
                  <!--<div class="dvFloat formpadding1">
                    <div class="formlabel1-3">
                      <label class="formlabel1-1p">Lipid <span class="redtxt">*</span></label>
                    </div>
                    <div class="formcontrol2-3">
                      <select id="lipid_Triglyceride"  title="" style="width: 165px;">
                        <option value="Select">Select</option>
                      </select>
                    </div>
                    <div class="formcontrol2-3">
                      <select id="lipid_LDL"  title="" style="width: 165px;">
                        <option value="Select">Select</option>
                      </select>
                    </div>
                    <div class="formcontrol2-3">
                      <select id="lipid_HDL"  title="" style="width: 165px;">
                        <option value="Select">Select</option>
                      </select>
                    </div>
                    <div class="formcontrol2-3">
                      <select id="lipid_Cholesterol"  title="" style="width: 165px;">
                        <option value="Select">Select</option>
                      </select>
                    </div>
                  </div>-->
                  <div class="dvFloat formpadding1">
                    <div class="formlabel1-3">
                      <label class="formlabel1-1p">Date <span class="redtxt">*</span></label>
                    </div>
                    <div class="formcontrol2-3">
                      <div class="dvFloat">
                        <div style="float:left; padding:0px 7px 0px 0px">
                          <select id="Lipid_Triglyceride_Date" title="" style="width:45px;">
                            <option value="DD">DD</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                            <option>8</option>
                            <option>9</option>
                            <option>10</option>
                            <option>11</option>
                            <option>12</option>
                            <option>13</option>
                            <option>14</option>
                            <option>15</option>
                            <option>16</option>
                            <option>17</option>
                            <option>18</option>
                            <option>19</option>
                            <option>20</option>
                            <option>21</option>
                            <option>22</option>
                            <option>23</option>
                            <option>24</option>
                            <option>25</option>
                            <option>26</option>
                            <option>27</option>
                            <option>28</option>
                            <option>29</option>
                            <option>30</option>
                            <option>31</option>
                          </select>
                        </div>
                        <div style="float:left; padding:0px 7px 0px 0px">
                          <select id="Lipid_Triglyceride_Month" title="" style="width:45px;">
                            <option value="MM">MM</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                            <option>8</option>
                            <option>9</option>
                            <option>10</option>
                            <option>11</option>
                            <option>12</option>
                          </select>
                        </div>
                        <div style="float:left; padding:0px 0px 0px 0px">
                          <select id="Lipid_Triglyceride_Year" title="" style="width:55px;">
                            <option value="YYYY">YYYY</option>
                            <option>2006</option>
                            <option>2007</option>
                            <option>2008</option>
                            <option>2009</option>
                            <option>2014</option>
                            <option>2010</option>
                            <option>2011</option>
                            <option>2012</option>
                            <option>2013</option>
                            <option>2014</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="formcontrol2-3">

                      <div class="dvFloat">
                        <div style="float:left; padding:0px 7px 0px 0px">
                          <select id="lipid_LDL_Date" title="" style="width:45px;">
                            <option value="DD">DD</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                            <option>8</option>
                            <option>9</option>
                            <option>10</option>
                            <option>11</option>
                            <option>12</option>
                            <option>13</option>
                            <option>14</option>
                            <option>15</option>
                            <option>16</option>
                            <option>17</option>
                            <option>18</option>
                            <option>19</option>
                            <option>20</option>
                            <option>21</option>
                            <option>22</option>
                            <option>23</option>
                            <option>24</option>
                            <option>25</option>
                            <option>26</option>
                            <option>27</option>
                            <option>28</option>
                            <option>29</option>
                            <option>30</option>
                            <option>31</option>
                          </select>
                        </div>
                        <div style="float:left; padding:0px 7px 0px 0px">
                          <select id="lipid_LDL_Month" title="" style="width:45px;">
                            <option value="MM">MM</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                            <option>8</option>
                            <option>9</option>
                            <option>10</option>
                            <option>11</option>
                            <option>12</option>
                          </select>
                        </div>
                        <div style="float:left; padding:0px 0px 0px 0px">
                          <select id="lipid_LDL_Year" title="" style="width:55px;">
                            <option value="YYYY">YYYY</option>
                            <option>2006</option>
                            <option>2007</option>
                            <option>2008</option>
                            <option>2009</option>
                            <option>2014</option>
                            <option>2010</option>
                            <option>2011</option>
                            <option>2012</option>
                            <option>2013</option>
                            <option>2014</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="formcontrol2-3">
                      <div class="dvFloat">
                        <div style="float:left; padding:0px 7px 0px 0px">
                          <select id="lipid_HDL_Date" title="" style="width:45px;">
                            <option value="DD">DD</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                            <option>8</option>
                            <option>9</option>
                            <option>10</option>
                            <option>11</option>
                            <option>12</option>
                            <option>13</option>
                            <option>14</option>
                            <option>15</option>
                            <option>16</option>
                            <option>17</option>
                            <option>18</option>
                            <option>19</option>
                            <option>20</option>
                            <option>21</option>
                            <option>22</option>
                            <option>23</option>
                            <option>24</option>
                            <option>25</option>
                            <option>26</option>
                            <option>27</option>
                            <option>28</option>
                            <option>29</option>
                            <option>30</option>
                            <option>31</option>
                          </select>
                        </div>
                        <div style="float:left; padding:0px 7px 0px 0px">
                          <select id="lipid_HDL_Month" title="" style="width:45px;">
                            <option value="MM">MM</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                            <option>8</option>
                            <option>9</option>
                            <option>10</option>
                            <option>11</option>
                            <option>12</option>
                          </select>
                        </div>
                        <div style="float:left; padding:0px 0px 0px 0px">
                          <select id="lipid_HDL_Year" title="" style="width:55px;">
                            <option value="YYYY">YYYY</option>
                            <option>2006</option>
                            <option>2007</option>
                            <option>2008</option>
                            <option>2009</option>
                            <option>2014</option>
                            <option>2010</option>
                            <option>2011</option>
                            <option>2012</option>
                            <option>2013</option>
                            <option>2014</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="formcontrol2-3">
                      <div class="dvFloat">
                        <div style="float:left; padding:0px 7px 0px 0px">
                          <select id="lipid_Cholesterol_Date" title="" style="width:45px;">
                            <option value="DD">DD</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                            <option>8</option>
                            <option>9</option>
                            <option>10</option>
                            <option>11</option>
                            <option>12</option>
                            <option>13</option>
                            <option>14</option>
                            <option>15</option>
                            <option>16</option>
                            <option>17</option>
                            <option>18</option>
                            <option>19</option>
                            <option>20</option>
                            <option>21</option>
                            <option>22</option>
                            <option>23</option>
                            <option>24</option>
                            <option>25</option>
                            <option>26</option>
                            <option>27</option>
                            <option>28</option>
                            <option>29</option>
                            <option>30</option>
                            <option>31</option>
                          </select>
                        </div>
                        <div style="float:left; padding:0px 7px 0px 0px">
                          <select id="lipid_Cholesterol_Month" title="" style="width:45px;">
                            <option value="MM">MM</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                            <option>8</option>
                            <option>9</option>
                            <option>10</option>
                            <option>11</option>
                            <option>12</option>
                          </select>
                        </div>
                        <div style="float:left; padding:0px 0px 0px 0px">
                          <select id="lipid_Cholesterol_Year" title="" style="width:55px;">
                            <option value="YYYY">YYYY</option>
                            <option>2006</option>
                            <option>2007</option>
                            <option>2008</option>
                            <option>2009</option>
                            <option>2014</option>
                            <option>2010</option>
                            <option>2011</option>
                            <option>2012</option>
                            <option>2013</option>
                            <option>2014</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="dvFloat formpadding1">
                    <div class="formlabel1-3">
                      <label class="formlabel1-1p">Result<span class="redtxt">*</span> </label>
                    </div>
                    <div class="formcontrol2-3">
                      <input type="text" name="txt_HD_Result_Triglyceride" id="txt_HD_Result_Triglyceride" value="" placeholder="" style="width: 153px;" />
                    </div>
                    <div class="formcontrol2-3">
                      <input type="text" name="txt_HD_Result_LDL" id="txt_HD_Result_LDL" value="" placeholder="" style="width: 153px;" />
                    </div>
                    <div class="formcontrol2-3">
                      <input type="text" name="txt_HD_Result_HDL" id="txt_HD_Result_HDL" value="" placeholder="" style="width: 153px;" />
                    </div>
                    <div class="formcontrol2-3">
                      <input type="text" name="txt_HD_Result_Cholesterol" id="txt_HD_Result_Cholesterol" value="" placeholder="" style="width: 153px;" />
                    </div>
                  </div>
                  <div class="dvFloat formpadding1">
                    <div class="formlabel1-3">
                      <label class="formlabel1-1p">Range <span class="redtxt">*</span> </label>
                    </div>
                    <div class="formcontrol2-3">
                      <table width="100%" cellpadding="0" cellspacing="0" border="0">
                        <tr>
                          <td style="width: 63px;"><input type="text" name="txt_HD_Range_Triglyceride" id="txt_HD_Range_Triglyceride" value="" placeholder="" style="width: 63px;" /></td>
                          <td style="width: 1px;" valign="middle">-</td>
                          <td style="width: 63px;"><input type="text" name="txt_HD_Range_Triglyceride1" id="txt_HD_Range_Triglyceride1" value="" placeholder="" style="width: 63px;" /></td>
                        </tr>
                      </table>
                    </div>
                    <div class="formcontrol2-3">
                      <table width="100%" cellpadding="0" cellspacing="0" border="0">
                        <tr>
                          <td style="width: 63px;"><input type="text" name="txt_HD_Range_LDL" id="txt_HD_Range_LDL" value="" placeholder="" style="width: 63px;" /></td>
                          <td style="width: 1px;" valign="middle">-</td>
                          <td style="width: 63px;"><input type="text" name="txt_HD_Range_LDL1" id="txt_HD_Range_LDL1" value="" placeholder="" style="width: 63px;" /></td>
                        </tr>
                      </table>
                    </div>
                    <div class="formcontrol2-3">
                      <table width="100%" cellpadding="0" cellspacing="0" border="0">
                        <tr>
                          <td style="width: 63px;"><input type="text" name="txt_HD_Range_HDL" id="txt_HD_Range_HDL" value="" placeholder="" style="width: 63px;" /></td>
                          <td style="width: 1px;" valign="middle">-</td>
                          <td style="width: 63px;"><input type="text" name="txt_HD_Range_HDL1" id="txt_HD_Range_HDL1" value="" placeholder="" style="width: 63px;" /></td>
                        </tr>
                      </table>
                    </div>
                    <div class="formcontrol2-3">
                      <table width="100%" cellpadding="0" cellspacing="0" border="0">
                        <tr>
                          <td style="width: 63px;"><input type="text" name="txt_HD_Range_Cholesterol" id="txt_HD_Range_Cholesterol" value="" placeholder="" style="width: 63px;" /></td>
                          <td style="width: 1px;" valign="middle">-</td>
                          <td style="width: 63px;"><input type="text" name="txt_HD_Range_Cholesterol1" id="txt_HD_Range_Cholesterol1" value="" placeholder="" style="width: 63px;" /></td>
                        </tr>
                      </table>
                    </div>
                  </div>
                  <div class="dvFloat formpadding1">
                    <div class="formlabel1-3">
                      <label class="formlabel1-1p">Unit<span class="redtxt">*</span> </label>
                    </div>
                    <div class="formcontrol2-3">
                      <input type="text" name="txt_HD_Unit_Triglyceride" id="txt_HD_Unit_Triglyceride" value="" placeholder="" style="width: 153px;" />
                    </div>
                    <div class="formcontrol2-3">
                      <input type="text" name="txt_HD_Unit_LDL" id="txt_HD_Unit_LDL" value="" placeholder="" style="width: 153px;" />
                    </div>
                    <div class="formcontrol2-3">
                      <input type="text" name="txt_HD_Unit_HDL" id="txt_HD_Unit_HDL" value="" placeholder="" style="width: 153px;" />
                    </div>
                    <div class="formcontrol2-3">
                      <input type="text" name="txt_HD_Unit_Cholesterol" id="txt_HD_Unit_Cholesterol" value="" placeholder="" style="width: 153px;" />
                    </div>
                  </div>
                  <div class="dvFloat formpadding"  style="padding:10px 0px 15px 0px">
                    <div class="formlabel1-1p">&nbsp;</div>
                    <div style="float: right; border: solid 0px #006600;">
                      <div style=" width:84px; height:30px; float:left; padding-right:10px;"> <a href="#" class="button4">SUBMIT</a></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div></td>
    </tr>
  </table>
</div>


<script type="text/javascript">

var countries15=new ddtabcontent("tabstabs15");
countries15.setpersist(true);
countries15.setselectedClassTarget("link"); //"link" or "linkparent"
countries15.init();

var countries16=new ddtabcontent("calorie_tab");
countries16.setpersist(true);
countries16.setselectedClassTarget("link"); //"link" or "linkparent"
countries16.init();




var countries=new ddtabcontent("tabstabs");
countries.setpersist(true);
countries.setselectedClassTarget("link"); //"link" or "linkparent"
countries.init();

var countries1=new ddtabcontent("tabstabs1");
countries1.setpersist(true);
countries1.setselectedClassTarget("link"); //"link" or "linkparent"
countries1.init();


var countriesa=new ddtabcontent("tabstabsa");
countriesa.setpersist(true);
countriesa.setselectedClassTarget("link"); //"link" or "linkparent"
countriesa.init();

var countries1a=new ddtabcontent("tabstabs1a");
countries1a.setpersist(true);
countries1a.setselectedClassTarget("link"); //"link" or "linkparent"
countries1a.init();




var countries2=new ddtabcontent("tabstabs2");
countries2.setpersist(true);
countries2.setselectedClassTarget("link"); //"link" or "linkparent"
countries2.init();

var countries3=new ddtabcontent("tabstabs3");
countries3.setpersist(true);
countries3.setselectedClassTarget("link"); //"link" or "linkparent"
countries3.init();


var countries4=new ddtabcontent("tabstabs4");
countries4.setpersist(true);
countries4.setselectedClassTarget("link"); //"link" or "linkparent"
countries4.init();


var countries5=new ddtabcontent("tabstabs5");
countries5.setpersist(true);
countries5.setselectedClassTarget("link"); //"link" or "linkparent"
countries5.init();


var countries6=new ddtabcontent("tabstabs6");
countries6.setpersist(true);
countries6.setselectedClassTarget("link"); //"link" or "linkparent"
countries6.init();


var countries7=new ddtabcontent("tabstabs7");
countries7.setpersist(true);
countries7.setselectedClassTarget("link"); //"link" or "linkparent"
countries7.init();



var countries8=new ddtabcontent("tabstabs8");
countries8.setpersist(true);
countries8.setselectedClassTarget("link"); //"link" or "linkparent"
countries8.init();



var countries9=new ddtabcontent("tabstabs9");
countries9.setpersist(true);
countries9.setselectedClassTarget("link"); //"link" or "linkparent"
countries9.init();



var countries10=new ddtabcontent("tabstabs10");
countries10.setpersist(true);
countries10.setselectedClassTarget("link"); //"link" or "linkparent"
countries10.init();

var countries11=new ddtabcontent("tabstabs11");
countries11.setpersist(true);
countries11.setselectedClassTarget("link"); //"link" or "linkparent"
countries11.init();


var countries12=new ddtabcontent("tabstabs12");
countries12.setpersist(true);
countries12.setselectedClassTarget("link"); //"link" or "linkparent"
countries12.init();


var countries13=new ddtabcontent("tabstabs13");
countries13.setpersist(true);
countries13.setselectedClassTarget("link"); //"link" or "linkparent"
countries13.init();

var countries14=new ddtabcontent("tabstabs14");
countries14.setpersist(true);
countries14.setselectedClassTarget("link"); //"link" or "linkparent"
countries14.init();




</script>

<script>//RetriveReocrds_DailyTracking('Blood_Pressure','dvBlood_Pressure');

GetChartDetails('diastolic','');
</script>
<script>
/*Pres_Report_Show_Hide();
Intake_Reminder_Show_Hide();
Purchase_Reminder_Show_Hide();
Daily_Frequency_enabledisable();*/
</script>
