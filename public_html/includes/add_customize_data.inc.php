<?php include("common.inc.php"); ?>
<?php
$mailsid=0; $type=""; $condition="";$folderid="";$foldername="";


if(isset($_GET['mailsid'])){$mailsid=$_GET['mailsid'];}

$parentidhidd=$_SESSION['UserID'];



if(isset($_GET['folderid']))
{
	$folderid=$_GET['folderid'];
}


if(isset($_GET['foldername']))
{
	$foldername=$_GET['foldername'];
}

$date=date('Y-m-d');

$dup="select * from ".WishList." where mail_id='".$mailsid."' and user_id=".$_SESSION['UserID'];
$exe=mysql_query($dup);
$num_r=mysql_num_rows($exe);
	
	if($num_r <= 0){
		$data = array(
		 'user_id'=>$parentidhidd,
		 'folderid'=>$folderid,
		 'foldername'=>$foldername,
		 'mail_id'=>$mailsid,
		 'date'=>$date,
		 'isdeleted'=>0,
		 //'type'=>$_SESSION['User_Type'],
		);
	
 	 $id = $db->insert_array(WishList, $data);
	}
	else {
	$data = array(
		 'user_id'=>$parentidhidd,
		 'folderid'=>$folderid,
		 'foldername'=>$foldername,
		 'mail_id'=>$mailsid,
		 'date'=>$date,
		 'isdeleted'=>0,
		 //'type'=>$_SESSION['User_Type'],
		);
	$id = $db->update_array(WishList, $data, "mail_id = '".$mailsid."'");

}

?>
