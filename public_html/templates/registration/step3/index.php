<?php
if(!isset($_SESSION['UserID']))
{
	Alertandredirect("Sorry! Session is expired.", 'index.php');
}

?>
<script src="<?php echo $strHostName?>/js/step3_validation.js" type="text/javascript"></script>
<script>
	function enabledisable()
	{
	 
		if(document.getElementById("Chk_Earn_Member").checked==false){
			document.getElementById("txt_Company_name").disabled=true;
			document.getElementById("txt_Designation").disabled=true;
			document.getElementById("txt_Travel_Mode").disabled=true;
			document.getElementById("cmb_Travel_hour").disabled=true;
			document.getElementById("cmb_Travel_Min").disabled=true;
			document.getElementById("tx_tAge_of_Retirement").disabled=true;
			document.getElementById("txt_Life_Expectancy").disabled=true;
			document.getElementById("divEnable").style.opacity="0.4";
			document.getElementById("DvProfession").style.display="none";
			document.getElementById("DvErrorProfession").style.display="none";
			document.getElementById("DvCompany").style.display="none";
			document.getElementById("DvErrorCompany").style.display="none";
		}
		else
		{
			document.getElementById("txt_Company_name").disabled=false;
			document.getElementById("txt_Designation").disabled=false;
			document.getElementById("txt_Travel_Mode").disabled=false;
			document.getElementById("cmb_Travel_hour").disabled=false;
			document.getElementById("cmb_Travel_Min").disabled=false;
			document.getElementById("tx_tAge_of_Retirement").disabled=false;
			document.getElementById("txt_Life_Expectancy").disabled=false;
			document.getElementById("divEnable").style.opacity="1.0";
			reistration_step2_validation('1');
			return;
		}
	}
</script>
<?php
$edit_id="0";$name="";$gender="Female";$dob="";$dob_day="0";$dob_month="0";$dob_year="0";$marital_status="";$m_std_code="91";$mobile="";
	$height="";$weight="";$blood_group="";$phone="";$p_std_code="";$p_area="";$user_email="";$adhar_card_no="";$imgPhoto="noimage.jpg";
	$registration_type="Main";$createdby="0"; $updatedby=""; $updatedate=""; $update_times="";$isactive="0";$isdeleted="0";
	$imgRemoveDisplay="none";$earning_member="0";$profession_id="";$company_name="";$designation="";$travel_mode="";$daily_travel_time_h="0";
	$daily_travel_time_m="0";$age_of_retirement="";$life_expectancy="";$pid="0"; $accountholder=""; $password=""; $professionid=0;	 $height_type="0"; $mode="";
	 $randomno = rand(0, 9999);
	$randomno2 = rand(0, 999);
$randomno3 = rand(0, 99); $lastname=""; $user_profile_id="";

			
	if(isset($_GET['cid'])) {
		$edit_id = $converter->decode($_GET['cid']);
	}
	
	
	
	//Alert($edit_id);

	if(isset($_GET['pid'])) {
		$pid = $converter->decode($_GET['pid']);
	}
	else
	{
		$pid =$_SESSION['UserID'];
	}	
	
	$parent_email=GetValue("select user_email as col from tbl_users where user_id=".$pid, "col");
	
	if(isset($_GET['mode'])) {
		$mode = $converter->decode($_GET['mode']);
	}
//	Alert ($mode);
	
	if(isset($_GET['record'])) {
		$record_id = $_GET['record'];
	}
	else
	{
		$record_id="0";
	}
	
	
	//Alert ($mode);

	if(isset($_POST['btnSubmit']) || isset($_POST['btnSubmitAddMore']))
	{
		
		$family_mem_count = GetValue("SELECT Count(*) as col FROM  ".Users." where parent_id=$user_id order by name", "col"); 
		
		if($family_mem_count>=5)
		{
			AlertandRedirect("You cannot add more than 5 family members.", $strHostName."/page.php?dir=registration/step3&mode=".$_GET['mode']);
			return;
		}
		
		
		$name= trim(str_replace("'", "''", $_POST['txt_Fullname']));
		$lastname= trim(str_replace("'", "''", $_POST['txt_Lastname']));
		$password=$converter->encode(trim(str_replace("'", "''", $_POST['txtPassword'])));
		$gender= trim(str_replace("'", "''", $_POST['Gender']));
		$dob_day= trim(str_replace("'", "''", $_POST['cmb_Date']));
		$dob_month= trim(str_replace("'", "''", $_POST['cmb_Month']));
		$dob_year= trim(str_replace("'", "''", $_POST['cmb_Year']));
		$marital_status= trim(str_replace("'", "''", $_POST['cmb_Marital_Status']));
		$height= trim(str_replace("'", "''", $_POST['txt_Height']));
		$height_type= trim(str_replace("'", "''", $_POST['cmb_Height']));
		$weight= trim(str_replace("'", "''", $_POST['txt_Weight']));
		$blood_group= trim(str_replace("'", "''", $_POST['txt_Blood_Group']));
		$p_std_code= trim(str_replace("'", "''", $_POST['txt_Landline_code']));
		$p_area= trim(str_replace("'", "''", $_POST['txt_Area_code']));
		$phone= trim(str_replace("'", "''", $_POST['txt_landline_no']));
		$m_std_code = trim(str_replace("'", "''", $_POST['txt_Mobile_code']));
		$mobile= trim(str_replace("'", "''", $_POST['txt_Mobile_no']));
		$user_email= trim(str_replace("'", "''", $_POST['txt_Email']));
		$adhar_card_no= trim(str_replace("'", "''", $_POST['txt_UID']));
		$accountholder= trim(str_replace("'", "''", $_POST['cmb_accountholder']));

		//Alert ($password);
		if(isset($_POST['Chk_Earn_Member']))
		{
			//$earning_member= trim(str_replace("'", "''", $_POST['Chk_Earn_Member']));
			$earning_member=2;
		}
		else
		{
			$earning_member=1;
		}
		
		if(isset($_POST['txt_Company_name']))
		{
			$company_name= trim(str_replace("'", "''", $_POST['txt_Company_name']));
		}
		
		if(isset($_POST['cmb_Profession']))
		{
			$profession_id= trim(str_replace("'", "''", $_POST['cmb_Profession']));
		}
		
		if(isset($_POST['txt_Designation']))
		{
			$designation= trim(str_replace("'", "''", $_POST['txt_Designation']));
		}
		
		if(isset($_POST['txt_Travel_Mode']))
		{
				$travel_mode= trim(str_replace("'", "''", $_POST['txt_Travel_Mode']));
		}
		
		if(isset($_POST['cmb_Travel_hour']))
		{
				$daily_travel_time_h= trim(str_replace("'", "''", $_POST['cmb_Travel_hour']));
		}
	
		if(isset($_POST['cmb_Travel_Min']))
		{
				$daily_travel_time_m= trim(str_replace("'", "''", $_POST['cmb_Travel_Min']));
		}
		
		
		$user_profile_id= trim(str_replace("'", "''", $_POST['txtMemberProfileID']));
		
				
		
		$imgPhoto = $_FILES['flPhoto']['name'];
		$uploaddir = './profile_pic/'; 
		if ($imgPhoto != "") {
			$uploaddir = './profile_pic/'; 
			$random = rand(0, 9999);
			$file = $uploaddir .$random.basename($_FILES['flPhoto']['name']); 
			$imgPhoto=UploadAndResizeImage("flPhoto",$uploaddir,900,800,$random);
		} elseif($_POST['txtFileName'] != "") {
			$imgPhoto = $_POST['txtFileName'];
		}

		 
		 		
		if(isset($_POST['chkIsDeleted'])){$isdeleted = $_POST['chkIsDeleted'];}

		if($isdeleted == "on") {$isdeleted = 1;	} else {$isdeleted = 0;}		
		
		
		if(isset($_POST['chkIsActive'])){$isactive = $_POST['chkIsActive'];	}

		if($isactive == "on") {	$isactive = 1;} else {$isactive = 0;}
		
	 
		
	 
		
		$createdate=date('d-m-Y h:i:s');		

		$user_type="Premium";
		$data = array(
			'name' => $name,
			'lastname' => $lastname,
			'user_profile_id' => $user_profile_id,
			'password' => $password,
			'accountholder' => $accountholder,
			'registration_date' => $createdate,
			'gender'=>$gender,
			'registration_type' => $registration_type,
			'dob_day' => $dob_day,
			'dob_month' => $dob_month,
			'dob_year' => $dob_year,
			'marital_status' => $marital_status,
			'height' => $height,
			'height_type' => $height_type,
			'weight' => $weight,
			'blood_group' => $blood_group,
			'p_std_code' => $p_std_code,
			'p_area' => $p_area,
			'phone' => $phone,
			'm_std_code' => $m_std_code,
			'mobile' => $mobile,
			'user_email' => $user_email,
			'adhar_card_no' => $adhar_card_no,
			'isactive' => 1,
			'isdeleted'=>0,
			'imgPhoto'=>$imgPhoto,
			'earning_member' => $earning_member,
			'profession_id' => $profession_id,
			'company_name' => $company_name,
			'designation' => $designation,
			'travel_mode' => $travel_mode,
			'daily_travel_time_h' => $daily_travel_time_h,
			'daily_travel_time_m' => $daily_travel_time_m,
			'pid'=>$pid,
			'user_type'=>$user_type,
		);
		 
		 
	    $recevied_message=$function->f_Add_register_step_3($data,$edit_id);
		$recevied_message_1  = explode("###", $recevied_message);
		
		
		
		if($recevied_message_1[0]=="insert record")
		{
				/*$to = $email;
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
			//SendEmail("MyPropertyStores", "info@MyPropertyStores.com",$to, "New Property Listing for ".$prop_type." in MyPropertyStores.com", $string);*/
	
		}
	
		if($recevied_message_1[0]!="")
		{
			//Redirect($strHostName."/page.php?dir=registration/thanks&record=".$converter->encode($recevied_message_1[0])."&menu_type=".$converter->encode("step1")."&cid=".$converter->encode($recevied_message_1[1]));
			if(isset($_POST['btnSubmitAddMore']))
			{
				Redirect($strHostName."/page.php?dir=registration/step3&mode=".$converter->encode("Add"));
				return;
			}
			
			if($mode=="Edit")
			{
				Redirect($strHostName."/page.php?dir=registration/family_member");
				return;
			}
			else
			{
			
				$parent_name=GetValue("select name as col from tbl_users where user_id=".$pid, "col");
				
				$messageText="Welcome to Alivemeter, ".$name.". ".$parent_name." aligned you to his account. Get premium benefits FREE upto 31/01/2015. We would love to hear from you on our social pages";
				$time=date('h:i:s');
				
				
				
				$url = "http://59.162.167.52/api/MessageCompose";
				
				$ch = curl_init();
				curl_setopt($ch, CURLOPT_URL, $url);
				curl_setopt($ch, CURLOPT_POSTFIELDS, 'admin=renish.paul@bloomtel.in&user=pinaki@alivemeter.com:ALIVEM&senderID=ALIVEM&receipientno='.$mobile.'&msgtxt='.$messageText.'&state=4');
				curl_setopt($ch, CURLOPT_POST, 1);
				curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
				curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
				$result = curl_exec($ch);
				
				
				$string="";

				$to = $user_email;
				$strSubject="Family Member New Registration in Alivemeter.com";
				
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
				$string=$string."<p style='font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 13px; color: #666666; line-height: 20px; padding-top: 10px; margin: 0px;'>".$parent_name." aligned you with Alivemeter on his account. We welcome you to our family of first 1000 members. Enjoy your premium membership benefits until 31<sup>st</sup> Jan 2015.</p>";
				
				$string=$string."<p style='font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 13px; color: #666666; line-height: 20px; padding-top: 10px; margin: 0px;'>Please find below your profile id and password as created by ".$parent_name." . We recommend you to change your password as soon as you sign in for security purposes.</p>";
				
				$string=$string."<p style='font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 13px; color: #666666; line-height: 20px; padding-top: 10px; margin: 0px;'>Profile id : ".$user_profile_id."</p>";
				
				$string=$string."<p style='font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 13px; color: #666666; line-height: 20px; padding-top: 10px; margin: 0px;'>Password : ".$converter->decode($password)."</p>";                         
				
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

				SendEmail("Alivemeter Team", "support@alivemeter.com", $user_email, $strSubject, $strBody);

				Redirect($strHostName."/page.php?dir=health/setup");
				return;
			}
		}
		else
	    {
			Alert("Some error is occured");
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
					$imgPhoto=$image1;
					$professionid=$row['profession_id'];	
					$password=$row['password'];	
					//Alert ($user_profile_id);
					$user_profile_id=$row['user_profile_id'];	
					if($imgPhoto!="noimage")
					{
						$imgRemoveDisplay="";
					}
					
					if($imgPhoto=="noimage.jpg")
					{
						$imgPhoto="noimage.jpg";
						$imgRemoveDisplay="none";
					}
					
					
					
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
<form class="form-horizontal" method="post" id="frmRegStep1" name="frmRegStep1" enctype="multipart/form-data" onSubmit="javascript:return reistration_step1_validation('1');">
  <div class="cal_full_size gray_bg">
    <div class="cal_12 m_outo">
      <div class="dvFloat" style="padding:20px 0px 100px 0px; ">
        <div class="dvFloat" style="padding:25px 10px; font-size:16px; color:#7ca500;">
        	Alivemeter encourages entire family to embrace health living and allows upto 3 additional members to get aligned. So get going..
        </div>
        <div class="dvWrapper">
          <div style=" padding:0px 0px 35px 0px">
            <div style="margin:0px auto; width:1000px; border:solid 0px red;">
              <div class="ali_div_left">
                <div class="dvFloat formpadding">
                  <div class="formlabel">
                    <label class="formlabel" style="line-height:15px;">Relation with key account holder <span class="redtxt">*</span></label>
                  </div>
                  <div class="formcontrol">
                    <select  id="cmb_accountholder" name="cmb_accountholder" class="existing_event" style="width: 192px;" tabindex="1" onchange="javascript:return reistration_step1_validation('0');">
                      <option value="0">Select</option>        
					  <?php 
						$query = "SELECT * FROM ".Relation." WHERE relation_id <> 0";
						//echo $query;
						$result = mysql_query($query);
						if($result != "") {
							$rowcount = mysql_num_rows($result);
							if($rowcount > 0) {
								while($row = mysql_fetch_assoc($result)) {
									extract($row);		
									$relation_id=$row['relation_id'];
						 ?>
                        <option value="<?php echo $relation_id;?>" <?php if($accountholder==$relation_id){echo "selected";}?>><?php echo $relation_name;?></option>
                      
                      <?php }}} ?>
                    </select>
					<div id="DvRelation" class="tickclass" style="display:none"><img src="<?php echo $strHostName; ?>/images/tick.png" alt="" title="" border="0" style="vertical-align:middle"/></div>
					   <div id="DvErrorRelation" class="warning" style="display:none">Please choose relation.</div>
                  </div>
                </div>
                 
                  
                  
                   <div class="dvFloat formpadding" style="padding:10px 0px 0 0px;">
					<div class="formlabel">
					  <label class="formlabel">Name <span class="redtxt">*</span></label>
					</div>
					<!--<div class="formcontrol" onmousedown="javascript:CreateProfileID(<?php echo $random;?>);">-->
                    
                    <div class="formcontrol">
					  <input id="txt_Fullname" name="txt_Fullname" value="<?php echo $name?>" type="text" style="width:105px; margin-right:8px;" placeholder="First Name" onBlur="javascript:return reistration_step1_validation('0');"/>
                        <input id="txt_Lastname" name="txt_Lastname" value="<?php echo $lastname?>"  type="text"  style="width:105px;" placeholder="Last Name" onBlur="javascript:return reistration_step1_validation('0');"/>
                        
                        <input id="txtRandomID2" name="txtRandomID2" value="<?php echo $randomno2;?>"  type="hidden"  style="width:105px;"/>
                        <input id="txtRandomID3" name="txtRandomID3" value="<?php echo $randomno3;?>"  type="hidden"  style="width:105px;"/>
                        
					    
                       <div id="DvName" class="tickclass" style="display:none"><img src="<?php echo $strHostName; ?>/images/tick.png" alt="" title="" border="0" style="vertical-align:middle"/></div>
                       
					   <div id="DvErrorName" class="warning" style="display:none">Please enter Name.</div>
					</div>
				  </div>
                  
                  
                  
                  <div class="dvFloat formpadding" style="display:'';">
					<div class="formlabel">
					  <label class="formlabel">Profile ID <span class="redtxt">*</span></label>
					</div>
					<div class="formcontrol">
					  	<?php if($mode=="Edit") { ?>
                       	 <input type="text" name="txtMemberProfileID" id="txtMemberProfileID" value="<?php echo $user_profile_id;?>" readonly="readonly">
                        <?php } else { ?>
                        	 <input type="text" name="txtMemberProfileID" id="txtMemberProfileID" value="" onblur="javscript:CheckDuplicationMemberUsernameRegistered('1')" >
                          <div class="dvFloat" style="font-size:12px; line-height:25px;">Note: This Profile ID will be used as your Login ID.</div>
                          <div id="DvCorMemUsername" class="tickclass" style="display:none; margin-top:-52px;"><img src="<?php echo $strHostName; ?>/images/tick.png" alt="" title="" border="0" style="vertical-align:middle"/></div>
                          <div id="DvErrorDupEmail" class="warning" style="display:none; line-height:15px;">Someone already has that username. <br />Try another?</div>
                           <div id="DvErrorDupEmail3" class="warning" style="display:none; line-height:15px;">Please enter Profile ID</div>
                         <div id="dvDupMemberProfileID" style="border:solid 0px red; width:250px; float:left; display: none;">
                         	&nbsp;
                        </div>
                        <?php } ?>
                        
                         
                    </div>
				  </div>
                  
                  
                  
				  <div class="dvFloat formpadding">
					<div class="formlabel">
					  <label class="formlabel">Gender <span class="redtxt">*</span></label>
					</div>
					<div class="formcontrol">
					  <input type="radio" id="Male" name="Gender" value="Male" <?php if($gender=="Male"){echo "checked";} ?> >
					  <label for="Male">Male</label>
					  &nbsp;&nbsp;
					  <input type="radio" id="Female" name="Gender" value="Female" <?php if($gender=="Female"){echo "checked";} ?> >
					  <label for="Female">Female</label>
					  &nbsp;&nbsp; </div>
				  </div>
				  <div class="dvFloat formpadding">
					<div class="formlabel">
					  <label class="formlabel">Date of Birth <span class="redtxt">*</span></label>
					</div>
					<div class="formcontrol">
					  <div class="dvFloat" style=" border: solid 0px #006633;">
						<div style="float:left; padding:0px 14px 0px 0px; border: solid 0px #006633;">
						  <select name="cmb_Date" id="cmb_Date" class="existing_event" style="width: 18px;" tabindex="3" onchange="javascript:return reistration_step1_validation('0');">
							<option value="0" selected="selected">DD</option>
							<?php for($iDay=1;$iDay < 32;$iDay++){ ?>
								<option value="<?php echo $iDay?>" <?php if($iDay==$dob_day){echo "selected";}?> ><?php echo $iDay?></option>
							<?php } ?>
						  </select>
						</div>
						<div style="float:left; padding:0px 13px 0px 0px">
						  <select id="cmb_Month" name="cmb_Month"  title="" class="existing_event" style="width: 18px;" tabindex="3" onchange="javascript:return reistration_step1_validation('0');">
							<option value="0">MM</option>
							<?php for($iMonth=1;$iMonth < 13;$iMonth++){ ?>
								<option value="<?php echo $iMonth?>" <?php if($iMonth==$dob_month){echo "selected";}?> ><?php echo $iMonth?></option>
							<?php } ?>
						  </select>
						</div>
						<div style="float:left; padding:0px 0px 0px 0px">
						  <select name="cmb_Year" id="cmb_Year"  title="" class="existing_event" style="width: 26px;" tabindex="3" onchange="javascript:return reistration_step1_validation('0');">
							<option value="0">YYYY&nbsp;&nbsp;</option>
							 <?php for($iYear=1920;$iYear < 2015;$iYear++){ ?>
								<option value="<?php echo $iYear?>" <?php if($iYear==$dob_year){echo "selected";}?> ><?php echo $iYear?></option>
							 <?php } ?>
						  </select>
						</div>
						<div id="DvDate" class="tickclass" style="display:none" ><img src="<?php echo $strHostName; ?>/images/tick.png" alt="" title="" border="0" style="vertical-align:middle"/></div>
						<div id="DvErrorDate" class="warning" style="display:none">Please choose proper date.</div>
					  </div>
					</div>
				  </div>
				  <div class="dvFloat formpadding">
					<div class="formlabel">
					  <label class="formlabel">Marital Status <span class="redtxt">*</span></label>
					</div>
					<div class="formcontrol">
					  <select  id="cmb_Marital_Status" name="cmb_Marital_Status"  tabindex="1"  class="existing_event" style="width: 191px;" onchange="javascript:return reistration_step1_validation('0');">
						<option value="0">Select</option>
						<option value="Married" <?php if($marital_status=="Married"){echo "selected";} ?>>Married</option>
						<option value="Unmarried" <?php if($marital_status=="Unmarried"){echo "selected";} ?>>Unmarried</option>
					  </select>
					  <div id="DvMarital" class="tickclass" style="display:none"><img src="<?php echo $strHostName; ?>/images/tick.png" alt="" title="" border="0" style="vertical-align:middle"/></div>
					  <div id="DvErrorMarital" class="warning" style="display:none">Please choose marital status.</div>
					</div>
				  </div>
				  <div class="dvFloat formpadding">
					<div class="formlabel">
					  <label class="formlabel">Height <span class="redtxt">*</span></label>
					</div>
					<div class="formcontrol">
					  <input type="text" name="txt_Height" id="txt_Height" value="<?php echo $height?>"  style="width:120px; margin-right:9px; height:20px;" onBlur="javascript:return reistration_step1_validation('0');"/>
                      <select  id="cmb_Height" name="cmb_Height" style="width: 50px;"  class="existing_event"  tabindex="1" onchange="javascript:return reistration_step1_validation('0');">
						<option value="0">Select</option>
						<option value="FT" <?php if($height_type=="FT"){echo "selected";} ?>>ft</option>
						<option value="CM" <?php if($height_type=="CM"){echo "selected";} ?>>cm</option>
					  </select>
                      <div id="DvHeight" class="tickclass" style="display:none"><img src="<?php echo $strHostName; ?>/images/tick.png" alt="" title="" border="0" style="vertical-align:middle"/></div>
					  <div id="DvErrorHeight" class="warning" style="display:none">please choose correct height</div>
					</div>
				  </div>
				  <div class="dvFloat formpadding">
					<div class="formlabel">
					  <label class="formlabel">Weight <span class="redtxt">*</span></label>
					</div>
					<div class="formcontrol">
					  <input type="text" name="txt_Weight" id="txt_Weight" value="<?php echo $weight?>" onBlur="javascript:return reistration_step1_validation('0');"/>
                       <div id="DvWeight" class="tickclass" style="display:none"><img src="<?php echo $strHostName; ?>/images/tick.png" alt="" title="" border="0" style="vertical-align:middle"/></div>
					  <div id="DvErrorWeight" class="warning" style="display:none">Please enter weight.</div>
					</div>
				  </div>
				  <div class="dvFloat formpadding">
					<div class="formlabel">
					  <label class="formlabel">Blood Group</label>
					</div>
					<div class="formcontrol">
					  <!--input type="text" name="txt_Blood_Group" id="txt_Blood_Group" value="<?php echo $blood_group?>" /-->
					<select name="txt_Blood_Group" id="txt_Blood_Group"> 
					<option value=""  selected>Select</option>   
					<option value="O+"  <?php echo ($blood_group=="O+") ? "selected" : null;?>>O+</option>
					<option value="O-" <?php echo ($blood_group=="O-") ? "selected" : null;?>>O-</option>
					<option value="A+"  <?php echo ($blood_group=="A+") ? "selected" : null;?>>A+</option>
					<option value="A-" <?php echo ($blood_group=="A-") ? "selected" : null;?>>A-</option>
					<option value="B+"  <?php echo ($blood_group=="B+") ? "selected" : null;?>>B+</option>
					<option value="B-" <?php echo ($blood_group=="B-") ? "selected" : null;?>>B-</option>
					<option value="AB+"  <?php echo ($blood_group=="AB+") ? "selected" : null;?>>AB+</option>
					<option value="AB-" <?php echo ($blood_group=="AB-") ? "selected" : null;?>>AB-</option>
					<option value="O-Rh+"  <?php echo ($blood_group=="O-Rh+") ? "selected" : null;?>>O-Rh+</option>
					<option value="O-Rh-" <?php echo ($blood_group=="O-Rh-") ? "selected" : null;?>>O-Rh-</option>
					<option value="A-Rh+"  <?php echo ($blood_group=="A-Rh+") ? "selected" : null;?>>A-Rh+</option>
					<option value="A-Rh-" <?php echo ($blood_group=="A-Rh-") ? "selected" : null;?>>A-Rh-</option>
					<option value="B-Rh+"  <?php echo ($blood_group=="B-Rh+") ? "selected" : null;?>>B-Rh+</option>
					<option value="B-Rh-" <?php echo ($blood_group=="B-Rh-") ? "selected" : null;?>>B-Rh-</option>
					<option value="AB-Rh+"  <?php echo ($blood_group=="AB-Rh+") ? "selected" : null;?>>AB-Rh+</option>
					<option value="AB-Rh-" <?php echo ($blood_group=="AB-Rh-") ? "selected" : null;?>>AB-Rh-</option>
					</select>
					</div>
				  </div>
				  <div class="dvFloat formpadding">
					<div class="formlabel">
					  <label class="formlabel">Phone(landline)</label>
					</div>
					<div class="formcontrol">
					  <div style="float:left; padding:0px 15px 0px 0px">
						<input type="text" name="txt_Landline_code" id="txt_Landline_code" value="<?php echo $p_std_code?>"  placeholder="+91" style="width:30px">
					  </div>
					  <div style="float:left; padding:0px 15px 0px 0px">
						<input type="text" name="txt_Area_code" id="txt_Area_code" value="<?php echo $p_area?>"  placeholder="Area Code" style="width:65px">
					  </div>
					  <div style="float:left; padding:0px 0px 0px 0px">
						<input type="text" name="txt_landline_no" id="txt_landline_no" value="<?php echo $phone?>"  placeholder="" style="width:80px">
					  </div>
					</div>
				  </div>
				  <div class="dvFloat formpadding">
					<div class="formlabel">
					  <label class="formlabel">Mobile <span class="redtxt">*</span></label>
					</div>
					<div class="formcontrol">
					  <div style="float:left; padding:0px 15px 0px 0px">
						<input type="text" name="txt_Mobile_code" id="txt_Mobile_code" value="<?php echo  $m_std_code?>"  placeholder="+91" style="width:30px"  maxlength="3" readonly="readonly">
					  </div>
					  <div style="float:left; padding:0px 0px 0px 0px">
						<input type="text" name="txt_Mobile_no" id="txt_Mobile_no" value="<?php echo $mobile?>"  placeholder="" style="width:172px"  maxlength="12" onBlur="javascript:return reistration_step1_validation('0');" onkeydown="return ( event.ctrlKey || event.altKey 
                    || (47<event.keyCode && event.keyCode<58 && event.shiftKey==false) 
                    || (95<event.keyCode && event.keyCode<106)
                    || (event.keyCode==8) || (event.keyCode==9) 
                    || (event.keyCode>34 && event.keyCode<40) 
                    || (event.keyCode==46) )">
					  </div>
					  <div id="DvMobile" class="tickclass" style="display:none"><img src="<?php echo $strHostName; ?>/images/tick.png" alt="" title="" border="0" style="vertical-align:middle"/></div>
					  <div id="DvErrorMobile" class="warning" style="display:none">Please enter proper mobile number.</div>
					</div>
				  </div>
				  <div class="dvFloat formpadding">
					<div class="formlabel">
					  <label class="formlabel">Email <span class="redtxt">*</span></label>
					</div>
					<div class="formcontrol">
					 <!-- <input type="text" name="txt_Email" id="txt_Email" value="<?php echo $user_email?>" onblur="javascript: reistration_step1_validation('0'); CheckDupEmailMember('<?php echo $parent_email?>');" />-->
                    
                     <input type="text" name="txt_Email" id="txt_Email" value="<?php echo $user_email?>" onblur="javascript:reistration_step1_validation('0');"  />
                      
                      
                      
					  <div id="DvEmail" class="tickclass" style="display:none"><img src="<?php echo $strHostName; ?>/images/tick.png" alt="" title="" border="0" style="vertical-align:middle"/></div>
					  <div id="DvErrorEmail" class="warning" style="display:none">Please enter proper email.</div>
                     <!-- <div id="DvErrorDupEmail" class="warning" style="display:none; line-height:15px;">email ID exists.<br /> Add new email ID</div>-->
                   
					</div>
				  </div>
                  <div class="dvFloat formpadding">
                  <div class="formlabel">
                    <label class="formlabel">Password <span class="redtxt">*</span></label>
                  </div>
                  <div class="formcontrol">
                  	<input type="password" name="txtPassword" id="txtPassword" value="<?php echo $converter->decode($password)?>"  onBlur="javascript:return reistration_step1_validation('0');"/>
                    <span style="font-size:11px; display:none;"> The password will be sent to the aligned family <br /> member email id as given above.
</span> 
<div id="DvPassword" class="tickclass" style="display:none"><img src="<?php echo $strHostName; ?>/images/tick.png" alt="" title="" border="0" style="vertical-align:middle"/></div>
					  <div id="DvErrorPassword" class="warning" style="display:none">Please enter password.</div>
                    </div>
                </div>
				  <div class="dvFloat formpadding">
					<div class="formlabel">
					  <label class="formlabel">UID(adhar card no.)</label>
					</div>
					<div class="formcontrol">
					  <input type="text" name="txt_UID" id="txt_UID" value="<?php echo $adhar_card_no?>" />
					</div>
				  </div>
                
                
              </div>
              <div class="ali_div_right">
                <div class="dvFloat formpadding">
                  <div class="formlabel"> <div  style="background-image:url(images/register_steps/small_upload_pic_bg.jpg); background-repeat:no-repeat; width:112px; height:131px; margin:0px auto;padding:0px; float:left">
                    <div  style="text-align:center;padding:5px 1px 0px 0px;"><img src="<?php echo $strHostName;?>/profile_pic/<?php echo $imgPhoto?>" id="imgPhoto" name="imgPhoto" alt="" style="width:101px; height:101px;"></div>
                  </div></div>
                  <div class="formcontrol"><div class="dvFloat" style="text-align:left; padding-top:50px"> 
				  
				  <input type="file" id="flPhoto" name="flPhoto" style="width:90px;" onChange="javascript:GetFileInfo();"/>
					  <input type="hidden" id="txtFileName" name="txtFileName" value="<?php echo $imgPhoto?>" />
					 <input type="hidden" name="imgwidth" id="imgwidth"  />
					 <input type="hidden" name="imgheight" id="imgheight"  />
					 <input type="hidden" name="imgfilesize" id="imgfilesize"  />
					 <br/><div style="float:left; width:90px; text-align:center;"><a style="cursor:pointer;color:red;display:<?php echo $imgRemoveDisplay?>;font-weight:bold;" onClick="javascript:RemoveImage();" id="aRemoveImage">X</a></div>
				  </div></div>
                </div>
                 <div class="dvFloat formpadding" >
                  <div class="formlabel">
                    <label class="formlabel">Earning Member  </label>
                  </div>
                  <div class="formcontrol">
                    <input type="checkbox" name="Chk_Earn_Member" id="Chk_Earn_Member"  value="0" onClick="javascript:enabledisable()"  <?php if($earning_member==2) { echo "checked";}?>/>
                  </div>
                </div> <div class="dvFloat formpadding"  id="divEnable">
                <div class="dvFloat formpadding"  id="divEnable">
                  <div class="formlabel">
                    <label class="formlabel">Profession <span class="redtxt">*</span></label>
                  </div>
                  <div class="formcontrol">
                  <select  id="cmb_Profession" name="cmb_Profession"  tabindex="1" class="existing_event" style="width: 191px;" onChange="javascript:reistration_step2_validation('0');" >
                       <option value="0">Select</option>    
                        <?php 
						$query = "SELECT * FROM ".Profession." WHERE profession_id <> 0 and isdeleted=0 and isactive=1 order by profession_name";
						//echo $query;
						$result = mysql_query($query);
						if($result != "") {
							$rowcount = mysql_num_rows($result);
							if($rowcount > 0) {
								while($row = mysql_fetch_assoc($result)) {
									extract($row);	
										$proid=$row['profession_id'];
						 ?>
                        	<option value="<?php echo $proid;?>" <?php if($professionid==$proid){echo "selected";}?>><?php echo $profession_name;?></option>
                        <?php }}} ?>
                        </select>
					 <div id="DvProfession" class="tickclass" style="display:none"><img src="<?php echo $strHostName; ?>/images/tick.png" alt="" title="" border="0" style="vertical-align:middle"/></div>
					  <div id="DvErrorProfession" class="warning" style="display:none">Please choose profession.</div>
                  </div>
                </div>
                <div class="dvFloat formpadding" >
                  <div class="formlabel">
                    <label class="formlabel">Company Name <span class="redtxt">*</span></label>
                  </div>
                  <div class="formcontrol">
                    <input type="text" name="txt_Company_name" id="txt_Company_name" value="<?php echo $company_name?>" onBlur="javascript:reistration_step2_validation('0');" />
					 <div id="DvCompany" class="tickclass" style="display:none"><img src="<?php echo $strHostName; ?>/images/tick.png" alt="" title="" border="0" style="vertical-align:middle"/></div>
					 <div id="DvErrorCompany" class="warning" style="display:none">Please enter company name.</div>
                  </div>
                </div>
                <div class="dvFloat formpadding">
                  <div class="formlabel">
                    <label class="formlabel">Designation</label>
                  </div>
                  <div class="formcontrol">
                    <input type="text" name="txt_Designation" id="txt_Designation" value="<?php echo $designation?>" />
                  </div>
                </div>
                <div class="dvFloat formpadding">
                  <div class="formlabel">
                    <label class="formlabel">Travel Mode</label>
                  </div>
                  <div class="formcontrol">
                    <input type="text" name="txt_Travel_Mode" id="txt_Travel_Mode" value="<?php echo $travel_mode?>" />
                  </div>
                </div>
                <div class="dvFloat formpadding">
                  <div class="formlabel">
                    <label class="formlabel">Daily Travel Time</label>
                  </div>
                  <div class="formcontrol">
                    <div style="float:left; padding:0px 15px 0px 0px">
                    	<select name="cmb_Travel_hour" id="cmb_Travel_hour"  tabindex="1" class="existing_event" style="width: 4px;">
                            <option value="0" selected="selected">HH</option>
							    <?php for($iHour=1;$iHour < 24;$iHour++){ ?>
                                    <option value="<?php echo $iHour?>" <?php if($iHour==$daily_travel_time_h){echo "selected";}?> ><?php echo $iHour?></option>
                                <?php } ?>
                        </select>
                      
                    </div>
                    <div style="float:left; padding:0px 15px 0px 0px">
                      <select name="cmb_Travel_Min" id="cmb_Travel_Min" tabindex="1" class="existing_event" style="width: 4px;">
                          <option value="Min" selected="selected">Min</option>
						 <option value="0" <?php if(""==$daily_travel_time_m){echo "selected";}?> >0</option>
                                    <option value="15" <?php if("15"==$daily_travel_time_m){echo "selected";}?> >15</option>
                                    <option value="30" <?php if("30"==$daily_travel_time_m){echo "selected";}?> >30</option>
                                    <option value="45" <?php if("45"==$daily_travel_time_m){echo "selected";}?> >45</option>
                                    
                       
                      </select>
                    </div>
                   
                  </div>
                </div>
                
                <div class="dvFloat formpadding"  style="display:none;">
                  <div class="formlabel">
                    <label class="formlabel">Age of Retirement <span class="redtxt">*</span></label>
                  </div>
                  <div class="formcontrol">
                    <input type="text" name="tx_tAge_of_Retirement" id="tx_tAge_of_Retirement" value=<?php echo $age_of_retirement?>"" onBlur="javascript:reistration_step2_validation('0');" /><div style="padding:10px 0px 0px 10px; float:left;color: #a8a8a8;">years
					 <div id="DvAgeRet" class="tickclass" style="display:none"><img src="<?php echo $strHostName; ?>/images/tick.png" alt="" title="" border="0" style="vertical-align:middle"/></div>
					 <div id="DvErrorAgeRet" class="warning" style="display:none">Please enter Age of Retirement.</div>
					</div>
                  </div>
                </div>
                <div class="dvFloat formpadding"  style="display:none;">
                  <div class="formlabel">
                    <label class="formlabel">Life Expectancy <span class="redtxt">*</span></label>
                  </div>
                  <div class="formcontrol">
                    <input type="text" name="txt_Life_Expectancy" id="txt_Life_Expectancy" value="<?php echo $life_expectancy?>" onBlur="javascript:reistration_step2_validation('0');" /><div style="padding:10px 0px 0px 10px; float:left; color: #a8a8a8;">years
					 <div id="DvLife" class="tickclass" style="display:none"><img src="<?php echo $strHostName; ?>/images/tick.png" alt="" title="" border="0" style="vertical-align:middle"/></div>
					 <div id="DvErrorLife" class="warning" style="display:none">Please enter Life Expectancy.</div>
					
					</div>
                  </div>
                </div>
				</div>
                <div class="dvFloat formpadding">
                  <div class="formlabel">
                    &nbsp;
                  </div>
                  <div class="formcontrol">
                    &nbsp;
                  </div>
                </div>
                <div class="dvFloat formpadding">
                  <div class="formlabel">
                    &nbsp;
                  </div>
                  <div class="formcontrol">
                    &nbsp;
                  </div>
                </div></div>
                
                <div class="dvFloat formpadding">
                  <div class="formcontrol" style="width: 540px; float: left; border: solid 0px #151515; padding-left: 200px; padding-top: 15px;">
                  <?php if($mode!="Add") { ?>
                  	<div style="float:left;padding-right:5px; margin-top:2px; display:<?php if($mode=="Edit") { echo "none";}?>">
                   <a href="<?php echo $strHostName?>/page.php?dir=registration/step2&record=<?php echo $_GET['record']?>&cid=<?php echo $_GET['pid']?>&menu_type=<?php echo $_GET['menu_type']?>" class="button2">Back</a>
                  </div>
                  <?php } ?>
                  <div style="float:left;padding-right:5px; border:solid 0px red;">
                    <a href="<?php echo $strHostName; ?>/page.php?dir=health/setup" class="button1" style="margin-top:2px;">Skip for Now</a></div>
                            <div style="float:left; padding-right:10px; padding-top:2px;">                  
                        <input type="submit" class="button1" id="btnSubmit" name="btnSubmit" value="Submit" /></div>
							<div style="float:left; padding-top:2px;">                 
								 <?php if ($record_id!="") { ?>
                                 	
                                    
                                   		   <input type="submit" class="button1" id="btnSubmitAddMore" name="btnSubmitAddMore" value="Add More Member" style="margin-top:0px; margin-left:-5px;" />
                                        
                                         <!--<a href="<?php echo $strHostName?>/page.php?dir=registration/step3&record=<?php echo $record_id;?>&mode=<?php echo $_GET['mode']?>" class="button1">Add More Member</a>-->
                                   <?php } ?>
                                    
                                   
                                 
                                   
                                   		
                                        <!--<a href="<?php echo $strHostName?>/page.php?dir=registration/step3&mode=<?php echo $_GET['mode']?>" class="button1">Add More Member</a>-->
                                  
                                
                                 
                            </div>
                  </div>
                </div>
                <div class="dvFloat formpadding">
                  <div class="formlabel"> &nbsp; </div>
                  <div class="formcontrol"  style="text-align: left; padding: 0px 42px 20px 39px; float: left;"> <span class="redtxt">*</span> Compulsory field </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </form>
</section>
<script>
	enabledisable();
</script>
<style>
.dk_options_inner
{
	max-height: 180px;
	overflow: auto;
	position: relative;
}

</style>
