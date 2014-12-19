<?php include("../includes/common.inc.php"); ?>
<?php include("../includes/links.inc.php"); ?>
<?php
	$strValue = $strSeparator;
	$condition = "";
	
	if(isset($_GET['tbl'])) {
		$tbl = $_GET['tbl'];
		if($tbl == "User") {
			if(isset($_GET['value'])) {
				$value = $_GET['value'];
				$id = $_GET['id'];
				if($value != "") {
					$condition = " and username = '".$value."' and id <>".$id;
				}
			}
			$query = "SELECT * FROM ".AdminLogin." WHERE isdeleted = 0 ".$condition." ";
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