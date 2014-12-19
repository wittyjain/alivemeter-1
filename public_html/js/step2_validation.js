function reistration_step2_validation(submit)
{
	var iValidation="0";
	if(document.getElementById("Chk_Earn_MemberY").checked==true){
		if(document.getElementById("cmb_Profession").value.trim() == "0") {
			document.getElementById("DvProfession").style.display="none";
			document.getElementById("DvErrorProfession").style.display="";
			document.getElementById("cmb_Profession").focus();
			iValidation=1;
			if (submit==0)
			{
				return false;
			}
		}
		else if(document.getElementById("cmb_Profession").value.trim() != "0") {
			document.getElementById("DvProfession").style.display="";
			document.getElementById("DvErrorProfession").style.display="none";
		}
	
	 
	
		if(document.getElementById("txt_Company_name").value.trim() == "") {
			document.getElementById("DvCompany").style.display="none";
			document.getElementById("DvErrorCompany").style.display="";
			document.getElementById("txt_Company_name").focus();
			iValidation=1;
			if (submit==0)
			{
				return false;
			}
		}
		else if(document.getElementById("txt_Company_name").value.trim() != "") {
			document.getElementById("DvCompany").style.display="";
			document.getElementById("DvErrorCompany").style.display="none";
		}

	}
	
	if (iValidation==1 || submit==3)
	{
		return false;
	}


}