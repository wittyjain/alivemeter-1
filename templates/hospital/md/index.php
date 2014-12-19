<link rel="stylesheet" type="text/css" href="<?php echo $strHostName;?>/style/health_dashboard_tabcontent.css" />
<script type="text/javascript" src="<?php echo $strHostName;?>/js/calorie_tabcontent.js"></script>
<link href="<?php echo $strHostName;?>/css/skin.css" rel="stylesheet" type="text/css"/>
<?php
	
if(isset($_GET['hospital_id']))
{
	$hospital_id=$converter->decode($_GET['hospital_id']);
}

$hospital_name=GetValue("select hospital_name as col from ".Hospital_Master." where hospital_id=".$hospital_id,"col");

?>
<section>
  <div class="top_ou">
    <div class="top_in">
      <div class="top">
        <div class="cal_12" style="text-align: justify; padding:45px 0;">
        <div class="DvFloat" style="padding-bottom:20px; font-size:15px;">
        			<div style="float:left; width:50%;">
	                    <span style="font-weight:bold;">Hospital Name: </span> <?php echo $hospital_name;?>
                    </div>
                    <div style="float:right; width:50%; text-align:right;">
                    	<a href="<?php echo $strHostName;?>/page.php?dir=master/hospital/add" class="button1" style="width:120px; float:right; font-size:12px; text-align:center;">Back to Hospital</a>
                    </div>
           </div>
             <?php include "includes/total_aggregate_hospital.inc.php";?>
          <div class="DvFloat" style="border: solid 0px #0066CC;">
            <ul id="countrytabs" class="shadetabs" style="margin-left:-5px;">
              <li><a href="<?php echo $strHostName;?>/page.php?dir=hospital/details&hospital_id=<?php echo $_GET['hospital_id']?>" rel="country3" style="width:250px;">Doctor</a></li>
              <li><a href="<?php echo $strHostName;?>/page.php?dir=hospital/md&hospital_id=<?php echo $_GET['hospital_id']?>" rel="country2" style="width:250px;" class="selected">MD</a></li>
              <li><a href="<?php echo $strHostName;?>/page.php?dir=hospital/clerk&hospital_id=<?php echo $_GET['hospital_id']?>" rel="country3" style="width:250px;">Clerks</a></li>
             
            </ul>
            <div style="border: 0px solid gray; width: 965px; float: left; margin-bottom: 1em; padding: 10px 0px; background-color: #FFFFFF; color: #666666;">
               <div class="dvFloat"> 
              	<table width="100%" border="0" cellspacing="0" cellpadding="0">
                       <tr>
                          <td class="tbl_head">Name</td>
                          <td class="tbl_head">Specialization</td>
                          <td class="tbl_head">Licence No.</td>
                          <td class="tbl_head">Contact No.</td>
                          <td class="tbl_head">Email</td>
                          <td class="tbl_head">Patient Summary</td>
                        
                       </tr>
                      
                      <?php  
						$query = "SELECT * FROM  ".Doctor." where isactive=1 and isdeleted=0 and type='MD' and user_type='Admin' and hospital_name=".$hospital_id;
						
					
						//echo $query;
							$result = mysql_query($query);							
							if($result != "") {	
								$rowcount  = mysql_num_rows($result);
								if($rowcount > 0) {
									while($row = mysql_fetch_assoc($result)) {
										extract($row);
										$name=$row['doctor_name'];
										$licence_no=$row['licence_no'];
										$specialization=$row['specialization'];
										$specialization_name=GetValue("select specialization_name as col from ".Specialization." where specialization_id=".$specialization, "col");
										$contact=$row['contact'];
										$email=$row['email'];
						?>
                       <tr>
                              <td class="tdborder" style="padding:10px 20px 5px 20px;"><?php echo $name;?> </td>
                              <td class="tdborder" style="padding:10px 20px 5px 20px;"><?php echo $specialization_name;?> </td>
                              <td class="tdborder" style="padding:10px 20px 5px 20px;"><?php echo $licence_no;?> </td>
                              <td class="tdborder" style="padding:10px 20px 5px 20px;"><?php echo $contact;?> </td>
                              <td class="tdborder" style="padding:10px 20px 5px 20px;"><?php echo $email;?> </td>
                              <td class="tdborder" style="padding:10px 20px 5px 20px;">
                              	<table width="100%" border="0" cellspacing="0" cellpadding="0" style="line-height:20px;">
                                      <?php
									  	$accepted_count = $db->select("SELECT * FROM  ".Users." where isactive=1 and isdeleted=0 and registration_type='Main' and user_id in (select patient_id from tbl_doctor_comment where type='MD' and doctor_id=".$row['doctor_id']); 
										$accepted_count = $db->row_count;
				
										$delayed_count = $db->select("SELECT * FROM  ".Patients." where isactive=1 and isdeleted=0 and patient_id not in (select patient_id from tbl_doctor_comment) and  doctor_id=".$row['doctor_id']);
										$delayed_count = $db->row_count;
										
										$rejected_count = $db->select("SELECT * FROM  ".Patients." where isactive=1 and isdeleted=0 and patient_id in (select patient_id from tbl_md_comment where rejected=1) and  doctor_id=".$row['doctor_id']);
										$rejected_count = $db->row_count;
									  ?>
                                      
                                      <tr>
                                        <td  style="font-size:13px; width:100px;">Patients Accepted</td>
                                        <td  style="font-size:13px; text-align:center;">:</td>
                                        <td  style="font-size:13px;"><?php echo $accepted_count;?></td>
                                      </tr>
                                      <tr>
                                        <td style="font-size:13px;">Patients Delayed</td>
                                       <td  style="font-size:13px; text-align:center;">:</td>
                                        <td style="font-size:13px;"><?php echo $delayed_count;?></td>
                                      </tr>
                                      <tr>
                                        <td style="font-size:13px;">Patients Rejected</td>
                                       <td  style="font-size:13px; text-align:center;">:</td>
                                        <td style="font-size:13px;"><?php echo $rejected_count;?></td>
                                      </tr>
                                    </table>

                              	
                              </td>
                       </tr>
                      <?php } } else { ?>
                      	<tr>
                        	<td colspan="6" style="padding:10px; color:red;">MD is not available in <?php echo $hospital_name;?></td>
                        </tr>
                      <?php }} ?>
              </table>

              </div>
               
               
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
