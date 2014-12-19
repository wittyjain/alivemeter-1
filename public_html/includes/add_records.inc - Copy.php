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
	
	
	if($insert_type=="Doc_Consult_Ins"){
		
		
		
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
		
		$fasting_blood_sugar_date=mysql_real_escape_string($_GET[ 'fasting_blood_sugar_date' ]);
		$fasting_blood_sugar_day=mysql_real_escape_string($_GET[ 'fasting_blood_sugar_day' ]);
		$fasting_blood_sugar_month=mysql_real_escape_string($_GET[ 'fasting_blood_sugar_month' ]);
		$fasting_blood_sugar_year=mysql_real_escape_string($_GET[ 'fasting_blood_sugar_year' ]);
		$fasting_blood_sugar_result=mysql_real_escape_string($_GET[ 'fasting_blood_sugar_result' ]);
		$fasting_blood_sugar_range=mysql_real_escape_string($_GET[ 'fasting_blood_sugar_range' ]);
		$fasting_blood_sugar_range1=mysql_real_escape_string($_GET[ 'fasting_blood_sugar_range1' ]);
		$fasting_blood_sugar_unit=mysql_real_escape_string($_GET[ 'fasting_blood_sugar_unit' ]);
		
		$post_parandial_date=mysql_real_escape_string($_GET[ 'post_parandial_date' ]);
		$post_parandial_day=mysql_real_escape_string($_GET[ 'post_parandial_day' ]);
		$post_parandial_month=mysql_real_escape_string($_GET[ 'post_parandial_month' ]);
		$post_parandial_year=mysql_real_escape_string($_GET[ 'post_parandial_year' ]);
		$post_parandial_result=mysql_real_escape_string($_GET[ 'post_parandial_result' ]);
		$post_parandial_range=mysql_real_escape_string($_GET[ 'post_parandial_range' ]);
		$post_parandial_range1=mysql_real_escape_string($_GET[ 'post_parandial_range1' ]);
		$post_parandial_unit=mysql_real_escape_string($_GET[ 'post_parandial_unit' ]);
		
		
		$urine_blood_date=mysql_real_escape_string($_GET[ 'urine_blood_date' ]);
		$urine_blood_day=mysql_real_escape_string($_GET[ 'urine_blood_day' ]);
		$urine_blood_month=mysql_real_escape_string($_GET[ 'urine_blood_month' ]);
		$urine_blood_year=mysql_real_escape_string($_GET[ 'urine_blood_year' ]);
		$urine_blood_result=mysql_real_escape_string($_GET[ 'urine_blood_result' ]);
		$urine_blood_range=mysql_real_escape_string($_GET[ 'urine_blood_range' ]);
		$urine_blood_range1=mysql_real_escape_string($_GET[ 'urine_blood_range1' ]);
		$urine_blood_unit=mysql_real_escape_string($_GET[ 'urine_blood_unit' ]);
		
		
		$random_blood_sugar_date=mysql_real_escape_string($_GET[ 'random_blood_sugar_date' ]);
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
		$recevied_message=$function->f_Add_Health_Problem_Insert($data,$health_problem_id);
		$parent_id=$recevied_message[0];

		for ($i=1;$i<54;$i++)
		{
			$problem = mysql_real_escape_string($_POST['txt_HP_Problem_'.$i]);
			if($problem_type!=""){

				$problem_type = mysql_real_escape_string($_POST['txt_HP_Problem_Type'.$i]);
				$diag_day = mysql_real_escape_string($_POST['ddl_HP_Problem_Day'.$i]);
				$diag_month = mysql_real_escape_string($_POST['ddl_HP_Problem_Month'.$i]);
				$diag_year = mysql_real_escape_string($_POST['ddl_HP_Problem_Year'.$i]);
				$doctor_id = mysql_real_escape_string($_POST['ddl_HP_Problem_Consulted'.$i]);
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
				$recevied_message=$function->f_Add_Health_Problem_Detail_Insert($data,$health_problem_id);
			}
		}

		 
		$data['message'] ="Success";
		echo json_encode($data);
	}
	
	if($insert_type!="Health_Problem_Ins"){
		$recevied_message_1  = explode("###", $recevied_message);
	}
	
	
?>