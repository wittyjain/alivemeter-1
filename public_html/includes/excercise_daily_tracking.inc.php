<script type="text/javascript" src="<?php echo $strHostName?>/js/calories_steup3_validation.js"></script>
<script src="<?php echo $strHostName; ?>/js/jquery-1.9.1.js"></script>
<script src="<?php echo $strHostName; ?>/js/jquery.ui.core.js"></script>
<script src="<?php echo $strHostName; ?>/js/jquery.ui.widget.js"></script>
<script src="<?php echo $strHostName; ?>/js/jquery.ui.position.js"></script>
<script src="<?php echo $strHostName; ?>/js/jquery.ui.menu.js"></script>
<script src="<?php echo $strHostName; ?>/js/jquery.ui.autocomplete.js"></script>
<link href="<?php echo $strHostName; ?>/css/jquery-ui-1.8.21.custom.css" rel="stylesheet">
<style>
.ui-autocomplete-loading {
    background: white url('<?php echo $strHostName?>/images/ui-anim_basic_16x16.gif') right center no-repeat;
}
</style>
<script>
$(function() {
    $("#txtExerciseSearch").autocomplete({
        source: $("#txtHostName").val()+"/search_autocomplete.php?type=Exercise",
        minLength: 2,
        select: function( event, ui ) {
            if(ui.item.id=="0" || ui.item.id=="")
            {
                 
            }
            else
            {
                SetRecipeIdE(ui.item.id);
            }
        }
        
    });
    
});

 
</script>

<input type="hidden" id="txtHostName" name="txtHostName" value="<?php echo $strHostName?>" />
<input type="hidden" id="txtExerciseId" name="txtExerciseId" value="0" />

<?php
if(isset($_GET['alived']) || isset($_GET['alivem']) || isset($_GET['alivey']))
{
	$date=$_GET['alivey']."-".$_GET['alivem']."-".$_GET['alived'];
	
}
else
{
	$date=date("Y-m-d");
}

$daily_date=date("Y-m-d");

$burnt_cal=GetValue("select sum(eng_cal) as col from tbl_daily_exercise where user_id=".$_SESSION['UserID']." and date='$date' ","col");
//Alert ($date);

if($burnt_cal=="")
{
	$burnt_cal="0";
}

?>
<div class="DvFloat" style="padding:40px 0 10px 0px; border-bottom:solid 0px #c5c5c5">
  <div style="text-align:left; width:304px; float:left">
    <input type="text" value="" id="txtExerciseSearch" name="txtExerciseSearch" style="color:#999;width:296px; height:18px; background-image:url(images/calorie_setup/search_icon.png); background-repeat:no-repeat; background-position:98% 50%" placeholder="How did you burn your calories today?" >
  </div>
   <div style="float:left; text-align:center; padding-left:10px; width: 130px;"> 
               		<a href="<?php echo $strHostName?>/page.php?dir=inbox/compose_nutritionist" class="cantfindfood" style="text-align:left; width: 130px;">Can't find exercise?<span></span></a>
               </div>
  <div style="float:left; text-align:left; padding-left:26px;"><a style="cursor: pointer;" target="_parent" onClick="javascript:SetScroll(); Popup.showModal('dvpopup-sendnewdietplan',null,null,{'screenColor':'#333333','screenOpacity':.6});" class="buttontext" ><img src="images/calorie_setup/suggest_by_nutritionist.jpg" alt=""></a></div>
</div>

<div class="dvFloat" style="border-bottom:solid 0px #cdcdcd;padding-bottom:0px;" id="dvExercise">
     <input type="hidden" value="Exercise" id="txtExercise" name="txtExercise" />
      <input type="hidden" value="<?php echo $date;?>" id="txtExerciseDate" name="txtExerciseDate" />
   <center>
                            <div class="DvFloat" style="padding:10px 0px 0px 0px; border-bottom:solid 0px #c5c5c5; "  id="tr_exercise_<?php echo $row['id']*121?>"> 
                                  <table cellpadding="0" cellspacing="0" style="width:100%;">
                            
                                    <tr>
                                    	<td>&nbsp;</td>
                                        <td style="width:418px; color:#9acc01; width:233px; border:solid 0px red; text-transform: uppercase;">exercise</td>
                                        <td style="width:150px; text-align:center; font-size: 14px;">Add Min</td>
                                        <td style="width:104px; padding-left:0px; text-align:center; font-size: 14px;">Cal Per Unit</td>
                                        <td style="width:104px; padding-left:0px; text-align:center; font-size: 14px;">Total Cal</td>
                                        <td style="width:61px; text-align:center; font-size: 14px;">Update</td>
                                        <td style="width:77px; text-align:center; font-size: 14px;">Delete</td>
                                   </tr>
                            </table>
                       		</div>
                        </center>
     <iframe frameborder="0" id="ifExercise" onload="javascript:SetFrameHeightE();" scrollbars="0" style="width:100%;" width="100%" scrolling="no"></iframe>
</div>

 <div class="DvFloat" style="padding:0px 0px 0px 0px; border-bottom:solid 0px #c5c5c5; background-color:#f0f0f0; width:699px; margin-bottom:70px; margin-left:0px;">
 		<table width="100%" border="0" cellspacing="10" cellpadding="8">
          <tr>
            	<td valign="top" style="width:450px; font-size:12px; padding-top:15px; text-transform: uppercase; padding-left: 11px; font-weight: bold;">Total Calorie burnt today</td>
                <td class="Greybox_Td" style="height:16px; text-align:center;">
                		<input type="text" value="<?php echo $burnt_cal;?>" id="txtTotalExercise" name="txtTotalExercise" style="background-color:#666666; color:#fff; border:0px; box-shadow:none; padding:0px; width:60px; text-align:center;" readonly="readonly" />
                </td>
          </tr>
        </table>

 </div>
 
<script>
	Retrive_Cal_Exercise();
</script>