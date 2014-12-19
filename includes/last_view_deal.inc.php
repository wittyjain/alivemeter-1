<?php
if(isset($_SESSION['UserID'])){$user_id=$_SESSION['UserID'];}
$cateid="0";  $cid="0";

if(isset($_GET['cid']))
{
	$cid=$converter->decode($_GET['cid']);
}

if(isset($_GET['cateid']))
{
	$cateid=$converter->decode($_GET['cateid']);
	$catname=GetValue("select deal_cat_name as col from tbl_deal_category where deal_cat_id=".$cateid, "col");
}

?>

<section style="display:none;">
  <div class="cal_full_size gray_bg m_b">
    <div class="cal_12 m_outo">
      <h1 class="f_red tx_cent" style="padding-top: 25px;">LASTEST VIEW DEALS</h1>
     	<div class="box_out">
     <?php 
	   $query1 = "SELECT * FROM ".Deal." WHERE deal_id <> ".$cid." order by deal_id desc";
		//echo $query;
		$result1 = mysql_query($query1);
		if($result1 != "") {
			$rowcount = mysql_num_rows($result1);
			if($rowcount > 0) {
				while($row1 = mysql_fetch_assoc($result1)) {
					extract($row1);
					$image=$row1['image'];
					
					$locality=GetValue("select location_name as col from ".Location." where location_id=".$locality, "col");
					$city=GetValue("select city_name as col from ".City." where city_id=".$city, "col");		
       ?> 
       
        <div class="box"> <i><?php echo $offer; ?><br/>
          <span style="font-size: 12px;"></span></i>
          <div class="box_in"> <img src="<?php echo $strHostName;?>/top_stories/<?php echo $row1['image'];?>" width="265" height="90" >
    <div class="header" style="border:solid 0px green; height:35px;">
      <h5><?php echo $vendor; ?> </h5>
      <p><?php echo $locality; ?>, <?php echo $city; ?></p>
    </div>
    <div class="detal" style="border:solid 0px green; height:39px;"><?php echo $title; ?></div>
    <div class="rate" style="border:solid 0px red; height:32px;">
      <div class="rt"><span class="WebRupee">Rs.</span><?php echo $cut_price; ?></div>
      <div class="rt_final"><span class="WebRupee">Rs.</span><?php echo $actual_price; ?></div>
      <div class="cupon_btn"><a href="<?php echo $strHostName;?>/deals_detailspage.php?cid=<?php echo $converter->encode($row1['deal_id']);?>&cateid=<?php echo $converter->encode($row1['deal_category']);?>" class="buttoncupon" style="text-decoration:none; cursor:pointer;">Get Coupon<span></span></a></div>
    </div>
    <div class="shair"><!--<div class="dvFloat" style="text-align:right; padding-top:3px;">
                	<span class='st_facebook' displayText=''></span>
                    <span class='st_twitter' displayText=''></span>
                    <span class='st_email' displayText=''></span>
                </div>--></div>
  </div>
        </div>
        <?php } } } ?>
        
        
      </div>
     </div>
  </div>
</section>