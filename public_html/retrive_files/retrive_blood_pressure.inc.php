<?php include "../includes/common.inc.php";?>
<?php
	$page=1;$page_count=5;$newpagenumber="2";$retrive_Array=array();$get_array=array();
	if(isset($_GET['page'])){
		$page=$_GET['page'];
	}
	else
	{
		$page=1;
	}
	if(isset($_SESSION['UserID']))
	{
		$user_id=$_SESSION['UserID'];
	}	
	$retrive_Array=$get_retrive->Get_Blood_Pressure($page_count,0,$user_id);
	$nume=$get_retrive->Get_Blood_Pressure_Count($user_id);

	if($nume !="0")
	{
		$newpagenumber=($nume/$page_count);
		if($newpagenumber==""){$newpagenumber="0";}else{$newpagenumber=$newpagenumber+1;}
		$newpagenumber=round($newpagenumber);
		if($page > $newpagenumber)
		{
			$newpagenumber=1;
		}
		else
		{
			$newpagenumber="";
		}
	}
	$pagingLink = getPagingLinkBackEndFrontEnd_ajax($nume,$page_count,'',$newpagenumber, "Blood_Pressure");
?>
<table cellpadding="0" cellspacing="0"  style="width:100%" >
                              <tr>
                                <td class="tbl_head">Systolic / Diastolic</td>
                               <td class="tbl_head" >Unit</td>
                                <td class="tbl_head">Date Checked </td>
                                <td class="tbl_head" align="center">Actions</td>
                              </tr>
                               <?php  while($get_array = mysql_fetch_array( $retrive_Array )){
								$blood_pressure_systolic= explode("/",$get_array['blood_pressure_systolic']);
								if(isset($blood_pressure_systolic['0']))
								   {
										   $blood_pressure_systolic=$blood_pressure_systolic['0'];
								   }
								   if(isset($blood_pressure_systolic['1']))
								   {
										   $blood_pressure_diatolic=$blood_pressure_systolic['1'];
								   }
							   ?>
	                   			<tr id="tr_blood_pressure_<?php echo $get_array['blood_pressure_id']*121?>">
                                    <td class="tdborder" style="padding-left:20px;"><?php echo $blood_pressure_systolic?> / <?php echo $get_array['blood_pressure_diatolic']?> </td>
									<td class="tdborder" style="padding-left:20px;">
											<?php 
												if($get_array['del_track_unit']=="")
												{
													echo "mmhg";
												}
												else
												{
													echo str_replace("\\","",$get_array['del_track_unit']);
												}
											
											?> 
                                    </td>
                                    <td class="tdborder" style="padding-left:20px;"><?php echo date('d-M-Y',strtotime($get_array['del_track_date']))?> </td>
                                	<td class="tdborder" style="padding-left:20px;">
                                    <table cellpadding="0" cellspacing="0"  style="width:100%" >
                                     <tr>
                                          <td class="SubTd" style="display:none;"><a href="#" style="cursor: pointer;"><img src="images/register_steps/view_icon.jpg" alt=""></a></td>
                                          <td class="SubTd1">
                                            <a style="cursor:pointer;" id="editbtn_BP<?php echo $get_array['blood_pressure_id']*121?>" onclick="javascript:Blood_Pressure_Retrive_By_Id('<?php echo  $converter->encode($get_array['blood_pressure_id'])?>','<?php echo  $get_array['blood_pressure_id']*121?>')"><img src="images/register_steps/edit_icon.jpg" alt=""></a>
                               
                               <a style="cursor:pointer; display:none;" id="rededitbtn_BP<?php echo $get_array['blood_pressure_id']*121?>" onclick="javascript:Blood_Pressure_Retrive_By_Id('<?php echo  $converter->encode($get_array['blood_pressure_id'])?>','<?php echo  $get_array['blood_pressure_id']*121?>')"><img src="images/register_steps/edit_icon_red.png" alt=""></a>
                               
                               
                                         </td>
                                          <td class="SubTd2"><a style="cursor:pointer;" onclick="javascript:Blood_Pressure_Delete_By_Id('<?php echo  $converter->encode($get_array['blood_pressure_id'])?>','<?php echo $get_array['blood_pressure_id']*121?>')"><img src="images/register_steps/delete_icon.jpg" alt=""></a></td>
                                        </tr>
                                  </table></td>
                              </tr>
								 <?php  } ?>                              
                                <?php if($nume=="0") { ?>
      <tr>
		<td colspan="4" style="text-align:center; color: #009999; font-size:14px; font-weight: bold;">
			<p style="padding:30px 0 0px 0;">No current data! Organize all your medical records here...</p>
		</td>
	  </tr>
     <?php } ?>
       <?php if ($page_count < $nume) { ?>
	  <tr>
		<td colspan="4" style="display:''; text-align:center; padding:5px 0;">
			<?php echo $pagingLink ?>
		</td>
	  </tr>
     <?php } ?>
                            </table>