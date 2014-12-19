<?php
	$page=1;$page_count=5; $type=""; $newpagenumber="2";$retrive_Array=array();$get_array=array();
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
	
	if(isset($_SESSION['UserID'])){
		$user_id=$_SESSION['UserID'];
		}
		else
		{
			$user_id=0;
		}
	
	$retrive_Array=$get_retrive->Get_Prescription($parent_id,$page_count);
	$nume=$get_retrive->Get_Prescription_Count();

	 ///Alert ($nume);	
	
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
	$pagingLink = getPagingLinkBackEndFrontEnd($nume,$page_count,'dir=health/prescription',$newpagenumber,$strHostName."/page.php");
?>
<table cellpadding="4" cellspacing="4"  style="width:100%" >
	  <tr>
        <td style="width: 13%;" class="nutri_tdgreybg1">Report Date </td>
        <td style="width: 38%;" class="nutri_tdgreybg2">Prescribed by Doctor</td>
        <td style="width: 40%;" class="nutri_tdgreybg3">Health Problem</td>
        <td style="width: 10%;" class="nutri_tdgreybg4">actions </td>
      </tr>
  
	  <?php  while($get_array = mysql_fetch_array( $retrive_Array )){
	 	 $doc_upload_count=GetValue("select Count(*) as col from tbl_doc_consult_gallery where  userid=$user_id and report_type=1", "col");
	  
	  ?>
	  <tr id="tr_doc_consult_<?php echo $get_array['id']*121?>">
		<td class="nutri_tdlightgreybg1"><?php echo date('d-M-Y',strtotime($get_array['report_date']))?></td>
		<td style="text-align: left; padding-left: 10px;" class="nutri_tdlightgreybg2"><?php echo $get_array['lab_result']?> </td>
		<td style="text-align: left; padding-left: 10px;" class="nutri_tdlightgreybg3"><?php echo $get_array['health_problem']?></td>
		<td class="tdborder nutri_tdlightgreybg2">
		<table cellpadding="0" cellspacing="0"  style="width:100%" >
			    <?php  $imageid=$get_array['file_path']; 
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
			  <td  style="text-align:center;">
              
              
              <?php if($doc_upload_count=="0" || $doc_upload_count=="") { ?>
             	 <a class="fancybox-manual-c" style="cursor: pointer;" href="#"><img src="<?php echo $strHostName;?>/images/nutritionist_action_icon.jpg" alt=""></a>
             <?php } else { ?> 
             	 <a class="fancybox-manual-c" style="cursor: pointer;" target="_blank" href="<?php echo $strHostName;?>/uploads/<?php echo $imageid;?>"><img src="<?php echo $strHostName;?>/images/nutritionist_green_action_icon.png" alt=""></a>
             <?php } ?>
             
             
             
              
             </td>
			 
			</tr>
		  </table></td>

	  </tr>
	  <?php  } ?>
	  
      <?php if($nume=="0") { ?>
                      <tr>
                        <td colspan="5" style="text-align:center; color: #009999; font-size:14px; font-weight: bold;">
                            <p style="padding:10px 0 0px 0;">No current data! Organize all your medical records here...</p>
                        </td>
                      </tr>
                     <?php } ?>
                      <?php if ($page_count < $nume) { ?>
                      <tr>
                        <td colspan="5" style="display:none; text-align:center; padding:5px 0;">
                            <?php echo $pagingLink ?>
                        </td>
                      </tr>
                     <?php } ?>
                     
                     
                     
       <?php if($_SESSION['UserType']!="Doctor" && $_SESSION['UserType']!="MD" && $_SESSION['UserType']!="Nutritionist" && $nume > 5){ ?>
      <tr>
      	<td colspan="4" style="text-align:right; font-size:12px; padding-top:10px;"><a href="<?php echo $strHostName;?>/page.php?dir=health/prescription" style="text-decoration:underline;">View More  </a></td>
      </tr>
      <?php } ?>
      
      
     
</table>	

