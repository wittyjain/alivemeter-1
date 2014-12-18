<div class="clickhere_dv">
  <div class="clickhere_left">First Name</div>
  <div class="clickhere_right">
     <input id="txtName" name="txtName" value="" type="text" style="width: 150px; background-color: #f0f0f0;" />
     <input id="txtDoctorID" name="txtDoctorID" value="<?php echo $doctor;?>" type="hidden" style="width: 150px;" />
	 <input id="txtCommonDoctorType" name="txtCommonDoctorType"  type="hidden" value="" />
     <input id="txtCommonDoctorID" name="txtCommonDoctorID"  type="hidden" value="" />
  </div>
</div>
<div class="clickhere_dv">
  <div class="clickhere_left">Last Name</div>
  <div class="clickhere_right">
    <input id="txtLastName" name="txtLastName" value="" type="text" style="width: 150px; background-color: #f0f0f0;" />
  </div>
</div>
<div class="clickhere_dv">
  <div class="clickhere_left">Clinic/Hospital</div>
  <div class="clickhere_right">
  <input id="txtHospital" name="txtHospital" value="" type="text" style="width: 150px; background-color: #f0f0f0;" />
  </div>
</div>
<div class="clickhere_dv">
  <div class="clickhere_left">Specialization</div>
  <div class="clickhere_right">
    <input id="txtSpecialization" name="txtSpecialization" value="" type="text" style="width: 150px; background-color: #f0f0f0;" />
</div>
</div>
<div class="clickhere_dv">
  <div class="clickhere_left">Phone</div>
  <div class="clickhere_right">
    <input id="txtContact" name="txtContact" value="" type="text" style="width: 150px; background-color: #f0f0f0;" maxlength="12"  />
  </div>
</div>
<div class="clickhere_dv">
  <div class="clickhere_left">Email Address</div>
  <div class="clickhere_right">
    <input id="txtEmail" name="txtEmail" value="" type="text" style="width: 150px; background-color: #f0f0f0;" />
  </div>
</div>
<div class="clickhere_dv" style="border-bottom: solid 0px #d4d4d4;">
  <div class="clickhere_left">&nbsp;</div>
  <div class="clickhere_right" style="width:600px;">
    <div style="width: 100%; float: left; padding-top: 5px;">
      <div style="width: 30%; float: left; border: solid 0px #003300; padding-left: 2px; text-align: left;">
         <a class="button4" onclick="javascript:Common_Doctor_Ins(this, '1');" style="cursor:pointer; text-align:center; padding-left:15px;">SUBMIT & Close</a>
      </div>
       <div style="width: 30%; float: left; border: solid 0px #003300; padding-left: 2px; text-align: left;">
         <a class="button4" onclick="javascript:Common_Doctor_Ins(this, '0');" style="cursor:pointer; text-align:center; padding-left:15px;">SUBMIT & Add New</a>
      </div>
      <div style="width:30%; float: left; border: solid 0px #990033; padding-right: 8px; text-align:left; margin-top:-2px; ">
        <input class="cancleclickbtn" value="Reset" type="reset" style="border-radius:0px; padding:8px 15px 7px 15px; height:31px; margin-left:2px; margin-top:2px; margin-bottom:4px;">
      </div>
    </div>
  </div>
</div>
