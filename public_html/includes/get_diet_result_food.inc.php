<?php include 'common.inc.php'?>
  <link rel="stylesheet" type="text/css" href="<?php echo $strHostName;?>/style/health_dashboard_tabcontent.css" />
		
	<script type="text/javascript" src="<?php echo $strHostName;?>/js/calorie_tabcontent.js"></script>
	<link href="<?php echo $strHostName;?>/css/skin.css" rel="stylesheet" type="text/css"/>
    
    
    
    
<script type="text/javascript">
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


<?php

//Alert (isset($_GET['alivey']));
//$date=$_GET['date'];
$date=date('Y-m-d');
	
//Alert ($date);

$receipe_id=0;$min="0";$eng_cal="0";  $time=""; $duration="";

$receipe_id=$_GET['receipe_id'];
//Alert ($receipe_id);

$portion=$_GET['portion'];

$food_cal=$_GET['food_cal'];

$total_cal=$_GET['total_cal'];

$nut_id=$_GET['nut_id'];

$patient_id=$_GET['patient_id'];

$timehh=$_GET['timehh'];
$timemin=$_GET['timemin'];

$time=$timehh.":".$timemin;


$qty=$_GET['qty'];
$type=$_GET['type'];
$selected_date=$_GET['selected_date'];

if(isset($_SESSION['UserID']))
{
	$user_id=$_SESSION['UserID'];
}
else
{
	$user_id=0;
}

if($receipe_id!="0" && $receipe_id!="")
{
	$receipes = explode(",", $receipe_id);
	foreach($receipes as $receipe) {
		///Check
		if($receipe > 0){
		//Alert ($receipe);
			$receipeCount=GetValue("select count(*) as col from tbl_diet_food_plan where patient_id=".$patient_id." and receipe_id=".$receipe." and diet_date='".$date."'", "col");
			//Alert ($receipeCount);
			if ($receipeCount<=0)
			{
				
				$sql="insert into tbl_diet_food_plan (nutritionist_id, patient_id, receipe_id, type, qty, time, diet_date, selected_date, diet_plan_id, isdeleted, isactive, portion, food_cal, total_cal) values ($nut_id , $patient_id, $receipe, '$type', $qty, '$time', '$date', '$selected_date', 0, 0, 1, '$portion', $food_cal, $total_cal)";	
				//echo $sql;
				mysql_query($sql);

			}
		}
	}
}

//Alert ($date);
	
	//$query = "SELECT * FROM tbl_daily_exercise WHERE  user_id=".$user_id." and date=CURDATE() and type='".$type."'";
?>

<div class="dvFloat">


<div class="DvFloat" style="padding:10px 0px 0px 0px;" id="dvDietExercise1"> 
   <table cellpadding="0" cellspacing="0" style="width:89%;background-color:#f0f0f0; border-bottom:solid 1px #c5c5c5">
    <tr>
    	 <td class="Brkfast_td" style="padding:5px; border-bottom:solid 2px #fff;">&nbsp;</td>
         <td class="Brkfast_td" style="width:250px; border-bottom:solid 2px #fff; font-weight:bold; font-size:13px;">Recipe </td>
         <td class="Brkfast_td" style="border-bottom:solid 2px #fff; font-weight:bold; font-size:13px;">Type</td>
          <td class="Brkfast_td" style="border-bottom:solid 2px #fff; font-weight:bold; font-size:13px;">Portion</td>
         <td class="Brkfast_td" style="border-bottom:solid 2px #fff; font-weight:bold; font-size:13px;">Qty</td>
          <td class="Brkfast_td" style="border-bottom:solid 2px #fff; font-weight:bold; font-size:13px;">Calories</td>
         <td class="Brkfast_td" style="border-bottom:solid 2px #fff; font-weight:bold; font-size:13px;">Time</td>
         <td class="Brkfast_td" style="border-bottom:solid 2px #fff;">&nbsp;</td>
    </tr>

<?php
$query = "SELECT * FROM tbl_diet_food_plan WHERE patient_id=".$patient_id." and diet_date='".$date."' ";
//echo $query;
$result = mysql_query($query);
if($result != "") {
$rowcount = mysql_num_rows($result);
	if($rowcount > 0) {	
		while($row = mysql_fetch_assoc($result)) {
		$name=GetValue("select name as col from tbl_recipe where id=".$row['receipe_id'], "col");	
		$time=$row['time'];
		$qty=$row['qty'];
	    $type=$row['type'];
		$total_cal=$row['total_cal'];
		$portion=$row['portion'];
		$total_today_cal=GetValue("select sum(total_cal) as col from tbl_diet_food_plan where patient_id=".$patient_id." and diet_date='".$date."' and diet_plan_id=".$row['diet_plan_id'], "col");
?>
    <tr id="tr_diet_food_<?php echo $row['id']*121?>">
      <td class="Brkfast_td" style="padding:0px;"><img src="<?php echo $strHostName;?>/images/calorie_setup/left_arrow_brkfst.jpg" alt="" /></td>
      <td class="Brkfast_td" style="width:250px;"><?php echo $name;?>
	  <input type="hidden" id="txtFoodId<?php echo $row['id']*121?>" name="txtFoodId<?php echo $row['id']*121?>" value="<?php echo $row['id']*121?>" />
	  </td>
      <td class="Brkfast_td" style="font-size:13px; width:150px;"><?php echo $type?></td>
      <td class="Brkfast_td"><input type="text"   value="<?php echo $portion?>" id="txtPortion<?php echo $row['id']*121?>" name="txtPortion<?php echo $row['id']*121?>" placeholder="" style="width:80px;color:#666; text-align:center;" disabled="disabled"/></td>
      <td class="Brkfast_td"><input type="text"   value="<?php echo $qty?>" id="txtFoodQty<?php echo $row['id']*121?>" name="txtFoodQty<?php echo $row['id']*121?>" placeholder="" style="width:20px;color:#666; text-align:center;" disabled="disabled"/></td>
    
      <td class="Brkfast_td"><input type="text"   value="<?php echo $total_cal?>" id="txtTotalCal<?php echo $row['id']*121?>" name="txtTotalCal<?php echo $row['id']*121?>" placeholder="" style="width:45px;color:#666; text-align:center;" disabled="disabled"/></td>
       <td class="Brkfast_td"><input type="text"   value="<?php echo $time?>" id="txtFoodTime<?php echo $row['id']*121?>" name="txtFoodTime<?php echo $row['id']*121?>" placeholder="" style="width:50px;color:#666; text-align:center;" disabled="disabled"/>
       
      <input type="hidden" value="<?php echo $total_today_cal;?>" id="txtTodayTotalCal" name="txtTodayTotalCal" placeholder="" style="width:50px;color:#666; text-align:center;" disabled="disabled"/>
      
      
       </td>
      <td class="Brkfast_td"> <a onClick="javascript:Diet_Food_Delete_By_Id('<?php echo  $converter->encode($row['id'])?>','<?php echo $row['id']*121?>')" style="cursor:pointer;"><img src="<?php echo $strHostName?>/images/calorie_setup/delete.png"  alt="" align="absmiddle" /></a></td>
      <td class="Brkfast_td" style="display:none;">
		<a style="cursor:pointer" onClick="javascript:UpdateExceQty('<?php echo $row["id"]*121?>');"><img src="<?php echo $strHostName;?>/images/calorie_setup/brkfast_arrow.png"  alt="" align="absmiddle" /></a>
	  </td>
    </tr>
    
    <?php }}}?>
     
  </table>
</div>


</div>


<script type="text/javascript">

var countries=new ddtabcontent("tabstabs");
countries.setpersist(true);
countries.setselectedClassTarget("link"); //"link" or "linkparent"
countries.init();

var countries1=new ddtabcontent("calorie_tab");
countries1.setpersist(true);
countries1.setselectedClassTarget("link"); //"link" or "linkparent"
countries1.init();

</script>