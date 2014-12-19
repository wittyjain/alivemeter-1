<script language="javascript" type="text/javascript">
function Validation() {

 
	if(document.getElementById("txtSymptom").value == "") {
		alert("Please Enter symptom Title...");
		document.getElementById("txtSymptom").focus();
		return false;
	}
	
	if(document.getElementById("cmbSymptomType").value == "0") {
		alert("Please Choose symptom type...");
		document.getElementById("cmbSymptomType").focus();
		return false;
	}	
	
	/*if(document.getElementById("ddl_Cat").value == "0") {
		alert("Please Choose Category...");
		document.getElementById("ddl_Cat").focus();
		return false;
	}	

	if(document.getElementById("ddl_Sub_Cat").value == "0") {
		alert("Please Choose Sub Category...");
		document.getElementById("ddl_Sub_Cat").focus();
		return false;
	}	*/
}
</script>

<?php
$id=""; $pcatid=""; $symptom_name =""; $isdeleted=""; $condition=""; $maincatid=""; $qs="";$isactive="1"; $createdate=date('d-m-Y h:i:s'); 
$updatedate=date('d-m-Y h:i:s'); $update_times="0";$gender_type="0";$gender1="";$gender2="";$gender3=""; $symptom_type=""; $cat_id=""; $sub_cat_id="";

?>
	<?php
		if(isset($_GET['cid'])) {
			$id = $converter->decode($_GET['cid']);
		
		}
		
		 if(isset($_SESSION['UserID']))
		 {
			$user_id=$_SESSION['UserID'];
		 }
		 else
		 {
			$user_id=0;
		 }
	 

	if(isset($_POST['btnSubmit'])) {
		$symptom_name = trim(str_replace("'", "''", $_POST['txtSymptom']));
		$symptom_type = trim(str_replace("'", "''", $_POST['cmbSymptomType']));
		$cat_id = trim(str_replace("'", "''", $_POST['ddl_Cat']));
		$sub_cat_id = trim(str_replace("'", "''", $_POST['ddl_Sub_Cat']));
		$gender_type="0";
		
		for($i=1;$i < 4;$i++)
		{
			if(isset($_POST['chkgender'.$i]))
			{
				$gender_type=$gender_type.",".$_POST['chkgender'.$i];
			}
		}


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
			'symptom_name' => $symptom_name,
			'symptom_type'=>$symptom_type,
			'cat_id'=>$cat_id,
			'sub_cat_id'=>$sub_cat_id,
			'isdeleted' => $isdeleted,
			'isactive'=>$isactive,
			'createdate' => $createdate,
			'updatedate' => $updatedate,
			'update_times' => $update_times+1,
			'gender_type'=>$gender_type,
		);


		if($id == "" || $id==0) {
			$id = $db->insert_array(Symptom, $data);
					
			if (!$id) { 
				$db->print_last_error(false);
			} else {
				AlertandRedirect("New symptom is added successfully", "page.php?dir=master/symptom/add");
			}
		} else {
			$rows = $db->update_array(Symptom, $data, "symptom_id = $id");
			if (!$rows) {
				$db->print_last_error(false);
			} else {
				if ($rows > 0) {
					AlertandRedirect('symptom is edited successfully',  "page.php?dir=master/symptom/view");
				}
			}
		}
	} 
	else
	{
		$query = "SELECT * FROM ".Symptom." WHERE symptom_id = $id";
		//echo $query;
		$result = mysql_query($query);
		if($result != "") {
			$rowcount = mysql_num_rows($result);
			if($rowcount > 0) {
				while($row = mysql_fetch_assoc($result)) {
					extract($row);
					
					if (strpos($gender_type,'1') !== false) {
						$gender1="1";
					}
					if (strpos($gender_type,'2') !== false) {
						
						$gender2="2";
					}
					if (strpos($gender_type,'3') !== false) {
						$gender3="3";
					}
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
                      	 <h2 class="Tab_Title">Add symptom</h2>
                     </label>
                    </div>
                    <div class="formcontrol2"> &nbsp; </div>
                  </div>
                  <div class="dvFloat formpadding1">
                    <div class="formlabel1">
                      <label class="formlabel1">Title<span class="redtxt">*</span> </label>
                    </div>
                    <div class="formcontrol2">
                      <input type="text" name="txtSymptom" id="txtSymptom" value="<?php echo $symptom_name;?>" />
                       <input id="txt_symptomID" name="txt_symptomID" value="" type="hidden"/>
                    </div>
                  </div>
				   <div class="dvFloat formpadding1">
                    <div class="formlabel1">
                      <label class="formlabel1">Gender Type<span class="redtxt">*</span> </label>
                    </div>
                    <div class="formcontrol2">
						<input type="checkbox" id="chkgender1" name="chkgender1" value="1" <?php if($gender1=="1"){echo "checked";} ?> /> Male
						&nbsp;
						<input type="checkbox" id="chkgender2" name="chkgender2" value="2" <?php if($gender2=="2"){echo "checked";} ?>/> Female
						&nbsp;
						<input type="checkbox" id="chkgender3" name="chkgender3" value="3" <?php if($gender3=="3"){echo "checked";} ?>/> Childern
                    </div>
                  </div>
				  <div class="dvFloat formpadding1">
                    <div class="formlabel1">
                      <label class="formlabel1">Category Type<span class="redtxt">*</span> </label>
                    </div>
                    <div class="formcontrol2">
						<select id="cmbSymptomType" name="cmbSymptomType">
							<option value="0">Choose Type</option>
							<option value="Common" <?php if($symptom_type=="Common"){echo "selected";}?>>Common</option>
							<option value="General" <?php if($symptom_type=="General"){echo "selected";}?>>General</option>
							<option value="Behavioral" <?php if($symptom_type=="Behavioral"){echo "selected";}?>>Behavioral & Mental Health Symptoms</option>
						</select>
                    </div>
                  </div>
				  <div class="dvFloat formpadding1">
                    <div class="formlabel1">
                      <label class="formlabel1">Category<span class="redtxt">*</span> </label>
                    </div>
                    <div class="formcontrol2">
                      <?php $CatArray=$get_retrive->GetSymptomCat() ;  ?>	
					  <select  id="ddl_Cat" name="ddl_Cat">
						<option value="0">Select Category</option>
						 <?php  while($cat = mysql_fetch_array( $CatArray )){?>
							<option value="<?php echo $cat['cat_id']?>" <?php if($cat['cat_id']==$cat_id){echo "selected";}?>><?php echo $cat['cat_name']?></option>
						 <?php }?>
					  </select>
                    </div>
                  </div>
				  <div class="dvFloat formpadding1">
                    <div class="formlabel1">
                      <label class="formlabel1">Sub Category<span class="redtxt">*</span> </label>
                    </div>
                    <div class="formcontrol2">
					<?php $sub_catArray=$get_retrive->GetSymptomSubCat() ;  ?>	
					  <select  id="ddl_Sub_Cat" name="ddl_Sub_Cat">
						<option value="0">Select Sub Category</option>
						 <?php  while($sub_cat = mysql_fetch_array( $sub_catArray )){?>
							<option value="<?php echo $sub_cat['sub_cat_id']?>" <?php if($sub_cat['sub_cat_id']==$sub_cat_id){echo "selected";}?>><?php echo $sub_cat['sub_cat_name']?></option>
						 <?php }?>
					  </select>
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
               


