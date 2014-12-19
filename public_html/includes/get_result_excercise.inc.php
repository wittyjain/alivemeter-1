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
<script type="text/javascript" src="<?php echo $strHostName?>/js/calories_steup3_validation.js"></script>
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

	function UpdateExceQty(row,date)
	{		
		///alert (date);
		var minutes=document.getElementById("txtExercise_min"+row).value;
		var eng_cal=document.getElementById("txtExercise_calorie"+row).value;
		pageURL=hostname+"/includes/update_exc_qty.inc.php?id="+row+"&type=exce&min="+minutes+"&eng_cal="+eng_cal;
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
				message = xmlhttp.responseText;
				///alert (message);
				///alert("Record update succesfully");	 
				document.getElementById("txtExercise_calorie1"+row).value=message;
				///alert (date);
				GetDailyUpdates(date);
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
$date=$_GET['date'];
//$date=date("Y-m-d");
	
//Alert ($date);

$Rec_daily_updates=0;
$exercise_id=0;$min="0";$eng_cal="0";
$type=$_GET['type'];

if($type=="Exercise")
{
$exercise_id=$_GET['exercise_id'];
}


if(isset($_SESSION['UserID']))
{
	$user_id=$_SESSION['UserID'];
}
else
{
	$user_id=0;
}

$Rec_daily_updates=$exercise_id;


if($exercise_id!="0" && $exercise_id!="")
{
	$exercises = explode(",", $exercise_id);
	foreach($exercises as $exercise) {
		///Check
		if($exercise > 0){
			$exerciseCount=GetValue("select count(*) as col from tbl_daily_exercise where user_id=".$user_id." and exercise_id=".$exercise." and date='".$date."' and type='".$type."'", "col");
			
			//echo "select count(*) as col from tbl_daily_exercise where user_id=".$user_id." and exercise_id=".$exercise." and date='".$date."' and type='".$type."'";
			// echo $exerciseCount;
			if ($exerciseCount<=0)
			{
				$sql="insert into tbl_daily_exercise (exercise_id, user_id, date, type, min) values ($exercise , $user_id, '$date', '$type', 1)";	
			   ///  echo $sql;
				mysql_query($sql);

			}
		}
	}
}

//Alert ($date);
	
	//$query = "SELECT * FROM tbl_daily_exercise WHERE  user_id=".$user_id." and date=CURDATE() and type='".$type."'";
$query = "SELECT * FROM tbl_daily_exercise WHERE user_id=".$user_id." and date='".$date."' and type='".$type."'";
	

//echo $query;

$result = mysql_query($query);
if($result != "") {
$rowcount = mysql_num_rows($result);
	if($rowcount > 0) {	
		while($row = mysql_fetch_assoc($result)) {
		$name=GetValue("select name as col from tbl_exercise where id=".$row['exercise_id'], "col");	
		$min=$row['min'];
		//$eng_cal=$row['eng_cal'];
		$total_cal=GetValue("select calorie as col from tbl_exercise where id=".$row['exercise_id'], "col");
		$eng_cal=($min*$total_cal);

?>
<center>
<input type="hidden"  value="<?php echo $date?>" id="txtToDate" name="txtToDate" style="width:90px;"/>
<div class="DvFloat" style="padding:10px 0px 0px 0px; border-bottom:solid 0px #c5c5c5"  id="tr_exercise_<?php echo $row['id']*121?>"> 
  <table cellpadding="0" cellspacing="0" style="width:100%;background-color:#f0f0f0" border="0">
    <tr>
      <td class="Brkfast_td" style="padding:0px;"><img src="<?php echo $strHostName;?>/images/calorie_setup/left_arrow_brkfst.jpg" alt="" /></td>
      <td class="Brkfast_td" style="width:237px;"><?php echo $name;?>
	  <input type="hidden" id="txtExceId<?php echo $row['id']?>" name="txtExceId<?php echo $row['id']?>" value="<?php echo $row['id']?>" />
      <input type="hidden" id="txtExceId<?php echo $row['id']*121?>" name="txtExceId<?php echo $row['id']*121?>" value="<?php echo $row['id']*121?>" />
	  </td>
      <td class="Brkfast_td"><input type="text"   value="<?php echo $min?>" id="txtExercise_min<?php echo $row['id']*121?>" name="txtExercise_min<?php echo $row['id']*121?>" placeholder="60 mins" style="width:50px;color:#666"/></td>
      <td class="Brkfast_td" style="width: 90px;"><input type="text"   value="<?php echo $total_cal?>" id="txtExercise_calorie<?php echo $row['id']*121?>" name="txtExercise_calorie<?php echo $row['id']*121?>" placeholder="" style="width:50px;color:#666" readonly="readonly"/></td>
   <td class="Brkfast_td"><input type="text"   value="<?php echo $eng_cal?>" id="txtExercise_calorie1<?php echo $row['id']*121?>" name="txtExercise_calorie1<?php echo $row['id']*121?>" placeholder="" style="width:50px;color:#666" readonly="readonly"/></td>
      <td class="Brkfast_td" style="width:65px;">
		<a style="cursor:pointer" onclick="javascript:UpdateExceQty('<?php echo $row["id"]*121?>','<?php echo $date;?>');"><img src="<?php echo $strHostName;?>/images/update.png"  alt="Update" align="absmiddle" style="width:15px;" /></a>
	  </td>
      
         <td class="Brkfast_td" style="width:38px;"> <a onClick="javascript:Exercise_Delete_By_Id('<?php echo  $converter->encode($row['id'])?>','<?php echo $row['id']*121?>','<?php echo $date;?>')" style="cursor:pointer;"><img src="<?php echo $strHostName?>/images/calorie_setup/delete.png"  alt="" align="absmiddle" /></a></td>
         
    </tr>
  </table>
</div>
</center>
<?php }  ?>
  <?php } else { ?>
  
  	<div class="DvFloat" style="color:#009899; text-align:center; padding:15px 0 10px 0; border-top:solid 1px #c5c5c5; margin-top:10px;">Add exercise records here...</div>
    
    <?php } } ?>

<div class="DvFloat" style="padding:30px 0px 0px 0px; border-top:solid 1px #c5c5c5"></div>

