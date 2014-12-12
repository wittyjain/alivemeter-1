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

function checkEmailValidation(txtobj)
{
    var val = document.getElementById(txtobj).value;
    if(val == "")
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
