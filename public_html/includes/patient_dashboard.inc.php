<?php include "common.inc.php";?>
<link rel="stylesheet" type="text/css" href="<?php echo $strHostName;?>/style/tabcontent.css" />
<script type="text/javascript" src="<?php echo $strHostName;?>/js/tabcontent.js"></script>
<link href="<?php echo $strHostName;?>/style/main.css" rel="stylesheet" type="text/css">
<link href="<?php echo $strHostName;?>/style/reset.css" rel="stylesheet" type="text/css">
<link href="<?php echo $strHostName;?>/style/fonts.css" rel="stylesheet" type="text/css">
<link href="<?php echo $strHostName;?>/style/bxslider1.css" rel="stylesheet" type="text/css">
<link href="<?php echo $strHostName;?>/style/jupiter.css" rel="stylesheet" type="text/css">
<link href="<?php echo $strHostName;?>/css/main_new.css" rel="stylesheet" type="text/css">
<link type="text/css" rel="stylesheet" href="<?php echo $strHostName;?>/css/style.css" />
<link href="<?php echo $strHostName;?>/style/bhupali.css" rel="stylesheet" type="text/css">
<link href="<?php echo $strHostName;?>/style/paging_md.css" rel="stylesheet" type="text/css" />

<script type="text/javascript" src="<?php echo $strHostName;?>/js/calorie_tabcontent.js"></script>
<script language="JavaScript" src="<?php echo $strHostName;?>/js/PopUp.js" type="text/javascript"></script>
<script language="JavaScript" src="<?php echo $strHostName;?>/js/common.js" type="text/javascript"></script>
<script type="text/javascript" language="javascript" src="<?php echo $strHostName;?>/js/counter_check.js"></script>
<script type="text/javascript" language="javascript" src="<?php echo $strHostName;?>/js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="<?php echo $strHostName;?>/lib/jquery.mousewheel-3.0.6.pack.js"></script>
<script type="text/javascript" language="javascript" src="<?php echo $strHostName;?>/js/scrolltopcontrol.js"></script>


<link rel="stylesheet" type="text/css" href="<?php echo $strHostName;?>/style/health_dashboard_tabcontent.css" />


<?php
	if(isset($_GET['patient_id']))
	{
		$patient_id=$_GET['patient_id'];
	}
	else
	{
		$patient_id=0;
	}
?>
        
<div class="DvFloat" style="padding:0px 0px">
  <?php include "dashboard_left.inc.php";?>
  <div class="health_dashboard_div_right">
    <div class="DvFloat">
      <?php include "daily_report_card.inc.php";?>
      <div class="DvFloat" style="padding-top: 20px;">
        <div class="DvFloat">
          <?php include "calorie_chart.inc.php";?>
        </div>
      </div>
    </div>
  </div>
</div>
