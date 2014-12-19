<?php 
$user_email=""; $password=""; 


if(isset($_POST['btnSignIn'])) {
		$user_email = str_replace("'", "''", $_POST['txtLoginUserName']);
		$password = str_replace("'", "''", $_POST['txtLoginPassword']);
		$query = "SELECT * FROM ".Users." WHERE user_email = '$user_email' and password = '$password' and isactive=1";
		$rows = $db->select($query);
		if($db->row_count > 0) {
			while($row = $db->get_row($rows, 'MYSQL_ASSOC')) {
				$_SESSION['UserID'] = $row['user_id'];
				$_SESSION['UserName'] = $row['name'];
				$_SESSION['UserType'] = $row['registration_type'];
				$_SESSION['UserEmail'] = $row['user_email'];
				####################__USER TRACK [START]__#######################
				$data = array(
					'user_id' => $_SESSION['UserID'],
					'user_type' => $_SESSION['UserType'],
					'time'=> date("d-M-Y h:i"),
				);
				$trackId = $db->insert_array("tbl_user_track", $data);
				####################__USER TRACK [ENDS]__#######################
				
				Redirect($strHostName."/page.php?dir=health/setup");
				
			
			}			
		} else {
			AlertandRedirect("Login failed. Invalid Username or Password.", "index.php");
		}
	}


?>

<?php 
if(isset($_POST['btnSubmit']))
	{
		$name= trim(str_replace("'", "''", $_POST['txt_Reg_Fullname']));
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
		
	 
		
	 	$password=rand(0, 9999);
		
		$createdate=date('d-m-Y h:i:s');		

		
		$data = array(
			'name' => $name,
			'password' => $password,
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
	
		if(!isset($_SESSION['UserID'])){
			if($recevied_message_1[0]!="")
			{
				Redirect($strHostName."/page.php?dir=registration/verification&record=".$converter->encode($recevied_message_1[0])."&menu_type=".$converter->encode("step1")."&cid=".$converter->encode($recevied_message_1[1]));
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

<header>
  <div class="bor_2colour"></div>
  <div class="head">
  <div style="width: 25px; position: fixed; top: 140px; right: 0px;z-index:1"><img src="images/search_icon.png" alt="" title="" border="0"></div>
    <div style="width: 25px; position: fixed; top: 175px; right: 0px;z-index:1"><img src="images/mail_icon.png" alt="" title="" border="0"></div>
    <div class="brand"><a href="index.php">Alive Meter - Health : Wealth : Happiness</a></div>
    <div class="n_o">
    
    
      <?php 
	  //Alert ($common->GetUserType());
	 if($common->GetUserType() != "" && $common->GetUserType() != "Guest") { ?>
          <div class="l_o">
          <ul id="dd_nav">
            
            <li>
                <a href="#" class="button_s"> <span class="txt"><?php echo $_SESSION['UserName']; ?></span> <span class="ar">&#9660;</span> </a>
                 <ul style="width: 247px; background-color: #83a819;">
                      <li style="border-bottom: solid 1px #aac457;"><a href="myprofile.html">My Profile</a></li>
                    <li style="border-bottom: solid 1px #aac457;"><a href="hw_afm_form.html">Align My Family</a></li>
                    <li style="border:solid 0px red; height:100px;">
                      <div class="dvFloat">
                        <div style="float:left;width:89%"><a href="#" style="color:#FFFFFF;">Added Family Member</a></div>
                        <div style="float:left;width:10%; color:#aac457; text-align:center">3/5</div>
                      </div>
                      <ul style="width:250px;padding:25px 0px 0px 0px;">
                        <li>
                          <div class="dvFloat">
                            <div style="float:left; width:8%;"><img src="images/profile_img.jpg" alt="" /></div>
                            <div style="float:left;width:80%"><a href="#">Tanushri Guin</a></div>
                            <div style="float:left;width:10%; text-align:center"><img src="images/lock_img.jpg" alt=""></div>
                          </div>
                        </li>
                        <li>
                          <div class="dvFloat">
                            <div style="float:left; width:8%;"><img src="images/profile_img.jpg" alt="" /></div>
                            <div style="float:left;width:80%"><a href="#">Abcd Eghty</a></div>
                            <div style="float:left;width:10%; text-align:center"><img src="images/lock_img.jpg" alt=""></div>
                          </div>
                        </li>
                        <li>
                          <div class="dvFloat">
                            <div style="float:left; width:8%;"><img src="images/profile_img.jpg" alt="" /></div>
                            <div style="float:left;width:80%"><a href="#">Tyure Nmheyth</a></div>
                            <div style="float:left;width:10%; text-align:center"><img src="images/unlock_img.jpg" alt=""></div>
                          </div>
                        </li>
                      </ul>
                    </li>
                    <li style="border-top: solid 1px #aac457;padding-top:0px;margin-top:5px;"><a href="index.php?type=<?php echo $converter->encode("logout") ?>">Logout</a></li>
                </ul>
            </li></ul>
             <div class="follow_smal"><span class="f"></span><span class="t"></span><span class="p"></span><span class="i"></span></div>
          </div>
      <?php } else  { ?>
          <div class="l_o" style="border: solid 0px #006600;">
            <div class="sign green">
            <a class="btnsignup"  onClick="javascript:hidesignin();" style="cursor:pointer;">SIGN UP </a>
            <a href="#" class="btnsignin" onClick="javascript:hidesignup();" >Sign In</a>
            
                <div id="frmsignup" style="display:none">
                    <form method="post" id="signup" enctype="multipart/form-data" onsubmit="javascript:retrun Top_Registration();">
                    <p id="puser" style="padding-top: 6px;"><input id="txt_Reg_Fullname" name="txt_Reg_Fullname" value="First Name" title="firstname" type="text" style="width: 158px;"  onclick="javascript:GetRegValue('txt_Reg_Fullname','Click','First Name');" onblur="javascript:GetRegValue('txt_Reg_Fullname','blur','First Name');"/></p>        
                    <p>Gender: <input type="radio" id="RegMale" name="reg_Gender" value="Male">
					  <label for="Male">Male</label>
					  &nbsp;&nbsp;
					  <input type="radio" id="RegFemale" name="reg_Gender" value="Female" >
					  <label for="Female">Female</label></p>
                    <p><input id="txt_Reg_Email" name="txt_Reg_Email" value="Email" title="email" type="text" style="width: 158px;" /></p>
                    <p><input id="txt_Reg_Password" name="txt_Reg_Password" value="Password" title="password" type="text" style="width: 158px;" /></p>
                    <p><input id="txt_Reg_Confirm_Password" name="txt_Reg_Confirm_Password" value="Confirm Password" title="password" type="text" style="width: 158px;" /></p>
                   
                    <p><input id="txt_Reg_Mobile_no" name="txt_Reg_Mobile_no" value="Mobile No." title="mobileno" type="text" style="width: 158px;" /></p>
                    <div style="width: 100%; float: left; padding-top: 5px;">
                        <div style="width: 42%; float: left; border: solid 0px #003300; padding-left: 2px; text-align: left;">
                            <p class="submit">
                            <input id="resetbtn" value="Reset" type="submit" />
                            </p>
                        </div>
                        <div style="width: 47%; float: right; border: solid 0px #990033; padding-right: 8px;">
                            <p class="submit">
                            <input id="submitbtn" value="btnRegisterSubmit" id="btnRegisterSubmit" type="submit"  style="cursor:pointer" />
                            </p>
                        </div>
                    </div>
                    </form>
    
                </div>
            
                <div id="frmsignin" style="display:none">
               
                <form class="form-horizontal" method="post" enctype="multipart/form-data" id="signup"  onSubmit="javascript:return LoginValidation()">
                <p id="puser" style="padding-top: 6px;">
                	<input id="txtLoginUserName" name="txtLoginUserName" value="<?php echo $user_email; ?>" title="username" type="text" style="width: 158px;" placeholder="Username"/>
                </p>
                <p><br />
                	<input id="txtLoginPassword" name="txtLoginPassword" value="<?php echo $password; ?>" title="password" type="password" style="width: 158px;" placeholder="Password"/>
                </p>
                <div style="width: 100%; float: left; padding-top: 15px;">
                    <div style="width: 42%; float: left; border: solid 0px #003300; padding-left: 13px;">
                        <p style="text-align: left; text-decoration: underline;">Forgot username<br>Forgot password</p>
                    </div>
                    <div style="width: 47%; float: left; border: solid 0px #990033; text-align:center;margin-right:5px; color: #FFFFFF;">
                        <div style="float:right;">
                            <input type="submit" id="btnSignIn" name="btnSignIn" style="cursor: pointer; padding: 6px 17px 6px 20px;" class="buttoncupon" value="Log In"/>
                            
                        </div>
                    </div>
                </div>
                </form>
                </div>
            </div>
            <div class="follow_smal"><span class="f"></span><span class="t"></span><span class="p"></span><span class="i"></span></div>
          </div>
      <?php } ?>
      <div class="nav">
        <ul>
          <li><a href="index.php" class="selected">Home</a><span class="selected"></span></li>
          <li><a href="health_wealth.php">Health</a><span></span></li>
          <li><a href="top_stories.php">Top Stories</a><span></span></li>
          <li><a href="deals.php">Deals</a><span></span></li>
          <li><a href="reward_points.php">Reward Points</a><span></span></li>
        </ul>
      </div>
    </div>
  </div>
</header>