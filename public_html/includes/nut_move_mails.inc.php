<?php include("common.inc.php"); ?>
<?php
$mailsid=0; $type=""; $condition="";


if(isset($_GET['mailsid'])){$mailsid=$_GET['mailsid'];}



if(isset($_GET['type']))
{
	$type=$_GET['type'];
}

$dir=""; $menus_sel=""; 
if(isset($_GET['dir']))
{
	$dir=$_GET['dir'];
}



?>


<?php
	if($dir="nutritionist/inbox")
	{
		$query = "update ".Nutritionist." set status='".$type."' where mail_id in (".$mailsid.")";
	}
	
	mysql_query($query);

	
	
?>