<?php
$user_id="0"; $article_id="0";
if(isset($_SESSION['UserID']))
{
	$user_id=$_SESSION['UserID'];
}


if(isset($_GET['cid']))
{
	$article_id=$converter->decode($_GET['cid']);
}



if(isset($_SESSION['UserID']))
{
	$user_profile=GetValue("select image1 as col from tbl_users where user_id=".$user_id, "col");

}
else
{
	$user_profile="noimage.jpg";

}


$cmt_count=GetValue("select count(article_id) as col from tbl_post_comment where approved=1 and article_id=".$article_id, "col");
//$cmt_count=GetValue("select count(article_id) as col from tbl_post_comment where article_id=".$article_id, "col");
//Alert($article_id);

?>

<div class="DvFloat" style="padding: 20px 0px 0px 0px; border: solid 0px #000000;">



  <div class="DvFloat" style="padding-bottom: 13px; color: #262626; font-size: 24px;"> <span style="color: #262626; font-size: 24px;" id="DvComment"><?php echo $cmt_count;?> </span> COMMENT(S) </div>
  <div class="DvFloat" style="padding-bottom: 13px;">
    <div class="bottomcommets_img"><img src="<?php echo $strHostName;?>/profile_pic/<?php echo $user_profile;?>" alt="" title="" border="0" style="width:46px; height:49px;"></div>
    <div class="bottomcommets_boxmain">
      <div class="bottomcommets_borderbox">
        <div class="bottomcommets_paddingbox">
          <textarea name="txtPostComments" id="txtPostComments" style="background:#fff; border:0px; box-shadow:none; width:550px;"></textarea>
          
          <input type="hidden" name="txtUserId" id="txtUserId" value="<?php echo $user_id;?>" />
          <input type="hidden" name="txtArticleId" id="txtArticleId" value="<?php echo $article_id;?>" />
          <input type="hidden" name="txtCommentType" id="txtCommentType" value="Story" />
          <input type="hidden" name="txtRewardPoints" id="txtRewardPoints" value="25" />
          <input type="hidden" name="txtPostCommentId" id="txtPostCommentId" value="" />
          
        </div>
        <div class="bottomcommets_greybg">
          <?php if(isset($_SESSION['UserID'])) { ?>
         		<a class="postblackbtn" onclick="javascript:Add_Post_Comment(this);" style="cursor:pointer; text-decoration:none;">POST</a>
          <?php } else { ?>
          		<a class="postblackbtn" onclick="javascript:alert ('Please Login to post comment.');" style="cursor:pointer; text-decoration:none;">POST</a>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
  <div style="padding-bottom: 15px; padding-left: 11px; border: solid 0px #990099; float: left;" id="dvPostComments" name="dvPostComments"> &nbsp; </div>
</div>
