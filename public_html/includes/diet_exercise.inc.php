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

function OnBlurQty1()
{
	var execal=document.getElementById("txtExerciceTotalCal1").innerHTML;
	var exeqty=document.getElementById("txtExeMin").value;
	if (isNaN(execal)==false)
	{
		document.getElementById("txtExerciceTotalCalorie").value= (execal*exeqty);
	}
}




$(function() {
    $("#txtExerciseSearch").autocomplete({
        source: $("#txtHostName").val()+"/search_autocomplete.php?type=ExerciseNew",
        minLength: 2,
        select: function( event, ui ) {
            if(ui.item.id=="0" || ui.item.id=="")
            {
                 
            }
            else
            {
               // SetRecipeIdE1(ui.item.id);
			   document.getElementById("txtExerciseId").value=ui.item.id;
			   var name_eportion = ui.item.id.split('###');
				/// alert (name_eportion);
					//alert (name_eportion[1]);
				document.getElementById("txtExerciseId").value= name_eportion[0];
				document.getElementById("txtExerciceTotalCal").value=name_eportion[1];
				document.getElementById("txtExerciceTotalCal1").innerHTML= name_eportion[1];
				
				document.getElementById("txtExerciceTotalMin").value="1";
				document.getElementById("txtExerciceTotalMin1").innerHTML="1";
			
			//	document.getElementById("txtETotalCal").value= name_eportion[1];
            }
        }
        
    });
    
});

 function CheckDuplication1() {
		var obj = document.getElementById("ToPickupdate").value;
		//alert (obj);
		var message = "";
		if(obj.value != "") {
			if (window.XMLHttpRequest)
			{// code for IE7+, Firefox, Chrome, Opera, Safari
				xmlhttp = new XMLHttpRequest();
			}
			else
			{// code for IE6, IE5
				xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			}
			xmlhttp.onreadystatechange=function()
			{
				if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
				{
					message = xmlhttp.responseText;
					message = message.split('<?php echo $strSeparator; ?>');
					if(message[1] == "true") {
						alert('Duplication Error Message\n\nSelected date already exists in the following records.');
						document.getElementById("ToPickupdate").focus();
						document.getElementById("ToPickupdate").select();
						return false;
					}
					else
					{
						Add_Diet_Exercise(); 
					}
				}
			}
			xmlhttp.open("GET","<?php echo $strHostName; ?>/includes/check_duplication.inc.php?tbl=Diet_Plan&value="+obj.value, true);
			xmlhttp.send();
		}
	}
</script>



<?php

$patient_id="0"; $date=date('d-m-Y');	 $iMinute="0"; $iHour="0";


if(isset($_GET['patient_id']))
{
	$patient_id=$converter->decode($_GET['patient_id']);
}

if(isset($_SESSION['UserNutID']))
{
	$nutritionist_id=$_SESSION['UserNutID'];
}
else
{
	$nutritionist_id="0";
}

$date=date('Y-m-d');	
$selected_date=date('Y-m-d');

$exe_count=GetValue("select count(*) as col from tbl_diet_exercise where patient_id=".$patient_id." and selected_date='".$selected_date."'", "col");
//echo "select count(*) as col from tbl_diet_exercise where patient_id=".$patient_id." and selected_date='".$selected_date."'";
//Alert ($exe_count);
//Alert ($nutritionist_id);

?>

<input type="hidden" id="txtNutId" name="txtNutId" value="<?php echo $nutritionist_id;?>" />
<input type="hidden" id="txtPatientId" name="txtPatientId" value="<?php echo $patient_id;?>" />
<input type="hidden" id="txtHostName" name="txtHostName" value="<?php echo $strHostName?>" />
<input type="hidden" id="txtExerciseId" name="txtExerciseId" value="0" />
<input type="hidden" value="<?php echo $date;?>" id="txtExerciseDate" name="txtExerciseDate" />
    

<div class="DvFloat" style="padding:10px 0px; border-bottom:solid 0px #c5c5c5">
  <div class="DvFloat">
    <div class="nutri_right_box1 f_grey">Time</div>
    <div class="nutri_right_box2 f_grey" style="width:385px;">Exercise</div>
    <div class="nutri_right_box3 f_grey" style="width:103px;">Mins</div>
	 <div class="nutri_right_box3 f_grey" style="width:103px;">Calories</div>
</div>
<div class="DvFloat" style="padding:10px 0px; border-bottom:solid 0px #c5c5c5">

    <div class="nutri_right_box1 f_grey" style="border:solid 0px red; display:none;">
        <div class="DvFloat">
             <div style="float:left; padding:0px 10px 0px 0px; font-weight: normal;">
                 <select id="txtTimeHH1" name="txtTimeHH1" tabindex="1" class="" style="width:50px; height:32px;">
                 	<option value="0" selected="selected">HH</option>
                    <?php for($iHour=0;$iHour < 4;$iHour++){ ?>
                      <option value="<?php echo $iHour?>"><?php echo $iHour?></option>
                    <?php } ?>
                 </select>
            </div>
            <div style="float:left; padding:0px 0px 0px 0px; font-weight: normal;">
                <select id="txtTimeMin1" name="txtTimeMin1" tabindex="1" class="" style="width:50px; height:32px;">
                	<option value="0" selected="selected">Min</option>
                   <?php for($iMinute=0;$iMinute < 61;$iMinute++){ ?>
                              <option value="<?php echo $iMinute?>"><?php echo $iMinute?></option>
                       <?php } ?>
                </select>
            </div>
        </div>
    </div>
    
      <div class="nutri_right_box1 f_grey" style="border:solid 0px red;">
        <div class="DvFloat">
             <div style="float:left; padding:0px 10px 0px 0px; font-weight: normal;">
                 <select id="txtTimePeriod" name="txtTimePeriod" tabindex="1" class="" style="width:110px; height:32px;" onchange="javascript:Add_Option_Time_Exercise();">
                 	<option value="0" selected="selected">Select</option>
                    <option value="Morning">Morning</option>
                     <option value="Afternoon">Afternoon</option>
                      <option value="Evening">Evening</option>
                 </select>
            </div>
            
        </div>
    </div>
                                                            
      <div class="nutri_right_box1 f_grey" style="border:solid 0px red; width:384px;">
       <input type="text" value="" id="txtExerciseSearch" name="txtExerciseSearch" style="color:#999;width:355px; height:18px;" placeholder="How should the client burn calories today?"><!--How did you burnt your calories today-->
         <input class="one" type="hidden" name="Exercise_Selected_Date"  id="Exercise_Selected_Date"  readonly="readonly" value="<?php echo $selected_date;?>" style="text-transform:uppercase; color:#666"/>
         <div style="padding-top:35px; font-style:normal;">
		    Min: <span id="txtExerciceTotalMin1" name="txtExerciceTotalMin1"></span>&nbsp;&nbsp;
           <input type="hidden" name="txtExerciceTotalMin" id="txtExerciceTotalMin" value="" />
           
		   Calorie: <span id="txtExerciceTotalCal1" name="txtExerciceTotalCal1"></span>&nbsp;&nbsp; 
           <input type="hidden" name="txtExerciceTotalCal" id="txtExerciceTotalCal" value=""  />
	   </div>
      </div>                                            
      <div class="nutri_right_box1 f_grey" style="border:solid 0px red; width:94px;">
       <input type="text" value="" id="txtExeMin" name="txtExeMin" style="color:#999;width:50px; height:18px;" placeholder="Min" onchange="javascript:OnBlurQty1();">
	</div>  
      
        <div class="nutri_right_box1 f_grey" style="border:solid 0px red; width:136px; ">
       <input type="text" id="txtExerciceTotalCalorie" name="txtExerciceTotalCalorie" style="color:#999;width:99px; height:18px;" placeholder="Calorie" value=""  readonly>
	</div>           
   
    <div class="nutri_right_box1 f_grey" style="border:solid 0px red; display:none;">
        <div class="DvFloat">
             <div style="float:left; padding:0px 10px 0px 0px; font-weight: normal;">
                 <select id="txtDurationHH" name="txtDurationHH" tabindex="1" class="" style="width:50px; height:32px;">
                 	<option value="0">HH</option>    
                    <option value="0">0</option>
                    <option value="1">1</option> 
                    <option value="2">2</option> 
                    <option value="3">3</option> 
                    <option value="4">4</option>    
                 </select>
            </div>
            <div style="float:left; padding:0px 0px 0px 0px; font-weight: normal;">
                <select id="txtDurationMin" name="txtDurationMin" tabindex="1" class="" style="width:50px; height:32px;">
                	<option value="0">MM</option> 
                    <option value="0">0</option>
                    <option value="15">15</option> 
                    <option value="30">30</option> 
                    <option value="45">45</option> 
                   
                </select>
            </div>
        </div>
    </div>
            
      <div class="nutri_right_box1 f_grey" style="border:solid 0px red;">
      		<a class="buttonsearch" style="text-align:center; width:50px; cursor:pointer; background-color:#666666;" onclick="javascript:CheckDuplication1();">Add</a>
      </div>      
  <input type="hidden" name="txtDietExeTotal" id="txtDietExeTotal" value="<?php echo $exe_count;?>" />  
  
  
  </div>
</div>


<div class="dvFloat">


<div class="DvFloat" style="padding:10px 0px 0px 0px;" id="dvDietExercise"> 
  
</div>


</div>
 