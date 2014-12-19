function show1(){ document.getElementById('divShowHide').style.display ='block'; } 
function show2(){ document.getElementById('divShowHide').style.display = 'none'; }
function show3(){ document.getElementById('divShowHide1').style.display ='block'; } 
function show4(){ document.getElementById('divShowHide1').style.display = 'none'; }
function show19(){ document.getElementById('divShowHide9').style.display ='block'; } 
function show20(){ document.getElementById('divShowHide9').style.display = 'none'; }
function show21(){ document.getElementById('divShowHide10').style.display ='block'; } 
function show22(){ document.getElementById('divShowHide10').style.display = 'none'; }
function show5(){ document.getElementById('divShowHide2').style.display ='block'; } 
function show6(){ document.getElementById('divShowHide2').style.display = 'none'; }
function show7(){ document.getElementById('divShowHide3').style.display ='block'; } 
function show8(){ document.getElementById('divShowHide3').style.display = 'none'; }
function show9(){ document.getElementById('divShowHide4').style.display ='block'; } 
function show10(){ document.getElementById('divShowHide4').style.display = 'none'; }
function show11(){ document.getElementById('divShowHide5').style.display ='block'; } 
function show12(){ document.getElementById('divShowHide5').style.display = 'none'; }
function show13(){ document.getElementById('divShowHide6').style.display ='block'; } 
function show14(){ document.getElementById('divShowHide6').style.display = 'none'; }
function show15(){ document.getElementById('divShowHide7').style.display ='block'; } 
function show16(){ document.getElementById('divShowHide7').style.display = 'none'; }
function show17(){ document.getElementById('divShowHide8').style.display ='block'; } 
function show18(){ document.getElementById('divShowHide8').style.display = 'none'; }


	
	function Pres_Report_Show_Hide()
	{
		 document.getElementById("dvPres_Report_Show_Hide").style.display="none";
		if(document.getElementById("cmb_Prescription_Reports_Doc_pres").value ==2 || document.getElementById("cmb_Prescription_Reports_Doc_pres").value ==3 ){
			
			document.getElementById("dvPres_Report_Show_Hide").style.display="";
			
		}
		else if(document.getElementById("cmb_Prescription_Reports_Doc_pres").value ==3){
			
		
			
		}
		 
	}
	
	
	
	function Intake_Reminder_Show_Hide()
	{
	
		 document.getElementById("divIntake_Reminder").style.display="none";
		if(document.getElementById("Chk_MD_Setup_Intake_Reminder").checked == true){
			
			document.getElementById("divIntake_Reminder").style.display="block";
			
		}
		
		 
	}
	
	function Purchase_Reminder_Show_Hide ()
	
	{
	
		 document.getElementById("divPurchase_Reminder").style.display="none";
		if(document.getElementById("Chk_MD_Setup_Purchase_Reminder").checked == true){
			
			document.getElementById("divPurchase_Reminder").style.display="block";
			
		}
		
		 
	}
	
	function Daily_Frequency_enabledisable()
	{
			document.getElementById("Chk_MD_Daily_Frequency_HH_Morning").disabled=true;
			document.getElementById("Chk_MD_Daily_Frequency_Min_Morning").disabled=true;
			document.getElementById("Chk_MD_Daily_Frequency_HH_Afternoon").disabled=true;
			document.getElementById("Chk_MD_Daily_Frequency_Min_Afternoon").disabled=true;
			document.getElementById("Chk_MD_Daily_Frequency_HH_Evening").disabled=true;
			document.getElementById("Chk_MD_Daily_Frequency_Min_Evening").disabled=true;
			document.getElementById("Chk_MD_Daily_Frequency_HH_Night").disabled=true;
    		document.getElementById("Chk_MD_Daily_Frequency_Min_Night").disabled=true;
			///document.getElementById("Chk_MD_Daily_Frequency_HH_Morning").style.opacity="0.4";
			//document.getElementById("Chk_MD_Daily_Frequency_Min_Morning").style.opacity="0.4";
			//document.getElementById("Chk_MD_Daily_Frequency_HH_Afternoon").style.opacity="0.4";
			//document.getElementById("Chk_MD_Daily_Frequency_Min_Afternoon").style.opacity="0.4";
			//document.getElementById("Chk_MD_Daily_Frequency_HH_Evening").style.opacity="0.4";
			//document.getElementById("Chk_MD_Daily_Frequency_Min_Evening").style.opacity="0.4";
			//document.getElementById("Chk_MD_Daily_Frequency_HH_Night").style.opacity="0.4";
			//document.getElementById("Chk_MD_Daily_Frequency_Min_Night").style.opacity="0.4";
			
			
			
		if(document.getElementById("Chk_MD_Daily_Frequency_Morning").checked==true){
			
			document.getElementById("Chk_MD_Daily_Frequency_HH_Morning").disabled=false;
			document.getElementById("Chk_MD_Daily_Frequency_Min_Morning").disabled=false;
			//document.getElementById("Chk_MD_Daily_Frequency_HH_Morning").style.opacity="1.0";
			//document.getElementById("Chk_MD_Daily_Frequency_Min_Morning").style.opacity="1.0";
			
			
			
		}
		else 
		{
			 document.getElementById("Chk_MD_Daily_Frequency_HH_Morning").value="0";		
			 document.getElementById("Chk_MD_Daily_Frequency_Min_Morning").value="Min";
		}
		
		 if(document.getElementById("Chk_MD_Daily_Frequency_Afternoon").checked==true){
			
				document.getElementById("Chk_MD_Daily_Frequency_HH_Afternoon").disabled=false;
				document.getElementById("Chk_MD_Daily_Frequency_Min_Afternoon").disabled=false;
			//	document.getElementById("Chk_MD_Daily_Frequency_HH_Afternoon").style.opacity="1.0";
			//	document.getElementById("Chk_MD_Daily_Frequency_Min_Afternoon").style.opacity="1.0";
				
				
		
			}
			else 
			{
				 document.getElementById("Chk_MD_Daily_Frequency_HH_Afternoon").value="0";		
				 document.getElementById("Chk_MD_Daily_Frequency_Min_Afternoon").value="Min";
			}
			
			
			
			if(document.getElementById("Chk_MD_Daily_Frequency_Evening").checked==true){
			
				document.getElementById("Chk_MD_Daily_Frequency_HH_Evening").disabled=false;
				document.getElementById("Chk_MD_Daily_Frequency_Min_Evening").disabled=false;
				//document.getElementById("Chk_MD_Daily_Frequency_HH_Evening").style.opacity="1.0";
				//document.getElementById("Chk_MD_Daily_Frequency_Min_Evening").style.opacity="1.0";
				
				
		
			}
			else 
			{
				 document.getElementById("Chk_MD_Daily_Frequency_HH_Evening").value="0";		
				 document.getElementById("Chk_MD_Daily_Frequency_Min_Evening").value="Min";
			}
			
			
			if(document.getElementById("Chk_MD_Daily_Frequency_Night").checked==true){
			
				document.getElementById("Chk_MD_Daily_Frequency_HH_Night").disabled=false;
				document.getElementById("Chk_MD_Daily_Frequency_Min_Night").disabled=false;
			//	document.getElementById("Chk_MD_Daily_Frequency_HH_Night").style.opacity="1.0";
			//	document.getElementById("Chk_MD_Daily_Frequency_Min_Night").style.opacity="1.0";
				
				
		
			}
			
			else 
			{
				 document.getElementById("Chk_MD_Daily_Frequency_HH_Night").value="0";		
				 document.getElementById("Chk_MD_Daily_Frequency_Min_Night").value="Min";
			}
			
	}
	function GetSubTabs()
	{
	
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
					document.getElementById("divtab8").innerHTML = xmlhttp.responseText;
				}
			}
			
				xmlhttp.open("GET","sub_tabs.html",true);
				xmlhttp.send();
			
	
	}

