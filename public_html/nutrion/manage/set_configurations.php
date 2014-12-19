<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php include("../includes/common.inc.php"); ?>
<?php include("includes/links.inc.php"); ?>
<title>Configuration Settings <?php echo $strPageTitle; ?></title>
<meta name="keywords" content="<?php echo $strPageKeywords; ?>" />
<meta name="description" content="<?php echo $strPageDescription; ?>" />
<script language="javascript" type="text/javascript">
	function CheckConfigurationValidation() {
		var frm = document.frmSetConfiguration;
		if(isEmpty(frm.txtClientName,"Client Name"))return false;
		if(isEmpty(frm.txtAddress,"Address"))return false;
		if(isEmpty(frm.txtContactNo,"Contact No"))return false;
		if(IsNumeric(frm.txtContactNo.value, "+") == false) {
			alert("Please Enter Proper Contact No");
			document.getElementById("txtContactNo").focus();
			return false;
		}
		if(isEmpty(frm.txtPersonName,"Contact Person Name"))return false;
		if(isEmpty(frm.txtEmailID,"E-mail ID"))return false;
		if(!emailValidate(frm.txtEmailID,"Valid E-Mail ID"))return false;
		if(document.getElementById("txtAlternateEmailID").value != "") {
			if(!emailValidate(frm.txtAlternateEmailID, "Valid Alternate E-Mail ID"))return false;
		}
		if(isEmpty(frm.txtAdminTitle,"Admin Title"))return false;
	}
</script>

<?php
	$db = new db_class;
	$rows = $db->select("SELECT * FROM ".Config_Settings."");
	if($rows == "") {
		$db->print_last_error(false);
	} else {
		if($db->row_count > 0) {
			while ($r=$db->get_row($rows, 'MYSQL_ASSOC')) {
				extract($r);
		   }
		}
	}

	if(isset($_POST['btnSubmit'])) {
		$clientname = str_replace("'", "''", $_POST['txtClientName']);
		$address = str_replace("'", "''", $_POST['txtAddress']);
		$contactno = str_replace("'", "''", $_POST['txtContactNo']);
		$website = str_replace("'", "''", $_POST['txtWebsite']);
		$personname = str_replace("'", "''", $_POST['txtPersonName']);
		$emailid = str_replace("'", "''", $_POST['txtEmailID']);
		$alternateemailid = str_replace("'", "''", $_POST['txtAlternateEmailID']);
		$admintitle = str_replace("'", "''", $_POST['txtAdminTitle']);
		
		$data = array(
		   'clientname' => $clientname, 
		   'address' => $address, 
		   'contactno' => $contactno,
		   'contactpersonname' => $personname,
		   'emailid1' => $emailid,
		   'emailid2' => $alternateemailid,
		   'website' => $website,
		   'admintitle' => $admintitle,
		   );
		   
		if(!CheckAdminLoginSession()) {
			$id = $db->insert_array(Config_Settings, $data);
			if (!$id) { 
				$db->print_last_error(false);
			} else {
				AlertandRedirect('Thank you!\n\nConfiguration Settings are set successfully.\nYou can now login to admin panel.', 'login.php');
			}
		} else {
			$rows = $db->update_array(Config_Settings, $data, "clientconfigurationid = 1");
			if (!$rows) {
				$db->print_last_error(false);
			} else {
				if ($rows > 0) {
					AlertandRedirect('Configuration Settings are updated successfully.', 'set_configurations.php');
				}
			}
		}
	}
?>
</head>
<body>
	<center>
    	<form id="frmSetConfiguration" name="frmSetConfiguration" method="post">
            <div id="dvWrapper">
                <div class="dvFL">
                    <div class="dvFL">
                        <?php include("includes/top.inc.php"); ?>
                    </div>
                    <div class="dvFL">
                    	<h2>Configuration Settings</h2>
                        <div class="dvFL">
                        	<div class="dvFL border">
                            	<table width="100%" cellpadding="4" cellspacing="2" border="1" style="border-collapse: collapse; border: solid 1px #f2f6fe;">
                                	<tr>
                                    	<td class="table_left">&nbsp;</td>
                                        <td class="table_center">&nbsp;</td>
                                        <td class="table_right">(<abbr>*</abbr>) marked fields are compulsory</td>
                                    </tr>
                                    <tr>
                                    	<td class="table_left">Client Name<abbr>*</abbr></td>
                                        <td class="table_center">:</td>
                                        <td class="table_right">
                                        	<input type="text" id="txtClientName" name="txtClientName" style="width: 400px;" value="<?php echo $clientname; ?>" />
                                        </td>
                                    </tr>
                                    <tr>
                                    	<td class="table_left">Address<abbr>*</abbr></td>
                                        <td class="table_center">:</td>
                                        <td class="table_right">
                                        	<textarea id="txtAddress" name="txtAddress" style="width: 398px; height: 60px;"><?php echo $address; ?></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                    	<td class="table_left">Contact No<abbr>*</abbr></td>
                                        <td class="table_center">:</td>
                                        <td class="table_right">
                                        	<input type="text" id="txtContactNo" name="txtContactNo" style="width: 150px;" value="<?php echo $contactno; ?>" />
                                        </td>
                                    </tr>
                                    <tr>
                                    	<td class="table_left">Website<abbr>*</abbr></td>
                                        <td class="table_center">:</td>
                                        <td class="table_right">
                                        	<input type="text" id="txtWebsite" name="txtWebsite" style="width: 400px;" value="<?php echo $website; ?>" />
                                        </td>
                                    </tr>
                                    <tr>
                                    	<td class="table_left">Contact Person Name<abbr>*</abbr></td>
                                        <td class="table_center">:</td>
                                        <td class="table_right">
                                        	<input type="text" id="txtPersonName" name="txtPersonName" style="width: 400px;" value="<?php echo $contactpersonname; ?>" />
                                        </td>
                                    </tr>
                                    <tr>
                                    	<td class="table_left">Email ID<abbr>*</abbr></td>
                                        <td class="table_center">:</td>
                                        <td class="table_right">
                                        	<input type="text" id="txtEmailID" name="txtEmailID" style="width: 400px;" value="<?php echo $emailid1; ?>" />
                                        </td>
                                    </tr>
                                    <tr>
                                    	<td class="table_left">Alternate Email ID</td>
                                        <td class="table_center">:</td>
                                        <td class="table_right">
                                        	<input type="text" id="txtAlternateEmailID" name="txtAlternateEmailID" style="width: 400px;" value="<?php echo $emailid2; ?>" />
                                        </td>
                                    </tr>
                                    <tr>
                                    	<td class="table_left">Admin Title<abbr>*</abbr></td>
                                        <td class="table_center">:</td>
                                        <td class="table_right">
                                        	<input type="text" id="txtAdminTitle" name="txtAdminTitle" style="width: 400px;" value="<?php echo $admintitle; ?>" />
                                        </td>
                                    </tr>
                                    <tr>
                                    	<td class="table_left">&nbsp;</td>
                                        <td class="table_center">&nbsp;</td>
                                        <td class="table_right">
                                        	<input type="submit" id="btnSubmit" name="btnSubmit" value="Submit" class="button" onclick="javascript:return CheckConfigurationValidation();" />
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </center>
</body>
</html>
