<link href="<?php echo $strHostName;?>/style/main.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="<?php echo $strHostName;?>/style/tabcontent.css" />
<link href="<?php echo $strHostName;?>/style/jupiter.css" rel="stylesheet" type="text/css">
<script type="text/javascript"  language="javascript" src="<?php echo $strHostName;?>/js/jquery-1.7.1.min.js"></script>
<script type="text/javascript"  language="javascript" src="<?php echo $strHostName;?>/js/jquery.jcarousel.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo $strHostName;?>/style/tabcontent.css" />
<script type="text/javascript" src="<?php echo $strHostName;?>/js/tabcontent.js"></script>
<link href="<?php echo $strHostName;?>/css/skin.css" rel="stylesheet" type="text/css"/>
<script language="JavaScript" src="<?php echo $strHostName;?>/js/PopUp.js" type="text/javascript"></script>

<link rel="stylesheet" href="<?php echo $strHostName;?>/css/example.css" type="text/css">
<link rel="stylesheet" href="<?php echo $strHostName;?>/css/dropkick.css" type="text/css">
<script src="<?php echo $strHostName;?>/js/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo $strHostName;?>/js/jquery.dropkick-1.0.0.js" type="text/javascript"></script>
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
	background:#333;
}

</style>
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
<script type="text/javascript" src="<?php echo $strHostName;?>/js/ddaccordion.js"></script>
<script type="text/javascript">

ddaccordion.init({
	headerclass: "mypetsA", 
	contentclass: "thepetA",
	collapseprev: true, 
	defaultexpanded: [0],
	animatedefault: false,
	persiststate: false, 
	toggleclass: ["", "openpet"], 
	togglehtml: ["none", "", ""], 
	animatespeed: "fast", 
	oninit:function(headers, expandedindices){ 
		 for (var i=0; i<expandedindices.length; i++){
  			var expandedindex=expandedindices[i] 
  			headers[expandedindex].style.backgroundColor=''
  			headers[expandedindex].style.color='#666666'
		 }
	}
})

</script>
<style type="text/css">
.mypetsA { /*header of demos*/
	width:700px;
	color: #666666;
	font-weight:bold;
	background:#f0f0f0 url(images/calorie_setup/brkfast_arrow.png) no-repeat;
	background-position:99% 50%;
	border:solid 0px red;
	height:45px;
	z-index:1000;
	position:relative;
}
.openpet {
	color:#666;
	background:#f0f0f0 url(images/calorie_setup/brkfast_side_arrow.png) no-repeat;
	background-position:99% 50%;
	border:solid 0px red;
	height:45px;
	z-index:1000;
}
.thepetA {
	color:#666666;
	padding:5px 0px;
}
</style>
<link rel="stylesheet" type="text/css" href="<?php echo $strHostName;?>/style/health_dashboard_tabcontent.css" />
<script type="text/javascript" src="<?php echo $strHostName;?>/js/tabcontent.js"></script>
<link href="<?php echo $strHostName;?>/style/reset.css" rel="stylesheet" type="text/css">
<link href="<?php echo $strHostName;?>/style/fonts.css" rel="stylesheet" type="text/css">
<link href="<?php echo $strHostName;?>/style/bxslider.css" rel="stylesheet" type="text/css">
<link href="<?php echo $strHostName;?>/style/paging_style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" language="javascript" src="<?php echo $strHostName;?>/js/scrolltopcontrol.js"></script>
<link href="<?php echo $strHostName;?>/style/bhupali.css" rel="stylesheet" type="text/css">
<link type="text/css" rel="stylesheet" href="<?php echo $strHostName;?>/css/style.css" />
<link href="<?php echo $strHostName;?>/style/jupiter.css" rel="stylesheet" type="text/css">
<link href="<?php echo $strHostName;?>/style/calendar.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="<?php echo $strHostName;?>/js/cal.js"></script>
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
function showCancel(){ document.getElementById('divShowHideForm').style.display = 'none'; 
document.getElementById("txt_HD_Medicine").focus();
}
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

<!--<script type="text/javascript" src="lib/jquery-1.10.1.min.js"></script>-->
<script type="text/javascript" src="<?php echo $strHostName;?>/lib/jquery.mousewheel-3.0.6.pack.js"></script>
<script type="text/javascript" src="<?php echo $strHostName;?>/source/jquery.fancybox.js?v=2.1.5"></script>
<link rel="stylesheet" type="text/css" href="<?php echo $strHostName;?>/source/jquery.fancybox.css?v=2.1.5" media="screen" />
<link rel="stylesheet" type="text/css" href="<?php echo $strHostName;?>/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" />
<script type="text/javascript" src="<?php echo $strHostName;?>/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
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
  <?php include "includes/dashboard_links.inc.php";?>
  <div class="dvFloat">
    <div class="dvWrapper">
      <div style=" padding:0px 0px 35px 0px">
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
</div></div>
</section>





<div id="dvpopup-form" style="text-align: center; width: 100%;position:absoulte;margin:0px; margin-top:15px;display:none  ">
  <table cellpadding="0" cellspacing="0" border="0" width="100%" align="center">
    <tr>
      <td style="text-align:right; border:solid 0px red; float:right"><div style="margin: 5px 0px 0px -23px; position: absolute; text-align:right"> <a href="javascript:Popup.hide('dvpopup-form');" target="_parent" style="text-decoration: none; color: #fff;"> <img src="images/close.png" alt="" title="" border="0" /> </a> </div></td>
    </tr>
    <tr>
      <td valign="top" align="center" style="padding: 20px 10px 20px 10px; background-color:#FFFFFF"><div class="dvWrapper" >
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
            <div class="dvFloat"> <a href="#"  onClick="javascript:Popup.showModal('dvpopup-form1',null,null,{'screenColor':'#333333','screenOpacity':.6});">
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
              </a>
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
        </div></td>
    </tr>
  </table>
</div>
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
<div id="dvpopup-form2" style="text-align: center; width: 100%;position:absoulte;margin:0px; margin-top:15px; display:none ">
  <table cellpadding="0" cellspacing="0" border="0" width="100%" align="center">
    <tr>
      <td style="text-align:right; border:solid 0px red; float:right"><div style="margin: 5px 0px 0px -23px; position: absolute; text-align:right"> <a href="javascript:Popup.hide('dvpopup-form2');" target="_parent" style="text-decoration: none; color: #fff;"> <img src="images/close.png" alt="" title="" border="0" /> </a> </div></td>
    </tr>
    <tr>
      <td valign="top" align="center" style="padding: 10px 10px 10px 10px;"><div class="DvFloat">
          <div class="TabDv">
            <div  style="background-color:#666666;padding:10px 5px;">
              <ul id="tabstabsa" class="shadetabsa">
                <li  class="selected"><a href="#" rel="tabs1a1a" class="selected" >Doctor Consultaion</a></li>
                <li><a href="#" rel="tabs2a1a"  >Medication</a></li>
                <li><a href="#" rel="tabs3a1a">Allergies</a></li>
                <li><a href="#" rel="tabs4a1a">Hospitalization</a></li>
                <li><a href="#" rel="tabs5a1a" >Immunization</a></li>
                <li><a href="#" rel="tabs6a1a">Health Problems</a></li>
                <li><a href="#" rel="tabs7a1a">Family History</a></li>
                <li><a href="#" rel="tabs8a1a">Daily Tracking</a></li>
              </ul>
            </div>
            <div class="TabContentDetailsa">
              <div id="tabs1a1a" class="tabcontenta">
                <div  style="width:100%; border:solid 0px red;">
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
                        <td class="tbl_head" style="width:370px;">Date </td>
                        <td class="tbl_head">Doctor Consulted </td>
                        <td class="tbl_head">Diagnosis</td>
                        <td class="tbl_head">Actions</td>
                      </tr>
                      <tr>
                        <td class="tdborder" style="padding-left:20px;">04-Mar-2010 </td>
                        <td class="tdborder" style="padding-left:20px;">Dr.Devendra </td>
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
                        <td class="tdborder" style="padding-left:20px;">04-Mar-2010 </td>
                        <td class="tdborder" style="padding-left:20px;">Dr.Devendra </td>
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
                        <td class="tdborder" style="padding-left:20px;">04-Mar-2010 </td>
                        <td class="tdborder" style="padding-left:20px;">Dr.Devendra </td>
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
                        <td style="padding-left:20px;">04-Mar-2010 </td>
                        <td style="padding-left:20px;">Dr.Devendra </td>
                        <td style="padding-left:20px;">Not Specified</td>
                        <td style="padding-top:5px;padding-left:20px;"><table cellpadding="0" cellspacing="0"  style="width:100%" >
                            <tr>
                              <td class="SubTd"><a href="#"><img src="images/register_steps/view_icon.jpg" alt=""></a></td>
                              <td class="SubTd1"><a href="#"><img src="images/register_steps/edit_icon.jpg" alt=""></a></td>
                              <td class="SubTd2"><a href="#"><img src="images/register_steps/delete_icon.jpg" alt=""></a></td>
                            </tr>
                          </table></td>
                      </tr>
                    </table>
                  </div>
                  <div class="dvFloat formpadding1" style="padding-top:20px">
                    <div class="formlabel1">
                      <label class="formlabel1">
                      <h2 class="Tab_Title">Add to list</h2>
                      </label>
                    </div>
                    <div class="formcontrol2"> &nbsp; </div>
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
                    <div class="dvFloat formpadding1" >
                      <div class="formlabel1">
                        <label class="formlabel2">Health Problem </label>
                      </div>
                      <div class="formcontrol2">
                        <input type="text" name="txt_Dc_Health_Problem" id="txt_Dc_Health_Problem" value="" />
                      </div>
                    </div>
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
                      <div style=" width:156px; height:30px; float:left;padding-right:10px;"> <a href="#" class="button2" >SKIP FOR NOW</a></div>
                    </div>
                  </div>
                  <div class="dvFloat formpadding1"  style="padding:15px 0px">
                    <div style=" width:156px; height:30px; float:right;padding-right:75px;"> <a href="#"  ><img src="images/register_steps/medication_strip.jpg" alt="" /></a></div>
                  </div>
                </div>
              </div>
              <div id="tabs2a1a" class="tabcontent">
                <div  style="width:99%; border:solid 0px red;">
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
                        <td class="tbl_head" >Medicine </td>
                        <td class="tbl_head">Dosage </td>
                        <td class="tbl_head">Duration<br>
                          (days/ week) </td>
                        <td class="tbl_head">Currently taking<br>
                          this Medicine ? </td>
                        <td class="tbl_head">Followed <br>
                          Prescription </td>
                        <td class="tbl_head">Health <br>
                          Problem</td>
                        <td class="tbl_head">Actions</td>
                      </tr>
                      <tr>
                        <td class="tdborder" style="padding-left:20px;">disprin </td>
                        <td class="tdborder" style="padding-left:20px;">1 </td>
                        <td class="tdborder" style="padding-left:20px;">3</td>
                        <td class="tdborder" style="padding-left:20px;">yes </td>
                        <td class="tdborder" style="padding-left:20px;">yes </td>
                        <td class="tdborder" style="padding-left:20px;">ok</td>
                        <td class="tdborder" style="padding-left:20px;"><table cellpadding="0" cellspacing="0"  style="width:100%" >
                            <tr>
                              <td class="SubTd1"><a href="#"><img src="images/register_steps/edit_icon.jpg" alt=""></a></td>
                              <td class="SubTd2"><a href="#"><img src="images/register_steps/delete_icon.jpg" alt=""></a></td>
                            </tr>
                          </table></td>
                      </tr>
                      <tr>
                        <td  style="padding-left:20px;">Crocin Cough Syrup </td>
                        <td  style="padding-left:20px;">1 spoon</td>
                        <td  style="padding-left:20px;">4</td>
                        <td  style="padding-left:20px;">yes </td>
                        <td  style="padding-left:20px;">yes </td>
                        <td  style="padding-left:20px;">ok</td>
                        <td  style="padding-left:20px;"><table cellpadding="0" cellspacing="0"  style="width:100%" >
                            <tr>
                              <td class="SubTd1"><a href="#"><img src="images/register_steps/edit_icon.jpg" alt=""></a></td>
                              <td class="SubTd2"><a href="#"><img src="images/register_steps/delete_icon.jpg" alt=""></a></td>
                            </tr>
                          </table></td>
                      </tr>
                    </table>
                  </div>
                  <div class="dvFloat formpadding1" style="padding-top:20px">
                    <div class="formlabel1">
                      <label class="formlabel1">
                      <h2 class="Tab_Title">Add to list</h2>
                      </label>
                    </div>
                    <div class="formcontrol2"> &nbsp; </div>
                  </div>
                  <div class="dvFloat formpadding1">
                    <div class="formlabel1">
                      <label class="formlabel1">Medicine<span class="redtxt">*</span> </label>
                    </div>
                    <div class="formcontrol2">
                      <input type="text" name="txt_Medicine" id="txt_Medicine" value="" />
                    </div>
                  </div>
                  <div class="dvFloat formpadding1">
                    <div class="formlabel1">
                      <label class="formlabel1">Dosage<span class="redtxt">*</span> </label>
                    </div>
                    <div class="formcontrol2">
                      <input type="text" name="txt_Dosage" id="txt_Dosage" value="" />
                    </div>
                  </div>
                  <div class="dvFloat formpadding1">
                    <div class="formlabel1">
                      <label class="formlabel1">Duration <span class="redtxt">*</span> </label>
                    </div>
                    <div class="formcontrol2">
                      <input type="text" name="txt_Duration" id="txt_Duration " value="" />
                      <div class="div_input_text1" style="font-size: 12px;">(days/ week) </div>
                    </div>
                  </div>
                  <div class="dvFloat formpadding1">
                    <div class="formlabel1">
                      <label class="formlabel1">Currently Taking this Medicine<span class="redtxt">*</span> </label>
                    </div>
                    <div class="formcontrol2">
                      <input type="text" name="txt_Currently_Medicine" id="txt_Currently_Medicine " value="" />
                    </div>
                  </div>
                  <div class="dvFloat formpadding1">
                    <div class="formlabel1">
                      <label class="formlabel1">Followed Prescription<span class="redtxt">*</span> </label>
                    </div>
                    <div class="formcontrol2">
                      <input type="text" name="txt_Followed_Prescription" id="txt_Followed_Prescription" value="" />
                    </div>
                  </div>
                  <div class="dvFloat formpadding1">
                    <div class="formlabel1">
                      <label class="formlabel1">Health Problem<span class="redtxt">*</span> </label>
                    </div>
                    <div class="formcontrol2">
                      <input type="text" name="txt_Health_Problem" id="txt_Health_Problem " value="" />
                    </div>
                  </div>
                  <div class="dvFloat formpadding1">
                    <div class="formlabel1">
                      <label class="formlabel1">Instruction For Medicine </label>
                    </div>
                    <div class="formcontrol2">
                      <textarea id="txt_Instruction_For_Medicine" name="txt_Instruction_For_Medicine"></textarea>
                    </div>
                  </div>
                  <div class="dvFloat formpadding1">
                    <div class="formlabel1">
                      <table cellpadding="0" cellspacing="0" style="width:200px;">
                        <tr>
                          <td valign="top" style="text-align:left; width:20px;	"><input type="checkbox" id="Chk_Setup_Intake_Reminder" name="Chk_Setup_Intake_Reminder"  onchange="javascript:Intake_Reminder_Show_Hide();" /></td>
                          <td valign="middle" style="text-align:left; width:170px;"><label for="Male">Setup Intake Reminder </label></td>
                        </tr>
                      </table>
                    </div>
                    <div class="formcontrol2"> &nbsp; </div>
                  </div>
                  <div id="divIntake_Reminder" style="display:none ">
                    <div class="dvFloat formpadding1" >
                      <div class="formlabel1">
                        <label class="formlabel2">Start Date </label>
                      </div>
                      <div class="formcontrol2">
                        <div class="dvFloat">
                          <div style="float:left; padding:0px 15px 0px 0px">
                            <select id="cmb_Intake_Reminder_Start_Date" title="" style="width:60px;">
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
                            <select id="cmb_Intake_Reminder_Start_Month" title="" style="width:60px;">
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
                        </div>
                      </div>
                    </div>
                    <div class="dvFloat formpadding1">
                      <div class="formlabel1">
                        <label class="formlabel2">End Date</label>
                      </div>
                      <div class="formcontrol2">
                        <div class="dvFloat">
                          <div style="float:left; padding:0px 15px 0px 0px">
                            <select id="cmb_Intake_Reminder_End_Date" title="" style="width:60px;">
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
                            <select id="cmb_Intake_Reminder_End_Month" title="" style="width:60px;">
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
                        </div>
                      </div>
                    </div>
                    <div class="dvFloat formpadding1">
                      <div class="formlabel1">
                        <label class="formlabel2">Daily Frequency</label>
                      </div>
                      <div class="formcontrol2">
                        <div class="formcontrol2">
                          <div class="dvFloat">
                            <div style="float:left; padding:0px 10px 0px 0px; width:100px;">
                              <table cellpadding="0" cellspacing="0" style="width:50px;">
                                <tbody>
                                  <tr>
                                    <td valign="top" style="text-align:left; width:20px;	"><input type="checkbox" id="chk_Daily_Frequency_Morning" name="chk_Daily_Frequency_Morning" onChange="Daily_Frequency_enabledisable();" /></td>
                                    <td valign="middle" style="text-align:left; width:30px;"><label for="Male">Morning </label></td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                            <div style="float:left; padding:0px 10px 0px 0px; width:100px;">
                              <table cellpadding="0" cellspacing="0" style="width:50px;">
                                <tbody>
                                  <tr>
                                    <td valign="top" style="text-align:left; width:20px;	"><input type="checkbox" id="chk_Daily_Frequency_Afternoon" name="chk_Daily_Frequency_Afternoon" onChange="Daily_Frequency_enabledisable();" /></td>
                                    <td valign="middle" style="text-align:left; width:30px;"><label for="Male">Afternoon</label></td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                            <div style="float:left; padding:0px 10px 0px 0px; width:100px;">
                              <table cellpadding="0" cellspacing="0" style="width:50px;">
                                <tbody>
                                  <tr>
                                    <td valign="top" style="text-align:left; width:20px;	"><input type="checkbox" id="chk_Daily_Frequency_Evening" name="chk_Daily_Frequency_Evening" onChange="Daily_Frequency_enabledisable();" /></td>
                                    <td valign="middle" style="text-align:left; width:30px;"><label for="Male">Evening </label></td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                            <div style="float:left; padding:0px 10px 0px 0px; width:100px;">
                              <table cellpadding="0" cellspacing="0" style="width:50px;">
                                <tbody>
                                  <tr>
                                    <td valign="top" style="text-align:left; width:20px;	"><input type="checkbox" id="chk_Daily_Frequency_Night" name="chk_Daily_Frequency_Night" onChange="Daily_Frequency_enabledisable();" /></td>
                                    <td valign="middle" style="text-align:left; width:30px;"><label for="Male">Night</label></td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="dvFloat formpadding1">
                      <div class="formlabel1">
                        <label class="formlabel2">&nbsp;</label>
                      </div>
                      <div class="formcontrol2">
                        <div class="formcontrol2">
                          <div class="dvFloat">
                            <div style="float:left; padding:0px 5px 0px 0px">
                              <div style="float:left; padding:0px 5px 0px 0px">
                                <select id="chk_Daily_Frequency_HH_Morning" title="" style="width:45px;" disabled>
                                  <option value="HH">HH</option>
                                </select>
                              </div>
                              <div style="float:left; padding:0px 5px 0px 0px">
                                <select id="chk_Daily_Frequency_Min_Morning" title="" style="width:55px;" disabled>
                                  <option value="Min">Min</option>
                                </select>
                              </div>
                            </div>
                            <div style="float:left; padding:0px 5px 0px 0px">
                              <div style="float:left; padding:0px 5px 0px 0px">
                                <select id="chk_Daily_Frequency_HH_Afternoon" title="" style="width:45px;" disabled>
                                  <option value="HH">HH</option>
                                </select>
                              </div>
                              <div style="float:left; padding:0px 5px 0px 0px">
                                <select id="chk_Daily_Frequency_Min_Afternoon" title="" style="width:55px;" disabled>
                                  <option value="Min">Min</option>
                                </select>
                              </div>
                            </div>
                            <div style="float:left; padding:0px 5px 0px 0px">
                              <div style="float:left; padding:0px 5px 0px 0px">
                                <select id="chk_Daily_Frequency_HH_Evening" title="" style="width:45px;" disabled>
                                  <option value="HH">HH</option>
                                </select>
                              </div>
                              <div style="float:left; padding:0px 5px 0px 0px">
                                <select id="chk_Daily_Frequency_Min_Evening" title="" style="width:55px;" disabled>
                                  <option value="Min">Min</option>
                                </select>
                              </div>
                            </div>
                            <div style="float:left; padding:0px 5px 0px 0px">
                              <div style="float:left; padding:0px 5px 0px 0px">
                                <select id="chk_Daily_Frequency_HH_Night" title="" style="width:45px;" disabled>
                                  <option value="HH">HH</option>
                                </select>
                              </div>
                              <div style="float:left; padding:0px 5px 0px 0px">
                                <select id="chk_Daily_Frequency_Min_Night" title="" style="width:55px;" disabled>
                                  <option value="Min">Min</option>
                                </select>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="dvFloat formpadding1">
                    <div class="formlabel1">
                      <table cellpadding="0" cellspacing="0" style="width:200px;">
                        <tr>
                          <td valign="top" style="text-align:left; width:20px;	"><input type="checkbox" id="Chk_Setup_Purchase_Reminder" name="Chk_Setup_Purchase_Reminder" onChange="javascript:Purchase_Reminder_Show_Hide();" /></td>
                          <td valign="middle" style="text-align:left; width:170px;"><label for="Female">Setup Purchase Reminder </label></td>
                        </tr>
                      </table>
                    </div>
                    <div class="formcontrol2"> </div>
                  </div>
                  <div id="divPurchase_Reminder" style="display:none ">
                    <div class="dvFloat formpadding1">
                      <div class="formlabel1">
                        <label class="formlabel2">Purchase Reminder<span class="redtxt">*</span> </label>
                      </div>
                      <div class="formcontrol2">
                        <div class="dvFloat">
                          <div style="float:left; padding:0px 15px 0px 0px">
                            <select id="cmb_Purchase_Reminder_Date" title="" style="width:60px;">
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
                            <select id="cmb_Purchase_Reminder_Date" title="" style="width:60px;">
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
                        </div>
                      </div>
                    </div>
                    <div class="dvFloat formpadding1">
                      <div class="formlabel1">
                        <label class="formlabel2">Alert On </label>
                      </div>
                      <div class="formcontrol2">
                        <div class="dvFloat">
                          <div style="float:left; padding:0px 15px 0px 0px">
                            <table cellpadding="0" cellspacing="0" style="width:50px;">
                              <tbody>
                                <tr>
                                  <td valign="top" style="text-align:left; width:20px;	"><input type="checkbox" id="chkEmail" name="chkPurchase_alert_Email"></td>
                                  <td valign="middle" style="text-align:left; width:30px;"><label for="Male">Email </label></td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                          <div style="float:left; padding:0px 15px 0px 0px">
                            <table cellpadding="0" cellspacing="0" style="width:50px;">
                              <tbody>
                                <tr>
                                  <td valign="top" style="text-align:left; width:20px;	"><input type="checkbox" id="chkMobile" name="chkPurchase_alert_Mobile"></td>
                                  <td valign="middle" style="text-align:left; width:30px;"><label for="Male">Mobile</label></td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="dvFloat formpadding1"  style="padding:10px 0px 25px 0px">
                    <div class="formlabel1"> &nbsp; </div>
                    <div class="formcontrol2">
                      <div style=" width:84px; height:30px; float:left;padding-right:10px;"> <a href="#" class="button4">SUBMIT</a></div>
                      <div style=" width:156px; height:30px; float:left;padding-right:10px;"> <a href="#" class="button2" >NOT APPLICABLE</a></div>
                      <div style=" width:156px; height:30px; float:left;padding-right:10px;"> <a href="#" class="button2" >SKIP FOR NOW</a></div>
                    </div>
                  </div>
                  <div class="dvFloat formpadding1"  style="padding:15px 0px">
                    <div style=" width:156px; height:30px; float:left;padding-right:20px;"> <a href="#"  ><img src="images/register_steps/doctor_consultation_strip_dis.jpg" alt="" /></a></div>
                    <div style=" width:156px; height:30px; float:right;padding-right:75px;"> <a href="#"  ><img src="images/register_steps/allergies_strip.jpg" alt="" /></a></div>
                  </div>
                </div>
              </div>
              <div id="tabs3a1a" class="tabcontent">
                <div  style="width:99%; border:solid 0px red;">
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
                        <td class="tbl_head" >Allergic to</td>
                        <td class="tbl_head">Reaction </td>
                        <td class="tbl_head">Status</td>
                        <td class="tbl_head">Last Observed On </td>
                        <td class="tbl_head">Actions</td>
                      </tr>
                      <tr>
                        <td class="tdborder" style="padding-left:20px;">Kjajdjs </td>
                        <td class="tdborder" style="padding-left:20px;">Unknown </td>
                        <td class="tdborder" style="padding-left:20px;">Not Specified</td>
                        <td class="tdborder" style="padding-left:20px;">04-Mar-2010 </td>
                        <td class="tdborder" style="padding-left:20px;"><table cellpadding="0" cellspacing="0"  style="width:100%" >
                            <tr>
                              <td class="SubTd"><a href="#"><img src="images/register_steps/view_icon.jpg" alt=""></a></td>
                              <td class="SubTd1"><a href="#"><img src="images/register_steps/edit_icon.jpg" alt=""></a></td>
                              <td class="SubTd2"><a href="#"><img src="images/register_steps/delete_icon.jpg" alt=""></a></td>
                            </tr>
                          </table></td>
                      </tr>
                      <tr>
                        <td  class="tdborder" style="padding-left:20px;">dsahjdh ja</td>
                        <td  class="tdborder" style="padding-left:20px;">Unknown</td>
                        <td  class="tdborder" style="padding-left:20px;">Not Specified</td>
                        <td  class="tdborder" style="padding-left:20px;">04-Mar-2010 </td>
                        <td  class="tdborder" style="padding-left:20px;"><table cellpadding="0" cellspacing="0"  style="width:100%" >
                            <tr>
                              <td class="SubTd"><a href="#"><img src="images/register_steps/view_icon.jpg" alt=""></a></td>
                              <td class="SubTd1"><a href="#"><img src="images/register_steps/edit_icon.jpg" alt=""></a></td>
                              <td class="SubTd2"><a href="#"><img src="images/register_steps/delete_icon.jpg" alt=""></a></td>
                            </tr>
                          </table></td>
                      </tr>
                      <tr>
                        <td  style="padding-left:20px;">asdjlkdskjldk lakdla skdl</td>
                        <td  style="padding-left:20px;">Unknown</td>
                        <td  style="padding-left:20px;">Not Specified</td>
                        <td  style="padding-left:20px;">04-Mar-2010 </td>
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
                  <div class="dvFloat formpadding1" style="padding-top:20px">
                    <div class="formlabel1">
                      <label class="formlabel1">
                      <h2 class="Tab_Title">Add to list</h2>
                      </label>
                    </div>
                    <div class="formcontrol2"> &nbsp; </div>
                  </div>
                  <div class="dvFloat formpadding1">
                    <div class="formlabel1">
                      <label class="formlabel1">Allergic to<span class="redtxt">*</span> </label>
                    </div>
                    <div class="formcontrol2">
                      <input type="text" name="txt_Allergicto" id="txt_Allergicto" value="" />
                    </div>
                  </div>
                  <div class="dvFloat formpadding1">
                    <div class="formlabel1">
                      <label class="formlabel1">Reaction<span class="redtxt">*</span> </label>
                    </div>
                    <div class="formcontrol2">
                      <input type="text" name="txt_Allergic_Reaction" id="txt_Allergic_Reaction" value="" />
                    </div>
                  </div>
                  <div class="dvFloat formpadding1">
                    <div class="formlabel1">
                      <label class="formlabel1">Status <span class="redtxt">*</span> </label>
                    </div>
                    <div class="formcontrol2">
                      <select  id="txt_Allergic_Status"  title=""  >
                        <option value="Select">Select</option>
                      </select>
                    </div>
                  </div>
                  <div class="dvFloat formpadding1">
                    <div class="formlabel1">
                      <label class="formlabel1">Last Observed on<span class="redtxt">*</span> </label>
                    </div>
                    <div class="formcontrol2">
                      <div class="dvFloat">
                        <div style="float:left; padding:0px 15px 0px 0px">
                          <select  id="txt_Allergic_Date"  title=""  style="width:60px;">
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
                          <select  id="txt_Allergic_Date"  title=""  style="width:60px;">
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
                          <select  id="txt_Allergic_Year"  title=""  style="width:93px;">
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
                      <label class="formlabel1">Doctor Consulted<span class="redtxt">*</span> </label>
                    </div>
                    <div class="formcontrol2">
                      <select  id="txt_Doctor_Consulted"  title=""  >
                        <option value="Select">Select</option>
                      </select>
                      <div class="div_input_text1" style="font-size: 12px;">Did not find your Doctor in List? <span style="text-decoration: underline;">Click  here</span> to Add One </div>
                    </div>
                  </div>
                  <div class="dvFloat formpadding1">
                    <div class="formlabel1">
                      <label class="formlabel1">Consultation Date </label>
                    </div>
                    <div class="formcontrol2">
                      <div class="dvFloat">
                        <div style="float:left; padding:0px 15px 0px 0px">
                          <select  id="txt_Allergic_ConsultationDate"  title=""  style="width:60px;">
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
                          <select  id="txt_Allergic_ConsultationMonth"  title=""  style="width:60px;">
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
                          <select  id="txt_Allergic_ConsultationYear"  title=""  style="width:93px;">
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
                      <label class="formlabel1"> </label>
                    </div>
                    <div class="formcontrol2"> <a style="cursor: pointer;" target="_parent" onClick="javascript:Popup.showModal('dvpopup-form',null,null,{'screenColor':'#000','screenOpacity':.6});"><img src="images/register_steps/upload_prescription.jpg" alt="" /></a> </div>
                  </div>
                  <div class="dvFloat formpadding1"  style="padding:10px 0px 25px 0px">
                    <div class="formlabel1"> &nbsp; </div>
                    <div class="formcontrol2">
                      <div style=" width:84px; height:30px; float:left;padding-right:10px;"> <a href="#" class="button4">SUBMIT</a></div>
                      <div style=" width:156px; height:30px; float:left;padding-right:10px;"> <a href="#" class="button2" >NOT APPLICABLE</a></div>
                      <div style=" width:156px; height:30px; float:left;padding-right:10px;"> <a href="#" class="button2" >SKIP FOR NOW</a></div>
                    </div>
                  </div>
                  <div class="dvFloat formpadding1"  style="padding:15px 0px">
                    <div style=" width:156px; height:30px; float:left;padding-right:20px;"> <a href="#"  ><img src="images/register_steps/medication_strip_dis.jpg" alt="" /></a></div>
                    <div style=" width:156px; height:30px; float:right;padding-right:75px;"> <a href="#"  ><img src="images/register_steps/hospitalization_strip.jpg" alt="" /></a></div>
                  </div>
                </div>
              </div>
              <div id="tabs4a1a" class="tabcontent">
                <div  style="width:99%; border:solid 0px red;">
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
                        <td class="tbl_head" style="width:370px;">Hospital Name</td>
                        <td class="tbl_head" >Hospitalized Date </td>
                        <td class="tbl_head">Doctor Name </td>
                        <td class="tbl_head">Actions</td>
                      </tr>
                      <tr>
                        <td class="tdborder" style="padding-left:20px;">Not Specified</td>
                        <td class="tdborder" style="padding-left:20px;">04-Mar-2010 </td>
                        <td class="tdborder" style="padding-left:20px;">Dr.Devendra </td>
                        <td class="tdborder" style="padding-left:20px;"><table cellpadding="0" cellspacing="0"  style="width:100%" >
                            <tr>
                              <td class="SubTd"><a href="#"><img src="images/register_steps/view_icon.jpg" alt=""></a></td>
                              <td class="SubTd1"><a href="#"><img src="images/register_steps/edit_icon.jpg" alt=""></a></td>
                              <td class="SubTd2"><a href="#"><img src="images/register_steps/delete_icon.jpg" alt=""></a></td>
                            </tr>
                          </table></td>
                      </tr>
                      <tr>
                        <td class="tdborder" style="padding-left:20px;">Not Specified</td>
                        <td class="tdborder" style="padding-left:20px;">04-Mar-2010 </td>
                        <td class="tdborder" style="padding-left:20px;">Dr.Devendra </td>
                        <td class="tdborder" style="padding-left:20px;"><table cellpadding="0" cellspacing="0"  style="width:100%" >
                            <tr>
                              <td class="SubTd"><a href="#"><img src="images/register_steps/view_icon.jpg" alt=""></a></td>
                              <td class="SubTd1"><a href="#"><img src="images/register_steps/edit_icon.jpg" alt=""></a></td>
                              <td class="SubTd2"><a href="#"><img src="images/register_steps/delete_icon.jpg" alt=""></a></td>
                            </tr>
                          </table></td>
                      </tr>
                      <tr>
                        <td class="tdborder" style="padding-left:20px;">Not Specified</td>
                        <td class="tdborder" style="padding-left:20px;">04-Mar-2010 </td>
                        <td class="tdborder" style="padding-left:20px;">Dr.Devendra </td>
                        <td class="tdborder" style="padding-left:20px;"><table cellpadding="0" cellspacing="0"  style="width:100%" >
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
                        <td  style="padding-left:20px;">Dr.Devendra </td>
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
                  <div class="dvFloat formpadding1" style="padding-top:20px">
                    <div class="formlabel1">
                      <label class="formlabel1">
                      <h2 class="Tab_Title">Add to list</h2>
                      </label>
                    </div>
                    <div class="formcontrol2"> &nbsp; </div>
                  </div>
                  <div class="dvFloat formpadding1">
                    <div class="formlabel1">
                      <label class="formlabel1">Date of Hospitalization <span class="redtxt">*</span> </label>
                    </div>
                    <div class="formcontrol2">
                      <div class="dvFloat">
                        <div style="float:left; padding:0px 15px 0px 0px">
                          <select id="cmb_Hospitalization_Date" title="" style="width:60px;">
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

                          <select id="cmb_Hospitalization_Month" title="" style="width:60px;">
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
                          <select id="cmb_Hospitalization_Year" title="" style="width:93px;">
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
                      <label class="formlabel1">Hospital Name<span class="redtxt">*</span> </label>
                    </div>
                    <div class="formcontrol2">
                      <textarea id="txt_Hospital_Name" name="txt_Hospitalization_Hospital_Name"></textarea>
                    </div>
                  </div>
                  <div class="dvFloat formpadding1">
                    <div class="formlabel1">
                      <label class="formlabel1">Doctor Consulted <span class="redtxt">*</span> </label>
                    </div>
                    <div class="formcontrol2">
                      <select id="cmb_Hospitalization_Doctor_Consulted" title="">
                        <option value="Select">Select</option>
                      </select>
                      <div class="div_input_text1" style="font-size: 12px;">Did not find your Doctor in List? <span style="text-decoration: underline;">Click  here</span> to Add One </div>
                    </div>
                  </div>
                  <div class="dvFloat formpadding1">
                    <div class="formlabel1">
                      <label class="formlabel1">Reason of Admission<span class="redtxt">*</span> </label>
                    </div>
                    <div class="formcontrol2">
                      <textarea id="txt_Hospital_Name" name="txt_Hospitalization_Reason_of_Admission"></textarea>
                    </div>
                  </div>
                  <div class="dvFloat formpadding1">
                    <div class="formlabel1">
                      <label class="formlabel1">Diagnosis </label>
                    </div>
                    <div class="formcontrol2">
                      <textarea id="txt_Hospital_Name" name="txt_Hospitalization_Diagnosis"></textarea>
                    </div>
                  </div>
                  <div class="dvFloat formpadding1">
                    <div class="formlabel1">
                      <label class="formlabel1">Discharge Details </label>
                    </div>
                    <div class="formcontrol2"> </div>
                  </div>
                  <div class="dvFloat formpadding1">
                    <div class="formlabel1">
                      <label class="formlabel1">Discharge Date<span class="redtxt">*</span></label>
                    </div>
                    <div class="formcontrol2">
                      <div class="dvFloat">
                        <div style="float:left; padding:0px 15px 0px 0px">
                          <select id="cmb_Hospitalization_Discharge_Date" title="" style="width:60px;">
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
                          <select id="cmb_Hospitalization_Discharge_Month" title="" style="width:60px;">
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
                          <select id="cmb_Hospitalization_Discharge_Year" title="" style="width:93px;">
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
                      <label class="formlabel1">Diagnosis Summary </label>
                    </div>
                    <div class="formcontrol2">
                      <textarea id="txt_Hospitalization_Diagnosis_Summary" name="txt_Instruction_For_Medicine"></textarea>
                    </div>
                  </div>
                  <div class="dvFloat formpadding1">
                    <div class="formlabel1">
                      <label class="formlabel1">Follow-up Details </label>
                    </div>
                    <div class="formcontrol2"> </div>
                  </div>
                  <div class="dvFloat formpadding1">
                    <div class="formlabel1">
                      <label class="formlabel1">Doctor Instruction </label>
                    </div>
                    <div class="formcontrol2">
                      <textarea id="txt_Hospitalization_Doctor_Instruction" name="txt_Instruction_For_Medicine"></textarea>
                    </div>
                  </div>
                  <div class="dvFloat formpadding1">
                    <div class="formlabel1">
                      <label class="formlabel1">Next Visit Date </label>
                    </div>
                    <div class="formcontrol2">
                      <div class="dvFloat">
                        <div style="float:left; padding:0px 15px 0px 0px">
                          <select id="cmb_Hospitalization_Next_Visit_Date" title="" style="width:60px;">
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
                          <select id="cmb_Hospitalization_Next_Visit_Month" title="" style="width:60px;">
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
                          <select id="cmb_Hospitalization_Next_Visit_Year" title="" style="width:93px;">
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
                      <label class="formlabel1">Reminder Date</label>
                    </div>
                    <div class="formcontrol2">
                      <div class="dvFloat">
                        <div style="float:left; padding:0px 15px 0px 0px">
                          <select id="cmb_Hospitalization_Reminder_Date" title="" style="width:60px;">
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
                          <select id="cmb_Hospitalization_Reminder_Date_Month" title="" style="width:60px;">
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
                          <select id="cmb_Hospitalization_Reminder_Date_Year" title="" style="width:93px;">
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
                  <div class="dvFloat formpadding1"  style="padding:10px 0px 25px 0px">
                    <div class="formlabel1"> &nbsp; </div>
                    <div class="formcontrol2">
                      <div style=" width:84px; height:30px; float:left;padding-right:10px;"> <a href="#" class="button4">SUBMIT</a></div>
                      <div style=" width:156px; height:30px; float:left;padding-right:10px;"> <a href="#" class="button2" >NOT APPLICABLE</a></div>
                      <div style=" width:156px; height:30px; float:left;padding-right:10px;"> <a href="#" class="button2" >SKIP FOR NOW</a></div>
                    </div>
                  </div>
                  <div class="dvFloat formpadding1"  style="padding:15px 0px">
                    <div style=" width:156px; height:30px; float:left;padding-right:20px;"> <a href="#"><img src="images/register_steps/allergies_strip_dis.jpg" alt=""></a></div>
                    <div style=" width:156px; height:30px; float:right;padding-right:75px;"> <a href="#"  ><img src="images/register_steps/immunization_strip.jpg" alt="" /></a></div>
                  </div>
                </div>
              </div>
              <div id="tabs5a1a" class="tabcontent">
                <div style="width:99%; border:solid 0px red;">
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
                        <td class="tbl_head" >Name</td>
                        <td class="tbl_head">Administered Date </td>
                        <td class="tbl_head">Actions</td>
                      </tr>
                      <tr>
                        <td class="tdborder" style="padding-left:20px;">Not Specified</td>
                        <td class="tdborder" style="padding-left:20px;">04-Mar-2010 </td>
                        <td class="tdborder" style="padding-left:20px;"><table cellpadding="0" cellspacing="0"  style="width:100%" >
                            <tr>
                              <td class="SubTd1"><a href="#"><img src="images/register_steps/edit_icon.jpg" alt=""></a></td>
                              <td class="SubTd2"><a href="#"><img src="images/register_steps/delete_icon.jpg" alt=""></a></td>
                            </tr>
                          </table></td>
                      </tr>
                      <tr>
                        <td  class="tdborder" style="padding-left:20px;">Not Specified</td>
                        <td  class="tdborder" style="padding-left:20px;">04-Mar-2010 </td>
                        <td  class="tdborder" style="padding-left:20px;"><table cellpadding="0" cellspacing="0"  style="width:100%" >
                            <tr>
                              <td class="SubTd1"><a href="#"><img src="images/register_steps/edit_icon.jpg" alt=""></a></td>
                              <td class="SubTd2"><a href="#"><img src="images/register_steps/delete_icon.jpg" alt=""></a></td>
                            </tr>
                          </table></td>
                      </tr>
                      <tr>
                        <td class="tdborder" style="padding-left:20px;">Not Specified</td>
                        <td class="tdborder" style="padding-left:20px;">04-Mar-2010 </td>
                        <td class="tdborder" style="padding-left:20px;"><table cellpadding="0" cellspacing="0"  style="width:100%" >
                            <tr>
                              <td class="SubTd1"><a href="#"><img src="images/register_steps/edit_icon.jpg" alt=""></a></td>
                              <td class="SubTd2"><a href="#"><img src="images/register_steps/delete_icon.jpg" alt=""></a></td>
                            </tr>
                          </table></td>
                      </tr>
                      <tr>
                        <td  class="tdborder" style="padding-left:20px;">Not Specified</td>
                        <td  class="tdborder" style="padding-left:20px;">04-Mar-2010 </td>
                        <td  class="tdborder" style="padding-left:20px;"><table cellpadding="0" cellspacing="0"  style="width:100%" >
                            <tr>
                              <td class="SubTd1"><a href="#"><img src="images/register_steps/edit_icon.jpg" alt=""></a></td>
                              <td class="SubTd2"><a href="#"><img src="images/register_steps/delete_icon.jpg" alt=""></a></td>
                            </tr>
                          </table></td>
                      </tr>
                      <tr>
                        <td  style="padding-left:20px;">Not Specified</td>
                        <td  style="padding-left:20px;">04-Mar-2010 </td>
                        <td  style="padding-left:20px;"><table cellpadding="0" cellspacing="0"  style="width:100%" >
                            <tr>
                              <td class="SubTd1"><a href="#"><img src="images/register_steps/edit_icon.jpg" alt=""></a></td>
                              <td class="SubTd2"><a href="#"><img src="images/register_steps/delete_icon.jpg" alt=""></a></td>
                            </tr>
                          </table></td>
                      </tr>
                    </table>
                  </div>
                  <div class="dvFloat formpadding1" style="padding-top:20px">
                    <div class="formlabel1">
                      <label class="formlabel1">
                      <h2 class="Tab_Title">Add to list</h2>
                      </label>
                    </div>
                    <div class="formcontrol2"> &nbsp; </div>
                  </div>
                  <div class="dvFloat formpadding1">
                    <div class="formlabel1">
                      <label class="formlabel1">Name<span class="redtxt">*</span> </label>
                    </div>
                    <div class="formcontrol2">
                      <textarea id="txt_immunization_Name" name="txt_immunization_Name"></textarea>
                    </div>
                  </div>
                  <div class="dvFloat formpadding1">
                    <div class="formlabel1">
                      <label class="formlabel1">Date Administered<span class="redtxt">*</span> </label>
                    </div>
                    <div class="formcontrol2">
                      <div class="dvFloat">
                        <div style="float:left; padding:0px 15px 0px 0px">
                          <select  id="txt_immunization_Date"  title=""  style="width:60px;">
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
                          <select  id="txt_immunization_Date"  title=""  style="width:60px;">
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
                          <select  id="txt_immunization_Year"  title=""  style="width:93px;">
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
                      <label class="formlabel1">Next Visit Reminder </label>
                    </div>
                    <div class="formcontrol2">
                      <div class="dvFloat">
                        <div style="float:left; padding:0px 15px 0px 0px">
                          <select  id="txt_immunization_Date1"  title=""  style="width:60px;">
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
                          <select  id="txt_immunization_Month1"  title=""  style="width:60px;">
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
                        <div style="float:left; padding:0px 15px 0px 0px">
                          <select  id="txt_immunization_Year"  title=""  style="width:93px;">
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
                        <div style="float:left; padding:0px 15px 0px 0px">
                          <select  id="txt_immunization_hour"  title=""  style="width:70px;">
                            <option value="HH">HH</option>
                          </select>
                        </div>
                        <div style="float:left; padding:0px 0px 0px 0px">
                          <select  id="txt_immunization_Min"  title=""  style="width:70px;">
                            <option value="Min">Min</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="dvFloat formpadding1"  style="padding:10px 0px 25px 0px">
                    <div class="formlabel1"> &nbsp; </div>
                    <div class="formcontrol2">
                      <div style=" width:84px; height:30px; float:left;padding-right:10px;"> <a href="#" class="button4">SUBMIT</a></div>
                      <div style=" width:156px; height:30px; float:left;padding-right:10px;"> <a href="#" class="button2" >NOT APPLICABLE</a></div>
                      <div style=" width:156px; height:30px; float:left;padding-right:10px;"> <a href="#" class="button2" >SKIP FOR NOW</a></div>
                    </div>
                  </div>
                  <div class="dvFloat formpadding1"  style="padding:15px 0px">
                    <div style=" width:156px; height:30px; float:left;padding-right:20px;"> <a href="#"  ><img src="images/register_steps/hospitalization_strip_dis.jpg" alt="" /></a></div>
                    <div style=" width:156px; height:30px; float:right;padding-right:75px;"> <a href="#"  ><img src="images/register_steps/healthproblems_strip.jpg" alt="" /></a></div>
                  </div>
                </div>
              </div>
              <div id="tabs6a1a" class="tabcontent">
                <div style="width:99%; border:solid 0px red;">
                  <div class="dvFloat formpadding" >
                    <div class="formlabel1" >
                      <label class="formlabel1" >
                      <h2 class="Tab_Title">LIST</h2>
                      </label>
                    </div>
                    <div class="formcontrol2"> &nbsp; </div>
                  </div>
                  <div class="dvFloat formpadding1" style="padding:0px;">

                    <table cellpadding="0" cellspacing="0"  style="width:100%" >
                      <tr>
                        <td class="tbl_head">Problem</td>
                        <td class="tbl_head">Discription</td>
                        <td class="tbl_head">Diagnosis Date</td>
                        <td class="tbl_head">Doctor Name</td>
                      </tr>
                      <tr>
                        <td class="tdborder" style="padding:12px 5px 12px 20px;">Eye</td>
                        <td class="tdborder" style="padding:12px 5px 12px 20px;">Not Specified</td>
                        <td class="tdborder" style="padding:12px 5px 12px 20px;">04-Mar-2010 </td>
                        <td class="tdborder" style="padding:12px 5px 12px 20px;">Dr.Devendra </td>
                      </tr>
                      <tr>
                        <td class="tdborder" style="padding:12px 5px 12px 20px;">Skin</td>
                        <td class="tdborder" style="padding:12px 5px 12px 20px;">Not Specified</td>
                        <td class="tdborder" style="padding:12px 5px 12px 20px;">04-Mar-2010 </td>
                        <td class="tdborder" style="padding:12px 5px 12px 20px;">Dr.Devendra </td>
                      </tr>
                      <tr>
                        <td class="tdborder" style="padding:12px 5px 12px 20px;">Kidney</td>
                        <td class="tdborder" style="padding:12px 5px 12px 20px;">Not Specified</td>
                        <td class="tdborder" style="padding:12px 5px 12px 20px;">04-Mar-2010 </td>
                        <td class="tdborder" style="padding:12px 5px 12px 20px;">Dr.Devendra </td>
                      </tr>
                      <tr>
                        <td class="tdborder" style="padding:12px 5px 12px 20px;">Joint pains</td>
                        <td class="tdborder" style="padding:12px 5px 12px 20px;">Not Specified</td>
                        <td class="tdborder" style="padding:12px 5px 12px 20px;">04-Mar-2010 </td>
                        <td class="tdborder" style="padding:12px 5px 12px 20px;">Dr.Devendra </td>
                      </tr>
                      <tr>
                        <td style="padding:12px 5px 12px 20px;">Eye</td>
                        <td style="padding:12px 5px 12px 20px;">Not Specified</td>
                        <td style="padding:12px 5px 12px 20px;">04-Mar-2010 </td>
                        <td style="padding:12px 5px 12px 20px;">Dr.Devendra </td>
                      </tr>
                    </table>
                  </div>
                  <div class="dvFloat formpadding1" style="padding-top:20px">
                    <div class="formlabel1">
                      <label class="formlabel1">
                      <h2 class="Tab_Title">Add to list</h2>
                      </label>
                    </div>
                    <div class="formcontrol2"> &nbsp; </div>
                  </div>
                  <div class="dvFloat formpadding1">
                    <div class="formlabel1">
                      <label class="formlabel1">Do you face any Cardiac Problems ?</label>
                    </div>
                    <div class="formcontrol2">
                      <div style="float:left; text-align:left; width:30%; border:solid 0px red;">
                        <input type="radio" id="cardiacProblemsYes" name="cardiacProblems" value="Yes"  onclick="show19();">
                        <label for="Yes">Yes</label>
                        &nbsp;&nbsp;
                        <input type="radio" id="cardiacProblemsNo" name="cardiacProblems" value="No" checked  onclick="show20();">
                        <label for="No">No</label>
                        &nbsp;&nbsp; </div>
                    </div>
                  </div>
                  <div class="dvFloat formpadding1" id="divShowHide9" style="display: none">
                    <div class="dvFloat" style="padding-top: 0px;">
                      <table cellpadding="0" cellspacing="0" style="width:100%; border:solid 0px #000000">
                        <tr>
                          <td style="width:4%;padding-left:0px;">Problem</td>
                          <td style="width:19%;padding-left:0px;">Date Of Diagnosis</td>
                          <td style="width:29%;padding-left:0px;">Consulting Specialist</td>
                        </tr>
                        <tr>
                          <td style="padding-left:0px; padding-top: 5px;"><input type="text" name="txt_Company_name" id="txt_Company_name" value="" />
                          </td>
                          <td style="padding-top: 5px;"><div style="float:left; padding:0px 5px 0px 0px">
                              <select  id="cmb_Report_Day"  title=""  style="width:50px;">
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
                            <div style="float:left; padding:0px 5px 0px 0px">
                              <select  id="cmb_Report_Date"  title=""  style="width:50px;">
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
                              <select  id="cmb_Report_Year"  title=""  style="width:63px;">
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
                          <td style="padding-top: 5px; text-align:left" valign="top" ><select id="cmb_Consulting_Specialist" title="">
                              <option value="0">Select</option>
                            </select></td>
                        </tr>
                        <tr>
                          <td style="padding-left:0px; padding-top: 7px;"><img src="images/register_steps/add_another_eye_problem.jpg" alt="" title="" border="0"></td>
                          <td style="padding-left:0px;">&nbsp;</td>
                          <td style="padding-left:0px; font-size: 12px; padding-top: 7px; vertical-align: top;">Did not find your Doctor in List? <br>
                            <span style="text-decoration: underline;">Click  here</span> to Add One </td>
                        </tr>
                      </table>
                    </div>
                  </div>
                  <div class="dvFloat formpadding1" >
                    <div class="formlabel1">
                      <label class="formlabel1">Do you face any Eye related Problems ?</label>
                    </div>
                    <div class="formcontrol2">
                      <div style="float:left; text-align:left; width:30%; border:solid 0px red;">
                        <input type="radio" id="EyerelatedProblemsYes" name="EyerelatedProblems" value="Yes" onClick="show21();">
                        <label for="Yes">Yes</label>
                        &nbsp;&nbsp;
                        <input type="radio" id="EyerelatedProblemsNo" name="EyerelatedProblems" value="No" checked onClick="show22();">
                        <label for="No">No</label>
                        &nbsp;&nbsp; </div>
                    </div>
                  </div>
                  <div class="dvFloat formpadding1" id="divShowHide10" style="display: none">
                    <div class="dvFloat" style="padding-top: 0px;">
                      <table cellpadding="0" cellspacing="0" style="width:100%; border:solid 0px #000000">
                        <tr>
                          <td style="width:4%;padding-left:0px;">Problem</td>
                          <td style="width:19%;padding-left:0px;">Date Of Diagnosis</td>
                          <td style="width:29%;padding-left:0px;">Consulting Specialist</td>
                        </tr>
                        <tr>
                          <td style="padding-left:0px; padding-top: 5px;"><input type="text" name="txt_Company_name" id="txt_Company_name" value="" />
                          </td>
                          <td style="padding-top: 5px;"><div style="float:left; padding:0px 5px 0px 0px">
                              <select  id="cmb_Report_Day"  title=""  style="width:50px;">
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
                            <div style="float:left; padding:0px 5px 0px 0px">
                              <select  id="cmb_Report_Date"  title=""  style="width:50px;">
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
                              <select  id="cmb_Report_Year"  title=""  style="width:63px;">
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
                          <td style="padding-top: 5px; text-align:left" valign="top" ><select id="cmb_Consulting_Specialist" title="">
                              <option value="0">Select</option>
                            </select></td>
                        </tr>
                        <tr>
                          <td style="padding-left:0px; padding-top: 7px;"><img src="images/register_steps/add_another_eye_problem.jpg" alt="" title="" border="0"></td>
                          <td style="padding-left:0px;">&nbsp;</td>
                          <td style="padding-left:0px; font-size: 12px; padding-top: 7px; vertical-align: top;">Did not find your Doctor in List? <br>
                            <span style="text-decoration: underline;">Click  here</span> to Add One </td>
                        </tr>
                      </table>
                    </div>
                  </div>
                  <div class="dvFloat formpadding1">
                    <div class="formlabel1">
                      <label class="formlabel1">Do you face any kidney related Problems ?</label>
                    </div>
                    <div class="formcontrol2">
                      <div style="float:left; text-align:left; width:30%; border:solid 0px red;">
                        <input type="radio" id="FaceProblemsYes" name="FaceProblems" value="Yes"  onclick="show5();">
                        <label for="Yes">Yes</label>
                        &nbsp;&nbsp;
                        <input type="radio" id="FaceProblemsNo" name="FaceProblems" value="No" checked  onclick="show6();">
                        <label for="No">No</label>
                        &nbsp;&nbsp; </div>
                    </div>
                  </div>
                  <div class="dvFloat formpadding1" id="divShowHide2" style="display: none">
                    <div class="dvFloat" style="padding-top: 0px;">
                      <table cellpadding="0" cellspacing="0" style="width:100%; border:solid 0px #000000">
                        <tr>
                          <td style="width:4%;padding-left:0px;">Problem</td>
                          <td style="width:19%;padding-left:0px;">Date Of Diagnosis</td>
                          <td style="width:29%;padding-left:0px;">Consulting Specialist</td>
                        </tr>
                        <tr>
                          <td style="padding-left:0px; padding-top: 5px;"><input type="text" name="txt_Company_name" id="txt_Company_name" value="" />
                          </td>
                          <td style="padding-top: 5px;"><div style="float:left; padding:0px 5px 0px 0px">
                              <select  id="cmb_Report_Day"  title=""  style="width:50px;">
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
                            <div style="float:left; padding:0px 5px 0px 0px">
                              <select  id="cmb_Report_Date"  title=""  style="width:50px;">
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
                              <select  id="cmb_Report_Year"  title=""  style="width:63px;">
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
                          <td style="padding-top: 5px; text-align:left" valign="top" ><select id="cmb_Consulting_Specialist" title="">
                              <option value="0">Select</option>
                            </select></td>
                        </tr>
                        <tr>
                          <td style="padding-left:0px; padding-top: 7px;"><img src="images/register_steps/add_another_eye_problem.jpg" alt="" title="" border="0"></td>
                          <td style="padding-left:0px;">&nbsp;</td>
                          <td style="padding-left:0px; font-size: 12px; padding-top: 7px; vertical-align: top;">Did not find your Doctor in List? <br>
                            <span style="text-decoration: underline;">Click  here</span> to Add One </td>
                        </tr>
                      </table>
                    </div>
                  </div>
                  <div class="dvFloat formpadding1">
                    <div class="formlabel1">
                      <label class="formlabel1">Do you face any problems with blood Circulation                       and Sensation ?</label>
                    </div>
                    <div class="formcontrol2">
                      <div style="float:left; text-align:left; width:30%; border:solid 0px red;">
                        <input type="radio" id="BloodcirculationYes" name="Bloodcirculation" value="Yes"  onclick="show7();">
                        <label for="Yes">Yes</label>
                        &nbsp;&nbsp;
                        <input type="radio" id="BloodcirculationNo" name="Bloodcirculation" value="No" checked  onclick="show8();">
                        <label for="No">No</label>
                        &nbsp;&nbsp; </div>
                    </div>
                  </div>
                  <div class="dvFloat formpadding1" id="divShowHide3" style="display: none">
                    <div class="dvFloat" style="padding-top: 0px;">
                      <table cellpadding="0" cellspacing="0" style="width:100%; border:solid 0px #000000">
                        <tr>
                          <td style="width:4%;padding-left:0px;">Problem</td>
                          <td style="width:19%;padding-left:0px;">Date Of Diagnosis</td>
                          <td style="width:29%;padding-left:0px;">Consulting Specialist</td>
                        </tr>
                        <tr>
                          <td style="padding-left:0px; padding-top: 5px;"><input type="text" name="txt_Company_name" id="txt_Company_name" value="" />
                          </td>
                          <td style="padding-top: 5px;"><div style="float:left; padding:0px 5px 0px 0px">
                              <select  id="cmb_Report_Day"  title=""  style="width:50px;">
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
                            <div style="float:left; padding:0px 5px 0px 0px">
                              <select  id="cmb_Report_Date"  title=""  style="width:50px;">
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
                              <select  id="cmb_Report_Year"  title=""  style="width:63px;">
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
                          <td style="padding-top: 5px; text-align:left" valign="top" ><select id="cmb_Consulting_Specialist" title="">
                              <option value="0">Select</option>
                            </select></td>
                        </tr>
                        <tr>
                          <td style="padding-left:0px; padding-top: 7px;"><img src="images/register_steps/add_another_eye_problem.jpg" alt="" title="" border="0"></td>
                          <td style="padding-left:0px;">&nbsp;</td>
                          <td style="padding-left:0px; font-size: 12px; padding-top: 7px; vertical-align: top;">Did not find your Doctor in List? <br>
                            <span style="text-decoration: underline;">Click  here</span> to Add One </td>
                        </tr>
                      </table>
                    </div>
                  </div>
                  <div class="dvFloat formpadding1">

                    <div class="formlabel1">
                      <label class="formlabel1">Do you face any Skin related Problems ?</label>
                    </div>
                    <div class="formcontrol2">
                      <div style="float:left; text-align:left; width:30%; border:solid 0px red;">
                        <input type="radio" id="FaceskinProblemsYes" name="FaceskinProblems" value="Yes"  onclick="show9();">
                        <label for="Yes">Yes</label>
                        &nbsp;&nbsp;
                        <input type="radio" id="FaceskinProblemsNo" name="FaceskinProblems" value="No" checked  onclick="show10();">
                        <label for="No">No</label>
                        &nbsp;&nbsp; </div>
                    </div>
                  </div>
                  <div class="dvFloat formpadding1" id="divShowHide4" style="display: none">
                    <div class="dvFloat" style="padding-top: 0px;">
                      <table cellpadding="0" cellspacing="0" style="width:100%; border:solid 0px #000000">
                        <tr>
                          <td style="width:4%;padding-left:0px;">Problem</td>
                          <td style="width:19%;padding-left:0px;">Date Of Diagnosis</td>
                          <td style="width:29%;padding-left:0px;">Consulting Specialist</td>
                        </tr>
                        <tr>
                          <td style="padding-left:0px; padding-top: 5px;"><input type="text" name="txt_Company_name" id="txt_Company_name" value="" />
                          </td>
                          <td style="padding-top: 5px;"><div style="float:left; padding:0px 5px 0px 0px">
                              <select  id="cmb_Report_Day"  title=""  style="width:50px;">
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
                            <div style="float:left; padding:0px 5px 0px 0px">
                              <select  id="cmb_Report_Date"  title=""  style="width:50px;">
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
                              <select  id="cmb_Report_Year"  title=""  style="width:63px;">
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
                          <td style="padding-top: 5px; text-align:left" valign="top" ><select id="cmb_Consulting_Specialist" title="">
                              <option value="0">Select</option>
                            </select></td>
                        </tr>
                        <tr>
                          <td style="padding-left:0px; padding-top: 7px;"><img src="images/register_steps/add_another_eye_problem.jpg" alt="" title="" border="0"></td>
                          <td style="padding-left:0px;">&nbsp;</td>
                          <td style="padding-left:0px; font-size: 12px; padding-top: 7px; vertical-align: top;">Did not find your Doctor in List? <br>
                            <span style="text-decoration: underline;">Click  here</span> to Add One </td>
                        </tr>
                      </table>
                    </div>
                  </div>
                  <div class="dvFloat formpadding1">
                    <div class="formlabel1">
                      <label class="formlabel1">Do you face any digestive Problems ?</label>
                    </div>
                    <div class="formcontrol2">
                      <div style="float:left; text-align:left; width:30%; border:solid 0px red;">
                        <input type="radio" id="DigestiveProblemsYes" name="DigestiveProblems" value="Yes" checked  onclick="show11();">
                        <label for="Yes">Yes</label>
                        &nbsp;&nbsp;
                        <input type="radio" id="DigestiveProblemsNo" name="DigestiveProblems" value="No" checked  onclick="show12();">
                        <label for="No">No</label>
                        &nbsp;&nbsp; </div>
                    </div>
                  </div>
                  <div class="dvFloat formpadding1" id="divShowHide5" style="display: none">
                    <div class="dvFloat" style="padding-top: 0px;">
                      <table cellpadding="0" cellspacing="0" style="width:100%; border:solid 0px #000000">
                        <tr>
                          <td style="width:4%;padding-left:0px;">Problem</td>
                          <td style="width:19%;padding-left:0px;">Date Of Diagnosis</td>
                          <td style="width:29%;padding-left:0px;">Consulting Specialist</td>
                        </tr>
                        <tr>
                          <td style="padding-left:0px; padding-top: 5px;"><input type="text" name="txt_Company_name" id="txt_Company_name" value="" />
                          </td>
                          <td style="padding-top: 5px;"><div style="float:left; padding:0px 5px 0px 0px">
                              <select  id="cmb_Report_Day"  title=""  style="width:50px;">
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
                            <div style="float:left; padding:0px 5px 0px 0px">
                              <select  id="cmb_Report_Date"  title=""  style="width:50px;">
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
                              <select  id="cmb_Report_Year"  title=""  style="width:63px;">
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
                          <td style="padding-top: 5px; text-align:left" valign="top" ><select id="cmb_Consulting_Specialist" title="">
                              <option value="0">Select</option>
                            </select></td>
                        </tr>
                        <tr>
                          <td style="padding-left:0px; padding-top: 7px;"><img src="images/register_steps/add_another_eye_problem.jpg" alt="" title="" border="0"></td>
                          <td style="padding-left:0px;">&nbsp;</td>
                          <td style="padding-left:0px; font-size: 12px; padding-top: 7px; vertical-align: top;">Did not find your Doctor in List? <br>
                            <span style="text-decoration: underline;">Click  here</span> to Add One </td>
                        </tr>
                      </table>
                    </div>
                  </div>
                  <div class="dvFloat formpadding1">
                    <div class="formlabel1">
                      <label class="formlabel1">Do you face any joint pains ?</label>
                    </div>
                    <div class="formcontrol2">
                      <div style="float:left; text-align:left; width:30%; border:solid 0px red;">
                        <input type="radio" id="JointpainsProblemsYes" name="JointpainsProblems" value="Yes" onClick="show13();">
                        <label for="Yes">Yes</label>
                        &nbsp;&nbsp;
                        <input type="radio" id="JointpainsProblemsNo" name="JointpainsProblems" value="No" checked onClick="show14();">
                        <label for="No">No</label>
                        &nbsp;&nbsp; </div>
                    </div>
                  </div>
                  <div class="dvFloat formpadding1" id="divShowHide6" style="display: none">
                    <div class="dvFloat" style="padding-top: 0px;">
                      <table cellpadding="0" cellspacing="0" style="width:100%; border:solid 0px #000000">
                        <tr>
                          <td style="width:4%;padding-left:0px;">Problem</td>
                          <td style="width:19%;padding-left:0px;">Date Of Diagnosis</td>
                          <td style="width:29%;padding-left:0px;">Consulting Specialist</td>
                        </tr>
                        <tr>
                          <td style="padding-left:0px; padding-top: 5px;"><input type="text" name="txt_Company_name" id="txt_Company_name" value="" />
                          </td>
                          <td style="padding-top: 5px;"><div style="float:left; padding:0px 5px 0px 0px">
                              <select  id="cmb_Report_Day"  title=""  style="width:50px;">
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
                            <div style="float:left; padding:0px 5px 0px 0px">
                              <select  id="cmb_Report_Date"  title=""  style="width:50px;">
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
                              <select  id="cmb_Report_Year"  title=""  style="width:63px;">
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
                          <td style="padding-top: 5px; text-align:left" valign="top" ><select id="cmb_Consulting_Specialist" title="">
                              <option value="0">Select</option>
                            </select></td>
                        </tr>
                        <tr>
                          <td style="padding-left:0px; padding-top: 7px;"><img src="images/register_steps/add_another_eye_problem.jpg" alt="" title="" border="0"></td>
                          <td style="padding-left:0px;">&nbsp;</td>
                          <td style="padding-left:0px; font-size: 12px; padding-top: 7px; vertical-align: top;">Did not find your Doctor in List? <br>
                            <span style="text-decoration: underline;">Click  here</span> to Add One </td>
                        </tr>
                      </table>
                    </div>
                  </div>
                  <div class="dvFloat formpadding1">
                    <div class="formlabel1">
                      <label class="formlabel1">Do you suffer from constipation ?</label>
                    </div>
                    <div class="formcontrol2">
                      <div style="float:left; text-align:left; width:30%; border:solid 0px red;">
                        <input type="radio" id="ConstipationProblemsYes" name="ConstipationProblems" value="Yes" onClick="show15();">
                        <label for="Yes">Yes</label>
                        &nbsp;&nbsp;
                        <input type="radio" id="ConstipationProblemsNo" name="ConstipationProblems" value="No" checked onClick="show16();">
                        <label for="No">No</label>
                      </div>
                         </div>
                  </div>
                  <div class="dvFloat formpadding1" id="divShowHide7" style="display: none">
                    <div class="dvFloat" style="padding-top: 0px;">
                      <table cellpadding="0" cellspacing="0" style="width:100%; border:solid 0px #000000">
                        <tr>
                          <td style="width:4%;padding-left:0px;">Problem</td>
                          <td style="width:19%;padding-left:0px;">Date Of Diagnosis</td>
                          <td style="width:29%;padding-left:0px;">Consulting Specialist</td>
                        </tr>
                        <tr>
                          <td style="padding-left:0px; padding-top: 5px;"><input type="text" name="txt_Company_name" id="txt_Company_name" value="" />
                          </td>
                          <td style="padding-top: 5px;"><div style="float:left; padding:0px 5px 0px 0px">
                              <select  id="cmb_Report_Day"  title=""  style="width:50px;">
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
                            <div style="float:left; padding:0px 5px 0px 0px">
                              <select  id="cmb_Report_Date"  title=""  style="width:50px;">
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
                              <select  id="cmb_Report_Year"  title=""  style="width:63px;">
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
                          <td style="padding-top: 5px; text-align:left" valign="top" ><select id="cmb_Consulting_Specialist" title="">
                              <option value="0">Select</option>
                            </select></td>
                        </tr>
                        <tr>
                          <td style="padding-left:0px; padding-top: 7px;"><img src="images/register_steps/add_another_eye_problem.jpg" alt="" title="" border="0"></td>
                          <td style="padding-left:0px;">&nbsp;</td>
                          <td style="padding-left:0px; font-size: 12px; padding-top: 7px; vertical-align: top;">Did not find your Doctor in List? <br>
                            <span style="text-decoration: underline;">Click  here</span> to Add One </td>
                        </tr>
                      </table>
                    </div>
                  </div>
                  <div class="dvFloat formpadding1">
                    <div class="formlabel1">
                      <label class="formlabel1">Do you face any Other Problems ? </label>
                    </div>
                    <div class="formcontrol2">
                      <div style="float:left; text-align:left; width:30%; border:solid 0px red;">
                        <input type="radio" id="OtherProblemsYes" name="OtherProblems" value="Yes" onClick="show17();">
                        <label for="Yes">Yes</label>
                        &nbsp;&nbsp;
                        <input type="radio" id="OtherProblemsNo" name="OtherProblems" value="No" checked onClick="show18();">
                        <label for="No">No</label>
                        &nbsp;&nbsp; </div>
                    </div>
                  </div>
                  <div class="dvFloat formpadding1" id="divShowHide8" style="display: none">
                    <div class="dvFloat" style="padding-top: 0px;">
                      <table cellpadding="0" cellspacing="0" style="width:100%; border:solid 0px #000000">
                        <tr>
                          <td style="width:4%;padding-left:0px;">Problem</td>
                          <td style="width:19%;padding-left:0px;">Date Of Diagnosis</td>
                          <td style="width:29%;padding-left:0px;">Consulting Specialist</td>
                        </tr>
                        <tr>
                          <td style="padding-left:0px; padding-top: 5px;"><input type="text" name="txt_Company_name" id="txt_Company_name" value="" />
                          </td>
                          <td style="padding-top: 5px;"><div style="float:left; padding:0px 5px 0px 0px">
                              <select  id="cmb_Report_Day"  title=""  style="width:50px;">
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
                            <div style="float:left; padding:0px 5px 0px 0px">
                              <select  id="cmb_Report_Date"  title=""  style="width:50px;">
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
                              <select  id="cmb_Report_Year"  title=""  style="width:63px;">
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
                          <td style="padding-top: 5px; text-align:left" valign="top" ><select id="cmb_Consulting_Specialist" title="">
                              <option value="0">Select</option>
                            </select></td>
                        </tr>
                        <tr>
                          <td style="padding-left:0px; padding-top: 7px;"><img src="images/register_steps/add_another_eye_problem.jpg" alt="" title="" border="0"></td>
                          <td style="padding-left:0px;">&nbsp;</td>
                          <td style="padding-left:0px; font-size: 12px; padding-top: 7px; vertical-align: top;">Did not find your Doctor in List? <br>
                            <span style="text-decoration: underline;">Click  here</span> to Add One </td>
                        </tr>
                      </table>
                    </div>
                  </div>
                  <div class="dvFloat formpadding1"  style="padding:10px 0px 25px 0px">
                    <div class="formlabel1"> &nbsp; </div>
                    <div class="formcontrol2">
                      <div style=" width:84px; height:30px; float:left;padding-right:10px;"> <a href="#" class="button4">SUBMIT</a></div>
                      <div style=" width:84px; height:30px; float:left;padding-right:10px;"> <a href="#" class="button2">Cancel</a></div>
                    </div>
                  </div>
                  <div class="dvFloat formpadding1"  style="padding:15px 0px">
                    <div style=" width:156px; height:30px; float:left;padding-right:20px;"> <a href="#"  ><img src="images/register_steps/immunization_strip_dis.jpg" alt="" /></a></div>
                    <div style=" width:156px; height:30px; float:right;padding-right:75px;"> <a href="#"  ><img src="images/register_steps/familyhistory_strip.jpg" alt="" /></a></div>
                  </div>
                </div>
              </div>
              <div id="tabs7a1a" class="tabcontent">
                <div style="width:99%; border:solid 0px red;">
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
                        <td class="tbl_head" >Relation</td>
                        <td class="tbl_head">Medical Condition</td>
                        <td class="tbl_head">Actions</td>
                      </tr>
                      <tr>
                        <td class="tdborder" style="padding-left:20px;">Not Specified</td>
                        <td class="tdborder" style="padding-left:20px;">Not Specified</td>
                        <td class="tdborder" style="padding-left:20px;"><table cellpadding="0" cellspacing="0"  style="width:100%" >
                            <tr>
                              <td class="SubTd1"><a href="#"><img src="images/register_steps/edit_icon.jpg" alt=""></a></td>
                              <td class="SubTd2"><a href="#"><img src="images/register_steps/delete_icon.jpg" alt=""></a></td>
                            </tr>
                          </table></td>
                      </tr>
                      <tr>
                        <td  class="tdborder" style="padding-left:20px;">Not Specified</td>
                        <td  class="tdborder" style="padding-left:20px;">Not Specified</td>
                        <td  class="tdborder" style="padding-left:20px;"><table cellpadding="0" cellspacing="0"  style="width:100%" >
                            <tr>
                              <td class="SubTd1"><a href="#"><img src="images/register_steps/edit_icon.jpg" alt=""></a></td>
                              <td class="SubTd2"><a href="#"><img src="images/register_steps/delete_icon.jpg" alt=""></a></td>
                            </tr>
                          </table></td>
                      </tr>
                      <tr>
                        <td class="tdborder" style="padding-left:20px;">Not Specified</td>
                        <td class="tdborder" style="padding-left:20px;">Not Specified</td>
                        <td class="tdborder" style="padding-left:20px;"><table cellpadding="0" cellspacing="0"  style="width:100%" >
                            <tr>
                              <td class="SubTd1"><a href="#"><img src="images/register_steps/edit_icon.jpg" alt=""></a></td>
                              <td class="SubTd2"><a href="#"><img src="images/register_steps/delete_icon.jpg" alt=""></a></td>
                            </tr>
                          </table></td>
                      </tr>
                      <tr>
                        <td  class="tdborder" style="padding-left:20px;">Not Specified</td>
                        <td  class="tdborder" style="padding-left:20px;">Not Specified</td>
                        <td  class="tdborder" style="padding-left:20px;"><table cellpadding="0" cellspacing="0"  style="width:100%" >
                            <tr>
                              <td class="SubTd1"><a href="#"><img src="images/register_steps/edit_icon.jpg" alt=""></a></td>
                              <td class="SubTd2"><a href="#"><img src="images/register_steps/delete_icon.jpg" alt=""></a></td>
                            </tr>
                          </table></td>
                      </tr>
                      <tr>
                        <td  style="padding-left:20px;">Not Specified</td>

                        <td  style="padding-left:20px;">Not Specified</td>
                        <td  style="padding-left:20px;"><table cellpadding="0" cellspacing="0"  style="width:100%" >
                            <tr>
                              <td class="SubTd1"><a href="#"><img src="images/register_steps/edit_icon.jpg" alt=""></a></td>
                              <td class="SubTd2"><a href="#"><img src="images/register_steps/delete_icon.jpg" alt=""></a></td>
                            </tr>
                          </table></td>
                      </tr>
                    </table>
                  </div>
                  <div class="dvFloat formpadding1" style="padding-top:20px">
                    <div class="formlabel1">
                      <label class="formlabel1">
                      <h2 class="Tab_Title">Add to list</h2>
                      </label>
                    </div>
                    <div class="formcontrol2"> &nbsp; </div>
                  </div>
                  <div class="dvFloat formpadding1">
                    <div class="formlabel1">
                      <label class="formlabel1">Relation<span class="redtxt">*</span> </label>
                    </div>
                    <div class="formcontrol2">
                      <select  id="txt_FamilyHistory_Relation"  title="">
                        <option value="Select">Select</option>
                      </select>
                    </div>
                  </div>
                  <div class="dvFloat formpadding1">
                    <div class="formlabel1">
                      <label class="formlabel1">Medical Condition<span class="redtxt">*</span> </label>
                    </div>
                    <div class="formcontrol2">
                      <textarea id="txt_FamilyHistory_MedicalCondition" name="txt_FamilyHistory_MedicalCondition"></textarea>
                    </div>
                  </div>
                  <div class="dvFloat formpadding1">
                    <div class="formlabel1">
                      <label class="formlabel1">Following Fields are relevant only if the person is no more</label>
                    </div>
                    <div class="formcontrol2"> &nbsp; </div>
                  </div>
                  <div class="dvFloat formpadding1">
                    <div class="formlabel1">
                      <label class="formlabel1">Cause of Death</label>
                    </div>
                    <div class="formcontrol2">
                      <textarea id="txt_FamilyHistory_CauseDeath" name="txt_FamilyHistory_CauseDeath"></textarea>
                    </div>
                  </div>
                  <div class="dvFloat formpadding1"  style="padding:10px 0px 25px 0px">
                    <div class="formlabel1"> &nbsp; </div>
                    <div class="formcontrol2">
                      <div style=" width:84px; height:30px; float:left;padding-right:10px;"> <a href="#" class="button4">SUBMIT</a></div>
                      <div style=" width:156px; height:30px; float:left;padding-right:10px;"> <a href="#" class="button2" >NOT APPLICABLE</a></div>
                      <div style=" width:156px; height:30px; float:left;padding-right:10px;"> <a href="#" class="button2" >SKIP FOR NOW</a></div>
                    </div>
                  </div>
                  <div class="dvFloat formpadding1"  style="padding:15px 0px">
                    <div style=" width:156px; height:30px; float:left;padding-right:20px;"> <a href="#"  ><img src="images/register_steps/healthproblems_strip_dis.jpg" alt="" /></a></div>
                    <div style=" width:156px; height:30px; float:right;padding-right:75px;"> <a href="#"  ><img src="images/register_steps/dailytracking_strip.jpg" alt="" /></a></div>
                  </div>
                </div>
              </div>
              <div id="tabs8a1a" class="tabcontent">
                <div style="width:99%; border:solid 0px red;" id="divtab8">
                  <div class="TabDv">
                    <div  style="padding:20px 0px 0px 0px;">
                      <ul id="tabstabs1a" class="shadetabs1a">
                        <li ><a href="#" rel="tabs1ab"> Blood Pressure </a></li>
                        <li><a href="#" rel="tabs2ab">Sugar Profile</a></li>
                        <li><a href="#" rel="tabs3ab">Life Style</a></li>
                        <li><a href="#" rel="tabs4ab">Lipid Profile</a> </li>
                      </ul>
                    </div>
                    <div class="TabContentDetails1">
                      <div id="tabs1ab" class="tabcontent1a">
                        <div  style="width:98%; border:solid 0px red;">
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
                                <td class="tbl_head" style="width:370px;">Systolic</td>
                                <td class="tbl_head" >Diastolic </td>
                                <td class="tbl_head">Date Checked </td>
                                <td class="tbl_head">Actions</td>
                              </tr>
                              <tr>
                                <td class="tdborder" style="padding-left:20px;">80 mg/dl</td>
                                <td class="tdborder" style="padding-left:20px;">100 mg/dl </td>
                                <td class="tdborder" style="padding-left:20px;">01-Nov-2013 </td>
                                <td class="tdborder" style="padding-left:20px;"><table cellpadding="0" cellspacing="0"  style="width:100%" >
                                    <tr>
                                      <td class="SubTd1"><a href="#"><img src="images/register_steps/edit_icon.jpg" alt=""></a></td>
                                      <td class="SubTd2"><a href="#"><img src="images/register_steps/delete_icon.jpg" alt=""></a></td>
                                    </tr>
                                  </table></td>
                              </tr>
                              <tr>
                                <td  style="padding-left:20px;">80 mg/dl</td>
                                <td  style="padding-left:20px;">120 mg/dl </td>
                                <td  style="padding-left:20px;">22-Nov-2013 </td>
                                <td  style="padding-left:20px;"><table cellpadding="0" cellspacing="0"  style="width:100%" >
                                    <tr>
                                      <td class="SubTd1"><a href="#"><img src="images/register_steps/edit_icon.jpg" alt=""></a></td>
                                      <td class="SubTd2"><a href="#"><img src="images/register_steps/delete_icon.jpg" alt=""></a></td>
                                    </tr>
                                  </table></td>
                              </tr>
                            </table>
                          </div>
                          <div class="dvFloat formpadding1" style="padding-top:20px">
                            <div class="formlabel1">
                              <label class="formlabel1">
                              <h2 class="Tab_Title">Add to list</h2>
                              </label>
                            </div>
                            <div class="formcontrol2"> &nbsp; </div>
                          </div>
                          <div class="dvFloat formpadding1">
                            <div class="formlabelHDB">
                              <label class="formlabel1">Blood Pressure <span class="redtxt">*</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(e.g. 80/100)</label>
                            </div>
                            <div class="formcontrol2">
                              <input type="text" name="txt_DelTrack_BP" id="txt_DelTrack_BP " value="" />
                            </div>
                          </div>
                          <div class="dvFloat formpadding1">
                            <div class="formlabel1">
                              <label class="formlabel1">Unit<span class="redtxt">*</span> </label>
                            </div>
                            <div class="formcontrol2">
                              <input type="text" name="txt_DelTrack_Unit" id="txt_DelTrack_Unit " value="" placeholder="fmn" />
                            </div>
                          </div>
                          <div class="dvFloat formpadding1">
                            <div class="formlabel1">
                              <label class="formlabel1">Date Checked <span class="redtxt">*</span> </label>
                            </div>
                            <div class="formcontrol2">
                              <div class="dvFloat">
                                <div style="float:left; padding:0px 15px 0px 0px">
                                  <select id="cmb_DelTrack_Date" name="cmb_DelTrack_Date" tabindex="1" class="existing_event" style="width: 45px;">
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
                                  <select id="cmb_DelTrack_Month" title="" style="width:60px;">
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
                                  <select id="cmb_DelTrack_Year" title="" style="width:93px;">
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
                            <div class="formlabel1"> &nbsp; </div>
                            <div class="formcontrol2">
                              <div style=" width:84px; height:30px; float:left;padding-right:10px;"> <a href="#" class="button4">SUBMIT</a></div>
                              <div style=" width:84px; height:30px; float:left;padding-right:10px;"> <a href="#" class="button2">Cancel</a></div>
                            </div>
                          </div>
                          <div class="dvFloat formpadding1"  style="padding:0px 0px 25px 0px">
                            <div class="formlabel1"> &nbsp; </div>
                            <div class="formcontrol2">
                              <div class="div_input_text1"  style="padding-bottom:10px;color:#c02c3e"> Average Blood Pressure as per your age: </div>
                              <table cellpadding="5" cellspacing="0" border="0" style="border: solid 0px #CCCCCC; width:80%;">
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
                          <div class="dvFloat formpadding1"  style="padding:15px 0px">
                            <div style=" width:156px; height:30px; float:left;padding-right:75px;"> <a href="#"><img src="images/register_steps/familyhistory_strip_dis.jpg" alt=""></a></div>
                          </div>
                        </div>
                      </div>
                      <div id="tabs2ab" class="tabcontent1a">
                        <div  style="width:98%; border:solid 0px red;">
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
                                <td class="tbl_head" style="width:370px;">Sugar</td>
                                <td class="tbl_head">Result Date</td>
                                <td class="tbl_head">Result</td>
                                <td class="tbl_head">Range</td>
                                <td class="tbl_head">Unit</td>
                                <td class="tbl_head">Actions</td>
                              </tr>
                              <tr>
                                <td class="tdborder" style="padding-left:20px;">Urine Blood Sugar</td>
                                <td class="tdborder" style="padding-left:20px;">01-Nov-2013</td>
                                <td class="tdborder" style="padding-left:20px;">334</td>
                                <td class="tdborder" style="padding-left:20px;">34-34 </td>
                                <td class="tdborder" style="padding-left:20px;">mg/dl</td>
                                <td class="tdborder" style="padding-left:20px;"><table cellpadding="0" cellspacing="0"  style="width:100%" >
                                    <tr>
                                      <td class="SubTd1"><a href="#"><img src="images/register_steps/edit_icon.jpg" alt=""></a></td>
                                      <td class="SubTd2"><a href="#"><img src="images/register_steps/delete_icon.jpg" alt=""></a></td>
                                    </tr>
                                  </table></td>
                              </tr>
                              <tr>
                                <td style="padding-left:20px;">Urine Blood Sugar</td>
                                <td style="padding-left:20px;">22-Nov-2013</td>
                                <td style="padding-left:20px;">335</td>
                                <td style="padding-left:20px;">34-34 </td>
                                <td style="padding-left:20px;">mg/dl</td>
                                <td  style="padding-left:20px;"><table cellpadding="0" cellspacing="0"  style="width:100%" >
                                    <tr>
                                      <td class="SubTd1"><a href="#"><img src="images/register_steps/edit_icon.jpg" alt=""></a></td>
                                      <td class="SubTd2"><a href="#"><img src="images/register_steps/delete_icon.jpg" alt=""></a></td>
                                    </tr>
                                  </table></td>
                              </tr>
                            </table>
                          </div>
                          <div class="dvFloat formpadding1" style="padding-top:20px">
                            <div class="formlabel1">
                              <label class="formlabel1">
                              <h2 class="Tab_Title">Add to list</h2>
                              </label>
                            </div>
                            <div class="formcontrol2"> &nbsp; </div>
                          </div>
                          <div class="dvFloat formpadding1">
                            <div class="formlabel1-1">
                              <label class="formlabel1-1p">&nbsp;</label>
                            </div>
                            <div class="formcontrol2-2">
                              <label>Fasting Blood Sugar </label>
                            </div>
                            <div class="formcontrol2-2">
                              <label>Post Parandial (PPBS)</label>
                            </div>
                            <div class="formcontrol2-2">
                              <label>Urine Blood Sugar</label>
                            </div>
                            <div class="formcontrol2-2">
                              <label>Random Blood Sugar</label>
                            </div>
                          </div>
                          <div class="dvFloat formpadding1">
                            <div class="formlabel1-1">
                              <label class="formlabel1-1p">Date <span class="redtxt">*</span></label>
                            </div>
                            <div class="formcontrol2-2">
                              <div class="dvFloat">
                                <div style="float:left; padding:0px 7px 0px 0px">
                                  <select id="DT_FBS_Date" title="" style="width:50px;">
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
                                  <select id="DT_FBS_Month" title="" style="width:50px;">
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
                                  <select id="DT_FBS_Year" title="" style="width:60px;">
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
                            <div class="formcontrol2-2">
                              <div class="dvFloat">
                                <div style="float:left; padding:0px 7px 0px 0px">
                                  <select id="DT_PPBS_Date" title="" style="width:50px;">
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
                                  <select id="DT_PPBS_Month" title="" style="width:50px;">
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
                                  <select id="DT_PPBS_Year" title="" style="width:60px;">
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
                            <div class="formcontrol2-2">
                              <div class="dvFloat">
                                <div style="float:left; padding:0px 7px 0px 0px">
                                  <select id="DT_UBS_Date" title="" style="width:50px;">
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
                                  <select id="DT_UBS_Month" title="" style="width:50px;">
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
                                  <select id="DT_UBS_Year" title="" style="width:60px;">
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
                            <div class="formcontrol2-2">
                              <div class="dvFloat">
                                <div style="float:left; padding:0px 7px 0px 0px">
                                  <select id="DT_RBS_Date" title="" style="width:50px;">
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
                                  <select id="DT_RBS_Month" title="" style="width:50px;">
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
                                  <select id="DT_RBS_Year" title="" style="width:60px;">
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
                            <div class="formlabel1-1">
                              <label class="formlabel1-1p">Result<span class="redtxt">*</span> </label>
                            </div>
                            <div class="formcontrol2-2">
                              <input type="text" name="txt_Result_FBS" id="txt_Result_FBS" value="" placeholder="" style="width: 163px;" />
                            </div>
                            <div class="formcontrol2-2">
                              <input type="text" name="txt_Result_PPBS" id="txt_Result_PPBS" value="" placeholder="" style="width: 163px;" />
                            </div>
                            <div class="formcontrol2-2">
                              <input type="text" name="txt_Result_UBS" id="txt_Result_UBS" value="" placeholder="" style="width: 163px;" />
                            </div>
                            <div class="formcontrol2-2">
                              <input type="text" name="txt_Result_RBS" id="txt_Result_RBS" value="" placeholder="" style="width: 163px;" />
                            </div>
                          </div>
                          <div class="dvFloat formpadding1">
                            <div class="formlabel1-1">
                              <label class="formlabel1-1p">Range <span class="redtxt">*</span> </label>
                            </div>
                            <div class="formcontrol2-2">
                              <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                <tr>
                                  <td style="width: 63px;"><input type="text" name="txt_Range_RBS" id="txt_Range_RBS1" value="" placeholder="" style="width: 67px;" /></td>
                                  <td style="width: 1px;" valign="middle">-</td>
                                  <td style="width: 63px;"><input type="text" name="txt_Range_RBS" id="txt_Range_RBS1" value="" placeholder="" style="width: 67px;" /></td>
                                </tr>
                              </table>
                            </div>
                            <div class="formcontrol2-2">
                              <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                <tr>
                                  <td style="width: 63px;"><input type="text" name="txt_Range_PPBS" id="txt_Range_PPBS" value="" placeholder="" style="width: 67px;" /></td>
                                  <td style="width: 1px;" valign="middle">-</td>
                                  <td style="width: 63px;"><input type="text" name="txt_Range_PPBS1" id="txt_Range_PPBS1" value="" placeholder="" style="width: 67px;" /></td>
                                </tr>
                              </table>
                            </div>
                            <div class="formcontrol2-2">
                              <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                <tr>
                                  <td style="width: 63px;"><input type="text" name="txt_Range_UBS" id="txt_Range_UBS" value="" placeholder="" style="width: 67px;" /></td>
                                  <td style="width: 1px;" valign="middle">-</td>
                                  <td style="width: 63px;"><input type="text" name="txt_Range_UBS1" id="txt_Range_UBS1" value="" placeholder="" style="width: 67px;" /></td>
                                </tr>
                              </table>
                            </div>
                            <div class="formcontrol2-2">
                              <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                <tr>
                                  <td style="width: 63px;"><input type="text" name="txt_Range_RBS" id="txt_Range_RBS" value="" placeholder="" style="width: 68px;" /></td>
                                  <td style="width: 1px;" valign="middle">-</td>
                                  <td style="width: 63px;"><input type="text" name="txt_Range_RBS1" id="txt_Range_RBS1" value="" placeholder="" style="width: 68px;" /></td>
                                </tr>
                              </table>
                            </div>
                          </div>
                          <div class="dvFloat formpadding1">
                            <div class="formlabel1-1">
                              <label class="formlabel1-1p">Unit<span class="redtxt">*</span> </label>
                            </div>
                            <div class="formcontrol2-2">
                              <input type="text" name="txt_Unit_FBS" id="txt_Unit_FBS" value="" placeholder="" style="width: 163px;" />
                            </div>
                            <div class="formcontrol2-2">
                              <input type="text" name="txt_Unit_PPBS" id="txt_Unit_PPBS" value="" placeholder="" style="width: 163px;" />
                            </div>
                            <div class="formcontrol2-2">
                              <input type="text" name="txt_Unit_UBS" id="txt_Unit_UBS" value="" placeholder="" style="width: 163px;" />
                            </div>
                            <div class="formcontrol2-2">
                              <input type="text" name="txt_Unit_RBS" id="txt_Unit_RBS" value="" placeholder="" style="width: 163px;" />
                            </div>
                          </div>
                          <div class="dvFloat formpadding"  style="padding:10px 0px 15px 0px">
                            <div class="formlabel1-1p">&nbsp;</div>
                            <div style="float: left; border: solid 0px #006600; width:730px;">
                               <div style=" width:156px; height:30px; float:right; padding-right:0px;"> <a href="#" class="button2" >SKIP FOR NOW</a></div> <div style=" width:156px; height:30px; float:right; padding-right:10px;"> <a href="#" class="button2" >NOT APPLICABLE</a></div><div style=" width:84px; height:30px; float:right; padding-right:10px;"> <a href="#" class="button4">SUBMIT</a></div>
                             
                             
                            </div>
                          </div>
                          <div class="dvFloat formpadding1"  style="padding:0px 0px 25px 0px">
                            <div class="formlabel1-1p">&nbsp;</div>
                            <div style="float: left; border: solid 0px #006600; width: 875px; padding-left: 15px;">
                              <div style="padding-bottom:10px; padding-top: 10px; color:#c02c3e">Standard Blood Sugar chart: </div>
                              <div class="dvFloat">
                                <table cellpadding="5" cellspacing="0" border="0" style="width:80%; border: solid 0px #CCCCCC;">
                                  <tr>
                                    <td style="border: solid 1px #CCCCCC; text-align: center; vertical-align: middle;">Category of a Person</td>
                                    <td style="padding: 5px 0px 0px 0px; border-right: solid 0px #CCCCCC; border-top: solid 1px #CCCCCC;  border-bottom: solid 1px #CCCCCC;"><table width="100%" cellpadding="0" cellspacing="0" border="0">
                                        <tr>
                                          <td colspan="2" style="padding:5px; border: solid 0px #CCCCCC; text-align: center;">Fasting Value (mg / dl)</td>
                                        </tr>
                                        <tr>
                                          <td style="padding:5px; border-left: solid 0px #CCCCCC; border-top: solid 1px #CCCCCC; border-bottom: solid 0px #CCCCCC; text-align: center;">Minimum Values</td>
                                          <td style="padding:8px; border-top: solid 1px #CCCCCC; border-right: solid 0px #CCCCCC; border-left: solid 1px #CCCCCC; text-align: center;">Maximum Values</td>
                                        </tr>
                                      </table></td>
                                    <td style="padding:0px; border: solid 1px #CCCCCC;"><table width="100%" cellpadding="0" cellspacing="0" border="0">
                                        <tr>
                                          <td style="padding:5px 0px 5px 15px; border: solid 0px #CCCCCC;">Post Prandial (mg / dl)</td>
                                        </tr>
                                        <tr>
                                          <td style="padding:5px 0px 0px 15px; border-top: solid 1px #CCCCCC;">Value 2 hours after consuming glucose</td>
                                        </tr>
                                      </table></td>
                                  </tr>
                                </table>
                              </div>
                              <div class="dvFloat" style="padding-top: 20px;">
                                <table cellpadding="5" cellspacing="0" border="0" style="width:80%; border: solid 0px #CCCCCC;">
                                  <tr>
                                    <td style="border-top: solid 1px #CCCCCC; border-left: solid 1px #CCCCCC; border-right: solid 0px #CCCCCC; border-bottom:  solid 1px #CCCCCC; padding: 10px; text-align: left; width: 150px;">Normal</td>
                                    <td style="border-top: solid 1px #CCCCCC; border-left: solid 1px #CCCCCC; border-right: solid 0px #CCCCCC; border-bottom:  solid 1px #CCCCCC; padding: 10px; text-align: right; width: 150px;">70</td>
                                    <td style="border-top: solid 1px #CCCCCC; border-left: solid 1px #CCCCCC; border-right: solid 0px #CCCCCC; border-bottom:  solid 1px #CCCCCC; padding: 10px; text-align: right; width: 150px;">100</td>
                                    <td style="border: solid 1px #CCCCCC; padding: 10px; text-align: right; width: 150px;">Less than 140</td>
                                  </tr>
                                  <tr>
                                    <td style="border-left: solid 1px #CCCCCC; border-right: solid 0px #CCCCCC; border-bottom:  solid 1px #CCCCCC; padding: 10px; text-align: left;">Early Diiabetes</td>
                                    <td style="border-left: solid 1px #CCCCCC; border-right: solid 0px #CCCCCC; border-bottom:  solid 1px #CCCCCC; padding: 10px; text-align: right;">101</td>
                                    <td style="border-left: solid 1px #CCCCCC; border-right: solid 0px #CCCCCC; border-bottom:  solid 1px #CCCCCC; padding: 10px; text-align: right;">126</td>
                                    <td style="border-left: solid 1px #CCCCCC; border-right: solid 1px #CCCCCC; border-bottom:  solid 1px #CCCCCC; padding: 10px; text-align: right;">140 to 200</td>
                                  </tr>
                                  <tr>
                                    <td style="border-left: solid 1px #CCCCCC; border-right: solid 0px #CCCCCC; border-bottom:  solid 1px #CCCCCC; padding: 10px; text-align: left;">Established Diabetes</td>
                                    <td style="border-left: solid 1px #CCCCCC; border-right: solid 0px #CCCCCC; border-bottom:  solid 1px #CCCCCC; padding: 10px; text-align: right;">More than 126</td>
                                    <td style="border-left: solid 1px #CCCCCC; border-right: solid 0px #CCCCCC; border-bottom:  solid 1px #CCCCCC; padding: 10px; text-align: right;">-</td>
                                    <td style="border-left: solid 1px #CCCCCC; border-right: solid 1px #CCCCCC; border-bottom:  solid 1px #CCCCCC; padding: 10px; text-align: right;">More than 200</td>
                                  </tr>
                                </table>
                              </div>
                            </div>
                          </div>
                          <div class="dvFloat formpadding1"  style="padding:15px 0px">
                            <div style=" width:156px; height:30px; float:left;padding-right:20px;"> <a href="#"><img src="images/register_steps/familyhistory_strip_dis.jpg" alt=""></a></div>
                          </div>
                          <div class="formcontrol2" style="float:left"> </div>
                        </div>
                      </div>
                    </div>
                    <div id="tabs3ab" class="tabcontent1a">
                      <div  style="width:98%; border:solid 0px red;">
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
                              <td class="tbl_head">Spirit</td>
                              <td class="tbl_head">Cigarette</td>
                              <td class="tbl_head">Beer</td>
                              <td class="tbl_head">Sleep</td>
                              <td class="tbl_head">Physical Stress</td>
                              <td class="tbl_head">Mental Stress</td>
                              <td class="tbl_head">Actions</td>
                            </tr>
                            <tr>
                              <td class="tdborder" style="padding-left:20px;">334</td>
                              <td class="tdborder" style="padding-left:20px;">334</td>
                              <td class="tdborder" style="padding-left:20px;">334</td>
                              <td class="tdborder" style="padding-left:20px;">334</td>
                              <td class="tdborder" style="padding-left:20px;">Mild</td>
                              <td class="tdborder" style="padding-left:20px;">Moderate</td>
                              <td class="tdborder" style="padding-left:20px;"><table cellpadding="0" cellspacing="0"  style="width:100%" >
                                  <tr>
                                    <td class="SubTd1"><a href="#"><img src="images/register_steps/edit_icon.jpg" alt=""></a></td>
                                    <td class="SubTd2"><a href="#"><img src="images/register_steps/delete_icon.jpg" alt=""></a></td>
                                  </tr>
                                </table></td>
                            </tr>
                            <tr>
                              <td style="padding-left:20px;">334</td>
                              <td style="padding-left:20px;">334</td>
                              <td style="padding-left:20px;">334</td>
                              <td style="padding-left:20px;">334</td>
                              <td style="padding-left:20px;">Mild</td>
                              <td style="padding-left:20px;">Moderate</td>
                              <td  style="padding-left:20px;"><table cellpadding="0" cellspacing="0"  style="width:100%" >
                                  <tr>
                                    <td class="SubTd1"><a href="#"><img src="images/register_steps/edit_icon.jpg" alt=""></a></td>
                                    <td class="SubTd2"><a href="#"><img src="images/register_steps/delete_icon.jpg" alt=""></a></td>
                                  </tr>
                                </table></td>
                            </tr>
                          </table>
                        </div>
                        <div class="dvFloat formpadding1" style="padding-top:20px">
                          <div class="formlabel1">
                            <label class="formlabel1">
                            <h2 class="Tab_Title">Add to list</h2>
                            </label>
                          </div>
                          <div class="formcontrol2"> &nbsp; </div>
                        </div>
                       <div class="dvFloat formpadding1">
                          <div class="formlabel1">
                            <label class="formlabel1">Spirit</label>
                          </div>
                          <div class="formcontrol2">
                            <input type="text" name="txt_LSSpirit" id="txt_LSSpirit" value="" placeholder="Set Weekly Goal" /> <div class="div_input_text1" style="font-size: 12px;">ml consumed per week</div>
                          </div>
                        </div>
                        <div class="dvFloat formpadding1">
                          <div class="formlabel1">
                            <label class="formlabel1">Beer</label>
                          </div>
                          <div class="formcontrol2">
                            <input type="text" name="txt_LSBeer" id="txt_LSBeer" value=""  placeholder="Set Weekly Goal"/>
                            <div class="div_input_text1" style="font-size: 12px;">beer glasses per week</div>
                            
                          </div>
                        </div>
                        <div class="dvFloat formpadding1">
                          <div class="formlabel1">
                            <label class="formlabel1">Cigarette </label>
                          </div>
                          <div class="formcontrol2">
                            <input type="text" name="txt_LSCigarette" id="txt_LSCigarette" value="" placeholder="Set Daily Goal"/>
                             <div class="div_input_text1" style="font-size: 12px;">smoked per day</div>
                            
                          </div>
                        </div>
                        <div class="dvFloat formpadding1">
                          <div class="formlabel1">
                            <label class="formlabel1">Sleep<span class="redtxt">*</span></label>
                          </div>
                          <div class="formcontrol2">
                            <input type="text" name="txt_LSSleep" id="txt_LSSleep" value="" placeholder="Set Daily Goal" /> 
                              <div class="div_input_text1" style="font-size: 12px;">hours per day</div>
                        
                          </div>

                        </div>
                        <div class="dvFloat formpadding1">
                          <div class="formlabel1">
                            <label class="formlabel1">Physical Stress<span class="redtxt">*</span> </label>
                          </div>
                          <div class="formcontrol2">
                            <div style="width: 245px; float: left; border: solid 0px #003300;">
                              <select id="txt_LSPhysicalStress"  title="">
                                <option value="Select">Select</option>
                              </select>
                            </div>
                            <div style="width: 60px; float: left; border: solid 0px #006600; text-align: center; padding-top: 8px; color: #666666;">Details :</div>
                            <textarea id="txt_LSPhysicalStresstxt" name="txt_LSPhysicalStresstxt" style="width: 230px; height: 70px;"></textarea>
                          </div>
                        </div>
                        <div class="dvFloat formpadding1">
                          <div class="formlabel1">
                            <label class="formlabel1">Mental Stress<span class="redtxt">*</span> </label>
                          </div>
                          <div class="formcontrol2">
                            <div style="width: 245px; float: left; border: solid 0px #003300;">
                              <select id="txt_LSMentalStress"  title="">
                                <option value="Select">Select</option>
                              </select>
                            </div>
                            <div style="width: 60px; float: left; border: solid 0px #006600; text-align: center; padding-top: 8px; color: #666666;">Details :</div>
                            <textarea id="txt_LSMentalStresstxt" name="txt_LSMentalStresstxt" style="width: 230px; height: 70px;"></textarea>
                          </div>
                        </div>
                        <div class="dvFloat formpadding1">
                          <div class="formlabel1">
                            <label class="formlabel1">Date</label>
                          </div>
                          <div class="formcontrol2">
                            <div style="float:left; padding:0px 15px 0px 0px">
                              <select  id="Date_LS_Day"  title=""  style="width:60px;">
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
                              <select  id="Date_LS_Date"  title=""  style="width:60px;">
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
                              <select  id="Date_LS_Year"  title=""  style="width:93px;">
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
                        <div class="dvFloat formpadding"  style="padding:10px 0px 15px 0px">
                          <div class="formlabel1"> &nbsp; </div>
                          <div class="formcontrol2">
                            <div style=" width:84px; height:30px; float:left;padding-right:10px;"> <a href="#" class="button4">SUBMIT</a></div>
                            <div style=" width:156px; height:30px; float:left;padding-right:10px;"> <a href="#" class="button2" >NOT APPLICABLE</a></div>
                            <div style=" width:156px; height:30px; float:left;padding-right:10px;"> <a href="#" class="button2" >SKIP FOR NOW</a></div>
                          </div>
                        </div>
                        <div class="dvFloat formpadding1"  style="padding:15px 0px">
                          <div class="formlabel1">
                            <div style=" width:156px; height:30px; float:left;padding-right:20px;"> <a href="#"><img src="images/register_steps/familyhistory_strip_dis.jpg" alt=""></a></div>
                          </div>
                          <div class="formcontrol2" style="float:left"> </div>
                        </div>
                      </div>
                    </div>
                    <div id="tabs4ab" class="tabcontent1a">
                      <div  style="width:98%; border:solid 0px red;">
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
                              <td class="tbl_head" style="width:370px;">Lipid</td>
                              <td class="tbl_head">Result Date</td>
                              <td class="tbl_head">Result</td>
                              <td class="tbl_head">Range</td>
                              <td class="tbl_head">Unit</td>
                              <td class="tbl_head">Actions</td>
                            </tr>
                            <tr>
                              <td class="tdborder" style="padding-left:20px;">Triglyceride </td>
                              <td class="tdborder" style="padding-left:20px;">01-Nov-2013</td>
                              <td class="tdborder" style="padding-left:20px;">334</td>
                              <td class="tdborder" style="padding-left:20px;">34-34 </td>
                              <td class="tdborder" style="padding-left:20px;">mg/dl</td>
                              <td class="tdborder" style="padding-left:20px;"><table cellpadding="0" cellspacing="0"  style="width:100%" >
                                  <tr>
                                    <td class="SubTd1"><a href="#"><img src="images/register_steps/edit_icon.jpg" alt=""></a></td>

                                    <td class="SubTd2"><a href="#"><img src="images/register_steps/delete_icon.jpg" alt=""></a></td>
                                  </tr>
                                </table></td>
                            </tr>
                            <tr>
                              <td style="padding-left:20px;">Triglyceride</td>
                              <td style="padding-left:20px;">22-Nov-2013</td>
                              <td style="padding-left:20px;">335</td>
                              <td style="padding-left:20px;">34-34 </td>
                              <td style="padding-left:20px;">mg/dl</td>
                              <td  style="padding-left:20px;"><table cellpadding="0" cellspacing="0"  style="width:100%" >
                                  <tr>
                                    <td class="SubTd1"><a href="#"><img src="images/register_steps/edit_icon.jpg" alt=""></a></td>
                                    <td class="SubTd2"><a href="#"><img src="images/register_steps/delete_icon.jpg" alt=""></a></td>
                                  </tr>
                                </table></td>
                            </tr>
                          </table>
                        </div>
                        <div class="dvFloat formpadding1" style="padding-top:20px; border-bottom: solid 0px #000000;">
                          <div class="formlabel1">
                            <label class="formlabel1">
                            <h2 class="Tab_Title">Add to list</h2>
                            </label>
                          </div>
                          <div class="formcontrol2"> &nbsp; </div>
                        </div>
                        <div class="dvFloat formpadding1" style="padding-bottom: 0px;">
                          <div class="formlabel1-1">
                            <label class="formlabel1-1p">&nbsp;</label>
                          </div>

                          <div class="formcontrol2-2">
                            <label>Triglyceride </label>
                          </div>
                          <div class="formcontrol2-2">
                            <label>LDL</label>
                          </div>
                          <div class="formcontrol2-2">
                            <label>HDL</label>
                          </div>
                          <div class="formcontrol2-2">
                            <label>Cholesterol</label>
                          </div>
                        </div>
                        <!--<div class="dvFloat formpadding1">
                          <div class="formlabel1-1">
                            <label class="formlabel1-1p">Lipid <span class="redtxt">*</span></label>
                          </div>
                          <div class="formcontrol2-2">
                            <select id="lipid_Triglyceride"  title="" style="width: 175px;">
                              <option value="Select">Select</option>
                            </select>
                          </div>
                          <div class="formcontrol2-2">
                            <select id="lipid_LDL"  title="" style="width: 175px;">
                              <option value="Select">Select</option>
                            </select>
                          </div>
                          <div class="formcontrol2-2">
                            <select id="lipid_HDL"  title="" style="width: 175px;">
                              <option value="Select">Select</option>
                            </select>
                          </div>
                          <div class="formcontrol2-2">
                            <select id="lipid_Cholesterol"  title="" style="width: 175px;">
                              <option value="Select">Select</option>
                            </select>
                          </div>
                        </div>-->
                        <div class="dvFloat formpadding1">
                          <div class="formlabel1-1">
                            <label class="formlabel1-1p">Date <span class="redtxt">*</span></label>
                          </div>
                          <div class="formcontrol2-2">
                            <div class="dvFloat">
                              <div style="float:left; padding:0px 7px 0px 0px">
                                <select id="Lipid_Triglyceride_Date" title="" style="width:50px;">
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
                                <select id="Lipid_Triglyceride_Month" title="" style="width:50px;">
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
                                <select id="Lipid_Triglyceride_Year" title="" style="width:60px;">
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
                          <div class="formcontrol2-2">
                            <div class="dvFloat">
                              <div style="float:left; padding:0px 7px 0px 0px">
                                <select id="lipid_LDL_Date" title="" style="width:50px;">
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
                                <select id="lipid_LDL_Month" title="" style="width:50px;">
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
                                <select id="lipid_LDL_Year" title="" style="width:60px;">
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
                          <div class="formcontrol2-2">
                            <div class="dvFloat">
                              <div style="float:left; padding:0px 7px 0px 0px">
                                <select id="lipid_HDL_Date" title="" style="width:50px;">
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
                                <select id="lipid_HDL_Month" title="" style="width:50px;">
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
                                <select id="lipid_HDL_Year" title="" style="width:60px;">
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
                          <div class="formcontrol2-2">
                            <div class="dvFloat">
                              <div style="float:left; padding:0px 7px 0px 0px">
                                <select id="lipid_Cholesterol_Date" title="" style="width:50px;">
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
                                <select id="lipid_Cholesterol_Month" title="" style="width:50px;">
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
                                <select id="lipid_Cholesterol_Year" title="" style="width:60px;">
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
                          <div class="formlabel1-1">
                            <label class="formlabel1-1p">Result<span class="redtxt">*</span> </label>
                          </div>
                          <div class="formcontrol2-2">
                            <input type="text" name="txt_Result_Triglyceride" id="txt_Result_Triglyceride" value="" placeholder="" style="width: 163px;" />
                          </div>
                          <div class="formcontrol2-2">
                            <input type="text" name="txt_Result_LDL" id="txt_Result_LDL" value="" placeholder="" style="width: 163px;" />
                          </div>
                          <div class="formcontrol2-2">
                            <input type="text" name="txt_Result_HDL" id="txt_Result_HDL" value="" placeholder="" style="width: 163px;" />
                          </div>
                          <div class="formcontrol2-2">
                            <input type="text" name="txt_Result_Cholesterol" id="txt_Result_Cholesterol" value="" placeholder="" style="width: 163px;" />
                          </div>
                        </div>
                        <div class="dvFloat formpadding1">
                          <div class="formlabel1-1">
                            <label class="formlabel1-1p">Range <span class="redtxt">*</span> </label>
                          </div>
                          <div class="formcontrol2-2">
                            <table width="100%" cellpadding="0" cellspacing="0" border="0">
                              <tr>
                                <td style="width: 63px;"><input type="text" name="txt_Range_Triglyceride" id="txt_Range_Triglyceride" value="" placeholder="" style="width: 67px;" /></td>
                                <td style="width: 1px;" valign="middle">-</td>
                                <td style="width: 63px;"><input type="text" name="txt_Range_Triglyceride1" id="txt_Range_Triglyceride1" value="" placeholder="" style="width: 67px;" /></td>
                              </tr>
                            </table>
                          </div>
                          <div class="formcontrol2-2">
                            <table width="100%" cellpadding="0" cellspacing="0" border="0">
                              <tr>
                                <td style="width: 63px;"><input type="text" name="txt_Range_LDL" id="txt_Range_LDL" value="" placeholder="" style="width: 67px;" /></td>
                                <td style="width: 1px;" valign="middle">-</td>
                                <td style="width: 63px;"><input type="text" name="txt_Range_LDL1" id="txt_Range_LDL1" value="" placeholder="" style="width: 67px;" /></td>
                              </tr>
                            </table>
                          </div>
                          <div class="formcontrol2-2">
                            <table width="100%" cellpadding="0" cellspacing="0" border="0">
                              <tr>
                                <td style="width: 63px;"><input type="text" name="txt_Range_HDL" id="txt_Range_HDL" value="" placeholder="" style="width: 67px;" /></td>
                                <td style="width: 1px;" valign="middle">-</td>
                                <td style="width: 63px;"><input type="text" name="txt_Range_HDL1" id="txt_Range_HDL1" value="" placeholder="" style="width: 67px;" /></td>
                              </tr>
                            </table>
                          </div>
                          <div class="formcontrol2-2">
                            <table width="100%" cellpadding="0" cellspacing="0" border="0">
                              <tr>
                                <td style="width: 63px;"><input type="text" name="txt_Range_Cholesterol" id="txt_Range_Cholesterol" value="" placeholder="" style="width: 68px;" /></td>
                                <td style="width: 1px;" valign="middle">-</td>
                                <td style="width: 63px;"><input type="text" name="txt_Range_Cholesterol1" id="txt_Range_Cholesterol1" value="" placeholder="" style="width: 68px;" /></td>
                              </tr>
                            </table>
                          </div>
                        </div>
                        <div class="dvFloat formpadding1">
                          <div class="formlabel1-1">
                            <label class="formlabel1-1p">Unit<span class="redtxt">*</span> </label>
                          </div>
                          <div class="formcontrol2-2">
                            <input type="text" name="txt_Unit_Triglyceride" id="txt_Unit_Triglyceride" value="" placeholder="" style="width: 164px;" />
                          </div>
                          <div class="formcontrol2-2">
                            <input type="text" name="txt_Unit_LDL" id="txt_Unit_LDL" value="" placeholder="" style="width: 163px;" />
                          </div>
                          <div class="formcontrol2-2">
                            <input type="text" name="txt_Unit_HDL" id="txt_Unit_HDL" value="" placeholder="" style="width: 163px;" />
                          </div>
                          <div class="formcontrol2-2">
                            <input type="text" name="txt_Unit_Cholesterol" id="txt_Unit_Cholesterol" value="" placeholder="" style="width: 163px;" />
                          </div>
                        </div>
                        <div class="dvFloat formpadding"  style="padding:10px 0px 15px 0px">
                            <div class="formlabel1-1p">&nbsp;</div>
                            <div style="float: left; border: solid 0px #006600; width:730px;">
                               <div style=" width:156px; height:30px; float:right; padding-right:0px;"> <a href="#" class="button2" >SKIP FOR NOW</a></div> <div style=" width:156px; height:30px; float:right; padding-right:10px;"> <a href="#" class="button2" >NOT APPLICABLE</a></div><div style=" width:84px; height:30px; float:right; padding-right:10px;"> <a href="#" class="button4">SUBMIT</a></div>
                             
                             
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
                        </div>
                        <div class="dvFloat formpadding1"  style="padding:15px 0px">
                          <div style=" width:156px; height:30px; float:left;padding-right:20px;"> <a href="#"><img src="images/register_steps/familyhistory_strip_dis.jpg" alt=""></a></div>
                          <div style=" width:156px; height:30px; float:right;padding-right:75px;"> <a href="health_wealth_setup2.html"  ><img src="images/register_steps/health_dashboard_strip.jpg" alt="" /></a></div>
                        </div>
                      </div>
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
<div id="dvpopup-form3" style="text-align: center; width: 780px;position:absoulte;margin-left:15%; margin-top:15px; display:none">
  <table cellpadding="0" cellspacing="0" border="0" width="400px" align="center">
    <tr>
      <td align="center" style="padding: 10px 37px 10px 350px"><div style="margin: 15px 0px 0px 333px; position: absolute;"> <a href="javascript:Popup.hide('dvpopup-form3');" target="_parent" style="text-decoration: none; color: #fff;"> <img src="images/close.png" alt="" title="" border="0" /> </a> </div></td>
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
                    <option value="0">Select</option>
                    <option value="1">Lab Report</option>
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
<script>
	Pres_Report_Show_Hide();
    Intake_Reminder_Show_Hide();
	Purchase_Reminder_Show_Hide();
	Daily_Frequency_enabledisable();
    </script>
