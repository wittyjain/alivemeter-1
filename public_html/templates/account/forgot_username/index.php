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
	
	$checkPassSql = "SELECT * FROM " . Users . " WHERE user_email='".$email."'";
//	echo $checkPassSql;
	$checkQuery = mysql_query($checkPassSql);
	$check = mysql_num_rows($checkQuery);
	if($check > 0){
		///Alert ($check);
		$user = mysql_fetch_array($checkQuery);
		
		$user_profile_id = $user['user_profile_id'];
		$password = $user['password'];
		$username = $user['name'];
		
		$family_mem_count = GetValue("SELECT Count(*) as col FROM  ".Users." where parent_id=".$user_main_id." or (user_id=".$user_main_id.") order by name", "col"); 
		//$result = mysql_query($updatePassSql);
			#################################################################
				$strSubject="Forgot Username : Alivemeter";
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
				$string=$string."<a href='#' target='_blank' style='color: #666666; text-decoration: underline;'><img src='www.alivemeter.com/images/socialmedia/facebook.png' alt='' title='' border='0' /></a>&nbsp;<a href='#' target='_blank' style='color: #666666; text-decoration: underline;'><img src='http://www.alivemeter.com/images/socialmedia/twitter.png' alt='' title='' border='0' /></a>&nbsp;<a href='#' target='_blank' style='color: #666666; text-decoration: underline;'><img src='http://www.alivemeter.com/images/socialmedia/google_plus.png' alt='' title='' border='0' /></a>&nbsp;<a href='#' target='_blank' style='color: #666666; text-decoration: underline;'><img src='http://www.alivemeter.com/images/socialmedia/blog.png' alt='' title='' border='0' /></a>&nbsp;<a href='#' target='_blank' style='color: #666666; text-decoration: underline;'><img src='http://www.alivemeter.com/images/socialmedia/youtube.png' alt='' title='' border='0' /></a>";
				$string=$string."</td>";
				$string=$string."</tr>";
				$string=$string."</table>";
				$string=$string."</td>";
				$string=$string."</tr>";
				$string=$string."<tr>";
				$string=$string."<td style='background-color: #f0f0f0;'>";
				
				
				$string=$string."<table width='752px' border='0' cellspacing='0' cellpadding='0' style='font-family:Verdana, Arial, Helvetica, sans-serif;'>";
				$string=$string."<tr>";
				$string=$string."<td style='padding:15px 15px 0 15px; color:#000000; font-size:13px; line-height:18px;'><span style='color:#444444;'>Dear ".$username.",</span></td>";
				$string=$string."</tr>";
				$string=$string."<tr>";
				$string=$string."<td style='padding:15px 15px 0 15px; color:#000000; font-size:13px; line-height:18px;'>According to our records we have received a request for forgot USERID for your email ID ".$email.". If there is any error please ignore or report spam at support@alivemeter.com. </td>";
				$string=$string."</tr>";
				$string=$string."<tr>";
				$string=$string."<td style='padding:15px 15px 0 15px; color:#000000; font-size:13px; line-height:18px;'>We have ".$family_mem_count." accounts aligned to your email ID and find below details of all the accounts:</td>";
				$string=$string."</tr>";
				$string=$string."<tr>";
				$string=$string."<td style='padding:0 15px 15px 15px; color:#000000; font-size:12px; line-height:18px;'>";
				$string=$string."<table width='35%' border='0' cellspacing='0 cellpadding='0' style='font-family:Verdana, Arial, Helvetica, sans-serif; font-size:12px; color:#000000; '>";
					
					$query = "SELECT * FROM " . Users . " WHERE user_email='".$email."'";
				    //echo $query;
					$result = mysql_query($query);
					if($result != "") {
					$rowcount = mysql_num_rows($result);
					if($rowcount > 0) {
						while($row = mysql_fetch_assoc($result)) {
							extract($row); {
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
								
				
				}}}
				
				$string=$string."</table>";
				$string=$string."</td>";
				$string=$string."</tr>";
				$string=$string."<tr>";
				$string=$string."<td style='padding:15px 15px 0 15px; color:#000000; font-size:13px; line-height:18px;'>We would love to hear from you about your experiences which will help build our product better. Please do write to us on support@aliveemeter.com or share your views on our social pages.</td>";
				$string=$string."</tr>";
				$string=$string."<tr>";
				$string=$string."<td style='padding:20px 15px 15px 15px; color:#ca1d63; font-size:14px; line-height:18px; font-weight:bold;'><span style='color:#185aac;'>- The Alivemeter Team</span></td>";
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
		//		echo $strBody;
				SendEmail("Alivemeter", "support@alivemeter.com",$email, $strSubject, $strBody);
			  AlertandRedirect('Your username sent successfully to your email ID.', "index.php");
			#################################################################
		
	}
	
	
} 
else
	{
		AlertandRedirect('Provided Email ID is not available in database.', "page.php?dir=account/forgot_username");
	}

}	

?>
<section>
  <div class="banner_o1">
  
    <div class="dvFloat">
    
      <div class="dvWrapper" style="padding:35px 0;">
      <h1 class="f_red">Forgot Username</h1>
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
