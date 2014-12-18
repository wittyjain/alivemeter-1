<script type="text/javascript">
function PasswordValidation()
{
	if(document.getElementById('oldPass').value=="")
	{
		alert("Please enter correct old password.");
		document.getElementById('oldPass').focus();
		return false;
		
	}
	
	if(document.getElementById('newPass').value=="")
	{
		alert("Please enter new password.");
		document.getElementById('newPass').focus();
		return false;
		
	}
	
	if(document.getElementById('newPassConf').value=="")
	{
		alert("Please enter confirm password.");
		document.getElementById('newPassConf').focus();
		return false;
		
	}
	
	if(document.getElementById('newPass').value!=document.getElementById('newPassConf').value)
	{
		alert("Passwords you entered does not match.");
		document.getElementById('newPass').focus();
		return false;
		
	}
}

</script>
<?php 
$string=""; $oldPass=""; $newPass=""; $newPassConf="";
if (isset($_POST['chnPass'])) {
	
	$oldPass = trim(str_replace("'", "''", $_POST['oldPass']));
	$newPass = trim(str_replace("'", "''", $_POST['newPass']));
	$newPassConf = trim(str_replace("'", "''", $_POST['newPassConf']));
	
	if (isset($_SESSION['UserDocID'])) 
	{
		$user_id=$_SESSION['UserDocID'];
		$designation="doctor";
		$user_Password = GetValue("select password as col FROM tbl_doctor WHERE doctor_id =".$_SESSION['UserDocID']."", "col");
	}
	else if (isset($_SESSION['UserMDID'])) 
	{
		$user_id=$_SESSION['UserMDID'];
		$designation="md";
		$user_Password = GetValue("select password as col FROM  tbl_doctor WHERE doctor_id =".$_SESSION['UserMDID']."", "col");
	}
	else if (isset($_SESSION['UserNutID'])) 
	{
		$user_id=$_SESSION['UserNutID'];
		$designation="nutritionist";
		$user_Password = GetValue("select password as col FROM tbl_doctor WHERE doctor_id =".$_SESSION['UserNutID']."", "col");
	}
	
	//Alert ($user_Password);
		 /// Alert ($oldPass);
		
		
		if($oldPass!=$user_Password)
		{
			AlertandRedirect('Your old password does not matched.', "page_doctor.php?dir=team/change_password");
			return;
		}
		
		
	
	$checkPassSql = "SELECT * FROM tbl_doctor WHERE doctor_id =".$user_id." AND password='".$oldPass."'";

	$checkQuery = mysql_query($checkPassSql);
	$check = mysql_num_rows($checkQuery);
	if($check > 0){
		$user = mysql_fetch_array($checkQuery);
		$Username = $user['email'];
		$Email = $user['email'];
		
		 
		
		
		if($newPass == $newPassConf){
		$updatePassSql = "UPDATE  tbl_doctor SET password = '".$newPass."' WHERE doctor_id =".$user_id;
		//echo $updatePassSql;
		
		
		$result = mysql_query($updatePassSql);
			#################################################################
				$strSubject="Your Account Password Changed";
				$string=$string."<table width='752px' border='0' cellspacing='0' cellpadding='0' style='font-family:Verdana, Arial, Helvetica, sans-serif;'>";
				$string=$string."<tr>";
				$string=$string."<td style='padding:15px 15px 0 15px; color:#000000; font-size:13px; line-height:18px;'><span style='color:#444444;'>Dear</span><span style='color:#000; font-weight:bold;'> ".$user['doctor_name'].",</span></td>";
				$string=$string."</tr>";
				$string=$string."<tr>";
				$string=$string."<td style='padding:15px; color:#000000; font-size:13px; line-height:18px;'>The password for your <span style='color:#ca1d63;'>".$SiteTitle."</span> account was recently changed.</td>";
				$string=$string."</tr>";
				$string=$string."<tr>";
				$string=$string."<td style='padding:0 15px 15px 15px; color:#000000; font-size:13px; line-height:18px;'>Your new login details are following :</td>";
				$string=$string."</tr>";
				$string=$string."<tr>";
				$string=$string."<td style='padding:0 15px 15px 15px; color:#000000; font-size:13px; line-height:18px;'>";
				$string=$string."<table width=35% border='0' cellspacing='0 cellpadding='0' style='font-family:Verdana, Arial, Helvetica, sans-serif; font-size:13px; color:#000000; '>";
				$string=$string."<tr>";
				$string=$string."<td width='25%'><b>Username</b></td>";
				$string=$string."<td width='7%' align='center'>:</td>";
				$string=$string."<td width='68%'>".$Username."</td>";
				$string=$string."</tr>";
				$string=$string."<tr>";
				$string=$string."<td><b>Password</b></td>";
				$string=$string."<td width='7%' align='center'>:</td>";
				$string=$string."<td>".$newPass."</td>";
				$string=$string."</tr>";
				$string=$string."</table>";
				$string=$string."</td>";
				$string=$string."</tr>";
				$string=$string."<tr>";
				$string=$string."<td style='padding:20px 15px 15px 15px; color:#ca1d63; font-size:14px; line-height:18px; font-weight:bold;'>Regards, <br /><span style='color:#185aac;'>The Alivemeter </span></td>";
				$string=$string."</tr>";
				$string=$string."</table>";
				
				$strBody=$string;
			////	SendEmail("Alivemeter", "support@alivemeter.com",$Email, $strSubject, $strBody);
				AlertandRedirect('Your password changed succssfully', $strHostName."/page_doctor.php?dir=".$designation."/profile");
			#################################################################
			
		}
		else
		{
			AlertandRedirect('Your new password does not match', $strHostName."/page_doctor.php?dir=team/change_password");
		}
	}
	
}	

?>
<section>
  <div class="banner_o1">
  
    <div class="dvFloat">
    
      <div class="dvWrapper" style="padding:35px 0;">
      <h1 class="f_red">Change Password</h1>
       <div style="margin:20px auto 0 auto; width:500px; border:solid 0px red;">
			 <form class="form-horizontal" method="post" id="frmRegStep1" name="frmRegStep1" enctype="multipart/form-data" onSubmit="javascript:return PasswordValidation();">
              <div class="ali_div_right_step1">
                
                <div class="dvFloat">
                    
                    <div class="dvFloat formpadding">
                          <div class="formlabel">
                            <label class="formlabel">Old Password <span class="redtxt">*</span></label>
                          </div>
                          <div class="formcontrol">
                            <input type="password" name="oldPass" id="oldPass" value="" />
                          </div>
                    </div>
                    
               		<div class="dvFloat formpadding">
                          <div class="formlabel">
                            <label class="formlabel">New Password <span class="redtxt">*</span></label>
                          </div>
                          <div class="formcontrol">
                            <input type="password" name="newPass" id="newPass" value="" />
                          </div	>
                    </div>
                    
                    
                    <div class="dvFloat formpadding">
                          <div class="formlabel">
                            <label class="formlabel">Confirm Password <span class="redtxt">*</span></label>
                          </div>
                          <div class="formcontrol">
                            <input type="password" name="newPassConf" id="newPassConf" value="" />
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
