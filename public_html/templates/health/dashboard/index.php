<link href="<?php echo $strHostName;?>/style/main.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="<?php echo $strHostName;?>/style/tabcontent.css" />
<link href="<?php echo $strHostName;?>/style/jupiter.css" rel="stylesheet" type="text/css">
<script type="text/javascript"  language="javascript" src="<?php echo $strHostName;?>/js/jquery-1.7.1.min.js"></script>
<script type="text/javascript"  language="javascript" src="<?php echo $strHostName;?>/js/jquery.jcarousel.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo $strHostName;?>/style/tabcontent.css" />
<script type="text/javascript" src="<?php echo $strHostName;?>/js/tabcontent.js"></script>
<link href="<?php echo $strHostName;?>/css/skin.css" rel="stylesheet" type="text/css"/>
<script language="JavaScript" src="<?php echo $strHostName;?>/js/PopUp.js" type="text/javascript"></script>

<link rel="stylesheet" href="<?php echo $strHostName;?>/css/example.css" type="text/css">
<link rel="stylesheet" href="<?php echo $strHostName;?>/css/dropkick.css" type="text/css">
<script src="<?php echo $strHostName;?>/js/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo $strHostName;?>/js/jquery.dropkick-1.0.0.js" type="text/javascript"></script>
<script type="text/javascript" charset="utf-8">
	$(function () {
	  $('.existing_event').dropkick({
		change: function () {
		  $(this).change();
		}
	  });
	});
</script>

<style type="text/css">
.hover {
	position:absolute;
	padding-left: 5px;
}
.tooltip { /* hide and position tooltip */
	background-image:url(images/nutritionist/popup_img.png);
	background-repeat:no-repeat;
	color: 000;
	opacity:0;
	position:absolute;
	-webkit-transition: opacity 0.5s;
	-moz-transition: opacity 0.5s;
	-ms-transition: opacity 0.5s;
	-o-transition: opacity 0.5s;
	transition: opacity 0.5s;
	width: 483px;
	height: 178px;
	z-index:1;
	margin: -100px 0px 0px 20px;
	padding: 19px 0px 0px 29px;
	text-align: left;
}
.hover:hover .tooltip { /* display tooltip on hover */
	opacity:1;
}
</style>
<script type="text/javascript">
	
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
					document.getElementById("divtab9").innerHTML = xmlhttp.responseText;
					document.getElementById("divtab10").innerHTML = xmlhttp.responseText;
					document.getElementById("divtab11").innerHTML = xmlhttp.responseText;
					document.getElementById("divtab12").innerHTML = xmlhttp.responseText;
				}
			}
		
			xmlhttp.open("GET","sub_tabs.html",true);
			xmlhttp.send();
	}
</script>

<script type="text/javascript" src="<?php echo $strHostName;?>/js/ddaccordion.js"></script>
<script type="text/javascript">

ddaccordion.init({
	headerclass: "mypetsA", 
	contentclass: "thepetA",
	collapseprev: true, 
	defaultexpanded: [0],
	animatedefault: false,
	persiststate: false, 
	toggleclass: ["", "openpet"], 
	togglehtml: ["none", "", ""], 
	animatespeed: "fast", 
	oninit:function(headers, expandedindices){ 
		 for (var i=0; i<expandedindices.length; i++){
  			var expandedindex=expandedindices[i] 
  			headers[expandedindex].style.backgroundColor=''
  			headers[expandedindex].style.color='#666666'
		 }
	}
})

</script>

<link rel="stylesheet" type="text/css" href="<?php echo $strHostName;?>/style/health_dashboard_tabcontent.css" />
<script type="text/javascript" src="<?php echo $strHostName;?>/js/tabcontent.js"></script>
<link href="<?php echo $strHostName;?>/style/reset.css" rel="stylesheet" type="text/css">
<link href="<?php echo $strHostName;?>/style/fonts.css" rel="stylesheet" type="text/css">
<link href="<?php echo $strHostName;?>/style/bxslider.css" rel="stylesheet" type="text/css">
<link href="<?php echo $strHostName;?>/style/paging_style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" language="javascript" src="<?php echo $strHostName;?>/js/scrolltopcontrol.js"></script>
<link href="<?php echo $strHostName;?>/style/bhupali.css" rel="stylesheet" type="text/css">
<link type="text/css" rel="stylesheet" href="<?php echo $strHostName;?>/css/style.css" />
<link href="<?php echo $strHostName;?>/style/jupiter.css" rel="stylesheet" type="text/css">
<link href="<?php echo $strHostName;?>/style/calendar.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="<?php echo $strHostName;?>/js/cal.js"></script>
<script type="text/javascript">
$(document).ready(function(){
$(".trigger").click(function(){
$(".panel").toggle("fast");
$(this).toggleClass("active");
return false;
});
});
</script>
<style>
b {
	font-weight:bold
}
</style>
<script type="text/javascript">
jQuery(document).ready(function () {
	
	$('input.one').simpleDatepicker({ startdate: 1900, enddate: 2050 });
	$('input.two').simpleDatepicker({ startdate: 2008, enddate: 2012 });
	$('input.three').simpleDatepicker({ chosendate: '9/9/2010', startdate: '6/10/2008', enddate: '7/20/2011' });
	$('input.four').simpleDatepicker({ x: 45, y: 3 });
});
</script>
<script type="text/javascript">
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
function showform(){ document.getElementById('divShowHideForm').style.display = 'block'; }
function showCancel(){ document.getElementById('divShowHideForm').style.display = 'none'; 
document.getElementById("txt_HD_Medicine").focus();
}
</script>


<!--<script type="text/javascript" src="lib/jquery-1.10.1.min.js"></script>-->
<script type="text/javascript" src="<?php echo $strHostName;?>/lib/jquery.mousewheel-3.0.6.pack.js"></script>
<script type="text/javascript" src="<?php echo $strHostName;?>/source/jquery.fancybox.js?v=2.1.5"></script>
<link rel="stylesheet" type="text/css" href="<?php echo $strHostName;?>/source/jquery.fancybox.css?v=2.1.5" media="screen" />
<link rel="stylesheet" type="text/css" href="<?php echo $strHostName;?>/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" />
<script type="text/javascript" src="<?php echo $strHostName;?>/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script src="<?php echo $strHostName?>/js/highcharts.js"></script>


<?php
	//doc_consult 
				$doc_consult_count =GetValue("select Count(*)  as col from tbl_doc_consult  where user_id=".$_SESSION['UserID']." and isactive=1 and isdeleted=0 ","col");
				$doc_consult_count_na=GetValue("select Count(*) as col from tbl_user_not_applicable where user_id=".$_SESSION['UserID']." and isactive=1 and isdeleted=0 and type='Doc_Consult'","col");
				$doc_consult_count=$doc_consult_count+	$doc_consult_count_na;
			
				
				//medication 
				$medication_count =GetValue("select Count(*)  as col from tbl_medication  where user_id=".$_SESSION['UserID']." and isactive=1 and isdeleted=0 ","col");
				$medication_count_na=GetValue("select Count(*) as col from tbl_user_not_applicable where user_id=".$_SESSION['UserID']." and isactive=1 and isdeleted=0 and type='Medication'","col");
				$medication_count=$medication_count+$medication_count_na;


				//allergies 
				$allergies_count =GetValue("select Count(*)  as col from tbl_allergies  where user_id=".$_SESSION['UserID']." and isactive=1 and isdeleted=0 ","col");
				$allergies_count_na=GetValue("select Count(*) as col from tbl_user_not_applicable where user_id=".$_SESSION['UserID']." and isactive=1 and isdeleted=0 and type='Allergies'","col");
				$allergies_count=$allergies_count+$allergies_count_na;
				
				
				//hospitalization 
				$hospitalization_count =GetValue("select Count(*)  as col from tbl_hospital  where user_id=".$_SESSION['UserID']." and isactive=1 and isdeleted=0 ","col");
				$hospitalization_count_na=GetValue("select Count(*) as col from tbl_user_not_applicable where user_id=".$_SESSION['UserID']." and isactive=1 and isdeleted=0 and type='Hospitalization'","col");
				$hospitalization_count=$hospitalization_count+$hospitalization_count_na;
				
				
				
				//immunization 
				$immunization_count =GetValue("select Count(*)  as col from tbl_immunization  where user_id=".$_SESSION['UserID']." and isactive=1 and isdeleted=0 ","col");
				$immunization_count_na=GetValue("select Count(*) as col from tbl_user_not_applicable where user_id=".$_SESSION['UserID']." and isactive=1 and isdeleted=0 and type='Immunization'","col");
				$immunization_count=$immunization_count+$immunization_count_na;
				
				//immunization 
				$immunization_count =GetValue("select Count(*)  as col from tbl_immunization  where user_id=".$_SESSION['UserID']." and isactive=1 and isdeleted=0 ","col");
				$immunization_count_na=GetValue("select Count(*) as col from tbl_user_not_applicable where user_id=".$_SESSION['UserID']." and isactive=1 and isdeleted=0 and type='Immunization'","col");
				$immunization_count=$immunization_count+$immunization_count_na;
				
				
				//Health_Problems 
				$health_problem_count =GetValue("select Count(*)  as col from tbl_health_problem  where user_id=".$_SESSION['UserID']." and isactive=1 and isdeleted=0 ","col");
				$health_problem_count_na=GetValue("select Count(*) as col from tbl_user_not_applicable where user_id=".$_SESSION['UserID']." and isactive=1 and isdeleted=0 and type='Health_Problems'","col");
				$health_problem_count=$health_problem_count+$health_problem_count_na;
				
				
				//Family_History 
				$family_history_count =GetValue("select Count(*)  as col from tbl_family_history  where user_id=".$_SESSION['UserID']." and isactive=1 and isdeleted=0 ","col");
				$family_history_count_na=GetValue("select Count(*) as col from tbl_user_not_applicable where user_id=".$_SESSION['UserID']." and isactive=1 and isdeleted=0 and type='Family_History'","col");
				$family_history_count=$family_history_count+$family_history_count_na;
			
				
				//Blood_Pressure 
				$blood_pressure_count =GetValue("select Count(*)  as col from tbl_blood_pressure  where user_id=".$_SESSION['UserID']." and isactive=1 and isdeleted=0 ","col");
				$blood_pressure_count_na=GetValue("select Count(*) as col from tbl_user_not_applicable where user_id=".$_SESSION['UserID']." and isactive=1 and isdeleted=0 and type='Blood_Pressure'","col");
				$blood_pressure_count=$blood_pressure_count+$blood_pressure_count_na;
			
			
				//sugar_profile 
				$sugar_profile_count =GetValue("select Count(*)  as col from tbl_sugar_profile where user_id=".$_SESSION['UserID']." and isactive=1 and isdeleted=0 ","col");
				$sugar_profile_count_na=GetValue("select Count(*) as col from tbl_user_not_applicable where user_id=".$_SESSION['UserID']." and isactive=1 and isdeleted=0 and type='Sugar_Profile'","col");
				$sugar_profile_count=$sugar_profile_count+$sugar_profile_count_na;
				
			
				//Life_Style 
				$life_style_count =GetValue("select Count(*)  as col from tbl_life_style where user_id=".$_SESSION['UserID']." and isactive=1 and isdeleted=0 ","col");
				$life_style_count_na=GetValue("select Count(*) as col from tbl_user_not_applicable where user_id=".$_SESSION['UserID']." and isactive=1 and isdeleted=0 and type='Life_Style'","col");
				$life_style_count=$life_style_count+$life_style_count_na;
				
				
				
				//Lipid_Profile 
				$lipid_profile_count =GetValue("select Count(*)  as col from tbl_lipid_profile where user_id=".$_SESSION['UserID']." and isactive=1 and isdeleted=0 ","col");
				$lipid_profile_count_na=GetValue("select Count(*) as col from tbl_user_not_applicable where user_id=".$_SESSION['UserID']." and isactive=1 and isdeleted=0 and type='Lipid_Profile'","col");
				$lipid_profile_count=$lipid_profile_count+$lipid_profile_count_na;
				
				$rewardapp=GetValue("select user_id as col from tbl_total_reward_points where type='Health_Setup'", "col");
				
				if ($doc_consult_count > 0 && $medication_count > 0 && $allergies_count > 0  && $hospitalization_count > 0 && $immunization_count > 0 && $health_problem_count > 0 && $family_history_count > 0 && $blood_pressure_count > 0 && $sugar_profile_count > 0 && $life_style_count > 0 && $lipid_profile_count > 0 && $rewardapp=="")
				{
						
						$date=date('Y-m-d');
		
						$data = array(
							'user_id'=>$_SESSION['UserID'],
							'type'=>'Health_Setup',
							'reward_points'=>25,
							'common_id'=>$_SESSION['UserID'],
							'created_date'=>$date,
							'isactive'=>1,
							'isdeleted'=>0,
							
						);
						$id = $db->insert_array(Total_Reward_Points, $data);		
				}

?>
<?php include "includes/dashboard_top.inc.php";?>


<section> 
<div class="cal_full_size">


<div class="cal_12 m_outo">

  <?php include "includes/dashboard_links.inc.php";?>
  <div class="dvFloat">
    <div class="dvWrapper">
      <div style=" padding:0px 0px 35px 0px">
         		<?php include "includes/dashboard_left.inc.php";?>
        	<div class="health_dashboard_div_right" style="width: 804px;">
        		<?php include "includes/dashboard_sublinks.inc.php";?>
    		<div class="DvFloat">
				<?php include "includes/calorie_counter.inc.php";?>
                <?php include "includes/daily_report_card.inc.php";?>
                <?php include "includes/calorie_chart.inc.php";?>
         	</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div></div>
</section>  
 



<script type="text/javascript">



var countries=new ddtabcontent("tabstabs");
countries.setpersist(true);
countries.setselectedClassTarget("link"); //"link" or "linkparent"
countries.init();


var countries_report=new ddtabcontent("tabstabs1");
countries_report.setpersist(true);
countries_report.setselectedClassTarget("link"); //"link" or "linkparent"
countries_report.init();

var countries_report=new ddtabcontent("tabstabs2");
countries_report.setpersist(true);
countries_report.setselectedClassTarget("link"); //"link" or "linkparent"
countries_report.init();

</script>
<script type="text/javascript">
DefaultShow();
</script>
<script>
	///Pres_Report_Show_Hide();
 
    //Intake_Reminder_Show_Hide();
	//Purchase_Reminder_Show_Hide();
	///Daily_Frequency_enabledisable();
    </script>
