 <?php
	class function_class {
		var $db;
		
		function function_class() {
			// class constructor.  Initializations here.
			$this->db = new db_class;
	   	}


		function f_Add_register_step_1($data_values,$id)
	    {
				$f_receive_message="";

				$user_id=$id;
				$name=$data_values["name"];
				$registration_date=$data_values["registration_date"];
				$registration_type=$data_values["registration_type"];
				$dob_day=$data_values["dob_day"];
				$dob_month=$data_values["dob_month"];
				$dob_year=$data_values["dob_year"];
				$marital_status=$data_values["marital_status"];
				$height=$data_values["height"];
				$weight=$data_values["weight"];
				$blood_group=$data_values["blood_group"];
				$p_std_code=$data_values["p_std_code"];
				$p_area=$data_values["p_area"];
				$phone=$data_values["phone"];
				$m_std_code=$data_values["m_std_code"];
				$mobile=$data_values["mobile"];
				$user_email=$data_values["user_email"];
				$adhar_card_no=$data_values["adhar_card_no"];
				$isactive=$data_values["isactive"];
				$isdeleted=$data_values["isdeleted"];
				$imgPhoto=$data_values["imgPhoto"];
				$gender=$data_values["gender"];
				

				$update_times=GetValue("select update_times as col from ".Users." where property_id=".$id, "col");		
				if($update_times==""){$update_times=0;}
				$createdate=date('d-m-Y h:i:s');				
				$updatedate=date('d-m-Y h:i:s');

				if(!isset($_SESSION['User_ID']))
				{
					$updatedby="0";
				}
				
				

				$data = array(
					'name' => $name,
					'gender'=>$gender,
					'dob'=>$dob_year."/".$dob_day."/".$dob_month,
					'registration_date' => $createdate,
					'registration_type' => $registration_type,
					'dob_day' => $dob_day,
					'dob_month' => $dob_month,
					'dob_year' => $dob_year,
					'marital_status' => $marital_status,
					'height' => $height,
					'weight' => $weight,
					'blood_group' => $blood_group,
					'p_std_code' => $p_std_code,
					'p_area' => $p_area,
					'phone' => $phone,
					'm_std_code' => $m_std_code,
					'mobile' => $mobile,
					'user_email' => $user_email,
					'adhar_card_no' => $adhar_card_no,
					'isactive' => $isactive,
					'isdeleted'=>$isdeleted,
					'image1'=>$imgPhoto,
					'updatedby' => $updatedby,
					'updatedate' => $updatedate,
					'update_times' => $update_times,
					'isdeleted'=>$isdeleted,
					
				);
				
				
			
				if($id == "" || $id==0) {
					$user_id =$this->db->insert_array(Users, $data);
				
					$data = array(
						'createdby' => $user_id,
						'createdate' => $createdate,
						'user_id' => $user_id,
						'user_profile_id' => $user_id*33,
						'verification'=>$user_id*33,
					);
					$rows =$this->db->update_array(Users, $data, "user_id = $user_id");

					$f_receive_message="insert record";
					if (!$user_id) { 
						$this->db->print_last_error(false);
						$f_receive_message="Error";
					} 
				} else {
					$rows =$this->db->update_array(Users, $data, "user_id = $user_id");
					$f_receive_message="update record";
					if (!$rows) {
						$this->db->print_last_error(false);
						$f_receive_message="Error";
					} 
				}	
				
				 return $f_receive_message."###".$user_id;
	    }
		

		function f_Add_register_step_2($data_values,$id)
	    {
				$f_receive_message="";

				$user_id=$id;
				$earning_member=$data_values["earning_member"];
				$profession_id=$data_values["profession_id"];
				$company_name=$data_values["company_name"];
				$designation=$data_values["designation"];
				$travel_mode=$data_values["travel_mode"];
				$daily_travel_time_h=$data_values["daily_travel_time_h"];
				$daily_travel_time_m=$data_values["daily_travel_time_m"];
				$age_of_retirement=$data_values["age_of_retirement"];
				$life_expectancy=$data_values["life_expectancy"];
			

				
				$data = array(
					'earning_member' => $earning_member,
					'profession_id' => $profession_id,
					'company_name' => $company_name,
					'designation' => $designation,
					'travel_mode' => $travel_mode,
					'daily_travel_time_h' => $daily_travel_time_h,
					'daily_travel_time_m' => $daily_travel_time_m,
					'age_of_retirement' => $age_of_retirement,
					'life_expectancy' => $life_expectancy,
				);
				
				$rows =$this->db->update_array(Users, $data, "user_id = $user_id");
				$f_receive_message="update record";
				if (!$rows) {
					$this->db->print_last_error(false);
					$f_receive_message="Error";
				} 
				
				
			  return $f_receive_message."###".$user_id;
	    }


		
		function f_Add_register_step_3($data_values,$id)
	    {
				$f_receive_message="";

				$user_id=$id;
				$name=$data_values["name"];
				$registration_date=$data_values["registration_date"];
				$registration_type=$data_values["registration_type"];
				$dob_day=$data_values["dob_day"];
				$dob_month=$data_values["dob_month"];
				$dob_year=$data_values["dob_year"];
				$marital_status=$data_values["marital_status"];
				$height=$data_values["height"];
				$weight=$data_values["weight"];
				$blood_group=$data_values["blood_group"];
				$p_std_code=$data_values["p_std_code"];
				$p_area=$data_values["p_area"];
				$phone=$data_values["phone"];
				$m_std_code=$data_values["m_std_code"];
				$mobile=$data_values["mobile"];
				$user_email=$data_values["user_email"];
				$adhar_card_no=$data_values["adhar_card_no"];
				$isactive=$data_values["isactive"];
				$isdeleted=$data_values["isdeleted"];
				$imgPhoto=$data_values["imgPhoto"];
				$gender=$data_values["gender"];
				$earning_member=$data_values["earning_member"];
				$profession_id=$data_values["profession_id"];
				$company_name=$data_values["company_name"];
				$designation=$data_values["designation"];
				$travel_mode=$data_values["travel_mode"];
				$daily_travel_time_h=$data_values["daily_travel_time_h"];
				$daily_travel_time_m=$data_values["daily_travel_time_m"];
				$age_of_retirement=$data_values["age_of_retirement"];
				$life_expectancy=$data_values["life_expectancy"];
				$pid=$data_values["pid"];
				

				$update_times=GetValue("select update_times as col from ".Users." where property_id=".$id, "col");		
				if($update_times==""){$update_times=0;}
				$createdate=date('d-m-Y h:i:s');				
				$updatedate=date('d-m-Y h:i:s');

				if(!isset($_SESSION['User_ID']))
				{
					$updatedby="0";
				}

				$data = array(
					'name' => $name,
					'gender'=>$gender,
					'dob'=>$dob_year."/".$dob_day."/".$dob_month,
					'registration_date' => $createdate,
					'registration_type' => $registration_type,
					'dob_day' => $dob_day,
					'dob_month' => $dob_month,
					'dob_year' => $dob_year,
					'marital_status' => $marital_status,
					'height' => $height,
					'weight' => $weight,
					'blood_group' => $blood_group,
					'p_std_code' => $p_std_code,
					'p_area' => $p_area,
					'phone' => $phone,
					'm_std_code' => $m_std_code,
					'mobile' => $mobile,
					'user_email' => $user_email,
					'adhar_card_no' => $adhar_card_no,
					'isactive' => $isactive,
					'isdeleted'=>$isdeleted,
					'image1'=>$imgPhoto,
					'updatedby' => $updatedby,
					'updatedate' => $updatedate,
					'update_times' => $update_times,
					'isdeleted'=>$isdeleted,
					'earning_member' => $earning_member,
					'profession_id' => $profession_id,
					'company_name' => $company_name,
					'designation' => $designation,
					'travel_mode' => $travel_mode,
					'daily_travel_time_h' => $daily_travel_time_h,
					'daily_travel_time_m' => $daily_travel_time_m,
					'age_of_retirement' => $age_of_retirement,
					'life_expectancy' => $life_expectancy,
					'parent_id'=>$pid,
					 
				);
				
				
			
				if($id == "" || $id==0) {
					$user_id =$this->db->insert_array(Users, $data);
					$data = array(
						'createdby' => $user_id,
						'createdate' => $createdate,
						'user_id' => $user_id,
					);
					$rows =$this->db->update_array(Users, $data, "user_id = $user_id");

					$f_receive_message="insert record";
					if (!$user_id) { 
						$this->db->print_last_error(false);
						$f_receive_message="Error";
					} 
				} else {
					$rows =$this->db->update_array(Users, $data, "user_id = $user_id");
					$f_receive_message="update record";
					if (!$rows) {
						$this->db->print_last_error(false);
						$f_receive_message="Error";
					} 
				}	
				
				 return $f_receive_message."###".$user_id;
	    }
		
		


		function f_Add_Hospital_Insert($data_values,$id)
	    {
				$f_receive_message="";

				$hospital_id=$id;
				$user_id=$data_values["user_id"];
				$hospital_name=$data_values["hospital_name"];
				$hospital_date=$data_values["hospital_date"];
				$hospital_day=$data_values["hospital_day"];
				$hospital_month=$data_values["hospital_month"];
				$hospital_year=$data_values["hospital_year"];
				$doctor_id=$data_values["doctor_id"];
				$admission_reason=$data_values["admission_reason"];
				$diagnosis=$data_values["diagnosis"];
				$next_year=$data_values["next_year"];
				$discharge_date=$data_values["discharge_date"];
				$discharge_day=$data_values["discharge_day"];
				$discharge_month=$data_values["discharge_month"];
				$discharge_year=$data_values["discharge_year"];
				$diagnosis_summary=$data_values["diagnosis_summary"];
				$doctor_instruction=$data_values["doctor_instruction"];			
				$next_date=$data_values["next_date"];
				$next_day=$data_values["next_day"];
				$next_month=$data_values["next_month"];
				$reminder_date=$data_values["reminder_date"];
				$reminder_day=$data_values["reminder_day"];
				$reminder_month=$data_values["reminder_month"];
				$reminder_year=$data_values["reminder_year"];
				$isactive=$data_values["isactive"];
				$isdeleted=$data_values["isdeleted"];
				
				

				
				$created_date=date('d-m-Y h:i:s');				
				$updated_date=date('d-m-Y h:i:s');


				$data = array(
					'user_id' => $user_id,
					'hospital_date'=>$hospital_date,
					'hospital_name'=>$hospital_name,
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
					'created_by' => $user_id,
					'created_date' => $created_date,
					'updated_date' => $updated_date,
					'updated_by'=>$user_id,
					'isactive'=>$isactive,
					'isdeleted' => $isdeleted,
					
				);
				
				
			
				if($hospital_id == "" || $hospital_id==0) {
					$hospital_id =$this->db->insert_array(Hospital, $data);
					$data = array(
						'created_by' => $user_id,
						'created_date' => $created_date,
						'user_id' => $user_id,
					);
					$rows =$this->db->update_array(Hospital, $data, "hospital_id = $hospital_id");

					$f_receive_message="insert record";
					if (!$user_id) { 
						$this->db->print_last_error(false);
						$f_receive_message="Error";
					} 
				} else {
					$rows =$this->db->update_array(Hospital, $data, "hospital_id = $hospital_id");
					$f_receive_message="update record";
					if (!$rows) {
						$this->db->print_last_error(false);
						$f_receive_message="Error";
					} 
				}	
				
				 return $f_receive_message."###".$hospital_id;
	    }
		
		
		
		function f_Add_Doc_Consult_Insert($data_values,$id)
	    {
				$f_receive_message="";

				$doc_consult_id=$id;
				$user_id=$data_values["user_id"];
				$consult_date=$data_values["consult_date"];
				$consult_day=$data_values["consult_day"];
				$consult_month=$data_values["consult_month"];
				$consult_year=$data_values["consult_year"];
				$doctor_id=$data_values["doctor_id"];
				$vital_record=$data_values["vital_record"];
				$height=$data_values["height"];
				$weight=$data_values["weight"];
				$temperature=$data_values["temperature"];
				$pulse=$data_values["pulse"];
				$blood_pressure=$data_values["blood_pressure"];
				$breathing_rate=$data_values["breathing_rate"];
				$body_mass_index=$data_values["body_mass_index"];
				$resting_heart_rate=$data_values["resting_heart_rate"];
				$notes=$data_values["notes"];
				$store_diagnosed_cond=$data_values["store_diagnosed_cond"];
				$health_problem=$data_values["health_problem"];
				$diagnosed_cond=$data_values["diagnosed_cond"];
				$isactive=$data_values["isactive"];
				$isdeleted=$data_values["isdeleted"];
				
				

				//$update_times=GetValue("select update_times as col from ".Users." where property_id=".$id, "col");		
				//if($update_times==""){$update_times=0;}
				$created_date=date('d-m-Y h:i:s');				
				$updated_date=date('d-m-Y h:i:s');


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
					'created_by' => $user_id,
					'created_date' => $created_date,
					'updated_date' => $updated_date,
					'updated_by'=>$user_id,
					'isactive'=>$isactive,
					'isdeleted' => $isdeleted,
					
				);
				
				
			
				if($doc_consult_id == "" || $doc_consult_id==0) {
					$doc_consult_id =$this->db->insert_array(Doctor_Consult, $data);
					$data = array(
						'created_by' => $user_id,
						'created_date' => $created_date,
						'user_id' => $user_id,
					);
					$rows =$this->db->update_array(Doctor_Consult, $data, "doc_consult_id = $doc_consult_id");

					$f_receive_message="insert record";
					if (!$user_id) { 
						$this->db->print_last_error(false);
						$f_receive_message="Error";
					} 
				} else {
					$rows =$this->db->update_array(Doctor_Consult, $data, "doc_consult_id = $doc_consult_id");
					$f_receive_message="update record";
					if (!$rows) {
						$this->db->print_last_error(false);
						$f_receive_message="Error";
					} 
				}	
				
				 return $f_receive_message."###".$doc_consult_id;
	    }
		
		
		
		
		function f_Add_Medication_Insert($data_values,$id)
	    {
				$f_receive_message="";

				$medication_id=$id;
				$user_id=$data_values["user_id"];
				$medicine=$data_values["medicine"];
				$dosage=$data_values["dosage"];
				$duration=$data_values["duration"];
				$track_machine=$data_values["track_machine"];
				$follow_prescription=$data_values["follow_prescription"];
				$health_problem=$data_values["health_problem"];
				$notes=$data_values["notes"];
				$start_date=$data_values["start_date"];
				$end_date=$data_values["end_date"];
				$start_month=$data_values["start_month"];
				$end_month=$data_values["end_month"];
				$daily_freq_morng=$data_values["daily_freq_morng"];
				$feq_mor_hour=$data_values["feq_mor_hour"];
				$feq_mor_min=$data_values["feq_mor_min"];
				$daily_freq_after=$data_values["daily_freq_after"];
				$feq_af_hour=$data_values["feq_af_hour"];
				$feq_af_min=$data_values["feq_af_min"];
				$daily_freq_even=$data_values["daily_freq_even"];
				$feq_eve_hour=$data_values["feq_eve_hour"];
				$feq_eve_min=$data_values["feq_eve_min"];
				$daily_freq_ngt=$data_values["daily_freq_ngt"];
				$feq_ngt_hour=$data_values["feq_ngt_hour"];
				$feq_ngt_min=$data_values["feq_ngt_min"];
				$purchase_day=$data_values["purchase_day"];
				$purchase_month=$data_values["purchase_month"];
				$purchase_reminder=$data_values["purchase_reminder"];
				$intake_reminder=$data_values["intake_reminder"];
				$alert_mobile=$data_values["alert_mobile"];
				$alert_email=$data_values["alert_email"];
				$isactive=$data_values["isactive"];
				$isdeleted=$data_values["isdeleted"];
				
				

				//$update_times=GetValue("select update_times as col from ".Users." where property_id=".$id, "col");		
				//if($update_times==""){$update_times=0;}
				$created_date=date('d-m-Y h:i:s');				
				$updated_date=date('d-m-Y h:i:s');


				$data = array(
					'user_id' => $user_id,
					'medicine' => $medicine,
					'dosage'=>$dosage,
					'duration'=>$duration,
					'track_machine'=>$track_machine,
					'follow_prescription'=>$follow_prescription,
					'health_problem' => $health_problem,
					'notes' => $notes,
					'start_day' => $start_date,
					'start_month' => $start_month,
					'end_day' => $end_date,
					'end_month' => $end_month,
					'start_date' =>"2014-".$start_month."-".$start_date,
					'end_date' =>"2014-".$end_month."-".$end_date,
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
					'intake_reminder' => $intake_reminder,
					'alert_mobile' => $alert_mobile,
					'alert_email' => $alert_email,
					'created_by' => $user_id,
					'created_date' => $created_date,
					'updated_date' => $updated_date,
					'updated_by'=>$user_id,
					'isactive'=>$isactive,
					'isdeleted' => $isdeleted,
					
				);
				
				
			//Alert ($medication_id);
				if($medication_id == "" || $medication_id==0) {
					$medication_id =$this->db->insert_array(Medication, $data);
					$data = array(
						'created_by' => $user_id,
						'created_date' => $created_date,
						'user_id' => $user_id,
						
					);
					$rows =$this->db->update_array(Medication, $data, "medication_id = $medication_id");

					$f_receive_message="insert record";
					if (!$user_id) { 
						$this->db->print_last_error(false);
						$f_receive_message="Error";
					} 
				} else {
					$rows =$this->db->update_array(Medication, $data, "medication_id = $medication_id");
					$f_receive_message="update record";
					if (!$rows) {
						$this->db->print_last_error(false);
						$f_receive_message="Error";
					} 
				}	
				
				 return $f_receive_message."###".$medication_id;
	    }
		
		
		
		function f_Add_Allergies_Insert($data_values,$id)
	    {
				$f_receive_message="";

				$allergies_id=$id;
				$user_id=$data_values["user_id"];
				$allergic_to=$data_values["allergic_to"];
				$reaction=$data_values["reaction"];
				$status=$data_values["status"];
				$last_observe_date=$data_values["last_observe_date"];
				$last_observe_day=$data_values["last_observe_day"];
				$last_observe_month=$data_values["last_observe_month"];
				$last_observe_year=$data_values["last_observe_year"];
				$consult_date=$data_values["consult_date"];
				$consult_day=$data_values["consult_day"];
				$consult_month=$data_values["consult_month"];
				$consult_year=$data_values["consult_year"];
				$doctor_id=$data_values["doctor_id"];
				$isactive=$data_values["isactive"];
				$isdeleted=$data_values["isdeleted"];
				
				

				//$update_times=GetValue("select update_times as col from ".Users." where property_id=".$id, "col");		
				//if($update_times==""){$update_times=0;}
				$created_date=date('d-m-Y h:i:s');				
				$updated_date=date('d-m-Y h:i:s');


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
					'created_by' => $user_id,
					'created_date' => $created_date,
					'updated_date' => $updated_date,
					'updated_by'=>$user_id,
					'isactive'=>$isactive,
					'isdeleted' => $isdeleted,
					
				);
				
				
			
				if($allergies_id == "" || $allergies_id==0) {
					$allergies_id =$this->db->insert_array(Allergies, $data);
					$data = array(
						'created_by' => $user_id,
						'created_date' => $created_date,
						'user_id' => $user_id,
					);
					
					$rows =$this->db->update_array(Allergies, $data, "allergies_id = $allergies_id");

					$f_receive_message="insert record";
					if (!$user_id) { 
						$this->db->print_last_error(false);
						$f_receive_message="Error";
					} 
				} else {
					$rows =$this->db->update_array(Allergies, $data, "allergies_id = $allergies_id");
					$f_receive_message="update record";
					if (!$rows) {
						$this->db->print_last_error(false);
						$f_receive_message="Error";
					} 
				}	
				
				 return $f_receive_message."###".$allergies_id;
	    }
		
		
		
		function f_Add_Immunization_Insert($data_values,$id)
	    {
				$f_receive_message="";

				$immunization_id=$id;
				$user_id=$data_values["user_id"];
				$immunization_name=$data_values["immunization_name"];
				$administered_date=$data_values["administered_date"];
				$administered_day=$data_values["administered_day"];
				$administered_month=$data_values["administered_month"];
				$administered_year=$data_values["administered_year"];
				$reminder_date=$data_values["reminder_date"];
				$reminder_day=$data_values["reminder_day"];
				$reminder_month=$data_values["reminder_month"];
				$reminder_year=$data_values["reminder_year"];
				$immunization_hour=$data_values["immunization_hour"];
				$immunization_min=$data_values["immunization_min"];
				$isactive=$data_values["isactive"];
				$isdeleted=$data_values["isdeleted"];
				
				

				//$update_times=GetValue("select update_times as col from ".Users." where property_id=".$id, "col");		
				//if($update_times==""){$update_times=0;}
				$created_date=date('d-m-Y h:i:s');				
				$updated_date=date('d-m-Y h:i:s');


				$data = array(
					'user_id' => $user_id,
					'immunization_name'=>$immunization_name,
					'administered_date'=>$administered_date,
					'administered_day'=>$administered_day,
					'administered_month'=>$administered_month,
					'administered_year'=>$administered_year,
					'reminder_date' => $reminder_date,
					'reminder_year' => $reminder_year,
					'reminder_month' => $reminder_month,
					'reminder_year' => $reminder_year,
					'immunization_hour' => $immunization_hour,
					'immunization_min' => $immunization_min,	
					'created_by' => $user_id,
					'created_date' => $created_date,
					'updated_date' => $updated_date,
					'updated_by'=>$user_id,
					'isactive'=>$isactive,
					'isdeleted' => $isdeleted,
					
				);
				
				
			
				if($immunization_id == "" || $immunization_id==0) {
					$immunization_id =$this->db->insert_array(Immunization, $data);
					$data = array(
						'created_by' => $user_id,
						'created_date' => $created_date,
						'user_id' => $user_id,
					);
					
					$rows =$this->db->update_array(Immunization, $data, "immunization_id = $immunization_id");

					$f_receive_message="insert record";
					if (!$user_id) { 
						$this->db->print_last_error(false);
						$f_receive_message="Error";
					} 
				} else {
					$rows =$this->db->update_array(Immunization, $data, "immunization_id = $immunization_id");
					$f_receive_message="update record";
					if (!$rows) {
						$this->db->print_last_error(false);
						$f_receive_message="Error";
					} 
				}	
				
				 return $f_receive_message."###".$immunization_id;
	    }
		
		
		
		function f_Add_Family_History_Insert($data_values,$id)
	    {
				$f_receive_message="";

				$family_history_id=$id;
				$user_id=$data_values["user_id"];
				$relation_id=$data_values["relation_id"];
				$medical_condition=$data_values["medical_condition"];
				$death_cause=$data_values["death_cause"];
				$isactive=$data_values["isactive"];
				$isdeleted=$data_values["isdeleted"];
				
				$created_date=date('d-m-Y h:i:s');				
				$updated_date=date('d-m-Y h:i:s');


				$data = array(
					'user_id' => $user_id,
					'relation_id' => $relation_id,
					'medical_condition' => $medical_condition,
					'death_cause' => $death_cause,
					'created_by' => $user_id,
					'created_date' => $created_date,
					'updated_date' => $updated_date,
					'updated_by'=>$user_id,
					'isactive'=>$isactive,
					'isdeleted' => $isdeleted,
					
				);
				
				
			
				if($family_history_id == "" || $family_history_id==0) {
					$family_history_id =$this->db->insert_array(Family_History, $data);
					$data = array(
						'created_by' => $user_id,
						'created_date' => $created_date,
						'user_id' => $user_id,
					);
					
					$rows =$this->db->update_array(Family_History, $data, "family_history_id = $family_history_id");

					$f_receive_message="insert record";
					if (!$user_id) { 
						$this->db->print_last_error(false);
						$f_receive_message="Error";
					} 
				} else {
					$rows =$this->db->update_array(Family_History, $data, "family_history_id = $family_history_id");
					$f_receive_message="update record";
					if (!$rows) {
						$this->db->print_last_error(false);
						$f_receive_message="Error";
					} 
				}	
				
				 return $f_receive_message."###".$family_history_id;
	    }
		
		
		
		function f_Add_Blood_Pressure_Insert($data_values,$id)
	    {
				$f_receive_message="";

				$blood_pressure_id=$id;
				$user_id=$data_values["user_id"];
				$blood_pressure_systolic=$data_values["blood_pressure_systolic"];
				$del_track_unit=$data_values["del_track_unit"];
				$del_track_date=$data_values["del_track_date"];
				$del_track_day=$data_values["del_track_day"];
				$del_track_month=$data_values["del_track_month"];
				$del_track_year=$data_values["del_track_year"];
				
				$isactive=$data_values["isactive"];
				$isdeleted=$data_values["isdeleted"];
				
				$created_date=date('d-m-Y h:i:s');				
				$updated_date=date('d-m-Y h:i:s');


				$data = array(
					'user_id' => $user_id,
					'blood_pressure_systolic' => $blood_pressure_systolic,
					'del_track_unit' => $del_track_unit,
					'del_track_date' => $del_track_date,
					'del_track_day' => $del_track_day,
					'del_track_month' => $del_track_month,
					'del_track_year' => $del_track_year,
					'created_by' => $user_id,
					'created_date' => $created_date,
					'updated_date' => $updated_date,
					'updated_by'=>$user_id,
					'isactive'=>$isactive,
					'isdeleted' => $isdeleted,
					
				);
				
				
			
				if($blood_pressure_id == "" || $blood_pressure_id==0) {
					$blood_pressure_id =$this->db->insert_array(Blood_Pressure, $data);
					$data = array(
						'created_by' => $user_id,
						'created_date' => $created_date,
						'user_id' => $user_id,
					);
					
					$rows =$this->db->update_array(Blood_Pressure, $data, "blood_pressure_id = $blood_pressure_id");

					$f_receive_message="insert record";
					if (!$user_id) { 
						$this->db->print_last_error(false);
						$f_receive_message="Error";
					} 
				} else {
					$rows =$this->db->update_array(Blood_Pressure, $data, "blood_pressure_id = $blood_pressure_id");
					$f_receive_message="update record";
					if (!$rows) {
						$this->db->print_last_error(false);
						$f_receive_message="Error";
					} 
				}	
				
				 return $f_receive_message."###".$blood_pressure_id;
	    }
		
		
		function f_Add_Life_Style_Insert($data_values,$id)
	    {
				$f_receive_message="";

				$life_style_id=$id;
				$user_id=$data_values["user_id"];
				
				$spirit=$data_values["spirit"];
				$beer=$data_values["beer"];
				$cigarette=$data_values["cigarette"];
				$life_style_sleep=$data_values["life_style_sleep"];
				$physical_stress=$data_values["physical_stress"];
				$physical_stress_details=$data_values["physical_stress_details"];
				$mental_stress=$data_values["mental_stress"];
				$mental_stress_details=$data_values["mental_stress_details"];
				$life_style_date=$data_values["life_style_date"];
				$life_style_day=$data_values["life_style_day"];
				$life_style_month=$data_values["life_style_month"];
				$life_style_year=$data_values["life_style_year"];
				
				$isactive=$data_values["isactive"];
				$isdeleted=$data_values["isdeleted"];
				
				$created_date=date('d-m-Y h:i:s');				
				$updated_date=date('d-m-Y h:i:s');


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
					'created_by' => $user_id,
					'created_date' => $created_date,
					'updated_date' => $updated_date,
					'updated_by'=>$user_id,
					'isactive'=>$isactive,
					'isdeleted' => $isdeleted,
					
				);
				
				
			
				if($life_style_id == "" || $life_style_id==0) {
					$life_style_id =$this->db->insert_array(Life_Style, $data);
					$data = array(
						'created_by' => $user_id,
						'created_date' => $created_date,
						'user_id' => $user_id,
					);
					
					$rows =$this->db->update_array(Life_Style, $data, "life_style_id = $life_style_id");

					$f_receive_message="insert record";
					if (!$user_id) { 
						$this->db->print_last_error(false);
						$f_receive_message="Error";
					} 
				} else {
					$rows =$this->db->update_array(Life_Style, $data, "life_style_id = $life_style_id");
					$f_receive_message="update record";
					if (!$rows) {
						$this->db->print_last_error(false);
						$f_receive_message="Error";
					} 
				}	
				
				 return $f_receive_message."###".$life_style_id;
	    }
		
		
		
		function f_Add_Sugar_Profile_Insert($data_values,$id)
	    {
				$f_receive_message="";

				$sugar_profile_id=$id;
				$user_id=$data_values["user_id"];
				
				$fasting_blood_sugar_date=$data_values["fasting_blood_sugar_date"];
				$fasting_blood_sugar_day=$data_values["fasting_blood_sugar_day"];
				$fasting_blood_sugar_month=$data_values["fasting_blood_sugar_month"];
				$fasting_blood_sugar_year=$data_values["fasting_blood_sugar_year"];
				$fasting_blood_sugar_result=$data_values["fasting_blood_sugar_result"];
				$fasting_blood_sugar_range=$data_values["fasting_blood_sugar_range"];
				$fasting_blood_sugar_range1=$data_values["fasting_blood_sugar_range1"];
				$fasting_blood_sugar_unit=$data_values["fasting_blood_sugar_unit"];
				
				$post_parandial_date=$data_values["post_parandial_date"];
				$post_parandial_day=$data_values["post_parandial_day"];
				$post_parandial_month=$data_values["post_parandial_month"];
				$post_parandial_year=$data_values["post_parandial_year"];
				$post_parandial_result=$data_values["post_parandial_result"];
				$post_parandial_range=$data_values["post_parandial_range"];
				$post_parandial_range1=$data_values["post_parandial_range1"];
				$post_parandial_unit=$data_values["post_parandial_unit"];
				
				
				$urine_blood_date=$data_values["urine_blood_date"];
				$urine_blood_day=$data_values["urine_blood_day"];
				$urine_blood_month=$data_values["urine_blood_month"];
				$urine_blood_year=$data_values["urine_blood_year"];
				$urine_blood_result=$data_values["urine_blood_result"];
				$urine_blood_range=$data_values["urine_blood_range"];
				$urine_blood_range1=$data_values["urine_blood_range1"];
				$urine_blood_unit=$data_values["urine_blood_unit"];
				
				
				$random_blood_sugar_date=$data_values["random_blood_sugar_date"];
				$random_blood_sugar_day=$data_values["random_blood_sugar_day"];
				$random_blood_sugar_month=$data_values["random_blood_sugar_month"];
				$random_blood_sugar_year=$data_values["random_blood_sugar_year"];
				$random_blood_sugar_result=$data_values["random_blood_sugar_result"];
				$random_blood_sugar_range=$data_values["random_blood_sugar_range"];
				$random_blood_sugar_range1=$data_values["random_blood_sugar_range1"];
				$random_blood_sugar_unit=$data_values["random_blood_sugar_unit"];
				
				
				
				$isactive=$data_values["isactive"];
				$isdeleted=$data_values["isdeleted"];
				
				$created_date=date('d-m-Y h:i:s');				
				$updated_date=date('d-m-Y h:i:s');


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
					'created_by' => $user_id,
					'created_date' => $created_date,
					'updated_date' => $updated_date,
					'updated_by'=>$user_id,
					'isactive'=>$isactive,
					'isdeleted' => $isdeleted,
					
				);
				
				
			
				if($sugar_profile_id == "" || $sugar_profile_id==0) {
					$sugar_profile_id =$this->db->insert_array(Sugar_Profile, $data);
					$data = array(
						'created_by' => $user_id,
						'created_date' => $created_date,
						'user_id' => $user_id,
					);
					
					$rows =$this->db->update_array(Sugar_Profile, $data, "sugar_profile_id = $sugar_profile_id");

					$f_receive_message="insert record";
					if (!$user_id) { 
						$this->db->print_last_error(false);
						$f_receive_message="Error";
					} 
				} else {
					$rows =$this->db->update_array(Sugar_Profile, $data, "sugar_profile_id = $sugar_profile_id");
					$f_receive_message="update record";
					if (!$rows) {
						$this->db->print_last_error(false);
						$f_receive_message="Error";
					} 
				}	
				
				 return $f_receive_message."###".$sugar_profile_id;
	    }
		
		
		function f_Add_Lipid_Profile_Insert($data_values,$id)
	    {
				$f_receive_message="";

				$lipid_profile_id=$id;
				$user_id=$data_values["user_id"];
				
				$triglyceride_blood_sugar_date=$data_values["triglyceride_blood_sugar_date"];
				$triglyceride_blood_sugar_day=$data_values["triglyceride_blood_sugar_day"];
				$triglyceride_blood_sugar_month=$data_values["triglyceride_blood_sugar_month"];
				$triglyceride_blood_sugar_year=$data_values["triglyceride_blood_sugar_year"];
				$triglyceride_blood_sugar_result=$data_values["triglyceride_blood_sugar_result"];
				$triglyceride_blood_sugar_range=$data_values["triglyceride_blood_sugar_range"];
				$triglyceride_blood_sugar_range1=$data_values["triglyceride_blood_sugar_range1"];
				$triglyceride_blood_sugar_unit=$data_values["triglyceride_blood_sugar_unit"];
				
				$ldl_date=$data_values["ldl_date"];
				$ldl_day=$data_values["ldl_day"];
				$ldl_month=$data_values["ldl_month"];
				$ldl_year=$data_values["ldl_year"];
				$ldl_result=$data_values["ldl_result"];
				$ldl_range=$data_values["ldl_range"];
				$ldl_range1=$data_values["ldl_range1"];
				$ldl_unit=$data_values["ldl_unit"];
				
				
				$hdl_date=$data_values["hdl_date"];
				$hdl_day=$data_values["hdl_day"];
				$hdl_month=$data_values["hdl_month"];
				$hdl_year=$data_values["hdl_year"];
				$hdl_result=$data_values["hdl_result"];
				$hdl_range=$data_values["hdl_range"];
				$hdl_range1=$data_values["hdl_range1"];
				$hdl_unit=$data_values["hdl_unit"];
				
				
				$cholesterol_date=$data_values["cholesterol_date"];
				$cholesterol_day=$data_values["cholesterol_day"];
				$cholesterol_month=$data_values["cholesterol_month"];
				$cholesterol_year=$data_values["cholesterol_year"];
				$cholesterol_result=$data_values["cholesterol_result"];
				$cholesterol_range=$data_values["cholesterol_range"];
				$cholesterol_range1=$data_values["cholesterol_range1"];
				$cholesterol_unit=$data_values["cholesterol_unit"];
				
				
				
				$isactive=$data_values["isactive"];
				$isdeleted=$data_values["isdeleted"];
				
				$created_date=date('d-m-Y h:i:s');				
				$updated_date=date('d-m-Y h:i:s');


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
					'created_by' => $user_id,
					'created_date' => $created_date,
					'updated_date' => $updated_date,
					'updated_by'=>$user_id,
					'isactive'=>$isactive,
					'isdeleted' => $isdeleted,
					
				);
				
				
			
				if($lipid_profile_id == "" || $lipid_profile_id==0) {
					$lipid_profile_id =$this->db->insert_array(Lipid_Profile, $data);
					$data = array(
						'created_by' => $user_id,
						'created_date' => $created_date,
						'user_id' => $user_id,
					);
					
					$rows =$this->db->update_array(Lipid_Profile, $data, "lipid_profile_id = $lipid_profile_id");

					$f_receive_message="insert record";
					if (!$user_id) { 
						$this->db->print_last_error(false);
						$f_receive_message="Error";
					} 
				} else {
					$rows =$this->db->update_array(Lipid_Profile, $data, "lipid_profile_id = $lipid_profile_id");
					$f_receive_message="update record";
					if (!$rows) {
						$this->db->print_last_error(false);
						$f_receive_message="Error";
					} 
				}	
				
				 return $f_receive_message."###".$lipid_profile_id;
	    }


		function f_Add_Health_Problem_Insert($data_values,$id)
	    {
				$f_receive_message="";

				$health_problem_id=$id;
			
				
				$user_id =$data_values["user_id"];
				$cardiac_problem =$data_values["cardiac_problem"];
				$eye_problem =$data_values["eye_problem"];
				$kidney_problem =$data_values["kidney_problem"];
				$circulation_problem =$data_values["circulation_problem"];
				$skin_problem =$data_values["skin_problem"];
				$digestive_problem =$data_values["digestive_problem"];
				$joint_problem =$data_values["joint_problem"];
				$constipation_problem =$data_values["constipation_problem"];
				$other_problem =$data_values["other_problem"];
				$isactive=$data_values["isactive"];
				$isdeleted =$data_values["isdeleted"];
				
				$created_date=date('d-m-Y h:i:s');				
				$updated_date=date('d-m-Y h:i:s');


				$data = array(
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
					'created_by' => $user_id,
					'created_date' => $created_date,
					'updated_date' => $updated_date,
					'updated_by'=>$user_id,
								
				);
				
				
			
				if($health_problem_id == "" || $health_problem_id==0) {
					$health_problem_id =$this->db->insert_array(Health_Problem, $data);
					$data = array(
						'created_by' => $user_id,
						'created_date' => $created_date,
						'user_id' => $user_id,
					);
					
					$rows =$this->db->update_array(Health_Problem, $data, "health_problem_id = $health_problem_id");
					$f_receive_message="insert record";

					 $query = "Delete from  ".Health_Problem_Details."  where parent_id=".$health_problem_id;
					 mysql_query($query); 

					if (!$health_problem_id) { 
						$this->db->print_last_error(false);
						$f_receive_message="Error";
					} 
				} else {
					$rows =$this->db->update_array(Health_Problem, $data, "health_problem_id = $health_problem_id");
					$f_receive_message="update record";
					if (!$rows) {
						$this->db->print_last_error(false);
						$f_receive_message="Error";
					} 
				}	
				
				 return $f_receive_message."###".$health_problem_id;
	    }
		
		function f_Add_Health_Problem_Detail_Insert($data_values,$id)
	    {
				$f_receive_message="";

				$health_problem_id=$id;			
				
				$user_id =$data_values["user_id"];
				$problem =$data_values["problem"];
				$diag_day =$data_values["diag_day"];
				$diag_month =$data_values["diag_month"];
				$diag_year =$data_values["diag_year"];
				$diag_date =$data_values["diag_date"];
				$doctor_id =$data_values["doctor_id"];
				$health_problem_id =$data_values["health_problem_id"];
				$problem_type =$data_values["problem_type"];
				$parent_id=$data_values["parent_id"];
				
				$data = array(
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

				$health_problem_id =$this->db->insert_array(Health_Problem_Details, $data);
				return $f_receive_message."###".$health_problem_id;
	    }
	}
?>