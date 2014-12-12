<?php
if(!isset($_SESSION['UserNutID']))
{
	Alertandredirect("Sorry! Session is expired.", 'index.php');
}
?>
<?php include "includes/dashboard_mainlinks.inc.php";?>
<section>
  <div class="top_ou" style="padding:40px 0;">
    <div class="cal_12 m_outo">
      <div class="dvFloat">
        <div class="dvWrapper">
          <div style="float:left; padding:0px 0px 50px 0px; border:solid 0px red;">
            <div class="adviceonline_md">
             	<?php include "includes/nut_inbox_left.inc.php";?>
                <?php include "retrive_files/retrive_nutritionist_view_mails.inc.php";?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
</section>
