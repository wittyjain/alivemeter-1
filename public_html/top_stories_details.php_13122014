<?php include 'includes/common.inc.php'?>
<!DOCTYPE HTML>
<html>
<head>

<?php 
if(isset($_GET['cid']))
	{
		$cid = $converter->decode($_GET['cid']);
	//	Alert($cid);
	}

	if(isset($_GET['cateid']))
	{
		$cateid = $converter->decode($_GET['cateid']);
	/// Alert($cateid);
	}

		 $query_1 = "SELECT * FROM  ".Top_Story." where isactive=1 and isdeleted=0 and cover_story_id=".$cid;
			///echo $query_1;
			$result_1 = mysql_query($query_1);							
			if($result_1 != "") {	
				$rowcount  = mysql_num_rows($result_1);
				if($rowcount > 0) {
					while($row_1 = mysql_fetch_assoc($result_1)) {
						extract($row_1);
					
		?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">


<meta name="description" content="<?php echo $row_1['meta_description'];?>">

<meta name="keywords" content="<?php echo $row_1['meta_keywords'];?>">


<title>Alivemeter | <?php echo $row_1['meta_title'];?></title>

<meta property="og:title" content="<?php echo $row_1['meta_title'];?>" />
<meta property="og:description" content="<?php echo $row_1['meta_description'].".";?>" />

<meta property="og:image" content="<?php echo $row_1['image_url'];?>" />
<meta property="og:url" content="<?php echo $strHostName;?>/top_stories_details.php?cid=<?php echo $_GET['cid'];?>&cateid=<?php echo $_GET['cateid'];?>" />

<?php }}} ?>

<?php include 'includes/page_links.inc.php'?>


<script type="text/javascript" src="<?php echo $strHostName?>/js/health_steup_insert_retrive.js"></script>
<script type="text/javascript" src="<?php echo $strHostName?>/js/other_dynamic.js"></script>
<script type="text/javascript">var switchTo5x=true;</script>
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "9b2a4203-4b19-4328-922d-0dc69b8164f3", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>

<style>
strong
{
	font-weight:bold;
}

p
{
	width:100%;
	float:left;
	padding:5px 0;
	margin:0px;
}

</style>	
</head>
<?php include 'includes/top.php'?>
 <?php
 $cid="0";
 	if(isset($_GET['cid']))
	{
		$cid = $converter->decode($_GET['cid']);
	//	Alert($cid);
	}
	if(isset($_GET['cateid']))
	{
		
		$cateid = $converter->decode($_GET['cateid']);
	/// Alert($cateid);
	}
	$cat_name=GetValue("select category_name as col from tbl_category where category_id=".$cateid, "col");
	$pagingLink="";
	$doc_consult_count="";
			
?>
    
<section>
  <?php if ($doc_consult_count > 0 && $medication_count > 0 && $allergies_count > 0  && $hospitalization_count > 0 && $immunization_count > 0 && $health_problem_count > 0 && $family_history_count > 0 && $blood_pressure_count > 0 && $sugar_profile_count > 0 && $life_style_count > 0 && $lipid_profile_count > 0) { ?>
  <div class="dvFloat">
    <?php include "includes/dashboard_top.inc.php";?>
  </div>
  <?php } ?>
</section>
<section>
  <div class="top_ou">
    <div class="top_in" style="border: solid 0px #000066;">
      <div class="top">
      <div class="b_crumb"><a href="<?php echo $strHostName;?>/index.php">Home></a> <a href="<?php echo $strHostName;?>/top_stories.php">Top Stories </a> > <?php echo $cat_name;?> </div>

        <div class="story_nav" style="display:none;">
     <ul id="dd_nav">
		
		<li>
			<a href="#" title=""  style="background: #99cc00;width:188px; text-decoration:none;">Select Health Story Category&nbsp;&nbsp;&nbsp;<span class="ar">&#9660;</span></a>
			 <ul style="width: 200px; background-color: #83a819;">
				  <li style="background-color: #83a819;"><a href="#">Food and Nutrition</a></li>
                  <li style="background-color: #83a819;"><a href="#">Disease Prevention</a></li>
                  <li style="background-color: #83a819;"><a href="#">Fitness</a></li>
                  <li style="background-color: #83a819;"><a href="#">Weight Loss and Healthy Living</a></li>
                  <li style="background-color: #83a819;"><a href="#">Skin Care and Beauty</a></li>
			</ul>
		</li>
		<li>
			<a href="#" title=""  style="background: #00b2b2;width:195px; text-decoration:none">Select Wealth Story Category&nbsp;&nbsp;&nbsp;<span class="ar">&#9660;</span></a>
			   <ul style="width: 207px; background-color: #009999;">
				<li style=" background-color: #009999;"><a href="#">Stock Market</a></li>
                  <li style=" background-color: #009999;"><a href="#">Insurance</a></li>
                  <li style=" background-color: #009999;"><a href="#">Takes</a></li>
                  <li style=" background-color: #009999;"><a href="#">Loans</a></li>
                  <li style=" background-color: #009999;"><a href="#">Credit Card</a></li>
			</ul>
		</li>
		<li><a href="#" style="background: #d9c727;width:120px; text-decoration:none; text-align:center;padding-left:0px">Happiness stories</a></li>
	</ul>
       
          
        </div>
            <div class="cal_12" style="border: solid 0px #006600;padding-top:35px">
                  <h2 class="f_red" style="padding-left: 20px; padding-bottom: 0px;">LATEST STORIES</h2>
                  <h2 class="f_green" style="padding-left: 20px; padding-bottom: 10px; font-size: 19px; text-transform: uppercase;"><?php echo $cat_name;?></h2>
                   <div class="story_insidebox">
                       <div class="left">
                       <?php 
					   
					   $query_c = "SELECT * FROM  ".Top_Story." where isactive=1 and isdeleted=0 and cover_story_id=".$cid;
						//echo $query_c;
						$result_c = mysql_query($query_c);
									
						if($result_c != "") {
							$nume = mysql_num_rows($result_c);
						} else {
							$nume = 0;
						}
								
										
						if($result_c != "") {	
							$rowcount  = mysql_num_rows($result_c);
							if($rowcount > 0) {
								while($row_c = mysql_fetch_assoc($result_c)) {
									extract($row_c);
									
									//$pagingLink = getPagingLinkBackEnd($rowcount, 1,'');
									$title=$row_c['title'];
									$cover_story_id=$row_c['cover_story_id'];
									$cate_id=$row_c['category_id'];
									//$prev_story=$cover_story_id-1;
									
									//$prev_story=GetValue("select cover_story_id as col from ".Top_Story." where category_id=".$cateid, "col");
									//Alert ($prev_story);
									//$prev_story=$prev_story-1;
									
								//	$prev_story_cat=GetValue("select category_id as col from ".Top_Story."  where cover_story_id=".$prev_story, "col");
								//	$prev_story_name=GetValue("select title as col from ".Top_Story."  where cover_story_id=".$prev_story, "col");
								
									$next_story=$cover_story_id+1;
									$next_story_cat=GetValue("select category_id as col from ".Top_Story."  where cover_story_id=".$next_story, "col");
									$next_story_name=GetValue("select title as col from ".Top_Story."  where cover_story_id=".$next_story, "col");
									
									$created_date=$row_c['created_date'];
									$header_image=$row_c['header_image'];
									$cat_name=GetValue("select category_name as col from tbl_category where category_id=".$row_c['cover_story_id'], "col");
									
						?>
                        <div class="DvFloat">
                            <div class="titledv">
                                <div class="DvFloat">
                                    <span class="title"><?php echo $title;?></span><br>
                                    <?php /*?><span class="subtitle">Posted on <?php echo date('d-M-Y',strtotime($created_date))?></span><?php */?>
                                </div>
                            </div>
                            
                        </div>
                        <div class="DvFloat" style="padding-top: 13px;"><img alt="<?php echo $header_title;?>" title="<?php echo $header_title;?>" src="<?php echo $strHostName;?>/top_stories/<?php echo $header_image;?>" alt="" title="" style="width:638px; height:246px;"></div>
                        <div class="DvFloat" style="padding-top: 13px;">
                            <?php echo $description;?>
                        </div>                
                        <div class="DvFloat" style="padding-bottom: 15px;">
                            <div class="titledv">
                                <div class="DvFloat">&nbsp;</div>
                            </div>
                             <div class="titlefollowdv">
									<img src="<?php echo $strHostName;?>/images/share_btn.png" alt="" title="">
								  <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $strHostName;?>/top_stories_details.php?cid=<?php echo $_GET['cid'];?>%26cateid=<?php echo $_GET['cateid'];?>" target="_blank"><img src="<?php echo $strHostName;?>/images/facebook_btn.png" alt="" title=""></a>

								 <a href="https://twitter.com/intent/tweet?text=<?php echo $meta_description." via @alivemeter";?>&url=%2F&original_referer=http%3A%2F%2Fwww.alivemeter.com%2F" target="_blank"><img src="<?php echo $strHostName;?>/images/twitter_btn.png" alt="" title=""></a>
						    </div>
                        </div>
                    
                       
                       
                       <div class="DvFloat" style="padding: 20px 0px; border-top: solid 1px #cbcbcb; border-bottom: solid 1px #cbcbcb;">
                            <div class="DvFloat">
                                	 <?php  
		
			$dcid=$cid-1;
			$query_p = "SELECT * FROM  ".Top_Story." where isactive=1 and isdeleted=0 and category_id=".$cateid." and cover_story_id <> ".$cid." and cover_story_id > ".$cid." order by  cover_story_id limit  1";
			//// echo $query_c;
			$result_p = mysql_query($query_p);							
			if($result_p != "") {	
				$rowcount_p  = mysql_num_rows($result_p);
				if($rowcount_p > 0) {
					while($row_p = mysql_fetch_assoc($result_p)) {
						extract($row_p);
						$title=$row_p['title'];
						$cateid=$row_p['category_id'];
						$article_id=$row_p['cover_story_id'];
						$cover_story_id=$row_p['cover_story_id'];
						$created_date=$row_p['created_date'];
						$header_image=$row_p['header_image'];
						
						
						
		?>
                                 <?php if($rowcount_p!="" && $rowcount_p!="0") { ?>
                                        <div style="width: 49%; float: left; border: solid 0px #000000;">
                                           <a href="<?php echo $strHostName;?>/top_stories_details.php?cid=<?php echo $converter->encode($article_id); ?>&cateid=<?php echo $converter->encode($cateid); ?>">
                                                <div style="width: 43px; float: left; border: solid 0px #0000FF;">
                                                        
                                                            <img src="images/prev_paging.png" alt="" title="" border="0">
                                                           
                                                            </div>
                                                <div style="width: 260px; float: left; border: solid 0px #996600;">
                                                    <div class="DvFloat">
                                                        <div class="DvFloat"><span class="npgreentext">PREVIOUS story</span></div>
                                                        <div class="DvFloat" style="padding-top: 5px;"><span class="f_darkblack"><?php echo $title;?><br /></span></div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                      <?php } ?>
                                      
                                      <?php } ?>
                                      
                                      <?php } else {?>
                                      
                                      	<?php
											
											
		
			$dcid=$cid-1;
			$query_p_1 = "SELECT * FROM  ".Top_Story." where isactive=1 and isdeleted=0 and category_id < ".$cateid." order by category_id desc limit 1";
		 //  echo $query_p_1;
			$result_p_1 = mysql_query($query_p_1);							
			if($result_p_1 != "") {	
				$rowcount_p_1  = mysql_num_rows($result_p_1);
				if($rowcount_p_1 > 0) {
					while($row_n_1 = mysql_fetch_assoc($result_p_1)) {
						extract($row_n_1);
						$title_n=$row_n_1['title'];
						$cateid_n=$row_n_1['category_id'];
						$article_id_n=$row_n_1['cover_story_id'];
						$cover_story_id_n=$row_n_1['cover_story_id'];
						$created_date_n=$row_n_1['created_date'];
						$header_image_n=$row_n_1['header_image'];
						
						
						
		?>
									  <?php if($rowcount_p_1!="" && $rowcount_p_1!="0") { ?>
                                    	 <div style="width: 49%; float: left; border: solid 0px #000000;">
                                           <a href="<?php echo $strHostName;?>/top_stories_details.php?cid=<?php echo $converter->encode($article_id_n); ?>&cateid=<?php echo $converter->encode($cateid_n); ?>">
                                           
                                           <?php //echo $cateid_n;?>
                                                <div style="width: 43px; float: left; border: solid 0px #0000FF;">
                                                        
                                                            <img src="images/prev_paging.png" alt="" title="" border="0">
                                                           
                                                            </div>
                                                <div style="width: 260px; float: left; border: solid 0px #996600;">
                                                    <div class="DvFloat">
                                                        <div class="DvFloat"><span class="npgreentext">PREVIOUS story</span></div>
                                                        <div class="DvFloat" style="padding-top: 5px;"><span class="f_darkblack"><?php echo $title_n;?><br /></span></div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                  
                                    <?php } ?>
                                    
                                    
                                    
                                    
                                     <?php }}} ?>
											
											
											
										 
                                      
                                      
                               		 <?php }} ?>
                                     
                                     
                                     
                                      <?php  
		
			$dcid=$cid-1;
			$query_n = "SELECT * FROM  ".Top_Story." where isactive=1 and isdeleted=0 and category_id=".$cateid." and cover_story_id <> ".$cid." and cover_story_id < ".$cid." order by  cover_story_id desc limit  1";
		//  echo $query_c;
			$result_n = mysql_query($query_n);							
			if($result_n != "") {	
				$rowcount_n  = mysql_num_rows($result_n);
				if($rowcount_n > 0) {
					while($row_n = mysql_fetch_assoc($result_n)) {
						extract($row_n);
						$title_n=$row_n['title'];
						$cateid_n=$row_n['category_id'];
						$article_id_n=$row_n['cover_story_id'];
						$cover_story_id_n=$row_n['cover_story_id'];
						$created_date_n=$row_n['created_date'];
						$header_image_n=$row_n['header_image'];
						
						
						
		?>
									  <?php if($rowcount_n!="" && $rowcount_n!="0") { ?>
                                    	<div style="width: 50%; float: right; border: solid 0px #000000;">
                                       <a href="<?php echo $strHostName;?>/top_stories_details.php?cid=<?php echo $converter->encode($article_id_n); ?>&cateid=<?php echo $converter->encode($cateid_n); ?>">
                                            <div style="width: 272px; float: left; border: solid 0px #996600;">
                                                <div class="DvFloat">
                                                    <div class="DvFloat" style="text-align:right;"><span class="npgreentext">Next story</span></div>
                                                    <div class="DvFloat" style="padding-top: 5px; text-align:right;"><span class="f_darkblack"><?php echo $title_n;?><br /></span></div>
                                                </div>
                                            </div>
                                            <div style="width: 43px; float: left; border: solid 0px #0000FF; text-align: right;">
                                                
                                                  <img src="images/next_paging.png" alt="" title="" border="0">
                                                    
                                            </div>
                                        </a>
                                    </div>
                                  
                                    <?php } ?>
                                    
                                    
                                    
                                    
                                    <?php } ?>
                                      
                                      <?php } else {?>
                                      
                                      	<?php
											
											
		
			$dcid=$cid-1;
			$query_p_2 = "SELECT * FROM  ".Top_Story." where isactive=1 and isdeleted=0 and category_id > ".$cateid." order by category_id,cover_story_id desc limit 1";
		 //  echo $query_p_1;
			$result_p_2 = mysql_query($query_p_2);							
			if($result_p_2 != "") {	
				$rowcount_p_2  = mysql_num_rows($result_p_2);
				if($rowcount_p_2 > 0) {
					while($row_n_2 = mysql_fetch_assoc($result_p_2)) {
						extract($row_n_2);
						$title_n=$row_n_2['title'];
						$cateid_n=$row_n_2['category_id'];
						$article_id_n=$row_n_2['cover_story_id'];
						$cover_story_id_n=$row_n_2['cover_story_id'];
						$created_date_n=$row_n_2['created_date'];
						$header_image_n=$row_n_2['header_image'];
						
						
						
		?>
									  <?php if($rowcount_p_2!="" && $rowcount_p_2!="0") { ?>
                                    	
                                        <?php ////echo $cateid_n;?>
                                         <div style="width: 50%; float: right; border: solid 0px #000000;">
                                       <a href="<?php echo $strHostName;?>/top_stories_details.php?cid=<?php echo $converter->encode($article_id_n); ?>&cateid=<?php echo $converter->encode($cateid_n); ?>">
                                            <div style="width: 272px; float: left; border: solid 0px #996600;">
                                                <div class="DvFloat">
                                                    <div class="DvFloat" style="text-align:right;"><span class="npgreentext">Next story</span></div>
                                                    <div class="DvFloat" style="padding-top: 5px; text-align:right;"><span class="f_darkblack"><?php echo $title_n;?><br /></span></div>
                                                </div>
                                            </div>
                                            <div style="width: 43px; float: left; border: solid 0px #0000FF; text-align: right;">
                                                
                                                  <img src="images/next_paging.png" alt="" title="" border="0">
                                                    
                                            </div>
                                        </a>
                                    </div>
                                  
                                    <?php } ?>
                                    
                                    
                                    
                                    
                                     <?php }}} ?>
											
											
											
										 
                                      
                                      
                               		 <?php }} ?>
                            </div>
                        </div>
                        
                       
					   <?php }}} ?>       
                              
                              
                        
                        
                        
                        <?php include 'view_files/add_comment.inc.php'?>  
                        
                     </div>               
                        <?php include 'includes/top_story_right.inc.php'?> 
                   </div>
                </div>
      </div>
    </div>
  </div>
</section>
<script>RetriveReocrds('Post_Comment','dvPostComments');</script>

<?php include 'includes/bottom.php'?>
<script type="text/javascript" src="js/jquery.form-2.4.0.min.js"></script>
<script type="text/javascript" src="js/jqeasy.dropdown.min.js"></script>

<script type="text/javascript" src="js/jQuery.1.8.2.js"></script> 
<script type="text/javascript" src="js/jquery.bxslider.min.js"></script> 
<script type="text/javascript" src="js/custom.js"></script>
</body>
</html>
