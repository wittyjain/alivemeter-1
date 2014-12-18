<?php include 'includes/common.inc.php'?>
<?php include 'includes/links.php'?>
</head>
<body>
<?php if($_GET['dir']!="doctor/login" && $_GET['dir']!="md/login" && $_GET['dir']!="nutritionist/login"  && $_GET['dir']!="clerk/login"){?>
	<?php include 'includes/top.php'?>
<?php } ?>

     <?php
		if(isset($_GET['dir'])) {
			$dir = $_GET['dir'];
		}
	?>
    <?php if($dir != "") { include("templates/".$dir."/index.php"); } else { echo "<p style=\"font-size: 12px;\">Sorry! Page you are trying to view is not available.</p>"; } ?>
 
<?php if($_GET['dir']!="doctor/login" && $_GET['dir']!="md/login" && $_GET['dir']!="nutritionist/login"  && $_GET['dir']!="clerk/login"){?>
 <?php include 'includes/bottom.php'?>
 <?php } ?>
</body>
</html>
