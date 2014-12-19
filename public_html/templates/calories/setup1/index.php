<script type="text/javascript" src="<?php echo $strHostName?>/js/health_steup_validation.js"></script>
<script type="text/javascript" src="<?php echo $strHostName?>/js/health_steup_insert_retrive.js"></script>
<?php include "includes/dashboard_top.inc.php";?>
<section>
  <div class="cal_full_size">
  
    <div class="cal_12 m_outo">
     <?php include "includes/dashboard_links.inc.php";?>
      <div class="dvFloat">
        <div class="dvWrapper">
          <?php include "view_files/calorie.inc.php";?>
      </div>
    </div>
  </div>
  </div>
</section>
<style>
.dk_options_inner
{
	height:90px;
	overflow: auto;
	position: relative;
}
</style>