function AddCountInTabs(tabno,submit,d_record)
{
	var record_count="0";var objName="";
	if(tablno="1"){objName="txtDocConsultCount"};
	if(tablno="2"){objName="txtMedicationCount"};
	if(tablno="3"){objName="txtAllergiesCount"};
	if(tablno="4"){objName="txtHospitalizationCount"};
	if(tablno="5"){objName="txtImmunizationCount"};
	if(tablno="6"){objName="txtHealthProblemCount"};
	if(tablno="7"){objName="txtFamilyHistoryCount"};
	if(tablno="8"){objName="txtBloodPressureCount"};
	if(tablno="9"){objName="txtSugurProfileCount"};
	if(tablno="10"){objName="txtLifeStyleCount"};
	if(tablno="11"){objName="txtLipidProfileCount"};
	
	record_count=document.getElementById(objName).value;
	record_count=parseFloat(record_count);
	if (d_record=="true")
	{
		record_count=record_count-1;
	}
	else
	{
		record_count=record_count+1;
	}
	document.getElementById(objName).value=record_count;
	OpenTab(tabno,submit);
}



function OpenTab(tabno,submit)
{
	var record_count = new Array
	var disable="Disable";
	var enabled="Enable";
	var dvNextTabOn;
	var ahref="";
	var icount=0;
	record_count[1]=document.getElementById("txtDocConsultCount").value;
	record_count[2]=document.getElementById("txtMedicationCount").value;
	record_count[3]=document.getElementById("txtAllergiesCount").value;
	record_count[4]=document.getElementById("txtHospitalizationCount").value;
	record_count[5]=document.getElementById("txtImmunizationCount").value;
	record_count[6]=document.getElementById("txtHealthProblemCount").value;
	record_count[7]=document.getElementById("txtFamilyHistoryCount").value;
	record_count[8]=document.getElementById("txtBloodPressureCount").value;
	record_count[9]=document.getElementById("txtSugurProfileCount").value;
	record_count[10]=document.getElementById("txtLifeStyleCount").value;
	record_count[11]=document.getElementById("txtLipidProfileCount").value;
	
	ahref="";
	 
	if (record_count[1] <= 0 && submit=="true")
	{
		alert("Please first enter record in doctor consultaion record");
		return false;
	}
	
	if (tabno=="1")
	{
		document.getElementById("dvDisableMedicaton").style.display='';		
		document.getElementById("dvEnableMedicaton").style.display='none';		
		$('#dvDisableMedicaton a').attr('rel', '')	
		
		if (record_count[1] > 0)
		{
			document.getElementById("dvDisableMedicaton").style.display='none';		
			document.getElementById("dvEnableMedicaton").style.display='';	
			$('#dvDisableMedicaton a').attr('rel', 'tabs2')	
		}

	}
	else if (tabno=="2")
	{
		document.getElementById("dvDisableAllergies").style.display='';		
		document.getElementById("dvEnableAllergies").style.display='none';		
		$('#dvDisableAllergies a').attr('rel', '')

		if (record_count[2] > 0)
		{
			document.getElementById("dvDisableAllergies").style.display='none';		
			document.getElementById("dvEnableAllergies").style.display='';		
			$('#dvDisableAllergies a').attr('rel', 'tabs3')
			
		}
	}

	else if (tabno=="3")
	{
		document.getElementById("dvDisableHospitalization").style.display='';		
		document.getElementById("dvEnableHospitalization").style.display='none';
		$('#dvDisableHospitalization a').attr('rel', '')
		if (record_count[3] > 0)
		{
			document.getElementById("dvDisableHospitalization").style.display='none';		
			document.getElementById("dvEnableHospitalization").style.display='';		
			$('#dvDisableHospitalization a').attr('rel', 'tabs4')
		}

	}

	else if (tabno=="4")
	{
		document.getElementById("dvDisableImmunization").style.display='';		
		document.getElementById("dvEnableImmunization").style.display='none';		
		$('#dvDisableImmunization a').attr('rel', '')

		if (record_count[4] > 0)
		{
			document.getElementById("dvDisableImmunization").style.display='none';		
			document.getElementById("dvEnableImmunization").style.display='';		
			$('#dvDisableImmunization a').attr('rel', 'tabs5')
		}
	}

	else if (tabno=="5")
	{
		document.getElementById("dvDisableHealthProblems").style.display='';		
		document.getElementById("dvDisableHealthProblems").style.display='none';		
		$('#dvDisableHealthProblems a').attr('rel', '')
		if (record_count[5] > 0)
		{
			document.getElementById("dvDisableHealthProblems").style.display='none';		
			document.getElementById("dvDisableHealthProblems").style.display='';	
			$('#dvDisableHealthProblems a').attr('rel', 'tabs6')
		}
	}

	else if (tabno=="6")
	{
		document.getElementById("dvDisableFamilyHistory").style.display='';		
		document.getElementById("dvEnableFamilyHistory").style.display='none';		
		$('#dvDisableFamilyHistory a').attr('rel', '')

		if (record_count[6] > 0)
		{
			document.getElementById("dvDisableFamilyHistory").style.display='none';		
			document.getElementById("dvEnableFamilyHistory").style.display='';		
			$('#dvDisableFamilyHistory a').attr('rel', 'tabs7')
		}
	}

	else if (tabno=="7")
	{
		document.getElementById("dvDisableDailyTracking").style.display='';		
		document.getElementById("dvEnableDailyTracking").style.display='none';		

		document.getElementById("dvDisableBloodPressure").style.display='';		
		document.getElementById("dvEnableBloodPressure").style.display='none';		

		$('#dvDisableBloodPressure a').attr('rel', '')
		if (record_count[7] > 0)
		{
			document.getElementById("dvDisableDailyTracking").style.display='none';		
			document.getElementById("dvEnableDailyTracking").style.display='';	
			
			document.getElementById("dvDisableBloodPressure").style.display='none';		
			document.getElementById("dvEnableBloodPressure").style.display='';	

			$('#dvDisableBloodPressure a').attr('rel', 'tabs8')
		}
	}

	else if (tabno=="8")
	{
		document.getElementById("dvDisableSugarProfile").style.display='';		
		document.getElementById("dvEnableSugarProfile").style.display='none';	
		$('#dvDisableSugarProfile a').attr('rel', '')
		if (record_count[8] > 0)
		{
			document.getElementById("dvDisableSugarProfile").style.display='none';		
			document.getElementById("dvEnableSugarProfile").style.display='';	
			$('#dvDisableSugarProfile a').attr('rel', 'tabs9')
		}
	}

	else if (tabno=="9")
	{
		document.getElementById("dvDisableLipidProfile").style.display='';		
		document.getElementById("dvEnableLipidProfile").style.display='none';
		$('#dvDisableLipidProfile a').attr('rel', '')

		if (record_count[9] > 0)
		{
			document.getElementById("dvDisableLipidProfile").style.display='none';		
			document.getElementById("dvEnableLipidProfile").style.display='';	
			$('#dvDisableLipidProfile a').attr('rel', 'tabs10')
		}
	}

	else if (tabno=="10")
	{
		document.getElementById("dvDisableLifeStyle").style.display='';		
		document.getElementById("dvEnableLifeStyle").style.display='none';			
		$('#dvDisableLifeStyle a').attr('rel', '')

		if (record_count[10] > 0)
		{
			document.getElementById("dvDisableLifeStyle").style.display='none';		
			document.getElementById("dvEnableLifeStyle").style.display='';	
			$('#dvDisableLifeStyle a').attr('rel', 'tabs11')
		}
	}

	
	if (submit=="true")
	{
		dvNextTabOn=document.getElementById("dvNextTabOn_"+tabno);
		dvNextTabOn.click();	
	}

	
}