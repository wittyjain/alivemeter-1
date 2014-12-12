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
	
	if(isset($_GET['type'])){
		$type=$converter->decode($_GET['type']);
	}
	else
	{
		$type="";
	}

	if(isset($_SESSION['UserID']))
	{
		$user_id=$_SESSION['UserID'];
	}

	$retrive_Array=$get_retrive->GetHospitalMaster($page_count,0);
	$nume=$get_retrive->Get_HospitalMaster_Count();

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
	$pagingLink = getPagingLinkBackEndFrontEnd($nume,$page_count,'dir=master/hospital/add',$newpagenumber,$strHostName."/page.php");
?>
<table cellpadding="0" cellspacing="0"  style="width:100%" >
	  <tr>
		<td class="tbl_head" style="width:370px;">Hospital Name </td>
		<td class="tbl_head">Hospital Address </td>
		<td class="tbl_head">Contact Person</td>
		<td class="tbl_head">Actions</td>
	  </tr>
	  <?php  while($get_array = mysql_fetch_array( $retrive_Array )){?>
	  <tr id="tr_hospital_master_<?php echo $get_array['hospital_id']*121?>">
		<td class="tdborder" style="padding-left:20px;"><?php echo $get_array['hospital_name']?> </td>
		<td class="tdborder" style="padding-left:20px;"><?php echo $get_array['hospital_address']?></td>
        <td class="tdborder" style="padding-left:20px;"><?php echo $get_array['contact_person']?></td>
        
		<td class="tdborder" style="padding-left:20px;">
		<table cellpadding="0" cellspacing="0"  style="width:100%" >
			<tr>
			 
			  <td class="SubTd1">
              
              		
                        <a style="cursor:pointer;"  id="editbtn<?php echo $get_array['hospital_id']*121?>" onclick="javascript:Hospital_Master_Retrive_By_Id('<?php echo  $converter->encode($get_array['hospital_id'])?>','<?php echo  $get_array['hospital_id']*121?>')"><img src="images/register_steps/edit_icon.jpg" alt=""></a>
                    
              		<a style="cursor:pointer; display:none;" id="rededitbtn<?php echo $get_array['hospital_id']*121?>" onclick="javascript:Hospital_Master_Retrive_By_Id('<?php echo  $converter->encode($get_array['hospital_id'])?>','<?php echo  $get_array['hospital_id']*121?>')"><img src="images/register_steps/edit_icon_red.png" alt=""></a>  
                    
                    
                        
                        </td>
			  <td class="SubTd1"><a  style="cursor:pointer;" onClick="javascript:Hospital_Master_Delete_By_Id('<?php echo $converter->encode($get_array['hospital_id'])?>','<?php echo $get_array['hospital_id']*121?>')"><img src="images/register_steps/delete_icon.jpg" alt=""></a></td>
              <td class="SubTd1" style="border-right:solid 0px;"><a  style="cursor:pointer;" href="<?php echo $strHostName;?>/page.php?dir=hospital/details&hospital_id=<?php echo $converter->encode($get_array['hospital_id'])?>"><img src="images/register_steps/view_icon.jpg" alt=""></a></td>
			</tr>
		  </table></td>

	  </tr>
	  <?php  } ?>
	  <tr>
		<td colspan="4" style="display:none; padding-top:10px;">
			<?php echo $pagingLink ?>
		</td>
	  </tr>
</table>	