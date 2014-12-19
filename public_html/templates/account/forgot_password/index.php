<script type="text/javascript">
function ForgotValidation() {
    if(document.getElementById("txtEmailID").value=="" && document.getElementById("txtMobileNo").value=="" )
    {
         alert ("Please enter your registered email ID or registered mobile number");
		 document.getElementById("txtEmailID").focus();
		 return false;
    }

	if(document.getElementById("txtEmailID").value!="" && document.getElementById("txtMobileNo").value!="" )
    {
         alert ("Please enter one source for forgot password details");		
		 return false;
    }
}
</script>
<?php 
$string="";
$strmobile="false";
if (isset($_POST['btnSubmit'])) {

	$email = trim(str_replace("'", "''", $_POST['txtEmailID']));
	$mobile_no = trim(str_replace("'", "''", $_POST['txtMobileNo']));
	
	if($email!="")
	{
		$checkPassSql = "SELECT * FROM " . Users . " WHERE user_email='".$email."'";
		$checkQuery = mysql_query($checkPassSql);
		$check = mysql_num_rows($checkQuery);
		$strmobile="false";
	}
	else if($mobile_no !=""){
		$checkPassSql = "SELECT * FROM " . Users . " WHERE mobile='".$mobile_no."'";
		$checkQuery = mysql_query($checkPassSql);
		$check = mysql_num_rows($checkQuery);
		$strmobile="true";
	}
 
	if($check > 0){
		///Alert ($check);
		$user = mysql_fetch_array($checkQuery);
		
		$user_profile_id = $user['user_profile_id'];
		$user_main_id = $user['user_id'];
		$password = $user['password'];
		$username = $user['name'];


		
		$family_mem_count = GetValue("SELECT Count(*) as col FROM  ".Users." where parent_id=".$user_main_id." or (user_id=".$user_main_id.") order by name", "col"); 

		//echo "SELECT Count(*) as col FROM  ".Users." where parent_id=".$user_main_id." or (user_id=".$user_main_id.") order by name";
		//exit;
		
		////Alert ($family_mem_count);
		//$result = mysql_query($updatePassSql);
			#################################################################
				$strSubject="Forgot Password : Alivemeter";
				
				$string=$string."<table width='780px' border='0' cellpadding='0' cellspacing='0'>";
				$string=$string."<tr>";
				$string=$string."<td style='border: solid 12px #4ec8c8;'>";
				$string=$string."<table width='757px' border='0' cellpadding='0' cellspacing='0'>";
				$string=$string."<tr>";
				$string=$string."<td style='background-color: #FFF; height: 70px; border-bottom: solid 2px #4ec8c8;'>";
				$string=$string."<table width='757px' border='0' cellpadding='0' cellspacing='0'>";
				$string=$string."<tr>";
				$string=$string."<td style='padding-left: 17px; width: 159px; padding-bottom: 5px;'>";
				$string=$string."<a href='http://www.alivemeter.com/' target='_blank' style='color: #666666; text-decoration: underline;'><img src='http://www.alivemeter.com/images/brandnew.png' alt='' title='' border='0' /></a>";
				$string=$string."</td>";
				$string=$string."<td style='padding-right: 20px; padding-top: 10px; text-align: right; display: none;'>";
				$string=$string."<a href='https://www.facebook.com/pages/Alivemeter/687872857994981' target='_blank' style='color: #666666; text-decoration: underline;'><img src='www.alivemeter.com/images/socialmedia/facebook.png' alt='' title='' border='0' /></a>&nbsp;<a href='https://twitter.com/@alivemete' target='_blank' style='color: #666666; text-decoration: underline;'><img src='http://www.alivemeter.com/images/socialmedia/twitter.png' alt='' title='' border='0' /></a>";
				$string=$string."</td>";
				$string=$string."</tr>";
				$string=$string."</table>";
				$string=$string."</td>";
				$string=$string."</tr>";
				$string=$string."<tr>";
				$string=$string."<td style='background-color: #f0f0f0;'>";
				
				
				$string=$string."<table width='752px' border='0' cellspacing='0' cellpadding='0' style='font-family:Verdana, Arial, Helvetica, sans-serif;'>";
				$string=$string."<tr>";
				$string=$string."<td style='padding:15px 15px 0 15px; color:#000000; font-size:13px; line-height:18px;'><span style='color:#444444;'>Dear ".$username.",</span><br></td>";
				$string=$string."</tr>";
				$string=$string."<tr>";
				$string=$string."<td style='padding:0 15px 15px 15px; color:#000000; font-size:13px; line-height:18px;'>According to our records we have received a request for forgot password for your email ID ".$email.". If there is any error please ignore or report spam at support@alivemeter.com</td>";
				$string=$string."</tr>";
				$string=$string."<tr>";
				$string=$string."<td style='padding:0 15px 15px 15px; color:#000000; font-size:13px; line-height:18px;'>We have ".$family_mem_count." account(s) aligned to your email ID and find below details of all the accounts:</td>";
				$string=$string."</tr>";
				$string=$string."<tr>";
				$string=$string."<td style='padding:0 15px 15px 15px; color:#000000; font-size:12px; line-height:18px;'>";
				$string=$string."<table width='35%' border='0' cellspacing='0 cellpadding='0' style='font-family:Verdana, Arial, Helvetica, sans-serif; font-size:12px; color:#000000; '>";
					

 
				if($strmobile=="true")
				{
					
					$messageText="Hi ".$username.",We have received forgot password request for your number ".$mobile_no.". ".$family_mem_count." account(s) are aligned to your number. We will send password in next SMS";
				$time=date('h:i:s');

				 //Alert($messageText);

					$url = "http://59.162.167.52/api/MessageCompose";
					
					$ch = curl_init();
					curl_setopt($ch, CURLOPT_URL, $url);
					curl_setopt($ch, CURLOPT_POSTFIELDS, 'admin=renish.paul@bloomtel.in&user=pinaki@alivemeter.com:ALIVEM&senderID=ALIVEM&receipientno='.$mobile_no.'&msgtxt='.$messageText.'&state=4');
					curl_setopt($ch, CURLOPT_POST, 1);
					curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
					curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
					$result_msg = curl_exec($ch);
				}

				if($strmobile=="false"){
					$query = "SELECT * FROM " . Users . " WHERE user_email='".$email."'";
				    $result = mysql_query($query);
					 if($result != "") {
						$rowcount = mysql_num_rows($result);
					 }

				}
					if($strmobile=="true"){
						$query = "SELECT * FROM " . Users . " WHERE mobile='".$mobile_no."'";				
						 
						 $result = mysql_query($query);
						if($result != "") {
							$rowcount = mysql_num_rows($result);
							$strmobile="true";
						}
					}
					if($result != "") {
					if($rowcount > 0) {
						while($row = mysql_fetch_assoc($result)) {
							extract($row); {
								if($strmobile=="true")
								{

									$messageText="Name - ".$row['name'].", ID - ".$row['user_profile_id'].", Password - ".$converter->decode($row['password']);

									//Alert($messageText);
									$time=date('h:i:s');

									$url = "http://59.162.167.52/api/MessageCompose";
									
									$ch = curl_init();
									curl_setopt($ch, CURLOPT_URL, $url);
									curl_setopt($ch, CURLOPT_POSTFIELDS, 'admin=renish.paul@bloomtel.in&user=pinaki@alivemeter.com:ALIVEM&senderID=ALIVEM&receipientno='.$mobile.'&msgtxt='.$messageText.'&state=4');
									curl_setopt($ch, CURLOPT_POST, 1);
									curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
									curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
									$result_msg = curl_exec($ch);
								}
								$string=$string."<tr>";
								$string=$string."<td width='25%'><b>Name</b></td>";
								$string=$string."<td width='7%' align='center'>:</td>";
								$string=$string."<td width='68%'>".$row['name']."</td>";
								$string=$string."</tr>";
								$string=$string."<tr>";
								$string=$string."<td width='25%'><b>Username</b></td>";
								$string=$string."<td width='7%' align='center'>:</td>";
								$string=$string."<td width='68%'>".$row['user_profile_id']."</td>";
								$string=$string."</tr>";
								$string=$string."<tr>";
								$string=$string."<td><b>Password</b></td>";
								$string=$string."<td width='7%' align='center' style='padding-bottom:0px;'>:</td>";
								$string=$string."<td>".$converter->decode($row['password'])."</td>";
								$string=$string."</tr>";
				
				}}}
				
				$string=$string."</table>";
				$string=$string."</td>";
				$string=$string."</tr>";
				$string=$string."<tr>";
				$string=$string."<td style='padding:0 15px 15px 15px; color:#000000; font-size:13px; line-height:18px;'>To maintain security we would request you to change the password once you login, using the change password option on alivemeter.com</td>";
				$string=$string."</tr>";
				$string=$string."<tr>";
				$string=$string."<td style='padding:0 15px 15px 15px; color:#000000; font-size:13px; line-height:18px;'>We would love to hear from you about your experiences which will help build our product better. Please do write to us on support@alivemeter.com or share your views on our social pages.</td>";
				$string=$string."</tr>";
				$string=$string."<tr>";
				$string=$string."<td style='padding:20px 15px 15px 15px; color:#666666; font-size:13px; line-height:18px; font-weight:bold;'><span style='color:#666666;'> - The Alivemeter Team</span></td>";
				$string=$string."</tr>";
				$string=$string."</table>";
				
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
		//echo $strBody;
		//exit;
			if($strmobile=="false")
			{
				SendEmail("Alivemeter", "support@alivemeter.com",$email, $strSubject, $strBody);
			    AlertandRedirect('Your password sent successfully to your email ID.', "index.php");
			}
			else
			{
				AlertandRedirect('Your password sent successfully to your Mobile No.', "index.php");
			}
			#################################################################
		
	}
	
	
} 
else
	{
		AlertandRedirect('Provided Email ID or Mobile No is not available in database.', "page.php?dir=account/forgot_password");
	}

}	

?>
<section>
  <div class="banner_o1">
  
    <div class="dvFloat">
    
      <div class="dvWrapper" style="padding:35px 0;">
      <h1 class="f_red">Forgot Password</h1>
       <div style="margin:20px auto 0 auto; width:500px; border:solid 0px red;">
			 <form class="form-horizontal" method="post" id="frmRegStep1" name="frmRegStep1" enctype="multipart/form-data" onSubmit="javascript:return ForgotValidation();">
              <div class="ali_div_right_step1">
                
                <div class="dvFloat">
                    
                    <div class="dvFloat formpadding">
                          <div class="formlabel">
                            <label class="formlabel">Email ID <span class="redtxt">*</span></label>
                          </div>
                          <div class="formcontrol">
                            <input type="text" name="txtEmailID" id="txtEmailID" value="" />
                          </div>
                    </div>

					 <div class="dvFloat formpadding" style="text-align:center;margin-left:70px;">
						OR 
					 </div>
                    
               		  <div class="dvFloat formpadding">
                          <div class="formlabel">
                            <label class="formlabel">Mobile No <span class="redtxt">*</span></label>
                          </div>
                          <div class="formcontrol">
                            <input type="text" name="txtMobileNo" id="txtMobileNo" value="" maxlength="10"/>
                          </div>
                    </div>
                    
                    
                  
               
                </div>
                <div class="dvFloat formpadding" style="margin-bottom:40px;">
                  <div class="formlabel"> &nbsp;</div>
                  <div class="formcontrol">
                     <input type="submit" class="button1" id="btnSubmit" name="btnSubmit" value="Submit" style="float:left; margin-right:10px; cursor:pointer;"/>
                   
                  </div>
                </div>
                
              </div>
			  </form>
            </div>
      </div>
    </div>
  
  </div>
</section>
