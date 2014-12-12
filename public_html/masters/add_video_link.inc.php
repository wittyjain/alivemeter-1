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
		  <label class="formlabel1">MD Consulted <span class="redtxt">*</span></label>
		</div>
		<div class="formcontrol2">
		  
         
         
          	     <select  id="ddl_MD_Appointed" name="ddl_MD_Appointed" onChange="javascript:FillDropDown();">
                    <option value="0">Select MD</option>
			   <?php  
						$query = "SELECT * FROM  ".Doctor." where isactive=1 and isdeleted=0 and type='MD' and hospital_name=".$hospital_id;
				
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
	  
   
      
        <div class="dvFloat formpadding1">
		<div class="formlabel1">
		  <label class="formlabel1">Video Link <span class="redtxt">*</span></label>
		</div>
		<div class="formcontrol2">
		 	<input id="txtLink" name="txtLink" value="" type="text" />
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
		  <div style=" width:84px; height:30px; float:left;padding-right:10px;" id="dvMDSubmit"> <a class="button4" onclick="javascript:Video_Link(this);" style="cursor:pointer;">SUBMIT</a></div>
		 
		</div>
	  </div>
	  
	</div>

<script type="text/javascript">
FillDropDown();
</script>