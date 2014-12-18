<?php include 'includes/common.inc.php'?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Alivemeter</title>
<?php include 'includes/links.php'?>
<link href="style/main.css" rel="stylesheet" type="text/css">
<!--<script type="text/javascript"  language="javascript" src="js/jquery-1.7.1.min.js"></script>-->
<script type="text/javascript"  language="javascript" src="js/jquery.jcarousel.min.js"></script>
<script type="text/javascript">
function show1(){ document.getElementById('divShowHide').style.display ='block'; } 
function show2(){ document.getElementById('divShowHide').style.display = 'none'; }
function show3(){ document.getElementById('divShowHide1').style.display ='block'; } 
function show4(){ document.getElementById('divShowHide1').style.display = 'none'; }
function show19(){ document.getElementById('divShowHide9').style.display ='block'; } 
function show20(){ document.getElementById('divShowHide9').style.display = 'none'; }
function show21(){ document.getElementById('divShowHide10').style.display ='block'; } 
function show22(){ document.getElementById('divShowHide10').style.display = 'none'; }
function show5(){ document.getElementById('divShowHide2').style.display ='block'; } 
function show6(){ document.getElementById('divShowHide2').style.display = 'none'; }
function show7(){ document.getElementById('divShowHide3').style.display ='block'; } 
function show8(){ document.getElementById('divShowHide3').style.display = 'none'; }
function show9(){ document.getElementById('divShowHide4').style.display ='block'; } 
function show10(){ document.getElementById('divShowHide4').style.display = 'none'; }
function show11(){ document.getElementById('divShowHide5').style.display ='block'; } 
function show12(){ document.getElementById('divShowHide5').style.display = 'none'; }
function show13(){ document.getElementById('divShowHide6').style.display ='block'; } 
function show14(){ document.getElementById('divShowHide6').style.display = 'none'; }
function show15(){ document.getElementById('divShowHide7').style.display ='block'; } 
function show16(){ document.getElementById('divShowHide7').style.display = 'none'; }
function show17(){ document.getElementById('divShowHide8').style.display ='block'; } 
function show18(){ document.getElementById('divShowHide8').style.display = 'none'; }
function showform(){ document.getElementById('divShowHideForm').style.display = 'block'; }
function showCancel(){ document.getElementById('divShowHideForm').style.display = 'none'; }

function showCancel1(){ document.getElementById('divShowHideForm1').style.display = 'none';} 

function showCancel2(){ document.getElementById('divShowHideForm2').style.display = 'none'; }
document.getElementById("txt_urtestname").focus();
document.getElementById("txt_urtestname1").focus();
document.getElementById("txt_ur_healthproblem").focus();

</script>
<script>
	function Pres_Report_Show_Hide()
	{
		 document.getElementById("dvPres_Report_Show_Hide").style.display="none";
		if(document.getElementById("cmb_Prescription_Reports").value ==1){
			
			document.getElementById("dvPres_Report_Show_Hide").style.display="";
			
		}
		else if(document.getElementById("cmb_Prescription_Reports").value ==2){
			
		
			
		}
		 
	}
	
	
	
	function Intake_Reminder_Show_Hide()
	{
	
		 document.getElementById("divIntake_Reminder").style.display="none";
		if(document.getElementById("Chk_Setup_Intake_Reminder").checked == true){
			
			document.getElementById("divIntake_Reminder").style.display="block";
			
		}
		
		 
	}
	
	function Purchase_Reminder_Show_Hide ()
	
	{
	
		 document.getElementById("divPurchase_Reminder").style.display="none";
		if(document.getElementById("Chk_Setup_Purchase_Reminder").checked == true){
			
			document.getElementById("divPurchase_Reminder").style.display="block";
			
		}
		
		 
	}
	
	function Daily_Frequency_enabledisable()
	{
			document.getElementById("chk_Daily_Frequency_HH_Morning").disabled=true;
			document.getElementById("chk_Daily_Frequency_Min_Morning").disabled=true;
			document.getElementById("chk_Daily_Frequency_HH_Afternoon").disabled=true;
			document.getElementById("chk_Daily_Frequency_Min_Afternoon").disabled=true;
			document.getElementById("chk_Daily_Frequency_HH_Evening").disabled=true;
			document.getElementById("chk_Daily_Frequency_Min_Evening").disabled=true;
			document.getElementById("chk_Daily_Frequency_HH_Night").disabled=true;
    		document.getElementById("chk_Daily_Frequency_Min_Night").disabled=true;
			document.getElementById("chk_Daily_Frequency_HH_Morning").style.opacity="0.4";
			document.getElementById("chk_Daily_Frequency_Min_Morning").style.opacity="0.4";
			document.getElementById("chk_Daily_Frequency_HH_Afternoon").style.opacity="0.4";
			document.getElementById("chk_Daily_Frequency_Min_Afternoon").style.opacity="0.4";
			document.getElementById("chk_Daily_Frequency_HH_Evening").style.opacity="0.4";
			document.getElementById("chk_Daily_Frequency_Min_Evening").style.opacity="0.4";
			document.getElementById("chk_Daily_Frequency_HH_Night").style.opacity="0.4";
			document.getElementById("chk_Daily_Frequency_Min_Night").style.opacity="0.4";
			
			
			
		if(document.getElementById("chk_Daily_Frequency_Morning").checked==true){
			
			document.getElementById("chk_Daily_Frequency_HH_Morning").disabled=false;
			document.getElementById("chk_Daily_Frequency_Min_Morning").disabled=false;
			document.getElementById("chk_Daily_Frequency_HH_Morning").style.opacity="1.0";
			document.getElementById("chk_Daily_Frequency_Min_Morning").style.opacity="1.0";
			
			
		}
		 if(document.getElementById("chk_Daily_Frequency_Afternoon").checked==true){
			
			document.getElementById("chk_Daily_Frequency_HH_Afternoon").disabled=false;
			document.getElementById("chk_Daily_Frequency_Min_Afternoon").disabled=false;
			document.getElementById("chk_Daily_Frequency_HH_Afternoon").style.opacity="1.0";
			document.getElementById("chk_Daily_Frequency_Min_Afternoon").style.opacity="1.0";
		
			}
			if(document.getElementById("chk_Daily_Frequency_Evening").checked==true){
			
			document.getElementById("chk_Daily_Frequency_HH_Evening").disabled=false;
			document.getElementById("chk_Daily_Frequency_Min_Evening").disabled=false;
			document.getElementById("chk_Daily_Frequency_HH_Evening").style.opacity="1.0";
			document.getElementById("chk_Daily_Frequency_Min_Evening").style.opacity="1.0";
		
			}
			if(document.getElementById("chk_Daily_Frequency_Night").checked==true){
			
			document.getElementById("chk_Daily_Frequency_HH_Night").disabled=false;
			document.getElementById("chk_Daily_Frequency_Min_Night").disabled=false;
			document.getElementById("chk_Daily_Frequency_HH_Night").style.opacity="1.0";
			document.getElementById("chk_Daily_Frequency_Min_Night").style.opacity="1.0";
		
			}
	}
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
<style type="text/css">
.hover {
	position:absolute;
	padding-left: 5px;
}
.tooltip { /* hide and position tooltip */
	background-image:url(images/nutritionist/popup_img.png);
	background-repeat:no-repeat;
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
<style type="text/css">

#dd_nav {
	list-style:none;
	border:solid 0px red;
	float:right;
	width:247px;
	position:absolute;
	z-index:1;
	margin-top:0px;
	margin-left: 433px;
	border:solid 0px red;
	line-height:20px;
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
/ background:#333;
}
</style>
<link href="css/skin.css" rel="stylesheet" type="text/css"/>
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

function showform(){ document.getElementById('divShowHideForm').style.display = 'block'; }
function showform1(){ document.getElementById('divShowHideForm1').style.display = 'block'; }
function showform2(){ document.getElementById('divShowHideForm2').style.display = 'block'; }

</script>
<!--<script type="text/javascript" src="lib/jquery-1.10.1.min.js"></script>-->
<script type="text/javascript" src="lib/jquery.mousewheel-3.0.6.pack.js"></script>
<script type="text/javascript" src="source/jquery.fancybox.js?v=2.1.5"></script>
<link rel="stylesheet" type="text/css" href="source/jquery.fancybox.css?v=2.1.5" media="screen" />
<link rel="stylesheet" type="text/css" href="source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" />
<script type="text/javascript" src="source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
<script type="text/javascript">
		$(document).ready(function() {

			$(".fancybox-manual-c").click(function() {
				$.fancybox.open([
					{
						href : 'images/gallery/1_b.jpg',
						title : 'Exercise Prescription'
					}, {
						href : 'images/gallery/2_b.jpg',
						title : ''
					}, {
						href : 'images/gallery/3_b.jpg'
					}
				], {
					helpers : {
						thumbs : {
							width: 62,
							height: 80
							
						}
					}
				});
			});


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
      <div class="dvFloat">
        <div class="dvWrapper">
          <div style="float:left; padding:0px 0px 0px 0px; height:50px; border:solid 0px red;">
            <ul class="calorie_setup">
              <li class="past" style="width:350px;">
                <div>
                  <div class="Step_title_d_Grey"><a href="health_dash_board.html" title="Step 2" style="padding:0px; margin:0px; text-align:left;">Health dashboard </a></div>
                  <span><a href="health_dash_board.html" title=""><img src="images/calorie_setup/health_dashboard_icon.png" alt="" /></a></span><a href="calorie_setup1.html" title=""> </a></div>
              </li>
              <li class="past"  style="width:350px;">
                <div>
                  <div class="Step_title_green"><a href="calorie_setup1.html" title="" style="padding:0px; margin:0px; text-align:left">Calorie Setup</a></div>
                  <span><a href="calorie_setup1.html" title=""><img src="images/calorie_setup/calorie_setup_icon.png" alt="" /></a></span><a href="#" title=""> </a></div>
              </li>
              <li class="active" style="width:237px;">
                <div>
                  <div class="Step_title_d_Grey_small"><a href="upload_reports.html" title="Step 2" style="padding:0px; margin:0px; text-align:left;color:#7ca500">Upload Reports</a></div>
                  <span><a href="upload_reports.html" title=""><img src="images/calorie_setup/upload_report_icon.png" alt="" /></a></span></div>
              </li>
              <div class="calorie_setupline"></div>
            </ul>
          </div>
        </div>
      </div>
      <div class="dvFloat">
        <div class="dvWrapper">
          <div style=" padding:25px 0px 25px 0px">
            <div class="DvFloat" style="padding-bottom:50px;">
              <div class="TabDv">
                <div>
                  <ul id="tabstabs" class="shadetabs">
                    <li  class="selected"><a href="#" rel="tabs1" class="selected"> Lab Reports </a></li>
                    <li><a href="#" rel="tabs2">Radiology Reports</a></li>
                    <li><a href="#" rel="tabs3">Presscription</a></li>
                  </ul>
                </div>
                <div class="TabContentDetails">
                  <div id="tabs1" class="tabcontent">
                    <div class="DvFloat" style="padding:10px 0px">
                      <div class="dvFloat formpadding">
                        <div class="formlabel1">
                          <label class="formlabel1">
                          <h2 class="Tab_Title">list</h2>
                          </label>
                        </div>
                        <div class="formcontrol2"> &nbsp; </div>
                      </div>
                      <div class="dvFloat formpadding1">
                        <table cellpadding="0" cellspacing="0"  style="width:100%" >
                          <tr>
                            <td class="tbl_head" >Details</td>
                            <td class="tbl_head">Date Performed </td>
                            <td class="tbl_head">Prescribed by Doctor</td>
                            <td class="tbl_head">Health Problem</td>
                            <td class="tbl_head">Actions</td>
                          </tr>
                          <tr>
                            <td class="tdborder" style="padding-left:20px;">Not Specified </td>
                            <td class="tdborder" style="padding-left:20px;">04-Mar-2010 </td>
                            <td class="tdborder" style="padding-left:20px;">Yes</td>
                            <td class="tdborder" style="padding-left:20px;">Not Specified</td>
                            <td class="tdborder" style="padding-left:20px;"><table cellpadding="0" cellspacing="0"  style="width:100%" >
                                <tr>
                                  <td class="SubTd"><a class="fancybox-manual-c" style="cursor: pointer;"><img src="images/register_steps/view_icon.jpg" alt=""></a></td>
                                  <td class="SubTd1"><a href="#"><img src="images/register_steps/edit_icon.jpg" alt=""></a></td>
                                  <td class="SubTd2"><a href="#"><img src="images/register_steps/delete_icon.jpg" alt=""></a></td>
                                </tr>
                              </table></td>
                          </tr>
                          <tr>
                            <td  class="tdborder" style="padding-left:20px;">Not Specified</td>
                            <td  class="tdborder" style="padding-left:20px;">04-Mar-2010 </td>
                            <td  class="tdborder" style="padding-left:20px;">No</td>
                            <td  class="tdborder" style="padding-left:20px;">Not Specified</td>
                            <td  class="tdborder" style="padding-left:20px;"><table cellpadding="0" cellspacing="0"  style="width:100%" >
                                <tr>
                                  <td class="SubTd"><a  class="fancybox-manual-c" style="cursor: pointer;"><img src="images/register_steps/view_icon.jpg" alt=""></a></td>
                                  <td class="SubTd1"><a href="#"><img src="images/register_steps/edit_icon.jpg" alt=""></a></td>
                                  <td class="SubTd2"><a href="#"><img src="images/register_steps/delete_icon.jpg" alt=""></a></td>
                                </tr>
                              </table></td>
                          </tr>
                          <tr>
                            <td class="tdborder" style="padding-left:20px;">Not Specified</td>
                            <td class="tdborder" style="padding-left:20px;">04-Mar-2010 </td>
                            <td class="tdborder" style="padding-left:20px;">Yes</td>
                            <td class="tdborder" style="padding-left:20px;">Not Specified</td>
                            <td class="tdborder" style="padding-left:20px;"><table cellpadding="0" cellspacing="0"  style="width:100%" >
                                <tr>
                                  <td class="SubTd"><a href="#"><img src="images/register_steps/view_icon.jpg" alt=""></a></td>
                                  <td class="SubTd1"><a href="#"><img src="images/register_steps/edit_icon.jpg" alt=""></a></td>
                                  <td class="SubTd2"><a href="#"><img src="images/register_steps/delete_icon.jpg" alt=""></a></td>
                                </tr>
                              </table></td>
                          </tr>
                          <tr>
                            <td  class="tdborder" style="padding-left:20px;">Not Specified</td>
                            <td  class="tdborder" style="padding-left:20px;">04-Mar-2010 </td>
                            <td  class="tdborder" style="padding-left:20px;">No</td>
                            <td  class="tdborder" style="padding-left:20px;">Not Specified</td>
                            <td  class="tdborder" style="padding-left:20px;"><table cellpadding="0" cellspacing="0"  style="width:100%" >
                                <tr>
                                  <td class="SubTd"><a href="#"><img src="images/register_steps/view_icon.jpg" alt=""></a></td>
                                  <td class="SubTd1"><a href="#"><img src="images/register_steps/edit_icon.jpg" alt=""></a></td>
                                  <td class="SubTd2"><a href="#"><img src="images/register_steps/delete_icon.jpg" alt=""></a></td>
                                </tr>
                              </table></td>
                          </tr>
                          <tr>
                            <td  style="padding-left:20px;">Not Specified</td>
                            <td  style="padding-left:20px;">04-Mar-2010 </td>
                            <td  style="padding-left:20px;">Yes</td>
                            <td  style="padding-left:20px;">Not Specified</td>
                            <td  style="padding-left:20px;"><table cellpadding="0" cellspacing="0"  style="width:100%" >
                                <tr>
                                  <td class="SubTd"><a href="#"><img src="images/register_steps/view_icon.jpg" alt=""></a></td>
                                  <td class="SubTd1"><a href="#"><img src="images/register_steps/edit_icon.jpg" alt=""></a></td>
                                  <td class="SubTd2"><a href="#"><img src="images/register_steps/delete_icon.jpg" alt=""></a></td>
                                </tr>
                              </table></td>
                          </tr>
                        </table>
                      </div>
                      <div class="dvFloat formpadding1" style="padding:10px 0px 5px 20px; border-bottom: solid 1px #e1e1e1;"> <a  onClick="showform();" style="cursor:pointer"><img src="images/nutritionist/add_to_list.jpg" alt=""></a> </div>
                      <div id="divShowHideForm" style="display: none">
                        <div class="dvFloat formpadding1">
                          <div class="formlabel1">
                            <label class="formlabel1">Test Name<span class="redtxt">*</span> </label>
                          </div>
                          <div class="formcontrol2">
                            <input type="text" name="txt_urtestname" id="txt_urtestname" value="" style="width: 207px;" />
                          </div>
                        </div>
                        <div class="dvFloat formpadding1">
                          <div class="formlabel1">
                            <label class="formlabel1">Date Performed<span class="redtxt">*</span> </label>
                          </div>
                          <div class="formcontrol2">
                            <div class="dvFloat">
                              <div style="float:left; padding:0px 15px 0px 0px">
                                <select id="txt_Allergic_Date" name="txt_Allergic_Date" class="existing_event" tabindex="1" style="width: 4px;">
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
                                <select id="txt_Allergic_Month" name="txt_Allergic_Month" class="existing_event" tabindex="1" style="width: 4px;">
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
                                <select  id="txt_Allergic_Year" name="txt_Allergic_Year" class="existing_event" tabindex="1" style="width: 4px;">
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
                          <div class="formlabel1">
                            <label class="formlabel1">Lab Name<span class="redtxt">*</span> </label>
                          </div>
                          <div class="formcontrol2">
                            <input type="text" name="txt_ur_labname" id="txt_ur_labname" value="" style="width: 207px;" />
                          </div>
                        </div>
                        <div class="dvFloat formpadding1">
                          <div class="formlabel1">
                            <label class="formlabel1">Health Problem <span class="redtxt">*</span> </label>
                          </div>
                          <div class="formcontrol2">
                            <input type="text" name="txt_ur_healthproblem" id="txt_ur_healthproblem" value="" style="width: 207px;" />
                          </div>
                        </div>
                        <div class="dvFloat formpadding1">
                          <div class="formlabel1">
                            <label class="formlabel1">Lab Results of test prescribed by doctor<span class="redtxt">*</span> </label>
                          </div>
                          <div class="formcontrol2">
                            <input type="radio" id="Yes" name="healthproblem_labresults" value="Yes">
                            <label for="Yes">Yes</label>
                            &nbsp;&nbsp;
                            <input type="radio" id="No" name="healthproblem_labresults" value="No">
                            <label for="No">No</label>
                            &nbsp;&nbsp; </div>
                        </div>
                        <div class="dvFloat formpadding1">
                          <div class="formlabel1">
                            <label class="formlabel1">Report </label>
                          </div>
                          <div class="formcontrol2"> <a style="cursor: pointer;" target="_parent" onClick="javascript:Popup.showModal('dvpopup-form',null,null,{'screenColor':'#000','screenOpacity':.6});"><img src="images/register_steps/upload_prescription.jpg" alt="" /></a> </div>
                        </div>
                        <div class="dvFloat formpadding1"  style="padding:10px 0px 25px 0px">
                          <div class="formlabel1"> &nbsp; </div>
                          <div class="formcontrol2">
                            <div style=" width:84px; height:30px; float:left;padding-right:10px;"> <a href="#" class="button4">SUBMIT</a></div>
                            <div style=" width:156px; height:30px; float:left;padding-right:10px;"> <a href="#" class="button2" >NOT APPLICABLE</a></div>
                            <div style=" width:156px; height:30px; float:left;padding-right:10px;"> <a  class="button2"  onClick="showCancel();" style="cursor:pointer">SKIP FOR NOW</a></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div id="tabs2" class="tabcontent">
                    <div class="DvFloat" style="padding:10px 0px">
                      <div class="dvFloat formpadding">
                        <div class="formlabel1">
                          <label class="formlabel1">
                          <h2 class="Tab_Title">list</h2>
                          </label>
                        </div>
                        <div class="formcontrol2"> &nbsp; </div>
                      </div>
                      <div class="dvFloat formpadding1">
                        <table cellpadding="0" cellspacing="0"  style="width:100%" >
                          <tr>
                            <td class="tbl_head" >Details</td>
                            <td class="tbl_head">Date Performed </td>
                            <td class="tbl_head">Prescribed by Doctor</td>
                            <td class="tbl_head">Health Problem</td>
                            <td class="tbl_head">Actions</td>
                          </tr>
                          <tr>
                            <td class="tdborder" style="padding-left:20px;">Not Specified </td>
                            <td class="tdborder" style="padding-left:20px;">04-Mar-2010 </td>
                            <td class="tdborder" style="padding-left:20px;">Yes</td>
                            <td class="tdborder" style="padding-left:20px;">Not Specified</td>
                            <td class="tdborder" style="padding-left:20px;"><table cellpadding="0" cellspacing="0"  style="width:100%" >
                                <tr>
                                  <td class="SubTd"><a class="fancybox-manual-c" style="cursor: pointer;"><img src="images/register_steps/view_icon.jpg" alt=""></a></td>
                                  <td class="SubTd1"><a href="#"><img src="images/register_steps/edit_icon.jpg" alt=""></a></td>
                                  <td class="SubTd2"><a href="#"><img src="images/register_steps/delete_icon.jpg" alt=""></a></td>
                                </tr>
                              </table></td>
                          </tr>
                          <tr>
                            <td  class="tdborder" style="padding-left:20px;">Not Specified</td>
                            <td  class="tdborder" style="padding-left:20px;">04-Mar-2010 </td>
                            <td  class="tdborder" style="padding-left:20px;">No</td>
                            <td  class="tdborder" style="padding-left:20px;">Not Specified</td>
                            <td  class="tdborder" style="padding-left:20px;"><table cellpadding="0" cellspacing="0"  style="width:100%" >
                                <tr>
                                  <td class="SubTd"><a class="fancybox-manual-c" style="cursor: pointer;"><img src="images/register_steps/view_icon.jpg" alt=""></a></td>
                                  <td class="SubTd1"><a href="#"><img src="images/register_steps/edit_icon.jpg" alt=""></a></td>
                                  <td class="SubTd2"><a href="#"><img src="images/register_steps/delete_icon.jpg" alt=""></a></td>
                                </tr>
                              </table></td>
                          </tr>
                          <tr>
                            <td class="tdborder" style="padding-left:20px;">Not Specified</td>
                            <td class="tdborder" style="padding-left:20px;">04-Mar-2010 </td>
                            <td class="tdborder" style="padding-left:20px;">Yes</td>
                            <td class="tdborder" style="padding-left:20px;">Not Specified</td>
                            <td class="tdborder" style="padding-left:20px;"><table cellpadding="0" cellspacing="0"  style="width:100%" >
                                <tr>
                                  <td class="SubTd"><a class="fancybox-manual-c" style="cursor: pointer;"><img src="images/register_steps/view_icon.jpg" alt=""></a></td>
                                  <td class="SubTd1"><a href="#"><img src="images/register_steps/edit_icon.jpg" alt=""></a></td>
                                  <td class="SubTd2"><a href="#"><img src="images/register_steps/delete_icon.jpg" alt=""></a></td>
                                </tr>
                              </table></td>
                          </tr>
                          <tr>
                            <td  class="tdborder" style="padding-left:20px;">Not Specified</td>
                            <td  class="tdborder" style="padding-left:20px;">04-Mar-2010 </td>
                            <td  class="tdborder" style="padding-left:20px;">No</td>
                            <td  class="tdborder" style="padding-left:20px;">Not Specified</td>
                            <td  class="tdborder" style="padding-left:20px;"><table cellpadding="0" cellspacing="0"  style="width:100%" >
                                <tr>
                                  <td class="SubTd"><a class="fancybox-manual-c" style="cursor: pointer;"><img src="images/register_steps/view_icon.jpg" alt=""></a></td>
                                  <td class="SubTd1"><a href="#"><img src="images/register_steps/edit_icon.jpg" alt=""></a></td>
                                  <td class="SubTd2"><a href="#"><img src="images/register_steps/delete_icon.jpg" alt=""></a></td>
                                </tr>
                              </table></td>
                          </tr>
                          <tr>
                            <td  style="padding-left:20px;">Not Specified</td>
                            <td  style="padding-left:20px;">04-Mar-2010 </td>
                            <td  style="padding-left:20px;">Yes</td>
                            <td  style="padding-left:20px;">Not Specified</td>
                            <td  style="padding-left:20px;"><table cellpadding="0" cellspacing="0"  style="width:100%" >
                                <tr>
                                  <td class="SubTd"><a class="fancybox-manual-c" style="cursor: pointer;"><img src="images/register_steps/view_icon.jpg" alt=""></a></td>
                                  <td class="SubTd1"><a href="#"><img src="images/register_steps/edit_icon.jpg" alt=""></a></td>
                                  <td class="SubTd2"><a href="#"><img src="images/register_steps/delete_icon.jpg" alt=""></a></td>
                                </tr>
                              </table></td>
                          </tr>
                        </table>
                      </div>
                      <div class="dvFloat formpadding1" style="padding:10px 0px 5px 20px; border-bottom: solid 1px #e1e1e1;"> <a href="#" onClick="showform1();" style="cursor:pointer"><img src="images/nutritionist/add_to_list.jpg" alt=""></a> </div>
                      <div id="divShowHideForm1" style="display: none">
                        <div class="dvFloat formpadding1">
                          <div class="formlabel1">
                            <label class="formlabel1">Test Name<span class="redtxt">*</span> </label>
                          </div>
                          <div class="formcontrol2">
                            <input type="text" name="txt_urtestname1" id="txt_urtestname1" value="" style="width: 207px;" />
                          </div>
                        </div>
                        <div class="dvFloat formpadding1">
                          <div class="formlabel1">
                            <label class="formlabel1">Date Performed<span class="redtxt">*</span> </label>
                          </div>
                          <div class="formcontrol2">
                            <div class="dvFloat">
                              <div style="float:left; padding:0px 15px 0px 0px">
                                <select id="txt_Allergic_Date" name="txt_Allergic_Date" class="existing_event" style="width: 4px;">
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
                                <select id="txt_Allergic_Month" name="txt_Allergic_Month" class="existing_event" style="width: 4px;">
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
                                <select  id="txt_Allergic_Year" name="txt_Allergic_Year" class="existing_event" style="width: 4px;">
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
                          <div class="formlabel1">
                            <label class="formlabel1">Lab Name<span class="redtxt">*</span> </label>
                          </div>
                          <div class="formcontrol2">
                            <input type="text" name="txt_ur_labname" id="txt_ur_labname" value="" style="width: 207px;" />
                          </div>
                        </div>
                        <div class="dvFloat formpadding1">
                          <div class="formlabel1">
                            <label class="formlabel1">Health Problem <span class="redtxt">*</span> </label>
                          </div>
                          <div class="formcontrol2">
                            <input type="text" name="txt_ur_healthproblem" id="txt_ur_healthproblem" value="" style="width: 207px;" />
                          </div>
                        </div>
                        <div class="dvFloat formpadding1">
                          <div class="formlabel1">
                            <label class="formlabel1">Lab Results of test prescribed by doctor<span class="redtxt">*</span> </label>
                          </div>
                          <div class="formcontrol2">
                            <input type="radio" id="Yes" name="healthproblem_labresults" value="Yes">
                            <label for="Yes">Yes</label>
                            &nbsp;&nbsp;
                            <input type="radio" id="No" name="healthproblem_labresults" value="No">
                            <label for="No">No</label>
                            &nbsp;&nbsp; </div>
                        </div>
                        <div class="dvFloat formpadding1">
                          <div class="formlabel1">
                            <label class="formlabel1">Report </label>
                          </div>
                          <div class="formcontrol2"> <a style="cursor: pointer;" target="_parent" onClick="javascript:Popup.showModal('dvpopup-form',null,null,{'screenColor':'#000','screenOpacity':.6});"><img src="images/register_steps/upload_prescription.jpg" alt="" /></a> </div>
                        </div>
                        <div class="dvFloat formpadding1"  style="padding:10px 0px 25px 0px">
                          <div class="formlabel1"> &nbsp; </div>
                          <div class="formcontrol2">
                            <div style=" width:84px; height:30px; float:left;padding-right:10px;"> <a href="#" class="button4">SUBMIT</a></div>
                            <div style=" width:156px; height:30px; float:left;padding-right:10px;"> <a href="#" class="button2" >NOT APPLICABLE</a></div>
                            <div style=" width:156px; height:30px; float:left;padding-right:10px;"> <a  class="button2" onClick="showCancel1();" style="cursor:pointer">SKIP FOR NOW</a></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div id="tabs3" class="tabcontent">
                    <div class="DvFloat" style="padding:10px 0px">
                      <div class="dvFloat formpadding">
                        <div class="formlabel1">
                          <label class="formlabel1">
                          <h2 class="Tab_Title">list</h2>
                          </label>
                        </div>
                        <div class="formcontrol2"> &nbsp; </div>
                      </div>
                      <div class="dvFloat formpadding1">
                        <table cellpadding="0" cellspacing="0"  style="width:100%" >
                          <tr>
                            <td class="tbl_head" >Details</td>
                            <td class="tbl_head" >Consultation Date</td>
                            <td class="tbl_head">Doctor Consultated </td>
                            <td class="tbl_head">Actions</td>
                          </tr>
                          <tr>
                            <td class="tdborder" style="padding-left:20px;">Cardiac Problem</td>
                            <td class="tdborder" style="padding-left:20px;">16 Nov 2013</td>
                            <td class="tdborder" style="padding-left:20px;">Punit Bhojani </td>
                            <td class="tdborder" style="padding-left:20px;"><table cellpadding="0" cellspacing="0"  style="width:100%" >
                                <tr>
                                  <td class="SubTd"><a class="fancybox-manual-c" style="cursor: pointer;"><img src="images/register_steps/view_icon.jpg" alt=""></a></td>
                                  <td class="SubTd1"><a href="#"><img src="images/register_steps/edit_icon.jpg" alt=""></a></td>
                                  <td class="SubTd2"><a href="#"><img src="images/register_steps/delete_icon.jpg" alt=""></a></td>
                                </tr>
                              </table></td>
                          </tr>
                          <tr>
                            <td class="tdborder" style="padding-left:20px;">Cardiac Problem</td>
                            <td class="tdborder" style="padding-left:20px;">16 Nov 2013</td>
                            <td class="tdborder" style="padding-left:20px;">Punit Bhojani </td>
                            <td class="tdborder" style="padding-left:20px;"><table cellpadding="0" cellspacing="0"  style="width:100%" >
                                <tr>
                                  <td class="SubTd"><a class="fancybox-manual-c" style="cursor: pointer;"><img src="images/register_steps/view_icon.jpg" alt=""></a></td>
                                  <td class="SubTd1"><a href="#"><img src="images/register_steps/edit_icon.jpg" alt=""></a></td>
                                  <td class="SubTd2"><a href="#"><img src="images/register_steps/delete_icon.jpg" alt=""></a></td>
                                </tr>
                              </table></td>
                          </tr>
                          <tr>
                            <td class="tdborder" style="padding-left:20px;">Cardiac Problem</td>
                            <td class="tdborder" style="padding-left:20px;">16 Nov 2013</td>
                            <td class="tdborder" style="padding-left:20px;">Punit Bhojani </td>
                            <td class="tdborder" style="padding-left:20px;"><table cellpadding="0" cellspacing="0"  style="width:100%" >
                                <tr>
                                  <td class="SubTd"><a class="fancybox-manual-c" style="cursor: pointer;"><img src="images/register_steps/view_icon.jpg" alt=""></a></td>
                                  <td class="SubTd1"><a href="#"><img src="images/register_steps/edit_icon.jpg" alt=""></a></td>
                                  <td class="SubTd2"><a href="#"><img src="images/register_steps/delete_icon.jpg" alt=""></a></td>
                                </tr>
                              </table></td>
                          </tr>
                          <tr>
                            <td  style="padding-left:20px;">Cardiac Problem </td>
                            <td  style="padding-left:20px;">16 Nov 2013</td>
                            <td  style="padding-left:20px;">Punit Bhojani </td>
                            <td  style="padding-left:20px;"><table cellpadding="0" cellspacing="0"  style="width:100%" >
                                <tr>
                                  <td class="SubTd"><a class="fancybox-manual-c" style="cursor: pointer;"><img src="images/register_steps/view_icon.jpg" alt=""></a></td>
                                  <td class="SubTd1"><a href="#"><img src="images/register_steps/edit_icon.jpg" alt=""></a></td>
                                  <td class="SubTd2"><a href="#"><img src="images/register_steps/delete_icon.jpg" alt=""></a></td>
                                </tr>
                              </table></td>
                          </tr>
                        </table>
                      </div>
                      <div class="dvFloat formpadding1" style="padding:10px 0px 5px 20px; border-bottom: solid 1px #e1e1e1;"> <a href="#" onClick="showform2();" style="cursor:pointer"><img src="images/nutritionist/add_to_list.jpg" alt=""></a> </div>
                      <div id="divShowHideForm2" style="display: none">
                        <div class="dvFloat formpadding1">
                          <div class="formlabel1">
                            <label class="formlabel1">Health Problem <span class="redtxt">*</span> </label>
                          </div>
                          <div class="formcontrol2">
                            <input type="text" name="txt_ur_healthproblem" id="txt_ur_healthproblem" value="" style="width: 207px;" />
                          </div>
                        </div>
                        <div class="dvFloat formpadding1">
                          <div class="formlabel1">
                            <label class="formlabel1" style="line-height:15px;">Consultation Date <span class="redtxt">*</span></label>
                          </div>
                          <div class="formcontrol2">
                            <div class="dvFloat">
                              <div style="float:left; padding:0px 15px 0px 0px">
                                <select  id="cmb_Consultation_Date"  title=""  style="width:60px;">
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
                                <select  id="cmb_Consultation_Month"  title=""  style="width:60px;">
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
                                <select  id="cmb_Consultation_Year"  title=""  style="width:93px;">
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
                          <div class="formlabel1">
                            <label class="formlabel1">Doctor Consulted <span class="redtxt">*</span></label>
                          </div>
                          <div class="formcontrol2">
                            <select  id="cmb_Doctor_Consulted"  title=""  >
                              <option value="Select">Select</option>
                            </select>
                            <div class="div_input_text1" style="font-size: 12px;">Did not find your Doctor in List? <span style="text-decoration: underline;">Click  here</span> to Add One </div>
                          </div>
                        </div>
                        <div class="dvFloat formpadding1">
                          <div class="formlabel1">
                            <label class="formlabel1">Do you want store vital record ?</label>
                          </div>
                          <div class="formcontrol2">
                            <div style="float:left; text-align:left; width:30%; border:solid 0px red;">
                              <input type="radio" id="Male" name="Dc_Vital_Record" value="Yes" onClick="show1();">
                              <label for="Male">Yes</label>
                              &nbsp;&nbsp;
                              <input type="radio" id="Female" name="Dc_Vital_Record" value="No" onClick="show2();"  checked  >
                              <label for="Female">No</label>
                              &nbsp;&nbsp; </div>
                          </div>
                        </div>
                        <div id="divShowHide" style="display: none">
                          <div class="dvFloat formpadding1" >
                            <div class="formlabel1">
                              <label class="formlabel2">Height</label>
                            </div>
                            <div class="formcontrol2">
                              <input type="text" name="txt_Dc_Height" id="txt_Dc_Height" value="" />
                              <div class="div_input_text1">(cms) </div>
                            </div>
                          </div>
                          <div class="dvFloat formpadding1">
                            <div class="formlabel1">
                              <label class="formlabel2">Weight</label>
                            </div>
                            <div class="formcontrol2">
                              <input type="text" name="txt_Dc_Weight" id="txt_Dc_Weight" value="" />
                              <div class="div_input_text1">(kgs) </div>
                            </div>
                          </div>
                          <div class="dvFloat formpadding1">
                            <div class="formlabel1">
                              <label class="formlabel2">Temperature </label>
                            </div>
                            <div class="formcontrol2">
                              <input type="text" name="txt_Dc_Temperature" id="txt_Dc_Temperature" value="" />
                              <div class="div_input_text1">(deg f) </div>
                            </div>
                          </div>
                          <div class="dvFloat formpadding1">
                            <div class="formlabel1">
                              <label class="formlabel2">Pulse </label>
                            </div>
                            <div class="formcontrol2">
                              <input type="text" name="txt_Dc_Pulse" id="txt_Dc_Pulse" value="" />
                              <div class="div_input_text1">(beats/min) </div>
                            </div>
                          </div>
                          <div class="dvFloat formpadding1">
                            <div class="formlabel1">
                              <label class="formlabel2">Blood Pressure </label>
                            </div>
                            <div class="formcontrol2">
                              <input type="text" name="txt_Dc_Blood_Pressure" id="txt_Dc_Blood_Pressure " value="" />
                              <div class="div_input_text1">(e.g. 80/100) </div>
                            </div>
                          </div>
                          <div class="dvFloat formpadding1">
                            <div class="formlabel1">
                              <label class="formlabel2">Breathing Rate </label>
                            </div>
                            <div class="formcontrol2">
                              <input type="text" name="txt_Dc_Breathing_Rate" id="txt_Dc_Breathing_Rate " value="" />
                              <div class="div_input_text1">(breath/min) </div>
                            </div>
                          </div>
                          <div class="dvFloat formpadding1">
                            <div class="formlabel1">
                              <label class="formlabel2">Body Mass index </label>
                            </div>
                            <div class="formcontrol2">
                              <input type="text" name="txt_Dc_Body_Mass_index" id="txt_Dc_Body_Mass_index" value="" />
                              <div class="div_input_text1">(kg/m2) </div>
                            </div>
                          </div>
                          <div class="dvFloat formpadding1">
                            <div class="formlabel1">
                              <label class="formlabel2">Resting Heart Rate </label>
                            </div>
                            <div class="formcontrol2">
                              <input type="text" name="txt_Dc_Resting_Heart_Rate" id="txt_Dc_Resting_Heart_Rate " value="" />
                              <div class="div_input_text1">(beats/min)</div>
                            </div>
                          </div>
                          <div class="dvFloat formpadding1">
                            <div class="formlabel1">
                              <label class="formlabel2">Note</label>
                            </div>
                            <div class="formcontrol2">
                              <textarea id="txt_Dc_Note" name="txt_Dc_Note"></textarea>
                            </div>
                          </div>
                        </div>
                        <div class="dvFloat formpadding1">
                          <div class="formlabel1">
                            <label class="formlabel1">Do you want to store Diagnosed Condition ?</label>
                          </div>
                          <div class="formcontrol2">
                            <div style="float:left; text-align:left; width:30%; border:solid 0px red;">
                              <input type="radio" id="Male" name="Diagnosed_Condition" value="Yes"  onclick="show3();"/>
                              <label for="Male">Yes</label>
                              &nbsp;&nbsp;
                              <input type="radio" id="Female" name="Diagnosed_Condition" value="No"  onclick="show4();" checked  />
                              <label for="Female">No</label>
                              &nbsp;&nbsp; </div>
                          </div>
                        </div>
                        <div id="divShowHide1" style="display: none">
                          <div class="dvFloat formpadding1">
                            <div class="formlabel1">
                              <label class="formlabel2">Diagnosed Condition </label>
                            </div>
                            <div class="formcontrol2">
                              <select id="cmb_Diagnosed_Condition" title="">
                                <option value="Select">Select</option>
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="dvFloat formpadding1">
                          <div class="formlabel1"> &nbsp; </div>
                          <div class="formcontrol2">
                            <div style=" width:250px; height:30px; float:left;padding-right:10px;"> <a style="cursor: pointer;" target="_parent" onClick="javascript:Popup.showModal('dvpopup-form3',null,null,{'screenColor':'#333333','screenOpacity':.6});"> <img src="images/register_steps/upload_prescription.jpg" alt="" /> </a> </div>
                          </div>
                        </div>
                        <div class="dvFloat formpadding1"  style="padding:10px 0px 25px 0px">
                          <div class="formlabel1"> &nbsp; </div>
                          <div class="formcontrol2">
                            <div style=" width:84px; height:30px; float:left;padding-right:10px;"> <a href="#" class="button4">SUBMIT</a></div>
                            <div style=" width:156px; height:30px; float:left;padding-right:10px;"> <a href="#" class="button2" >NOT APPLICABLE</a></div>
                            <div style=" width:156px; height:30px; float:left;padding-right:10px;"> <a onClick="showCancel2();" style="cursor:pointer" class="button2" >SKIP FOR NOW</a></div>
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
  </div>
</section>
<?php include 'includes/bottom.php'?>
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
</body>
</html>
