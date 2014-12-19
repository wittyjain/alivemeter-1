<script type="text/javascript" src="<?php echo $strHostName?>/js/health_steup_validation.js"></script>
<script type="text/javascript" src="<?php echo $strHostName?>/js/health_steup_insert_retrive.js"></script>

<section>
  <?php if ($doc_consult_count > 0 && $medication_count > 0 && $allergies_count > 0  && $hospitalization_count > 0 && $immunization_count > 0 && $health_problem_count > 0 && $family_history_count > 0 && $blood_pressure_count > 0 && $sugar_profile_count > 0 && $life_style_count > 0 && $lipid_profile_count > 0) { ?>
  <div class="dvFloat">
    <?php include "includes/dashboard_top.inc.php";?>
  </div>
  <?php } ?>
</section>

<section>
  <div class="cal_full_size">
    <div class="cal_12 m_outo">
      <div class="dvFloat">
        <div class="dvWrapper">
          <div style="float:left; padding:0px 0px 50px 0px; border:solid 0px red;">
            <div class="adviceonline_md">
             	<?php include "includes/inbox_left.inc.php";?>
                <?php include "view_files/ask_nutritionist.inc.php";?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
</section>

<div id="dvpopup-form" style="text-align: center; width: 780px;position:absoulte; margin:15px auto; display:none; margin-left:25%">
  <table cellpadding="0" cellspacing="0" border="0" width="400px" align="center">
    <tr>
      <td style="text-align:right; border:solid 0px red; float:right"><div style="margin: 5px 0px 0px -23px; position: absolute; text-align:right"> <a href="javascript:Popup.hide('dvpopup-form');" target="_parent" style="text-decoration: none; color: #fff;"> <img src="images/close.png" alt="" title="" border="0" /> </a> </div></td>
    </tr>
    <tr>
      <td valign="top" align="center" style="padding: 10px 10px 10px 10px;"><div class="DvFloat">
          <div class="dvWhitePopup_Box">
            <table cellpadding="0" cellspacing="0" style="width:90%; border:solid 0px #000000">
              <tr>
                <td colspan="4" style="padding-bottom:15px;padding-left:20px;text-align:center"><h2 class="Tab_Title" style="color:#333333"> Whom do you want to ask query? </h2></td>
              </tr>
              <tr>
                <td style="text-align:center; padding:0px 10px;vertical-align:middle"><a href="<?php echo $strHostName;?>/page.php?dir=inbox/compose_doctor"><img src="images/doctor_box.png" alt="" align="absmiddle" /></a></td>
                <td style="text-align:center; padding:0px 10px;vertical-align:middle"><a href="<?php echo $strHostName;?>/page.php?dir=inbox/compose_nutritionist"><img src="images/nutritionist_box.png" alt="" align="absmiddle" /></a> </td>
              </tr>
            </table>
          </div>
        </div></td>
    </tr>
  </table>
</div>
    

</body>
</html>

<script>
	Pres_Report_Show_Hide();
</script>