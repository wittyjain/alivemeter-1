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

function Send_SMS(memberid)
{
	document.getElementById("txtMemberIDSMS").value=memberid;
	Popup.showModal('dvpopup-senssms',null,null,{'screenColor':'#333333','screenOpacity':.6});
}

var count = "159";
//Example: var count = "175";
function limiter(){
var tex = document.myform.comment.value;
var len = tex.length;
if(len > count){
tex = tex.substring(0,count);
document.myform.comment.value =tex;
return false;
}
document.myform.limit.value = count-len;
}



function SendUserSMS()
{
	//alert ("dfdf");
	
	if(document.getElementById("comment").value=="")
	{
		alert ("Please enter message.");
		document.getElementById("comment").focus();
		return false;
	}
	
	nut_sms=document.getElementById("comment").value;
	member_id=document.getElementById("txtMemberIDSMS").value;
	//nut_id=document.getElementById("txtNutritionistLogID").value;
	
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
				//alert(message);
				alert ("SMS sent successfully.");
		
	document.getElementById("comment").value="";
	
	redirectURL(window.location.href);
				if(message!="") {
				///	alert ("duplicate date!");
					//parent.document.getElementById("dvDailyWater").innerHTML=message;
				}
				
			}
	}
	
	///alert (hostname+"/includes/send_nut_sms.inc.php?nut_sms="+nut_sms+"&member_id="+member_id);
	
	 xmlhttp.open("GET",hostname+"/includes/send_nut_sms.inc.php?nut_sms="+nut_sms+"&member_id="+member_id, true);
	 xmlhttp.send();
	 
	
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
            
       <div style="float:left;width:100%;border:solid 0px red">
			<div style="width:500px;padding-left:120px;padding-bottom:50px;">
				<div class="dvFloat" style="border:solid 0px red; float:left; text-align:left; margin-bottom:0px; margin-right:3px; padding-left:8px;">
					<a onClick="javascript:SetScroll(); Send_SMS('<?php echo $converter->decode($_GET['patient_id']) ?>');" style="cursor:pointer; font-size:13px; text-transform:none;padding:8px 30px 8px 30px;background:#666666;color:#fff" >Send SMS</a>
					
				</div>
			</div>
	   </div>
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



<div id="dvpopup-senssms" style="text-align: center; width: 623px; display: none; position:absolute; margin-top:65px; margin-left:350px; background-color:#fff; padding:10px;">
      
             <div style="margin: 0px 0px 0px 600px; position: absolute; text-align:right; float: right"> <a href="javascript:Popup.hide('dvpopup-senssms');" target="_parent" style="text-decoration: none; color: #fff; border: solid 0px #993300;"> <img src="images/close.png" alt="" title="" border="0" /> </a> 
            </div>
              
              <div class="dvFloat">
              		
                    <div class="dvFloat" style="padding:4px; background-color:#99cc00; color:#fff; text-align:left;">
                    	Sens SMS 
                    </div>
                    
                     <div class="dvFloat" style="padding:4px; text-align:left; margin-top:15px;">
                    	<div style="float:left; width:30%;">Message</div>
                        <div style="float:left; width:50%;">
                       
                       <form name="myform" METHOD=POST>
<textarea name="comment" id="comment"  wrap="physical" rows="3" cols="40" onkeyup="limiter()"></textarea><br>

<script type="text/javascript">
document.write("<span style='line-height:30px;'>Character left :</span> <input type='text' name='limit' size='4' style='border:0px; background:none; box-shadow:none; width:220px; float:right;' readonly value="+count+">");
</script>

 <input type="hidden" name="txtMemberIDSMS" id="txtMemberIDSMS" value="" />
 
 
</form>


                       
                      </div>
                        
                  </div>
                
                              
                    
                  
                    
                     <div class="dvFloat" style="padding:4px; text-align:left;">
                    	<div style="float:left; width:30%;">&nbsp;</div>
                        <div style="float:left; width:50%;"> <a class="button2" style="width:80px; cursor: pointer;" onclick="javascript:SendUserSMS();">Send</a></div>
                        
                    </div>
                
              
              </div>
              
              
            </div>