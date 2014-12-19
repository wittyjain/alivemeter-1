<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Nutrion Management</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" href="<?php echo $strHostName?>/manage/css/app.v1.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $strHostName?>/manage/css/font.css" cache="false">
 <link href="<?php echo $strHostName; ?>/manage/css/charisma-app.css" rel="stylesheet">
	<link href="<?php echo $strHostName; ?>/manage/css/jquery-ui-1.8.21.custom.css" rel="stylesheet">

	<link href='<?php echo $strHostName; ?>/manage/css/chosen.css' rel='stylesheet'>
	<link href='<?php echo $strHostName; ?>/manage/css/uniform.default.css' rel='stylesheet'>
	<link href='<?php echo $strHostName; ?>/manage/css/colorbox.css' rel='stylesheet'>

	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- The fav icon -->
	<link rel="shortcut icon" href="img/favicon.ico">

	<script language="javascript" type="text/javascript" src="<?php echo $strHostName; ?>/manage/js/common.js"></script>
	<script language="javascript" type="text/javascript" src="<?php echo $strHostName; ?>/manage/js/PopUp.js"></script>
<!--	<script src="<?php echo $strHostName; ?>/manage/js/jquery-1.9.1.js"></script>-->
<script src="<?php echo $strHostName; ?>/manage/js/jquery-1.9.1.js"></script>
	<script language="javascript" type="text/javascript" src="<?php echo $strHostName; ?>/manage/js/jquery-1.7.2.min.js"></script>


	<!-- jQuery UI 
	<script language="javascript" type="text/javascript" src="<?php echo $strHostName; ?>/manage/js/jquery-ui.js"></script>-->
		<script language="javascript" type="text/javascript" src="<?php echo $strHostName; ?>/manage/js/jquery-ui-1.8.21.custom.min.js"></script>
	
	<!-- library for creating tabs -->
	<script language="javascript" type="text/javascript" src="<?php echo $strHostName; ?>/manage/js/bootstrap-tab.js"></script>
	<!-- library for advanced tooltip -->
	<script language="javascript" type="text/javascript" src="<?php echo $strHostName; ?>/manage/js/bootstrap-tooltip.js"></script>
	<!-- popover effect library -->
	<script language="javascript" type="text/javascript" src="<?php echo $strHostName; ?>/manage/js/bootstrap-popover.js"></script>
	
	<!-- library for cookie management -->
	<script language="javascript" type="text/javascript" src="<?php echo $strHostName; ?>/manage/js/jquery.cookie.js"></script>
	<!-- calander plugin -->
	<script src='js/fullcalendar.min.js'></script>
	<!-- data table plugin
	<script src='js/jquery.dataTables.min.js'></script>-->
	<script type="text/javascript" charset="utf-8" src="media/js/jquery.dataTables.js"></script>

	<!-- select or dropdown enhancer -->
	<script language="javascript" type="text/javascript" src="<?php echo $strHostName; ?>/manage/js/jquery.chosen.min.js"></script>
	<!-- checkbox, radio, and file input styler
	<script language="javascript" type="text/javascript" src="<?php echo $strHostName; ?>/manage/js/jquery.uniform.min.js"></script> -->
	<!-- plugin for gallery image view -->
	<script language="javascript" type="text/javascript" src="<?php echo $strHostName; ?>/manage/js/jquery.colorbox.min.js"></script>
	<!-- rich text editor library -->
	<script language="javascript" type="text/javascript" src="<?php echo $strHostName; ?>/manage/js/jquery.cleditor.min.js"></script>
	<!-- notification plugin -->

	<!-- file manager library -->
	<script language="javascript" type="text/javascript" src="<?php echo $strHostName; ?>/manage/js/jquery.elfinder.min.js"></script>
	<!-- star rating plugin -->
	<script language="javascript" type="text/javascript" src="<?php echo $strHostName; ?>/manage/js/jquery.raty.min.js"></script>
	<!-- for iOS style toggle switch -->
	<script language="javascript" type="text/javascript" src="<?php echo $strHostName; ?>/manage/js/jquery.iphone.toggle.js"></script>
	<!-- autogrowing textarea plugin -->
	<script language="javascript" type="text/javascript" src="<?php echo $strHostName; ?>/manage/js/jquery.autogrow-textarea.js"></script>
	<!-- multiple file upload plugin -->
	<script language="javascript" type="text/javascript" src="<?php echo $strHostName; ?>/manage/js/jquery.uploadify-3.1.min.js"></script>
	<!-- history.js for cross-browser state change on ajax -->
	<script language="javascript" type="text/javascript" src="<?php echo $strHostName; ?>/manage/js/jquery.history.js"></script>
	<!-- application script for Charisma demo -->
	<?php if(GetOnlyPageName()!="add_recipe.php" && GetOnlyPageName()!="view_raw_data.php"){?>
	<script language="javascript" type="text/javascript" src="<?php echo $strHostName; ?>/manage/js/charisma.js"></script>		
	<?php } ?>

