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
          <input type="hidden" id="txtWeekDays" name="txtWeekDays" value="7"/>
          <div  style="width:755px; border:solid 0px red;">
            <div class="DvFloat">
              <div class="DvFloat" style="padding: 15px 0px; border-bottom: solid 1px #c5c5c5;">
                <div class="DvFloat">
                  <div style="width: 22px; float: left; height: 22px;"> <a style="cursor:pointer;" onClick="javascript:GetChartDetails('diastolic','Prev')"> <img src="<?php echo $strHostName?>/images/prev_md_paging.png" /> </a> </div>
                  <div style="width: 695px; float: left; text-align: center; font-size: 15px; font-weight: bold;" class="f_grey" id="dvDiastolicMonthYearCaption"><?php echo $fromdate." - " . $todate ?></div>
                  <div style="width: 22px; float: left; height: 22px;"> <a style="cursor:pointer;" onClick="javascript:GetChartDetails('diastolic','Next')"> <img src="<?php echo $strHostName?>/images/next_md_paging.png" /> </a> </div>
                </div>
                <div class="DvFloat" style="padding-top: 5px;"  id="Diastolic_Chart"> </div>
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
          <input type="hidden" id="txtDiastolicFromDateMonth" name="txtDiastolicFromDateMonth" value="<?php echo $fromdate?>"/>
          <input type="hidden" id="txtDiastolicToDateMonth" name="txtDiastolicToDateMonth" value="<?php echo $todate?>"/>
          <input type="hidden" id="txtWeekDaysMonth" name="txtWeekDaysMonth" value="30"/>
          <div  style="width:755px; border:solid 0px red;">
            <div class="DvFloat">
              <div class="DvFloat" style="padding: 15px 0px; border-bottom: solid 1px #c5c5c5;">
                <div class="DvFloat">
                  <div style="width: 22px; float: left; height: 22px;"> <a style="cursor:pointer;" onClick="javascript:GetChartDetails('diastolicMonth','Prev')"> <img src="<?php echo $strHostName?>/images/prev_md_paging.png" /> </a> </div>
                  <div style="width: 695px; float: left; text-align: center; font-size: 15px; font-weight: bold;" class="f_grey" id="dvDiastolicMonthYearCaptionMonth">&nbsp;</div>
                  <div style="width: 22px; float: left; height: 22px;"> <a style="cursor:pointer;" onClick="javascript:GetChartDetails('diastolicMonth','Next')"> <img src="<?php echo $strHostName?>/images/next_md_paging.png" /> </a> </div>
                </div>
                <div class="DvFloat" style="padding-top: 5px;"  id="Diastolic_ChartMonth"> </div>
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
          <input type="hidden" id="txtDiastolicFromDateYearly" name="txtDiastolicFromDateYearly" value="<?php echo $fromdate?>"/>
          <input type="hidden" id="txtDiastolicToDateYearly" name="txtDiastolicToDateYearly" value="<?php echo $todate?>"/>
          <input type="hidden" id="txtWeekDaysYearly" name="txtWeekDaysYearly" value="365"/>
          <div  style="width:755px; border:solid 0px red;">
            <div class="DvFloat">
              <div class="DvFloat" style="padding: 15px 0px; border-bottom: solid 1px #c5c5c5;">
                <div class="DvFloat">
                  <div style="width: 22px; float: left; height: 22px;"> <a style="cursor:pointer;" onClick="javascript:GetChartDetails('diastolicYearly','Prev')"> <img src="<?php echo $strHostName?>/images/prev_md_paging.png" /> </a> </div>
                  <div style="width: 695px; float: left; text-align: center; font-size: 15px; font-weight: bold;" class="f_grey" id="dvDiastolicMonthYearCaptionYearly">&nbsp;</div>
                  <div style="width: 22px; float: left; height: 22px;"> <a style="cursor:pointer;" onClick="javascript:GetChartDetails('diastolicYearly','Next')"> <img src="<?php echo $strHostName?>/images/next_md_paging.png" /> </a> </div>
                </div>
                <div class="DvFloat" style="padding-top: 5px;"  id="Diastolic_ChartYearly"> </div>
              </div>
            </div>
          </div>
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
        <div id="tabs1a1" class="tabcontent">
          <?php
									$fromdate = date('Y-M-d');									
									$todate = strtotime("+7 day", strtotime($fromdate));
									$fromdate = date('Y-M-d',strtotime($fromdate));
									$todate = date('Y-M-d',$todate);
								?>
          <input type="hidden" id="txtSystolicFromDate" name="txtSystolicFromDate" value="<?php echo $fromdate?>"/>
          <input type="hidden" id="txtSystolicToDate" name="txtSystolicToDate" value="<?php echo $todate?>"/>
          <input type="hidden" id="txtWeekDaysSystolic" name="txtWeekDaysSystolic" value="7"/>
          <div  style="width:755px; border:solid 0px red;">
            <div class="DvFloat">
              <div class="DvFloat" style="padding: 15px 0px; border-bottom: solid 1px #c5c5c5;">
                <div class="DvFloat">
                  <div style="width: 22px; float: left; height: 22px;"> <a style="cursor:pointer;" onClick="javascript:GetChartDetails('systolic','Prev')"> <img src="<?php echo $strHostName?>/images/prev_md_paging.png" /> </a> </div>
                  <div style="width: 695px; float: left; text-align: center; font-size: 15px; font-weight: bold;" class="f_grey" id="dvSystolicMonthYearCaption"><?php echo $fromdate." - " . $todate ?></div>
                  <div style="width: 22px; float: left; height: 22px;"> <a style="cursor:pointer;" onClick="javascript:GetChartDetails('systolic','Next')"> <img src="<?php echo $strHostName?>/images/next_md_paging.png" /> </a> </div>
                </div>
                <div class="DvFloat" style="padding-top: 5px;"  id="Systolic_Chart"> </div>
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
          <input type="hidden" id="txtSystolicFromDateMonth" name="txtSystolicFromDateMonth" value="<?php echo $fromdate?>"/>
          <input type="hidden" id="txtSystolicToDateMonth" name="txtSystolicToDateMonth" value="<?php echo $todate?>"/>
          <input type="hidden" id="txtWeekDaysMonthSystolic" name="txtWeekDaysMonthSystolic" value="30"/>
          <div  style="width:755px; border:solid 0px red;">
            <div class="DvFloat">
              <div class="DvFloat" style="padding: 15px 0px; border-bottom: solid 1px #c5c5c5;">
                <div class="DvFloat">
                  <div style="width: 22px; float: left; height: 22px;"> <a style="cursor:pointer;" onClick="javascript:GetChartDetails('systolicMonth','Prev')"> <img src="<?php echo $strHostName?>/images/prev_md_paging.png" /> </a> </div>
                  <div style="width: 695px; float: left; text-align: center; font-size: 15px; font-weight: bold;" class="f_grey" id="dvSystolicMonthYearCaptionMonth">&nbsp;</div>
                  <div style="width: 22px; float: left; height: 22px;"> <a style="cursor:pointer;" onClick="javascript:GetChartDetails('systolicMonth','Next')"> <img src="<?php echo $strHostName?>/images/next_md_paging.png" /> </a> </div>
                </div>
                <div class="DvFloat" style="padding-top: 5px;"  id="Systolic_ChartMonth"> </div>
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
          <input type="hidden" id="txtSystolicFromDateYearly" name="txtSystolicFromDateYearly" value="<?php echo $fromdate?>"/>
          <input type="hidden" id="txtSystolicToDateYearly" name="txtSystolicToDateYearly" value="<?php echo $todate?>"/>
          <input type="hidden" id="txtWeekDaysYearlySystolic" name="txtWeekDaysYearlySystolic" value="365"/>
          <div  style="width:755px; border:solid 0px red;">
            <div class="DvFloat">
              <div class="DvFloat" style="padding: 15px 0px; border-bottom: solid 1px #c5c5c5;">
                <div class="DvFloat">
                  <div style="width: 22px; float: left; height: 22px;"> <a style="cursor:pointer;" onClick="javascript:GetChartDetails('systolicYearly','Prev')"> <img src="<?php echo $strHostName?>/images/prev_md_paging.png" /> </a> </div>
                  <div style="width: 695px; float: left; text-align: center; font-size: 15px; font-weight: bold;" class="f_grey" id="dvSystolicMonthYearCaptionYearly">&nbsp;</div>
                  <div style="width: 22px; float: left; height: 22px;"> <a style="cursor:pointer;" onClick="javascript:GetChartDetails('systolicYearly','Next')"> <img src="<?php echo $strHostName?>/images/next_md_paging.png" /> </a> </div>
                </div>
                <div class="DvFloat" style="padding-top: 5px;"  id="Systolic_ChartYearly"> </div>
              </div>
            </div>
          </div>
        </div>
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
      </div>
    </div>
  </div>
</div>
<?php include "view_files/blood_pressure.inc.php";?>
