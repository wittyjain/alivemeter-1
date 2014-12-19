<script type="text/javascript" src="<?php echo $strHostName?>/js/health_steup_validation.js"></script>
<script type="text/javascript" src="<?php echo $strHostName?>/js/health_steup_insert_retrive.js"></script>
<script>
function showDform()
{ 
	document.getElementById('ShowDDiv').style.display = 'block'; 
	 document.getElementById('HideDDivLink').style.display = ''; 
	 document.getElementById('ShowDDivLink').style.display = 'none';
}
function showDCancel()
{ 
	document.getElementById('ShowDDiv').style.display = 'none';
	document.getElementById('ShowDDivLink').style.display = ''; 
	document.getElementById('HideDDivLink').style.display = 'none'; 
 }
</script>
<script type="text/javascript">
function uploadValidation() 
{
	if(document.getElementById("cmb_Report_Day_Doc_pres").value=="0" || document.getElementById("cmb_Report_Month_Doc_pres").value=="0" || document.getElementById("cmb_Report_Year_Doc_pres").value=="0")
	{
		alert ("Please select report date.");
		document.getElementById("cmb_Report_Day_Doc_pres").focus();
		return false;
	}
	
	uploadFile(); 
}

function ViewDoctor(name, id)
{
	document.getElementById("DvDoctorForm").style.display="";
	document.getElementById("txtCommonDoctorType").value=name;
	document.getElementById("txtCommonDoctorID").value=id;
}
function showCancel()
{ 
	document.getElementById('DvDoctorForm').style.display = 'none'; 
}
</script>
<?php $iDay="0";$iMonth="0";$iYear="0";
$random=(strtotime('now')*33);

?>

<?php include "includes/dashboard_top.inc.php";?>
<section>
<div class="cal_full_size">
<div class="cal_12 m_outo">
  <?php include "includes/dashboard_links.inc.php";?>
  <div class="dvFloat">
    <div class="dvWrapper">
      <div style=" padding:0px 0px 35px 0px">
         		<div class="dvWrapper">
          <div style=" padding:25px 0px 25px 0px">
            <div class="DvFloat" style="padding-bottom:50px;">
              <div class="TabDv">
                <div>
                  <ul id="tabstabs" class="shadetabs">
                    <li class="selected"><a href="<?php echo $strHostName;?>/page.php?dir=health/lab_report"> Lab Reports </a></li>
                    <li><a href="<?php echo $strHostName;?>/page.php?dir=health/radiology_report">Radiology Reports</a></li>
                    <li><a href="<?php echo $strHostName;?>/page.php?dir=health/presscription"  class="selected">Prescription</a></li>
                  </ul>
                </div>
                <div class="TabContentDetails" style="display:'';">
                 
                    <div class="DvFloat" style="padding:10px 0px">
                      <div class="dvFloat formpadding">
                        <div class="formlabel1">
                          <label class="formlabel1">
                          <h2 class="Tab_Title">list</h2>
                          </label>
                        </div>
                        <div class="formcontrol2"> &nbsp; </div>
                      </div>
                      <div class="dvFloat formpadding1" id="dvDocConsult1" name="dvDocConsult1" style="border-bottom:0px;">
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
						
						
						 
						$retrive_Array=$get_retrive->Get_Prescription($parent_id,$page_count);
						$nume=$get_retrive->Get_Prescription_Count($parent_id, $type);
						
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
                        <table cellpadding="0" cellspacing="0"  style="width:100%" >
                          <tr>
                            <td class="tbl_head">Date Performed </td>
                            <td class="tbl_head">Prescribed by Doctor</td>
                            <td class="tbl_head">Health Problem</td>
                            <td class="tbl_head">Actions</td>
                          </tr>
                          
                          
                           <?php  while($get_array = mysql_fetch_array( $retrive_Array )){?>
	  						<tr id="tr_doc_consult_<?php echo $get_array['id']*121?>">
                               <td class="tdborder" style="padding-left:20px;"><?php echo date('d-M-Y',strtotime($get_array['report_date']))?> </td>
                                 <td class="tdborder" style="padding-left:20px;"><?php echo $get_array['lab_result']?></td>
                                <td class="tdborder" style="padding-left:20px;"><?php echo $get_array['health_problem']?></td>
                                <td class="tdborder" style="padding-left:20px;"><table cellpadding="0" cellspacing="0"  style="width:100%" >
                                <tr>
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
                                  <td class="SubTd">
                                  
                                  <a class="fancybox-manual-c" style="cursor: pointer;" target="_blank" href="<?php echo $strHostName;?>/uploads/<?php echo $imageid?>"><img src="images/register_steps/view_icon.jpg" alt=""></a>
                                  </td>
                                  
                                   <td class="SubTd2"><a style="cursor:pointer;" onclick="javascript:Doc_Consult_Delete_By_Id('<?php echo  $converter->encode($get_array['doc_consult_id'])?>','<?php echo $get_array['doc_consult_id']*121?>')"><img src="images/register_steps/delete_icon.jpg" alt=""></a></td>
                                
                                </tr>
                              </table></td>
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
                      </div>
                    
                      <div style="border:solid 0px red; float:left; width:100%; padding-top:0px; margin-top:-60px; border-top:0px;">
                        <?php include "view_files/doc_consult.inc.php";?>
                      </div>
                    </div>
               
                </div>
              </div>
            </div>
          </div>
        </div>
        	
        </div>
      </div>
    </div>
  </div>
</div></div>
</section>
<div id="dvpopup-form1" style="text-align: center; width: 780px;position:absoulte;margin-left:15%; margin-top:15px;display:none ">
  <table cellpadding="0" cellspacing="0" border="0" width="400px" align="center">
    <tr>
      <td align="center" style="padding: 10px 37px 10px 350px"><div style="margin: 15px 0px 0px 333px; position: absolute;"> <a href="javascript:Popup.hide('dvpopup-form1');" target="_parent" style="text-decoration: none; color: #fff;"> <img src="images/close.png" alt="" title="" border="0" /> </a> </div></td>
    </tr>
    <tr>
      <td valign="top" align="center" style="padding: 10px 10px 10px 10px;"><div class="DvFloat">
          <div class="dvWhitePopup_Box">
			<?php include "view_files/upload_gallery.inc.php";?>
          </div>
        </div></td>
    </tr>
  </table>
</div>


<div class="frmclickhere" id="DvDoctorForm" style="display:none; position:absolute; z-index:99999; text-align:center; top:100px; margin:0 auto; left:400px;">
    <form method="post" id="signup" action="">
        <div style="border-bottom: solid 2px #d4d4d4; background-color: #f0f0f0; padding: 12px 11px; float: left; width: 95%; font-size: 14px; font-weight: bold;">
            Add Doctor 
         </div>
         <div style="text-align:right; margin-top:-50px; float:right;">
            <a onClick="showCancel();"><img src="<?php echo $strHostName;?>/images/close.png" /></a>
         </div>
         <?php include "view_files/common_doctor.inc.php";?>
        
    </form>
</div> 