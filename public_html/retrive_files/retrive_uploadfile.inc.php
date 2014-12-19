<?php include "../includes/common.inc.php";?>
<?php
	
	
	$page=1;$page_count=10; $type=""; $newpagenumber="2";$retrive_Array=array();$get_array=array();
	if(isset($_GET['page'])){
		$page=$_GET['page'];
	}
	else
	{
		$page=1;
	}
	
	if(isset($_GET['randomid'])){
		$parent_id=$_GET['randomid'];
	}
	else
	{
		$parent_id=0;
	}
	
	
	
	if(isset($_GET['type'])){
		$type=$_GET['type'];
	}
	else
	{
		$type="";
	}
	
	$retrive_Array=$get_retrive->Get_uploadFile($page_count,0,$parent_id, $type);
	$nume=$get_retrive->Get_uploadFile_Count($parent_id, $type);
	
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
<table cellpadding="0" cellspacing="0"  style="width:100%; background-color:#fff; padding-bottom:10px;" border="0" >
                              <tr>
                           
                                <td class="tbl_head">Report Date</td>
                                <td class="tbl_head">Report Type</td>
                                <td class="tbl_head">Test Name</td>
                                <td class="tbl_head">Lab Name</td>
                                <td class="tbl_head">Actions</td>
                              </tr>
                              <?php  while($get_array = mysql_fetch_array( $retrive_Array )){?>
                               <tr id="tr_upload_gallery_<?php echo $get_array['id']*121?>">
                              
                                <td class="tdborder" style="padding-left:20px;"><?php echo date('d-M-Y',strtotime($get_array['report_date']))?></td>
                                <td class="tdborder" style="padding-left:20px;">
									<?php 
										if ($get_array['report_type']==1)
										{
											echo "Doctor Prescription";
										}
										else if ($get_array['report_type']==2)
										{
											echo "Lab Test";
										}
										else if ($get_array['report_type']==3)
										{
											echo "Radiology";
										}
										$imageid=$get_array['file_path']; 
										if($imageid!="")
										{
											$imageid=$imageid;
										}
										else
										{
											$imageid="noimage.jpg";
										}
									
									?>
                                </td>
                                <td class="tdborder" style="padding-left:20px;"><?php echo $get_array['test_name']?></td>
                                <td class="tdborder" style="padding-left:20px;"><?php echo $get_array['lab_name']?></td>
                                <td class="tdborder" style="padding-left:20px;"><table cellpadding="0" test_name="0"  style="width:100%" border="0">
                                    <tr>
			  <td class="SubTd" style="display:'';"><a class="fancybox-manual-c" style="cursor: pointer;" target="_blank" href="<?php echo $strHostName;?>/uploads/<?php echo $imageid;?>"><img src="images/register_steps/view_icon.jpg" alt=""></a></td>
			  <td class="SubTd1" style="display:none;"><a onclick="javascript:UploadGallery_Retrive_By_Id('<?php echo $converter->encode($get_array['id'])?>')" style="cursor:pointer;"><img src="images/register_steps/edit_icon.jpg" alt=""></a></td>
			  <td class="SubTd2"><a style="cursor:pointer;" onclick="javascript:UploadGallery_Delete_By_Id('<?php echo  $converter->encode($get_array['id'])?>','<?php echo $get_array['id']*121?>')"><img src="images/register_steps/delete_icon.jpg" alt=""></a></td>
			</tr>
                                  </table>
                                  </td>
                              </tr>
                               <?php  } ?>
                               
                              
                              <tr>
                                <td colspan="6" style="display:none">
                                    <?php echo $pagingLink ?>
                                </td>
                              </tr>
                            </table>