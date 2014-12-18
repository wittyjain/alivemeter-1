<?php include 'includes/common.inc.php'?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Alivemeter</title>
<?php include 'includes/links.php'?>
<link href="style/main.css" rel="stylesheet" type="text/css">
<script type="text/javascript"  language="javascript" src="js/jquery-1.7.1.min.js"></script>
<script type="text/javascript"  language="javascript" src="js/jquery.jcarousel.min.js"></script>
<link rel="stylesheet" type="text/css" href="style/tabcontent.css" />
<script type="text/javascript" src="js/tabcontent.js"></script>
<link href="css/skin.css" rel="stylesheet" type="text/css"/>
<script language="JavaScript" src="js/PopUp.js" type="text/javascript"></script>
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
					document.getElementById("divtab9").innerHTML = xmlhttp.responseText;
					document.getElementById("divtab10").innerHTML = xmlhttp.responseText;
					document.getElementById("divtab11").innerHTML = xmlhttp.responseText;
					document.getElementById("divtab12").innerHTML = xmlhttp.responseText;
				}
			}
			
				xmlhttp.open("GET","sub_tabs.html",true);
				xmlhttp.send();
			
	
	}
</script>
<link rel="stylesheet" type="text/css" href="style/health_dashboard_tabcontent.css" />
<script type="text/javascript" src="js/tabcontent.js"></script>
<link href="style/reset.css" rel="stylesheet" type="text/css">
<link href="style/fonts.css" rel="stylesheet" type="text/css">
<link href="style/bxslider.css" rel="stylesheet" type="text/css">
<link href="style/paging_style.css" rel="stylesheet" type="text/css" />
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
<style>
b {
	font-weight:bold
}
</style>
<script type="text/javascript">
jQuery(document).ready(function () {
	
	$('input.one').simpleDatepicker({ startdate: 1900, enddate: 2050 });
	$('input.two').simpleDatepicker({ startdate: 2008, enddate: 2012 });
	$('input.three').simpleDatepicker({ chosendate: '9/9/2010', startdate: '6/10/2008', enddate: '7/20/2011' });
	$('input.four').simpleDatepicker({ x: 45, y: 3 });
});
</script>
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
    <div class="cal_12 m_outo">
      <div class="dvFloat" style="margin-bottom:25px;">
        <div class="dvWrapper" >
          <div class="DvFloat" style="padding-bottom:35px;">
            <div style="width: 49%; float: left;"><span class="f_green" style="font-size: 18px; font-weight: bold;font-size: 28px;font-family: 'myriad_web_proregular'; font-weight: bold;">Your Daily Health app</span></div>
            <div style="width: 49%; float: left; text-align: right;"> <a style="cursor: pointer;" target="_parent" onClick="javascript:Popup.showModal('dvpopup-form',null,null,{'screenColor':'#333333','screenOpacity':.6});" ><img src="images/view_wealth_calender.jpg" alt="" /></a> </div>
          </div>
          <div class="DvFloat">
            <div class="DvFloat" style="padding: 15px 0px 30px 0px; border-bottom: solid 0px #c5c5c5;">
              <div class="DvFloat">
                <div style="width: 22px; float: left; height: 22px; background-image: url(images/prev_md_paging.png); background-repeat: no-repeat;"></div>
                <div style="width: 922px; float: left; text-align: center; font-size: 28px;font-family: 'myriad_web_proregular'; font-weight: bold;" class="f_grey">January 2014</div>
                <div style="width: 22px; float: left; height: 22px; background-image: url(images/next_md_paging.png); background-repeat: no-repeat;"></div>
              </div>
            </div>
          </div>
          <div style="width:96.6%; float: left; text-align: right;border:solid 0px red;padding-bottom:35px;"> <a href="#"><img src="images/customize_data.jpg" alt="" /></a> </div>
          <div style="float:left; width:966px; height:auto; border:solid 1px #bababa">
            <div class="dvFloat">
              <div class="Calender_box_Head">Sunday </div>
              <div class="Calender_box_Head">Monday</div>
              <div class="Calender_box_Head">Tuesday</div>
              <div class="Calender_box_Head">Wednesday</div>
              <div class="Calender_box_Head">Thursday</div>
              <div class="Calender_box_Head">Friday</div>
              <div class="Calender_box_Head">Saturday</div>
            </div>
            <div class="dvFloat">
              <div class="Calender_box1">
                <div class="dvgreen_calender">26</div>
                <br>
                <table cellpadding="0" cellspacing="0" style="width:100%;line-height:17px;">
                  <tr>
                    <td class="Calender_left" style="padding-top:15px;">Diet </td>
                    <td class="Calender_right">1790 cal </td>
                  </tr>
                  <tr>
                    <td class="Calender_left">Water</td>
                    <td class="Calender_right">8 glasses</td>
                  </tr>
                  <tr>
                    <td class="Calender_left">Sleep</td>
                    <td class="Calender_right">8 hrs</td>
                  </tr>
                  <tr>
                    <td class="Calender_left">Excercise</td>
                    <td class="Calender_right">45 min</td>
                  </tr>
                </table>
              </div>
              <div class="Calender_box">
                <div class="dvgreen_calender">27</div>
              </div>
              <div class="Calender_box">
                <div class="dvgreen_calender">28</div>
              </div>
              <div class="Calender_box">
                <div class="dvgreen_calender">29</div>
              </div>

              <div class="Calender_box">
                <div class="dvgreen_calender">30</div>
              </div>
              <div class="Calender_box">
                <div class="dvgreen_calender">31</div>
              </div>
              <div class="Calender_box">
                <div class="dvgreen_calender">1</div>
              </div>
            </div>
            <div class="dvFloat">
              <div class="Calender_box">
                <div class="dvgreen_calender">2</div>
              </div>
              <div class="Calender_box">
                <div class="dvgreen_calender">3</div>
              </div>
              <div class="Calender_box">
                <div class="dvgreen_calender">4</div>
              </div>
              <div class="Calender_box">
                <div class="dvgreen_calender">5</div>
              </div>
              <div class="Calender_box">
                <div class="dvgreen_calender">6</div>
              </div>
              <div class="Calender_box">
                <div class="dvgreen_calender">7</div>
              </div>
              <div class="Calender_box">
                <div class="dvgreen_calender">8</div>
              </div>
            </div>
            <div class="dvFloat">
              <div class="Calender_box">
                <div class="dvgreen_calender">9</div>
              </div>
              <div class="Calender_box">
                <div class="dvgreen_calender">10</div>
              </div>
              <div class="Calender_box">
                <div class="dvgreen_calender">11</div>
              </div>
              <div class="Calender_box">
                <div class="dvgreen_calender">12</div>
              </div>
              <div class="Calender_box">
                <div class="dvgreen_calender">13</div>
              </div>
              <div class="Calender_box">
                <div class="dvgreen_calender">14</div>
              </div>
              <div class="Calender_box">
                <div class="dvgreen_calender">15</div>
              </div>
            </div>
            <div class="dvFloat">
              <div class="Calender_box">
                <div class="dvgreen_calender">16</div>
              </div>
              <div class="Calender_box">
                <div class="dvgreen_calender">17</div>
              </div>
              <div class="Calender_box">
                <div class="dvgreen_calender">18</div>
              </div>
              <div class="Calender_box">
                <div class="dvgreen_calender">19</div>
              </div>
              <div class="Calender_box">
                <div class="dvgreen_calender">20</div>
              </div>
              <div class="Calender_box">
                <div class="dvgreen_calender">21</div>
              </div>
              <div class="Calender_box">
                <div class="dvgreen_calender">22</div>
              </div>
            </div>
            <div class="dvFloat">
              <div class="Calender_box">
                <div class="dvgreen_calender">23</div>
              </div>
              <div class="Calender_box">
                <div class="dvgreen_calender">24</div>
              </div>
              <div class="Calender_box">
                <div class="dvgreen_calender">25</div>
              </div>
              <div class="Calender_box">
                <div class="dvgreen_calender">26</div>
              </div>
              <div class="Calender_box">
                <div class="dvgreen_calender">27</div>
              </div>
              <div class="Calender_box">
                <div class="dvgreen_calender">28</div>
              </div>
              <div class="Calender_box">
                <div class="dvgreen_calender">29</div>
              </div>
            </div>
            <div class="dvFloat">
              <div class="Calender_box">
                <div class="dvgreen_calender">30</div>
              </div>
              <div class="Calender_box">
                <div class="dvgreen_calender">31</div>
              </div>
              <div class="Calender_box">
                <div class="dvgreen_calender">1</div>
              </div>
              <div class="Calender_box">
                <div class="dvgreen_calender">2</div>
              </div>
              <div class="Calender_box">
                <div class="dvgreen_calender">3</div>
              </div>
              <div class="Calender_box">
                <div class="dvgreen_calender">4</div>
              </div>
              <div class="Calender_box">
                <div class="dvgreen_calender">5</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php include 'includes/bottom.php'?>
<div id="dvpopup-form" style="text-align: center; width: 100%;position:absoulte;margin:0px; margin-top:15px;display:none  ">
  <table cellpadding="0" cellspacing="0" border="0" width="100%" align="center">
    <tr>
      <td style="text-align:right; border:solid 0px red; float:right"><div style="margin: 5px 0px 0px -23px; position: absolute; text-align:right"> <a href="javascript:Popup.hide('dvpopup-form');" target="_parent" style="text-decoration: none; color: #fff;"> <img src="images/close.png" alt="" title="" border="0" /> </a> </div></td>
    </tr>
    <tr>
      <td valign="top" align="center" style="padding: 20px 10px 20px 10px; background-color:#FFFFFF">
          <div class="dvWrapper" >
            <div class="DvFloat" style="padding-bottom:5px;">
              <div style="width: 24%; float: left; text-align:left"><span class="f_green" style="font-size: 18px; font-weight: bold;font-size: 22px;font-family: 'myriad_web_proregular'; font-weight: bold; color:#FFFFFF">Your Daily Health app</span></div>
              <div style="width: 71.7%; float: right; text-align: right;position: absolute;
margin-top: -2px;"><img src="images/health_calender.jpg" alt="" />&nbsp;<img src="images/wealth_calender.jpg" alt="" /></div>
            </div>
            <div  style="background-color:#FFFFFF; float:left">
              <div class="DvFloat" style="padding: 20px; border-bottom: solid 0px #c5c5c5;">
                <div class="DvFloat">
                  <div style="width: 22px; float: left; height: 22px; background-image: url(images/prev_md_paging.png); background-repeat: no-repeat;"></div>
                  <div style="width: 904px; float: left; text-align: center; font-size: 28px;font-family: 'myriad_web_proregular'; font-weight: bold;" class="f_grey">January 2014</div>
                  <div style="width: 22px; float: left; height: 22px; background-image: url(images/next_md_paging.png); background-repeat: no-repeat;"></div>
                </div>
              </div>
            </div>
            <div style="width:96.6%; float: left; text-align: right;border:solid 0px red;padding-bottom:10px; background-color:#FFFFFF;padding-right:22px;"> <a href="#"><img src="images/customize_data.jpg" alt="" /></a> </div>
            <div style="float:left; width:966px; height:auto; border:solid 1px #bababa">
              <div class="dvFloat">
                <div class="Calender_box_Head">Sunday </div>
                <div class="Calender_box_Head">Monday</div>
                <div class="Calender_box_Head">Tuesday</div>
                <div class="Calender_box_Head">Wednesday</div>
                <div class="Calender_box_Head">Thursday</div>
                <div class="Calender_box_Head">Friday</div>
                <div class="Calender_box_Head">Saturday</div>
              </div>
              <div class="dvFloat">
                <div class="Calender_box1">
                  <div class="dvgreen_calender">26</div>
                  <br>
                  <table cellpadding="0" cellspacing="0" style="width:100%;line-height:17px;">
                    <tr>
                      <td class="Calender_left" style="padding-top:15px;">Diet </td>
                      <td class="Calender_right">1790 cal </td>
                    </tr>
                    <tr>
                      <td class="Calender_left">Water</td>
                      <td class="Calender_right">8 glasses</td>
                    </tr>
                    <tr>
                      <td class="Calender_left">Sleep</td>
                      <td class="Calender_right">8 hrs</td>
                    </tr>
                    <tr>
                      <td class="Calender_left">Excercise</td>
                      <td class="Calender_right">45 min</td>
                    </tr>
                  </table>
                </div>
                <div class="Calender_box">
                  <div class="dvgreen_calender">27</div>
                </div>
                <div class="Calender_box">
                  <div class="dvgreen_calender">28</div>
                </div>
                <div class="Calender_box">
                  <div class="dvgreen_calender">29</div>
                </div>
                <div class="Calender_box">
                  <div class="dvgreen_calender">30</div>
                </div>
                <div class="Calender_box">
                  <div class="dvgreen_calender">31</div>
                </div>
                <div class="Calender_box">
                  <div class="dvgreen_calender">1</div>
                </div>
              </div>
              <div class="dvFloat">
                <div class="Calender_box">
                  <div class="dvgreen_calender">2</div>
                </div>
                <div class="Calender_box">
                  <div class="dvgreen_calender">3</div>
                </div>
                <div class="Calender_box">
                  <div class="dvgreen_calender">4</div>
                </div>
                <div class="Calender_box">
                  <div class="dvgreen_calender">5</div>
                </div>
                <div class="Calender_box">
                  <div class="dvgreen_calender">6</div>
                </div>
                <div class="Calender_box">
                  <div class="dvgreen_calender">7</div>
                </div>
                <div class="Calender_box">
                  <div class="dvgreen_calender">8</div>
                </div>
              </div>
              <div class="dvFloat">
                <div class="Calender_box">
                  <div class="dvgreen_calender">9</div>
                </div>
                <div class="Calender_box">
                  <div class="dvgreen_calender">10</div>
                </div>
                <div class="Calender_box">
                  <div class="dvgreen_calender">11</div>
                </div>
                <div class="Calender_box">
                  <div class="dvgreen_calender">12</div>
                </div>
                <div class="Calender_box">
                  <div class="dvgreen_calender">13</div>
                </div>
                <div class="Calender_box">
                  <div class="dvgreen_calender">14</div>
                </div>
                <div class="Calender_box">
                  <div class="dvgreen_calender">15</div>
                </div>
              </div>
              <div class="dvFloat">
                <div class="Calender_box">
                  <div class="dvgreen_calender">16</div>
                </div>
                <div class="Calender_box">
                  <div class="dvgreen_calender">17</div>
                </div>
                <div class="Calender_box">
                  <div class="dvgreen_calender">18</div>
                </div>
                <div class="Calender_box">
                  <div class="dvgreen_calender">19</div>
                </div>
                <div class="Calender_box">
                  <div class="dvgreen_calender">20</div>
                </div>
                <div class="Calender_box">
                  <div class="dvgreen_calender">21</div>
                </div>
                <div class="Calender_box">
                  <div class="dvgreen_calender">22</div>
                </div>
              </div>
              <div class="dvFloat">
                <div class="Calender_box">
                  <div class="dvgreen_calender">23</div>
                </div>
                <div class="Calender_box">
                  <div class="dvgreen_calender">24</div>
                </div>
                <div class="Calender_box">
                  <div class="dvgreen_calender">25</div>
                </div>
                <div class="Calender_box">
                  <div class="dvgreen_calender">26</div>
                </div>
                <div class="Calender_box">
                  <div class="dvgreen_calender">27</div>
                </div>
                <div class="Calender_box">
                  <div class="dvgreen_calender">28</div>
                </div>
                <div class="Calender_box">
                  <div class="dvgreen_calender">29</div>
                </div>
              </div>
              <div class="dvFloat">
                <div class="Calender_box">
                  <div class="dvgreen_calender">30</div>
                </div>
                <div class="Calender_box">
                  <div class="dvgreen_calender">31</div>
                </div>
                <div class="Calender_box">
                  <div class="dvgreen_calender">1</div>
                </div>
                <div class="Calender_box">
                  <div class="dvgreen_calender">2</div>
                </div>
                <div class="Calender_box">
                  <div class="dvgreen_calender">3</div>
                </div>
                <div class="Calender_box">
                  <div class="dvgreen_calender">4</div>
                </div>
                <div class="Calender_box">
                  <div class="dvgreen_calender">5</div>
                </div>
              </div>
            </div>
          </div>
        </td>
    </tr>
  </table>
</div>
<script type="text/javascript" src="js/jquery.form-2.4.0.min.js"></script>
<script type="text/javascript" src="js/jqeasy.dropdown.min.js"></script>

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
<script type="text/javascript"  language="javascript">

jQuery(document).ready(function() {
    jQuery('#mycarousel1').jcarousel();
});

</script>
</body>
</html>
