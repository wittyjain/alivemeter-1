var hostname="http://"+ location.host+"/alivemeter/public_html";

function popup(type, obj)
{
	if(type=='show')
	{
		document.getElementById(obj).style.display="";
	}
	else if(type == 'hide')
	{
		document.getElementById(obj).style.display="none";
	}
}

function MenuPopup(type, obj)
	{
		if(type=='showdiv')
		{
			document.getElementById(obj).style.display="";
		}
		else if(type == 'hidediv')
		{
			document.getElementById(obj).style.display="none";
		}
	} 
 
function showKeyCode(e, val) {
	var keycode;
	if(window.event) {
		keycode = window.event.keyCode;// IE
	} else {
		keycode = e.which;// Firefox
	}
}

function redirectURL(url) {
	 
    if (navigator.appName == 'Microsoft Internet Explorer') {
        parent.window.location.href(url);
    } else if (navigator.appName == 'Netscape') {
        parent.window.open(url, '_parent', 1);
      //  parent.window.close();
    }
}

function OpenPopupCenter(pageURL, title, w, h, scroll) {
	var left = (screen.width / 2) - (w / 2);
	var top = 0;//(screen.height / 2) - (h / 2);
	var targetWin = window.open(pageURL, title, 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=' + scroll + ', resizable=no, copyhistory=no, width=' + w + ', height=' + h + ', top=' + top + ', left=' + left);
}

function DisableRightClick(msg) {
    var message = msg;
    function clickIE() { if (document.all) { (message); return false; } }
    function clickNS(e) {
        if
    (document.layers || (document.getElementById && !document.all)) {
            if (e.which == 2 || e.which == 3) { (message); return false; }
        }
    }
    if (document.layers)
    { document.captureEvents(Event.MOUSEDOWN); document.onmousedown = clickNS; }
    else { document.onmouseup = clickNS; document.oncontextmenu = clickIE; }
    document.oncontextmenu = new Function("return false");
}

function ChangeClass(obj, classname){
    document.getElementById(obj).className = classname;
}

function ChangeImage(obj, path) {
    document.getElementById(obj).src = path;
}

function HistoryBack(msg) {
	window.history.back();  
}

function showAlert(msg, url) {
    alert(msg);
    if (url != '') {
        redirectURL(url);
    }
}

function deleteRecord(url) {
	if(confirm("Want to delete clicked record?")) {
		redirectURL(url);
	}
}

function removeRecord(url) {
	if(confirm("Want to remove clicked product from your cart?")) {
		redirectURL(url);
	}
}
function activeRecord(url) {
	if(confirm("Want to Active clicked record?")) {
		redirectURL(url);
	}
}

function MoveToTrash(url) {
	if(confirm("Want to move this record to trash?")) {
		redirectURL(url);
	}
}
function redirectSamePage(url) {
	 
    if (navigator.appName == 'Microsoft Internet Explorer') {
        parent.window.location.href(url);
    } else if (navigator.appName == 'Netscape') {
        parent.window.open(url, '_parent', 1);
      //  parent.window.close();
    }
}

function ConfirmSubmit(url) {
	if(confirm("Do want to add more align member?")) {
		var r=confirm("Do want to add more align member?")
		if (r == true) {
        	redirectSamePage(url);
		} else {
			redirectURL(url);
		}
		
	}
}
	
function RemoveFile(obj) {
	document.getElementById(obj).value = "";
}

function CheckQueryStrings(type) {
	var objURL = new Object();
	window.location.search.replace(new RegExp( "([^?=&]+)(=([^&]*))?", "g" ),function( $0, $1, $2, $3 ){objURL[ $1 ] = $3;});
	for (var strKey in objURL)
	{
		if(type == strKey)
		{
			return objURL[strKey];
		}
		else
		{
			return "";
		}
	}
}

function setClipBoardData() {
	setInterval("window.clipboardData.setData('text','')",20);
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

function CheckNumeric(obj, extrastring) {
    var strString = document.getElementById(obj).value;
	
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

function ReloadWindow() {
	window.location.reload();
}

//function SetElementtoBody() {
//	var b_body = document.getElementsByTagName("body");
//	b_body.setAttribute("onload", "updateClock(); setInterval('updateClock()', 1000);");
//}


function CheckUploadFileExtension(val, _validFileExtensions) {
	var sFileName = val;
	if (sFileName.length > 0) {
		var blnValid = false;
		for (var j = 0; j < _validFileExtensions.length; j++) {
			var sCurExtension = _validFileExtensions[j];
			if (sFileName.substr(sFileName.length - sCurExtension.length, sCurExtension.length).toLowerCase() == sCurExtension.toLowerCase()) {
				blnValid = true;
				break;
			}
		}

		if (!blnValid) {
			return false;
		} else {
			return true;
		}
	} else {
		return false;
	}
}

function CheckUploadFileSize(obj, maxsize) {
	var file = obj.files[0];
	if(file.size > maxsize) {
		return false;
	} else {
		return true;
	}
}

function myHandler(msg, url, line){
	alert(line); alert(url); alert(msg);
	//var error_page_url = '<?php echo $strHostName; ?>/errorpage.php?emsg='+msg+'&eurl='+url+'&eline='+line;
	//redirectURL(''+error_page_url+'');
}

//window.onerror = myHandler;






function GetRegValue(objectName,type,objectValue)
{
	if (type=="Click")
	{
		if (document.getElementById(objectName).value==objectValue)
		{
			document.getElementById(objectName).value="";
		}
	}
	else if (type=="blur")
	{
		if (document.getElementById(objectName).value=="")
		{
			document.getElementById(objectName).value=objectValue;
			document.getElementById(objectName).type="text";

		}
	}
}


function SetPasswordValue(objectName)
{
	document.getElementById(objectName).type="password";

}

function LoginValidation ()
{
	if(document.getElementById("txtLoginUserName").value=="")
	{
		alert ("Please enter valid username.");
		document.getElementById("txtLoginUserName").focus();
		return false;
	}
	
	if(document.getElementById("txtLoginPassword").value=="")
	{
		alert ("Please enter valid Password.");
		document.getElementById("txtLoginPassword").focus();
		return false;
	}
}


function CheckNewEmailValid(submit)
{

	if (checkEmailValidation("txt_Reg_Email") == false && document.getElementById("txt_Reg_Email").value!="")
	{
//		alert("99")
		document.getElementById("DvErrorEmail").style.display="";
		document.getElementById("DvErrorDupEmail1").style.display="none";
		document.getElementById("DvEmail").style.display="none";
	}
	CheckDuplicationEmailRegistered(submit);

}

function Reg_checkEmailValidation(txtobj)
{
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


function Reg_IsNumeric(strString, extrastring) {
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



function IsSlash(strString, extrastring) {
    if(!extrastring) {
		var strValidChars = "/";
	} else {
		var strValidChars = "/"+extrastring;	
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



function CheckDuplicationEmailRegistered(submit) {


		/*document.getElementById("DvErrorDupEmail").style.display="none";
		document.getElementById("DvErrorDupEmail2").style.display="none";
		document.getElementById("DvCorUsername").style.display="none";

		document.getElementById("DvErrorDupMob").style.display="none";
		document.getElementById("DvErrorMobile").style.display="none";
		document.getElementById("DvMobile").style.display="none";*/

		if (submit==1)
		{
			Signup_Registration('3')
		}
		var emailobj = document.getElementById("txt_Reg_Email").value;
		document.getElementById("DvErrorDupEmail1").style.display="none";
		document.getElementById("DvEmail").style.display="none";

	var message = "";
		
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
				
					
					if(message[1] == "true") {
						//alert("b");
						///alert('Duplication Error Message\n\nSelected date already exists in the following records.');
						document.getElementById("DvErrorEmail").style.display="none";
						document.getElementById("DvErrorDupEmail1").style.display="";
						document.getElementById("DvEmail").style.display="none";
						document.getElementById("txt_Reg_Email").focus();
						return false;
					}
					else

					{

						
						if (checkEmailValidation("txt_Reg_Email") == false)
						{
							//alert("1");
							document.getElementById("DvErrorEmail").style.display="";
							document.getElementById("DvErrorDupEmail1").style.display="none";
							document.getElementById("DvEmail").style.display="none";
							return false;
						}
						else
						{
							document.getElementById("DvErrorDupEmail1").style.display="none";
							document.getElementById("DvErrorEmail").style.display="none";
							document.getElementById("DvEmail").style.display="";
							if (submit=="1")
							{
								 
								//CheckDuplicationUsernameRegistered('1');
								
								
								return false;
								//Signup_Registration(1);
							}
							return false;
							
						}
						
					}
				}
			}
			//alert( hostname+"/includes/check_duplication.inc.php?tbl=Users&value="+emailobj);
			xmlhttp.open("GET", hostname+"/includes/check_duplication.inc.php?tbl=UserID&value="+emailobj, true);
			xmlhttp.send();
			return false;
		}
		return false;
	}
	
	


function Signup_Registration (submit)
{
	var iValidation="0";
	
	
	if(document.getElementById("txt_Reg_Fullname").value.trim() == "" && submit==1 || document.getElementById("txt_Reg_Lastname").value.trim() == "" && submit==1) {
		document.getElementById("DvName").style.display="none";
		document.getElementById("DvErrorName").style.display="";
		
		document.getElementById("txt_Reg_Fullname").focus();
		
		if(document.getElementById("txt_Reg_Fullname").value.trim() != "" && document.getElementById("txt_Reg_Lastname").value.trim() == "")
		{
			document.getElementById("txt_Reg_Lastname").focus();
		}
		
		iValidation=1;
		if (submit==0)
		{
			return false;
		}
	}
	
	
	
	
	
	if(document.getElementById("txt_Reg_Fullname").value.trim() != "" && document.getElementById("txt_Reg_Lastname").value.trim()!="") {
		document.getElementById("DvName").style.display="";
		document.getElementById("DvErrorName").style.display="none";
	}
	else
	{
		document.getElementById("DvName").style.display="none";
		//document.getElementById("DvErrorName").style.display="";
	}
	
	
	
	
	if(document.getElementById("txtProfileID").value.trim() == "" && submit==1 ) {
		document.getElementById("DvCorUsername").style.display="none";
		document.getElementById("DvErrorDupEmail2").style.display="";
		iValidation=1;
		if (submit==0)
		{
			return false;
		}
	}

	
	/*if(document.getElementById("txtProfileID").value.trim() != ""  && submit==1 ) {
		document.getElementById("DvCorUsername").style.display="";
		document.getElementById("DvErrorDupEmail2").style.display="none";
	}*/
	
	if(document.getElementById("txt_Reg_Email").value.trim() == "" && submit==1 ) {
		document.getElementById("DvEmail").style.display="none";
		document.getElementById("DvErrorEmail").style.display="";
		iValidation=1;
		if (submit==0)
		{
			return false;
		}
	}

	
	if(document.getElementById("txt_Reg_Email").value.trim() !="" && submit==1) {
		document.getElementById("DvEmail").style.display="";
		document.getElementById("DvErrorEmail").style.display="none";
		//document.getElementById("txt_Reg_Email").focus();
		//iValidation=1;
		if (submit==0)
		{
			return false;
		}
	}

	
	
	
	if(document.getElementById("txt_Reg_Password").value.trim() == "" && submit==1) {
		document.getElementById("DvPassword").style.display="none";
		document.getElementById("DvErrorPassword").style.display="";
		//document.getElementById("txt_Reg_Password").focus();
		iValidation=1;
		if (submit==0)
		{
			return false;
		}
	}
	
	
	if(document.getElementById("txt_Reg_Password").value.trim() != "") {
		document.getElementById("DvPassword").style.display="";
		document.getElementById("DvErrorPassword").style.display="none";
	}
	else
	{
		document.getElementById("DvPassword").style.display="none";
		//document.getElementById("DvErrorName").style.display="";
	}
	
	
	if(document.getElementById("txt_Reg_Confirm_Password").value.trim() == "" && submit==1) {
		document.getElementById("DvCPassword").style.display="none";
		document.getElementById("DvErrorCPassword").style.display="";
		//document.getElementById("txt_Reg_Confirm_Password").focus();
		iValidation=1;
		if (submit==0)
		{
			return false;
		}
	}


	if(document.getElementById("txt_Reg_Confirm_Password").value.trim() != "" ) {
		document.getElementById("DvCPassword").style.display="";
		document.getElementById("DvErrorCPassword").style.display="none";
	}
	else
	{
		document.getElementById("DvCPassword").style.display="none";
		//document.getElementById("DvErrorName").style.display="";
	}
	

	if(document.getElementById("txt_Reg_Confirm_Password").value.trim() != "" && submit==1 || document.getElementById("txt_Reg_Confirm_Password").value.trim() != "") {
		var pass = document.getElementById("txt_Reg_Password").value;
		var cpass = document.getElementById("txt_Reg_Confirm_Password").value;
		
		if(pass != cpass) {
			document.getElementById("DvCPassword").style.display="none";
			document.getElementById("DvErrorCPassword").style.display="";
			//document.getElementById("newPassConf").focus();
			return false;
		}
		else
		{
			document.getElementById("DvCPassword").style.display="";
			document.getElementById("DvErrorCPassword").style.display="none";
		}	
	
	}
	


	if(document.getElementById("txt_Reg_Mobile_no").value.trim() == "" && submit==1 ||  document.getElementById("txt_Reg_Mobile_no").value.trim().length < 10 && submit==1 ) {
		document.getElementById("DvMobile").style.display="none";
		document.getElementById("DvErrorMobile").style.display="";
		//document.getElementById("txt_Reg_Mobile_no").focus();
		iValidation=1;
		if (submit==0)
		{
			return false;
		}
	}
	
	/*if(document.getElementById("txt_Reg_Mobile_no").value.trim() != "" && document.getElementById("txt_Reg_Mobile_no").value.trim().length >= 10 && submit==1 ) {
		document.getElementById("DvMobile").style.display="none";
		document.getElementById("DvMobile").style.display="";
		document.getElementById("DvErrorMobile").style.display="none";if (iValidation==1 || submit==3)
	{
		return false;
	}
	}*/

	

	
	 
 if (iValidation==1 || submit==3)
	{
		return false;
	}
	


}




function CreateProfileID(randomid) {
		
		
		var firstname = document.getElementById("txt_Reg_Fullname").value;
		var lastname = document.getElementById("txt_Reg_Lastname").value;
		var randomid2 = document.getElementById("txtRandomID2").value;
		var randomid3 = document.getElementById("txtRandomID3").value;
		
		
		var d = new Date();
    	var n = d.getTime();
	
//		var uniquid=slice();
	
		/*if(fullname != "" && lastname != "") {
			var profileID =(fullname+""+lastname+""+randomid+""+uniquid);
			var value2 = profileID.substring(0, 4)+""+randomid2+""+uniquid;
			var value3 = lastname.substring(0, 6)+""+randomid3+""+uniquid;
		}
		
		
		//alert (profileID);
	//	alert (fullname);
		
		var message = "";
		//alert(emailobj);
		if(fullname != "" && lastname != "") {
		//	document.getElementById("txtProfileID").value=profileID;
			document.getElementById("value1").innerHTML=profileID;
			document.getElementById("value2").innerHTML=value2;
			document.getElementById("value3").innerHTML=value3;
		}*/
		
		
		
		
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
					 document.getElementById("dvDupProfileID").innerHTML=message;
				}
			}

			//alert( hostname+"/includes/check_duplication.inc.php?tbl=Users&value="+emailobj);
			xmlhttp.open("GET", hostname+"/includes/check_profile.inc.php?firstname="+firstname+"&lastname="+lastname, true);
			xmlhttp.send();
		}
	}
	
	
	


function checkEmailValidation(txtobj)
{
  //document.getElementById("DvErrorEmail").style.display="none";
  	var obj = document.getElementById(txtobj).value;
    if(obj == "")
    {
        
		//document.getElementById("DvErrorEmail").style.display="none";
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

function CheckDuplicationUsernameRegistered(submit) {
		
		var emailobj = document.getElementById("txtProfileID").value;
	document.getElementById("DvCorUsername").style.display="none";

document.getElementById("DvErrorDupEmail").style.display="none";

		if(emailobj != "") {
			
		}

		
		

		
		//document.getElementById("DvErrorDupEmail2").style.display="";
		if(emailobj != "") {
			//alert("1");
			
			document.getElementById("DvErrorDupEmail2").style.display="none";
			
			//return false;
		}
		//document.getElementById("DvErrorDupEmail").style.display="none";
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
						document.getElementById("DvErrorDupEmail").style.display="";
						document.getElementById("DvCorUsername").style.display="none";
						document.getElementById("txtProfileID").focus();
						return false;
					}
					else	
					{
						 document.getElementById("DvErrorDupEmail").style.display="none";
						document.getElementById("DvCorUsername").style.display="";
						if (submit==1)
						{
							 
							//CheckDuplicationMobile("txt_Reg_Mobile_no",'1');
							return false;
						}
						
					}
				}
			}
			///alert( hostname+"/includes/check_duplication.inc.php?tbl=Users&value="+emailobj);
			xmlhttp.open("GET", hostname+"/includes/check_duplication.inc.php?tbl=Users&value="+emailobj, true);
			xmlhttp.send();
			return false
		}
		return false
	}
	
	
	

function CheckDuplicationMobile(txtobj,submit)
{

	 var emailobj = document.getElementById("txt_Reg_Mobile_no").value;

	document.getElementById("DvErrorDupMob").style.display="none";
	document.getElementById("DvErrorMobile").style.display="none";
	document.getElementById("DvMobile").style.display="none";

		var message = "";
		if(document.getElementById("txt_Reg_Mobile_no").value.trim() == "" || document.getElementById("txt_Reg_Mobile_no").value.trim().length < 10 ) {
			///document.getElementById("DvMobile").style.display="none";
			//document.getElementById("DvErrorMobile").style.display="";
			//return false;
		}
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
						document.getElementById("DvErrorDupMob").style.display="";
						document.getElementById("DvMobile").style.display="none";
						document.getElementById("txt_Reg_Mobile_no").focus();
						return false;
					}
					else	
					{
						
						if(document.getElementById("txt_Reg_Mobile_no").value.trim() == ""  || document.getElementById("txt_Reg_Mobile_no").value.trim().length < 10) {
							document.getElementById("DvMobile").style.display="none";
							document.getElementById("DvErrorMobile").style.display="";
							return false;
						}
						if (submit==1)
						{
							 
							Signup_Registration('1');
							return true;
						}
						document.getElementById("DvErrorDupMob").style.display="none";
						document.getElementById("DvMobile").style.display="";
						return false;
					}
				}
			}
			//alert( hostname+"/includes/check_duplication.inc.php?tbl=Users&value="+emailobj);
			xmlhttp.open("GET", hostname+"/includes/check_duplication.inc.php?tbl=Mobile&value="+emailobj, true);
			xmlhttp.send();
			return false;
		}
		return false;
	
}



function GetProfileIdValue(id)
{
	//alert(id);
	if(id!="")
	{
		
			document.getElementById("txtProfileID").value=id;
			//document.getElementById("txtProfileID").focus();
			//return false;

	}
}
