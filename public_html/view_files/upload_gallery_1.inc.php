<table cellpadding="0" cellspacing="0" style="width:100%; border:solid 0px #000000">
  <tr>
	<td colspan="3" style="padding-bottom:15px;padding-left:20px;"><h2 class="Tab_Title">Prescription Reports</h2></td>
  </tr>
  <tr>
	<td style="width:45%;padding-left:20px;">Report Date </td>
	<td >Report</td>
	<td></td>
  </tr>
  <tr>
	<td style="padding-left:20px;"><div style="float:left; padding:0px 15px 0px 0px">
		<select  id="cmb_Report_Day" name="cmb_Report_Day" title=""  style="width:60px;">
		  <option value="0" selected="selected">DD</option>
			<?php for($iDay=1;$iDay < 32;$iDay++){ ?>
				<option value="<?php echo $iDay?>"><?php echo $iDay?></option>
			<?php } ?>
		</select>
	  </div>
	  <div style="float:left; padding:0px 15px 0px 0px">
		<select id="cmb_Report_Date"  name="cmb_Report_Date" title=""  style="width:60px;">
		  <option value="0" selected="selected">Month</option>
			<?php for($iMonth=1;$iMonth < 13;$iMonth++){ ?>
				<option value="<?php echo $iMonth?>"><?php echo $iMonth?></option>
			<?php } ?>
		</select>
	  </div>
	  <div style="float:left; padding:0px 0px 0px 0px">
		<select  id="cmb_Report_Year" name="cmb_Report_Year" title=""  style="width:93px;">
		  <option value="0">YYYY</option>
		 <?php for($iYear=2014;$iYear < 2020;$iYear++){ ?>
			<option value="<?php echo $iYear?>" ><?php echo $iYear?></option>
		 <?php } ?>
		</select>
	  </div></td>
	<td><select id="cmb_Prescription_Reports" name="cmb_Prescription_Reports"  title=""  onchange="javascript:Pres_Report_Show_Hide();">
		<option value="0">Doctor Prescription</option>
		<option value="1">Lab Test</option>
		<option value="2">Radiology</option>
	  </select>
	</td>
	<td valign="top">
		<div style=" width:95px; height:30px; float:left;padding-left:10px;">
			<input type="file" id="flPhoto" class="button1"name="flPhoto" style="width:75px;display:none;" onchange="javascript:ShowFile();"/>
			<a style="cursor:pointer" class="button1" onclick="javascript:SetFileClick();">Browse</a>
		</div>
	</td>
  </tr>
  <tr>
	
	<td  colspan="3" style="padding:0px; display:none" id="dvPres_Report_Show_Hide" >
		<table cellpadding="0" cellspacing="0" style="width:89%">
		<tr>
		  <td style="padding-left:20px;padding-top:5px;">Test Name</td>
		  <td>Lab Name </td>
		  <td>&nbsp;</td>
		  <td valign="top">
			<div id="dvViewFile" name="dvViewFile" style="display:none;"><a href="#" id="aViewFile" name="aViewFile" target="_blank">View File</a></div>
		</td>
		</tr>
		<tr>
		  <td style="padding-left:20px;"><input type="text" name="txt_Test_Name1" id="txt_Test_Name1" value=""></td>
		  <td><input type="text" name="txt_Lab_Name1" id="txt_Lab_Name1" value="">
		  </td>
		  <td>&nbsp;</td>
		</tr>
	  </table></td>
  </tr>
  <tr>
	<td colspan="3" style="padding:15px 0px; text-align:right"><div style=" width:84px; height:30px; float:right;padding-right:10px;"> <a href="#" class="button4">Done</a></div>
	  <div style=" width:84px; height:30px; float:right;padding-right:10px;"> <a href="#" class="button2" >Close</a> </div></td>
  </tr>
</table>