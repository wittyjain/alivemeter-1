<?php
if(!isset($_SESSION['UserNutID']))
{
	Alertandredirect("Sorry! Session is expired.", 'index.php');
}
?>
<script type="text/javascript" src="<?php echo $strHostName?>/js/health_steup_insert_retrive.js"></script>

<script>
function shownutform()
{ 
	document.getElementById('ShowNutDiv1').style.display = 'block';
	
	document.getElementById('HideNutDivLink').style.display = ''; 
	
	document.getElementById('ShowNutDivLink').style.display = 'none'; 
	
	
	
}

function showNutCancel()
{ 
	document.getElementById('ShowNutDiv1').style.display = 'none'; 
	
		document.getElementById('ShowNutDivLink').style.display = ''; 
	
		document.getElementById('HideNutDivLink').style.display = 'none'; 
	
}
</script>

 <link rel="stylesheet" type="text/css" href="<?php echo $strHostName;?>/style/calorie_tabcontent1.css" />
<?php

if(isset($_GET['patient_id'])){
	$patient_id=$converter->decode($_GET['patient_id']);
	/// for setting sesstion for user in iframe
	$_SESSION['UserID']=$patient_id;
}
else
{
	$patient_id=0;
}

//Alert ($patient_id);

?>
<div id="divShowHideForm">
  <section>  
  <div class="top_ou">
    <div class="top_in">
      <div class="top">
       <?php if($_SESSION['UserType']=="Nutritionist") { ?>
      		<div class="DvFloat" style="border-bottom: solid 1px #c5c5c5; padding-top:20px; float:left;">
            	<div style="width: 50%; float: left; margin-bottom: 0px;"><h1 class="f_red" style="text-align: left; font-size: 18px;  margin-bottom: 7px;">USER DETAILS</h1></div>
                <div style="width: 50%; float: right; text-align: right; margin-bottom: -3px;">
           	    	<div style=" width:190px; height:20px; float:right;"> <a href="<?php echo $strHostName?>/page_doctor.php?dir=nutritionist/client_details" class="buttonreset" style="text-align:center">BACK TO CLIENT PROFILE</a></div>
                </div>
            </div>
       <?php } ?>
       
			<?php include "includes/patient_details.inc.php";?>
            
       
        <div class="DvFloat">
                    	<div class="DvFloat" style="border: solid 0px #0066CC;">
                        <ul id="countrytabs" class="shadetabs2">
                            <li><a href="#" rel="country1" class="selected">Client Profile</a></li>
                            <li><a href="#" rel="country2">Calorie Counter</a></li>
                            <li><a href="#" rel="country3">User Food Choices</a></li>
                            <li><a href="#" rel="country4">Diet Plan</a></li>
                        </ul>
        
                        <div style="border: 0px solid gray; width: 965px; float: left; margin-bottom: 1em; padding: 10px 0px; background-color: #FFFFFF; color: #666666;">
                                    <div id="country1" class="tabcontent">
                                     <div class="DvFloat" style="border-bottom: solid 1px #e4e4e4;border-top: solid 0px #e4e4e4; margin:0px 0px 30px 0px">
                            <a  onClick="shownutform();" style="cursor:pointer"><img src="images/nutritionist/add_12.png" alt="" title="" border="0" style="float:left; margin-right:10px; margin-top: 7px; vertical-align: middle;"  id="ShowNutDivLink"></a>
                             <a  onClick="showNutCancel();" style="cursor:pointer">
                    	<img src="images/nutritionist/add_11.png" alt="" title="" border="0" style="float:left; margin-right:10px; margin-top: 7px; vertical-align: middle; display:none;"  id="HideNutDivLink">
                    </a>
          <h1 class="f_red" style="text-align: left; font-size: 18px; font-weight:bold;  margin: 7px;">Patient Complete Details</h1>
        </div>
        <div class="DvFloat" id="ShowNutDiv1" style="display:none;">
        <iframe src="<?php echo $strHostName?>/page.php?dir=health/dashboard&patient_id=<?php echo $patient_id;?>" frameborder="0" scrollbars="0" style="width:1020px; height:800px;"></iframe>
        </div>
           
                                    </div>
                                    
                                    <div id="country2" class="tabcontent">
                                    	<?php include "includes/suggestion.inc.php";?>
                                    	 <?php include "includes/nutritionist_calorie_counter.inc.php";?>
                                    </div>
                                    
                                    <div id="country3" class="tabcontent">
                                   		 <?php include "includes/user_food_choice.inc.php";?>
                                    </div>
                                    
                                    <div id="country4" class="tabcontent">
                                    	
                                  		<?php include "includes/diet_plan.inc.php";?>
                                    </div>
                                </div>
                    </div>
                    </div>
                    
                    
          
	  
     </div>
    </div>
  </div>
</div>
</div>
</div>
</section>
</div>
<script type="text/javascript">
var countries=new ddtabcontent("countrytabs")
countries.setpersist(true)
countries.setselectedClassTarget("link") //"link" or "linkparent"
countries.init()

</script>

<script type="text/javascript">
var countrynutri=new ddtabcontent("countrynutri")
countrynutri.setpersist(true)
countrynutri.setselectedClassTarget("link") //"link" or "linkparent"
countrynutri.init()

</script>
<script type="text/javascript">
var countries1=new ddtabcontent("tabstabs1");
countries1.setpersist(true);
countries1.setselectedClassTarget("link"); //"link" or "linkparent"
countries1.init();
</script>
<script type="text/javascript">

var countries=new ddtabcontent("nutri_fc_tab");
countries.setpersist(true);
countries.setselectedClassTarget("link"); 
countries.init();

</script>
<script>RetriveReocrds_Main('Diet_Plan','dvDietPlan');</script>