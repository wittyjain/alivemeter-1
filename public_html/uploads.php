<?php include "includes/common.inc.php"?>
<script type="text/javascript" src="<?php echo $strHostName;?>/js/jquery-1.3.js"></script>
<script type="text/javascript" src="<?php echo $strHostName;?>/js/jquery.lightbox-0.5.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo $strHostName;?>/css/jquery.lightbox-0.5.css" media="screen" />
<script type="text/javascript">
        $(function() {
            $('#gallery a').lightBox();
        });
    </script>
<style type="text/css">
.upload_maindv {
	width: 700px;
	margin: auto 0px;
	border: solid 0px #FF0000;
	padding-top: 10px;
}
.upload_imagedv {
	width: 17.9%;
	float: left;
	padding: 7px;
}
</style>
</head><body style="margin: 0px; padding: 0px; background-image: url(images/bg_in.png); background-repeat: repeat-x; background-position: top center;">
<?php

if(isset($_GET['cid']))
{
	$cid=$converter->decode($_GET['cid']);
}

else
{
	$cid="0";
}

if(isset($_GET['type']))
{
	$type=$converter->decode($_GET['type']);
}

else
{
	$type="";
}




$upload_date=GetValue("select consult_date as col from tbl_doc_consult where doc_consult_id=".$cid, "col");

?>
<center>
  <div class="upload_maindv">
    	<table width="700px" cellpadding="0" cellspacing="0" style="border: solid 1px #e4e4e4;">
      <tr>
        <td style="padding: 0px 10px;"><div class="DvFloat">
            <div style="width: 97%; float: left; border: solid 0px #0099FF; padding: 5px 0px 25px 20px; text-align: center;"> <img src="images/brand.png" alt="" title="" border="0"> </div>
            <div class="DvFloat" style="border: solid 0px #e4e4e4; padding-top: 0px;" id="gallery">
            <div class="update_btn" style="text-align:center; width:100%; float:left; font-size:15px; font-family:Verdana, Arial, Helvetica, sans-serif; padding:10px 0; color:#009900; border-bottom:dotted 0px #009900; text-decoration:underline; display:none;">Uploaded reports</div>
              
			  <?php
			 $query = "SELECT * FROM tbl_doc_consult_gallery WHERE parent_id=".$cid." and type='$type' and isdelete=0";
												//	echo $query;
													$result = mysql_query($query);
													
													if($result != "") {
														$rowcount  = mysql_num_rows($result);
														if($rowcount > 0) {
															while($row = mysql_fetch_assoc($result)) {
																extract($row);
																$imageid=$row['file_path'];
				if($imageid!="")
				{
					$imageid=$imageid;
				}
				else
				{
					$imageid="noimage.jpg";
				}
	
?>

              <div class="upload_imagedv"> <a href="<?php echo $strHostName;?>/uploads/<?php echo $imageid;?>" title="" style="width:200px;"><img src="<?php echo $strHostName;?>/uploads/<?php echo $imageid;?>" alt="" title="" style="border: solid 1px #e2e2e2; width:117px; height:117px;" /></a> </div>
          <?php }} else { ?>
		   		<div class="DvFloat" style="text-align:center; color:red; font-family:Verdana, Arial, Helvetica, sans-serif; font-size:11px; ">No reports found.</p>
		  <?php }} ?>    
           
          
           
            </div>
          </div></td>
      </tr>
    </table>
    </div>
</center>
</body>
</html>