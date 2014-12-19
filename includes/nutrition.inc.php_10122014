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
    $("#txtBreakfast_Search").autocomplete({
        source: $("#txtHostName").val()+"/search_autocomplete_nut.php?type=Receipe",
        minLength: 2,
        select: function( event, ui ) {
            if(ui.item.id=="0" || ui.item.id=="")
            {
                 
            }
            else
            {
                SetRecipeId(ui.item.id);
					
            }
        }
        
    });
    
});

$(function() {
    $("#txtLunch_Search").autocomplete({
        source: $("#txtHostName").val()+"/search_autocomplete_nut.php?type=Receipe",
        minLength: 2,
        select: function( event, ui ) {
            if(ui.item.id=="0" || ui.item.id=="")
            {
                 
            }
            else
            {
                SetRecipeId1(ui.item.id);

            }
        }
        
    });
    
});

$(function() {
    $("#txtSnacks_Search").autocomplete({
        source: $("#txtHostName").val()+"/search_autocomplete_nut.php?type=Receipe",
        minLength: 2,
        select: function( event, ui ) {
            if(ui.item.id=="0" || ui.item.id=="")
            {
                 
            }
            else
            {
                SetRecipeId2(ui.item.id);
            }
        }
        
    });
    
});

$(function() {
    $("#txtDinner_Search").autocomplete({
        source: $("#txtHostName").val()+"/search_autocomplete_nut.php?type=Receipe",
        minLength: 2,
        select: function( event, ui ) {
            if(ui.item.id=="0" || ui.item.id=="")
            {
                 
            }
            else
            {
                SetRecipeId3(ui.item.id);
            }
        }
        
    });
    
});
 
 
 
  
</script>


<?php
	
if(isset($_GET['alived']) || isset($_GET['alivem']) || isset($_GET['alivey']))
{
	$date=$_GET['alivey']."-".$_GET['alivem']."-".$_GET['alived'];
	//Alert ($date);
}
else
{
	$date=date("Y-m-d");
	//Alert ($date);
}

if(isset($_GET['alived']) || isset($_GET['alivem']) || isset($_GET['alivey']))
{
	$today_date=$_GET['alivey']."-".$_GET['alivem']."-".$_GET['alived'];
	//Alert ($date);
}
else
{
	$today_date=date("Y-m-d");
	//Alert ($date);
}

//Alert ($date);
			
			?>
		
            

<input type="hidden" id="txtHostName" name="txtHostName" value="<?php echo $strHostName?>" />
<input type="hidden" id="txtReceiptId" name="txtReceiptId" value="0" />
<input type="hidden" id="txtLunchReceiptId" name="txtLunchReceiptId" value="0" />
<input type="hidden" id="txtSnacksReceiptId" name="txtSnacksReceiptId" value="0" />
<input type="hidden" id="txtDinnerReceiptId" name="txtDinnerReceiptId" value="0" />

<div id="tabs1" class="tabcontent tab-1" style="border:solid 0px red; height:auto;">
	<div style="width:690px;" id="divtab8">
	  <div  style="padding:10px 0px; text-align:center; margin:0 auto">
		<center>
		  <ul id="calorie_tab" class="calorie_tab">
			<li class="selected" onclick="javascript:SetFrameHeight();"><a href="#" rel="tabs1a" >Breakfast</a></li>
			<li onclick="javascript:SetFrameHeight1();"><a href="#" rel="tabs2a" >Lunch</a></li>
			<li onclick="javascript:SetFrameHeight2();"><a href="#" rel="tabs3a" >Snacks</a></li>
			<li  onclick="javascript:SetFrameHeight3();"><a href="#" rel="tabs4a">Dinner</a></li>
		  </ul>
		</center>
	  </div>
	  <div class="calorieTabContentDetails">
		<div id="tabs1a" class="calorie_tabcontent">
		  <div style="width:698px; border:solid 0px red;">
			<div class="DvFloat" style="padding: 20px 0px 10px 0px; border-bottom:solid 0px #c5c5c5">
			  <div style="float:left; text-align:left; width:306px;">
				<input type="text" value="" id="txtBreakfast_Search" name="txtBreakfast_Search" style="color:#999;width:300px; height:18px; background-image:url('<?php echo $strHostName?>/images/calorie_setup/search_icon.png'); background-repeat:no-repeat; background-position:98% 50%" placeholder="What did you have today ?" >
			  </div>
			  
              
               <div style="float:left; text-align:center; padding-left:16px; width: 123px;"> 
               		<a href="<?php echo $strHostName?>/page.php?dir=inbox/compose_nutritionist" class="cantfindfood" style="text-align:left; width: 123px;">Can't find food?<span></span></a>
               </div>
               
               <div style="float:left; text-align:left; padding-left:28px;">  <a style="cursor: pointer;" target="_parent" onClick="javascript:SetScroll(); Popup.showModal('dvpopup-sendnewdietplan',null,null,{'screenColor':'#333333','screenOpacity':.6});" class="buttontext" ><img src="images/calorie_setup/suggest_by_nutritionist.jpg" alt=""></a></div>
               
               
			</div>
			<div class="DvFloat" style="padding:0px 0px 0px 0px; border-bottom:solid 1px #c5c5c5; text-align:left; display:none;"> <span style="font-size:13px; color:#87ac26">BREAKFAST</span> </div>
			<div class="dvFloat" style="border-bottom:solid 0px #cdcdcd;padding-bottom:0px;" id="dvBreakFast">
				 <input type="hidden" value="BreakFast" id="txtBreakFast" name="txtBreakFast" />
                  <input type="hidden" value="<?php echo $date;?>" id="txtBreakDate" name="txtBreakDate" />
                 <table style="text-transform:none; padding:8px 0;">
                    <tr>
                                <td style="color:#9acc01; width:233px; border:solid 0px red; text-transform: uppercase;">Breakfast</td>
                                 <td style="width: 94px; border:solid 0px red; text-align:center;">Add qty</td>
                                <td style="width: 60px; border:solid 0px red; text-align:center;">Portion</td>
                                <td style="width: 92px; border:solid 0px red; text-align:center;">Calories</td>
                                <td style="width: 68px; border:solid 0px red; text-align:center;">Update</td>
                                <td style="width: 58px; border:solid 0px red; text-align:center;">Delete</td>
                               
                            </tr>
                    </table>


                 <iframe frameborder="0" id="ifBreakFast" onload="javascript:SetFrameHeight();" scrollbars="0" style="width:100%; border:solid 0px red;" scrolling="no"></iframe>
                
			</div>
		</div>
		
	  </div>
        <div id="tabs2a" class="calorie_tabcontent">
		  <div style="width:698px; border:solid 0px red;">
          		<div class="DvFloat" style="padding: 20px 0px 10px 0px; border-bottom:solid 0px #c5c5c5">
			  <div style="float:left; text-align:left; width:306px;">
				<input type="text" value="" id="txtLunch_Search" name="txtLunch_Search" style="color:#999;width:300px; height:18px; background-image:url('<?php echo $strHostName?>/images/calorie_setup/search_icon.png'); background-repeat:no-repeat; background-position:98% 50%" placeholder="What did you have today ?" >
			  </div>
			  
                <div style="float:left; text-align:center; padding-left:16px; width: 123px;"> 
               		<a href="<?php echo $strHostName?>/page.php?dir=inbox/compose_nutritionist" class="cantfindfood" style="text-align:left; width: 123px;">Can't find food?<span></span></a>
               </div>
               
               <div style="float:left; text-align:left; padding-left:28px;"><a style="cursor: pointer;" target="_parent" onClick="javascript:SetScroll(); Popup.showModal('dvpopup-sendnewdietplan',null,null,{'screenColor':'#333333','screenOpacity':.6});" class="buttontext" ><img src="images/calorie_setup/suggest_by_nutritionist.jpg" alt=""></a></div>
			</div>
				<div class="DvFloat" style="padding:0px 0px 0px 0px; border-bottom:solid 1px #c5c5c5; text-align:left; display:none;">
          			<span style="font-size:13px; color:#87ac26">Lightly active</span>
                </div>
          </div>
          <div class="dvFloat" style="border-bottom:solid 0px #cdcdcd;padding-bottom:0px;" id="dvLunch">
				  <input type="hidden" value="Lunch" id="txtLunch" name="txtLunch" />
                  <input type="hidden" value="<?php echo $date;?>" id="txtLunchDate" name="txtLunchDate" />
                   <table style="text-transform:none; padding:8px 0;">
                    <tr>
                                <td style="color:#9acc01; width:233px; border:solid 0px red; text-transform: uppercase;">Lunch</td>
                                 <td style="width: 94px; border:solid 0px red; text-align:center;">Add qty</td>
                                <td style="width: 60px; border:solid 0px red; text-align:center;">Portion</td>
                                <td style="width: 92px; border:solid 0px red; text-align:center;">Calories</td>
                                <td style="width: 68px; border:solid 0px red; text-align:center;">Update</td>
                                <td style="width: 58px; border:solid 0px red; text-align:center;">Delete</td>
                               
                            </tr>
                    </table>

                 <iframe frameborder="0" id="ifLunch"  scrollbars="0"  onload="javascript:SetFrameHeight1();"  style="width:100%; border:solid 0px green;" scrolling="no"></iframe>
			</div>
		</div>
		<div id="tabs3a" class="calorie_tabcontent">
		  <div style="width:698px; border:solid 0px red;">
          	<div class="DvFloat" style="padding:20px 0px 10px 0px; border-bottom:solid 0px #c5c5c5">
			  <div style="float:left; text-align:left; width:306px;">
				<input type="text" value="" id="txtSnacks_Search" name="txtSnacks_Search" style="color:#999;width:300px; height:18px; background-image:url('<?php echo $strHostName?>/images/calorie_setup/search_icon.png'); background-repeat:no-repeat; background-position:98% 50%" placeholder="What did you have today ?" >
			  </div>
			  
                <div style="float:left; text-align:center; padding-left:16px; width: 123px;"> 
               		<a href="<?php echo $strHostName?>/page.php?dir=inbox/compose_nutritionist" class="cantfindfood" style="text-align: left; width: 123px;">Can't find food?<span></span></a>
               </div>
               
               <div style="float:left; text-align:left; padding-left:28px;"><a style="cursor: pointer;" target="_parent" onClick="javascript:SetScroll(); Popup.showModal('dvpopup-sendnewdietplan',null,null,{'screenColor':'#333333','screenOpacity':.6});" class="buttontext" ><img src="images/calorie_setup/suggest_by_nutritionist.jpg" alt=""></a></div>
			</div>
			<div class="DvFloat" style="padding:0px 0px 0px 0px; border-bottom:solid 0px #c5c5c5; text-align:left;"><span style="font-size:13px; color:#87ac26; display:none;">Moderately active</span></div>
            </div>
          <div class="dvFloat" style="border-bottom:solid 0px #cdcdcd;padding-bottom:0px;" id="dvSnacks">
				 <input type="hidden" value="Snacks" id="txtSnacks" name="txtSnacks" />
                 <input type="hidden" value="<?php echo $date;?>" id="txtSnacksDate" name="txtSnacksDate" />
                  <table style="text-transform:none; padding:8px 0;">
                    <tr>
                                <td style="color:#9acc01; width:233px; border:solid 0px red;">Snacks</td>
                                <td style="width: 94px; border:solid 0px red; text-align:center;">Add qty</td>
                                <td style="width: 60px; border:solid 0px red; text-align:center;">Portion</td>
                                <td style="width: 92px; border:solid 0px red; text-align:center;">Calories</td>
                                <td style="width: 68px; border:solid 0px red; text-align:center;">Update</td>
                                <td style="width: 58px; border:solid 0px red; text-align:center;">Delete</td>
                               
                            </tr>
                    </table>

                 <iframe frameborder="0" id="ifSnacks" scrollbars="0"  onload="javascript:SetFrameHeight2();"  style="width:100%; border:solid 0px blue;" width="100%" scrolling="no"></iframe>
			</div>
		</div>
		<div id="tabs4a" class="calorie_tabcontent">
		  <div style="width:698px; border:solid 0px red;">
          		<div class="DvFloat" style="padding: 20px 0px 10px 0px; border-bottom:solid 0px #c5c5c5">
			  <div style="float:left; text-align:left; width:306px;">
				<input type="text" value="" id="txtDinner_Search" name="txtDinner_Search" style="color:#999;width:300px; height:18px; background-image:url('<?php echo $strHostName?>/images/calorie_setup/search_icon.png'); background-repeat:no-repeat; background-position:98% 50%" placeholder="What did you have today ?" >
			  </div>
              	<div style="float:left; text-align:center; padding-left:16px; width: 123px;"> 
               		<a href="<?php echo $strHostName?>/page.php?dir=inbox/compose_nutritionist" class="cantfindfood" style="text-align:left; width: 123px;">Can't find food?<span></span></a>
               </div>
               
			  <div style="float:left; text-align:left; padding-left:28px;"><a style="cursor: pointer;" target="_parent" onClick="javascript:SetScroll(); Popup.showModal('dvpopup-sendnewdietplan',null,null,{'screenColor':'#333333','screenOpacity':.6});" class="buttontext" ><img src="images/calorie_setup/suggest_by_nutritionist.jpg" alt=""></a></div>
                
			</div>
			<div class="DvFloat" style="padding:0px 0px 0px 0px; border-bottom:solid 0px #c5c5c5; text-ali	gn:left;"><span style="font-size:13px; color:#87ac26; display:none;">Very active</span></div>
           </div>
          <div class="dvFloat" style="border-bottom:solid 0px #cdcdcd;padding-bottom:0px;" id="dvDinner">
				 <input type="hidden" value="Dinner" id="txtDinner" name="txtDinner" />
                 <input type="hidden" value="<?php echo $date;?>" id="txtDinnerDate" name="txtDinnerDate" />
                   <table style="text-transform:none; padding:8px 0;">
                    <tr>
                                <td style="color:#9acc01; width:233px; border:solid 0px red;">Dinner</td>
                                <td style="width: 94px; border:solid 0px red; text-align:center;">Add qty</td>
                                <td style="width: 60px; border:solid 0px red; text-align:center;">Portion</td>
                                <td style="width: 92px; border:solid 0px red; text-align:center;">Calories</td>
                                <td style="width: 68px; border:solid 0px red; text-align:center;">Update</td>
                                <td style="width: 58px; border:solid 0px red; text-align:center;">Delete</td>
                               
                            </tr>
                    </table>

                 <iframe frameborder="0" id="ifDinner" scrollbars="0"  onload="javascript:SetFrameHeight3();"  style="width:100%; border:solid 0px black;" width="100%" scrolling="no"></iframe>
			</div>
		</div>
	</div>
  </div>
 <?php
$query = "SELECT sum(energy*qty) as total_food_cal,sum(carbo*qty) as total_food_carb,sum(total_fat*qty) as total_food_fat,sum(protein*qty) as total_food_prot, sum(sodium*qty) as total_food_sod,sum(sugar*qty) as total_food_sugar FROM  tbl_daily_food where user_id=".$user_id." and date='".$date."'";
//echo $query ;
$result = mysql_query($query);							
if($result != "") {	
	$rowcount  = mysql_num_rows($result);
	if($rowcount > 0) {
		while($row = mysql_fetch_assoc($result)) {
			extract($row);
			
			if($total_food_cal=="")
			{
				$total_food_cal="0";
			}
			if($total_food_carb=="")
			{
				$total_food_carb="0";
			}
			if($total_food_fat=="")
			{
				$total_food_fat="0";
			}
			if($total_food_prot=="")
			{
				$total_food_prot="0";
			}
			if($total_food_sod=="")
			{
				$total_food_sod="0";
			}
			if($total_food_sugar=="")
			{
				$total_food_sugar="0";
			}
			
		}
	}
}

?>
                  <div class="DvFloat" style="padding:0px 0px 0px 0px; border-top:solid 0px #c5c5c5; margin-top:15px;">
  <div class="DvFloat">
  	<div class="DvFloat" style="text-align:center; background-color:#f0f0f0; padding:10px 0; color:#000; text-transform: uppercase;">Total of all Meals</div>
    <div style="background-image: url(.../../images/greyarrow_03.png); background-repeat: no-repeat; background-position: center bottom; width: 18px; height: 9px; float:left; border: solid 0px #0099CC; padding-left: 97.5%; margin-bottom: 10px;"></div>
  </div>
   <div class="DvFloat" style="text-align:center; background-color:#f0f0f0; padding-bottom:10px; margin-bottom: 40px;">
  <table cellpadding="0" cellspacing="0" style="width:100%;">
	<tr>
	  <td class="whitebox_Td" style="background-color:#f0f0f0;">CALORIES</td>
	  <td class="WhiteSpace_Td" style="background-color:#f0f0f0;"></td>
	  <td class="whitebox_Td" style="background-color:#f0f0f0;">CARBS</td>
	  <td class="WhiteSpace_Td" style="background-color:#f0f0f0;"></td>
	  <td class="whitebox_Td" style="background-color:#f0f0f0;">FAT</td>
	  <td class="WhiteSpace_Td" style="background-color:#f0f0f0;"></td>
	  <td class="whitebox_Td" style="background-color:#f0f0f0;">PROTEIN</td>
	  <td class="WhiteSpace_Td" style="background-color:#f0f0f0;"></td>
	  <td class="whitebox_Td" style="background-color:#f0f0f0;">SODIUM</td>
	  <td class="WhiteSpace_Td" style="background-color:#f0f0f0;"></td>
	  <td class="whitebox_Td" style="background-color:#f0f0f0;">SUGAR</td>
	  <!--<td class="WhiteSpace_Td" style="background-color:#f0f0f0;"></td>-->
	</tr>
	<tr>
	  <td class="Greybox_Td" id="DvTotalCal"> <?php echo round($total_food_cal,0);?></td>
	  <td class="WhiteSpace_Td" style="background-color:#f0f0f0;"></td>
	  <td class="Greybox_Td" id="DvTotalCarb"> <?php echo round($total_food_carb,0);?></td>
	  <td class="WhiteSpace_Td" style="background-color:#f0f0f0;"></td>
	  <td class="Greybox_Td" id="DvTotalFat"> <?php echo round($total_food_fat,0);?></td>
	  <td class="WhiteSpace_Td" style="background-color:#f0f0f0;"></td>
	  <td class="Greybox_Td" id="DvTotalProt"> <?php echo round($total_food_prot,0);?></td>
	  <td class="WhiteSpace_Td" style="background-color:#f0f0f0;"></td>
	  <td class="Greybox_Td" id="DvTotalSod"> <?php echo round($total_food_sod,0);?></td>
	  <td class="WhiteSpace_Td" style="background-color:#f0f0f0;"></td>
	  <td class="Greybox_Td" id="DvTotalSugar"> <?php echo round($total_food_sugar,0);?></td>
	  <!--<td class="WhiteSpace_Td" style="background-color:#f0f0f0;"></td>-->
	</tr>
 
	
  </table>
  </div>
</div>


</div>

<script>
	Retrive_Cal_BreakFast();
	Retrive_Cal_Lunch();
	Retrive_Cal_Snacks();
	Retrive_Cal_Dinner();
</script>



<div id="dvpopup-sendnewdietplan" style="text-align: center; width: 623px; display: none; position:absoulte; margin-top:250px; margin-left:350px; background-color:#fff; padding:10px;">
      <!--<table cellpadding="0" cellspacing="0" border="0" width="623px" align="center">
        <tr>
          <td style="text-align:right; border:solid 0px red; float:right;"><div class="DvFloat">
              <div style="margin: 5px 0px 0px -30px; position: absolute; text-align:right; float: right"> <a href="javascript:Popup.hide('dvpopup-sendnewdietplan<?php echo $get_array['id']?>');" target="_parent" style="text-decoration: none; color: #fff; border: solid 0px #993300;"> <img src="images/close.png" alt="" title="" border="0" /> </a> </div>
            </div></td>
        </tr>
        <tr>
          <td valign="top" align="center" style="padding: 10px 10px 10px 10px;background-color:#FFFFFF"><div style="width:100%; float: left; border:solid 0px red;">-->
            
             <div style="margin: 5px 0px 0px 600px; position: absolute; text-align:right; float: right"> <a href="javascript:Popup.hide('dvpopup-sendnewdietplan');" target="_parent" style="text-decoration: none; color: #fff; border: solid 0px #993300;"> <img src="images/close.png" alt="" title="" border="0" /> </a> 
            </div>


			  <?php
			  $diet_plan_id="0";
					$query = "SELECT * FROM  ".Diet_Food." where isactive=1 and isdeleted=0 and patient_id=".$user_id." and selected_date='".$today_date."' limit 1";
				//echo $query;
					$result = mysql_query($query);							
					if($result != "") {	
						$rowcount  = mysql_num_rows($result);
						if($rowcount ==0) {
							$query = "SELECT * FROM  ".Diet_Food." where isactive=1 and isdeleted=0 and patient_id=".$user_id." order by id desc limit 1";
							$result = mysql_query($query);
							if($result != "") {	
								$rowcount  = mysql_num_rows($result);
							}

						}
						if($rowcount > 0) {
							while($row = mysql_fetch_assoc($result)) {
								$today_date=$row['selected_date'];
								$diet_plan_id=$row['diet_plan_id'];
							}
						}
					}

					$message_diet=GetValue("select message as col from tbl_diet_plan where id=".$diet_plan_id,"col")
			  ?>
              <div class="DvFloat f_grey" style="border-bottom: solid 1px #cccccc; font-size: 13px; text-align: left;"> <span style="font-weight: bold;">Sent on :</span> <?php echo date('d-M-Y',strtotime($today_date))?> &nbsp;&nbsp; </div>
              <div class="DvFloat f_grey" style="border-bottom: solid 1px #cccccc; font-size: 13px; text-align: left; padding-bottom: 5px; padding-top:10px;">
                <div class="DvFloat">
                  <div class="DvFloat f_green" style="font-weight: bold; font-size: 13px; padding-bottom: 5px;">Food</div>
                  <div class="DvFloat">
                    <div class="nutri_popup_box1 f_grey" style="font-weight: bold; width:150px;">Time</div>
                    <div class="nutri_popup_box1 f_grey" style="font-weight: bold; width:150px;">Food</div>
                    <div class="nutri_popup_box3 f_grey" style="font-weight: bold;">Portion</div>
                    <div class="nutri_popup_box3 f_grey" style="font-weight: bold;">Quantity</div>
                    <div class="nutri_popup_box3 f_grey" style="font-weight: bold;">Calories</div>
                  </div>
                  
                   <?php  
						$query = "SELECT * FROM  ".Diet_Food." where isactive=1 and isdeleted=0 and patient_id=".$user_id." and selected_date='".$today_date."' order by type,time";
						//echo $query;
						$total_cal_1="0";
							$result = mysql_query($query);							
							if($result != "") {	
								$rowcount  = mysql_num_rows($result);
								if($rowcount ==0) {
									$query = "SELECT * FROM  ".Diet_Food." where isactive=1 and isdeleted=0 and patient_id=".$user_id." order by id desc limit 1";
									$result = mysql_query($query);
									if($result != "") {	
										$rowcount  = mysql_num_rows($result);
									}

								}
								if($rowcount > 0) {
									while($row = mysql_fetch_assoc($result)) {
										extract($row);
										$time=$row['time'];
										$qty=$row['qty'];
										$type=$row['type'];
										$receipe_id=$row['receipe_id'];
										$total_cal=$row['total_cal'];
										$portion=$row['portion'];
										$receipe_name=GetValue("select name as col from tbl_recipe where id=".$receipe_id, "col");
							//Alert ($get_array['md_id']);
						?>
                  <div class="DvFloat" style="padding-top: 3px;">
                    <div class="nutri_popup_box1 f_grey" style=" width:150px;">
                      <div class="DvFloat">
                        <div style="float:left; padding:0px 5px 0px 0px"><?php echo $time;?> - <?php echo $type;?> </div>
                      
                      </div>
                    </div>
                    <div class="nutri_popup_box1 f_grey" style="width:150px;"> <?php echo $receipe_name;?> </div>
                    <div class="nutri_popup_box3 f_grey"> <?php echo $portion;?> </div>
                    <div class="nutri_popup_box3 f_grey"> <?php echo $qty;?> </div>
                    <div class="nutri_popup_box3 f_grey"> <?php echo $total_cal;?> </div>
					<?php $total_cal_1=$total_cal_1+$row['total_cal'];?>
                  </div>
				
				<?php } } else { ?>
                	<div class="DvFloat" style="color:red; padding:20px 0; text-align:center; font-size:11px;">Sorry! No diet plan is suggested by Nutritionist.</div>
                <?php }} ?>                  
                  
                  <div class="DvFloat" style="padding-top:15px;">
                    <div class="nutri_popup_box1 f_grey">
                      <div class="DvFloat">
                        <div style="float:left; padding:0px 5px 0px 0px">&nbsp; </div>
                      
                      </div>
                    </div>
                    <div class="nutri_popup_box3 f_grey" style="width:362px; text-align:right;"> Total Consumed Calories : </div>
                    <div class="nutri_popup_box3 f_grey"> <?php echo 
						$total_cal_1?> 
                        cal</div>
                  </div>
                  
                  
                </div>
              </div>
              <div class="DvFloat f_grey" style="border-bottom: solid 0px #cccccc; font-size: 13px; text-align: left; padding-top: 8px;">
                <div class="DvFloat">
                  <div class="DvFloat f_green" style="font-weight: bold; font-size: 13px; padding-bottom: 5px;">Exercise</div>
                  <div class="DvFloat">
                    <div class="nutri_popup_box1 f_grey" style="font-weight: bold;">Time</div>
                     <div class="nutri_popup_box2 f_grey" style="font-weight: bold; width:160px;">Exercise</div>
                    <div class="nutri_popup_box3 f_grey" style="font-weight: bold; width:90px;">Total Mins</div>
                    <div class="nutri_popup_box3 f_grey" style="font-weight: bold; width:100px;">Calories</div>
                    <div class="nutri_popup_box3 f_grey" style="font-weight: bold; width:80px; display:none;">Duration</div>
                  </div>
                   <?php  
				   $total_cal_exe_1="0";
						$query = "SELECT * FROM  ".Diet_Exercise." where isactive=1 and isdeleted=0 and patient_id=".$user_id." and selected_date='".$today_date."' and time_period='Morning'";

						$query .= "Union All SELECT * FROM  ".Diet_Exercise." where isactive=1 and isdeleted=0 and patient_id=".$user_id." and selected_date='".$today_date."' and time_period='Afternoon'";

						$query .= "Union All SELECT * FROM  ".Diet_Exercise." where isactive=1 and isdeleted=0 and patient_id=".$user_id." and selected_date='".$today_date."' and time_period='Evening'";
					///	echo $query;
							$result = mysql_query($query);							
							if($result != "") {	
								$rowcount  = mysql_num_rows($result);
								if($rowcount > 0) {
									while($row = mysql_fetch_assoc($result)) {
										extract($row);
										$time=$row['time'];
										$time_period=$row['time_period'];
										$duration=$row['duration'];
										$cal=$row['cal'];
										$min=$row['min'];
										if($cal=="")
										{
											$cal="0";
										}
										
										if($min=="")
										{
											$min="0";
										}
										
										$total_cal_exe=($cal*$min);
										$exercise_id=$row['exercise_id'];
										$total_cal_exe_1=$total_cal_exe_1+$total_cal_exe;
										$exercise_name=GetValue("select name as col from tbl_exercise where id=".$exercise_id, "col");
							//Alert ($get_array['md_id']);
						?>
                  <div class="DvFloat" style="padding-top: 3px;">
                    <div class="nutri_popup_box1 f_grey">
                      <div class="DvFloat">
                        <div style="float:left; padding:0px 5px 0px 0px"> <?php echo $time_period;?></div>
                       
                      </div>
                    </div>
                    <div class="nutri_popup_box2 f_grey" style="width:160px;">  <?php echo $exercise_name;?> </div>
                    <div class="nutri_popup_box3 f_grey" style=" text-align: center; width:90px;">
                      <div class="DvFloat"> <?php echo $min;?></div>
                    </div>
                    <div class="nutri_popup_box3 f_grey" style="text-align: center; width:100px;">
                      <div class="DvFloat"> <?php echo $total_cal_exe;?>
                      	
                      </div>
                    </div>
                    <div class="nutri_popup_box3 f_grey" style=" text-align: center; width:80px; display:none;">
                      <div class="DvFloat"> <?php echo $duration;?></div>
                    </div>
                  </div>
                 
				<?php } } else { ?>
                	<div class="DvFloat" style="color:red; padding:20px 0; text-align:center; font-size:11px;">Sorry! No exercise plan is suggested by Nutritionist.</div>
                <?php }} ?>    
                <div class="DvFloat" style="padding-top:15px;">
                    <div class="nutri_popup_box1 f_grey">
                      <div class="DvFloat">
                        <div style="float:left; padding:0px 5px 0px 0px">&nbsp; </div>
                      
                      </div>
                    </div>
                     <div class="nutri_popup_box3 f_grey" style="width:362px; text-align:right;"> Total Burnt Calories : </div>
                    <div class="nutri_popup_box3 f_grey"> <?php echo 
						$total_cal_exe_1?> 
                        cal</div>
                  </div>
                </div>
              </div>
			   <div class="DvFloat f_grey" style="border:solid 0px red; text-align:left; padding:10px 0; font-weight:bold;">
            	<span class="f_green">Message :</span> <?php echo str_replace("\\","",$message_diet);?> 
            </div>
            </div>
            



<script>

</script>
