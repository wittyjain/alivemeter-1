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
	
	
	if($insert_type=="Doc_Consult_Ins"){
		
		
		$random_id = mysql_real_escape_string($_GET[ 'random_id' ]);
		$doc_consult_id = mysql_real_escape_string($_GET[ 'doc_consult_id' ]);
		$consult_day = mysql_real_escape_string($_GET[ 'consult_day' ]);
		$consult_month = mysql_real_escape_string($_GET[ 'consult_month' ]);
		$consult_year = mysql_real_escape_string($_GET[ 'consult_year' ]);
		$doctor_id = mysql_real_escape_string($_GET[ 'doctor_id' ]);
		$vital_record = mysql_real_escape_string($_GET[ 'vital_record' ]);
		$height = mysql_real_escape_string($_GET[ 'height' ]);
		$weight = mysql_real_escape_string($_GET[ 'weight' ]);
		$temperature = mysql_real_escape_string($_GET[ 'temperature' ]);
		$pulse = mysql_real_escape_string($_GET[ 'pulse' ]);
		$blood_pressure = mysql_real_escape_string($_GET[ 'blood_pressure' ]);
		$breathing_rate = mysql_real_escape_string($_GET[ 'breathing_rate' ]);
		$body_mass_index = mysql_real_escape_string($_GET[ 'body_mass_index' ]);
		$resting_heart_rate= mysql_real_escape_string($_GET[ 'resting_heart_rate' ]);
		$notes = mysql_real_escape_string($_GET[ 'notes' ]);
		$store_diagnosed_cond = mysql_real_escape_string($_GET[ 'store_diagnosed_cond' ]);
		$health_problem = mysql_real_escape_string($_GET[ 'health_problem' ]);
		$diagnosed_cond = mysql_real_escape_string($_GET[ 'diagnosed_cond' ]);
		$consult_date = $consult_year."-".$consult_month."-".$consult_day;
		$isactive=1;
		$isdeleted=0;
		
		$data = array(
			'random_id' => $random_id,
			'user_id' => $user_id,
			'consult_date'=>$consult_date,
			'consult_day'=>$consult_day,
			'consult_month'=>$consult_month,
			'consult_year'=>$consult_year,
			'doctor_id' => $doctor_id,
			'vital_record' => $vital_record,
			'height' => $height,
			'weight' => $weight,
			'temperature' => $temperature,
			'pulse' => $pulse,
			'blood_pressure' => $blood_pressure,
			'breathing_rate' => $breathing_rate,
			'body_mass_index' => $body_mass_index,
			'resting_heart_rate' => $resting_heart_rate,
			'notes' => $notes,
			'store_diagnosed_cond' => $store_diagnosed_cond,
			'health_problem' => $health_problem,
			'diagnosed_cond' => $diagnosed_cond,
			'isactive'=>$isactive,
			'isdeleted' => $isdeleted,
			
		);
		$recevied_message=$function->f_Add_Doc_Consult_Insert($data,$doc_consult_id);
		                                   
	}	
	
	else if($insert_type=="Medication_Ins"){
		
		
		
		$medication_id = mysql_real_escape_string($_GET[ 'medication_id' ]);
		$medicine = mysql_real_escape_string($_GET[ 'medicine' ]);
		$dosage = mysql_real_escape_string($_GET[ 'dosage' ]);
		$duration = mysql_real_escape_string($_GET[ 'duration' ]);
		$track_machine = mysql_real_escape_string($_GET[ 'track_machine' ]);
		$follow_prescription = mysql_real_escape_string($_GET[ 'follow_prescription' ]);
		$health_problem = mysql_real_escape_string($_GET[ 'health_problem' ]);
		$notes= mysql_real_escape_string($_GET[ 'notes' ]);
		$start_date = mysql_real_escape_string($_GET[ 'start_date' ]);
		$start_month = mysql_real_escape_string($_GET[ 'start_month' ]);
		$end_date = mysql_real_escape_string($_GET[ 'end_date' ]);
		$end_month= mysql_real_escape_string($_GET[ 'end_month' ]);
		$daily_freq_morng = mysql_real_escape_string($_GET[ 'daily_freq_morng' ]);
		$feq_mor_hour = mysql_real_escape_string($_GET[ 'feq_mor_hour' ]);
		$feq_mor_min = mysql_real_escape_string($_GET[ 'feq_mor_min' ]);
		$daily_freq_even = mysql_real_escape_string($_GET[ 'daily_freq_even' ]);
		$feq_eve_hour= mysql_real_escape_string($_GET[ 'feq_eve_hour' ]);
		$feq_eve_min = mysql_real_escape_string($_GET[ 'feq_eve_min' ]);
		$daily_freq_ngt = mysql_real_escape_string($_GET[ 'daily_freq_ngt' ]);
		$feq_ngt_hour = mysql_real_escape_string($_GET[ 'feq_ngt_hour' ]);
		$feq_ngt_min = mysql_real_escape_string($_GET[ 'feq_ngt_min' ]);
		$purchase_day = mysql_real_escape_string($_GET[ 'purchase_day' ]);
		$purchase_month = mysql_real_escape_string($_GET[ 'purchase_month' ]);
		$purchase_reminder = mysql_real_escape_string($_GET[ 'purchase_reminder' ]);
		$intake_reminder = mysql_real_escape_string($_GET[ 'intake_reminder' ]);		
		$alert_mobile = mysql_real_escape_string($_GET[ 'alert_mobile' ]);
		$alert_email = mysql_real_escape_string($_GET[ 'alert_email' ]);
		$daily_freq_after = mysql_real_escape_string($_GET[ 'daily_freq_after' ]);
		$feq_af_hour = mysql_real_escape_string($_GET[ 'feq_af_hour' ]);
		$feq_af_min = mysql_real_escape_string($_GET[ 'feq_af_min' ]);
		
		//$consult_date = $consult_year."-".$consult_month."-".$consult_day;
		$isactive=1;
		$isdeleted=0;
		
		$data = array(
			'user_id' => $user_id,
			'medicine' => $medicine,
			'dosage'=>$dosage,
			'duration'=>$duration,
			'track_machine'=>$track_machine,
			'follow_prescription'=>$follow_prescription,
			'health_problem' => $health_problem,
			'notes' => $notes,
			'start_date' => $start_date,
			'end_date' => $end_date,
			'start_month' => $start_month,
			'end_month' => $end_month,
			'daily_freq_morng' => $daily_freq_morng,
			'feq_mor_hour' => $feq_mor_hour,
			'feq_mor_min' => $feq_mor_min,
			'daily_freq_after' => $daily_freq_after,
			'feq_af_hour' => $feq_af_hour,
			'feq_af_min' => $feq_af_min,
			'daily_freq_even' => $daily_freq_even,
			'feq_eve_hour' => $feq_eve_hour,
			'feq_eve_min' => $feq_eve_min,
			'daily_freq_ngt' => $daily_freq_ngt,
			'feq_ngt_hour' => $feq_ngt_hour,
			'feq_ngt_min' => $feq_ngt_min,
			'purchase_day' => $purchase_day,
			'purchase_month' => $purchase_month,
			'purchase_reminder' => $purchase_reminder,
			'intake_reminder'=>$intake_reminder,
			'alert_mobile' => $alert_mobile,
			'alert_email' => $alert_email,
			'isactive'=>$isactive,
			'isdeleted' => $isdeleted,
			
		);
		$recevied_message=$function->f_Add_Medication_Insert($data,$medication_id);
		                                   
	}
	
	
	else if($insert_type=="Allergies_Ins"){
		
		$random_id = mysql_real_escape_string($_GET[ 'random_id' ]);
		$allergies_id = mysql_real_escape_string($_GET[ 'allergies_id' ]);
		$allergic_to = mysql_real_escape_string($_GET[ 'allergic_to' ]);
		$reaction = mysql_real_escape_string($_GET[ 'reaction' ]);
		$status = mysql_real_escape_string($_GET[ 'status' ]);
		$last_observe_day = mysql_real_escape_string($_GET[ 'last_observe_day' ]);
		$last_observe_month = mysql_real_escape_string($_GET[ 'last_observe_month' ]);
		$last_observe_year = mysql_real_escape_string($_GET[ 'last_observe_year' ]);
		$consult_day = mysql_real_escape_string($_GET[ 'consult_day' ]);
		$consult_month = mysql_real_escape_string($_GET[ 'consult_month' ]);
		$consult_year = mysql_real_escape_string($_GET[ 'consult_year' ]);	
		$doctor_id = mysql_real_escape_string($_GET[ 'doctor_id' ]);
		
		$consult_date = $consult_year."-".$consult_month."-".$consult_day;
		$last_observe_date = $last_observe_year."-".$last_observe_month."-".$last_observe_day;
		
		$isactive=1;
		$isdeleted=0;
		
		$data = array(
			'random_id' => $random_id,
			'user_id' => $user_id,
			'allergic_to' => $allergic_to,
			'reaction' => $reaction,
			'status' => $status,
			'last_observe_date'=>$last_observe_date,
			'last_observe_day'=>$last_observe_day,
			'last_observe_month'=>$last_observe_month,
			'last_observe_year'=>$last_observe_year,
			'consult_date'=>$consult_date,
			'consult_day'=>$consult_day,
			'consult_month'=>$consult_month,
			'consult_year'=>$consult_year,
			'doctor_id' => $doctor_id,
			'isactive'=>$isactive,
			'isdeleted' => $isdeleted,
			
		);
		$recevied_message=$function->f_Add_Allergies_Insert($data,$allergies_id);
		                                   
	}
	
	else if($insert_type=="Hospital_Ins"){
		
		$hospital_id = mysql_real_escape_string($_GET[ 'hospital_id' ]);
		$hospital_name= mysql_real_escape_string($_GET[ 'hospital_name' ]);
		$hospital_day = mysql_real_escape_string($_GET[ 'hospital_day' ]);
		$hospital_month = mysql_real_escape_string($_GET[ 'hospital_month' ]);
		$hospital_year = mysql_real_escape_string($_GET[ 'hospital_year' ]);
		
		$doctor_id = mysql_real_escape_string($_GET[ 'doctor_id' ]);
		$admission_reason = mysql_real_escape_string($_GET[ 'admission_reason' ]);
		$diagnosis = mysql_real_escape_string($_GET[ 'diagnosis' ]);
		
		
		$discharge_day = mysql_real_escape_string($_GET[ 'discharge_day' ]);
		$discharge_month = mysql_real_escape_string($_GET[ 'discharge_month' ]);
		$discharge_year = mysql_real_escape_string($_GET[ 'discharge_year' ]);
		
		$diagnosis_summary= mysql_real_escape_string($_GET[ 'diagnosis_summary' ]);
		$doctor_instruction = mysql_real_escape_string($_GET[ 'doctor_instruction' ]);

		
		$next_day = mysql_real_escape_string($_GET[ 'next_day' ]);
		$next_month = mysql_real_escape_string($_GET[ 'next_month' ]);
		$next_year = mysql_real_escape_string($_GET[ 'next_year' ]);

		
		$reminder_day = mysql_real_escape_string($_GET[ 'reminder_day' ]);
		$reminder_month = mysql_real_escape_string($_GET[ 'reminder_month' ]);
		$reminder_year = mysql_real_escape_string($_GET[ 'reminder_year' ]);

		$hospital_date = $hospital_year."-".$hospital_month."-".$hospital_day;
		$discharge_date = $discharge_year."-".$discharge_month."-".$discharge_day;
		$next_date = $next_year."-".$next_month."-".$next_day;
		$reminder_date = $reminder_year."-".$reminder_month."-".$reminder_day;

		$isactive=1;
		$isdeleted=0;
		
		$data = array(
			'user_id' => $user_id,
			'hospital_name'=>$hospital_name,
			'hospital_date'=>$hospital_date,
			'hospital_day'=>$hospital_day,
			'hospital_month'=>$hospital_month,
			'hospital_year'=>$hospital_year,
			'doctor_id' => $doctor_id,
			'admission_reason' => $admission_reason,
			'diagnosis' => $diagnosis,
			'next_year' => $next_year,
			'discharge_date' => $discharge_date,
			'discharge_day' => $discharge_day,
			'discharge_month' => $discharge_month,
			'discharge_year' => $discharge_year,
			'diagnosis_summary' => $diagnosis_summary,
			'doctor_instruction' => $doctor_instruction,			
			'next_date' => $next_date,
			'next_day' => $next_day,
			'next_month' => $next_month,
			'reminder_date' => $reminder_date,
			'reminder_day' => $reminder_day,
			'reminder_month' => $reminder_month,
			'reminder_year' => $reminder_year,
			'isactive'=>$isactive,
			'isdeleted' => $isdeleted,
			
		);
		$recevied_message=$function->f_Add_Hospital_Insert($data,$hospital_id);
		                                   
	}
	
	
	
	else if($insert_type=="Immunization_Ins"){
		
		$immunization_id = mysql_real_escape_string($_GET[ 'immunization_id' ]);
		$immunization_name= mysql_real_escape_string($_GET[ 'immunization_name' ]);
		
		$administered_day = mysql_real_escape_string($_GET[ 'administered_day' ]);
		$administered_month = mysql_real_escape_string($_GET[ 'administered_month' ]);
		$administered_year = mysql_real_escape_string($_GET[ 'administered_year' ]);
		
		$reminder_day = mysql_real_escape_string($_GET[ 'reminder_day' ]);
		$reminder_month = mysql_real_escape_string($_GET[ 'reminder_month' ]);
		$reminder_year = mysql_real_escape_string($_GET[ 'reminder_year' ]);
		
		$immunization_hour = mysql_real_escape_string($_GET[ 'immunization_hour' ]);
		$immunization_min = mysql_real_escape_string($_GET[ 'immunization_min' ]);
		
	
		$administered_date = $administered_year."-".$administered_month."-".$administered_day;
		
		$reminder_date = $reminder_year."-".$reminder_month."-".$reminder_day;

		$isactive=1;
		$isdeleted=0;
		
		$data = array(
			'user_id' => $user_id,
			'immunization_name'=>$immunization_name,
			'administered_date'=>$administered_date,
			'administered_day'=>$administered_day,
			'administered_month'=>$administered_month,
			'administered_year'=>$administered_year,
			'reminder_date' => $reminder_date,
			'reminder_day' => $reminder_day,
			'reminder_month' => $reminder_month,
			'reminder_year' => $reminder_year,
			'immunization_hour' => $immunization_hour,
			'immunization_min' => $immunization_min,			
			'isactive'=>$isactive,
			'isdeleted' => $isdeleted,
			
		);
		$recevied_message=$function->f_Add_Immunization_Insert($data,$immunization_id);
		                                   
	}
	
	
	else if($insert_type=="Family_History_Ins"){
		
		$family_history_id = mysql_real_escape_string($_GET[ 'family_history_id' ]);
		
		$relation_id = mysql_real_escape_string($_GET[ 'relation_id' ]);
		$medical_condition = mysql_real_escape_string($_GET[ 'medical_condition' ]);
		$death_cause = mysql_real_escape_string($_GET[ 'death_cause' ]);
		
		$isactive=1;
		$isdeleted=0;
		
		$data = array(
			'user_id' => $user_id,
			'relation_id' => $relation_id,
			'medical_condition' => $medical_condition,
			'death_cause' => $death_cause,	
			'isactive'=>$isactive,
			'isdeleted' => $isdeleted,
			
		);
		$recevied_message=$function->f_Add_Family_History_Insert($data,$family_history_id);
		                                   
	}
	
	else if($insert_type=="Immunization_Ins"){
		
		$immunization_id = mysql_real_escape_string($_GET[ 'immunization_id' ]);
		$immunization_name= mysql_real_escape_string($_GET[ 'immunization_name' ]);
		
		$administered_day = mysql_real_escape_string($_GET[ 'administered_day' ]);
		$administered_month = mysql_real_escape_string($_GET[ 'administered_month' ]);
		$administered_year = mysql_real_escape_string($_GET[ 'administered_year' ]);
		
		$reminder_day = mysql_real_escape_string($_GET[ 'reminder_day' ]);
		$reminder_month = mysql_real_escape_string($_GET[ 'reminder_month' ]);
		$reminder_year = mysql_real_escape_string($_GET[ 'reminder_year' ]);
		
		$immunization_hour = mysql_real_escape_string($_GET[ 'immunization_hour' ]);
		$immunization_min = mysql_real_escape_string($_GET[ 'immunization_min' ]);
		
	
		$administered_date = $administered_year."-".$administered_month."-".$administered_day;
		
		$reminder_date = $reminder_year."-".$reminder_month."-".$reminder_day;

		$isactive=1;
		$isdeleted=0;
		
		$data = array(
			'user_id' => $user_id,
			'immunization_name'=>$immunization_name,
			'administered_date'=>$administered_date,
			'administered_day'=>$administered_day,
			'administered_month'=>$administered_month,
			'administered_year'=>$administered_year,
			'reminder_date' => $reminder_date,
			'reminder_day' => $reminder_day,
			'reminder_month' => $reminder_month,
			'reminder_year' => $reminder_year,
			'immunization_hour' => $immunization_hour,
			'immunization_min' => $immunization_min,			
			'isactive'=>$isactive,
			'isdeleted' => $isdeleted,
			
		);
		$recevied_message=$function->f_Add_Immunization_Insert($data,$immunization_id);
		                                   
	}
	
	
	else if($insert_type=="Blood_Pressure_Ins"){
		
		$blood_pressure_id = mysql_real_escape_string($_GET[ 'blood_pressure_id' ]);
		$blood_pressure_systolic = mysql_real_escape_string($_GET[ 'blood_pressure_systolic' ]);
		$del_track_unit = mysql_real_escape_string($_GET[ 'del_track_unit' ]);
		$del_track_day = mysql_real_escape_string($_GET[ 'del_track_day' ]);
		$del_track_month = mysql_real_escape_string($_GET[ 'del_track_month' ]);
		$del_track_year = mysql_real_escape_string($_GET[ 'del_track_year' ]);
		
		$del_track_date = $del_track_year."-".$del_track_month."-".$del_track_day;
		
		$isactive=1;
		$isdeleted=0;
		
		$data = array(
			'user_id' => $user_id,
			'blood_pressure_systolic' => $blood_pressure_systolic,
			'del_track_unit' => $del_track_unit,
			'del_track_date' => $del_track_date,
			'del_track_day' => $del_track_day,
			'del_track_month' => $del_track_month,
			'del_track_year' => $del_track_year,
			'isactive'=>$isactive,
			'isdeleted' => $isdeleted,
			
		);
		$recevied_message=$function->f_Add_Blood_Pressure_Insert($data,$blood_pressure_id);
		                                   
	}
	
	else if($insert_type=="Life_Style_Ins"){
		
		$life_style_id = mysql_real_escape_string($_GET[ 'life_style_id' ]);
		$spirit = mysql_real_escape_string($_GET[ 'spirit' ]);
		$beer = mysql_real_escape_string($_GET[ 'beer' ]);
		$cigarette = mysql_real_escape_string($_GET[ 'cigarette' ]);
		$life_style_sleep = mysql_real_escape_string($_GET[ 'life_style_sleep' ]);
		
		$spirit_goal = mysql_real_escape_string($_GET[ 'spirit_goal' ]);
		$beer_goal = mysql_real_escape_string($_GET[ 'beer_goal' ]);
		$cigarette_goal = mysql_real_escape_string($_GET[ 'cigarette_goal' ]);
		$life_style_sleep_goal = mysql_real_escape_string($_GET[ 'life_style_sleep_goal' ]);
		
		
		$physical_stress = mysql_real_escape_string($_GET[ 'physical_stress' ]);
		$physical_stress_details = mysql_real_escape_string($_GET[ 'physical_stress_details' ]);
		$mental_stress = mysql_real_escape_string($_GET[ 'mental_stress' ]);
		$mental_stress_details = mysql_real_escape_string($_GET[ 'mental_stress_details' ]);
		$life_style_date = mysql_real_escape_string($_GET[ 'life_style_date' ]);
		$life_style_day = mysql_real_escape_string($_GET[ 'life_style_day' ]);
		$life_style_month = mysql_real_escape_string($_GET[ 'life_style_month' ]);
		$life_style_year = mysql_real_escape_string($_GET[ 'life_style_year' ]);
		
		
		$life_style_date = $life_style_year."-".$life_style_month."-".$life_style_day;
		
		
		$isactive=1;
		$isdeleted=0;
		
		$data = array(
			'user_id' => $user_id,
			'spirit' => $spirit,
			'beer' => $beer,
			'cigarette' => $cigarette,
			'life_style_sleep' => $life_style_sleep,
			'spirit_goal' => $spirit_goal,
			'beer_goal' => $beer_goal,
			'cigarette_goal' => $cigarette_goal,
			'life_style_sleep_goal' => $life_style_sleep_goal,
			'physical_stress' => $physical_stress,
			'physical_stress_details' => $physical_stress_details,
			'mental_stress' => $mental_stress,
			'mental_stress_details' => $mental_stress_details,
			'life_style_day' => $life_style_day,
			'life_style_month' => $life_style_month,
			'life_style_year' => $life_style_year,
			'life_style_date' => $life_style_date,
			'isactive'=>$isactive,
			'isdeleted' => $isdeleted,
			
		);
		$recevied_message=$function->f_Add_Life_Style_Insert($data,$life_style_id);
		                                   
	}
	
	
	else if($insert_type=="Sugar_Profile_Ins"){
		
		$sugar_profile_id = mysql_real_escape_string($_GET[ 'sugar_profile_id' ]);
		
		//$fasting_blood_sugar_date=mysql_real_escape_string($_GET[ 'fasting_blood_sugar_date' ]);
		$fasting_blood_sugar_day=mysql_real_escape_string($_GET[ 'fasting_blood_sugar_day' ]);
		$fasting_blood_sugar_month=mysql_real_escape_string($_GET[ 'fasting_blood_sugar_month' ]);
		$fasting_blood_sugar_year=mysql_real_escape_string($_GET[ 'fasting_blood_sugar_year' ]);
		$fasting_blood_sugar_result=mysql_real_escape_string($_GET[ 'fasting_blood_sugar_result' ]);
		$fasting_blood_sugar_range=mysql_real_escape_string($_GET[ 'fasting_blood_sugar_range' ]);
		$fasting_blood_sugar_range1=mysql_real_escape_string($_GET[ 'fasting_blood_sugar_range1' ]);
		$fasting_blood_sugar_unit=mysql_real_escape_string($_GET[ 'fasting_blood_sugar_unit' ]);
		
		//$post_parandial_date=mysql_real_escape_string($_GET[ 'post_parandial_date' ]);
		$post_parandial_day=mysql_real_escape_string($_GET[ 'post_parandial_day' ]);
		$post_parandial_month=mysql_real_escape_string($_GET[ 'post_parandial_month' ]);
		$post_parandial_year=mysql_real_escape_string($_GET[ 'post_parandial_year' ]);
		$post_parandial_result=mysql_real_escape_string($_GET[ 'post_parandial_result' ]);
		$post_parandial_range=mysql_real_escape_string($_GET[ 'post_parandial_range' ]);
		$post_parandial_range1=mysql_real_escape_string($_GET[ 'post_parandial_range1' ]);
		$post_parandial_unit=mysql_real_escape_string($_GET[ 'post_parandial_unit' ]);
		
		
		//$urine_blood_date=mysql_real_escape_string($_GET[ 'urine_blood_date' ]);
		$urine_blood_day=mysql_real_escape_string($_GET[ 'urine_blood_day' ]);
		$urine_blood_month=mysql_real_escape_string($_GET[ 'urine_blood_month' ]);
		$urine_blood_year=mysql_real_escape_string($_GET[ 'urine_blood_year' ]);
		$urine_blood_result=mysql_real_escape_string($_GET[ 'urine_blood_result' ]);
		$urine_blood_range=mysql_real_escape_string($_GET[ 'urine_blood_range' ]);
		$urine_blood_range1=mysql_real_escape_string($_GET[ 'urine_blood_range1' ]);
		$urine_blood_unit=mysql_real_escape_string($_GET[ 'urine_blood_unit' ]);
		
		
		//$random_blood_sugar_date=mysql_real_escape_string($_GET[ 'random_blood_sugar_date' ]);
		$random_blood_sugar_day=mysql_real_escape_string($_GET[ 'random_blood_sugar_day' ]);
		$random_blood_sugar_month=mysql_real_escape_string($_GET[ 'random_blood_sugar_month' ]);
		$random_blood_sugar_year=mysql_real_escape_string($_GET[ 'random_blood_sugar_year' ]);
		$random_blood_sugar_result=mysql_real_escape_string($_GET[ 'random_blood_sugar_result' ]);
		$random_blood_sugar_range=mysql_real_escape_string($_GET[ 'random_blood_sugar_range' ]);
		$random_blood_sugar_range1=mysql_real_escape_string($_GET[ 'random_blood_sugar_range1' ]);
		$random_blood_sugar_unit=mysql_real_escape_string($_GET[ 'random_blood_sugar_unit' ]);
		
		
		
		$fasting_blood_sugar_date = $fasting_blood_sugar_year."-".$fasting_blood_sugar_month."-".$fasting_blood_sugar_day;
		$post_parandial_date = $post_parandial_year."-".$post_parandial_month."-".$post_parandial_day;
		$urine_blood_date = $urine_blood_year."-".$urine_blood_month."-".$urine_blood_day;
		$random_blood_sugar_date = $random_blood_sugar_year."-".$random_blood_sugar_month."-".$random_blood_sugar_day;
		
		$isactive=1;
		$isdeleted=0;
		
		$data = array(
			'user_id' => $user_id,
			'fasting_blood_sugar_date'=>$fasting_blood_sugar_date,
			'fasting_blood_sugar_day'=>$fasting_blood_sugar_day,
			'fasting_blood_sugar_month'=>$fasting_blood_sugar_month,
			'fasting_blood_sugar_year'=>$fasting_blood_sugar_year,
			'fasting_blood_sugar_result'=>$fasting_blood_sugar_result,
			'fasting_blood_sugar_range'=>$fasting_blood_sugar_range,
			'fasting_blood_sugar_range1'=>$fasting_blood_sugar_range1,
			'fasting_blood_sugar_unit'=>$fasting_blood_sugar_unit,
			'post_parandial_date'=>$post_parandial_date,
			'post_parandial_day'=>$post_parandial_day,
			'post_parandial_month'=>$post_parandial_month,
			'post_parandial_year'=>$post_parandial_year,
			'post_parandial_result'=>$post_parandial_result,
			'post_parandial_range'=>$post_parandial_range,
			'post_parandial_range1'=>$post_parandial_range1,
			'post_parandial_unit'=>$post_parandial_unit,
			'urine_blood_date'=>$urine_blood_date,
			'urine_blood_day'=>$urine_blood_day,
			'urine_blood_month'=>$urine_blood_month,
			'urine_blood_year'=>$urine_blood_year,
			'urine_blood_result'=>$urine_blood_result,
			'urine_blood_range'=>$urine_blood_range,
			'urine_blood_range1'=>$urine_blood_range1,
			'urine_blood_unit'=>$urine_blood_unit,
			'random_blood_sugar_date'=>$random_blood_sugar_date,
			'random_blood_sugar_day'=>$random_blood_sugar_day,
			'random_blood_sugar_month'=>$random_blood_sugar_month,
			'random_blood_sugar_year'=>$random_blood_sugar_year,
			'random_blood_sugar_result'=>$random_blood_sugar_result,
			'random_blood_sugar_range'=>$random_blood_sugar_range,
			'random_blood_sugar_range1'=>$random_blood_sugar_range1,
			'random_blood_sugar_unit'=>$random_blood_sugar_unit,	
			'isactive'=>$isactive,
			'isdeleted' => $isdeleted,
			
		);
		$recevied_message=$function->f_Add_Sugar_Profile_Insert($data,$sugar_profile_id);
		                                   
	}
	
	
	else if($insert_type=="Lipid_Profile_Ins"){
		
		$lipid_profile_id = mysql_real_escape_string($_GET[ 'lipid_profile_id' ]);
		
		$triglyceride_blood_sugar_date=mysql_real_escape_string($_GET[ 'triglyceride_blood_sugar_date' ]);
		$triglyceride_blood_sugar_day=mysql_real_escape_string($_GET[ 'triglyceride_blood_sugar_day' ]);
		$triglyceride_blood_sugar_month=mysql_real_escape_string($_GET[ 'triglyceride_blood_sugar_month' ]);
		$triglyceride_blood_sugar_year=mysql_real_escape_string($_GET[ 'triglyceride_blood_sugar_year' ]);
		$triglyceride_blood_sugar_result=mysql_real_escape_string($_GET[ 'triglyceride_blood_sugar_result' ]);
		$triglyceride_blood_sugar_range=mysql_real_escape_string($_GET[ 'triglyceride_blood_sugar_range' ]);
		$triglyceride_blood_sugar_range1=mysql_real_escape_string($_GET[ 'triglyceride_blood_sugar_range1' ]);
		$triglyceride_blood_sugar_unit=mysql_real_escape_string($_GET[ 'triglyceride_blood_sugar_unit' ]);
		
		$ldl_date=mysql_real_escape_string($_GET[ 'ldl_date' ]);
		$ldl_day=mysql_real_escape_string($_GET[ 'ldl_day' ]);
		$ldl_month=mysql_real_escape_string($_GET[ 'ldl_month' ]);
		$ldl_year=mysql_real_escape_string($_GET[ 'ldl_year' ]);
		$ldl_result=mysql_real_escape_string($_GET[ 'ldl_result' ]);
		$ldl_range=mysql_real_escape_string($_GET[ 'ldl_range' ]);
		$ldl_range1=mysql_real_escape_string($_GET[ 'ldl_range1' ]);
		$ldl_unit=mysql_real_escape_string($_GET[ 'ldl_unit' ]);
		
		
		$hdl_date=mysql_real_escape_string($_GET[ 'hdl_date' ]);
		$hdl_day=mysql_real_escape_string($_GET[ 'hdl_day' ]);
		$hdl_month=mysql_real_escape_string($_GET[ 'hdl_month' ]);
		$hdl_year=mysql_real_escape_string($_GET[ 'hdl_year' ]);
		$hdl_result=mysql_real_escape_string($_GET[ 'hdl_result' ]);
		$hdl_range=mysql_real_escape_string($_GET[ 'hdl_range' ]);
		$hdl_range1=mysql_real_escape_string($_GET[ 'hdl_range1' ]);
		$hdl_unit=mysql_real_escape_string($_GET[ 'hdl_unit' ]);
		
		
		$cholesterol_date=mysql_real_escape_string($_GET[ 'cholesterol_date' ]);
		$cholesterol_day=mysql_real_escape_string($_GET[ 'cholesterol_day' ]);
		$cholesterol_month=mysql_real_escape_string($_GET[ 'cholesterol_month' ]);
		$cholesterol_year=mysql_real_escape_string($_GET[ 'cholesterol_year' ]);
		$cholesterol_result=mysql_real_escape_string($_GET[ 'cholesterol_result' ]);
		$cholesterol_range=mysql_real_escape_string($_GET[ 'cholesterol_range' ]);
		$cholesterol_range1=mysql_real_escape_string($_GET[ 'cholesterol_range1' ]);
		$cholesterol_unit=mysql_real_escape_string($_GET[ 'cholesterol_unit' ]);
		
		
		
		$triglyceride_blood_sugar_date = $triglyceride_blood_sugar_year."-".$triglyceride_blood_sugar_month."-".$triglyceride_blood_sugar_day;
		$ldl_date = $ldl_year."-".$ldl_month."-".$ldl_day;
		$hdl_date = $hdl_year."-".$hdl_month."-".$hdl_day;
		$cholesterol_date = $cholesterol_year."-".$cholesterol_month."-".$cholesterol_day;
		
		$isactive=1;
		$isdeleted=0;
		
		$data = array(
			'user_id' => $user_id,
			'triglyceride_blood_sugar_date'=>$triglyceride_blood_sugar_date,
			'triglyceride_blood_sugar_day'=>$triglyceride_blood_sugar_day,
			'triglyceride_blood_sugar_month'=>$triglyceride_blood_sugar_month,
			'triglyceride_blood_sugar_year'=>$triglyceride_blood_sugar_year,
			'triglyceride_blood_sugar_result'=>$triglyceride_blood_sugar_result,
			'triglyceride_blood_sugar_range'=>$triglyceride_blood_sugar_range,
			'triglyceride_blood_sugar_range1'=>$triglyceride_blood_sugar_range1,
			'triglyceride_blood_sugar_unit'=>$triglyceride_blood_sugar_unit,
			'ldl_date'=>$ldl_date,
			'ldl_day'=>$ldl_day,
			'ldl_month'=>$ldl_month,
			'ldl_year'=>$ldl_year,
			'ldl_result'=>$ldl_result,
			'ldl_range'=>$ldl_range,
			'ldl_range1'=>$ldl_range1,
			'ldl_unit'=>$ldl_unit,
			'hdl_date'=>$hdl_date,
			'hdl_day'=>$hdl_day,
			'hdl_month'=>$hdl_month,
			'hdl_year'=>$hdl_year,
			'hdl_result'=>$hdl_result,
			'hdl_range'=>$hdl_range,
			'hdl_range1'=>$hdl_range1,
			'hdl_unit'=>$hdl_unit,
			'cholesterol_date'=>$cholesterol_date,
			'cholesterol_day'=>$cholesterol_day,
			'cholesterol_month'=>$cholesterol_month,
			'cholesterol_year'=>$cholesterol_year,
			'cholesterol_result'=>$cholesterol_result,
			'cholesterol_range'=>$cholesterol_range,
			'cholesterol_range1'=>$cholesterol_range1,
			'cholesterol_unit'=>$cholesterol_unit,		
			'isactive'=>$isactive,
			'isdeleted' => $isdeleted,
			
		);
		$recevied_message=$function->f_Add_Lipid_Profile_Insert($data,$lipid_profile_id);
		                                   
	}
	
	else if($insert_type=="Health_Problem_Ins"){
		$data=array();

		$health_problem_id = mysql_real_escape_string($_POST['txt_Health_Problem_ID']);
		$cardiac_problem = mysql_real_escape_string($_POST['cardiacProblems']);
		$eye_problem = mysql_real_escape_string($_POST['EyerelatedProblems']);
		$kidney_problem = mysql_real_escape_string($_POST['FaceProblems']);
		$circulation_problem = mysql_real_escape_string($_POST['Bloodcirculation']);
		$skin_problem = mysql_real_escape_string($_POST['FaceskinProblems']);
		$digestive_problem = mysql_real_escape_string($_POST['DigestiveProblems']);
		$joint_problem = mysql_real_escape_string($_POST['JointpainsProblems']);
		$constipation_problem = mysql_real_escape_string($_POST['ConstipationProblems']);
		$other_problem = mysql_real_escape_string($_POST['OtherProblems']);
		 
		$isactive=1;
		$isdeleted=0;
		
		$data1 = array(
			'user_id' => $user_id,
			'cardiac_problem' => $cardiac_problem,
			'eye_problem' => $eye_problem,
			'kidney_problem' => $kidney_problem,
			'circulation_problem' => $circulation_problem,
			'skin_problem' => $skin_problem,
			'digestive_problem' => $digestive_problem,
			'joint_problem' => $joint_problem,
			'constipation_problem' => $constipation_problem,
			'other_problem' => $other_problem,
			'isactive'=>$isactive,
			'isdeleted' => $isdeleted,
			
		);
		$recevied_message=$function->f_Add_Health_Problem_Insert($data1,$health_problem_id);
		$recevied_message_1  = explode("###", $recevied_message);
		$parent_id=$recevied_message_1[1];

		for ($i=1;$i<54;$i++)
		{
			$problem = mysql_real_escape_string($_POST['txt_HP_Problem_'.$i]);
			if($problem!=""){

				$problem_type = mysql_real_escape_string($_POST['txt_HP_Problem_Type'.$i]);
				$diag_day = mysql_real_escape_string($_POST['ddl_HP_Problem_Day'.$i]);
				$diag_month = mysql_real_escape_string($_POST['ddl_HP_Problem_Month'.$i]);
				$diag_year = mysql_real_escape_string($_POST['ddl_HP_Problem_Year'.$i]);
				$doctor_id = mysql_real_escape_string($_POST['ddl_Health_Problem'.$i]);
				$diag_date=$diag_year."-".$diag_month."-".$diag_day;
				$data1 = array(
					'user_id' => $user_id,
					'problem' => $problem,
					'diag_day' => $diag_day,
					'diag_month' => $diag_month,
					'diag_year' => $diag_year,
					'diag_date' => $diag_date,
					'doctor_id' => $doctor_id,
					'parent_id' => $parent_id,
					'problem_type'=>$problem_type,
					
				);
				$recevied_message=$function->f_Add_Health_Problem_Detail_Insert($data1,$health_problem_id);
			}
		}

		 
		$data['message'] ="Success";
		echo json_encode($data);
	}
	
	
	else if($insert_type=="Compose_Ins"){
		
		$doctor_id = mysql_real_escape_string($_GET[ 'doctor_id' ]);
		$complaint = mysql_real_escape_string($_GET[ 'complaint' ]);
		$subject = mysql_real_escape_string($_GET[ 'subject' ]);
		$status = mysql_real_escape_string($_GET[ 'status' ]);
		$mail_id = mysql_real_escape_string($_GET[ 'mail_id' ]);
		$last_occurrency_day = mysql_real_escape_string($_GET[ 'last_occurrency_day' ]);
		$last_occurrency_month = mysql_real_escape_string($_GET[ 'last_occurrency_month' ]);
		$last_occurrency_year = mysql_real_escape_string($_GET[ 'last_occurrency_year' ]);
		$query_type = mysql_real_escape_string($_GET[ 'query_type' ]);
		$body_area = mysql_real_escape_string($_GET[ 'body_area' ]);
		$suffer_from = mysql_real_escape_string($_GET[ 'suffer_from' ]);
		$doctor_consulted = mysql_real_escape_string($_GET[ 'doctor_consulted' ]);
		$doc_comment = mysql_real_escape_string($_GET[ 'doc_comment' ]);
		$video_query_requirement = mysql_real_escape_string($_GET[ 'video_query_requirement' ]);
		$upload_report="";
		
		$random=rand(0,9999);
		
		

		////Alert ($_FILES['fileToUpload']['name']);
		//uploadFile('fileToUpload', '../uploads/'.$random."".$_FILES['flPhoto']['name'], $random);
		
		if($_FILES['fileToUpload']['name']!="")
		{
			uploadFile('fileToUpload', '../uploads/', $random);
			$upload_report = $random."".$_FILES['fileToUpload']['name'];
		}		
				
				
		/// $query = mysql_real_escape_string($_GET[ 'query' ]);
		$queryid = mysql_real_escape_string($_GET[ 'queryid' ]);
		//$followup_query = mysql_real_escape_string($_GET[ 'followup_query' ]);
		$last_occurrency_date = $last_occurrency_year."-".$last_occurrency_month."-".$last_occurrency_day;
		$isactive=1;
		$isdeleted=0;
		
	///	is_array($_POST['selfolder']) ? implode(',', $_POST['selfolder']) : $_POST['selfolder'];
		
		$prescription_report = is_array($_GET['prescription_report']) ? implode(',', $_GET['prescription_report']) : $_GET['prescription_report'];
		$lab_test_report =is_array($_GET['lab_test_report']) ? implode(',', $_GET['lab_test_report']) : $_GET['lab_test_report'];
		$radiology_report = is_array($_GET['radiology_report']) ? implode(',', $_GET['radiology_report']) : $_GET['radiology_report'];
			
		$prescription_type = mysql_real_escape_string($_GET[ 'prescription_type' ]);
		$lab_test_type = mysql_real_escape_string($_GET[ 'lab_test_type' ]);
		$radiology_type = mysql_real_escape_string($_GET[ 'radiology_type' ]);
		
		$symptoms = mysql_real_escape_string($_GET[ 'symptoms' ]);
		
		
		$data = array(
			'user_id' => $user_id,
			'complaint' => $complaint,
			'subject'=>$subject,
			'status' => $status,
			'queryid' => $queryid,
			'followup_query' => $queryid,
			'last_occurrency_date'=>$last_occurrency_date,
			'last_occurrency_day'=>$last_occurrency_day,
			'last_occurrency_month'=>$last_occurrency_month,	
			'last_occurrency_year'=>$last_occurrency_year,
			'doctor_id' => $doctor_id,
			'query_type' => $query_type,
			'symptoms' => $symptoms,
			'body_area' => $body_area,
			'suffer_from' => $suffer_from,
			'doctor_consulted' => $doctor_consulted,
			'doc_comment' => $doc_comment,
			'video_query_requirement' => $video_query_requirement,
			'upload_report' => $upload_report,
			'isactive'=>$isactive,
			'isdeleted' => $isdeleted,
			'prescription_report' => $prescription_report,
			'lab_test_report' => $lab_test_report,
			'radiology_report' => $radiology_report,
			'prescription_type' => $prescription_type,
			'lab_test_type' => $lab_test_type,
			'radiology_type' => $radiology_type,
			
		);
		$recevied_message=$function->f_Add_Mails($data,$mail_id);
		                                   
	}	
	
	else if($insert_type=="Nutritionist_Ins"){
		
		$subject = mysql_real_escape_string($_GET[ 'subject' ]);
		$message = mysql_real_escape_string($_GET[ 'message' ]);
		$mail_id = mysql_real_escape_string($_GET[ 'mail_id' ]);
		$status = mysql_real_escape_string($_GET[ 'status' ]);
		$parent_id=GetValue("select parent_id as col from tbl_users where user_id=".$user_id." limit 1", "col");
		
		
		if($parent_id=="" || $parent_id=="0") 
		{
			$nutrition_id=GetValue("select nutritionist_id as col from tbl_nutritionist_main where user_id=".$user_id." limit 1", "col");
		}
		else
		{
			$nutrition_id=GetValue("select nutritionist_id as col from tbl_nutritionist_main where user_id=".$parent_id." limit 1", "col");
		}
		
	//	Alert ($nutrition_id);
		
		
		$isactive=1;
		$isdeleted=0;
		$folderid=$get_retrive->RetriveUserSentID($user_id);
		$folder_nut_id=$get_retrive->RetriveNutInboxID($nutrition_id);
		$data = array(
			'user_id' => $user_id,
			'subject' => $subject,
			'message' => $message,
			'isactive'=>$isactive,
			'isdeleted' => $isdeleted,
			'folderid' => $folderid,
			'folder_nut_id'=>$folder_nut_id,
			'nutrition_id'=>$nutrition_id,
			'status'=>$status,
			
		);
		$recevied_message=$function->f_Add_Nutritionist($data,$mail_id);
		                                   
	}	
	
	else if($insert_type=="Calorie_Ins"){
		
		$curr_wgt = mysql_real_escape_string($_GET[ 'curr_wgt' ]);
		$goal_wgt = mysql_real_escape_string($_GET[ 'goal_wgt' ]);
		$target_goal = mysql_real_escape_string($_GET[ 'target_goal' ]);
		$curr_height = mysql_real_escape_string($_GET[ 'curr_height' ]);
		$cur_height_type = mysql_real_escape_string($_GET[ 'cur_height_type' ]);
		$gender = mysql_real_escape_string($_GET[ 'gender' ]);
		//$age = mysql_real_escape_string($_GET[ 'age' ]);
		$age = 34;
		$dob_day = mysql_real_escape_string($_GET[ 'dob_day' ]);
		$dob_month = mysql_real_escape_string($_GET[ 'dob_month' ]);
		$dob_year = mysql_real_escape_string($_GET[ 'dob_year' ]);
		$daily_activity = mysql_real_escape_string($_GET[ 'daily_activity' ]);
		$plan_week = mysql_real_escape_string($_GET[ 'plan_week' ]);
		$plan_hour = mysql_real_escape_string($_GET[ 'plan_hour' ]);
		$current_waist = mysql_real_escape_string($_GET[ 'current_waist' ]);
		$current_hips = mysql_real_escape_string($_GET[ 'current_hips' ]);
		$current_arm = mysql_real_escape_string($_GET[ 'current_arm' ]);
		$goal_waist = mysql_real_escape_string($_GET[ 'goal_waist' ]);
		$goal_hips = mysql_real_escape_string($_GET[ 'goal_hips' ]);
		$goal_arms = mysql_real_escape_string($_GET[ 'goal_arms' ]);
		$ismain = mysql_real_escape_string($_GET[ 'ismain' ]);
		$dob = $dob_year."-".$dob_month."-".$dob_day;
		
		$calorie_id = mysql_real_escape_string($_GET[ 'calorie_id' ]);
		$isactive=1;
		$isdeleted=0;
		
		$data = array(
			'user_id' => $user_id,
			'curr_wgt' => $curr_wgt,
			'goal_wgt' => $goal_wgt,
			'target_goal' => $target_goal,
			'curr_height' => $curr_height,
			'cur_height_type' => $cur_height_type,
			'gender' => $gender,
			'age' => $age,
			'dob_day' => $dob_day,
			'dob_month' => $dob_month,
			'dob_year' => $dob_year,
			'daily_activity' => $daily_activity,
			'plan_week' => $plan_week,
			'plan_hour' => $plan_hour,
			'current_waist' => $current_waist,
			'current_hips' => $current_hips,
			'current_arm' => $current_arm,
			'goal_waist' => $goal_waist,
			'goal_hips' => $goal_hips,
			'goal_arms' => $goal_arms,
			'dob' => $dob,
			'isactive'=>$isactive,
			'isdeleted' => $isdeleted,
			'ismain' => $ismain,
			
		);
		$recevied_message=$function->f_Add_Calorie($data,$calorie_id);
		                                   
	}	
	
	
	else if($insert_type=="Calorie_Details_Ins"){
		
		
		$current_weight_day = mysql_real_escape_string($_GET[ 'current_weight_day' ]);
		$current_weight_month = mysql_real_escape_string($_GET[ 'current_weight_month' ]);
		$current_weight_year = mysql_real_escape_string($_GET[ 'current_weight_year' ]);
		$curr_wgt = mysql_real_escape_string($_GET[ 'curr_wgt' ]);
		$weight_date= $current_weight_year."-".$current_weight_month."-".$current_weight_day;
		
		$current_waist_day = mysql_real_escape_string($_GET[ 'current_waist_day' ]);
		$current_waist_month = mysql_real_escape_string($_GET[ 'current_waist_month' ]);
		$current_waist_year = mysql_real_escape_string($_GET[ 'current_waist_year' ]);
		$current_waist = mysql_real_escape_string($_GET[ 'current_waist' ]);
		$waist_date= $current_waist_year."-".$current_waist_month."-".$current_waist_day;
		
		$current_hips_day = mysql_real_escape_string($_GET[ 'current_hips_day' ]);
		$current_hips_month = mysql_real_escape_string($_GET[ 'current_hips_month' ]);
		$current_hips_year = mysql_real_escape_string($_GET[ 'current_hips_year' ]);
		$current_hips = mysql_real_escape_string($_GET[ 'current_hips' ]);
		$hips_date= $current_hips_year."-".$current_hips_month."-".$current_hips_day;
		
		$current_arms_day = mysql_real_escape_string($_GET[ 'current_arms_day' ]);
		$current_arms_month = mysql_real_escape_string($_GET[ 'current_arms_month' ]);
		$current_arms_year = mysql_real_escape_string($_GET[ 'current_arms_year' ]);
		$current_arm = mysql_real_escape_string($_GET[ 'current_arm' ]);
		$arms_date= $current_arms_year."-".$current_arms_month."-".$current_arms_day;
		
		$ismain = mysql_real_escape_string($_GET[ 'ismain' ]);
		$cadetid = mysql_real_escape_string($_GET[ 'cadetid' ]);
		
		$isactive=1;
		$isdeleted=0;
		
		$data = array(
			'user_id' => $user_id,
			'curr_wgt' => $curr_wgt,
			'current_waist' => $current_waist,
			'current_hips' => $current_hips,
			'current_arm' => $current_arm,
			'weight_date' => $weight_date,
			'waist_date' => $waist_date,
			'arms_date' => $arms_date,
			'hips_date' => $hips_date,
			'isactive'=>$isactive,
			'isdeleted' => $isdeleted,
			'ismain' => $ismain,
			
		);
		$recevied_message=$function->f_Add_Calorie_Det($data,$cadetid);
		                                   
	}	
	
	
	
	else if($insert_type=="Doctor_Ins"){
		
		
		$doctor_name = mysql_real_escape_string($_GET[ 'doctor_name' ]);
		$hospital_name = mysql_real_escape_string($_GET[ 'hospital_name' ]);
		$hospital_address = mysql_real_escape_string($_GET[ 'hospital_address' ]);
		$hospital_city = mysql_real_escape_string($_GET[ 'hospital_city' ]);
		$hospital_area = mysql_real_escape_string($_GET[ 'hospital_area' ]);
		$specialization = mysql_real_escape_string($_GET[ 'specialization' ]);
		$contact = mysql_real_escape_string($_GET[ 'contact' ]);
		$type = mysql_real_escape_string($_GET[ 'type' ]);
		$email = mysql_real_escape_string($_GET[ 'email' ]);
		$doctor_id = mysql_real_escape_string($_GET[ 'doctor_id' ]);
		$user_count = mysql_real_escape_string($_GET[ 'user_count' ]);
		$password = mysql_real_escape_string($_GET[ 'password' ]);
		
		
		$isactive=1;
		$isdeleted=0;
		
		
		
		$data = array(
			'user_id' => $user_id,
			'user_type' => $user_type,
			'doctor_name' => $doctor_name,
			'hospital_name' => $hospital_name,
			'hospital_address' => $hospital_address,
			'hospital_city' => $hospital_city,
			'hospital_area' => $hospital_area,
			'specialization' => $specialization,
			'contact' => $contact,
			'type' => $type,
			'email' => $email,
			'password' => $password,
			'isactive'=>$isactive,
			'isdeleted' => $isdeleted,
			'user_count' => $user_count,
			
			
		);
		$recevied_message=$function->f_Add_Doctor($data,$doctor_id);
		                                   
	}	
	
	else if($insert_type=="Common_Doctor_Ins"){
		
		$doctor_first_name = mysql_real_escape_string($_GET[ 'doctor_name' ]);
		$doctor_last_name = mysql_real_escape_string($_GET[ 'doctor_last_name' ]);
		$hospital_name = mysql_real_escape_string($_GET[ 'hospital_name' ]);
		$specialization = mysql_real_escape_string($_GET[ 'specialization' ]);
		$contact = mysql_real_escape_string($_GET[ 'contact' ]);
		$email = mysql_real_escape_string($_GET[ 'email' ]);
		$doctor_id = mysql_real_escape_string($_GET[ 'doctor_id' ]);
		$doctor_name=$doctor_first_name." ".$doctor_last_name;
		
		if(isset($_SESSION['UserType']))
		{
			$user_type=$_SESSION['UserType'];
		}
		else
		{
			$user_type="0";
		}
		
		$password=rand();
		
		$data = array(
			'user_id' => $user_id,
			'user_type' => $user_type,
			'doctor_name' => $doctor_name,
			'hospital_name' => $hospital_name,
			'specialization' => $specialization,
			'contact' => $contact,
			'type' =>'Doctor',
			'email' => $email,
			'password' => $password,
			'isactive'=>1,
			'isdeleted' => 0,
			
		);
		$recevied_message=$function->f_Add_Common_Doctor($data,$doctor_id);
		                                   
	}	
	
	else if($insert_type=="Patient_Ins"){
		
		
		
		$rd = GetValue("SELECT accept_id as col FROM ".Patients." where patient_id=".$_GET['patient_id']." and compose_id=".$_GET['compose_id'], "col");
		if($rd>0){
			$recevied_message="1###recordexist";
			
		}
		else
		{
			$patient_id = mysql_real_escape_string($_GET[ 'patient_id' ]);
			$accept_id = mysql_real_escape_string($_GET[ 'accept_id' ]);
			$doctor_id = mysql_real_escape_string($_GET[ 'doctor_id' ]);
			$compose_id = mysql_real_escape_string($_GET[ 'compose_id' ]);
			$type = mysql_real_escape_string($_GET[ 'type' ]);
			
			$data = array(
				'doctor_id' => $doctor_id,
				'compose_id' => $compose_id,
				'patient_id' => $patient_id,
				'type' => $type,
				'isactive'=>1,
				'isaccepted'=>1,
				'isdeleted' => 0,
				
			);
			$recevied_message=$function->f_Add_Patient($data,$accept_id);
		}
		                                   
	}	
	
	else if($insert_type=="Hospital_Master"){
		
		
		$hospital_name = mysql_real_escape_string($_GET[ 'hospital_name' ]);
		$hospital_address1 = mysql_real_escape_string($_GET[ 'hospital_address1' ]);
		$hospital_address2 = mysql_real_escape_string($_GET[ 'hospital_address2' ]);
		$hospital_address3 = mysql_real_escape_string($_GET[ 'hospital_address3' ]);
		$contact = mysql_real_escape_string($_GET[ 'contact' ]);
		$email = mysql_real_escape_string($_GET[ 'email' ]);
		$contact_person = mysql_real_escape_string($_GET[ 'contact_person' ]);
		$contact_person_contact = mysql_real_escape_string($_GET[ 'contact_person_contact' ]);
		$contact_person_mail = mysql_real_escape_string($_GET[ 'contact_person_mail' ]);
		
		$hospital_id = mysql_real_escape_string($_GET[ 'hospital_id' ]);
		$hospital_address= $hospital_address1.",".$hospital_address2.",".$hospital_address3;
		
		$isactive=1;
		$isdeleted=0;
		
		$data = array(
			'user_id' => $user_id,
			'hospital_name' => $hospital_name,
			'hospital_address' => $hospital_address,
			'hospital_address1' => $hospital_address1,
			'hospital_address2' => $hospital_address2,
			'hospital_address3' => $hospital_address3,
			'contact' => $contact,
			'email' => $email,
			'contact_person' => $contact_person,
			'contact_person_contact' => $contact_person_contact,
			'contact_person_mail' => $contact_person_mail,
			'isactive'=>$isactive,
			'isdeleted' => $isdeleted,
			
		);
		$recevied_message=$function->f_Add_Hospital_Master($data,$hospital_id);
		                                   
	}	
	
	
	
	else if($insert_type=="Daily_Blood_Pressure")
	{
	
	$data=array();
	
			for ($i=1;$i<8;$i++)
			{
				$blood_pressure_id = 0;//mysql_real_escape_string($_POST[ 'txtBloodPressureID'.$i ]);
				$blood_pressure_systolic = mysql_real_escape_string($_POST[ 'txtBloood_Pressure'.$i ]);
				$del_track_unit = "";
				$del_track_day = mysql_real_escape_string($_POST[ 'txtBPDay'.$i ]);
				$del_track_month = mysql_real_escape_string($_POST[ 'txtBPMonth'.$i ]);
				$del_track_year = mysql_real_escape_string($_POST[ 'txtBPYear'.$i ]);
				
				$del_track_date = $del_track_year."-".$del_track_month."-".$del_track_day;
				
				$isactive=1;
				$isdeleted=0;
			
				///Alert ($blood_pressure_systolic);
			
			  //if($blood_pressure_systolic!="")	{
				$data = array(
					'user_id' => $user_id,
					'blood_pressure_systolic' => $blood_pressure_systolic,
					'del_track_unit' => $del_track_unit,
					'del_track_date' => $del_track_date,
					'del_track_day' => $del_track_day,
					'del_track_month' => $del_track_month,
					'del_track_year' => $del_track_year,
					'isactive'=>$isactive,
					'isdeleted' => $isdeleted,
					
				);
				$recevied_message=$function->f_Add_Blood_Pressure_Insert($data,$blood_pressure_id);
			//}
		}
	}
	
	
	else if($insert_type=="Fasting_Blood_Sugar")
	{
	
	$data=array();
	
			for ($i=1;$i<8;$i++)
			{
				$sugar_profile_id = 0;//mysql_real_escape_string($_POST[ 'txtFasting_Blood_SugarId'.$i ]);
		
				$fasting_blood_sugar_day=mysql_real_escape_string($_POST[ 'txtFBDay'.$i ]);
				$fasting_blood_sugar_month=mysql_real_escape_string($_POST[ 'txtFBMonth'.$i ]);
				$fasting_blood_sugar_year=mysql_real_escape_string($_POST[ 'txtFBYear'.$i ]);
				$fasting_blood_sugar_result=mysql_real_escape_string($_POST[ 'txtFasting_Blood_Sugar'.$i ]);
				$fasting_blood_sugar_date = $fasting_blood_sugar_year."-".$fasting_blood_sugar_month."-".$fasting_blood_sugar_day;
				
				$post_parandial_day=mysql_real_escape_string($_POST[ 'txtPBBSDay'.$i ]);
				$post_parandial_month=mysql_real_escape_string($_POST[ 'txtPBBSMonth'.$i ]);
				$post_parandial_year=mysql_real_escape_string($_POST[ 'txtPBBSYear'.$i ]);
				$post_parandial_result=mysql_real_escape_string($_POST[ 'txtPPBS'.$i ]);
				$post_parandial_date = $post_parandial_year."-".$post_parandial_month."-".$post_parandial_day;
				
				
				$urine_blood_day=mysql_real_escape_string($_POST[ 'txtUBDay'.$i ]);
				$urine_blood_month=mysql_real_escape_string($_POST[ 'txtUBMonth'.$i ]);
				$urine_blood_year=mysql_real_escape_string($_POST[ 'txtUBYear'.$i ]);
				$urine_blood_result=mysql_real_escape_string($_POST[ 'txtUB'.$i ]);
				$urine_blood_date = $urine_blood_year."-".$urine_blood_month."-".$urine_blood_day;
				
				
				$random_blood_sugar_day=mysql_real_escape_string($_POST[ 'txtRBSDay'.$i ]);
				$random_blood_sugar_month=mysql_real_escape_string($_POST[ 'txtRBSMonth'.$i ]);
				$random_blood_sugar_year=mysql_real_escape_string($_POST[ 'txtRBSYear'.$i ]);
				$random_blood_sugar_result=mysql_real_escape_string($_POST[ 'txtRandom_Blood_Sugar'.$i ]);
				$random_blood_sugar_date = $random_blood_sugar_year."-".$random_blood_sugar_month."-".$random_blood_sugar_day;
				
				
				$isactive=1;
				$isdeleted=0;
				
				//if($fasting_blood_sugar_result!="" || $post_parandial_result!="" || $urine_blood_result!=""  || $random_blood_sugar_result!=""){
					$data = array(
						'user_id' => $user_id,
						'fasting_blood_sugar_date'=>$fasting_blood_sugar_date,
						'fasting_blood_sugar_day'=>$fasting_blood_sugar_day,
						'fasting_blood_sugar_month'=>$fasting_blood_sugar_month,
						'fasting_blood_sugar_year'=>$fasting_blood_sugar_year,
						'fasting_blood_sugar_result'=>$fasting_blood_sugar_result,
						'post_parandial_date'=>$post_parandial_date,
						'post_parandial_day'=>$post_parandial_day,
						'post_parandial_month'=>$post_parandial_month,
						'post_parandial_year'=>$post_parandial_year,
						'post_parandial_result'=>$post_parandial_result,
						'urine_blood_date'=>$urine_blood_date,
						'urine_blood_day'=>$urine_blood_day,
						'urine_blood_month'=>$urine_blood_month,
						'urine_blood_year'=>$urine_blood_year,
						'urine_blood_result'=>$urine_blood_result,
						'random_blood_sugar_date'=>$random_blood_sugar_date,
						'random_blood_sugar_day'=>$random_blood_sugar_day,
						'random_blood_sugar_month'=>$random_blood_sugar_month,
						'random_blood_sugar_year'=>$random_blood_sugar_year,
						'random_blood_sugar_result'=>$random_blood_sugar_result,
						'isactive'=>$isactive,
						'isdeleted' => $isdeleted,
						
					);
					$recevied_message=$function->f_Add_Daily_Sugar_Profile_Insert($data,$sugar_profile_id);
				//}	 
			}
		
	}
			
	else if($insert_type=="Life_Style")
	{
	
	$data=array();
	
			for ($i=1;$i<8;$i++)
			{
				$life_style_id = 0;//mysql_real_escape_string($_POST[ 'txtSpiritID'.$i ]);
				$spirit = mysql_real_escape_string($_POST[ 'txtSpirit'.$i ]);
				$beer = mysql_real_escape_string($_POST[ 'txtBeer'.$i ]);
				$cigarette = mysql_real_escape_string($_POST[ 'txtCigarette'.$i ]);
				$life_style_sleep = mysql_real_escape_string($_POST[ 'txtSleep'.$i ]);
				$life_style_day = mysql_real_escape_string($_POST[ 'txtLife_Style_Day'.$i ]);
				$life_style_month = mysql_real_escape_string($_POST[ 'txtLife_Style_Month'.$i ]);
				$life_style_year = mysql_real_escape_string($_POST[ 'txtLife_Style_Year'.$i ]);
				$physical_stress = "";
				$physical_stress_details = "";
				$mental_stress = "";
				$mental_stress_details = "";
		
				$life_style_date = $life_style_year."-".$life_style_month."-".$life_style_day;
				
				
				
				$isactive=1;
				$isdeleted=0;
				
				
				$spirit_goal=GetValue("select spirit_goal as col from tbl_life_style where user_id=".$user_id." order by life_style_id desc limit 1", "col");
				$beer_goal=GetValue("select beer_goal as col from tbl_life_style where user_id=".$user_id." order by life_style_id desc limit 1", "col");
				$cigarette_goal=GetValue("select cigarette_goal as col from tbl_life_style where user_id=".$user_id." order by life_style_id desc limit 1", "col");
				$life_style_sleep_goal=GetValue("select life_style_sleep_goal as col from tbl_life_style where user_id=".$user_id." order by life_style_id desc limit 1", "col");  
				  
				 
				
				//if($spirit!="" || $beer!="" || $cigarette!="" || $life_style_sleep!="")	{
				$data = array(
					'user_id' => $user_id,
					'spirit' => $spirit,
					'beer' => $beer,
					'cigarette' => $cigarette,
					'spirit_goal' => $spirit_goal,
					'beer_goal' => $beer_goal,
					'cigarette_goal' => $cigarette_goal,
					'life_style_sleep_goal' => $life_style_sleep_goal,
					'life_style_sleep' => $life_style_sleep,
					'life_style_day' => $life_style_day,
					'life_style_month' => $life_style_month,
					'life_style_year' => $life_style_year,
					'life_style_date' => $life_style_date,
					'life_style_sleep' => $life_style_sleep,
					'physical_stress' => $physical_stress,
					'physical_stress_details' => $physical_stress_details,
					'mental_stress' => $mental_stress,
					'mental_stress_details' => $mental_stress_details,
					'isactive'=>$isactive,
					'isdeleted' => $isdeleted,
					
				);
				$recevied_message=$function->f_Add_Life_Style_Insert($data,$life_style_id);
			//}
		}
	}	
			
	
	else if($insert_type=="Measurement")
	{
	
	$data=array();
	
			for ($i=1;$i<8;$i++)
			{
				$cadetid =0;// mysql_real_escape_string($_POST[ 'txtCurrWgtId'.$i ]);
			
				$curr_waist_day=mysql_real_escape_string($_POST[ 'txtCWgtDay'.$i ]);
				$curr_waist_month=mysql_real_escape_string($_POST[ 'txtCWgtMonth'.$i ]);
				$curr_waist_year=mysql_real_escape_string($_POST[ 'txtCWgtYear'.$i ]);
				$curr_wgt=mysql_real_escape_string($_POST[ 'txtCurrWgt'.$i ]);
				$weight_date = $curr_waist_year."-".$curr_waist_month."-".$curr_waist_day;
				
				
				
				$current_waist_day=mysql_real_escape_string($_POST[ 'txtCWaistDay'.$i ]);
				$current_waist_month=mysql_real_escape_string($_POST[ 'txtCWaistMonth'.$i ]);
				$current_waist_year=mysql_real_escape_string($_POST[ 'txtCWaistYear'.$i ]);
				$current_waist=mysql_real_escape_string($_POST[ 'txtCurrWaist'.$i ]);
				$waist_date = $current_waist_year."-".$current_waist_month."-".$current_waist_day;
				
				
								
				$hips_day=mysql_real_escape_string($_POST[ 'txtCHipsDay'.$i ]);
				$hips_month=mysql_real_escape_string($_POST[ 'txtCHipsMonth'.$i ]);
				$hips_year=mysql_real_escape_string($_POST[ 'txtCHipsYear'.$i ]);
				$current_hips=mysql_real_escape_string($_POST[ 'txtCurrHips'.$i ]);
				$hips_date = $hips_year."-".$hips_month."-".$hips_day;
					
							
				$current_arms_day=mysql_real_escape_string($_POST[ 'txtCArmsDay'.$i ]);
				$current_arms_month=mysql_real_escape_string($_POST[ 'txtCArmsMonth'.$i ]);
				$current_arms_year=mysql_real_escape_string($_POST[ 'txtCArmsYear'.$i ]);
				$current_arm=mysql_real_escape_string($_POST[ 'txtCurrArms'.$i ]);
				$arms_date = $current_arms_year."-".$current_arms_month."-".$current_arms_day;
				
				
				
				$isactive=1;
				$isdeleted=0;
				
			
					
				
				
				
				//if($curr_wgt!="" || $current_waist!="" || $current_hips!=""  || $current_arm!=""){
					
					
				
				
					$data = array(
						'user_id' => $user_id,
						'curr_wgt' => $curr_wgt,
						'current_waist' => $current_waist,
						'current_hips' => $current_hips,
						'current_arm' => $current_arm,
						'weight_date' => $weight_date,
						'waist_date' => $waist_date,
						'arms_date' => $arms_date,
						'hips_date' => $hips_date,
						'isactive'=>$isactive,
						'isdeleted' => $isdeleted,
						'ismain' => 0,
			
					);
					$recevied_message=$function->f_Add_Measurment($data,$cadetid);
				//}	 
			}
		
	}
			

	else if($insert_type=="Water")
	{
	
	$data=array();
	
			for ($i=1;$i<8;$i++)
			{
				$waterid = 0;//mysql_real_escape_string($_POST[ 'txtWaterId'.$i ]);
		
				$curr_water_day=mysql_real_escape_string($_POST[ 'txtCWgtDay'.$i ]);
				$curr_water_month=mysql_real_escape_string($_POST[ 'txtCWgtMonth'.$i ]);
				$curr_water_year=mysql_real_escape_string($_POST[ 'txtCWgtYear'.$i ]);
				$no_of_glass=mysql_real_escape_string($_POST[ 'txtWater'.$i ]);
				$date = $curr_water_year."-".$curr_water_month."-".$curr_water_day;
				
				$isactive=1;
				$isdeleted=0;
				
				//if($date!=""){
					$data = array(
						'user_id' => $user_id,
						'no_of_glass' => $no_of_glass,
						'type' => 'Water',
						'date' => $date,
					
			
					);
					$recevied_message=$function->f_Add_Water($data,$waterid);
				//}	 
			}
		
	}
	
	else if($insert_type=="Doctor_Comment_Ins"){
		
		
		$patient_id = mysql_real_escape_string($_GET[ 'patient_id' ]);
		$doctor_id = mysql_real_escape_string($_GET[ 'doctor_id' ]);
		$doctor_advice = mysql_real_escape_string($_GET[ 'doctor_advice' ]);
		$doctor_internal_advice = mysql_real_escape_string($_GET[ 'doctor_internal_advice' ]);
		$comment_id = mysql_real_escape_string($_GET[ 'comment_id' ]);
		$compose_id = mysql_real_escape_string($_GET[ 'compose_id' ]);
		$accept_id = mysql_real_escape_string($_GET[ 'accept_id' ]);
		$md_id = mysql_real_escape_string($_GET[ 'md_id' ]);
		$type = mysql_real_escape_string($_GET[ 'type' ]);
		
		$doc_name = mysql_real_escape_string($_GET[ 'doc_name' ]);
		$specialization = mysql_real_escape_string($_GET[ 'specialization' ]);
		$hosp_name = mysql_real_escape_string($_GET[ 'hosp_name' ]);
		$licenceno = mysql_real_escape_string($_GET[ 'licenceno' ]);
		
		$isactive=1;
		$isdeleted=0;
		$folderid=$get_retrive->RetriveUserInboxID($patient_id);
		$data = array(
			'patient_id' => $patient_id,
			'doctor_id' => $doctor_id,
			'doctor_advice' => $doctor_advice,
			'doctor_internal_advice' => $doctor_internal_advice,
			'md_id' => $md_id,
			'compose_id' => $compose_id,
			'accept_id' => $accept_id,
			'type' => $type,
			'doc_name' => $doc_name,
			'specialization' => $specialization,
			'hosp_name' => $hosp_name,
			'licenceno' => $licenceno,
			'isactive'=>$isactive,
			'isdeleted' => $isdeleted,
			'folderid'=>$folderid,
			
		);
		$recevied_message=$function->f_Add_Doctor_Comment($data,$comment_id);
		                                   
	}	
	
	
	else if($insert_type=="MD_Comment_Ins"){
		
		
		$patient_id = mysql_real_escape_string($_GET[ 'patient_id' ]);
		$ref_doctor_id = mysql_real_escape_string($_GET[ 'ref_doctor_id' ]);
		$md_advice = mysql_real_escape_string($_GET[ 'md_advice' ]);
		$md_internal_advice = mysql_real_escape_string($_GET[ 'md_internal_advice' ]);
		$comment_id = mysql_real_escape_string($_GET[ 'comment_id' ]);
		$compose_id = mysql_real_escape_string($_GET[ 'compose_id' ]);
		$accept_id = mysql_real_escape_string($_GET[ 'accept_id' ]);
		$md_id = mysql_real_escape_string($_GET[ 'md_id' ]);
		$type = mysql_real_escape_string($_GET[ 'type' ]);
		$rejected = mysql_real_escape_string($_GET[ 'rejected' ]);
		$hospital_id = mysql_real_escape_string($_GET[ 'hospital_id' ]);
		$hospital_name = mysql_real_escape_string($_GET[ 'hospital_name' ]);
		$video_query = mysql_real_escape_string($_GET[ 'video_query' ]);
		$doc_comment_id = mysql_real_escape_string($_GET[ 'doc_comment_id' ]);
		
		$app_day = mysql_real_escape_string($_GET[ 'app_day' ]);
		$app_month = mysql_real_escape_string($_GET[ 'app_month' ]);
		$app_year = mysql_real_escape_string($_GET[ 'app_year' ]);
		
		$app_date = $app_year."-".$app_month."-".$app_day;
		
		$time_from = mysql_real_escape_string($_GET[ 'time_from' ]);
		$time_to = mysql_real_escape_string($_GET[ 'time_to' ]);
		$time_slot = mysql_real_escape_string($_GET[ 'time_slot' ]);
		
		$isactive=1;
		$isdeleted=0;
		$folderid=$get_retrive->RetriveUserInboxID($patient_id);

		$data = array(
			'patient_id' => $patient_id,
			'ref_doctor_id' => $ref_doctor_id,
			'md_advice' => $md_advice,
			'md_internal_advice' => $md_internal_advice,
			'md_id' => $md_id,
			'compose_id' => $compose_id,
			'accept_id' => $accept_id,
			'type' => $type,
			'app_date' => $app_date,
			'app_day' => $app_day,
			'app_month' => $app_month,
			'app_year' => $app_year,
			'time_from' => $time_from,
			'time_to' => $time_to,
			'time_slot' => $time_slot,
			'rejected' => $rejected,
			'isactive'=>$isactive,
			'isdeleted' => $isdeleted,
			'hospital_id' => $hospital_id,
			'hospital_name' => $hospital_name,
			'video_query' => $video_query,
			'doc_comment_id' => $doc_comment_id,
			'folderid'=>$folderid,
			
		);
		$recevied_message=$function->f_Add_MD_Comment($data,$comment_id);
		                            
	}	
	
	
	else if($insert_type=="Send_Diet_Plan_Ins"){
		
		
		$patient_id = mysql_real_escape_string($_GET[ 'patient_id' ]);
		$nutritionist_id = mysql_real_escape_string($_GET[ 'nutritionist_id' ]);
		$diet_plan_id = mysql_real_escape_string($_GET[ 'diet_plan_id' ]);
		$selected_date = mysql_real_escape_string($_GET[ 'selected_date' ]);
		$note = mysql_real_escape_string($_GET[ 'note' ]);
		$message = mysql_real_escape_string($_GET[ 'message' ]);
		
		$isactive=1;
		$isdeleted=0;
		
		$data = array(
			'patient_id' => $patient_id,
			'nutritionist_id' => $nutritionist_id,
			'selected_date' => $selected_date,
			'note' => $note,
			'message' => $message,
			'isactive'=>$isactive,
			'isdeleted' => $isdeleted,
			
		);
		$recevied_message=$function->f_Add_Diet_Plan($data,$diet_plan_id);
		                                   
	}	
	
	
	else if($insert_type=="Clerk_Ins"){
		
		
		$clerk_name = mysql_real_escape_string($_GET[ 'clerk_name' ]);
		$hospital_name = mysql_real_escape_string($_GET[ 'hospital_name' ]);
		$contact = mysql_real_escape_string($_GET[ 'contact' ]);
		$email = mysql_real_escape_string($_GET[ 'email' ]);
		$clerk_id = mysql_real_escape_string($_GET[ 'clerk_id' ]);
		
		$isactive=1;
		$isdeleted=0;
		
		$password=rand();
		
		$data = array(
			'user_id' => $user_id,
			'type' => 'Clerk',
			'user_type' => $user_type,
			'clerk_name' => $clerk_name,
			'hospital_name' => $hospital_name,
			'contact' => $contact,
			'email' => $email,
			'isactive'=>$isactive,
			'isdeleted' => $isdeleted,
			
		);
		$recevied_message=$function->f_Add_Clerk($data,$clerk_id);
		                                   
	}
	
	
	else if($insert_type=="SendReply"){
		
		
		$patient_id = mysql_real_escape_string($_GET[ 'patient_id' ]);
		$nutritionist_id = mysql_real_escape_string($_GET[ 'nutritionist_id' ]);
		$comment_id = mysql_real_escape_string($_GET[ 'comment_id' ]);
		$compose_id = mysql_real_escape_string($_GET[ 'compose_id' ]);
		$accept_id = mysql_real_escape_string($_GET[ 'accept_id' ]);
		$comment = mysql_real_escape_string($_GET[ 'comment' ]);
		$subject = mysql_real_escape_string($_GET[ 'subject' ]);
		$folderid=$get_retrive->RetriveUserInboxID($patient_id);
		$folder_nut_id=$get_retrive->RetriveNutSentID($nutritionist_id);

		$isactive=1;
		$isdeleted=0;
		
		$data = array(
			'patient_id' => $patient_id,
			'nutritionist_id' => $nutritionist_id,
			'compose_id' => $compose_id,
			'accept_id' => $accept_id,
			'comment' => $comment,
			'isactive'=>$isactive,
			'folderid'=>$folderid,
			'folder_nut_id'=>$folder_nut_id,
			'isdeleted' => $isdeleted,
			'subject'=>$subject,
			
		);
		//Alert ($nutritionist_id);
		$recevied_message=$function->f_Add_Nut_Comment($data,$comment_id);
		                                   
	}	
	
	
	else if($insert_type=="SendComment"){
		
		
		$patient_id = mysql_real_escape_string($_GET[ 'patient_id' ]);
		$nutritionist_id = mysql_real_escape_string($_GET[ 'nutritionist_id' ]);
		$comment_id = mysql_real_escape_string($_GET[ 'comment_id' ]);
		$record_date = mysql_real_escape_string($_GET[ 'record_date' ]);
		$comment = mysql_real_escape_string($_GET[ 'comment' ]);
		
		$cons_comment = mysql_real_escape_string($_GET[ 'cons_comment' ]);
		$physical_comment = mysql_real_escape_string($_GET[ 'physical_comment' ]);
		$size_comment = mysql_real_escape_string($_GET[ 'size_comment' ]);
		
		$isactive=1;
		$isdeleted=0;
		
		$data = array(
			'patient_id' => $patient_id,
			'nutritionist_id' => $nutritionist_id,
			'record_date' => $record_date,
			'comment' => $comment,
			'cons_comment' => $cons_comment,
			'physical_comment' => $physical_comment,
			'size_comment' => $size_comment,
			'isactive'=>$isactive,
			'isdeleted' => $isdeleted,
			
		);
		$recevied_message=$function->f_Add_Cal_Comment($data,$comment_id);
		                                   
	}	
	
	
	else if($insert_type=="MD_App"){
		
		
		$app_id = mysql_real_escape_string($_GET[ 'app_id' ]);
		$compose_id = mysql_real_escape_string($_GET[ 'compose_id' ]);
		$accept_id = mysql_real_escape_string($_GET[ 'accept_id' ]);
		$patient_id = mysql_real_escape_string($_GET[ 'patient_id' ]);
		$created_by = mysql_real_escape_string($_GET[ 'created_by' ]);
		$created_type = mysql_real_escape_string($_GET[ 'created_type' ]);
		$hospital_id = mysql_real_escape_string($_GET[ 'hospital_id' ]);
		$md_id = mysql_real_escape_string($_GET[ 'md_id' ]);
		$app_name = mysql_real_escape_string($_GET[ 'app_name' ]);
		$app_day = mysql_real_escape_string($_GET[ 'app_day' ]);
		$app_month = mysql_real_escape_string($_GET[ 'app_month' ]);
		$app_year = mysql_real_escape_string($_GET[ 'app_year' ]);
		$time_from = mysql_real_escape_string($_GET[ 'time_from' ]);
		$time_to = mysql_real_escape_string($_GET[ 'time_to' ]);
		$time_slot = mysql_real_escape_string($_GET[ 'time_slot' ]);
		$other_app = mysql_real_escape_string($_GET[ 'other_app' ]);
		$notes = mysql_real_escape_string($_GET[ 'notes' ]);
		$other_hospital_name = mysql_real_escape_string($_GET[ 'other_hospital_name' ]);
		
		$doc_comment_id = mysql_real_escape_string($_GET[ 'doc_comment_id' ]);
		$folderid = mysql_real_escape_string($_GET[ 'folderid' ]);
		$videolink = mysql_real_escape_string($_GET[ 'videolink' ]);
		
		
		$app_date = $app_year."-".$app_month."-".$app_day;
		
		$isactive=1;
		$isdeleted=0;
		
		
		$data = array(
			'created_type' => $created_type,
			'hospital_id' => $hospital_id,
			'md_id' => $md_id,
			'patient_id' => $patient_id,
			'compose_id' => $compose_id,
			'doc_comment_id' => $doc_comment_id,
			'folderid' => $folderid,
			'accept_id' => $accept_id,
			'created_by' => $created_by,
			'created_type' => $created_type,
			'app_name' => $app_name,
			'app_date' => $app_date,
			'app_day' => $app_day,
			'app_month' => $app_month,
			'app_year' => $app_year,
			'time_from' => $time_from,
			'time_to' => $time_to,
			'time_slot' => $time_slot,
			'other_app' => $other_app,
			'notes' => $notes,
			'other_hospital_name' => $other_hospital_name,
			'isdeleted' => $isdeleted,
			'videolink' => $videolink,
		);
		$recevied_message=$function->f_Add_MD_Appointment($data,$app_id);
	
		                                   
	}	
	
	
	else if($insert_type=="PostComment"){
		
		
		$user_id = mysql_real_escape_string($_GET[ 'user_id' ]);
		$article_id = mysql_real_escape_string($_GET[ 'article_id' ]);
		$type = mysql_real_escape_string($_GET[ 'type' ]);
		$comment = mysql_real_escape_string($_GET[ 'comment' ]);
		$reward_point = mysql_real_escape_string($_GET[ 'reward_point' ]);
		$post_comment_id = mysql_real_escape_string($_GET[ 'post_comment_id' ]);
		
		
		$isactive=1;
		$isdeleted=0;
		
		
		$data = array(
			'user_id' => $user_id,
			'article_id' => $article_id,
			'type' => $type,
			'comment' => $comment,
			'reward_point' => $reward_point,
			'post_comment_id' => $post_comment_id,
			'isactive' => $isactive,
			'isdeleted' => $isdeleted,
			
		);
		$recevied_message=$function->f_Add_Post_Comment($data,$post_comment_id);
	
		                                   
	}	
	
	else if($insert_type=="User_Reviews"){
		
		
		$user_id = mysql_real_escape_string($_GET[ 'user_id' ]);
		$common_id = mysql_real_escape_string($_GET[ 'common_id' ]);
		$common_type = mysql_real_escape_string($_GET[ 'common_type' ]);
		$comment = mysql_real_escape_string($_GET[ 'comment' ]);
		$user_review_id = mysql_real_escape_string($_GET[ 'user_review_id' ]);
		$mail_id = mysql_real_escape_string($_GET[ 'mail_id' ]);
		
		
		$isactive=1;
		$isdeleted=0;
		
		
		$data = array(
			'user_id' => $user_id,
			'common_id' => $common_id,
			'common_type' => $common_type,
			'comment' => $comment,
			'isactive' => $isactive,
			'isdeleted' => $isdeleted,
			'mail_id' => $mail_id,
			
		);
		$recevied_message=$function->f_Add_User_Reviews($data,$user_review_id);
	
		                                   
	}	
	
	
	else if($insert_type=="Accept_Appointment"){
		
		
		$user_id = mysql_real_escape_string($_GET[ 'user_id' ]);
		$common_id = mysql_real_escape_string($_GET[ 'common_id' ]);
		$mail_id = mysql_real_escape_string($_GET[ 'mail_id' ]);
		
		
		$isactive=1;
		$isdeleted=0;
		
		
		$data = array(
			'user_id' => $user_id,
			'common_id' => $common_id,
			'isactive' => $isactive,
			'isdeleted' => $isdeleted,
			'mail_id' => $mail_id,
			
		);
		$recevied_message=$function->f_Add_User_Reviews($data,$user_review_id);
	
		                                   
	}	
	
	
	if($insert_type!="Health_Problem_Ins"){
	 if($recevied_message!="")
	 {
		$recevied_message_1  = explode("###", $recevied_message);
		$data['message'] =$recevied_message_1[1];
	 }
	 else
	 {
	 	$recevied_message="";
		$data['message'] =$recevied_message;
	 }
		
		
		echo json_encode($data);
	}
	
	
?>