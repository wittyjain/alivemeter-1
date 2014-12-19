function Add_Option_Time(type,dropdown1,dropdown2)
{
	var type=document.getElementById("txtType").value;
	var i_h_start="0";i_h_end="0";i_m_start="0";i_m_end="0";j_n="1";

	i_h_start=parseFloat(i_h_start);
	i_h_end=parseFloat(i_h_end);
	i_m_start=parseFloat(i_m_start);
	i_m_end=parseFloat(i_m_end);
	j_n=parseFloat(j_n);

	i_m_start=0;i_m_end=60;

	if (type=="Breakfast")
	{
		i_h_start=7;i_h_end=13;
	}

	if (type=="Lunch")
	{
		i_h_start=13;i_h_end=17;
	}

	if (type=="Snacks")
	{
		i_h_start=4;i_h_end=10;
	}
	
	if (type=="Dinner")
	{
		i_h_start=7;i_h_end=13;
	}
 
	var TimeH = document.getElementById("txtTimeHH");
	var TimeM = document.getElementById("txtTimeMin");
	var option="";

	 
    for(var i=TimeH.options.length-1;i>=0;i--)
    {
        TimeH.remove(i);
    }
	

	option = document.createElement("option");
	option.text ="HH";
	option.value ="0";
	TimeH.add(option);
	var jo="";
	for (var j=i_h_start;j < i_h_end ; j++ )
	{

			 
		option = document.createElement("option");
		if (type!="Lunch")
		{
			jo=j;
			if (j < 10)
			{
				jo="0"+j;		
			}
			
			option.text =j;
			option.value =jo;

			
		}
		else
		{
		 
			jo=j_n;
			if (j_n < 10)
			{
				jo="0"+j_n;		
			}
			
			option.text =j_n;
			option.value =jo;

			 
			 
			if (j==13)
			{
				
				j_n=parseFloat(j_n);
				j_n=1;
			}
		
			j_n=j_n+1;
			
		}

		TimeH.add(option);
		
	}
	

	  for(var i=TimeM.options.length-1;i>=0;i--)
    {
        TimeM.remove(i);
    }
	

	option = document.createElement("option");
	option.text ="MM";
	option.value ="";
	TimeM.add(option);
	var multiple=0;
	
	for (var j=0;j < 4 ; j++ )
	{
		option = document.createElement("option");
		option.text =multiple;
		option.value =multiple;
		multiple=multiple+15;
		TimeM.add(option);
	}
	
}

function Retrive_Cal_Exercise(type)
{
	var exercise_id=document.getElementById("txtExerciseId").value;
	var type=document.getElementById("txtExercise").value;
	var date=document.getElementById("txtExerciseDate").value;

	pageURL=hostname+"/includes/get_result_excercise.inc.php?exercise_id="+exercise_id+"&type="+type+"&date="+date;
	//alert (pageURL);
	document.getElementById('ifExercise').height='0px';
	document.getElementById("ifExercise").src= pageURL;
}

function Send_Diet_Plan()
{
	//alert(window.location.href);
	
	var dietfoodtotal=document.getElementById("txtDietNutTotal").value;
	dietfoodtotal=parseFloat(dietfoodtotal);
	
	var txtDietExeTotal=document.getElementById("txtDietExeTotal").value;
	txtDietExeTotal=parseFloat(txtDietExeTotal);
	
	
	if(document.getElementById("txtNote").value=="")
	{
		alert ("Please add your comments to internal note.");
		document.getElementById("txtNote").focus();
		return false;
	}
	
	
	if(document.getElementById("txtMessage").value=="")
	{
		alert ("Please add your message to user.");
		document.getElementById("txtMessage").focus();
		return false;
	}
	
	if (dietfoodtotal <= 0)
	{
	
		if(document.getElementById("txtType").value=="0")
			{
				alert ("Complete adding food to match calorie target.");
				document.getElementById("txtType").focus();
				return false;
			}
			
			if(document.getElementById("txtFoodSearch").value=="")
			{
				alert ("Complete adding food to match calorie target.");
				document.getElementById("txtFoodSearch").focus();
				return false;
			}
			
			if(document.getElementById("txtFoodQty").value=="")
			{
				alert ("Complete adding food to match calorie target.");
				document.getElementById("txtFoodQty").focus();
				return false;
			}
			
			
			if(document.getElementById("txtTimeHH").value=="0")
			{
				alert ("Complete adding food to match calorie target.");
				document.getElementById("txtTimeHH").focus();
				return false;
			}
			
			
			if(document.getElementById("txtTimeMin").value=="")
			{
				alert ("Complete adding food to match calorie target.");
				document.getElementById("txtTimeMin").focus();
				return false;
			}
	}
	
	if (txtDietExeTotal <= 0 || txtDietExeTotal <= 1) {
		if(document.getElementById("txtTimePeriod").value=="0")
		{
			alert ("You have not suggested any exercise.");
			document.getElementById("txtTimePeriod").focus();
			return false;
		}
		
		
		if(document.getElementById("txtExerciseSearch").value=="")
		{
			alert ("You have not suggested any exercise.");
			document.getElementById("txtExerciseSearch").focus();
			return false;
		}
		
		
		if(document.getElementById("txtDurationHH").value=="0")
		{
			alert ("You have not suggested any exercise.");
			document.getElementById("txtDurationHH").focus();
			return false;
		}
		
		
		if(document.getElementById("txtDurationMin").value=="0")
		{
			alert ("You have not suggested any exercise.");
			document.getElementById("txtDurationMin").focus();
			return false;
		}
	
	}
	
	//if (confirm("Are you sure you want to sent this plan ?"))
	//{
		var selected_date=document.getElementById("ToPickupdate").value;
		var nutritionist_id=document.getElementById("txtNutId").value;
		var patient_id=document.getElementById("txtPatientId").value;
		var note=document.getElementById("txtNote").value;
		note = note.replace(/\r?\n/g, '<br />');
		note = note.replace('\\', '');
		
		var message=document.getElementById("txtMessage").value;
		message = message.replace(/\r?\n/g, '<br />');
		message = message.replace('\\', '');		
		
		var diet_plan_id=document.getElementById("txtDietPlanId").value;
		
		pageURL=hostname+"/includes/add_records.inc.php?nutritionist_id="+nutritionist_id+"&patient_id="+patient_id+"&selected_date="+selected_date+"&diet_plan_id="+diet_plan_id+"&note="+note+"&message="+message+"&insert_type=Send_Diet_Plan_Ins";
		
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
			//	document.getElementById("dvDietExercise").innerHTML = xmlhttp.responseText;
				RetriveReocrds_Main('Diet_Plan','dvDietPlan');
				document.getElementById("dvShowSendDietPlan").style.display='none';
				document.getElementById("dvMainTotalCalorie").style.display='none';
				document.getElementById("dvMainTotalBurntCalorie").style.display='none';
			}
		}
	
		alert ("Diet plan sent successfully.");
		
		xmlhttp.open("GET",pageURL,true);
		xmlhttp.send();
		document.getElementById("txtNote").value="";
		document.getElementById("txtMessage").value="";
	//}
	
	
	

}


function Retrive_Total_Cal()
{
	
	//var total_today_cal=document.getElementById("txtTodayTotalCal").value;
	var diet_plan=document.getElementById("txtDietPlanId").value;
    var date=document.getElementById("ToPickupdate").value;
	
	
 //   alert (diet_plan);
	//alert (date);
	//document.getElementById("dvTotalCalorie").innerHTML = total_today_cal;
	
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
				//message = message.split('<?php echo $strSeparator; ?>');
				
					//alert(message);
					//var total_today_cal=document.getElementById("txtTotalCal").value;
					//alert(message);
					document.getElementById("dvTotalCalorie").innerHTML = message;
					//alert(document.getElementById("dvTotalCalorie").value);
				
			}
	  
		
	}
	  xmlhttp.open("GET",hostname+"/includes/get_cal_total.inc.php?date="+date+"&diet_plan_id="+diet_plan, true);
	xmlhttp.send();
}






function Retrive_Total_Exe_Cal()
{
	
	//var total_today_cal=document.getElementById("txtTodayTotalCal").value;
	var diet_plan=document.getElementById("txtDietPlanId").value;
    var date=document.getElementById("ToPickupdate").value;
	
	
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
				//message = message.split('<?php echo $strSeparator; ?>');
				
					//alert(message);
					//var total_today_cal=document.getElementById("txtTotalCal").value;
					//alert(message);
					document.getElementById("dvTotalBurntCalorie").innerHTML = message;
					//alert(document.getElementById("dvTotalCalorie").value);
				
			}
	  
		
	}
	  xmlhttp.open("GET",hostname+"/includes/get_exe_cal_total.inc.php?date="+date+"&diet_plan_id="+diet_plan, true);
	xmlhttp.send();
}






function Add_Diet_Exercise(load_type)
{
	var dietexercisetotal=document.getElementById("txtDietExeTotal").value;
	
	
	if(load_type!="1")
	{
		if(document.getElementById("txtTimePeriod").value=="0")
		{
			alert ("Please enter time period");
			document.getElementById("txtTimePeriod").focus();
			return false;
		}
		
		
		
		if(document.getElementById("txtExerciseSearch").value=="")
		{
			alert ("Please choose exercise");
			document.getElementById("txtExerciseSearch").focus();
			return false;
		}
		
		
		if(document.getElementById("txtDurationHH").value=="")
		{
			alert ("Please choose hours");
			document.getElementById("txtDurationHH").focus();
			return false;
		}
		
		
		if(document.getElementById("txtDurationMin").value=="")
		{
			alert ("Please choose time");
			document.getElementById("txtDurationMin").focus();
			return false;
		}
	}
	
	var exercise_id=document.getElementById("txtExerciseId").value;
	var date=document.getElementById("txtExerciseDate").value;
	var nut_id=document.getElementById("txtNutId").value;
	var patient_id=document.getElementById("txtPatientId").value;
	var timehh=document.getElementById("txtTimeHH1").value;
	var timemin=document.getElementById("txtTimeMin1").value;
	var time_period=document.getElementById("txtTimePeriod").value;
	var durationhh=document.getElementById("txtDurationHH").value;
	var durationmin=document.getElementById("txtDurationMin").value;
	var selected_date=document.getElementById("Exercise_Selected_Date").value;
	var cal=document.getElementById("txtExerciceTotalCal").value;
	var exemin=document.getElementById("txtExeMin").value;

	pageURL=hostname+"/includes/get_diet_result_exercise.inc.php?exercise_id="+exercise_id+"&nut_id="+nut_id+"&patient_id="+patient_id+"&timehh="+timehh+"&timemin="+timemin+"&durationhh="+durationhh+"&durationmin="+durationmin+"&date="+date+"&time_period="+time_period+"&selected_date="+selected_date+"&cal="+cal+"&exemin="+exemin;
	//alert (pageURL);
	
	
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
				document.getElementById("dvDietExercise").innerHTML = xmlhttp.responseText;
			
				
				Retrive_Total_Exe_Cal();
				dietexercisetotal=parseFloat(dietexercisetotal);
				dietexercisetotal=dietexercisetotal+1;
				document.getElementById("txtDietExeTotal").value=dietexercisetotal;
				
				document.getElementById("txtTimeMin1").value="Min";
				document.getElementById("txtTimeHH1").value="HH";
				document.getElementById("txtExerciseSearch").value="";
				document.getElementById("txtExeMin").value="";
				document.getElementById("txtExerciceTotalCalorie").value="";	
				document.getElementById("txtExerciceTotalMin1").innerHTML="";	
				document.getElementById("txtExerciceTotalCal1").innerHTML="";	
				document.getElementById("txtDurationHH").value="0";
				document.getElementById("txtDurationMin").value="0";
				document.getElementById("txtTimePeriod").value="0";
				
		}
	}
	
	xmlhttp.open("GET",pageURL,true);
	xmlhttp.send();

	
}





function Add_Diet_Food(load_type)
{
	
	//CheckDuplication();
	//document.getElementById("dvDietFood").innerHTML="";
	
	//Add_Diet_Exercise(load_exe_type);
	
	var dietfoodtotal=document.getElementById("txtDietNutTotal").value;
	
	
	if(load_type!="1" )
	{
		
		
		if(document.getElementById("txtType").value=="0")
		{
			alert ("Please chooose food type");
			document.getElementById("txtType").focus();
			return false;
		}
		
		if(document.getElementById("txtFoodSearch").value=="")
		{
			alert ("Please choose food.");
			document.getElementById("txtFoodSearch").focus();
			return false;
		}
		
		if(document.getElementById("txtFoodQty").value=="")
		{
			alert ("Please choose food qty.");
			document.getElementById("txtFoodQty").focus();
			return false;
		}
		
		
		if(document.getElementById("txtTimeHH").value=="")
		{
			alert ("Please choose hours.");
			document.getElementById("txtTimeHH").focus();
			return false;
		}
		
		
		if(document.getElementById("txtTimeMin").value=="")
		{
			alert ("Please choose min.");
			document.getElementById("txtTimeMin").focus();
			return false;
		}
	
	}
	
	
	
	var receipe_id=document.getElementById("txtReceiptId").value;
	var date=document.getElementById("txtFoodDate").value;
	var nut_id=document.getElementById("txtNutId").value;
	var patient_id=document.getElementById("txtPatientId").value;
	var timehh=document.getElementById("txtTimeHH").value;
	var timemin=document.getElementById("txtTimeMin").value;
	var qty=document.getElementById("txtFoodQty").value;
	var type=document.getElementById("txtType").value;
	var selected_date=document.getElementById("diet_selected_date").value;
	//alert (selected_date);
	var portion=document.getElementById("txtFoodPortion2").value;
	var food_cal=document.getElementById("txtFoodCal2").value;
	var total_cal=document.getElementById("txtTotalCal").value;
	
	//var total_today_cal=document.getElementById("txtTotalTodayCal").value;
	
	
 // alert (selected_date);
	pageURL=hostname+"/includes/get_diet_result_food.inc.php?receipe_id="+receipe_id+"&nut_id="+nut_id+"&patient_id="+patient_id+"&timehh="+timehh+"&timemin="+timemin+"&qty="+qty+"&date="+date+"&type="+type+"&selected_date="+selected_date+"&portion="+portion+"&food_cal="+food_cal+"&total_cal="+total_cal;
	//alert (pageURL);
	

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
		//alert (xmlhttp.responseText);
		//alert (xmlhttp.status);
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
		{
			document.getElementById("dvDietFood").innerHTML = xmlhttp.responseText;
			if(load_type=="1")
			{
				Add_Diet_Exercise('1'); 
				
			}
			else
			{
				Retrive_Total_Cal();
				dietfoodtotal=parseFloat(dietfoodtotal);
				dietfoodtotal=dietfoodtotal+1;
				document.getElementById("txtDietNutTotal").value=dietfoodtotal;
				document.getElementById("txtReceiptId").value="";
				document.getElementById("txtTimeHH").value="0";
				document.getElementById("txtTimeMin").value="";
				document.getElementById("txtFoodQty").value="";
				document.getElementById("txtType").value="0";
				document.getElementById("txtTotalCal").value="";
				document.getElementById("txtFoodSearch").value="";
				document.getElementById("txtFoodPortion").innerHTML="";
				document.getElementById("txtFoodPortion2").value="";
				document.getElementById("txtFoodCal").innerHTML="";
				document.getElementById("txtFoodCal2").value="";
			 
			
			}
		}
		
	}
	
	
	xmlhttp.open("GET",pageURL,true);
	xmlhttp.send();
	
	
	
}


function Retrive_Cal_BreakFast(type)
{
	var Receipe_id=document.getElementById("txtReceiptId").value;
	var type=document.getElementById("txtBreakFast").value;
	var date=document.getElementById("txtBreakDate").value;


	pageURL=hostname+"/includes/get_result_nutrition.inc.php?Receipe_id="+Receipe_id+"&type="+type+"&date="+date;
	///alert (pageURL);
	document.getElementById('ifBreakFast').height='0px';
	document.getElementById("ifBreakFast").src= pageURL;
	SetFrameHeight();
	

}
function Retrive_Cal_Lunch(type)
{
	var LReceipe_id=document.getElementById("txtLunchReceiptId").value;
	var type=document.getElementById("txtLunch").value;
	var date=document.getElementById("txtLunchDate").value;
	
	pageURL=hostname+"/includes/get_result_nutrition.inc.php?LReceipe_id="+LReceipe_id+"&type="+type+"&date="+date;
	document.getElementById('ifLunch').height='0px';
	document.getElementById("ifLunch").src= pageURL;
	SetFrameHeight1();

}
function Retrive_Cal_Snacks(type)
{
	var SReceipe_id=document.getElementById("txtSnacksReceiptId").value;
	var type=document.getElementById("txtSnacks").value;
	var date=document.getElementById("txtSnacksDate").value;
	pageURL=hostname+"/includes/get_result_nutrition.inc.php?SReceipe_id="+SReceipe_id+"&type="+type+"&date="+date;
	document.getElementById('ifSnacks').height='0px';
	document.getElementById("ifSnacks").src= pageURL;
	SetFrameHeight2();

}
function Retrive_Cal_Dinner(type)
{
	var DReceipe_id=document.getElementById("txtDinnerReceiptId").value;
	var type=document.getElementById("txtDinner").value;
	var date=document.getElementById("txtDinnerDate").value;
	pageURL=hostname+"/includes/get_result_nutrition.inc.php?DReceipe_id="+DReceipe_id+"&type="+type+"&date="+date;
	document.getElementById('ifDinner').height='0px';
	document.getElementById("ifDinner").src= pageURL;
	SetFrameHeight3();

}



function SetFrameHeight()
{
	  var the_height=document.getElementById('ifBreakFast').contentWindow.document.body.scrollHeight;
	/*//alert (the_height);

  //change the height of the iframe
  	var Receipe_id=document.getElementById("txtReceiptId").value;
	var mySplitResult = Receipe_id.split(",");
	var m=0;
	for(i = 1; i < mySplitResult.length; i++){
		 m=m+84;
	}
	m=m+80; */
   document.getElementById('ifBreakFast').height=the_height+'px';
   document.getElementById("txtBreakfast_Search").value="";
	 
}

function SetFrameHeight1()
{
		
		 var the_height1=document.getElementById('ifLunch').contentWindow.document.body.scrollHeight;
		/*///alert (the_height1);

  //change the height of the iframe
  	var Receipe_id=document.getElementById("txtReceiptId").value;
	var mySplitResult = Receipe_id.split(",");
	var m=0;
	for(i = 1; i < mySplitResult.length; i++){
		 m=m+84;
	}
	 
 m=m+80; */
  document.getElementById('ifLunch').height=the_height1+'px';
  document.getElementById("txtLunch_Search").value="";
  
	 
}


function SetFrameHeight2()
{
		 
		  var the_height2=document.getElementById('ifSnacks').contentWindow.document.body.scrollHeight;
		

  /*//change the height of the iframe
  	var Receipe_id=document.getElementById("txtReceiptId").value;
	var mySplitResult = Receipe_id.split(",");
	var m=0;
	for(i = 1; i < mySplitResult.length; i++){
		 m=m+84;
	}
	 
  m=m+80; */
  document.getElementById('ifSnacks').height=the_height2+'px';
  document.getElementById("txtSnacks_Search").value="";
  
	 
}

function SetFrameHeight3()
{
		
		  var the_height3=document.getElementById('ifDinner').contentWindow.document.body.scrollHeight;

  /*//change the height of the iframe
  	var Receipe_id=document.getElementById("txtReceiptId").value;
	var mySplitResult = Receipe_id.split(",");
	var m=0;
	for(i = 1; i < mySplitResult.length; i++){
		 m=m+84;
	}
 m=m+80; 	*/
  document.getElementById('ifDinner').height=the_height3+'px';
  document.getElementById("txtDinner_Search").value=""; 
}



function SetFrameHeightE()
{
		
		 var the_heighte=
		document.getElementById('ifExercise').contentWindow.
		 document.body.scrollHeight;
		

  //change the height of the iframe
  	var exercise_id=document.getElementById("txtExerciseId").value;
	var mySplitResult = exercise_id.split(",");
	var m=0;
	for(i = 1; i < mySplitResult.length; i++){
		 m=m+84;
	}
	 
 
  document.getElementById('ifExercise').height=the_heighte+0+'px';
 document.getElementById("txtExerciseSearch").value=""; 
	 
}


function SetFrameHeightE1()
{
		
		 var the_heighte=
		document.getElementById('ifExercise1').contentWindow.
		 document.body.scrollHeight;
		

  //change the height of the iframe
  	var exercise_id=document.getElementById("txtExerciseId").value;
	var mySplitResult = exercise_id.split(",");
	var m=0;
	for(i = 1; i < mySplitResult.length; i++){
		 m=m+84;
	}
	 
 
  document.getElementById('ifExercise1').height=the_heighte+0+'px';
   document.getElementById("txtExerciseSearch").value=""; 
	 
}

function SetRecipeIdE1(id)
{
	var exercise_id=document.getElementById("txtExerciseId").value;
	exercise_id=exercise_id+","+id;
	document.getElementById("txtExerciseId").value=exercise_id;
	Retrive_Cal_Exercise1();
}
function SetRecipeIdE(id)
{
	var exercise_id=document.getElementById("txtExerciseId").value;
	exercise_id=exercise_id+","+id;
	document.getElementById("txtExerciseId").value=exercise_id;
	Retrive_Cal_Exercise();
}



function SetRecipeId(id)
{
	var Receipe_id=document.getElementById("txtReceiptId").value;
	Receipe_id=Receipe_id+","+id;
	document.getElementById("txtReceiptId").value=Receipe_id;
	Retrive_Cal_BreakFast();
}


function SetRecipeId1(id)
{
	var Receipe_id=document.getElementById("txtLunchReceiptId").value;
	Receipe_id=Receipe_id+","+id;
	document.getElementById("txtLunchReceiptId").value=Receipe_id;
	Retrive_Cal_Lunch();
}

function SetRecipeId2(id)
{
	var Receipe_id=document.getElementById("txtSnacksReceiptId").value;
	Receipe_id=Receipe_id+","+id;
	document.getElementById("txtSnacksReceiptId").value=Receipe_id;
	Retrive_Cal_Snacks();
}

function SetRecipeId3(id)
{
	var Receipe_id=document.getElementById("txtDinnerReceiptId").value;
	Receipe_id=Receipe_id+","+id;
	document.getElementById("txtDinnerReceiptId").value=Receipe_id;
	Retrive_Cal_Dinner();
}







function Add_Option_Time_Exercise(type,dropdown1,dropdown2)
{
	var period=document.getElementById("txtTimePeriod").value;
	var i_h_start="0";i_h_end="0";i_m_start="0";i_m_end="0";j_n="12";

	i_h_start=parseFloat(i_h_start);
	i_h_end=parseFloat(i_h_end);
	i_m_start=parseFloat(i_m_start);
	i_m_end=parseFloat(i_m_end);
	j_n=parseFloat(j_n);

	i_m_start=0;i_m_end=60;

	if (period=="Morning")
	{
		i_h_start=5;i_h_end=13;
	}

	if (period=="Afternoon")
	{
		i_h_start=12;i_h_end=17;
	}

	if (period=="Evening")
	{
		i_h_start=4;i_h_end=10;
	}
	
	var DurationH = document.getElementById("txtDurationHH");
	var DurationM = document.getElementById("txtDurationMin");
	var option="";

	 
   /* for(var i=DurationH.options.length-1;i>=0;i--)
    {
        DurationH.remove(i);
    }
	

	option = document.createElement("option");
	option.text ="HH";
	option.value ="0";
	DurationH.add(option);

	for (var j=i_h_start;j < i_h_end ; j++ )
	{
		option = document.createElement("option");
		if (period!="Afternoon")
		{
			option.text =j;
			option.value =j;
		}
		else
		{
			option.text =j_n;
			option.value =j_n;
			 
			if (j==12)
			{
				
				j_n=parseFloat(j_n);
				j_n=0;
			}
		
			j_n=j_n+1;
			
		}

		DurationH.add(option);
		
	}
	

	  for(var i=DurationM.options.length-1;i>=0;i--)
    {
        DurationM.remove(i);
    }
	

	option = document.createElement("option");
	option.text ="MM";
	option.value ="";
	DurationM.add(option);
	var multiple=0;
	
	for (var j=0;j < 4 ; j++ )
	{
		option = document.createElement("option");
		option.text =multiple;
		option.value =multiple;
		multiple=multiple+15;
		DurationM.add(option);
	}*/	
	
}








function GetTotalFood(date)
{
/// alert ("total food");
	message="";
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
					message = xmlhttp.responseText;
				//	alert (message);
					
					message = message.split("###");
					
					//message = message.replace("true###", 'true');
					 //alert (message[0].trim());
					
					if(message[0].trim()=="true") {
						//alert("success");
						//alert (message[1]);
						
						parent.document.getElementById("DvTotalCal").innerHTML=message[1];
						parent.document.getElementById("DvTotalCarb").innerHTML=message[2];
						parent.document.getElementById("DvTotalFat").innerHTML=message[3];
						parent.document.getElementById("DvTotalProt").innerHTML=message[4];
						parent.document.getElementById("DvTotalSod").innerHTML=message[5];
						parent.document.getElementById("DvTotalSugar").innerHTML=message[6];
					
						
					}
					else
					{
					//
					}
				}
		}
	
	
		
	 xmlhttp.open("GET",hostname+"/includes/total_all.inc.php?date="+date, true);
	 xmlhttp.send();
}



function GetDailyUpdates(date)
{
	///alert (date);
	message="";
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
					message = xmlhttp.responseText;
					//alert (message);
					
					
					message = message.split("###");
					
					//message = message.replace("true###", 'true');
					///  alert (message[0].trim());
					
					if(message[0].trim()=="true") {
						///alert("success");
						
					///	alert (message[4]);
						
						if(parent.document.getElementById("DvCalorieRemaining")!=null){
							parent.document.getElementById("DvCalorieRemaining").innerHTML=message[1];
						}
						
						
						if(parent.document.getElementById("DvGoal")!=null){
							parent.document.getElementById("DvGoal").innerHTML=message[2];
						}
						
						
						if(parent.document.getElementById("DvFood")!=null){
							parent.document.getElementById("DvFood").innerHTML=message[3];
						}
						
						
						if(parent.document.getElementById("DvExercise")!=null){
						parent.document.getElementById("DvExercise").innerHTML=message[4];
						}
						
						parent.document.getElementById("txtTotalExercise").value=message[4];
						
						if(parent.document.getElementById("DvNet")!=null){
						parent.document.getElementById("DvNet").innerHTML=message[5];
						}
						
						if(parent.document.getElementById("DvFoodCal")!=null){
						parent.document.getElementById("DvFoodCal").innerHTML=message[3];
						}
						
						
						if(parent.document.getElementById("DvBurntCal")!=null){
						parent.document.getElementById("DvBurntCal").innerHTML=message[4];
						}
						
					
						if(document.getElementById("dvDailyWater")!=null){
							parent.document.getElementById("dvDailyWater").innerHTML=message[6];
						}
						
						GetTotalFood(date);
						return false;
					}
					else
					{
					//
					}
				}
		}
		
	/// alert (hostname+"/includes/daily_updates.inc.php?date="+date);
	 xmlhttp.open("GET",hostname+"/includes/daily_updates.inc.php?date="+date, true);
	 xmlhttp.send();
}



function addwater()
{
	//// alert ("a");
		message="";
		if (window.XMLHttpRequest)
		{// for IE7+, Firefox, Chrome, Opera, Safaricodes
			xmlhttp = new XMLHttpRequest();
		}
		else
		{// code for IE6, IE5
			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
		
		////alert ("b");
		
		xmlhttp.onreadystatechange=function()
		{
			if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
				{
					message = xmlhttp.responseText;
//				   alert (message);
					
					if(message!="") {
						///alert("success");
						parent.document.getElementById("dvDailyWater").innerHTML=message;
					}
					
				}
		}
		
	 xmlhttp.open("GET",hostname+"/includes/daily_water_updates.inc.php", true);
	 xmlhttp.send();
}


