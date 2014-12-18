<?php  $iDay="0";$iMonth="0";$iYear="0"; ?>

 <div class="dvFloat formpadding1" id="dvCalorieDet" name="dvCalorieDet" style="display:none;">
		&nbsp;
 </div>
      
      
<div class="dvFloat formpadding1" style="padding:20px 0px 0px 0px;">
  <div class="formlabel1-3">
    <label class="formlabel1-1p">&nbsp;</label>
  </div>
  <div class="formcontrol2-3" style="width: 171px;">
    <label>Weight </label>
  </div>
  <div class="formcontrol2-3" style="width: 171px;">
    <label style="padding-left: 13px;">Waist</label>
  </div>
  <div class="formcontrol2-3" style="width: 171px;">
    <label style="padding-left: 21px;">Hips</label>
  </div>
  <div class="formcontrol2-3" style="width: 171px;">
    <label style="padding-left: 32px;">Arms</label>
  </div>
</div>
  <input type="hidden" name="txtMainID" id="txtMainID" value="0">
  <input type="hidden" name="txtCalorieDetID" id="txtCalorieDetID" value="0">

<div class="dvFloat formpadding1" >
  <div class="formlabel1-3" style="padding-left:0px">
    <label class="formlabel1-1p">Date <span class="redtxt">*</span></label>
  </div>
  <div class="formcontrol2-2" style="width: 181px;">
    <div class="dvFloat">
      <div style="float:left; padding:0px 3px 0px 0px">
      
        <select id="Weight_Day" name="Weight_Day" tabindex="1" class="existing_event" style="width:50px;" onchange="javascript:setmeasurementdate();">
          <option value="0">DD</option>
          <?php for($iDay=1;$iDay < 32;$iDay++){ ?>
			<option value="<?php echo $iDay?>"><?php echo $iDay?></option>
		  <?php } ?>
        </select>
      </div>
      <div style="float:left; padding:0px 3px 0px 0px">
        <select id="Weight_Month" name="Weight_Month"  tabindex="1" class="existing_event" style="width:50px;" onchange="javascript:setmeasurementdate();">
          <option value="0">MM</option>
          <?php for($iMonth=1;$iMonth < 13;$iMonth++){ ?>
					<option value="<?php echo $iMonth?>"><?php echo $iMonth?></option>
		  <?php } ?>
        </select>
      </div>
      <div style="float:left; padding:0px 0px 0px 0px">
        <select id="Weight_Year" name="Weight_Year"  tabindex="1" class="existing_event" style="width:60px;" onchange="javascript:setmeasurementdate();">
          <option value="0">YYYY</option>
           <?php for($iYear=2014;$iYear < 2016;$iYear++){ ?>
					<option value="<?php echo $iYear?>" ><?php echo $iYear?></option>
		   <?php } ?>
        </select>
      </div>
    </div>
  </div>
  <div class="formcontrol2-2" style="width: 181px;">
    <div class="dvFloat">
      <div style="float:left; padding:0px 3px 0px 0px">
        <select id="Waist_Day" name="Waist_Day"  tabindex="1" class="existing_event" style="width:50px;" onchange="javascript:setmeasurementdate();">
          <option value="0">DD</option>
           <?php for($iDay=1;$iDay < 32;$iDay++){ ?>
			<option value="<?php echo $iDay?>"><?php echo $iDay?></option>
		  <?php } ?>
        </select>
      </div>
      <div style="float:left; padding:0px 3px 0px 0px">
        <select id="Waist_Month" name="Waist_Month"  tabindex="1" class="existing_event" style="width:50px;" onchange="javascript:setmeasurementdate();">
          <option value="0">MM</option>
          <?php for($iMonth=1;$iMonth < 13;$iMonth++){ ?>
					<option value="<?php echo $iMonth?>"><?php echo $iMonth?></option>
		  <?php } ?>
        </select>
      </div>
      <div style="float:left; padding:0px 0px 0px 0px">
        <select id="Waist_Year" name="Waist_Year"  tabindex="1" class="existing_event" style="width:60px;" onchange="javascript:setmeasurementdate();">
          <option value="0">YYYY</option>
           <?php for($iYear=2014;$iYear < 2016;$iYear++){ ?>
					<option value="<?php echo $iYear?>" ><?php echo $iYear?></option>
		   <?php } ?>
        </select>
      </div>
    </div>
  </div>
  <div class="formcontrol2-2" style="width: 181px;">
    <div class="dvFloat">
      <div style="float:left; padding:0px 3px 0px 0px">
        <select id="Hips_Day" name="Hips_Day"  tabindex="1" class="existing_event" style="width:50px;" onchange="javascript:setmeasurementdate();">
          <option value="0">DD</option>
           <?php for($iDay=1;$iDay < 32;$iDay++){ ?>
			<option value="<?php echo $iDay?>"><?php echo $iDay?></option>
		  <?php } ?>
        </select>
      </div>
      <div style="float:left; padding:0px 3px 0px 0px">
        <select id="Hips_Month" name="Hips_Month"  tabindex="1" class="existing_event" style="width:50px;" onchange="javascript:setmeasurementdate();">
          <option value="0">MM</option>
          <?php for($iMonth=1;$iMonth < 13;$iMonth++){ ?>
					<option value="<?php echo $iMonth?>"><?php echo $iMonth?></option>
		  <?php } ?>
        </select>
      </div>
      <div style="float:left; padding:0px 0px 0px 0px">
        <select id="Hips_Year" name="Hips_Year"  tabindex="1" class="existing_event" style="width:60px;" onchange="javascript:setmeasurementdate();">
          <option value="0">YYYY</option>
           <?php for($iYear=2014;$iYear < 2016;$iYear++){ ?>
					<option value="<?php echo $iYear?>" ><?php echo $iYear?></option>
		   <?php } ?>
        </select>
      </div>
    </div>
  </div>
  <div class="formcontrol2-2" style="width: 181px;">
    <div class="dvFloat">
      <div style="float:left; padding:0px 3px 0px 0px">
        <select id="Arms_Day" name="Arms_Day"  tabindex="1" class="existing_event" style="width:50px;" onchange="javascript:setmeasurementdate();">
          <option value="0">DD</option>
           <?php for($iDay=1;$iDay < 32;$iDay++){ ?>
			<option value="<?php echo $iDay?>"><?php echo $iDay?></option>
		  <?php } ?>
        </select>
      </div>
      <div style="float:left; padding:0px 3px 0px 0px">
        <select id="Arms_Month" name="Arms_Month"  tabindex="1" class="existing_event" style="width:50px;" onchange="javascript:setmeasurementdate();">
          <option value="0">MM</option>
         	<?php for($iMonth=1;$iMonth < 13;$iMonth++){ ?>
					<option value="<?php echo $iMonth?>"><?php echo $iMonth?></option>
				<?php } ?>
        </select>
      </div>
      <div style="float:left; padding:0px 0px 0px 0px">
        <select id="Arms_Year" name="Arms_Year" tabindex="1" class="existing_event" style="width:60px;" onchange="javascript:setmeasurementdate();">
          <option value="0">YYYY</option>
           <?php for($iYear=2014;$iYear < 2016;$iYear++){ ?>
					<option value="<?php echo $iYear?>" ><?php echo $iYear?></option>
		   <?php } ?>
        </select>
      </div>
    </div>
  </div>
</div>
<div class="dvFloat formpadding1">
  <div class="formlabel1-3">
    <label class="formlabel1-1p">Result<span class="redtxt">*</span> </label>
  </div>
  <div class="formcontrol2-3" style="padding-right: 10px; width: 172px;">
    <input type="text" name="txtWeightResult" id="txtWeightResult" value="" placeholder="" style="width: 153px;" />
  </div>
  <div class="formcontrol2-3" style="padding-right: 10px; width: 172px;">
    <input type="text" name="txtWaistResult" id="txtWaistResult" value="" placeholder="" style="width: 153px;" />
  </div>
  <div class="formcontrol2-3" style="padding-right: 10px; width: 172px;">
    <input type="text" name="txtHipsResult" id="txtHipsResult" value="" placeholder="" style="width: 153px;" />
  </div>
  <div class="formcontrol2-3" style=" width: 172px;">
    <input type="text" name="txtArmsResult" id="txtArmsResult" value="" placeholder="" style="width: 153px;" />
  </div>
</div>
<div class="dvFloat formpadding"  style="padding:10px 0px 0px 0px">
  <div class="formlabel1-1p">&nbsp;</div>
  <div style="float: right; border: solid 0px #006600;">
    <div style=" width:84px; height:30px; float:left; padding-right:10px;"> <a onclick="javascript:checkduplicationprofile('Measurements', this);" style="cursor:pointer;" class="button4">SUBMIT</a></div>
    <div style=" width:84px; height:30px; float:left;padding-right:10px;"> <a class="button2" onClick="showCancel();" style="cursor:pointer">Cancel</a></div>
  </div>
</div>
