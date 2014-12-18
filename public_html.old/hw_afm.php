<?php include 'includes/common.inc.php'?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Alivemeter</title>
<?php include 'includes/links.php'?>
<link href="style/main.css" rel="stylesheet" type="text/css">
<link href="style/reset.css" rel="stylesheet" type="text/css">
<link href="style/fonts.css" rel="stylesheet" type="text/css">
<link href="style/bxslider.css" rel="stylesheet" type="text/css">
<link href="style/paging_style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" language="javascript" src="js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" language="javascript" src="js/scrolltopcontrol.js"></script>
<link href="style/bhupali.css" rel="stylesheet" type="text/css">
<link href="style/jupiter.css" rel="stylesheet" type="text/css">
<link type="text/css" rel="stylesheet" href="css/style.css" />

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
#dd_nav li{
	float:left;
	margin-right:10px;
	position:relative;
}
#dd_nav a{
	display:block;
	padding: 0px 0px 0px 12px;
	color:#fff;

	text-decoration:none;
}
#dd_nav a:hover{
	color:#fff;

	
}

#dd_nav ul{

	
	list-style:none;
	position:absolute;
	left:-9999px; 
}
#dd_nav ul li{
	padding-top:1px; 
	float:none;padding-left:5px;
}
#dd_nav ul a{
	white-space:nowrap; 
}
#dd_nav li:hover ul{ 
	left:0; 
}
#dd_nav li:hover a{ 

	text-decoration:none;
}
#dd_nav li:hover ul a{ 
	text-decoration:none;
}
#dd_nav li:hover ul li a:hover{ /
	
}
</style>

</head>

<body>
<?php include 'includes/top.php'?>
<section>
  <div class="top_ou">
    <div class="top_in" style="border: solid 0px #000066; margin-bottom: 0px;">
      <div class="top">
      	<div class="cal_12">
        	<div class="DvFloat" style="padding-top: 2px;">
            <div class="health_greenbg_title">
            	<span style="text-align: center; text-transform: uppercase; font-size: 21px;" class="f_dgreen">Health</span>
            </div>
                        
            <div  class="wealth_bluebg_title">
            	<span style="text-align: center; text-transform: uppercase; font-size: 21px;" class="f_blue">Wealth</span>
            </div>
                        
            <div class="hw_whitebg_title">
              <div class="contact_green_icon"><a href="inbox_1.html"  style="border:solid 0xp red;"><img src="images/contact_greenblue_icon.png" alt="" title="" border="0"></a></div>
              <div class="contact_blue_icon"><img src="images/contact_video_icon.png" alt="" title="" border="0"></div>
              <div class="contact_bell_icon"><img src="images/contact_bell_icon.png" alt="" title="" border="0"></div>
              <div class="small_red_bg">2</div>
            </div>
            </div>
        </div>
      <div class="cal_12">
          <div class="DvFloat">
          	<div class="afmleft">Aligned Family Member</div>
            <div class="afmright">2<span class="f_grey">/5</span></div>
          </div>
           <div class="afm">
           	<ul>
            	<li style="margin-left: 0px;">
                	<div class="DvFloat">
                        <div class="img"><img src="images/afm/01.png" alt="" title="" border="0"></div>
                        <div class="redtitle">Pinaki Guin</div>
                        <div class="DvFloat f_darkblack" style="padding: 11px 0px; text-align: center;">Reward Points</div>
                        <div class="DvFloat f_red" style="padding: 0px 0px 15px 0px; text-align: center; font-weight: bold;">1150</div>
                    </div>
                </li>
                <li>
                	<div class="DvFloat">
                        <div class="img"><img src="images/afm/02.png" alt="" title="" border="0"></div>
                        <div class="redtitle">Tanushri Guin</div>
                        <div class="DvFloat f_darkblack" style="padding: 11px 0px; text-align: center;">Reward Points</div>
                        <div class="DvFloat f_red" style="padding: 0px 0px 15px 0px; text-align: center; font-weight: bold;">600</div>
                    </div>
                </li>
                
                <li>
                	<div class="DvFloat">
                        <div class="img"><img src="images/afm/03.png" alt="" title="" border="0"></div>
                        <div class="redtitle">Manisha Guin</div>
                        <div class="DvFloat f_darkblack" style="padding: 11px 0px; text-align: center;">Reward Points</div>
                        <div class="DvFloat f_red" style="padding: 0px 0px 15px 0px; text-align: center; font-weight: bold;">450</div>
                    </div>
                </li>
                <li>
                	<div class="DvFloat">
                        <div class="img"><img src="images/afm/04.png" alt="" title="" border="0"></div>
                        <!--<div class="redtitle">Manisha Guin</div>
                        <div class="DvFloat f_darkblack" style="padding: 11px 0px; text-align: center;">Reward Points</div>
                        <div class="DvFloat f_red" style="padding: 0px 0px 15px 0px; text-align: center; font-weight: bold;">450</div>-->
                    </div>
                </li>
                <li>
                	<div class="DvFloat">
                        <div class="img"><img src="images/afm/04.png" alt="" title="" border="0"></div>
                        <!--<div class="redtitle">Manisha Guin</div>
                        <div class="DvFloat f_darkblack" style="padding: 11px 0px; text-align: center;">Reward Points</div>
                        <div class="DvFloat f_red" style="padding: 0px 0px 15px 0px; text-align: center; font-weight: bold;">450</div>-->
                    </div>
                </li>
                <li>
                	<div class="DvFloat">
                        <div class="img"><img src="images/afm/04.png" alt="" title="" border="0"></div>
                        <!--<div class="redtitle">Manisha Guin</div>
                        <div class="DvFloat f_darkblack" style="padding: 11px 0px; text-align: center;">Reward Points</div>
                        <div class="DvFloat f_red" style="padding: 0px 0px 15px 0px; text-align: center; font-weight: bold;">450</div>-->
                    </div>
                </li>
            </ul>
           </div>
           
           <div class="DvFloat" style="border-bottom: dashed 1px #000; border-top: dashed 1px #000;">
          	<div class="afm_trp_dv">total reward points:<span style="font-weight: bold;"> 2200</span></div>
            <div class="afm_btn_dv">
            	<div style="margin-top:0px; float: right;"><a href="#" class="buttonafm" style="width:209px">Align Family Member<span></span></a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section>
	<div class="cal_full_size gray_bg" style="padding-top: 30px;">
    	<div class="cal_12 m_outo">
        	<div class="dvFloat">
            	<div style="margin:0px auto; width:1000px; border:solid 0px red;">
                <div class="dvFloat formpadding">
                  <div class="formlabel">
                    <label style="line-height:15px; float: left; line-height: 25px; text-align: left; font-size: 13px; width: 200px; border:solid 0px red; text-align:left; font-family: 'myriad_web_proregular'; color:#666666">Relation with key account holder <span class="redtxt">*</span></label>
                  </div>
                  <div style="float: right; width: 800px; border: solid 0px red;">
                    <select id="cmb_Marital_Status" name="cmb_Marital_Status" tabindex="1" class="existing_event" style="width: 125px;">
                      <option value="Select">Select</option>
                    </select>
                  </div>
                </div>
              <div class="ali_div_left">
                
                <div class="dvFloat formpadding">
                  <div class="formlabel">
                    <label class="formlabel">Name <span class="redtxt">*</span></label>
                  </div>
                  <div class="formcontrol">
                    <input type="text" name="txt_Fullname" id="txt_Fullname" value="" />
                  </div>
                </div>
                <div class="dvFloat formpadding">
                  <div class="formlabel">
                    <label class="formlabel">Gender <span class="redtxt">*</span></label>
                  </div>
                  <div class="formcontrol">
                    <input type="radio" id="Male" name="Gender" value="Male" >
                    <label for="Male">Male</label>
                    &nbsp;&nbsp;
                    <input type="radio" id="Female" name="Gender" value="Female">
                    <label for="Female">Female</label>
                    &nbsp;&nbsp; </div>
                </div>
                <div class="dvFloat formpadding">
                  <div class="formlabel">
                    <label class="formlabel">Date of Birth <span class="redtxt">*</span></label>
                  </div>
                  <div class="formcontrol">
                    <div class="dvFloat">
                            <div style="float:left; padding:0px 4px 0px 0px">
                              <select id="cmb_Date" name="cmb_Date" tabindex="1" title="" class="existing_event" style="width: 5px;">
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
                            <div style="float:left; padding:0px 4px 0px 0px">
                              <select id="cmb_Month" name="cmb_Month" tabindex="1" class="existing_event" style="width: 5px;">
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
                              <select  id="cmb_Year" name="cmb_Year" tabindex="1" class="existing_event" style="width: 6px;">
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
                <div class="dvFloat formpadding">
                  <div class="formlabel">
                    <label class="formlabel">Marital Status <span class="redtxt">*</span></label>
                  </div>
                  <div class="formcontrol">
                    <select  id="cmb_marital_status" name="cmb_marital_status" tabindex="1" class="existing_event" style="width: 180px;">
                      <option value="Select">Select</option>
                    </select>
                  </div>
                </div>
                <div class="dvFloat formpadding">
                  <div class="formlabel">
                    <label class="formlabel">Height</label>
                  </div>
                  <div class="formcontrol">
                    <input type="text" name="txt_Height" id="txt_Height" value="" />
                  </div>
                </div>
                <div class="dvFloat formpadding">
                  <div class="formlabel">
                    <label class="formlabel">Weight</label>
                  </div>
                  <div class="formcontrol">
                    <input type="text" name="txt_Weight" id="txt_Weight" value="" />
                  </div>
                </div>
                <div class="dvFloat formpadding">
                  <div class="formlabel">
                    <label class="formlabel">Blood Group</label>
                  </div>
                  <div class="formcontrol">
                    <input type="text" name="txt_Blood_Group" id="txt_Blood_Group" value="" />
                  </div>
                </div>
                <div class="dvFloat formpadding">
                  <div class="formlabel">
                    <label class="formlabel">Phone(landline)</label>
                  </div>
                  <div class="formcontrol">
                    <div style="float:left; padding:0px 15px 0px 0px">
                      <input type="text" name="txt_Landline_code" id="txt_Landline_code" value="" autofocus="" placeholder="+91" style="width:30px">
                    </div>
                    <div style="float:left; padding:0px 15px 0px 0px">
                      <input type="text" name="txt_Area_code" id="txt_Area_code" value="" autofocus="" placeholder="Area Code" style="width:65px">
                    </div>
                    <div style="float:left; padding:0px 0px 0px 0px">
                      <input type="text" name="txt_landline_no" id="txt_landline_no" value="" autofocus="" placeholder="" style="width:80px">
                    </div>
                  </div>
                </div>
                <div class="dvFloat formpadding">
                  <div class="formlabel">
                    <label class="formlabel">Mobile <span class="redtxt">*</span></label>
                  </div>
                  <div class="formcontrol">
                    <div style="float:left; padding:0px 15px 0px 0px">
                      <input type="text" name="txt_Mobile_code" id="txt_Mobile_code" value="" autofocus="" placeholder="+91" style="width:30px">
                    </div>
                    <div style="float:left; padding:0px 0px 0px 0px">
                      <input type="text" name="txt_Mobile_no" id="txt_Mobile_no" value="" autofocus="" placeholder="" style="width:172px">
                    </div>
                  </div>
                </div>
                <div class="dvFloat formpadding">
                  <div class="formlabel">
                    <label class="formlabel">Email <span class="redtxt">*</span></label>
                  </div>
                  <div class="formcontrol">
                    <input type="text" name="txt_Email" id="txt_Email" value="" />
                  </div>
                </div>
                <div class="dvFloat formpadding">
                  <div class="formlabel">
                    <label class="formlabel">UID(adhar card no.)</label>
                  </div>
                  <div class="formcontrol">
                    <input type="text" name="txt_UID" id="txt_UID" value="" />
                  </div>
                </div>
                <div class="dvFloat formpadding">
                  <div class="formlabel">
                    <label class="formlabel">Password</label>
                  </div>
                  <div class="formcontrol"><span style="font-size:11px"> The Password will be sent to the Alligned family <br>
                    Member email id as given below.</span> </div>
                </div>
                <div class="dvFloat formpadding">
                  <div class="formlabel">
                    <div style=" width:85px; height:30px; float:left"> <a href="register_step2.html" class=" button2" style="text-align:center">Back</a></div>
                  </div>
                  <div class="formcontrol"  style=""> </div>
                </div>
              </div>
              <div class="ali_div_right">
                <div class="dvFloat formpadding">
                  <div class="formlabel"> <div  style="background-image:url(images/register_steps/small_upload_pic_bg.jpg); background-repeat:no-repeat; width:112px; height:131px; margin:0px auto;padding:0px; float:left">
                    <div  style="text-align:center;padding:5px 1px 0px 0px;"><img src="images/register_steps/small_upload_pic.jpg" alt=""></div>
                  </div></div>
                  <div class="formcontrol"><div class="dvFloat" style="text-align:left; padding-top:50px"> <a href="#" style="text-decoration:underline">Upload photo</a></div></div>
                </div>
                <div class="dvFloat formpadding">
                  <div class="formlabel">
                    <label class="formlabel">Earning Member  </label>
                  </div>
                  <div class="formcontrol">
                    <input type="checkbox" name="chk_Earning_Member" id="chk_Earning_Member" value=""  onClick="javascript:enabledisable()"/>
                  </div>
                </div>
                <div class="dvFloat formpadding">
                  <div class="formlabel">
                    <label class="formlabel">Profession <span class="redtxt">*</span></label>
                  </div>
                  <div class="formcontrol">
                    <select  id="cmb_Profession" name="cmb_Marital_Status" tabindex="1" class="existing_event" style="width: 180px;">
                      <option value="Select">Select</option>
                    </select>
                  </div>
                </div><div class="dvFloat formpadding" id="divEnable">
                <div class="dvFloat formpadding">
                  <div class="formlabel">
                    <label class="formlabel">Company Name <span class="redtxt">*</span></label>
                  </div>
                  <div class="formcontrol">
                    <input type="text" name="txt_Company_name" id="txt_Company_name" value=""/>
                  </div>
                </div>
                <div class="dvFloat formpadding">
                  <div class="formlabel">
                    <label class="formlabel">Designation</label>
                  </div>
                  <div class="formcontrol">
                    <input type="text" name="txt_Designation" id="txt_Designation" value=""/>
                  </div>
                </div>
                <div class="dvFloat formpadding">
                  <div class="formlabel">
                    <label class="formlabel">Travel Mode</label>
                  </div>
                  <div class="formcontrol">
                    <input type="text" name="txt_Travel_Mode" id="txt_Travel_Mode" value=""/>
                  </div>
                </div>
                <div class="dvFloat formpadding">
                  <div class="formlabel">
                    <label class="formlabel">Daily Travel Time</label>
                  </div>
                  <div class="formcontrol">
                    <div style="float:left; padding:0px 15px 0px 0px">
                    	<select name="cmb_Travel_hour" id="cmb_Travel_hour" tabindex="1" class="existing_event" style="width: 4px;">
                            <option value="0" selected="selected">HH</option>
                            
                        </select>
                      
                    </div>
                    <div style="float:left; padding:0px 15px 0px 0px">
                      <select name="cmb_Travel_Min" id="cmb_Travel_Min" tabindex="1" class="existing_event" style="width: 4px;">
                          <option value="Min">Min</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="dvFloat formpadding">
                  <div class="formlabel">
                    <label class="formlabel">Age of Retirement <span class="redtxt">*</span></label>
                  </div>
                  <div class="formcontrol">
                    <input type="text" name="txt_Age_of_Retirement" id="txt_Age_of_Retirement" value="" />
                    <div style="padding:10px 0px 0px 10px; float:left;color: #a8a8a8;">years</div>
                  </div>
                </div>
                
                <div class="dvFloat formpadding">
                  <div class="formlabel">
                    <label class="formlabel">Life Expectancy <span class="redtxt">*</span></label>
                  </div>
                  <div class="formcontrol">
                    <input type="text" name="txt_Life_Expectancy" id="txt_Life_Expectancy" value="" />
                    <div class="div_input_text">years</div>
                  </div>
                </div>
                <div class="dvFloat formpadding">
                  <div class="formlabel">
                    &nbsp;
                  </div>
                  <div class="formcontrol">
                    &nbsp;
                  </div>
                </div>
                <div class="dvFloat formpadding">
                  <div class="formlabel">
                    &nbsp;
                  </div>
                  <div class="formcontrol">
                    &nbsp;
                  </div>
                </div></div>
                <div class="dvFloat formpadding">
                  <div class="formcontrol1" >
                    <div style=" width:156px; height:30px; float:left;"> <a href="index.html" class="button2" style="text-align:center">SKIP FOR NOW</a></div>
                    <div style=" width:156px; height:30px; float:right;padding-right:42px;"> <a href="health_wealth_setup1.html" class="button1" style="text-align:center">SUBMIT</a></div>
                  </div>
                </div>
                <div class="dvFloat formpadding">
                  <div class="formlabel"> &nbsp; </div>
                  <div class="formcontrol"  style="text-align:right; padding:20px 42px 20px 0px"> <span class="redtxt">*</span> Compulsory field </div>
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
</body>
</html>
