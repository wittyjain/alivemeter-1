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

	$retrive_Array=$get_retrive->Get_Allergies($page_count,0,$user_id);
	$nume=$get_retrive->Get_Allergies_Count($user_id);

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
	$pagingLink = getPagingLinkBackEndFrontEnd_ajax($nume,$page_count,'',$newpagenumber, "Allergies");
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
                        <td class="tbl_head" >Allergic to</td>
                        <td class="tbl_head">Reaction </td>
                        <td class="tbl_head">Status</td>
                        <td class="tbl_head">Last Observed On </td>
						  <?php if($_SESSION['UserType']!="Doctor" && $_SESSION['UserType']!="MD" && $_SESSION['UserType']!="Nutritionist"){ ?>
                        <td class="tbl_head">Actions</td>
						<?php } ?>
                      </tr>
                      <?php  while($get_array = mysql_fetch_array( $retrive_Array )){
					  
					  	$allergies_upload_count=GetValue("select Count(*) as col from tbl_doc_consult_gallery where parent_id=".$get_array['allergies_id']." and type='Allergies'", "col");
					  ?>
	                   <tr id="tr_allergies_<?php echo $get_array['allergies_id']*121?>">
                        <td  class="tdborder" style="padding-left:20px;"><?php echo str_replace("\\","",$get_array['allergic_to']);?> </td>
                        <td  class="tdborder" style="padding-left:20px;"><?php echo str_replace("\\","",$get_array['reaction']);?></td>
                        <td  class="tdborder" style="padding-left:20px;"><?php echo $get_array['status']?> </td>
                       
                        <td  class="tdborder" style="padding-left:20px;"><?php echo date('d-M-Y',strtotime($get_array['last_observe_date']))?> </td>
						  <?php if($_SESSION['UserType']!="Doctor" && $_SESSION['UserType']!="MD" && $_SESSION['UserType']!="Nutritionist"){ ?>
                        <td  class="tdborder" style="padding-left:20px;"><table cellpadding="0" cellspacing="0"  style="width:100%" >
                               <?php $imageid=GetValue("select file_path as col from tbl_allergies_gallery where parent_id=".$get_array['allergies_id'], "col"); 
							   			if($imageid!="")
										{
											$imageid=$imageid;
										}
										else
										{
											$imageid="noimage.jpg";
										}
							
							   ?>
                            <tr>
                              <td class="SubTd"><a style="cursor: pointer; display:none;" onclick="javascript:OpenPopupCenter('<?php echo $strHostName;?>/uploads.php?cid=<?php echo  $converter->encode($get_array['allergies_id'])?>&type=<?php echo  $converter->encode('Allergies');?>', 'Gallery', '700', '500', '0');" href="#"><img src="images/register_steps/view_icon.jpg" alt=""></a>
                              
              <?php if($allergies_upload_count=="0" || $allergies_upload_count=="") { ?>
             	 <a class="fancybox-manual-c" style="cursor: pointer;" href="#"><img src="images/register_steps/view_icon.jpg" alt=""></a>
             <?php } else { ?> 
             	 <a class="fancybox-manual-c" style="cursor: pointer;" onClick="javascript:RetriveReocrds_Uploaded_Gallery('dvUploadedGallery','Allergies','<?php echo $get_array['allergies_id'];?>');Popup.showModal('dvpopup-gallery',null,null,{'screenColor':'#333333','screenOpacity':.6});" href="#"><img src="images/register_steps/view_green_icon.jpg" alt=""></a>
             <?php } ?>
                              
                              
                              </td>
                              <td class="SubTd1">
                              <a style="cursor:pointer;" id="editbtn_al<?php echo $get_array['allergies_id']*121?>" onclick="javascript:Allergies_Retrive_By_Id('<?php echo  $converter->encode($get_array['allergies_id'])?>','<?php echo  $get_array['allergies_id']*121?>')"><img src="images/register_steps/edit_icon.jpg" alt=""></a>
                              
                               <a style="cursor:pointer; display:none;" id="rededitbtn_al<?php echo $get_array['allergies_id']*121?>" onclick="javascript:Allergies_Retrive_By_Id('<?php echo  $converter->encode($get_array['allergies_id'])?>','<?php echo  $get_array['allergies_id']*121?>')"><img src="images/register_steps/edit_icon_red.png" alt=""></a>
                               
                               
                               </td>
                              <td class="SubTd2"><a style="cursor:pointer;" onclick="javascript:Allergies_Delete_By_Id('<?php echo  $converter->encode($get_array['allergies_id'])?>','<?php echo $get_array['allergies_id']*121?>')"><img src="images/register_steps/delete_icon.jpg" alt=""></a></td>
                            </tr>
                          </table></td>
						  <?php } ?>
                      </tr>
                       <?php  } ?>
                      <?php if($nume=="0") { ?>
      <tr>
		<td colspan="5" style="text-align:center; color: #009999; font-size:14px; font-weight: bold;">
			<p style="padding:30px 0 0px 0;">No current data! Organize all your medical records here...</p>
		</td>
	  </tr>
     <?php } ?>
      <?php if ($page_count < $nume) { ?>
	  <tr>
		<td colspan="5" style="display:''; text-align:center; padding:5px 0;">
			<?php echo $pagingLink ?>
		</td>
	  </tr>
     <?php } ?>
</table>