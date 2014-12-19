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
	$retrive_Array=$get_retrive->Get_Hospital_Consultation($page_count,0,$user_id);
	$nume=$get_retrive->Get_Hospital_Consultation_Count($user_id);
	
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
	$pagingLink = getPagingLinkBackEndFrontEnd_ajax($nume,$page_count,'',$newpagenumber, "Hospitalization");
?>
 <?php if($_SESSION['UserType']=="Doctor" || $_SESSION['UserType']=="MD" || $_SESSION['UserType']=="Nutritionist"){ ?>
 <style>
 .tdborder
 {
 	padding:10px 5px;
	vertical-align: middle;
	border-bottom:solid 1px #e4e4e4;
 }
 </style>
 <?php } ?>
<table cellpadding="0" cellspacing="0"  style="width:100%" >
	  <tr>
		<td class="tbl_head" style="width:140px;">Date </td>
		<td class="tbl_head" style="width:300px;">Doctor Consulted </td>
		<td class="tbl_head">Diagnosis</td>
		<?php if($_SESSION['UserType']!="Doctor" && $_SESSION['UserType']!="MD" && $_SESSION['UserType']!="Nutritionist"){ ?>
               <td class="tbl_head">Actions</td>
           <?php } ?>
	  </tr>
	  <?php  while($get_array = mysql_fetch_array( $retrive_Array )){?>
	  <tr id="tr_hospital_<?php echo $get_array['hospital_id']*121?>">
		<td class="tdborder" style="padding-left:10px;"><?php echo date('d-M-Y',strtotime($get_array['hospital_date']))?></td>
		<td class="tdborder" style="padding-left:10px;"><?php echo $get_array['doctor_name']?> </td>
		<td class="tdborder" style="padding-left:10px;"><?php echo str_replace("\\","",$get_array['diagnosis']);?></td>
		<?php if($_SESSION['UserType']!="Doctor" && $_SESSION['UserType']!="MD" && $_SESSION['UserType']!="Nutritionist"){ ?>
        <td class="tdborder" style="padding-left:10px;">
		<table cellpadding="0" cellspacing="0"  style="width:100%" >
			<tr>
			  <td class="SubTd" style="display:none;"><a class="fancybox-manual-c" style="cursor: pointer;"><img src="images/register_steps/view_icon.jpg" alt=""></a></td>
			  <td class="SubTd1">
              
              <?php if($_SESSION['UserType']!="Doctor" && $_SESSION['UserType']!="MD" && $_SESSION['UserType']!="Nutritionist"){ ?>
                <a style="cursor:pointer;" id="editbtn_hosp<?php echo $get_array['hospital_id']*121?>" onclick="javascript:Hospital_Retrive_By_Id('<?php echo  $converter->encode($get_array['hospital_id'])?>','<?php echo  $get_array['hospital_id']*121?>')"><img src="images/register_steps/edit_icon.jpg" alt=""></a>
               <a style="cursor:pointer; display:none;" id="rededitbtn_hosp<?php echo $get_array['hospital_id']*121?>" onclick="javascript:Hospital_Retrive_By_Id('<?php echo  $converter->encode($get_array['hospital_id'])?>','<?php echo  $get_array['hospital_id']*121?>')"><img src="images/register_steps/edit_icon_red.png" alt=""></a>
              <?php } else { ?>
                <a style="cursor:pointer; display:none;" id="editbtn_hosp<?php echo $get_array['hospital_id']*121?>" onclick="javascript:Hospital_Retrive_By_Id('<?php echo  $converter->encode($get_array['hospital_id'])?>','<?php echo  $get_array['hospital_id']*121?>')"><img src="images/register_steps/view_icon.jpg" alt=""></a>
               <?php } ?>
                               
              
              </td>
               <?php if($_SESSION['UserType']!="Doctor" && $_SESSION['UserType']!="MD" && $_SESSION['UserType']!="Nutritionist"){ ?>
			  <td class="SubTd2"><a  href="#" onclick="javascript:Hospital_Delete_By_Id('<?php echo  $converter->encode($get_array['hospital_id'])?>','<?php echo $get_array['hospital_id']*121?>')"><img src="images/register_steps/delete_icon.jpg" alt=""></a></td>
              <?php } ?>
			</tr>
		  </table></td>
		<?php } ?>
        
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