<?php include 'includes/common.inc.php'?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Alivemeter</title>
<?php include 'includes/links.php'?>
<style type="text/css">
#dd_nav{
	list-style:none;
	
	border:solid 0px red;
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
	background:#333;
}



</style>
<link rel="stylesheet" type="text/css" href="style/nutritionist_tabcontent.css" />
<script type="text/javascript" src="js/tabcontent.js"></script>
<link href="style/main.css" rel="stylesheet" type="text/css">
<link href="style/reset.css" rel="stylesheet" type="text/css">
<link href="style/fonts.css" rel="stylesheet" type="text/css">
<link href="style/bxslider.css" rel="stylesheet" type="text/css">
<link href="style/jupiter.css" rel="stylesheet" type="text/css">
<link type="text/css" rel="stylesheet" href="css/style.css" />
<link href="style/bhupali.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="style/nutri_sub_tabcontent.css" />
<!-- Popup CSS Start -->
<style type="text/css">


.hover {
    position:absolute;
	padding-left: 5px;
}

.tooltip { /* hide and position tooltip */
  background-image:url(images/nutritionist/popup_img.png); background-repeat:no-repeat;
  color: 000;
  opacity:0;
  position:absolute;
  -webkit-transition: opacity 0.5s;
  -moz-transition: opacity 0.5s;
  -ms-transition: opacity 0.5s;
  -o-transition: opacity 0.5s;
  transition: opacity 0.5s;
  width: 483px;
  height: 178px;
  z-index:1;
  margin: -100px 0px 0px 20px;
  padding: 19px 0px 0px 29px;
  text-align: left;
}

.hover:hover .tooltip { /* display tooltip on hover */
    opacity:1;
}
</style>
<!-- Popup CSS End -->

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
</head>
<body>
<?php include 'includes/top.php'?>
<section>
  <div class="top_ou">
    <div class="top_in">
      <div class="top">
        <div class="cal_12" style="padding-top: 15px;">
            <div class="DvFloat" style="border-bottom: solid 1px #c5c5c5;">
            	<div style="width: 50%; float: left; margin-bottom: 0px;"><h1 class="f_red" style="text-align: left; font-size: 18px;  margin-bottom: 7px;">USER DETAILS</h1></div>
                <div style="width: 50%; float: right; text-align: right; margin-bottom: -3px;">
           	    	<div style=" width:190px; height:20px; float:right;"> <a href="#" class="buttonreset" style="text-align:center">BACK TO CLIENT PROFILE</a></div>
                </div>
            </div>
            <div class="cal_12" style="border: solid 0px #0066CC;">
                <div class="adviceonline_md">
                	<div class="DvFloat" style="padding-top: 15px;">
                		<div class="photoareabg">
                    	<div class="nutritionistphoto"> <img src="images/nutritionist_photo.png" alt="" title="" border="0"> </div>
                    </div>
                    	<div class="nutritionistright">
                        <div class="DvFloat">
                          <div class="DvFloat f_grey" style="font-size: 18px;">Kumar Amit</div>
                          <div class="f_grey" style="width: 75%; float: left; padding: 5px 0px 15px 0px; border: solid 0px #993300;">
                            <div class="DvFloat">
                              <div class="nutrisubdetail">
                              	<div class="DvFloat">
                                	<div class="subsubleft"><span style="font-weight: bold;">Sex:</span></div>
                              		<div class="subsubright">Male</div>
                                </div>
                              </div>
                              <div class="nutrisubdetail">
                              	<div class="DvFloat">
                                	<div class="subsubleft"><span style="font-weight: bold;">Profession:</span></div>
                              		<div class="subsubright">dsafs  fddfds</div>
                                </div>
                              </div>
                            </div>
                            <div class="DvFloat">
                              <div class="nutrisubdetail">
                              	<div class="DvFloat">
                                	<div class="subsubleft"><span style="font-weight: bold;">Age:</span></div>
                              		<div class="subsubright">26 years</div>
                                </div>
                              </div>
                              <div class="nutrisubdetail">
                              	<div class="DvFloat">
                                	<div class="subsubleft"><span style="font-weight: bold;">Company:</span></div>
                              		<div class="subsubright">Accord Fintech Pvt Ltd</div>
                                </div>
                              </div>
                            </div>
                            <div class="DvFloat">
                              <div class="nutrisubdetail">
                              	<div class="DvFloat">
                                	<div class="subsubleft"><span style="font-weight: bold;">Blood Group:</span></div>
                              		<div class="subsubright">B+</div>
                                </div>
                              </div>
                              <div class="nutrisubdetail">
                              	<div class="DvFloat">
                                	<div class="subsubleft"><span style="font-weight: bold;">Designation:</span></div>
                              		<div class="subsubright">Quality Analyst</div>
                                </div>
                              </div>
                            </div>
                            <div class="DvFloat">
                              <div class="nutrisubdetail">
                              	<div class="DvFloat">
                                	<div class="subsubleft"><span style="font-weight: bold;">Height:</span></div>
                              		<div class="subsubright">165</div>
                                </div>
                              </div>
                              <div class="nutrisubdetail">
                              	<div class="DvFloat">
                                	<div class="subsubleft"><span style="font-weight: bold;">Daily Travel Time:</span></div>
                              		<div class="subsubright">5:5</div>
                                </div>
                              </div>
                            </div>
                            <div class="DvFloat">
                              <div class="nutrisubdetail">
                              	<div class="DvFloat">
                                	<div class="subsubleft"><span style="font-weight: bold;">Weight:</span></div>
                              		<div class="subsubright">65</div>
                                </div>
                              </div>
                              <div class="nutrisubdetail">
                              	<div class="DvFloat">
                                	<div class="subsubleft"><span style="font-weight: bold;">Travel Mode:</span></div>
                              		<div class="subsubright">Public Transport</div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                	</div>
                    <div class="DvFloat">
                    	<div class="DvFloat" style="border: solid 0px #0066CC;">
                        <ul id="countrytabs" class="shadetabs">
                            <li><a href="#" rel="country1" class="selected">Client Profile</a></li>
                            <li><a href="#" rel="country2">Calorie Counter</a></li>
                            <li><a href="#" rel="country3">User Food Choices</a></li>
                            <li><a href="#" rel="country4">Diet Plan</a></li>
                        </ul>
        
                        <div style="border: 0px solid gray; width: 965px; float: left; margin-bottom: 1em; padding: 10px 0px; background-color: #FFFFFF; color: #666666;">
                                    <div id="country1" class="tabcontent">
                                    <div class="DvFloat">
                                        <div style=" padding: 15px 0px 0px 0px">
                                        	<div class="nutritionist_div_left">
                                            	<div class="dvFloat">
                                                	<div style="float:left; padding:0px 0px 10px 0px;">
                                                    	<a href="health_dash_board_medication.html"><img src="images/nutritionist/medication.jpg" alt=""></a>
                                                    </div>
                                                </div>
            									<div class="dvFloat">
                                                	<div style="float:left; padding:0px 0px 10px 0px;">
                                                    	<a href="health_dash_board_hospitalization.html"><img src="images/nutritionist/hospitalization.jpg" alt=""></a>
                                                    </div>
                                                </div>
                                                <div class="dvFloat">
                                                	<div style="float:left; padding:0px 0px 10px 0px;">
                                                    	<a href="health_dash_board_immunization.html"><img src="images/nutritionist/immunization.jpg" alt=""></a>
                                                    </div>
                                                </div>
            									<div class="dvFloat">
                                                	<div style="float:left; padding:0px 0px 10px 0px;">
                                                    	<a href="health_dash_board_health_problem.html"><img src="images/nutritionist/health_problems.jpg" alt=""></a>
                                                    </div>
                                                </div>
                                                <div class="dvFloat">
                                                	<div style="float:left; padding:0px 0px 10px 0px;">
                                                    	<a href="health_dash_board_daily_tracking.html"><img src="images/nutritionist/daily_tracking.jpg" alt=""></a>
                                                    </div>
                                                </div>
            									<div class="dvFloat">
                                                	<div style="float:left; padding:0px 0px 10px 0px;">
                                                    	<a href="#"><img src="images/nutritionist/allergies.jpg" alt=""></a>
                                                    </div>
                                                </div>
                                                <div class="dvFloat">
                                                	<div style="float:left; padding:0px 0px 0px 0px;">
                                                    	<a href="#"><img src="images/nutritionist/family_history.jpg" alt=""></a>
                                                    </div>
                                                </div>
                                            </div>
          									<div class="nutritionist_div_right">
                                            	<div class="DvFloat">
                                                    <div class="DvFloat">
                                                        <div class="DvFloat" style="padding-top: 20px;">
                                                            <span class="f_green" style="font-size: 18px; font-weight: bold;">Calories Consumed </span>
                                                        </div>
                                                        <div class="DvFloat" style="padding: 15px 0px; border-bottom: solid 1px #c5c5c5;">
                                                            <table width="100%" border="0" cellpadding="0" cellspacing="0">
                                                                <tr>
                                                                    <td style="width: 33px; background-color: #fff; padding: 10px 0px 5px 0px; text-align: center;">&nbsp;</td>
                                                                    <td class="nutri_sep"></td>
                                                                    <td style="width: 159px; background-color: #fff; padding: 0px 0px 5px 15px; text-align: left; font-size: 14px; color: #656565; vertical-align: middle;">&nbsp;</td>
                                                                    <td class="nutri_sep"></td>
                                                                    <td style="width: 141px; background-color: #f0f0f0; border-top: solid 1px #666666; border-left: solid 1px #666666; border-right: solid 1px #666666; background-color: #656565; color: #FFFFFF; font-size: 11px; text-transform: uppercase; text-align: center;">TARGET</td>
                                                                    <td class="nutri_sep"></td>
                                                                    <td style="width: 121px; background-color: #f0f0f0; border-top: solid 1px #666666; border-left: solid 1px #666666; border-right: solid 1px #666666; background-color: #656565; color: #FFFFFF; font-size: 11px; text-transform: uppercase; text-align: center;">ACTUALS</td>
                                                                    <td class="nutri_sep"></td>
                                                                    <td style="width: 321px; background-color: #fff;">&nbsp;</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="nutri_caloriecount_box1">
                                                                    	<div class="hover">
                                                                        	<img src="images/nutritionist/green_chat_icon.png" alt="" title="" border="0">
                                                                          <div class="tooltip">
                                                                           	  <div class="DvFloat">
                                                                              	<textarea name="Commenthere" id="Commenthere" style="width: 415px; height: 95px;">Comment here</textarea>
                                                                              </div>
                                                                              <div class="DvFloat">
                                                                              	<div style="padding-left: 150px; float: left; padding-top: 3px;">
                                                                                	<div style=" width:85px; height:30px; float:left; text-align: center">
                                                                                    	<a href="register_step2.html" class="button1" style="text-align:center">Send</a>
                                                                                    </div>
                                                                                </div>
                                                                              </div>
                                                                          </div>
                                                                        </div>
                                                                    </td>
                                                                  <td class="nutri_sep"></td>
                                                                    <td class="nutri_caloriecount_box2">Calories Burned </td>
                                                                    <td class="nutri_sep"></td>
                                                                    <td class="nutri_caloriecount_box3">
                                                                        <table width="100%" border="0" cellpadding="0" cellspacing="0">
                                                                            <tr>
                                                                                <td style="width: 65%; text-align: center; line-height: 14px;"><span style="font-size: 16px;">4630</span><br><span style="font-size: 10px;">Calories</span></td>
                                                                                <td style="width: 35%; text-align: center; vertical-align:top"><img src="images/nutritionist/calories_burned_icon.png" alt="" title="" border="0"></td>
                                                                            </tr>
                                                                        </table>
                                                                    </td>
                                                                    <td class="nutri_sep"></td>
                                                                    <td class="nutri_caloriecount_box4" style="text-align: center; line-height: 14px;"><span style="font-size: 16px; text-align: center; ">4630</span><br><span style="font-size: 10px;">Calories</span></td>
                                                                    <td class="nutri_sep"></td>
                                                                    <td class="nutri_caloriecount_box5">
                                                                        <!--<div style="width: 189px; float: left; background-color: #f0f0f0; padding:8px 0px;">&nbsp;</div>
                                                                        <div style="width: 175px; float: left; height: 12px; background-color: #99cc00; margin: 13px 0px 0px 0px;
    position: absolute;"></div>
                                                                        <div style="width: 105px; float: right; background-image: url(images/nutritionist/grey_line.png); background-repeat: repeat-x; padding: 19px 0px; border: solid 0px #000000;"></div>-->
                                                                        <div style="width: 321px; height: 38px; float: left; background-image: url(images/nutritionist/grey_line.png); background-repeat: repeat-x; padding: 0px; border: solid 0px #000000;">
                                                                        	<div style="width: 215px; height: 22px; float: left; background-color: #f0f0f0; padding:8px 0px;">&nbsp;</div>
                                                                            <div style="width: 204px; float: left; height: 12px; background-color: #99cc00; margin: 13px 0px 0px 0px;
    position: absolute;"></div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="8" style="background-color: #FFFFFF; height: 4px;"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="nutri_caloriecount_box1"><img src="images/nutritionist/grey_chat_icon.png" alt="" title="" border="0"></td>
                                                                    <td class="nutri_sep"></td>
                                                                    <td class="nutri_caloriecount_box2">Calories Consumed </td>
                                                                    <td class="nutri_sep"></td>
                                                                    <td class="nutri_caloriecount_box3">
                                                                        <table width="100%" border="0" cellpadding="0" cellspacing="0">
                                                                            <tr>
                                                                                <td style="width: 65%; text-align: center; line-height: 14px;"><span style="font-size: 16px;">1820</span><br><span style="font-size: 10px;">Calories</span></td>
                                                                                <td style="width: 35%; text-align: center; vertical-align:top"><img src="images/nutritionist/calories_consumed_icon.png" alt="" title="" border="0"></td>
                                                                            </tr>
                                                                        </table>
                                                                    </td>
                                                                    <td class="nutri_sep"></td>
                                                                    <td class="nutri_caloriecount_box4" style="text-align: center; line-height: 14px;"><span style="font-size: 16px; text-align: center; ">779</span><br><span style="font-size: 10px;">Calories</span></td>
                                                                    <td class="nutri_sep"></td>
                                                                    <td class="nutri_caloriecount_box5">
                                                                        <!--<div style="width: 189px; float: left; background-color: #f0f0f0; padding:8px 0px;">&nbsp;</div>
                                                                        <div style="width: 140px; float: left; height: 12px; background-color: #99cc00; margin: 13px 0px 0px 0px;
    position: absolute;"></div>
                                                                        <div style="width: 105px; float: right; background-image: url(images/nutritionist/grey_line.png); background-repeat: repeat-x; height: 38px;"></div>-->
                                                                        <div style="width: 321px; height: 38px; float: left; background-image: url(images/nutritionist/grey_line.png); background-repeat: repeat-x; padding: 0px; border: solid 0px #000000;">
                                                                        	<div style="width: 200px; height: 22px; float: left; background-color: #f0f0f0; padding:8px 0px;">&nbsp;</div>
                                                                            <div style="width: 134px; float: left; height: 12px; background-color: #99cc00; margin: 13px 0px 0px 0px;
    position: absolute;"></div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                
                                                                <tr>
                                                                    <td colspan="8" style="background-color: #FFFFFF; height: 4px;"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="nutri_caloriecount_box1"><img src="images/nutritionist/grey_chat_icon.png" alt="" title="" border="0"></td>
                                                                    <td class="nutri_sep"></td>
                                                                    <td class="nutri_caloriecount_box2">Physical Activity </td>
                                                                    <td class="nutri_sep"></td>
                                                                    <td class="nutri_caloriecount_box3">
                                                                        <table width="100%" border="0" cellpadding="0" cellspacing="0">
                                                                            <tr>
                                                                                <td style="width: 65%; text-align: center; line-height: 14px;"><span style="font-size: 16px;">01:19</span><br><span style="font-size: 10px;">HH:MM</span></td>
                                                                                <td style="width: 35%; text-align: center; vertical-align:top"><img src="images/nutritionist/physical_activity_icon.png" alt="" title="" border="0"></td>
                                                                            </tr>
                                                                        </table>
                                                                    </td>
                                                                    <td class="nutri_sep"></td>
                                                                    <td class="nutri_caloriecount_box4" style="text-align: center; line-height: 14px;"><span style="font-size: 16px; text-align: center; ">02:15</span><br><span style="font-size: 10px;">HH:MM</span></td>
                                                                    <td class="nutri_sep"></td>
                                                                    <td class="nutri_caloriecount_box5">
                                                                        <!--<div style="width: 189px; float: left; background-color: #f0f0f0; padding:8px 0px;">&nbsp;</div>
                                                                        <div style="width: 270px; float: left; height: 12px; background-color: #99cc00; margin: 13px 0px 0px 0px;
    position: absolute;"></div>
                                                                        <div style="width: 105px; float: right; background-image: url(images/nutritionist/grey_line.png); background-repeat: repeat-x; height: 38px;"></div>-->
                                                                        <div style="width: 321px; height: 38px; float: left; background-image: url(images/nutritionist/grey_line.png); background-repeat: repeat-x; padding: 0px; border: solid 0px #000000;">
                                                                        	<div style="width: 226px; height: 22px; float: left; background-color: #f0f0f0; padding:8px 0px;">&nbsp;</div>
                                                                            <div style="width: 288px; float: left; height: 12px; background-color: #99cc00; margin: 13px 0px 0px 0px;
    position: absolute;"></div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                
                                                                <tr>
                                                                    <td colspan="8" style="background-color: #FFFFFF; height: 4px;"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="nutri_caloriecount_box1"><img src="images/nutritionist/grey_chat_icon.png" alt="" title="" border="0"></td>
                                                                    <td class="nutri_sep"></td>
                                                                    <td class="nutri_caloriecount_box2">
                                                                        <select id="Weight"  title="" style="width: 78px; background-color: #ccc; border: 1px solid #cccccc -webkit-border-radius: 0px; -moz-border-radius: 0px; border-radius: 0px; -moz-box-shadow: inset 0 0 2px 2px #d2d2d2; -webkit-box-shadow: inset 0 0 2px 2px #d2d2d2; box-shadow: inset 0 0 2px 2px #d2d2d2; -webkit-transition: border linear 0.2s, box-shadow linear 0.2s; -moz-transition: border linear 0.2s, box-shadow linear 0.2s; -ms-transition: border linear 0.2s, box-shadow linear 0.2s; -o-transition: border linear 0.2s, box-shadow linear 0.2s; transition: border linear 0.2s, box-shadow linear 0.2s; padding: 5px 0px 5px 1px; float: left; color: #808080; font-family: 'FuturaMdBTMedium'; font-size: 12px;">
                                                                            <option value="Weight">Weight</option>
                                                                        </select>
                                                                    </td>
                                                                    <td class="nutri_sep"></td>
                                                                    <td class="nutri_caloriecount_box3">
                                                                        <table width="100%" border="0" cellpadding="0" cellspacing="0">
                                                                            <tr>
                                                                                <td style="width: 65%; text-align: center; line-height: 14px;"><span style="font-size: 16px; text-align: center; ">No Data</span><br><span style="font-size: 10px;">Current size</span></td>
                                                                                <td style="width: 35%; text-align: center; vertical-align:top"><img src="images/nutritionist/weight_icon.png" alt="" title="" border="0"></td>
                                                                            </tr>
                                                                        </table>
                                                                    </td>
                                                                    <td class="nutri_sep"></td>
                                                                    <td class="nutri_caloriecount_box4" style="text-align: center; line-height: 14px;"><span style="font-size: 16px; text-align: center; ">5324</span><br><span style="font-size: 10px;">Current size</span></td>
                                                                    <td class="nutri_sep"></td>
                                                                    <td style="width: 312px;">
                                                                        <div style="float: left; padding: 0px 5px; width: 97%; background-color: #f0f0f0;"><div style="float: left; background-color: #f0f0f0; padding:8px 5px; font-size: 11px;"><span class="f_grey">You have not logged your waist.</span><br><span class="f_green">Add Waist Measurement</span></div></div>
                                                                        <!--<div style="width: 270px; float: left; height: 12px; background-color: #99cc00; margin: 13px 0px 0px 0px;
    position: absolute;"></div>
                                                                        <div style="width: 105px; float: right; background-image: url(images/nutritionist/grey_line.png); background-repeat: repeat-x; height: 38px;"></div>-->
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <div class="DvFloat">
                                                    	<div class="DvFloat" style="padding-top: 20px;">
                                                    		<span class="f_green" style="font-size: 18px; font-weight: bold;">Your Daily Report Card</span>
                                                    	</div>
                                                        <div class="DvFloat" style="padding: 15px 0px; border-bottom: solid 1px #c5c5c5;">
                                                            <table width="100%" border="0" cellpadding="0" cellspacing="0">
                                                                <tr>
                                                                    <td style="width: 207px; background-color: #fff; padding: 10px 0px 5px 0px; text-align: center;">&nbsp;</td>
                                                                    <td class="dailyreport_sep"></td>
                                                                    <td style="width: 100px; background-color: #f0f0f0; border-top: solid 1px #666666; border-left: solid 1px #666666; border-right: solid 1px #666666; background-color: #656565; color: #FFFFFF; font-size: 11px; text-transform: uppercase; text-align: center;">Avg range</td>
                                                                    <td class="dailyreport_sep"></td>
                                                                    <td style="width: 100px; background-color: #f0f0f0; border-top: solid 1px #666666; border-left: solid 1px #666666; border-right: solid 1px #666666; background-color: #656565; color: #FFFFFF; font-size: 11px; text-transform: uppercase; text-align: center;">ACTUAL</td>
                                                                    <td class="dailyreport_sep"></td>
                                                                    <td style="width: 100px; background-color: #f0f0f0; border-top: solid 1px #666666; border-left: solid 1px #666666; border-right: solid 1px #666666; background-color: #656565; color: #FFFFFF; font-size: 11px; text-transform: uppercase; text-align: center;">Date Recorded</td>
                                                                    <td class="dailyreport_sep"></td>
                                                                    <td style="width: 240px; background-color: #fff;">&nbsp;</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="nutri_dailyreport_box1"><img src="images/nutritionist/minus_icon.png" alt="" title="" border="0" style="border: solid 0px #000; padding-right: 10px;"><span class="f_grey" style="font-size: 13px;">Blood Pressure</span></td>
                                                                    <td class="dailyreport_sep"></td>
                                                                    <td class="nutri_dailyreport_box2">117</td>
                                                                    <td class="dailyreport_sep"></td>
                                                                    <td class="nutri_dailyreport_box3">
                                                                        117
                                                                    </td>
                                                                    <td class="dailyreport_sep"></td>
                                                                    <td class="nutri_dailyreport_box4" style="text-align: center; line-height: 14px;">117</td>
                                                                    <td class="dailyreport_sep"></td>
                                                                    <td class="nutri_dailyreport_box5">
                                                                        <!--<div style="width: 133px; float: left; background-color: #f0f0f0; padding:8px 0px;">&nbsp;</div>
                                                                        <div style="width: 200px; float: left; height: 12px; background-color: #99cc00; margin: 13px 0px 0px 0px;
    position: absolute;"></div>
                                                                        <div style="width: 90px; float: right; background-image: url(images/nutritionist/grey_line.png); background-repeat: repeat-x; padding: 19px 0px; border: solid 0px #000000;"></div>-->
                                                                        <div style="width: 234px; height: 38px; float: left; background-image: url(images/nutritionist/grey_line.png); background-repeat: repeat-x; padding: 0px; border: solid 0px #000000;">
                                                                        	<div style="width: 129px; height: 22px; float: left; background-color: #f0f0f0; padding:8px 0px;">&nbsp;</div>
                                                                            <div style="width: 167px; float: left; height: 12px; background-color: #99cc00; margin: 13px 0px 0px 0px;
    position: absolute;"></div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td colspan="8" style="background-color: #FFFFFF; height: 4px;"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="nutri_dailyreport_box1"><img src="images/nutritionist/minus_icon.png" alt="" title="" border="0" style="border: solid 0px #000; padding-right: 10px;"><span class="f_grey" style="font-size: 13px;">Fasting Blood Sugar</span></td>
                                                                    <td class="dailyreport_sep"></td>
                                                                    <td class="nutri_dailyreport_box2">256</td>
                                                                    <td class="dailyreport_sep"></td>
                                                                    <td class="nutri_dailyreport_box3">256</td>
                                                                    <td class="dailyreport_sep"></td>
                                                                    <td class="nutri_dailyreport_box4" style="text-align: center; line-height: 14px;">256</td>
                                                                    <td class="dailyreport_sep"></td>
                                                                    <td class="nutri_dailyreport_box5">
                                                                        <!--<div style="width: 133px; float: left; background-color: #f0f0f0; padding:8px 0px;">&nbsp;</div>
                                                                        <div style="width: 130px; float: left; height: 12px; background-color: #99cc00; margin: 13px 0px 0px 0px;
    position: absolute;"></div>
                                                                        <div style="width: 90px; float: right; background-image: url(images/nutritionist/grey_line.png); background-repeat: repeat-x; padding: 19px 0px; border: solid 0px #000000;"></div>-->
                                                                        <div style="width: 234px; height: 38px; float: left; background-image: url(images/nutritionist/grey_line.png); background-repeat: repeat-x; padding: 0px; border: solid 0px #000000;">
                                                                        	<div style="width: 114px; height: 22px; float: left; background-color: #f0f0f0; padding:8px 0px;">&nbsp;</div>
                                                                            <div style="width: 91px; float: left; height: 12px; background-color: #99cc00; margin: 13px 0px 0px 0px;
    position: absolute;"></div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                
                                                                <tr>
                                                                    <td colspan="8" style="background-color: #FFFFFF; height: 4px;"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="nutri_dailyreport_box1"><img src="images/nutritionist/minus_icon.png" alt="" title="" border="0" style="border: solid 0px #000; padding-right: 10px;"><span class="f_grey" style="font-size: 13px;">Blood Sugar After Meal (PPBS)</span></td>
                                                                    <td class="dailyreport_sep"></td>
                                                                    <td class="nutri_dailyreport_box2">110</td>
                                                                    <td class="dailyreport_sep"></td>
                                                                    <td class="nutri_dailyreport_box3">110</td>
                                                                    <td class="dailyreport_sep"></td>
                                                                    <td class="nutri_dailyreport_box4" style="text-align: center; line-height: 14px;">110</td>
                                                                    <td class="dailyreport_sep"></td>
                                                                    <td class="nutri_dailyreport_box5">
                                                                        <!--<div style="width: 133px; float: left; background-color: #f0f0f0; padding:8px 0px;">&nbsp;</div>
                                                                        <div style="width: 170px; float: left; height: 12px; background-color: #99cc00; margin: 13px 0px 0px 0px;
    position: absolute;"></div>
                                                                        <div style="width: 90px; float: right; background-image: url(images/nutritionist/grey_line.png); background-repeat: repeat-x; padding: 19px 0px; border: solid 0px #000000;"></div>-->
                                                                        
                                                                        <div style="width: 234px; height: 38px; float: left; background-image: url(images/nutritionist/grey_line.png); background-repeat: repeat-x; padding: 0px; border: solid 0px #000000;">
                                                                        	<div style="width: 140px; height: 22px; float: left; background-color: #f0f0f0; padding:8px 0px;">&nbsp;</div>
                                                                            <div style="width: 151px; float: left; height: 12px; background-color: #99cc00; margin: 13px 0px 0px 0px;
    position: absolute;"></div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                                
                                                                <tr>
                                                                    <td colspan="8" style="background-color: #FFFFFF; height: 4px;"></td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="nutri_dailyreport_box1"><img src="images/nutritionist/minus_icon.png" alt="" title="" border="0" style="border: solid 0px #000; padding-right: 10px;"><span class="f_grey" style="font-size: 13px;">Random Blood Sugar</span></td>
                                                                    <td class="dailyreport_sep"></td>
                                                                    <td class="nutri_dailyreport_box2">235</td>
                                                                    <td class="dailyreport_sep"></td>
                                                                    <td class="nutri_dailyreport_box3">235</td>
                                                                    <td class="dailyreport_sep"></td>
                                                                    <td class="nutri_dailyreport_box4" style="text-align: center; line-height: 14px;">235</td>
                                                                    <td class="dailyreport_sep"></td>
                                                                    <td class="nutri_dailyreport_box5">
                                                                        <!--<div style="width: 133px; float: left; background-color: #f0f0f0; padding:8px 0px;">&nbsp;</div>
                                                                        <div style="width: 170px; float: left; height: 12px; background-color: #99cc00; margin: 13px 0px 0px 0px;
    position: absolute;"></div>
                                                                        <div style="width: 90px; float: right; background-image: url(images/nutritionist/grey_line.png); background-repeat: repeat-x; padding: 19px 0px; border: solid 0px #000000;"></div>-->
                                                                        <div style="width: 234px; height: 38px; float: left; background-image: url(images/nutritionist/grey_line.png); background-repeat: repeat-x; padding: 0px; border: solid 0px #000000;">
                                                                        	<div style="width: 129px; height: 22px; float: left; background-color: #f0f0f0; padding:8px 0px;">&nbsp;</div>
                                                                            <div style="width: 123px; float: left; height: 12px; background-color: #99cc00; margin: 13px 0px 0px 0px;
    position: absolute;"></div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="DvFloat" style="padding-top: 20px;">
                                                    	<div class="DvFloat">
                                                        	<div class="DvFloat">
                                                    			<div style="width: 49%; float: left; border: solid 0px #003300;"><span class="f_green" style="font-size: 18px; font-weight: bold;">Your Calorie Chart</span></div>
                                                            	<div style="width: 51%; float: left; text-align: right; border: solid 0px #003300;"><img src="images/shair_icon.gif" alt="" title="" border="0" style="border: solid 0px #000000;"></div>
                                                    		</div>
                                                            <div class="DvFloat">
                                                    			<div style="width: 61%; float: left; padding-top: 20px; border: solid 0px #000000;">
                                                                	<div class="DvFloat">
                                                                    	<ul id="countrynutri" class="shadetabsnutri">
                                                                        	<li><a href="#" rel="countryutri1" class="selected">1 Week</a></li>
                                                                            <li><a href="#" rel="countryutri2">1 Month</a></li>
                                                                            <li><a href="#" rel="countryutri3">1 Year</a></li>
                                                                        </ul>
                                                                        <div style="border: 0px solid gray; width: 740px; float: left; margin-bottom: 1em; padding: 10px; background-color: #FFFFFF; border: solid 0px #003300; color: #666666;">
                                                                        	<div id="countryutri1" class="tabcontentnutri">
                                                                                <div class="DvFloat">
                                                                                	<div class="DvFloat" style="padding: 15px 0px; border-bottom: solid 1px #c5c5c5;">
                                                                                    	<div class="DvFloat">
                                                                                        	<div style="width: 22px; float: left; height: 22px; background-image: url(images/prev_md_paging.png); background-repeat: no-repeat;"></div>
                                                                                            <div style="width: 695px; float: left; text-align: center; font-size: 15px; font-weight: bold;" class="f_grey">27 Jan - 2 Feb 2014</div>
                                                                                            <div style="width: 22px; float: left; height: 22px; background-image: url(images/next_md_paging.png); background-repeat: no-repeat;"></div>
                                                                                        </div>
                                                                    					<div class="DvFloat" style="padding-top: 5px;">
                                                                                            <img src="images/nutritionist/chart.jpg" alt="" title="" border="0">
                                                                                        </div>
                                                                                    </div>
                                                                                    
                                                                                    <div class="DvFloat" style="padding: 15px 0px; border-bottom: solid 1px #c5c5c5;">
                                                                                    	<div class="DvFloat">
                                                                                        	<span class="f_green" style="font-size: 18px; font-weight: bold;">Active Medication Status</span>
                                                                                        </div>
                                                                                        <div class="DvFloat" style="padding-top: 10px;">
                                                                                        	<table width="100%" border="0" cellspacing="4" cellpadding="4">
                                                                                              <tr>
                                                                                                <td class="nutri_tdgreybg1">MEDICINE</td>
                                                                                                <td class="nutri_tdgreybg2">Dosage</td>
                                                                                                <td class="nutri_tdgreybg3">Duration<br>(IN A Day)</td>
                                                                                                <td class="nutri_tdgreybg4">Health Problem </td>
                                                                                                <td class="nutri_tdgreybg5">Intake<br>Reminder</td>
                                                                                                <td  class="nutri_tdgreybg6">Purchase<br>Reminder</td>
                                                                                              </tr>
                                                                                              
                                                                                              <tr>
                                                                                                <td class="nutri_tdlightgreybg1">disprin</td>
                                                                                                <td class="nutri_tdlightgreybg2">1</td>
                                                                                                <td class="nutri_tdlightgreybg3">3</td>
                                                                                                <td class="nutri_tdlightgreybg4">This is Photoshop's version  of Lorem </td>
                                                                                                <td class="nutri_tdlightgreybg5">3</td>
                                                                                                <td  class="nutri_tdlightgreybg6">3</td>
                                                                                              </tr>
                                                                                              
                                                                                              <tr>
                                                                                                <td class="nutri_tdlightgreybg1">Crocin Cough Syrup</td>
                                                                                                <td class="nutri_tdlightgreybg2">1 spoon</td>
                                                                                                <td class="nutri_tdlightgreybg3">4</td>
                                                                                                <td class="nutri_tdlightgreybg4">This is Photoshop's version  of Lorem </td>
                                                                                                <td class="nutri_tdlightgreybg5">4</td>
                                                                                                <td  class="nutri_tdlightgreybg6">4</td>
                                                                                              </tr>
                                                                                            </table>
                                                                                        </div>
                                                                                    </div>
                                                                                    
                                                                                    <div class="DvFloat" style="padding: 15px 0px; border-bottom: solid 1px #c5c5c5;">
                                                                                    	<div class="DvFloat">
                                                                                        	<span class="f_green" style="font-size: 18px; font-weight: bold;">Medical Reports and Prescriptions</span>
                                                                                        </div>
                                                                                        <div class="DvFloat" style="padding-top: 10px;">
                                                                                        	<ul id="countrynutrisub" class="shadetabsnutri">
                                                                                                <li><a href="#" rel="countryutrisub1" class="selected">Lab Reports</a></li>
                                                                                                <li><a href="#" rel="countryutrisub2">Radiology Reports</a></li>
                                                                                                <li><a href="#" rel="countryutrisub3">Prescriptions</a></li>
                                                                                            </ul>
                                                                                            <div style="border: 0px solid gray; width: 728px; float: left; margin-bottom: 1em; padding: 10px; background-color: #FFFFFF; border: solid 0px #003300; color: #666666;">
                                                                                            <div id="countryutrisub1" class="tabcontentnutri">
                                                                                            	<div class="DvFloat">
                                                                                                	<table width="100%" border="0" cellspacing="4" cellpadding="4">
                                                                                              <tr>
                                                                                                <td style="width: 13%;" class="nutri_tdgreybg1">Report Date </td>
                                                                                                <td style="width: 38%;" class="nutri_tdgreybg2">Test Name</td>
                                                                                                <td style="width: 40%;" class="nutri_tdgreybg3">Health Problem </td>
                                                                                                <td style="width: 10%;" class="nutri_tdgreybg4">actions </td>
                                                                                              </tr>
                                                                                              
                                                                                              <tr>
                                                                                                <td class="nutri_tdlightgreybg1">04-Mar-2010 </td>
                                                                                                <td style="text-align: left; padding-left: 10px;" class="nutri_tdlightgreybg2">This is Photoshop's version</td>
                                                                                                <td style="text-align: left; padding-left: 10px;" class="nutri_tdlightgreybg3">This is Photoshop's version  of Lorem  </td>
                                                                                                <td style="text-align: center;" class="nutri_tdlightgreybg4"><img src="images/nutritionist_action_icon.jpg" alt="" title="" border="0"></td>
                                                                                              </tr>
                                                                                              
                                                                                              <tr>
                                                                                                <td class="nutri_tdlightgreybg1">04-Mar-2010 </td>
                                                                                                <td style="text-align: left; padding-left: 10px;" class="nutri_tdlightgreybg2">This is Photoshop's version</td>
                                                                                                <td style="text-align: left; padding-left: 10px;" class="nutri_tdlightgreybg3">This is Photoshop's version  of Lorem  </td>
                                                                                                <td style="text-align: center;" class="nutri_tdlightgreybg4"><img src="images/nutritionist_action_icon.jpg" alt="" title="" border="0"></td>
                                                                                              </tr>
                                                                                            </table>
                                                                                                </div>
                                                                                            </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div id="countryutri2" class="tabcontentnutri">
                                                                            Tab content 2 here<br />Tab content 2 here<br />
                                                                            </div>
                                                                        </div>
                                                                    	
                                                                    </div>
                                                                </div>
                                                            	<div style="width: 37%; float: right; text-align: left; padding-top: 12px;">
                                                                	<div class="DvFloat">
                                                                    	<div style="width: 93px; float: left; padding-top: 5px; text-align: left;" class="f_black">Chose a report</div>
                                                                    	<div style="width: 190px; float: right; text-align: left; border: solid 0px #000000;" class="f_black">
                                                                    	<select  id="choseareport" name="choseareport" class="existing_event"  title="" style="width: 130px;">
                                                                        	<option value="Select">Excercise Minutes</option>
                                                                        </select>
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
                                    
                                    <div id="country2" class="tabcontent">
                                    Tab content 2 here<br />Tab content 2 here<br />
                                    </div>
                                    
                                    <div id="country3" class="tabcontent">
                                    Tab content 3 here<br />Tab content 3 here<br />
                                    </div>
                                    
                                    <div id="country4" class="tabcontent">
                                    Tab content 4 here<br />Tab content 4 here<br />
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
  </div>
</section>
<?php include 'includes/bottom.php'?>
<script type="text/javascript" src="js/jQuery.1.8.2.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<script type="text/javascript"> $.noConflict();</script>
<script type="text/javascript">
var countries=new ddtabcontent("countrytabs")
countries.setpersist(true)
countries.setselectedClassTarget("link") //"link" or "linkparent"
countries.init()

</script>

<script type="text/javascript">
var countrynutri=new ddtabcontent("countrynutri")
countrynutri.setpersist(true)
countrynutri.setselectedClassTarget("link") //"link" or "linkparent"
countrynutri.init()

</script>

<script type="text/javascript">
var countrynutri=new ddtabcontent("countrynutrisub")
countrynutrisub.setpersist(true)
countrynutrisub.setselectedClassTarget("link") //"link" or "linkparent"
countrynutrisub.init()

</script>
</body>
</html>
