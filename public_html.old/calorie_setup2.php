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
        
      </div>
    </div>
  </div>
</section>
<section>
  <div class="cal_full_size">
    <div class="cal_12 m_outo"><div class="dvFloat">
          <div class="dvWrapper">
            <div style="float:left; padding:0px 0px 0px 0px; height:50px; border:solid 0px red;">
              <ul class="calorie_setup">
                <li class="past"  style="width:350px;">
                  <div>
                    <div class="Step_title_d_Grey"><a href="health_dash_board.html" title="Step 2" style="padding:0px; margin:0px; text-align:left">Health dashboard </a></div>
                    <span><a href="health_dash_board.html" title=""><img src="images/calorie_setup/health_dashboard_icon.png" alt="" /></a></span><a href="health_dash_board.html" title=""> </a></div>
                </li>
                <li class="active"  style="width:350px;">
                  <div>
                    <div class="Step_title_green"><a href="calorie_setup1.html" title="" style="padding:0px; margin:0px; text-align:left;color:#7ca500">Calorie Setup</a></div>
                    <span><a href="#" title=""><img src="images/calorie_setup/calorie_setup_icon.png" alt="" /></a></span><a href="#" title=""> </a></div>
                </li>
                <li class="current" style="width:237px;">
                  <div>
                    <div class="Step_title_d_Grey_small"><a href="#" title="Step 2" style="padding:0px; margin:0px; text-align:left">Upload Reports</a></div>
                    <span><a href="calorie_setup3.html" title=""><img src="images/calorie_setup/upload_report_icon.png" alt="" /></a></span><a href="calorie_setup3.html" title=""> </a></div>
                </li>
                <div class="calorie_setupline"></div>
              </ul>
            </div>
          </div>
        </div>
      <div class="dvFloat">
        <div class="dvWrapper">
          <div style="padding:35px 0px 35px 0px">
            <div class="health_dashboard_div_left">
              <div class="dvFloat">
                <div style="float:left;padding:0px 0px 10px 0px"><a href="#"><img src="images/calorie_setup/review_goals.png" alt=""></a></div>
              </div>
              <div class="dvFloat">
                <div style="float:left"><a href="calorie_setup4.html"><img src="images/calorie_setup/measurements_h.png" alt=""></a></div>
              </div>
            </div>
            <div class="health_dashboard_div_right">
              <table cellpadding="0" cellspacing="4" style="width:100%">
                <tr>
                  <td class="calorie_td_header">NUTRITIONAL GOALS </td>
                  <td class="calorie_td_header">GOALS </td>
                </tr>
                <tr>
                  <td colspan="2"><table cellpadding="0" cellspacing="0" style="width:100%">
                      <tr>
                        <td class="calorie_td_left"><img src="images/calorie_setup/net_calorie.jpg" alt="" /></td>
                        <td class="calorie_td_middle">Net Calories Consumed* / Day </td>
                        <td class="calorie_td_right">1400 cal/day</td>
                      </tr>
                      <tr>
                        <td class="calorie_td_left"><img src="images/calorie_setup/carbs_day.jpg" alt="" /></td>
                        <td class="calorie_td_middle">Carbs / Day </td>
                        <td class="calorie_td_right">86 g</td>
                      </tr>
                      <tr>
                        <td class="calorie_td_left"><img src="images/calorie_setup/fat_day.jpg" alt="" /></td>
                        <td class="calorie_td_middle">Fat / Day </td>
                        <td class="calorie_td_right">47 g</td>
                      </tr>
                      <tr>
                        <td class="calorie_td_left1"><img src="images/calorie_setup/protein_day.jpg" alt="" /></td>
                        <td class="calorie_td_middle1">Protein / Day </td>
                        <td class="calorie_td_right1">24 g</td>
                      </tr>
                    </table></td>
                </tr>
                <tr>
                  <td class="calorie_td_header">YOUR DIET PROFILE </td>
                  <td class="calorie_td_header">GOALS </td>
                </tr>
                <tr>
                  <td colspan="2"><table cellpadding="0" cellspacing="0" style="width:100%">
                      <tr>
                        <td class="calorie_td_left"><img src="images/calorie_setup/net_calorie_normal.jpg" alt="" /></td>
                        <td class="calorie_td_middle">Net Calories Consumed* / Day </td>
                        <td class="calorie_td_right">2500 cal/day</td>
                      </tr>
                      <tr>
                        <td class="calorie_td_left"><img src="images/calorie_setup/net_calorie_consumed.jpg" alt="" /></td>
                        <td class="calorie_td_middle">Net Calories Consumed </td>
                        <td class="calorie_td_right">1400 cal/day</td>
                      </tr>
                      <tr>
                        <td class="calorie_td_left"><img src="images/calorie_setup/calorie_deficit.jpg" alt="" /></td>
                        <td class="calorie_td_middle">Daily Calorie Deficit </td>
                        <td class="calorie_td_right">1100 cal</td>
                      </tr>
                      <tr>
                        <td class="calorie_td_left1"><img src="images/calorie_setup/weight_loss.jpg" alt="" /></td>
                        <td class="calorie_td_middle1">Projected Weight Loss </td>
                        <td class="calorie_td_right1">1000 g</td>
                      </tr>
                    </table></td>
                </tr>
                <tr>
                  <td class="calorie_td_header">FITNESS GOALS </td>
                  <td class="calorie_td_header">GOALS </td>
                </tr>
                <tr>
                  <td colspan="2"><table cellpadding="0" cellspacing="0" style="width:100%">
                      <tr>
                        <td class="calorie_td_left"><img src="images/calorie_setup/burned.jpg" alt="" /></td>
                        <td class="calorie_td_middle">Calories Burned / Week </td>
                        <td class="calorie_td_right">593 cal/week</td>
                      </tr>
                      <tr>
                        <td class="calorie_td_left"><img src="images/calorie_setup/workout_week.jpg" alt="" /></td>
                        <td class="calorie_td_middle">Workouts / Week </td>
                        <td class="calorie_td_right">2 workout/week</td>
                      </tr>
                      <tr>
                        <td class="calorie_td_left1"><img src="images/calorie_setup/minutes_workout.jpg" alt="" /></td>
                        <td class="calorie_td_middle1">Minutes / Workout </td>
                        <td class="calorie_td_right1">60 minutes/workout</td>
                      </tr>
                    </table></td>
                </tr>
                 <tr>
                  <td class="calorie_td_header1"><div style=" width:155px; height:30px; float:left;padding-right:10px;"> <a href="calorie_setup1.html" class="button4">CHANGE GOALS</a></div></td>
                      <td class="calorie_td_header1"><div style=" width:267px; height:30px; float:right;padding-right:10px;"> <a href="calorie_setup3.html" class="button4">UPDATE YOUR calorie setup</a></div> </td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
   <?php include 'includes/bottom.php'?>
<script type="text/javascript" src="js/jQuery.1.8.2.js"></script>
<script type="text/javascript" src="js/jquery.bxslider.min.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<script type="text/javascript">

var countries=new ddtabcontent("calorie_tab");
countries.setpersist(true);
countries.setselectedClassTarget("link"); 
countries.init();


</script>
</body>
</html>
