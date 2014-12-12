<?php include "../includes/common.inc.php" ?>
<?php include "includes/links.inc.php" ?>
</head>
<script language="javascript" type="text/javascript">
	function CheckLoginValidation() {
		if(document.getElementById("txtUsername").value == "") {
			alert("Please enter: Username");
			document.getElementById("txtUsername").focus();
			return false;
		}
		
		if(document.getElementById("txtPassword").value == "") {
			alert("Please enter: Password");
			document.getElementById("txtPassword").focus();
			return false;
		}
	}
</script>
<?php
	if(isset($_GET['m'])) {
		$value = $converter->decode($_GET['m']);
		if($value == "logout") {
			Logout();
		}
	}
	
	if(isset($_POST['btnLogin'])) {
		$username = str_replace("'", "''", $_POST['txtUsername']);
		$password = str_replace("'", "''", $_POST['txtPassword']);
		$type = "SuperAdmin";
		
		$rows = $db->select("SELECT * FROM ".AdminLogin." WHERE username = '".$username."' and password = '".$password."' and isdeleted = 0 ");
		if($rows == "") {
			$db->print_last_error(false);
		} else {
			if($db->row_count > 0) {
				while ($r=$db->get_row($rows, 'MYSQL_ASSOC')) {
				   	$_SESSION['login_name'] = $r['username'];
					$_SESSION['login_password'] = $r['password'];
					$_SESSION['login_id'] = $r['id'];
					$_SESSION['login_type'] = $r['type'];
					Redirect('view_recipes.php');
			    }
			} else {
				AlertandRedirect('Error Message: Login unsuccessful.\n\nInvalid username or password.', 'login.php');
			}
		}
	}
	
	if(!$common->CheckConfigurationSettings()) Redirect("set_configurations.php");
?>

<body>
<!-- header -->
<header id="header" class="navbar bg bg-black"><a class="" href="#" style="font-size:40px; color:#22baa0; margin:10px; font-weight:bold; font-style:italic; font-family:'Times New Roman', Times, serif">Nutrion</a> </header>
<!-- / header -->
<section id="content">
  <div class="main padder">
    <div class="row" style="margin-top:30px;">
      <div class="col-lg-4 col-lg-offset-4 m-t-large">
        <section class="panel">
          <header class="panel-heading text-left"><span style="font-size:18px;">Welcome to the Login Page</span></header>
            <form action="" method="post" class="panel-body" onSubmit="javascript:return CheckLoginValidation()">
            <div class="block">
              <label class="control-label">Username</label>
              <input type="text" name="txtUsername" id="txtUsername" placeholder="" class="form-control">
            </div>
            <div class="block">
              <label class="control-label">Password</label>
              <input type="password" id="txtPassword" name="txtPassword" placeholder="" class="form-control">
            </div>
            <div class="checkbox" style="display:none;">
              <label>
              <input type="checkbox" style="margin-top:4px;"> &nbsp;&nbsp;
              Keep me logged in </label>
            </div>
            <a href="#" class="pull-right m-t-mini" style="display:none;"><small>Forgot password?</small></a>
           <input type="submit" id="btnLogin" name="btnLogin" class="btn btn-info" value="Login">
            
            
           
          </form>
        </section>
      </div>
    </div>
  </div>
</section>
<!-- footer -->
<footer id="footer">
  <div class="text-center padder clearfix">
    <p> <small>&copy; Nutrion 2014</small><br>
      <br>
   </p>
  </div>
</footer>
<!-- / footer -->
<script src="css/app.v1.js"></script>
<!-- Bootstrap -->
<!-- app -->
</body>
</html>
