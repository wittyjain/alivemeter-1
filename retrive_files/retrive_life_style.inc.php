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
	$retrive_Array=$get_retrive->Get_Life_Style($page_count,0,$user_id);
	$nume=$get_retrive->Get_Life_Style_Count($user_id);
	
	
	
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
	$pagingLink = getPagingLinkBackEndFrontEnd_ajax($nume,$page_count,'',$newpagenumber, "Life_Style");
	//$pagingLink = getPagingLinkBackEndFrontEnd($nume,$page_count,'dir=listing/grid_view',$newpagenumber,$strHostName."/page.php");
?>
<table cellpadding="0" cellspacing="0"  style="width:100%" >
                            <tr>
                              <td class="tbl_head">Date</td>
                              <td class="tbl_head">Spirit</td>
                              <td class="tbl_head">Cigarette</td>
                              <td class="tbl_head">Beer</td>
                              <td class="tbl_head">Sleep</td>
                              <td class="tbl_head">Physical Stress</td>
                              <td class="tbl_head">Mental Stress</td>
                              <td class="tbl_head">Actions</td>
                            </tr>
                            <?php  while($get_array = mysql_fetch_array( $retrive_Array )){?>
                            <tr id="tr_life_style_<?php echo $get_array['life_style_id']*121?>">
                              <td class="tdborder" style="padding-left:20px;"><?php echo date('d-M-Y',strtotime($get_array['life_style_date']))?></td>
                              <td class="tdborder" style="padding-left:20px;"><?php echo str_replace("\\","",$get_array['spirit']);?></td>
                              <td class="tdborder" style="padding-left:20px;"><?php echo str_replace("\\","",$get_array['cigarette']);?></td>
                              <td class="tdborder" style="padding-left:20px;"><?php echo str_replace("\\","",$get_array['beer']);?></td>
                              <td class="tdborder" style="padding-left:20px;"><?php echo str_replace("\\","",$get_array['life_style_sleep']);?></td>
                              <td class="tdborder" style="padding-left:20px;"><?php echo str_replace("\\","",$get_array['physical_stress']);?></td>
                              <td class="tdborder" style="padding-left:20px;"><?php echo str_replace("\\","",$get_array['mental_stress']);?></td>
                              <td class="tdborder" style="padding-left:20px;"><table cellpadding="0" cellspacing="0"  style="width:100%" >
                                   <tr>
                                          <td class="SubTd" style="display:none;"><a href="#" style="cursor: pointer;"><img src="images/register_steps/view_icon.jpg" alt=""></a></td>
                                          <td class="SubTd1">
                                             <a style="cursor:pointer;" id="editbtn_Life<?php echo $get_array['life_style_id']*121?>" onclick="javascript:Life_Style_Retrive_By_Id('<?php echo  $converter->encode($get_array['life_style_id'])?>','<?php echo  $get_array['life_style_id']*121?>')"><img src="images/register_steps/edit_icon.jpg" alt=""></a>
                               
                               <a style="cursor:pointer; display:none;" id="rededitbtn_Life<?php echo $get_array['life_style_id']*121?>" onclick="javascript:Life_Style_Retrive_By_Id('<?php echo  $converter->encode($get_array['life_style_id'])?>','<?php echo  $get_array['life_style_id']*121?>')"><img src="images/register_steps/edit_icon_red.png" alt=""></a>
                               
                               </td>
                                          <td class="SubTd2"><a style="cursor:pointer;" onclick="javascript:Life_Style_Delete_By_Id('<?php echo  $converter->encode($get_array['life_style_id'])?>','<?php echo $get_array['life_style_id']*121?>')"><img src="images/register_steps/delete_icon.jpg" alt=""></a></td>
                                        </tr>
                                </table></td>
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