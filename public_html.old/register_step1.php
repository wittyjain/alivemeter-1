<?php include 'includes/common.inc.php'?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Alivemeter - Register Step1</title>
<?php include 'includes/links.php'?>
<script src="<?php echo $strHostName?>/js/step1_validation.js" type="text/javascript"></script>
</head>
<body>
<?php include 'includes/top.php'?>
<?php
	$edit_id="0";$name="";$gender="Female";$dob="";$dob_day="0";$dob_month="0";$dob_year="0";$marital_status="";$m_std_code="91";$mobile="";
	$height="";$weight="";$blood_group="";$phone="";$p_std_code="";$p_area="";$user_email="";$adhar_card_no="";$imgPhoto="noimage.jpg";
	$registration_type="Main";$createdby="0"; $updatedby=""; $updatedate=""; $update_times="";$isactive="0";$isdeleted="0";
	$imgRemoveDisplay="none";
			
	if(isset($_GET['cid'])) {
		$edit_id = $converter->decode($_GET['cid']);
	}

	if(isset($_POST['btnSubmit']))
	{
		$name= trim(str_replace("'", "''", $_POST['txt_Fullname']));
		$gender= trim(str_replace("'", "''", $_POST['Gender']));
		$dob_day= trim(str_replace("'", "''", $_POST['cmb_Date']));
		$dob_month= trim(str_replace("'", "''", $_POST['cmb_Month']));
		$dob_year= trim(str_replace("'", "''", $_POST['cmb_Year']));
		$marital_status= trim(str_replace("'", "''", $_POST['cmb_Marital_Status']));
		$height= trim(str_replace("'", "''", $_POST['txt_Height']));
		$weight= trim(str_replace("'", "''", $_POST['txt_Weight']));
		$blood_group= trim(str_replace("'", "''", $_POST['txt_Blood_Group']));
		$p_std_code= trim(str_replace("'", "''", $_POST['txt_Landline_code']));
		$p_area= trim(str_replace("'", "''", $_POST['txt_Area_code']));
		$phone= trim(str_replace("'", "''", $_POST['txt_landline_no']));
		$m_std_code = trim(str_replace("'", "''", $_POST['txt_Mobile_code']));
		$mobile= trim(str_replace("'", "''", $_POST['txt_Mobile_no']));
		$user_email= trim(str_replace("'", "''", $_POST['txt_Email']));
		$adhar_card_no= trim(str_replace("'", "''", $_POST['txt_UID']));

		
		
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

		
		$data = array(
			'name' => $name,
			'registration_date' => $createdate,
			'gender'=>$gender,
			'registration_type' => $registration_type,
			'dob_day' => $dob_day,
			'dob_month' => $dob_month,
			'dob_year' => $dob_year,
			'marital_status' => $marital_status,
			'height' => $height,
			'weight' => $weight,
			'blood_group' => $blood_group,
			'p_std_code' => $p_std_code,
			'p_area' => $p_area,
			'phone' => $phone,
			'm_std_code' => $m_std_code,
			'mobile' => $mobile,
			'user_email' => $user_email,
			'adhar_card_no' => $adhar_card_no,
			'isactive' => $isactive,
			'isdeleted'=>$isdeleted,
			'imgPhoto'=>$imgPhoto,
		);
		 
		 
	    $recevied_message=$function->f_Add_register_step_1($data,$edit_id);
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
			
			Redirect($strHostName."/register_step2.php?record=".$converter->encode($recevied_message_1[0])."&menu_type=".$converter->encode("step1")."&cid=".$converter->encode($recevied_message_1[1]));
					
			
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
					if($imgPhoto!="noimage")
					{
						$imgRemoveDisplay="";
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
    <div class="dvFloat">
      <div class="dvWrapper">
        <div style="float:left; padding:0px 0px 0px 35px; height:50px; border:solid 0px red;">
          <ul class="registersteps">
            <li class="active" style="width:350px;">
              <div>
                <div class="Step_title_Red"><a href="#" title="Step 1" style="padding:0px; margin:0px; text-align:left">Personal Details</a></div>
                <span><a href="#" title="Step 1">1</a></span><a href="#" title=""></a></div>
            </li>
            <li class="past" style="width:350px;">
              <div>
                <div class="Step_title_Grey"><a href="register_step2.php" title="Step 2" style="padding:0px; margin:0px; text-align:left">Professional Details</a></div>
                <span><a href="register_step2.php" title="Step 2">2</a></span><a href="register_step2.php" title=""></a></div>
            </li>
            <li class="current" style="width:237px;">
              <div>
                <div class="Step_title_Grey_small"><a href="register_step3.php" title="Step 2" style="padding:0px; margin:0px; text-align:left">Align Family Member</a></div>
                <span><a href="register_step3.php" title="Step 3">3</a></span><a href="register_step3.php" title=""></a></div>
            </li>
            <div class="registerstepsline"></div>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<section>
  <div class="cal_full_size gray_bg">
    <div class="cal_12 m_outo">
      <div class="dvFloat">
        <div class="dvWrapper">
          <div style=" padding:60px 0px 35px 0px">
            <div style="margin:0px auto; width:730px; border:solid 0px red;">
               <form class="form-horizontal" method="post" id="frmRegStep1" name="frmRegStep1" enctype="multipart/form-data" onSubmit="javascript:return reistration_step1_validation('1');">
				  <div class="ali_div_left_step1">
					<div  style="background-image:url(images/register_steps/upload_pic_bg.jpg); background-repeat:no-repeat; width:157px; height:171px; margin:0px auto;padding:0px;">
					  <div style="text-align:center;padding:7px 1px 0px 0px;"><img src="profile_pic/<?php echo $imgPhoto?>" id="imgPhoto" name="imgPhoto" alt="" style="width:142px;height:142px;"></div>
					</div>
					<div class="dvFloat" style="text-align:center"> <input type="file" id="flPhoto" name="flPhoto" style="width:85px;" onchange="javascript:GetFileInfo();"/>
					  <input type="hidden" id="txtFileName" name="txtFileName" value="<?php echo $imgPhoto?>" />
					 <input type="hidden" name="imgwidth" id="imgwidth"  />
					 <input type="hidden" name="imgheight" id="imgheight"  />
					 <input type="hidden" name="imgfilesize" id="imgfilesize"  />
					 <br/><a style="cursor:pointer;color:red;display:<?php echo $imgRemoveDisplay?>;font-weight:bold" onclick="javascript:RemoveImage();" id="aRemoveImage">X</a>
					</div>
				  </div>
				</div>
				<div class="ali_div_right_step1"> 
				
				  <div class="dvFloat formpadding">
					<div class="formlabel">
					  <label class="formlabel">Name <span class="redtxt">*</span></label>
					</div>
					<div class="formcontrol">
					  <input type="text" name="txt_Fullname" id="txt_Fullname" value="<?php echo $name?>" 
						onblur="javascript:reistration_step1_validation('0');" />
					   <div id="DvName" class="tickclass" style="display:none"><img src="<?php echo $strHostName; ?>/images/tick.jpg" alt="" title="" border="0" style="vertical-align:middle"/></div>
					   <div id="DvErrorName" class="warning" style="display:none">Please enter Name.</div>
					</div>
				  </div>
				  <div class="dvFloat formpadding">
					<div class="formlabel">
					  <label class="formlabel">Gender <span class="redtxt">*</span></label>
					</div>
					<div class="formcontrol">
					  <input type="radio" id="Male" name="Gender" value="Male" <?php if($gender=="Male"){echo "checked";} ?> onblur="javascript:reistration_step1_validation('0');">
					  <label for="Male">Male</label>
					  &nbsp;&nbsp;
					  <input type="radio" id="Female" name="Gender" value="Female" <?php if($gender=="Female"){echo "checked";} ?> onblur="javascript:reistration_step1_validation('0');">
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
						  <select name="cmb_Date" id="cmb_Date" class="existing_event" style="width: 4px;" tabindex="3" 
						  onchange="javascript: reistration_step1_validation('0');">
							<option value="0" selected="selected">DD</option>
							<?php for($iDay=1;$iDay < 32;$iDay++){ ?>
								<option value="<?php echo $iDay?>" <?php if($iDay==$dob_day){echo "selected";}?> ><?php echo $iDay?></option>
							<?php } ?>
						  </select>
						</div>
						<div style="float:left; padding:0px 13px 0px 0px">
						  <select id="cmb_Month" name="cmb_Month"  title="" class="existing_event" style="width: 6px;" tabindex="3" onchange="javascript:reistration_step1_validation('0');">
							<option value="0">MM</option>
							<?php for($iMonth=1;$iMonth < 13;$iMonth++){ ?>
								<option value="<?php echo $iMonth?>" <?php if($iMonth==$dob_month){echo "selected";}?> ><?php echo $iMonth?></option>
							<?php } ?>
						  </select>
						</div>
						<div style="float:left; padding:0px 0px 0px 0px">
						  <select name="cmb_Year" id="cmb_Year"  title="" class="existing_event" style="width: 15px;" tabindex="3" onchange="javascript:reistration_step1_validation('0');">
							<option value="0">YYYY&nbsp;&nbsp;</option>
							 <?php for($iYear=2006;$iYear < 2015;$iYear++){ ?>
								<option value="<?php echo $iYear?>" <?php if($iYear==$dob_year){echo "selected";}?> ><?php echo $iYear?></option>
							 <?php } ?>
						  </select>
						</div>
						<div id="DvDate" class="tickclass" style="display:none" ><img src="<?php echo $strHostName; ?>/images/tick.jpg" alt="" title="" border="0" style="vertical-align:middle"/></div>
						<div id="DvErrorDate" class="warning" style="display:none">Please choose proper date.</div>
					  </div>
					</div>
				  </div>
				  <div class="dvFloat formpadding">
					<div class="formlabel">
					  <label class="formlabel">Marital Status <span class="redtxt">*</span></label>
					</div>
					<div class="formcontrol">
					  <select  id="cmb_Marital_Status" name="cmb_Marital_Status"  tabindex="1"  class="existing_event" style="width: 180px;" onchange="javascript:reistration_step1_validation('0');">
						<option value="">Select</option>
						<option value="Married" <?php if($marital_status=="Married"){echo "selected";} ?>>Married</option>
						<option value="Unmarried" <?php if($marital_status=="Unmarried"){echo "selected";} ?>>Unmarried</option>
					  </select>
					  <div id="DvMarital" class="tickclass" style="display:none"><img src="<?php echo $strHostName; ?>/images/tick.jpg" alt="" title="" border="0" style="vertical-align:middle"/></div>
					  <div id="DvErrorMarital" class="warning" style="display:none">Please choose marital status.</div>
					</div>
				  </div>
				  <div class="dvFloat formpadding">
					<div class="formlabel">
					  <label class="formlabel">Height</label>
					</div>
					<div class="formcontrol">
					  <input type="text" name="txt_Height" id="txt_Height" value="<?php echo $height?>" />
					</div>
				  </div>
				  <div class="dvFloat formpadding">
					<div class="formlabel">
					  <label class="formlabel">Weight</label>
					</div>
					<div class="formcontrol">
					  <input type="text" name="txt_Weight" id="txt_Weight" value="<?php echo $weight?>" />
					</div>
				  </div>
				  <div class="dvFloat formpadding">
					<div class="formlabel">
					  <label class="formlabel">Blood Group</label>
					</div>
					<div class="formcontrol">
					  <input type="text" name="txt_Blood_Group" id="txt_Blood_Group" value="<?php echo $blood_group?>" />
					</div>
				  </div>
				  <div class="dvFloat formpadding">
					<div class="formlabel">
					  <label class="formlabel">Phone(landline)</label>
					</div>
					<div class="formcontrol">
					  <div style="float:left; padding:0px 15px 0px 0px">
						<input type="text" name="txt_Landline_code" id="txt_Landline_code" value="<?php echo $p_std_code?>" autofocus="" placeholder="+91" style="width:30px">
					  </div>
					  <div style="float:left; padding:0px 15px 0px 0px">
						<input type="text" name="txt_Area_code" id="txt_Area_code" value="<?php echo $p_area?>" autofocus="" placeholder="Area Code" style="width:65px">
					  </div>
					  <div style="float:left; padding:0px 0px 0px 0px">
						<input type="text" name="txt_landline_no" id="txt_landline_no" value="<?php echo $phone?>" autofocus="" placeholder="" style="width:80px">
					  </div>
					</div>
				  </div>
				  <div class="dvFloat formpadding">
					<div class="formlabel">
					  <label class="formlabel">Mobile <span class="redtxt">*</span></label>
					</div>
					<div class="formcontrol">
					  <div style="float:left; padding:0px 15px 0px 0px">
						<input type="text" name="txt_Mobile_code" id="txt_Mobile_code" value="<?php echo  $m_std_code?>" autofocus="" placeholder="+91" style="width:30px" onblur="javascript:reistration_step1_validation('0');">
					  </div>
					  <div style="float:left; padding:0px 0px 0px 0px">
						<input type="text" name="txt_Mobile_no" id="txt_Mobile_no" value="<?php echo  $mobile?>" autofocus="" placeholder="" style="width:172px" onblur="javascript:reistration_step1_validation('0');">
					  </div>
					  <div id="DvMobile" class="tickclass" style="display:none"><img src="<?php echo $strHostName; ?>/images/tick.jpg" alt="" title="" border="0" style="vertical-align:middle"/></div>
					  <div id="DvErrorMobile" class="warning" style="display:none">Please enter proper mobile number.</div>
					</div>
				  </div>
				  <div class="dvFloat formpadding">
					<div class="formlabel">
					  <label class="formlabel">Email <span class="redtxt">*</span></label>
					</div>
					<div class="formcontrol">
					  <input type="text" name="txt_Email" id="txt_Email" value="<?php echo $user_email?>" 
					  onblur="javascript: reistration_step1_validation('0');" />
					  <div id="DvEmail" class="tickclass" style="display:none"><img src="<?php echo $strHostName; ?>/images/tick.jpg" alt="" title="" border="0" style="vertical-align:middle"/></div>
					  <div id="DvErrorEmail" class="warning" style="display:none">Please enter proper email.</div>
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
				  <div class="dvFloat formpadding">
					<div class="formlabel"> &nbsp; </div>
					<div class="formcontrol"  style="">
					 
					 <input type="checkbox" id="chkIsActive" name="chkIsActive" <?php if($isactive == 1) { echo "checked"; } ?> style="display:none"/>
					  <input type="checkbox" id="chkIsDeleted" name="chkIsDeleted" <?php if($isdeleted == 1) { echo "checked"; } ?> style="display:none"/>


					  <input type="submit" class="button1" id="btnSubmit" name="btnSubmit" value="Submit" />
					</div>
				  </div>
				  <div class="dvFloat formpadding">
					<div class="formlabel"> &nbsp; </div>
					<div class="formcontrol"  style="text-align:right; padding:20px 42px 20px 0px"> <span class="redtxt">*</span> Compulsory field </div>
				  </div>
             
              </div>
            </div>
			 </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
   <?php include 'includes/bottom.php'?>
</body>
</html>
