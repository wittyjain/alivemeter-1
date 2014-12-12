<?php include("common.inc.php"); ?>
<?php
	$strValue = $strSeparator; $type=""; $value=""; $fieldname=""; $tbl=""; $edit_id="0";
	$condition = ""; $query="";
	
	if(isset($_GET['type']))
	{
		$type = $_GET['type'];
	}
	
	if(isset($_GET['value']))
	{
		$value = $_GET['value'];
	}
	
	if(isset($_GET['edit_id']))
	{
		$edit_id = $_GET['edit_id'];
		if ($edit_id=="")
		{
			$edit_id=0;
		}
	}
	
	
	if(isset($_SESSION['UserID'])){
		$user_id=$_SESSION['UserID'];
	}
	else
	{
		$user_id=0;
	}


		
	if ($type == "Doc_Consult")
	{
		$tbl=Doctor_Consult;
		$fieldname="doc_consult_id";
		$condition = " doc_consult_id<>".$edit_id." and  consult_date = '".$value."' ";
		
	}
	
	else if ($type == "Blood_Pressure")
	{
		$tbl=Blood_Pressure;
		$fieldname="blood_pressure_id";
		$condition = " blood_pressure_id<>".$edit_id." and  del_track_date = '".$value."' ";
		
	}
	
	else if ($type == "Life_Style")
	{
		$tbl=Life_Style;
		$fieldname="life_style_id";
		$condition = " life_style_id<>".$edit_id." and  life_style_date = '".$value."' ";
		
	}
	else if ($type == "Sugar_Profile")
	{
		$tbl=Sugar_Profile;
		$fieldname="sugar_profile_id";
		$condition = " sugar_profile_id<>".$edit_id." and  fasting_blood_sugar_date = '".$value."' ";
		
	}
	
	
	else if ($type == "Lipid_Profile")
	{
		$tbl=Lipid_Profile;
		$fieldname="lipid_profile_id";
		$condition = " lipid_profile_id<>".$edit_id." and  triglyceride_blood_sugar_date = '".$value."' ";
		
	}
	
	
	else if ($type == "Measurements")
	{
		$tbl=Calorie_Det;
		$fieldname="id";
		$condition = " id<>".$edit_id." and  weight_date = '".$value."' ";
		
	}
		
	$query = "SELECT ".$fieldname." FROM ".$tbl." WHERE ".$condition." and isdeleted=0 and user_id=".$user_id." limit 1";
 	 ///echo $query;
	
	if($query != "") {
			$rows = $db->select($query);
			$rows = $db->row_count;
			if($rows > 0) {
				$strValue .= "true";
				if ($tbl == "listingname") {
					//echo $query;
					$result = mysql_query($query);
					if ($result != "") {
						$rowcount = mysql_num_rows($result);
						if ($rowcount > 0) {
							while ($row = mysql_fetch_assoc($result)) {
								extract($row);
								$strValue = "true###".$row[$fieldname];
							}
						}
					}
				}

			} else {
				$strValue .= "false";
			}
		} else {
			$strValue .= "false";
		}	
	
	echo $strValue;
?>