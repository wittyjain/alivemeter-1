<script>
function DailyActivities(id)
{
	document.getElementById("Sedentary").className="";
	document.getElementById("Lightly_Active").className="";
	document.getElementById("Moderately_Active").className="";
	document.getElementById("Very_Active").className="";
	
	document.getElementById("Sedentary1").style.display="none";
	document.getElementById("Lightlyactive1").style.display="none";
	document.getElementById("Moderatelyactive1").style.display="none";
	document.getElementById("Veryactive1").style.display="none";
	
	if(id=="1.25")
	{
		document.getElementById("txtDailyActivity").value=id;
		document.getElementById("Sedentary").className="selected";
		document.getElementById("Sedentary1").style.display="";
	}
	else if(id=="1.35")
	{
		document.getElementById("txtDailyActivity").value=id;
		document.getElementById("Lightly_Active").className="selected";
		document.getElementById("Lightlyactive1").style.display="";
		
	}
	else if(id=="1.45")
	{
		document.getElementById("txtDailyActivity").value=id;
		document.getElementById("Moderately_Active").className="selected";
		document.getElementById("Moderatelyactive1").style.display="";
	}
	else if(id=="1.55")
	{
		document.getElementById("txtDailyActivity").value=id;
		document.getElementById("Very_Active").className="selected";
		document.getElementById("Veryactive1").style.display="";
	}
}

</script>
<?php $iDay="0";$iMonth="0";$iYear="0"; $retrive_Array=array(); $calorie_id="0"; $detail_id="0"; $retrive_Array1=array(); $current_waist=""; 
$current_hips=""; $current_arm=""; $goal_waist=""; $goal_hips=""; $goal_arms=""; $current_weight=""; $current_height=""; $BDay=""; $BMonth="";
$BYear=""; $gender=""; $target_goal=""; $daily_activity=""; $plan_week=""; $plan_hour=""; $goal_wgt="";
?>
<?php
	if(isset($_SESSION['UserID']))
	{
		$user_id=$_SESSION['UserID'];
	}
	else
	{
		$user_id="0";
	}
	
	
$current_weight=GetValue("select weight as col from tbl_users where user_id=".$user_id, "col");
	$current_height=GetValue("select height as col from tbl_users where user_id=".$user_id, "col");
	$BDay=GetValue("select dob_day as col from tbl_users where user_id=".$user_id, "col");
	$BMonth=GetValue("select dob_month as col from tbl_users where user_id=".$user_id, "col");
	$BYear=GetValue("select dob_year as col from tbl_users where user_id=".$user_id, "col");
	//Alert($BYear);
	
	$gender=GetValue("select gender as col from tbl_users where user_id=".$user_id, "col");
	$height_type=GetValue("select height_type as col from tbl_users where user_id=".$user_id, "col");
	
	//Alert ($height_type);
	
$retrive_Array=$get_retrive->Get_Calorie(0,$user_id);
	while($data_values = mysql_fetch_array( $retrive_Array )){
		//$retrive_Array1[]=$data_values;
		$goal_wgt=$data_values['goal_wgt'];
		$target_goal=$data_values['target_goal'];
		$daily_activity=$data_values['daily_activity'];
		$plan_week=$data_values['plan_week'];
		$plan_hour=$data_values['plan_hour'];
		$calorie_id=$data_values['calorie_id'];
		$detail_id=GetValue("select id as col from tbl_calorie_det where user_id=".$user_id." and ismain=1 and parent_id=".$calorie_id, "col");
	}
		
if($calorie_id>0){
		$retrive_Array1=$get_retrive->Get_Calorie_Details($detail_id,$user_id);
		while($data_values1 = mysql_fetch_array( $retrive_Array1 )){
			//$retrive_Array1[]=$data_values;
			$current_waist=$data_values1['current_waist'];
			$current_hips=$data_values1['current_hips'];
			$current_arm=$data_values1['current_arm'];
			$goal_waist=$data_values1['goal_waist'];
			$goal_hips=$data_values1['goal_hips'];
			$goal_arms=$data_values1['goal_arms'];
		}
	}
	
	
$query = "SELECT * from ".Calorie." where isactive=1 and isdeleted=0 and user_id=$user_id order by sort desc limit 1";
$result = mysql_query($query);
if($result != "") {
	$rowcount  = mysql_num_rows($result);
	if($rowcount > 0) {
		while($row = mysql_fetch_assoc($result)) {
			extract($row);
			 
			
		//$Net_Calories_Consumed_Per_Day=$row["Net_Calories_Consumed_Per_Day"];
		//$Crab_Grams=$row["Crab_Grams"];
		//$Fat_Grams=$row["Fat_Grams"];
		//$Protein_Grams=$row["Protein_Grams"];
		//$Net_Calories_Consumed=$row["Net_Calories_Consumed"];
		//$Calorie_per_day=$row["Calorie_per_day"];
		//$ProectWeight_Loss=$row["ProectWeight_Loss"];
		//$Burned_Calories=$row["Burned_Calories"];
		
		//$Net_Calories_Consumed_Per_Day=$data["Net_Calories_Consumed_Per_Day"];
		
		
		//Alert ($Burned_Calories);			
		}			
	}
}
	
?>
<div style="padding:0px 0px 35px 0px">
            <div class="dvFloat formpadding"> <span class="calorie_green_title"> Update Your Diet Profile </span><br><br>
              <span style="font-weight:bold; color:#666666; font-size:13px;">To help us update your personalized fitness goals, please update your profile by making any changes to the values below.</span> </div>
            <div class="dvFloat">
              <div style="margin:0px auto; width:450px; border:solid 0px red; float:left">
                <div class="dvFloat formpadding">
                  <div class="formlabel">
                    <label class="formlabel">Current Weight </label>
                  </div>
                  <div class="formcontrol">
                    <input type="text" name="calorie_txt_Current_Weight" id="calorie_txt_Current_Weight" value="<?php echo $current_weight;?>"  style="width:80px;text-align:center; color:#bbb9b9;" readonly="readonly" placeholder="<?php echo $current_weight;?>"/>
                    <input type="hidden" value="<?php echo $calorie_id;?>" id="txtCalorie" name="txtCalorie"/>
                     <input type="hidden" value="1" id="txtIsMain" name="txtIsMain"/>
                    
                    &nbsp;
                    <div style="padding:10px 10px 0px 10px; float:left;color: #a8a8a8;">KG</div>
                  </div>
                </div>
                <div class="dvFloat formpadding">
                  <div class="formlabel">
                    <label class="formlabel"><span class="calorie_green_s_title">What is your goal?</span> <span class="redtxt">*</span> </label>
                  </div>
                  <div class="formcontrol">
                    <select id="calorie_cmb_goal" name="calorie_cmb_goal" tabindex="1" class="existing_event" style="width: 200px;">
					  <option value="0" <?php if($target_goal=="0"){ echo "selected";}?>>Choose Your Goal</option>
                      <option value="7700" <?php if($target_goal=="7700"){ echo "selected";}?>>Lose 1 kilogram per week</option>
                      <option value="5775" <?php if($target_goal=="5775"){ echo "selected";}?>>Lose 0.75 kilogram per week</option>
                      <option value="3850" <?php if($target_goal=="3850"){ echo "selected";}?>>Lose 0.5 kilogram per week</option>
                      <option value="1925" <?php if($target_goal=="1925"){ echo "selected";}?>>Lose 0.25 kilogram per week</option>
                      <option value="11000" <?php if($target_goal=="11000"){ echo "selected";}?>>Maintain your current weight</option>
					  <option value="77001" <?php if($target_goal=="77001"){ echo "selected";}?>>gain 1 kilogram per week</option>
                      <option value="57751" <?php if($target_goal=="57751"){ echo "selected";}?>>gain 0.75 kilogram per week</option>
                      <option value="38501" <?php if($target_goal=="38501"){ echo "selected";}?>>gain 0.5 kilogram per week</option>
                      <option value="19251" <?php if($target_goal=="19251"){ echo "selected";}?>>gain 0.25 kilogram per week</option>
					  
                    </select>
                  </div>
                </div>
                <div class="dvFloat formpadding">
                  <div class="formlabel">
                    <label class="formlabel">Height</label>
                  </div>
                  <div class="formcontrol">
                    <input type="text" name="calorie_txt_Height" id="calorie_txt_Height" value="<?php echo $current_height;?>" disabled="disabled"  style="width:80px; text-align:center; color:#bbb9b9;"/>
                   	
<div style="padding:5px 3px 0px 0px; float:left;color: #666; background-color:#fff;margin:10px 10px 0px 10px; font-size:11px; width:px;"><div style="margin-top:-5px; float:left"><input type="radio" style="background:none; border:solid 0px red" name="txtHeightType" id="txtHeightTypeCM" <?php if($height_type=="CM"){ echo "checked";}?> disabled="disabled"></div> CM</div>                   
 <div style="padding:5px 3px 0px 0px; float:left;color: #666; background-color:#fff;margin:10px 0px 0px 0px; font-size:11px; width:px;"><div style="margin-top:-5px; float:left"><input type="radio" style="background:none; border:solid 0px red" name="txtHeightType" id="txtHeightTypeFT" <?php if($height_type=="FT"){ echo "checked";}?> disabled="disabled"></div> FT</div>
                  </div>
                </div>
                <div class="dvFloat formpadding">
                  <div class="formlabel">
                    <label class="formlabel">Gender</label>
                  </div>
                  <div class="formcontrol">
                    <input type="radio" id="calorie_Gender_M" name="calorie_Gender" value="Male" <?php if($gender=="Male"){ echo "checked";}?> disabled="disabled">
                    <label for="Male">Male</label>
                    &nbsp;&nbsp;
                    <input type="radio" id="calorie_Gender_F" name="calorie_Gender" value="Female" <?php if($gender=="Female"){ echo "checked";}?> disabled="disabled">
                    <label for="Female">Female</label>
                    &nbsp;&nbsp; </div>
                </div>
                <div class="dvFloat formpadding">
                  <div class="formlabel">
                    <label class="formlabel">Date of Birth</label>
                  </div>
                  <div class="formcontrol">
                    <div class="dvFloat">
                      <div style="float:left; padding:0px 15px 0px 0px">
                       <input type="text" id="calorie_cmb_Day"name="calorie_cmb_Day"  style="width: 50px; height:20px; margin-right:5px; color:#bbb9b9;" disabled="disabled" value="<?php echo $BDay?>"/>
                        <input type="text" id="calorie_cmb_Month"name="calorie_cmb_Month"  style="width: 50px; height:20px; margin-right:5px; color:#bbb9b9;" disabled="disabled" value="<?php echo $BMonth?>"/>
                         <input type="text" id="calorie_cmb_Year"name="calorie_cmb_Year" style="width: 50px; height:20px; margin-right:5px; color:#bbb9b9;" disabled="disabled" value="<?php echo $BYear?>"/>
                       
                       
                       
                      </div>
                      
                      
                    </div>
                  </div>
                </div>
              </div>
              <div style="margin:0px auto; width:450px; border:solid 0px red; float:left">
                <div class="dvFloat formpadding">
                  <div class="formlabel">
                    <label class="formlabel">Goal Weight <span class="redtxt">*</span>  </label> 
                  </div>
                  <div class="formcontrol">
                    <input type="text" name="calorie_txt_Goal_Weight" id="calorie_txt_Goal_Weight" value="<?php echo $goal_wgt;?>"  style="width:80px; text-align:center"/>
                    <div style="padding:10px 0px 0px 10px; float:left;color: #a8a8a8;">KG</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="dvFloat" style="border-top:solid 1px #c5c5c5; margin:20px 0px">
              <div style="margin:0px auto; width:450px; border:solid 0px red; float:left">
                <div class="dvFloat formpadding">
                  <div class="formlabel">
                    <label class="formlabel">Current Waist</label>
                  </div>
                  <div class="formcontrol">
                    <input type="text" name="calorie_txt_Current_Waist" id="calorie_txt_Current_Waist" value="<?php echo $current_waist;?>"  style="width:80px; text-align:center"/>
                    &nbsp;
                    <div style="padding:10px 10px 0px 10px; float:left;color: #a8a8a8;">CM</div>
                  </div>
                </div>
                <div class="dvFloat formpadding">
                  <div class="formlabel">
                    <label class="formlabel">Current Hips</label>
                  </div>
                  <div class="formcontrol">
                    <input type="text" name="calorie_txt_Current_Hips" id="calorie_txt_Current_Hips" value="<?php echo $current_hips;?>"  style="width:80px;text-align:center"/>
                    &nbsp;
                    <div style="padding:10px 10px 0px 10px; float:left;color: #a8a8a8;">CM</div>
                  </div>
                </div>
                <div class="dvFloat formpadding">
                  <div class="formlabel">
                    <label class="formlabel">Current Arms </label>
                  </div>
                  <div class="formcontrol">
                    <input type="text" name="calorie_txt_Current_Arms" id="calorie_txt_Current_Arms" value="<?php echo $current_arm;?>"  style="width:80px;text-align:center"/>
                    &nbsp;
                    <div style="padding:10px 10px 0px 10px; float:left;color: #a8a8a8;">CM</div>
                  </div>
                </div>
              </div>
              <div style="margin:0px auto; width:450px; border:solid 0px red; float:left">
                <div class="dvFloat formpadding">
                  <div class="formlabel">
                    <label class="formlabel">Goal Waist</label>
                  </div>
                  <div class="formcontrol">
                    <input type="text" name="calorie_txt_Goal_Waist" id="calorie_txt_Goal_Waist" value="<?php echo $goal_waist;?>"  style="width:80px;text-align:center"/>
                    &nbsp;
                    <div style="padding:10px 10px 0px 10px; float:left;color: #a8a8a8;">CM</div>
                  </div>
                </div>
                <div class="dvFloat formpadding">
                  <div class="formlabel">
                    <label class="formlabel">Goal Hips </label>
                  </div>
                  <div class="formcontrol">
                    <input type="text" name="calorie_txt_Goal_Hips" id="calorie_txt_Goal_Hips" value="<?php echo $goal_hips;?>"  style="width:80px;text-align:center"/>
                    &nbsp;
                    <div style="padding:10px 10px 0px 10px; float:left;color: #a8a8a8;">CM</div>
                  </div>
                </div>
                <div class="dvFloat formpadding">
                  <div class="formlabel">
                    <label class="formlabel">Goal Arms</label>
                  </div>
                  <div class="formcontrol">
                    <input type="text" name="calorie_txt_Goal_Arms" id="calorie_txt_Goal_Arms" value="<?php echo $goal_arms;?>"  style="width:80px;text-align:center"/>
                    &nbsp;
                    <div style="padding:10px 10px 0px 10px; float:left;color: #a8a8a8;">CM</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="dvFloat" style="border-top:solid 1px #c5c5c5; margin:20px 0px">
              <div class="dvFloat formpadding" style="padding-bottom:0px;"> <span class="calorie_green_s_title">How would you describe your normal daily activities? </span><span class="redtxt">*</span>  </div>
              <div style="margin:0px auto; width:500px; border:solid 0px red; float:left">
                <div class="DvFloat">
                  <div class="dvWrapper">
                    <div class="TabDv">
                      <div  style="padding:10px 0px;">
                        <ul class="calorie_tab" id="DvActivites">
                          <li><a rel="tabs1" style="cursor:pointer;" onclick="javascript:DailyActivities('1.25');" id="Sedentary" <?php if($daily_activity=="1.25"){ echo "class=selected";} ?>>Sedentary</a></li>
                          <li><a rel="tabs2" style="cursor:pointer;" onclick="javascript:DailyActivities('1.35');" id="Lightly_Active" <?php if($daily_activity=="1.35"){ echo "class=selected";}?>>Lightly active</a></li>
                          <li><a rel="tabs3" style="cursor:pointer;" onclick="javascript:DailyActivities('1.45');" id="Moderately_Active" <?php if($daily_activity=="1.45"){ echo "class=selected";}?>>Moderately active</a></li>
                          <li><a rel="tabs4" style="cursor:pointer;" onclick="javascript:DailyActivities('1.55');" id="Very_Active" <?php if($daily_activity=="1.55"){ echo "class=selected";}?>>Very active</a></li>
                        </ul>
                        <input type="hidden" name="txtDailyActivity" id="txtDailyActivity" value="<?php echo $daily_activity;?>"/>
                      </div>
                     
                       
                        <div id="Sedentary1" class="" style="display:<?php if($daily_activity=="1.25") { echo "";} else { echo "none";} ?>;">
                          <div style="width:980px; border:solid 0px red;padding:10px; float:left;">Spend most of the day sitting (e.g. bank teller, desk job)</div>
                        </div>
                       
                        <div id="Lightlyactive1" style="display:<?php if($daily_activity=="1.35") { echo "";} else {echo "none";} ?>;" >
                          <div style="width:980px; border:solid 0px red;padding:10px; float:left;">Spend a good part of the day on your feet (e.g. teacher, salesman)</div>
                        </div>
                        <div id="Moderatelyactive1" style="display:<?php if($daily_activity=="1.45") { echo "";} else {echo "none";} ?>;">
                          <div style="width:980px; border:solid 0px red;padding:10px; float:left">Spend a good part of the day some physical activity (e.g. bike, waitress, mailman)</div>
                        </div>
                        <div id="Veryactive1" style="display:<?php if($daily_activity=="1.55") { echo "";} else { echo "none";} ?>";>
                          <div style="width:980px; border:solid 0px red;padding:10px; float:left;">Spend a good part of the day heavy physical activity (e.g. bike, messenger, carpenter)</div>
                        </div>
                  
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="dvFloat" style="border-top:solid 1px #c5c5c5; margin:20px 0px">
              <div class="dvFloat formpadding" style="padding:10px 0px"> <span class="calorie_green_s_title">How many times a week do you plan on exercising? </span><span class="redtxt">*</span> </div>
              <div style="margin:0px auto; width:250px; border:solid 0px red; float:left">
                <div class="dvFloat">
                  <div class="formlabel" style="float:left; width:205px; ">
        <select id="calorie_cmb_Year_day_sitting" name="calorie_cmb_Year_day_sitting"  tabindex="1" class="existing_event" style="width: 35px;  border:solid 1px red;">
                      <option value="0">Select</option>
                      <?php for($iWorkOut=1;$iWorkOut < 11;$iWorkOut++){ ?>
						<option value="<?php echo $iWorkOut?>"  <?php if($plan_week==$iWorkOut){ echo "selected";}?>><?php echo $iWorkOut?></option>
					 <?php } ?>

                    </select>	
                    <div style="padding:5px 10px 0px 10px; float:left;color: #a8a8a8;">workouts / week </div>
                  </div>
                </div>
              </div>
              <div style="margin:0px auto; width:250px; border:solid 0px red; float:left">
                <div class="dvFloat ">
                  <div class="formlabel" style="float:left; width:205px">
                    <input type="text" name="txt_plan_hour" id="txt_plan_hour" value="<?php echo $plan_hour?>"  style="width:80px;"/>
                    <div style="padding:5px 10px 0px 10px; float:left;color: #a8a8a8;">min. / workout</div>
                  </div>
                </div>
              </div>
            </div>
            
            
            
             <div class="dvFloat" style="padding-bottom:40px; padding-top:20px;"><div style=" width:155px; height:30px; float:left;padding-right:10px;"><a onclick="javascript:Calorie_Ins(this);" style="cursor:pointer;" class="button4">Update Profile</a></div>
          </div>
        </div>        