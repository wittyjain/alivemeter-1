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

	$retrive_Array=$get_retrive->Get_Calorie_Details(0,$user_id);
	$nume=$get_retrive->Get_Calorie_Details_Count();

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
	$pagingLink = getPagingLinkBackEndFrontEnd($nume,$page_count,'dir=listing/grid_view',$newpagenumber,$strHostName."/page.php");
?>
<table cellpadding="0" cellspacing="0"  style="width:100%" >
	  <tr>
		<td class="tbl_head" style="text-align:center; padding-left:0;">Weight Date</td>
		<td class="tbl_head" style="text-align:center; padding-left:0;">Weight</td>
		<td class="tbl_head" style="text-align:center; padding-left:0;">Waist Date</td>
        <td class="tbl_head" style="text-align:center; padding-left:0;">Waist</td>
        <td class="tbl_head" style="text-align:center; padding-left:0;">Hips Date</td>
        <td class="tbl_head" style="text-align:center; padding-left:0;">Hips</td>
        <td class="tbl_head" style="text-align:center; padding-left:0;">Arms Date</td>
        <td class="tbl_head" style="text-align:center; padding-left:0;">Arms</td>
		<td class="tbl_head" style="text-align:center; padding-left:0;">Actions</td>
	  </tr>
	  <?php  while($get_array = mysql_fetch_array( $retrive_Array )){?>
	  <tr id="tr_calorie_det_<?php echo $get_array['id']*121?>">
		<td class="tdborder" style="padding-left:20px;"><?php echo date('d-M-Y',strtotime($get_array['weight_date']))?></td>
		<td class="tdborder" style="padding-left:20px;"><?php echo $get_array['curr_wgt']?> </td>
		<td class="tdborder" style="padding-left:20px;"><?php echo date('d-M-Y',strtotime($get_array['waist_date']))?></td>
		<td class="tdborder" style="padding-left:20px;"><?php echo $get_array['current_waist']?> </td>
        <td class="tdborder" style="padding-left:20px;"><?php echo date('d-M-Y',strtotime($get_array['hips_date']))?></td>
		<td class="tdborder" style="padding-left:20px;"><?php echo $get_array['current_hips']?> </td>
        <td class="tdborder" style="padding-left:20px;"><?php echo date('d-M-Y',strtotime($get_array['arms_date']))?></td>
		<td class="tdborder" style="padding-left:20px;"><?php echo $get_array['current_arm']?> </td>
		<td class="tdborder" style="padding-left:20px;">
		<table cellpadding="0" cellspacing="0"  style="width:100%" >
			<tr>
			  
			  <td class="SubTd1"><a style="cursor:pointer;" onClick="javascript:Calorie_Details_Retrive_By_Id('<?php echo  $converter->encode($get_array['id'])?>')"><img src="images/register_steps/edit_icon.jpg" alt=""></a></td>
			  <td class="SubTd2"><a  style="cursor:pointer;" onClick="javascript:Calorie_Details_Delete_By_Id('<?php echo $converter->encode($get_array['id'])?>','<?php echo $get_array['id']*121?>')"><img src="images/register_steps/delete_icon.jpg" alt=""></a></td>
              <td>&nbsp;</td>
			</tr>
		  </table></td>

	  </tr>
	  <?php  } ?>
	  <tr>
		<td colspan="4" style="display:none">
			<?php echo $pagingLink ?>
		</td>
	  </tr>
</table>	