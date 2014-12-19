var monthNames = [ "Jan", "Feb", "Mar", "Apr", "May", "Jun",
    "Jul", "Aug", "Sep", "Oct", "Nov", "Dec" ];
function GetChart(datsJson)
{
   var Cat = [];
   var CatValue = [];
//alert(datsJson);
   if (datsJson.trim()=="")
   {
	   return false;
   }
   datsJson = datsJson.split('###');
  // console.log(datsJson);
  // alert(datsJson);
   
   datsJson1 = datsJson[0].split('/');
   datsJson2 = datsJson[1].split('/');
	
	for (var i in datsJson1) {
		Cat.push(datsJson1[i]);
	}

	for (var m in datsJson2) {
		if (!isNaN(parseFloat(datsJson2[m])))
		{
			CatValue.push(parseFloat(datsJson2[m]));
		}
	}

	//alert(Cat);
	//alert(CatValue);

	 

	$(function () {
        $('#Diastolic_Chart').highcharts({
			chart: { type: 'line',height:'315',width:'736'},
			title:'',
			
            xAxis: {
				text: 'Date',
                categories: Cat,
				gridLineWidth: 1,
	            gridLineColor: (Highcharts.theme && Highcharts.theme.background2) || '#ebebeb',
            },
            yAxis: {
			    title: {
                    text: 'Min'
                },
            },
			 plotOptions: {
                line: {
                    dataLabels: {
                        enabled: true
                    },
                    enableMouseTracking: false
                }
            },
             series: [{
                name: 'Date',
                data: CatValue,
				showInLegend: true,
				color:'#9aca04',
            }]
        });
    });
	
}
	 

function addDays(theDate, days) {
    return new Date(theDate.getTime() + days*24*60*60*1000);
}
function GetChartDetails(menu,type)
{
	var pageURL="";
	var fromdate;
	var todate;

	var fromdate1;
	var todate1;
	
	
	if (menu=="diastolic")
	{
		 
		fromdate=new Date(document.getElementById("txtDiastolicFromDate").value);
		todate=new Date(document.getElementById("txtDiastolicToDate").value);;
	}	 

	if (type=="Prev")
	{
		 fromdate = addDays(fromdate,-7);
		 todate = addDays(fromdate, 7);

		
	}
	else if (type=="Next")
	{		
		 fromdate = addDays(fromdate,7);
		 todate = addDays(fromdate, 7);
	}
	else
	{
		fromdate=new Date();
		todate = new Date(addDays(fromdate, 7));
	}
	

	if (menu=="diastolic")
	{
		document.getElementById("txtDiastolicFromDate").value=fromdate;
		document.getElementById("txtDiastolicToDate").value=todate;		
		
		 
		fromdate1=fromdate.getDate()+" "+monthNames[fromdate.getMonth()]+" "+fromdate.getFullYear();
		todate1=todate.getDate()+" "+monthNames[todate.getMonth()]+" "+todate.getFullYear();

		document.getElementById("dvDiastolicMonthYearCaption").innerHTML=fromdate1+" - "+ todate1;

		fromdate1=fromdate.getFullYear()+"/"+(fromdate.getMonth()+1)+"/"+fromdate.getDate();;
		todate1=todate.getFullYear()+"/"+(todate.getMonth()+1)+"/"+todate.getDate();;
		
		 
		pageURL=hostname+"/includes/diastolic_blood_chart.inc.php?fromdate="+fromdate1+"&todate="+todate1+"&type="+menu+"&rowCount=7";
		
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
			if (xmlhttp.responseText.trim()=="")
		   {
				document.getElementById("Diastolic_Chart").innerHTML="";
			   return false;
		   }
			GetChart(xmlhttp.responseText)
			RetriveReocrds_DailyTracking('Blood_Pressure','dvBlood_Pressure');
		}
	}
	
	xmlhttp.open("GET",pageURL,true);
	xmlhttp.send();
}