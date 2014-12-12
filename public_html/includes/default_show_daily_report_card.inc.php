<?php include 'common.inc.php'?>
<?php
	  
	$type=""; $show=""; $strValue=""; $bptype=""; $bphide="";
	$ppbstype=""; $pbbshide=""; $rbstype=""; $rbshide=""; $ubstype=""; 
	$ubshide=""; $cholesteroltype=""; $cholesterolhide=""; $triglyceridetype=""; $triglyceridehide=""; 
	$hdltype=""; $hdlhide=""; $ldltype=""; $ldlhide=""; $cigarettetype=""; $cigarettehide="";
	$beertype=""; $beerhide=""; $spirittype=""; $spirithide="";  $fbftype=""; $fbhide="";
	
	
	$password = "";$username=""; $user_id=""; $email="";
	
	if(isset($_GET['type'])) {
		$type = ($_GET['type']);
		//$username = $converter->encode($_GET['username']);
	}
	
	if(isset($_GET['show'])) {
		$show =($_GET['show']);
		//$password = $converter->encode($_GET['password']);
	}
	
	
	if(isset($_SESSION['UserID']))
	{
		$user_id=$_SESSION['UserID'];
	}

	$created_date=date('Y-m-d h:i:s');
	
	
	
	$query="delete from tbl_daily_report_show_hide where user_id=".$user_id." and type='$type'";
	$result = mysql_query($query);			
	
	
	$data = array(
		'user_id'=> $user_id,
		'type'=>$type,
		'created_date'=>$created_date,
		'ishide'=>$show,
	
	);

	$default_id = $db->insert_array("tbl_daily_report_show_hide", $data);
	
	
	
	$query_r = "SELECT * FROM tbl_daily_report_show_hide where user_id=".$user_id;
	// echo $query;
	$result_r = mysql_query($query_r);
	if($result_r != "") {
		$rowcount = mysql_num_rows($result_r);
		if($rowcount > 0) {
			
			while($row_r = mysql_fetch_assoc($result_r)) {
				extract($row_r);
					$type=$row_r['type'];
					$ishide=$row_r['ishide'];
					
					if($type=="BP")
					{
						$bptype="BP";
						$bphide=$ishide;
					}
					if($type=="FB")
					{
						$fbftype="FB";
						$fbhide=$ishide;
					}
					
					if($type=="PPBS")
					{
						$ppbstype="PPBS";
						$pbbshide=$ishide;
					}
					
					if($type=="RBS")
					{
						$rbstype="RBS";
						$rbshide=$ishide;
					}
					
					if($type=="UBS")
					{
						$ubstype="UBS";
						$ubshide=$ishide;
					}
					
					if($type=="Cholesterol")
					{
						$cholesteroltype="Cholesterol";
						$cholesterolhide=$ishide;
					}
					
					if($type=="Triglyceride")
					{
						$triglyceridetype="Triglyceride";
						$triglyceridehide=$ishide;
					}
					
					if($type=="HDL")
					{
						$hdltype="HDL";
						$hdlhide=$ishide;
					}
					
					if($type=="LDL")
					{
						$ldltype="LDL";
						$ldlhide=$ishide;
					}
					
					
					if($type=="Cigarette")
					{
						$cigarettetype="Cigarette";
						$cigarettehide=$ishide;
					}
					
					if($type=="Beer")
					{
						$beertype="Beer";
						$beerhide=$ishide;
					}
					
					if($type=="Spirit")
					{
						$spirittype="Spirit";
						$spirithide=$ishide;
					}
					
					
					
					
					$strValue = "true###".$bptype."###".$bphide."###".$fbftype."###".$fbhide."###".$ppbstype."###".$pbbshide."###".$rbstype."###".$rbshide."###".$ubstype."###".$ubshide."###".$cholesteroltype."###".$cholesterolhide."###".$triglyceridetype."###".$triglyceridehide."###".$hdltype."###".$hdlhide."###".$ldltype."###".$ldlhide."###".$cigarettetype."###".$cigarettehide."###".$beertype."###".$beerhide."###".$spirittype."###".$spirithide."###";
					
			
	
		
		}
		}
	}
		echo $strValue;
?>

