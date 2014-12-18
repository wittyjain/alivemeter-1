<?php include 'includes/common.inc.php'?>
<!DOCTYPE HTML>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Alivemeter</title>
<?php include 'includes/links.php'?>
<link href="style/main.css" rel="stylesheet" type="text/css">
<link href="style/reset.css" rel="stylesheet" type="text/css">
<link href="style/fonts.css" rel="stylesheet" type="text/css">
<link href="style/bxslider.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="js/scrolltopcontrol.js"></script>
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
  <div class="top_ou">
    <div class="top_in">
      <div class="top">
        <div class="b_crumb"><a href="index.php">Home></a> Disclaimer</div>
        <h1 class="f_red">  DISCLAIMER</h1>
        <div class="cal_12" style="text-align: justify; line-height: 20px; padding-bottom: 40px;">
          <p style="margin-bottom:10px">This Website (www.alivemeter.com) is a resource for informational purposes only. Advice Online India further assumes no liability for the interpretation and/or use of the information contained on this Website, nor does it offer a warranty of any kind, either expressed or implied.</p>
          
          <p style="margin-bottom:10px">This Website is not intended to be a source of advertising or solicitation and the contents of the website should not be construed as medical-advice.</p>
          
          <p style="margin-bottom:10px">If you insist on browsing this website without authority and prior permission, you may do so without the company being held responsible for any risk and consequence and the company shall not be responsible for any legal action as it is not our company's intention and policy to solicit or advertise.</p>
          
          <p style="margin-bottom:10px">This Web site is not and should not in any manner be construed or interpreted as a source or a medium of any medical treatment. The content is not intended to be a substitute for emergency professional medical advice, diagnosis, or treatment. Always seek the advice of your physician or other qualified health provider with any question you may have regarding a medical emergency. Suggested specific product performance which is beyond our control reliance on such information provided by AOI appearing on the website is completely upon your own discretion and AOI shall not be held liable for the same.</p>
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
