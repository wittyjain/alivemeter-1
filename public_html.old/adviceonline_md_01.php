<?php include 'includes/common.inc.php'?>
<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Alivemeter</title>
<?php include 'includes/links.php'?>
<link rel="stylesheet" type="text/css" href="style/tabcontent.css" />
<script type="text/javascript" src="js/tabcontent.js"></script>
<link href="style/main.css" rel="stylesheet" type="text/css">
<link href="style/reset.css" rel="stylesheet" type="text/css">
<link href="style/fonts.css" rel="stylesheet" type="text/css">
<link href="style/bxslider.css" rel="stylesheet" type="text/css">
<link href="style/jupiter.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="css/lightbox.css" type="text/css" />
<style type="text/css">
#dd_nav{
	list-style:none;	
	float:right;
	width:247px;
	position:absolute;
	z-index:1;
	margin-top:0px;
	margin-left: 433px;
	border:solid 0px red;line-height:20px;
	
}
#dd_nav li {
	float:left;
	margin-right:10px;
	position:relative;
}
#dd_nav a {
	display:block;
	padding: 0px 0px 0px 12px;
	color:#fff;
	text-decoration:none;
}
#dd_nav a:hover {
	color:#fff;
}
#dd_nav ul {
	list-style:none;
	position:absolute;
	left:-9999px;
}
#dd_nav ul li {
	padding-top:1px;
	float:none;
	padding-left:5px;
}
#dd_nav ul a {
	white-space:nowrap;
}
#dd_nav li:hover ul {
	left:0;
}
#dd_nav li:hover a {
	text-decoration:none;
}
#dd_nav li:hover ul a {
	text-decoration:none;
}
#dd_nav li:hover ul li a:hover {
/
}
</style>
<link type="text/css" rel="stylesheet" href="css/style.css" />
<link href="style/bhupali.css" rel="stylesheet" type="text/css">
<link href="style/paging_md.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" href="css/example.css" type="text/css">
<link rel="stylesheet" href="css/dropkick.css" type="text/css">
<script src="js/jquery.min.js" type="text/javascript"></script>
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
</head>
<body>
<?php include 'includes/top.php'?>

<section>
  <div class="top_ou">
    <div class="top_in">
      <div class="top">
        <div class="cal_12" style="padding-top: 15px;">
          <h1 class="f_red" style="text-align: left; font-size: 18px;">SEARCH</h1>
          <div class="cal_12" style="border: solid 0px #0066CC;">
            <div class="adviceonline_md">
              <div class="DvFloat">
                <div class="DvFloat">
                  <div class="amd_left">
                    <div class="DvFloat">
                      <div style="float: left; padding-left: 10px; padding-top: 6px;" class="f_grey">Search Refer from</div>
                      <div style="float: left; padding-left: 10px;">
                        <select id="all_doctor" name="all_doctor" class="existing_event" tabindex="1" style="width: 150px;">
                          <option value="Select">All Doctor</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="amd_right">
                    <div class="DvFloat">
                      <div class="DvFloat">
                        <div style="float: left; padding-left: 10px; width: 70px;" class="f_grey">&nbsp;</div>
                        <div style="float: left; padding-left: 10px; width: 195px;" class="f_grey"> From </div>
                        <div style="float: left; padding-left: 10px; width: 70px;" class="f_grey"> To </div>
                      </div>
                      <div class="DvFloat">
                        <div style="float: left; padding-left: 13px; padding-top: 5px;" class="f_grey">Search Date</div>
                        <div style="float: left; padding-left: 4px;">
                          <div class="dvFloat">
                            <div style="float:left; padding:0px 4px 0px 0px">
                              <select id="cmb_Date" name="cmb_Date"  title=""  tabindex="1" class="existing_event" style="width: 4px;">
                                <option value="DD">DD</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>
                                <option>10</option>
                                <option>11</option>
                                <option>12</option>
                                <option>13</option>
                                <option>14</option>
                                <option>15</option>
                                <option>16</option>
                                <option>17</option>
                                <option>18</option>
                                <option>19</option>
                                <option>20</option>
                                <option>21</option>
                                <option>22</option>
                                <option>23</option>
                                <option>24</option>
                                <option>25</option>
                                <option>26</option>
                                <option>27</option>
                                <option>28</option>
                                <option>29</option>
                                <option>30</option>
                                <option>31</option>
                              </select>
                            </div>
                            <div style="float:left; padding:0px 4px 0px 0px">
                              <select id="cmb_Month" name="cmb_Month"  tabindex="1" class="existing_event" style="width: 4px;">
                                <option value="MM">MM</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>
                                <option>10</option>
                                <option>11</option>
                                <option>12</option>
                              </select>
                            </div>
                            <div style="float:left; padding:0px 0px 0px 0px">
                              <select  id="cmb_Year" name="cmb_Year"   tabindex="1" class="existing_event"style="width: 4px;">
                                <option value="YYYY">YYYY</option>
                                <option>2006</option>
                                <option>2007</option>
                                <option>2008</option>
                                <option>2009</option>
                                <option>2014</option>
                                <option>2010</option>
                                <option>2011</option>
                                <option>2012</option>
                                <option>2013</option>
                                <option>2014</option>
                              </select>
                            </div>
                          </div>
                        </div>
                        <div style="float: left; padding-left: 5px;">
                          <div class="dvFloat">
                            <div style="float:left; padding:0px 4px 0px 0px">
                              <select id="cmb_Date1" name="cmb_Date1"  tabindex="1" class="existing_event" style="width: 4px;">
                                <option value="DD">DD</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>
                                <option>10</option>
                                <option>11</option>
                                <option>12</option>
                                <option>13</option>
                                <option>14</option>
                                <option>15</option>
                                <option>16</option>
                                <option>17</option>
                                <option>18</option>
                                <option>19</option>
                                <option>20</option>
                                <option>21</option>
                                <option>22</option>
                                <option>23</option>
                                <option>24</option>
                                <option>25</option>
                                <option>26</option>
                                <option>27</option>
                                <option>28</option>
                                <option>29</option>
                                <option>30</option>
                                <option>31</option>
                              </select>
                            </div>
                            <div style="float:left; padding:0px 4px 0px 0px">
                              <select  id="cmb_Month1" name="cmb_Month1"  tabindex="1" class="existing_event" style="width: 4px;">
                                <option value="MM">MM</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>
                                <option>10</option>
                                <option>11</option>
                                <option>12</option>
                              </select>
                            </div>
                            <div style="float:left; padding:0px 0px 0px 0px">
                              <select id="cmb_Year1" name="cmb_Year1"  tabindex="1" class="existing_event" style="width: 4px;">
                                <option value="YYYY">YYYY</option>
                                <option>2006</option>
                                <option>2007</option>
                                <option>2008</option>
                                <option>2009</option>
                                <option>2014</option>
                                <option>2010</option>
                                <option>2011</option>
                                <option>2012</option>
                                <option>2013</option>
                                <option>2014</option>
                              </select>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="DvFloat">
                      <div class="DvFloat" style="padding-top: 6px;">
                        <div style="float: right; padding-bottom: 10px; width: 210px; border: solid 0px #99FF00;">
                          <div style=" width:85px; height:20px; float:left"> <a href="register_step1.html" class="buttonreset" style="text-align:center">Reset</a></div>
                          <div style=" width:115px; height:20px; float:right;"> <a href="register_step3.html" class="buttonsearch" style="text-align:center">Search<span></span></a></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="DvFloat amd_borbtmp">
                  <div style="width: 40%; float: left; padding-top: 5px;" class="f_grey"><span style="font-weight: bold;">Total Records Found :</span> 232</div>
                  <div style="width: 40%; float: right; text-align: right;" class="f_grey">
                    <div style="float: left; padding-right: 5px; text-align: right; width: 315px; padding-top: 6px;"><span style="font-weight: bold;">Page Size</span></div>
                    <div style="float: right; padding-left: 5px;">
                      <select  id="cmb_pageno" name="cmb_pageno" tabindex="1" class="existing_event"  title="" style="width: 2px;">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                        <option>9</option>
                        <option selected>10</option>
                        <option>11</option>
                        <option>12</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="DvFloat">
                  <div class="DvFloat" style="border-bottom: solid 1px #e1e1e1;">
                    <div class="amd_toreleft">
                      <div class="datebox">26-Dec-2013 <br>
                        14:37 PM </div>
                      <div class="photoboxbg">
                        <div class="photobox"> <a href="adviceonline_md_02.html"><img src="images/adviceonline_md_img.png" alt="" title="" border="0"></a> </div>
                      </div>
                      <div class="detailbox"><a href="adviceonline_md_02.html"> <span style="font-weight: bold;">Kumar Amit</span><br>
                        <span style="font-weight: bold;">Ask Queries :</span> Accute Stomach Pain<br>
                        <span style="font-weight: bold;">Reffer from :</span> doctor</a> </div>
                      <div class="arrowimgbox"> <a href="#"><img src="images/adviceonline_md_arrowimg.png" alt="" title="" border="0"></a> </div>
                    </div>
                    <div class="amd_toreright">
                      <div class="datebox">26-Dec-2013 <br>
                        14:37 PM </div>
                      <div class="photoboxbg">
                        <div class="photobox"> <img src="images/adviceonline_md_img.png" alt="" title="" border="0"> </div>
                      </div>
                      <div class="detailbox"> <span style="font-weight: bold;">Kumar Amit</span><br>
                        <span style="font-weight: bold;">Ask Queries :</span> Accute Stomach Pain<br>
                        <span style="font-weight: bold;">Reffer from :</span> doctor </div>
                      <div class="arrowimgbox"> <a href="#"><img src="images/adviceonline_md_arrowimg.png" alt="" title="" border="0"></a> </div>
                    </div>
                  </div>
                  <div class="DvFloat" style="border-bottom: solid 1px #e1e1e1;">
                    <div class="amd_toreleft">
                      <div class="datebox">26-Dec-2013 <br>
                        14:37 PM </div>
                      <div class="photoboxbg">
                        <div class="photobox"> <img src="images/adviceonline_md_img.png" alt="" title="" border="0"> </div>
                      </div>
                      <div class="detailbox"> <span style="font-weight: bold;">Kumar Amit</span><br>
                        <span style="font-weight: bold;">Ask Queries :</span> Accute Stomach Pain<br>
                        <span style="font-weight: bold;">Reffer from :</span> doctor </div>
                      <div class="arrowimgbox"> <a href="#"><img src="images/adviceonline_md_arrowimg.png" alt="" title="" border="0"></a> </div>
                    </div>
                    <div class="amd_toreright">
                      <div class="datebox">26-Dec-2013 <br>
                        14:37 PM </div>
                      <div class="photoboxbg">
                        <div class="photobox"> <img src="images/adviceonline_md_img.png" alt="" title="" border="0"> </div>
                      </div>
                      <div class="detailbox"> <span style="font-weight: bold;">Kumar Amit</span><br>
                        <span style="font-weight: bold;">Ask Queries :</span> Accute Stomach Pain<br>
                        <span style="font-weight: bold;">Reffer from :</span> doctor </div>
                      <div class="arrowimgbox"> <a href="#"><img src="images/adviceonline_md_arrowimg.png" alt="" title="" border="0"></a> </div>
                    </div>
                  </div>
                  <div class="DvFloat" style="border-bottom: solid 1px #e1e1e1;">
                    <div class="amd_toreleft">
                      <div class="datebox">26-Dec-2013 <br>
                        14:37 PM </div>
                      <div class="photoboxbg">
                        <div class="photobox"> <img src="images/adviceonline_md_img.png" alt="" title="" border="0"> </div>
                      </div>
                      <div class="detailbox"> <span style="font-weight: bold;">Kumar Amit</span><br>
                        <span style="font-weight: bold;">Ask Queries :</span> Accute Stomach Pain<br>
                        <span style="font-weight: bold;">Reffer from :</span> doctor </div>
                      <div class="arrowimgbox"> <a href="#"><img src="images/adviceonline_md_arrowimg.png" alt="" title="" border="0"></a> </div>
                    </div>
                    <div class="amd_toreright">
                      <div class="datebox">26-Dec-2013 <br>
                        14:37 PM </div>
                      <div class="photoboxbg">
                        <div class="photobox"> <img src="images/adviceonline_md_img.png" alt="" title="" border="0"> </div>
                      </div>
                      <div class="detailbox"> <span style="font-weight: bold;">Kumar Amit</span><br>
                        <span style="font-weight: bold;">Ask Queries :</span> Accute Stomach Pain<br>
                        <span style="font-weight: bold;">Reffer from :</span> doctor </div>
                      <div class="arrowimgbox"> <a href="#"><img src="images/adviceonline_md_arrowimg.png" alt="" title="" border="0"></a> </div>
                    </div>
                  </div>
                  <div class="DvFloat" style="border-bottom: solid 1px #e1e1e1;">
                    <div class="amd_toreleft">
                      <div class="datebox">26-Dec-2013 <br>
                        14:37 PM </div>
                      <div class="photoboxbg">
                        <div class="photobox"> <img src="images/adviceonline_md_img.png" alt="" title="" border="0"> </div>
                      </div>
                      <div class="detailbox"> <span style="font-weight: bold;">Kumar Amit</span><br>
                        <span style="font-weight: bold;">Ask Queries :</span> Accute Stomach Pain<br>
                        <span style="font-weight: bold;">Reffer from :</span> doctor </div>
                      <div class="arrowimgbox"> <a href="#"><img src="images/adviceonline_md_arrowimg.png" alt="" title="" border="0"></a> </div>
                    </div>
                    <div class="amd_toreright">
                      <div class="datebox">26-Dec-2013 <br>
                        14:37 PM </div>
                      <div class="photoboxbg">
                        <div class="photobox"> <img src="images/adviceonline_md_img.png" alt="" title="" border="0"> </div>
                      </div>
                      <div class="detailbox"> <span style="font-weight: bold;">Kumar Amit</span><br>
                        <span style="font-weight: bold;">Ask Queries :</span> Accute Stomach Pain<br>
                        <span style="font-weight: bold;">Reffer from :</span> doctor </div>
                      <div class="arrowimgbox"> <a href="#"><img src="images/adviceonline_md_arrowimg.png" alt="" title="" border="0"></a> </div>
                    </div>
                  </div>
                  <div class="DvFloat" style="border-bottom: solid 1px #e1e1e1;">
                    <div class="amd_toreleft">
                      <div class="datebox">26-Dec-2013 <br>
                        14:37 PM </div>
                      <div class="photoboxbg">
                        <div class="photobox"> <img src="images/adviceonline_md_img.png" alt="" title="" border="0"> </div>
                      </div>
                      <div class="detailbox"> <span style="font-weight: bold;">Kumar Amit</span><br>
                        <span style="font-weight: bold;">Ask Queries :</span> Accute Stomach Pain<br>
                        <span style="font-weight: bold;">Reffer from :</span> doctor </div>
                      <div class="arrowimgbox"> <a href="#"><img src="images/adviceonline_md_arrowimg.png" alt="" title="" border="0"></a> </div>
                    </div>
                    <div class="amd_toreright">
                      <div class="datebox">26-Dec-2013 <br>
                        14:37 PM </div>
                      <div class="photoboxbg">
                        <div class="photobox"> <img src="images/adviceonline_md_img.png" alt="" title="" border="0"> </div>
                      </div>
                      <div class="detailbox"> <span style="font-weight: bold;">Kumar Amit</span><br>
                        <span style="font-weight: bold;">Ask Queries :</span> Accute Stomach Pain<br>
                        <span style="font-weight: bold;">Reffer from :</span> doctor </div>
                      <div class="arrowimgbox"> <a href="#"><img src="images/adviceonline_md_arrowimg.png" alt="" title="" border="0"></a> </div>
                    </div>
                  </div>
                </div>
                <div class="DvFloat">
                  <div style="text-align: center; padding: 0px 0px; width: 967px; float: left; border: solid 0px #000000;">
                    <div class="pagination_md">
                      <div style="width: 22px; float: left; border: solid 0px #0066FF; padding: 0px; margin:-5px 0px 0px 0px;"><a href="#"><img src="images/prev_md_paging.png" alt="" title="" border="0" /></a></div>
                      <div style="width: 917px; float: left; border: solid 0px #006600;"><span class="selected">1</span> <a href="#">2</a> <a href="#">3</a> <a href="#">4</a> <a href="#">5</a> <a href="#">6</a> <a href="#">7</a> </div>
                      <div style="width: 22px;  float: left; border: solid 0px #0066FF; padding: 0px; margin:-5px 0px 0px 0px;"><a href="#"><img src="images/next_md_paging.png" alt="" title="" border="0" /></a></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</div>
</section>
   <?php include 'includes/bottom.php'?>
<script type="text/javascript" src="js/jQuery.1.8.2.js"></script>
<script type="text/javascript" src="js/jquery.bxslider.min.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<script type="text/javascript" src="js/jquery.bxslider.min.js"></script>
<script type="text/javascript" src="js/custom1.js"></script>
<script type="text/javascript"> $.noConflict();</script>

</body>
</html>
