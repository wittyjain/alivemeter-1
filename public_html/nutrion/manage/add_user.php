<?php include "../includes/common.inc.php"?>
<?php include "includes/links.inc.php"?>
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
		<script src="ckeditor/_samples/sample.js" type="text/javascript"></script>
		<link href="ckeditor/_samples/sample.css" rel="stylesheet" type="text/css" />

<script language="javascript" type="text/javascript">
	function CheckDuplication(id) {
		var obj = document.getElementById("txtUserName");
		 var message = "";
			if(obj.value != "") {
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
						message = message.split('<?php echo $strSeparator; ?>');
						if(message[1] == "true") {
							alert('Duplication Error Message\n\nName entered already exists in the following records.');
							document.getElementById("txtUserName").focus();
							document.getElementById("txtUserName").select();
						}
					}
				}
				 
				xmlhttp.open("GET","<?php echo $strHostName; ?>/includes/checkduplication.inc.php?id="+id+"&tbl=User&value="+obj.value, true);
				xmlhttp.send();
			}
	  }

	
	function Validation() {
		if(document.getElementById("txtName").value == "") {
			alert("Please Enter Fullname.");
			document.getElementById("txtName").focus();
			return false;
		}
		
		
		if(document.getElementById("txtEmail").value == "") {
			alert("Please Enter Email ID.");
			document.getElementById("txtEmail").focus();
			return false;
		} else {
			if(checkEmailValidation("txtEmail") == false) {
				alert("Please Enter: Valid Email ID...");
				document.getElementById("txtEmail").focus();
				return false;
			}
		}
		
 
		if(document.getElementById("txtUserName").value == "") {
			alert("Please Enter User Name.");
			document.getElementById("txtUserName").focus();
			return false;
		}
		else 
		{ 
			if(BlankSpace(document.getElementById("txtUserName").value, '') == false)
			{
				alert("You can use only A-Z, a-z,0-9,!@#$%^&*()_- Charcter");
				document.getElementById("txtUserName").focus();
				return false;
			}
		}
		
		if(document.getElementById("txtPassword").value == "") {
			alert("Please Enter Password.");
			document.getElementById("txtPassword").focus();
			return false;
		}
		else 
		{ 
			if(BlankSpace(document.getElementById("txtPassword").value, '') == false)
			{
				alert("You can use only A-Z, a-z,0-9,!@#$%^&*()_- Charcter");
				document.getElementById("txtPassword").focus();
				return false;
			}
		}
		
	}
	
	function BlankSpace(strstrBody) {
			var strValidChars = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!@#$%^&*()_-.";
			var strChar;
			var blnResult = true;
			
			if (strstrBody.length == 0) return false;
			
			for (i = 0; i < strstrBody.length && blnResult == true; i++) {
			strChar = strstrBody.charAt(i);
			
				if (strValidChars.indexOf(strChar) == -1) {
					blnResult = false;
				}
			}
			return blnResult;
			}


	
	
		



</script>
<?php
	
$lid=""; $name=""; $address=""; $contact=""; $email_id=""; $password=""; $qs="";$username="";$id="0";$type="User";
	
	
	if(isset($_GET['cid'])) {
		$lid = $converter->decode($_GET['cid']);
		$id= $converter->decode($_GET['cid']);
	}


	
	if(isset($_POST['btnSubmit'])) {
		$name = trim(str_replace("'", "''", $_POST['txtName']));
		$address = trim(str_replace("'", "''", $_POST['txtAddress']));
		$contact = trim(str_replace("'", "''", $_POST['txtContact']));
		$email_id = trim(str_replace("'", "''", $_POST['txtEmail']));
		$password = trim(str_replace("'", "''", $_POST['txtPassword']));
		$username= trim(str_replace("'", "''", $_POST['txtUserName']));
		$type= trim(str_replace("'", "''", $_POST['ddlType']));
		
		
	   
	   $data = array(
		    'username'=>$username,
			'name' => $name,
			'address' => $address,
			'contact' => $contact,
			'email_id' => $email_id,
			'password' => $password,
		    'isdeleted' => 0,
		    'type'=>$type,
		);
		
		if($lid == "") {
			$lid = $db->insert_array(AdminLogin, $data);
			if (!$lid) { 
				$db->print_last_error(false);
			} else {
				AlertandRedirect("New User is added successfully.", "".GetOnlyPageName()."?".$qs);
			}
		} else {
			$rows = $db->update_array(AdminLogin, $data, "id = $lid");
			if (!$rows) {
				$db->print_last_error(false);
			} else {
				if ($rows > 0) {
					AlertandRedirect('User is edited successfully.', "view_users.php");
				}
			}
		}
	} 
	
	else {
	
	//Alert ($lid);
	
	if($lid != "") {
		$query = "SELECT * FROM ".AdminLogin." WHERE id = $lid";

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
}

?>
</head>
<body>
<!-- div -->
<?php include "includes/header.inc.php"?>
<!-- / div -->
<!-- nav -->
<?php include "includes/left.inc.php"?>
<!-- / nav -->
<section id="content">
  <section class="main padder">
    <div class="clearfix" style="padding:15px 0;">
	
	
	     
	  
		  <div style="float:left;width:52%;text-align:left">
			<h4><strong><i class="icon-user"></i>&nbsp; Add User</strong></h4>
		 </div>
	  
	  
    </div>
    <div class="row">
      <div class="col-sm-12">
        <section class="panel">
          <div class="panel-body">
          	<div style="text-align:right;"><a href="view_users.php"  class="btn btn-info btn-white btn-xs" style="width:150px;">View Users</a></div>
            <form class="form-horizontal" method="post" enctype="multipart/form-data"  onSubmit="javascript:return Validation()">
            
			  
              
              <div class="panel-heading" style="background:none; font-weight:bold;">User Details</div>
               <div class="form-group" style="padding-top:15px;">	
                <label class="col-lg-3 control-label">Full Name</label>
                <div class="col-lg-8">
                 		<input type="text" id="txtName" name="txtName"  class="form-control" value="<?php echo $name; ?>" style="width:400px;" />
                </div>
              </div>
              
              <div class="form-group">	
                <label class="col-lg-3 control-label">Address</label>
                <div class="col-lg-8">
                 	<textarea id="txtAddress" name="txtAddress" class="form-control" style="width:400px; height:100px;"><?php echo $address; ?></textarea>
                 </div>
              </div>
              
              <div class="form-group">	
                <label class="col-lg-3 control-label">Contact No.</label>
                <div class="col-lg-8">
                 		<input type="text" id="txtContact" name="txtContact"  class="form-control" value="<?php echo $contact; ?>" style="width:400px;"  maxlength="14"/>
                     
                </div>
              </div>
               <div class="form-group" >	
                <label class="col-lg-3 control-label">Email ID</label>
                <div class="col-lg-8">
                  <input type="text" name="txtEmail" id="txtEmail" class="form-control" value="<?php echo $email_id; ?>" style="width:400px;">
                </div>
              </div>
              <div class="panel-heading" style="background:none; font-weight:bold;">Login Details</div>
             
              <div class="form-group" style="padding-top:15px;">
                <label class="col-lg-3 control-label">Login User Name</label>
                <div class="col-lg-8">
                  <input type="text" name="txtUserName" id="txtUserName" class="form-control" value="<?php echo $username; ?>" style="width:400px;"  onBlur="javascript:CheckDuplication('<?php echo $id; ?>');">
                </div>
              </div>
              
              <div class="form-group">
                <label class="col-lg-3 control-label">Password</label>
                <div class="col-lg-8">
                  <input type="password" name="txtPassword" id="txtPassword" class="form-control" value="<?php echo $password; ?>" style="width:400px;">
                </div>
              </div>
             <div class="form-group" style="display:none">
                <label class="col-lg-3 control-label">User Type</label>
                <div class="col-lg-8">
					<select id="ddlType" name="ddlType">
						<option value="">Choose Type</option>
						<option value="Admin" <?php if($type=="Admin"){echo "selected";}?>>Admin</option>
						<option value="User" <?php if($type=="User"){echo "selected";}?>>User</option>
						<option value="Moderator" <?php if($type=="Moderator"){echo "selected";}?>>Moderator</option>
					</select>
                </div>
              </div>
             <div class="panel-heading" style="background:none; font-weight:bold;display:none;">Set Rights</div>
             
               <div class="form-group" style="padding-top:15px;display:none;">	
                <label class="col-lg-3 control-label">&nbsp;</label>
                <div class="col-lg-8">
                   <table width="80%" border="1" style="border-collapse:collapse" cellspacing="3" cellpadding="10">
						<tr>
							<td colspan="4" style="background:#eaeaea;">
								<b>Recipe Rights</b>
							</td>
							
						</tr>
						<tr >
							<td>
								<input type="checkbox" id="chk1" name="chk1"  style="border:solid 0px red;"/>&nbsp;&nbsp;Add Recipe
							</td>
							<td>
								<input type="checkbox" id="chk2" name="chk2" />&nbsp;&nbsp;Edit / View Recipe
							</td>
							<td>
								<input type="checkbox" id="chk3" name="chk3" />&nbsp;&nbsp;Delete Recipe
							</td>
						</tr>	
						<tr>
							<td colspan="4" style="background:#eaeaea;">
								<b>Key Ingredients Rights</b>
							</td>
							
						</tr>
						<tr>
							<td>
								<input type="checkbox" id="chk12" name="chk12"  />&nbsp;&nbsp;Add Key Ingredient
							</td>
							<td>
								<input type="checkbox" id="chk13" name="chk13"  />&nbsp;&nbsp;Edit / View Key Ingredient
							</td>
							
							<td>
								<input type="checkbox" id="chk14" name="chk14"    />&nbsp;&nbsp;Delete Key Ingredient
							</td>
						</tr>
					</table>
                 </div>  
                   
                 
                
              </div>
               
              
              <div class="form-group">
                <div class="col-lg-9 col-lg-offset-3">
                 
                  <input type="submit" name="btnSubmit" value="Submit" class="btn btn-primary" />
                </div>
              </div>
            </form>
          </div>
        </section>
        
      </div>
      
    </div>
  </section>
  <?php include "includes/footer.inc.php"?>
</section>
<!-- footer -->

<!-- / footer-->


</body>
</html>

