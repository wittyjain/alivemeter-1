<script src="<?php echo $strHostName?>/js/common.js" type="text/javascript"></script>
<?php

 $name=""; $register_gender=""; $register_password=""; $register_mobile=""; $register_user_email=""; $createdate=date('d-m-Y h:i:s');	$edit_id=""; $update_times="0"; $user_id="0";
 $email=""; $string=""; $register_name=""; $lastname=""; $user_profile_id="";
 if(isset($_GET['user_id'])) 
 {
	$user_id=$converter->decode($_GET['user_id']);
 }
 else
 {
	$user_id="0";
 }
 
  if(isset($_GET['email']))
 {
	$register_user_email=$converter->decode($_GET['email']);
 }
 else
 {
	$register_user_email="";
 }
 
 
  if(isset($_GET['randomno']))
 {
	$randomno=$converter->decode($_GET['randomno']);
 }
 else
 {
	 $randomno = rand(0, 9999);
 }
 

$randomno2 = rand(0, 999);
$randomno3 = rand(0, 99);

//echo $random;
 
//Alert($user_id);
	

if(isset($_POST['btnSignSubmit']))	{

		$register_name= trim(str_replace("'", "''", $_POST['txt_Reg_Fullname']));
		$lastname= trim(str_replace("'", "''", $_POST['txt_Reg_Lastname']));
		$register_gender= trim(str_replace("'", "''", $_POST['reg_Gender']));
		$register_password= trim(str_replace("'", "''", $_POST['txt_Reg_Password']));
		$register_password=$converter->encode($register_password);
		$register_mobile= trim(str_replace("'", "''", $_POST['txt_Reg_Mobile_no']));
		$register_user_email= trim(str_replace("'", "''", $_POST['txt_Reg_Email']));
		$user_profile_id= trim(str_replace("'", "''", $_POST['txtProfileID']));

	$user_email=GetValue("select user_email as col from tbl_users where isdeleted=0 and user_email='".$register_user_email."'", "col");

	if($user_email!="")
	{
		$strMsg="Sorry! Someone else has taken email id.";
	
	}
	else
	{

	 $user_email=GetValue("select user_email as col from tbl_users  where isdeleted=0 and user_profile_id='".$user_profile_id."'", "col");

	 if($user_email!="")
	 {
	 	$strMsg="Sorry! Someone else has taken profile id.";
	
	 }
	 else
	{
		$user_email=GetValue("select user_email as col from tbl_users where  isdeleted=0 and mobile='".$register_mobile."'", "col");

		 if($user_email!="")
		 {
			$strMsg="Sorry! Mobile no already registered.";
		 }
	}


		

	}

	

		if($strMsg!="")
		{
			Alert($strMsg);
		}
		else
	{
			
			
			
			$createdate=date('d-m-Y h:i:s');		

			
			$data = array(
				'name' => $register_name,
				'lastname' => $lastname,
				'user_profile_id' => $user_profile_id,
				'gender'=>$register_gender,
				'password' => $register_password,
				'registration_date' => $createdate,
				'registration_type' => "Main",
				'mobile' => $register_mobile,
				'random' => $randomno,
				'refer_by' => $user_id,
				'user_email' => $register_user_email,
				'isactive' => 0,
				'isdeleted'=>0,
			
			);
			 
			 
			 
			$recevied_message=$function->f_Add_register_step_1_Short($data,$edit_id);
			$recevied_message_1  = explode("###", $recevied_message);
			
			if($update_times=="")
			{
				$update_times="0";
			}
			
			$data = array(
				'user_id' => $edit_id,
				'user_type' =>'Main',
				'update_times' => $update_times + 1,
				'time'=> date("d-M-Y h:i"),
			);
			$trackId = $db->insert_array("tbl_user_track", $data);
			
			
			if($recevied_message_1[0]=="insert record")
			{
							$to = $register_user_email;
							$strSubject="New Registration in Alivemeter.com";
							
							$string=$string."<table width='780px' border='0' cellpadding='0' cellspacing='0'>";
							$string=$string."<tr>";
							$string=$string."<td style='border: solid 12px #4ec8c8;'>";
							$string=$string."<table width='757px' border='0' cellpadding='0' cellspacing='0'>";
							$string=$string."<tr>";
							$string=$string."<td style='background-color: #FFF; height: 70px; border-bottom: solid 2px #4ec8c8;'>";
							$string=$string."<table width='757px' border='0' cellpadding='0' cellspacing='0'>";
							$string=$string."<tr>";
							$string=$string."<td style='padding-left: 17px; width: 159px; padding-bottom: 5px;'>";
							$string=$string."<img src='http://www.alivemeter.com/images/logo.png' alt='' title='' border='0' />";
							$string=$string."</td>";
							$string=$string."<td style='padding-right: 20px; padding-top: 10px; text-align: right;'>";
							$string=$string."<a href='#' target='_blank' style='color: #666666; text-decoration: underline;'><img src='http://www.alivemeter.com/images/socialmedia/facebook.png' alt='' title='' border='0' /></a>&nbsp;<a href='#' target='_blank' style='color: #666666; text-decoration: underline;'><img src='http://www.alivemeter.com/images/socialmedia/twitter.png' alt='' title='' border='0' /></a>&nbsp;<a href='#' target='_blank' style='color: #666666; text-decoration: underline;'><img src='http://www.alivemeter.com/images/socialmedia/google_plus.png' alt='' title='' border='0' /></a>&nbsp;<a href='#' target='_blank' style='color: #666666; text-decoration: underline;'><img src='http://www.alivemeter.com/images/socialmedia/blog.png' alt='' title='' border='0' /></a>&nbsp;<a href='#' target='_blank' style='color: #666666; text-decoration: underline;'><img src='http://www.alivemeter.com/images/socialmedia/youtube.png' alt='' title='' border='0' /></a>";
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
							$string=$string."<p style='font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 13px; color: #99cc00; font-weight: bold; line-height: 20px; margin: 0px;'>Dear ".$register_name.",</p>";
							$string=$string."<p style='font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 13px; color: #666666; line-height: 20px; padding-top: 10px; margin: 0px;'>Dummy text Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>";                        $string=$string."</td>";
							$string=$string."</tr>";
							$string=$string."<tr>";
							$string=$string."<td style='padding: 5px 11px 0px 11px; text-align: justify; margin: 0px; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 14px; color: #99cc00; line-height: 20px; font-weight: bold;'>Login Details</td>";
							$string=$string."</tr>";
							$string=$string."<tr>";
							$string=$string."<td style='padding: 5px 11px 0px 11px; text-align: justify; margin: 0px;'>";
							$string=$string."<table width='60%' border='0' cellspacing='0' cellpadding='0'>";
							$string=$string."<tr>";
							$string=$string."<td width='40%' style='font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 13px; color: #009999; line-height: 20px; margin: 0px; padding:15px 0px 10px 0px; text-align: left; vertical-align: top; font-weight: bold; border-bottom: solid 1px #c3c3c3;'>Username</td>";
							$string=$string." <td width='3%' style='text-align: left; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 13px; color: #404040; vertical-align: top; padding: 15px 0px 10px 0px; border-bottom: solid 1px #c3c3c3;'>:</td>";
							$string=$string." <td width='73%' style='font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 13px; color: #666666; line-height: 20px; margin: 0px; padding:15px 0px 10px 0px; text-align: left; vertical-align: top; border-bottom: solid 1px #c3c3c3;'>".$user_profile_id."</td>";
							$string=$string."<tr>";
							$string=$string."<tr>";
							$string=$string."<td style='font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 13px; color: #009999; line-height: 20px; margin: 0px; padding:15px 0px 10px 0px; text-align: left; vertical-align: top; font-weight: bold; border-bottom: solid 1px #c3c3c3;'>Password</td>";
							$string=$string."<td width='3%' style='text-align: left; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 13px; color: #404040; vertical-align: top; padding: 15px 0px 10px 0px; border-bottom: solid 1px #c3c3c3;'>:</td>";
							$string=$string."<td style='font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 13px; color: #666666; line-height: 20px; margin: 0px;  padding: 15px 0px 10px 0px; text-align: left; vertical-align: top; border-bottom: solid 1px #c3c3c3;'>".$register_password."</td>";
							$string=$string."</tr>";
							$string=$string."</table>";
							$string=$string."</td>";
							$string=$string."</tr>";
							$string=$string."<tr>";
							$string=$string."<td style='padding: 25px 11px 25px 11px; text-align: left; margin: 0px; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 13px; color: #666666; line-height: 20px; vertical-align: top;'>";
							$string=$string."<span style='color: #666666; font-weight: bold; font-size: 13px;'>Regards,</span><br />";
							$string=$string."Team Alivemeter<br />";
							$string=$string."Health &bull; Wealth &bull; Happiness<br />";
							$string=$string."<span style='color: #2a4a8b;'>+91 9870048148 </span>| <a href='#' target='_blank' style='scolor: #2a4a8b; text-decoration: none;'>www.alivemeter.com</a> ";
							$string=$string."</td>";
							$string=$string."</tr>";
							$string=$string."<tr>";
							$string=$string."<td style='background-color: #FFF; height: 60px;'>";
							$string=$string."<table width='757px' border='0' cellpadding='0' cellspacing='0'>";
							$string=$string."<tr>";
							$string=$string."<td style='padding-left: 10px; width: 400px;'>";
							$string=$string."<p style='color: #666666; font-size: 13px; font-family: Verdana, Arial, Helvetica, sans-serif;'>Contact us at <a href='mailto:support@alivemeter.com' style='color: #000; text-decoration: none;'>support@alivemeter.com</a>  |  <a href='http://www.alivemeter.com/' target='_blank' style='color: #000; text-decoration: none;'>www.alivemeter.com</a></p>";
							$string=$string."<td style='padding-right: 10px; text-align: right;'>";
							$string=$string."<td style='padding-right: 10px; text-align: right;'>";
							$string=$string."</td>";
							$string=$string."</td>";
							$string=$string."</tr>";
							$string=$string."</table>";
							$string=$string."</tr>";
							$string=$string."</table>";
							$string=$string."</td>";
							$string=$string."</tr>";
							$string=$string."</table>";
							$string=$string."</td>";
							$string=$string."</tr>";
							$string=$string."</table>"; 
							 
							$strBody=$string;
							
				//echo $string;
				//SendEmail("Alivemeter Team", "support@alivemeter.com", $register_user_email, $strSubject, $strBody);
				
		
			}
		
			if(!isset($_SESSION['UserID'])){
				if($recevied_message_1[0]!="")
				{
					Redirect($strHostName."/page.php?dir=registration/step1&record=".$converter->encode($recevied_message_1[0])."&menu_type=".$converter->encode("step1")."&cid=".$converter->encode($recevied_message_1[1])."&user_id=".$converter->encode($user_id)."&email=".$converter->encode($register_user_email)."&randomno=".$converter->encode($randomno));
				}
				else
				{
					Alert("Some error is occured");
				}
			}
			else
			{
				Redirect($strHostName."/page.php?dir=registration/step2&record=".$converter->encode($recevied_message_1[0])."&menu_type=".$converter->encode("step1")."&cid=".$converter->encode($recevied_message_1[1]));
			}
		}
	}
?>
<section>
  <div class="banner_o1" style="border:solid 0px red; height:100px;">
    <div class="dvFloat">
      <div class="dvWrapper">
        <div style="float:left; padding:35px 0px 0px 35px"> <span  class="Get_Started">Get started!</span><span class="Fill_details">&nbsp;&nbsp;Please fill in your details below.</span> </div>
      </div>
    </div>
   
  </div>
</section>
<section>
  <div class="cal_full_size gray_bg">
    <div class="cal_12 m_outo">
      <div class="dvFloat">
        <div class="dvWrapper">
          <div style="padding:60px 0px 35px 0px">
            <div style="margin:0px auto; width:730px; border:solid 0px red;">     
               <form class="form-horizontal" method="post" enctype="multipart/form-data" onSubmit="javascript:return Signup_Registration('1');">
				  
				
				<div class="ali_div_right_step1"> 
				
				  <div class="dvFloat formpadding" style="padding:0px;">
					<div class="formlabel">
					  <label class="formlabel">Name <span class="redtxt">*</span></label>
					</div>
					<!--<div class="formcontrol" onmousedown="javascript:CreateProfileID(<?php echo $random;?>);">-->
                    
                    <div class="formcontrol">
					  <input id="txt_Reg_Fullname" name="txt_Reg_Fullname" value="<?php echo $register_name?>"  type="text" style="width:105px; margin-right:8px;" placeholder="First Name" onBlur="javascript:return Signup_Registration('0');"/>
                        <input id="txt_Reg_Lastname" name="txt_Reg_Lastname" value="<?php echo $lastname?>" type="text"  style="width:105px;" placeholder="Last Name" onBlur="javascript:return Signup_Registration('0');"/>
                        
                        <input id="txtRandomID2" name="txtRandomID2" value="<?php echo $randomno2;?>"  type="hidden"  style="width:105px;"/>
                        <input id="txtRandomID3" name="txtRandomID3" value="<?php echo $randomno3;?>"  type="hidden"  style="width:105px;"/>
                        
					     <input type="hidden" name="txtUpdateTimes" id="txtUpdateTimes" value="<?php echo $update_times; ?>">
                       <div id="DvName" class="tickclass" style="display:none"><img src="<?php echo $strHostName; ?>/images/tick.png" alt="" title="" border="0" style="vertical-align:middle"/></div>
                       
					   <div id="DvErrorName" class="warning" style="display:none">Please enter a valid name.</div>
					</div>
				  </div>
                  
                  
                  
                  
				  <div class="dvFloat formpadding">
					<div class="formlabel">
					  <label class="formlabel">Gender </label>
					</div>
					<div class="formcontrol">
					  <input type="radio" id="RegMale" name="reg_Gender" value="Male" checked="checked" >
					  <label for="Male">Male</label>
					  &nbsp;&nbsp;
					  <input type="radio" id="RegFemale" name="reg_Gender" value="Female" <?php if($register_gender=="Feamle"){echo "checked";}?>>
					  <label for="Female">Female</label>
					  &nbsp;&nbsp; </div>
				  </div>
				  
				    <div class="dvFloat formpadding">
					<div class="formlabel">
					  <label class="formlabel">Email <span class="redtxt">*</span></label>
					</div>
					<div class="formcontrol">
                   <input id="txt_Reg_Email" name="txt_Reg_Email" value="<?php echo $register_user_email;?>" title="email" type="text"  onblur="javascript:CheckNewEmailValid('0'); " />
					  <div id="DvEmail" class="tickclass" style="display:none"><img src="<?php echo $strHostName; ?>/images/tick.png" alt="" title="" border="0" style="vertical-align:middle"/></div>
					   <div id="DvErrorDupEmail1" class="warning" style="display:none; line-height:15px;">Someone already has that email ID. <br /></div>
                      <div id="DvErrorEmail" class="warning" style="display:none">Please enter a valid email id.</div>
                     
					</div>
				  </div>
				  
				    <div class="dvFloat formpadding" style="display:'';">
					<div class="formlabel">
					  <label class="formlabel">Profile ID <span class="redtxt">*</span></label>
					</div>
					<div class="formcontrol">
					  	 <input type="text" name="txtProfileID" id="txtProfileID" value="<?php echo $user_profile_id?>" onblur="javscript:CheckDuplicationUsernameRegistered('1')">
                          <div class="dvFloat" style="font-size:12px; line-height:25px;">Note: This Profile ID will be used as your Login ID.</div>
                         
                          <div id="DvCorUsername" class="tickclass" style="display:none; margin-top:-54px;"><img src="<?php echo $strHostName; ?>/images/tick.png" alt="" title="" border="0" style="vertical-align:middle"/></div>
                          <div id="DvErrorDupEmail" class="warning" style="display:none; line-height:15px;">Someone already has that username. <br />Try another?</div>
                           <div id="DvErrorDupEmail2" class="warning" style="display:none; line-height:15px;">Please enter Profile ID</div>
                         <div id="dvDupProfileID" style="display:none;">
                         	&nbsp;
                        </div>
                         
                    </div>
				  </div>
				  
                  
				  
				  
				  
				
                  
                  <div class="dvFloat formpadding">
					<div class="formlabel">
					  <label class="formlabel">Password <span class="redtxt">*</span></label>
					</div>
					<div class="formcontrol">
                   <input id="txt_Reg_Password" name="txt_Reg_Password" value="" type="password"  onBlur="javascript:return Signup_Registration('0');" />
					  <div id="DvPassword" class="tickclass" style="display:none"><img src="<?php echo $strHostName; ?>/images/tick.png" alt="" title="" border="0" style="vertical-align:middle"/></div>
					  <div id="DvErrorPassword" class="warning" style="display:none">Enter your password.</div>
					</div>
				  </div>
                  
                  
                   <div class="dvFloat formpadding">
					<div class="formlabel">
					  <label class="formlabel">Confirm Password <span class="redtxt">*</span></label>
					</div>
					<div class="formcontrol">
                   <input id="txt_Reg_Confirm_Password" name="txt_Reg_Confirm_Password" value=""  type="password"   onkeydown="javascript:SetPasswordValue('txt_Reg_Confirm_Password');" onBlur="javascript:return Signup_Registration('0');"
					
					/>
					  <div id="DvCPassword" class="tickclass" style="display:none"><img src="<?php echo $strHostName; ?>/images/tick.png" alt="" title="" border="0" style="vertical-align:middle"/></div>
                      
					  <div id="DvErrorCPassword" class="warning" style="display:none">Please confirm your password.</div>
					</div>
				  </div>
                  
                  
                  <div class="dvFloat formpadding">
					<div class="formlabel">
					  <label class="formlabel">Mobile No. <span class="redtxt">*</span></label>
					</div>
					<div class="formcontrol">
                   <input id="txt_Reg_Mobile_no" name="txt_Reg_Mobile_no" value="<?php echo $register_mobile?>" type="text"  onblur="javascript:CheckDuplicationMobile('txt_Reg_Mobile_no','0')"  maxlength="10" onkeydown="return ( event.ctrlKey || event.altKey 
                    || (47<event.keyCode && event.keyCode<58 && event.shiftKey==false) 
                    || (95<event.keyCode && event.keyCode<106)
                    || (event.keyCode==8) || (event.keyCode==9) 
                    || (event.keyCode>34 && event.keyCode<40) 
                    || (event.keyCode==46) )" />
					  <div id="DvMobile" class="tickclass" style="display:none"><img src="<?php echo $strHostName; ?>/images/tick.png" alt="" title="" border="0" style="vertical-align:middle"/></div>
                       <div id="DvErrorDupMob" class="warning" style="display:none; line-height:15px;">This mobile number is already registered. </div>
					  <div id="DvErrorMobile" class="warning" style="display:none">Enter your mobile number.</div>
					</div>
				  </div>
                  
                  
				  <div class="dvFloat formpadding">
					<div class="formlabel"> &nbsp; </div>
					<div class="formcontrol"  style="">
					 
				

					 <input id="submitbtn" name="btnSignSubmit" value="Submit" type="submit"/>
                     	 <input id="resetbtn" value="Reset" type="reset" />
                     </div>
                     
					</div>
                    
				  </div>
				  <div class="dvFloat formpadding" style="border:solid 0px blue;">
				
					<div class="formcontrol" style="border:solid 0px green; width:530px;">  <div style="float:left; text-align:left;width:180px;border:solid 0px red; margin-bottom:80px;"><span class="redtxt">*</span> Compulsory field</div> </div>
				  </div>
             
              </div>
              </form>
            </div>
			 
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
  