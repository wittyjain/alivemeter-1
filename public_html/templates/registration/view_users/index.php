<?php
$patient_id="0";
if(isset($_GET['cid']))
{
	$patient_id=$converter->decode($_GET['cid']);
}

if(isset($_GET['parent_id']))
{
	$parent_new_id=$converter->decode($_GET['parent_id']);
}

?>
<section>
  <div class="top_ou">
    <div class="top_in">
      <div class="top">
     	  <div class="DvFloat" style="border-bottom: solid 1px #e4e4e4; margin:25px 0px 0px 0px">
             <div style="float:left; width:80%;">	
                <h1 class="f_red" style="text-align: left; font-size: 18px; font-weight:bold;  margin-bottom: 7px;">Patient Details</h1>
             </div>
             <div style="float:left; width:20%;">
             	<div class="DvFloat"><a href="<?php echo $strHostName;?>/home.php" class="button2">Back to Users</a></div>
             </div>	
          </div>
    	   <div class="cal_12" style="text-align: justify; padding:0px 0;">
           		<div class="cal_12" style="padding-top: 45px; padding-bottom: 20px;">
          <div class="DvFloat" style="border-top: solid 0px #990033">
          	<div class="adviceonline_md">
                <?php
			$query = "SELECT * FROM  ".Users." where isactive=1 and isdeleted=0 and registration_type='Main' and user_id=".$patient_id;
			//echo $query;
			$result = mysql_query($query);							
			if($result != "") {	
				$rowcount  = mysql_num_rows($result);
				if($rowcount > 0) {
					while($row = mysql_fetch_assoc($result)) {
						extract($row);
			?> 
                <div class="photoareabg">
                        <div class="nutritionistphoto"> <img src="<?php echo $strHostName;?>/profile_pic/<?php echo $row['image1'];?>" alt="" title="" border="0" style="width:101px; height:101px;"> </div>
                      </div>
                
               
                       <div class="nutritionistright">
                            <div class="DvFloat">
                              <div class="DvFloat f_grey" style="font-size: 18px;"><?php echo $row['name'];?></div>
                              <div class="f_grey welcomedv" style="border:solid 0px red; width:800px;">
                                <div class="DvFloat">
                                   <div style="float:left; width:60%;"><table width="100%" border="0" cellspacing="0" cellpadding="5" style="line-height:25px;">
                                      <tr>
                                      	<td style="font-weight:bold;">Sex:</td>
                                        <td><?php echo $row['gender'];?></td>
                                        <td style="font-weight:bold;">Company:</td>
                                        <td><?php echo $row['company_name'];?></td>
                                       
                                      </tr>
                                      <tr>
                                      	<td style="font-weight:bold;">Height:</td>
                                        <td><?php echo $row['height'];?> <?php echo $row['height_type'];?></td>
                                        <td style="font-weight:bold;">Weight:</td>
                                        <td><?php echo $row['weight'];?></td>
                                      </tr>
                                      <tr>
                                      	<td style="font-weight:bold;">Age:</td>
                                        <td><?php $age = floor((time() - strtotime($row["dob"]))/31556926); echo $age; ?> years</td>
                                        <td style="font-weight:bold;">Designation:</td>
                                        <td><?php echo $row['designation'];?></td>
                                        
                                      </tr>
                                      <tr>
                                        
                                        <td style="font-weight:bold;">Profession:</td>
                                        <td><?php echo 
										$profession_name=GetValue("select profession_name as col from tbl_profession where profession_id=".$row['profession_id'], "col");?></td>
                                        <td style="font-weight:bold;">Travel Mode:</td>
                                        <td><?php echo $row['travel_mode'];?></td>
                                        
                                      
                                      </tr>
                                      <tr>
                                      	<td style="font-weight:bold; width:140px;">Daily Travel Time:</td>
                                        <td><?php echo $row['daily_travel_time_h'];?> to <?php echo $row['daily_travel_time_h'];?></td>
                                        
                                        <td style="font-weight:bold; width:120px;">Blood Group:</td>
                                        <td><?php echo $row['blood_group'];?></td>
                                      </tr>
                                      
                                    </table></div>
                                  
	                                   <div style="float:right; width:20%; margin-top:-20px;">
                                   		<h1 class="f_red" style="text-align: left; font-size: 18px;  margin-bottom: 7px; border-bottom: solid 1px #c5c5c5; padding-bottom:5px;">Align Members</h1>
                                          <ul>
										  <?php 
										  	if(isset($_GET['parent_id']))
											{
												$parent_new_id=$converter->decode($_GET['parent_id']);
											}
											//Alert ($parent_new_id);
											//Alert ($patient_id);
										 ?>
                                          
                                        <?php
											$query_p = "SELECT * FROM  ".Users." where isactive=1 and isdeleted=0 and registration_type='Main' and (parent_id=".$parent_new_id." or user_id=".$parent_new_id.")";
										    //echo $query_p;
											$result_p = mysql_query($query_p);							
											if($result_p != "") {	
												$rowcount  = mysql_num_rows($result_p);
												if($rowcount > 0) {
													while($row_p = mysql_fetch_assoc($result_p)) {
														extract($row_p);
														$main_pid=$row_p['parent_id'];
														//Alert ($main_pid);
											?> 
                                               <li>
                                                  <div class="dvFloat">
                                                    <div style="float:left; width:20%;"><img src="<?php echo $strHostName;?>/profile_pic/<?php echo $row_p['image1'];?>" alt="" style="width:20px; height:20px;"/></div>
                                                    <div style="float:left;width:80%">
                                                    	<?php if($patient_id==$row_p['user_id']) { ?>
                                                        <a style="color:#339900; font-weight:bold;">
                                                        <?php } else { ?>
                                                        <a href="<?php echo $strHostName;?>/page.php?dir=registration/view_users&cid=<?php echo $converter->encode($row_p['user_id'])?>&parent_id=<?php echo $converter->encode($parent_new_id);?>">
                                                        <?php } ?>
																<?php echo $row_p['name'];?>
                                                                <?php if ($main_pid=="0" || $main_pid!=$parent_new_id) { ?>
                                                                	<span style="color:red;"> (<?php echo "Main";?>)</span>
																<?php } ?>
                                                        </a>
                                                    </div>
                                                    </div>
                                                </li>
                                             <?php }}} ?>
                                           </ul>
                                   </div> 
                                
                                </div>
                              </div>
                            </div>
                          </div>
            <?php }}} ?>       
            </div>
          </div>
          
          
        </div>

           </div>
       </div>
    </div>
  </div>

</section>
