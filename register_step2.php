<?php include 'includes/common.inc.php'?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Alivemeter - Register Step1</title>
<?php include 'includes/links.php'?>
<script src="<?php echo $strHostName?>/js/step2_validation.js" type="text/javascript"></script>
</head>
<body>
<?php include 'includes/top.php'?>
<?php
	$edit_id="0";$earning_member="0";$profession_id="0";$company_name="";$designation="";$travel_mode="";$daily_travel_time_h="0";
	$daily_travel_time_m="";$age_of_retirement="";$life_expectancy="";
			
	if(isset($_GET['cid'])) {
		$edit_id = $converter->decode($_GET['cid']);
	}

	if(isset($_POST['btnSubmit']))
	{	
		if(isset($_POST['Chk_Earn_Member']))
		{
			$earning_member= trim(str_replace("'", "''", $_POST['Chk_Earn_Member']));
		}
		$profession_id= trim(str_replace("'", "''", $_POST['cmb_Profession']));
		$company_name= trim(str_replace("'", "''", $_POST['txt_Company_name']));
		$designation= trim(str_replace("'", "''", $_POST['txt_Designation']));
		$travel_mode= trim(str_replace("'", "''", $_POST['txt_Travel_Mode']));
		$daily_travel_time_h= trim(str_replace("'", "''", $_POST['cmb_Travel_hour']));
		$daily_travel_time_m= trim(str_replace("'", "''", $_POST['cmb_Travel_Min']));
		$age_of_retirement= trim(str_replace("'", "''", $_POST['tx_tAge_of_Retirement']));
		$life_expectancy= trim(str_replace("'", "''", $_POST['txt_Life_Expectancy']));
				
			
		$data = array(
			'earning_member' => $earning_member,
			'profession_id' => $profession_id,
			'company_name' => $company_name,
			'designation' => $designation,
			'travel_mode' => $travel_mode,
			'daily_travel_time_h' => $daily_travel_time_h,
			'daily_travel_time_m' => $daily_travel_time_m,
			'age_of_retirement' => $age_of_retirement,
			'life_expectancy' => $life_expectancy,
		);
		 
		 
	    $recevied_message=$function->f_Add_register_step_2($data,$edit_id);
		$recevied_message_1  = explode("###", $recevied_message);
		
		
		if($recevied_message_1[0]!="")
		{
			
			Redirect($strHostName."/register_step3.php?record=".$converter->encode($recevied_message_1[0])."&menu_type=".$converter->encode("step1")."&pid=".$converter->encode($recevied_message_1[1]));
					
			
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
            <li class="past"  style="width:350px;">
              <div><div class="Step_title_Grey"><a href="register_step1.php" title="Step 2" style="padding:0px; margin:0px; text-align:left">Personal Details</a></div><span><a href="register_step1.php" title="">1</a></span><a href="register_step1.php" title="">
              </a></div></li>
            <li class="active"  style="width:350px;">
              <div><div class="Step_title_Red"><a href="#" title="" style="padding:0px; margin:0px; text-align:left">Professional Details</a></div><span><a href="#" title="">2</a></span><a href="#" title="">
              </a></div></li>
            <li class="current" style="width:237px;">
              <div><div class="Step_title_Grey_small"><a href="register_step3.php" title="Step 2" style="padding:0px; margin:0px; text-align:left">Align Family Member</a></div><span><a href="register_step3.php" title="">3</a></span><a href="register_step3.html" title="">
              </a></div></li>
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
          <div style=" padding:0px 0px 35px 0px">
            <div style="margin:0px auto; width:500px; border:solid 0px red;">
			 <form class="form-horizontal" method="post" id="frmRegStep1" name="frmRegStep1" enctype="multipart/form-data" onSubmit="javascript:return reistration_step2_validation('1');">
              <div class="ali_div_right_step1">
                <div class="dvFloat formpadding">
                  <div class="formlabel">
                    <label class="formlabel">Earning Member  </label>
                  </div>
                  <div class="formcontrol">
                    <input type="checkbox" name="Chk_Earn_Member" id="Chk_Earn_Member" value="" />
                  </div>
                </div>
                <div class="dvFloat formpadding">
                  <div class="formlabel">
                    <label class="formlabel">Profession <span class="redtxt">*</span></label>
                  </div>
                  <div class="formcontrol">
                    <select  id="cmb_Profession" name="cmb_Profession"  tabindex="1" class="existing_event" style="width: 185px;" onchange="javascript:reistration_step2_validation('0');" >
                      <option value="">Select</option>    
					  <option value="1" <?php if($profession_id==$profession_id){echo"selected";}?>>Software Engineer</option>
                    </select>
					 <div id="DvProfession" class="tickclass" style="display:none"><img src="<?php echo $strHostName; ?>/images/tick.jpg" alt="" title="" border="0" style="vertical-align:middle"/></div>
					  <div id="DvErrorProfession" class="warning" style="display:none">Please choose profession.</div>
                  </div>
                </div>
                <div class="dvFloat formpadding">
                  <div class="formlabel">
                    <label class="formlabel">Company Name <span class="redtxt">*</span></label>
                  </div>
                  <div class="formcontrol">
                    <input type="text" name="txt_Company_name" id="txt_Company_name" value="<?php echo $company_name?>" onblur="javascript:reistration_step2_validation('0');" />
					 <div id="DvCompany" class="tickclass" style="display:none"><img src="<?php echo $strHostName; ?>/images/tick.jpg" alt="" title="" border="0" style="vertical-align:middle"/></div>
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
							<option value="1:00" selected="selected">1:00</option>
                        </select>
                      
                    </div>
                    <div style="float:left; padding:0px 15px 0px 0px">
                      <select name="cmb_Travel_Min" id="cmb_Travel_Min" tabindex="1" class="existing_event" style="width: 4px;">
                          <option value="Min">Min</option>
						  <option value="00" selected="selected">00</option>
						  <option value="5" selected="selected">5</option>
                      </select>
                    </div>
                   
                  </div>
                </div>
                
                <div class="dvFloat formpadding">
                  <div class="formlabel">
                    <label class="formlabel">Age of Retirement <span class="redtxt">*</span></label>
                  </div>
                  <div class="formcontrol">
                    <input type="text" name="tx_tAge_of_Retirement" id="tx_tAge_of_Retirement" value=<?php echo $age_of_retirement?>"" onblur="javascript:reistration_step2_validation('0');" /><div style="padding:10px 0px 0px 10px; float:left;color: #a8a8a8;">years
					 <div id="DvAgeRet" class="tickclass" style="display:none"><img src="<?php echo $strHostName; ?>/images/tick.jpg" alt="" title="" border="0" style="vertical-align:middle"/></div>
					 <div id="DvErrorAgeRet" class="warning" style="display:none">Please enter Age of Retirement.</div>
					</div>
                  </div>
                </div>
                <div class="dvFloat formpadding">
                  <div class="formlabel">
                    <label class="formlabel">Life Expectancy <span class="redtxt">*</span></label>
                  </div>
                  <div class="formcontrol">
                    <input type="text" name="txt_Life_Expectancy" id="txt_Life_Expectancy" value="<?php echo $life_expectancy?>" onblur="javascript:reistration_step2_validation('0');" /><div style="padding:10px 0px 0px 10px; float:left; color: #a8a8a8;">years
					 <div id="DvLife" class="tickclass" style="display:none"><img src="<?php echo $strHostName; ?>/images/tick.jpg" alt="" title="" border="0" style="vertical-align:middle"/></div>
					 <div id="DvErrorLife" class="warning" style="display:none">Please enter Life Expectancy.</div>
					
					</div>
                  </div>
                </div>
                <div class="dvFloat formpadding">
                  <div class="formlabel"> <a href="<?php echo $strHostName?>/register_step1.php?cid=<?php echo $_GET['cid']?>" class="button2">Back</a></div>
                  <div class="formcontrol" >
                     <input type="submit" class="button1" id="btnSubmit" name="btnSubmit" value="Submit" />
                  </div>
                </div>
                <div class="dvFloat formpadding">
                  <div class="formlabel"> &nbsp; </div>
                                   <div class="formcontrol"  style="text-align:right; padding:20px 42px 20px 0px"> <span class="redtxt">*</span> Compulsory field </div>
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
 <?php include 'includes/bottom.php'?>
</body>
</html>
