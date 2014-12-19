<script type="text/javascript">
function uploadValidation() 
{
	if(document.getElementById("cmb_Report_Day_Doc_pres").value=="0" || document.getElementById("cmb_Report_Month_Doc_pres").value=="0" || document.getElementById("cmb_Report_Year_Doc_pres").value=="0")
	{
		alert ("Please select report date.");
		document.getElementById("cmb_Report_Day_Doc_pres").focus();
		return false;
	}
	
	
		
	if(document.getElementById("flPhoto").value=="" || document.getElementById("aViewFile").innerHTML=="")
	{
		alert ("Please upload report.");
		document.getElementById("flPhoto").focus();
		return false;
	}
	
	if(document.getElementById("flPhoto").value != "") {
			var _validFileExtensions = [".jpg", ".png", ".jpeg", ".gif", ".pdf"];
			if(CheckUploadFileExtension(document.getElementById("flPhoto").value, _validFileExtensions) == false) {
				alert("Sorry, file extension you are uploading is invalid.\n\nAllowed extensions are : " + _validFileExtensions.join(", "));
				document.getElementById("flPhoto").focus();
				return false;
			}
		}

	
	var report_day1 = document.getElementById("cmb_Report_Day_Doc_pres").value;
	var report_month1 = document.getElementById("cmb_Report_Month_Doc_pres").value;
	var report_year1 = document.getElementById("cmb_Report_Year_Doc_pres").value;
	
	var current_date = new Date(); //Today Date
    var report_date = new Date(report_year1, report_month1-1, report_day1); 
	  
	//alert (consult_date);
	//alert (current_date);
	
	if(report_date >= current_date)
	{
		alert ("You cannot choose present or next date.");
		document.getElementById("cmb_Report_Day_Doc_pres").focus();	
		return false;
	}
	
	
	
	if(document.getElementById("cmb_Prescription_Reports_Doc_pres").value=="0")
	{
		alert ("Please select report.");
		document.getElementById("cmb_Prescription_Reports_Doc_pres").focus();
		return false;
	}
	
	
	
	if(document.getElementById("txt_Health_Problem").value=="")
		{
			alert ("Please enter health problem.");
			document.getElementById("txt_Health_Problem").focus();
			return false;
		}
		
		
	if(document.getElementById("cmb_Prescription_Reports_Doc_pres").value=="2" || document.getElementById("cmb_Prescription_Reports_Doc_pres").value=="3" )
	{
		if(document.getElementById("txt_Test_Name").value=="")
		{
			alert ("Please enter test name.");
			document.getElementById("txt_Test_Name").focus();
			return false;
		}
		
		
		if(document.getElementById("txt_Lab_Name").value=="")
		{
			alert ("Please enter lab name.");
			document.getElementById("txt_Lab_Name").focus();
			return false;
		}
	}
	
	uploadFile(); 
}
</script>
<?php
$iYearcurrentu=2014;

?>
<table cellpadding="0" border="0" cellspacing="0" style="width:100%; border:solid 0px #000000;">
  <tr>
	<td colspan="3" style="padding-bottom:15px;padding-left:20px;"><h2 class="Tab_Title">Upload Reports</h2></td>
  </tr>
  <tr>
	<td style="padding-left:20px; width:250px; border: solid 0px #0066CC;">Report Date </td>
	<td style="text-align: left; border: solid 0px #CC33CC;">Report</td>
	<td></td>
  </tr>
  <input id="txt_UploadID" name="txt_UploadID" value="" type="hidden"/>
    <input id="txt_Random_ID" name="txt_Random_ID" value="" type="hidden"/>
        <input id="txt_Random_ID1" name="txt_Random_ID1" value="<?php echo $random;?>" type="hidden"/>


	<input id="txt_Random_ID_all" name="txt_Random_ID_all" value="" type="hidden"/>
    <input id="txt_Random_ID1_all" name="txt_Random_ID1_all" value="<?php echo $random_1;?>" type="hidden" style="180px"/>
    
  <input id="txt_Random_ID1_all" name="txt_Random_ID1_lab" value="<?php echo $random_2;?>" type="hidden"/>
  
          	<input id="txt_Type" name="txt_Type" value="" type="hidden"/>
  <tr>
	<td style="padding-left:20px; width:250px; border: solid 0px #0066CC;"><div style="float:left; padding:0px 15px 0px 0px">
		 
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
		<select  id="cmb_Report_Year_Doc_pres" name="cmb_Report_Year_Doc_pres"  title=""  style="width:92px;">
		  
          <option value="0" selected="selected">YYYY</option>
		 <?php for($iYear=1;$iYear < 20;$iYear++){ ?>
					<option value="<?php echo $iYearcurrentu?>" ><?php echo $iYearcurrentu?></option>
                    <?php 
						$iYearcurrentu=$iYearcurrentu-1;
					?>
				 <?php } ?>
		 
		</select>
	  </div></td>
	<td style="width: 0px; border: solid 0px #CC33CC;"><select  id="cmb_Prescription_Reports_Doc_pres" name="cmb_Prescription_Reports_Doc_pres" title=""  onchange="javascript:Pres_Report_Show_Hide();" style="border: solid 0px #FF0033; text-align: left;">
		<option value="0">Select Report</option>
        <option value="1">Doctor Prescription</option>
		<option value="2">Lab Test</option>
		<option value="3">Radiology</option>
	  </select>
	</td>
	<td valign="top">
		
	</td>
  </tr>
  <tr>
	
	<td colspan="3" style="padding:22px 0 6px 20px;">
    	<table width="100%" cellpadding="0" cellspacing="0" border="0">
        	<tr>
            	<td>
                	<table width="100%" cellpadding="0" cellspacing="0" border="0">
                    	<tr>
                        	<td>Health Problem</td>
                         </tr>
                         <tr>
                            <td><input type="text" name="txt_Health_Problem" id="txt_Health_Problem" value="" style="width: 234px;" /></td>
                        </tr>
                    </table>
                </td>
                <td style="padding:0px; display:none; padding-bottom:0px;" id="dvPres_Report_Show_Hide">
                	<table width="100%" cellpadding="0" cellspacing="0" border="0">
                    	<tr>
                        	 <td style="padding-left:0px;padding-top:5px;">Test Name</td>
                             <td style="padding-left:6px;">Lab Name</td>
                        </tr>
                        <tr>
                        	 <td style="padding-left:0px;"><input type="text" name="txt_Test_Name" id="txt_Test_Name" value="" style="width: 180px;"></td>
                             <td><input type="text" name="txt_Lab_Name" id="txt_Lab_Name" value="" style="margin-left:5px; width: 180px;">
                             <input type="hidden" id="txtLabResultsNo" name="txtLabResults" value="0">
                             </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    
    <!--<table cellpadding="0" cellspacing="0" style="width:104%" border="0">
		<tr>
		
		 <td style="padding-left:0x; padding-top:5px; width:144px;" valign="top">Health Problem</td>
		<td style="padding-left:0px;"> <input type="text" name="txt_Health_Problem" id="txt_Health_Problem" value="" style="width: 369px;" /></td>
		</tr>
		
	  </table>--></td>
  </tr>
  <!--<tr>
	
	<td  colspan="3" style="padding:0px; display:none; padding-bottom:0px;" id="dvPres_Report_Show_Hide" ><table cellpadding="0" cellspacing="0" style="width:89%">
		<tr>
		  <td style="padding-left:20px;padding-top:5px;">Test Name</td>
		  <td style="padding-left:0px;">Lab Name</td>
		  <td>&nbsp;</td>
		</tr>
		<tr>
		  <td style="padding-left:20px;"><input type="text" name="txt_Test_Name" id="txt_Test_Name" value=""></td>
		  <td><input type="text" name="txt_Lab_Name" id="txt_Lab_Name" value="" style="margin-left:-5px;">
          
            <input type="hidden" id="txtLabResultsNo" name="txtLabResults" value="0">
		  </td>
		
		</tr>
	  </table></td>
  </tr>-->
  <tr>
  	<td colspan="2" style="padding-left:20px; padding-top:15px; border: solid 0px #FF6600;"><input type="file" id="flPhoto" class="button1" name="flPhoto" style="width:75px;display:none;" onchange="javascript:ShowFileName();" value="" />
			<div style="width: 57%; float: left; border: solid 0px #993300;">
            	<div style="width:120px; text-align:center; margin-top:-5px; float:left; border:solid 0px #CC0000;">   
            		<a style="cursor:pointer" class="button1" onclick="javascript:SetFileClick();">Upload</a>
                    <div id="dvViewFile" name="dvViewFile" style="display:none; width:365px; padding-top:0px; float:left; margin-top:-20px; border: solid 0px #0033FF;"><a id="aViewFile" name="aViewFile" target="_blank">View File</a>
                    <img src="<?php echo $strHostName;?>/images/loading.gif" style="display:none; margin-top:-10px;" id="imgLoader"  />
                    </div>
             </div>
             </div>
             
             <div style="width: 42%; float: right; border: solid 0px #993300; margin-top:-5px;">
             <div style=" width:84px; height:30px; float:right;padding-right:0px;"> <a class="button4" onclick="javascript: uploadValidation();" style="cursor:pointer;">Done</a></div>
             <div style=" width:84px; height:30px; float:right;padding-right:10px;"> <a href="javascript:Popup.hide('dvpopup-form1');"  class="button2" >Close</a> </div>
             </div>
             </td>
  </tr>
  
  
  
  <!--<tr>
	<td colspan="3" style="padding:15px 0px; text-align:right"><div style=" width:84px; height:30px; float:right;padding-right:10px;"> <a class="button4" onclick="javascript: uploadValidation();" style="cursor:pointer;">Done</a></div>
	  <div style=" width:84px; height:30px; float:right;padding-right:10px;"> <a href="javascript:Popup.hide('dvpopup-form1');"  class="button2" >Close</a> </div></td>
  </tr>-->
</table>


<div class="dvFloat formpadding1" id="dvUploadGallery" name="dvUploadGallery" style="margin-bottom:5px; margin-top: 10px; border-bottom:0px; border: solid 0px #CC3300;">
		&nbsp;
 </div>

