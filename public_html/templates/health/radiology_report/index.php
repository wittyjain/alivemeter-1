<script type="text/javascript" src="<?php echo $strHostName?>/js/health_steup_validation.js"></script>
<script type="text/javascript" src="<?php echo $strHostName?>/js/health_steup_insert_retrive.js"></script>
<script>
function showform()
{ 
	document.getElementById('divShowHideForm').style.display = 'block'; 
	 document.getElementById('HideLPDivLink').style.display = ''; 
	 document.getElementById('ShowLPDivLink').style.display = 'none';
}
function showCancel()
{ 
	document.getElementById('divShowHideForm').style.display = 'none';
	document.getElementById('ShowLPDivLink').style.display = ''; 
	document.getElementById('HideLPDivLink').style.display = 'none'; 
 }
</script>
<script type="text/javascript">
function uploadValidation() 
{
	
	if(document.getElementById("txt_Test_Name").value=="")
	{	
		alert ("Please enter test name.");
		document.getElementById("txt_Test_Name").focus();
		return false;
	}

	
	if(document.getElementById("cmb_Report_Day_Doc_pres").value=="0" || document.getElementById("cmb_Report_Month_Doc_pres").value=="0" || document.getElementById("cmb_Report_Year_Doc_pres").value=="0")
	{
		alert ("Please select report date.");
		document.getElementById("cmb_Report_Day_Doc_pres").focus();
		return false;
	}
	
	
	if(document.getElementById("txt_Lab_Name").value=="")
	{	
		alert ("Please enter lab name.");
		document.getElementById("txt_Lab_Name").focus();
		return false;
	}
	
	if(document.getElementById("txt_Health_Problem").value=="")
	{	
		alert ("Please enter health problem.");
		document.getElementById("txt_Health_Problem").focus();
		return false;
	}

	uploadFile(); 
	
	
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
                    <li><a href="<?php echo $strHostName;?>/page.php?dir=health/radiology_report" class="selected">Radiology Reports</a></li>
                    <li><a href="<?php echo $strHostName;?>/page.php?dir=health/prescription">Prescription</a></li>
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
                      <div class="dvFloat formpadding1" style="border-bottom: solid 0px #e1e1e1;">
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
						
						
						$retrive_Array=$get_retrive->Get_Radiology_Report($page_count,0,$parent_id, $type);
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
						$pagingLink = getPagingLinkBackEndFrontEnd($nume,$page_count,'dir=health/radiology_report',$newpagenumber,$strHostName."/page.php");
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
                                <td class="tdborder" style="padding-left:20px;"><?php echo $get_array['test_name']?></td>
                                <td class="tdborder" style="padding-left:20px;"><?php echo date('d-M-Y',strtotime($get_array['report_date']))?> </td>
                                <td class="tdborder" style="padding-left:20px;"><?php echo $get_array['lab_result']?></td>
                                <td class="tdborder" style="padding-left:20px;"><?php echo $get_array['health_problem']?></td>
                                <td class="tdborder" style="padding-left:20px;"><table cellpadding="0" cellspacing="0"  style="width:100%" >
                                <tr>
                                 <?php $imageid=GetValue("select file_path as col from tbl_doc_consult_gallery where parent_id=".$get_array['parent_id'], "col"); 
									if($imageid!="")
									{
										$imageid=$imageid;
									}
									else
									{
										$imageid="noimage.jpg";
									}
								?>
                                  <td class="SubTd"><a class="fancybox-manual-c" style="cursor: pointer;" target="_blank" href="<?php echo $strHostName;?>/uploads/<?php echo $imageid;?>"><img src="images/register_steps/view_icon.jpg" alt=""></a></td>
                                   <td class="SubTd1" style="display:none;"><a onClick="javascript:Radiology_Retrive_By_Id('<?php echo  $converter->encode($get_array['id'])?>')" style="cursor:pointer;"><img src="images/register_steps/edit_icon.jpg" alt=""></a></td>
                                   <td class="SubTd2"><a style="cursor:pointer;" onClick="javascript:UploadGallery_Delete_By_Id('<?php echo  $converter->encode($get_array['id'])?>','<?php echo $get_array['id']*121?>')"><img src="images/register_steps/delete_icon.jpg" alt=""></a></td>
                                
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
                      <div class="dvFloat formpadding1" style="padding:10px 0px 5px 20px; border-bottom: solid 1px #e1e1e1;">
                      
                     <a  onClick="showform();" style="cursor:pointer"><img src="images/nutritionist/add_to_list.jpg" alt=""  id="ShowLPDivLink"></a>
                                
                                   <a  onClick="showCancel();" style="cursor:pointer">
                    	<img src="images/nutritionist/add_minus.jpg" alt="" title="" border="0" style="float:left; margin-right:10px; display:none;"  id="HideLPDivLink">
                    </a>
                      <div id="divShowHideForm" style="display: none;">
                        <div class="dvFloat formpadding1">
                          <div class="formlabel1">
                            <label class="formlabel1">Test Name<span class="redtxt">*</span> </label>
                          </div>
                          <div class="formcontrol2">
                           <input type="text" name="txt_Test_Name" id="txt_Test_Name" value="" style="width: 207px;" />
                            <input id="txt_Random_ID" name="txt_Random_ID" value="<?php echo $random;?>" type="hidden"/>
                             <input id="txt_Random_ID1" name="txt_Random_ID1" value="<?php echo $random;?>" type="hidden"/>
                            <input id="txt_UploadID" name="txt_UploadID" value="" type="hidden"/>
                            <input id="txt_Type" name="txt_Type" value="Main" type="hidden"/>
                            <input id="cmb_Prescription_Reports_Doc_pres" name="cmb_Prescription_Reports_Doc_pres" value="3" type="hidden"/>
                          </div>
                        </div>
                        <div class="dvFloat formpadding1">
                          <div class="formlabel1">
                            <label class="formlabel1">Date Performed<span class="redtxt">*</span> </label>
                          </div>
                          <div class="formcontrol2">
                            <div class="dvFloat">
                              <div style="float:left; padding:0px 15px 0px 0px">
                                <select  id="cmb_Report_Day_Doc_pres"  name="cmb_Report_Day_Doc_pres" title=""  style="width:60px;">
                                  <option value="0" selected="selected">DD</option>
                                    <?php for($iDay=1;$iDay < 32;$iDay++){ ?>
                                        <option value="<?php echo $iDay?>"><?php echo $iDay?></option>
                                    <?php } ?>
                                </select>
                              </div>
                              <div style="float:left; padding:0px 15px 0px 0px">
                                <select  id="cmb_Report_Month_Doc_pres" name="cmb_Report_Month_Doc_pres" title=""  style="width:60px;">
                                  <option value="0" selected="selected">MM</option>
                                    <?php for($iMonth=1;$iMonth < 13;$iMonth++){ ?>
                                        <option value="<?php echo $iMonth?>"><?php echo $iMonth?></option>
                                    <?php } ?>
                                </select>
                              </div>
                              <div style="float:left; padding:0px 0px 0px 0px">
                                <select  id="cmb_Report_Year_Doc_pres" name="cmb_Report_Year_Doc_pres"  title=""  style="width:68px;">
                                  <option value="0">YYYY</option>
                                  <?php for($iYear=2010;$iYear < 2015;$iYear++){ ?>
                                    <option value="<?php echo $iYear?>" ><?php echo $iYear?></option>
                                 <?php } ?>
                                </select>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="dvFloat formpadding1">
                          <div class="formlabel1">
                            <label class="formlabel1">Lab Name<span class="redtxt">*</span> </label>
                          </div>
                          <div class="formcontrol2">
                           <input type="text" name="txt_Lab_Name" id="txt_Lab_Name" value="" style="width: 207px;" />
                          </div>
                        </div>
                        <div class="dvFloat formpadding1">
                          <div class="formlabel1">
                            <label class="formlabel1">Health Problem <span class="redtxt">*</span> </label>
                          </div>
                          <div class="formcontrol2">
                            <input type="text" name="txt_Health_Problem" id="txt_Health_Problem" value="" style="width: 207px;" />
                          </div>
                        </div>
                        <div class="dvFloat formpadding1">
                          <div class="formlabel1">
                            <label class="formlabel1">Lab Results of test prescribed by doctor<span class="redtxt">*</span> </label>
                          </div>
                          <div class="formcontrol2">
                            <input type="radio" id="txtLabResultsYes" name="txtLabResults" value="Yes">
                            <label for="Yes">Yes</label>
                            &nbsp;&nbsp;
                            <input type="radio" id="txtLabResultsNo" name="txtLabResults" value="No" checked="checked">
                            <label for="No">No</label>
                            &nbsp;&nbsp; </div>
                        </div>
                        <div class="dvFloat formpadding1" style="border-bottom: solid 0px #e1e1e1;">
                          <div class="formlabel1">
                            <label class="formlabel1">Report </label>
                          </div>
                          <div class="formcontrol2">
                          <input type="file" id="flPhoto" class="button1" name="flPhoto" style="width:75px;display:none;" onchange="javascript:ShowFileName();" value="" />
                          
			<a style="cursor:pointer" onclick="javascript:SetFileClick();"><img src="images/register_steps/upload_prescription.jpg" alt="" /></a> 
          
          <div id="dvViewFile" name="dvViewFile" style="display:none; width:800px; padding-top:0px; float:left; margin-left:250px; text-align:left; margin-top:-25px;"><a id="aViewFile" name="aViewFile" target="_blank">View File</a>
                    <img src="<?php echo $strHostName;?>/images/loading.gif" style="display:none; margin-top:-10px;" id="imgLoader"  />
           
            </div>
                        </div>
                        <div class="dvFloat formpadding1"  style="padding:10px 0px 10px 0px; border-bottom: solid 0px #e1e1e1;">
                          <div class="formlabel1"> &nbsp; </div>
                          <div class="formcontrol2">
                            <div style=" width:84px; height:30px; float:left;padding-right:10px;"> <a class="button4"  onclick="javascript: uploadValidation();" style="cursor:pointer;">SUBMIT</a></div>
                            <div style=" width:156px; height:30px; float:left;padding-right:10px; display:none;"> <a class="button2" >NOT APPLICABLE</a></div>
                            <div style=" width:156px; height:30px; float:left;padding-right:10px;"> <a class="button2"  onClick="showCancel();" style="cursor:pointer">Cancel</a></div>
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
    </div>
  </div>
</div></div>
</section>
