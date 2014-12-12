<?php include 'includes/common.inc.php'?>
<?php include 'includes/links.php'?>
<?php
//Alert ($_SESSION['UserID']);
	
?>
<?php if($_GET['dir']=="health/dashboard" ||  $_GET['dir']=="health/allergies" ||  $_GET['dir']=="health/calendar" ||  $_GET['dir']=="health/daily_tracking" ||  $_GET['dir']=="health/family_history" ||  $_GET['dir']=="health/health_problems" ||  $_GET['dir']=="health/hospitalization" ||  $_GET['dir']=="health/immunization" ||  $_GET['dir']=="health/lab_report" || $_GET['dir']=="health/medication" || $_GET['dir']=="health/prescription" || $_GET['dir']=="health/radiology_report" || $_GET['dir']=="health/setup" || $_GET['dir']=="health/upload_report" || $_GET['dir']=="health/videochat" || $_GET['dir']=="account/change_password" || $_GET['dir']=="calendar/daily_tracking" || $_GET['dir']=="inbox/compose_doctor"  || $_GET['dir']=="inbox/compose_nutritionist"  || $_GET['dir']=="inbox/detailed_mail"  || $_GET['dir']=="inbox/details"  || $_GET['dir']=="inbox/view_mails"  || $_GET['dir']=="calories/setup2" || $_GET['dir']=="calories/setup1" || $_GET['dir']=="calories/setup3"  || $_GET['dir']=="calories/setup4"){?>
<?php
if(!isset($_SESSION['UserID']))
{
	Alertandredirect("Sorry! Session is expired.", 'index.php');
}

?>
<?php } ?>

</head>
<body>
<?php if($_GET['dir']!="doctor/login" && $_SESSION['UserType']!="Doctor" && $_GET['dir']!="md/login" && $_SESSION['UserType']!="MD" && $_SESSION['UserType']!="Nutritionist"){?>
	<?php include 'includes/top.php'?>
<?php } ?>

     <?php


		if(isset($_GET['dir'])) {
			$dir = $_GET['dir'];
		}
	?>
    <?php if($dir != "") { include("templates/".$dir."/index.php"); } else { echo "<p style=\"font-size: 12px;\">Sorry! Page you are trying to view is not available.</p>"; } ?>
 
<?php if($_GET['dir']!="doctor/login" && $_SESSION['UserType']!="Doctor" && $_GET['dir']!="md/login" && $_SESSION['UserType']!="MD" && $_SESSION['UserType']!="Nutritionist"){?>
 <?php include 'includes/bottom.php'?>
 <?php } ?>
</body>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-56312118-1', 'auto');
  ga('send', 'pageview');

</script>
</html>
