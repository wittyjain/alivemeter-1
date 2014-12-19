function AddCountInTabs(tabno,submit,d_record)
{
	var record_count="0";var objName="";
	if(tabno=="1"){objName="txtDocConsultCount"};
	if(tabno=="2"){objName="txtMedicationCount"};
	if(tabno=="3"){objName="txtAllergiesCount"};
	if(tabno=="4"){objName="txtHospitalizationCount"};
	if(tabno=="5"){objName="txtImmunizationCount"};
	if(tabno=="6"){objName="txtHealthProblemCount"};
	if(tabno=="7"){objName="txtFamilyHistoryCount"};
	if(tabno=="8"){objName="txtBloodPressureCount"};
	if(tabno=="9"){objName="txtSugurProfileCount"};
	if(tabno=="10" || tabno=="15"){objName="txtLifeStyleCount"};
	if(tabno=="11"){objName="txtLipidProfileCount"};
	 
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

function OpenDefaultTab(countries)
{
	countries.expandit(0)
}

function OpenDefaultTab1(countries1)
{
	countries1.expandit(0)
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
	record_count[11]=document.getElementById("txtLipidProfileCount").value;
	record_count[10]=document.getElementById("txtLifeStyleCount").value;	

	ahref="";		
	
	document.getElementById("dvDisableMedicaton").style.display='';		
	document.getElementById("dvEnableMedicaton").style.display='none';		
	$('#dvDisableMedicaton a').attr('rel', '')	

	document.getElementById("dvDisableAllergies").style.display='';		
	document.getElementById("dvEnableAllergies").style.display='none';		
	$('#dvDisableAllergies a').attr('rel', '')
	
	document.getElementById("dvDisableHospitalization").style.display='';		
	document.getElementById("dvEnableHospitalization").style.display='none';
	$('#dvDisableHospitalization a').attr('rel', '')	

	document.getElementById("dvDisableImmunization").style.display='';		
	document.getElementById("dvEnableImmunization").style.display='none';		
	$('#dvDisableImmunization a').attr('rel', '')	

	document.getElementById("dvDisableHealthProblems").style.display='';		
	document.getElementById("dvEnableHealthProblems").style.display='none';		
	$('#dvDisableHealthProblems a').attr('rel', '')

	document.getElementById("dvDisableFamilyHistory").style.display='';		
	document.getElementById("dvEnableFamilyHistory").style.display='none';		
	$('#dvDisableFamilyHistory a').attr('rel', '')

	document.getElementById("dvDisableDailyTracking").style.display='';		
	document.getElementById("dvEnableDailyTracking").style.display='none';		

	document.getElementById("dvDisableBloodPressure").style.display='';		
	document.getElementById("dvEnableBloodPressure").style.display='none';	
	$('#dvDisableBloodPressure a').attr('rel', '')

	document.getElementById("dvDisableSugarProfile").style.display='';		
	document.getElementById("dvEnableSugarProfile").style.display='none';	
	$('#dvDisableSugarProfile a').attr('rel', '')
	 
	document.getElementById("dvDisableLipidProfile").style.display='';		
	document.getElementById("dvEnableLipidProfile").style.display='none';
	$('#dvDisableLipidProfile a').attr('rel', '')	

	document.getElementById("dvDisableLifeStyle").style.display='';		
	document.getElementById("dvEnableLifeStyle").style.display='none';			
	$('#dvDisableLifeStyle a').attr('rel', '')


	if (record_count[1] <= 0 && submit=="true")
	{
		//alert("Please first enter record in doctor consultaion record");
		return false;
	}

	if (record_count[1] > 0)
	{
		document.getElementById("dvDisableMedicaton").style.display='none';		
		document.getElementById("dvEnableMedicaton").style.display='';	
		$('#dvDisableMedicaton a').attr('rel', 'tabs2')
		document.getElementById("aDNextTab_1").style.display='none';		
		document.getElementById("aENextTab_1").style.display='';	
		 
	}
	else
	{
		document.getElementById("aDNextTab_1").style.display='';		
		document.getElementById("aENextTab_1").style.display='none';	
		GotoNextTab(tabno,submit,1);
		return false;
	}


	if (record_count[2] > 0)
	{
		document.getElementById("dvDisableAllergies").style.display='none';		
		document.getElementById("dvEnableAllergies").style.display='';		
		$('#dvDisableAllergies a').attr('rel', 'tabs3')
		document.getElementById("aDNextTab_2").style.display='none';		
		document.getElementById("aENextTab_2").style.display='';
			 
	}
	else
	{
		document.getElementById("aDNextTab_2").style.display='';		
		document.getElementById("aENextTab_2").style.display='none';
		GotoNextTab(tabno,submit,2);
		return false;
	}

	
	if (record_count[3] > 0)
	{
		document.getElementById("dvDisableHospitalization").style.display='none';		
		document.getElementById("dvEnableHospitalization").style.display='';		
		$('#dvDisableHospitalization a').attr('rel', 'tabs4')
		document.getElementById("aDNextTab_3").style.display='none';		
		document.getElementById("aENextTab_3").style.display='';
	}
	else
	{
		document.getElementById("aDNextTab_3").style.display='';		
		document.getElementById("aENextTab_3").style.display='none';
		GotoNextTab(tabno,submit,3);
		return false;
	}

	
	if (record_count[4] > 0)
	{
		document.getElementById("dvDisableImmunization").style.display='none';		
		document.getElementById("dvEnableImmunization").style.display='';		
		$('#dvDisableImmunization a').attr('rel', 'tabs5')
		document.getElementById("aDNextTab_4").style.display='none';		
		document.getElementById("aENextTab_4").style.display='';
	}
	else
	{
		document.getElementById("aDNextTab_4").style.display='';		
		document.getElementById("aENextTab_4").style.display='none';
		GotoNextTab(tabno,submit,4);
		return false;
	}

	
	if (record_count[5] > 0)
	{
		
		document.getElementById("dvDisableHealthProblems").style.display='none';		
		document.getElementById("dvEnableHealthProblems").style.display='';	
		$('#dvDisableHealthProblems a').attr('rel', 'tabs6')
		document.getElementById("aDNextTab_5").style.display='none';		
		document.getElementById("aENextTab_5").style.display='';
	}
	else
	{
		document.getElementById("aDNextTab_5").style.display='';		
		document.getElementById("aENextTab_5").style.display='none';
		GotoNextTab(tabno,submit,5);
		return false;
	}

	
	if (record_count[6] > 0)
	{
		document.getElementById("dvDisableFamilyHistory").style.display='none';		
		document.getElementById("dvEnableFamilyHistory").style.display='';		
		$('#dvDisableFamilyHistory a').attr('rel', 'tabs7')
		document.getElementById("aDNextTab_6").style.display='none';		
		document.getElementById("aENextTab_6").style.display='';
	}
	else
	{
		document.getElementById("aDNextTab_6").style.display='';		
		document.getElementById("aENextTab_6").style.display='none';
		GotoNextTab(tabno,submit,6);
		return false;
	}


	 
	if (record_count[7] > 0)
	{
		document.getElementById("dvDisableDailyTracking").style.display='none';		
		document.getElementById("dvEnableDailyTracking").style.display='';	
		
		document.getElementById("dvDisableBloodPressure").style.display='none';		
		document.getElementById("dvEnableBloodPressure").style.display='';	

		$('#dvDisableDailyTracking a').attr('rel', 'tabs8')
		$('#dvDisableBloodPressure a').attr('rel', 'tabs1a')
		document.getElementById("aDNextTab_7").style.display='none';		
		document.getElementById("aENextTab_7").style.display='';
	}
	else
	{
		document.getElementById("aDNextTab_7").style.display='';		
		document.getElementById("aENextTab_7").style.display='none';
		GotoNextTab(tabno,submit,7);
		return false;
	}

	

	if (record_count[8] > 0)
	{
		document.getElementById("dvDisableSugarProfile").style.display='none';		
		document.getElementById("dvEnableSugarProfile").style.display='';	
		$('#dvDisableSugarProfile a').attr('rel', 'tabs2a')
		document.getElementById("aDNextTab_8").style.display='none';		
		document.getElementById("aENextTab_8").style.display='';
	}
	else
	{
		document.getElementById("aDNextTab_8").style.display='';		
		document.getElementById("aENextTab_8").style.display='none';
		GotoNextTab(tabno,submit,8);
		return false;
	}

	
	if (record_count[9] > 0)
	{
		document.getElementById("dvDisableLipidProfile").style.display='none';		
		document.getElementById("dvEnableLipidProfile").style.display='';	
		$('#dvDisableLipidProfile a').attr('rel', 'tabs4a')
		document.getElementById("aDNextTab_9").style.display='none';		
		document.getElementById("aENextTab_9").style.display='';
	}
	else
	{
		document.getElementById("aDNextTab_9").style.display='';		
		document.getElementById("aENextTab_9").style.display='none';
		GotoNextTab(tabno,submit,9);
		return false;
	}

	//alert ("c");'
	 
	if (record_count[11] > 0)
	{
		 
		document.getElementById("dvDisableLifeStyle").style.display='none';		
		document.getElementById("dvEnableLifeStyle").style.display='';	
		$('#dvDisableLifeStyle a').attr('rel', 'tabs3a')
		document.getElementById("aDNextTab_10").style.display='none';		
		document.getElementById("aENextTab_10").style.display='';
	}
	else
	{
		//alert ("ad");
		document.getElementById("aDNextTab_10").style.display='';		
		document.getElementById("aENextTab_10").style.display='none';
		GotoNextTab(10,submit,10);
		return false;
	}
//alert ("b");

	if (tabno==15 || (tabno==10 && record_count[10] > 0))
	{
		if (submit=="false")
		{	
			document.getElementById("aENextTab_11").style.display='';
		}
		else
		{
			document.getElementById("aENextTab_11").style.display='none';
			window.location.href=hostname+"/page.php?dir=health/dashboard";
		}
		return false;
	}
	else
	{
		tabno=parseFloat(tabno);
		GotoNextTab(tabno,submit,11);
	}
}

function GotoNextTab(tabno,submit,tabno_1)
{
	 //alert (tabno_1);
	
	if (tabno==tabno_1 && tabno!=1)
	{
		tabno=tabno-1;
	}
	//alert(tabno);
	if (submit=="true")
	{
		///alert (tabno);
		dvNextTabOn=document.getElementById("dvNextTabOn_"+tabno);
		dvNextTabOn.click();	
	}

}

