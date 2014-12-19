<script type="text/javascript">
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
	
	xmlhttp.open("GET", hostname+"/includes/send_verfication_email.inc.php?tbl=Mobile&user_id="+user_id, true);
	xmlhttp.send();
	
}
function PasswordValidation()
{
	
	
	if(document.getElementById('txtVerify').value=="")
	{
		alert("Please Enter Verification Code.");
		document.getElementById('txtVerify').focus();
		return false;
		
	}
	
	if(IsNumeric(document.getElementById('txtVerify').value)==false)
	{
		alert("Please Enter Correct Verification Code.");
		document.getElementById('txtVerify').focus();
		return false;
		
	}
	
	
}

</script>
<?php 
$mobile_id=""; $user_id=""; $verify=""; $createdate=""; $randomno="";  $mobile="";
if (isset($_POST['btnSubmit'])) { 
	
	$verify = trim(str_replace("'", "''", $_POST['txtVerify']));
	$createdate=date('d-m-Y h:i:s');				
		
		
	$randomno = rand(0, 9999);
	$user_id=$_SESSION['UserID'];
	
	
	$checkPassSql = "SELECT * FROM " . Mobile . " WHERE user_id =".$_SESSION['UserID']." order by mobile_id desc limit 1" ;
	$checkQuery = mysql_query($checkPassSql);

	
		$user = mysql_fetch_array($checkQuery);
		
		$random_no_db =$user['randomno'];
		$mobile_id =$user['mobile_id'];
		$mobile =$user['new_no'];
		
		//Alert($mobile);
		if($verify!=$random_no_db)
		{
			AlertandRedirect('Your verification code does not matched.', "page.php?dir=account/verification");
			return;
		}
		
		
		
		$data = array(
			'verify' => 1,

		);
		$rows = $db->update_array(Mobile, $data, "mobile_id = $mobile_id");
		
		
		//Alert($_SESSION['UserID']);
		
		$data = array(
		   
			'mobile'=>$mobile,
			'update_mobile_date'=>$createdate,
		);
		
		
		$rows = $db->update_array(Users, $data, "user_id = $user_id");
		
		AlertandRedirect('Your mobile number is successfully change to '.$mobile, $strHostName."/page.php?dir=health/dashboard");
       	
}		

?>
<section>
  <div class="banner_o1">
  
    <div class="dvFloat">
    
      <div class="dvWrapper" style="padding:35px 0;">
      <h1 class="f_red"> Verification</h1>
       <div style="margin:20px auto 0 auto; width:500px; border:solid 0px red;">
			 <form class="form-horizontal" method="post" id="frmRegStep1" name="frmRegStep1" enctype="multipart/form-data" onSubmit="javascript:return PasswordValidation();">
              <div class="ali_div_right_step1">
                
                <div class="dvFloat">
                    
                    <div class="dvFloat formpadding">
                          <div class="formlabel">
                            <label class="formlabel">Verification Code <span class="redtxt">*</span></label>
                          </div>
                          <div class="formcontrol">
                            <input type="text" name="txtVerify" id="txtVerify" value="<?php echo $verify?>" />
                          </div	>
                    </div>
                    
                    
               
                </div>
                <div class="dvFloat formpadding" style="margin-bottom:40px;">
                  <div class="formlabel"> &nbsp;</div>
                  <div class="formcontrol">
                     <input type="submit" class="button1" id="btnSubmit" name="btnSubmit" value="Submit" style="float:left; margin-right:10px; cursor:pointer;"/> <br/><br/><br/>
					 <a href="#" onclick="javascript:SendVerficaitonCodeEmail('<?php echo $converter->encode($_SESSION['UserID'])?>');" style="color:#009999">Click Here</a> to received verficaiton code in email
                  </div>


                </div>
                
              </div>
			  </form>
            </div>
      </div>
    </div>
  
  </div>
</section>
