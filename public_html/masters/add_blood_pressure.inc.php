<script language="javascript" type="text/javascript">
function Validation() {

 
	if(document.getElementById("txtRelationName").value == "") {
		alert("Please Enter Relation Title...");
		document.getElementById("txtRelationName").focus();
		return false;
	}
	
	 
}
</script>

<?php
$bp_id=""; $id=""; $min_age=""; $max_age =""; $sys_min=""; $dia_min=""; $sys_ave=""; $dia_ave=""; $sys_max="";  $dia_max="";  $isdeleted=""; 
$isactive="1";

?>
	<?php
		if(isset($_GET['cid'])) {
			$id = $converter->decode($_GET['cid']);
		
		}
				 
	if(isset($_POST['btnSubmit'])) {
		$min_age = trim(str_replace("'", "''", $_POST['txt_MinAge']));
		$max_age = trim(str_replace("'", "''", $_POST['txt_MaxAge']));
		$sys_min = trim(str_replace("'", "''", $_POST['txt_MinSys']));
		$dia_min = trim(str_replace("'", "''", $_POST['txt_MinDia']));
		$sys_ave = trim(str_replace("'", "''", $_POST['txt_AvgSys']));
		$dia_ave = trim(str_replace("'", "''", $_POST['txt_AvgDia']));
		$sys_max = trim(str_replace("'", "''", $_POST['txt_MaxSys']));
		$dia_max = trim(str_replace("'", "''", $_POST['txt_MaxDia']));

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
		
		 $data = array(
			'min_age' => $min_age,
			'max_age' => $max_age,
			'sys_min' => $sys_min,
			'dia_min' => $dia_min,
			'sys_ave' => $sys_ave,
			'dia_ave' => $dia_ave,
			'sys_max' => $sys_max,
			'dia_max' => $dia_max,
			'isdeleted' => $isdeleted,
			'isactive'=>$isactive,
			
		);


		if($id == "" || $id==0) {
			$id = $db->insert_array(Bp_Age_Masters, $data);
					
			if (!$id) { 
				$db->print_last_error(false);
			} else {
				AlertandRedirect("New Blood Pressure Range added successfully", "page.php?dir=master/blood_pressure/add");
			}
		} else {
			$rows = $db->update_array(Bp_Age_Masters, $data, "id = $id");
			if (!$rows) {
				$db->print_last_error(false);
			} else {
				if ($rows > 0) {
					AlertandRedirect('Blood Pressure Range edited successfully',  "page.php?dir=master/blood_pressure/view");
				}
			}
		}
	} 
	else
	{
		$query = "SELECT * FROM ".Bp_Age_Masters." WHERE id = $id";
		//echo $query;
		$result = mysql_query($query);
		if($result != "") {
			$rowcount = mysql_num_rows($result);
			if($rowcount > 0) {
				while($row = mysql_fetch_assoc($result)) {
					extract($row);
					$min_age=$row['min_age'];
					$max_age=$row['max_age'];
					$sys_min=$row['sys_min'];
					$dia_min=$row['dia_min'];
					$sys_ave=$row['sys_ave'];
					$dia_ave=$row['dia_ave'];
					$sys_max=$row['sys_max'];
					$dia_max=$row['dia_max'];
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
                      	 <h2 class="Tab_Title">Add Blood Pressure</h2>
                     </label>
                    </div>
                    <div class="formcontrol2"> &nbsp; </div>
                  </div>
                  <div class="dvFloat formpadding1">
                    <div class="formlabel1">
                      <label class="formlabel1">Minimum Age<span class="redtxt">*</span> </label>
                    </div>
                    <div class="formcontrol2">
                      <input type="text" name="txt_MinAge" id="txt_MinAge" value="<?php echo $min_age;?>" />
                       <input id="txt_RelationID" name="txt_RelationID" value="" type="hidden"/>
                    </div>
                  </div>
                  <div class="dvFloat formpadding1">
                    <div class="formlabel1">
                      <label class="formlabel1">Maximum Age<span class="redtxt">*</span> </label>
                    </div>
                    <div class="formcontrol2">
                      <input type="text" name="txt_MaxAge" id="txt_MaxAge" value="<?php echo $max_age;?>" />
                       <input id="txt_RelationID" name="txt_RelationID" value="" type="hidden"/>
                    </div>
                  </div>
                  <div class="dvFloat formpadding1">
                    <div class="formlabel1">
                      <label class="formlabel1">Minimum Systolic<span class="redtxt">*</span> </label>
                    </div>
                    <div class="formcontrol2">
                      <input type="text" name="txt_MinSys" id="txt_MinSys" value="<?php echo $sys_min;?>" />
                       <input id="txt_RelationID" name="txt_RelationID" value="" type="hidden"/>
                    </div>
                  </div>
                  <div class="dvFloat formpadding1">
                    <div class="formlabel1">
                      <label class="formlabel1">Minimum Diastolic<span class="redtxt">*</span> </label>
                    </div>
                    <div class="formcontrol2">
                      <input type="text" name="txt_MinDia" id="txt_MinDia" value="<?php echo $dia_min;?>" />
                       <input id="txt_RelationID" name="txt_RelationID" value="" type="hidden"/>
                    </div>
                  </div>
                  <div class="dvFloat formpadding1">
                    <div class="formlabel1">
                      <label class="formlabel1">Average Systolic<span class="redtxt">*</span> </label>
                    </div>
                    <div class="formcontrol2">
                      <input type="text" name="txt_AvgSys" id="txt_AvgSys" value="<?php echo $sys_ave;?>" />
                       <input id="txt_RelationID" name="txt_RelationID" value="" type="hidden"/>
                    </div>
                  </div>
                  <div class="dvFloat formpadding1">
                    <div class="formlabel1">
                      <label class="formlabel1">Average Diastolic<span class="redtxt">*</span> </label>
                    </div>
                    <div class="formcontrol2">
                      <input type="text" name="txt_AvgDia" id="txt_AvgDia " value="<?php echo $dia_ave;?>" />
                       <input id="txt_RelationID" name="txt_RelationID" value="" type="hidden"/>
                    </div>
                  </div>
                  <div class="dvFloat formpadding1">
                    <div class="formlabel1">
                      <label class="formlabel1">Maximum Systolic<span class="redtxt">*</span> </label>
                    </div>
                    <div class="formcontrol2">
                      <input type="text" name="txt_MaxSys" id="txt_MaxSys" value="<?php echo $sys_max;?>" />
                       <input id="txt_RelationID" name="txt_RelationID" value="" type="hidden"/>
                    </div>
                  </div>
                  <div class="dvFloat formpadding1">
                    <div class="formlabel1">
                      <label class="formlabel1">Maximum Diastolic<span class="redtxt">*</span> </label>
                    </div>
                    <div class="formcontrol2">
                      <input type="text" name="txt_MaxDia" id="txt_MaxDia" value="<?php echo $dia_max;?>" />
                       <input id="txt_RelationID" name="txt_RelationID" value="" type="hidden"/>
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
               


