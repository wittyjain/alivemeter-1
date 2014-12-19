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
	$retrive_Array=$get_retrive->Get_Health_Problem($page_count,0,$user_id);
	$nume=$get_retrive->Get_Health_Problem_Count($user_id);
	
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
	$pagingLink = getPagingLinkBackEndFrontEnd_ajax($nume,$page_count,'',$newpagenumber, "Health_Problems");
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
                        <td class="tbl_head">Date</td>
                        <td class="tbl_head">Cardiac</td>
                        <td class="tbl_head">Eye</td>
                        <td class="tbl_head">Kidney</td>
						<td class="tbl_head">Blood Circulation</td>
						<td class="tbl_head">Skin</td>
						<td class="tbl_head">Digestive</td>
						<td class="tbl_head">Joint Pains</td>
						<td class="tbl_head">Constipation</td>
						<td class="tbl_head">Other</td>
						 <?php if($_SESSION['UserType']!="Doctor" && $_SESSION['UserType']!="MD" && $_SESSION['UserType']!="Nutritionist"){ ?>
                           <td class="tbl_head">Actions</td>
                       <?php } ?>
                      </tr>
					  <?php  while($get_array = mysql_fetch_array( $retrive_Array )){?>
                        <tr id="tr_Health_Problem_<?php echo $get_array['health_problem_id']*121?>">
                        <td class="tdborder" style="padding-left:10px;"><?php echo date('d-M-Y',strtotime($get_array['created_date']))?></td>
                         <td class="tdborder" style="padding-left:10px;"><?php echo $get_array['cardiac_problem']?></td>
                         <td class="tdborder" style="padding-left:10px;"><?php echo $get_array['eye_problem']?></td>
                         <td class="tdborder" style="padding-left:10px;"><?php echo $get_array['kidney_problem']?></td>
						 <td class="tdborder" style="padding-left:10px;"><?php echo $get_array['circulation_problem']?></td>
						 <td class="tdborder" style="padding-left:10px;"><?php echo $get_array['skin_problem']?></td>
						 <td class="tdborder" style="padding-left:10px;"><?php echo $get_array['digestive_problem']?></td>
						 <td class="tdborder" style="padding-left:10px;"><?php echo $get_array['joint_problem']?></td>
						 <td class="tdborder" style="padding-left:10px;"><?php echo $get_array['constipation_problem']?></td>
						 <td class="tdborder" style="padding-left:10px;"><?php echo $get_array['other_problem']?></td>
						 <?php if($_SESSION['UserType']!="Doctor" && $_SESSION['UserType']!="MD" && $_SESSION['UserType']!="Nutritionist"){ ?>
                        <td class="tdborder" style="padding-left:10px;"><table cellpadding="0" cellspacing="0"  style="width:100%" >
                           <?php if($_SESSION['UserType']!="Doctor" && $_SESSION['UserType']!="MD" && $_SESSION['UserType']!="Nutritionist"){ ?>
                           <tr>
							  <td class="SubTd" style="display:none;"><a class="fancybox-manual-c" style="cursor: pointer;"><img src="images/register_steps/view_icon.jpg" alt=""></a></td>
							  <td class="SubTd1">
                              
                              <a style="cursor:pointer;" id="editbtn_hp<?php echo $get_array['health_problem_id']*121?>" onclick="javascript:Health_Problem_Retrive_By_Id
('<?php echo  $converter->encode($get_array['health_problem_id'])?>','<?php echo  $get_array['health_problem_id']*121?>')"><img src="images/register_steps/edit_icon.jpg" alt=""></a>
                              
                               <a style="cursor:pointer; display:none;" id="rededitbtn_hp<?php echo $get_array['health_problem_id']*121?>" onclick="javascript:Health_Problem_Retrive_By_Id('<?php echo  $converter->encode($get_array['health_problem_id'])?>','<?php echo  $get_array['health_problem_id']*121?>')"><img src="images/register_steps/edit_icon_red.png" alt=""></a>
                               
                               </td>
							  <td class="SubTd2"><a  onclick="javascript:Health_Problem_Delete_By_Id('<?php echo  $converter->encode($get_array['health_problem_id'])?>','<?php echo $get_array['health_problem_id']*121?>')" style="cursor:pointer;"><img src="images/register_steps/delete_icon.jpg" alt=""></a></td>
							</tr>
                            <?php } ?>
					  </table></td>
                      <?php } ?>
                      </tr>
					  <?php  } ?>
      
	  <?php if($nume=="0") { ?>
      <tr>
		<td colspan="11" style="text-align:center; color: #009999; font-size:14px; font-weight: bold;">
			<p style="padding:30px 0 0px 0;">No current data! Organize all your medical records here...</p>
		</td>
  </tr>
     <?php } ?>
	  
	  <?php if ($page_count < $nume) { ?>
	  <tr>
		<td colspan="11" style="display:''; text-align:center; padding:5px 0;">
			<?php echo $pagingLink ?>
		</td>
	  </tr>
     <?php } ?>
                    </table>