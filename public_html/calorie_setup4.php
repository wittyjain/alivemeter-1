<?php include 'includes/common.inc.php'?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Alivemeter</title>
<?php include 'includes/links.php'?>
<link href="style/main.css" rel="stylesheet" type="text/css">
<script>
	function GetSubTabs()
	{
	
		  if (window.XMLHttpRequest)
			{// for IE7+, Firefox, Chrome, Opera, Safaricodes
				xmlhttp = new XMLHttpRequest();
			}
			else
			{// code for IE6, IE5
				xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			}
			xmlhttp.onreadystatechange=function()
			{
				if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
				{
					document.getElementById("divtab8").innerHTML = xmlhttp.responseText;
				}
			}
			
				xmlhttp.open("GET","sub_tabs.html",true);
				xmlhttp.send();
	}
</script>
<link rel="stylesheet" type="text/css" href="style/calorie_tabcontent1.css" />
<link rel="stylesheet" type="text/css" href="style/health_dashboard_tabcontent.css" />
<script type="text/javascript" src="js/tabcontent.js"></script>
<link href="style/reset.css" rel="stylesheet" type="text/css">
<link href="style/fonts.css" rel="stylesheet" type="text/css">
<link href="style/bxslider.css" rel="stylesheet" type="text/css">
<link href="style/paging_style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" language="javascript" src="js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" language="javascript" src="js/scrolltopcontrol.js"></script>
<link href="style/bhupali.css" rel="stylesheet" type="text/css">
<link type="text/css" rel="stylesheet" href="css/style.css" />
<link href="style/jupiter.css" rel="stylesheet" type="text/css">
<link href="style/calendar.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="js/cal.js"></script>
<script type="text/javascript">
$(document).ready(function(){
$(".trigger").click(function(){
$(".panel").toggle("fast");
$(this).toggleClass("active");
return false;
});
});
</script>
<style>b { font-weight:bold}</style>
<script type="text/javascript">
jQuery(document).ready(function () {
	
	$('input.one').simpleDatepicker({ startdate: 1900, enddate: 2050 });
	$('input.two').simpleDatepicker({ startdate: 2008, enddate: 2012 });
	$('input.three').simpleDatepicker({ chosendate: '9/9/2010', startdate: '6/10/2008', enddate: '7/20/2011' });
	$('input.four').simpleDatepicker({ x: 45, y: 3 });
});
</script>


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

<script type="text/javascript">
function showform(){ document.getElementById('divCalForm').style.display = 'block'; }
document.getElementById("txt_HD_Result_Triglyceride").focus();
function showCancel(){ document.getElementById('divCalForm').style.display = 'none'; }
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
	
}#dd_nav li {
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
            <div class="health_greenbg_title"> <span style="text-align: center; text-transform: uppercase; font-size: 21px;" class="f_dgreen">Health</span> </div>
            <div class="wealth_bluebg_title"> <span style="text-align: center; text-transform: uppercase; font-size: 21px;" class="f_blue">Wealth</span> </div>
            <div class="hw_whitebg_title">
                  <div class="contact_green_icon"><a href="inbox_1.html"  style="border:solid 0xp red;"><img src="images/contact_greenblue_icon.png" alt="" title="" border="0"></a></div>
                  <div class="contact_blue_icon"><img src="images/contact_video_icon.png" alt="" title="" border="0"></div>
                  <div class="contact_bell_icon"><img src="images/contact_bell_icon.png" alt="" title="" border="0"></div>
                  <div class="small_red_bg">2</div>
                </div>
          </div>
        </div>
        <div class="b_crumb"></div>
        <div class="dvFloat">
          <div class="dvWrapper">
            <div style=" padding:35px 0px 35px 0px">
              <div class="health_dashboard_div_left">
                <div class="dvFloat">
                  <div style="float:left;padding:0px 0px 10px 0px"><a href="calorie_setup2.html"><img src="images/calorie_setup/review_goals_h.png" alt=""></a></div>
                </div>
                <div class="dvFloat">
                  <div style="float:left"><a href="#"><img src="images/calorie_setup/measurements.png" alt=""></a></div>
                </div>
              </div>
              <div class="health_dashboard_div_right">
                <div class="DvFloat">
                  <div class="DvFloat">
                    <div style="width: 80%; float: left; border: solid 0px #3300CC;"><div class="TabDv">
                              <div style="padding:0px 0px 0px 70px;">
                                <ul id="tabstabs10" class="shadetabs10">
                                  <li><a href="#" rel="tabs1a9" class="selected"> 1 WEEK </a></li>
                                  <li><a href="#" rel="tabs2b9" class="">1 MONTH</a></li>
                                  <li><a href="#" rel="tabs3c9" class="">1 year</a></li>
                                </ul>
                              </div>
                              <div class="TabContentDetails10" style="width: 100%;">
                                <div id="tabs1a9" class="tabcontent10" style="display: block;">
                                  <div style="width: 798px; border: solid 0px red;">
                                    <div class="DvFloat">
                                      <div class="DvFloat" style="padding: 15px 0px; border-bottom: solid 1px #c5c5c5;">
                                        <div class="DvFloat">
                                          <div style="width: 22px; float: left; height: 22px; background-image: url(images/prev_md_paging.png); background-repeat: no-repeat;"></div>
                                          <div style="width: 754px; float: left; text-align: center; font-size: 15px; font-weight: bold;" class="f_grey">27 Jan - 2 Feb 2014</div>
                                          <div style="width: 22px; float: left; height: 22px; background-image: url(images/next_md_paging.png); background-repeat: no-repeat;"></div>
                                        </div>
                                        <div class="DvFloat" style="padding-top: 5px;"> <img src="images/nutritionist/chart1.jpg" alt="" title="" border="0"></div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div id="tabs2b9" class="tabcontent10" style="display: none;">
                                  <div style="width:755px; border:solid 0px red;">sad</div>
                                </div>
                                <div id="tabs3c9" class="tabcontent10" style="display: none;">
                                  <div style="width:755px; border:solid 0px red;">sad</div>
                                </div>
                              </div>
                            </div></div>
                    <div style="width: 12%; float: right; border: solid 0px #999900;">
                    	<div class="DvFloat">
                        	<select id="lipid_Cholesterol_Year" name="lipid_Cholesterol_Year" tabindex="1" class="existing_event" style="width: 45px;">
                            	<option value="Weight">Weight</option>
                                <option value="Waist">Waist</option>
                                <option value="Hips">Hips</option>
                                <option value="Arms">Arms</option>
                            </select>
                        </div>
                    </div>
                  </div>
                  
                  <div class="DvFloat" style="border: solid 0px #00CC00;">
                    <div  style="width:99.6%; border:solid 0px red;">
                      <div class="dvFloat formpadding1" style="padding:0px 0px 5px 0px; border-bottom: solid 1px #e1e1e1;"> <a onClick="showform();" style="cursor:pointer"><img src="images/nutritionist/add_to_list.jpg" alt="" /></a> </div>
                      <div class="dvFloat" style="display: none;" id="divCalForm">
                      <div class="dvFloat formpadding1" style="padding:10px 0px 0px 0px;">
                                <div class="formlabel1-3">
                                  <label class="formlabel1-1p">&nbsp;</label>
                                </div>
                                <div class="formcontrol2-3" style="width: 171px;">
                                  <label>Weight </label>
                                </div>
                                <div class="formcontrol2-3" style="width: 171px;">
                                  <label style="padding-left: 13px;">Waist</label>
                                </div>
                                <div class="formcontrol2-3" style="width: 171px;">
                                  <label style="padding-left: 21px;">Hips</label>
                                </div>
                                <div class="formcontrol2-3" style="width: 171px;">
                                  <label style="padding-left: 32px;">Arms</label>
                                </div>
                              </div>
                      <div class="dvFloat formpadding1" >
                <div class="formlabel1-3" style="padding-left:0px">
                  <label class="formlabel1-1p">Date <span class="redtxt">*</span></label>
                </div>
                <div class="formcontrol2-2" style="width: 181px;">
                  <div class="dvFloat">
                    <div style="float:left; padding:0px 3px 0px 0px">
                      <select id="Lipid_Triglyceride_Date" name="Lipid_Triglyceride_Date" tabindex="1" class="existing_event" style="width: 1px;">
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
                      <select id="Lipid_Triglyceride_Month" name="Lipid_Triglyceride_Month"  tabindex="1" class="existing_event" style="width: 1px;">
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
                      <select id="Lipid_Triglyceride_Year" name="Lipid_Triglyceride_Year"  tabindex="1" class="existing_event" style="width: 1px;">
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
                <div class="formcontrol2-2" style="width: 181px;">
                  <div class="dvFloat">
                    <div style="float:left; padding:0px 3px 0px 0px">
                      <select id="lipid_LDL_Date" name="lipid_LDL_Date"  tabindex="1" class="existing_event" style="width: 1px;">
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
                      <select id="lipid_LDL_Month" name="lipid_LDL_Month"  tabindex="1" class="existing_event" style="width: 1px;">
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
                      <select id="lipid_LDL_Year" name="lipid_LDL_Year"  tabindex="1" class="existing_event" style="width: 1px;">
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
                <div class="formcontrol2-2" style="width: 181px;">
                  <div class="dvFloat">
                    <div style="float:left; padding:0px 3px 0px 0px">
                      <select id="lipid_HDL_Date" name="lipid_HDL_Date"  tabindex="1" class="existing_event" style="width: 1px;">
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
                      <select id="lipid_HDL_Month" name="lipid_HDL_Month"  tabindex="1" class="existing_event" style="width: 1px;">
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
                      <select id="lipid_HDL_Year" name="lipid_HDL_Year"  tabindex="1" class="existing_event" style="width: 1px;">
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
                <div class="formcontrol2-2" style="width: 181px;">
                  <div class="dvFloat">
                    <div style="float:left; padding:0px 3px 0px 0px">
                      <select id="lipid_Cholesterol_Date" name="lipid_Cholesterol_Date"  tabindex="1" class="existing_event" style="width: 1px;">
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
                      <select id="lipid_Cholesterol_Month" name="lipid_Cholesterol_Month"  tabindex="1" class="existing_event" style="width: 1px;">
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
                      <select id="lipid_Cholesterol_Year" name="lipid_Cholesterol_Year" tabindex="1" class="existing_event" style="width: 1px;">
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
                        <div class="formcontrol2-3" style="padding-right: 10px; width: 172px;">
                          <input type="text" name="txt_HD_Result_Triglyceride" id="txt_HD_Result_Triglyceride" value="" placeholder="" style="width: 153px;" />
                        </div>
                        <div class="formcontrol2-3" style="padding-right: 10px; width: 172px;">
                          <input type="text" name="txt_HD_Result_LDL" id="txt_HD_Result_LDL" value="" placeholder="" style="width: 153px;" />
                        </div>
                        <div class="formcontrol2-3" style="padding-right: 10px; width: 172px;">
                          <input type="text" name="txt_HD_Result_HDL" id="txt_HD_Result_HDL" value="" placeholder="" style="width: 153px;" />
                        </div>
                        <div class="formcontrol2-3" style=" width: 172px;">
                          <input type="text" name="txt_HD_Result_Cholesterol" id="txt_HD_Result_Cholesterol" value="" placeholder="" style="width: 153px;" />
                        </div>
                      </div>
                      <div class="dvFloat formpadding"  style="padding:10px 0px 15px 0px">
                                <div class="formlabel1-1p">&nbsp;</div>
                                <div style="float: right; border: solid 0px #006600;">
                                  <div style=" width:84px; height:30px; float:left; padding-right:10px;"> <a href="#" class="button4">SUBMIT</a></div>
                                  <div style=" width:84px; height:30px; float:left;padding-right:10px;"> <a class="button2" onClick="showCancel();" style="cursor:pointer">Cancel</a></div>
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
        </div>
      </div>
</div>
</section>
   <?php include 'includes/bottom.php'?>
<script type="text/javascript" src="js/jquery.form-2.4.0.min.js"></script>
<script type="text/javascript" src="js/jqeasy.dropdown.min.js"></script>

<script type="text/javascript">

var countries=new ddtabcontent("tabstabs");
countries.setpersist(true);
countries.setselectedClassTarget("link"); //"link" or "linkparent"
countries.init();

var countries1=new ddtabcontent("calorie_tab");
countries1.setpersist(true);
countries1.setselectedClassTarget("link"); //"link" or "linkparent"
countries1.init();

var countries10=new ddtabcontent("tabstabs10");
countries10.setpersist(true);
countries10.setselectedClassTarget("link"); //"link" or "linkparent"
countries10.init();

</script>

</body>
</html>
