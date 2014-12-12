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
			xmlhttp.open("GET","<?php echo $strHostName; ?>/manage/includes/checkduplication.inc.php?id="+id+"&tbl=Cities&value="+obj.value, true);
			xmlhttp.send();
		}
	}
	
	
	
	function Validate() {
		if(document.getElementById("txtName").value == "") {
			alert("Please Enter Name....");
			document.getElementById("txtName").focus();
			return false;
		}
	}
</script>

<style>
#grid th
{
	text-align:center;
}

#grid td
{
	text-align:center;
}
</style>

<script type="text/javascript">
function ChangeName()
{	
	if(document.getElementById("ddlKeyIng").value == "Bajra") {
		document.getElementById("txtQuantity").value="40";
		document.getElementById("txtEnergy").value="361";
		document.getElementById("txtCarbohydrate").value="67.5";
		document.getElementById("txtProtein").value="11.6";
		document.getElementById("txtTotalFat").value="5";
		document.getElementById("txtFibre").value="0";
		document.getElementById("txtSodium").value="0";
		document.getElementById("txtPufa").value="0";
		document.getElementById("txtMufa").value="0";
		document.getElementById("txtTransfat").value="0";
		document.getElementById("txtPotassium").value="0";
		document.getElementById("txtVitaminA").value="132";
		document.getElementById("txtVitaminB1").value="0.33";
		document.getElementById("txtVitaminB2").value="0.25";
		document.getElementById("txtVitaminB3").value="2.3";
		document.getElementById("txtVitaminB6").value="0";
		document.getElementById("txtVitaminC").value="0";
		document.getElementById("txtVitaminE").value="0";
		document.getElementById("txtIron").value="8";
		document.getElementById("txtCalcium").value="42";
		document.getElementById("txtZinc").value="0";
		document.getElementById("txtPhosphorous").value="296";
		document.getElementById("txtSugar").value="0";
	}
	
	if(document.getElementById("ddlKeyIng").value == "Barley") {
		document.getElementById("txtQuantity").value="40";
		document.getElementById("txtEnergy").value="336";
		document.getElementById("txtCarbohydrate").value="69.6";
		document.getElementById("txtProtein").value="11.5";
		document.getElementById("txtTotalFat").value="1.3";
		document.getElementById("txtFibre").value="0";
		document.getElementById("txtSodium").value="0";
		document.getElementById("txtPufa").value="0";
		document.getElementById("txtMufa").value="0";
		document.getElementById("txtTransfat").value="0";
		document.getElementById("txtPotassium").value="0";
		document.getElementById("txtVitaminA").value="10";
		document.getElementById("txtVitaminB1").value="0.47";
		document.getElementById("txtVitaminB2").value="0.2";
		document.getElementById("txtVitaminB3").value="5.4";
		document.getElementById("txtVitaminB6").value="0";
		document.getElementById("txtVitaminC").value="0";
		document.getElementById("txtVitaminE").value="0";
		document.getElementById("txtIron").value="1.67";
		document.getElementById("txtCalcium").value="26";
		document.getElementById("txtZinc").value="0";
		document.getElementById("txtPhosphorous").value="296";
		document.getElementById("txtSugar").value="0";
	}
	
	
	if(document.getElementById("ddlKeyIng").value == "Italian millet") {
		document.getElementById("txtQuantity").value="40";
		document.getElementById("txtEnergy").value="331";
		document.getElementById("txtCarbohydrate").value="60.9";
		document.getElementById("txtProtein").value="12.3";
		document.getElementById("txtTotalFat").value="4.3";
		document.getElementById("txtFibre").value="0";
		document.getElementById("txtSodium").value="0";
		document.getElementById("txtPufa").value="0";
		document.getElementById("txtMufa").value="0";
		document.getElementById("txtTransfat").value="0";
		document.getElementById("txtPotassium").value="0";
		document.getElementById("txtVitaminA").value="32";
		document.getElementById("txtVitaminB1").value="0.59";
		document.getElementById("txtVitaminB2").value="0.11";
		document.getElementById("txtVitaminB3").value="3.2";
		document.getElementById("txtVitaminB6").value="0";
		document.getElementById("txtVitaminC").value="0";
		document.getElementById("txtVitaminE").value="0";
		document.getElementById("txtIron").value="2.8";
		document.getElementById("txtCalcium").value="31";
		document.getElementById("txtZinc").value="0";
		document.getElementById("txtPhosphorous").value="290";
		document.getElementById("txtSugar").value="0";
	}
	
	
	
	if(document.getElementById("ddlKeyIng").value == "Jowar") {
		document.getElementById("txtQuantity").value="40";
		document.getElementById("txtEnergy").value="349";
		document.getElementById("txtCarbohydrate").value="72.6";
		document.getElementById("txtProtein").value="10.4";
		document.getElementById("txtTotalFat").value="1.9";
		document.getElementById("txtFibre").value="0";
		document.getElementById("txtSodium").value="0";
		document.getElementById("txtPufa").value="0";
		document.getElementById("txtMufa").value="0";
		document.getElementById("txtTransfat").value="0";
		document.getElementById("txtPotassium").value="0";
		document.getElementById("txtVitaminA").value="47";
		document.getElementById("txtVitaminB1").value="0.37";
		document.getElementById("txtVitaminB2").value="0.13";
		document.getElementById("txtVitaminB3").value="3.1";
		document.getElementById("txtVitaminB6").value="0.21";
		document.getElementById("txtVitaminC").value="0";
		document.getElementById("txtVitaminE").value="0";
		document.getElementById("txtIron").value="4.1";
		document.getElementById("txtCalcium").value="25";
		document.getElementById("txtZinc").value="0";
		document.getElementById("txtPhosphorous").value="222";
		document.getElementById("txtSugar").value="0";
	}
	
}


function ChangeName1()
{	
	if(document.getElementById("ddlKeyIng1").value == "Bajra") {
		document.getElementById("txtQuantity1").value="40";
		document.getElementById("txtEnergy1").value="361";
		document.getElementById("txtCarbohydrate1").value="67.5";
		document.getElementById("txtProtein1").value="11.6";
		document.getElementById("txtTotalFat1").value="5";
		document.getElementById("txtFibre1").value="0";
		document.getElementById("txtSodium1").value="0";
		document.getElementById("txtPufa1").value="0";
		document.getElementById("txtMufa1").value="0";
		document.getElementById("txtTransfat1").value="0";
		document.getElementById("txtPotassium1").value="0";
		document.getElementById("txtVitaminA1").value="132";
		document.getElementById("txtVitaminB11").value="0.33";
		document.getElementById("txtVitaminB21").value="0.25";
		document.getElementById("txtVitaminB31").value="2.3";
		document.getElementById("txtVitaminB61").value="0";
		document.getElementById("txtVitaminC1").value="0";
		document.getElementById("txtVitaminE1").value="0";
		document.getElementById("txtIron1").value="8";
		document.getElementById("txtCalcium1").value="42";
		document.getElementById("txtZinc1").value="0";
		document.getElementById("txtPhosphorous1").value="296";
		document.getElementById("txtSugar1").value="0";
	}
	
	if(document.getElementById("ddlKeyIng1").value == "Barley") {
		document.getElementById("txtQuantity1").value="40";
		document.getElementById("txtEnergy1").value="336";
		document.getElementById("txtCarbohydrate1").value="69.6";
		document.getElementById("txtProtein1").value="11.5";
		document.getElementById("txtTotalFat1").value="1.3";
		document.getElementById("txtFibre1").value="0";
		document.getElementById("txtSodium1").value="0";
		document.getElementById("txtPufa1").value="0";
		document.getElementById("txtMufa1").value="0";
		document.getElementById("txtTransfat1").value="0";
		document.getElementById("txtPotassium1").value="0";
		document.getElementById("txtVitaminA1").value="10";
		document.getElementById("txtVitaminB11").value="0.47";
		document.getElementById("txtVitaminB21").value="0.2";
		document.getElementById("txtVitaminB31").value="5.4";
		document.getElementById("txtVitaminB61").value="0";
		document.getElementById("txtVitaminC1").value="0";
		document.getElementById("txtVitaminE1").value="0";
		document.getElementById("txtIron1").value="1.67";
		document.getElementById("txtCalcium1").value="26";
		document.getElementById("txtZinc1").value="0";
		document.getElementById("txtPhosphorous1").value="296";
		document.getElementById("txtSugar1").value="0";
	}
	
	if(document.getElementById("ddlKeyIng1").value == "Italian millet") {
		document.getElementById("txtQuantity1").value="40";
		document.getElementById("txtEnergy1").value="331";
		document.getElementById("txtCarbohydrate1").value="60.9";
		document.getElementById("txtProtein1").value="12.3";
		document.getElementById("txtTotalFat1").value="4.3";
		document.getElementById("txtFibre1").value="0";
		document.getElementById("txtSodium1").value="0";
		document.getElementById("txtPufa1").value="0";
		document.getElementById("txtMufa1").value="0";
		document.getElementById("txtTransfat1").value="0";
		document.getElementById("txtPotassium1").value="0";
		document.getElementById("txtVitaminA").value="32";
		document.getElementById("txtVitaminB1").value="0.59";
		document.getElementById("txtVitaminB21").value="0.11";
		document.getElementById("txtVitaminB31").value="3.2";
		document.getElementById("txtVitaminB61").value="0";
		document.getElementById("txtVitaminC1").value="0";
		document.getElementById("txtVitaminE1").value="0";
		document.getElementById("txtIron1").value="2.8";
		document.getElementById("txtCalcium1").value="31";
		document.getElementById("txtZinc1").value="0";
		document.getElementById("txtPhosphorous1").value="290";
		document.getElementById("txtSugar1").value="0";
	}
	
	
	
	if(document.getElementById("ddlKeyIng1").value == "Jowar") {
		document.getElementById("txtQuantity1").value="40";
		document.getElementById("txtEnergy1").value="349";
		document.getElementById("txtCarbohydrate1").value="72.6";
		document.getElementById("txtProtein1").value="10.4";
		document.getElementById("txtTotalFat1").value="1.9";
		document.getElementById("txtFibre1").value="0";
		document.getElementById("txtSodium1").value="0";
		document.getElementById("txtPufa1").value="0";
		document.getElementById("txtMufa1").value="0";
		document.getElementById("txtTransfat1").value="0";
		document.getElementById("txtPotassium1").value="0";
		document.getElementById("txtVitaminA1").value="47";
		document.getElementById("txtVitaminB11").value="0.37";
		document.getElementById("txtVitaminB21").value="0.13";
		document.getElementById("txtVitaminB31").value="3.1";
		document.getElementById("txtVitaminB61").value="0.21";
		document.getElementById("txtVitaminC1").value="0";
		document.getElementById("txtVitaminE1").value="0";
		document.getElementById("txtIron1").value="4.1";
		document.getElementById("txtCalcium1").value="25";
		document.getElementById("txtZinc1").value="0";
		document.getElementById("txtPhosphorous1").value="222";
		document.getElementById("txtSugar1").value="0";
	}
}	

function ChangeName2()
{	
	if(document.getElementById("ddlKeyIng2").value == "Bajra") {
		document.getElementById("txtQuantity2").value="40";
		document.getElementById("txtEnergy2").value="361";
		document.getElementById("txtCarbohydrate2").value="67.5";
		document.getElementById("txtProtein2").value="11.6";
		document.getElementById("txtTotalFat2").value="5";
		document.getElementById("txtFibre2").value="0";
		document.getElementById("txtSodium2").value="0";
		document.getElementById("txtPufa2").value="0";
		document.getElementById("txtMufa2").value="0";
		document.getElementById("txtTransfat2").value="0";
		document.getElementById("txtPotassium2").value="0";
		document.getElementById("txtVitaminA2").value="132";
		document.getElementById("txtVitaminB12").value="0.33";
		document.getElementById("txtVitaminB22").value="0.25";
		document.getElementById("txtVitaminB32").value="2.3";
		document.getElementById("txtVitaminB62").value="0";
		document.getElementById("txtVitaminC2").value="0";
		document.getElementById("txtVitaminE2").value="0";
		document.getElementById("txtIron2").value="8";
		document.getElementById("txtCalcium2").value="42";
		document.getElementById("txtZinc2").value="0";
		document.getElementById("txtPhosphorous2").value="296";
		document.getElementById("txtSugar2").value="0";
	}
	
	if(document.getElementById("ddlKeyIng2").value == "Barley") {
		document.getElementById("txtQuantity2").value="40";
		document.getElementById("txtEnergy2").value="336";
		document.getElementById("txtCarbohydrate2").value="69.6";
		document.getElementById("txtProtein2").value="11.5";
		document.getElementById("txtTotalFat2").value="1.3";
		document.getElementById("txtFibre2").value="0";
		document.getElementById("txtSodium2").value="0";
		document.getElementById("txtPufa2").value="0";
		document.getElementById("txtMufa2").value="0";
		document.getElementById("txtTransfat2").value="0";
		document.getElementById("txtPotassium2").value="0";
		document.getElementById("txtVitaminA2").value="10";
		document.getElementById("txtVitaminB12").value="0.47";
		document.getElementById("txtVitaminB22").value="0.2";
		document.getElementById("txtVitaminB32").value="5.4";
		document.getElementById("txtVitaminB62").value="0";
		document.getElementById("txtVitaminC2").value="0";
		document.getElementById("txtVitaminE2").value="0";
		document.getElementById("txtIron2").value="1.67";
		document.getElementById("txtCalcium2").value="26";
		document.getElementById("txtZinc2").value="0";
		document.getElementById("txtPhosphorous2").value="296";
		document.getElementById("txtSugar2").value="0";
	}
	
	if(document.getElementById("ddlKeyIng2").value == "Italian millet") {
		document.getElementById("txtQuantity2").value="40";
		document.getElementById("txtEnergy2").value="331";
		document.getElementById("txtCarbohydrate2").value="60.9";
		document.getElementById("txtProtein2").value="12.3";
		document.getElementById("txtTotalFat2").value="4.3";
		document.getElementById("txtFibre2").value="0";
		document.getElementById("txtSodium2").value="0";
		document.getElementById("txtPufa2").value="0";
		document.getElementById("txtMufa2").value="0";
		document.getElementById("txtTransfat2").value="0";
		document.getElementById("txtPotassium2").value="0";
		document.getElementById("txtVitaminA").value="32";
		document.getElementById("txtVitaminB1").value="0.59";
		document.getElementById("txtVitaminB22").value="0.11";
		document.getElementById("txtVitaminB32").value="3.2";
		document.getElementById("txtVitaminB62").value="0";
		document.getElementById("txtVitaminC2").value="0";
		document.getElementById("txtVitaminE2").value="0";
		document.getElementById("txtIron2").value="2.8";
		document.getElementById("txtCalcium2").value="31";
		document.getElementById("txtZinc2").value="0";
		document.getElementById("txtPhosphorous2").value="290";
		document.getElementById("txtSugar2").value="0";
	}
	
	
	
	if(document.getElementById("ddlKeyIng2").value == "Jowar") {
		document.getElementById("txtQuantity2").value="40";
		document.getElementById("txtEnergy2").value="349";
		document.getElementById("txtCarbohydrate2").value="72.6";
		document.getElementById("txtProtein2").value="10.4";
		document.getElementById("txtTotalFat2").value="1.9";
		document.getElementById("txtFibre2").value="0";
		document.getElementById("txtSodium2").value="0";
		document.getElementById("txtPufa2").value="0";
		document.getElementById("txtMufa2").value="0";
		document.getElementById("txtTransfat2").value="0";
		document.getElementById("txtPotassium2").value="0";
		document.getElementById("txtVitaminA2").value="47";
		document.getElementById("txtVitaminB12").value="0.37";
		document.getElementById("txtVitaminB22").value="0.13";
		document.getElementById("txtVitaminB32").value="3.1";
		document.getElementById("txtVitaminB62").value="0.21";
		document.getElementById("txtVitaminC2").value="0";
		document.getElementById("txtVitaminE2").value="0";
		document.getElementById("txtIron2").value="4.1";
		document.getElementById("txtCalcium2").value="25";
		document.getElementById("txtZinc2").value="0";
		document.getElementById("txtPhosphorous2").value="222";
		document.getElementById("txtSugar2").value="0";
	}
	
}
		

</script>


</head>
<?php 
$keyingid=""; 

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
      <h4><strong><i class="icon-edit"></i>&nbsp; Add Recipe</strong></h4>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <section class="panel">
          <div class="panel-body">
            <form id="form1" name="form1" method="post" enctype="multipart/form-data">
                           	<table width="100%" cellpadding="0" cellspacing="0" border="0" style="display: none;">
                            	<tr>
                                	<td>Recipe Date :</td>
                                    <td><input type="text" id="txtRecipeDate" name="txtRecipeDate" style="width: 50%" value="" class="datepicker" /></td>
                                  <td>Recipe Number :</td>
                                    <td><input type="text" id="txtRecipeNo" name="txtRecipeNo" style="width: 50%" value=""/></td>
                                </tr>
                                <tr>
                                	<td>Recipe Name :</td>
                                    <td><input type="text" id="txtRecipeName" name="txtRecipeName" style="width: 50%" value=""/></td>
                                  <td>Recipe Alternate Name :</td>
                                    <td><input type="text" id="txtRecipeAName" name="txtRecipeAName" style="width: 50%" value=""/></td>
                                </tr>
                            
                               <tr>
                                	<td>Portion :</td>
                                    <td><input type="text" id="txtPortion" name="txtPortion" style="width: 50%" value=""/></td>
                                    <td>Food Ingredients :</td>
                                    <td><input type="text" id="txtFood" name="txtFood" style="width: 50%" value=""/></td>
                                </tr>
                            <tr>
                                	<td>Other Benefits :</td>
                                    <td><input type="text" id="txtOther" name="txtOther" style="width: 50%" value=""/></td>
                                    
                                </tr>
                            
                            </table>
                            
                            <table width="100%" cellpadding="0" cellspacing="0" border="0">
                            	<tr>
                                	<td style="vertical-align: top; padding-top: 10px; width: 13%;">Recipe Name :</td>
                                    <td style="vertical-align: top; padding-top: 10px; width: 20%;"><input type="text" id="txtRecipeNo" name="txtRecipeNo" style="width: 75%" value=""/></td>
                                    <td style="vertical-align: top; padding-top: 10px; width: 10%;"><span style="display: none;">Recipe Number :</span>Portion:</td>
                                    <td style="vertical-align: top; padding-top: 10px; width: 20%;"><span style="display: none;"><input type="text" id="txtRecipeName" name="txtRecipeName" style="width: 75%" value=""/></span><input type="text" id="txtPortion" name="txtPortion" style="width: 75%" value=""/></td>
                                    <td style="vertical-align: top; padding-top: 10px; width: 9%;"><span style="display: none;">Recipe Alternate Name :</span></td>
                                    <td style="vertical-align: top; padding-top: 10px; width: 20%;"><span style="display: none;"><input type="text" id="txtRecipeAName" name="txtRecipeAName" style="width: 75%" value=""/></span></td>
                                </tr>
                                <!--<tr>
                                	<td>Recipe Name :</td>
                                    <td><input type="text" id="txtRecipeName" name="txtRecipeName" style="width: 50%" value=""/></td>
                                    <td>Recipe Alternate Name :</td>
                                    <td><input type="text" id="txtRecipeAName" name="txtRecipeAName" style="width: 50%" value=""/></td>
                                </tr>-->
                            
                               <tr>
                               	 <td style="padding-top: 10px; vertical-align: top;">Recipe Alternate Name : </td>
                                    <td style="padding-top: 10px; vertical-align: top;"><textarea name="txtRecipeAName" id="txtRecipeAName" style="width: 75%;" rows="4"></textarea></td>
                                    <td style="padding-top: 10px; vertical-align: top;">Food Ingredients :</td>
                                    <td style="padding-top: 10px; vertical-align: top;"><textarea name="txtFood" id="txtFood" style="width: 75%;" rows="4"></textarea></td>
                                    <td style="padding-top: 10px; vertical-align: top;">Other Benefits :</td>
                                    <td style="padding-top: 10px; vertical-align: top;"><textarea name="txtOther" id="txtOther" style="width: 75%;" rows="4"></textarea></td>
                                </tr>

                            </table>
                            
                            <table width="100%" border="1" cellspacing="0" cellpadding="0" style="margin-top:30px; text-align:center; font-size: 11px;">
                              <tr>
                                <th style="width:250px; text-align: center; padding: 10px; vertical-align: top;">Key Ingredients </th>
                                <th style="width:80px; text-align: center; padding: 10px 5px; vertical-align: top;">Qty<br />(gm/ml)</th>
                                <th style="width:100px; text-align: center; padding: 10px 5px; vertical-align: top;">Energy<br />(kcal)</th>
                                <th style="width:110px; text-align: center; padding: 10px 5px; vertical-align: top;">Carbo<br />hydrate<br />(g)</th>
                                <th style="width:100px; text-align: center; padding: 10px 5px; vertical-align: top;">Protein<br />(g)</th>
                                <th style="width:100px; text-align: center; padding: 10px 5px; vertical-align: top;">Total Fat<br />(g)</th>
                                <th style="width:100px; text-align: center; padding: 10px 5px; vertical-align: top;">Fibre<br />(g)</th>
                                <th style="width:100px; text-align: center; padding: 10px 5px; vertical-align: top;">Sodium<br />(mg)</th>
                                <th style="width:100px; text-align: center; padding: 10px 5px; vertical-align: top;">Pufa<br /></th>
                                <th style="width:100px; text-align: center; padding: 10px 5px; vertical-align: top;">Mufa</th>
                                <th style="width:100px; text-align: center; padding: 10px 5px; vertical-align: top;">Transfat</th>
                                <th style="width:100px; text-align: center; padding: 10px 5px; vertical-align: top;">Potassium<br />(mg)</th>
                                <th style="width:90px; text-align: center; padding: 10px 5px; vertical-align: top;">Vitamin <br />A<br />(carotene-mcg)  </th>
                                <th style="width:90px; text-align: center; padding: 10px 5px; vertical-align: top;">Vitamin <br />B1<br />(mg)</th>
                                <th style="width:90px; text-align: center; padding: 10px 5px; vertical-align: top;">Vitamin <br />B2<br />(mg)</th>
                                <th style="width:90px; text-align: center; padding: 10px 5px; vertical-align: top;">Vitamin <br />B3<br />(mg)</th>
                                <th style="width:90px; text-align: center; padding: 10px 5px; vertical-align: top;">Vitamin <br />B6<br />(mg)</th>
                                <th style="width:90px; text-align: center; padding: 10px 5px; vertical-align: top;">Vitamin <br />C<br />(mg)</th>
                                <th style="width:90px; text-align: center; padding: 10px 5px; vertical-align: top;">Vitamin <br />E </th>
                                <th style="width:90px; text-align: center; padding: 10px 5px; vertical-align: top;">Iron<br />(mg)</th>
                                <th style="width:90px; text-align: center; padding: 10px 5px; vertical-align: top;">Calcium <br />(mg)</th>
                                <th style="width:90px; text-align: center; padding: 10px 5px; vertical-align: top;">Zinc<br />(mg)</th>
                                <th style="width:90px; text-align: center; padding: 10px 5px; vertical-align: top;">Phosphorous <br />(mg)</th>
                                    <th style="border-right:solid 1px #bbbbbb; width:90px; text-align: center; padding: 10px 5px; vertical-align: top;">Sugar</th>
                          </tr>
                              
                              
                              
                              <tr>
                                <td style="padding: 8px 30px; text-align: center;width:250px;">
                                	<select id="ddlKeyIng" name="ddlKeyIng" style="width:100px;" onChange="javascript:return ChangeName()" data-rel="chosen">
                                        <option value="0">Select</option>
                                        <?php
                                            $query = "SELECT * FROM ".Raw." WHERE isdeleted = 0";
                                            $result = mysql_query($query);
                                            if($result != "") {
                                                $rowcount = mysql_num_rows($result);
                                                if($rowcount > 0) {
                                                    while($row = mysql_fetch_assoc($result)) {
                                                    $id = $row['id'];
                                                    $name = $row['ingredientname'];
                                        ?>
                                        <option value="<?php echo $name; ?>" <?php if ($keyingid == $id) { echo "selected"; } ?> ><?php echo $name; ?></option>
                                        <?php
                                                    }
                                                }
                                            }
                                        ?>
                                    </select>
                                </td>
                                <td style=" padding: 8px 5px; width:80px;">
                               	  <input type="text" name="txtQuantity" id="txtQuantity" value="" style="width: 25px; text-align: left; padding: 0px 3px; font-size: 12px;" />
                                </td>
                                <td style="padding: 8px 5px; width:100px;">
                                	<input type="text" name="txtEnergy" id="txtEnergy" value="" style="width: 25px; text-align: left; padding: 0px 3px; font-size: 12px;" />
                                </td>
                                <td style="padding: 8px 5px; width:110px;">
                                	<input type="text" name="txtCarbohydrate" id="txtCarbohydrate" value="" style="width: 25px; text-align: left; padding: 0px 3px; font-size: 12px;" />
                                </td>
                                <td style="padding: 8px 5px; width:100px;">
                                	<input type="text" name="txtProtein" id="txtProtein" value="" style="width: 25px; text-align: left; padding: 0px 3px; font-size: 12px;" />
                                </td>
                                <td style="padding: 8px 5px; width:100px;">
                                	<input type="text" name="txtTotalFat" id="txtTotalFat" value="" style="width: 25px; text-align: left; padding: 0px 3px; font-size: 12px;" />
                                </td>
                                <td style="padding: 8px 5px; width:100px;">
                                	<input type="text" name="txtFibre" id="txtFibre" value="" style="width: 25px; text-align: left; padding: 0px 3px; font-size: 12px;" />
                                </td>
                                <td style="padding: 8px 5px; width:100px;">
                                	<input type="text" name="txtSodium" id="txtSodium" value="" style="width: 25px; text-align: left; padding: 0px 3px; font-size: 12px;" />
                                </td>
                                <td style="padding: 8px 5px; width:100px;">
                                	<input type="text" name="txtPufa" id="txtPufa" value="" style="width: 25px; text-align: left; padding: 0px 3px; font-size: 12px;" />
                                </td>
                                <td style="padding: 8px 5px; width:100px;">
                                	<input type="text" name="txtMufa" id="txtMufa" value="" style="width: 25px; text-align: left; padding: 0px 3px; font-size: 12px;" />
                                </td>
                                <td style="padding: 8px 5px; width:100px;">
                                	<input type="text" name="txtTransfat" id="txtTransfat" value="" style="width: 25px; text-align: left; padding: 0px 3px; font-size: 12px;" />
                                </td>
                                <td style="padding: 8px 5px; width:100px;">
                                	<input type="text" name="txtPotassium" id="txtPotassium" value="" style="width: 25px; text-align: left; padding: 0px 3px; font-size: 12px;" />
                                </td>
                                <td style="padding: 8px 5px; width:90px;">
                                	<input type="text" name="txtVitaminA" id="txtVitaminA" value="" style="width: 25px; text-align: left; padding: 0px 3px; font-size: 12px;" />
                                </td>
                                <td style="padding: 8px 5px;width:90px;">
                                	<input type="text" name="txtVitaminB1" id="txtVitaminB1" value="" style="width: 25px; text-align: left; padding: 0px 3px; font-size: 12px;" />
                                </td>
                                <td style="padding: 8px 5px;width:90px;">
                                	<input type="text" name="txtVitaminB2" id="txtVitaminB2" value="" style="width: 25px; text-align: left; padding: 0px 3px; font-size: 12px;" />
                                </td>
                                <td style="padding: 8px 5px;width:90px;">
                                	<input type="text" name="txtVitaminB3" id="txtVitaminB3" value="" style="width: 25px; text-align: left; padding: 0px 3px; font-size: 12px;" />
                                </td>
                                <td style="padding: 8px 5px;width:90px;">
                                	<input type="text" name="txtVitaminB6" id="txtVitaminB6" value="" style="width: 25px; text-align: left; padding: 0px 3px; font-size: 12px;" />
                                </td>
                                <td style="padding: 8px 5px;width:90px;">
                                	<input type="text" name="txtVitaminC" id="txtVitaminC" value="" style="width: 25px; text-align: left; padding: 0px 3px; font-size: 12px;" />
                                </td>
                                <td style="padding: 8px 5px;width:90px;">
                                	<input type="text" name="txtVitaminE" id="txtVitaminE" value="" style="width: 25px; text-align: left; padding: 0px 3px; font-size: 12px;" />
                                </td>
                                <td style="padding: 8px 5px;width:90px;">
                                	<input type="text" name="txtIron" id="txtIron" value="" style="width: 25px; text-align: left; padding: 0px 3px; font-size: 12px;" />
                                </td>
                                <td style="padding: 8px 5px;width:90px;">
                                	<input type="text" name="txtCalcium" id="txtCalcium" value="" style="width: 25px; text-align: left; padding: 0px 3px; font-size: 12px;" />
                                </td>
                                <td style="padding: 8px 5px;width:90px;">
                                	<input type="text" name="txtZinc" id="txtZinc" value="" style="width: 25px; text-align: left; padding: 0px 3px; font-size: 12px;" />
                                </td>
                                <td style="padding: 8px 5px;width:90px;">
                                	<input type="text" name="txtPhosphorous" id="txtPhosphorous" value="" style="width: 25px; text-align: left; padding: 0px 3px; font-size: 12px;" />
                                </td>
                                <td style="border-right:solid 1px #bbbbbb; padding: 8px 5px; width:90px;">
                                	<input type="text" name="txtSugar" id="txtSugar" value="" style="width: 25px; text-align: left; padding: 0px 3px; font-size: 12px;" />
                                </td>
                              </tr>
                              
                         	  <tr>
                                <td style="padding: 8px 0px; text-align: center;">
                                	<select id="ddlKeyIng1" name="ddlKeyIng1" style="width:100px;" onChange="javascript:return ChangeName1()"  data-rel="chosen">
                                        <option value="0">Select</option>
                                        <?php
                                            $query = "SELECT * FROM ".Raw." WHERE isdeleted = 0";
                                            $result = mysql_query($query);
                                            if($result != "") {
                                                $rowcount = mysql_num_rows($result);
                                                if($rowcount > 0) {
                                                    while($row = mysql_fetch_assoc($result)) {
                                                    $id = $row['id'];
                                                    $name = $row['ingredientname'];
                                        ?>
                                        <option value="<?php echo $name; ?>" <?php if ($keyingid == $id) { echo "selected"; } ?> ><?php echo $name; ?></option>
                                        <?php
                                                    }
                                                }
                                            }
                                        ?>
                                    </select>
                                </td>
                                <td>
                                	<input type="text" name="txtQuantity1" id="txtQuantity1" value="" style="width: 25px; text-align: left; padding: 0px 3px; font-size: 12px;" />
                                </td>
                                <td>
                                	<input type="text" name="txtEnergy1" id="txtEnergy1" value="" style="width: 25px; text-align: left; padding: 0px 3px; font-size: 12px;" />
                                </td>
                                <td>
                                	<input type="text" name="txtCarbohydrate1" id="txtCarbohydrate1" value="" style="width: 25px; text-align: left; padding: 0px 3px; font-size: 12px;" />
                                </td>
                                <td>
                                	<input type="text" name="txtProtein1" id="txtProtein1" value="" style="width: 25px; text-align: left; padding: 0px 3px; font-size: 12px;" />
                                </td>
                                <td>
                                	<input type="text" name="txtTotalFat1" id="txtTotalFat1" value="" style="width: 25px; text-align: left; padding: 0px 3px; font-size: 12px;" />
                                </td>
                                <td>
                                	<input type="text" name="txtFibre1" id="txtFibre1" value="" style="width: 25px; text-align: left; padding: 0px 3px; font-size: 12px;" />
                                </td>
                                <td>
                                	<input type="text" name="txtSodium1" id="txtSodium1" value="" style="width: 25px; text-align: left; padding: 0px 3px; font-size: 12px;" />
                                </td>
                                <td>
                                	<input type="text" name="txtPufa1" id="txtPufa1" value="" style="width: 25px; text-align: left; padding: 0px 3px; font-size: 12px;" />
                                </td>
                                <td>
                                	<input type="text" name="txtMufa1" id="txtMufa1" value="" style="width: 25px; text-align: left; padding: 0px 3px; font-size: 12px;" />
                                </td>
                                <td>
                                	<input type="text" name="txtTransfat1" id="txtTransfat1" value="" style="width: 25px; text-align: left; padding: 0px 3px; font-size: 12px;" />
                                </td>
                                <td>
                                	<input type="text" name="txtPotassium1" id="txtPotassium1" value="" style="width: 25px; text-align: left; padding: 0px 3px; font-size: 12px;" />
                                </td>
                                <td>
                                	<input type="text" name="txtVitaminA1" id="txtVitaminA1" value="" style="width: 25px; text-align: left; padding: 0px 3px; font-size: 12px;" />
                                </td>
                                <td>
                                	<input type="text" name="txtVitaminB11" id="txtVitaminB11" value="" style="width: 25px; text-align: left; padding: 0px 3px; font-size: 12px;" />
                                </td>
                                <td>
                                	<input type="text" name="txtVitaminB21" id="txtVitaminB21" value="" style="width: 25px; text-align: left; padding: 0px 3px; font-size: 12px;" />
                                </td>
                                <td>
                                	<input type="text" name="txtVitaminB31" id="txtVitaminB31" value="" style="width: 25px; text-align: left; padding: 0px 3px; font-size: 12px;" />
                                </td>
                                <td>
                                	<input type="text" name="txtVitaminB61" id="txtVitaminB61" value="" style="width: 25px; text-align: left; padding: 0px 3px; font-size: 12px;" />
                                </td>
                                <td>
                                	<input type="text" name="txtVitaminC1" id="txtVitaminC1" value="" style="width: 25px; text-align: left; padding: 0px 3px; font-size: 12px;" />
                                </td>
                                <td>
                                	<input type="text" name="txtVitaminE1" id="txtVitaminE1" value="" style="width: 25px; text-align: left; padding: 0px 3px; font-size: 12px;" />
                                </td>
                                <td>
                                	<input type="text" name="txtIron1" id="txtIron1" value="" style="width: 25px; text-align: left; padding: 0px 3px; font-size: 12px;" />
                                </td>
                                <td>
                                	<input type="text" name="txtCalcium1" id="txtCalcium1" value="" style="width: 25px; text-align: left; padding: 0px 3px; font-size: 12px;" />
                                </td>
                                <td>
                                	<input type="text" name="txtZinc1" id="txtZinc1" value="" style="width: 25px; text-align: left; padding: 0px 3px; font-size: 12px;" />
                                </td>
                                
                                <td>
                                	<input type="text" name="txtPhosphorous1" id="txtPhosphorous1" value="" style="width: 25px; text-align: left; padding: 0px 3px; font-size: 12px;" />
                                </td>
                                <td style="border-right:solid 1px #bbbbbb;">
                                	<input type="text" name="txtSugar1" id="txtSugar1" value="" style="width: 25px; text-align: left; padding: 0px 3px; font-size: 12px;" />
                                </td>
                              </tr>
                              
                              
                              
                              <tr>
    <td style="padding: 8px 0px; text-align: center;">
        <select id="ddlKeyIng2" name="ddlKeyIng2" style="width:100px;" onChange="javascript:return ChangeName2()"  data-rel="chosen">
            <option value="0">Select</option>
            <?php
                $query = "SELECT * FROM ".Raw." WHERE isdeleted = 0";
                $result = mysql_query($query);
                if($result != "") {
                    $rowcount = mysql_num_rows($result);
                    if($rowcount > 0) {
                        while($row = mysql_fetch_assoc($result)) {
                        $id = $row['id'];
                        $name = $row['ingredientname'];
            ?>
            <option value="<?php echo $name; ?>" <?php if ($keyingid == $id) { echo "selected"; } ?> ><?php echo $name; ?></option>
            <?php
                        }
                    }
                }
            ?>
        </select>
    </td>
    <td>
        <input type="text" name="txtQuantity2" id="txtQuantity2" value="" style="width: 25px; text-align: left; padding: 0px 3px; font-size: 12px;" />
    </td>
    <td>
        <input type="text" name="txtEnergy2" id="txtEnergy2" value="" style="width: 25px; text-align: left; padding: 0px 3px; font-size: 12px;" />
    </td>
    <td>
        <input type="text" name="txtCarbohydrate2" id="txtCarbohydrate2" value="" style="width: 25px; text-align: left; padding: 0px 3px; font-size: 12px;" />
    </td>
    <td>
        <input type="text" name="txtProtein2" id="txtProtein2" value="" style="width: 25px; text-align: left; padding: 0px 3px; font-size: 12px;" />
    </td>
    <td>
        <input type="text" name="txtTotalFat2" id="txtTotalFat2" value="" style="width: 25px; text-align: left; padding: 0px 3px; font-size: 12px;" />
    </td>
    <td>
        <input type="text" name="txtFibre2" id="txtFibre2" value="" style="width: 25px; text-align: left; padding: 0px 3px; font-size: 12px;" />
    </td>
    <td>
        <input type="text" name="txtSodium2" id="txtSodium2" value="" style="width: 25px; text-align: left; padding: 0px 3px; font-size: 12px;" />
    </td>
    <td>
        <input type="text" name="txtPufa2" id="txtPufa2" value="" style="width: 25px; text-align: left; padding: 0px 3px; font-size: 12px;" />
    </td>
    <td>
        <input type="text" name="txtMufa2" id="txtMufa2" value="" style="width: 25px; text-align: left; padding: 0px 3px; font-size: 12px;" />
    </td>
    <td>
        <input type="text" name="txtTransfat2" id="txtTransfat2" value="" style="width: 25px; text-align: left; padding: 0px 3px; font-size: 12px;" />
    </td>
    <td>
        <input type="text" name="txtPotassium2" id="txtPotassium2" value="" style="width: 25px; text-align: left; padding: 0px 3px; font-size: 12px;" />
    </td>
    <td>
        <input type="text" name="txtVitaminA2" id="txtVitaminA2" value="" style="width: 25px; text-align: left; padding: 0px 3px; font-size: 12px;" />
    </td>
    <td>
        <input type="text" name="txtVitaminB22" id="txtVitaminB12" value="" style="width: 25px; text-align: left; padding: 0px 3px; font-size: 12px;" />
    </td>
    <td>
        <input type="text" name="txtVitaminB22" id="txtVitaminB22" value="" style="width: 25px; text-align: left; padding: 0px 3px; font-size: 12px;" />
    </td>
    <td>
        <input type="text" name="txtVitaminB32" id="txtVitaminB32" value="" style="width: 25px; text-align: left; padding: 0px 3px; font-size: 12px;" />
    </td>
    <td>
        <input type="text" name="txtVitaminB62" id="txtVitaminB62" value="" style="width: 25px; text-align: left; padding: 0px 3px; font-size: 12px;" />
    </td>
    <td>
        <input type="text" name="txtVitaminC2" id="txtVitaminC2" value="" style="width: 25px; text-align: left; padding: 0px 3px; font-size: 12px;" />
    </td>
    <td>
        <input type="text" name="txtVitaminE2" id="txtVitaminE2" value="" style="width: 25px; text-align: left; padding: 0px 3px; font-size: 12px;" />
    </td>
    <td>
        <input type="text" name="txtIron2" id="txtIron2" value="" style="width: 25px; text-align: left; padding: 0px 3px; font-size: 12px;" />
    </td>
    <td>
        <input type="text" name="txtCalcium2" id="txtCalcium2" value="" style="width: 25px; text-align: left; padding: 0px 3px; font-size: 12px;" />
    </td>
    <td>
        <input type="text" name="txtZinc2" id="txtZinc2" value="" style="width: 25px; text-align: left; padding: 0px 3px; font-size: 12px;" />
    </td>
    
    <td>
        <input type="text" name="txtPhosphorous2" id="txtPhosphorous2" value="" style="width: 25px; text-align: left; padding: 0px 3px; font-size: 12px;" />
    </td>
    <td style="border-right:solid 1px #bbbbbb;">
        <input type="text" name="txtSugar2" id="txtSugar2" value="" style="width: 25px; text-align: left; padding: 0px 3px; font-size: 12px;" />
    </td>
  </tr>
                              
                            </table>
                            

            			</form>
          </div>
        </section>
        
      </div>
      
    </div>
    <?php include "includes/footer.inc.php"?>

  </section>
  
</section>
<!-- footer -->
<!-- / footer-->


</body>
</html>

