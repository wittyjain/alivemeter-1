var monthNames = [ "Jan", "Feb", "Mar", "Apr", "May", "Jun",

    "Jul", "Aug", "Sep", "Oct", "Nov", "Dec" ];

function GetChart(pageUrl,HighChartRenderID)

{
	
	$(function () {

        var options = ({

			chart: {renderTo:HighChartRenderID, height:'315',width:'736',type:'column'},

			title:'',

		

            xAxis: {

				text: 'Date',

                categories: [],
				gridLineWidth: 1,

	            gridLineColor: (Highcharts.theme && Highcharts.theme.background2) || '#ebebeb',

            },

            yAxis: {

			    title: {

                    text: 'Min'

                },

            },
			
			plotOptions: {
	                column: {
	                    stacking: 'normal',
	                    dataLabels: {
	                        enabled: true,
							formatter: function(){
								console.log(this);
								var val = this.y;
								if (val < 1) {
									return '';
								}
								return val;
							},
	                    }
	                }
	            },
	            series: []
			 
        });

		var color="";
		$.getJSON(pageUrl, function(datsJson) {
			options.xAxis.categories = datsJson[0]['data'];
			var m=0;
			var iLength=0;

			iLength=datsJson[1]['data1'];
			iLength=parseFloat(iLength);
			iLength=(iLength/2);
			iLength=iLength+1;
			for (i=1;i < iLength;i++)
			{
				//alert(datsJson[i+1]['data'])
				options.series[m] = datsJson[i+1];
				options.series[m].showInLegend = false; 
				//options.series[m].name=datsJson[i+2]['data']; 
				i=i+1;
				m=m+1;
			}	
			chart = new Highcharts.Chart(options);
			
			if (HighChartRenderID=="exce_calorie_result_Chart")
			{
				GetChartDetails('exce_calorie_resultMonth','')
			}
			else if (HighChartRenderID=="exce_calorie_result_ChartMonth")
			{
				//GetChartDetails('exce_calorie_resultYearly','')
			}
		});
    });

	

}

	 


function getRandomColor() {
    var letters = '0123456789ABCDEF'.split('');
    var color = '#';
    for (var i = 0; i < 6; i++ ) {
        color += letters[Math.floor(Math.random() * 16)];
    }
    return color;
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

	
	var daysCal="0";


	if (menu=="exce_calorie_result")

	{

		 
		
		fromdate=new Date(document.getElementById("txtexce_calorie_resultFromDate").value);

		todate=new Date(document.getElementById("txtexce_calorie_resultToDate").value);;

		daysCal=document.getElementById("txtWeekDays").value;
		 



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

	
		document.getElementById("txtexce_calorie_resultFromDate").value=fromdate;

		document.getElementById("txtexce_calorie_resultToDate").value=todate;		

		

		 

		fromdate1=fromdate.getDate()+" "+monthNames[fromdate.getMonth()]+" "+fromdate.getFullYear();

		todate1=todate.getDate()+" "+monthNames[todate.getMonth()]+" "+todate.getFullYear();



		document.getElementById("dvexce_calorie_resultMonthYearCaption").innerHTML=fromdate1+" - "+ todate1;



		fromdate1=fromdate.getFullYear()+"/"+(fromdate.getMonth()+1)+"/"+fromdate.getDate();;

		todate1=todate.getFullYear()+"/"+(todate.getMonth()+1)+"/"+todate.getDate();;

		
		

		

		pageURL=hostname+"/includes/calorie_chart_track.inc.php?fromdate="+fromdate1+"&todate="+todate1+"&type="+menu+"&rowCount="+daysCal;

		alert (pageURL);

	}




	if (menu=="exce_calorie_resultMonth")
	{
		 
		fromdate=new Date(document.getElementById("txtexce_calorie_resultFromDateMonth").value);
		todate=new Date(document.getElementById("txtexce_calorie_resultToDateMonth").value);;
		daysCal=document.getElementById("txtWeekDaysMonth").value;
		 

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
	
		document.getElementById("txtexce_calorie_resultFromDateMonth").value=fromdate;
		document.getElementById("txtexce_calorie_resultToDateMonth").value=todate;		
		
		 
		fromdate1=fromdate.getDate()+" "+monthNames[fromdate.getMonth()]+" "+fromdate.getFullYear();
		todate1=todate.getDate()+" "+monthNames[todate.getMonth()]+" "+todate.getFullYear();

		document.getElementById("dvexce_calorie_resultMonthYearCaptionMonth").innerHTML=fromdate1+" - "+ todate1;

		fromdate1=fromdate.getFullYear()+"/"+(fromdate.getMonth()+1)+"/"+fromdate.getDate();;
		todate1=todate.getFullYear()+"/"+(todate.getMonth()+1)+"/"+todate.getDate();;

		daysCal= (todate - fromdate) / (1000 * 60 * 60 * 24);
		 
		pageURL=hostname+"/includes/calorie_chart_track.inc.php?fromdate="+fromdate1+"&todate="+todate1+"&type="+menu+"&rowCount="+daysCal;

		
		
	}

	if (menu=="exce_calorie_resultYearly")
	{
		 
		fromdate=new Date(document.getElementById("txtexce_calorie_resultFromDateYearly").value);
		todate=new Date(document.getElementById("txtexce_calorie_resultToDateYearly").value);;
		daysCal=document.getElementById("txtWeekDaysYearly").value;
		 


		if (type=="Prev")
		{
			 //fromdate = addDays(fromdate,-30);
			 //todate = addDays(fromdate, 30);
			//fromdate = new Date(fromdate.getFullYear()-1, fromdate.getMonth(), 1);
			//todate = new Date(fromdate.getFullYear()+1, fromdate.getMonth(), 1);

			fromdate = new Date(fromdate.getFullYear()-1,0, 1);
			todate = new Date(fromdate.getFullYear(), fromdate.getMonth()+11, 1);
			
		}
		else if (type=="Next")
		{		
			// fromdate = addDays(fromdate,30);
			// todate = addDays(fromdate, 30);

			//fromdate = new Date(todate.getFullYear(), todate.getMonth(), 1);
			//todate = new Date(fromdate.getFullYear()+1, fromdate.getMonth(), 1);

			fromdate = new Date(fromdate.getFullYear()+1,0, 1);
			todate = new Date(fromdate.getFullYear(), fromdate.getMonth()+11, 1);
			
		}
		else
		{
			//fromdate=new Date();
			//todate = new Date(addDays(fromdate, 30));

			fromdate = new Date(fromdate.getFullYear(),0, 1);
			todate = new Date(fromdate.getFullYear(), fromdate.getMonth()+11, 1);
		}
	
		document.getElementById("txtexce_calorie_resultFromDateYearly").value=fromdate;
		document.getElementById("txtexce_calorie_resultToDateYearly").value=todate;		
		
		 
		fromdate1=fromdate.getDate()+" "+monthNames[fromdate.getMonth()]+" "+fromdate.getFullYear();
		todate1=todate.getDate()+" "+monthNames[todate.getMonth()]+" "+todate.getFullYear();

		document.getElementById("dvexce_calorie_resultMonthYearCaptionYearly").innerHTML=fromdate1+" - "+ todate1;

		fromdate1=fromdate.getFullYear()+"/"+(fromdate.getMonth()+1)+"/"+fromdate.getDate();;
		todate1=todate.getFullYear()+"/"+(todate.getMonth()+1)+"/"+todate.getDate();;
		
		daysCal= (todate - fromdate) / (1000 * 60 * 60 * 24); 


		pageURL=hostname+"/includes/calorie_chart_track.inc.php?fromdate="+fromdate1+"&todate="+todate1+"&type="+menu+"&rowCount="+daysCal;
		
	}


 
		if (menu=="exce_calorie_result")
		{
			
			GetChart(pageURL,'exce_calorie_result_Chart')
		}
		if (menu=="exce_calorie_resultMonth")
		{
			  GetChart(pageURL,'exce_calorie_result_ChartMonth')
		
		}

		 if (menu=="exce_calorie_resultYearly")
		{
		   GetChart(pageURL,'exce_calorie_result_ChartYearly')

		}

	

	
}