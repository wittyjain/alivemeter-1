<script type="text/javascript" src="<?php echo $strHostName?>/js/health_steup_validation.js"></script>
<script type="text/javascript" src="<?php echo $strHostName?>/js/health_steup_insert_retrive.js"></script>
<?php include "includes/dashboard_top.inc.php";?>
<script>
function ViewDoctor(name, id)
{
	document.getElementById("DvDoctorForm").style.display="";
	document.getElementById("txtCommonDoctorType").value=name;
	document.getElementById("txtCommonDoctorID").value=id;
}
function showCancel()
{ 
	document.getElementById('DvDoctorForm').style.display = 'none'; 
}
</script>
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
				<?php include "view_files/health_problems.inc.php";?>
         	</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div></div>
</section>
<div class="frmclickhere" id="DvDoctorForm" style="display:none; position:absolute; z-index:99999; text-align:center; top:100px; margin:0 auto; left:400px;">
    <form method="post" id="signup" action="">
        <div style="border-bottom: solid 2px #d4d4d4; background-color: #f7f8f3; padding: 12px 11px; float: left; width: 95%; font-size: 14px; font-weight: bold;">
            Add Doctor 
         </div>
         <div style="text-align:right; margin-top:-50px; float:right;">
            <a onClick="showCancel();"><img src="<?php echo $strHostName;?>/images/close.png" /></a>
         </div>
         <?php include "view_files/common_doctor.inc.php";?>
        
    </form>
</div> 



<script>
	Pres_Report_Show_Hide();
    Intake_Reminder_Show_Hide();
	Purchase_Reminder_Show_Hide();
	Daily_Frequency_enabledisable();
    </script>

<script>RetriveReocrds_Main('Health_Problems','dvHealth_Problems');</script>