<script type="text/javascript" src="<?php echo $strHostName?>/js/health_steup_validation.js"></script>
<script type="text/javascript" src="<?php echo $strHostName?>/js/health_steup_insert_retrive.js"></script>
<?php include "includes/dashboard_top.inc.php";?>
<section>
<div class="cal_full_size">
<div class="cal_12 m_outo">
  <?php include "includes/dashboard_links.inc.php";?>
  <div class="dvFloat">
    <div class="dvWrapper">
      <div style=" padding:0px 0px 35px 0px">
         		<?php include "includes/dashboard_left.inc.php";?>
        	<div class="health_dashboard_div_right" style="width: 804px;">
        		<?php include "includes/dashboard_sublinks.inc.php";?>
    		<div class="DvFloat" style="margin-bottom: 40px;">
				<?php include "view_files/family_history.inc.php";?>
         	</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div></div>
</section>

<script>
	Pres_Report_Show_Hide();
    Intake_Reminder_Show_Hide();
	Purchase_Reminder_Show_Hide();
	Daily_Frequency_enabledisable();
    </script>

<script>RetriveReocrds_Main('Family_History','dvFamily_History');</script>