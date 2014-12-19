

function Hospital_Ins(row)
{

	var td=$(row).parent();
	var hospital_id = $( "#txt_hospital_id" ).val();
	var hospital_day = $( "#cmb_Hospitalization_Date" ).val();
	var hospital_month = $( "#cmb_Hospitalization_Month" ).val();
	var hospital_year = $( "#cmb_Hospitalization_Year" ).val();
	var hospital_name=$( "#txt_Hospitalization_Hospital_Name" ).val();
	var doctor_id= $( "#ddl_Doc_Consulted" ).val();	
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
	url_param=url_param+"&reminder_day="+reminder_day+"&reminder_month="+reminder_year+"&next_day="+reminder_year;
	url_param=url_param+"&next_month="+next_month+"&hospital_id="+hospital_id+"&insert_type=Hospital_Ins";


	console.log(url_param);
	$.ajax( { 
				url: hostname+"/includes/add_records.inc.php?" + url_param,
				success: function(result) {
					//console.log( $(result) );
				}	
	} );


	document.getElementById("cmb_Hospitalization_Date" ).value="0";
	document.getElementById("cmb_Hospitalization_Month" ).value="0";
	document.getElementById("cmb_Hospitalization_Year" ).value="0";
	document.getElementById("txt_Hospitalization_Hospital_Name" ).value="";
	document.getElementById("ddl_Doc_Consulted" ).value="0";	
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


				 	document.getElementById("ddl_Doc_Day" ).value=data.records[i].hospital_day;
					  document.getElementById("cmb_Hospitalization_Date" ).value=hospital_day;
					  document.getElementById("cmb_Hospitalization_Month" ).value=hospital_month;
					  document.getElementById("cmb_Hospitalization_Year" ).value=hospital_year;
					 document.getElementById("txt_Hospitalization_Hospital_Name" ).value=hospital_name;
					 document.getElementById("ddl_Doc_Consulted" ).value=doctor_id;	
					  document.getElementById("txt_Hospitalization_Reason_of_Admission" ).value=admission_reason;	
					  document.getElementById("txt_Hospitalization_Diagnosis" ).value=diagnosis;	
					  document.getElementById("cmb_Hospitalization_Discharge_Date" ).value=discharge_day;	
					 document.getElementById("cmb_Hospitalization_Discharge_Month" ).value=discharge_month ;	
					 document.getElementById("cmb_Hospitalization_Discharge_Year" ).value=discharge_year ;	
					 document.getElementById("txt_Hospitalization_Diagnosis_Summary" ).value=diagnosis_summary ;	
					 document.getElementById("txt_Hospitalization_Doctor_Instruction" ).value=doctor_instruction ;	
					 document.getElementById("cmb_Hospitalization_Next_Visit_Date" ).value=next_day ;	
					 document.getElementById("cmb_Hospitalization_Next_Visit_Month" ).value=next_month ;		
					 document.getElementById("cmb_Hospitalization_Next_Visit_Year" ).value=next_year ;	
					 document.getElementById("cmb_Hospitalization_Reminder_Date" ).value=reminder_day ;	
					 document.getElementById("cmb_Hospitalization_Reminder_Date_Month" ).value=reminder_month ;	
					 document.getElementById("cmb_Hospitalization_Reminder_Date_Year" ).value=reminder_year ;	

				  

			 }
			 
			  
			

		}
	}
	xmlhttp.open("GET",hostname+"/retrive_files/retrive_reocrds.inc.php?insert_type=Hospital_Ins&cid="+id,true);
	xmlhttp.send();
}


