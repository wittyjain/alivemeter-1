<script src="<?php echo $strHostName?>/js/common.js" type="text/javascript"></script>
<?php

 $name=""; $register_gender=""; $register_password=""; $register_mobile=""; $register_user_email=""; $createdate=date('d-m-Y h:i:s');	$edit_id=""; $update_times="0"; $user_id="0";
 
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
	

if(isset($_POST['btnSignSubmit']))
	{
		$register_name= trim(str_replace("'", "''", $_POST['txt_Reg_Fullname']));
		$lastname= trim(str_replace("'", "''", $_POST['txt_Reg_Lastname']));
		$register_gender= trim(str_replace("'", "''", $_POST['reg_Gender']));
		$register_password= trim(str_replace("'", "''", $_POST['txt_Reg_Password']));
		$register_mobile= trim(str_replace("'", "''", $_POST['txt_Reg_Mobile_no']));
		$register_user_email= trim(str_replace("'", "''", $_POST['txt_Reg_Email']));
		$user_profile_id= trim(str_replace("'", "''", $_POST['txtProfileID']));
		
		
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
				$to = $email;
				$string=$string."<tr>";
						$string=$string."<td style='padding: 5px 11px 5px 14px; text-align: left; color: #444444; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 12px; line-height: 23px;'>";
						$string=$string."<p style='margin: 0px; padding: 12px 0px 0px 0px;'>Dear $username,</p>";
						$string=$string."<p style='margin: 0px; padding: 12px 0px 0px 0px;'>We thank you for advertising your property for ".$prop_type." on &ldquo;MyPropertyStores.com&rdquo;</p>";
						$string=$string."</td>";
						$string=$string."</tr>";
						$string=$string."<tr>";
						$string=$string."<td style='padding: 12px 11px 12px 14px; text-align: left; color: #444444; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 12px; line-height: 23px;'>";
						$string=$string."<table width='90%' border='0' cellspacing='0' cellpadding='0'>";
						$string=$string."<tr>";
						$string=$string."<td width='60%' valign='top'><b>$bedroom BHK, $prop_type_name in $cityname</b></td>";
						$string=$string."<td width='40%' valign='top' style='font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 12px;'>Price : Rs. $price</td>";
						$string=$string."</tr>";
						$string=$string."<tr>";
						$string=$string."<td width='40%' valign='top' style='padding:10px 0; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 12px;'>Property Age : $p_age</td>";
						$string=$string."<td width='50%' valign='top' style='padding:10px 0; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 12px;'>Built-up Area : $built_area $built_area_type</td>";
						$string=$string."</tr>";
						$string=$string."</table>";
						$string=$string."</td>";
						$string=$string."</tr>";
						$string=$string."<tr>";
						$string=$string."<td style='padding: 0px 11px 12px 14px; text-align: left; color: #444444; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 12px; line-height: 23px;'>";
						$string=$string."<p style='margin: 0px; padding: 0px 0px 10px 0px;'>It is screened successfully and has been made live instantly on MyPropertyStores.com </p>";
						$string=$string."</td>";
						$string=$string."</tr>";
					
			echo $string;
			//SendEmail("MyPropertyStores", "info@MyPropertyStores.com",$to, "New Property Listing for ".$prop_type." in MyPropertyStores.com", $string);
	
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
					  <input id="txt_Reg_Fullname" name="txt_Reg_Fullname" value="" onblur="javascript:CreateProfileID('<?php echo $randomno;?>');" type="text" style="width:105px; margin-right:8px;" placeholder="First Name"/>
                        <input id="txt_Reg_Lastname" name="txt_Reg_Lastname" value="" onblur="javascript:CreateProfileID('<?php echo $randomno;?>');" type="text"  style="width:105px;" placeholder="Last Name"/>
                        
                        <input id="txtRandomID2" name="txtRandomID2" value="<?php echo $randomno2;?>"  type="hidden"  style="width:105px;"/>
                        <input id="txtRandomID3" name="txtRandomID3" value="<?php echo $randomno3;?>"  type="hidden"  style="width:105px;"/>
                        
					     <input type="hidden" name="txtUpdateTimes" id="txtUpdateTimes" value="<?php echo $update_times; ?>">
                       <div id="DvName" class="tickclass" style="display:none"><img src="<?php echo $strHostName; ?>/images/tick.png" alt="" title="" border="0" style="vertical-align:middle"/></div>
                       
					   <div id="DvErrorName" class="warning" style="display:none">Please enter Full Name.</div>
					</div>
				  </div>
                  
                  
                  
                  
				  <div class="dvFloat formpadding">
					<div class="formlabel">
					  <label class="formlabel">Gender </label>
					</div>
					<div class="formcontrol">
					  <input type="radio" id="RegMale" name="reg_Gender" value="Male" checked="checked">
					  <label for="Male">Male</label>
					  &nbsp;&nbsp;
					  <input type="radio" id="RegFemale" name="reg_Gender" value="Female" >
					  <label for="Female">Female</label>
					  &nbsp;&nbsp; </div>
				  </div>
				  
				  
				    <div class="dvFloat formpadding" style="display:'';">
					<div class="formlabel">
					  <label class="formlabel">Profile ID </label>
					</div>
					<div class="formcontrol">
					  	 <input type="text" name="txtProfileID" id="txtProfileID" value="" onblur="javscript:Signup_Registration('0');">
                          <div class="dvFloat" style="font-size:12px; line-height:25px;">(Note: This Profile ID will be used as your Login ID.)</div>
                          <div id="DvCorUsername" class="tickclass" style="display:none; margin-top:-54px;"><img src="<?php echo $strHostName; ?>/images/tick.png" alt="" title="" border="0" style="vertical-align:middle"/></div>
                          <div id="DvErrorDupEmail" class="warning" style="display:none; line-height:15px;">Someone already has that username. <br />Try another?</div>
                           <div id="DvErrorDupEmail2" class="warning" style="display:none; line-height:15px;">Please enter Profile ID</div>
                         <div id="dvDupProfileID">
                         	&nbsp;
                        </div>
                         
                    </div>
				  </div>
				  
                  
				  
				  
				  
				  <div class="dvFloat formpadding">
					<div class="formlabel">
					  <label class="formlabel">Email <span class="redtxt">*</span></label>
					</div>
					<div class="formcontrol">
                   <input id="txt_Reg_Email" name="txt_Reg_Email" value="<?php echo $register_user_email;?>" title="email" type="text"  onchange="javascript:Signup_Registration('0'); " />
					  <div id="DvEmail" class="tickclass" style="display:none"><img src="<?php echo $strHostName; ?>/images/tick.png" alt="" title="" border="0" style="vertical-align:middle"/></div>
					  <div id="DvErrorEmail" class="warning" style="display:none">Please enter proper email.</div>
                     
					</div>
				  </div>
				  
                  
                  <div class="dvFloat formpadding">
					<div class="formlabel">
					  <label class="formlabel">Password <span class="redtxt">*</span></label>
					</div>
					<div class="formcontrol">
                   <input id="txt_Reg_Password" name="txt_Reg_Password" value="" type="password"  onblur="javascript:Signup_Registration('0');" />
					  <div id="DvPassword" class="tickclass" style="display:none"><img src="<?php echo $strHostName; ?>/images/tick.png" alt="" title="" border="0" style="vertical-align:middle"/></div>
					  <div id="DvErrorPassword" class="warning" style="display:none">Please enter proper password.</div>
					</div>
				  </div>
                  
                  
                   <div class="dvFloat formpadding">
					<div class="formlabel">
					  <label class="formlabel">Confirm Password <span class="redtxt">*</span></label>
					</div>
					<div class="formcontrol">
                   <input id="txt_Reg_Confirm_Password" name="txt_Reg_Confirm_Password" value=""  type="password"  onblur="javascript:Signup_Registration('0');"  onkeydown="javascript:SetPasswordValue('txt_Reg_Confirm_Password');"
					
					/>
					  <div id="DvCPassword" class="tickclass" style="display:none"><img src="<?php echo $strHostName; ?>/images/tick.png" alt="" title="" border="0" style="vertical-align:middle"/></div>
					  <div id="DvErrorCPassword" class="warning" style="display:none">Please confirm password.</div>
					</div>
				  </div>
                  
                  
                  <div class="dvFloat formpadding">
					<div class="formlabel">
					  <label class="formlabel">Mobile No. <span class="redtxt">*</span></label>
					</div>
					<div class="formcontrol">
                   <input id="txt_Reg_Mobile_no" name="txt_Reg_Mobile_no" value="" type="text"  onblur="javascript:Signup_Registration('0');"  maxlength="14" onkeydown="return ( event.ctrlKey || event.altKey 
                    || (47<event.keyCode && event.keyCode<58 && event.shiftKey==false) 
                    || (95<event.keyCode && event.keyCode<106)
                    || (event.keyCode==8) || (event.keyCode==9) 
                    || (event.keyCode>34 && event.keyCode<40) 
                    || (event.keyCode==46) )" />
					  <div id="DvMobile" class="tickclass" style="display:none"><img src="<?php echo $strHostName; ?>/images/tick.png" alt="" title="" border="0" style="vertical-align:middle"/></div>
					  <div id="DvErrorMobile" class="warning" style="display:none">Please enter proper mobile no.</div>
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
  