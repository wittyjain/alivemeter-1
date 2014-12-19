<script src="<?php echo $strHostName?>/js/step2_validation.js" type="text/javascript"></script>
<script>
function SendVerficaitonCodeEmail(user_id)
{
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
			alert("Verfication code is send to your registered email id");
		}
	}
	
	xmlhttp.open("GET", hostname+"/includes/send_verfication_email.inc.php?user_id="+user_id, true);
	xmlhttp.send();
	
}
</script>
<?php
	$edit_id="0";$earning_member="0";$profession_id="0";$company_name="";$designation="";$travel_mode="";$daily_travel_time_h="0";
	$daily_travel_time_m="";$age_of_retirement="";$life_expectancy=""; $verificationenter=""; $register_name="";
			
	if(isset($_GET['cid'])) {
		$edit_id = $converter->decode($_GET['cid']);
	}

	if(isset($_GET['email']))
	 {
		$register_user_email=$converter->decode($_GET['email']);
	 }
	 else
	 {
		$register_user_email="";
	 }
	 
	 
	 if(isset($_SESSION['UserID']))
	 {
		$user_id=$_SESSION['UserID'];
	 }
	 else
	 {
		$user_id=$converter->decode($_GET['user_id']);
	 }
	 
	  if(isset($_GET['randomno']))
	 {
		$randomno=$converter->decode($_GET['randomno']);
	 }
	 else
	 {
		 $randomno = rand(0, 9999);
	 }
	 
	
		
		
	
		
		
	if(isset($_POST['btnSubmit']))
	{	
		
		$date=date('Y-m-d');
		
		$data = array(
			'user_id'=>$edit_id,
			'type'=>'Registration',
			'reward_points'=>100,
			'common_id'=>$edit_id,
			'created_date'=>$date,
			'isactive'=>1,
			'isdeleted'=>0,
			
		);
		$id = $db->insert_array(Total_Reward_Points, $data);
		
		
		
		$user_email=GetValue("select user_email as col from tbl_users where user_id=".$edit_id, "col");
		$user_random_no=GetValue("select random as col from tbl_users where user_id=".$edit_id, "col");
		$user_refer_by=GetValue("select refer_by as col from tbl_users where user_id=".$edit_id, "col");
	

		if(($user_email==$register_user_email) && ($user_random_no==$randomno) && ($user_refer_by==$user_id))
		{
				$data = array(
				'user_id'=>$user_id,
				'type'=>'Refer_A_Friend',
				'reward_points'=>100,
				'common_id'=>$edit_id,
				'created_date'=>$date,
				'isactive'=>1,
				'isdeleted'=>0,
				
			);
			$id = $db->insert_array(Total_Reward_Points, $data);
		
		}
		
		
		
		if(isset($_POST['txt_Verification']))
		{
			$verificationenter= trim(str_replace("'", "''", $_POST['txt_Verification']));
		}
		
	
		$verification=GetValue("select verification as col from tbl_users where user_id=".$edit_id, "col");
	
		
		if($verificationenter==$verification)
		{
			
			if($edit_id!="" || $edit_id!="0")
			{
				$data1=array(
					'isactive'=>1,
				);
				
				$edit_id1=$db->update_array(Users, $data1, "user_id = $edit_id");
				$nutritionist_id=GetValue("select doctor_id as col from tbl_doctor where type='Nutritionist' and user_count < 1000 and isdeleted=0 order by doctor_id limit 1", "col");
				$user_count=GetValue("select user_count as col from tbl_doctor where type='Nutritionist' and user_count < 1000 and isdeleted=0 order by doctor_id limit 1", "col");
				
				$data2=array(
					'nutritionist_id'=>$nutritionist_id,
					'user_id'=>$edit_id,
				);
				
				$nut_id= $db->insert_array(Nutritionist_Main, $data2);
				
				
				$data3=array(
					'user_count'=>($user_count+1),
					
				);
				
				$nut_id1=$db->update_array(Doctor, $data3, "doctor_id = $nutritionist_id");
				
				$pincode=GetValue("select pincode as col from tbl_users where user_id=".$edit_id."", "col");
				//$user_count=GetValue("select user_count as col from tbl_hospital where type='Nutritionist' and user_count < 25 and isdeleted=0 order by doctor_id limit 1", "col");
				
				$hospital_id=GetValue("select hospital_id as col from tbl_hospital_master where pincode='".$pincode."' and isdeleted=0 order by hospital_id limit 1", "col");
				$data3=array(
					'hospital_id'=>$hospital_id,
					'user_id'=>$edit_id,
				);
				$hosp_id= $db->insert_array(User_Hospital, $data3);
				
			}
		
			
		
		
			$user_email=GetValue("select user_email as col from tbl_users where user_id=".$edit_id, "col");
			
			$query = "SELECT * FROM ".Users." WHERE user_email = '$user_email'";
		
			$rows = $db->select($query);
			if($db->row_count > 0) {
			while($row = $db->get_row($rows, 'MYSQL_ASSOC')) {
				$_SESSION['UserType'] = $row['registration_type'];
				$_SESSION['UserID'] = $row['user_id'];
				$_SESSION['UserName'] = $row['name'];
				$_SESSION['UserEmail'] = $row['user_email'];
				$register_name = $row['name'];
				
				
				/*$messageText="Login ".$row['user_profile_id'].", Password ".$row['password']."";
				$time=date('h:i:s');
				
				
				
				$url = "http://59.162.167.52/api/MessageCompose";
				
				$ch = curl_init();
				curl_setopt($ch, CURLOPT_URL, $url);
				curl_setopt($ch, CURLOPT_POSTFIELDS, 'admin=renish.paul@bloomtel.in&user=pinaki@alivemeter.com:ALIVEM&senderID=ALIVEM&receipientno='.$row['mobile'].'&msgtxt='.$messageText.'&state=4');
				curl_setopt($ch, CURLOPT_POST, 1);
				curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
				$result = curl_exec($ch);*/



				$string="";

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
				$string=$string."<p style='font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 13px; color: #99cc00; font-weight: bold; line-height: 20px; margin: 0px;'>Hey ".$register_name.",</p>";
				$string=$string."<p style='font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 13px; color: #666666; line-height: 20px; padding-top: 10px; margin: 0px;'>Thank you for registering with Alivemeter. We welcome you to our family of first 1000 members. Enjoy your premium membership benefits until 31<sup>st</sup> Jan 2015.</p>";                         
				
				$string=$string."<p style='font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 13px; color: #666666; line-height: 20px; padding-top: 10px; margin: 0px;'>It was the mad rush for things everywhere and lack of control over individual health that fuelled the genesis of Alivemeter. We endeavor to ensure you achieve your health goals and take preventive measure to stay fit and healthy. Our robust team, smart platform and network of health experts help you take charge of your health once again.</p>";                   
				$string=$string."</td>";
				$string=$string."</tr>";
				$string=$string."<tr>";
				$string=$string."<td style='padding: 5px 11px 0px 11px; text-align: justify; margin: 0px;'>";
				$string=$string."<table width='100%' border='0' cellspacing='0' cellpadding='0'>";
				$string=$string."<tr>";
				$string=$string."</tr>";
				$string=$string."<tr>";
				$string=$string."<td style='font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 13px; color: #666666; line-height: 20px; padding-top: 10px; margin: 0px;'>Here are a few tips to get the most out of Alivemeter:</td>";
				$string=$string."</tr>";
				$string=$string."<tr>";
				$string=$string."<td>";
				$string=$string."<p style='font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 13px; color: #666666; line-height: 20px; padding-top: 10px; margin: 0px;'>&bull; Family is important. Alivemeter allows you to align family members under one primary member, while providing complete privacy to each member. Take full advantage of this feature.</p>";
				
				$string=$string."<p style='font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 13px; color: #666666; line-height: 20px; padding-top: 10px; margin: 0px;'>&bull; Our health setup section will seek to know a lot about your health. After all, our doctors and MDs need to know you well to provide effective solution. Remember Alivemeter is all about taking your health in your hands.</p>";
	
				$string=$string."<p style='font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 13px; color: #666666; line-height: 20px; padding-top: 10px; margin: 0px;'>&bull; Use your daily app to maintain your daily record of food, exercise and activities. As one of our first members of Alivemeter, you can enjoy free premium benefits. Your nutritionist will encourage you and follow up with you to maintain regular records, develop a habit and help reach your goal.</p>";
				
				
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
				
	 /// echo $strBody;

				SendEmail("Alivemeter Team", "support@alivemeter.com", $register_user_email, $strSubject, $strBody);

				Redirect($strHostName."/page.php?dir=registration/step2&record=".$_GET['record']."&menu_type=".$_GET['menu_type']."&cid=".$_GET['cid']);
				}
			}			
			
		}
		else
		{
			Alert("Please enter proper verification code.");
		}
		
		
	  
		
	}
	else
	{
		$query = "SELECT * FROM ".Users." WHERE user_id = $edit_id";
		$result = mysql_query($query);
		if($result != "") {
			$rowcount = mysql_num_rows($result);
			if($rowcount > 0) {
				while($row = mysql_fetch_assoc($result)) {
					extract($row);					
				}
			}
		}
	}
	
	
	
?>
<section>
  <div class="banner_o1">
    <div class="dvFloat">
      <div class="dvWrapper">
        <div style="float:left; padding:35px 0px 35px 35px"> <span  class="Get_Started">Get started!</span><span class="Fill_details">&nbsp;&nbsp;Please fill in your details below.</span> </div>
      </div>
    </div>
    <?php include "includes/register_steps.inc.php";?>
  </div>
</section>
<section>
  <div class="cal_full_size gray_bg">
    <div class="cal_12 m_outo">
      <div class="dvFloat">
        <div class="dvWrapper">
          <div style=" padding:50px 0px 35px 0px">
            <div style="margin:0px auto; width:500px; border:solid 0px red;">
			 <form class="form-horizontal" method="post" id="frmRegStep1" name="frmRegStep1" enctype="multipart/form-data" onSubmit="javascript:return reistration_step2_validation('1');">
              <div class="ali_div_right_step1">
                
                
                <div class="dvFloat formpadding">
                  <div class="formlabel">
                    <label class="formlabel">Verification Code <span class="redtxt">*</span></label>
                  </div>
                  <div class="formcontrol">
                  	(Please enter verification code received on your mobile no.)
                    <input type="text" name="txt_Verification" id="txt_Verification" value="<?php echo $verificationenter;?>" onBlur="javascript:reistration_step2_validation('0');" /><br /><br /><br /><br />
					 <p style="display:none;">Please enter your verfication code <strong style="color:red;"><?php echo $verification;?></strong> here.</p>
                     <div id="DvCompany" class="tickclass" style="display:none"><img src="<?php echo $strHostName; ?>/images/tick.jpg" alt="" title="" border="0" style="vertical-align:middle"/></div>
					 <div id="DvErrorCompany" class="warning" style="display:none">Please enter company name.</div>

					  <a href="#" onclick="javascript:SendVerficaitonCodeEmail('<?php echo $_GET['cid']?>');" style="color:#009999">Click Here</a> to received verficaiton code in email
                  </div>
                </div>
                
                
                
                
                <div class="dvFloat formpadding">
                  <div class="formlabel" style="display:none;"> <a href="<?php echo $strHostName?>/page.php?dir=registration/step1&record=<?php echo $_GET['record']?>&cid=<?php echo $_GET['cid']?>&menu_type=<?php echo $_GET['menu_type']?>" class="button2">Back</a></div>
                  <div class="formcontrol" >
                     <input type="submit" class="button1" id="btnSubmit" name="btnSubmit" value="Submit" />
                  </div>
                </div>
                <div class="dvFloat formpadding">
					<div class="formlabel"> &nbsp; </div>
					<div class="formcontrol"  style="text-align:right;">  <div style="float:left; text-align:left;width:180px;border:solid 0px red; margin-bottom:80px;"><span class="redtxt">*</span> Compulsory field</div> </div>
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