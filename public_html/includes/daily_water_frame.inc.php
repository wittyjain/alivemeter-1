<?php include "common.inc.php" ?>
<script type="text/javascript"  language="javascript" src="<?php echo $strHostName?>/js/jquery-1.7.1.min.js"></script>
<script type="text/javascript"  language="javascript" src="<?php echo $strHostName?>/js/jquery.jcarousel.min.js"></script>
<script type="text/javascript"  language="javascript" src="<?php echo $strHostName?>/js/common.js"></script> 
<script type="text/javascript"  language="javascript" src="<?php echo $strHostName?>/js/calories_steup3_validation.js"></script>

<link href="<?php echo $strHostName;?>/css/skin.css" rel="stylesheet" type="text/css"/>
<link href="<?php echo $strHostName;?>/style/fonts.css" rel="stylesheet" type="text/css"/>
<script>
function SetWaterGlasses(iLoop)
{
	document.getElementById("txt_Water").value=iLoop;
	
	
}
	
	

</script>
<?php 
	if(isset($_SESSION['UserID']))
	{
		$user_id=$_SESSION['UserID'];
	}
	else
	{
		$user_id=0;
	}
	
	if(isset($_GET['date']))
	{
		$date=$_GET['date'];
		
	}
	else
	{
		$date=date("Y-m-d");
	}

	//Alert ($date);

	$Water=GetValue("select (no_of_glass+1) as col from tbl_daily_water where user_id=".$user_id." and date='".$date."'","col");
	if($Water==""){$Water="0";}
?>
<form method="post">
<center>
		  <div style="width: 220px;">
			<ul id="mycarousel1" class="jcarousel-skin-tango">
			  
			  <?php for($i=0;$i < 21;$i++){?>
				  <li style="width: 301px;">
					<div class="Products_Home_Dv">
					  <div class="DvFloat">
						<div class="Products_Bottom_Bg" style="text-align:center">
						  <div  style="text-align:center;margin:0 auto; border:solid 0px red; width:65px;">
							<center>
							  <input type="text" readonly id="txt_Water<?php echo $i?>" name="txt_Water<?php echo $i?>" style="width:50px; text-align:center" value="<?php echo $i?>" onblur="javascript:SetWaterGlasses('<?php echo $i?>');"/>
							</center>
						  </div>
						</div>
						<div class="Products_Bottom_Bg">
						  <div class="DvFloat">Glasses</div>
						</div>
						<div class="Products_Top_Bg"> <img src="<?php echo $strHostName?>/images_php/scroll/1.jpg" alt="" title="" border="0" /> </div>
						<div class="Products_Bottom_Bg">
						  <div class="DvFloat">Drink 6 to 8 glasses of water a day</div>
						</div>
					  </div>
					</div>
				  </li>
			 <?php } ?>
	
			</ul>
			 <input type="hidden" readonly id="txt_Water" name="txt_Water" style="width:50px; text-align:center" value=""/>
              <input type="hidden" readonly id="txt_Date" name="txt_Date" style="width:80px; text-align:center" value="<?php echo $date;?>"/>
			<input type="hidden" id="btnSubmit" name="btnSubmit" value="Submit"/>
		  </div>
		</center>



</form>

<script type="text/javascript"  language="javascript">

jQuery(document).ready(function() {
    jQuery('#mycarousel1').jcarousel({
		start:<?php echo $Water?>,
		initCallback: mycarousel_initCallback,
        itemLoadCallback: trigger
    });
});

function mycarousel_initCallback(carousel)
{
	//carousel.start('<?php echo $Water?>');
}

function trigger(carousel, state)
{
	 $("#txt_Water").val(carousel.first);
	 
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
//				   alert (message);
					addwater();
					
					
				}
	}
	
	
	xmlhttp.open("GET","set_water.inc.php?Water="+carousel.first+"&date="+'<?php echo $date?>',true);
	xmlhttp.send();
}
</script>