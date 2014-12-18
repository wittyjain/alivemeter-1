<?php
if(isset($_GET['type']))
{
	$type= $converter->decode($_GET['type']);
}
else
{
	$type="";
}

//Alert ($type);
?>
<div  style="width:100%; border:solid 0px red;">
	  <div class="dvFloat formpadding">
		<div class="formlabel1">
		  <label class="formlabel1">
		  		<h2 class="Tab_Title">LIST</h2>
            </label>
		</div>
		<div class="formcontrol2"> &nbsp; </div>
	  </div>
      
	  <div class="dvFloat formpadding1" id="dvClerk" name="dvClerk">
		&nbsp;
	  </div>
      <div class="dvFloat" id="dvLoader" style="display:none; text-align:center; "><img src="<?php echo $strHostName;?>/images/loader.gif" /></div>
	  <div class="dvFloat formpadding1" style="padding-top:20px">
		<div class="formlabel1">
		  <label class="formlabel1">
			<h2 class="Tab_Title">Add to list</h2>
            </label>
		</div>
		<div class="formcontrol2"> &nbsp; </div>
	  </div>
	  
	  <div class="dvFloat formpadding1">
		<div class="formlabel1">
		  <label class="formlabel1"><?php echo $type;?> Name <span class="redtxt">*</span></label>
		</div>
		<div class="formcontrol2">
		 	<input id="txtClerkName" name="txtClerkName" value="" type="text" style="width: 250px;" />
            <input id="txtClerkID" name="txtClerkID" value="" type="hidden" style="width: 250px;" />
            
         </div>
		</div>
	 
      
       <div class="dvFloat formpadding1">
		<div class="formlabel1">
		  <label class="formlabel1">Hospital <span class="redtxt">*</span></label>
		</div>
		<div class="formcontrol2">
		 	
           <?php $DoctorArray=$get_retrive->GetHospitalMaster(999,0) ;  ?>	
		  <select  id="txtClerkHospital" name="txtClerkHospital"  style="width: 260px;" />
			<option value="0">Select Hospital</option>
			 <?php  while($doctor = mysql_fetch_array( $DoctorArray )){?>
				<option value="<?php echo $doctor['hospital_id']?>"><?php echo $doctor['hospital_name']?></option>
			 <?php }?>
		  </select>

         </div>
		</div>
	 
      
      
       <div class="dvFloat formpadding1">
		<div class="formlabel1">
		  <label class="formlabel1">Contact No. <span class="redtxt">*</span></label>
		</div>
		<div class="formcontrol2">
		 	<input id="txtClerkContact" name="txtClerkContact" value="" type="text" style="width: 250px;" />
         </div>
		</div>
	
      
       <div class="dvFloat formpadding1">
		<div class="formlabel1">
		  <label class="formlabel1">Email ID <span class="redtxt">*</span></label>
		</div>
		<div class="formcontrol2">
		 	<input id="txtClerkEmail" name="txtClerkEmail" value="" type="text" style="width: 250px;" />
         </div>
		</div>
	
	  
	<div class="dvFloat formpadding1"  style="padding:10px 0px 25px 0px">
		<div class="formlabel1"> &nbsp; </div>
		<div class="formcontrol2">
		  <div style=" width:84px; height:30px; float:left;padding-right:10px;"> <a class="button4" onclick="javascript:Clerk_Ins(this);" style="cursor:pointer;">SUBMIT</a></div>
		 
		</div>
	  </div>
	  
	</div>

