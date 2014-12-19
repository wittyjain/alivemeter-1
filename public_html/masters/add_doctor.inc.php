<script type="text/javascript">

function checkDoctorValidation()
{
   var obj = document.getElementById("txtEmail").value;
   
 //  alert (obj);
   
  if(obj!= "") {
			if (window.XMLHttpRequest)
			{// code for IE7+, Firefox, Chrome, Opera, Safari
				xmlhttp = new XMLHttpRequest();
			}
			else
			{// code for IE6, IE5
				xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			}
			xmlhttp.onreadystatechange=function()
			{
				if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
				{
					message = xmlhttp.responseText;
					//alert (message);
					
					message = message.split("###");
					//alert (message);
					
					if(message[0].trim()=="true") {
						alert('You have entered duplicated email ID.');
					//	document.getElementById("txtEmail").value="";
					}
				}
			}
			
			//alert("<?php echo $strHostName; ?>/includes/checkdoctor.php?obj="+obj);
			xmlhttp.open("GET","<?php echo $strHostName; ?>/includes/checkdoctor.php?obj="+obj, true);
			xmlhttp.send();
		}
}
</script>

<?php
if(isset($_GET['type']))
{
	$type= $converter->decode($_GET['type']);
}
else
{
	$type="";
}

$password=rand(0,9999);
$user_count="0";

///Alert ($type);
?>
<div  style="width:100%; border:solid 0px red;">
	  
	 <?php if($type=="MD")  { ?>
      <div class="dvFloat" style="padding-top:20px; text-align:center; font-size:14px; padding-bottom:8px; border-bottom:solid 1px; width:130px; float:right;">
      	<a href="<?php echo $strHostName;?>/page.php?dir=master/video_appointment/add">Video Appointments</a>
      </div>
      <?php } ?>
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
		 	<input id="txtName" name="txtName" value="" type="text" style="width: 250px;" />
            <input id="txtDoctorID" name="txtDoctorID" value="" type="hidden" style="width: 250px;" />
            <input id="txtType" name="txtType" value="<?php echo $type;?>" type="hidden" style="width: 250px;" />
               <input id="txtUserCountnut" name="txtUserCountnut" value="<?php echo $user_count;?>" type="hidden" style="width: 250px;" />
                 <input id="password" name="password" value="<?php echo $password;?>" type="hidden" style="width: 250px;" />
         </div>
		</div>
	 
      
       <div class="dvFloat formpadding1">
		<div class="formlabel1">
		  <label class="formlabel1">Clinic/Hospital </label>
		</div>
		<div class="formcontrol2">
		 	
           <?php $DoctorArray=$get_retrive->GetHospitalMaster(999,0) ;  ?>	
		  <select  id="txtHospital" name="txtHospital"  style="width: 260px;" />
			<option value="0">Select Hospital</option>
			 <?php  while($doctor = mysql_fetch_array( $DoctorArray )){?>
				<option value="<?php echo $doctor['hospital_id']?>"><?php echo $doctor['hospital_name']?></option>
			 <?php }?>
		  </select>

         </div>
		</div>
	 
      
      <div class="dvFloat formpadding1" style="display:none;">
		<div class="formlabel1">
		  <label class="formlabel1">Clinic/Hospital Address </label>
		</div>
		<div class="formcontrol2">
		 	<input id="txtHospitalAddress" name="txtHospitalAddress" value="" type="text" style="width: 250px;" />
         </div>
		</div>
	 
      <div class="dvFloat formpadding1"  style="display:none;">
		<div class="formlabel1">
		  <label class="formlabel1">City <span class="redtxt">*</span></label>
		</div>
		<div class="formcontrol2">
		 	<input id="txtHospitalCity" name="txtHospitalCity" value="" type="text" style="width: 250px;" />
         </div>
		</div>
	 
      <div class="dvFloat formpadding1"  style="display:none;">
		<div class="formlabel1">
		  <label class="formlabel1">Area/Location <span class="redtxt">*</span></label>
		</div>
		<div class="formcontrol2">
		 	<input id="txtHospitalArea" name="txtHospitalArea" value="" type="text" style="width: 250px;" />
         </div>
		</div>
	 
      <div class="dvFloat formpadding1">
		<div class="formlabel1">
		  <label class="formlabel1">Specialization </label>
		</div>
		<div class="formcontrol2">
		 	
            
          <?php $DoctorArray=$get_retrive->GetSpecialization() ;  ?>	
		  <select  id="txtSpecialization" name="txtSpecialization"  style="width: 260px;" />
			<option value="0">Select Specialization</option>
			 <?php  while($doctor = mysql_fetch_array( $DoctorArray )){?>
				<option value="<?php echo $doctor['specialization_id']?>"><?php echo $doctor['specialization_name']?></option>
			 <?php }?>
		  </select>
          
         </div>
		</div>
	
      
      
       <div class="dvFloat formpadding1">
		<div class="formlabel1">
		  <label class="formlabel1">Contact No. <span class="redtxt">*</span></label>
		</div>
		<div class="formcontrol2">
		 	<input id="txtContact" name="txtContact" value="" type="text" style="width: 250px;" />
           
         </div>
		</div>
	
    
   
      
       <div class="dvFloat formpadding1">
		<div class="formlabel1">
		  <label class="formlabel1">Email ID <span class="redtxt">*</span></label>
		</div>
		<div class="formcontrol2">
		 	<input id="txtEmail" name="txtEmail" value="" type="text" style="width: 250px;" onblur="javascript:checkDoctorValidation();" />
         </div>
		</div>
	
	  
     
    
	<div class="dvFloat formpadding1"  style="padding:10px 0px 25px 0px">
		<div class="formlabel1"> &nbsp; </div>
		<div class="formcontrol2">
		  <div style=" width:84px; height:30px; float:left;padding-right:10px;"> <a class="button4" onclick="javascript:Doctor_Ins(this);" style="cursor:pointer;">SUBMIT</a></div>
		 
		</div>
	  </div>
	  
      
      <div class="formlabel1">
		  <label class="formlabel1">
		  		<h2 class="Tab_Title">LIST</h2>
            </label>
		</div>
      <div class="dvFloat formpadding1" id="dvDoctor" name="dvDoctor" style="padding-bottom:80px;">
		&nbsp;
	  </div>
	</div>

