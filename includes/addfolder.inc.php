<?php include("../includes/common.inc.php"); ?>
<?php
$i=1;
$foldername=$_GET['foldername'];
//$parentidhidd=$_GET['parentidhidd'];

$parentidhidd=$_SESSION['UserID'];

$dup="select * from ".Folder." where name='".$foldername."' and parentid=".$_SESSION['UserID'];
$exe=mysql_query($dup);
$num_r=mysql_num_rows($exe);
if($num_r > 0){
    echo "true";
}else {
$data = array(
	 'parentid'=>$parentidhidd,
	 'name'=>$foldername,
	 'isdeleted'=>0,
	 //'type'=>$_SESSION['User_Type'],
	);
  $id = $db->insert_array(Folder, $data);
?>
<input type="checkbox" maxlength="13"  checked  value="<?php echo $id; ?>" name="selfolder[]" id="selfolder<?php echo $id; ?>"/><?php echo $foldername; ?><br/>

<?php   } ?>
