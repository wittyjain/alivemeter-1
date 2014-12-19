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
						
						
						
						
						$retrive_Array=$get_retrive->Get_Radiology_Report($parent_id);
						$nume=$get_retrive->Get_Radiology_Report_Count($parent_id, $type);
						
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
        <td class="tbl_head" >Details</td>
        <td class="tbl_head">Date Performed </td>
        <td class="tbl_head">Prescribed by Doctor</td>
        <td class="tbl_head">Health Problem</td>
        <td class="tbl_head">Actions</td>
      </tr>
      <?php  while($get_array = mysql_fetch_array( $retrive_Array )){?>
      <tr id="tr_upload_gallery_<?php echo $get_array['id']*121?>">
        <td class="tdborder" style="padding-left:20px;">Not Specified </td>
        <td class="tdborder" style="padding-left:20px;"><?php echo date('d-M-Y',strtotime($get_array['report_date']))?> </td>
        <td class="tdborder" style="padding-left:20px;"><?php echo $get_array['lab_result']?></td>
        <td class="tdborder" style="padding-left:20px;"><?php echo $get_array['health_problem']?></td>
        <td class="tdborder" style="padding-left:20px;"><table cellpadding="0" cellspacing="0"  style="width:100%" >
            <tr>
              <td class="SubTd"><a class="fancybox-manual-c" style="cursor: pointer;"><img src="images/register_steps/view_icon.jpg" alt=""></a></td>
              <td class="SubTd1"><a onClick="javascript:Radiology_Retrive_By_Id('<?php echo  $converter->encode($get_array['id'])?>')" style="cursor:pointer;"><img src="images/register_steps/edit_icon.jpg" alt=""></a></td>
              <td class="SubTd2"><a style="cursor:pointer;" onClick="javascript:UploadGallery_Delete_By_Id('<?php echo  $converter->encode($get_array['id'])?>','<?php echo $get_array['id']*121?>')"><img src="images/register_steps/delete_icon.jpg" alt=""></a></td>
            </tr>
          </table></td>
      </tr>
      <?php  } ?>
    </table>