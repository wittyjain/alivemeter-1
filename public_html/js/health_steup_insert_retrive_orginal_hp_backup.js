function RetriveReocrds_Main(pageURL,dvName)
{
	if (pageURL=="Doc_Consult")
	{
		pageURL=hostname+"/retrive_files/retrive_doc_consult.inc.php";
	}
	if (pageURL=="Medication")
	{
		pageURL=hostname+"/retrive_files/retrive_medication.inc.php";
	}
	
	if (pageURL=="Allergies")
	{
		pageURL=hostname+"/retrive_files/retrive_allergies.inc.php";
	}
	
	if (pageURL=="Hospitalization")
	{
		pageURL=hostname+"/retrive_files/retrive_hospitalization.inc.php";
	}
	
	if (pageURL=="Immunization")
	{
		pageURL=hostname+"/retrive_files/retrive_immunization.inc.php";
	}
	
	if (pageURL=="Health_Problems")
	{
		pageURL=hostname+"/retrive_files/retrive_health_problems.inc.php";
	}
	
	if (pageURL=="Family_History")
	{
		pageURL=hostname+"/retrive_files/retrive_family_history.inc.php";
	}
	
	if (pageURL=="Daily_Tracking")
	{
		pageURL=hostname+"/retrive_files/retrive_daily_tracking.inc.php";
	}
	
	if (pageURL=="Blood_Pressure")
	{
		pageURL=hostname+"/retrive_files/retrive_blood_pressure.inc.php";
	}
	
	if (pageURL=="Sugar_Profile")
	{
		pageURL=hostname+"/retrive_files/retrive_sugar_profile.inc.php";
	}
	
	if (pageURL=="Life_Style")
	{
		pageURL=hostname+"/retrive_files/retrive_life_style.inc.php";
	}
	
	if (pageURL=="Lipid_Profile")
	{
		pageURL=hostname+"/retrive_files/retrive_lipid_profile.inc.php";
	}
	

	if (window.XMLHttpRequest)
	{// for IE7+, Firefox, Chrome, Opera, Safaricodes
		xmlhttp = new XMLHttpRequest();
	}
	else
	{// code for IE6, IE5
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function()
	{
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
		{
			document.getElementById(dvName).innerHTML = xmlhttp.responseText;
		}
	}
	
	xmlhttp.open("GET",pageURL,true);
	xmlhttp.send();
}




function RetriveReocrds(type,dvName)
{
	var pageURL=type;
	if (pageURL=="Doc_Consult")
	{
		pageURL=hostname+"/retrive_files/retrive_doc_consult.inc.php";
	}
	if (pageURL=="Medication")
	{
		pageURL=hostname+"/retrive_files/retrive_medication.inc.php";
	}
	
	if (pageURL=="Allergies")
	{
		pageURL=hostname+"/retrive_files/retrive_allergies.inc.php";
	}
	
	if (pageURL=="Hospitalization")
	{
		pageURL=hostname+"/retrive_files/retrive_hospitalization.inc.php";
	}
	
	if (pageURL=="Immunization")
	{
		pageURL=hostname+"/retrive_files/retrive_immunization.inc.php";
	}
	
	if (pageURL=="Health_Problems")
	{
		pageURL=hostname+"/retrive_files/retrive_health_problems.inc.php";
	}
	
	if (pageURL=="Family_History")
	{
		pageURL=hostname+"/retrive_files/retrive_family_history.inc.php";
	}
	
	
	if (pageURL=="Blood_Pressure")
	{
		pageURL=hostname+"/retrive_files/retrive_blood_pressure.inc.php";
	}
	
	if (pageURL=="Sugar_Profile")
	{
		pageURL=hostname+"/retrive_files/retrive_sugar_profile.inc.php";
	}
	
	if (pageURL=="Life_Style")
	{
		pageURL=hostname+"/retrive_files/retrive_life_style.inc.php";
	}
	
	if (pageURL=="Lipid_Profile")
	{
		pageURL=hostname+"/retrive_files/retrive_lipid_profile.inc.php";
	}
	

	if (window.XMLHttpRequest)
	{// for IE7+, Firefox, Chrome, Opera, Safaricodes
		xmlhttp = new XMLHttpRequest();
	}
	else
	{// code for IE6, IE5
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function()
	{
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
		{
			document.getElementById(dvName).innerHTML = xmlhttp.responseText;
			if (type=="Doc_Consult")
			{
				RetriveReocrds('Medication',"dvMedication");
			}
			else if (type=="Medication")
			{
				RetriveReocrds('Allergies',"dvAllergies");
			}
			else if (type=="Allergies")
			{
				RetriveReocrds('Hospitalization',"dvHospitalization");
			}
			else if (type=="Hospitalization")
			{
				RetriveReocrds('Immunization',"dvImmunization");
			}
			else if (type=="Immunization")
			{
				RetriveReocrds('Health_Problems',"dvHealth_Problems");
			}
			else if (type=="Health_Problems")
			{
				RetriveReocrds('Family_History',"dvFamily_History");
			}
			else if (type=="Family_History")
			{
				RetriveReocrds('Blood_Pressure',"dvBlood_Pressure");
			}
			else if (type=="Blood_Pressure")
			{
				RetriveReocrds('Sugar_Profile',"dvSugar_Profile");
			}
			else if (type=="Sugar_Profile")
			{
				RetriveReocrds('Life_Style',"dvLife_Style");
			}
			else if (type=="Life_Style")
			{
				RetriveReocrds('Lipid_Profile',"dvLipid_Profile");
			}
			
			
		}
	}
	
	xmlhttp.open("GET",pageURL,true);
	xmlhttp.send();
}


function Doc_Consult_Ins(row)
{
	if(document.getElementById("ddl_Doc_Day").value=="0" || document.getElementById("ddl_Doc_Month").value=="0" || document.getElementById("ddl_Doc_Year").value=="0")
	{
		alert ("Please select consultation date.");
		document.getElementById("ddl_Doc_Day").focus();
		return false;
	}
	
	if(document.getElementById("ddl_Doc_Consulted").value=="0")
	{
		alert ("Please select consulted doctor.");
		document.getElementById("ddl_Doc_Consulted").focus();
		return false;
	}
	
	
	var td=$(row).parent();
	var consult_day = $( "#ddl_Doc_Day" ).val();
	var consult_month = $( "#ddl_Doc_Month" ).val();
	var consult_year = $( "#ddl_Doc_Year" ).val();
	var doctor_id= $( "#ddl_Doc_Consulted" ).val();
	var vital_record ="Yes";	
	if ( $( "#vitalNo" ).checked==true)
	{
		vital_record ="No";		
	}
	
	var height = $( "#txt_Dc_Height" ).val();	
	var weight = $( "#txt_Dc_Weight" ).val();	
	var temperature = $( "#txt_Dc_Temperature" ).val();	
	var pulse = $( "#txt_Dc_Pulse" ).val();	
	var blood_pressure = $( "#txt_Dc_Blood_Pressure" ).val();	
	var breathing_rate = $( "#txt_Dc_Breathing_Rate" ).val();	
	var body_mass_index = $( "#txt_Dc_Body_Mass_index" ).val();	
	var resting_heart_rate = $( "#txt_Dc_Resting_Heart_Rate" ).val();	
	var notes = $( "#txt_Dc_Note" ).val();	
	var store_diagnosed_cond ="Yes";	
	if ( $( "#diag_cond_No" ).checked==true)
	{
		store_diagnosed_cond ="No";		
	}
	var health_problem = $( "#txt_Dc_Health_Problem" ).val();	
	var diagnosed_cond = $( "#cmb_Diagnosed_Condition" ).val();	

	var doc_consult_id = $( "#txt_Doc_Consult_ID" ).val();	

	

	var url_param="consult_day="+consult_day+"&consult_month="+consult_month+"&consult_year="+consult_year+"&doctor_id="+doctor_id+"&vital_record="+vital_record;
	url_param=url_param+"&height="+height+"&weight="+weight+"&temperature="+temperature+"&pulse="+pulse+"&blood_pressure="+blood_pressure;
	url_param=url_param+"&breathing_rate="+breathing_rate+"&body_mass_index="+body_mass_index+"&resting_heart_rate="+resting_heart_rate;
	url_param=url_param+"&notes="+notes+"&store_diagnosed_cond="+store_diagnosed_cond+"&health_problem="+health_problem;
	url_param=url_param+"&diagnosed_cond="+diagnosed_cond+"&doc_consult_id="+doc_consult_id+"&insert_type=Doc_Consult_Ins";


	console.log(url_param);
	$.ajax( { 
				url: hostname+"/includes/add_records.inc.php?" + url_param,
				success: function(result) {
					//console.log( $(result) );
				}	
	} );


	document.getElementById("ddl_Doc_Day" ).value="0";
	document.getElementById("ddl_Doc_Month" ).value="0";
	document.getElementById("ddl_Doc_Year" ).value="0";
	document.getElementById("ddl_Doc_Consulted" ).value="0";
	document.getElementById("txt_Dc_Height" ).value="";	
	document.getElementById("txt_Dc_Weight" ).value="";	
	document.getElementById("txt_Dc_Temperature" ).value="";	
	document.getElementById("txt_Dc_Pulse" ).value="";	
	document.getElementById("txt_Dc_Blood_Pressure" ).value="";	
	document.getElementById("txt_Dc_Breathing_Rate" ).value="";	
	document.getElementById("txt_Dc_Body_Mass_index" ).value="";	
	document.getElementById("txt_Dc_Resting_Heart_Rate" ).value="";	
	document.getElementById("txt_Dc_Note" ).value="";	
	document.getElementById("txt_Dc_Health_Problem" ).value="";	
	document.getElementById("cmb_Diagnosed_Condition" ).value="0";	
	document.getElementById("txt_Doc_Consult_ID" ).value="";	

RetriveReocrds_Main('Doc_Consult','dvDocConsult');
	alert("Record saved successfully.");
	
}


function Medication_Ins(row)
{
	
	
	if(document.getElementById("txt_MD_Medicine").value=="")
	{
		alert ("Please enter medicine.");
		document.getElementById("txt_MD_Medicine").focus();
		return false;
	}
	
	if(document.getElementById("txt_MD_Dosage").value=="")
	{
		alert ("Please enter dosage.");
		document.getElementById("txt_MD_Dosage").focus();
		return false;
	}
	
	if(document.getElementById("txt_MD_Duration").value=="")
	{
		alert ("Please enter duration.");
		document.getElementById("txt_MD_Duration").focus();
		return false;
	}
	
	if(document.getElementById("txt_MD_Currently_Medicine").value=="")
	{
		alert ("Please enter medicine which currently taking.");
		document.getElementById("txt_MD_Currently_Medicine").focus();
		return false;
	}
	
	
	if(document.getElementById("txt_MD_Followed_Prescription").value=="")
	{
		alert ("Please enter prescription you followed.");
		document.getElementById("txt_MD_Followed_Prescription").focus();
		return false;
	}
	
	
	if(document.getElementById("txt_MD_Health_Problem").value=="")
	{
		alert ("Please enter your health problem.");
		document.getElementById("txt_MD_Health_Problem").focus();
		return false;
	}
	
	
	

	var td=$(row).parent();
	
	var medicine = $( "#txt_MD_Medicine" ).val();
	var dosage = $( "#txt_MD_Dosage" ).val();
	var duration = $( "#txt_MD_Duration" ).val();
	var track_machine= $( "#txt_MD_Currently_Medicine" ).val();
	var follow_prescription = $( "#txt_MD_Followed_Prescription" ).val();	
	var health_problem = $( "#txt_MD_Health_Problem" ).val();	
	var notes = $( "#txt_MD_Instruction_For_Medicine" ).val();	
	var start_date = $( "#cmb_MD_Intake_Reminder_Start_Date" ).val();	
	var start_month = $( "#cmb_MD_Intake_Reminder_Start_Month" ).val();	
	var end_date = $( "#cmb_MD_Intake_Reminder_End_Date" ).val();	
	var end_month = $( "#cmb_MD_Intake_Reminder_End_Month" ).val();	
	var daily_freq_morng = $( "#Chk_MD_Daily_Frequency_Morning" ).val();	
	var feq_mor_hour = $( "#Chk_MD_Daily_Frequency_HH_Morning" ).val();	
	var feq_mor_min = $( "#Chk_MD_Daily_Frequency_Min_Morning" ).val();	
	var daily_freq_after = $( "#Chk_MD_Daily_Frequency_Afternoon" ).val();	
	var feq_af_hour = $( "#Chk_MD_Daily_Frequency_HH_Afternoon" ).val();	
	var feq_af_min = $( "#Chk_MD_Daily_Frequency_Min_Afternoon" ).val();	
	var daily_freq_even = $( "#Chk_MD_Daily_Frequency_Evening" ).val();	
	var feq_eve_hour = $( "#Chk_MD_Daily_Frequency_HH_Evening" ).val();	
	var feq_eve_min = $( "#Chk_MD_Daily_Frequency_Min_Evening" ).val();	
	var daily_freq_ngt = $( "#Chk_MD_Daily_Frequency_Night" ).val();	
	var feq_ngt_hour = $( "#Chk_MD_Daily_Frequency_HH_Night" ).val();	
	var feq_ngt_min = $( "#Chk_MD_Daily_Frequency_Min_Night" ).val();
	var purchase_day = $( "#cmb_MD_Purchase_Reminder_Date" ).val();
	var purchase_month = $( "#cmb_MD_Purchase_Reminder_Month" ).val();
	var intake_reminder = $( "#Chk_MD_Setup_Intake_Reminder" ).val();
	var purchase_reminder = $( "#Chk_MD_Setup_Purchase_Reminder" ).val();
	var alert_mobile = $( "#Chk_MD_Purchase_alert_Mobile" ).val();
	var alert_email = $( "#Chk_MD_Purchase_alert_Email" ).val();

	var medication_id = $( "#txt_MD_medication_id" ).val();	

	var url_param="medicine="+medicine+"&dosage="+dosage+"&duration="+duration+"&track_machine="+track_machine+"&follow_prescription="+follow_prescription;
	url_param=url_param+"&health_problem="+health_problem+"&notes="+notes+"&start_date="+start_date+"&end_date="+end_date+"&start_month="+start_month+"&end_month="+end_month+"&daily_freq_morng="+daily_freq_morng;
	url_param=url_param+"&feq_mor_hour="+feq_mor_hour+"&feq_mor_min="+feq_mor_min+"&daily_freq_after="+daily_freq_after;
	url_param=url_param+"&feq_af_hour="+feq_af_hour+"&feq_af_min="+feq_af_min+"&daily_freq_even="+daily_freq_even+"&feq_eve_hour="+feq_eve_hour+"&feq_eve_min="+feq_eve_min+"&daily_freq_ngt="+daily_freq_ngt;
	url_param=url_param+"&purchase_day="+purchase_day+"&purchase_month="+purchase_month+"&purchase_reminder="+purchase_reminder+"&alert_mobile="+alert_mobile+"&alert_email="+alert_email;
	url_param=url_param+"&feq_ngt_hour="+feq_ngt_hour+"&intake_reminder="+intake_reminder+"&feq_ngt_min="+feq_ngt_min+"&medication_id="+medication_id+"&insert_type=Medication_Ins";


	console.log(url_param);
	$.ajax( { 
				url: hostname+"/includes/add_records.inc.php?" + url_param,
				success: function(result) {
					//console.log( $(result) );
				}	
	} );



	
	document.getElementById("txt_MD_Medicine" ).value="";
	document.getElementById("txt_MD_Dosage" ).value="";
	document.getElementById("txt_MD_Duration" ).value="";
	document.getElementById("txt_MD_Currently_Medicine" ).value="";
	document.getElementById("txt_MD_Followed_Prescription" ).value="";	
	document.getElementById("txt_MD_Health_Problem" ).value="";	
	document.getElementById("txt_MD_Instruction_For_Medicine" ).value="";	
	document.getElementById("cmb_MD_Intake_Reminder_Start_Date" ).value="0";	
	document.getElementById("cmb_MD_Intake_Reminder_End_Date" ).value="0";	
	document.getElementById("Chk_MD_Daily_Frequency_Morning" ).checked=false;		
	document.getElementById("Chk_MD_Daily_Frequency_HH_Morning" ).checked=false;	
	document.getElementById("Chk_MD_Daily_Frequency_Min_Morning" ).checked=false;	
	document.getElementById("Chk_MD_Daily_Frequency_Afternoon" ).checked=false;		
	document.getElementById("Chk_MD_Daily_Frequency_HH_Afternoon" ).checked=false;		
	document.getElementById("Chk_MD_Daily_Frequency_Min_Afternoon" ).checked=false;	
	document.getElementById("Chk_MD_Daily_Frequency_Evening" ).checked=false;		
	document.getElementById("Chk_MD_Daily_Frequency_HH_Evening" ).checked=false;	
	document.getElementById("Chk_MD_Daily_Frequency_Min_Evening" ).checked=false;	
	document.getElementById("Chk_MD_Daily_Frequency_Night" ).checked=false;	
	document.getElementById("Chk_MD_Daily_Frequency_HH_Night" ).checked=false;		
	document.getElementById("Chk_MD_Daily_Frequency_Min_Night" ).checked=false;	
	document.getElementById("cmb_MD_Purchase_Reminder_Date" ).value="0";	
	document.getElementById("cmb_MD_Purchase_Reminder_Month" ).value="0";	
	document.getElementById("Chk_MD_Setup_Intake_Reminder" ).checked=false;	
	document.getElementById("Chk_MD_Setup_Purchase_Reminder" ).checked=false;	
	document.getElementById("Chk_MD_Purchase_alert_Mobile" ).checked=false;	
	document.getElementById("Chk_MD_Purchase_alert_Email" ).checked=false;	
	document.getElementById("txt_MD_medication_id" ).value="";	

	Purchase_Reminder_Show_Hide();
	Daily_Frequency_enabledisable();
	Intake_Reminder_Show_Hide();

	RetriveReocrds_Main('Medication','dvMedication');

	alert("Record saved successfully.");
	
}


function Doc_Consult_Delete_By_Id(id,deleted_id)
{

	if (confirm("Are you sure you want to delete this record ?"))
	{
		var message="";
		var day="";
		if (window.XMLHttpRequest)
		{// for IE7+, Firefox, Chrome, Opera, Safaricodes
			xmlhttp = new XMLHttpRequest();
		}
		else
		{// code for IE6, IE5
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange=function()
		{
			if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
			{	
				 message = xmlhttp.responseText;
				 alert(message);
				 document.getElementById("tr_doc_consult_"+deleted_id).style.display='none';
			}
		}
		xmlhttp.open("GET",hostname+"/includes/delete_reocrds.inc.php?insert_type=Doc_Consult_Ins&cid="+id,true);
		xmlhttp.send();
	}
	
}
function Doc_Consult_Retrive_By_Id(id)
{
	var message="";
	var day="";
	if (window.XMLHttpRequest)
	{// for IE7+, Firefox, Chrome, Opera, Safaricodes
		xmlhttp = new XMLHttpRequest();
	}
	else
	{// code for IE6, IE5
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function()
	{
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
		{	
			 message = JSON.parse(xmlhttp.responseText);
			 data = {"records":message};
			 for (var i = 0; i < data.records.length; ++i) {
				 day=data.records[i].consult_day;


				 	document.getElementById("ddl_Doc_Day" ).value=data.records[i].consult_day;
					document.getElementById("ddl_Doc_Month" ).value=data.records[i].consult_month;
					document.getElementById("ddl_Doc_Year" ).value=data.records[i].consult_year;
					document.getElementById("ddl_Doc_Consulted" ).value=data.records[i].doctor_id;
					document.getElementById("txt_Dc_Height" ).value=data.records[i].height;	
					document.getElementById("txt_Dc_Weight" ).value=data.records[i].weight;	
					document.getElementById("txt_Dc_Temperature" ).value=data.records[i].temperature;	
					document.getElementById("txt_Dc_Pulse" ).value=data.records[i].pulse;	
					document.getElementById("txt_Dc_Blood_Pressure" ).value=data.records[i].blood_pressure;	
					document.getElementById("txt_Dc_Breathing_Rate" ).value=data.records[i].breathing_rate;	
					document.getElementById("txt_Dc_Body_Mass_index" ).value=data.records[i].body_mass_index;	
					document.getElementById("txt_Dc_Resting_Heart_Rate" ).value=data.records[i].resting_heart_rate;	
					document.getElementById("txt_Dc_Note" ).value=data.records[i].notes;	
					document.getElementById("txt_Dc_Health_Problem" ).value=data.records[i].health_problem;	
					document.getElementById("cmb_Diagnosed_Condition" ).value=data.records[i].diagnosed_cond;	
					document.getElementById("txt_Doc_Consult_ID" ).value=data.records[i].doc_consult_id;	

				   if (data.records[i].store_diagnosed_cond=="Yes" )
				   {
						document.getElementById("diag_cond_Yes" ).checked=true
						show3();
				   }
				   else
				   {
						document.getElementById("diag_cond_No" ).checked=true
						show4();
				   }
					
				   if (data.records[i].vital_record=="Yes")
				   {
						document.getElementById("vitalYes" ).checked=true
						show1();
				   }
				   else
				   {
						document.getElementById("vitalNo" ).checked=true
						show2();
				   }

			 }
			 
			  
			

		}
	}
	xmlhttp.open("GET",hostname+"/retrive_files/retrive_reocrds.inc.php?insert_type=Doc_Consult_Ins&cid="+id,true);
	xmlhttp.send();
}



function Medication_Delete_By_Id(id,deleted_id)
{

	if (confirm("Are you sure you want to delete this record ?"))
	{
		var message="";
		var day="";
		if (window.XMLHttpRequest)
		{// for IE7+, Firefox, Chrome, Opera, Safaricodes
			xmlhttp = new XMLHttpRequest();
		}
		else
		{// code for IE6, IE5
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange=function()
		{
			if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
			{	
				 message = xmlhttp.responseText;
				 alert(message);
				 document.getElementById("tr_medication_"+deleted_id).style.display='none';
			}
		}

		xmlhttp.open("GET",hostname+"/includes/delete_reocrds.inc.php?insert_type=Medication_Ins&cid="+id,true);
		xmlhttp.send();
	}
	
}
function Medication_Retrive_By_Id(id)
{
	var message="";
	var day="";
	if (window.XMLHttpRequest)
	{// for IE7+, Firefox, Chrome, Opera, Safaricodes
		xmlhttp = new XMLHttpRequest();
	}
	else
	{// code for IE6, IE5
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function()
	{
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
		{	
			 message = JSON.parse(xmlhttp.responseText);
			 data = {"records":message};
			 for (var i = 0; i < data.records.length; ++i) {
				 day=data.records[i].consult_day;


				 	document.getElementById("txt_MD_Medicine" ).value=data.records[i].medicine;
					document.getElementById("txt_MD_Dosage" ).value=data.records[i].dosage;
					document.getElementById("txt_MD_Duration" ).value=data.records[i].duration;
					document.getElementById("txt_MD_Currently_Medicine" ).value=data.records[i].track_machine;
					document.getElementById("txt_MD_Followed_Prescription" ).value=data.records[i].follow_prescription;	
					document.getElementById("txt_MD_Health_Problem" ).value=data.records[i].health_problem;	
					document.getElementById("txt_MD_Instruction_For_Medicine" ).value=data.records[i].notes;	
					document.getElementById("cmb_MD_Intake_Reminder_Start_Date" ).value=data.records[i].start_day;	
					document.getElementById("cmb_MD_Intake_Reminder_End_Date" ).value=data.records[i].end_day;	
					document.getElementById("cmb_MD_Intake_Reminder_Start_Month" ).value=data.records[i].start_month;	
					document.getElementById("cmb_MD_Intake_Reminder_End_Month" ).value=data.records[i].end_month;	
					document.getElementById("Chk_MD_Daily_Frequency_HH_Morning" ).value=data.records[i].feq_mor_hour;	
					document.getElementById("Chk_MD_Daily_Frequency_Min_Morning" ).value=data.records[i].feq_mor_min;	
					document.getElementById("Chk_MD_Daily_Frequency_HH_Afternoon" ).value=data.records[i].feq_af_hour;	
					document.getElementById("Chk_MD_Daily_Frequency_Min_Afternoon" ).value=data.records[i].feq_af_min;	
					document.getElementById("Chk_MD_Daily_Frequency_HH_Evening" ).value=data.records[i].feq_eve_hour;	
					document.getElementById("Chk_MD_Daily_Frequency_Min_Evening" ).value=data.records[i].feq_eve_min;	
					document.getElementById("Chk_MD_Daily_Frequency_HH_Night" ).value=data.records[i].feq_ngt_hour;	
					document.getElementById("Chk_MD_Daily_Frequency_Min_Night" ).value=data.records[i].feq_ngt_min;	
					document.getElementById("cmb_MD_Purchase_Reminder_Date" ).value=data.records[i].purchase_day;	
					document.getElementById("cmb_MD_Purchase_Reminder_Month" ).value=data.records[i].purchase_month;	
					document.getElementById("txt_MD_medication_id" ).value=data.records[i].medication_id;	
				
 


				   if (data.records[i].intake_reminder=="on" )
				   {
						document.getElementById("Chk_MD_Setup_Intake_Reminder" ).checked=true
						Intake_Reminder_Show_Hide();
				   }

				   if (data.records[i].purchase_reminder=="on" )
				   {
						document.getElementById("Chk_MD_Setup_Purchase_Reminder" ).checked=true
						Purchase_Reminder_Show_Hide();
	
	 
				   }

				   if (data.records[i].alert_email=="on" )
				   {
						document.getElementById("Chk_MD_Purchase_alert_Email" ).checked=true
						Intake_Reminder_Show_Hide();
				   }

				   if (data.records[i].alert_mobile=="on" )
				   {
						document.getElementById("Chk_MD_Purchase_alert_Mobile" ).checked=true
						Intake_Reminder_Show_Hide();
				   }


					if (data.records[i].daily_freq_morng=="on" )
				   {
						document.getElementById("Chk_MD_Daily_Frequency_Morning" ).checked=true
						Intake_Reminder_Show_Hide();
				   }

				    if (data.records[i].daily_freq_after=="on" )
				   {
						document.getElementById("Chk_MD_Daily_Frequency_Afternoon" ).checked=true
						
				   }

				     if (data.records[i].daily_freq_even=="on" )
				   {
						document.getElementById("Chk_MD_Daily_Frequency_Evening" ).checked=true
						
				   }

				    if (data.records[i].daily_freq_ngt=="on" )
				   {
						document.getElementById("Chk_MD_Daily_Frequency_Night" ).checked=true
						
				   }

				   
				   Daily_Frequency_enabledisable();

			 }
			 
			  
			

		}
	}
	xmlhttp.open("GET",hostname+"/retrive_files/retrive_reocrds.inc.php?insert_type=Medication_Ins&cid="+id,true);
	xmlhttp.send();
}




function Allergies_Ins(row)
{
	
	if(document.getElementById("txt_AL_Allergicto").value=="")
	{
		alert ("You are allergic to?");
		document.getElementById("txt_AL_Allergicto").focus();
		return false;
	}
	
	if(document.getElementById("txt_AL_Allergic_Reaction").value=="")
	{
		alert ("Please enter allergic reaction.");
		document.getElementById("txt_AL_Allergic_Reaction").focus();
		return false;
	}
	
	if(document.getElementById("txt_AL_Allergic_Status").value=="0")
	{
		alert ("Please select allergic status.");
		document.getElementById("txt_AL_Allergic_Status").focus();
		return false;
	}
	
	
	if(document.getElementById("txt_AL_Allergic_Day").value=="0" || document.getElementById("txt_AL_Allergic_Month").value=="0" || document.getElementById("txt_AL_Allergic_Year").value=="0")
	{
		alert ("Please select last observed date.");
		document.getElementById("txt_AL_Allergic_Day").focus();
		return false;
	}
	
	if(document.getElementById("txt_AL_Doctor_Consulted").value=="0")
	{
		alert ("Please select consulted doctor.");
		document.getElementById("txt_AL_Doctor_Consulted").focus();
		return false;
	}
	
	

	var td=$(row).parent();
	var allergies_id = $( "#txt_Allergies_ID" ).val();
	var allergic_to = $( "#txt_AL_Allergicto" ).val();
	var reaction = $( "#txt_AL_Allergic_Reaction" ).val();
	var status = $( "#txt_AL_Allergic_Status" ).val();
	var doctor_id= $( "#txt_AL_Doctor_Consulted" ).val();
	var last_observe_day = $( "#txt_AL_Allergic_Day" ).val();	
	var last_observe_month = $( "#txt_AL_Allergic_Month" ).val();	
	var last_observe_year = $( "#txt_AL_Allergic_Year" ).val();	
	var consult_day = $( "#txt_AL_Allergic_ConsultationDay" ).val();	
	var consult_month = $( "#txt_AL_Allergic_ConsultationMonth" ).val();	
	var consult_year = $( "#txt_AL_Allergic_ConsultationYear" ).val();	


	var url_param="allergies_id="+allergies_id+"&allergic_to="+allergic_to+"&reaction="+reaction+"&status="+status+"&doctor_id="+doctor_id;
	url_param=url_param+"&last_observe_day="+last_observe_day+"&last_observe_month="+last_observe_month+"&last_observe_year="+last_observe_year+"&consult_day="+consult_day+"&consult_month="+consult_month+"&consult_year="+consult_year+"&insert_type=Allergies_Ins";


	console.log(url_param);
	$.ajax( { 
				url: hostname+"/includes/add_records.inc.php?" + url_param,
				success: function(result) {
					//console.log( $(result) );
				}	
	} );

	document.getElementById("txt_Allergies_ID" ).value="";
	document.getElementById("txt_AL_Allergicto" ).value="";
	document.getElementById("txt_AL_Allergic_Reaction" ).value="";
	document.getElementById("txt_AL_Allergic_Status" ).value="";
	document.getElementById("txt_AL_Doctor_Consulted" ).value="0";	
	document.getElementById("txt_AL_Allergic_Day" ).value="0";	
	document.getElementById("txt_AL_Allergic_Month" ).value="0";	
	document.getElementById("txt_AL_Allergic_Year" ).value="0";	
	document.getElementById("txt_AL_Allergic_ConsultationDay" ).value="0";	
	document.getElementById("txt_AL_Allergic_ConsultationMonth" ).value="0";	
	document.getElementById("txt_AL_Allergic_ConsultationYear" ).value="0";	

RetriveReocrds_Main('Allergies','dvAllergies');
	alert("Record saved successfully.");
	
}



function Allergies_Delete_By_Id(id,deleted_id)
{

	if (confirm("Are you sure you want to delete this record ?"))
	{
		var message="";
		var day="";
		if (window.XMLHttpRequest)
		{// for IE7+, Firefox, Chrome, Opera, Safaricodes
			xmlhttp = new XMLHttpRequest();
		}
		else
		{// code for IE6, IE5
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange=function()
		{
			if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
			{	
				 message = xmlhttp.responseText;
				 alert(message);
				 document.getElementById("tr_allergies_"+deleted_id).style.display='none';
			}
		}
		xmlhttp.open("GET",hostname+"/includes/delete_reocrds.inc.php?insert_type=Allergies&cid="+id,true);
		xmlhttp.send();
	}
	
}



function Allergies_Retrive_By_Id(id)
{
	var message="";
	var day="";
	if (window.XMLHttpRequest)
	{// for IE7+, Firefox, Chrome, Opera, Safaricodes
		xmlhttp = new XMLHttpRequest();
	}
	else
	{// code for IE6, IE5
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function()
	{
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
		{	
			 message = JSON.parse(xmlhttp.responseText);
			 data = {"records":message};
			 for (var i = 0; i < data.records.length; ++i) {
				 day=data.records[i].consult_day;


				document.getElementById("txt_Allergies_ID" ).value=data.records[i].allergies_id;
				document.getElementById("txt_AL_Allergicto" ).value=data.records[i].allergic_to;
				document.getElementById("txt_AL_Allergic_Reaction" ).value=data.records[i].reaction;
				document.getElementById("txt_AL_Allergic_Status" ).value=data.records[i].status;
				document.getElementById("txt_AL_Doctor_Consulted" ).value=data.records[i].doctor_id;
				document.getElementById("txt_AL_Allergic_Day" ).value=data.records[i].last_observe_day;	
				document.getElementById("txt_AL_Allergic_Month" ).value=data.records[i].last_observe_month;
				document.getElementById("txt_AL_Allergic_Year" ).value=data.records[i].last_observe_year;
				document.getElementById("txt_AL_Allergic_ConsultationDay" ).value=data.records[i].consult_day;
				document.getElementById("txt_AL_Allergic_ConsultationMonth" ).value=data.records[i].consult_month;
				document.getElementById("txt_AL_Allergic_ConsultationYear" ).value=data.records[i].consult_year;
	
				 
			 }
			 
			  
			

		}
	}
	xmlhttp.open("GET",hostname+"/retrive_files/retrive_reocrds.inc.php?insert_type=Allergies_Ins&cid="+id,true);
	xmlhttp.send();
}






function Immunization_Ins(row)
{

	var td=$(row).parent();
	var immunization_id = $( "#txt_Immnunization_ID" ).val();
	var immunization_name = $( "#txt_immunization_Name" ).val();
	var administered_day = $( "#txt_immunization_Date" ).val();	
	var administered_month = $( "#txt_immunization_Month" ).val();	
	var administered_year = $( "#txt_immunization_Year" ).val();	
	var reminder_day = $( "#txt_immunization_Date1" ).val();	
	var reminder_month = $( "#txt_immunization_Month1" ).val();	
	var reminder_year = $( "#txt_immunization_Year1" ).val();	
	var immunization_hour = $( "#txt_immunization_hour" ).val();	
	var immunization_min = $( "#txt_immunization_Min" ).val();	


	var url_param="immunization_id="+immunization_id+"&immunization_name="+immunization_name+"&administered_day="+administered_day+"&administered_month="+administered_month+"&administered_year="+administered_year;
	url_param=url_param+"&reminder_day="+reminder_day+"&reminder_month="+reminder_month+"&reminder_year="+reminder_year+"&immunization_hour="+immunization_hour+"&immunization_min="+immunization_min+"&insert_type=Immunization_Ins";


	console.log(url_param);
	$.ajax( { 
				url: hostname+"/includes/add_records.inc.php?" + url_param,
				success: function(result) {
					//console.log( $(result) );
				}	
	} );

	document.getElementById("txt_Immnunization_ID" ).value="";
	document.getElementById("txt_immunization_Name" ).value="";
	document.getElementById("txt_immunization_Date" ).value="0";
	document.getElementById("txt_immunization_Month" ).value="0";
	document.getElementById("txt_immunization_Year" ).value="0";
	document.getElementById("txt_immunization_Date1" ).value="0";	
	document.getElementById("txt_immunization_Month1" ).value="0";	
	document.getElementById("txt_immunization_Year1" ).value="0";	
	document.getElementById("txt_immunization_hour" ).value="0";	
	document.getElementById("txt_immunization_Min" ).value="0";	


RetriveReocrds_Main('Immunization','dvImmunization');
	alert("Record saved successfully.");
	
}



function Immunization_Delete_By_Id(id,deleted_id)
{

	if (confirm("Are you sure you want to delete this record ?"))
	{
		var message="";
		var day="";
		if (window.XMLHttpRequest)
		{// for IE7+, Firefox, Chrome, Opera, Safaricodes
			xmlhttp = new XMLHttpRequest();
		}
		else
		{// code for IE6, IE5
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange=function()
		{
			if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
			{	
				 message = xmlhttp.responseText;
				 alert(message);
				 document.getElementById("tr_immunization_"+deleted_id).style.display='none';
			}
		}
		xmlhttp.open("GET",hostname+"/includes/delete_reocrds.inc.php?insert_type=Immunization&cid="+id,true);
		xmlhttp.send();
	}
	
}



function Immunization_Retrive_By_Id(id)
{
	var message="";
	var day="";
	if (window.XMLHttpRequest)
	{// for IE7+, Firefox, Chrome, Opera, Safaricodes
		xmlhttp = new XMLHttpRequest();
	}
	else
	{// code for IE6, IE5
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function()
	{
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
		{	
			 message = JSON.parse(xmlhttp.responseText);
			 data = {"records":message};
			 for (var i = 0; i < data.records.length; ++i) {
				 day=data.records[i].consult_day;


				document.getElementById("txt_Immnunization_ID" ).value=data.records[i].immunization_id;
				document.getElementById("txt_immunization_Name" ).value=data.records[i].immunization_name;
				document.getElementById("txt_immunization_Date" ).value=data.records[i].administered_day;
				document.getElementById("txt_immunization_Month" ).value=data.records[i].administered_month;
				document.getElementById("txt_immunization_Year" ).value=data.records[i].administered_year;
				document.getElementById("txt_immunization_Date1" ).value=data.records[i].reminder_day;
				document.getElementById("txt_immunization_Month1" ).value=data.records[i].reminder_month;	
				document.getElementById("txt_immunization_Year1" ).value=data.records[i].reminder_year;
				document.getElementById("txt_immunization_hour" ).value=data.records[i].immunization_hour;
				document.getElementById("txt_immunization_Min" ).value=data.records[i].immunization_min;;	
		 
			 }
			 
			  
			

		}
	}
	xmlhttp.open("GET",hostname+"/retrive_files/retrive_reocrds.inc.php?insert_type=Immunization_Ins&cid="+id,true);
	xmlhttp.send();
}




function Hospital_Ins(row)
{

	if(document.getElementById("cmb_Hospitalization_Date").value=="0" || document.getElementById("cmb_Hospitalization_Month").value=="0" || document.getElementById("cmb_Hospitalization_Year").value=="0")
	{
		alert ("Please select hospitalization date.");
		document.getElementById("cmb_Hospitalization_Date").focus();
		return false;
	}
	
	if(document.getElementById("txt_Hospitalization_Hospital_Name").value=="")
	{
		alert ("Please enter hospitalization name.");
		document.getElementById("txt_Hospitalization_Hospital_Name").focus();
		return false;
	}
	
	
	
	
	var td=$(row).parent();
	var hospital_id = $( "#txt_hospital_id" ).val();
	var hospital_day = $( "#cmb_Hospitalization_Date" ).val();
	var hospital_month = $( "#cmb_Hospitalization_Month" ).val();
	var hospital_year = $( "#cmb_Hospitalization_Year" ).val();
	var hospital_name=$( "#txt_Hospitalization_Hospital_Name" ).val();
	var doctor_id= $("#ddl_Doc_Consulted_hospital" ).val();	

	var admission_reason = $( "#txt_Hospitalization_Reason_of_Admission" ).val();	
	var diagnosis = $( "#txt_Hospitalization_Diagnosis" ).val();	
	var discharge_day = $( "#cmb_Hospitalization_Discharge_Date" ).val();	
	var discharge_month = $( "#cmb_Hospitalization_Discharge_Month" ).val();	
	var discharge_year = $( "#cmb_Hospitalization_Discharge_Year" ).val();	
	var diagnosis_summary = $( "#txt_Hospitalization_Diagnosis_Summary" ).val();	
	var doctor_instruction = $( "#txt_Hospitalization_Doctor_Instruction" ).val();	
	var next_day = $( "#cmb_Hospitalization_Next_Visit_Date" ).val();	
	var next_month = $( "#cmb_Hospitalization_Next_Visit_Month" ).val();		
	var next_year = $( "#cmb_Hospitalization_Next_Visit_Year" ).val();	
	var reminder_day = $( "#cmb_Hospitalization_Reminder_Date" ).val();	
	var reminder_month = $( "#cmb_Hospitalization_Reminder_Date_Month" ).val();	
	var reminder_year = $( "#cmb_Hospitalization_Reminder_Date_Year" ).val();	

	

	var url_param="hospital_day="+hospital_day+"&hospital_month="+hospital_month+"&hospital_year="+hospital_year+"&doctor_id="+doctor_id;
	url_param=url_param+"&admission_reason="+admission_reason+"&hospital_name="+hospital_name+"&diagnosis="+diagnosis+"&next_year="+next_year;
	url_param=url_param+"&discharge_day="+discharge_day+"&discharge_month="+discharge_month+"&discharge_year="+discharge_year;
	url_param=url_param+"&diagnosis_summary="+diagnosis_summary+"&doctor_instruction="+doctor_instruction+"&next_day="+next_day;
	url_param=url_param+"&reminder_day="+reminder_day+"&reminder_month="+reminder_month+"&reminder_year="+reminder_year;
	url_param=url_param+"&next_month="+next_month+"&hospital_id="+hospital_id+"&insert_type=Hospital_Ins";


	console.log(url_param);
	$.ajax( { 
				url: hostname+"/includes/add_records.inc.php?" + url_param,
				success: function(result) {
					//console.log( $(result) );
				}	
	} );

	document.getElementById("txt_hospital_id" ).value="";
	document.getElementById("cmb_Hospitalization_Date" ).value="0";
	document.getElementById("cmb_Hospitalization_Month" ).value="0";
	document.getElementById("cmb_Hospitalization_Year" ).value="0";
	document.getElementById("txt_Hospitalization_Hospital_Name" ).value="";
	document.getElementById("ddl_Doc_Consulted_hospital" ).value="0";	
	document.getElementById("txt_Hospitalization_Reason_of_Admission" ).value="";	
	document.getElementById("txt_Hospitalization_Diagnosis" ).value="";	
	document.getElementById("cmb_Hospitalization_Discharge_Date" ).value="0";	
	document.getElementById("cmb_Hospitalization_Discharge_Month" ).value="0";	
	document.getElementById("cmb_Hospitalization_Discharge_Year" ).value="0";	
	document.getElementById("txt_Hospitalization_Diagnosis_Summary" ).value="";	
	document.getElementById("txt_Dc_Resting_Heart_Rate" ).value="";	
	document.getElementById("txt_Hospitalization_Doctor_Instruction" ).value="";	
	document.getElementById("cmb_Hospitalization_Next_Visit_Date" ).value="0";	
	document.getElementById("cmb_Hospitalization_Next_Visit_Month" ).value="0";	
	document.getElementById("cmb_Hospitalization_Next_Visit_Year" ).value="0";	
	document.getElementById("cmb_Hospitalization_Next_Visit_Date" ).value="0";	
	document.getElementById("cmb_Hospitalization_Reminder_Date_Month" ).value="0";	
	document.getElementById("cmb_Hospitalization_Reminder_Date_Year" ).value="0";	

	RetriveReocrds_Main('Hospitalization','dvHospitalization');
	alert("Record saved successfully.");
	
}



function Hospital_Delete_By_Id(id,deleted_id)
{

	if (confirm("Are you sure you want to delete this record ?"))
	{
		var message="";
		var day="";
		if (window.XMLHttpRequest)
		{// for IE7+, Firefox, Chrome, Opera, Safaricodes
			xmlhttp = new XMLHttpRequest();
		}
		else
		{// code for IE6, IE5
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange=function()
		{
			if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
			{	
				 message = xmlhttp.responseText;
				 alert(message);
				 document.getElementById("tr_hospital_"+deleted_id).style.display='none';
			}
		}
		xmlhttp.open("GET",hostname+"/includes/delete_reocrds.inc.php?insert_type=Hospital_Ins&cid="+id,true);
		xmlhttp.send();
	}
	
}
function Hospital_Retrive_By_Id(id)
{
	var message="";
	var day="";
	if (window.XMLHttpRequest)
	{// for IE7+, Firefox, Chrome, Opera, Safaricodes
		xmlhttp = new XMLHttpRequest();
	}
	else
	{// code for IE6, IE5
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function()
	{
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
		{	
			 message = JSON.parse(xmlhttp.responseText);
			 data = {"records":message};
			 for (var i = 0; i < data.records.length; ++i) {
				 day=data.records[i].consult_day;


	
					 document.getElementById("txt_hospital_id" ).value=data.records[i].hospital_id;
					  document.getElementById("cmb_Hospitalization_Date" ).value=data.records[i].hospital_day;
					  document.getElementById("cmb_Hospitalization_Month" ).value=data.records[i].hospital_month;
					  document.getElementById("cmb_Hospitalization_Year" ).value=data.records[i].hospital_year;
					 document.getElementById("txt_Hospitalization_Hospital_Name" ).value=data.records[i].hospital_name;
					 document.getElementById("ddl_Doc_Consulted_hospital" ).value=data.records[i].doctor_id;	
					  document.getElementById("txt_Hospitalization_Reason_of_Admission" ).value=data.records[i].admission_reason;	
					  document.getElementById("txt_Hospitalization_Diagnosis" ).value=data.records[i].diagnosis;	
					  document.getElementById("cmb_Hospitalization_Discharge_Date" ).value=data.records[i].discharge_day;	
					 document.getElementById("cmb_Hospitalization_Discharge_Month" ).value=data.records[i].discharge_month ;	
					 document.getElementById("cmb_Hospitalization_Discharge_Year" ).value=data.records[i].discharge_year ;	
					 document.getElementById("txt_Hospitalization_Diagnosis_Summary" ).value=data.records[i].diagnosis_summary ;	
					 document.getElementById("txt_Hospitalization_Doctor_Instruction" ).value=data.records[i].doctor_instruction ;	
					 document.getElementById("cmb_Hospitalization_Next_Visit_Date" ).value=data.records[i].next_day ;	
					 document.getElementById("cmb_Hospitalization_Next_Visit_Month" ).value=data.records[i].next_month ;		
					 document.getElementById("cmb_Hospitalization_Next_Visit_Year" ).value=data.records[i].next_year ;	
					 document.getElementById("cmb_Hospitalization_Reminder_Date" ).value=data.records[i].reminder_day ;	
					 document.getElementById("cmb_Hospitalization_Reminder_Date_Month" ).value=data.records[i].reminder_month ;	
					 document.getElementById("cmb_Hospitalization_Reminder_Date_Year" ).value=data.records[i].reminder_year ;	

				  

			 }
			 
			  
			

		}
	}
	xmlhttp.open("GET",hostname+"/retrive_files/retrive_reocrds.inc.php?insert_type=Hospital_Ins&cid="+id,true);
	xmlhttp.send();
}




function Family_History_Ins(row)
{

	var td=$(row).parent();
	var family_history_id = $( "#txt_Family_History_ID" ).val();
	var relation_id = $( "#txt_FamilyHistory_Relation" ).val();
	var medical_condition = $( "#txt_FamilyHistory_MedicalCondition" ).val();
	var death_cause = $( "#txt_FamilyHistory_CauseDeath" ).val();
	

	var url_param="family_history_id="+family_history_id+"&relation_id="+relation_id+"&medical_condition="+medical_condition+"&death_cause="+death_cause+"&insert_type=Family_History_Ins";

	console.log(url_param);
	$.ajax( { 
				url: hostname+"/includes/add_records.inc.php?" + url_param,
				success: function(result) {
					//console.log( $(result) );
				}	
	} );


	document.getElementById("txt_Family_History_ID" ).value="";
	document.getElementById("txt_FamilyHistory_Relation" ).value="0";
	document.getElementById("txt_FamilyHistory_MedicalCondition" ).value="";
	document.getElementById("txt_FamilyHistory_CauseDeath" ).value="";
	

RetriveReocrds_Main('Family_History','dvFamily_History');
	alert("Record saved successfully.");
	
}



function Family_History_Delete_By_Id(id,deleted_id)
{

	if (confirm("Are you sure you want to delete this record ?"))
	{
		var message="";
		var day="";
		if (window.XMLHttpRequest)
		{// for IE7+, Firefox, Chrome, Opera, Safaricodes
			xmlhttp = new XMLHttpRequest();
		}
		else
		{// code for IE6, IE5
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange=function()
		{
			if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
			{	
				 message = xmlhttp.responseText;
				 alert(message);
				 document.getElementById("tr_family_history_"+deleted_id).style.display='none';
			}
		}
		xmlhttp.open("GET",hostname+"/includes/delete_reocrds.inc.php?insert_type=Family_History_Ins&cid="+id,true);
		xmlhttp.send();
	}
	
}


function Family_History_Retrive_By_Id(id)
{
	var message="";
	var day="";
	if (window.XMLHttpRequest)
	{// for IE7+, Firefox, Chrome, Opera, Safaricodes
		xmlhttp = new XMLHttpRequest();
	}
	else
	{// code for IE6, IE5
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function()
	{
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
		{	
			 message = JSON.parse(xmlhttp.responseText);
			 data = {"records":message};
			 for (var i = 0; i < data.records.length; ++i) {
				 day=data.records[i].consult_day;


				 document.getElementById("txt_Family_History_ID" ).value=data.records[i].family_history_id;
				 document.getElementById("txt_FamilyHistory_Relation" ).value=data.records[i].relation_id;
				 document.getElementById("txt_FamilyHistory_MedicalCondition" ).value=data.records[i].medical_condition;
				 document.getElementById("txt_FamilyHistory_CauseDeath" ).value=data.records[i].death_cause;

		 
			 }
			 
			  
			

		}
	}
	xmlhttp.open("GET",hostname+"/retrive_files/retrive_reocrds.inc.php?insert_type=Family_History_Ins&cid="+id,true);
	xmlhttp.send();
}






function Blood_Pressure_Ins(row)
{

	var td=$(row).parent();
	var blood_pressure_id = $( "#txt_Blood_Pressure_ID" ).val();
	var blood_pressure_systolic = $( "#txt_DelTrack_BP" ).val();
	var del_track_unit = $( "#txt_DelTrack_Unit" ).val();
	var del_track_day = $( "#cmb_DelTrack_Day" ).val();
	var del_track_month = $( "#cmb_DelTrack_Month" ).val();
	var del_track_year = $( "#cmb_DelTrack_Year" ).val();
	

	var url_param="blood_pressure_id="+blood_pressure_id+"&blood_pressure_systolic="+blood_pressure_systolic+"&del_track_unit="+del_track_unit+"&del_track_day="+del_track_day+"&del_track_month="+del_track_month+"&del_track_year="+del_track_year+"&insert_type=Blood_Pressure_Ins";

	console.log(url_param);
	$.ajax( { 
				url: hostname+"/includes/add_records.inc.php?" + url_param,
				success: function(result) {
					//console.log( $(result) );
				}	
	} );


	document.getElementById("txt_Blood_Pressure_ID" ).value="";
	document.getElementById("txt_DelTrack_BP" ).value="";
	document.getElementById("txt_DelTrack_Unit" ).value="";
	document.getElementById("cmb_DelTrack_Day" ).value="";
	document.getElementById("cmb_DelTrack_Month" ).value="";
	document.getElementById("cmb_DelTrack_Year" ).value="";
	

RetriveReocrds_Main('Blood_Pressure','dvBlood_Pressure');
	alert("Record saved successfully.");
	
}



function Blood_Pressure_Delete_By_Id(id,deleted_id)
{

	if (confirm("Are you sure you want to delete this record ?"))
	{
		var message="";
		var day="";
		if (window.XMLHttpRequest)
		{// for IE7+, Firefox, Chrome, Opera, Safaricodes
			xmlhttp = new XMLHttpRequest();
		}
		else
		{// code for IE6, IE5
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange=function()
		{
			if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
			{	
				 message = xmlhttp.responseText;
				 alert(message);
				 document.getElementById("tr_blood_pressure_"+deleted_id).style.display='none';
			}
		}
		xmlhttp.open("GET",hostname+"/includes/delete_reocrds.inc.php?insert_type=Blood_Pressure_Ins&cid="+id,true);
		xmlhttp.send();
	}
	
}


function Blood_Pressure_Retrive_By_Id(id)
{
	var message="";
	var day="";
	if (window.XMLHttpRequest)
	{// for IE7+, Firefox, Chrome, Opera, Safaricodes
		xmlhttp = new XMLHttpRequest();
	}
	else
	{// code for IE6, IE5
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function()
	{
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
		{	
			 message = JSON.parse(xmlhttp.responseText);
			 data = {"records":message};
			 for (var i = 0; i < data.records.length; ++i) {
				 day=data.records[i].consult_day;

				
				 document.getElementById("txt_Blood_Pressure_ID" ).value=data.records[i].blood_pressure_id;
				 document.getElementById("txt_DelTrack_BP" ).value=data.records[i].blood_pressure_systolic;
				 document.getElementById("txt_DelTrack_Unit" ).value=data.records[i].del_track_unit;
				 document.getElementById("cmb_DelTrack_Day" ).value=data.records[i].del_track_day;
				 document.getElementById("cmb_DelTrack_Month" ).value=data.records[i].del_track_month;
		 		 document.getElementById("cmb_DelTrack_Year" ).value=data.records[i].del_track_year;
			 }
			 
			  
			

		}
	}
	xmlhttp.open("GET",hostname+"/retrive_files/retrive_reocrds.inc.php?insert_type=Blood_Pressure_Ins&cid="+id,true);
	xmlhttp.send();
}



 




function Life_Style_Ins(row)
{

	var td=$(row).parent();
	var life_style_id = $( "#txt_Life_Style_ID" ).val();
	var spirit = $( "#txt_LSSpirit" ).val();
	var beer = $( "#txt_LSBeer" ).val();
	var cigarette = $( "#txt_LSCigarette" ).val();
	var life_style_sleep = $( "#txt_LSSleep" ).val();
	var physical_stress = $( "#txt_LSPhysicalStress" ).val();
	var physical_stress_details = $( "#txt_LSPhysicalStresstxt" ).val();
	var mental_stress = $( "#txt_LSMentalStress" ).val();
	var mental_stress_details = $( "#txt_LSMentalStresstxt" ).val();
	var life_style_day = $( "#Date_LS_Day" ).val();
	var life_style_month = $( "#Date_LS_Month" ).val();
	var life_style_year = $( "#Date_LS_Year" ).val();
	

	var url_param="life_style_id="+life_style_id+"&spirit="+spirit+"&beer="+beer+"&cigarette="+cigarette+"&life_style_sleep="+life_style_sleep+"&physical_stress="+physical_stress+"&physical_stress_details="+physical_stress_details+"&mental_stress="+mental_stress+"&mental_stress_details="+mental_stress_details+"&life_style_day="+life_style_day+"&life_style_month="+life_style_month+"&life_style_year="+life_style_year+"&insert_type=Life_Style_Ins";

	console.log(url_param);
	$.ajax( { 
				url: hostname+"/includes/add_records.inc.php?" + url_param,
				success: function(result) {
					//console.log( $(result) );
				}	
	} );


	document.getElementById("txt_Life_Style_ID" ).value="";
	document.getElementById("txt_LSSpirit" ).value="";
	document.getElementById("txt_LSBeer" ).value="";
	document.getElementById("txt_LSCigarette" ).value="";
	document.getElementById("txt_LSSleep" ).value="";
	document.getElementById("txt_LSPhysicalStress" ).value="";
	document.getElementById("txt_LSPhysicalStresstxt" ).value="";
	document.getElementById("txt_LSMentalStress" ).value="";
	document.getElementById("txt_LSMentalStresstxt" ).value="";
	document.getElementById("Date_LS_Day" ).value="";
	document.getElementById("Date_LS_Month" ).value="";
	document.getElementById("Date_LS_Year" ).value="";
	

RetriveReocrds_Main('Life_Style','dvLife_Style');
	alert("Record saved successfully.");
	
}



function Life_Style_Delete_By_Id(id,deleted_id)
{

	if (confirm("Are you sure you want to delete this record ?"))
	{
		var message="";
		var day="";
		if (window.XMLHttpRequest)
		{// for IE7+, Firefox, Chrome, Opera, Safaricodes
			xmlhttp = new XMLHttpRequest();
		}
		else
		{// code for IE6, IE5
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange=function()
		{
			if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
			{	
				 message = xmlhttp.responseText;
				 alert(message);
				 document.getElementById("tr_life_style_"+deleted_id).style.display='none';
			}
		}
		xmlhttp.open("GET",hostname+"/includes/delete_reocrds.inc.php?insert_type=Life_Style_Ins&cid="+id,true);
		xmlhttp.send();
	}
	
}


function Life_Style_Retrive_By_Id(id)
{
	var message="";
	var day="";
	if (window.XMLHttpRequest)
	{// for IE7+, Firefox, Chrome, Opera, Safaricodes
		xmlhttp = new XMLHttpRequest();
	}
	else
	{// code for IE6, IE5
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function()
	{
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
		{	
			 message = JSON.parse(xmlhttp.responseText);
			 data = {"records":message};
			 for (var i = 0; i < data.records.length; ++i) {
				 day=data.records[i].consult_day;

				
				document.getElementById("txt_Life_Style_ID" ).value=data.records[i].life_style_id;
				document.getElementById("txt_LSSpirit" ).value=data.records[i].spirit;
				document.getElementById("txt_LSBeer" ).value=data.records[i].beer;
				document.getElementById("txt_LSCigarette" ).value=data.records[i].cigarette;
				document.getElementById("txt_LSSleep" ).value=data.records[i].life_style_sleep;
				document.getElementById("txt_LSPhysicalStress" ).value=data.records[i].physical_stress;
				document.getElementById("txt_LSPhysicalStresstxt" ).value=data.records[i].physical_stress_details;
				document.getElementById("txt_LSMentalStress" ).value=data.records[i].mental_stress;
				document.getElementById("txt_LSMentalStresstxt" ).value=data.records[i].mental_stress_details;
				document.getElementById("Date_LS_Day" ).value=data.records[i].life_style_day;
				document.getElementById("Date_LS_Month" ).value=data.records[i].life_style_month;
				document.getElementById("Date_LS_Year" ).value=data.records[i].life_style_year;
	
			 }
			 
			  
			

		}
	}
	xmlhttp.open("GET",hostname+"/retrive_files/retrive_reocrds.inc.php?insert_type=Life_Style_Ins&cid="+id,true);
	xmlhttp.send();
}

$(document).ready(function() {
	var url_param="insert_type=Health_Problem_Ins";
	// process the form
	$('#frmHelathProblem').submit(function(event) {
		 event.preventDefault();
		 var formData = new FormData($("#frmHelathProblem"));
		 $.ajax({
			type: 'POST',
			url :hostname+"/includes/add_records.inc.php?" + url_param,
			 data    : $(this).serialize(),
			 dataType 	: 'json',
			
		  })
		.done(function(data) {
			console.log(data); 
			document.getElementById("txt_Health_Problem_ID" ).value="";
			document.getElementById("cardiacProblemsYes" ).checked=false;
			document.getElementById("cardiacProblemsNo" ).checked=true;
			document.getElementById("EyerelatedProblemsYes" ).checked=false;
			document.getElementById("EyerelatedProblemsNo" ).checked=true;
			document.getElementById("FaceProblemsYes" ).checked=false;
			document.getElementById("FaceProblemsNo" ).checked=true;
			document.getElementById("BloodcirculationYes" ).checked=false;
			document.getElementById("BloodcirculationNo" ).checked=true;
			document.getElementById("FaceskinProblemsYes" ).checked=false;
			document.getElementById("FaceskinProblemsNo" ).checked=true;
			document.getElementById("DigestiveProblemsYes" ).checked=false;
			document.getElementById("DigestiveProblemsNo" ).checked=true;
			document.getElementById("JointpainsProblemsYes" ).checked=false;
			document.getElementById("JointpainsProblemsNo" ).checked=true;
			document.getElementById("ConstipationProblemsYes" ).checked=false;
			document.getElementById("ConstipationProblemsNo" ).checked=true;
			document.getElementById("OtherProblemsYes" ).checked=false;
			document.getElementById("OtherProblemsNo" ).checked=true;
			show20();show22();show6();show8();show10();show12();show14();show16();show18();
			for (i=1;i<54 ;i++ )
			{
				document.getElementById("txt_HP_Problem_"+i ).value="";
				document.getElementById("ddl_HP_Problem_Day"+i ).value="0";
				document.getElementById("ddl_HP_Problem_Month"+i ).value="0";
				document.getElementById("ddl_HP_Problem_Year"+i ).value="0";
				document.getElementById("ddl_HP_Problem_Consulted"+i ).value="0";
			}

			RetriveReocrds_Main("Health_Problems","dvHealth_Problems")
			alert("Record Saved Successfully.");
			
		})
		.fail(function(data) {
			// show any errors
			// best to remove for production
			//console.log(data);
			alert("fail");
		});
	});

});




function Sugar_Profile_Ins(row)
{

	var td=$(row).parent();
	var sugar_profile_id = $( "#txt_Sugar_Profile_ID" ).val();
	var fasting_blood_sugar_day = $( "#DT_FBS_Date" ).val();
	var fasting_blood_sugar_month = $( "#DT_FBS_Month" ).val();
	var fasting_blood_sugar_year = $( "#DT_FBS_Year" ).val();
	var post_parandial_day = $( "#DT_PPBS_Date" ).val();
	var post_parandial_month= $( "#DT_PPBS_Month" ).val();
	var post_parandial_year = $( "#DT_PPBS_Year" ).val();	
	var urine_blood_day = $( "#DT_UBS_Date" ).val();	
	var urine_blood_month = $( "#DT_UBS_Month" ).val();	
	var urine_blood_year = $( "#DT_UBS_Year" ).val();	
	var random_blood_sugar_day = $( "#DT_RBS_Date" ).val();	
	var random_blood_sugar_month = $( "#DT_RBS_Month" ).val();	
	var random_blood_sugar_year = $( "#DT_RBS_Year" ).val();	
	var fasting_blood_sugar_result = $( "#txt_Result_FBS" ).val();	
	var post_parandial_result = $( "#txt_Result_PPBS" ).val();	
	var urine_blood_result = $( "#txt_Result_UBS" ).val();	
	var random_blood_sugar_result = $( "#txt_Result_RBS" ).val();	
	var fasting_blood_sugar_range = $( "#txt_Range_FBS" ).val();	
	var fasting_blood_sugar_range1 = $( "#txt_Range_FBS1" ).val();	
	var post_parandial_range = $( "#txt_Range_PPBS" ).val();	
	var post_parandial_range1 = $( "#txt_Range_PPBS1" ).val();	
	var urine_blood_range = $( "#txt_Range_UBS" ).val();	
	var urine_blood_range1 = $( "#txt_Range_UBS1" ).val();		
	var random_blood_sugar_range = $( "#txt_Range_RBS" ).val();	
	var random_blood_sugar_range1 = $( "#txt_Range_RBS1" ).val();
	var fasting_blood_sugar_unit = $( "#txt_Unit_FBS" ).val();	
	var post_parandial_unit = $( "#txt_Unit_PPBS" ).val();	
	var urine_blood_unit = $( "#txt_Unit_UBS" ).val();	
	var random_blood_sugar_unit = $( "#txt_Unit_RBS" ).val();	


	var url_param="sugar_profile_id="+sugar_profile_id+"&fasting_blood_sugar_day="+fasting_blood_sugar_day+"&fasting_blood_sugar_month="+fasting_blood_sugar_month+"&fasting_blood_sugar_year="+fasting_blood_sugar_year+"&post_parandial_day="+post_parandial_day;
	url_param=url_param+"&post_parandial_month="+post_parandial_month+"&post_parandial_year="+post_parandial_year+"&urine_blood_day="+urine_blood_day+"&urine_blood_month="+urine_blood_month+"&urine_blood_year="+urine_blood_year+"&random_blood_sugar_day="+random_blood_sugar_day+"&random_blood_sugar_month="+random_blood_sugar_month+"&random_blood_sugar_year="+random_blood_sugar_year+"&fasting_blood_sugar_result="+fasting_blood_sugar_result+"&post_parandial_result="+post_parandial_result+"&urine_blood_result="+urine_blood_result+"&random_blood_sugar_result="+random_blood_sugar_result+"&fasting_blood_sugar_range="+fasting_blood_sugar_range+"&fasting_blood_sugar_range1="+fasting_blood_sugar_range1+"&post_parandial_range="+post_parandial_range+"&post_parandial_range1="+post_parandial_range1+"&urine_blood_range="+urine_blood_range+"&urine_blood_range1="+urine_blood_range1+"&random_blood_sugar_range="+random_blood_sugar_range+"&random_blood_sugar_range1="+random_blood_sugar_range1+"&fasting_blood_sugar_unit="+fasting_blood_sugar_unit+"&post_parandial_unit="+post_parandial_unit+"&urine_blood_unit="+urine_blood_unit+"&random_blood_sugar_unit="+random_blood_sugar_unit+"&insert_type=Sugar_Profile_Ins";


	console.log(url_param);
	$.ajax( { 
				url: hostname+"/includes/add_records.inc.php?" + url_param,
				success: function(result) {
					//console.log( $(result) );
				}	
	} );

	
	document.getElementById("txt_Sugar_Profile_ID" ).value="";
	document.getElementById("DT_FBS_Date" ).value="0";
	document.getElementById("DT_FBS_Month" ).value="0";
	document.getElementById("DT_FBS_Year" ).value="0";
	document.getElementById("DT_PPBS_Date" ).value="0";
	document.getElementById("DT_PPBS_Month" ).value="0";
	document.getElementById("DT_PPBS_Year" ).value="0";	
	document.getElementById("DT_UBS_Date" ).value="0";	
	document.getElementById("DT_UBS_Month" ).value="0";	
	document.getElementById("DT_UBS_Year" ).value="0";	
	document.getElementById("DT_RBS_Date" ).value="0";	
	document.getElementById("DT_RBS_Month" ).value="0";	
	document.getElementById("DT_RBS_Year" ).value="0";	
	document.getElementById("txt_Result_FBS" ).value="";	
	document.getElementById("txt_Result_PPBS" ).value="";	
	document.getElementById("txt_Result_UBS" ).value="";	
	document.getElementById("txt_Result_RBS" ).value="";	
	document.getElementById("txt_Range_FBS" ).value="";	
	document.getElementById("txt_Range_FBS1" ).value="";	
	document.getElementById("txt_Range_PPBS" ).value="";	
	document.getElementById("txt_Range_PPBS1" ).value="";	
	document.getElementById("txt_Range_UBS" ).value="";	
	document.getElementById("txt_Range_UBS1" ).value="";		
	document.getElementById("txt_Range_RBS" ).value="";	
	document.getElementById("txt_Range_RBS1" ).value="";
	document.getElementById("txt_Unit_FBS" ).value="";	
	document.getElementById("txt_Unit_PPBS" ).value="";	
	document.getElementById("txt_Unit_UBS" ).value="";	
	document.getElementById("txt_Unit_RBS" ).value="";	

RetriveReocrds_Main('Sugar_Profile','dvSugar_Profile');
	alert("Record saved successfully.");
	
}



function Sugar_Profile_Delete_By_Id(id,deleted_id)
{

	if (confirm("Are you sure you want to delete this record ?"))
	{
		var message="";
		var day="";
		if (window.XMLHttpRequest)
		{// for IE7+, Firefox, Chrome, Opera, Safaricodes
			xmlhttp = new XMLHttpRequest();
		}
		else
		{// code for IE6, IE5
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange=function()
		{
			if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
			{	
				 message = xmlhttp.responseText;
				 alert(message);
				 document.getElementById("tr_sugar_profile_"+deleted_id).style.display='none';
			}
		}
		xmlhttp.open("GET",hostname+"/includes/delete_reocrds.inc.php?insert_type=Sugar_Profile_Ins&cid="+id,true);
		xmlhttp.send();
	}
	
}



function Sugar_Profile_Retrive_By_Id(id)
{
	var message="";
	var day="";
	if (window.XMLHttpRequest)
	{// for IE7+, Firefox, Chrome, Opera, Safaricodes
		xmlhttp = new XMLHttpRequest();
	}
	else
	{// code for IE6, IE5
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function()
	{
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
		{	
			 message = JSON.parse(xmlhttp.responseText);
			 data = {"records":message};
			 for (var i = 0; i < data.records.length; ++i) {
				 day=data.records[i].consult_day;


				document.getElementById("txt_Sugar_Profile_ID" ).value=data.records[i].sugar_profile_id;
				document.getElementById("DT_FBS_Date" ).value=data.records[i].fasting_blood_sugar_day;
				document.getElementById("DT_FBS_Month" ).value=data.records[i].fasting_blood_sugar_month;
				document.getElementById("DT_FBS_Year" ).value=data.records[i].fasting_blood_sugar_year;
				document.getElementById("DT_PPBS_Date" ).value=data.records[i].post_parandial_day;
				document.getElementById("DT_PPBS_Month" ).value=data.records[i].post_parandial_month;
				document.getElementById("DT_PPBS_Year" ).value=data.records[i].post_parandial_year;	
				document.getElementById("DT_UBS_Date" ).value=data.records[i].urine_blood_day;	
				document.getElementById("DT_UBS_Month" ).value=data.records[i].urine_blood_month;	
				document.getElementById("DT_UBS_Year" ).value=data.records[i].urine_blood_year;	
				document.getElementById("DT_RBS_Date" ).value=data.records[i].random_blood_sugar_day;	
				document.getElementById("DT_RBS_Month" ).value=data.records[i].random_blood_sugar_month;	
				document.getElementById("DT_RBS_Year" ).value=data.records[i].random_blood_sugar_year;	
				document.getElementById("txt_Result_FBS" ).value=data.records[i].fasting_blood_sugar_result;	
				document.getElementById("txt_Result_PPBS" ).value=data.records[i].post_parandial_result;	
				document.getElementById("txt_Result_UBS" ).value=data.records[i].urine_blood_result;	
				document.getElementById("txt_Result_RBS" ).value=data.records[i].random_blood_sugar_result;	
				document.getElementById("txt_Range_FBS" ).value=data.records[i].fasting_blood_sugar_range;		
				document.getElementById("txt_Range_FBS1" ).value=data.records[i].fasting_blood_sugar_range1;		
				document.getElementById("txt_Range_PPBS" ).value=data.records[i].post_parandial_range;		
				document.getElementById("txt_Range_PPBS1" ).value=data.records[i].post_parandial_range1;		
				document.getElementById("txt_Range_UBS" ).value=data.records[i].urine_blood_range;		
				document.getElementById("txt_Range_UBS1" ).value=data.records[i].urine_blood_range1;			
				document.getElementById("txt_Range_RBS" ).value=data.records[i].random_blood_sugar_range;		
				document.getElementById("txt_Range_RBS1" ).value=data.records[i].random_blood_sugar_range1;	
				document.getElementById("txt_Unit_FBS" ).value=data.records[i].fasting_blood_sugar_unit;		
				document.getElementById("txt_Unit_PPBS" ).value=data.records[i].post_parandial_unit;		
				document.getElementById("txt_Unit_UBS" ).value=data.records[i].urine_blood_unit;		
				document.getElementById("txt_Unit_RBS" ).value=data.records[i].random_blood_sugar_unit;		
	
				 
			 }
			 
			  
			

		}
	}
	xmlhttp.open("GET",hostname+"/retrive_files/retrive_reocrds.inc.php?insert_type=Sugar_Profile_Ins&cid="+id,true);
	xmlhttp.send();
}





function Lipid_Profile_Ins(row)
{

	var td=$(row).parent();
	var lipid_profile_id = $( "#txt_Lipid_Profile_ID" ).val();
	var triglyceride_blood_sugar_day = $( "#Lipid_Triglyceride_Date" ).val();
	var triglyceride_blood_sugar_month = $( "#Lipid_Triglyceride_Month" ).val();
	var triglyceride_blood_sugar_year = $( "#Lipid_Triglyceride_Year" ).val();
	var ldl_day = $( "#lipid_LDL_Date" ).val();
	var ldl_month= $( "#lipid_LDL_Month" ).val();
	var ldl_year = $( "#lipid_LDL_Year" ).val();	
	var hdl_day = $( "#lipid_HDL_Date" ).val();	
	var hdl_month = $( "#lipid_HDL_Month" ).val();	
	var hdl_year = $( "#lipid_HDL_Year" ).val();	
	var cholesterol_day = $( "#lipid_Cholesterol_Date" ).val();	
	var cholesterol_month = $( "#lipid_Cholesterol_Month" ).val();	
	var cholesterol_year = $( "#lipid_Cholesterol_Year" ).val();	
	var triglyceride_blood_sugar_result = $( "#txt_Result_Triglyceride" ).val();	
	var ldl_result = $( "#txt_Result_LDL" ).val();	
	var hdl_result = $( "#txt_Result_HDL" ).val();	
	var cholesterol_result = $( "#txt_Result_Cholesterol" ).val();	
	var triglyceride_blood_sugar_range = $( "#txt_Range_Triglyceride" ).val();	
	var triglyceride_blood_sugar_range1 = $( "#txt_Range_Triglyceride1" ).val();	
	var ldl_range = $( "#txt_Range_LDL" ).val();	
	var ldl_range1 = $( "#txt_Range_LDL1" ).val();	
	var hdl_range = $( "#txt_Range_HDL" ).val();	
	var hdl_range1 = $( "#txt_Range_HDL1" ).val();		
	var cholesterol_range = $( "#txt_Range_Cholesterol" ).val();	
	var cholesterol_range1 = $( "#txt_Range_Cholesterol1" ).val();
	var triglyceride_blood_sugar_unit = $( "#txt_Unit_Triglyceride" ).val();	
	var ldl_unit = $( "#txt_Unit_LDL" ).val();	
	var hdl_unit = $( "#txt_Unit_HDL" ).val();	
	var cholesterol_unit = $( "#txt_Unit_Cholesterol" ).val();	


	var url_param="lipid_profile_id="+lipid_profile_id+"&triglyceride_blood_sugar_day="+triglyceride_blood_sugar_day+"&triglyceride_blood_sugar_month="+triglyceride_blood_sugar_month+"&triglyceride_blood_sugar_year="+triglyceride_blood_sugar_year+"&ldl_day="+ldl_day;
	url_param=url_param+"&ldl_month="+ldl_month+"&ldl_year="+ldl_year+"&hdl_day="+hdl_day+"&hdl_month="+hdl_month+"&hdl_year="+hdl_year+"&cholesterol_day="+cholesterol_day+"&cholesterol_month="+cholesterol_month+"&cholesterol_year="+cholesterol_year+"&triglyceride_blood_sugar_result="+triglyceride_blood_sugar_result+"&ldl_result="+ldl_result+"&hdl_result="+hdl_result+"&cholesterol_result="+cholesterol_result+"&triglyceride_blood_sugar_range="+triglyceride_blood_sugar_range+"&triglyceride_blood_sugar_range1="+triglyceride_blood_sugar_range1+"&ldl_range="+ldl_range+"&ldl_range1="+ldl_range1+"&hdl_range="+hdl_range+"&hdl_range1="+hdl_range1+"&cholesterol_range="+cholesterol_range+"&cholesterol_range1="+cholesterol_range1+"&triglyceride_blood_sugar_unit="+triglyceride_blood_sugar_unit+"&ldl_unit="+ldl_unit+"&hdl_unit="+hdl_unit+"&cholesterol_unit="+cholesterol_unit+"&insert_type=Lipid_Profile_Ins";


	console.log(url_param);
	$.ajax( { 
				url: hostname+"/includes/add_records.inc.php?" + url_param,
				success: function(result) {
					//console.log( $(result) );
				}	
	} );

	
	document.getElementById("txt_Lipid_Profile_ID" ).value="";
	document.getElementById("Lipid_Triglyceride_Date" ).value="0";
	document.getElementById("Lipid_Triglyceride_Month" ).value="0";
	document.getElementById("Lipid_Triglyceride_Year" ).value="0";
	document.getElementById("lipid_LDL_Date" ).value="0";
	document.getElementById("lipid_LDL_Month" ).value="0";
	document.getElementById("lipid_LDL_Year" ).value="0";	
	document.getElementById("lipid_HDL_Date" ).value="0";	
	document.getElementById("lipid_HDL_Month" ).value="0";	
	document.getElementById("lipid_HDL_Year" ).value="0";	
	document.getElementById("lipid_Cholesterol_Date" ).value="0";	
	document.getElementById("lipid_Cholesterol_Month" ).value="0";	
	document.getElementById("lipid_Cholesterol_Year" ).value="0";	
	document.getElementById("txt_Result_Triglyceride" ).value="";	
	document.getElementById("txt_Result_LDL" ).value="";	
	document.getElementById("txt_Result_HDL" ).value="";	
	document.getElementById("txt_Result_Cholesterol" ).value="";	
	document.getElementById("txt_Range_Triglyceride" ).value="";	
	document.getElementById("txt_Range_Triglyceride1" ).value="";	
	document.getElementById("txt_Range_LDL" ).value="";	
	document.getElementById("txt_Range_LDL1" ).value="";	
	document.getElementById("txt_Range_HDL" ).value="";	
	document.getElementById("txt_Range_HDL1" ).value="";		
	document.getElementById("txt_Range_Cholesterol" ).value="";	
	document.getElementById("txt_Range_Cholesterol1" ).value="";
	document.getElementById("txt_Unit_Triglyceride" ).value="";	
	document.getElementById("txt_Unit_LDL" ).value="";	
	document.getElementById("txt_Unit_HDL" ).value="";	
	document.getElementById("txt_Unit_Cholesterol" ).value="";	

RetriveReocrds_Main('Lipid_Profile','dvLipid_Profile');
	alert("Record saved successfully.");
	
}



function Lipid_Profile_Delete_By_Id(id,deleted_id)
{

	if (confirm("Are you sure you want to delete this record ?"))
	{
		var message="";
		var day="";
		if (window.XMLHttpRequest)
		{// for IE7+, Firefox, Chrome, Opera, Safaricodes
			xmlhttp = new XMLHttpRequest();
		}
		else
		{// code for IE6, IE5
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange=function()
		{
			if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
			{	
				 message = xmlhttp.responseText;
				 alert(message);
				 document.getElementById("tr_lipid_profile_"+deleted_id).style.display='none';
			}
		}
		xmlhttp.open("GET",hostname+"/includes/delete_reocrds.inc.php?insert_type=Lipid_Profile_Ins&cid="+id,true);
		xmlhttp.send();
	}
	
}



function Lipid_Profile_Retrive_By_Id(id)
{
	var message="";
	var day="";
	if (window.XMLHttpRequest)
	{// for IE7+, Firefox, Chrome, Opera, Safaricodes
		xmlhttp = new XMLHttpRequest();
	}
	else
	{// code for IE6, IE5
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function()
	{
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
		{	
			 message = JSON.parse(xmlhttp.responseText);
			 data = {"records":message};
			 for (var i = 0; i < data.records.length; ++i) {
				 day=data.records[i].consult_day;


				document.getElementById("txt_Lipid_Profile_ID" ).value=data.records[i].lipid_profile_id;
				document.getElementById("Lipid_Triglyceride_Date" ).value=data.records[i].triglyceride_blood_sugar_day;
				document.getElementById("Lipid_Triglyceride_Month" ).value=data.records[i].triglyceride_blood_sugar_month;
				document.getElementById("Lipid_Triglyceride_Year" ).value=data.records[i].triglyceride_blood_sugar_year;
				document.getElementById("lipid_LDL_Date" ).value=data.records[i].ldl_day;
				document.getElementById("lipid_LDL_Month" ).value=data.records[i].ldl_month;
				document.getElementById("lipid_LDL_Year" ).value=data.records[i].ldl_year;	
				document.getElementById("lipid_HDL_Date" ).value=data.records[i].hdl_day;	
				document.getElementById("lipid_HDL_Month" ).value=data.records[i].hdl_month;	
				document.getElementById("lipid_HDL_Year" ).value=data.records[i].hdl_year;	
				document.getElementById("lipid_Cholesterol_Date" ).value=data.records[i].cholesterol_day;	
				document.getElementById("lipid_Cholesterol_Month" ).value=data.records[i].cholesterol_month;	
				document.getElementById("lipid_Cholesterol_Year" ).value=data.records[i].cholesterol_year;	
				document.getElementById("txt_Result_Triglyceride" ).value=data.records[i].triglyceride_blood_sugar_result;	
				document.getElementById("txt_Result_LDL" ).value=data.records[i].ldl_result;	
				document.getElementById("txt_Result_HDL" ).value=data.records[i].hdl_result;	
				document.getElementById("txt_Result_Cholesterol" ).value=data.records[i].cholesterol_result;	
				document.getElementById("txt_Range_Triglyceride" ).value=data.records[i].triglyceride_blood_sugar_range;		
				document.getElementById("txt_Range_Triglyceride1" ).value=data.records[i].triglyceride_blood_sugar_range1;		
				document.getElementById("txt_Range_LDL" ).value=data.records[i].ldl_range;		
				document.getElementById("txt_Range_LDL1" ).value=data.records[i].ldl_range1;		
				document.getElementById("txt_Range_HDL" ).value=data.records[i].hdl_range;		
				document.getElementById("txt_Range_HDL1" ).value=data.records[i].hdl_range1;			
				document.getElementById("txt_Range_Cholesterol" ).value=data.records[i].cholesterol_range;		
				document.getElementById("txt_Range_Cholesterol1" ).value=data.records[i].cholesterol_range1;	
				document.getElementById("txt_Unit_Triglyceride" ).value=data.records[i].triglyceride_blood_sugar_unit;		
				document.getElementById("txt_Unit_LDL" ).value=data.records[i].ldl_unit;		
				document.getElementById("txt_Unit_HDL" ).value=data.records[i].hdl_unit;		
				document.getElementById("txt_Unit_Cholesterol" ).value=data.records[i].cholesterol_unit;		
	
				 
			 }
			 
			  
			

		}
	}
	xmlhttp.open("GET",hostname+"/retrive_files/retrive_reocrds.inc.php?insert_type=Lipid_Profile_Ins&cid="+id,true);
	xmlhttp.send();
}

function Health_Problem_Delete_By_Id(id,deleted_id)
{

	if (confirm("Are you sure you want to delete this record ?"))
	{
		var message="";
		var day="";
		if (window.XMLHttpRequest)
		{// for IE7+, Firefox, Chrome, Opera, Safaricodes
			xmlhttp = new XMLHttpRequest();
		}
		else
		{// code for IE6, IE5
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange=function()
		{
			if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
			{	
				 message = xmlhttp.responseText;
				 alert(message);
				 document.getElementById("tr_Health_Problem_"+deleted_id).style.display='none';
			}
		}
		xmlhttp.open("GET",hostname+"/includes/delete_reocrds.inc.php?insert_type=Health_Problem_Ins&cid="+id,true);
		xmlhttp.send();
	}
	
}
function Health_Problem_Retrive_By_Id(id)
{
	var message="";
	var day="";
	if (window.XMLHttpRequest)
	{// for IE7+, Firefox, Chrome, Opera, Safaricodes
		xmlhttp = new XMLHttpRequest();
	}
	else
	{// code for IE6, IE5
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function()
	{
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
		{	

			
			 message = JSON.parse(xmlhttp.responseText);
			 data = {"records":message};
			 for (var i = 0; i < data.records.length; ++i) {
				 
				 	
				   document.getElementById("txt_Health_Problem_ID" ).value=data.records[i].health_problem_id;	
				    if (data.records[i].cardiac_problem=="Yes")
				   {
						document.getElementById("cardiacProblemsYes" ).checked=true
						show19();
				   }
				    if (data.records[i].eye_problem=="Yes")
				   {
						document.getElementById("EyerelatedProblemsYes" ).checked=true
						show21();
				   }
				    if (data.records[i].kidney_problem=="Yes")
				   {
						document.getElementById("FaceProblemsYes" ).checked=true
						show5();
				   }
				    if (data.records[i].circulation_problem=="Yes")
				   {
						document.getElementById("BloodcirculationYes" ).checked=true
						show7();
				   }
				    if (data.records[i].skin_problem=="Yes")
				   {
						document.getElementById("FaceskinProblemsYes" ).checked=true
						show9();
				   }
				    if (data.records[i].digestive_problem=="Yes")
				   {
						document.getElementById("DigestiveProblemsYes" ).checked=true
						show11();
				   }
				    if (data.records[i].joint_problem=="Yes")
				   {
						document.getElementById("JointpainsProblemsYes" ).checked=true
						show13();
				   }
				    if (data.records[i].constipation_problem=="Yes")
				   {
						document.getElementById("ConstipationProblemsYes" ).checked=true
						show15();
				   }
				    if (data.records[i].other_problem=="Yes")
				   {
						document.getElementById("OtherProblemsYes" ).checked=true
						show17();
				   }

				   
				 Health_Problem_Details_Retrive_By_Id(id);

			 }
			 
			  
			

		}
	}
	xmlhttp.open("GET",hostname+"/retrive_files/retrive_reocrds.inc.php?insert_type=Health_Problem_Ins&cid="+id,true);
	xmlhttp.send();
}

function Health_Problem_Details_Retrive_By_Id(id)
{
	var message="";
	var day="";
	if (window.XMLHttpRequest)
	{// for IE7+, Firefox, Chrome, Opera, Safaricodes
		xmlhttp = new XMLHttpRequest();
	}
	else
	{// code for IE6, IE5
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function()
	{
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
		{	
			 message = JSON.parse(xmlhttp.responseText);
			 data = {"records":message};
			 var a=1;b=6;c=12;d=18;e=24;f=30;g=36;h=42;j=48;
			 for (var i = 0; i < data.records.length; ++i) {
				   if (data.records[i].problem_type=="Cardiac"){SetData_Helth_Problem(a,data,i); a=a+1; }
				   if (data.records[i].problem_type=="Eye"){SetData_Helth_Problem(b,data,i); b=b+1; }
				   if (data.records[i].problem_type=="Kidney"){SetData_Helth_Problem(c,data,i); c=c+1; }
				   if (data.records[i].problem_type=="Circulation"){SetData_Helth_Problem(d,data,i); d=d+1; }
				   if (data.records[i].problem_type=="Skin"){SetData_Helth_Problem(e,data,i); e=e+1; }
				   if (data.records[i].problem_type=="Digestive"){SetData_Helth_Problem(f,data,i); f=f+1; }
				   if (data.records[i].problem_type=="JointPaints"){SetData_Helth_Problem(g,data,i); g=g+1; }
				   if (data.records[i].problem_type=="Constipation"){SetData_Helth_Problem(h,data,i); h=h+1; }
				   if (data.records[i].problem_type=="Other"){SetData_Helth_Problem(j,data,i);  j=j+1;}
			  }
			 
			  
			

		}
	}
	xmlhttp.open("GET",hostname+"/retrive_files/retrive_reocrds.inc.php?insert_type=Health_Problem_Ins_Det&cid="+id,true);
	xmlhttp.send();
}


function SetData_Helth_Problem(iNumber,data,i)
{
	document.getElementById("txt_HP_Problem_"+iNumber).value=data.records[i].problem;
   document.getElementById("ddl_HP_Problem_Day"+iNumber).value=data.records[i].diag_day;
   document.getElementById("ddl_HP_Problem_Month"+iNumber).value=data.records[i].diag_month;
   document.getElementById("ddl_HP_Problem_Year"+iNumber).value=data.records[i].diag_year;
   document.getElementById("ddl_HP_Problem_Consulted"+iNumber).value=data.records[i].doctor_id;
}