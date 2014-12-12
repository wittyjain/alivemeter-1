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
	
	$value=$_GET['value'];
	
	$cityname="";
	$location="";
	//Alert ($tbl);
	
	//Alert ($value);
	
	
	
?>
	
    
    

	<select id="cmbPatients" name="cmbPatients" onchange="javascript:set_Compose_Accept_ID();" style="width:760px;">
		<option value="0">Choose Patients</option>
		<?php
		//$query="select user_id from tbl_compose where video_query_requirement='Yes' and user_id in (select patient_id from tbl_doctor_comment where md_id=".$value.") ";
		
		$query="select * from tbl_doctor_comment where patient_id in (select user_id from tbl_compose where video_query_requirement='Yes') and md_id=".$value;
		$result = mysql_query($query);
				if($result != "") {
					$rowcount = mysql_num_rows($result);
					if($rowcount > 0) {
						while($row = mysql_fetch_assoc($result)) {
						$patient_id = $row['patient_id'];
						$compose_id = $row['compose_id'];
						$accept_id = $row['accept_id'];
						$doc_comment_id = $row['doc_comment_id'];
						$folder_id = $row['folder_id'];
						$name = GetValue("select name as col from tbl_users where user_id=".$patient_id, "col");
						
						$complaint = GetValue("select complaint as col from tbl_compose where mail_id=".$compose_id, "col");
		?>
			<option value="<?php echo $patient_id; ?>###<?php echo $compose_id; ?>###<?php echo $accept_id; ?>###<?php echo $doc_comment_id; ?>###<?php echo $folder_id; ?>"><?php echo $name; ?> - <span id="txtComposeId">(<?php echo truncate($complaint,50); ?></span>)</option>
	
       
		
		<?php
			}}}
		?>
