<?php include "common.inc.php";?>
<?php
	
	// to perform all actions
	$recevied_message_1=""; $insert_type=""; $recevied_message="";
	
	if(isset($_GET['insert_type']))
	{
		$insert_type = mysql_real_escape_string($_GET[ 'insert_type' ]);
	}
	
	if(isset($_SESSION['UserID']))
	{
		$user_id=$_SESSION['UserID'];
	}
	else
	{
		$user_id="0";
	}
	
	if(isset($_SESSION['UserType']))
	{
		$user_type=$_SESSION['UserType'];
	}
	else
	{
		$user_type="0";
	}
	
	$data = array(
		'not_applicable' => "NA",
		'type' => $insert_type,
		'user_id' => $user_id,
	);
	$recevied_message=$function->f_Add_NA_Insert($data,"0");
	$recevied_message_1  = explode("###", $recevied_message);
	$data['message'] =$recevied_message_1[1];
	echo json_encode($data);
?>