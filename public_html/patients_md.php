<?php include 'includes/common.inc.php'?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Alivemeter</title>
<?php include 'includes/links.php'?>
<link rel="stylesheet" type="text/css" href="<?php echo $strHostName;?>/style/health_dashboard_tabcontent.css" />
<script type="text/javascript" src="<?php echo $strHostName;?>/js/calorie_tabcontent.js"></script>
<link href="<?php echo $strHostName;?>/css/skin.css" rel="stylesheet" type="text/css"/>
<?php
	if(isset($_GET['type'])) {
		$type = $converter->decode($_GET['type']);
		 
		if($type == "logout") {
			Customer_Logout();
			Redirect("index.php");
		}
	}
  

if(isset($_SESSION['HospID']))
{
	$hospital_id=$_SESSION['HospID'];
}

$hospital_name=GetValue("select hospital_name as col from ".Hospital_Master." where hospital_id=".$hospital_id,"col");

?>	

</head>
<body>
<?php include 'includes/top.php'?>
<section>
  <div class="top_ou">
    <div class="top_in">
      <div class="top">
        <h1 class="f_red" style="padding-top:35px;">Welcome to Alivemeter Dashboard !</h1>
        <div class="dvFloat"><span style="font-weight:bold;">Hospital Name :</span> <?php echo $hospital_name;?></div>
        <div class="cal_12" style="text-align: justify; padding:45px 0;">
          <div class="DvFloat" style="border: solid 0px #0066CC;">
            <ul id="countrytabs" class="shadetabs">
              <li><a href="<?php echo $strHostName;?>/clerk_admin.php" rel="country1" style="display:none;">Patients Not Accepted</a></li>
              <li><a href="<?php echo $strHostName;?>/patients_delayed.php" rel="country3" style="width:250px;">Patients Delayed</a></li>
              <li><a href="<?php echo $strHostName;?>/patients_doctor.php" rel="country2" style="width:250px;" >Patients Accepted By Doctor</a></li>
              <li><a href="<?php echo $strHostName;?>/patients_md.php" rel="country3" style="width:250px;"  class="selected">Patients Accepted By MD</a></li>
             
            </ul>
            <div style="border: 0px solid gray; width: 965px; float: left; margin-bottom: 1em; padding: 10px 0px; background-color: #FFFFFF; color: #666666;">
              <table width="100%" border="0" cellspacing="0" cellpadding="0">
                       <tr>
                          <td class="tbl_head">Name</td>
                          <td class="tbl_head">Gender</td>
                          <td class="tbl_head">Date of Birth</td>
                          <td class="tbl_head">Contact No.</td>
                          <td class="tbl_head">Query Accepted Date</td>
                         <td class="tbl_head">MD Name</td>
                       </tr>
                      
                      <?php  
						$query = "SELECT * FROM  ".Users." where isactive=1 and isdeleted=0 and registration_type='Main' and user_id in (select patient_id from tbl_doctor_comment where type='MD' and doctor_id in (select doctor_id from tbl_doctor where hospital_name=".$hospital_id."))";
						//echo $query;
							$result = mysql_query($query);							
							if($result != "") {	
								$rowcount  = mysql_num_rows($result);
								if($rowcount > 0) {
									while($row = mysql_fetch_assoc($result)) {
										extract($row);
										$name=$row['name'];
										$registration_date=$row['registration_date'];
										$dob=$row['dob'];
										$gender=$row['gender'];
										$mobile=$row['mobile'];
										$md_id=GetValue("select md_id as col from ".Doc_Comment." where patient_id=".$row['user_id']." order by comment_id desc limit 1", "col");
										$md_name=GetValue("select doctor_name as col from ".Doctor." where doctor_id=".$md_id." and type='MD'", "col");
						?>
                       <tr>
                              <td class="tdborder" style="padding:10px 20px;"><?php echo $name;?> </td>
                              <td class="tdborder" style="padding:10px 20px;"><?php echo $gender;?> </td>
                              <td class="tdborder" style="padding:10px 20px;"><?php echo date('d-M-Y',strtotime($dob))?></td>
                              <td class="tdborder" style="padding:10px 20px;"><?php echo $mobile;?> </td>
                              <td class="tdborder" style="padding:10px 20px;"><?php  
							  	$accepted_date=GetValue("select created_date as col from tbl_doctor_comment where patient_id=".$row['user_id'], "col");
							    echo date('d-M-Y h:i:s',strtotime($accepted_date));?></td>
                             <td class="tdborder" style="padding:10px 20px;"><?php echo $md_name;?> </td>
                       </tr>
                     <?php }}} ?> 
                      
              </table>
               
               
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
