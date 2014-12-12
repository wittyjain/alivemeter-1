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

	$retrive_Array=$get_retrive->GetClerk($page_count,0);
	$nume=$get_retrive->Get_Doctor_Count();

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
	$pagingLink = getPagingLinkBackEndFrontEnd($nume,$page_count,'dir=master/clerk/add',$newpagenumber,$strHostName."/page.php");
?>
<table cellpadding="0" cellspacing="0"  style="width:100%" >
	  <tr>
		<td class="tbl_head" style="width:250px;">Doctor Name </td>
		<td class="tbl_head">Hospital Name </td>
		<td class="tbl_head">Contact No.</td>
        <td class="tbl_head">Email</td>
        <td class="tbl_head">Password</td>
		<td class="tbl_head">Actions</td>
	  </tr>
	  <?php  while($get_array = mysql_fetch_array( $retrive_Array )){
	  	$hosp_name=GetValue("select hospital_name as col from tbl_hospital_master where hospital_id=".$get_array['hospital_name'], "col");
	  ?>
	  <tr id="tr_clerk_<?php echo $get_array['clerk_id']*121?>">
		<td class="tdborder" style="padding-left:20px;"><?php echo $get_array['clerk_name']?> </td>
		<td class="tdborder" style="padding-left:20px;"><?php echo $hosp_name;?></td>
        <td class="tdborder" style="padding-left:20px;"><?php echo $get_array['contact']?></td>
        <td class="tdborder" style="padding-left:20px;"><?php echo $get_array['email']?></td>
        <td class="tdborder" style="padding-left:20px;"><?php echo $get_array['password']?></td>
		<td class="tdborder" style="padding-left:20px;">
		<table cellpadding="0" cellspacing="0"  style="width:100%" >
			<tr>
			 
			  <td class="SubTd1"><a style="cursor:pointer;" onclick="javascript:Clerk_Retrive_By_Id('<?php echo  $converter->encode($get_array['clerk_id'])?>')"><img src="images/register_steps/edit_icon.jpg" alt=""></a></td>
			  <td class="SubTd2"><a  style="cursor:pointer;" onclick="javascript:Clerk_Delete_By_Id('<?php echo $converter->encode($get_array['clerk_id'])?>','<?php echo $get_array['clerk_id']*121?>')"><img src="images/register_steps/delete_icon.jpg" alt=""></a></td>
			</tr>
		  </table></td>

	  </tr>
	  <?php  } ?>
	  <tr>
		<td colspan="4" style="display:''">
			<?php echo $pagingLink ?>
		</td>
	  </tr>
</table>	