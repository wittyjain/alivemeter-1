<?php include "../includes/common.inc.php";?>
<?php
	$page=1;$page_count=5;$newpagenumber="2";$retrive_Array=array();$get_array=array(); $article_id="";
	if(isset($_GET['page'])){
		$page=$_GET['page'];
	}
	else
	{
		$page=1;
	}
	
	if(isset($_GET['cid'])) 
	{	
		$mail_id=$_GET['cid'];
	}
	
	if(isset($_GET['userid'])) 
	{	
		$userid=$_GET['userid'];
	}
	
	$retrive_Array=$get_retrive->Get_User_Reviews($mail_id, $userid);
	
	
	
?>
  <?php  while($get_array = mysql_fetch_array( $retrive_Array )){ ?>
        <div class="DvFloat" style="padding:25px 0;">
        	<h1 class="f_red" style="text-align: left; font-size: 18px; font-weight:bold;  margin-top: 0px;">User Reviews : </h1>
            <br />
           <?php echo str_replace("\\","",$get_array['comment']);?>
           
            
        </div>

                    
<?php } ?>               
                    
