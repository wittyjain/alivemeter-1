<?php include "../includes/common.inc.php";?>
<?php
	$page=1;$page_count=20;$newpagenumber="2";$retrive_Array=array();$get_array=array();
	if(isset($_GET['page'])){
		$page=$_GET['page'];
	}
	else
	{
		$page=1;
	}

	if(isset($_SESSION['UserClerkID']))
	{
		$user_doc_id=$_SESSION['UserClerkID'];
	}
	else if(isset($_SESSION['UserMDID']))
	{
		$user_doc_id=$_SESSION['UserMDID'];
	}
	

	
	$retrive_Array=$get_retrive->GetMDApp($page_count,0,$user_doc_id);
	$nume=$get_retrive->GetMDApp_Count($user_doc_id);
	

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
	$pagingLink = getPagingLinkBackEndFrontEnd($nume,$page_count,'dir=md/appointment',$newpagenumber,$strHostName."/page_doctor.php");
						
	
	//$pagingLink = getPagingLinkBackEndFrontEnd($nume,$page_count,'dir=md/appointment',$newpagenumber,$strHostName."/page_doctor.php");
?>

<table cellpadding="0" cellspacing="0"  style="width:100%" >
	  <tr>
		<td class="tbl_head" style="width:200px;">Appointment Date </td>
		<?php  if(!isset($_SESSION['UserMDID'])) { ?>	
        <td class="tbl_head">MD Name </td>
        <?php } ?>
        <td class="tbl_head">Hospital Name </td>
        <td class="tbl_head">Appointment Time</td>
		<td class="tbl_head">Appointment Title </td>
        <td class="tbl_head">Query Type </td>
        <td class="tbl_head">Actions</td>
	  </tr>
	  <?php  while($get_array = mysql_fetch_array( $retrive_Array ))
	  {
	  $md_name=GetValue("select doctor_name as col from tbl_doctor where doctor_id=".$get_array['md_id'], "col");
	  $rejected_query=GetValue("select rejected as col from tbl_md_comment where md_id=".$get_array['md_id']." and compose_id=".$get_array['compose_id'], "col");
	  
	  ?>
	  <tr id="tr_md_appoint_<?php echo $get_array['app_id']*121?>">
		<td class="tdborder" style="padding-left:20px;"><?php echo date('d-M-Y',strtotime($get_array['app_date']))?></td>
		<?php  if(!isset($_SESSION['UserMDID'])) { ?>	
            <td class="tdborder" style="padding-left:20px;"><?php echo $md_name;?> </td>
        <?php } ?>
        <td class="tdborder" style="padding-left:20px;"><?php echo $get_array['other_hospital_name']?></td>
		<td class="tdborder" style="padding-left:20px;"><?php echo $get_array['time_from']?> - <?php echo $get_array['time_to']?></td>
        <td class="tdborder" style="padding-left:20px;"><?php echo $get_array['app_name']?></td>
        <td class="tdborder" style="padding-left:20px;"><?php echo $get_array['other_app']?></td>
		<td class="tdborder" style="padding-left:20px;">
		<table cellpadding="0" cellspacing="0"  style="width:100%">
			<tr>
          
			  <td class="SubTd1" style="display: <?php if(isset($_SESSION['UserMDID'])) { echo "none"; }?>">
              		
                    <a style="cursor:pointer;"  id="editbtn<?php echo $get_array['app_id']*121?>" onclick="javascript:MD_App_Retrive_By_Id('<?php echo  $converter->encode($get_array['app_id'])?>','<?php echo  $get_array['app_id']*121?>')"><img src="images/register_steps/edit_icon.jpg" alt=""></a>
              		<a style="cursor:pointer; display:none;" id="rededitbtn<?php echo $get_array['app_id']*121?>" onclick="javascript:MD_App_Retrive_By_Id('<?php echo  $converter->encode($get_array['app_id'])?>','<?php echo  $get_array['app_id']*121?>')"><img src="images/register_steps/edit_icon_red.png" alt=""></a>      
              </td>
              
          
			  <td class="SubTd2" style="border:solid 0px red;padding:10px 0; text-align:left;">
              			<?php if(isset($_SESSION['UserMDID']) && $get_array['other_app']=="Video_Query") { ?>
                        	
                          <?php if($rejected_query=="1") { ?>
                             <a style="cursor:pointer; font-weight:bold;" href="<?php echo $strHostName;?>/page_doctor.php?dir=md/details&patient_id=<?php echo $converter->encode($get_array['patient_id']);?>&compose_id=<?php echo $converter->encode($get_array['compose_id']);?>&accept_id=<?php echo $converter->encode($get_array['accept_id']);?>#VisitTimings">Reject</a>
                           <?php } else { ?>
                           	<a style="color:#999999;">Reject</a>
                           <?php } ?>
                             
                        <?php } else { ?>
                        	 <a style="cursor:pointer; display:<?php  if(isset($_SESSION['UserMDID'])) { echo "none";} ?>" onclick="javascript:MD_App_Delete_By_Id('<?php echo $converter->encode($get_array['app_id'])?>','<?php echo $get_array['app_id']*121?>')"><img src="images/register_steps/delete_icon.jpg" alt=""></a>
                        <?php } ?>
                       
              
              </td>
			</tr>
		  </table></td>

	  </tr>
	  <?php  } ?>
	   <?php if ($page_count < $nume) { ?>
      <tr>
		<td colspan="4" style="padding:15px; text-align:center;">
			<?php echo $pagingLink ?>
		</td>
	  </tr>
      <?php } ?>
</table>	