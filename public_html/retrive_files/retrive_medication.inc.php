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
	
	if(isset($_GET['patient_id'])) 
	{	
		$user_id=$_GET['patient_id'];
	}
	else
	{
		$user_id=$_SESSION['UserID'];
	}
	
	
	$retrive_Array=$get_retrive->Get_Medication($page_count,0,$user_id);
	$nume=$get_retrive->Get_Medication_Count($user_id);
	
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
	
	$pagingLink = getPagingLinkBackEndFrontEnd_ajax($nume,$page_count,'',$newpagenumber,"Medication");
	
	
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
                        <td class="tbl_head" style="width:170px;">Medicine </td>
                        <td class="tbl_head" >Dosage </td>
                        <td class="tbl_head">Duration <br />(days/ week) </td>
                        <td class="tbl_head">Currently taking <br /> this Medicine ? </td>
                        <td class="tbl_head">Followed Prescription </td>
                        <td class="tbl_head">Health Problem</td>
                         <?php if($_SESSION['UserType']!="Doctor" && $_SESSION['UserType']!="MD" && $_SESSION['UserType']!="Nutritionist"){ ?>
                        <td class="tbl_head">Actions</td>
                        <?php } ?>
                      </tr>
                      <?php  while($get_array = mysql_fetch_array( $retrive_Array )){?>
                       <tr id="tr_medication_<?php echo $get_array['medication_id']*121?>">
                        <td class="tdborder" style="padding-left:10px;"><?php echo str_replace("\\","",$get_array['medicine']);?></td>
                        <td class="tdborder" style="padding-left:10px;"><?php echo str_replace("\\","",$get_array['dosage']);?> </td>
                        <td class="tdborder" style="padding-left:10px;"><?php echo str_replace("\\","",$get_array['duration']);?></td>
                        <td class="tdborder" style="padding-left:10px;"><?php echo $get_array['track_machine']?> </td>
                        <td class="tdborder" style="padding-left:10px;"><?php echo $get_array['follow_prescription']?> </td>
                        <td class="tdborder" style="padding-left:10px;"><?php echo str_replace("\\","",$get_array['health_problem']);?></td>
                        <?php if($_SESSION['UserType']!="Doctor" && $_SESSION['UserType']!="MD" && $_SESSION['UserType']!="Nutritionist"){ ?>
                            <td class="tdborder" style="padding-left:10px;"><table cellpadding="0" cellspacing="0" style="width:100%" >
                                <tr>
                                  <td class="SubTd" style="display:none;"><a class="fancybox-manual-c" style="cursor: pointer;"><img src="images/register_steps/view_icon.jpg" alt=""></a></td>
                                   
                                  <td class="SubTd1">
                                    
                                    <?php if($_SESSION['UserType']!="Doctor" && $_SESSION['UserType']!="MD" && $_SESSION['UserType']!="Nutritionist"){ ?>
                                        <a style="cursor:pointer;" id="editbtn_md<?php echo $get_array['medication_id']*121?>" onclick="javascript:Medication_Retrive_By_Id('<?php echo  $converter->encode($get_array['medication_id'])?>','<?php echo  $get_array['medication_id']*121?>')">
                                        
                                        
                                        <img src="images/register_steps/edit_icon.jpg" alt=""></a>
                                       <a style="cursor:pointer; display:none;" id="rededitbtn_md<?php echo $get_array['medication_id']*121?>" onclick="javascript:Medication_Retrive_By_Id('<?php echo  $converter->encode($get_array['medication_id'])?>','<?php echo  $get_array['medication_id']*121?>')"><img src="images/register_steps/edit_icon_red.png" alt=""></a>
                                   <?php } else { ?>
                                    <a style="cursor:pointer; border:0px; display:none;" id="editbtn_md<?php echo $get_array['medication_id']*121?>" onclick="javascript:Medication_Retrive_By_Id('<?php echo  $converter->encode($get_array['medication_id'])?>','<?php echo  $get_array['medication_id']*121?>');"><img src="images/register_steps/view_icon.jpg" alt=""></a>
                                   <?php } ?>
                                   
                                 </td>
                                
                                     <?php if($_SESSION['UserType']!="Doctor" && $_SESSION['UserType']!="MD" && $_SESSION['UserType']!="Nutritionist"){ ?>
                                  <td class="SubTd2"><a  href="#" onclick="javascript:Medication_Delete_By_Id('<?php echo  $converter->encode($get_array['medication_id'])?>','<?php echo $get_array['medication_id']*121?>')"><img src="images/register_steps/delete_icon.jpg" alt=""></a></td>
                                  <?php } ?>
                                </tr>
                              </table></td>
                          <?php } ?>
                      </tr>
                       <?php  } ?>
                       
    <?php if($nume=="0") { ?>
      <tr>
		<td colspan="7" style="text-align:center; color: #009999; font-size:14px; font-weight: bold;">
			<p style="padding:30px 0 0px 0;">No current data! Organize all your medical records here...</p>
		</td>
  </tr>
     <?php } ?>
      <?php if ($page_count < $nume) { ?>
	  <tr>
		<td colspan="7" style="display:''; text-align:center; padding:5px 0;">
			<?php echo $pagingLink ?>
		</td>
	  </tr>
     <?php } ?>
</table>