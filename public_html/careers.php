<?php include 'includes/common.inc.php'?>
<!DOCTYPE HTML>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Alivemeter | Healthcare Careers | Health Technology</title>
<meta name="description" content="Find exciting jobs in healthcare and health technology in Mumbai. Hospitals and caregivers can partner with us.">
<meta name="keywords" content="developer jobs Mumbai, designer jobs, healthcare careers, healthcare partner, online hospital partner, health technology jobs India, online nutritionist partner, online doctor partner">

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
        <div class="b_crumb"><a href="index.php">Home></a> Careers</div>
        <h1 class="f_red">  Careers</h1>
        <div class="cal_12" style="text-align: justify; line-height: 20px; padding-bottom: 40px;">
          <p style="margin-bottom:10px">We have just started our journey and understand that it is people who will come together and expand our vision to build a comprehensive health eco-system. We will look forward to care givers, healthcare institutions, diagnostic centers, tech geeks, designers and anyone who has the flair to partner a startup. One major quality we would be looking at would be someone who is not afraid of dreaming big and come up with cutting edge thoughts.</p>
          
          <p style="margin-bottom:10px">Check out this space for specific requirements in future.</p>
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
