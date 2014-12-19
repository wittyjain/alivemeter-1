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
<script language="JavaScript" src="js/PopUp.js" type="text/javascript"></script>
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
<link href="style/bhupali.css" rel="stylesheet" type="text/css">
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
</head>
<body>
<?php include 'includes/top.php'?>
<section>
  <div class="top_ou">
    <div class="top_in" style="border: solid 0px #000066;">
      <div class="top">
        <div class="cal_12">
          <div class="DvFloat" style="border-bottom: solid 1px #e4e4e4; margin:30px 0px 15px 0px;">
            <h1 class="f_red" style="text-align: left; font-size: 18px; font-weight:bold;  margin-bottom: 7px;">PATIENT  Details</h1>
          </div>
          <div class="DvFloat">
            <div class="adviceonline_md">
              <div class="DvFloat">
                <div class="DvFloat">
                  <div class="photoareabg">
                    <div class="nutritionistphoto"> <img src="images/nutritionist_photo.png" alt="" title="" border="0"> </div>
                  </div>
                  <div class="nutritionistright">
                    <div class="DvFloat">
                      <div class="DvFloat f_grey" style="font-size: 18px;">Kumar Amit</div>
                      <div class="f_grey welcomedv">
                        <div class="DvFloat">
                          <div style="width: 25%; float: left;"><span style="font-weight: bold;">Sex:</span></div>
                          <div style="width: 25%; float: left;">Male</div>
                          <div style="width: 25%; float: left;"><span style="font-weight: bold;">Profession:</span></div>
                          <div style="width: 25%; float: left;">dsafs  fddfds</div>
                          <div style="width: 25%; float: left;"><span style="font-weight: bold;">Age:</span></div>
                          <div style="width: 25%; float: left;">26 years</div>
                          <div style="width: 25%; float: left;"><span style="font-weight: bold;">Company:</span></div>
                          <div style="width: 25%; float: left;">Accord Fintech Pvt Ltd</div>
                          <div style="width: 25%; float: left;"><span style="font-weight: bold;">Blood Group:</span></div>
                          <div style="width: 25%; float: left;">B+</div>
                          <div style="width: 25%; float: left;"><span style="font-weight: bold;">Designation: </span></div>
                          <div style="width: 25%; float: left;">Quality Analyst</div>
                          <div style="width: 25%; float: left;"><span style="font-weight: bold;">Height: </span></div>
                          <div style="width: 25%; float: left;">165</div>
                          <div style="width: 25%; float: left;"><span style="font-weight: bold;">Daily Travel Time: </span></div>
                          <div style="width: 25%; float: left;">5:5</div>
                          <div style="width: 25%; float: left;"><span style="font-weight: bold;">Weight: </span></div>
                          <div style="width: 25%; float: left;">65</div>
                          <div style="width: 25%; float: left;"><span style="font-weight: bold;">Travel Mode: </span></div>
                          <div style="width: 25%; float: left;">Public Transport</div>
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
<section>
  <div class="cal_full_size">
    <div class="cal_12 m_outo">
      <div class="dvFloat">
        <div class="dvWrapper">
          <div class="DvFloat" style="border-bottom: solid 1px #e4e4e4; margin:30px 0px 15px 0px">
            <h1 class="f_red" style="text-align: left; font-size: 18px; font-weight:bold;  margin-bottom: 7px;">Patient Query Details</h1>
          </div>
          <div style="width:100%; border:solid 0px red;">
            <div class="dvFloat formpadding1" style="padding-top:0px;">
              <div class="formlabel1">
                <label class="formlabel1">Query Type </label>
              </div>
              <div class="formcontrol21"> Fresh </div>
            </div>
            <div class="dvFloat formpadding1">
              <div class="formlabel1">
                <label class="formlabel1">Body Area <span class="redtxt">*</span></label>
              </div>
              <div class="formcontrol21">Abdomen & Pelvis</div>
            </div>
            <div class="dvFloat formpadding1">
              <div class="formlabel1">
                <label class="formlabel1">Complaint <span class="redtxt">*</span></label>
              </div>
              <div class="formcontrol21">This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus </div>
            </div>
            <div class="dvFloat formpadding1">
              <div class="formlabel1">
                <label class="formlabel1">Symptoms </label>
              </div>
              <div class="formcontrol21">Bleeding sore      Burning pain       Arm numbness       Bleeding mole or sore      Bone pain      
                Brittle, crumbly or ragged nail</div>
            </div>
            <div class="dvFloat formpadding1">
              <div class="formlabel1">
                <label class="formlabel1">How often you suffer from this Medical Problem ?<span class="redtxt">*</span> </label>
              </div>
              <div class="formcontrol21">Frequently</div>
            </div>
            <div class="dvFloat formpadding1">
              <div class="formlabel1">
                <label class="formlabel1">Last Ocurrency of Problem ?<span class="redtxt">*</span> </label>
              </div>
              <div class="formcontrol21">
                <div style="float:left; padding:0px 5px 0px 0px">26-Dec-2013</div>
              </div>
            </div>
            <div class="dvFloat formpadding1">
              <div class="formlabel1">
                <label class="formlabel1">Doctor Consulted of problem (if any?)<span class="redtxt">*</span> </label>
              </div>
              <div class="formcontrol21" style="float:left; text-align:left">
                <div style="float:left">True</div>
              </div>
            </div>
            <div class="dvFloat formpadding1">
              <div class="formlabel1">
                <label class="formlabel1">Doctor Name<span class="redtxt">*</span> </label>
              </div>
              <div class="formcontrol21">Sahana shetty</div>
            </div>
            <div class="dvFloat formpadding1">
              <div class="formlabel1">
                <label class="formlabel1">Doctor Comment<span class="redtxt">*</span> </label>
              </div>
              <div class="formcontrol21">Take the previous prescribed medicene on time</div>
            </div>
            <div class="dvFloat formpadding1">
              <div class="formlabel1">
                <label class="formlabel1">Attached report<span class="redtxt">*</span> </label>
              </div>
              <div class="formcontrol21">
                <div class="dvFloat"> <img src="images/action.jpg" alt="" align="absmiddle" />&nbsp;<b>16-Nov-2013:</b> Prescription<br>
                  <img src="images/action.jpg" alt="" align="absmiddle" />&nbsp;<b> 12-Nov-2013:</b> Lab<br>
                  <img src="images/action.jpg" alt="" align="absmiddle" />&nbsp;<b> 11-Nov-2013:</b> Prescription<br>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="DvFloat" style="border-bottom: solid 0px #e4e4e4;border-top: solid 0px #e4e4e4; margin:10px 0px 0px 0px">
          <h1 class="f_red" style="text-align: left; font-size: 18px; font-weight:bold;  margin: 7px;">doctor’s comments</h1>
        </div>
        <div class="DvFloat" style="margin-bottom:30px;">
          <table class="tablecont" cellpadding="2" cellspacing="1" width="100%" border="0">
            <tbody>
              
              <tr>
                <td class="dargery" style="width:150px;"> Sent On </td>
                <td class="dargreen" style="width:250px;"> Advice </td>
                <td class="dargreen" style="width:250px;"> Internal Doctor Advice </td>
              </tr>
              <tr>
                <td class="ligery" style="text-align:left;">26-Dec-2013 14:39:55</td>
                <td class="ligreen" style="text-align:left;"><div class="LongText">hi
                    
                    Take 
                    Painkiller
                    
                    Crocin
                    
                    Disprin </div></td>
                <td class="ligreen" style="text-align:left;"><div class="LongText">Na</div></td>
              </tr>
              <tr>
                <td class="ligery" style="text-align:left;">26-Dec-2013 14:41:01</td>
                <td class="ligreen" style="text-align:left;"><div class="LongText">md
                    
                    
                    Test mail
                    
                    **************End Of Mail*****************</div></td>
                <td class="ligreen" style="text-align:left;"><div class="LongText"> *****************NA*************************</div></td>
              </tr>
              <tr>
                <td class="ligery" style="text-align:left;">06-Feb-2014 10:33:16</td>
                <td class="ligreen" style="text-align:left;"><div class="LongText">test</div></td>
                <td class="ligreen" style="text-align:left;"><div class="LongText">test</div></td>
              </tr>
            </tbody>
          </table>
          
          
          
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>
  </div>
</section>
<?php include 'includes/bottom.php'?>
<div id="dvpopup-form" style="text-align: center; width: 780px;position:absoulte; margin:15px auto;  margin-left:25%; display:none ">
  <table cellpadding="0" cellspacing="0" border="0" width="400px" align="center">
    <tr>
      <td style="text-align:right; border:solid 0px red; float:right"><div style="margin: 5px 0px 0px -23px; position: absolute; text-align:right"> <a href="javascript:Popup.hide('dvpopup-form');" target="_parent" style="text-decoration: none; color: #fff;"> <img src="images/close.png" alt="" title="" border="0" /> </a> </div></td>
    </tr>
    <tr>
      <td valign="top" align="center" style="padding: 10px 10px 10px 10px;"><div class="DvFloat">
          <div class="dvWhitePopup_Box">
            <table cellpadding="0" cellspacing="0" style="width:90%; border:solid 0px #000000">
              <tr>
                <td colspan="4" style="padding-bottom:15px;padding-left:20px;text-align:center"><h2 class="Tab_Title" style="color:#333333"> Your Comments have been sent to Patient </h2></td>
              </tr>
              <tr>
                <td  style="text-align:center; padding:0px 10px;vertical-align:middle"><div style=" width:250px; height:20px; float:left;padding-right:10px; font-size:13px;"> <a href="doctor_02.html" class="button" style="font-size:13px; line-height:25px">Click here to get queries</a></div>
                  <div style=" width:180px; height:30px; float:left;padding-right:10px;"> <a href="doctor_03.html" class="button2" style="font-size:13px;" >view old queries</a></div>
                  <div style=" width:100px; height:30px; float:left;padding-right:10px;"> <a href="doctor_01.html" class="button2" style="font-size:13px;">cancel</a></div></td>
              </tr>
            </table>
          </div>
        </div></td>
    </tr>
  </table>
</div>
<div id="dvpopup-form1" style="text-align: center; width: 780px;position:absoulte; margin:15px auto;  margin-left:25%; display:none ">
  <table cellpadding="0" cellspacing="0" border="0" width="400px" align="center">
    <tr>
      <td style="text-align:right; border:solid 0px red; float:right"><div style="margin: 5px 0px 0px -23px; position: absolute; text-align:right"> <a href="javascript:Popup.hide('dvpopup-form1');" target="_parent" style="text-decoration: none; color: #fff;"> <img src="images/close.png" alt="" title="" border="0" /> </a> </div></td>
    </tr>
    <tr>
      <td valign="top" align="center" style="padding: 10px 10px 10px 10px;"><div class="DvFloat">
          <div class="dvWhitePopup_Box">
            <table cellpadding="0" cellspacing="0" style="width:90%; border:solid 0px #000000">
              <tr>
                <td colspan="4" style="padding-bottom:15px;padding-left:20px;text-align:center"><h2 class="Tab_Title" style="color:#333333"> Your Comments have been sent to MD </h2></td>
              </tr>
              <tr>
                <td  style="text-align:center; padding:0px 10px;vertical-align:middle"><div style=" width:250px; height:20px; float:left;padding-right:10px; font-size:13px;"> <a href="adviceonline_md.html" class="button" style="font-size:13px; line-height:25px">Click here to get queries</a></div>
                  <div style=" width:180px; height:30px; float:left;padding-right:10px;"> <a href="adviceonline_md_03.html" class="button2" style="font-size:13px;" >view old queries</a></div>
                  <div style=" width:100px; height:30px; float:left;padding-right:10px;"> <a href="adviceonline_md_01.html" class="button2" style="font-size:13px;">cancel</a></div></td>
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
