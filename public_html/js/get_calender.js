function Retrive_Calender_Months(type,menutype)
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
			document.getElementById("dvGetMonth").innerHTML = xmlhttp.responseText;
		}
	}
	var month_1=document.getElementById("txtCalMonthNo").value;
	var year_1=document.getElementById("txtCalYearNo").value;
	var md_id=document.getElementById("txtMDID").value;

	month_1=parseFloat(month_1);
	year_1=parseFloat(year_1);

	if (type=="Prev")
	{
		if (month_1 <=1)
		{
			month_1=12;
			year_1=year_1-1;
		}
		else
		{
			month_1=month_1-1;
		}
		
	}
	else if (type=="Next")
	{
		if (month_1 >=12)
		{
			month_1=1;
			year_1=year_1+1;
		}
		else
		{
			month_1=month_1+1;
		}
		
	}
	
	 document.getElementById("txtCalMonthNo").value=month_1;
	 document.getElementById("txtCalYearNo").value=year_1;

	if (menutype=="MD")
	{
		xmlhttp.open("GET",hostname+"/includes/get_calender_md.inc.php?type="+type+"&month_1="+month_1+"&year_1="+year_1+"&md_id="+md_id,true);
	}
	else
	{
		xmlhttp.open("GET",hostname+"/includes/get_calender.inc.php?type="+type+"&month_1="+month_1+"&year_1="+year_1,true);
	}
	xmlhttp.send();
}




