<?php
	if(isset($_SESSION['UserID']) && ($_SESSION['UserID']=="Main") )
	{
		$user_id=$_SESSION['UserID'];
	}
	else if(isset($_GET['patient_id'])) 
	{	
		$user_id=$_GET['patient_id'];
	}
	

	
//Alert ($_SESSION['UserType']);
?>
<div class="health_dashboard_div_left" style="padding-top:25px;">
          <?php if($_SESSION['UserType']=="Doctor"  || $_SESSION['UserType']=="Nutritionist"){ ?>
          <div class="dvFloat">
            <div style="float:left; padding:0px 0px 10px 0px;"> <a href="<?php echo $strHostName;?>/page.php?dir=health/dashboard"><img src="<?php echo $strHostName;?>/images/nutritionist/daily_report.jpg" alt=""></a> </div>
          </div>
          <?php } ?>

          <?php if($dir=="health/medication") { ?>
          <div class="dvFloat">
            <div style="float:left; padding:0px 0px 10px 0px;"> <a href="<?php echo $strHostName;?>/page.php?dir=health/medication"><img src="<?php echo $strHostName;?>/images/nutritionist/medication_h.jpg" alt=""></a> </div>
          </div>
          <?php } else { ?>
          <div class="dvFloat">
            <div style="float:left; padding:0px 0px 10px 0px;"> <a href="<?php echo $strHostName;?>/page.php?dir=health/medication"><img src="<?php echo $strHostName;?>/images/nutritionist/medication.jpg" alt=""></a> </div>
          </div>
          <?php } ?>
          
          
           <?php if($dir=="health/hospitalization") { ?>
          <div class="dvFloat">
            <div style="float:left; padding:0px 0px 10px 0px;"> <a href="<?php echo $strHostName;?>/page.php?dir=health/hospitalization"><img src="<?php echo $strHostName;?>/images/nutritionist/hospitalization_h.jpg" alt=""></a> </div>
          </div> 
           <?php } else { ?>
           <div class="dvFloat">
            <div style="float:left; padding:0px 0px 10px 0px;"> <a href="<?php echo $strHostName;?>/page.php?dir=health/hospitalization"><img src="<?php echo $strHostName;?>/images/nutritionist/hospitalization.jpg" alt=""></a> </div>
          </div> 
          <?php } ?>
          
          
          
          <?php if($dir=="health/immunization") { ?>
          <div class="dvFloat">
            <div style="float:left; padding:0px 0px 10px 0px;"> <a href="<?php echo $strHostName;?>/page.php?dir=health/immunization"><img src="<?php echo $strHostName;?>/images/nutritionist/immunization_h.jpg" alt=""></a> </div>
          </div>
           <?php } else { ?>
          <div class="dvFloat">
            <div style="float:left; padding:0px 0px 10px 0px;"> <a href="<?php echo $strHostName;?>/page.php?dir=health/immunization"><img src="<?php echo $strHostName;?>/images/nutritionist/immunization.jpg" alt=""></a> </div>
          </div>
          <?php } ?>
          
          
          <?php if($dir=="health/health_problems") { ?>
          
          <div class="dvFloat">
            <div style="float:left; padding:0px 0px 10px 0px;"> <a href="<?php echo $strHostName;?>/page.php?dir=health/health_problems"><img src="<?php echo $strHostName;?>/images/nutritionist/health_problems_h.jpg" alt=""></a> </div>
          </div>
          <?php } else { ?>
          <div class="dvFloat">
            <div style="float:left; padding:0px 0px 10px 0px;"> <a href="<?php echo $strHostName;?>/page.php?dir=health/health_problems"><img src="<?php echo $strHostName;?>/images/nutritionist/health_problems.jpg" alt=""></a> </div>
          </div>
          <?php } ?>
          
          <?php if($dir=="health/daily_tracking" || $dir=="daily_tracking/sugar_profile" || $dir=="daily_tracking/lipid_profile" || $dir=="daily_tracking/lifestyle" ) { ?>
          <div class="dvFloat">
            <div style="float:left; padding:0px 0px 10px 0px;"> <a href="<?php echo $strHostName;?>/page.php?dir=health/daily_tracking"><img src="<?php echo $strHostName;?>/images/nutritionist/daily_tracking_h.jpg" alt=""></a> </div>
          </div>
          <?php } else { ?>
          <div class="dvFloat">
            <div style="float:left; padding:0px 0px 10px 0px;"> <a href="<?php echo $strHostName;?>/page.php?dir=health/daily_tracking"><img src="<?php echo $strHostName;?>/images/nutritionist/daily_tracking.jpg" alt=""></a> </div>
          </div>
          <?php } ?>
          
          <?php if($_SESSION['UserType']!="Doctor"  && $_SESSION['UserType']!="Nutritionist"){ ?>
         
          <?php if($dir=="health/allergies") { ?>
          <div class="dvFloat">
            <div style="float:left; padding:0px 0px 10px 0px;"> <a href="<?php echo $strHostName;?>/page.php?dir=health/allergies"><img src="<?php echo $strHostName;?>/images/nutritionist/allergies_h.jpg" alt=""></a> </div>
          </div>
          <?php } else { ?>
          <div class="dvFloat">
            <div style="float:left; padding:0px 0px 10px 0px;"> <a href="<?php echo $strHostName;?>/page.php?dir=health/allergies"><img src="<?php echo $strHostName;?>/images/nutritionist/allergies.jpg" alt=""></a> </div>
          </div>
          <?php } ?>
          
           <?php if($dir=="health/family_history") { ?>
          <div class="dvFloat">
            <div style="float:left; padding:0px 0px 50px 0px;"> <a href="<?php echo $strHostName;?>/page.php?dir=health/family_history"><img src="<?php echo $strHostName;?>/images/nutritionist/family_history_h.jpg" alt=""></a> </div>
          </div>
          <?php } else { ?>
          <div class="dvFloat">
            <div style="float:left; padding:0px 0px 50px 0px;"> <a href="<?php echo $strHostName;?>/page.php?dir=health/family_history"><img src="<?php echo $strHostName;?>/images/nutritionist/family_history.jpg" alt=""></a> </div>
            </div>
          <?php } ?>
          
          
          <?php } ?>
        </div>