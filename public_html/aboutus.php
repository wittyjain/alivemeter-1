<?php include 'includes/common.inc.php'?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Alivemeter | Online Health Advice | Health Tracker</title>
<meta name="description" content="Monitor your health, get expert advice, access medical records, consult doctors, nutritionists with just a touch.">
<meta name="keywords" content="health advice, health online, health app, health tracker, online advice, medical history online, medical records, hospital Mumbai, healthcare India">
<?php include 'includes/links.php'?>
<link href="style/main.css" rel="stylesheet" type="text/css">
<link href="style/jupiter.css" rel="stylesheet" type="text/css">
<link href="style/reset.css" rel="stylesheet" type="text/css">
<link href="style/fonts.css" rel="stylesheet" type="text/css">
<link href="style/bxslider.css" rel="stylesheet" type="text/css">
<link href="style/paging_style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" language="javascript" src="js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" language="javascript" src="js/scrolltopcontrol.js"></script>

<link href="style/bhupali.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php include 'includes/top.php'?>
<section>
  <?php if ($doc_consult_count > 0 && $medication_count > 0 && $allergies_count > 0  && $hospitalization_count > 0 && $immunization_count > 0 && $health_problem_count > 0 && $family_history_count > 0 && $blood_pressure_count > 0 && $sugar_profile_count > 0 && $life_style_count > 0 && $lipid_profile_count > 0) { ?>
  <div class="dvFloat">
    <?php include "includes/dashboard_top.inc.php";?>
  </div>
  <?php } ?>
</section>

<section>
  <div style="border:solid 0px red; background-image: url(images/banner_bg1.png); background-repeat: repeat-x; background-color: #CCC; width: 100%; height: 360px;">
  	<div class="cal_12  m_outo" style="padding-top: 10px;">
    <img src="images/aboutus.png" alt="Your Gateway to taking Your Health In Your Hands" title="Your Gateway to taking Your Health In Your Hands" border="0">
    </div>
  </div>
</section>

<!--<section>
  <div class="top_ou">
    <div class="top_in">
      <div class="top">
        
      </div>
    </div>
  </div>
</section>-->


<section>
  <div class="cal_12 m_outo">
    <div class="cal_12">
    	<div class="DvFloat">
        	<h1 class="about_bbluetxt">We Are Your Very Own Healthcare Partner, Advisor and Confidant</h1>
            
            <h2 class="about_bblacktxt">So You Can Make Informed Health Decisions </h2>
        </div>
        
        <div class="DvFloat" style="padding-top: 25px;">
        	<p class="about_ptxt">Amidst increasing convenience, fast food and sedentary culture, lifestyle diseases and chronic illnesses are becoming a common occurrence. Add to it the multitude of unreliable information sources and the reducing accessibility of sound health advice, and we have a healthcare conundrum. It’s time to shrug off the passivity. Alivemeter provides you a powerful NextGen health tool, so the control is back in your hands.</p>
        </div>
        
        <div class="DvFloat" style="padding-top: 25px;">
        	<div class="about_leftdv">
            	<div class="DvFloat">
                	<div class="DvFloat">
                    	<h2 class="about_sgreentxt">Single touch point of your health</h2>
                        
                        <h2 class="about_sblacktxt">Bringing healthcare and wellbeing to your fingertips</h2>
                        </div>
                        <div class="DvFloat" style="padding-top: 25px;">
                        	<p class="about_plefttxt">Finding time for your health or your family’s health is becoming more and more challenging amidst the rat race for success. Alivemeter provides a single platform to provide you complete control of your health and that of your loved ones. What’s more, we make all-round health intel available to you across platforms – mobile, web and tablet – so you can access good health from anywhere, at your convenience. Be in charge of your health, once more. <a href="#" style="color: #1b5cbe; text-decoration: none;">Learn how.</a></p>
                        </div>
                </div>
            </div>
            <div class="about_sepdv">&nbsp;</div>
            <div class="about_leftdv">
            	<div class="DvFloat">
                	<div class="DvFloat">
                    	<h2 class="about_sgreentxt">The power of health brought back to you</h2>
                        
                        <h2 class="about_sblacktxt">Equipping you with expert advice and efficient tools </h2>
                        </div>
                        <div class="DvFloat" style="padding-top: 25px;">
                        	<p class="about_plefttxt">Your stomach aches and you don’t know why. How would it be to have a Symptom Checker to help you zero in on the likely condition? You like to know where you are on the health scale. How about a personal health tracker and analyzer? You seek professional advice but don’t have the time. Meet expert doctors across diverse specializations and get genuine, personalized medical advice. This, and many more intuitive and user-friendly tools is what awaits you at Alivemeter.  <a href="#" style="color: #1b5cbe; text-decoration: none;"> Explore.</a></p>
                        </div>
                </div>
            </div>
        </div>
        
        <div class="DvFloat" style="padding-bottom: 40px;">
        	<h1 class="about_bbluetxt">Meet the Team</h1>
            <p class="about_pbottomtxt">The constant stress of trying to stay on top of things and making a career has taken a toll on the health of the current generation. Amidst the mad rush for things everywhere, the founders identified that people did not have a control over their health anymore – a culmination of decades of bad habits and poor health decisions. Thus was born Alivemeter, to bring control back in people’s lives, the simpler way.</p>
        </div>
    </div>
  </div>
</section>


<?php include 'includes/bottom.php'?>

<script type="text/javascript" src="js/jQuery.1.8.2.js"></script> 
<script type="text/javascript" src="js/jquery.bxslider.min.js"></script> 
<script type="text/javascript" src="js/custom.js"></script>

<script type="text/javascript" src="js/jquery.form-2.4.0.min.js"></script>
<script type="text/javascript" src="js/jqeasy.dropdown.min.js"></script>
</body>
</html>