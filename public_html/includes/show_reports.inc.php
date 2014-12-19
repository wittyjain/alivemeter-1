<?php include("../includes/common.inc.php"); ?>
<?php
$cid=$_GET['cid'];
$type=$_GET['type'];
$user_id=$_SESSION['UserID'];

$upload_count=GetValue("SELECT count(*) as col FROM  tbl_doc_consult_gallery where userid=".$_SESSION['UserID']." and isactive=1 and isdelete=0 and parent_id=".$cid." and type='$type'", "col");

				
?>

<?php echo $upload_count;?>

