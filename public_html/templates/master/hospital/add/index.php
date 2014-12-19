<script type="text/javascript" src="<?php echo $strHostName?>/js/health_steup_validation.js"></script>
<script type="text/javascript" src="<?php echo $strHostName?>/js/health_steup_insert_retrive.js"></script>
<section>
  <div class="top_ou">
    <div class="top_in" style="border: solid 0px #000066;">
      <div class="top">
        <div class="cal_12">
          &nbsp;
        </div>
        <div class="b_crumb">&nbsp;</div>
      </div>
    </div>
  </div>
</section>

<section>
<div class="cal_full_size" style="margin-top:-50px;">
<div class="cal_12 m_outo">
  <div class="dvFloat">
    <div class="dvWrapper">
      <div style=" padding:0px 0px 35px 0px">
         		
        	<div class="health_dashboard_div_right" style="width:100%;">
    		<div class="DvFloat">
				<?php include "masters/add_hospital.inc.php";?>
         	</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div></div>
</section>
<script>RetriveReocrds('HospitalMaster','dvHospitalMaster');</script>
