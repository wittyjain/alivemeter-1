<script type="text/javascript" src="<?php echo $strHostName?>/js/health_steup_validation.js"></script>
<script type="text/javascript" src="<?php echo $strHostName?>/js/health_steup_insert_retrive.js"></script>
<script type="text/javascript" src="<?php echo $strHostName?>/js/calorie_tabcontent.js"></script>
<script src="<?php echo $strHostName;?>/js/jquery.min.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="<?php echo $strHostName?>/style/inbox_tabcontent.css" />

  <?php if ($doc_consult_count > 0 && $medication_count > 0 && $allergies_count > 0  && $hospitalization_count > 0 && $immunization_count > 0 && $health_problem_count > 0 && $family_history_count > 0 && $blood_pressure_count > 0 && $sugar_profile_count > 0 && $life_style_count > 0 && $lipid_profile_count > 0) { ?>
    <?php include "includes/dashboard_top.inc.php";?>
  <?php } ?>

<?php 
$user_total_mail_count="0"; $user_id="";

if(isset($_SESSION['UserID']))
{
	$user_id=$_SESSION['UserID'];	
}

$inbox_id=$get_retrive->RetriveUserInboxID($_SESSION['UserID']);
$free_user_id=GetValue("select user_id as col from tbl_users where user_id=".$user_id." and isactive=1 and user_type='Free'","col");
$user_total_doc_mail_count=GetValue("select Count(*) as col from tbl_compose where user_id=".$free_user_id." and isactive=1 and mail_type='Doctor'","col");

//Alert ($user_total_doc_mail_count);

if($user_total_doc_mail_count==2)
{	
	AlertandRedirect("Sorry! you cannot send more than 2 mails. Please upgrade your account to premium to send unlimited mails.", $strHostName."/page.php?dir=inbox/view_mails&status=inbox&folderid=".$converter->encode($inbox_id));
	return;
}

?>
<script>
function ViewDoctor(type)
{
	document.getElementById("DvDoctorForm").style.display="";
}
function showCancel()
{ 
	document.getElementById('DvDoctorForm').style.display = 'none'; 
}
</script>

<script>

	function Pres_Report_Show_Hide()
	{
		 document.getElementById("dvPres_Report_Show_Hide1").style.display="";
		 document.getElementById("dvPres_Report_Show_Hide").style.display="none";
		if(document.getElementById("cmb_Inbox_Query_Type").value ==2){
			
			document.getElementById("dvPres_Report_Show_Hide").style.display="";
			document.getElementById("dvPres_Report_Show_Hide1").style.display="none";
			
		}
		else if(document.getElementById("cmb_Inbox_Query_Type").value ==3){
			
		document.getElementById("dvPres_Report_Show_Hide").style.display="none";
			document.getElementById("dvPres_Report_Show_Hide1").style.display="";
			
		}
		 
	}

</script>

<section>
  <div class="cal_full_size">
    <div class="cal_12 m_outo">
      <div class="dvFloat">
        <div class="dvWrapper">
          <div style="float: left; padding:0px 0px 50px 0px; border:solid 0px red;">
            <div class="adviceonline_md">
             	<?php include "includes/inbox_left.inc.php";?>
                <?php include "view_files/compose.inc.php";?>
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
