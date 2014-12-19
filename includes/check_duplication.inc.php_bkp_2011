<?php include("../includes/common.inc.php"); ?>
<?php
	$strValue = $strSeparator;
	$condition = "";
	
		if(isset($_GET['tbl'])) {
			$tbl = $_GET['tbl'];
			if($tbl == "Diet_Plan") {
				if(isset($_GET['value'])) {
					$value = $_GET['value'];
					$value=date('Y-m-d');
					
					if(isset($_GET['patient_id'])) {
						$patient_id=$_GET['patient_id'];
					}
						if($value != "") {
							$condition = " and selected_date = '".$value."' and patient_id=".$patient_id;
						}
				}
			
				$query = "SELECT * FROM ".Diet_Plan." WHERE isdeleted = 0 and isactive=1 ".$condition."";
			//echo $query;
			} 
			
			else if($tbl == "Users") {
				if(isset($_GET['value'])) {
				$value = $_GET['value'];
				//Alert ($value);
				
				if($value != "") {
					$condition = " and user_profile_id = '".$value."' ";
					}
				}
			
				$query = "SELECT * FROM ".Users." WHERE isdeleted = 0 ".$condition."";
				//echo $query;
			} 
			
			else if($tbl == "Members") {
				if(isset($_GET['value'])) {
				$value = $_GET['value'];
				
				if($value != "") {
					$condition = " and user_email = '".$value."' ";
					}
				}
			
				if(isset($_GET['parent_email'])) {
					$parent_email=$_GET['parent_email'];
				}
				
				$query = "SELECT * FROM ".Users." WHERE isdeleted = 0  ".$condition." and user_email<>'".$parent_email."' ";
				///echo $query;
			} 
			
			
			
			else if($tbl == "UserID") {
				if(isset($_GET['value'])) {
				$value = $_GET['value'];
				
				if($value != "") {
					$condition = " and user_email = '".$value."' ";
					}
				}
			
				
				
				$query = "SELECT * FROM ".Users." WHERE isdeleted = 0 ".$condition." and user_email='".$value."' ";
				///echo $query;
			} 
			
		
			else if($tbl == "Mobile") {
				if(isset($_GET['value'])) {
				$value = $_GET['value'];
				
				if($value != "") {
					$condition = " and mobile = '".$value."' ";
					}
				}
			
				
				
				$query = "SELECT * FROM ".Users." WHERE isdeleted = 0 ".$condition." and mobile='".$value."' ";
				///echo $query;
			} 
			
		
		
		
		
		if($query != "") {
			$rows = $db->select($query);
			$rows = $db->row_count;
			if($rows > 0) {
				$strValue .= "true";
			} else {
				$strValue .= "false";
			}
		} else {
			$strValue .= "false";
		}
	} else {
		$strValue .= "false";
	}
	echo $strValue;
?>