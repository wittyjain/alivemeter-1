<script type="text/javascript" src="<?php echo $strHostName?>/js/health_steup_insert_retrive.js"></script>
<script type="text/javascript" src="<?php echo $strHostName?>/js/calories_steup3_validation.js"></script>
<?php

$daily_date=date('Y-m-d');
//Alert ($daily_date);

$diet_count = GetValue("SELECT sum(energy*qty) as col FROM  ".Food." where user_id=".$_SESSION['UserID']." and date='$daily_date' ", "col"); 
if($diet_count=="")
{
	$diet_count="0";
}


$excercise_count = GetValue("SELECT sum(eng_cal) as col FROM  ".Exercise." where user_id=".$_SESSION['UserID']." and date='$daily_date' ", "col"); 
if($excercise_count=="")
{
	$excercise_count="0";
}





$net_count=$diet_count-$excercise_count;

$current_goal= GetValue("SELECT goal_wgt as col FROM  ".Calorie." where user_id=".$_SESSION['UserID']."", "col"); 
$target_goal=GetValue("SELECT net_calorie_consumed as col FROM  ".Calorie_Consumed." where user_id=".$_SESSION['UserID']."", "col"); 
$Net_Calories_Consumed_Per_Day=GetValue("SELECT calorie_consumed_day as col FROM  ".Calorie_Consumed." where user_id=".$_SESSION['UserID']."", "col");
$kg_type=GetValue("SELECT kg_type as col FROM  ".Calorie_Consumed." where user_id=".$_SESSION['UserID']."", "col"); 


if($kg_type=="maintain")
			{
				$target_goal=$Net_Calories_Consumed_Per_Day;
			}
			else
			{
				 
				$last_word_end = strlen($target_goal) - 1;
				$last_word_end = substr($target_goal,$last_word_end, 1);
				
				if($last_word_end  > 0)
				{
					$last_word_end =10-$last_word_end;					
					$target_goal=$target_goal+$last_word_end;
				}
			}	



//Alert ($current_goal);
//$goal=$current_goal*$target_goal;


$goal=$target_goal;
$calorie_remaining=$goal-$net_count;

$calorie_remaining=number_format($calorie_remaining,0);
$goal=number_format($goal,0);
$diet_count=number_format($diet_count,0);

$excercise_count=number_format($excercise_count,0);
$net_count=number_format($net_count,0);

?>

<div class="DvFloat" style="padding-top:10px;">
                    <div class="calorie_gb_box">
                      <div class="DvFloat">
                        <div  style="margin:0 auto; text-align:center">
                          <div class="DvFloat" style="line-height:14px;padding:5px 0px 0px 0px;"><span style="text-transform:uppercase; color:#666666; font-size:14px;">Calories<br>
                            Remaining</span></div>
                          <div class="DvFloat"><span style="text-transform:uppercase; color:#666666; font-size:36px;"  id="DvCalorieRemaining"><?php echo $calorie_remaining;?></span></div>
                          <div class="DvFloat" style="padding:10px 0px 0px 0px"><span style=" color:#666666; font-size:14px;">Calories</span></div>
                        </div>
                      </div>
                    </div>
                    <div class="calorie_gb_box">
                      <div  style="margin:0 auto; text-align:center">
                        <div class="DvFloat" style="line-height:14px;padding:5px 0px 15px 0px;"><span style="text-transform:uppercase; color:#666666; font-size:14px;">GOAL</span></div>
                        <div class="DvFloat" ><span style="text-transform:uppercase; color:#666666; font-size:36px;" id="DvGoal">
                       		 <?php echo $goal;?>
                        </span></div>
                        <div class="DvFloat" style="padding:10px 0px 0px 0px"><span style=" color:#666666; font-size:14px;">Calories</span></div>
                      </div>
                    </div>
                    <div class="calorie_grey_box">
                      <div  style="margin:0 auto; text-align:center">
                        <div class="DvFloat" style="line-height:14px;padding:5px 0px 15px 0px;"><span style="text-transform:uppercase; color:#666666; font-size:14px;">FOOD</span></div>
                        <div class="DvFloat"><span style="text-transform:uppercase; color:#666666; font-size:36px;" id="DvFood">
                         		 <?php echo $diet_count;?>
                        </span></div>
                        <div class="DvFloat" style="padding:10px 0px 0px 0px"><span style=" color:#666666; font-size:14px;">Calories</span></div>
                      </div>
                    </div>
                    <div class="calorie_grey_box">
                      <div style="position:absolute; margin-top:50px;margin-left:-20px;"><img src="images/calorie_setup/minus.jpg" alt=""></div>
                      <div  style="margin:0 auto; text-align:center">
                        <div class="DvFloat" style="line-height:14px;padding:5px 0px 15px 0px;"><span style="text-transform:uppercase; color:#666666; font-size:14px;">EXERCISE</span></div>
                        <div class="DvFloat" ><span style="text-transform:uppercase; color:#666666; font-size:36px;" id="DvExercise">
                        	  <?php echo $excercise_count;?>
                        </span></div>
                        <div class="DvFloat" style="padding:10px 0px 0px 0px"><span style=" color:#666666; font-size:14px;">Calories</span></div>
                      </div>
                    </div>
                    <div class="calorie_grey_box">
                      <div style="position:absolute; margin-top:50px;margin-left:-20px;"><img src="images/calorie_setup/equal.jpg" alt=""></div>
                      <div  style="margin:0 auto; text-align:center">
                        <div class="DvFloat" style="line-height:14px;padding:5px 0px 15px 0px;"><span style="text-transform:uppercase; color:#666666; font-size:14px;">NET</span></div>
                        <div class="DvFloat" ><span style="text-transform:uppercase; color:#666666; font-size:36px;" id="DvNet">
                        	 <?php echo $net_count;?>
                        </span></div>
                        <div class="DvFloat" style="padding:10px 0px 0px 0px"><span style=" color:#666666; font-size:14px;">Calories</span></div>
                      </div>
                    </div>
                  </div>
                  
                  
<script type="text/javascript">
//GetDailyUpdates();
</script>