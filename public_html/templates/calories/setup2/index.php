<script type="text/javascript" src="<?php echo $strHostName?>/js/health_steup_validation.js"></script>
<script type="text/javascript" src="<?php echo $strHostName?>/js/health_steup_insert_retrive.js"></script>
<?php include "includes/dashboard_top.inc.php";?>

<?php
$Net_Calories_Consumed_Per_Day=""; $Crab_Grams=""; $Fat_Grams=""; $Protein_Grams=""; $Net_Calories_Consumed=""; $Calorie_per_day="";$kg_type="";
$ProectWeight_Loss=""; $Burned_Calories=""; $Hors_Day=""; $Workout_Miunt="";


/*$Your_Gold="5775";
$Curr_Weight="75";
$Curr_Height_Type="Inch";
$Curr_Height_1="5.5";
$Curr_Height="166";

if($Curr_Height_Type=="Inch")
{	
	$Curr_Height2=explode(".",$Curr_Height_1);	
	if(isset($Curr_Height2[0]) && isset($Curr_Height2[1]))
	{
		$Curr_Height= convert_to_cm($Curr_Height2[0],$Curr_Height2[1]);
	}
	else
	{
		$Curr_Height= convert_to_cm($Curr_Height2[0],0);
	}
}
$Age="30";
$Activity_Level="1.35";	
$Daily_Calorie="0";
$Gender="Female";
$Maintaince="0";
$Calorie_per_day="850";
$Net_Calories_Consumed="0";
$Net_Calories_Consumed1="0";
$Hors_Day="3";
$Workout_Miunt="60";

//Alert($Curr_Weight);
//Alert($Curr_Height);
//Alert($Age);
if($Gender=="Male")
{
	$Daily_Calorie=(9.99*$Curr_Weight)+(6.25*$Curr_Height)-(4.92*$Age)+5;
	$Daily_Calorie=round($Daily_Calorie);
}
if($Gender=="Female")
{
	$Daily_Calorie=((9.99*$Curr_Weight)+(6.25*$Curr_Height)-(4.92*$Age)-161);
	$Daily_Calorie=round($Daily_Calorie);
}

	echo $Daily_Calorie."<br/>";

$Maintaince=$Daily_Calorie*$Activity_Level;
$Maintaince=round($Maintaince);	
//Alert($Maintaince);
$Net_Calories_Consumed_Per_Day=$Maintaince;

$Net_Calories_Consumed=$Maintaince-$Calorie_per_day;
//Alert($Maintaince);
//Alert($Calorie_per_day);
$Net_Calories_Consumed1=$Net_Calories_Consumed;
if($Net_Calories_Consumed < 1200)
{
	$Net_Calories_Consumed=1200;
	$Net_Calories_Consumed1= $Maintaince-1200;

}

echo $Net_Calories_Consumed1."<br/>";
//Alert($Calorie_per_day);

$ProectWeight_Loss=($Calorie_per_day*7)/7700;

$ProectWeight_Loss=$ProectWeight_Loss*1000;

$ProectWeight_Loss=round($ProectWeight_Loss);

echo $ProectWeight_Loss."<br/>";

if($ProectWeight_Loss > 775){$ProectWeight_Loss=800;}else{$ProectWeight_Loss=700;}

$Enter_Caloric_Godl="1210";$Fat="30";$Crabs="55";$Protein="15";

$Fat_Calories=($Fat/100)*$Enter_Caloric_Godl;

$Crab_Calories=($Crabs/100)*$Enter_Caloric_Godl;

$Protein_Calories=($Protein/100)*$Enter_Caloric_Godl;

$Fat_Calories=round($Fat_Calories);$Crab_Calories=round($Crab_Calories);$Protein_Calories=round($Protein_Calories);


$Fat_Grams=$Fat_Calories/9;

$Crab_Grams=$Crab_Calories/4;

$Protein_Grams=$Protein_Calories/4;

$Fat_Grams=round($Fat_Grams);$Crab_Grams=round($Crab_Grams);$Protein_Grams=round($Protein_Grams);


$Burned_Calories=($Curr_Weight*4.63*($Hors_Day*$Workout_Miunt)/60);


 function convert_to_cm($feet, $inches = 0) {
    $inches = ($feet * 12) + $inches;
    return (int) round($inches / 0.393701);
}


function convert_to_inches($cm) {
    $inches = round($cm * 0.393701);
    $result = [
        'ft' => intval($inches / 12),
        'in' => $inches % 12,
    ];
    return $result;
}
*/
if(isset($_SESSION['UserID']))
	{
		$user_id=$_SESSION['UserID'];
	}
	else
	{
		$user_id="0";
	}

$query = "SELECT * from ".Calorie_Consumed." where user_id=$user_id limit 1";
$result = mysql_query($query);
if($result != "") {
	$rowcount  = mysql_num_rows($result);
	if($rowcount > 0) {
		while($row = mysql_fetch_assoc($result)) {
			extract($row);
			 
			$Net_Calories_Consumed_Per_Day=$row["calorie_consumed_day"];
			$Crab_Grams=$row["carbs"];
			$Fat_Grams=$row["fat"];
			$Protein_Grams=$row["protein"];
			$Net_Calories_Consumed=$row["net_calorie_consumed"];
			$Calorie_per_day=$row["daily_calorie"];
			$ProectWeight_Loss=$row["projected_weight_loss"];
			$Burned_Calories=$row["calories_burned"];
			$Hors_Day=$row["minutes"];
			$Workout_Miunt=$row["workouts"];
			$kg_type=$row["kg_type"];

			if($kg_type=="maintain")
			{
				$Net_Calories_Consumed=$Net_Calories_Consumed_Per_Day;
			}
			else
			{
				 
				$last_word_end = strlen($Net_Calories_Consumed) - 1;
				$last_word_end = substr($Net_Calories_Consumed,$last_word_end, 1);
				
				if($last_word_end  > 0)
				{
					$last_word_end =10-$last_word_end;					
					$Net_Calories_Consumed=$Net_Calories_Consumed+$last_word_end;
				}
			}	


			$last_word_end = strlen($Burned_Calories) - 1;
			$last_word_end = substr($Burned_Calories,$last_word_end, 1);
			
			if($last_word_end  > 0)
			{
				$last_word_end =10-$last_word_end;					
				$Burned_Calories=$Burned_Calories+$last_word_end;
			}
		}
	}
}
$target_goal=GetValue("SELECT calorie_consumed_day as col FROM  ".Calorie_Consumed." where user_id=".$_SESSION['UserID']."", "col"); 
if($target_goal=="")
{
	$target_goal="0";
}
 ?>
<section>
  <div class="cal_full_size">
    <div class="cal_12 m_outo">
     <?php include "includes/dashboard_links.inc.php";?>
      <div class="dvFloat">
        <div class="dvWrapper">
          <div style="padding:35px 0px 35px 0px">
            <div class="health_dashboard_div_left">
             	<?php include "includes/calorie_setup_left.inc.php";?>
            </div>
            <div class="health_dashboard_div_right" style="margin-bottom: 30px; width: 804px;">
            	<div class="DvFloat" style="margin-top: -35px; border: solid 0px #0099FF; margin-bottom: 20px;"><?php include "includes/dashboard_sublinks.inc.php";?></div>
                <!--<div class="DvFloat"><div style="width: 51%; float: right; text-align: right; padding: 5px 0px;"><img src="images/shair_icon.gif" alt="" title="" border="0" style="border: solid 0px #000000;"></div></div>-->
              <table cellpadding="0" cellspacing="4" style="width:100%">
                <tr>
                  <td class="calorie_td_header">NUTRITIONAL GOALS </td>
                  <td class="calorie_td_header">GOALS </td>
                </tr>
                <tr>
                  <td colspan="2"><table cellpadding="0" cellspacing="0" style="width:100%">
                      <tr>
                        <td class="calorie_td_left"><img src="images/calorie_setup/net_calorie.jpg" alt="" /></td>
                        <td class="calorie_td_middle">Net Calories Consumed* / Day </td>
                        <td class="calorie_td_right"><?php echo $Net_Calories_Consumed?> cal/day</td>
                      </tr>
                      <tr>
                        <td class="calorie_td_left"><img src="images/calorie_setup/carbs_day.jpg" alt="" /></td>
                        <td class="calorie_td_middle">Carbs / Day </td>
                        <td class="calorie_td_right"><?php echo $Crab_Grams?> g</td>
                      </tr>
                      <tr>
                        <td class="calorie_td_left"><img src="images/calorie_setup/fat_day.jpg" alt="" /></td>
                        <td class="calorie_td_middle">Fat / Day </td>
                        <td class="calorie_td_right"><?php echo $Fat_Grams?> g</td>
                      </tr>
                      <tr>
                        <td class="calorie_td_left1"><img src="images/calorie_setup/protein_day.jpg" alt="" /></td>
                        <td class="calorie_td_middle1">Protein / Day </td>
                        <td class="calorie_td_right1"><?php echo $Protein_Grams?> g</td>
                      </tr>
                    </table></td>
                </tr>
                <tr>
                  <td class="calorie_td_header">YOUR DIET PROFILE </td>
                  <td class="calorie_td_header">GOALS </td>
                </tr>
                <tr>
                  <td colspan="2"><table cellpadding="0" cellspacing="0" style="width:100%">
                      <tr>
                        <td class="calorie_td_left"><img src="images/calorie_setup/net_calorie_normal.jpg" alt="" /></td>
                        <td class="calorie_td_middle">Calories Burned</td>
                        <td class="calorie_td_right"><?php echo $Net_Calories_Consumed_Per_Day?> cal/day</td>
                      </tr>
                      <tr>
                        <td class="calorie_td_left"><img src="images/calorie_setup/net_calorie_consumed.jpg" alt="" /></td>
                        <td class="calorie_td_middle">Net Calories Consumed</td>
                        <td class="calorie_td_right"><?php echo $Net_Calories_Consumed?> cal/day</td>
                      </tr>
                      <tr>
                        <td class="calorie_td_left"><img src="images/calorie_setup/calorie_deficit.jpg" alt="" /></td>
                        <td class="calorie_td_middle">Daily Calorie Deficit </td>
                        <td class="calorie_td_right"><?php echo number_format($acutal_deficit,0)?> cal</td>
                      </tr>
                      <tr>
                        <td class="calorie_td_left1"><img src="images/calorie_setup/weight_loss.jpg" alt="" /></td>
                        <td class="calorie_td_middle1">Projected Weight Loss </td>
                        <td class="calorie_td_right1"><?php echo number_format((($projected_weight_loss_1)/1000),2)?> kg</td>
                      </tr>
                    </table></td>
                </tr>
                <tr>
                  <td class="calorie_td_header">FITNESS GOALS </td>
                  <td class="calorie_td_header">GOALS </td>

                </tr>
                <tr>
                  <td colspan="2"><table cellpadding="0" cellspacing="0" style="width:100%">
                      <tr>
                        <td class="calorie_td_left"><img src="images/calorie_setup/burned.jpg" alt="" /></td>
                        <td class="calorie_td_middle">Calories Burned / Week </td>
                        <td class="calorie_td_right"><?php echo $Burned_Calories?> cal/week</td>
                      </tr>
                      <tr>
                        <td class="calorie_td_left"><img src="images/calorie_setup/workout_week.jpg" alt="" /></td>
                        <td class="calorie_td_middle">Workouts / Week </td>
                        <td class="calorie_td_right"><?php echo $Workout_Miunt?> workout/week</td>
                      </tr>
                      <tr>
                        <td class="calorie_td_left1"><img src="images/calorie_setup/minutes_workout.jpg" alt="" /></td>
                        <td class="calorie_td_middle1">Minutes / Workout </td>
                        <td class="calorie_td_right1"><?php echo $Hors_Day?>  minutes/workout</td>
                      </tr>
                    </table></td>
                </tr>
                 <tr>
                  <td class="calorie_td_header1" style="padding-top: 20px;"><div style=" width:155px; height:30px; float:left;padding-right:10px;"> <a href="<?php echo $strHostName;?>/page.php?dir=calories/setup1" class="button4">CHANGE GOALS</a></div></td>
                      <td class="calorie_td_header1" style="text-align: right;"><div style=" width:267px; height:30px; float:right;padding-right: 5px;"> <a href="<?php echo $strHostName;?>/page.php?dir=calories/setup3" class="button4">UPDATE YOUR calorie setup</a></div> </td>
                </tr>
              </table>
            </div>
          </div>
      </div>
    </div>
  </div>
  </div>
</section>