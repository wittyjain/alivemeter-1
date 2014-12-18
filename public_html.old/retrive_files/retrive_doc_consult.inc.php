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

	$retrive_Array=$get_retrive->Get_Doctor_Consultation($page_count,0,$user_id);
	$nume=$get_retrive->Get_Doctor_Consultation_Count($user_id);

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
	
	
	$pagingLink =	getPagingLinkBackEndFrontEnd_ajax($nume,$page_count,'',$newpagenumber,"Doc_Consult");
?>
<table cellpadding="0" cellspacing="0"  style="width:100%" >
	  <tr>
		<td class="tbl_head" style="width:370px;">Date </td>
		<td class="tbl_head">Doctor Consulted </td>
		<td class="tbl_head">Diagnosis</td>
		<td class="tbl_head">Actions</td>
	  </tr>
	  <?php  while($get_array = mysql_fetch_array( $retrive_Array )){
	  
	  	$doc_upload_count=GetValue("select Count(*) as col from tbl_doc_consult_gallery where parent_id=".$get_array['doc_consult_id']." and type='Doc_Consult'", "col");
	  ?>
	  <tr id="tr_doc_consult_<?php echo $get_array['doc_consult_id']*121?>">
		<td class="tdborder" style="padding-left:20px;"><?php echo date('d-M-Y',strtotime($get_array['consult_date']))?></td>
		<td class="tdborder" style="padding-left:20px;"><?php echo $get_array['doctor_name']?> </td>
		<td class="tdborder" style="padding-left:20px;"><?php echo $get_array['store_diagnosed_cond']?></td>
		<td class="tdborder" style="padding-left:20px;">
		<table cellpadding="0" cellspacing="0"  style="width:100%">
			<tr>
          
			  <td class="SubTd"><a class="fancybox-manual-c" style="cursor: pointer; display:none;" onclick="javascript:OpenPopupCenter('<?php echo $strHostName;?>/uploads.php?cid=<?php echo  $converter->encode($get_array['doc_consult_id'])?>&type=<?php echo  $converter->encode('Doc_Consult');?>', 'Gallery', '700', '500', '0');" href="#"><img src="images/register_steps/view_icon.jpg" alt=""></a>
             
             <?php if($doc_upload_count=="0" || $doc_upload_count=="") { ?>
             	 <a class="fancybox-manual-c" style="cursor: pointer;" href="#"><img src="images/register_steps/view_icon.jpg" alt=""></a>
             <?php } else { ?> 
             	 <a class="fancybox-manual-c" style="cursor: pointer;" onClick="javascript:RetriveReocrds_Uploaded_Gallery('dvUploadedGallery','Doc_Consult','<?php echo $get_array['doc_consult_id'];?>');Popup.showModal('dvpopup-gallery',null,null,{'screenColor':'#333333','screenOpacity':.6});" href="#"><img src="images/register_steps/view_green_icon.jpg" alt=""></a>
             <?php } ?>
             
              
           
              
              </td>
			  <td class="SubTd1">
              		<a style="cursor:pointer;"  id="editbtn_dc<?php echo $get_array['doc_consult_id']*121?>" onclick="javascript:Doc_Consult_Retrive_By_Id('<?php echo  $converter->encode($get_array['doc_consult_id'])?>','<?php echo  $get_array['doc_consult_id']*121?>')"><img src="images/register_steps/edit_icon.jpg" alt=""></a>
                    
              		<a style="cursor:pointer; display:none;" id="rededitbtn_dc<?php echo $get_array['doc_consult_id']*121?>" onclick="javascript:Doc_Consult_Retrive_By_Id('<?php echo  $converter->encode($get_array['doc_consult_id'])?>','<?php echo  $get_array['doc_consult_id']*121?>')"><img src="images/register_steps/edit_icon_red.png" alt=""></a>   
                    
                
                       
              </td>
			  <td class="SubTd2"><a  style="cursor:pointer;" onclick="javascript:Doc_Consult_Delete_By_Id('<?php echo $converter->encode($get_array['doc_consult_id'])?>','<?php echo $get_array['doc_consult_id']*121?>')"><img src="images/register_steps/delete_icon.jpg" alt="" align="absmiddle"></a></td>
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
		<td colspan="4" style="display:''; text-align:center; padding:5px 0; border-bottom:solid 1px #e1e1e1;">
			<?php echo $pagingLink ?>
		</td>
	  </tr>
     <?php } ?>
</table>	