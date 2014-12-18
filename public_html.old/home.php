<?php include 'includes/common.inc.php'?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Alivemeter</title>
<?php include 'includes/links.php'?>
<?php
	if(isset($_GET['type'])) {
		$type = $converter->decode($_GET['type']);
		 
		if($type == "logout") {
			Customer_Logout();
			Redirect("index.php");
		}
	}
  

	
?>

</head>

<body>
<?php include 'includes/top.php'?>



<section>
  <div class="top_ou">
    <div class="top_in">
      <div class="top">
     	 <h1 class="f_red" style="padding-top:35px;">Welcome to Alivemeter Dashboard !</h1>
    	   <div class="cal_12" style="text-align: justify; padding:45px 0;" id="dvView_Users">
           		<?php include 'retrive_files/retrive_users.inc.php'?>
           </div>
       </div>
    </div>
  </div>

</section>

   <?php include 'includes/bottom.php'?>


<script type="text/javascript" src="js/jQuery.1.8.2.js"></script> 
<script type="text/javascript" src="js/jquery.bxslider.min.js"></script> 
<script type="text/javascript" src="js/custom1.js"></script>

<script type="text/javascript" src="js/jquery.form-2.4.0.min.js"></script>
<script type="text/javascript" src="js/jqeasy.dropdown.js"></script>

</body>
</html>
