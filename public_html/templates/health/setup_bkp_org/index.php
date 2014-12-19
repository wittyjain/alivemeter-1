<script type="text/javascript" src="<?php echo $strHostName?>/js/health_steup_validation.js"></script>
<script type="text/javascript" src="<?php echo $strHostName?>/js/health_steup_insert_retrive.js"></script>
<section>
  <div class="top_ou">
    <div class="top_in">
      <div class="top">
        <div class="b_crumb">&nbsp;</div>
        <h1 style="text-transform: inherit; font-size: 24px;">Update your <span class="f_green"> Health</span> & <span class="f_blue">Wealth</span> setup</h1>
        <div class="cal_12" style="padding-top: 15px;">
          <div class="hw_setupleft">
            <div class="h_boxbg">
              <div class="health_icon"><img src="images/health_setup_icon.png" alt="" title="" border="0"></div>
              <div class="health_title"><span style="font-size: 30px; text-transform: uppercase;" class="f_green">Health</span><br>
                <span style="font-size: 30px; text-transform: uppercase;" class="f_darkblack">Setup</span> </div>
              <div style="width: 138px; float: left; padding-left: 90px; margin-top: 10px; text-align: center;">
                <div class="update_btn"><a href="#" class="buttongreen" onClick="javascript:Popup.showModal('dvpopup-form',null,null,{'screenColor':'#333333','screenOpacity':.6});">UPDATE NOW<span></span></a></div>
              </div>
            </div>
            <div class="h_greenbg"></div>
            <div style="width: 317px; float: left;">
              <ul>
                <li>Your alerts go here. Your alerts go.</li>
              </ul>
            </div>
          </div>
          <div class="hw_setupright">
            <div class="w_boxbg">
              <div class="wealth_icon"><img src="images/wealth_setup_icon.png" alt="" title="" border="0"></div>
              <div class="wealth_title"><span style="font-size: 30px; text-transform: uppercase;" class="f_blue">Wealth</span><br>
                <span style="font-size: 30px; text-transform: uppercase;" class="f_darkblack">Setup</span> </div>
              <div style="width: 138px; float: left; padding-left: 90px; margin-top: 10px; text-align: center;">
                <div class="wupdate_btn"><a href="#" class="buttonblue">UPDATE NOW<span></span></a></div>
              </div>
            </div>
            <div class="w_bluebg"></div>
            <div style="width: 317px; float: left;">
              <ul>
                <li style="border-top: dotted 1px #b1b1b1;">Your alerts go here. Your alerts go.</li>
                <li>Your alerts go here. Your alerts go.</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</div>
</section>
<div id="dvpopup-form" style="text-align: center; width: 100%;position:absoulte;margin:0px; margin-top:15px; display:none  ">
  <table cellpadding="0" cellspacing="0" border="0" width="100%" align="center">
    <tr>
      <td style="text-align:right; border:solid 0px red; float:right"><div style="margin: 5px 0px 0px -23px; position: absolute; text-align:right"> <a href="javascript:Popup.hide('dvpopup-form');" target="_parent" style="text-decoration: none; color: #fff;"> <img src="images/close.png" alt="" title="" border="0" /> </a> </div></td>
    </tr>
    <tr>
      <td valign="top" align="center" style="padding: 10px 10px 10px 10px;"><div class="DvFloat">
          <div class="TabDv">
            <div  style="background-color:#666666;padding:10px 5px;">
              <ul id="tabstabs" class="shadetabs">
                <li  class="selected"><a href="#" rel="tabs1" class="selected" >Doctor Consultaion</a></li>
                <li><a href="#" rel="tabs2"  >Medication</a></li>
                <li><a href="#" rel="tabs3">Allergies</a></li>
                <li><a href="#" rel="tabs4">Hospitalization</a></li>
                <li><a href="#" rel="tabs5" >Immunization</a></li>
                <li><a href="#" rel="tabs6">Health Problems</a></li>
                <li><a href="#" rel="tabs7">Family History</a></li>
                <li><a href="#" rel="tabs8">Daily Tracking</a></li>
              </ul>
            </div>
            <div class="TabContentDetails">
              <div id="tabs1" class="tabcontent">
                <?php include "view_files/doc_consult.inc.php";?>
              </div>
              <div id="tabs2" class="tabcontent">
                <?php include "view_files/medication.inc.php";?>
              </div>
              <div id="tabs3" class="tabcontent">
                <?php include "view_files/allergies.inc.php";?>
              </div>
              <div id="tabs4" class="tabcontent">
                <?php include "view_files/hospitalization.inc.php";?>
              </div>
              <div id="tabs5" class="tabcontent">
                <?php include "view_files/immunization.inc.php";?>
              </div>
              <div id="tabs6" class="tabcontent">
                <?php include "view_files/health_problems.inc.php";?>
              </div>
              <div id="tabs7" class="tabcontent">
                <?php include "view_files/family_history.inc.php";?>
              </div>
              <div id="tabs8" class="tabcontent">
                <?php include "view_files/daily_tracking.inc.php";?>
              </div>
          </div>
        </div></div></td>
    </tr>
  </table>
</div>
<div id="dvpopup-form1" style="text-align: center; width: 780px;position:absoulte;margin-left:15%; margin-top:15px;display:none ">
  <table cellpadding="0" cellspacing="0" border="0" width="400px" align="center">
    <tr>
      <td align="center" style="padding: 10px 37px 10px 350px"><div style="margin: 15px 0px 0px 333px; position: absolute;"> <a href="javascript:Popup.hide('dvpopup-form1');" target="_parent" style="text-decoration: none; color: #fff;"> <img src="images/close.png" alt="" title="" border="0" /> </a> </div></td>
    </tr>
    <tr>
      <td valign="top" align="center" style="padding: 10px 10px 10px 10px;"><div class="DvFloat">
          <div class="dvWhitePopup_Box">
            <table cellpadding="0" cellspacing="0" style="width:100%; border:solid 0px #000000">
              <tr>
                <td colspan="3" style="padding-bottom:15px;padding-left:20px;"><h2 class="Tab_Title">Prescription Reports</h2></td>
              </tr>
              <tr>
                <td style="width:45%;padding-left:20px;">Report Date </td>
                <td >Report</td>
                <td></td>
              </tr>
              <tr>
                <td style="padding-left:20px;"><div style="float:left; padding:0px 15px 0px 0px">
                    <select  id="cmb_Report_Day"  title=""  style="width:60px;">
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
                    <select  id="cmb_Report_Date"  title=""  style="width:60px;">
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
                    <select  id="cmb_Report_Year"  title=""  style="width:93px;">
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
                  </div></td>
                <td><select  id="cmb_Prescription_Reports"  title=""  onchange="javascript:Pres_Report_Show_Hide();">
                    <option value="0">Doctor Prescription</option>
                    <option value="1">Lab Test</option>
                    <option value="2">Radiology</option>
                  </select>
                </td>
                <td valign="top"><div style=" width:95px; height:30px; float:left;padding-right:10px;"><a href="#" class="button1">Browse</a></div></td>
              </tr>
              <tr>
                <td  colspan="3" style="padding:0px; display:none" id="dvPres_Report_Show_Hide" ><table cellpadding="0" cellspacing="0" style="width:89%">
                    <tr>
                      <td style="padding-left:20px;padding-top:5px;">Test Name</td>
                      <td>Lab Name </td>
                      <td>&nbsp;</td>
                    </tr>
                    <tr>
                      <td style="padding-left:20px;"><input type="text" name="txt_Test_Name" id="txt_Dc_Height" value=""></td>
                      <td><input type="text" name="txt_Lab_Name" id="txt_Dc_Height" value="">
                      </td>
                      <td>&nbsp;</td>
                    </tr>
                  </table></td>
              </tr>
              <tr>
                <td colspan="3" style="padding:15px 0px; text-align:right"><div style=" width:84px; height:30px; float:right;padding-right:10px;"> <a href="#" class="button4">Done</a></div>
                  <div style=" width:84px; height:30px; float:right;padding-right:10px;"> <a href="#" class="button2" >Close</a> </div></td>
              </tr>
            </table>
          </div>
        </div></td>
    </tr>
  </table>
</div>

<script type="text/javascript">

var countries=new ddtabcontent("tabstabs");
countries.setpersist(true);
countries.setselectedClassTarget("link"); //"link" or "linkparent"
countries.init();

var countries1=new ddtabcontent("tabstabs1");
countries1.setpersist(true);
countries1.setselectedClassTarget("link"); //"link" or "linkparent"
countries1.init();

</script>
<script>
	Pres_Report_Show_Hide();
    Intake_Reminder_Show_Hide();
	Purchase_Reminder_Show_Hide();
	Daily_Frequency_enabledisable();
    </script>
    

</body>
</html>
<script>RetriveReocrds('Doc_Consult','dvDocConsult');</script>