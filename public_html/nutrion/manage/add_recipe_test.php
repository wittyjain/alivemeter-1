<?php include "../includes/common.inc.php"?>
<?php include "includes/links.inc.php"?>
<link href="ckeditor/_samples/sample.css" rel="stylesheet" type="text/css" />
<style type="text/css" title="currentStyle">
			@import "media/css/demo_page.css";
			@import "media/css/demo_table_jui.css";
			@import "media/smoothness/jquery-ui-1.8.4.custom.css";
		</style>

<script src="<?php echo $strHostName?>/manage/js/jquery.ui.core.js"></script>
<script src="<?php echo $strHostName?>/manage/js/jquery.ui.widget.js"></script>
<script src="<?php echo $strHostName?>/manage/js/jquery.ui.position.js"></script>
<script src="<?php echo $strHostName?>/manage/js/jquery.ui.menu.js"></script>
<script src="<?php echo $strHostName?>/manage/js/jquery.ui.autocomplete.js"></script>

		<!--<script type="text/javascript" charset="utf-8" src="media/js/jquery.js"></script>
		<script type="text/javascript" charset="utf-8" src="media/js/jquery.dataTables.js"></script> -->
		<script type="text/javascript" charset="utf-8" src="media/js/FixedColumns.js"></script>
		<script type="text/javascript" charset="utf-8">
			/*madhu"sScrollXInner": "160%",*/
$(document).ready( function () {
				var oTable = $('#example').dataTable( {
					"bJQueryUI": true,
					"sScrollY": "580px",
					"sScrollX": "150%",					
					"bScrollCollapse": true,
					"bPaginate": false,
					"bSort":false,
					"bFilter":false,
					"bInfo":false,
					
				} );
				new FixedColumns( oTable, {"iLeftColumns": 3}  );
				 
			} );

		$(function() {

		for(i=1;i < 20;i++){
		$("#ddlKeyIng"+i).autocomplete({
			source:"search_autocomplete.php?type=key",
			minLength: 2,
			select: function( event, ui ) {
				if(ui.item.id=="0" || ui.item.id=="")
				{
					 var key_id = $(this).attr('id').replace('ddlKeyIng','');
					 document.getElementById("ddlKeyIngID"+key_id).value=0;
				}
				else
				{
					 var key_id = $(this).attr('id').replace('ddlKeyIng','');
					 alert(ui.item.id);
					 alert($(this).attr('id'));
					 document.getElementById("ddlKeyIngID"+key_id).value=ui.item.id;
					//window.location.href=$("#txtName").val()+ui.item.value;
				}
			}
			
		});
		}
		
	});
	/*madhu*/

		</script>
<script language="javascript" type="text/javascript">
function ShowRows()
{
	var iLoop=document.getElementById("txtAddRow").value;
	iLoop=parseFloat(iLoop);
	iLoop=iLoop+1;
	for(i=iLoop;i < 20;i++){
		document.getElementById("trGrade"+i).style.display='none';
		document.getElementById("trGrade"+i).style.display='none';
	}
}
function AddRow()
{
	var i=document.getElementById("txtAddRow").value;
	i=parseFloat(i);
	i=i+1;
	document.getElementById("txtAddRow").value=i;
	document.getElementById("trGrade"+i).style.display='';
	document.getElementById("ddlKeyIng"+i).focus();
	
}
function CalculateAll()
{

	 var totalqty=0;totalenergy1=0;totalcarbo1=0;totalprotein1=0;totaltotal_fat1=0;totalfibre1=0;totalsodium1=0;totalpufa1=0;
	totalmufa1=0;totaltransfat1=0;totalpotassium1=0;totalvt_a1=0;totalvt_b11=0;totalvt_b21=0;totalvt_b31=0;totalvt_b61=0;totalvt_c1=0;totalvt_e1=0;totaliron1=0;totalcalcium1=0;totalzinc1=0;totalphosphorous1=0;totalsugar1=0;


	totalqty=parseFloat(totalqty);	totalenergy1=parseFloat(totalenergy1);	totalcarbo1=parseFloat(totalcarbo1);
	totalprotein1=parseFloat(totalprotein1);	totaltotal_fat1=parseFloat(totaltotal_fat1);	totalfibre1=parseFloat(totalfibre1);
	totalsodium1=parseFloat(totalsodium1);	totalpufa1=parseFloat(totalpufa1);	totalmufa1=parseFloat(totalmufa1);
	totaltransfat1=parseFloat(totaltransfat1);totalpotassium1=parseFloat(totalpotassium1);totalvt_a1=parseFloat(totalvt_a1);	totalvt_b11=parseFloat(totalvt_b11);	totalvt_b21=parseFloat(totalvt_b21);	totalvt_b31=parseFloat(totalvt_b31);	totalvt_b61=parseFloat(totalvt_b61);	totalvt_c1=parseFloat(totalvt_c1);	totalvt_e1=parseFloat(totalvt_e1);	totaliron1=parseFloat(totaliron1);	totalcalcium1=parseFloat(totalcalcium1);	totalzinc1=parseFloat(totalzinc1);	totalphosphorous1=parseFloat(totalphosphorous1);	totalsugar1=parseFloat(totalsugar1);


	for (i=1;i < 20 ;i++ )
	{
		totalqty=totalqty + parseFloat(document.getElementById("txtQuantity"+i).value);
		totalenergy1=totalenergy1 + parseFloat(document.getElementById("txtEnergy"+i).value);
		totalcarbo1=totalcarbo1 + parseFloat(document.getElementById("txtCarbohydrate"+i).value);
		totalprotein1=totalprotein1 + parseFloat(document.getElementById("txtProtein"+i).value);
		totaltotal_fat1=totaltotal_fat1 + parseFloat(document.getElementById("txtTotalFat"+i).value);
		totalfibre1=totalfibre1 + parseFloat(document.getElementById("txtFibre"+i).value);
		totalsodium1=totalsodium1 + parseFloat(document.getElementById("txtSodium"+i).value);
		totalpufa1=totalpufa1 + parseFloat(document.getElementById("txtPufa"+i).value);
		totalmufa1=totalmufa1 + parseFloat(document.getElementById("txtMufa"+i).value);
		totaltransfat1=totaltransfat1 + parseFloat(document.getElementById("txtTransfat"+i).value);
		totalpotassium1=totalpotassium1 + parseFloat(document.getElementById("txtPotassium"+i).value);
		totalvt_a1=totalvt_a1 + parseFloat(document.getElementById("txtVitaminA"+i).value);
		totalvt_b11=totalvt_b11 + parseFloat(document.getElementById("txtVitaminB1"+i).value);
		totalvt_b21=totalvt_b21 + parseFloat(document.getElementById("txtVitaminB2"+i).value);
		totalvt_b31=totalvt_b31 + parseFloat(document.getElementById("txtVitaminB3"+i).value);
		totalvt_b61=totalvt_b61 + parseFloat(document.getElementById("txtVitaminB6"+i).value);
		totalvt_c1=totalvt_c1 + parseFloat(document.getElementById("txtVitaminC"+i).value);
		totalvt_e1=totalvt_e1 + parseFloat(document.getElementById("txtVitaminE"+i).value);
		totaliron1=totaliron1 + parseFloat(document.getElementById("txtIron"+i).value);
		totalcalcium1=totalcalcium1 + parseFloat(document.getElementById("txtCalcium"+i).value);
		totalzinc1=totalzinc1 + parseFloat(document.getElementById("txtZinc"+i).value);
		totalphosphorous1=totalphosphorous1 + parseFloat(document.getElementById("txtPhosphorous"+i).value);
		totalsugar1=totalsugar1 + parseFloat(document.getElementById("txtSugar"+i).value);

	}


		document.getElementById("spTotalQty").innerHTML=totalqty.toFixed(2);
		document.getElementById("spTotalEnergy").innerHTML=Math.round(totalenergy1.toFixed(2));
		document.getElementById("spTotalCarbo").innerHTML=totalcarbo1.toFixed(2);
		document.getElementById("spTotalProtein").innerHTML=totalprotein1.toFixed(2);
		document.getElementById("spTotalFat").innerHTML=totaltotal_fat1.toFixed(2);
		document.getElementById("spTotalFibre").innerHTML=totalfibre1.toFixed(2);
		document.getElementById("spTotalSodium").innerHTML=totalsodium1.toFixed(2);
		document.getElementById("spTotalPufa").innerHTML=totalpufa1.toFixed(2);
		document.getElementById("spTotalMufa").innerHTML=totalmufa1.toFixed(2);
		document.getElementById("spTotalTransfat").innerHTML=totaltransfat1.toFixed(2);
		document.getElementById("spTotalPotassium").innerHTML=totalpotassium1.toFixed(2);
		document.getElementById("spTotalVTA").innerHTML=totalvt_a1.toFixed(2);
		document.getElementById("spTotalVTB1").innerHTML=totalvt_b11.toFixed(2);
		document.getElementById("spTotalVTB2").innerHTML=totalvt_b21.toFixed(2);
		document.getElementById("spTotalVTB3").innerHTML=totalvt_b31.toFixed(2);
		document.getElementById("spTotalVTB6").innerHTML=totalvt_b61.toFixed(2);
		document.getElementById("spTotalVTC1").innerHTML=totalvt_c1.toFixed(2);
		document.getElementById("spTotalVTE1").innerHTML=totalvt_e1.toFixed(2);
		document.getElementById("spTotalIron").innerHTML=totaliron1.toFixed(2);
		document.getElementById("spTotalCalcium").innerHTML=totalcalcium1.toFixed(2);
		document.getElementById("spTotalZinc").innerHTML=totalzinc1.toFixed(2);
		document.getElementById("spTotalPhosphorous").innerHTML=totalphosphorous1.toFixed(2);
		document.getElementById("spTotalSugar").innerHTML=totalsugar1.toFixed(2);


}
function RetriveAllValues(i)
{

	var ingValue=document.getElementById("ddlKeyIngID"+i).value;
	var Qty=document.getElementById("txtQuantity"+i).value;
	 
	if (ingValue!="" && ingValue > 0 && Qty !="" && Qty > 0)
	{
	
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
					//document.getElementById("txtMembershipAmount").value = xmlhttp.responseText;
					var str = xmlhttp.responseText;
					var return_data = str.split('#');
					document.getElementById("txtEnergy"+i).value=Math.round(((return_data[4]/100)*Qty));
					document.getElementById("txtCarbohydrate"+i).value=((return_data[5]/100)*Qty);
					document.getElementById("txtProtein"+i).value=((return_data[6]/100)*Qty);
					document.getElementById("txtTotalFat"+i).value=((return_data[7]/100)*Qty);
					document.getElementById("txtFibre"+i).value=((return_data[8]/100)*Qty);
					document.getElementById("txtSodium"+i).value=((return_data[9]/100)*Qty);
					document.getElementById("txtPufa"+i).value=((return_data[10]/100)*Qty);
					document.getElementById("txtMufa"+i).value=((return_data[11]/100)*Qty);
					document.getElementById("txtTransfat"+i).value=((return_data[12]/100)*Qty);
					document.getElementById("txtPotassium"+i).value=((return_data[12]/100)*Qty);
					document.getElementById("txtVitaminA"+i).value=((return_data[14]/100)*Qty);
					document.getElementById("txtVitaminB1"+i).value=((return_data[15]/100)*Qty);
					document.getElementById("txtVitaminB2"+i).value=((return_data[16]/100)*Qty);
					document.getElementById("txtVitaminB3"+i).value=((return_data[17]/100)*Qty);
					document.getElementById("txtVitaminB6"+i).value=((return_data[18]/100)*Qty);
					document.getElementById("txtVitaminC"+i).value=((return_data[19]/100)*Qty);
					document.getElementById("txtVitaminE"+i).value=((return_data[20]/100)*Qty);
					document.getElementById("txtIron"+i).value=((return_data[21]/100)*Qty);
					document.getElementById("txtCalcium"+i).value=((return_data[22]/100)*Qty);
					document.getElementById("txtZinc"+i).value=((return_data[23]/100)*Qty);
					document.getElementById("txtPhosphorous"+i).value=((return_data[24]/100)*Qty);
					document.getElementById("txtSugar"+i).value=((return_data[25]/100)*Qty);
					CalculateAll();
				}
			}
			xmlhttp.open("GET","<?php echo $strHostName; ?>/manage/includes/retrivevalues.inc.php?name="+ingValue,true);
			xmlhttp.send();
	}
}
function GetIngValue(i)
	{

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
				//document.getElementById("txtMembershipAmount").value = xmlhttp.responseText;
				var str = xmlhttp.responseText;
				if(str=="false")
				{
					//document.getElementById("ddlKeyIng"+i).value="";
						document.getElementById("ddlKeyIngID"+i).value="0";
						document.getElementById("txtQuantity"+i).value="0";
						document.getElementById("txtEnergy"+i).value="0";
						document.getElementById("txtCarbohydrate"+i).value="0";
						document.getElementById("txtProtein"+i).value="0";
						document.getElementById("txtTotalFat"+i).value="0";
						document.getElementById("txtFibre"+i).value="0";
						document.getElementById("txtSodium"+i).value="0";
						document.getElementById("txtPufa"+i).value="0";
						document.getElementById("txtMufa"+i).value="0";
						document.getElementById("txtTransfat"+i).value="0";
						document.getElementById("txtPotassium"+i).value="0";
						document.getElementById("txtVitaminA"+i).value="0";
						document.getElementById("txtVitaminB1"+i).value="0";
						document.getElementById("txtVitaminB2"+i).value="0";
						document.getElementById("txtVitaminB3"+i).value="0";
						document.getElementById("txtVitaminB6"+i).value="0";
						document.getElementById("txtVitaminC"+i).value="0";
						document.getElementById("txtVitaminE"+i).value="0";
						document.getElementById("txtIron"+i).value="0";
						document.getElementById("txtCalcium"+i).value="0";
						document.getElementById("txtZinc"+i).value="0";
						document.getElementById("txtPhosphorous"+i).value="0";
						document.getElementById("txtSugar"+i).value="0";
						CalculateAll();
				}
				else
				{
					document.getElementById("ddlKeyIngID"+i).value=str;
					RetriveAllValues(i);
				}
				//document.getElementById("tdMembershipCost").innerHTML = xmlhttp.responseText;
			}
		}
		keyname=document.getElementById("ddlKeyIng"+i).value;
		xmlhttp.open("GET","<?php echo $strHostName; ?>/manage/includes/get_name.inc.php?type=ing&name="+keyname,true);
		xmlhttp.send();
	}


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
		if(document.getElementById("txtRecipeName").value == "") {
				alert("Please Enter Recipe Name....");
				document.getElementById("txtRecipeName").focus();
				return false;
			}
		
		if (confirm("Are you sure you want to submit this record?"))
		{
			return true;
		}
		else
		{
			return false;
		}
		
	}
	
	



</script>
 



</head>
<?php 
$strReciptName="";$portion="";$alt_name="";$food_ing="";$other_benefits="";$id="";$rece_id="0";
$qty="0";$energy="0";$carbo="0";$protein="0";$total_fat="0";$fibre="0";$sodium="0";$pufa="0";$mufa="0";$transfat="0";
$potassium="0";$vt_a="0";$vt_b1="0";$vt_b2="0";$vt_b3="0";$vt_b6="0";$vt_c="0";$vt_e="0";$iron="0";$calcium="0";
$zinc="0";$phosphorous="0";$sugar="0";$key_name="";$key_id="0";$isdeleted="0";$iRow=7;
$totalqty1="0";$totalenergy1="0";$totalcarbo1="0";
$totalprotein1="0";$totaltotal_fat1="0";$totalfibre1="0";$totalsodium1="0";$totalpufa1="0";$totalmufa1="0";$totaltransfat1="0";
$totalpotassium1="0";$totalvt_a1="0";$totalvt_b11="0";$totalvt_b21="0";$totalvt_b31="0";$totalvt_b61="0";$totalvt_c1="0";
$totalvt_e1="0";$totaliron1="0";$totalcalcium1="0";$totalzinc1="0";$totalphosphorous1="0";$totalsugar1="0";

$approved="0";$approved_by="0";$message="";


if(isset($_GET['cid'])) {
	$id = $converter->decode($_GET['cid']);
}

if (isset($_POST['btnSubmit'])) {
 
	$strReciptName = trim(str_replace("'", "", $_POST['txtRecipeName']));
	$portion = trim(str_replace("'", "", $_POST['txtPortion']));
	$alt_name = trim(str_replace("'", "", $_POST['txtRecipeAltName']));
	$food_ing = trim(str_replace("'", "", $_POST['txtFood']));
	$other_benefits = trim(str_replace("'", "", $_POST['txtOther']));
	if(isset($_POST['chkIsDeleted']))
	{
		$isdeleted = $_POST['chkIsDeleted'];
	}

	if($isdeleted == "on") {
		$isdeleted = 1;
	} else {
		$isdeleted = 0;
	}
	 
	$data = array(
		'name' => $strReciptName,
		'portion' => $portion,
		'alt_name' => $alt_name,
		'food_ing' => $food_ing,
		'other_benefits' => $other_benefits,
		'isdeleted' => $isdeleted,
	 );

		if($id == "") {
			$id = $db->insert_array(Recipe, $data);
			$rece_id=$id;
			$query = "update ".Recipe." set date=CURDATE(),user_id=".$_SESSION['login_id']." where id=".$id;
			$result = mysql_query($query);
			
			$modeofpage="add";
			if (!$id) { 
				$db->print_last_error(false);
			} else {
				//AlertandRedirect('New Celebrity details are added successfully',  "addcelebrity.php?menu_type=".$_GET['menu_type']);
			}

	} else {
			$rows = $db->update_array(Recipe, $data, "id = $id");
			$rece_id=$id;

			$modeofpage="edit";

			if (!$rows) {
				$db->print_last_error(false);
			} else {
				if ($rows > 0) {
					//AlertandRedirect('Celebrity details are edited successfully', "viewcelebrity.php?menu_type=".$_GET['menu_type']);
				}
			}
	}
	

	if($_SESSION['login_type']=="Moderator"){ 
			if(isset($_POST['chkApprove']))
			{
				$Approved=$_POST['chkApprove'];
			}
			if($Approved=="on")
			{
				$Approved="1";
			}
			else
			{
				$Approved="0";
			}
			$message=$_POST['txtMessage'];
			$data = array(
				'Approved' => $Approved,
				'message' => $message,
				'approved_by' => $_SESSION['login_id'],
			);
			$rows = $db->update_array(Recipe, $data, "id = $id");
	}

	$query="delete from ".Recipe_Det." where parent_id=".$rece_id;
	$result = mysql_query($query);

	for($i=1;$i<20;$i++)
	{
			
			
			$key_id=$_POST['ddlKeyIngID'.$i];
			if($key_id!="" && $key_id!="0")
			{	

				$qty=$_POST['txtQuantity'.$i];$energy=$_POST['txtEnergy'.$i];$carbo=$_POST['txtCarbohydrate'.$i];
				$protein=$_POST['txtProtein'.$i];$total_fat=$_POST['txtTotalFat'.$i];$fibre=$_POST['txtFibre'.$i];
				$sodium=$_POST['txtSodium'.$i];$pufa=$_POST['txtPufa'.$i];$mufa=$_POST['txtMufa'.$i];
				$transfat=$_POST['txtTransfat'.$i];$potassium=$_POST['txtPotassium'.$i];$vt_a=$_POST['txtVitaminA'.$i];
				$vt_b1=$_POST['txtVitaminB1'.$i];$vt_b2=$_POST['txtVitaminB2'.$i];$vt_b3=$_POST['txtVitaminB3'.$i];
				$vt_b6=$_POST['txtVitaminB6'.$i];$vt_c=$_POST['txtVitaminC'.$i];$vt_e=$_POST['txtVitaminE'.$i];$iron=$_POST['txtIron'.$i];
				$calcium=$_POST['txtCalcium'.$i];$zinc=$_POST['txtZinc'.$i];$phosphorous=$_POST['txtPhosphorous'.$i];
				$sugar=$_POST['txtSugar'.$i];
				$data = array(
					'parent_id' =>  $rece_id,
					'user_id'=>0,
					'key_id' =>$key_id,
					 'qty' =>$qty,
					 'energy' =>$energy, 
					 'carbo' =>$carbo, 
					 'protein' =>$protein, 
					 'total_fat' =>$total_fat, 
					 'fibre' =>$fibre, 
					 'sodium' =>$sodium, 
					 'pufa' =>$pufa, 
					 'mufa' =>$mufa, 
					 'transfat' =>$transfat, 
					 'potassium' =>$potassium, 
					 'vt_a' =>$vt_a, 
					 'vt_b1' =>$vt_b1, 
					 'vt_b2' =>$vt_b2, 
					 'vt_b3' =>$vt_b3,
					 'vt_b6' =>$vt_b6, 
					 'vt_c' =>$vt_c, 
					 'vt_e' =>$vt_e, 
					 'iron' =>$iron, 
					 'calcium' =>$calcium, 
					 'zinc' =>$zinc, 
					 'phosphorous' =>$phosphorous,
					 'sugar' =>$sugar, 
				);
				$id = $db->insert_array(Recipe_Det, $data);
			}
	}
	if($modeofpage=="add")
	{
		AlertandRedirect('New record details are added successfully',  "add_recipe.php");			
		return;
	}
	else
	{
		AlertandRedirect('Record details are edited successfully',"view_recipes.php");	
		return;
	}
} 
else 
{
	
	if($id != "") {
	
		$i=1;
		$rece_id=$id;
		$query = "SELECT * FROM ".Recipe_Det." WHERE parent_id = $id order by id";
		$result = mysql_query($query);
		if($result != "") {
			$rowcount = mysql_num_rows($result);
			if($rowcount > 0) {
				while($row = mysql_fetch_assoc($result)) {
					extract($row);
					$qty1[$i]=$qty;
					$energy1[$i]=$energy;
					$carbo1[$i]=$carbo;
					$protein1[$i]=$protein;
					$total_fat1[$i]=$total_fat;
					$fibre1[$i]=$fibre;
					$sodium1[$i]=$sodium;
					$pufa1[$i]=$pufa;
					$mufa1[$i]=$mufa;
					$transfat1[$i]=$transfat;
					$potassium1[$i]=$potassium;
					$vt_a1[$i]=$vt_a;
					$vt_b11[$i]=$vt_b1;
					$vt_b21[$i]=$vt_b2;
					$vt_b31[$i]=$vt_b3;
					$vt_b61[$i]=$vt_b6;
					$vt_c1[$i]=$vt_c;
					$vt_e1[$i]=$vt_e;
					$iron1[$i]=$iron;
					$calcium1[$i]=$calcium;
					$zinc1[$i]=$zinc;
					$phosphorous1[$i]=$phosphorous;
					$sugar1[$i]=$sugar;
					$key_name1[$i]=GetValue("select ingredientname as col from ".Raw." where id=".$key_id,"col");
					$key_id1[$i]=$key_id;
					$i=$i+1;				
					$totalqty1=$totalqty1+$qty;
					$totalenergy1=$totalenergy1+$energy;
					$totalcarbo1=$totalcarbo1+$carbo;
					$totalprotein1=$totalprotein1+$protein;
					$totaltotal_fat1=$totaltotal_fat1+$total_fat;
					$totalfibre1=$totalfibre1+$fibre;
					$totalsodium1=$totalsodium1+$sodium;
					$totalpufa1=$totalpufa1+$pufa;
					$totalmufa1=$totalmufa1+$mufa;
					$totaltransfat1=$totaltransfat1+$transfat;
					$totalpotassium1=$totalpotassium1+$potassium;
					$totalvt_a1=$totalvt_a1+$vt_a;
					$totalvt_b11=$totalvt_b11+$vt_b1;
					$totalvt_b21=$totalvt_b21+$vt_b2;
					$totalvt_b31=$totalvt_b31+$vt_b3;
					$totalvt_b61=$totalvt_b61+$vt_b6;
					$totalvt_c1=$totalvt_c1+$vt_c;
					$totalvt_e1=$totalvt_e1+$vt_e;
					$totaliron1=$totaliron1+$iron;
					$totalcalcium1=$totalcalcium1+$calcium;
					$totalzinc1=$totalzinc1+$zinc;
					$totalphosphorous1=$totalphosphorous1+$phosphorous;
					$totalsugar1=$totalsugar1+$sugar; 
				}
			}
		}
		$iRow=$i; 
		$query = "SELECT * FROM ".Recipe." WHERE id = $rece_id";
		$result = mysql_query($query);
		if($result != "") {
			$rowcount = mysql_num_rows($result);
			if($rowcount > 0) {
				while($row = mysql_fetch_assoc($result)) {
					extract($row);
					$strReciptName=$name;
					 
				}
			}
		}
		$mode = "edit";
	}
}


?>
<style>
#loading {
  width: 1300%;
  height: 1000px;
  top: 0px;
  left: 100px;
  position: fixed;
  display: block;
  opacity: 100;
  background-color: #fff;
  z-index: 99;
  text-align: center;
  bordeR:solid 0px red;
}

#loading-image {
  position: absolute;
  top: 250px;
  left: 540px;
  z-index: 100;
}
</style>
<body>


<!-- div -->
<?php include "includes/header.inc.php"?>
<!-- / div -->
<!-- nav -->
<?php include "includes/left.inc.php"?>
<!-- / nav -->
<section id="content">
  <div id="loading">
	  <img id="loading-image" src="images/ajax-loader.gif" alt="Loading..." />
	</div>
  <section class="main padder" id="dvSection">
     <div class="clearfix" style="padding:15px 0;">
      <h4><strong><i class="icon-food"></i>&nbsp; Add Recipe</strong></h4>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <section class="panel">
          <div class="panel-body">
          	<div style="text-align:right; margin-right:15px;"><a href="view_recipes.php"  class="btn btn-info btn-white btn-xs" style="width:150px;">View Recipes</a></div>
            <form id="form1" name="form1" method="post" enctype="multipart/form-data"  onsubmit="javascript:return Validate();">
                            
                            
                            <table width="100%" cellpadding="5" cellspacing="5" border="0">
                            	<tr>
                                	<td style="vertical-align: top; padding-top: 10px; width: 13%;">Recipe Name:<span style="color:red;">*</span></td>
                                    <td style="vertical-align: top; padding-top: 10px; width: 15%;"><input type="text" id="txtRecipeName" name="txtRecipeName" style="width: 200px;border:solid 1px grey" value="<?php echo $strReciptName?>"/></td>
                                    <td style="vertical-align: top; padding-top: 10px; width: 10%;">Portion:</td>
                                    <td style="vertical-align: top; padding-top: 10px; width: 15%;">
									<input type="text" id="txtPortion" name="txtPortion" style="width:  200px;border:solid 1px grey" value="<?php echo $portion?>"/></td>
                                </tr>
                                
                               <tr>
                               	 <td style="padding-top: 10px; vertical-align: top;">Recipe Alternate Name : </td>
                                    <td style="padding-top: 10px; vertical-align: top;"><textarea name="txtRecipeAltName" id="txtRecipeAltName" style="width: 200px;border:solid 1px grey" rows="4"><?php echo $alt_name?></textarea></td>
                                    <td style="padding-top: 10px; vertical-align: top;">Food Ingredients :</td>
                                    <td style="padding-top: 10px; vertical-align: top;"><textarea name="txtFood" id="txtFood" style="width: 200px;border:solid 1px grey" rows="4"><?php echo $food_ing?></textarea></td>
                                    <td style="padding-top: 10px; vertical-align: top;width:110px;">Other Benefits :</td>
                                    <td style="padding-top: 10px; vertical-align: top;"><textarea name="txtOther" id="txtOther" style="width: 200px;border:solid 1px grey" rows="4"><?php echo $other_benefits?></textarea></td>
                                </tr>

                            </table>
                            
                            
                             <table border="1" cellspacing="0" cellpadding="0" style="margin-top:30px; text-align:center; font-size: 14px; border: solid 1px #bbbbbb; background-color: #caf7f1; margin-left:-12px; width:1230px;display:none;">
                              <tr>
                                <td style="text-align: left; padding: 10px; vertical-align: top; border: solid 0px #0099FF; font-size: 14px; font-weight: bold;">
                                	<a href="#" class="active" onClick="javascript:return AddRow()" id="dvAdd"><i class="icon-plus-sign icon-large text-success text-active"></i></a> Add Ingredients &nbsp;&nbsp; 
									<input type="hidden" id="txtAddRow" name="txtAddRow" value="<?php echo $iRow?>" />
                                </td>
                          	  </tr>
                            </table>
                            

<div id="demo" style="padding-top:10px;">
<table cellpadding="0" cellspacing="0" border="0" class="display" id="example">
	<thead>
		<tr>
			<th style="width:50px;">Sr No</th>
			<th style="width:200px;" >Key Ingredients </th>
			<th>Qty</th>
			<th >Energy</th>
			<th >Carbo</th>
			<th >Protein</th>
			<th>Total Fat</th>
			<th >Fibre</th>
			<th >Sodium</th>
			<th >Pufa<br /></th>
			<th >Mufa</th>
			<th >Transfat</th>
			<th >Potassium</th>
			<th >VT A</th>
			<th >VT B1</th>
			<th >VT B2</th>
			<th >VT B3</th>
			<th >VT B6</th>
			<th >VT C</th>
			<th >VT E </th>
			<th >Iron</th>
			<th >Calcium </th>
			<th >Zinc</th>
			<th >Phosphorous</th>
			<th >Sugar</th>
		 
		</tr>
	</thead>
	 
	<tbody>
	<?php for($i=1;$i<20;$i++){?>
	<?php $key_id="0";if($i <8){$key_id=$i;}?>
	<?php 
	if(!isset($qty1[$i])){$qty1[$i]="0";}
	if(!isset($energy1[$i])){$energy1[$i]="0";}
	if(!isset($carbo1[$i])){$carbo1[$i]="0";}
	if(!isset($protein1[$i])){$protein1[$i]="0";}
	if(!isset($total_fat1[$i])){$total_fat1[$i]="0";}
	if(!isset($fibre1[$i])){$fibre1[$i]="0";}
	if(!isset($sodium1[$i])){$sodium1[$i]="0";}
	if(!isset($pufa1[$i])){$pufa1[$i]="0";}
	if(!isset($mufa1[$i])){$mufa1[$i]="0";}
	if(!isset($transfat1[$i])){$transfat1[$i]="0";}
	if(!isset($potassium1[$i])){$potassium1[$i]="0";}
	if(!isset($vt_a1[$i])){$vt_a1[$i]="0";}
	if(!isset($vt_b11[$i])){$vt_b11[$i]="0";}
	if(!isset($vt_b21[$i])){$vt_b21[$i]="0";}
	if(!isset($vt_b31[$i])){$vt_b31[$i]="0";}
	if(!isset($vt_b61[$i])){$vt_b61[$i]="0";}
	if(!isset($vt_c1[$i])){$vt_c1[$i]="0";}
	if(!isset($vt_e1[$i])){$vt_e1[$i]="0";}
	if(!isset($iron1[$i])){$iron1[$i]="0";}
	if(!isset($calcium1[$i])){$calcium1[$i]="0";}
	if(!isset($zinc1[$i])){$zinc1[$i]="0";}
	if(!isset($phosphorous1[$i])){$phosphorous1[$i]="0";}
	if(!isset($sugar1[$i])){$sugar1[$i]="0";}
	if(!isset($key_name1[$i])){$key_name1[$i]="";}
	if(!isset($key_id1[$i])){$key_id1[$i]="0";}
	
	?>
		<tr class="gradeX" id="trGrade<?php echo $i?>" style="display:<?php if($i > 20){echo "none";}?>">
			<td style="width:50px;">	
			<?php echo $i?>
			</tD>
			<td >
			<input type="text" name="ddlKeyIng<?php echo $i?>" id="ddlKeyIng<?php echo $i?>" value="<?php echo $key_name1[$i]?>" style="width: 150px; text-align: left; padding: 0px 3px; font-size: 12px;height:25px;" onBlur="javascript:GetIngValue('<?php echo $i?>');" /> 
			 
			
			<input type="hidden" name="ddlKeyIngID<?php echo $i?>" id="ddlKeyIngID<?php echo $i?>" value="<?php echo $key_id1[$i]?>" style="width: 200px; text-align: left; padding: 0px 3px; font-size: 12px;height:20px;" />  

			</td>
			 <td>
			  <input type="text" name="txtQuantity<?php echo $i?>" id="txtQuantity<?php echo $i?>" value="<?php echo $qty1[$i]?>" style="width: 45px; text-align: left; padding: 0px 3px; font-size: 12px;height:25px;" onBlur="javascript:RetriveAllValues('<?php echo $i?>');"  />                                </td>
			<td >
				<input type="text" name="txtEnergy<?php echo $i?>" id="txtEnergy<?php echo $i?>" value="<?php echo round($energy1[$i])?>" style="width: 45px; text-align: left; padding: 0px 3px; font-size: 12px;height:25px;" readonly />                                </td>
			<td >
				<input type="text" name="txtCarbohydrate<?php echo $i?>" id="txtCarbohydrate<?php echo $i?>" value="<?php echo $carbo1[$i]?>" style="width: 45px; text-align: left; padding: 0px 3px; font-size: 12px;height:25px;" readonly  />                                </td>
			<td >
				<input type="text" name="txtProtein<?php echo $i?>" id="txtProtein<?php echo $i?>" value="<?php echo $protein1[$i]?>" style="width: 45px; text-align: left; padding: 0px 3px; font-size: 12px;height:25px;"  readonly />                                </td>
			<td >
				<input type="text" name="txtTotalFat<?php echo $i?>" id="txtTotalFat<?php echo $i?>" value="<?php echo $total_fat1[$i]?>" style="width: 45px; text-align: left; padding: 0px 3px; font-size: 12px;height:25px;"  readonly />                                </td>
			<td >
				<input type="text" name="txtFibre<?php echo $i?>" id="txtFibre<?php echo $i?>" value="<?php echo $fibre1[$i]?>" style="width: 45px; text-align: left; padding: 0px 3px; font-size: 12px;height:25px;" readonly  />                                </td>
			<td >
				<input type="text" name="txtSodium<?php echo $i?>" id="txtSodium<?php echo $i?>" value="<?php echo $sodium1[$i]?>" style="width: 45px; text-align: left; padding: 0px 3px; font-size: 12px;height:25px;" readonly  />                                </td>
			<td >
				<input type="text" name="txtPufa<?php echo $i?>" id="txtPufa<?php echo $i?>" value="<?php echo $pufa1[$i]?>" style="width: 45px; text-align: left; padding: 0px 3px; font-size: 12px;height:25px;"  readonly />                                </td>
			<td >
				<input type="text" name="txtMufa<?php echo $i?>" id="txtMufa<?php echo $i?>" value="<?php echo $mufa1[$i]?>" style="width: 45px; text-align: left; padding: 0px 3px; font-size: 12px;height:25px;"  readonly />                                </td>
			<td >
				<input type="text" name="txtTransfat<?php echo $i?>" id="txtTransfat<?php echo $i?>" value="<?php echo $transfat1[$i]?>" style="width: 45px; text-align: left; padding: 0px 3px; font-size: 12px;height:25px;" readonly  />                                </td>
			<td >
				<input type="text" name="txtPotassium<?php echo $i?>" id="txtPotassium<?php echo $i?>" value="<?php echo $potassium1[$i]?>" style="width: 45px; text-align: left; padding: 0px 3px; font-size: 12px;height:25px;"  readonly />                                </td>
			<td >
				<input type="text" name="txtVitaminA<?php echo $i?>" id="txtVitaminA<?php echo $i?>" value="<?php echo $vt_a1[$i]?>" style="width: 45px; text-align: left; padding: 0px 3px; font-size: 12px;height:25px;"  readonly />                                </td>
			<td >
				<input type="text" name="txtVitaminB1<?php echo $i?>" id="txtVitaminB1<?php echo $i?>" value="<?php echo $vt_b11[$i]?>" style="width: 45px; text-align: left; padding: 0px 3px; font-size: 12px;height:25px;"  readonly />                                </td>
			<td >
				<input type="text" name="txtVitaminB2<?php echo $i?>" id="txtVitaminB2<?php echo $i?>" value="<?php echo $vt_b21[$i]?>" style="width: 45px; text-align: left; padding: 0px 3px; font-size: 12px;height:25px;"  readonly />                                </td>
			<td >
				<input type="text" name="txtVitaminB3<?php echo $i?>" id="txtVitaminB3<?php echo $i?>" value="<?php echo $vt_b31[$i]?>" style="width: 45px; text-align: left; padding: 0px 3px; font-size: 12px;height:25px;" readonly  />                                </td>
			<td  >
				<input type="text" name="txtVitaminB6<?php echo $i?>" id="txtVitaminB6<?php echo $i?>" value="<?php echo $vt_b61[$i]?>" style="width: 45px; text-align: left; padding: 0px 3px; font-size: 12px;height:25px;" readonly  />                                </td>
			<td >
				<input type="text" name="txtVitaminC<?php echo $i?>" id="txtVitaminC<?php echo $i?>" value="<?php echo $vt_c1[$i]?>" style="width: 45px; text-align: left; padding: 0px 3px; font-size: 12px;height:25px;"  readonly />                                </td>
			<td >
				<input type="text" name="txtVitaminE<?php echo $i?>" id="txtVitaminE<?php echo $i?>" value="<?php echo $vt_e1[$i]?>" style="width: 45px; text-align: left; padding: 0px 3px; font-size: 12px;height:25px;"  readonly />                                </td>
			<td >
				<input type="text" name="txtIron<?php echo $i?>" id="txtIron<?php echo $i?>" value="<?php echo $iron1[$i]?>" style="width: 45px; text-align: left; padding: 0px 3px; font-size: 12px;height:25px;" readonly  />                                </td>
			<td >
				<input type="text" name="txtCalcium<?php echo $i?>" id="txtCalcium<?php echo $i?>" value="<?php echo $calcium1[$i]?>" style="width: 45px; text-align: left; padding: 0px 3px; font-size: 12px;height:25px;"  readonly />                                </td>
			<td >
				<input type="text" name="txtZinc<?php echo $i?>" id="txtZinc<?php echo $i?>" value="<?php echo $zinc1[$i]?>" style="width: 45px; text-align: left; padding: 0px 3px; font-size: 12px;height:25px;" />                                </td>
			<td >
				<input type="text" name="txtPhosphorous<?php echo $i?>" id="txtPhosphorous<?php echo $i?>" value="<?php echo $phosphorous1[$i]?>" style="width: 45px; text-align: left; padding: 0px 3px; font-size: 12px;height:25px;"  readonly />                                </td>
			<td  >
				<input type="text" name="txtSugar<?php echo $i?>" id="txtSugar<?php echo $i?>" value="<?php echo $sugar1[$i]?>" style="width: 45px; text-align: left; padding: 0px 3px; font-size: 12px;height:25px;"  readonly />                                </td>
		</tr>
		 <?php } ?>
	</tbody>
	<tfoot>
		<tr>
			<th>&nbsp;</th>
			<th style="width:200px;" >Total</th>
			<th><span id="spTotalQty"><?php echo $totalqty1?></span></th>
			<th ><span id="spTotalEnergy"><?php echo round($totalenergy1)?></span></th>
			<th ><span id="spTotalCarbo"><?php echo $totalcarbo1?></span></th>
			<th ><span id="spTotalProtein"><?php echo $totalprotein1?></span></th>
			<th ><span id="spTotalFat"><?php echo $totaltotal_fat1?></span></th>
			<th ><span id="spTotalFibre"><?php echo $totalfibre1?></span></th>
			<th ><span id="spTotalSodium"><?php echo $totalsodium1?></span></th>
			<th ><span id="spTotalPufa"><?php echo $totalpufa1?></span></th>
			<th ><span id="spTotalMufa"><?php echo $totalmufa1?></span></th>
			<th ><span id="spTotalTransfat"><?php echo $totaltransfat1?></span></th>
			<th ><span id="spTotalPotassium"><?php echo $totalpotassium1?></span></th>
			<th ><span id="spTotalVTA"><?php echo $totalvt_a1?></span></th>
			<th ><span id="spTotalVTB1"><?php echo $totalvt_b11?></span></th>
			<th ><span id="spTotalVTB2"><?php echo $totalvt_b21?></span></th>
			<th ><span id="spTotalVTB3"><?php echo $totalvt_b31?></span></th>
			<th ><span id="spTotalVTB6"><?php echo $totalvt_b61?></span></th>
			<th ><span id="spTotalVTC1"><?php echo $totalvt_c1?></span></th>
			<th ><span id="spTotalVTE1"><?php echo $totalvt_e1?></span></th>
			<th ><span id="spTotalIron"><?php echo $totaliron1?></span></th>
			<th ><span id="spTotalCalcium"><?php echo $totalcalcium1?> </span></th>
			<th ><span id="spTotalZinc"><?php echo $totalzinc1?></span></th>
			<th ><span id="spTotalPhosphorous"><?php echo $totalphosphorous1?></span></th>
			<th ><span id="spTotalSugar"><?php echo $totalsugar1?></span></th>
		 
		</tr>
	</tfoot>
</table>

                                
</div>

<table   cellpadding="5" cellspacing="5" border="0" style="display:<?php  if($_SESSION['login_type']=="User"){echo"none";} ?>;">
	<tr>
		<td colspan="2" style="padding-top:30px">
			<b>Note: Only Moderator can change following setting...</b>
		</td>
	</tr>
	<tr>
		<td style="vertical-align: top; padding-top: 10px; width:250px;">Approved:</td>
		<td style="vertical-align: top; padding-top: 10px; text-align:left; width:250px;">
			<input type="checkbox" id="chkApprove" name="chkApprove" <?php if($approved=="1"){echo "checked";} ?>  style="margin-left:-93px;"/>
		</td>
	</tr>
</table>
<table   cellpadding="5" cellspacing="5" border="0" style="display:<?php  if($_SESSION['login_type']=="User"){echo"none";} ?>">
	<tr>
		<td style="vertical-align: top; padding-top: 10px;"><p style="padding-bottom:0px;">Reason for Unapproved: </p>
        <textarea name="txtMessage" id="txtMessage" style="border:solid 1px grey" rows="4" cols="100"><?php echo $message?></textarea>
        </td>
		<td colspan="3">
			
		</td>
	</tr>
</table>

						 
                            
                         
                             
                            
              <div style="text-align:left; margin:15px 0px 0px 0px;"> 
              	<input type="submit" id="btnSubmit" name="btnSubmit" value="Submit"  class="btn btn-primary" />
              </div>
			   <div style="padding:5px 0;font-size:12px;display:none;">
                            	<b>Note :</b> If raw ingredient contains 67.5 gm, then formula will be used here as <strong>67.5 / 100 * 40 (quantity) = 27 gm </strong>in actual recipe.
								<input style="width:40px;display:none;" type="checkbox" id="chkIsDeleted" name="chkIsDeleted" 
								<?php if($isdeleted == 1) { echo "checked"; } ?> />
                            </div>
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

<script>
///	setTimeout(function(){ShowRows();},3000);
</script>

</body>
</html>


<script language="javascript" type="text/javascript">
  $(window).load(function() {
	setTimeout(function(){ShowLoading()},200);
  });

  function ShowLoading()
  {
	    $('#loading').hide();
	//document.getElementById("dvSection").style.display='';
	
  }
</script>

