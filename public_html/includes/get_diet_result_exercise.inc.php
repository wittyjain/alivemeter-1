<?php include 'common.inc.php'?>
<link href="<?php echo $strHostName;?>/style/main.css" rel="stylesheet" type="text/css">
<link href="<?php echo $strHostName;?>/style/reset.css" rel="stylesheet" type="text/css">
<link href="<?php echo $strHostName;?>/style/fonts.css" rel="stylesheet" type="text/css">
<link href="<?php echo $strHostName;?>/style/bxslider1.css" rel="stylesheet" type="text/css">
<link href="<?php echo $strHostName;?>/style/jupiter.css" rel="stylesheet" type="text/css">
<link href="<?php echo $strHostName;?>/css/main_new.css" rel="stylesheet" type="text/css">
<link type="text/css" rel="stylesheet" href="<?php echo $strHostName;?>/css/style.css" />
<link href="<?php echo $strHostName;?>/style/bhupali.css" rel="stylesheet" type="text/css">
<link href="<?php echo $strHostName;?>/style/paging_md.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" language="javascript" src="<?php echo $strHostName?>/js/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="<?php echo $strHostName?>/js/ddaccordion.js"></script>
<script type="text/javascript" src="<?php echo $strHostName?>/js/common.js"></script>
<script type="text/javascript" src="<?php echo $strHostName?>/js/health_steup_validation.js"></script>
<script type="text/javascript" src="<?php echo $strHostName?>/js/health_steup_insert_retrive.js"></script>
<script type="text/javascript">
ddaccordion.init({
headerclass: "mypetsA", 
contentclass: "thepetA",
collapseprev: true, 
defaultexpanded: [],
animatedefault: false,
persiststate: false, 
toggleclass: ["", "openpet"], 
togglehtml: ["none", "", ""], 
animatespeed: "fast", 
oninit:function(headers, expandedindices){ 
	 for (var i=0; i<expandedindices.length; i++){
		var expandedindex=expandedindices[i] 
		headers[expandedindex].style.backgroundColor=''
		headers[expandedindex].style.color='#666666'
	 }
}
})
</script>
<script type="text/javascript" src="<?php echo $strHostName;?>/js/cal.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){
	$(".trigger").click(function(){
	$(".panel").toggle("fast");
	$(this).toggleClass("active");
	return false;
	});
	});

	function UpdateExceQty(row)
	{		
		var min=document.getElementById("txtExercise_min"+row).value;
		var eng_cal=document.getElementById("txtExercise_calorie"+row).value;
		pageURL=hostname+"/includes/update_exc_qty.inc.php?id="+row+"&type=exce&min="+min+"&eng_cal="+eng_cal;
		if (window.XMLHttpRequest)
		{// for IE7+, Firefox, Chrome, Opera, Safaricodes
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
				alert("Record update succesfully");	 
			}
		}
		
		xmlhttp.open("GET",pageURL,true);
		xmlhttp.send();
}
</script>
<style type="text/css">
.mypetsA {width:675px;color: #666666;
font-weight:bold; background:#f0f0f0 url(../images/calorie_setup/brkfast_side_arrow.png) no-repeat; background-position:99% 50%; border:solid 0px red; height:45px; z-index:1000;position:relative;}
.openpet {color:#666;background:#f0f0f0 url(../images/calorie_setup/brkfast_arrow.png) no-repeat; background-position:99% 50%; border:solid 0px red; height:45px; z-index:1000;}
.thepetA {color:#666666;padding:5px 0px;}
b {font-weight:bold}
</style>
<link rel="stylesheet" type="text/css" href="<?php echo $strHostName?>/style/calorie_tabcontent1.css" />

<?php

//Alert (isset($_GET['alivey']));
//$date=$_GET['date'];
$date=date("Y-m-d");
	
//Alert ($date);

$exercise_id=0;$min="0";$eng_cal="0";  $time=""; $duration=""; $cal="";

$exercise_id=$_GET['exercise_id'];

$nut_id=$_GET['nut_id'];
$patient_id=$_GET['patient_id'];

$timehh=$_GET['timehh'];
$timemin=$_GET['timemin'];
$cal=$_GET['cal'];
$exemin=$_GET['exemin'];

$time_period=$_GET['time_period'];



$time=$timehh.":".$timemin;


$durationhh=$_GET['durationhh'];
$durationmin=$_GET['durationmin'];

$duration=$durationhh.":".$durationmin;

$selected_date=$_GET['selected_date'];

if(isset($_SESSION['UserID']))
{
	$user_id=$_SESSION['UserID'];
}
else
{
	$user_id=0;
}

if($exercise_id!="0" && $exercise_id!="")
{
	$exercises = explode(",", $exercise_id);
	foreach($exercises as $exercise) {
		///Check
		if($exercise > 0){
			$exerciseCount=GetValue("select count(*) as col from tbl_diet_exercise where patient_id=".$patient_id." and exercise_id=".$exercise." and exercise_date='".$date."'", "col");
			//echo "select count(*) as col from tbl_diet_exercise where patient_id=".$patient_id." and exercise_id=".$exercise." and date='".$date."'";
			//Alert ($exerciseCount);
			if ($exerciseCount<=0)
			{
				$sql="insert into tbl_diet_exercise (nutritionist_id, patient_id, exercise_id, time, min, time_period, duration, exercise_date, diet_plan_id, isdeleted, isactive, selected_date,cal) values ($nut_id , $patient_id, $exercise, '$time', '$exemin',  '$time_period', '$duration', '$date',  0, 0, 1, '$selected_date', '$cal')";	
			//echo $sql;
				mysql_query($sql);

			}
		}
	}
}

//Alert ($date);
	
	//$query = "SELECT * FROM tbl_daily_exercise WHERE  user_id=".$user_id." and date=CURDATE() and type='".$type."'";
?>

<div class="DvFloat" style="padding:10px 0px 0px 0px;" id="dvDietExercise1"> 
  <table cellpadding="0" cellspacing="0" style="width:89%;background-color:#f0f0f0; border-bottom:solid 1px #c5c5c5">
    <tr>
    	 <td class="Brkfast_td" style="padding:5px; border-bottom:solid 2px #fff;">&nbsp;</td>
         <td class="Brkfast_td" style="width:460px; border-bottom:solid 2px #fff; font-weight:bold; font-size:13px;">Exercise </td>
        
        
         <td class="Brkfast_td" style="border-bottom:solid 2px #fff; font-weight:bold; font-size:13px;">Total Mins</td>
         <td class="Brkfast_td" style="border-bottom:solid 2px #fff; font-weight:bold; font-size:13px;">Calories</td>
         <td class="Brkfast_td" style="border-bottom:solid 2px #fff; font-weight:bold; font-size:13px;">Time</td>
       
         <td class="Brkfast_td" style="border-bottom:solid 2px #fff;">&nbsp;</td>
    </tr>
<?php
$query = "SELECT * FROM tbl_diet_exercise WHERE patient_id=".$patient_id." and exercise_date='".$date."'";


//echo $query;

$result = mysql_query($query);
if($result != "") {
$rowcount = mysql_num_rows($result);
	if($rowcount > 0) {	
		while($row = mysql_fetch_assoc($result)) {
		$name=GetValue("select name as col from tbl_exercise where id=".$row['exercise_id'], "col");	
		$time=$row['time'];
		$time_period=$row['time_period'];
		$duration=$row['duration'];
		$cal=$row['cal'];
		$min=$row['min'];
		$total_cal=($cal*$min);

?>
    <tr id="tr_diet_exercise_<?php echo $row['id']*121?>">
      <td class="Brkfast_td" style="padding:0px;"><img src="<?php echo $strHostName;?>/images/calorie_setup/left_arrow_brkfst.jpg" alt="" /></td>
      <td class="Brkfast_td" style="width:460px;"><?php echo $name;?>
	  <input type="hidden" id="txtExceId<?php echo $row['id']*121?>" name="txtExceId<?php echo $row['id']*121?>" value="<?php echo $row['id']*121?>" />
	  </td>
      <td class="Brkfast_td"><input type="text"   value="<?php echo $min?>" id="txtExercise_Min<?php echo $row['id']*121?>" name="txtExercise_Min<?php echo $row['id']*121?>" placeholder="" style="width:50px;color:#666; text-align:center;" readonly="readonly"/></td>
      <td class="Brkfast_td"><input type="text"   value="<?php echo $total_cal?>" id="txtExercise_Cal<?php echo $row['id']*121?>" name="txtExercise_Cal<?php echo $row['id']*121?>" placeholder="" style="width:70px;color:#666; text-align:center" readonly="readonly"/></td>
      <td class="Brkfast_td"><input type="text"   value="<?php echo $time_period?>" id="txtExercise_time<?php echo $row['id']*121?>" name="txtExercise_time<?php echo $row['id']*121?>" placeholder="" style="width:70px;color:#666; text-align:center;" readonly="readonly"//></td>
      <td class="Brkfast_td" style="display:none;"><input type="text"   value="<?php echo $duration?>" id="txtExercise_duration<?php echo $row['id']*121?>" name="txtExercise_duration<?php echo $row['id']*121?>" placeholder="" style="width:50px;color:#666; text-align:center;" readonly="readonly"//></td>
      <td class="Brkfast_td"> <a onClick="javascript:Diet_Exercise_Delete_By_Id('<?php echo  $converter->encode($row['id'])?>','<?php echo $row['id']*121?>')" style="cursor:pointer;"><img src="<?php echo $strHostName?>/images/calorie_setup/delete.png"  alt="" align="absmiddle" /></a></td>
      <td class="Brkfast_td" style="display:none;">
		<a style="cursor:pointer" onClick="javascript:UpdateExceQty('<?php echo $row["id"]*121?>');"><img src="<?php echo $strHostName;?>/images/calorie_setup/brkfast_arrow.png"  alt="" align="absmiddle" /></a>
	  </td>
    </tr>
    <?php }}}?>
  </table>
</div>

