<script type="text/javascript">

function CheckDuplicationMobile()
{

	
	var emailobj = document.getElementById("NewNo").value;

	document.getElementById("DvErrorDupMob").style.display="none";
	document.getElementById("DvErrorMobile").style.display="none";


		var message = "";
		if(document.getElementById("NewNo").value.trim() == "" || document.getElementById("NewNo").value.trim().length < 10 ) {
			document.getElementById("DvErrorMobile").style.display="";
			return false;
		}
		if(emailobj != "") {
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
					message = message.split('###');
					
					if(message[1] == "true") {
						
						document.getElementById("DvErrorDupMob").style.display="";
						document.getElementById("NewNo").focus();
						return false;
					}
					else	
					{
						
						if(document.getElementById("txt_Reg_Mobile_no").value.trim() == ""  || document.getElementById("NewNo").value.trim().length < 10) {
							document.getElementById("DvErrorMobile").style.display="";
							return false;
						}
						
						document.getElementById("DvErrorDupMob").style.display="none";
						
						return false;
					}
				}
			}
			
			xmlhttp.open("GET", hostname+"/includes/check_duplication.inc.php?tbl=Mobile&value="+emailobj, true);
			xmlhttp.send();
			return false;
		}
		return false;
	
}


function PasswordValidation()
{
	if(document.getElementById('OldNo').value=="")
	{
		alert("Please enter correct old mobile no.");
		document.getElementById('OldNo').focus();
		return false;
		
	}
	
	if(document.getElementById('NewNo').value=="")
	{
		alert("Please enter new mobile no.");
		document.getElementById('NewNo').focus();
		return false;
		
	}

	if(IsNumeric(document.getElementById('OldNo').value)==false || document.getElementById('OldNo').value.trim().length < 10 )
	{
		alert("Please enter valild mobile no.");
		document.getElementById('OldNo').focus();
		return false;
		
	}
	
	if(IsNumeric(document.getElementById('NewNo').value)==false || document.getElementById('NewNo').value.trim().length < 10 )
	{
		alert("Please enter valild mobile no.");
		document.getElementById('NewNo').focus();
		return false;
		
	}


	if(document.getElementById('OldNo').value==document.getElementById('NewNo').value)
	{
		alert("Please enter different old mobile number and new mobile number.");
		document.getElementById('OldNo').focus();
		return false;
		
	}
	
	
	
	
}

</script>
<?php 
$mobile_id=""; $user_id=""; $old_no=""; $new_no=""; $createdate=""; $randomno="";  $verify="";
if (isset($_POST['chnPass'])) { 
	
	//exit;

	

	$old_no = trim(str_replace("'", "''", $_POST['OldNo']));
	$new_no = trim(str_replace("'", "''", $_POST['NewNo']));
	$verify = trim(str_replace("'", "''", $_POST['txtVerify']));
	

	//$register_mobile=GetValue("select mobile as col from tbl_users where  isdeleted=0 and mobile='".$new_no."'", "col");

	//echo "select register_mobile as col from tbl_users where  isdeleted=0 and mobile='".$new_no."'";
 
	// if($register_mobile!="")
	// {
		//$strMsg="Sorry! Mobile no already registered.";
		//Alert($strMsg);
		 
	// }
	 //else
 	 //{
		$createdate=date('d-m-Y h:i:s');				
		$randomno = rand(0, 9999);
		$checkPassSql = "SELECT * FROM " . Users . " WHERE user_id =".$_SESSION['UserID'];
		$checkQuery = mysql_query($checkPassSql);
		$user = mysql_fetch_array($checkQuery);
		$user_name= $user['name'];
		$user_email = $user['user_email'];
		$old_no_db =$user['mobile'];
		$name =$user['name'];
		///Alert ($user_Password);
		//Alert ($old_no_db);
		//Alert ($old_no);
		
		if($old_no!=$old_no_db)
		{
			AlertandRedirect("Old mobile number entered by you doesn`t match with your registered mobile number", "page.php?dir=account/mobile_verification");
			return;
		}
		
		//Alert($old_no_db);
		//Alert($old_no);
		//Alert($new_no);
		
		
		
		$data = array(
			'user_id' => $_SESSION['UserID'], 
			'old_no' =>$old_no,
			'new_no' =>$new_no,
			'randomno' => $randomno,
			'createdate'=>$createdate,
			'verify' => 0,

		);

             $mobile_id = $db->insert_array(Mobile, $data);
		
		$messageText="Dear ".$user_name.", We have received mobile number change request for your registered account. Ignore if spam. Your verification code ".$randomno;
				$time=date('h:i:s');
				
				
				
				$url = "http://59.162.167.52/api/MessageCompose";
				
				$ch = curl_init();
				curl_setopt($ch, CURLOPT_URL, $url);
				curl_setopt($ch, CURLOPT_POSTFIELDS, 'admin=renish.paul@bloomtel.in&user=pinaki@alivemeter.com:ALIVEM&senderID=ALIVEM&receipientno='.$new_no.'&msgtxt='.$messageText.'&state=4');
				curl_setopt($ch, CURLOPT_POST, 1);
				curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
				$result = curl_exec($ch);

	
		
		/*
			    $to = $user_email;
				$strSubject="New Mobile Verification in Alivemeter.com";
				$string=""; 
				$string=$string."<table width='780px' border='0' cellpadding='0' cellspacing='0'>";
				$string=$string."<tr>";
				$string=$string."<td style='border: solid 12px #4ec8c8;'>";
				$string=$string."<table width='757px' border='0' cellpadding='0' cellspacing='0'>";
				$string=$string."<tr>";
				$string=$string."<td style='background-color: #FFF; height: 70px; border-bottom: solid 2px #4ec8c8;'>";
				$string=$string."<table width='757px' border='0' cellpadding='0' cellspacing='0'>";
				$string=$string."<tr>";
				$string=$string."<td style='padding-left: 17px; width: 159px; padding-bottom: 5px;'>";
				$string=$string."<a href='http://www.alivemeter.com/' target='_blank' style='color: #666666; text-decoration: underline;'><img src='$strHostName/images/brandnew.png' alt='' title='' border='0' /></a>";
				$string=$string."</td>";
				$string=$string."<td style='padding-right: 20px; padding-top: 10px; text-align: right; display: none;'>";
				$string=$string."<a href='https://www.facebook.com/pages/Alivemeter/687872857994981' target='_blank' style='color: #666666; text-decoration: underline;'><img src='http://www.alivemeter.com/images/socialmedia/facebook.png' alt='' title='' border='0' /></a>&nbsp;<a href='https://twitter.com/@alivemeter' target='_blank' style='color: #666666; text-decoration: underline;'><img src='http://www.alivemeter.com/images/socialmedia/twitter.png' alt='' title='' border='0' /></a>&nbsp;";
				$string=$string."</td>";
				$string=$string."</tr>";
				$string=$string."</table>";
				$string=$string."</td>";
				$string=$string."</tr>";
				$string=$string."<tr>";
				$string=$string."<td style='background-color: #f0f0f0;'>";
				
				$string=$string."<table width='757px' border='0' cellpadding='0' cellspacing='0'>";
				$string=$string."<tr>";
				$string=$string."<td style='padding: 20px 11px 10px 11px; text-align: justify; margin: 0px;'>";
				$string=$string."<p style='font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 13px; color: #99cc00; font-weight: bold; line-height: 20px; margin: 0px;'>Hey ".$name.",</p>";
				$string=$string."<p style='font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 13px; color: #666666; line-height: 20px; padding-top: 10px; margin: 0px;'>Following is your verification code </p>";                         
				
				                   
				$string=$string."</td>";
				$string=$string."</tr>";
				$string=$string."<tr>";
				$string=$string."<td style='padding: 5px 11px 0px 11px; text-align: justify; margin: 0px;'>";
				$string=$string."<table width='100%' border='0' cellspacing='0' cellpadding='0'>";
				$string=$string."<tr>";
				$string=$string."</tr>";
				$string=$string."<tr>";
				$string=$string."<td>";
				
				
				$string=$string."<p style='font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 13px; color: #666666; line-height: 20px; padding-top: 10px; margin: 0px;'>&bull; Verification Code is ".$randomno."</p>";
	
								
				$string=$string."<p style='font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 13px; color: #666666; line-height: 20px; padding-top: 10px; margin: 0px;'>We believe that our services will add value to you and your family. We would like to hear from you about your experiences, which will help us serve you better. Please write to us at support@alivemeter.com.</p>";
				
				
				$string=$string."</td>";				
				$string=$string."</tr>";
				$string=$string."<tr>";
				$string=$string."<td>";
				$string=$string."<p style='font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 13px; color: #666666; line-height: 20px; padding-top: 10px; margin: 0px;'>We wish you Health.Wealth.Happiness.</p>";
				$string=$string."</td>";
				$string=$string."</tr>";
				$string=$string."</table>";
				$string=$string."</td>";
				$string=$string."</tr>";
				$string=$string."<tr>";
				$string=$string."<td style='padding: 25px 11px 25px 11px; text-align: left; margin: 0px; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 13px; color: #666666; line-height: 20px; vertical-align: top;'>";
				$string=$string."<span style='color: #666666; font-weight: bold; font-size: 13px;'>- The Alivemeter Team</span><br />";
				$string=$string."</td>";
				$string=$string."</tr>";
				$string=$string."</table>";
				$string=$string."</td>";
				$string=$string."</tr>";
				$string=$string."</table>";
				$string=$string."</td>";
				$string=$string."</tr>";
				$string=$string."</table>"; 
				 
				$strBody=$string;
				
 //echo $user_email.$strBody;
//exit;
				SendEmail("Alivemeter Team", "support@alivemeter.com", $user_email, $strSubject, $strBody);*/
				//SendEmail("Alivemeter", "support@alivemeter.com",$Email, $strSubject, $strBody);
				Redirect($strHostName."/page.php?dir=account/verification");
				return;
			#################################################################
			
		}
	 
		//AlertandRedirect('Your new mobile no. does not match', $strHostName."/page.php?dir=account/mobile_verification");
	//}
	
	

?>
<section>
  <div class="banner_o1">
  
    <div class="dvFloat">
    
      <div class="dvWrapper" style="padding:35px 0;">
      <h1 class="f_red">Mobile Verification</h1>
       <div style="margin:20px auto 0 auto; width:500px; border:solid 0px red;">
			 <form class="form-horizontal" method="post" id="frmRegStep1" name="frmRegStep1" enctype="multipart/form-data" onSubmit="javascript:return PasswordValidation();">
              <div class="ali_div_right_step1">
                
                <div class="dvFloat">
                    
                    <div class="dvFloat formpadding">
                          <div class="formlabel">
                            <label class="formlabel">Old Mobile No. <span class="redtxt">*</span></label>
                          </div>
                          <div class="formcontrol">
                            <input type="text" name="OldNo" id="OldNo" value="<?php echo $old_no?>" maxlength="10"/>
                             
                          </div>
                    </div>
                    
               		<div class="dvFloat formpadding">
                          <div class="formlabel">
                            <label class="formlabel">New Mobile No. <span class="redtxt">*</span></label>
                          </div>
                          <div class="formcontrol">
                            <input type="text" name="NewNo" id="NewNo" value="<?php echo $new_no?>"  maxlength="10"/>
							<div id="DvErrorDupMob" class="warning" style="display:none; line-height:15px;">This mobile number is already registered. </div>
							<div id="DvErrorMobile" class="warning" style="display:none">Enter your mobile number.</div>
                          </div	>
                    </div>
                    
                    
                    <div class="dvFloat formpadding" style="display:none;">
                          <div class="formlabel">
                            <label class="formlabel">Verify. <span class="redtxt">*</span></label>
                          </div>
                          <div class="formcontrol">
                            <input type="hidden" name="txtVerify" id="txtVerify" value="<?php echo $verify?>" />
                          </div	>
                    </div>
                    
                    
               
                </div>
                <div class="dvFloat formpadding" style="margin-bottom:40px;">
                  <div class="formlabel"> &nbsp;</div>
                  <div class="formcontrol">
                     <input type="submit" class="button1" id="chnPass" name="chnPass" value="Submit" style="float:left; margin-right:10px; cursor:pointer;"/>
                   
                  </div>
                </div>
                
              </div>
			  </form>
            </div>
      </div>
    </div>
  
  </div>
</section>
