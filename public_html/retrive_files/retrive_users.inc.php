<?php
	$page=1;$page_count=25;$newpagenumber="2";$retrive_Array=array();$get_array=array();
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
	$retrive_Array=$get_retrive->GetUsers($page_count);
	$nume=$get_retrive->GetUsers_Count();
	
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
	$pagingLink = getPagingLinkBackEndFrontEnd($nume,$page_count,'',$newpagenumber,$strHostName."/home.php");
?>
<center>

<table cellpadding="0" cellspacing="0"  style="width:100%;" >
                            <tr>
                              <td class="tdborder" colspan="5">Total Users : <?php echo $nume;?> </td>
                             
                            </tr>
                            <tr>
                              <td class="tbl_head" style="width:370px;">Name</td>
                              <td class="tbl_head">Date of Birth</td>
                              <td class="tbl_head">Registration Date</td>
                              <td class="tbl_head">Align Members</td>
                              <td class="tbl_head">Actions</td>
                            </tr>
                            <?php  while($get_array = mysql_fetch_array( $retrive_Array )){?>
                               <tr id="tr_lipid_profile_<?php echo $get_array['user_id']*121?>">
                              <td class="tdborder" style="padding-left:20px;"><?php echo $get_array['name']?> </td>
                              <td class="tdborder" style="padding-left:20px;"><?php echo date('d-M-Y',strtotime($get_array['dob']))?></td>
                              <td class="tdborder" style="padding-left:20px;"><?php echo date('d-M-Y',strtotime($get_array['registration_date']))?></td>
                              <td class="tdborder" style="padding-left:20px;">
							  <?php 
                              	echo $align_member=GetValue("select count(*) as col from tbl_users where parent_id=".$get_array['user_id'], "col");
								
								?>/3 </td>
                            
                              <td class="tdborder" style="padding-left:20px;"><table cellpadding="0" cellspacing="0"  style="width:100%" >
                                  <tr>
			
			  <td class="SubTd1"><a style="cursor:pointer;" href="<?php echo $strHostName;?>/page.php?dir=registration/view_users&cid=<?php echo  $converter->encode($get_array['user_id'])?>&parent_id=<?php echo  $converter->encode($get_array['user_id'])?>"><img src="images/register_steps/view_icon.jpg" alt=""></a></td>
			  <td class="SubTd2"><a style="cursor:pointer;" onClick="javascript:Lipid_Profile_Delete_By_Id('<?php echo  $converter->encode($get_array['lipid_profile_id'])?>','<?php echo $get_array['lipid_profile_id']*121?>')"><img src="images/register_steps/delete_icon.jpg" alt=""></a></td>
			</tr>
                                </table></td>
                            </tr>
                            <?php  } ?>
                         <tr>
                            <td colspan="6" style="display:''; text-align:center; padding:15px 0;">
                                <?php echo $pagingLink ?>
                            </td>
                          </tr>
                          </table>
</center>