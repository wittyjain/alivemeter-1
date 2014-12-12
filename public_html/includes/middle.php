<section>
  <div class="r_1 wd1000">
    <div class="lt">
      <h2 class="f_red">HOW DOES It WORK</h2>
      <p><span></span>It is easy to manage your life when you have experts around you<br>
        <br><br>
        <a href="how_it_works.php">KNOW MORE +</a></p>
    </div>
    <div class="rt">
      <h2 class="f_red">Our Quality experts</h2>
      <p><span style="margin-right: 10px;"></span>Qualified professionals guiding you and your family with your health queries<br>
        <br><br>
        <a href="quality-experts.php">KNOW MORE +</a></p>
    </div>
  </div>
  </section>
  <section>
  <div class="r_2_wrapper">
   <div class="r_1 wd1000">      
      <a href="health.php" style="color: #FFFFFF;"><div style="width: 1000px; padding: 20px;float: left;position: relative; float: right; height: 310px; background-image: url(images/cloud1.png); background-repeat: no-repeat; background-position: bottom right; border:solid 0px red;margin:0px; padding:0px;background-color:#ececec;"> <div class="arrow"><i> </i><div style="padding:20px;">
        <h2 class="f_blue">Health</h2>
        
         <p style="padding-top: 10px; color: #666666;">We provide a set of interactive and user-friendly modules to update and manage your family&rsquo;s medical history.</p>
        <div class="h_w_icon">
        	<div style="width: 100%; float: left; padding-top: 10px;">
            	<div style="width: 53px; float: left; border: solid 0px #339966;"><img src="images/home_icon/h_01.png" alt="Electronic Health Record" title="Electronic Health Record" border="0"></div>
                <div style="width: 168px; float: left; border: solid 0px #CC3300; padding: 22px 0px 0px 15px; color: #666666;">Electronic Health Record</div>
                <div style="width: 53px; float: left; border: solid 0px #339966;"><img src="images/home_icon/h_02.png" alt="Access to expert doctors" title="Access to expert doctors" border="0"></div>
                <div style="width: 168px; float: left; border: solid 0px #CC3300; padding: 22px 0px 0px 15px; color: #666666;">Access to expert doctors</div>
                <div style="width: 53px; float: left; border: solid 0px #339966;"><img src="images/home_icon/h_05.png" alt="Dedicated Nutritionist" title="Dedicated Nutritionist" border="0"></div>
                <div style="width: 168px; float: left; border: solid 0px #CC3300; padding: 22px 0px 0px 15px; color: #666666;">Dedicated Nutritionist</div>
                
            </div>
          </div>
        <div class="h_w_icon">
        	<div style="width: 100%; float: left;">
            	<div style="width: 53px; float: left; border: solid 0px #339966;"><img src="images/home_icon/h_03.png" alt="Calorie Counter" title="Calorie Counter" border="0"></div>
                <div style="width: 168px; float: left; border: solid 0px #CC3300; padding: 22px 0px 0px 15px; color: #666666;">Calorie Counter</div>                
                <div style="width: 53px; float: left; border: solid 0px #339966;"><img src="images/home_icon/h_04.png" alt="Track your health" title="Track your health" border="0"></div>
                <div style="width: 168px; float: left; border: solid 0px #CC3300; padding: 22px 0px 0px 15px; color: #666666;">Track your health</div>
                <div style="width: 53px; float: left; border: solid 0px #339966;"><img src="images/home_icon/h_06.png" alt="Video Chat" title="Video Chat" border="0"></div>
                <div style="width: 168px; float: left; border: solid 0px #CC3300; padding: 22px 0px 0px 15px; color: #666666;">Video Chat </div>
            </div> </div>
    </div> </div> </div></a>
     
      <!--<div class="cloud"></div>-->
    </div>
  </div>
  </section>
  <section>
  <div class="r_1 wd1000">
    <div style="width: 460px; padding: 20px; float: left; position: relative;">
      <h2 class=" f_red">top stories</h2>
      <div class="top_stories" >
       <ul class="bxslider" style="border:solid 0px red; z-index:9999; position:relative;">
          <?php 
				$query = "SELECT * FROM ".Top_Story." WHERE cover_story_id <> 0 order by cover_story_id desc limit 3";
			  //  echo $query;
				$result = mysql_query($query);
				if($result != "") {
				$rowcount = mysql_num_rows($result);
				if($rowcount > 0) {
					while($row = mysql_fetch_assoc($result)) {
						extract($row);
						$title=$row['title'];
						$description=$row['description'];
						$image=$row['header_image'];
		?>
          <li><img  alt="<?php echo $home_title;?>" title="<?php echo $home_title;?>" src="<?php echo $strHostName;?>/top_stories/<?php echo $home_image;?>" style="height:108px; width:145px; border: solid 1px #666666;">
            <h3 class="t_h"><?php  echo $title; ?></h3>
            <p><?php echo  truncate($description,150);?></p>
            <p style="padding-top: 30px;">
              <a href="<?php echo $strHostName;?>/top_stories_details.php?cid=<?php echo $converter->encode($row['cover_story_id']); ?>&cateid=<?php echo $converter->encode($row['category_id']); ?>">KNOW MORE +</a></p>
          </li>
          <?php } } } ?>
        </ul>
       
        
      </div>
    </div>
    <div class="rt">
      <h2 class=" f_red">deals</h2>
      <div class="deals">
      <ul class="bxslider_1">
      <?php 
				$query1 = "SELECT * FROM ".Deal." WHERE deal_id <> 0 order by deal_id desc limit 9";
				//echo $query;
				$result1 = mysql_query($query1);
				if($result1 != "") {
				$rowcount = mysql_num_rows($result1);
				if($rowcount > 0) {
					while($row1 = mysql_fetch_assoc($result1)) {
						extract($row1);
			?>
           <li><a alt="<?php echo $row1['image_title'];?>"  title="<?php echo $row1['image_title'];?>" href="<?php echo $strHostName;?>/deals_detailspage.php?cid=<?php echo $converter->encode($deal_id)?>"><span></span><img src="<?php echo $strHostName;?>/top_stories/<?php echo $row1['image'];?>" alt="<?php echo $row1['image_title'];?>"  title="<?php echo $row1['image_title'];?>" style="width:145px; height:108px;" /><p style="color: #7ba400; padding:5px 0;"><?php echo $vendor; ?></p>
		   
		   <p style="color: #7ba400;padding:0px; margin:0px;"><?php echo $offer; ?></p>
		   </a></li>
			<?php } } } ?>
</ul>
      </div>
    </div>
  </div>
</section>
<section>
<div class="colour_g">
  <div class="r_1 wd1000" style="margin-bottom:30px">
  <div class="lt" style="padding-bottom: 45px;">
    <h2 class=" f_red">reward points</h2>
    <div class="r_p"><span style="margin-right: 0px;"></span><p>A little progress every day, adds up to big results! Earn reward points and redeem them for exciting deals on Alivemeter. Simply contribute to our online community and be ready to reap exciting rewards.</p><p style="padding-top: 15px;"><a href="reward_points.php">KNOW MORE +</a></p></div>
  </div>
      <div class="rt"> 
      <h2 class=" f_red">How it Works?</h2>
      <div class="h_w"><span style="margin-right: -10px; margin-top: -6px;"></span><p>Alivemeter appreciates your contribution to our online community. Every time you read, share and comment on articles and update your progress, you get a chance to earn reward points.<br> <br> <a href="reward_points.php#howitworks">KNOW MORE +</a></p></div>
      </div>
  </div>
</div>
</section>
