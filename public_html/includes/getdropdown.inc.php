<?php include("common.inc.php"); ?>
<link rel="stylesheet" href="<?php echo $strHostName;?>/css/dropkick.css" type="text/css">
<script src="<?php echo $strHostName;?>/js/jquery.min.js" type="text/javascript"></script>
	<script src="<?php echo $strHostName;?>/js/jquery.dropkick-1.0.0.js" type="text/javascript"></script>

	<script type="text/javascript" charset="utf-8">
		$(function () {
		  $('.existing_event').dropkick({
			change: function () {
			  $(this).change();
			}
		  });
		});
	</script>

<?php
	
	$tbl=$_GET['tbl'];
	$value=$_GET['value'];
	$value1=$_GET['selID'];
	$cityname="";
	$location="";
	//Alert ($tbl);
	
	//Alert ($value);
	
	if (isset($_GET['location_id'])){
		$location_id=$_GET['location_id'];
	}
	else
	{	
		$location_id="0";
	}
	
?>
	
    
    
 <?php if($tbl=="City"){?>
	<select id="cmbCity" name="cmbCity" tabindex="1"  class="" style="width: 198px; color:#fff; box-shadow: none; border:0px; background-color:#666666; color:#cacaca;  height:30px;"  onChange="javascript:Retrive_Location('<?php echo $location_id?>');"  disabled="disabled">
		<option value="0">Select City</option>
		<?php
		$query="select city_id as Id,city_name as Name from ".City." Where isdeleted=0 and state_id=".$value;
		$result = mysql_query($query);
				if($result != "") {
					$rowcount = mysql_num_rows($result);
					if($rowcount > 0) {
						while($row = mysql_fetch_assoc($result)) {
						$id = $row['Id'];
						$name = $row['Name'];
		?>
			<option value="<?php echo $id; ?>" <?php if ($id == $value1) { echo "selected"; } ?> ><?php echo $name; ?></option>
		<?php
			}}}
		?>
        <option value="9999">Other</option>
	</select>
    
   <div id="loading2" name="loading2" style="display:none;float:left;width:35px;border:solid 0px red;height:32px;padding:0px;margin:0px;">
        <img src="<?php echo $strHostName;?>/images/loading.gif" alt="" title="" />
    </div>

<?php }?>

  
   


<?php if($tbl=="Location"){?>
	<select id="ddlLocation" name="ddlLocation"  class="existing_event" tabindex="1" style="width: 194px; color:#fff; box-shadow: none; border:0px; background-color:#666666; color:#cacaca;  height:30px;" onChange="javascript:LocationDisplay();" disabled="disabled">
		<option value="0">Select Locality</option>
		<?php
		$query="select location_id as Id,location_name as Name from ".Location." Where isdeleted=0 and city_id=".$value;
		//echo $query;
		$result = mysql_query($query);
				if($result != "") {
					$rowcount = mysql_num_rows($result);
					if($rowcount > 0) {
						while($row = mysql_fetch_assoc($result)) {
						$id = $row['Id'];
						$name = $row['Name'];
		?>
			<option value="<?php echo $id; ?>" <?php if ($id == $value1) { echo "selected"; } ?>><?php echo $name; ?></option>
		<?php
			}}}
		?>
        <option value="9999">Other</option>
	</select>
    
<?php }?>


<?php if($tbl=="Location_Type"){?>
	 <select id="ddlLocationType" name="ddlLocationType" style="width:92%; float:left; height:30px;" class="input-sm" onChange="javascript:GetSerarhProfiles();">
		<option value="0">Select</option>
		<?php

		if($value!="0"){

		 $query = "SELECT DISTINCT b.location_id,b.location_name
		FROM tbl_property_1 a
		INNER JOIN ".Location." b ON a.location_id = b.location_id
		WHERE a.isdeleted =0
		AND b.isdeleted =0
		AND latitude <>  ''
		AND latitude IS NOT NULL 
		AND longitude <>  ''
		AND longitude IS NOT NULL  and a.city_id=".$value." order by b.location_name";
		}
		else
		{
			 $query = "SELECT DISTINCT b.location_id,b.location_name
		FROM tbl_property_1 a
		INNER JOIN ".Location." b ON a.location_id = b.location_id
		WHERE a.isdeleted =0
		AND b.isdeleted =0
		AND latitude <>  ''
		AND latitude IS NOT NULL 
		AND longitude <>  ''
		AND longitude IS NOT NULL order by b.location_name";
		}
		//echo $query;
		$result = mysql_query($query);
				if($result != "") {
					$rowcount = mysql_num_rows($result);
					if($rowcount > 0) {
						while($row = mysql_fetch_assoc($result)) {
						$id = $row['location_id'];
						$name = $row['location_name'];
		?>
			<option value="<?php echo $id; ?>" <?php if ($id == $value1) { echo "selected"; } ?>><?php echo $name; ?></option>
		<?php
			}}}
		?>
    </select>
    
<?php }?>