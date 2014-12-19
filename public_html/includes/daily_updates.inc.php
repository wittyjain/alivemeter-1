<?php include 'common.inc.php'?>
<?php
$daily_date="";

$daily_date=date('Y-m-d');

if(isset($_GET['date']))
{
	$daily_date=$_GET['date'];
}


if($daily_date=="" || $daily_date=="1" || $daily_date=="undefined")
{
$daily_date=date('Y-m-d');

}
else
{
$daily_date=date('Y-m-d',strtotime($_GET['date']));
}



$diet_count = GetValue("SELECT sum(energy*qty) as col FROM  ".Food." where user_id=".$_SESSION['UserID']." and date='$daily_date' ", "col"); 
if($diet_count=="")
{
	$diet_count="0";
}


$excercise_count = GetValue("SELECT sum(eng_cal) as col FROM  ".Exercise." where user_id=".$_SESSION['UserID']." and date='$daily_date' ", "col"); 

//echo "SELECT sum(eng_cal) as col FROM  ".Exercise." where user_id=".$_SESSION['UserID']." and date='$daily_date'";

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



$strValue = "true###".$calorie_remaining."###".$goal."###".$diet_count."###".$excercise_count."###".$net_count;

echo $strValue;
?>
