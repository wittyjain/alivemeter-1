<script language="javascript" type="text/javascript">
function Validation() {

 
	if(document.getElementById("txtName").value == "") {
		alert("Please Enter Hospital Name...");
		document.getElementById("txtName").focus();
		return false;
	}
	if(document.getElementById("txtPincode").value == "") {
		alert("Please Enter Pincode...");
		document.getElementById("txtPincode").focus();
		return false;
	}
	 
}
</script>

<?php
$hospital_name="";  $pincode =""; $isdeleted=""; $isactive="1"; $createdate=date('d-m-Y h:i:s'); $id="";
$updatedate=date('d-m-Y h:i:s'); 

?>
	<?php
		if(isset($_GET['cid'])) {
			$id = $converter->decode($_GET['cid']);
		
		}
		
		 
	if(isset($_POST['btnSubmit'])) {
		$hospital_name = trim(str_replace("'", "''", $_POST['txtName']));
		$pincode = trim(str_replace("'", "''", $_POST['txtPincode']));

		if(isset($_POST['chkIsDeleted']))
		{
			$isdeleted = $_POST['chkIsDeleted'];
		}
		if($isdeleted == "on") {
			$isdeleted = 1;
		} else {
			$isdeleted = 0;
		}

		if(isset($_POST['chkIsActive']))
		{
			$isactive = $_POST['chkIsActive'];
		}
		if($isactive == "on") {
			$isactive = 1;
		} else {
			$isactive = 0;
		}
		
		$createdate=date('d-m-Y h:i:s');				
		$updatedate=date('d-m-Y h:i:s');
		$update_times=1;
		
				
		 $data = array(
			'hospital_name' => $hospital_name,
			'pincode' => $pincode,
			'isdeleted' => $isdeleted,
			'isactive'=>$isactive,
			'createdate' => $createdate,
			'updatedate' => $updatedate,
			'update_times' => $update_times+1,		
		);


		if($id == "" || $id==0) {
			$id = $db->insert_array(Pincode, $data);
					
			if (!$id) { 
				$db->print_last_error(false);
			} else {
				AlertandRedirect("New Pincode is added successfully", "page.php?dir=master/pincode/add");
			}
		} else {
			$rows = $db->update_array(Pincode, $data, "id = $id");
			if (!$rows) {
				$db->print_last_error(false);
			} else {
				if ($rows > 0) {
					AlertandRedirect('Pincode is edited successfully',  "page.php?dir=master/pincode/view");
				}
			}
		}
	} 
	else
	{
		$query = "SELECT * FROM ".Pincode." WHERE id = $id";
		//echo $query;
		$result = mysql_query($query);
		if($result != "") {
			$rowcount = mysql_num_rows($result);
			if($rowcount > 0) {
				while($row = mysql_fetch_assoc($result)) {
					extract($row);
					$hospital_name= $row['hospital_name'];
					$pincode= $row['pincode'];
				}
			}
		}
		$mode = "edit";
	}
	
	
	

?>
<form class="form-horizontal" method="post" enctype="multipart/form-data"  onSubmit="javascript:return Validation()">
	<div  style="width:99%; border:solid 0px red;">
                 <div class="dvFloat formpadding1" style="padding-top:20px">
                    <div class="formlabel1">
                      <label class="formlabel1" style="padding-left:0px; padding-bottom:15px;">
                      	 <h2 class="Tab_Title">Add Hospital Pincode</h2>
                     </label>
                    </div>
                    <div class="formcontrol2"> &nbsp; </div>
                  </div>
                  <div class="dvFloat formpadding1">
                    <div class="formlabel1">
                      <label class="formlabel1">Hospital Name <span class="redtxt">*</span> </label>
                    </div>
                    <div class="formcontrol2">
                      <input type="text" name="txtName" id="txtName" value="<?php echo $hospital_name;?>" />
                    </div>
                  </div>
                  <div class="dvFloat formpadding1">
                    <div class="formlabel1">
                      <label class="formlabel1">Pincode<span class="redtxt">*</span> </label>
                    </div>
                    <div class="formcontrol2">
                      <input type="text" name="txtPincode" id="txtPincode" value="<?php echo $pincode;?>" />
                    </div>
                  </div>
                  <div class="dvFloat formpadding1">
                    <div class="formlabel1">
                      &nbsp;
                    </div>
                    <div class="formcontrol2">
                      <div class="dvFL" style="font-size:13px;">
                        	<input type="checkbox" id="chkIsActive" name="chkIsActive" <?php if($isactive == 1) { echo "checked"; } ?> style="width:40px;"/>&nbsp;Check here, if want to <strong>"Active"</strong> this record.
                        </div>
                       <div class="dvFL" style="font-size:13px;">
                        	<input type="checkbox" id="chkIsDeleted" name="chkIsDeleted" <?php if($isdeleted == 1) { echo "checked"; } ?> style="width:40px;"/>&nbsp;Check here, if want to <strong>"Delete"</strong> this record.
                        </div>
                        
                    </div>
                  </div>
                  
                  
                 
                  <div class="dvFloat formpadding1"  style="padding:10px 0px 25px 0px">
                    <div class="formlabel1"> &nbsp; </div>
                    <div class="formcontrol2">
                    	
                    	
                      <div style=" width:84px; height:30px; float:left;padding-right:10px;"> 
                      	 <input type="submit" id="btnSubmit" name="btnSubmit" value="Submit" class="button4"/>
                      </div>
                     	  
                   </div>
                  </div>
                 	
                 </div>
</form>
               


