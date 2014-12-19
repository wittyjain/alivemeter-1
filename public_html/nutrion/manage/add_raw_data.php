<?php include "../includes/common.inc.php"?>
<?php include "includes/links.inc.php"?>
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
		<script src="ckeditor/_samples/sample.js" type="text/javascript"></script>
		<link href="ckeditor/_samples/sample.css" rel="stylesheet" type="text/css" />
<script language="javascript" type="text/javascript">
function CheckDuplication(id) {
		var obj = document.getElementById("txtName");
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
						document.getElementById("txtName").focus();
						document.getElementById("txtName").select();
					}
				}
			}
			xmlhttp.open("GET","<?php echo $strHostName; ?>/manage/includes/checkduplication.inc.php?id="+id+"&tbl=Raw&value="+obj.value, true);
			xmlhttp.send();
		}
	}
	
	
	
	function Validate() {
		if(document.getElementById("txtIngredientName").value == "") {
			alert("Please Enter Key Ingredient Name....");
			document.getElementById("txtIngredientName").focus();
			return false;
		}
	}
</script>
<style>
#grid th {
	text-align:center;
	padding:10px 0;
}
#grid td {
	text-align:center;
	padding:10px 0 0 0;
}
</style>
</head>
<?php
	
$editid=""; $isdeleted=""; $id=""; $qs="";$lid=""; 
$ingredientname=""; $energy=""; $carbohydrate=""; $protein=""; $totalfat=""; $fibre=""; $sodium=""; $pufa=""; $mufa="";
$transfat=""; $potassium=""; $vitaminA=""; $vitaminB1=""; $vitaminB2=""; $vitaminB3=""; $vitaminB6=""; $vitaminC=""; $vitaminE=""; $iron=""; $calcium=""; $zinc=""; $phosphorus=""; $sugar="";
	
	
	
	if(isset($_GET['cid'])) {
		$lid = $converter->decode($_GET['cid']);
	}


	
	if(isset($_POST['btnSubmit'])) {
		$ingredientname = trim(str_replace("'", "''", $_POST['txtIngredientName']));
		$energy = trim(str_replace("'", "''", $_POST['txtEnergy']));
		$carbohydrate = trim(str_replace("'", "''", $_POST['txtCarbohydrate']));
		$protein = trim(str_replace("'", "''", $_POST['txtProtein']));
		$totalfat = trim(str_replace("'", "''", $_POST['txtTotalFat']));
		$fibre = trim(str_replace("'", "''", $_POST['txtFibre']));
		$sodium = trim(str_replace("'", "''", $_POST['txtSodium']));
		$pufa = trim(str_replace("'", "''", $_POST['txtPufa']));
		$mufa = trim(str_replace("'", "''", $_POST['txtMufa']));
		$transfat = trim(str_replace("'", "''", $_POST['txtTransfat']));
		$potassium = trim(str_replace("'", "''", $_POST['txtPotassium']));
		$vitaminA = trim(str_replace("'", "''", $_POST['txtVitaminA']));
		$vitaminB1 = trim(str_replace("'", "''", $_POST['txtVitaminB1']));
		$vitaminB2 = trim(str_replace("'", "''", $_POST['txtVitaminB2']));
		$vitaminB3 = trim(str_replace("'", "''", $_POST['txtVitaminB3']));
		$vitaminB6 = trim(str_replace("'", "''", $_POST['txtVitaminB6']));
		$vitaminC = trim(str_replace("'", "''", $_POST['txtVitaminC']));
		$vitaminE = trim(str_replace("'", "''", $_POST['txtVitaminE']));
		$iron = trim(str_replace("'", "''", $_POST['txtIron']));
		$calcium = trim(str_replace("'", "''", $_POST['txtCalcium']));
		$zinc = trim(str_replace("'", "''", $_POST['txtZinc']));
		$phosphorus = trim(str_replace("'", "''", $_POST['txtPhosphorus']));
		$sugar = trim(str_replace("'", "''", $_POST['txtSugar']));
		
		
		//$isdeleted = $_POST['chkIsDeleted'];
		
		
		if($isdeleted == "on") {
			$isdeleted = 1;
		} else {
			$isdeleted = 0;
		}
		
	   
	   $data = array(
			'ingredientname' => $ingredientname,
			'energy' => $energy,
			'carbohydrate' => $carbohydrate,
			'protein' => $protein,
			'totalfat' => $totalfat,
			'fibre' => $fibre,
			'sodium' => $sodium,
			'pufa' => $pufa,
			'mufa' => $mufa,
			'transfat' => $transfat,
			'potassium' => $potassium,
			'vitaminA' => $vitaminA,
			'vitaminB1' => $vitaminB1,
			'vitaminB2' => $vitaminB2,
			'vitaminB3' => $vitaminB3,
			'vitaminB6' => $vitaminB6,
			'vitaminC' => $vitaminC,
			'vitaminE' => $vitaminE,
			'iron' => $iron,
			'calcium' => $calcium,
			'zinc' => $zinc,
			'phosphorus' => $phosphorus,
			'sugar' => $sugar,
			'isdeleted' => $isdeleted,
		);
		
		if($lid == "") {
			$lid = $db->insert_array(Raw, $data);
			if (!$lid) { 
				$db->print_last_error(false);
			} else {
				AlertandRedirect("New record is added successfully", "".GetOnlyPageName()."?".$qs);
			}
		} else {
			$rows = $db->update_array(Raw, $data, "id = $lid");
			if (!$rows) {
				$db->print_last_error(false);
			} else {
				if ($rows > 0) {
					AlertandRedirect('Record is edited successfully', "view_raw_data.php");
				}
			}
		}
	} 
	
	else {
	
	//Alert ($lid);
	
	if($lid != "") {
		$query = "SELECT * FROM ".Raw." WHERE id = $lid";

		$result = mysql_query($query);
		if($result != "") {
			$rowcount = mysql_num_rows($result);
			if($rowcount > 0) {
				while($row = mysql_fetch_assoc($result)) {
					extract($row);
					$ingredientname=$ingredientname;
				}
			}
		}
		$mode = "edit";
	}
}

?>
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
      <h4><strong><i class="icon-key"></i>&nbsp; Add Key Ingredient</strong></h4>
    </div>
    
    
    <div class="row">
    
      <div class="col-sm-12">
        <section class="panel">
          <div class="panel-body">
           			<div style="text-align:right; margin-right:15px;"><a href="view_raw_data.php"  class="btn btn-info btn-white btn-xs" style="width:150px;">View Key Ingredients</a></div>
	  
            <form id="form1" name="form1" method="post" enctype="multipart/form-data">
              <table cellpadding="0" cellspacing="0" border="0" style="width:97.5%; text-align:center; margin:15px; font-size: 12px;" class="table table-bordered" id="grid">
                <tr style="background-color:#e4fdf9;">
                  <th style="width:400px;">Key Ingredient</th>
                  <th>Energy (kcal)</th>
                  <th>Carbohydrate (g)</th>
                  <th>Protein (g)</th>
                  <th>Total Fat (g)</th>
                  <th>Fibre (g)</th>
                  <th >Sodium</th>
                </tr>
                <tr>
                  <td><input type="text" id="txtIngredientName" name="txtIngredientName" style="width: 85%; padding: 0px 5px; margin-bottom:10px;" value="<?php echo $ingredientname; ?>" onBlur="javascript:CheckDuplication('<?php echo $id; ?>');" />
                    <input type="hidden" id="hfIngID" name="hfIngID" style="width: 85%; padding: 0px 5px;" value="<?php echo $ingid; ?>" /></td>
                  <td><input type="text" id="txtEnergy" name="txtEnergy" style="width:85%; padding: 0px 5px;" value="<?php echo $energy; ?>"/></td>
                  <td><input type="text" id="txtCarbohydrate" name="txtCarbohydrate" style="width: 85%; padding: 0px 5px;" value="<?php echo $carbohydrate; ?>"/></td>
                  <td><input type="text" id="txtProtein" name="txtProtein" style="width: 85%; padding: 0px 5px;" value="<?php echo $protein; ?>"/></td>
                  <td><input type="text" id="txtTotalFat" name="txtTotalFat" style="width: 85%; padding: 0px 5px;" value="<?php echo $totalfat; ?>"/></td>
                  <td><input type="text" id="txtFibre" name="txtFibre" style="width: 85%; padding: 0px 5px;" value="<?php echo $fibre; ?>"/></td>
                  <td><input type="text" id="txtSodium" name="txtSodium" style="width: 85%; padding: 0px 5px;" value="<?php echo $sodium; ?>"/></td>
                </tr>
              </table>
              <table cellpadding="0" cellspacing="0" border="0" style="width:97.5%; text-align:center; margin:15px;">
                <tr>
                  <td style="border:0px; text-align:left; font-weight:bold;">MICRO NUTRIENT</td>
                </tr>
              </table>
              <table cellpadding="0" cellspacing="0" border="0" style="width:97.5%; text-align:center; margin:15px; font-size: 12px;" class="table table-bordered" id="grid">
                <tr style="background-color:#e4fdf9;">
                  <th style="width:75px;">Pufa</th>
                  <th style="width:80px;">Mufa</th>
                  <th style="width:80px;">Transfat</th>
                  <th style="width:80px;">Potassium</th>
                  <th style="width:80px;">Vitamin A </th>
                  <th style="width:80px;">Vitamin B1</th>
                  <th style="width:80px;">Vitamin B2</th>
                  <th style="width:80px;">Vitamin B3</th>
                  <th style="width:80px;">Vitamin B6</th>
                  <th style="width:80px;">Vitamin C</th>
                  <th style="width:80px;">Vitamin E</th>
                  <th style="width:75px;">Iron</th>
                  <th style="width:80px;">Calcium</th>
                  <th style="width:80px;">Zinc</th>
                  <th style="width:110px;">Phosphorous</th>
                  <th>Sugar</th>
                </tr>
                <tr>
                  <td><input type="text" id="txtPufa" name="txtPufa" style="width:50px; margin:0 10px 10px 10px; padding: 0px 4px;" value="<?php echo $pufa; ?>"/></td>
                  <td><input type="text" id="txtMufa" name="txtMufa" style="width:50px; margin:0 10px 10px 10px; padding: 0px 4px;" value="<?php echo $mufa; ?>"/></td>
                  <td><input type="text" id="txtTransfat" name="txtTransfat" style="width:50px; margin:0 10px 10px 10px; padding: 0px 4px;" value="<?php echo $transfat; ?>"/></td>
                  <td><input type="text" id="txtPotassium" name="txtPotassium" style="width:50px; margin:0 10px 10px 10px; padding: 0px 4px;" value="<?php echo $potassium; ?>"/></td>
                  <td><input type="text" id="txtVitaminA" name="txtVitaminA" style="width:50px; margin:0 10px 10px 10px; padding: 0px 4px;" value="<?php echo $vitaminA; ?>"/></td>
                  <td><input type="text" id="txtVitaminB1" name="txtVitaminB1" style="width:50px; margin:0 10px 10px 10px; padding: 0px 4px;" value="<?php echo $vitaminB1; ?>"/></td>
                  <td><input type="text" id="txtVitaminB2" name="txtVitaminB2" style="width:50px; margin:0 10px 10px 10px; padding: 0px 4px;" value="<?php echo $vitaminB2; ?>"/></td>
                  <td><input type="text" id="txtVitaminB3" name="txtVitaminB3" style="width:50px; margin:0 10px 10px 10px; padding: 0px 4px;" value="<?php echo $vitaminB3; ?>"/></td>
                  <td><input type="text" id="txtVitaminB6" name="txtVitaminB6" style="width:50px; margin:0 10px 10px 10px; padding: 0px 4px;" value="<?php echo $vitaminB6; ?>"/></td>
                  <td><input type="text" id="txtVitaminC" name="txtVitaminC" style="width:50px; margin:0 10px 10px 10px; padding: 0px 4px;" value="<?php echo $vitaminC; ?>"/></td>
                  <td><input type="text" id="txtVitaminE" name="txtVitaminE" style="width:50px; margin:0 10px 10px 10px; padding: 0px 4px;" value="<?php echo $vitaminE; ?>"/></td>
                  <td><input type="text" id="txtIron" name="txtIron" style="width:50px; margin:0 10px 10px 10px; padding: 0px 4px;" value="<?php echo $iron; ?>"/></td>
                  <td><input type="text" id="txtCalcium" name="txtCalcium" style="width:50px; margin:0 10px 10px 10px; padding: 0px 4px;" value="<?php echo $calcium; ?>"/></td>
                  <td><input type="text" id="txtZinc" name="txtZinc" style="width:50px; margin:0 10px 10px 10px; padding: 0px 4px;" value="<?php echo $zinc; ?>"/></td>
                  <td><input type="text" id="txtPhosphorus" name="txtPhosphorus" style="width:50px; margin:0 10px 10px 10px; padding: 0px 4px;" value="<?php echo $phosphorus; ?>"/></td>
                  <td><input type="text" id="txtSugar" name="txtSugar" style="width:50px; margin:0 10px 10px 10px; padding: 0px 4px;" value="<?php echo $sugar; ?>"/></td>
                </tr>
              </table>
              
              
              <div style="text-align:right; margin:15px;"> 
              	<input type="submit" id="btnSubmit" name="btnSubmit" value="Submit"  class="btn btn-primary" onClick="javascript:return Validate();" />
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

