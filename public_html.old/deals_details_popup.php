<?php include 'includes/common.inc.php'?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Alivemeter</title>
<?php include 'includes/links.php'?>
<link href="style/main.css" rel="stylesheet" type="text/css">
<link href="style/reset.css" rel="stylesheet" type="text/css">
<link href="style/fonts.css" rel="stylesheet" type="text/css">
<script type="text/javascript" language="javascript" src="js/jquery-1.3.2.min.js"></script>
<link href="style/paging_style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" language="javascript" src="js/scrolltopcontrol.js"></script>
<script type="text/javascript" src="gallery/jquery-1.8.3.min.js"></script>
<link rel="stylesheet" type="text/css" href="gallery/jquery.bxslider.css" media="all" />
<script type="text/javascript" src="gallery/jquery.bxslider.js"></script>
<link href="style/bhupali.css" rel="stylesheet" type="text/css">

<link rel="stylesheet" href="css/example.css" type="text/css">
<link rel="stylesheet" href="css/dropkick.css" type="text/css">
<script src="js/jquery.dropkick-1.0.0.js" type="text/javascript"></script>
<script type="text/javascript" charset="utf-8">
	$(function () {
	  $('.existing_event').dropkick({
		change: function () {
		  $(this).change();
		}
	  });
	});
</script>
<script language="JavaScript" src="js/PopUp.js" type="text/javascript"></script>

</head>
<body>
<?php include 'includes/top.php'?>
<section>
  <div class="top_ou">
    <div class="top_in">
      <div class="top">
        <div class="b_crumb"><a href="index.html">Home></a> <a href="#">Deals></a> Helath & Beauty</div>
        <h1 class="f_red">deals</h1>
      </div>
    </div>
  </div>
</section>
<section>
  <div class="cal_full_size gray_bg">
    <div class="cal_12 m_outo">
      <div class="row_01" style="padding:0;background: #f0f0f0;">
        <div class="search_deals" style="width:257px;">
          <label style="padding-top:5px; float:left">State</label>
          <label style="position:absolute; z-index:1">
          <select name="state_search" id="state_search" tabindex="1"  class="existing_event" style="width: 120px;">
            <option value="0">Select</option>
            <option value="1">Maharashtra</option>
               <option value="1">Maharashtra</option>
                  <option value="1">Maharashtra</option>
          </select>
          </label>
        </div>
        <div class="search_deals" style="width:245px;">
          <label style="padding-top:5px; float:left">City</label>
           <label style="position:absolute; z-index:1">
          <select name="city_search" id="city_search" tabindex="1"  class="existing_event" style="width: 120px;">
            <option value="0">Select</option>
            <option value="1">Maharashtra</option>
          </select>
          </label>
        </div>
        <div class="search_deals" style="width:270px;">
          <label style="padding-top:5px; float:left">Locality</label>
        <label style="position:absolute; z-index:1">
          <select name="search_locality" id="search_locality" tabindex="1"  class="existing_event" style="width: 120px;">
            <option value="0">Select</option>
            <option value="1">Maharashtra</option>
          </select>
          </label>
        </div>
        <div class="search_deals" style="width:90px;"><a href="#" class=" button1">Search</a></div>
      </div>
    </div>
  </div>
</section>
<section>
  <div class="cal_12 m_outo">
    <div class="cal_12">
      <div class="deals_menu">
        <ul>
          <li class="active"><a href="#" class="home">Health & Beauty<span>(8)</span></a></li>
          <li><a href="#" class="fitness">Fitness & Gym<span>(1)</span> </a></li>
          <li><a href="#" class="health">Healthy Foods<span>(0)</span></a></li>
          <li><a href="#" class="diagnostic">Diagnostic Centers<span>(0)</span></a></li>
        </ul>
      </div>
      <div class="wd1000 m_t m_b">
        <div class="dealshead">
          <div class="ldv">
            <div class="wd1000 f_l">
              <div class="boxd"> <i>77%<br/>
                <span style="font-size: 12px;">Off</span></i>
                <div class="boxd_in">
                  <div class="wd1000 f_l imgs"><img src="images/deals/deals_details_head01.png" alt="deals"></div>
                  <div class="wd1000 f_l shadow"><img src="images/deals/deals_details_shadow.png" alt="" title="" border="0" width="374" height="51"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="middv">
            <div class="DvFloat f_red">
              <p style="font-weight: bold; font-size: 24px;">Thyw hata</p>
            </div>
            <div class="DvFloat">
              <p class="p1" style="font-size: 13px;">Juhu, Mumbai</p>
              <p class="p1" style="font-size: 13px;">Style Up Your Hair! Pay Rs 2099 for L'Oreal Global Hair Colour (Mid Length Hair) worth Rs 6500 @ Blingg Salon</p>
            </div>
            <div class="DvFloat">
              <div class="rated">
                <div class="rtd"><span class="WebRupee">Rs.</span>6,500</div>
                <div class="rtd_final"><span class="WebRupee">Rs.</span>2,099</div>
              </div>
            </div>
            <div class="DvFloat">
              <div class="cupd_btn"><a href="#" style="cursor: pointer;" class="buttoncupon" target="_parent" onClick="javascript:Popup.showModal('dvdeals-popup',null,null,{'screenColor':'#000','screenOpacity':.6});">Get Coupon<span></span></a></div>
            </div>
          </div>
          <div class="rdv"><a href="#"><img src="images/shair_icon.gif" alt="" title="" border="0"></a></div>
        </div>
      </div>
    </div>
  </div>
</section>
<section>
  <div class="cal_full_size gray_bg m_b">
    <div class="cal_12 m_outo">
      <div class="dealsdetail">
        <div class="hdlmbox">
          <div class="f_red titlefont">Highlights</div>
          <div class="width"> <span class="f_red">&bull;</span>&nbsp; <span class="f_darkblack">Beauty Services</span><br>
            <span class="f_red">&bull;</span>&nbsp; <span class="f_darkblack">Services on Offer:</span><br>
            <span class="f_red">&bull;</span>&nbsp; <span class="f_darkblack">Full Body Polishing</span><br>
            <span class="f_red">&bull;</span>&nbsp; <span class="f_darkblack">Face Polishing and</span><br>
            <span class="f_red">&bull;</span>&nbsp; <span class="f_darkblack">Body Bleach</span><br>
            <span class="f_red">&bull;</span>&nbsp; <span class="f_darkblack">Valid for Ladies Only</span><br>
            <span class="f_red">&bull;</span>&nbsp; <span class="f_darkblack">Applicable Taxes Included</span><br>
          </div>
        </div>
        <div class="hdlmbox">
          <div class="f_red titlefont">Deal Terms</div>
          <div class="width"> <span class="f_red">&bull;</span>&nbsp; <span class="f_darkblack">Deal Terms</span><br>
            <span class="f_red">&bull;</span>&nbsp; <span class="f_darkblack">Services on Offer:</span><br>
            <span class="f_red">&bull;</span>&nbsp; <span class="f_darkblack">Full Body Polishing</span><br>
            <span class="f_red">&bull;</span>&nbsp; <span class="f_darkblack">Face Polishing and</span><br>
            <span class="f_red">&bull;</span>&nbsp; <span class="f_darkblack">Body Bleach</span><br>
            <span class="f_red">&bull;</span>&nbsp; <span class="f_darkblack">Valid for Ladies Only</span><br>
            <span class="f_red">&bull;</span>&nbsp; <span class="f_darkblack">Applicable Taxes Include</span><br>
          </div>
        </div>
        <div class="hdlmbox">
          <div class="f_red titlefont">Location</div>
          <div class="width"> <span class="f_darkblack">DShop no. 9 behind<br>
            raghuleela mall near vashi<br>
            station Phone :<br>
            4651465151<br>
            Timing : 5 am to 11 pm<br>
            Open All Days</span> </div>
        </div>
        <div class="hdlmbox">
          <div class="f_red titlefont">Map</div>
          <div class="width"> <img src="images/deals/map.jpg" alt="" title="" border="0"> </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section>
<div class="cal_12 m_outo">
  <div class="cal_12">
    <div class="dealsdetail">
      <div class="titlefont f_red">The Fine Print</div>
      <div class="width">
        <div class="h_d"> <span class="f_red">&bull;</span>&nbsp; <span class="f_darkblack">Providing the voucher code is mandatory before availing the offer</span><br>
          <span class="f_red">&bull;</span>&nbsp; <span class="f_darkblack">One voucher is valid for one person</span><br>
          <span class="f_red">&bull;</span>&nbsp; <span class="f_darkblack">Redeem the voucher in single visit</span><br>
          <span class="f_red">&bull;</span>&nbsp; <span class="f_darkblack">Prior appointment is mandatory</span><br>
          <span class="f_red">&bull;</span>&nbsp; <span class="f_darkblack">Closed on Mondays</span> </div>
        <div class="h_d"> <span class="f_red">&bull;</span>&nbsp; <span class="f_darkblack">Booking, appointments & changes are subject to availability</span><br>
          <span class="f_red">&bull;</span>&nbsp; <span class="f_darkblack">Multiple vouchers can be purchased for gifting</span><br>
          <span class="f_red">&bull;</span>&nbsp; <span class="f_darkblack">Cannot be combined with any other existing offers/ promotions</span><br>
          <span class="f_red">&bull;</span>&nbsp; <span class="f_darkblack">Taxes Included</span><br>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
<section>
  <div class="cal_full_size gray_bg m_b">
    <div class="cal_12 m_outo">
      <h1 class="f_red tx_cent" style="padding-top: 25px;">LAST VIEW DEALS</h1>
      <div class="box_out">
        <div class="box"> <i>55%<br/>
          <span style="font-size: 12px;">Off</span></i>
          <div class="box_in"><img src="images/deals/thum_01.jpg" alt="deals">
            <div class="header">
              <h5>Wisjsjs xask asjasd </h5>
              <p>Lower Parel, Mumbai</p>
            </div>
            <div class="detal">Get 78% off on Facial, Hair Spa & MORE @ Hotel Tunga Regenza-Raya Spa</div>
            <div class="rate">
              <div class="rt"><span class="WebRupee">Rs.</span>4,600</div>
              <div class="rt_final"><span class="WebRupee">Rs.</span>999</div>
              <div class="cupon_btn"><a href="#" class="buttoncupon">Get Coupon<span></span></a></div>
            </div>
            <div class="shair"><img src="images/shairgrey_icon.png" width="141" height="22" ></div>
          </div>
        </div>
        <div class="box"> <i>55%<br/>
          <span style="font-size: 12px;">Off</span></i>
          <div class="box_in"><img src="images/deals/thum_02.jpg" alt="deals">
            <div class="header">
              <h5>Utyegharyh akajsk </h5>
              <p>Oshiwara, Mumbai</p>
            </div>
            <div class="detal">Get 78% off on Facial, Hair Spa & MORE @ Hotel Tunga Regenza-Raya Spa</div>
            <div class="rate">
              <div class="rt"><span class="WebRupee">Rs.</span>6,780</div>
              <div class="rt_final"><span class="WebRupee">Rs.</span>1,299</div>
              <div class="cupon_btn"><a href="#" class="buttoncupon">Get Coupon<span></span></a></div>
            </div>
            <div class="shair"><img src="images/shairgrey_icon.png" width="141" height="22" ></div>
          </div>
        </div>
        <div class="box" style="margin-right:0"> <i>55%<br/>
          <span style="font-size: 12px;">Off</span></i>
          <div class="box_in"><img src="images/deals/thum_03.jpg" alt="deals">
            <div class="header">
              <h5>Iokljsy haoahks </h5>
              <p>Andheri (W), Mumbai</p>
            </div>
            <div class="detal">Get 78% off on Facial, Hair Spa & MORE @ Hotel Tunga Regenza-Raya Spa</div>
            <div class="rate">
              <div class="rt"><span class="WebRupee">Rs.</span>3,600</div>
              <div class="rt_final"><span class="WebRupee">Rs.</span>799</div>
              <div class="cupon_btn"><a href="#" class="buttoncupon">Get Coupon<span></span></a></div>
            </div>
            <div class="shair"><img src="images/shairgrey_icon.png" width="141" height="22" ></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section>
  <div class="cal_12 m_outo">
    <div class="cal_12 m_t">
      <h1 class="f_red tx_cent">Deals You might also Like </h1>
      <div class="box_out">
        <div class="box"> <i>55%<br/>
          <span style="font-size: 12px;">Off</span></i>
          <div class="box_in"><img src="images/deals/thum_04.jpg" alt="deals">
            <div class="header">
              <h5>Ptayrkj Hlacjksda </h5>
              <p>Kamala Nagar, New Delhi</p>
            </div>
            <div class="detal">Get 78% off on Facial, Hair Spa & MORE @ Hotel Tunga Regenza-Raya Spa</div>
            <div class="rate">
              <div class="rt"><span class="WebRupee">Rs.</span>4,600</div>
              <div class="rt_final"><span class="WebRupee">Rs.</span>999</div>
              <div class="cupon_btn"><a href="#" class="buttoncupon">Get Coupon<span></span></a></div>
            </div>
            <div class="shair"><img src="images/shair_icon.gif" width="141" height="22" ></div>
          </div>
        </div>
        <div class="box"> <i>55%<br/>
          <span style="font-size: 12px;">Off</span></i>
          <div class="box_in"><img src="images/deals/thum_05.jpg" alt="deals">
            <div class="header">
              <h5>Hotyenk Kjshsu ds</h5>
              <p>Model Town, New Delhi</p>
            </div>
            <div class="detal">Get 78% off on Facial, Hair Spa & MORE @ Hotel Tunga Regenza-Raya Spa</div>
            <div class="rate">
              <div class="rt"><span class="WebRupee">Rs.</span>6,780</div>
              <div class="rt_final"><span class="WebRupee">Rs.</span>1,299</div>
              <div class="cupon_btn"><a href="#" class="buttoncupon">Get Coupon<span></span></a></div>
            </div>
            <div class="shair"><img src="images/shair_icon.gif" width="141" height="22" ></div>
          </div>
        </div>
        <div class="box" style="margin-right:0"> <i>55%<br/>
          <span style="font-size: 12px;">Off</span></i>
          <div class="box_in"><img src="images/deals/thum_06.jpg" alt="deals">
            <div class="header">
              <h5>Rtejhdsug akakj ak</h5>
              <p>Lane road, Mumbai</p>
            </div>
            <div class="detal">Get 78% off on Facial, Hair Spa & MORE @ Hotel Tunga Regenza-Raya Spa</div>
            <div class="rate">
              <div class="rt"><span class="WebRupee">Rs.</span>3,600</div>
              <div class="rt_final"><span class="WebRupee">Rs.</span>799</div>
              <div class="cupon_btn"><a href="#" class="buttoncupon">Get Coupon<span></span></a></div>
            </div>
            <div class="shair"><img src="images/shair_icon.gif" width="141" height="22" ></div>
          </div>
        </div>
        <div class="box"> <i>55%<br/>
          <span style="font-size: 12px;">Off</span></i>
          <div class="box_in"><img src="images/deals/thum_04.jpg" alt="deals">
            <div class="header">
              <h5>Ptayrkj Hlacjksda </h5>
              <p>Kamala Nagar, New Delhi</p>
            </div>
            <div class="detal">Get 78% off on Facial, Hair Spa & MORE @ Hotel Tunga Regenza-Raya Spa</div>
            <div class="rate">
              <div class="rt"><span class="WebRupee">Rs.</span>4,600</div>
              <div class="rt_final"><span class="WebRupee">Rs.</span>999</div>
              <div class="cupon_btn"><a href="#" class="buttoncupon">Get Coupon<span></span></a></div>
            </div>
            <div class="shair"><img src="images/shair_icon.gif" width="141" height="22" ></div>
          </div>
        </div>
        <div class="box"> <i>55%<br/>
          <span style="font-size: 12px;">Off</span></i>
          <div class="box_in"><img src="images/deals/thum_05.jpg" alt="deals">
            <div class="header">
              <h5>Hotyenk Kjshsu ds </h5>
              <p>Model Town, New Delhi</p>
            </div>
            <div class="detal">Get 78% off on Facial, Hair Spa & MORE @ Hotel Tunga Regenza-Raya Spa</div>
            <div class="rate">
              <div class="rt"><span class="WebRupee">Rs.</span>4,600</div>
              <div class="rt_final"><span class="WebRupee">Rs.</span>999</div>
              <div class="cupon_btn"><a href="#" class="buttoncupon">Get Coupon<span></span></a></div>
            </div>
            <div class="shair"><img src="images/shair_icon.gif" width="141" height="22" ></div>
          </div>
        </div>
        <div class="box" style="margin: 0;"> <i>55%<br/>
          <span style="font-size: 12px;">Off</span></i>
          <div class="box_in"><img src="images/deals/thum_06.jpg" alt="deals">
            <div class="header">
              <h5>Rtejhdsug akakj ak</h5>
              <p>Lane road, Mumbai</p>
            </div>
            <div class="detal">Get 78% off on Facial, Hair Spa & MORE @ Hotel Tunga Regenza-Raya Spa</div>
            <div class="rate">
              <div class="rt"><span class="WebRupee">Rs.</span>4,600</div>
              <div class="rt_final"><span class="WebRupee">Rs.</span>999</div>
              <div class="cupon_btn"><a href="#" class="buttoncupon">Get Coupon<span></span></a></div>
            </div>
            <div class="shair"><img src="images/shair_icon.gif" width="141" height="22" ></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php include 'includes/bottom.php'?>
<script type="text/javascript" src="js/jQuery.1.8.2.js"></script>
<script type="text/javascript" src="js/jquery.bxslider.min.js"></script>
<script type="text/javascript" src="js/custom1.js"></script>


<div id="dvdeals-popup" style="text-align: center; width: 94%; display: none;position:absoulte;;margin-top:100px; margin-left:450px;">
        <table cellpadding="0" cellspacing="0" border="0" width="486px" align="center">
            <tr>
                <td align="center" style="padding: 10px 37px 10px 350px">
                    
                </td>
            </tr>
            <tr>
                <td valign="top" align="center" style="padding: 0px;">
                    <div class="DvFloat">
                    	<div style="float: left; background-image: url(images/trans-bg.png); background-repeat: repeat; border: solid 0px #FF0000; padding: 10px;">
                        	<div style="width: 457px; float: left; background-color: #FFFFFF; padding: 7px; text-align: center;">
                            	<div class="DvFloat">
                                	<div style="margin: 0px 0px 0px 430px; position: absolute; text-align: right;">
                                    	<a href="javascript:Popup.hide('dvdeals-popup');" target="_parent" style="text-decoration: none; color: #fff;">
                                        	<img src="images/close_red.png" alt="" title="" border="0" />
                                        </a>
                                    </div>
                                </div>
                                <div class="DvFloat" style="padding: 35px 0px 0px 0px; text-align: center;">
                                	<img src="images/loading_image.jpg" alt="" title="" border="0">
                                </div>
                                <div class="DvFloat" style="padding: 20px 0px 43px 0px; text-align: center;">
                                	<span class="f_darkblack">Your Coupon code has been sent to your registered email id</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
        </table>
  </div>
  
  <script type="text/javascript" src="js/jquery.form-2.4.0.min.js"></script>
<script type="text/javascript" src="js/jqeasy.dropdown.min.js"></script><script type="text/javascript"> $.noConflict();</script>

</body>
</html>
