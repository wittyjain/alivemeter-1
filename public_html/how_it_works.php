<?php include 'includes/common.inc.php'?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Online Doctors | Health Information | Medical Records</title>
<meta name="description" content="Complete healthcare online – Track your BP, access family health records, consult doctors and nutritionists.">
<meta name="keywords" content="health apps, health information, medical records online, doctor consultation online, family health history, track BP online, track sugar online, track calories online, dietician and nutritionist online">

<?php include 'includes/links.php'?>
<link href="style/main.css" rel="stylesheet" type="text/css">
<link href="style/jupiter.css" rel="stylesheet" type="text/css">
<link href="style/reset.css" rel="stylesheet" type="text/css">
<link href="style/fonts.css" rel="stylesheet" type="text/css">
<link href="style/bxslider.css" rel="stylesheet" type="text/css">
<script type="text/javascript" language="javascript" src="js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" language="javascript" src="js/scrolltopcontrol.js"></script>
<link href="style/bhupali.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="style/how_it_works1.css" />
<script type="text/javascript" src="js/tabcontent3.js"></script>
<script type="text/javascript" src="js/ddaccordion.js"></script>
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
	cursor: hand;
	cursor: pointer;
	padding: 10px 5px;
	background: url(images/h2_trigger_a2.png) no-repeat;
	background-position: 100% -3%;
	width: 970px;
	color: #666666;
	
}
.openpet {
	background-position: 100% 92%;
	color:#666666
}
.thepetA {
	width: 940px;
	color:#666666;
	padding:5px 15px 10px 5px;
}
ul.bullet
{ 
	margin-left:0em; 
	padding-left:0.2em;
	padding-top:0em;
	margin-bottom:0.5em;
}
ul.bullet li
{ 
	background: url(images/bullet.gif) 0em 0.4em no-repeat; /* change background em accordingly */
	padding-left:1.0em; 
	list-style: none; 
	line-height: 3px;
}
</style>
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
  <div class="top_ou">
    <div class="top_in">
      <div class="top">
        <div class="b_crumb"><a href="index.php">Home></a> How it works</div>
        <h1><span class="f_red"> How it works</span></h1>
        <div class="m_t" style="text-align:center; font-size: 23px;">What you get when you join</div>
        <div class="m_t" style="text-align:center">Alivemeter offers you smart and responsive tools to bring your health information on one platform. <br>
        You can join us as a registered user or as premium user.</div>
        <div class="m_t f_red" style="text-align:center; font-size: 21px;">Before you start – You will need to sign up with us.</div>
        <div class="cal_12">
          <div class="DvFloat" style="padding-top: 40px; padding-bottom: 10px; border-bottom: solid 1px #b2b2b2;">
            <div style="width: 44%; float: left; padding: 0px 25px; border: solid 0px #009900;">
              <div class="DvFloat">
                <div class="DvFloat f_red" style="text-transform: uppercase; font-size: 19px;">Organize</div>
                <div class="DvFloat">
                  <div style="width: 125px; float: left; padding: 5px 5px 0px 0px; border: solid 0px #006600;"><img src="images/how_it_works/01.png" alt="Organize" title="Organize" border="0"></div>
                  <div style="width: 300px; float: left; padding: 5px 5px 0px 0px; border: solid 0px #006600;">
                    <p class="f_black">Start by creating a user account for each family member and enter relevant <!--financial and--> medical information. This will set you digging out useful yet neglected information and collating it in a systematic manner.</p>
                    <p>
                    	<?php if(isset($_SESSION['UserID'])) { ?>
                        	<a><img src="images/how_it_works/signup_now_forfree.png" alt="" title="" border="0"></a>
                           <?php } else { ?>
                        <a href="<?php echo $strHostName;?>/page.php?dir=registration/step1"><img src="images/how_it_works/signup_now_forfree.png" alt="" title="" border="0"></a>
                        <?php } ?>
                        
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div style="width: 48%; float: left; border-left: solid 1px #b2b2b2; padding-left: 25px;">
              <div class="DvFloat">
                <div class="DvFloat f_red" style="text-transform: uppercase; font-size: 19px;">Budget in a Budget</div>
                <div class="DvFloat">
                  <div style="width: 125px; float: left; padding: 5px 5px 0px 0px; border: solid 0px #006600;"><img src="images/how_it_works/02.png" alt="Budget in a Budget" title="Budget in a Budget" border="0"></div>
                  <div style="width: 300px; float: left; padding: 5px 5px 0px 0px; border: solid 0px #006600;">
                    <p class="f_black">This is where we create a tailor-made plan for achieving your goal. We consider everything - <!--credit cards, loans, mortgages, assets, incomes and gains to--> hereditary illnesses, latest reports, BMI, lifestyle, and so on.</p>
                    <p>
                    	<?php if(isset($_SESSION['UserID'])) { ?><a><img src="images/how_it_works/signup_now_forfree.png" alt="" title="" border="0"></a>
                        <?php } else { ?>
                        <a href="<?php echo $strHostName;?>/page.php?dir=registration/step1"><img src="images/how_it_works/signup_now_forfree.png" alt="" title="" border="0"></a>
                        <?php } ?>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="DvFloat" style="padding-top: 11px; padding-bottom: 10px; border-bottom: solid 0px #b2b2b2;">
            <div style="width: 44%; float: left; padding: 0px 25px; border: solid 0px #009900;">
              <div class="DvFloat">
                <div class="DvFloat f_red" style="text-transform: uppercase; font-size: 19px; padding-top: 8px;">Plan Plan Plan</div>
                <div class="DvFloat">
                  <div style="width: 125px; float: left; padding: 5px 5px 0px 0px; border: solid 0px #006600;"><img src="images/how_it_works/03.png" alt="Plan Plan Plan" title="Plan Plan Plan" border="0"></div>
                  <div style="width: 300px; float: left; padding: 5px 5px 0px 0px; border: solid 0px #006600;">
                    <p class="f_black">We start by understanding your status and your objectives. <!--Better Savings? Smarter Investments? Lower BMI?-->Lower BMI? Good Health? Dedicated Nutritionist? 
 We have the right tools, experts, systems and processes to help you plan and prioritize for achieving your goals.</p>
                    <p>
                    	<?php if(isset($_SESSION['UserID'])) { ?><a><img src="images/how_it_works/signup_now_forfree.png" alt="" title="" border="0"></a>
                        <?php } else { ?>
                        <a href="<?php echo $strHostName;?>/page.php?dir=registration/step1"><img src="images/how_it_works/signup_now_forfree.png" alt="" title="" border="0"></a>
                        <?php } ?>
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div style="width: 48%; float: left; border-left: solid 1px #b2b2b2; padding-left: 25px;">
              <div class="DvFloat">
                <div class="DvFloat f_red" style="text-transform: uppercase; font-size: 19px; padding-top: 8px;">Actions</div>
                <div class="DvFloat">
                  <div style="width: 125px; float: left; padding: 5px 5px 0px 0px; border: solid 0px #006600;"><img src="images/how_it_works/04.png" alt="Actions" title="Actions" border="0"></div>
                  <div style="width: 300px; float: left; padding: 5px 5px 0px 0px; border: solid 0px #006600;">
                    <p class="f_black"><!--Financial and--> Physical health is a matter of choice and adaptation. We provide you the right tools, attitudes and support for making long lasting changes. You'll be surprised how easily it becomes a part of your routine.</p>
                    <p style="padding-top: 10px;">
						<?php if(isset($_SESSION['UserID'])) { ?><a><img src="images/how_it_works/signup_now_forfree.png" alt="" title="" border="0"></a>
                        <?php } else { ?>
                        <a href="<?php echo $strHostName;?>/page.php?dir=registration/step1"><img src="images/how_it_works/signup_now_forfree.png" alt="" title="" border="0"></a>
                        <?php } ?>
                    </p>
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
  <div style="float:left; border:solid 0px red; width:100%; height:602px; background-color:#f0f0f0">
    <div class="cal_full_size gray_bg m_b">
      <div class="cal_12 m_outo">
        <h2 class="f_red tx_cent hed"> Client journey at Alivemeter </h2>
        <div class="DvFloat">
          <div class="DvFloat tx_cent"  style="padding-bottom:10px;"><span style=" font-size:20px;font-family: 'FuturaMdBTMedium';">Phase I: Start Here</span></div>
          <div class="DvFloat tx_cent">
            <p>Let’s begin by knowing you and take advantage of the platform to bring all your health <!--and financial--> information, of both the present and the past. This gives you the freedom to access all the data with just a click of a button. It will also help our experts get a comprehensive overview of your present health <!--and finance--> situation.</p>
          </div>
          <div class="DvFloat tx_cent m_t">
            <div class="DvFloat">
              <div class="how_it_works_phase1_dotline">
                <div class="DvFloat">
                  <div class="gr_btn_bg"><img src="images/how_it_works/introduce_yourself.png" alt="" title="" border="0"></div>
                  <div class="gr_btn_bg"><img src="images/how_it_works/align_your_family.png" alt="" title="" border="0"></div>
                  <div style="width: 270px; float: left; margin-left: -120px; margin-top: 22px;"><img src="images/how_it_works/gather_information.png" alt="" title="" border="0"></div>
                </div>
                <div class="DvFloat">
                  <div class="hwhow_it_works_phase1_dotline">
                    
                    <div style="width: 100%; float: left; border: solid 0px #993399;">
                      <div class="health_rightdv1">
                        <div class="DvFloat" style="text-align: left; margin-top: -10px; margin-left: -12px;"><span class="f_green" style="text-transform: uppercase; font-size: 17px;">&nbsp;</span></div>
                        <div class="green f_white hit_green_health">Upload your current and past medical records</div>
                        <div class="green f_white hit_green_health1">Doctor consultation and medication</div>
                        <div class="green f_white hit_green_health1">Health problem</div>
                        <div class="green f_white hit_green_health1">Family history</div>
                        <div class="green f_white hit_green_health1">Daily tracking, blood pressure, blood sugar and more</div>
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
  <div style="float:left; border:solid 0px red; width:100%; height:530px; background-color:#fff">
    <div class="cal_full_size m_b">
      <div class="cal_12 m_outo">
        <div class="DvFloat" style="padding-top:60px;">
          <div class="DvFloat tx_cent" style="padding-bottom:10px;"><span style=" font-size: 20px;font-family: 'FuturaMdBTMedium';">Phase II: Make The Most</span></div>
          <div class="DvFloat tx_cent">
            <p>Our intuitive dashboard will help you track the subtle <!--expenses and -->habits that if altered for the better can bring a significant change to your life. Starting from the food you eat,<!-- to your daily expenses,--> our system will not only help you track it all, it will also assist you to reach your health <!--and finance -->goals. They say prevention is better than cure, and our tracking and alert tools will surely let you stay on top of things.</p>
          </div>
          <div class="DvFloat tx_cent m_t">
            <div class="DvFloat">
              <div class="how_it_works_phase2_dotline">
                <div class="DvFloat">
                  <div class="gr_btn_bg"><img src="images/how_it_works/update.png" alt="" title="" border="0"></div>
                  <div class="gr_btn_bg"><img src="images/how_it_works/track.png" alt="" title="" border="0"></div>
                  <div style="width: 270px; float: left; margin-left: -120px; margin-top: 22px;"><img src="images/how_it_works/monitor.png" alt="" title="" border="0"></div>
                </div>
                <div class="DvFloat">
                  <div class="hwhow_it_works_phase2_dotline">
                    <div class="DvFloat">
                      <div style="width: 100%; float: left; border: solid 0px #993399;">
                        <div class="health_rightdv">
                          <div class="DvFloat" style="text-align: left; margin-top: -20px; margin-left: 5px;"><span class="f_green" style="text-transform: uppercase; font-size: 17px;">&nbsp;</span></div>
                          <div class="green f_white hit_green_health" style="margin-left: -175px;">Keep track of your daily calorie consumption and calorie burn-out</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="DvFloat">
                  <div style="width:255px; text-align:center; height:30px; float:left; margin-left: -115px; margin-top: 20px;">
                  
                  	<?php if(isset($_SESSION['UserID'])) { ?><a class="buttoncupon" style="text-align:center">SIGN UP NOW FOR FREE<span style="right: 20px;"></span> </a>
                    
                  <?php } else { ?><a href="<?php echo $strHostName;?>/page.php?dir=registration/step1" class="buttoncupon" style="text-align:center">SIGN UP NOW FOR FREE<span style="right: 20px;"></span> </a>
                  <?php } ?>
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
  <div class="cal_full_size gray_bg m_b">
    <div class="cal_12 m_outo" style="padding-bottom: 50px;">
      <div class="DvFloat" style="padding-top:60px;">
        <div class="DvFloat tx_cent" style="padding-bottom:10px;"><span style="font-size: 20px;font-family: 'FuturaMdBTMedium';">Phase III: Making Progress</span></div>
        <div class="DvFloat tx_cent">
          <p>Alivemeter provides you an opportunity to get in touch with some of the best <!--financial planners and--> medical practitioners and dietician of the country. Based on your unique situation and requirements, they collaborate with you to make sure that you get the right support to accomplish your goals. </p>
        </div>
        <div class="DvFloat tx_cent m_t">
          <div class="DvFloat">
            <div class="how_it_works_phase3_dotline" style="margin-left: 481px">
              <div class="DvFloat">
                <div class="gr_btn_bg" style="margin-left: -130px;"><img src="images/how_it_works/setgoals.png" alt="" title="" border="0"></div>
                <div class="gr_btn_bg" style="margin-left: -130px;"><img src="images/how_it_works/unlimited_support.png" alt="" title="" border="0"></div>
                <div style="width: 270px; float: left; margin-left: -130px; margin-top: 22px;"><img src="images/how_it_works/accomplish.png" alt="" title="" border="0"></div>
              </div>
              <div class="DvFloat">
                <div class="hwhow_it_works_phase3_dotline">
                  
                  <div style="width: 100%; float: left; border: solid 0px #993399;">
                    <div class="health_rightdv">
                      <div class="DvFloat" style="text-align: left; margin-top: -19px; margin-left: -20px;"><span class="f_green" style="text-transform: uppercase; font-size: 17px;">&nbsp;</span></div>
                      <div class="green f_white hit_green_health" style="margin-left: -190px;">Have your nutritionist help you achieve set goal</div>
                      <div class="green f_white hit_green_health1" style="margin-left: -190px;">Stop neglecting health signals get your health queries answered</div>
                      <div class="green f_white hit_green_health1" style="margin-left: -190px;">Reach specialist doctors at no extra cost via email and video session</div>
                    </div>
                  </div>
                  <div class="DvFloat">
                    <div style="width: 315px; height: 30px; float:left; margin: 50px 0px 35px 140px;"><a href="health.php#step_2"><img src="images/alivremeter_plus_small.png" alt="" title="" border="0"></a></div>
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
  <div class="cal_full_size m_t">
    <div class="cal_12 m_outo" style="padding-bottom: 25px;">
      <h2 class="f_red tx_cent m_b"><a name="hwfaq" style="color: #009999;">Frequently Asked Questions</a></h2>
      <div class="DvFloat">
        <div class="DvFloat">
          <ul id="countrytabs1-1" class="hw-works">
            <li><a href="#" rel="country1">What does Alivemeter do?</a></li>
            <li><a href="#" rel="country2">Why Alivemeter?</a></li>
            <li><a href="#" rel="country3">Payments and Subscriptions</a></li>
          </ul>
          <div style="border: 0px solid gray; width: 957px; float: left; margin: 20px 0px 0px 5px; padding: 10px 10px 10px 0px; color: #666666;">
            <div id="country1" class="hw-workstabcontent1">
              <div class="DvFloat">
                <div style="width: 100%; float: left; padding: 0px 0px 0px 0px; border: solid 0px #339933;">
                  <div class="DvFloat" style="border-bottom:solid 1px #cdcdcd">
                    <h3 class="mypetsA" style="font-family: myriad_web_proregular; font-size: 14px; font-weight: bold;">What is Alivemeter?</h3>
                    <div class="thepetA">We help you take control of <!--financial goals and--> your physical wellbeing. We do this by giving you all the necessary tools, tips and targets to get organized and to inculcate a few healthy habits that will make monitoring easy.</div>
                  </div>
                  <div class="DvFloat" style="border-bottom:solid 1px #cdcdcd">
                    <h3 class="mypetsA" style="font-family: myriad_web_proregular; font-size: 14px; font-weight: bold;">How exactly will you do that?</h3>
                    <div class="thepetA">We provide you a lot of compelling reasons to stay updated. We present to you a set of intuitive and easy-to-use health tracking apps that will help you note and monitor progress every day. Our online trackers update you about your performance vis-à-vis your goals. <br>
                      <br>
                      We help you plan better by providing you access to highly qualified doctors <!--and Financial Planners--> who will guide and handhold you to make the right choices and informed decisions. </div>
                  </div>
                  <div class="DvFloat" style="border-bottom:solid 1px #cdcdcd">
                    <h3 class="mypetsA" style="font-family: myriad_web_proregular; font-size: 14px; font-weight: bold;"> Why is this solution provided only through this online forum?</a> </h3>
                    <div class="thepetA"><strong>Four top reasons…</strong><br>
                    <strong>a.</strong>	It helps us provide services to anyone who has access to Internet!<br>
                    <strong>b.</strong>	No expenses towards brick-and-mortar set-ups. The cost efficiencies are shared with our customers.<br>
                    <strong>c.</strong>	The best <!--planners,--> doctor and nutritionist <!--and Financial Planners--> across the country can assist you.<br>
                    <strong>d.</strong>	Convenience of maintaining your family’s health <!--and wealth--> records in a single place that is accessible from anywhere! <br>
                  </div>
                  </div>
                  <div class="DvFloat" style="border-bottom:solid 1px #cdcdcd">
                    <h3 class="mypetsA" style="font-family: myriad_web_proregular; font-size: 14px; font-weight: bold;"> You are asking a lot of personal details. How can I be sure that this information is safe with you?</a> </h3>
                    <div class="thepetA">We have a no nonsense policy when it comes to securing your information. Only you, your family and our experts can access your data. AliveMeter data is guarded 24/7. We know you care about top-notch data protection, and so do we. We use top industry standards and our servers are located in highly protective zone with constant video surveillance. Please refer to our <a href="privacy_policy.php" >privacy policy</a> for more details.</div>
                  </div>
                  <div class="DvFloat" style="border-bottom:solid 1px #cdcdcd">
                    <h3 class="mypetsA" style="font-family: myriad_web_proregular; font-size: 14px; font-weight: bold;"> I’m not too comfortable furnishing my family’s medical history. Why do you really need that?</a> </h3>
                    <div class="thepetA">Your medical history, hereditary disorders, lifestyle and environment plays a vital role in your present health condition. Your family’s medical history is like a comprehensive guide for us. <br><br>
Think of it this way, suppose a family has had the same GP for years. He or she knows that there have been cases of cancer in the family. What would they suggest? That you get regular screening and tests done of you and your kids right from the start. If they know that there is a family history of diabetes, they might suggest better, more active lifestyle for you and the generations that come.<br><br>
We want to be able to track just that. It is only by looking at the comprehensive medical history that our specialists can dispense the right advice. We want to ensure that whenever you post a query, our doctors give you useful and comprehensive advice.
</div>
                  </div>
                  <!--<div class="DvFloat" style="border-bottom:solid 1px #cdcdcd">
                    <h3 class="mypetsA" style="font-family: myriad_web_proregular; font-size: 14px; font-weight: bold;"> We are an insurance company that wants to be associated with you. How do we do that?</a> </h3>
                    <div class="thepetA">We look forward to giving your customers comprehensive finance planning along with our health related tools. Please <a href="#">get in touch with us.</a></div>
                  </div>-->
                  <div class="DvFloat" style="border-bottom:solid 1px #cdcdcd">
                    <h3 class="mypetsA" style="font-family: myriad_web_proregular; font-size: 14px; font-weight: bold;">What are your working hours? How soon can I expect a revert?</a> </h3>
                    <div class="thepetA">In order to keep our prices low, we do not engage the experts for fixed hours every day. They are available on case-to-case basis. However, we strive to address your queries within 2 to 3 Hours.</div>
                  </div>
                  <div class="DvFloat" style="border-bottom:solid 1px #cdcdcd">
                    <h3 class="mypetsA" style="font-family: myriad_web_proregular; font-size: 14px; font-weight: bold;"> If I have to make a personal visit, where are the doctors located? Do you have presence in other cities? When are you planning to expand to other cities?</a> </h3>
                    <div class="thepetA">In order to stay competitive, we offer online consulting and whenever you feel the need to meet our experts in person you can get in touch with them at their respective hospitals they are associated by taking prior appointments. Currently we are not assisting with appoint scheduling at our end <!--you have to contact the hospital desk.--></div>
                  </div>
                  <div class="DvFloat" style="border-bottom:solid 1px #cdcdcd">
                    <h3 class="mypetsA" style="font-family: myriad_web_proregular; font-size: 14px; font-weight: bold;"> I provide you with the details of my symptom/ illness, can you prescribe medicines over phone?</a> </h3>
                    <div class="thepetA">Our expert doctors will provide you with the right solution as per your medical condition and circumstances which will take care of your problem.</div>
                  </div>
                  <div class="DvFloat" style="border-bottom:solid 1px #cdcdcd">
                    <h3 class="mypetsA" style="font-family: myriad_web_proregular; font-size: 14px; font-weight: bold;"> Will other doctors/ hospitals accept your medical record and history?</a> </h3>
                    <div class="thepetA">Yes, we do not see any reason for other establishments not accepting your medical records. If the reports and mechanism of tests conducted is as per your doctor specification our platform only allows to view it at one consolidated destination.  </div>
                  </div>
                  <div class="DvFloat" style="border-bottom:solid 1px #cdcdcd">
                    <h3 class="mypetsA" style="font-family: myriad_web_proregular; font-size: 14px; font-weight: bold;"> If I do not have Internet connectivity can I ask queries over phone?</a> </h3>
                    <div class="thepetA">Since this is an online service, you need to have an Internet enabled device to access our portal. In fact, to experience the true power of Alivemeter, we recommend that you go online!</div>
                  </div>
                  <div class="DvFloat" style="border-bottom:solid 1px #cdcdcd">
                    <h3 class="mypetsA" style="font-family: myriad_web_proregular; font-size: 14px; font-weight: bold;"> What is the emergency preparedness that Alivemeter provides?</a> </h3>
                    <div class="thepetA">Alivemeter is an online tracking and advice-dispensing platform and should not be considered as a substitute for emergency medical assistance. Our clients are advised to have adequate arrangements for emergency situations.</div>
                  </div>
                  <div class="DvFloat" style="border-bottom:solid 1px #cdcdcd">
                    <h3 class="mypetsA" style="font-family: myriad_web_proregular; font-size: 14px; font-weight: bold;"> Do you divulge my records to others, like my employers, clinical research institutes, pharmaceutical companies, financial brokers, insurance companies, etc?</a> </h3>
                    <div class="thepetA">We use the collected data to perform research and analysis about your interests. <!--We might aggregate anonymous personal financial data you share with us.--> This information (except sensitive information) <!--about individual users) could be shared with 3rd parties or advertisers who -->could communicate with you about products or services that might interest you. </div>
                  </div>
                  <div class="DvFloat" style="border-bottom:solid 1px #cdcdcd">
                    <h3 class="mypetsA" style="font-family: myriad_web_proregular; font-size: 14px; font-weight: bold;"> If I am <!--under serious debt or--> in a critical medical condition, will my file be discussed with my family or any relative or friend?</a></h3>
                    <div class="thepetA">Alivemeter is your online friend, mentor and guide. We will help you choose the right path for achieving your <!--financial and--> health goals. While we might offer timely advice and corrective measures, however will not alert anyone else.</div>
                  </div>
                  <div class="DvFloat" style="border-bottom:solid 1px #cdcdcd">
                    <h3 class="mypetsA" style="font-family: myriad_web_proregular; font-size: 14px; font-weight: bold;"> For an embarrassing medical issue can I be assured of confidentiality of information?</a> </h3>
                    <div class="thepetA">Every individuals account has a unique User ID and password linked to an email ID. The primary user as well as aligned member can change their password. Sharing of password and user ID will compromise user privacy and security which will completely depend on the user. However our team will assist you in such circumstances. Even your own family members will not be able to access any information about your health.</div>
                  </div>
                  <div class="DvFloat" style="border-bottom:solid 1px #cdcdcd">
                    <h3 class="mypetsA" style="font-family: myriad_web_proregular; font-size: 14px; font-weight: bold;"> Any other questions? Didn’t find the answers to your questions?</a> </h3>
                    <div class="thepetA">Please feel free to reach out to us by writing to us at <a href="mailto:support@alivemeter.com">support@alivemeter.com</a>. <!--or give us at call at (+91) 123-45678--></div>
                  </div>
                </div>
              </div>
            </div>
            <div id="country2" class="hw-workstabcontent1">
              <div class="DvFloat">
                <div style="width: 100%; float: left; padding: 0px 0px 0px 0px; border: solid 0px #339933;">
                  <div class="DvFloat" style="border-bottom:solid 1px #cdcdcd">
                    <h3 class="mypetsA" style="font-family: myriad_web_proregular; font-size: 14px; font-weight: bold;">I've heard a lot about this concept of e-health, but not too convinced it can work for me. How will it benefit me?</h3>
                    <div class="thepetA">We offer you the perfect blend of convenience and advice. Our services can benefit you in the following ways:
<ul class="bullet"><li>	Get access to specialists </li>
<li>	Access a comprehensive online symptom checker</li>
<li>	Share medical records, photos, progress reports, etc. with our doctors, who can guide you towards an appropriate course of action</li>
<li>	Cut down medical bills through attractive discounts on check-ups and diagnosis</li></ul>
</div>
                  </div>
                  <div class="DvFloat" style="border-bottom:solid 1px #cdcdcd">
                    <h3 class="mypetsA" style="font-family: myriad_web_proregular; font-size: 14px; font-weight: bold;">Your reward point system seems interesting. But how do I earn them and how do I reimburse? </h3>
                    <div class="thepetA">
                    Follow these easy steps of collecting and reimbursing your reward points.
                    <ul class="bullet">	<li>Register yourself as a premium member</li>
                    <li>Earn points by doing any and all of the following:<br><br>
                    	<p style="padding-top: 13px; padding-left: 10px;">Fill up your personal data</p>
                        <p style="padding-top: 13px; padding-left: 10px;">Update and tracking information daily</p>
                        <p style="padding-top: 13px; padding-left: 10px;">Read through our Knowledge Bank</p>
                        <p style="padding-top: 13px; padding-left: 10px;">Share the content that you find interesting</p>
                        <p style="padding-top: 13px; padding-left: 10px;">Share your own viewpoint and experience</p>
                    </li>
                    <li>	Go through our FAQs in the Reward Points tab to get an idea of the number of points you get for doing any of the above</li>
                    <li>	Track your reward points on your own profile page</li>
                    <li><p style="line-height: 15px; margin: -8px 0px -10px 0px; padding: 0px;">Check our Store and browse through the amazing offers. However you can earn reward points as a registered member, to redeem those points one has to subscribe to alivemeterplus membership.</p></li>
                    <li>	Redeem and Enjoy!</li></ul>

                    </div>
                  </div>
                  <!--<div class="DvFloat" style="border-bottom:solid 1px #cdcdcd">
                    <h3 class="mypetsA" style="font-family: myriad_web_proregular; font-size: 14px; font-weight: bold;">I already have a finance planner who takes care of my investments, why should I come to you?</a> </h3>
                    <div class="thepetA">Planning finances, either alone, or with an expert planner brings better control and a goal-oriented approach. It is great if you have already taken a step towards the right direction if you have a finance planner.<br><br>
However, here are a few questions that you may need to ask yourself:<br><ul class="bullet">

<li>	Is your Financial Planner really interested in assisting you to meet your financial goals or just looking to push products based on his/ her commission?</li>
<li>	How qualified is your FINANCIAL PLANNER?</li>
<li>	How easy is it to get in touch with them? Have you ever had a feeling that they are ditching you for clients that are more affluent?</li>
<li>	Does your FINANCIAL PLANNER indulge in finance jargons? Leaving you too embarrassed to ask questions?</li>

</ul>
Most importantly, a FINANCIAL PLANNER alone cannot give you advice for your health related needs. We believe that health and wealth go together. Therefore, while your personal FINANCIAL PLANNER might be able to give the most cost-efficient health insurance product, they may not be able to identify the one that covers the right illnesses.
</div>
                  </div>-->
                  <div class="DvFloat" style="border-bottom:solid 1px #cdcdcd">
                    <h3 class="mypetsA" style="font-family: myriad_web_proregular; font-size: 14px; font-weight: bold;">Do I get to work with the same Expert every time?</a> </h3>
                    <div class="thepetA">Yes of course.  <!--In case of a financial expert you get your dedicated financial planner and for health--> Our system automatically routes your query to the same expert every time. These experts know you well and work with you to address your health queries. However, in the interest of saving your time, we might assign your query to another expert, as we know your time is critical.</div>
                  </div>
                  <div class="DvFloat" style="border-bottom:solid 1px #cdcdcd">
                    <h3 class="mypetsA" style="font-family: myriad_web_proregular; font-size: 14px; font-weight: bold;">We have a General Physician nearby. Why should I come to you?</a> </h3>
                    <div class="thepetA">It is always advantageous when you have a physician near you. Unfortunately, clinic timings, unlike chemist shops, are restricted and may not always fit your busy schedule. Also, sometimes you might only have a minor query and not a real disease that would warrant a visit to a physician. This is where our online experts can help you. Also when it comes to health a second opinion always plays a big role. Whether it is common cold or anything serious, we bring experts from every field of medicine to your doorstep.
</div>
                  </div>
                  <div class="DvFloat" style="border-bottom:solid 1px #cdcdcd">
                    <h3 class="mypetsA" style="font-family: myriad_web_proregular; font-size: 14px; font-weight: bold;">How can I upload my medical reports like X-rays, ECG etc and financial reports? Will there be any assistance from Alivemeter?</a> </h3>
                    <div class="thepetA">Yes. Our systems are adept at accepting and storing report in JPEG and PDF formats. You would need to convert your health records in the following (JPEG/ PDF) format and upload the same in your electronic health record (EHR).  <!--Also our  members can download our mobile apps and take a quick picture of the reports and on a single click the reports gets upload to the system. -->In general a simple scan and upload mechanism to upload all your documents is available on our web platform.</a></div>
                  </div>
                  <div class="DvFloat" style="border-bottom:solid 1px #cdcdcd">
                    <h3 class="mypetsA" style="font-family: myriad_web_proregular; font-size: 14px; font-weight: bold;">Will I have to consult you every time I go to a different doctor and also report back to you?</a> </h3>
                    <div class="thepetA">You do not have to consult us for your regular visits. However, we urge you to update your records regularly so that our experts are also up-to-date with your condition and can help you well.</div>
                  </div>
                  <div class="DvFloat" style="border-bottom:solid 1px #cdcdcd">
                    <h3 class="mypetsA" style="font-family: myriad_web_proregular; font-size: 14px; font-weight: bold;">How can I be assured that my case is kept secret and my financial and medical records are not accessed by any unauthorized person or company?</a> </h3>
                    <div class="thepetA">Alivemeter uses advanced SSL technology and 256-bit data encryption. In addition, your data is stored at a secured location with 24x7 surveillance with biometric authentication. Please refer to our <a href="privacy_policy.php">privacy policy</a> for more details.</div>
                  </div>
                  <div class="DvFloat" style="border-bottom:solid 1px #cdcdcd">
                    <h3 class="mypetsA" style="font-family: myriad_web_proregular; font-size: 14px; font-weight: bold;"> Does Alivemeter have any tie-up with hospitals, laboratories, clinics, etc?</a> </h3>
                    <div class="thepetA"><!--Yes. Alivemeter has comprehensive tie-ups with leading hospitals, laboratories and clinics. Please refer to <a href="quality-experts.php">expert section.</a>-->
                    As we start, we look to  spread our reach targeting specific areas. Very soon we will add  numbers to our tie-ups to build and grow our network. Please refer to <a href="quality-experts.php">expert section.</a>
                    </div>
                  </div>
                  <div class="DvFloat" style="border-bottom:solid 1px #cdcdcd">
                    <h3 class="mypetsA" style="font-family: myriad_web_proregular; font-size: 14px; font-weight: bold;">Do Alivemeter members have any special privileges like discounts, priority appointments, etc. in any medical establishments or with specialist doctors?</a> </h3>
                    <div class="thepetA">Yes. Being an alivemeter member entitles you to several attractive discounts and preferential treatments. As alivemeter plus member you will be aligned to a specific hospital, special offers  and discounts from that hospital will be sent to your inbox on a periodic basis.  <!--across leading hospitals, laboratories and clinics. Please refer to this list of available benefits.--></div>
                  </div>
                  
                  
                </div>
              </div>
            </div>
            <div id="country3" class="hw-workstabcontent1">
             <div class="DvFloat" style="padding-bottom: 20px;">
             	<div class="DvFloat"><?php if(isset($_SESSION['UserID'])) { ?><a><img src="images/header/banner09.png" alt="Hurry! Sign up now and enjoy premium membership benefits up to 31st January 2015" title="Hurry! Sign up now and enjoy premium membership benefits up to 31st January 2015" border="0" usemap="#Map" title="">
<map name="Map"><area shape="rect" coords="601,226,743,264" href="#"></map>
<?php } else { ?>
                        <img src="images/header/banner09.png" alt="" usemap="#Map" title="" border="0"><?php } ?><map name="Map"><area shape="rect" coords="601,226,743,264" href="<?php echo $strHostName;?>/page.php?dir=registration/step1"></map></div>
               <!--<span style="font-size: 20px;font-family: 'FuturaMdBTMedium';">Enjoy all benefits of plus membership until September 30, 2014</span>-->
                <!--<div style="width: 100%; float: left; padding: 0px 0px 0px 0px; border: solid 0px #339933;">
                  <div class="DvFloat" style="border-bottom:solid 1px #cdcdcd">
                    <h3 class="mypetsA" style="font-family: myriad_web_proregular; font-size: 14px; font-weight: bold;">What if I don't like it?</h3>
                    <div class="thepetA">If you are going by your experience in the first few months, you are most likely looking at half the picture because this is actually the building phase. You will learn about the real potential of the platform once you get onboard and start planning and tracking for your goals. <br><br>
However, if you been there and done that and are still not happy, let us know by writing to us at support@alivemeter.com or give us at call at (+91) 123-45678.
</div>
                  </div>
                  <div class="DvFloat" style="border-bottom:solid 1px #cdcdcd">
                    <h3 class="mypetsA" style="font-family: myriad_web_proregular; font-size: 14px; font-weight: bold;">If I buy a package in my name will my immediate relatives or distant relatives get any discount? </h3>
                    <div class="thepetA">Every family package offers you the facility to add a maximum of 6 members. Any additional members will have to invest in a separate membership.</div>
                  </div>
                  <div class="DvFloat" style="border-bottom:solid 1px #cdcdcd">
                    <h3 class="mypetsA" style="font-family: myriad_web_proregular; font-size: 14px; font-weight: bold;">If I want to discontinue will I have access to my medical records, health dashboard, wealth dashboard and financial performances?</h3>
                    <div class="thepetA">No. Once you discontinue your membership, all your records will be deleted.</div>
                  </div>
                  <div class="DvFloat" style="border-bottom:solid 1px #cdcdcd">
                    <h3 class="mypetsA" style="font-family: myriad_web_proregular; font-size: 14px; font-weight: bold;">Can I chat or talk over phone with an Alivemeter doctor, like I do on some other websites?</h3>
                    <div class="thepetA">In order to keep our prices low, we do not engage the experts for specific hours every day. We strive to address your online queries within least possible time.</div>
                  </div>
                  <div class="DvFloat" style="border-bottom:solid 1px #cdcdcd">
                    <h3 class="mypetsA" style="font-family: myriad_web_proregular; font-size: 14px; font-weight: bold;">There are many services available which offer automated updation of financial transactions and assistance in medical record updation, isn’t this too<br> much of an activity expected from the members?</a> </h3>
                    <div class="thepetA">The first few months is the building phase. Once you are organized, it will take only a minute a day to update your health details and financial transactions. The more you engage, the more you will be inclined to act. However, in the near future, we do plan to offer the automatic updation facility.
</div>
                  
                </div>
              </div>-->
            </div>
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
<script type="text/javascript" src="js/custom1.js"></script>
<script type="text/javascript">

var countries=new ddtabcontent("countrytabs1-1")
countries.setpersist(true)
countries.setselectedClassTarget("link") //"link" or "linkparent"
countries.init()

</script>

<script type="text/javascript" src="js/jquery.form-2.4.0.min.js"></script>
<script type="text/javascript" src="js/jqeasy.dropdown.min.js"></script>
</body>
</html>
