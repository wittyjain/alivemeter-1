<?php  
$strdashboard=""; $strcalorie="";  $strreport=""; 
		if($_GET['dir']=="health/dashboard"){
			$strdashboard="color:#7ca500";
		} 
		else if($_GET['dir']=="calories/setup1" || $_GET['dir']=="calories/setup2" || $_GET['dir']=="calories/setup3" || $_GET['dir']=="calories/setup4"){
			$strcalorie="color:#7ca500";
		}
		else if($_GET['dir']=="health/lab_report" || $_GET['dir']=="health/radiology_report" || $_GET['dir']=="health/prescription"){
			$strreport="color:#7ca500";
		}


$ccount=GetValue("select Count(*) as col from tbl_calorie where user_id=".$_SESSION['UserID'], "col");
//Alert ($ccount);
?>
<?php if($_SESSION['UserType']!="Doctor"  && $_SESSION['UserType']!="Nutritionist" && $_SESSION['UserType']!="MD"){ ?>
<div class="dvFloat">
    <div class="dvWrapper">
      <div style="float:left; padding:0px 0px 0px 0px; height:50px; border:solid 0px red;">
        <ul class="calorie_setup">
         
         
          <li class="<?php if($_GET['dir']=="health/dashboard") { echo "active"; } else { echo "past";}?>" style="width:350px;">
           <div>
              <div class="Step_title_d_Grey"><a href="<?php echo $strHostName;?>/page.php?dir=health/dashboard" title="Step 2" style="padding:0px; margin:0px; text-align:left; <?php echo $strdashboard; ?>">Health Dashboard </a></div>
              <span><a href="<?php echo $strHostName;?>/page.php?dir=health/dashboard" title=""><img src="images/calorie_setup/health_dashboard_icon.png" alt="" /></a></span><a href="<?php echo $strHostName;?>/page.php?dir=calories/setup1" title=""> </a></div>
          </li>
          
          
          <li class="<?php if($_GET['dir']=="calories/setup1" || $_GET['dir']=="calories/setup2" || $_GET['dir']=="calories/setup3" || $_GET['dir']=="calories/setup4") { echo "active"; } else { echo "past";}?>" style="width:350px;">
            <div>
              <div class="Step_title_green">
             		 <?php if($ccount=="0" || $ccount=="") { ?>
              			<a href="<?php echo $strHostName;?>/page.php?dir=calories/setup1" title="" style="padding:0px; margin:0px; text-align:left; <?php echo $strcalorie; ?>">Calorie Setup</a>	
                    <?php } else { ?>
                    	<a href="<?php echo $strHostName;?>/page.php?dir=calories/setup3" title="" style="padding:0px; margin:0px; text-align:left; <?php echo $strcalorie; ?>">Calorie Setup</a>	
                    <?php } ?>
                    
                    </div>
              <span><a href="<?php echo $strHostName;?>/page.php?dir=calories/setup1" title=""><img src="images/calorie_setup/calorie_setup_icon.png" alt="" /></a></span><a href="#" title=""> </a></div>
          </li>
          
          
          
           <li class="<?php if($_GET['dir']=="health/lab_report" || $_GET['dir']=="health/radiology_report" || $_GET['dir']=="health/prescription") { echo "active"; } else { echo "past";}?>" style="width:237px;">
            <div>
              <div class="Step_title_d_Grey_small"><a href="<?php echo $strHostName;?>/page.php?dir=health/lab_report" title="Step 2" style="padding:0px; margin:0px; text-align:left; <?php echo $strreport; ?>">Upload Reports</a></div>
              <span><a href="<?php echo $strHostName;?>/page.php?dir=health/lab_report" title=""><img src="images/calorie_setup/upload_report_icon.png" alt="" /></a></span></div>
          </li>
          
          
          
          <div class="calorie_setupline"></div>
        </ul>
      </div>
    </div>
  </div>
<?php } ?>