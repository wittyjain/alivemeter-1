<?php 
$user_email=""; $password=""; $update_times="";

if(isset($_POST['btnSignIn'])) {
		$user_email = str_replace("'", "''", $_POST['txtLoginUserName']);
		$password = str_replace("'", "''", $_POST['txtLoginPassword']);
		$query = "SELECT * FROM ".Clerk." WHERE email = '$user_email' and password = '$password' and isactive=1 and user_type='Admin'";
		//echo $query;
		$rows = $db->select($query);
		//Alert ($db->row_count);
		if($db->row_count > 0) {
			while($row = $db->get_row($rows, 'MYSQL_ASSOC')) {
				$_SESSION['UserClerkID'] = $row['clerk_id'];
				$_SESSION['UserType'] = $row['type'];
				$_SESSION['HospID'] = $row['hospital_name'];
				$_SESSION['UserDocName'] = $row['clerk_name'];
				$_SESSION['UserClerkEmail'] = $row['email'];
				
				
				####################__USER TRACK [START]__#######################
				if($update_times=="")
				{
					$update_times="0";
				}
				
				$data = array(
					'user_id' => $_SESSION['UserClerkID'],
					'user_type' => $_SESSION['UserType'],
					'update_times' => $update_times + 1,
					'time'=> date("d-M-Y h:i"),
				);
				$trackId = $db->insert_array("tbl_user_track", $data);
				####################__USER TRACK [ENDS]__#######################
				
				Redirect($strHostName."/patients_delayed.php");
			}			
		} 
		else {
			AlertandRedirect("Login failed. Invalid Username or Password.", "page_doctor.php?dir=clerk/login");
		}
	}

//Alert ($_SESSION['UserType']);

?>
<section>
  <div class="top_ou">
    <div class="top_in">
      <div class="top" style="padding-top:100px">
        <h1 style="font-weight: bold; font-size: 35px;"><span class="f_green"> Clerk</span> <span class="f_blue">Login</span></h1>
        <div id="loginform">
          <h2><span class="fontawesome-lock"></span>Sign In</h2>
            <form method="post" id="signup" enctype="multipart/form-data" onsubmit="javascript:return LoginValidation();">
	          <fieldset>
          <div class="dvFloat formpadding">
            <div style="float: left; line-height: 25px; text-align: left; font-size: 13px; width: 75px; border: solid 0px red; text-align: left; font-family: 'myriad_web_proregular'; color: #666666;">
              <label class="formlabel">Login Id <span class="redtxt">*</span></label>
            </div>
            <div class="formcontrol">
              <input type="text" name="txtLoginUserName" id="txtLoginUserName" value="" />
            </div>
          </div>
          <div class="dvFloat formpadding">
            <div  style="float: left; line-height: 25px; text-align: left; font-size: 13px; width: 75px; border: solid 0px red; text-align: left; font-family: 'myriad_web_proregular'; color: #666666;">
              <label class="formlabel">Password <span class="redtxt">*</span></label>
            </div>
            <div class="formcontrol">
              <input type="password" name="txtLoginPassword" id="txtLoginPassword" value="" />
            </div>
          </div>
          <div class="dvFloat formpadding" style="padding-top:10px;">
            <div style=" width:100px; height:30px; float:right; margin-right:75px;"> <a href="" class="button2" style="text-align:center">Reset</a></div>
            <div style=" width:100px; height:30px; float:right;padding-right:10px;"> 
            	<input type="submit" id="btnSignIn" name="btnSignIn" style="cursor: pointer;" class="button1" value="SUBMIT"/>
            </div>
          </div>
          </fieldset>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
