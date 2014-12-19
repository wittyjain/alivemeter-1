<script type="text/javascript">

function set_Compose_Accept_ID ()
{
	var return_data = document.getElementById("cmbPatients").value;
	return_data = return_data.split('###');
	
	document.getElementById("txtNewPatientId").value=return_data[0];
	document.getElementById("txtComposeId").value=return_data[1];
	document.getElementById("txtAcceptId").value=return_data[2];
	document.getElementById("txtDocCommentId").value=return_data[3];
	document.getElementById("txtFolderId").value=return_data[4];
	
}

function ChangeMDHospital()
{	
	var txtHospital_ID=document.getElementById("txtHospital_ID");
	document.getElementById("dvMDPatients").style.display="none";
	
	document.getElementById("txtNewPatientId").value="0";
	document.getElementById("txtComposeId").value="0";
	document.getElementById("txtAcceptId").value="0";
	
	if(document.getElementById("ddl_App_Other").value=="Video_Query")
	{
		document.getElementById("DvOtherHospital").style.display="none";
		document.getElementById("dvMDPatients").style.display="";
		return false;
	}
	
	if(txtHospital_ID.value=="0")
	{
		document.getElementById("DvOtherHospital").style.display="";
	}
	else
	{
		document.getElementById("DvOtherHospital").style.display="none";
		document.getElementById("txtHospital_Name").value=txtHospital_ID.options[txtHospital_ID.selectedIndex].text;
	}
}

function FillDropDown() {

	if(document.getElementById("ddl_App_Other").value=="Video_Query" && document.getElementById("ddl_MD_Appointed").value!="0")
	{	
			
			var obj = document.getElementById("ddl_MD_Appointed");	
			//alert(obj.value);
			if(obj.value != "" ) {
				document.getElementById("dvLoader").style.display='';
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
						document.getElementById("dvPatients").innerHTML=message;
						document.getElementById("txtPatients").style.display='none';
						document.getElementById("dvLoader").style.display='none';
						
						if(document.getElementById("txtPatients" ).value!="Choose Patients")
						{
							document.getElementById("cmbPatients" ).value=document.getElementById("txtPatients" ).value;
						}
						//Retrive_Location(location_id)
					}
				}
				xmlhttp.open("GET",hostname+"/includes/filldropdown.inc.php?value="+obj.value, true);
				xmlhttp.send();
			}
		}	
	}
	
	

function settimeslot()
{
	////alert ("dfdf");

	
	if(document.getElementById("ddl_App_From").selectedIndex > 17 || document.getElementById("ddl_App_To").selectedIndex > 17)
	{
		document.getElementById("ddl_App_Slot").value="PM";
	}
	else
	{
		document.getElementById("ddl_App_Slot").value="AM";
	}
	
	
}	

</script>
<?php $iDay="0";$iMonth="0";$iYear="0"; $hospital_id="0"; $other_hospital_name=""; $patient_id="0";

if(isset($_GET['dir'])) {
	$dir = $_GET['dir'];
}


if(isset($_SESSION['UserMDID']))
{
	$created_by=$_SESSION['UserMDID'];
}
else if(isset($_SESSION['UserClerkID']))
{
	$created_by=$_SESSION['UserClerkID'];
}

//Alert($_SESSION['UserDocName']);


//Alert($created_by);




if(isset($_SESSION['HospID']))
{
	$hospital_id=$_SESSION['HospID'];
}
else if(isset($_GET['hospital_id'])) {
	$hospital_id = $_GET['hospital_id'];
}

//Alert ($hospital_id);

$hospital_name=GetValue("select hospital_name as col from ".Hospital_Master." where hospital_id=".$hospital_id,"col");

if(isset($_SESSION['UserType']))
{
	$created_type=$_SESSION['UserType'];
}


$iYearcurrent=2014;
?>
<div style="width:100%; border:solid 0px red;">
	  <div class="dvFloat formpadding">
		<div class="formlabel1">
		  <label class="formlabel1">
		  		 <h2 class="Tab_Title">LIST</h2>
          </label>
		</div>
		<div class="formcontrol2" style="width:180px; float:right; text-align:center; margin-right:5px;"> 
        	<a href="<?php echo $strHostName;?>/page_doctor.php?dir=md/timings&UserMDID=<?php echo $created_by;?>" class="button1" target="_blank">View Availability</a>
        </div>
	  </div>
	  <div class="dvFloat formpadding1" id="dvMDAppointment" name="dvMDAppointment">
		&nbsp;
	  </div>
	  <div class="dvFloat formpadding1" style="padding-top:20px">
		<div class="formlabel1">
		  <label class="formlabel1" style="border:solid 0px red; width:500px;">

                            
						
                                 <h2 class="Tab_Title" style="border:solid 0px green; width:110px; float:left;">Add to list </h2>
                            
                            <h5 style="color:red; display:none;  width:200px; float:left; font-size:13px;" id="dvEdit"> (You are editing selected list.)</h5>	 
                            </label>
                            
		</div>
		<div class="formcontrol2"> &nbsp; </div>
	  </div>
	  
      <div class="dvFloat formpadding1">
		<div class="formlabel1">
		  <label class="formlabel1" style="line-height:15px;">Appointment Type <span class="redtxt">*</span></label>
		
		</div>
		<div class="formcontrol2">
		  <div class="dvFloat">
			<div style="float:left; padding:0px 15px 0px 0px">
			  <select  id="ddl_App_Other"  name="ddl_App_Other"  style="width:240px;" onchange="javascript:ChangeMDHospital(); FillDropDown();">
				<option value="0" selected="selected">Select</option>
				<option value="Video_Query">Video Query</option>
                <option value="Other_App">Other</option>
			  </select>
			</div>
			<input type="hidden" name="txtComposeId" id="txtComposeId" value="0" /> 
			<input type="hidden" name="txtAcceptId" id="txtAcceptId" value="0" /> 
       <input type="hidden" name="txtNewPatientId" id="txtNewPatientId" value="0" /> 
       <input type="hidden" name="txtDocCommentId" id="txtDocCommentId" value="0" /> 
       <input type="hidden" name="txtFolderId" id="txtFolderId" value="0" /> 
			
		  </div>
		</div>
	  </div>
	  <div class="dvFloat formpadding1">
		<div class="formlabel1">
		  <label class="formlabel1">MD Consulted <span class="redtxt">*</span></label>
		</div>
		<div class="formcontrol2">
		  
         
         
          	     <select  id="ddl_MD_Appointed" name="ddl_MD_Appointed" onChange="javascript:FillDropDown();">
                    <option value="0">Select MD</option>
			   <?php  
						if(isset($_SESSION['UserMDID']))
						{
							$query = "SELECT * FROM  ".Doctor." where isactive=1 and isdeleted=0 and type='MD' and hospital_name=".$hospital_id." and doctor_id=".$_SESSION['UserMDID'];
						}
						else
						{
							$query = "SELECT * FROM  ".Doctor." where isactive=1 and isdeleted=0 and type='MD' and hospital_name=".$hospital_id;
						}
						
						//echo $query;
						$result = mysql_query($query);		
						if($result != "") {	
								$rowcount  = mysql_num_rows($result);
								if($rowcount > 0) {
									while($row = mysql_fetch_assoc($result)) {
										extract($row);
				?> 
                
                <option value="<?php echo $row['doctor_id']?>" <?php if($row['doctor_name']==$_SESSION['UserDocName']) { echo "selected";}?>><?php echo $row['doctor_name']?></option>
                  
            
              <?php }}} ?>
                </select>
        
          
		  
		</div>
	  </div>
	  
	  
	  <div class="dvFloat formpadding1" >
		  <div class="formlabel1">
			<label class="formlabel1">Hospital Name</label>
		  </div>
		  <div class="formcontrol2">
			
             
             <select  id="txtHospital_ID" name="txtHospital_ID" onchange="javascript:ChangeMDHospital();">
                    <option value="0">Other Hospital</option>
			   <?php  
						$query = "SELECT * FROM  ".Hospital_Master." where isactive=1 and isdeleted=0 and hospital_id=".$hospital_id;
						//echo $query;
						$result = mysql_query($query);		
						if($result != "") {	
								$rowcount  = mysql_num_rows($result);
								if($rowcount > 0) {
									while($row = mysql_fetch_assoc($result)) {
										extract($row);
										$hosp_id=$row['hospital_id'];
				?> 
                
                <option value="<?php echo $hosp_id?>"  <?php if($hosp_id==$hospital_id) { echo "selected";} ?>><?php echo $row['hospital_name']?></option>
                  
            
              <?php }}} ?>
                </select>
		  <div id="DvOtherHospital">
          	 <input id="txtHospital_Name" name="txtHospital_Name" value="<?php echo $other_hospital_name;?>" type="text"/>
          </div>
		  </div>
          
		</div>
        
        
	  
      <div class="dvFloat formpadding1" >
		  <div class="formlabel1">
			<label class="formlabel1">Appointment Name</label>
		  </div>
		  <div class="formcontrol2">
			<input type="text" name="txtAppointment" id="txtAppointment" value="" />
		
		  </div>
		</div>
	  <div class="dvFloat formpadding1">
		<div class="formlabel1">
		  <label class="formlabel1" style="line-height:15px;">Appointment Date <span class="redtxt">*</span></label>
		  <input id="txt_AppointmentID" name="txt_AppointmentID" value="" type="hidden"/>
         
          <input id="txtCreatedBy" name="txtCreatedBy" value="<?php echo $created_by;?>" type="hidden"/>
           <input id="txtCreatedType" name="txtCreatedType" value="<?php echo $created_type;?>" type="hidden"/>
       
		</div>
		<div class="formcontrol2">
		  <div class="dvFloat">
			<div style="float:left; padding:0px 15px 0px 0px">
			  <select  id="ddl_App_Day"  name="ddl_App_Day"  style="width:60px;" onblur="javascript:setuploadate('');">
				<option value="0" selected="selected">DD</option>
				<?php for($iDay=1;$iDay < 32;$iDay++){ ?>
					<option value="<?php echo $iDay?>"><?php echo $iDay?></option>
				<?php } ?>
			  </select>
			</div>
			<div style="float:left; padding:0px 15px 0px 0px">
			  <select  id="ddl_App_Month"  name="ddl_App_Month"  style="width:65px;" onblur="javascript:setuploadate();">
			   <option value="0" selected="selected">Month</option>
				<?php for($iMonth=1;$iMonth < 13;$iMonth++){ ?>
					<option value="<?php echo $iMonth?>"><?php echo $iMonth?></option>
				<?php } ?>
			  </select>
			</div>
			<div style="float:left; padding:0px 0px 0px 0px">
			  <select  id="ddl_App_Year"  name="ddl_App_Year"  style="width:87px;" onblur="javascript:setuploadate();">
				<option value="0">YYYY</option>
				 <?php for($iYear=1;$iYear < 2;$iYear++){ ?>
					<option value="<?php echo $iYearcurrent?>" ><?php echo $iYearcurrent?></option>
                    <?php 
						$iYearcurrent=$iYearcurrent-1;
					?>
				 <?php } ?>
			  </select>
			</div>
		  </div>
		</div>
	  </div>
      
      <div class="dvFloat formpadding1" id="divShowHideForm">
		<div class="formlabel1">
		  <label class="formlabel1" style="line-height:15px;">Appointment Time <span class="redtxt">*</span></label>
		
		</div>
		<div class="formcontrol2">
		  <div class="dvFloat">
			<div style="float:left; padding:0px 15px 0px 0px">
			  <select  id="ddl_App_From"  name="ddl_App_From"  style="width:60px;" onchange="javascript:settimeslot();">
					<option value="0" selected="selected">From</option>
					<option value="8.00">8.00</option>
                    <option value="8.15">8.15</option>
                    <option value="8.30">8.30</option>
					<option value="8.45">8.45</option>
                    <option value="9.00">9.00</option>
                    <option value="9.15">9.15</option>
                    <option value="9.30">9.30</option>
                    <option value="9.45">9.45</option>
                    <option value="10.00">10.00</option>
                    <option value="10.15">10.15</option>
                    <option value="10.30">10.30</option>
                    <option value="10.45">10.45</option>
                    <option value="11.00">11.00</option>
                    <option value="11.15">11.15</option>
                    <option value="11.30">11.30</option>
                    <option value="11.45">11.45</option>
                    <option value="12.00">12.00</option>
                    <option value="12.15">12.15</option>
                    <option value="12.30">12.30</option>
                    <option value="12.45">12.45</option>
                    <option value="1.00">1.00</option>
                    <option value="1.15">1.15</option>
                    <option value="1.30">1.30</option>
                    <option value="1.45">1.45</option>
                    <option value="1.45">2.00</option>
                    <option value="2.15">2.15</option>
                    <option value="2.30">2.30</option>
                    <option value="2.45">2.45</option>
                    <option value="3.00">3.00</option>
                    <option value="3.15">3.15</option>
                    <option value="3.30">3.30</option>
                    <option value="3.45">3.45</option>
                    <option value="4.00">4.00</option>
                    <option value="4.15">4.15</option>
                    <option value="4.30">4.30</option>
                    <option value="4.45">4.45</option>
                    <option value="5.00">5.00</option>
                    <option value="5.15">5.15</option>
                    <option value="5.30">5.30</option>
                    <option value="5.45">5.45</option>
                    <option value="6.00">6.00</option>
                    <option value="6.15">6.15</option>
                    <option value="6.30">6.30</option>
                    <option value="6.45">6.45</option>
                    <option value="7.00">7.00</option>
                    <option value="7.15">7.15</option>
                    <option value="7.30">7.30</option>
                    <option value="7.45">7.45</option>
			  </select>
			</div>
			<div style="float:left; padding:0px 15px 0px 0px">
			  <select  id="ddl_App_To"  name="ddl_App_To"  style="width:65px;" onchange="javascript:settimeslot();">
			   		<option value="0" selected="selected">To</option>
					<option value="8.15">8.15</option>
                    <option value="8.30">8.30</option>
					<option value="8.45">8.45</option>
                    <option value="9.00">9.00</option>
                    <option value="9.15">9.15</option>
                    <option value="9.30">9.30</option>
                    <option value="9.45">9.45</option>
                    <option value="10.00">10.00</option>
                    <option value="10.15">10.15</option>
                    <option value="10.30">10.30</option>
                    <option value="10.45">10.45</option>
                    <option value="11.00">11.00</option>
                    <option value="11.15">11.15</option>
                    <option value="11.30">11.30</option>
                    <option value="11.45">11.45</option>
                    <option value="12.00">12.00</option>
                    <option value="12.15">12.15</option>
                    <option value="12.30">12.30</option>
                    <option value="12.45">12.45</option>
                    <option value="1.00">1.00</option>
                    <option value="1.15">1.15</option>
                    <option value="1.30">1.30</option>
                    <option value="1.45">1.45</option>
                    <option value="1.45">2.00</option>
                    <option value="2.15">2.15</option>
                    <option value="2.30">2.30</option>
                    <option value="2.45">2.45</option>
                    <option value="3.00">3.00</option>
                    <option value="3.15">3.15</option>
                    <option value="3.30">3.30</option>
                    <option value="3.45">3.45</option>
                    <option value="4.00">4.00</option>
                    <option value="4.15">4.15</option>
                    <option value="4.30">4.30</option>
                    <option value="4.45">4.45</option>
                    <option value="5.00">5.00</option>
                    <option value="5.15">5.15</option>
                    <option value="5.30">5.30</option>
                    <option value="5.45">5.45</option>
                    <option value="6.00">6.00</option>
                    <option value="6.15">6.15</option>
                    <option value="6.30">6.30</option>
                    <option value="6.45">6.45</option>
                    <option value="7.00">7.00</option>
                    <option value="7.15">7.15</option>
                    <option value="7.30">7.30</option>
                    <option value="7.45">7.45</option>
                    <option value="8.00">8.00</option>
               </select>
			</div>
            
            <div style="float:left; padding:0px 15px 0px 0px">
			  <select  id="ddl_App_Slot"  name="ddl_App_Slot"  style="width:45px;">
			   		<option value="AM" selected="selected">AM</option>
					<option value="PM">PM</option>
                </select>
			</div>
			
		  </div>
		</div>
	  </div>
      
      
        <div class="dvFloat formpadding1">
		<div class="formlabel1">
		  <label class="formlabel1">Video Link <span class="redtxt">*</span></label>
		</div>
		<div class="formcontrol2">
		 	<input id="txtLink" name="txtLink" value="" type="hidden" />
         </div>
		</div>
	
    
      
      <div class="dvFloat formpadding1" >
		  <div class="formlabel1">
			<label class="formlabel1">Notes</label>
		  </div>
		  <div class="formcontrol2">
			<input type="text" name="txtNotes" id="txtNotes" value="" />
			
		  </div>
		</div>
        
        <div class="dvFloat formpadding1" id="dvMDPatients" style="display:none;">
		  <div class="formlabel1">
			<label class="formlabel1">Patients</label>
		  </div>
		  <div class="formcontrol2">
			<input type="text" name="txtPatients" id="txtPatients" value="Choose Patients" disabled="disabled" />
				<div id="dvPatients" name="dvPatients"> &nbsp; </div>
                <div id="dvLoader" name="dvLoader" style="display:none; margin-top:0px;"> <img src="<?php echo $strHostName;?>/images/loading2.gif" /></div>
		  </div>
		</div>
        
      
	  <div class="dvFloat formpadding1"  style="padding:10px 0px 25px 0px">
		<div class="formlabel1"> &nbsp; </div>
		<div class="formcontrol2">
		  <div style=" width:84px; height:30px; float:left;padding-right:10px;" id="dvMDSubmit"> <a class="button4" onclick="javascript:MD_App(this);" style="cursor:pointer;">SUBMIT</a></div>
		 
		</div>
	  </div>
	  
	</div>

<script type="text/javascript">
ChangeMDHospital();
FillDropDown();




</script>