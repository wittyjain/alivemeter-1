<?php include("../../includes/common.inc.php"); ?>
<?php 
	$name=$_GET['name'];
	$strValue="0#";
	$query = "SELECT * from ".Raw." WHERE  id=".$name;
	$result = mysql_query($query);
	if($result != "") {
		$rowcount  = mysql_num_rows($result);
		if($rowcount > 0) {
			while($row = mysql_fetch_assoc($result)) {
				extract($row);
				 foreach($row as $column=>$value) {
					 if($value==""){$value="0";}
					 $strValue=$strValue."#".$value;
				}
				
			}
		}
	}
	echo $strValue;
?>
