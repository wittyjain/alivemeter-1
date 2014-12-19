var monthNames = [ "Jan", "Feb", "Mar", "Apr", "May", "Jun",

    "Jul", "Aug", "Sep", "Oct", "Nov", "Dec" ];

function GetChart_Total(datsJson,HighChartRenderID)

{

  
   var Cat = [];
   var CatValue = [];
   var CatValue1 = [];
   var CatValue2 = [];
   var CatValue3 = [];
   var CatValue4 = [];
   var CatValue5 = [];
 //   var CatValue6 = [];

//alert(datsJson);

//alert(HighChartRenderID);

 ///console.log(datsJson);

   if (datsJson.trim()=="")

   {

	   return false;

   }

   datsJson = datsJson.split('###');  
   

   datsJson1 = datsJson[0].split('/');
 
   datsJson2 = datsJson[1].split('/');
 
   datsJson3 = datsJson[2].split('/');
 
   datsJson4 = datsJson[3].split('/');
 
  
   //datsJson8 = datsJson[7].split('/');

 /* alert(datsJson);

 alert(datsJson1);

 alert(datsJson2);

 alert(datsJson3);

  alert(datsJson4);*/

	
//alert(datsJson1);
	for (var i in datsJson1) {

		if (i !="contains")
		{
			Cat.push(datsJson1[i].trim());
		}
		else
		{
				Cat.push(datsJson1[i]);
		}

	}



	//alert(datsJson2);


	for (var m in datsJson2) {

		if (!isNaN(parseFloat(datsJson2[m])))

		{

			CatValue.push(parseFloat(datsJson2[m]));

		}

	}


	for (var m in datsJson3) {
		if (!isNaN(parseFloat(datsJson3[m])))
		{
			CatValue1.push(parseFloat(datsJson3[m]));
		}
	}



	for (var m in datsJson4) {
		if (!isNaN(parseFloat(datsJson4[m])))
		{
			CatValue2.push(parseFloat(datsJson4[m]));
		}
	}



 
	$(function () {

        $(HighChartRenderID).highcharts({

			chart: { height:'315',width:'736', zoomType: 'xy'},

			title:'',

			

            xAxis: {

				text: 'Date',

                categories: Cat,

				gridLineWidth: 1,

	            gridLineColor: (Highcharts.theme && Highcharts.theme.background2) || '#ebebeb',

            },

            yAxis: {

			    title: {

                    text: 'Calories'

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

                name: 'Consumed',

                data: CatValue,

				type: 'spline',
				yAxis: 0,
				showInLegend: false,

				color:'blue',

            },
			 

			{
                name: 'Burned',
                data: CatValue1,
				type: 'spline',
				dashStyle: 'dot',
				showInLegend: false,
				color:'maroon',
            },

			/*{
                name: 'Remaining',
                data: CatValue2,
				type: 'spline',
				dashStyle: 'dot',
				showInLegend: false,
				color:'red',
            },*/

			 
			]

        });

    });

	

}


function addDays(theDate, days) {

    return new Date(theDate.getTime() + days*24*60*60*1000);

}

function GetChartDetails_Total(menu,type)

{

	var pageURL="";

	var fromdate;

	var todate;



	var fromdate1;

	var todate1;

	
	var daysCal="0";

//alert (menu);
	if (menu=="calorie_result")

	{

		 

		fromdate=new Date(document.getElementById("txtcalorie_resultFromDate").value);

		todate=new Date(document.getElementById("txtcalorie_resultToDate").value);;

		daysCal=document.getElementById("txtCalWeekDays").value;
		 



		if (type=="Prev")

		{

			 fromdate = addDays(fromdate,-6);

			 todate = addDays(fromdate, 6);

	

			

		}

		else if (type=="Next")

		{		

			 fromdate = addDays(fromdate,6);

			 todate = addDays(fromdate, 6);

		}

		else

		{

			fromdate=new Date();

			todate = new Date(addDays(fromdate, 6));

		}

	
		document.getElementById("txtcalorie_resultFromDate").value=fromdate;

		document.getElementById("txtcalorie_resultToDate").value=todate;		

		

		 

		fromdate1=fromdate.getDate()+" "+monthNames[fromdate.getMonth()]+" "+fromdate.getFullYear();

		todate1=todate.getDate()+" "+monthNames[todate.getMonth()]+" "+todate.getFullYear();



		document.getElementById("dvcalorie_resultMonthYearCaption").innerHTML=fromdate1+" - "+ todate1;



		fromdate1=fromdate.getFullYear()+"/"+(fromdate.getMonth()+1)+"/"+fromdate.getDate();;

		todate1=todate.getFullYear()+"/"+(todate.getMonth()+1)+"/"+todate.getDate();;

		
		pageURL=hostname+"/includes/total_calorie_chart_track.inc.php?fromdate="+fromdate1+"&todate="+todate1+"&type="+menu+"&rowCount="+daysCal;
	////	alert (pageURL);
	}




	if (menu=="calorie_resultMonth")
	{
		fromdate=new Date(document.getElementById("txtcalorie_resultFromDateMonth").value);
		todate=new Date(document.getElementById("txtcalorie_resultToDateMonth").value);;
		daysCal=document.getElementById("txtCalWeekDaysMonth").value;
		 

	//	alert (fromdate);
		if (type=="Prev")
		{
			 //fromdate = addDays(fromdate,-30);
			 //todate = addDays(fromdate, 30);
			fromdate = new Date(fromdate.getFullYear(), fromdate.getMonth()-1, 1);
			todate = new Date(fromdate.getFullYear(), fromdate.getMonth()+1, 1);
			
		}
		else if (type=="Next")
		{		
			// fromdate = addDays(fromdate,30);
			// todate = addDays(fromdate, 30);

			fromdate = new Date(todate.getFullYear(), todate.getMonth(), 1);
			todate = new Date(fromdate.getFullYear(), fromdate.getMonth()+1, 1);
			
		}
		else
		{
			//fromdate=new Date();
			//todate = new Date(addDays(fromdate, 30));

			fromdate = new Date(fromdate.getFullYear(), fromdate.getMonth(), 1);
			todate = new Date(fromdate.getFullYear(), fromdate.getMonth()+1, 1);
		}
	

		todate_cap=todate;
		todate_cap=addDays(todate_cap,-1);
		todate_cap=todate_cap.getDate()+" "+monthNames[todate_cap.getMonth()]+" "+todate_cap.getFullYear();

		document.getElementById("txtcalorie_resultFromDateMonth").value=fromdate;
		document.getElementById("txtcalorie_resultToDateMonth").value=todate;		
		
		 
		fromdate1=fromdate.getDate()+" "+monthNames[fromdate.getMonth()]+" "+fromdate.getFullYear();
		todate1=todate.getDate()+" "+monthNames[todate.getMonth()]+" "+todate.getFullYear();

		document.getElementById("dvcalorie_resultMonthYearCaptionMonth").innerHTML=fromdate1+" - "+ todate_cap;

		fromdate1=fromdate.getFullYear()+"/"+(fromdate.getMonth()+1)+"/"+fromdate.getDate();;
		todate1=todate.getFullYear()+"/"+(todate.getMonth()+1)+"/"+todate.getDate();;

		daysCal= (todate - fromdate) / (1000 * 60 * 60 * 24);
		 
		pageURL=hostname+"/includes/total_calorie_chart_track.inc.php?fromdate="+fromdate1+"&todate="+todate1+"&type="+menu+"&rowCount="+daysCal;
	}

	
	
	if (menu=="calorie_resultYearly")
	{
		 
		fromdate=new Date(document.getElementById("txtcalorie_resultFromDateYearly").value);
		todate=new Date(document.getElementById("txtcalorie_resultToDateYearly").value);;
		daysCal=document.getElementById("txtCalWeekDaysYearly").value;
		 

		/*if (type=="Prev")
		{
			 fromdate = addDays(fromdate,-365);
			 todate = addDays(fromdate, 365);
	
			
		}
		else if (type=="Next")
		{		
			 fromdate = addDays(fromdate,365);
			 todate = addDays(fromdate, 365);
		}
		else
		{
			fromdate=new Date();
			todate = new Date(addDays(fromdate, 365));
		}*/


		if (type=="Prev")
		{
			 //fromdate = addDays(fromdate,-30);
			 //todate = addDays(fromdate, 30);
			//fromdate = new Date(fromdate.getFullYear()-1, fromdate.getMonth(), 1);
			//todate = new Date(fromdate.getFullYear()+1, fromdate.getMonth(), 1);

			fromdate = new Date(fromdate.getFullYear()-1,0, 1);
			todate = new Date(fromdate.getFullYear(), fromdate.getMonth()+12, 0);
			
		}
		else if (type=="Next")
		{		
			// fromdate = addDays(fromdate,30);
			// todate = addDays(fromdate, 30);

			//fromdate = new Date(todate.getFullYear(), todate.getMonth(), 1);
			//todate = new Date(fromdate.getFullYear()+1, fromdate.getMonth(), 1);

			fromdate = new Date(fromdate.getFullYear()+1,0, 1);
			todate = new Date(fromdate.getFullYear(), fromdate.getMonth()+12, 0);
			
		}
		else
		{
			//fromdate=new Date();
			//todate = new Date(addDays(fromdate, 30));

			fromdate = new Date(fromdate.getFullYear(),0, 1);
			todate = new Date(fromdate.getFullYear(), fromdate.getMonth()+12, 0);
		}
	
		document.getElementById("txtcalorie_resultFromDateYearly").value=fromdate;
		document.getElementById("txtcalorie_resultToDateYearly").value=todate;		
		
		 
		fromdate1=fromdate.getDate()+" "+monthNames[fromdate.getMonth()]+" "+fromdate.getFullYear();
		todate1=todate.getDate()+" "+monthNames[todate.getMonth()]+" "+todate.getFullYear();

		document.getElementById("dvcalorie_resultMonthYearCaptionYearly").innerHTML=fromdate1+" - "+ todate1;

		fromdate1=fromdate.getFullYear()+"/"+(fromdate.getMonth()+1)+"/"+fromdate.getDate();;
		todate1=todate.getFullYear()+"/"+(todate.getMonth()+1)+"/"+todate.getDate();;
		
		daysCal= (todate - fromdate) / (1000 * 60 * 60 * 24); 


		pageURL=hostname+"/includes/total_calorie_chart_track.inc.php?fromdate="+fromdate1+"&todate="+todate1+"&type="+menu+"&rowCount="+daysCal;
		
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

				if (menu=="calorie_result")
				{
				   document.getElementById("calorie_result_Chart").innerHTML="";

				   return false;

				}
				 
				
				if (menu=="calorie_resultMonth")
				{
				   document.getElementById("calorie_result_ChartMonth").innerHTML="";
				   return false;
				}
				
				
				if (menu=="calorie_resultYearly")
				{
				   document.getElementById("calorie_resultYearly").innerHTML="";
				   return false;
				}

				



				
		   }

			if (menu=="calorie_result")
			{
			   GetChart_Total(xmlhttp.responseText,'#calorie_result_Chart')
			   if (type=="")
				{
				  GetChartDetails_Total('calorie_resultMonth','')
				}
			   
			}
			if (menu=="calorie_resultMonth")
			{
			   GetChart_Total(xmlhttp.responseText,'#calorie_result_ChartMonth')
			    GetChartDetails_Total('calorie_resultYearly','')
			}
			
			if (menu=="calorie_resultYearly")
			{
			   GetChart_Total(xmlhttp.responseText,'#calorie_result_ChartYearly')
			  /// ('calorie_resultYearly','')
			}
			
			

		}

	}

	

	xmlhttp.open("GET",pageURL,true);

	xmlhttp.send();

}