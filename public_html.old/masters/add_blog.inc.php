<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<script language="javascript" type="text/javascript">
function Validation() {

 	 if(document.getElementById("txtTitle").value == "") {
		alert("Please Enter Title...");
		document.getElementById("txtTitle").focus();
		return false;
	}
	if(document.getElementById("txtWrite_to_us").value == "") {
		alert("Please Enter Blog...");
		document.getElementById("txtWrite_to_us").focus();
		return false;
	}
	
}
</script>                 

<?php
$id=""; $blog_id=""; $title=""; $write_to_us=""; $isdeleted="0"; $isactive="1"; 
?>
	<?php
		if(isset($_GET['cid'])) {
			$id = $converter->decode($_GET['cid']);
		
		}
		
		 
	if(isset($_POST['btnSubmit'])) {
		
		$title = trim(str_replace("'", "''", $_POST['txtTitle']));
		$write_to_us = trim(str_replace("'", "''", $_POST['txtWrite_to_us']));
		

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
		
		$created_date=date('d-m-Y h:i:s');
				
		 $data = array(
			
			'title' => $title,
			'write_to_us' => $write_to_us,
			'user_id'=> $user_id,
			'isdeleted' => 0,
			'isactive'=>1,
			'created_date'=>$created_date,
			'approved'=>1,
			);


		if($id == "" || $id==0) {
			$id = $db->insert_array(Blog, $data);
					
			if (!$id) { 
				$db->print_last_error(false);
			} else {
				AlertandRedirect("New Blog is added successfully", "page.php?dir=master/blog/add");
			}
		} else {
			$rows = $db->update_array(Blog, $data, "blog_id = $id");
			if (!$rows) {
				$db->print_last_error(false);
			} else {
				if ($rows > 0) {
					AlertandRedirect('Blog is edited successfully',  "page.php?dir=master/blog/view");
				}
			}
		}
	} 
	else
	{
		$query = "SELECT * FROM ".Blog." WHERE blog_id = $id";
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
                      	 <h2 class="Tab_Title">Add Blog</h2>
                     </label>
                    </div>
                    <div class="formcontrol2"> &nbsp; </div>
                  </div>
                  <div class="dvFloat formpadding1">
                  <div class="dvFloat">
                  <div class="formlabel1">
                      <label class="formlabel1">Title<span class="redtxt">*</span> </label>
                    </div>
                    <div class="formcontrol2" style="padding-top:3px;">
                      <input type="text" name="txtTitle" id="txtTitle" value="<?php echo $title;?>" />
                    </div>
                     
                    <div class="formlabel1">
                      <label class="formlabel1">Write To Us<span class="redtxt">*</span> </label>
                    </div>
                    <div class="formcontrol2" style="padding-top:4px;">
                      <textarea name="txtWrite_to_us" id="txtWrite_to_us" class="ckeditor"  ><?php echo $write_to_us;?></textarea>
                    </div>
                    <div class="dvfloat">
                    <div class="formlabel1">
                      <label class="formlabel1">Approved<span class="redtxt">*</span> </label>
                    </div>
                    <div class="formcontrol2"  style="padding-top:6px;">
                      	<input type="checkbox"  name="txChkbox" id="txChkbox" />  
                     </div>
                    </div>
                    
                 
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
                    <div class="formcontrol2" >
                    	
                    	
                      <div style=" width:84px; height:30px; float:left;padding-right:10px;"> 
                      	 <input type="submit" id="btnSubmit" name="btnSubmit" value="Submit" class="button4"/>
                      </div>
                     	  
                   </div>
                 
                 	
                 </div>
</form>
               


