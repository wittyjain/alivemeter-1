<?php
if(!isset($_SESSION['UserMDID']))
{
	Alertandredirect("Sorry! Session is expired.", 'index.php');
}
?>
<section>
  <div class="top_ou">
    <div class="top_in">
      <div class="top">
        <div class="cal_12" style="padding-top: 45px; padding-bottom:60px;">
            <div class="cal_12" style="border: solid 0px #0066CC;">
            	<div class="adviceonline_md">
                 <h1 class="f_red" style="text-align: left; font-size: 20px; margin-bottom: 7px; text-transform:uppercase; display:none;">Doctor Comments</h1>
                	  <div class="DvFloat">
<?php
	$page=1;$page_count=5;$newpagenumber="2";$retrive_Array=array();$get_array=array(); $retrive_Array1=array();$get_array1=array(); $nume1="0"; $newpagenumber1="0";
	$othermdcmtcount="0"; $nume="";
	if(isset($_GET['page'])){
		$page=$_GET['page'];
	}
	else
	{
		$page=1;
	}
	if(isset($_SESSION['UserDocID']))
	{
		$user_id=$_SESSION['UserDocID'];
	}
	else
	{
		$user_id=0;
	}
	
	if(isset($_SESSION['UserMDID']))
	{
		$md_id=$_SESSION['UserMDID'];
	}
	else
	{
		$md_id=0;
	}
	
	if(isset($_GET['patient_id'])) 
	{	
		$patient_id=$converter->decode($_GET['patient_id']);
	}
		
	if($_SESSION['UserType']=="Doctor"){
		$retrive_Array=$get_retrive->GetDocMDComments($page_count,$patient_id,$user_id);
		$nume=$get_retrive->GetDocMDComments_Count();
	}
	
	else
	{
		$retrive_Array=$get_retrive->GetMyMDComments($page_count,$patient_id,$md_id);
		$nume=$get_retrive->GetMyMDComments_Count($md_id);
		
		////Alert ($nume);
		
		$retrive_Array1=$get_retrive->GetOtherMDComments($page_count,$patient_id,$md_id);
		$nume1=$get_retrive->GetOtherMDComments_Count($md_id);
		
	}
	
	///Alert ($page_count);
	if($nume !="0")
	{
		$newpagenumber=($nume/$page_count);
		
		////Alert ($newpagenumber);
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
		////Alert ($newpagenumber);
	}
	
	if($nume1 !="0")
	{
		$newpagenumber1=($nume1/$page_count);
		if($newpagenumber1==""){$newpagenumber1="0";}else{$newpagenumber1=$newpagenumber1+1;}
		$newpagenumber1=round($newpagenumber1);
		if($page > $newpagenumber1)
		{
			$newpagenumber1=1;
		}
		else
		{
			$newpagenumber1="";
		}
		$pagingLink1 = getPagingLinkBackEndFrontEnd($nume1,$page_count,'dir=md/md_comments&patient_id='.$_GET['patient_id'].'',$newpagenumber,$strHostName."/page_doctor.php");
	}
	
	$pagingLink = getPagingLinkBackEndFrontEnd($nume,$page_count,'dir=md/md_comments&patient_id='.$_GET['patient_id'].'',$newpagenumber,$strHostName."/page_doctor.php");
	
	if($_SESSION['UserType']=="Doctor")
	{
		$doctor_id=$_SESSION['UserDocID'];
		$mdcmtcount=GetValue("select count(*) as col from ".MD_Comment." where patient_id=".$patient_id." and ref_doctor_id=".$doctor_id,"col");
		$doccmtcount=GetValue("select count(*) as col from ".Doc_Comment." where patient_id=".$patient_id." and doctor_id=".$doctor_id,"col");
	
	}
	else if($_SESSION['UserType']=="MD")
	{
		$doctor_id=$_SESSION['UserMDID'];
		$mdcmtcount=GetValue("select count(*) as col from ".MD_Comment." where patient_id=".$patient_id."  and md_id=".$doctor_id,"col");
		$othermdcmtcount=GetValue("select count(*) as col from ".MD_Comment." where patient_id=".$patient_id."  and md_id<>".$doctor_id,"col");
		$doccmtcount=GetValue("select count(*) as col from ".Doc_Comment." where patient_id=".$patient_id." and md_id=".$doctor_id,"col");
	}
	
?>
<?php if($mdcmtcount > 0) { ?>
<center>
  <div class="DvFloat" style="border-bottom: solid 0px #e4e4e4;border-top: solid 0px #e4e4e4; margin:10px 0px 0px 0px">
    <h1 class="f_red" style="text-align: left; font-size: 18px; font-weight:bold;  margin: 7px;">
     <?php if($_SESSION['UserType']=="MD") 
	  {
	  	echo "MD comments";
	  }
	  else
	  {
	  	echo "MD&rsquo;s comments";
	  }
	  ?>
    
    </h1>
  </div>	
  <div class="DvFloat" style="margin-bottom:30px;">
  		
            <table class="tablecont" cellpadding="2" cellspacing="1" width="100%" border="0">
          <tbody>
            <tr>
              <td class="dargery" style="width:120px;"> Sent On </td>
              <td class="dargreen" style="width:80px;"> MD Name</td>
              <td class="dargreen" style="width:80px;"> Status</td>
              <td class="dargreen" style="width:250px;"> Advice / Reason</td>
              <td class="dargreen" style="width:250px;"> Internal Advice </td>
            </tr>
            <?php 
			$page=1;$page_count=5;$newpagenumber="2"; $nume="0";
			 while($get_array = mysql_fetch_array( $retrive_Array )){
                $md_name=""; 
                if($get_array['md_id']>0){
                    $md_name=GetValue("select doctor_name as col from tbl_doctor where doctor_id=".$get_array['md_id'], "col");
                }
                if($md_name=="" || $md_name=="0")
                {
                    $md_name="-";
                }
                $complaint=GetValue("select complaint as col from tbl_compose where mail_id=".$get_array['compose_id'],"col");
				$complaint_date=GetValue("select created_date as col from tbl_compose where mail_id=".$get_array['compose_id'],"col");
             ///  $pagingLink = getPagingLinkBackEndFrontEnd_ajax($nume,$page_count,'',$newpagenumber, "MD_Comment_Ins");
			 ///   Alert ($pagingLink);
            ?>
            <tr>
              <td class="ligery" style="text-align:left;"><?php echo date('d-M-Y h:i:s',strtotime($get_array['created_date']))?></td>
               <td class="ligreen" style="text-align:left;"><div class="LongText"><?php echo $md_name;?></div></td>
              <td class="ligreen" style="text-align:left;">
                <?php if ($get_array['rejected']=="0") { 
                    echo "Replied";
                    } else
                    {
                        echo "Rejected";
                    }
                ?>
                    
               
              </td>
              <td class="ligreen" style="text-align:left;"><div class="LongText"><?php echo $get_array['md_advice']?></div></td>
                <td class="ligreen" style="text-align:left;"><div class="LongText">
							<a href="#" class="tooltip">
                            <?php echo $get_array['md_internal_advice']?>
                            <span>
                                <img class="callout" src="<?php echo $strHostName;?>/images/callout.gif"  style="top:35px;"/>
                                 
                                 <table width="100%" border="0" cellspacing="0" cellpadding="0" style="line-height:20px;">
                                  <tr>
                                   <td style="font-size:12px;"><?php echo date('d-M-Y h:i:s',strtotime($complaint_date))?></td>
                                  </tr>
                                  <tr>
                                   <td style="font-size:12px;"><?php echo $complaint;?></td>
                                  </tr>
                                 
                                </table>
							</span>
                        </a>
                        
                        
				</div></td>
            </tr>
            <?php  } ?>
           <?php if ($nume > 5) { ?>
        <tr>
          <td colspan="6" style="display:''; text-align:center; padding:10px 0;"><?php echo $pagingLink ?> </td>
        </tr>
        <?php } ?>
          </tbody>
        </table>
		
    	
    </div>
</center>
<?php } ?>




<?php if($othermdcmtcount > 0) { ?>
<center>
  <div class="DvFloat" style="border-bottom: solid 0px #e4e4e4;border-top: solid 0px #e4e4e4; margin:10px 0px 0px 0px">
    <h1 class="f_red" style="text-align: left; font-size: 18px; font-weight:bold;  margin: 7px;">
    Other MD's Comments
    
    </h1>
  </div>
  <div class="DvFloat" style="margin-bottom:30px;">
  		
            <table class="tablecont" cellpadding="2" cellspacing="1" width="100%" border="0">
          <tbody>
            <tr>
              <td class="dargery" style="width:120px;"> Sent On </td>
              <td class="dargreen" style="width:80px;"> MD Name</td>
              <td class="dargreen" style="width:80px;"> Status</td>
              <td class="dargreen" style="width:250px;"> Advice / Reason</td>
              <td class="dargreen" style="width:250px;"> Internal Advice </td>
            </tr>
            <?php
				$page1=1;$page_count1=5;$newpagenumber1="2"; $nume="25";
				while($get_array1 = mysql_fetch_array( $retrive_Array1 )){
                $md_name=""; 
                if($get_array1['md_id']>0){
                    $md_name=GetValue("select doctor_name as col from tbl_doctor where doctor_id=".$get_array1['md_id'], "col");
                }
                if($md_name=="" || $md_name=="0")
                {
                    $md_name="-";
                }
                $pagingLink1 = getPagingLinkBackEndFrontEnd_ajax($nume1,$page_count1,'',$newpagenumber1, "MD_Comment_Ins");
                //Alert ($get_array['md_id']);
            ?>
            <tr>
              <td class="ligery" style="text-align:left;"><?php echo date('d-M-Y h:i:s',strtotime($get_array1['created_date']))?></td>
               <td class="ligreen" style="text-align:left;"><div class="LongText"><?php echo $md_name;?></div></td>
              <td class="ligreen" style="text-align:left;">
                <?php if ($get_array1['rejected']=="0") { 
                    echo "Replied";
                    } else
                    {
                        echo "Rejected";
                    }
                ?>
                    
               
              </td>
              <td class="ligreen" style="text-align:left;"><div class="LongText"><?php echo $get_array1['md_advice']?></div></td>
                <td class="ligreen" style="text-align:left;"><div class="LongText"><?php echo $get_array1['md_internal_advice']?></div></td>
            </tr>
            <?php  } ?>
            <tr>
              <td colspan="6" style="display:none;"><?php echo $pagingLink1 ?> </td>
            </tr>
          </tbody>
        </table>
		
    	
    </div>
</center>
<?php } ?>

                      </div>
                      
                   
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</section>
