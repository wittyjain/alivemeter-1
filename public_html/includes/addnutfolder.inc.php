<?php include("../includes/common.inc.php"); ?>
<?php
$i=1;
$foldername=$_GET['foldername'];
//$parentidhidd=$_GET['parentidhidd'];

$parentidhidd=$_SESSION['UserNutID'];

$dup="select * from ".Nut_Folder." where name='".$foldername."' and parentid=".$_SESSION['UserNutID'];
$exe=mysql_query($dup);
$num_r=mysql_num_rows($exe);
if($num_r > 0){
    echo "true";
}else {
$data = array(
	 'parentid'=>$parentidhidd,
	 'name'=>$foldername,
	 'isdeleted'=>0,
	 'type'=>'Nutritionist',
	);
  $id = $db->insert_array(Nut_Folder, $data);
?>
<input type="checkbox" checked  value="<?php echo $id; ?>" name="selfolder[]" id="selfolder<?php echo $id; ?>" maxlength="13" style="width:30px; color:#000; line-height:25px;"/><span style="color:#000;"><?php echo $foldername; ?></span><br/>

<?php   } ?>
