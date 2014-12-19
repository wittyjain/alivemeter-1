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
<link type="text/css" rel="stylesheet" href="css/style.css" />
<style type="text/css">
#dd_nav{
	list-style:none;

	margin-bottom:10px;
	
	float:left;
	position:absolute; z-index:1;margin-top:-20px; border:solid 0px red;
	
}
#dd_nav li{
	float:left;
	margin-right:10px;
	position:relative;
}#dd_nav li:last-child{
	float:left;
	margin-right:0px;
	position:relative;
}
#dd_nav a{
	display:block;
	padding: 5px 0px 5px 12px;
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
#dd_nav li:hover ul li a:hover{ 
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
        <div class="b_crumb"><a href="index.html">Home></a> Top Stories</div>
        <div class="story_nav">
          <ul id="dd_nav">
		
		<li>
			<a href="#" title=""  style="background: #99cc00;width:188px; text-decoration:none;">Select Health Story Category&nbsp;&nbsp;&nbsp;<span class="ar">&#9660;</span></a>
			 <ul style="width: 200px; background-color: #83a819;">
				  <li style="background-color: #83a819;"><a href="#">Food and Nutrition</a></li>
                  <li style="background-color: #83a819;"><a href="#">Disease Prevention</a></li>
                  <li style="background-color: #83a819;"><a href="#">Fitness</a></li>
                  <li style="background-color: #83a819;"><a href="#">Weight Loss and Healthy Living</a></li>
                  <li style="background-color: #83a819;"><a href="#">Skin Care and Beauty</a></li>
			</ul>
		</li>
		<li>
			<a href="#" title=""  style="background: #00b2b2;width:195px; text-decoration:none">Select Wealth Story Category&nbsp;&nbsp;&nbsp;<span class="ar">&#9660;</span></a>
			   <ul style="width: 207px; background-color: #009999;">
				<li style=" background-color: #009999;"><a href="#">Stock Market</a></li>
                  <li style=" background-color: #009999;"><a href="#">Insurance</a></li>
                  <li style=" background-color: #009999;"><a href="#">Takes</a></li>
                  <li style=" background-color: #009999;"><a href="#">Loans</a></li>
                  <li style=" background-color: #009999;"><a href="#">Credit Card</a></li>
			</ul>
		</li>
		<li><a href="#" style="background: #d9c727;width:120px; text-decoration:none; text-align:center;padding-left:0px">Happiness stories</a></li>
	</ul>
          
        </div>
      </div>
      <div class="cal_12">
        <h2 class="f_red" style="padding-left: 20px; padding-bottom: 10px;padding-top:20px;">LATEST STORIES</h2>
        <div class="story_box">
          <ul>
            <li class="green_a"> <a href="#">
              <div class="th_im">
                <div class="heder green"><span class="arrow green"></span>Food and Nutrition </div>
                <img src="images/top_Srories/01.jpg" width="193" height="117" alt="Food and Nutrition"></div>
              <div class="details">How to read ''Nutrition Information'' before...</div>
              <div class="f_us"><img src="images/follow_01.png" width="116" height="18"></div>
              </a> </li>
            <li class="blue_a"> <a href="#">
              <div class="th_im">
                <div class="heder blue"><span class="arrow blue"></span>Stock Market </div>
                <img src="images/top_Srories/02.jpg" width="193" height="117" alt="Food and Nutrition"></div>
              <div class="details">5 Stock Market Myths Exposed</div>
              <div class="f_us"><img src="images/follow_01.png" width="116" height="18"></div>
              </a> </li>
            <li class="green_a"> <a href="#">
              <div class="th_im">
                <div class="heder green"><span class="arrow green"></span>Disease Prevention </div>
                <img src="images/top_Srories/03.jpg" width="193" height="117" alt="Disease Prevention"></div>
              <div class="details">Dealing with Miscarriage Physically and Emotionally</div>
              <div class="f_us"><img src="images/follow_01.png" width="116" height="18"></div>
              </a> </li>
            <li class="green_a"> <a href="#">
              <div class="th_im">
                <div class="heder green"><span class="arrow green"></span>Fitness </div>
                <img src="images/top_Srories/04.jpg" width="193" height="117" alt="Food and Nutrition"></div>
              <div class="details">5 Exercises for Rock-Solid Abs</div>
              <div class="f_us"><img src="images/follow_01.png" width="116" height="18"></div>
              </a> </li>
            <li class="green_a"> <a href="#">
              <div class="th_im">
                <div class="heder green"><span class="arrow green"></span>Skin Care and Beauty </div>
                <img src="images/top_Srories/05.jpg" width="193" height="117" alt="Food and Nutrition"></div>
              <div class="details">Skin Ageing Treatments: Which Should You...</div>
              <div class="f_us"><img src="images/follow_01.png" width="116" height="18"></div>
              </a> </li>
            <li class="green_a"> <a href="#">
              <div class="th_im">
                <div class="heder green"><span class="arrow green"></span>Weight Loss and Healthy Living </div>
                <img src="images/top_Srories/06.jpg" width="193" height="117" alt="Food and Nutrition"></div>
              <div class="details">Dealing with Childhood Obesity</div>
              <div class="f_us"><img src="images/follow_01.png" width="116" height="18"></div>
              </a> </li>
            <li class="blue_a"> <a href="#">
              <div class="th_im">
                <div class="heder blue"><span class="arrow blue"></span>Loans </div>
                <img src="images/top_Srories/07.jpg" width="193" height="117" alt="Food and Nutrition"></div>
              <div class="details">Questions you Need to Ask before Applying...</div>
              <div class="f_us"><img src="images/follow_01.png" width="116" height="18"></div>
              </a> </li>
            <li class="blue_a"> <a href="#">
              <div class="th_im">
                <div class="heder blue"><span class="arrow blue"></span>Insurance </div>
                <img src="images/top_Srories/08.jpg" width="193" height="117" alt="Food and Nutrition"></div>
              <div class="details">What you Need to Know Before Taking Critical...</div>
              <div class="f_us"><img src="images/follow_01.png" width="116" height="18"></div>
              </a> </li>
            <li class="green_a"> <a href="#">
              <div class="th_im">
                <div class="heder green"><span class="arrow green"></span>Food and Nutrition </div>
                <img src="images/top_Srories/09.jpg" width="193" height="117" alt="Food and Nutrition"></div>
              <div class="details">6 Ways to Boost Your Immunity</div>
              <div class="f_us"><img src="images/follow_01.png" width="116" height="18"></div>
              </a> </li>
            <li class="blue_a"> <a href="#">
              <div class="th_im">
                <div class="heder blue"><span class="arrow blue"></span>Stock Market </div>
                <img src="images/top_Srories/10.jpg" width="193" height="117" alt="Food and Nutrition"></div>
              <div class="details">5 Signs That Indicate You Should Sell Your Stocks</div>
              <div class="f_us"><img src="images/follow_01.png" width="116" height="18"></div>
              </a> </li>
            <li class="green_a"> <a href="#">
              <div class="th_im">
                <div class="heder green"><span class="arrow green"></span>Disease Prevention </div>
                <img src="images/top_Srories/11.jpg" width="193" height="117" alt="Disease Prevention"></div>
              <div class="details">Breast Cancer: From Diagnosis to Recovery</div>
              <div class="f_us"><img src="images/follow_01.png" width="116" height="18"></div>
              </a> </li>
            <li class="yellow_a"> <a href="#">
              <div class="th_im">
                <div class="heder yellow"><span class="arrow yellow"></span>Happiness </div>
                <img src="images/top_Srories/12.jpg" width="193" height="117" alt="Food and Nutrition"></div>
              <div class="details">7 Ways to Sleep Better<br>
                <br>
              </div>
              <div class="f_us"><img src="images/follow_01.png" width="116" height="18"></div>
              </a> </li>
          </ul>
        </div>
        <div style="text-align: center; padding: 10px 20px; width: 958px; border: solid 0px #000000;">
          <div class="pagination">
            <div style="width: 33px; float: left; border: solid 0px #0066FF; padding: 0px; margin:-5px 0px 0px -3px;"><a href="#"><img src="images/prev_paging.png" alt="" title="" border="0" /></a></div>
            <div style="width: 893px; float: left;"><span class="selected">1</span> <a href="#">2</a> <a href="#">3</a> <a href="#">4</a> <a href="#">5</a> <a href="#">6</a> <a href="#">7</a> </div>
            <div style="width: 33px;  float: left; border: solid 0px #0066FF; padding: 0px; margin:-5px 0px 0px 0px;"><a href="#"><img src="images/next_paging.png" alt="" title="" border="0" /></a></div>
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
</body>
</html>
