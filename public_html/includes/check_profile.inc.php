<?php include("common.inc.php"); ?>

<?php

$firstname="";  $lastname="";

//$created_date=date('Y-m-d h:i:s'); 

if(isset($_GET['firstname'])){$firstname=$_GET['firstname'];}
if(isset($_GET['lastname'])){$lastname=$_GET['lastname'];}

echo "<b style='font-size:12px; line-height:18px; color:#009999;'>Suggested Profile IDs:</b> <br/>";


for($i=1;$i<4;$i++)
{
	$random=rand(0,9999);
	
	$user_profile_id=$firstname."".$lastname."".$random;
	
	$profile_id = GetValue("select user_profile_id from ".Users." where user_profile_id='".$user_profile_id."' and isdeleted=0 and isactive=1", "col");
	
	if($profile_id=="")
	{
		$profile_id=$user_profile_id;
		echo '<a onclick="javascript:GetProfileIdValue('."'$profile_id'".')" style="cursor:pointer;"><span style="line-height:25px;">'."'$profile_id'".'</span></a>&nbsp;&nbsp;&nbsp;<br>';
	}
	else
	{
		//return;
	}
	
	

}

?>

