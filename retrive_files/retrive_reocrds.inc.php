<?php include "../includes/common.inc.php";?>
<?php
	$record_id="0";$retrive_Array=array();$data_values=array();$retrive_Array1=array();$user_id="5";
	if(isset($_GET['cid']))
	{
		$record_id = $converter->decode($_GET['cid']);
	}

	if(isset($_SESSION['UserID']))
	{
		$user_id=$_SESSION['UserID'];
	}
	
	if(isset($_SESSION['UserClerkID']))
	{
		$user_id=$_SESSION['UserClerkID'];
	}
	
	if(isset($_GET['insert_type']))
	{
		$insert_type = $_GET['insert_type'];
	}
	
	if(isset($_GET['patient_id']))
	{
		$patient_id = $_GET['patient_id'];
	}
	
	
	if(isset($_SESSION['UserNutID']))
	{
		$nutritionist_id=$_SESSION['UserNutID'];
	}
	
	
	
	if ($insert_type=="Doc_Consult_Ins")
	{
		$retrive_Array=$get_retrive->Get_Doctor_Consultation(1,$record_id,$user_id);
	} 
	else if ($insert_type=="Medication_Ins")
	{
		$retrive_Array=$get_retrive->Get_Medication(1,$record_id,$user_id);
	}
	
	else if ($insert_type=="Allergies_Ins")
	{
		$retrive_Array=$get_retrive->Get_Allergies(1,$record_id,$user_id);
	}
	
	else if ($insert_type=="Immunization_Ins")
	{
		$retrive_Array=$get_retrive->Get_Immunization(1,$record_id,$user_id);
	}
	
	else if ($insert_type=="Hospital_Ins")
	{
		$retrive_Array=$get_retrive->Get_Hospital_Consultation(1,$record_id,$user_id);
	}
	
	else if ($insert_type=="Family_History_Ins")
	{
		$retrive_Array=$get_retrive->Get_Family_History(1,$record_id,$user_id);
	}
	
	else if ($insert_type=="Blood_Pressure_Ins")
	{
		$retrive_Array=$get_retrive->Get_Blood_Pressure(1,$record_id,$user_id);
	}
	
	else if ($insert_type=="Life_Style_Ins")
	{
		$retrive_Array=$get_retrive->Get_Life_Style(1,$record_id,$user_id);
	}
	
	else if ($insert_type=="Sugar_Profile_Ins")
	{
		$retrive_Array=$get_retrive->Get_Sugar_Profile(1,$record_id,$user_id);
	}
	
	else if ($insert_type=="Clerk_Ins")
	{
		$retrive_Array=$get_retrive->GetClerk(1,$record_id);
	}
	else if ($insert_type=="MD_App")
	{
		$retrive_Array=$get_retrive->GetMDApp(1,$record_id,$user_id);
	}
	
	
	else if ($insert_type=="Lipid_Profile_Ins")
	{
		$date_cur="";
		if(isset($_GET['date_cur']))
		{
			$date_cur=$_GET['date_cur'];
		}
		$retrive_Array=$get_retrive->Get_Lipid_Profile(1,$record_id,$user_id,$date_cur);
	}

	else if ($insert_type=="Health_Problem_Ins")
	{
		$retrive_Array=$get_retrive->Get_Health_Problem(1,$record_id,$user_id);
	}
	else if ($insert_type=="Health_Problem_Ins_Det")
	{
		$retrive_Array=$get_retrive->Get_Health_Problem_Detail(100,$record_id);
	}
	else if ($insert_type=="Calorie_Ins")
	{
		$retrive_Array=$get_retrive->Get_Calorie($record_id,$user_id);
		
	}
	else if ($insert_type=="Calorie_Details_Ins")
	{
		$retrive_Array=$get_retrive->Get_Calorie_Details($record_id,$user_id);
		
	}
	
	else if ($insert_type=="Hospital_Master")
	{
		$retrive_Array=$get_retrive->GetHospitalMaster($record_id,$user_id);
		
	}
	
	else if ($insert_type=="Doctor_Comment_Ins")
	{
		if(isset($_GET['patient_id']))
		{
			$patient_id = $converter->decode($_GET['patient_id']);
		}
		
		$retrive_Array=$get_retrive->GetDocComments(1,$patient_id,$user_id);
		
	}
	
	
	
	else if ($insert_type=="Send_Diet_Plan_Ins")
	{
		if(isset($_GET['patient_id']))
		{
			$patient_id = $converter->decode($_GET['patient_id']);
		}
		
		$retrive_Array=$get_retrive->GetDietPlan(1,$patient_id,$nutritionist_id);
		
	}
	
	
	
	
	else if ($insert_type=="Doctor_Ins")
	{
		$type="";
		
		if(isset($_GET['type'])){
			$type=($_GET['type']);
		}
		
		$retrive_Array=$get_retrive->GetDoctor(1, $record_id,$type);
		
	}
	
	
	else if ($insert_type=="uploadFile")
	{
		if(isset($_GET['randomid'])){
			$randomid=$_GET['randomid'];
		}
		else
		{
			$randomid=0;
		}
		
		if(isset($_GET['type'])){
			$type=$_GET['type'];
		}
		else
		{
			$type="";
		}
		$retrive_Array=$get_retrive->Get_uploadFile(100,$record_id, $randomid, $type);
	}
	
	else if ($insert_type=="Radiology")
	{
		if(isset($_GET['randomid'])){
			$randomid=$_GET['randomid'];
		}
		else
		{
			$randomid=0;
		}
		
		if(isset($_GET['type'])){
			$type=$_GET['type'];
		}
		else
		{
			$type="";
		}
		$retrive_Array=$get_retrive->Get_Radiology_Report(100,$record_id, $randomid, $type);
	}

	else if ($insert_type=="Compose_Ins")
	{
		if(isset($_GET['type'])){
			$type=$_GET['type'];
		}
		else
		{
			$type="";
		}
		
		$retrive_Array=$get_retrive->GetComMails($record_id,$type,$user_id);
	} 
	
	while($data_values = mysql_fetch_array( $retrive_Array )){
		$retrive_Array1[]=$data_values;
	}
	
	
	$retrive_Array1=json_encode($retrive_Array1);
	echo $retrive_Array1;
?>