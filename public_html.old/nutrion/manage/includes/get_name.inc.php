<?php include("../../includes/common.inc.php"); ?>
<?php 
	$name=$_GET['name'];
	$type=$_GET['type'];
	if($type=="ing")
	{
		$query = "SELECT * from ".Raw." WHERE  ingredientname='".$name."' and isdeleted = 0 order by id desc";
	}
	
	$result = mysql_query($query);
	if($result != "") {
		$rowcount  = mysql_num_rows($result);
		if($rowcount > 0) {
			while($row = mysql_fetch_assoc($result)) {
				extract($row);
				echo $id;
			}
		}
		else
		{
			echo "false";
		}
	}
?>
