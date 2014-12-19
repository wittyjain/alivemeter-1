<div class="DvFloat" style="padding:10px 0px">
  <div class="dvFloat formpadding">
    <div class="formlabel1">
      <label class="formlabel1">
      <h2 class="Tab_Title">list</h2>
      </label>
    </div>
    <div class="formcontrol2"> &nbsp; </div>
  </div>
  <div class="dvFloat formpadding1"  id="dvLabReport" name="dvLabReport">
    &nbsp;
  </div>
  <div class="dvFloat formpadding1" style="padding:10px 0px 5px 20px; border-bottom: solid 1px #e1e1e1;"> <a  onClick="showform();" style="cursor:pointer"><img src="images/nutritionist/add_to_list.jpg" alt=""></a> </div>
  <div id="divShowHideForm">
    <div class="dvFloat formpadding1">
      <div class="formlabel1">
        <label class="formlabel1">Test Name<span class="redtxt">*</span> </label>
      </div>
      <div class="formcontrol2">
        <input type="text" name="txt_Test_Name" id="txt_Test_Name" value="" style="width: 207px;" />
        <input id="txt_Random_ID" name="txt_Random_ID" value="<?php echo $random;?>" type="hidden"/>
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
              <option value="0" selected="selected">Month</option>
              <?php for($iMonth=1;$iMonth < 13;$iMonth++){ ?>
              <option value="<?php echo $iMonth?>"><?php echo $iMonth?></option>
              <?php } ?>
            </select>
          </div>
          <div style="float:left; padding:0px 0px 0px 0px">
            <select  id="cmb_Report_Year_Doc_pres" name="cmb_Report_Year_Doc_pres"  title=""  style="width:68px;">
              <option value="0">YYYY</option>
              <?php for($iYear=2014;$iYear < 2020;$iYear++){ ?>
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
        <input type="radio" id="txtLabResultsNo" name="txtLabResults" value="No">
        <label for="No">No</label>
        &nbsp;&nbsp; </div>
    </div>
    <div class="dvFloat formpadding1">
      <div class="formlabel1">
        <label class="formlabel1">Report </label>
      </div>
      <div class="formcontrol2">
        <input type="file" id="flPhoto" class="button1"name="flPhoto" style="width:75px;display:none;" onChange="javascript:ShowFile();"/>
        <a style="cursor:pointer" onClick="javascript:SetFileClick();"><img src="images/register_steps/upload_prescription.jpg" alt="" /></a>
        <div id="dvViewFile" name="dvViewFile" style="display:none;"><a href="#" id="aViewFile" name="aViewFile" target="_blank">View File</a></div>
      </div>
    </div>
    <div class="dvFloat formpadding1"  style="padding:10px 0px 25px 0px">
      <div class="formlabel1"> &nbsp; </div>
      <div class="formcontrol2">
        <div style=" width:84px; height:30px; float:left;padding-right:10px;"> <a class="button4"  onclick="javascript: uploadValidation();" style="cursor:pointer;">SUBMIT</a></div>
        <div style=" width:156px; height:30px; float:left;padding-right:10px;"> <a class="button2" >NOT APPLICABLE</a></div>
        <div style=" width:156px; height:30px; float:left;padding-right:10px;"> <a class="button2"  onClick="showCancel();" style="cursor:pointer">SKIP FOR NOW</a></div>
      </div>
    </div>
  </div>
</div>
