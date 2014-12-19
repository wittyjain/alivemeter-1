<?php include 'includes/common.inc.php'?>
<!DOCTYPE HTML>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Alivemeter</title>
<?php include 'includes/links.php'?>
<link href="style/main.css" rel="stylesheet" type="text/css">
<link href="style/reset.css" rel="stylesheet" type="text/css">
<link href="style/fonts.css" rel="stylesheet" type="text/css">
<link href="style/bxslider.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="js/scrolltopcontrol.js"></script>
<link href="style/bhupali.css" rel="stylesheet" type="text/css">
         <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<script language="javascript" type="text/javascript">
function Validation() {

 	 if(document.getElementById("txtTitle").value == "") {
		alert("Please Enter Title...");
		document.getElementById("txtTitle").focus();
		return false;
	}
	if(document.getElementById("txtBe_with_us").value == "") {
		//alert("Please Enter Write To Us..");
		document.getElementById("txtBe_with_us").focus();
		return false;
	}
	
	
	
}
</script>                 

</head>

<body>
<?php include 'includes/top.php'?>
<section>
  <div class="top_ou">
    <div class="top_in">
      <div class="top">
        <div class="b_crumb"><a href="index.php">Home></a> Be with us</div>
        
        <div class="cal_12" style="text-align: justify; line-height: 20px;">

<?php
$be_with_us_id=""; $id=""; $title=""; $be_with_us=""; $approved ="0"; $isdeleted="0"; $isactive="1";  $created_date=date('d-m-Y h:i:s');
?>
	<?php
		if(isset($_GET['cid'])) {
			$id = $converter->decode($_GET['cid']);
		}
		
		 
	if(isset($_POST['btnSubmit'])) {
		$title = trim(str_replace("'", "''", $_POST['txtTitle']));
		$be_with_us = trim(str_replace("'", "''", $_POST['txtBe_with_us']));
		
	
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
			'be_with_us' => $be_with_us,
			'user_id'=> $user_id,
			'isdeleted' => 0,
			'isactive'=>1,
			'created_date'=>$created_date,
			'approved'=>0,
			);


		if($id == "" || $id==0) {
			$id = $db->insert_array(Be_With_Us, $data);
					
			if (!$id) { 
				$db->print_last_error(false);
			} else {
				AlertandRedirect("Your comments added successfully", "thanks.php");
			}
			
			/*if($id != "" || $id!=0)
			 {
						$query = "SELECT * FROM tbl_total_reward_points WHERE user_id=".$user_id." and type='Ambassador'";
						$result = mysql_query($query);
						if ($result != "") {
							$rowcount = mysql_num_rows($result);
							if ($rowcount > 0) {
								return false;
							}
							else
							{
								$reward_point="25";
								$created_date=date('d-m-Y h:i:s');
							}
						}
					
				$data1 = array(
					'user_id'=> $user_id,
					'type'=>'Ambassador',
					'reward_points'=>$reward_point,
					'common_id'=>$id,
					'created_date'=>$created_date,
					'isactive'=>1,
					'isdeleted'=>0,
					
				);
				$id = $db->insert_array(Total_Reward_Points, $data1);		
		 
			}	
			*/
			
			
			
		} else {
			$rows = $db->update_array(Be_With_Us, $data, "be_with_us_id = $id");
			if (!$rows) {
				$db->print_last_error(false);
			} else {
				if ($rows > 0) {
					AlertandRedirect('Your comments edited successfully',  "page.php?dir=master/be_with_us/view");
				}
			}
		}
	} 
	else
	{
		$query = "SELECT * FROM ".Be_With_Us." WHERE be_with_us_id = $id";
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
                      	 <h2 class="Tab_Title">Be With Us</h2>
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
                      <input type="text" name="txtTitle" id="txtTitle" value="<?php echo $title;?>" style="width:532px; margin-bottom:10px;" />
                    </div>
                    </div>
                     <div class="formlabel1">
                      <label class="formlabel1">Be with us<span class="redtxt">*</span> </label>
                    </div>
                    <div class="formcontrol2" style="padding-top:4px;">
                      <textarea name="txtBe_with_us" id="txtBe_with_us" class="ckeditor" style="width:230px;" ><?php echo $be_with_us;?></textarea>
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
                 	
                 </div>
</form>
               

</div>
</div>
</div>
</div>


<?php include 'includes/bottom.php'?>
<script type="text/javascript" src="js/jQuery.1.8.2.js"></script> 
<script type="text/javascript" src="js/jquery.bxslider.min.js"></script> 
<script type="text/javascript" src="js/custom.js"></script>

<script type="text/javascript" src="js/jquery.form-2.4.0.min.js"></script>
<script type="text/javascript" src="js/jqeasy.dropdown.min.js"></script>
</body>
</html>
