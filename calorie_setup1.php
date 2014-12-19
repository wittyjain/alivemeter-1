<?php include 'includes/common.inc.php'?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Alivemeter</title>
<?php include 'includes/links.php'?>
<link href="style/main.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="style/calorie_tabcontent.css" />
<script type="text/javascript" src="js/calorie_tabcontent.js"></script>
<link href="style/reset.css" rel="stylesheet" type="text/css">
<link href="style/fonts.css" rel="stylesheet" type="text/css">
<link href="style/bxslider.css" rel="stylesheet" type="text/css">
<link href="style/paging_style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" language="javascript" src="js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" language="javascript" src="js/scrolltopcontrol.js"></script>
<link href="style/bhupali.css" rel="stylesheet" type="text/css">
<link type="text/css" rel="stylesheet" href="css/style.css" />
<link href="style/jupiter.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="css/example.css" type="text/css">
<link rel="stylesheet" href="css/dropkick.css" type="text/css">
<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/jquery.dropkick-1.0.0.js" type="text/javascript"></script>
<script type="text/javascript" charset="utf-8">
	$(function () {
	  $('.existing_event').dropkick({
		change: function () {
		  $(this).change();
		}
	  });
	});
</script>


<style type="text/css">
#dd_nav{
	list-style:none;	
	float:right;
	width:247px;
	position:absolute;
	z-index:1;
	margin-top:0px;
	margin-left: 433px;
	border:solid 0px red;line-height:20px;
	
}
#dd_nav li {
	float:left;
	margin-right:10px;
	position:relative;
}
#dd_nav a {
	display:block;
	padding: 0px 0px 0px 12px;
	color:#fff;
	text-decoration:none;
}
#dd_nav a:hover {
	color:#fff;
}
#dd_nav ul {
	list-style:none;
	position:absolute;
	left:-9999px;
}
#dd_nav ul li {
	padding-top:1px;
	float:none;
	padding-left:5px;
}
#dd_nav ul a {
	white-space:nowrap;
}
#dd_nav li:hover ul {
	left:0;
}
#dd_nav li:hover a {
	text-decoration:none;
}
#dd_nav li:hover ul a {
	text-decoration:none;
}
#dd_nav li:hover ul li a:hover {
/  background:#333;
}
</style>

</head>
<body>
<?php include 'includes/top.php'?>

<section>
  <div class="top_ou">
    <div class="top_in" style="border: solid 0px #000066;">
      <div class="top">
        <div class="cal_12">
          <div class="DvFloat" style="padding-top: 2px;">
            <div class="health_greenbg_title_h"> <span style="text-align: center; text-transform: uppercase; font-size: 21px;" class="f_dwhite">Health</span> </div>
            <div class="wealth_bluebg_title"> <span style="text-align: center; text-transform: uppercase; font-size: 21px;" class="f_blue">Wealth</span> </div>
            <div class="hw_whitebg_title">
              <div class="contact_green_icon"><a href="inbox_1.html"  style="border:solid 0xp red;"><img src="images/contact_greenblue_icon.png" alt="" title="" border="0"></a></div>
              <div class="contact_blue_icon"><img src="images/contact_video_icon.png" alt="" title="" border="0"></div>
              <div class="contact_bell_icon"><img src="images/contact_bell_icon.png" alt="" title="" border="0"></div>
              <div class="small_red_bg">2</div>
            </div>
          </div>
        </div>
        <div class="b_crumb">&nbsp;</div>
        <div class="dvFloat">
          <div class="dvWrapper">
            <div style="float:left; padding:0px 0px 0px 0px; height:50px; border:solid 0px red;">
              <ul class="calorie_setup">
                <li class="past"  style="width:350px;">
                  <div>
                    <div class="Step_title_d_Grey"><a href="health_dash_board.html" title="Step 2" style="padding:0px; margin:0px; text-align:left">Health dashboard </a></div>
                    <span><a href="health_dash_board_medication.html" title=""><img src="images/calorie_setup/health_dashboard_icon.png" alt="" /></a></span><a href="calorie_setup1.html" title=""> </a></div>
                </li>
                <li class="active"  style="width:350px;">
                  <div>
                    <div class="Step_title_green"><a href="#" title="" style="padding:0px; margin:0px; text-align:left;color:#7ca500">Calorie Setup</a></div>
                    <span><a href="#" title=""><img src="images/calorie_setup/calorie_setup_icon.png" alt="" /></a></span><a href="#" title=""> </a></div>
                </li>
                <li class="current" style="width:237px;">
                  <div>
                    <div class="Step_title_d_Grey_small"><a href="upload_reports.html" title="Step 2" style="padding:0px; margin:0px; text-align:left">Upload Reports</a></div>
                    <span><a href="upload_reports.html" title=""><img src="images/calorie_setup/upload_report_icon.png" alt="" /></a></span></div>
                </li>
                <div class="calorie_setupline"></div>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section>
  <div class="cal_full_size">
    <div class="cal_12 m_outo">
      <div class="dvFloat">
        <div class="dvWrapper">
          <div style=" padding:0px 0px 35px 0px">
            <div class="dvFloat formpadding"> <span class="calorie_green_title"> Update Your Diet Profile </span><br><br>
              <span style="font-weight:bold; color:#666666; font-size:13px;">To help us update your personalized fitness goals, please update your profile by making any changes to the values below.</span> </div>
            <div class="dvFloat">
              <div style="margin:0px auto; width:450px; border:solid 0px red; float:left">
                <div class="dvFloat formpadding">
                  <div class="formlabel">
                    <label class="formlabel">Current Weight </label>
                  </div>
                  <div class="formcontrol">
                    <input type="text" name="calorie_txt_Current_Weight" id="calorie_txt_Current_Weight" value="64"  style="width:80px;text-align:center"/>
                    &nbsp;
                    <div style="padding:10px 10px 0px 10px; float:left;color: #a8a8a8;">KG</div>
                  </div>
                </div>
                <div class="dvFloat formpadding">
                  <div class="formlabel">
                    <label class="formlabel"><span class="calorie_green_s_title">What is your goal?</span></label>
                  </div>
                  <div class="formcontrol">
                    <select id="calorie_cmb_goal" name="calorie_cmb_goal" tabindex="1" class="existing_event" style="width: 150px;">
                      <option value="Lose 1 kilogram per week">Lose 1 kilogram per week</option>
                      <option value="Lose .75 kilogram per wee">Lose .75 kilogram per week</option>
                      <option value="Lose .5 kilogram per week">Lose .5 kilogram per week</option>
                      <option value="Maintain my current weight">Maintain my current weight</option>
                      <option value="Lose .2.5 kilogram per week">Lose .2.5 kilogram per week</option>
                      <option value="Lose .5 kilogram per week">Lose .5 kilogram per week</option>
                    </select>
                  </div>
                </div>
                <div class="dvFloat formpadding">
                  <div class="formlabel">
                    <label class="formlabel">Height</label>
                  </div>
                  <div class="formcontrol">
                    <input type="text" name="calorie_txt_Height" id="calorie_txt_Height" value="5.65"  style="width:80px; text-align:center"/>
                   	
<div style="padding:5px 3px 0px 0px; float:left;color: #666; background-color:#fff;margin:10px 10px 0px 10px; font-size:11px; width:px;"><div style="margin-top:-5px; float:left"><input type="radio" style="background:none; border:solid 0px red" name="Height"></div> CM</div>                    <div style="padding:5px 3px 0px 0px; float:left;color: #666; background-color:#fff;margin:10px 0px 0px 0px; font-size:11px; width:px;"><div style="margin-top:-5px; float:left"><input type="radio" style="background:none; border:solid 0px red" name="Height"></div> FT</div>
                  </div>
                </div>
                <div class="dvFloat formpadding">
                  <div class="formlabel">
                    <label class="formlabel">Gender</label>
                  </div>
                  <div class="formcontrol">
                    <input type="radio" id="Male" name="calorie_Gender" value="Male">
                    <label for="Male">Male</label>
                    &nbsp;&nbsp;
                    <input type="radio" id="Female" name="calorie_Gender" value="Female">
                    <label for="Female">Female</label>
                    &nbsp;&nbsp; </div>
                </div>
                <div class="dvFloat formpadding">
                  <div class="formlabel">
                    <label class="formlabel">Date of Birth</label>
                  </div>
                  <div class="formcontrol">
                    <div class="dvFloat">
                      <div style="float:left; padding:0px 15px 0px 0px">
                        <select id="calorie_cmb_Date"name="calorie_cmb_Date" tabindex="3"  class="existing_event" style="width: 4px;">
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
                        <select id="calorie_cmb_Month" name="calorie_cmb_Month" tabindex="3" class="existing_event" style="width: 4px;">
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
                        <select id="calorie_cmb_Year" name="calorie_cmb_Year" tabindex="3" class="existing_event" style="width: 8px;">
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
              </div>
              <div style="margin:0px auto; width:450px; border:solid 0px red; float:left">
                <div class="dvFloat formpadding">
                  <div class="formlabel">
                    <label class="formlabel">Goal Weight: </label>
                  </div>
                  <div class="formcontrol">
                    <input type="text" name="calorie_txt_Goal_Weight" id="calorie_txt_Goal_Weight" value="54"  style="width:80px; text-align:center"/>
                    <div style="padding:10px 0px 0px 10px; float:left;color: #a8a8a8;">KG</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="dvFloat" style="border-top:solid 1px #c5c5c5; margin:20px 0px">
              <div style="margin:0px auto; width:450px; border:solid 0px red; float:left">
                <div class="dvFloat formpadding">
                  <div class="formlabel">
                    <label class="formlabel">Current Waist</label>
                  </div>
                  <div class="formcontrol">
                    <input type="text" name="calorie_txt_Current_Waist" id="calorie_txt_Current_Waist" value="29"  style="width:80px; text-align:center"/>
                    &nbsp;
                    <div style="padding:10px 10px 0px 10px; float:left;color: #a8a8a8;">CM</div>
                  </div>
                </div>
                <div class="dvFloat formpadding">
                  <div class="formlabel">
                    <label class="formlabel">Current Hips <span class="redtxt">*</span></label>
                  </div>
                  <div class="formcontrol">
                    <input type="text" name="calorie_txt_Current_Hips" id="calorie_txt_Current_Hips" value="32"  style="width:80px;text-align:center"/>
                    &nbsp;
                    <div style="padding:10px 10px 0px 10px; float:left;color: #a8a8a8;">CM</div>
                  </div>
                </div>
                <div class="dvFloat formpadding">
                  <div class="formlabel">
                    <label class="formlabel">Current Arms <span class="redtxt">*</span></label>
                  </div>
                  <div class="formcontrol">
                    <input type="text" name="calorie_txt_Current_Arms" id="calorie_txt_Current_Arms" value="18"  style="width:80px;text-align:center"/>
                    &nbsp;
                    <div style="padding:10px 10px 0px 10px; float:left;color: #a8a8a8;">CM</div>
                  </div>
                </div>
              </div>
              <div style="margin:0px auto; width:450px; border:solid 0px red; float:left">
                <div class="dvFloat formpadding">
                  <div class="formlabel">
                    <label class="formlabel">Goal Waist</label>
                  </div>
                  <div class="formcontrol">
                    <input type="text" name="calorie_txt_Goal_Waist" id="calorie_txt_Goal_Waist" value="26"  style="width:80px;text-align:center"/>
                    &nbsp;
                    <div style="padding:10px 10px 0px 10px; float:left;color: #a8a8a8;">CM</div>
                  </div>
                </div>
                <div class="dvFloat formpadding">
                  <div class="formlabel">
                    <label class="formlabel">Goal Hips <span class="redtxt">*</span></label>
                  </div>
                  <div class="formcontrol">
                    <input type="text" name="calorie_txt_Goal_Hips" id="calorie_txt_Goal_Hips" value="30"  style="width:80px;text-align:center"/>
                    &nbsp;
                    <div style="padding:10px 10px 0px 10px; float:left;color: #a8a8a8;">CM</div>
                  </div>
                </div>
                <div class="dvFloat formpadding">
                  <div class="formlabel">
                    <label class="formlabel">Goal Arms <span class="redtxt">*</span></label>
                  </div>
                  <div class="formcontrol">
                    <input type="text" name="calorie_txt_Goal_Arms" id="calorie_txt_Goal_Arms" value="15"  style="width:80px;text-align:center"/>
                    &nbsp;
                    <div style="padding:10px 10px 0px 10px; float:left;color: #a8a8a8;">CM</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="dvFloat" style="border-top:solid 1px #c5c5c5; margin:20px 0px">
              <div class="dvFloat formpadding" style="padding-bottom:0px;"> <span class="calorie_green_s_title">How would you describe your normal daily activities? </span> </div>
              <div style="margin:0px auto; width:500px; border:solid 0px red; float:left">
                <div class="DvFloat">
                  <div class="dvWrapper">
                    <div class="TabDv">
                      <div  style="padding:10px 0px;">
                        <ul id="calorie_tab" class="calorie_tab">
                          <li class="selected"><a href="#" rel="tabs1" >Sedentary</a></li>
                          <li><a href="#" rel="tabs2"  >Lightly active</a></li>
                          <li><a href="#" rel="tabs3">Moderately active</a></li>
                          <li><a href="#" rel="tabs4">Very active</a></li>
                        </ul>
                      </div>
                      <div class="calorieTabContentDetails">
                        <div id="tabs1" class="calorie_tabcontent">
                          <div style="width:980px; border:solid 0px red;padding:10px">Spend most of the day sitting (e.g. bank teller, desk job)</div>
                        </div>
                        <div id="tabs2" class="calorie_tabcontent">
                          <div style="width:980px; border:solid 0px red;padding:10px">Spend a good part of the day on your feet (e.g. teacher, salesman)</div>
                        </div>
                        <div id="tabs3" class="calorie_tabcontent">
                          <div style="width:980px; border:solid 0px red;padding:10px">Spend a good part of the day some physical activity (e.g. bike, waitress, mailman)</div>
                        </div>
                        <div id="tabs4" class="calorie_tabcontent">
                          <div style="width:980px; border:solid 0px red;padding:10px">Spend a good part of the day heavy physical activity (e.g. bike, messenger, carpenter)</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="dvFloat" style="border-top:solid 1px #c5c5c5; margin:20px 0px">
              <div class="dvFloat formpadding" style="padding:10px 0px"> <span class="calorie_green_s_title">How many times a week do you plan on exercising</span> </div>
              <div style="margin:0px auto; width:250px; border:solid 0px red; float:left">
                <div class="dvFloat">
                  <div class="formlabel" style="float:left; width:205px">
                    <select id="calorie_cmb_Year_day_sitting" name="calorie_cmb_Year_day_sitting" tabindex="1" class="existing_event" style="width: 35px;">
                      <option value="Select">Select</option>
                      <option></option>
                    </select>
                    <div style="padding:5px 10px 0px 10px; float:left;color: #a8a8a8;">workouts / week </div>
                  </div>
                </div>
              </div>
              <div style="margin:0px auto; width:250px; border:solid 0px red; float:left">
                <div class="dvFloat ">
                  <div class="formlabel" style="float:left; width:205px">
                    <input type="text" name="txt_Designation" id="txt_Designation" value=""  style="width:80px;"/>
                    <div style="padding:5px 10px 0px 10px; float:left;color: #a8a8a8;">min. / workout</div>
                  </div>
                </div>
              </div>
            </div>
             <div class="dvFloat " style="padding-bottom:0px;"><div style=" width:155px; height:30px; float:left;padding-right:10px;"><a  href="calorie_setup2.html" style="cursor: pointer;" target="_parent"  class="button4">Update Profile</a></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
</section>
   <?php include 'includes/bottom.php'?>

<script type="text/javascript" src="js/jquery.form-2.4.0.min.js"></script>
<script type="text/javascript" src="js/jqeasy.dropdown.min.js"></script>

<script type="text/javascript" src="js/jQuery.1.8.2.js"></script>
<script type="text/javascript" src="js/jquery.bxslider.min.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<script type="text/javascript"> $.noConflict();</script>
<script type="text/javascript">

var countries=new ddtabcontent("calorie_tab");
countries.setpersist(true);
countries.setselectedClassTarget("link"); 
countries.init();
</script>
</body>
</html>
