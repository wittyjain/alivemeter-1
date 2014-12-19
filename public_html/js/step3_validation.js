function checkREmailValidation(txtobj)
{
   ///alert (obj);
   var obj = document.getElementById(txtobj).value;
    if(obj == "")
    {
        return false;
    }
    else
    {
        var tempEmail= document.getElementById(txtobj).value;
		var exclude=/[^@\-\.\w]|^[_@\.\-]|[\._\-]{2}|[@\.]{2}|(@)[^@]*\1/;
		var check=/@[\w\-]+\./;
		var checkend=/\.[a-zA-Z]{2,3}$/;
		if (document.getElementById(txtobj).value != "")
		{
			if (tempEmail.search(exclude) != -1 || tempEmail.search(check) == -1 || tempEmail.search(checkend) == -1 )
			{
				return false;
			}
			else
			{
                return true;
			}
		}
    }
}




function CheckNewEmailValid(submit)
{

	///checkREmailValidation("txt_Email");
	if (checkREmailValidation("txt_Email")==false)
	{
		
	////	alert("99");
		document.getElementById("DvErrorEmail").style.display="";
		document.getElementById("DvEmail").style.display="none";
	}
	reistration_step1_validation(submit);

}

function RemoveImage()
{
	document.getElementById("imgPhoto").src="profile_pic/noimage.jpg";
	document.getElementById("txtFileName").value="noimage.jpg";
	document.getElementById("aRemoveImage").style.display='none';
	document.getElementById("flPhoto").value="";
}
function createImage() {
	img = document.createElement('img');
	img.onload = imageLoaded;
	img.style.display = 'none'; // If you don't want it showing
	img.src = fr.result;
	document.body.appendChild(img);
}

function imageLoaded() {
	document.getElementById("imgwidth").value=img.width;
	document.getElementById("imgheight").value=img.height;
	document.getElementById("imgPhoto").src=img.src;
	img.parentNode.removeChild(img);
	img = undefined;
}

function GetFileInfo () {
	var fileInput = document.getElementById ("flPhoto");
	document.getElementById("aRemoveImage").style.display='';
	
	if(document.getElementById("flPhoto").value != "") {
			var _validFileExtensions = [".jpg", ".png", ".jpeg", ".gif"];
			if(CheckUploadFileExtension(document.getElementById("flPhoto").value, _validFileExtensions) == false) {
				document.getElementById("aRemoveImage").style.display='none';
				alert("Sorry, file extension you are uploading is invalid.\n\nAllowed extensions are : " + _validFileExtensions.join(", "));
				document.getElementById("flPhoto").focus();
				return false;
			}
		}
		
		
		
	
	var message = "";
	if ('files' in fileInput) {
		if (fileInput.files.length == 0) {
			message = "Please browse for one or more files.";
		} else {
			for (var i = 0; i < fileInput.files.length; i++) {
				var file = fileInput.files[i];
				if ('size' in file) {
					filesize= file.size;
					filesize=filesize / 1024;
					document.getElementById ("imgfilesize").value=filesize;
					file = fileInput.files[i];
					fr = new FileReader();
					fr.onload = createImage;
					fr.readAsDataURL(file);
				}
			 }
		}

		

		if (imgwidth1 > 1500 || imgheight1 > 1500)
		{
			//document.getElementById("pic"+intImageCount).value="";
			//alert("Image dimension should not be greater than 1000 X 1000 pixels");
			//return false;
		}
	} 
	else {
		if (fileInput.value == "") {
			message += "Please browse for one or more files.";
			message += "<br />Use the Control or Shift key for multiple selection.";
		}
		else {
			message += "Your browser doesn't support the files property!";
			message += "<br />The path of the selected file: " + fileInput.value;
		}
		alert(message);
		return false;
	}
}


function IsNumeric(strString, extrastring) {
    if(!extrastring) {
		var strValidChars = "0123456789";
	} else {
		var strValidChars = "0123456789"+extrastring;	
	}
	
    var strChar;
    var blnResult = true;

    if (strString.length == 0) return false;

    for (i = 0; i < strString.length && blnResult == true; i++) {
        strChar = strString.charAt(i);
        if (strValidChars.indexOf(strChar) == -1) {
            blnResult = false;
        }
    }
    return blnResult;
}

function CheckDuplicationMemberUsernameRegistered() {
		
		var emailobj = document.getElementById("txtMemberProfileID").value;
		//document.getElementById("DvErrorDupEmail").style.display="none";
		document.getElementById("DvCorMemUsername").style.display="none";
			document.getElementById("DvErrorDupEmail").style.display="none";
		
		if(emailobj != "") {
			
		}

		if(emailobj != "") {
			//alert("1");
			
			document.getElementById("DvErrorDupEmail3").style.display="none";
			
			//return false;
		}
		
		var message = "";
		 //alert(emailobj);
		if(emailobj != "") {
			if (window.XMLHttpRequest)
			{// code for IE7+, Firefox, Chrome, Opera, Safari
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
					message = message.split('###');
					//alert ( xmlhttp.responseText);
					if(message[1] == "true") {
					//	alert('Duplication Error Message\n\nSelected date already exists in the following records.');
					 	document.getElementById("DvErrorDupEmail").style.display="";
						document.getElementById("DvCorMemUsername").style.display="none";
						document.getElementById("txtMemberProfileID").focus();
						
						return false;
					}
					else	
					{
						 document.getElementById("DvErrorDupEmail").style.display="none";
							document.getElementById("DvCorMemUsername").style.display="";
					}
				}
			}
			//alert( hostname+"/includes/check_duplication.inc.php?tbl=Users&value="+emailobj);
			xmlhttp.open("GET", hostname+"/includes/check_duplication.inc.php?tbl=Users&value="+emailobj, true);
			xmlhttp.send();
		}
	}
	
	
function GetProfileIdValue(id)
{
	//alert(id);
	if(id!="")
	{
		
			document.getElementById("txtMemberProfileID").value=id;
			//document.getElementById("txtProfileID").focus();
			//return false;

	}
}


function reistration_step1_validation(submit)
{
	var iValidation="0";


	

	if(document.getElementById("cmb_accountholder").value.trim()=="0" && submit==1) {
		document.getElementById("DvRelation").style.display="none";
		document.getElementById("DvErrorRelation").style.display="";
		document.getElementById("cmb_accountholder").focus();
		iValidation=1;
		if (submit==0)
		{
			return false;
		}
	}
	
	if(document.getElementById("cmb_accountholder").value.trim() != "0") {
		document.getElementById("DvRelation").style.display="";
		document.getElementById("DvErrorRelation").style.display="none";
	}
	else
	{
		document.getElementById("DvRelation").style.display="none";
		////document.getElementById("DvErrorRelation").style.display="";
	}


	
	
	if(document.getElementById("txt_Fullname").value.trim() == "" && submit==1 || document.getElementById("txt_Lastname").value.trim() == "" && submit==1) {
		document.getElementById("DvName").style.display="none";
		document.getElementById("DvErrorName").style.display="";
		
		document.getElementById("txt_Fullname").focus();
		
		if(document.getElementById("txt_Fullname").value.trim() != "" && document.getElementById("txt_Lastname").value.trim() == "")
		{
			document.getElementById("txt_Lastname").focus();
		}
		
		iValidation=1;
		if (submit==0)
		{
			return false;
		}
	}
	
	
	
	
	
	if(document.getElementById("txt_Fullname").value.trim() != "" && document.getElementById("txt_Lastname").value.trim()!="") {
		document.getElementById("DvName").style.display="";
		document.getElementById("DvErrorName").style.display="none";
	}
	else
	{
		document.getElementById("DvName").style.display="none";
		//document.getElementById("DvErrorName").style.display="";
	}
	
	
	
	if(document.getElementById("txtMemberProfileID").value.trim() == "" && submit==1 ) {
		document.getElementById("DvCorMemUsername").style.display="none";
		document.getElementById("DvErrorDupEmail3").style.display="";
		iValidation=1;
		if (submit==0)
		{
			return false;
		}
	}

	
	

	if(document.getElementById("cmb_Date").value.trim() == "0"  && submit==1  || document.getElementById("cmb_Month").value.trim() == "0"   && submit==1 || document.getElementById("cmb_Year").value.trim() == "0" && submit==1) {
		document.getElementById("DvDate").style.display="none";
		document.getElementById("DvErrorDate").style.display="";
		iValidation=1;
		if (submit==0)
		{
			return false;
		}
	}
	
	
	if(document.getElementById("cmb_Date").value.trim() != "0"  && document.getElementById("cmb_Month").value.trim() != "0" && document.getElementById("cmb_Year").value.trim() != "0" ) {
		document.getElementById("DvDate").style.display="";
		document.getElementById("DvErrorDate").style.display="none";
	}
	else
	{
		document.getElementById("DvDate").style.display="none";
		////document.getElementById("DvErrorRelation").style.display="";
	}







	if(document.getElementById("cmb_Marital_Status").value.trim() == "0" && submit==1) {
		document.getElementById("DvMarital").style.display="none";
		document.getElementById("DvErrorMarital").style.display="";
		//document.getElementById("cmb_Marital_Status").focus();
		iValidation=1;
		if (submit==0)
		{
			return false;
		}
	}
	
	if(document.getElementById("cmb_Marital_Status").value.trim() != "0") {
		document.getElementById("DvMarital").style.display="";
		document.getElementById("DvErrorMarital").style.display="none";
	}
	
	else
	{
		document.getElementById("DvMarital").style.display="none";
	}
	
	
if(document.getElementById("txt_Height").value.trim() == ""  && submit==1 || document.getElementById("cmb_Height").value.trim() == "0" && submit==1 || IsNumeric(document.getElementById("txt_Height").value,".") == false && submit==1) {
		document.getElementById("DvHeight").style.display="none";
		document.getElementById("DvErrorHeight").style.display="";
	//	document.getElementById("txt_Height").focus();
		iValidation=1;
		if (submit==0)
		{
			return false;
		}
	}
	
	
	if(document.getElementById("txt_Height").value.trim() != "" && document.getElementById("cmb_Height").value.trim()!= "0") {
		document.getElementById("DvHeight").style.display="";
		document.getElementById("DvErrorHeight").style.display="none";
	}
	else
	{
		document.getElementById("DvHeight").style.display="none";
	}

	
	
	if(document.getElementById("txt_Weight").value.trim() == "" && submit== 1 || IsNumeric(document.getElementById("txt_Weight").value) == false && submit==1 ) {
		document.getElementById("DvWeight").style.display="none";
		document.getElementById("DvErrorWeight").style.display="";
		//document.getElementById("txt_Weight").focus();
		iValidation=1;
		if (submit==0)
		{
			return false;
		}
	}
	
	if(document.getElementById("txt_Weight").value.trim()!="") {
		document.getElementById("DvWeight").style.display="";
		document.getElementById("DvErrorWeight").style.display="none";
	}
	else
	{
		document.getElementById("DvWeight").style.display="none";
	}
	
	
	

	if(document.getElementById("txt_Mobile_no").value.trim() == ""  && submit== 1) {
		document.getElementById("DvMobile").style.display="none";
		document.getElementById("DvErrorMobile").style.display="";
		//document.getElementById("txt_Mobile_no").focus();
		iValidation=1;
		if (submit==0)
		{
			return false;
		}
	}
	
	if(document.getElementById("txt_Mobile_no").value.trim() != "") {
		document.getElementById("DvMobile").style.display="";
		document.getElementById("DvErrorMobile").style.display="none";
	}
	else
	{
		document.getElementById("DvMobile").style.display="none";
	}

	////alert (checkREmailValidation("txt_Email"));

	if(document.getElementById("txt_Email").value.trim() == ""  && submit== 1 && checkREmailValidation("txt_Email") == false && submit== 1) {
		document.getElementById("DvEmail").style.display="none";
		document.getElementById("DvErrorEmail").style.display="";
		//document.getElementById("txt_Email").focus();
		iValidation=1;
		if (submit==0)
		{
			return false;
		}
	}
	
	
	if(document.getElementById("txt_Email").value.trim() != "" ) {
		document.getElementById("DvEmail").style.display="";
		document.getElementById("DvErrorEmail").style.display="none";
	}
	else
	{
		document.getElementById("DvEmail").style.display="none";
	}


	if(document.getElementById("txtPassword").value.trim() == ""  && submit== 1) {
		document.getElementById("DvPassword").style.display="none";
		document.getElementById("DvErrorPassword").style.display="";
		//document.getElementById("txt_Mobile_no").focus();
		iValidation=1;
		if (submit==0)
		{
			return false;
		}
	}
	
	
	if(document.getElementById("txtPassword").value.trim() != "") {
		document.getElementById("DvPassword").style.display="";
		document.getElementById("DvErrorPassword").style.display="none";
	}
	else
	{
		document.getElementById("DvPassword").style.display="none";
	}


	
	if(document.getElementById("Chk_Earn_Member").checked==true){
		if(document.getElementById("cmb_Profession").value.trim() == "0" ) {
			document.getElementById("DvProfession").style.display="none";
			document.getElementById("DvErrorProfession").style.display="";
			//document.getElementById("cmb_Profession").focus();
			iValidation=1;
				if (submit==0)
				{
					return false;
				}
		}
		else if(document.getElementById("cmb_Profession").value.trim() != "") {
			document.getElementById("DvProfession").style.display="";
			document.getElementById("DvErrorProfession").style.display="none";
		}
	
	 
	
		if(document.getElementById("txt_Company_name").value.trim() == "" ) {
			document.getElementById("DvCompany").style.display="none";
			document.getElementById("DvErrorCompany").style.display="";
		//	document.getElementById("txt_Company_name").focus();
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

function CheckDupEmailMember(parent_email) {
		
		var emailobj = document.getElementById("txt_Email").value;
		
		var message = "";
		//alert(emailobj);
		if(emailobj != "") {
			if (window.XMLHttpRequest)
			{// code for IE7+, Firefox, Chrome, Opera, Safari
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
					message = message.split('###');
					//alert ( xmlhttp.responseText);
					if(message[1] == "true") {
						//alert('Duplication Error Message\n\nSelected date already exists in the following records.');
						//document.getElementById("DvErrorDupEmail").style.display="";
						document.getElementById("DvEmail").style.display="none";
						return false;
					}
					else
					{
						//document.getElementById("DvErrorDupEmail").style.display="none";
						document.getElementById("DvEmail").style.display="";
					}
				}
			}
			//alert( hostname+"/includes/check_duplication.inc.php?tbl=Users&value="+emailobj);
			xmlhttp.open("GET", hostname+"/includes/check_duplication.inc.php?tbl=Members&value="+emailobj+"&parent_email="+parent_email, true);
			xmlhttp.send();
		}
	}
	
	
	

function CreateMemberProfileID(randomid) {
		
		
		var firstname = document.getElementById("txt_Fullname").value;
		var lastname = document.getElementById("txt_Lastname").value;
		var randomid2 = document.getElementById("txtRandomID2").value;
		var randomid3 = document.getElementById("txtRandomID3").value;
		
		
		var d = new Date();
    	var n = d.getTime();
	
		if(firstname != "" && lastname != "") {
			if (window.XMLHttpRequest)
			{// code for IE7+, Firefox, Chrome, Opera, Safari
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
					 //alert(message);
					 document.getElementById("dvDupMemberProfileID").innerHTML=message;
				}
			}

			//alert( hostname+"/includes/check_duplication.inc.php?tbl=Users&value="+emailobj);
			xmlhttp.open("GET", hostname+"/includes/check_profile.inc.php?firstname="+firstname+"&lastname="+lastname, true);
			xmlhttp.send();
		}
	}
	
	