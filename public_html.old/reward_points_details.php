<?php include 'includes/common.inc.php'?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Alivemeter</title>
<?php include 'includes/links.php'?>

</head>
<body>
<?php include 'includes/top.php'?>
<script>
	
function GetCouponCode(couponid)
{
	//alert ("dfdf");
	document.getElementById("txtCoupnCode").value=couponid;
	var totalcpn = document.getElementById("txtTotalCpn").value;
	var userpoints = document.getElementById("txtUserTotalRedeemPoints").value;
	var reedeempoints = document.getElementById("txtReedeemPoints").value;
	
	
	var pendingpoints = document.getElementById("txtPendingPoints").value;
	//alert(userpoints);
//	alert(reedeempoints);
	var cpnid=couponid;
	
	//alert (totalcpn);
	
	
		if (+reedeempoints > +pendingpoints)
		{
			alert ("We regret, there are not enough points in your profile for redemption. Check our reward points page on how to earn points.");
		}
		else
		{
			
				if(confirm ("Are you sure want to redeem with this points?"))
				{	
					if(cpnid!= "" ) {
						//	document.getElementById("loading").style.display='';
							if (window.XMLHttpRequest)
							{// code for IE7+, Firefox, Chrome, Opera, Safari
								xmlhttp = new XMLHttpRequest();
							}
							else
							{// code for IE6, IE5
								xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
							}
							xmlhttp.onreadystatechange=function()
							{
								if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
								{
									message = xmlhttp.responseText;
									///document.getElementById("DvDeals").innerHTML=message;
								}
								
							}
							
							//alert(hostname+"/includes/get_coupon.inc.php?value="+cpnid);
							xmlhttp.open("GET",hostname+"/includes/get_redeem_point.inc.php?value="+cpnid, true);
							xmlhttp.send();
							Popup.showModal('dvdeals-popup',null,null,{'screenColor':'#000','screenOpacity':.6});
							
							
						}
				
				
				
				
			}
			else
			{
				alert ("Sorry! You have already got this coupon.");
			}
		}
		
		
			
		
	
}

</script>

<?php

if(isset($_SESSION['UserID'])){$user_id=$_SESSION['UserID'];}



$cateid="0";  $cid="0"; $totalpoints="0";

if(isset($_GET['cid']))
{
	$cid=$converter->decode($_GET['cid']);
}
$totalcpn=GetValue("select Count(*) as col from ".Redeem_Points."  where coupon_id=".$cid." and user_id=".$user_id."", "col");
if($totalcpn=="")
{
	$totalcpn="0";
}


if(isset($_GET['cateid']))
{
	$cateid=$converter->decode($_GET['cateid']);
	
	$catname=GetValue("select deal_cat_name as col from tbl_deal_category where deal_cat_id=".$cateid, "col");
}

$getuserrewardpoints=GetValue("select sum(reward_points) col from ".Total_Reward_Points."  where user_id=".$user_id."", "col");
$totalpoints=GetValue("select sum(redeem_points) col from ".Redeem_Points."  where user_id=".$user_id."", "col");

if($totalpoints=="")
{
	$totalpoints="0";
}


$pendingpoints=$getuserrewardpoints-$totalpoints;

	   $query="select * from " .Reward_Points. " where reward_points_id=".$cid;
		//echo $query;
		$result = mysql_query($query);
		if($result != "") {
			$rowcount = mysql_num_rows($result);
			if($rowcount > 0) {
				while($row = mysql_fetch_assoc($result)) {
					extract($row);
					$image=$row['image'];
					
				}}}	
       ?>
<section>
  <div class="top_ou">
    <div class="top_in">
      <div class="top">
        <div class="b_crumb"><a href="<?php echo $strHostName;?>/index.php">Home ></a> <a href="<?php echo $strHostName;?>/reward_points_deals.php">Reward Points</a></div>
        <h1 class="f_red">Reward Points</h1>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="cal_12 m_outo">
    <div class="cal_12">
      
      <div class="wd1000 m_t m_b">
        <div class="dealshead">
          <div class="ldv">
            <div class="wd1000 f_l">
              <div class="boxd">
                <div class="boxd_in">
                  <div class="wd1000 f_l imgs"><img src="<?php echo $strHostName;?>/top_stories/<?php echo $image;?>" width="374" height="202"></div>
                  <div class="wd1000 f_l shadow"><img src="<?php echo $strHostName;?>/images/deals/deals_details_shadow.png" alt="" title="" border="0" ></div>
                </div>
              </div>
            </div>
          </div>
          <div class="middv">
            <div class="DvFloat">
            	<div class="f_red" style="border: solid 0px #006699; width: 60%; float: left;">
              <p style="font-weight: bold; font-size: 24px;"><?php echo $coupons_code; ?></p> 
            </div>
            	<div class="rdv" style="border: solid 0px #006699; width: 39%; float: left; text-align: right;"><a><img src="images/shair_icon.gif" alt="" title="" border="0"></a></div>
            </div>
            <div class="DvFloat">
             
                  <p class="p1" style="font-size: 13px;"><?php echo $description; ?></p>
            </div>
            <div class="DvFloat">
              <div class="rated">
                <div class="rtd_final" style="width:100%;">Coupons left : <?php echo $total_coupons; ?></div>
                <?php if(isset($_SESSION['UserID'])) { ?>
                    <div class="DvFloat">
                     <div class="rated">
                        <div class="rtd_final" style="width:100%;">Points Summary</div>
                      </div>
                    <div class="DvFloat" style="margin-top:-15px;">
                        <table width="80%" border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td style="padding:5px 0;">Total reward Points</th>
                            <td><?php echo $getuserrewardpoints;?></th>
                          </tr>
                           <tr>
                            <td style="padding:5px 0;">Total redeemed Points</th>
                            <td><?php echo $totalpoints;?></th>
                          </tr>
                          
                           <tr>
                            <td style="padding:5px 0;">Pending reward Points</th>
                            <td><?php echo $pendingpoints;?></th>
                          </tr>
                          
                           <tr>
                            <td style="padding:5px 0;">This coupon is used</th>
                            <td><?php echo $totalcpn;?> times</th>
                          </tr>
                          
                          
                        </table>
    
                    </div>
                 </div>
             	<?php } ?>
              </div>
              
            </div>
            
            <div class="DvFloat">
            
           <input type="hidden" name="txtTotalCpn" id="txtTotalCpn" value="<?php echo $totalcpn;?>" /><br>
            <input type="hidden" name="txtTotalPoints" id="txtTotalPoints" value="<?php echo $totalpoints;?>" /><br>
            <input type="hidden" name="txtReedeemPoints" id="txtReedeemPoints" value="<?php echo $reedem_points;?>" /><br>
           <input type="hidden" name="txtUserTotalRedeemPoints" id="txtUserTotalRedeemPoints" value="<?php echo $getuserrewardpoints;?>" /><br>
            
            <input type="hidden" name="txtPendingPoints" id="txtPendingPoints" value="<?php echo $pendingpoints;?>" />
            
            
             
             
             <div class="cupd_btn" style="margin-top:-60px; width: 180px;">
             			
                        <?php if(isset($_SESSION['UserID'])) { ?>
							<a style="cursor: pointer;" class="buttongrey" target="_parent" onClick="javascript:GetCouponCode('<?php echo $reward_points_id;?>');">Reedem Points<span></span></a>
                        <?php } else { ?>
                        	<a class="buttongrey" onClick="javascript: alert('You must login to get this coupon.');" style="cursor:pointer; text-decoration:none;">Reedem Points<span></span></a>
                        <?php } ?>
                        </div>
            </div>
          </div>
          
        </div>
      </div>
    </div>
  </div>
</section>



</div>
</div>

<?php include 'includes/bottom.php'?>

<div id="dvdeals-popup" style="text-align: center; width: 94%; display: none;position:absoulte;;margin-top:100px; margin-left:450px;">

        
        
        <table cellpadding="0" cellspacing="0" border="0" width="486px" align="center">
            <tr>
                <td align="center" style="padding: 10px 37px 10px 350px">
                    <input type="hidden" name="txtCoupnCode" id="txtCoupnCode" value="" />
                    <input type="hidden" name="txtUserID" id="txtUserID" value="<?php echo $_SESSION['UserID']?>" />
                </td>
            </tr>
            
            

            <tr>
                <td valign="top" align="center" style="padding: 0px;">
                    <div class="DvFloat">
                    	<div style="float: left; background-image: url(images/trans-bg.png); background-repeat: repeat; border: solid 0px #FF0000; padding: 10px;">
                        	<div style="width: 457px; float: left; background-color: #FFFFFF; padding: 7px; text-align: center;">
                            	<div class="DvFloat">
                                	<div style="margin: 0px 0px 0px 430px; position: absolute; text-align: right;">
                                    	<a href="javascript:Popup.hide('dvdeals-popup'); redirectURL(window.location.href);" target="_parent" style="text-decoration: none; color: #fff;">
                                        	<img src="images/close_red.png" alt="" title="" border="0" />
                                        </a>
                                    </div>
                                </div>
                                <div class="DvFloat" style="padding: 35px 0px 0px 0px; text-align: center;">
                                	<img src="images/loading_image.jpg" alt="" title="" border="0">
                                </div>
                                <div class="DvFloat" style="padding: 20px 0px 43px 0px; text-align: center;">
                                	<span class="f_darkblack">Your have successfully redeem 500 points.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
        </table>
  </div>

<script type="text/javascript" src="js/jquery.form-2.4.0.min.js"></script>
<script type="text/javascript" src="js/jqeasy.dropdown.min.js"></script>

<script type="text/javascript" src="js/jQuery.1.8.2.js"></script>
<script type="text/javascript" src="js/jquery.bxslider.min.js"></script>
<script type="text/javascript" src="js/custom1.js"></script>
<script type="text/javascript"> $.noConflict();</script>

</body>
</html>
