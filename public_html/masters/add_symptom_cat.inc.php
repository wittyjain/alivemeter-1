<script language="javascript" type="text/javascript">
function Validation() {

 
	if(document.getElementById("txtCatName").value == "") {
		alert("Please Enter Cat Name...");
		document.getElementById("txtCatName").focus();
		return false;
	}
	
	  
}
</script>

<?php
$id=""; $pcatid=""; $cat_name =""; $isdeleted=""; $condition=""; $maincatid=""; $qs="";$isactive="1"; $createdate=date('d-m-Y h:i:s'); 
$updatedate=date('d-m-Y h:i:s'); $update_times="0";

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
		$cat_name = trim(str_replace("'", "''", $_POST['txtCatName']));
		
		

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
			'cat_name' => $cat_name,			
			'isdeleted' => $isdeleted,
			'isactive'=>$isactive,
			'createdate' => $createdate,
			'updatedate' => $updatedate,
			'update_times' => $update_times+1,
		);


		if($id == "" || $id==0) {
			$id = $db->insert_array(Symptom_Cat, $data);
					
			if (!$id) { 
				$db->print_last_error(false);
			} else {
				AlertandRedirect("New symptom category is added successfully", "page.php?dir=master/symptom_cat/add");
			}
		} else {
			$rows = $db->update_array(Symptom_Cat, $data, "cat_id = $id");
			if (!$rows) {
				$db->print_last_error(false);
			} else {
				if ($rows > 0) {
					AlertandRedirect('Symptom category is edited successfully',  "page.php?dir=master/symptom_cat/view");
				}
			}
		}
	} 
	else
	{
		$query = "SELECT * FROM ".Symptom_Cat." WHERE cat_id = $id";
		//echo $query;
		$result = mysql_query($query);
		if($result != "") {
			$rowcount = mysql_num_rows($result);
			if($rowcount > 0) {
				while($row = mysql_fetch_assoc($result)) {
					extract($row);
					
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
                      	 <h2 class="Tab_Title">Add Symptom Category</h2>
                     </label>
                    </div>
                    <div class="formcontrol2"> &nbsp; </div>
                  </div>
                  <div class="dvFloat formpadding1">
                    <div class="formlabel1">
                      <label class="formlabel1">Category Name<span class="redtxt">*</span> </label>
                    </div>
                    <div class="formcontrol2">
                      <input type="text" name="txtCatName" id="txtCatName" value="<?php echo $cat_name;?>" />
                       <input id="txt_symptomCatID" name="txt_symptomCatID" value="" type="hidden"/>
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
               


