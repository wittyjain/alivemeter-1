<?php include 'common.inc.php'?>
<?php 


$date=date('Y-m-d');

if(isset($_GET['date']))
{
	$date=$_GET['date'];
}



if($date=="" || $date=="1" || $date=="undefined")
{
$date=date('Y-m-d');

}
else
{
$date=date('Y-m-d',strtotime($_GET['date']));
}




if(isset($_SESSION['UserID']))
{
	$user_id=$_SESSION['UserID'];
}
else
{
	$user_id=0;
}




$strValue="true###0###0###0###0###0###0";

$query = "SELECT sum(energy*qty) as total_food_cal,sum(carbo*qty) as total_food_carb,sum(total_fat*qty) as total_food_fat,sum(protein*qty) as total_food_prot, sum(sodium*qty) as total_food_sod,sum(sugar*qty) as total_food_sugar FROM  tbl_daily_food where user_id=".$user_id." and date='".$date."'";
///echo $query ;
$result = mysql_query($query);							
if($result != "") {	
	$rowcount  = mysql_num_rows($result);
	if($rowcount > 0) {
		while($row = mysql_fetch_assoc($result)) {
			extract($row);
			$total_food_cal=number_format($total_food_cal,0);
			$total_food_carb=number_format($total_food_carb,0);
			$total_food_fat=number_format($total_food_fat,0);
			$total_food_prot=number_format($total_food_prot,0);
			$total_food_sod=number_format($total_food_sod,0);
			$total_food_sugar=number_format($total_food_sugar,0);
			
			$strValue = "true###".$total_food_cal."###".$total_food_carb."###".$total_food_fat."###".$total_food_prot."###".$total_food_sod."###".$total_food_sugar;
		}
	}
}
echo $strValue;
		 
?>