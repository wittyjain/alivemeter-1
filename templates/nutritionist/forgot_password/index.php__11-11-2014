<script type="text/javascript">
function Validation() {
var obj = document.getElementById("txtEmailID").value;
    if(obj == "")
    {
         alert ("Please enter your registered email ID.");
		 document.getElementById("txtEmailID").focus();
		 return false;
    }
}
</script>
<?php 
$string="";
if (isset($_POST['btnSubmit'])) {
	
	$email = trim(str_replace("'", "''", $_POST['txtEmailID']));
	
	$checkPassSql = "SELECT * FROM " . Doctor . " WHERE email='".$email."'";
//	echo $checkPassSql;
	$checkQuery = mysql_query($checkPassSql);
	$check = mysql_num_rows($checkQuery);
	if($check > 0){
		///Alert ($check);
		$user = mysql_fetch_array($checkQuery);
		
		$email = $user['email'];
		$password = $user['password'];
		$username = $user['doctor_name'];
		
		
		//$result = mysql_query($updatePassSql);
			#################################################################
				$strSubject="Forgot Password : Alivemeter";
				$string=$string."<table width='752px' border='0' cellspacing='0' cellpadding='0' style='font-family:Verdana, Arial, Helvetica, sans-serif;'>";
				$string=$string."<tr>";
				$string=$string."<td style='padding:15px 15px 0 15px; color:#000000; font-size:13px; line-height:18px;'><span style='color:#444444;'>Dear Member,</span></td>";
				$string=$string."</tr>";
				$string=$string."<tr>";
				$string=$string."<td style='padding:15px 15px 0 15px; color:#000000; font-size:13px; line-height:18px;'><span style='color:#444444;'>Dear ".$username.",</span></td>";
				$string=$string."</tr>";
				$string=$string."<tr>";
				$string=$string."<td style='padding:0 15px 15px 15px; color:#000000; font-size:13px; line-height:18px;'>According to our records we have received a request for forgot password for your email ID ".$email.". If there is any error please ignore or report spam at support@alivemeter.com</td>";
				$string=$string."</tr>";
				$string=$string."<tr>";
				$string=$string."<td style='padding:0 15px 15px 15px; color:#000000; font-size:13px; line-height:18px;'>Your login details are following :</td>";
				$string=$string."</tr>";
				$string=$string."<tr>";
				$string=$string."<td style='padding:0 15px 15px 15px; color:#000000; font-size:12px; line-height:18px;'>";
				$string=$string."<table width=35% border='0' cellspacing='0 cellpadding='0' style='font-family:Verdana, Arial, Helvetica, sans-serif; font-size:12px; color:#000000; '>";
					
					$query = "SELECT * FROM " . Doctor . " WHERE email='".$email."'";
				    //echo $query;
					$result = mysql_query($query);
					if($result != "") {
					$rowcount = mysql_num_rows($result);
					if($rowcount > 0) {
						while($row = mysql_fetch_assoc($result)) {
							extract($row); {
								$string=$string."<tr>";
								$string=$string."<td width='25%'><b>Email Id</b></td>";
								$string=$string."<td width='7%' align='center'>:</td>";
								$string=$string."<td width='68%'>".$row['email']."</td>";
								$string=$string."</tr>";
								$string=$string."<tr>";
								$string=$string."<td><b>Password</b></td>";
								$string=$string."<td width='7%' align='center' style='padding-bottom:15px;'>:</td>";
								$string=$string."<td>".$row['password']."</td>";
								$string=$string."</tr>";
				
				}}}
				
				$string=$string."</table>";
				$string=$string."</td>";
				$string=$string."</tr>";
				$string=$string."<tr>";
				$string=$string."<td style='padding:0 15px 15px 15px; color:#000000; font-size:13px; line-height:18px;'>To maintain security we would request you to change the password once you login, using the change password option on alivemeter.com</td>";
				$string=$string."</tr>";
				$string=$string."<tr>";
				$string=$string."<td style='padding:0 15px 15px 15px; color:#000000; font-size:13px; line-height:18px;'>We would love to hear from you about your experiences which will help build our product better. Please do write to us on support@aliveemeter.com or share your views on our social pages.</td>";
				$string=$string."</tr>";
				$string=$string."<tr>";
				$string=$string."<td style='padding:20px 15px 15px 15px; color:#666666; font-size:13px; line-height:18px; font-weight:bold;'><span style='color:#666666;'> - The Alivemeter Team</span></td>";
				$string=$string."</tr>";
				$string=$string."</table>";
				
				$strBody=$string;
			//echo $strBody;
				SendEmail("Alivemeter", "support@alivemeter.com",$email, $strSubject, $strBody);
		AlertandRedirect('Your password sent successfully to your email ID.', "index.php");
			#################################################################
		
	}
	
	
} 
else
	{
		AlertandRedirect('Provided Email ID is not available in database.', "page.php?dir=nutritionist/forgot_password");
	}

}	

?>
<section>
  <div class="banner_o1">
  
    <div class="dvFloat">
    
      <div class="dvWrapper" style="padding:35px 0;">
      <h1 class="f_red">Forgot Password</h1>
       <div style="margin:20px auto 0 auto; width:500px; border:solid 0px red;">
			 <form class="form-horizontal" method="post" id="frmRegStep1" name="frmRegStep1" enctype="multipart/form-data" onSubmit="javascript:return reistration_step2_validation('1');">
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
                    
               	
                    
                  
               
                </div>
                <div class="dvFloat formpadding" style="margin-bottom:40px;">
                  <div class="formlabel"> &nbsp;</div>
                  <div class="formcontrol">
                     <input type="submit" class="button1" id="btnSubmit" name="btnSubmit" value="Submit" style="float:left; margin-right:10px; cursor:pointer;" onclick="javascript:return Validation();"/>
                   
                  </div>
                </div>
                
              </div>
			  </form>
            </div>
      </div>
    </div>
  
  </div>
</section>
