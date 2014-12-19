<div class="right">
  <div class="greybg">
    <div class="DvFloat">
      <div class="DvFloat">
        <div class="DvFloat">
          <div style="font-size: 14px; text-transform: uppercase; border-bottom: solid 1px #cbcbcb; padding-bottom: 6px;" class="f_dgreen">Latest  stories</div>
        </div>
        <div class="DvFloat" style="padding-top: 11px; line-height: 20px;">
      
      
      
      
      
         
        <?php 
		
		$cid="0";
		if(isset($_GET['cid']))
		{
			$cid = $converter->decode($_GET['cid']);
		//	Alert($cid);
		}
		
		if(isset($_GET['cateid']))
		{
			//$cateid = $converter->decode($_GET['cateid']);
		//	Alert($cateid);
		}
		$cat_name=GetValue("select category_name as col from tbl_category where category_id=".$cateid, "col");
		
		?>
       
       
        <?php 
		
	
			$query_1 = "SELECT * FROM  tbl_category where isactive=1 and isdeleted=0";
			///echo $query_1;
			$result_1 = mysql_query($query_1);							
			if($result_1 != "") {	
				$rowcount  = mysql_num_rows($result_1);
				if($rowcount > 0) {
					while($row_1 = mysql_fetch_assoc($result_1)) {
						extract($row_1);
						$cat_name=$row_1['category_name'];
			
			
						
						
		?>
       
          <p class="f_red" style="text-transform: uppercase; padding-top:15px;"><?php echo $row_1['category_name'];?></p>
       
        <?php  
		
	
			$query_c = "SELECT * FROM  ".Top_Story." where isactive=1 and isdeleted=0 and category_id=".$row_1['category_id']." order by cover_story_id desc";
			//echo $query_c;
			$result_c = mysql_query($query_c);							
			if($result_c != "") {	
				$rowcount  = mysql_num_rows($result_c);
				if($rowcount > 0) {
					while($row_c = mysql_fetch_assoc($result_c)) {
						extract($row_c);
						$title=$row_c['title'];
						$cateid=$row_c['category_id'];
						$article_id=$row_c['cover_story_id'];
						$cover_story_id=$row_c['cover_story_id'];
						$created_date=$row_c['created_date'];
						$header_image=$row_c['header_image'];
						
						
						
		?>
            <div class="dvFloat" style="padding:5px 0 5px 0;">
          <a href="<?php echo $strHostName;?>/stories/<?php echo $row_c['url_title']?>/<?php echo $converter->encode($row_c['cover_story_id']); ?>"><span class="f_darkblack" style="font-size: 14px;"><?php echo $title;?></span></a> </div>
       
       <?php }}} ?>
       
       
          <?php }}} ?>
       </div>
      
      
    </div>
  </div>
</div>
