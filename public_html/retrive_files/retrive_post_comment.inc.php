<?php include "../includes/common.inc.php";?>
<?php
	$page=1;$page_count=10;$newpagenumber="2";$retrive_Array=array();$get_array=array(); $article_id=""; ;$retrive_Array1=array();$get_array1=array(); 
	$user_id="0";
	
	
	if(isset($_GET['page'])){
		$page=$_GET['page'];
	}
	else
	{
		$page=1;
	}
	
	if(isset($_GET['cid'])) 
	{	
		$article_id=$_GET['cid'];
	}
	
	if(isset($_SESSION['UserID']))
	{
		$user_id=$_SESSION['UserID'];
	}
	
	//Alert($article_id);
	
	$retrive_Array=$get_retrive->Get_My_Post_Comment_App($article_id, $user_id);
	$retrive_Array1=$get_retrive->Get_Post_Comment_App($article_id);
	
	
	
?>
  <?php  while($get_array = mysql_fetch_array( $retrive_Array )){
  		$user_profile=GetValue("select image1 as col from tbl_users where user_id=".$get_array['user_id'], "col");
		$user_name=GetValue("select name as col from tbl_users where user_id=".$get_array['user_id'], "col");
		$ts1 = strtotime($get_array['created_date']);
		$ts2 = strtotime(date('Y-m-d h:i:s'));
		
		
		$dateDiff = $ts2 - $ts1;
		
		$time = floor($dateDiff/(60));
		
		if($time>=60)
		{
			$time = floor($dateDiff/(60*60))." hours";
		}
		else
		{
			$time = floor($dateDiff/(60))." mins";
		}
		
//		if()
  ?>
        <div class="DvFloat" style="padding:10px 0; display:''" id="dv_Post_Comment_<?php echo $get_array['post_comment_id']*121?>">
            <div class="bottomcommetspost_img"><img src="<?php echo $strHostName;?>/profile_pic/<?php echo $user_profile;?>" alt="" title="" border="0" style="width:54px; height:53px;"></div>
            <div class="bottomcommetspost_boxmain">
            <div class="DvFloat"  style="border:solid 0px red;"> 
                <div class="cn_dv"><?php echo $user_name;?> </div>
                <div class="clockicon">
                			<img src="images/post_comments/clock_icon.jpg" alt="" title="" border="0">
                 </div>
                 
                <div class="hours_dv"> <?php echo $time;?> ago</div>
                <div class="hours_dv" style="float:right;">
                	<a style="cursor:pointer;" onclick="javascript:Post_Comment_Delete_By_Id('<?php echo $converter->encode($get_array['post_comment_id'])?>','<?php echo $get_array['post_comment_id']*121?>')" title="Delete Comment"><img src="images/close.png" alt="Delete" style="width:20px;"></a>
                </div>
            </div>
            <div class="DvFloat" style="padding-top: 5px;">
                <span style="line-height: 15px; font-size: 12px;"><?php echo $get_array['comment']?></span>
            </div>
            <div class="DvFloat" style="padding-top: 10px; display:none;">
                <div class="like_icon"><img src="images/post_comments/like_icon_d.jpg" alt="" title="" border="0"></div>
               
            </div>
        </div>
        </div>

                    
<?php } ?>   

 <?php  while($get_array1 = mysql_fetch_array( $retrive_Array1 )){
  		$user_profile=GetValue("select image1 as col from tbl_users where user_id=".$get_array1['user_id'], "col");
		$user_name=GetValue("select name as col from tbl_users where user_id=".$get_array1['user_id'], "col");
		$ts1 = strtotime($get_array['created_date']);
		$ts2 = strtotime(date('Y-m-d h:i:s'));
		$dateDiff = $ts2 - $ts1;
		
		$time = floor($dateDiff/(60));
		
		if($time>=60)
		{
			$time = floor($dateDiff/(60*60))." hours";
		}
		else
		{
			$time = floor($dateDiff/(60))." mins";
		}
  ?>
        <div class="DvFloat" style="padding:10px 0;">
            <div class="bottomcommetspost_img"><img src="<?php echo $strHostName;?>/profile_pic/<?php echo $user_profile;?>" alt="" title="" border="0" style="width:54px; height:53px;"></div>
            <div class="bottomcommetspost_boxmain">
            <div class="DvFloat">
                <div class="cn_dv"><?php echo $user_name;?> </div>
                <div class="clockicon">
                			<img src="images/post_comments/clock_icon.jpg" alt="" title="" border="0">
                 </div>
                 
                <div class="hours_dv" >15 hours ago</div>
            </div>
            <div class="DvFloat" style="padding-top: 5px;">
                <span style="line-height: 15px; font-size: 12px;"><?php echo $get_array1['comment']?></span>
            </div>
            <div class="DvFloat" style="padding-top: 10px;">
                <div class="like_icon"><img src="images/post_comments/like_icon_d.jpg" alt="" title="" border="0"></div>
               
            </div>
        </div>
        </div>

                    
<?php } ?>               
                    
