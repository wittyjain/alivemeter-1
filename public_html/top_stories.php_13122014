<?php include 'includes/common.inc.php'?>
<?php include 'includes/links.php'?>

<title>Informative Health Articles | Health Advice Online</title>
<meta name="description" content="All you need to know about comprehensive healthcare, expert advice, online consultations, and much more.">
<meta name="keywords" content="health information online, best health advice, health app, health articles, health expert">

<script type="text/javascript">var switchTo5x=true;</script>
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "9b2a4203-4b19-4328-922d-0dc69b8164f3", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
</head>
<body>
<?php include 'includes/top.php'?>
<section>
<?php
$doc_consult_count="";
?>
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
          <div class="b_crumb"><a href="index.php">Home></a> Top Stories </div>

        
      </div>
    
      <div class="cal_12">
        <h2 class="f_red" style="padding-left: 20px; padding-bottom: 10px;padding-top:20px;">LATEST STORIES</h2>
     
        <div class="story_box">
          
          	<ul>
		   <?php 
		   $page=1;$page_count=12;$newpagenumber="2";$retrive_Array=array();$get_array=array();
			if(isset($_GET['page'])){
				$page=$_GET['page'];
			}
			else
			{
				$page=1;
			}
			if(isset($_SESSION['UserID']))
			{
				$user_id=$_SESSION['UserID'];
			}
	
		   $retrive_Array=$get_retrive->GetCoverStory($page_count);
		   $nume=$get_retrive->GetCoverStoryCount();
	
				if($nume !="0")
				{
					$newpagenumber=($nume/$page_count);
					if($newpagenumber==""){$newpagenumber="0";}else{$newpagenumber=$newpagenumber+1;}
					$newpagenumber=round($newpagenumber);
					if($page > $newpagenumber)
					{
						$newpagenumber=1;
					}
					else
					{
						$newpagenumber="";
					}
				}
		   
		   $pagingLink = getPagingLinkBackEndFrontEnd($nume,$page_count,'',$newpagenumber,$strHostName."/top_stories.php");  
		   
		   
		   ?>
              <?php  while($get_array = mysql_fetch_array( $retrive_Array )){?>
            	<li class="blue_a">
                 <a href="<?php echo $strHostName;?>/top_stories_details.php?cid=<?php echo $converter->encode($get_array['cover_story_id']); ?>&cateid=<?php echo $converter->encode($get_array['category_id']); ?>">
                      <div class="th_im">
                        <div class="heder green" style="background-color:<?php echo $get_array['bg_color']?>"><span class="arrow" style="border-top: 8px solid <?php echo $get_array['bg_color']?>;"></span><?php echo $cat_name=GetValue("select category_name as col from tbl_category where category_id=".$get_array['category_id'], "col");?> </div>
                        
                        
                       <img alt="<?php echo $get_array['thumb_title'];?>" title="<?php echo $get_array['thumb_title'];?>" src="<?php echo $strHostName;?>/top_stories/<?php echo $get_array['thumb_image'];?>" width="193" height="74" style="margin-top:25px;"></div>
                        
                        
                      <div class="details"><?php echo $get_array['title']?></div>
                      <div class="f_us">
                      	<!--<div class="dvFloat" style="text-align:left; padding-top:3px;">
                            <span class='st_facebook' displayText=''></span>
                            <span class='st_twitter' displayText=''></span>
                            <span class='st_email' displayText=''></span>
                        </div>-->
                      </div>
              	</a> 
              </li>
            <?php  } ?>
            
          </ul>
        </div>
        
        
        <div style="text-align: center; padding: 10px 20px; width: 958px; border: solid 0px #000000; display:'';">
           
            <?php echo $pagingLink ?>
          
        </div>
      </div>
    </div>
  </div>
  </div>
</section>
<?php include 'includes/bottom.php'?>
<script type="text/javascript" src="js/jQuery.1.8.2.js"></script>
<script type="text/javascript" src="js/jquery.bxslider.min.js"></script>

<script type="text/javascript" src="js/jquery.form-2.4.0.min.js"></script>
<script type="text/javascript" src="js/jqeasy.dropdown.min.js"></script>
</body>
</html>
