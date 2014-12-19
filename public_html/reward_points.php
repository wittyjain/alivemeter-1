<?php include 'includes/common.inc.php'?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Alivemeter | Online Health Community | Reward Points</title>
<meta name="description" content="Subscribe, consult doctors online, update your health tracker and share with friends to earn reward points.">
<meta name="keywords" content="track health online, online health community, reward points, consult doctors, consult health experts, health advice, health history online">


<?php include 'includes/links.php'?>
<link href="style/main.css" rel="stylesheet" type="text/css">
<link href="style/jupiter.css" rel="stylesheet" type="text/css">
<link href="style/reset.css" rel="stylesheet" type="text/css">
<link href="style/fonts.css" rel="stylesheet" type="text/css">
<link href="style/bxslider.css" rel="stylesheet" type="text/css">
<link href="style/paging_style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" language="javascript" src="js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" language="javascript" src="js/scrolltopcontrol.js"></script>
<script type="text/javascript" src="js/ddaccordion.js"></script>
<link href="style/bhupali.css" rel="stylesheet" type="text/css">
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
	width: 970px;color: #666666;
}
.openpet { 
background-position: 100% 92%;color:#666

}
.thepetA {
	width: 970px;
color:#666666;padding:5px;	
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
        <div class="b_crumb"><a href="index.php">Home></a> <a href="#">Reward Points</a></div>
        <h1 class="f_red"> REWARD POINTS</h1>
      </div>
    </div>
  </div>
</section>
<section>
  <div class="cal_12 m_outo">
    <div class="cal_12">
      <div class="RP_box_out">
        <div class="dvFloat" style="padding:30px 0px 0px 0px">
        <?php
				$query="select * from " .Reward_Points. " where reward_points_id <> 0 limit 6";
					// echo ($query);
						 $result=mysql_query($query);
							//Alert($result);
								if($result !=""){
								  $rowcount=mysql_num_rows($result);
									if($rowcount>0){
									  while($rows=mysql_fetch_assoc($result)){
										 extract($rows);
											$coupons_code=$rows['coupons_code'];
											$total_coupons=$rows['total_coupons'];
											$image=$rows['image'];
											$description=$rows['description'];
											$reedem_points=$rows['reedem_points'];
			?>
          <div class="RP_box" style="margin-bottom:60px;"><div class="scissor_icon"> </div>
            <div class="coupons">
              <div style="float:right; padding-right:8px;"><?php echo $total_coupons; ?></div>
            </div>
            <div class="dvFloat">
              <div class="RP_box_Left"><img src="<?php echo $strHostName;?>/top_stories/<?php echo $rows['image'];?>" width="110" height="111" ></div>
              <div class="RP_box_Right"><?php echo $description; ?></div>
            </div>
            <div class="dvFloat" style="display:none;">
              <div class="rate"><?php echo $reedem_points; ?><img src="images/arrow_right.png" align="bottom"> </div>
            </div>
            <div class="dvFloat">
            <div class="rate1"> <!--<a style="cursor:pointer;" class="ratelinnk" href="<?php echo $strHostName;?>/reward_points_details.php?cid=<?php echo $converter->encode($reward_points_id);?>"> REEDEM WITH 500 REWARD POINTS--> Coming Soon <img src="images/arrow_right.png" align="absmiddle" style="float: right; margin-top: 1px; margin-right: 15px;"> <!--</a>--></div>
            </div>
          </div>
          
          <?php }}} ?>
        </div>
        
      </div>
      <div class="dvFloat" style="padding:0px 0px 35px 0px; text-align:center; font-size:14px; color:#c02c3e; font-weight:bold"><a href="reward_points_deals.php" class="f_red">OUR STORE  +</a></div>
    </div>
  </div>
</section>
<section>
  <div class="cal_full_size gray_bg m_b">
    <div class="cal_12 m_outo">
      <div class="cal_12">
        <div class="dvFloat" style="padding:25px 0px 0px 0px;">
          <center>
            <h2 class="f_red" style="font-weight:normal"><a name="howitworks" class="f_red">How It Works</a></h2>

        </div>
        <div class="dvFloat" style="padding:25px 0px 35px 0px;">
          <div class="dvWork">
            <div class="dvWorkLeft">
              <div style="padding:10px 0px"><span style="font-size:28px;">100</span> <br>
                <span style="font-size:12px;">points</span></div>
            </div>
            <div class="dvWorkRight">On Subscription</div>
          </div>
          <div class="dvWork">
            <div class="dvWorkLeft">
              <div style="padding:10px 0px"><span style="font-size:28px;">100</span> <br>
                <span style="font-size:12px;">points</span></div>
            </div>
            <div class="dvWorkRight">Get friends to subscribe</div>
          </div>
          <div class="dvWork">
            <div class="dvWorkLeft">
              <div style="padding:10px 0px"><span style="font-size:28px;">1</span> <br>
                <span style="font-size:12px;">point</span></div>
            </div>
            <div class="dvWorkRight">Update your relevant daily tracking app parameters and earn daily points</div>
          </div>
          <div class="dvWork">
            <div class="dvWorkLeft">
              <div style="padding:10px 0px"><span style="font-size:28px;">25</span> <br>
                <span style="font-size:12px;">points</span></div>
            </div>
            <div class="dvWorkRight">Complete health setup details on registration</div>
          </div>
          <div class="dvWork">
            <div class="dvWorkLeft">
              <div style="padding:10px 0px"><span style="font-size:28px;">5</span> <br>
                <span style="font-size:12px;">points</span></div>
            </div>
            <div class="dvWorkRight">Comment on news articles</div>
          </div>
        </div>
        <div class="dvFloat" style="padding:0px 0px 35px 0px;">
          <div class="dvWork">
            <div class="dvWorkLeft">
              <div style="padding:10px 0px"><span style="font-size:28px;">10</span> <br>
                <span style="font-size:12px;">points</span></div>
            </div>
            <div class="dvWorkRight">Utilize deals/ offers</div>
          </div>
          <div class="dvWork">
            <div class="dvWorkLeft">
              <div style="padding:10px 0px"><span style="font-size:28px;">10</span> <br>
                <span style="font-size:12px;">points</span></div>
            </div>
            <div class="dvWorkRight">Write a blog</div>
          </div>
          <div class="dvWork">
            <div class="dvWorkLeft">
              <div style="padding:10px 0px"><span style="font-size:28px;">5</span> <br>
                <span style="font-size:12px;">points</span></div>
            </div>
            <div class="dvWorkRight">Ask new health query to expert doctors</div>
          </div>
          <div class="dvWork">
            <div class="dvWorkLeft">
              <div style="padding:10px 0px"><span style="font-size:28px;">5</span> <br>
                <span style="font-size:12px;">points</span></div>
            </div>
            <div class="dvWorkRight">Rate and review expert advice</div>
          </div>
          <div class="dvWork">
            <div class="dvWorkLeft">
              <div style="padding:10px 0px"><span style="font-size:28px;">25</span> <br>
                <span style="font-size:12px;">points</span></div>
            </div>
            <div class="dvWorkRight">Liked us; share your experience by writing to us.</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section>
  <div class="cal_12 m_outo">
    <div class="cal_12">
      <div class="dvFloat" style="padding:25px 0px 0px 0px;">
        <center>
          <h2 class="f_red" style="font-weight:normal"><a name="faq">Frequently Asked Questions</a></h2>
        </center>
      </div>
      <div style="float:left; text-align:left; padding:15px 10px 60px 10px; line-height:19px;">
        <div class="dvFloat">
        <div class="dvFloat" style="border-bottom:solid 1px #cdcdcd">
          <h3 class="mypetsA" style="font-family: myriad_web_proregular; font-size: 14px; font-weight: bold; font-size: 14px; font-weight: bold;">How does the Reward Point system works? </h3>
<div class="thepetA">Our reward point is our way to recognise your significant contribution to our online community. Please refer to the rules posted above to get an idea of how you can earn points.</div></div>

<div class="dvFloat" style="border-bottom:solid 1px #cdcdcd">
<h3 class="mypetsA" style="font-family: myriad_web_proregular; font-size: 14px; font-weight: bold;">Can I write an anonymous review? </h3>
<div class="thepetA">You have to be a registered user to write a review. Please make sure you log in to your account before writing a review and we’ll ensure that your privacy is respected.</div></div>
<div class="dvFloat" style="border-bottom:solid 1px #cdcdcd">
<h3 class="mypetsA" style="font-family: myriad_web_proregular; font-size: 14px; font-weight: bold;">When are my points posted to my account? </h3>
<div class="thepetA">Your points are posted as soon as our team verifies and crosschecks the actions made. Every review is published after a round of moderation, so you can expect a slight delay before it reflects on your account.</div></div>
<div class="dvFloat" style="border-bottom:solid 1px #cdcdcd">
<h3 class="mypetsA" style="font-family: myriad_web_proregular; font-size: 14px; font-weight: bold;">How can I write blogs? </h3>
<div class="thepetA">You can find the link to write a blog at the footnote of the website. Click on the link and post your blog. Our moderators will evaluate your post and if it matches our requirements, we’ll upload it to the website. Your points will be accrued to your account post its upload.</div></div>
<div class="dvFloat" style="border-bottom:solid 1px #cdcdcd">
<h3 class="mypetsA" style="font-family: myriad_web_proregular; font-size: 14px; font-weight: bold;">How can I comment or review doctors advice? </h3>
<div class="thepetA">You will get an email in your alivemeter inbox. On opening the email you will find send a reply text box at the bottom of the email. You can reply to the mail from your alivemeter inbox that will directly reach our admin.</div></div>
<div class="dvFloat" style="border-bottom:solid 1px #cdcdcd">
<h3 class="mypetsA" style="font-family: myriad_web_proregular; font-size: 14px; font-weight: bold;">Will my review to the doctor advice be addressed? </h3>
<div class="thepetA">Yes, your review / comment will be sent to the doctor and they will surely make a note and possibly reply to your feedback.</div></div>

<div class="dvFloat" style="border-bottom:solid 1px #cdcdcd">
<h3 class="mypetsA" style="font-family: myriad_web_proregular; font-size: 14px; font-weight: bold;">Want to know about the daily update?</h3>
<div class="thepetA">There are basic details which will only help build your health history. Daily tracking app has 8 parameters viz. food intake, exercise, water consumption during the day, hours of sleep during the day, your blood pressure etc... For each input on the day you can get 1 point. Effectively you can earn 8 points in a day.</div></div>

<div class="dvFloat" style="border-bottom:solid 1px #cdcdcd">
<h3 class="mypetsA" style="font-family: myriad_web_proregular; font-size: 14px; font-weight: bold;">How does earning reward point help? </h3>
<div class="thepetA">We have kept our reward points mechanism simple for our users to understand and earn points by taking basic actions. All redemptions are valued at 500 points. Collect 500 points and redeem against deals on our store pages. Remember one can collect points which stays in the user profile but to redeem you need to subscribe for alivemeterplus membership</div></div>
<div class="dvFloat" style="border-bottom:solid 1px #cdcdcd">
<h3 class="mypetsA" style="font-family: myriad_web_proregular; font-size: 14px; font-weight: bold;">What do you mean by complete health <!--and wealth -->forms? </h3>
<div class="thepetA">Our intent behind encouraging our patrons to complete their health <!--and wealth -->forms is basic hygiene. We believe that it can help them develop the right habit of updating their health records at one place that can be accessed anytime, anywhere. A single point of access also allows our expert doctors to analyze their problems and provide advice in the most effective manner.<br><br>
A completed health setup section post account creation will accrue 25 reward points to your profile. Clicking Not Applicable equals in-complete. Please fill atleast 3 parameters.</div></div>
<div class="dvFloat" style="border-bottom:solid 1px #cdcdcd">
<h3 class="mypetsA" style="font-family: myriad_web_proregular; font-size: 14px; font-weight: bold;">What do you mean by utilize deals? </h3>
<div class="thepetA">At alivemeter, we will introduced hyper local health and wellness deals. Every registered user can access the deals section and get special discounts on various products and services. Simply click on the button next to the deal and you will receive a coupon that can be displayed at the outlet to avail the offer. <br><br>
Once the coupon is used, you will receive an email confirming the same along with a review of the service, after which your reward points gets accumulated to your account.
</div></div>
<div class="dvFloat" style="border-bottom:solid 1px #cdcdcd">
<h3 class="mypetsA" style="font-family: myriad_web_proregular; font-size: 14px; font-weight: bold;">What do you mean by Liked us; share your experience by writing to us? Do I get paid for the same? </h3>
<div class="thepetA">We like hearing from our patrons! If you are happy with our services and the advice you have received from our experts, you can write to us at <!--feedback@alivemeter.com--><a href="mailto:support@alivemeter.com">support@alivemeter.com</a>. This feature is extended for both registered and premium users. Please ensure that you mention your user ID in your mail. <br><br>
You can even write to us and invite us at your place for your feedback on video. We will include the same as a part of our external communication. Your feedback can help you earn reward points for redemption in the future. Please note that we do not provide any upfront payments for the same. 
</div></div>
        </div>
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
