<?php include 'includes/common.inc.php'?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Alivemeter</title>
<?php include 'includes/links.php'?>
<link href="style/main.css" rel="stylesheet" type="text/css">
<link href="style/jupiter.css" rel="stylesheet" type="text/css">
<link href="style/reset.css" rel="stylesheet" type="text/css">
<link href="style/fonts.css" rel="stylesheet" type="text/css">
<link href="style/bxslider.css" rel="stylesheet" type="text/css">
<link href="style/paging_style.css" rel="stylesheet" type="text/css" />
<link href="style/bhupali.css" rel="stylesheet" type="text/css">
<script type="text/javascript" language="javascript" src="js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" language="javascript" src="js/scrolltopcontrol.js"></script>
</head>
<body>
<?php include 'includes/top.php'?>
<section>
  <?php if ($doc_consult_count > 0 && $medication_count > 0 && $allergies_count > 0  && $hospitalization_count > 0 && $immunization_count > 0 && $health_problem_count > 0 && $family_history_count > 0 && $blood_pressure_count > 0 && $sugar_profile_count > 0 && $life_style_count > 0 && $lipid_profile_count > 0) { ?>
  <div class="dvFloat">
    <?php include "includes/dashboard_top.inc.php";?>
  </div>
  <?php } ?>
</section>

<section>
  <div class="top_ou">
    <div class="top_in">
      <div class="top">
       <div class="b_crumb"><a href="<?php echo $strHostName;?>/index.php">Home ></a> <a href="<?php echo $strHostName;?>/reward_points_deals.php">Reward Points</a></div>
        <h1 class="f_red"> REWARD POINTS</h1>
      </div>
    </div>
  </div>
</section>
<section>
  <div class="cal_12 m_outo">
    <div class="cal_12">
      <div class="RP_box_out">
         <div class="RP_box_out">
         <div class="dvFloat" style="padding:30px 0px 0px 0px">
		 <?php
				$query="select * from " .Reward_Points. " where reward_points_id <> 0";
					// echo ($query);
						 $result=mysql_query($query);
							//Alert($result);
								if($result !=""){
								  $rowcount=mysql_num_rows($result);
									if($rowcount>0){
									  while($rows=mysql_fetch_assoc($result)){
										 extract($rows);
											$coupons_code=$rows['coupons_code'];
											$total_coupons=$rows['total_coupons'];
											$image=$rows['image'];
											$description=$rows['description'];
											$reedem_points=$rows['reedem_points'];
			?>
       
          <div class="RP_box" style="margin-bottom:60px;"><div class="scissor_icon"> </div>
            <div class="coupons">
              <div style="float:right; padding-right:8px;"><?php echo $total_coupons; ?></div>
            </div>
            <div class="dvFloat">
              <div class="RP_box_Left"><img src="<?php echo $strHostName;?>/top_stories/<?php echo $rows['image'];?>" width="110" height="111" ></div>
              <div class="RP_box_Right"><?php echo $description; ?></div>
            </div>
            <div class="dvFloat" style="display:none;">
              <div class="rate"><?php echo $reedem_points; ?><img src="images/arrow_right.png" align="bottom"> </div>
            </div>
             <div class="dvFloat">
              <div class="rate1"> <!--<a style="cursor:pointer;" class="ratelinnk" href="<?php echo $strHostName;?>/reward_points_details.php?cid=<?php echo $converter->encode($reward_points_id);?>"> REEDEM WITH 500 REWARD POINTS--> Coming Soon <img src="images/arrow_right.png" align="absmiddle" style="float: right; margin-top: 1px; margin-right: 15px;"> <!--</a>--></div>
            
          
          </div>
		 
          
         
        </div>
        <?php }}} ?>
        
        </div>
      
      <div style="text-align: center; padding: 0px 20px; width: 958px; border: solid 0px #000000; display:none;">
	<div class="pagination">
    <div style="width: 33px; float: left; border: solid 0px #0066FF; padding: 0px; margin:-5px 0px 0px -3px;"><a href="#"><img src="images/prev_paging.png" alt="" title="" border="0" /></a></div>
    <div style="width: 893px; float: left;"><span class="selected">1</span>
    <a href="#">2</a>
    <a href="#">3</a>
    <a href="#">4</a>
    <a href="#">5</a>
    <a href="#">6</a>
    <a href="#">7</a>
    </div>
    <div style="width: 33px;  float: left; border: solid 0px #0066FF; padding: 0px; margin:-5px 0px 0px 0px;"><a href="#"><img src="images/next_paging.png" alt="" title="" border="0" /></a></div>
</div>
</div>
    </div>
  </div>
  </div>
</section>

<section>
  <div class="cal_full_size gray_bg m_b"></div>
</section>
<?php include 'includes/bottom.php'?>
<script type="text/javascript" src="js/jQuery.1.8.2.js"></script>
<script type="text/javascript" src="js/jquery.bxslider.min.js"></script>
<script type="text/javascript" src="js/custom.js"></script>

<script type="text/javascript" src="js/jquery.form-2.4.0.min.js"></script>
<script type="text/javascript" src="js/jqeasy.dropdown.min.js"></script>
</body>
</html>
