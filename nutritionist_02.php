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
<link href="style/jupiter.css" rel="stylesheet" type="text/css">
<style type="text/css">
#dd_nav {
	list-style:none;
	border:solid 0px red;
	float:right;
	width:247px;
	position:absolute;
	z-index:1;
	margin-top:0px;
	margin-left: 433px;
	border:solid 0px red;
	line-height:20px;
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
}
</style>

<!--<script type="text/javascript" src="lib/jquery-1.10.1.min.js"></script>-->
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
          <h1 class="f_red" style="text-align: left; font-size: 18px;">CLIENT PROFILE</h1>
          <div class="cal_12" style="border: solid 0px #0066CC;">
            <div class="DvFloat">
              <div style="float:left; width:350px; border:solid 0px red;">
                <div class="DvFloat">
                  <div style="float: left; padding-top: 6px; width:75px;" class="f_grey">User Name</div>
                  <div style="float: left; padding-left: 10px;">
                    <input type="text" name="txt_UserName" id="txt_UserName" value="" style="width: 200px;" />
                  </div>
                </div>
                <div class="DvFloat" style="padding-top: 0px; text-align: left;">
                  <div style="float: left; padding-top: 6px; width:75px; text-align: left;" class="f_grey">Active</div>
                  <div style="float: left; padding-left: 10px;">
                    <select id="Active" name="Active" class="existing_event" tabindex="1" style="width: 161px;">
                      <option value="Select">Select</option>
                    </select>
                  </div>
                </div>
                <div class="DvFloat" style="padding-top: 0px; text-align: left;">
                  <div style="float: left; padding-top: 6px; width:75px; text-align: left;" class="f_grey">User Id</div>
                  <div style="float: left; padding-left: 10px;">
                    <input type="text" name="txt_MobileNo" id="txt_MobileNo" value="" style="width: 200px;" />
                  </div>
                </div>
              </div>
              <div style="float:left; width:350px; border:solid 0px red;">
                <div class="DvFloat">
                  <div style="float: left; padding-top: 6px; padding-left: 10px;width:75px;" class="f_grey">Mobile No</div>
                  <div style="float: left; padding-left: 10px;">
                    <input type="text" name="txt_MobileNo" id="txt_MobileNo" value="" style="width: 200px;" />
                  </div>
                </div>
                <div class="DvFloat">
                  <div style="float: left; padding-top: 6px; padding-left: 10px; width:75px;" class="f_grey">Email Id</div>
                  <div style="float: left; padding-left: 10px;">
                    <input type="text" name="txt_MobileNo" id="txt_MobileNo" value="" style="width: 200px;" />
                  </div>
                </div>
                <div class="DvFloat">
                <div style="float: left; padding-top: 6px; padding-left: 10px;width:75px;" class="f_grey">City Name</div>
                <div style="float: left; padding-left: 10px;">
                  <input type="text" name="txt_MobileNo" id="txt_MobileNo" value="" style="width: 200px;" />
                </div>
              </div>
              <div class="DvFloat">
                <div style="float: left; padding-bottom: 10px; padding-top: 10px; padding-left: 100px;  width: 210px; border: solid 0px #99FF00;">
                  <div style=" width:85px; height:20px; float:left"> <a href="#" class="buttonreset" style="text-align:center">Reset</a></div>
                  <div style=" width:115px; height:20px; float:right;"> <a href="#" class="buttonsearch" style="text-align:center">Search<span></span></a></div>
                </div>
              </div>
              </div>
              
              
            </div>
            <div class="adviceonline_md">
              <div class="DvFloat">
                <div class="DvFloat" style="border-bottom: solid 0px #e1e1e1; border-top: solid 1px #e1e1e1; margin-top: 16px; padding: 5px 0px;">
                  <div style="width: 40%; float: left; padding-top: 10px;" class="f_grey"><span style="font-weight: bold; font-size: 15px;">Total Records Found :</span> <span class="f_red" style="font-size: 15px; font-weight: bold;">123</span></div>
                  <div style="width: 40%; float: right; padding-top: 10px; text-align: right;" class="f_grey">
                    <div style="float: left; padding-right: 5px; text-align: right; width: 315px; padding-top: 6px;"><span style="font-weight: bold;">Page Size</span></div>
                    <div style="float: right; padding-left: 5px;">
                      <select id="cmb_Date" name="cmb_Date" class="existing_event" tabindex="1" style="width: 2px;">
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
                  <div style="text-align: center; padding: 0px 0px 10px 0px; width: 967px; float: left; border: solid 0px #000000;">
                    <div class="pagination_md">
                      <div style="width: 22px; float: left; border: solid 0px #0066FF; padding: 0px; margin:-5px 0px 0px 0px;"><a href="#"><img src="images/prev_md_paging.png" alt="" title="" border="0" /></a></div>
                      <div style="width: 917px; float: left; border: solid 0px #006600;"><span class="selected">1</span> <a href="#">2</a> <a href="#">3</a> <a href="#">4</a> <a href="#">5</a> <a href="#">6</a> <a href="#">7</a> </div>
                      <div style="width: 22px;  float: left; border: solid 0px #0066FF; padding: 0px; margin:-5px 0px 0px 0px;"><a href="#"><img src="images/next_md_paging.png" alt="" title="" border="0" /></a></div>
                    </div>
                  </div>
                </div>
                <div class="DvFloat">
                  <table width="100%" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                      <td class="greeybg1">User ID</td>
                      <td class="greeybg2">Name</td>
                      <td class="greeybg3">Mobile No</td>
                      <td class="greeybg4">City Name</td>
                      <td class="greeybg5">Email Id</td>
                      <td class="greeybg6">Active</td>
                      <td class="greeybg7">Action</td>
                    </tr>
                    <tr>
                      <td class="f_white" colspan="6" style="height: 5px;"></td>
                    </tr>
                    <tr>
                      <td class="lightgreeybg1">1</td>
                      <td class="lightgreeybg2"><a href="nutritionist_03.html">kumar Amit</a> </td>
                      <td class="lightgreeybg3">9867550478 </td>
                      <td class="lightgreeybg4">Muzaffarpur </td>
                      <td class="lightgreeybg5">vaibhavlende@accordfintech.com</td>
                      <td class="lightgreeybg6">False </td>
                      <td class="lightgreeybg7"><img src="images/nutritionist_action_icon.jpg" alt="" title="" border="0"></td>
                    </tr>
                    <tr>
                      <td class="f_white" colspan="6" style="height: 5px;"></td>
                    </tr>
                    <tr>
                      <td class="lightgreeybg1">A11</td>
                      <td class="lightgreeybg2">A A </td>
                      <td class="lightgreeybg3">5435435 </td>
                      <td class="lightgreeybg4">Muzaffarpur </td>
                      <td class="lightgreeybg5">rajashree@accordfintech.com </td>
                      <td class="lightgreeybg6">False </td>
                      <td class="lightgreeybg7"><img src="images/nutritionist_action_icon.jpg" alt="" title="" border="0"></td>
                    </tr>
                    <tr>
                      <td class="f_white" colspan="6" style="height: 5px;"></td>
                    </tr>
                    <tr>
                      <td class="lightgreeybg1">Raj</td>
                      <td class="lightgreeybg2">Rajshree A </td>
                      <td class="lightgreeybg3">565656757657 </td>
                      <td class="lightgreeybg4">Mumbai </td>
                      <td class="lightgreeybg5">nitesh.choudhari@accordfintech.com </td>
                      <td class="lightgreeybg6">True </td>
                      <td class="lightgreeybg7"><img src="images/nutritionist_action_icon.jpg" alt="" title="" border="0"></td>
                    </tr>
                    <tr>
                      <td class="f_white" colspan="6" style="height: 5px;"></td>
                    </tr>
                    <tr>
                      <td class="lightgreeybg1">pinakig</td>
                      <td class="lightgreeybg2">pinaki guin</td>
                      <td class="lightgreeybg3">9861346798 </td>
                      <td class="lightgreeybg4">Mumbai </td>
                      <td class="lightgreeybg5">prashant1.more@accordfintech.com</td>
                      <td class="lightgreeybg6">True </td>
                      <td class="lightgreeybg7"><img src="images/nutritionist_action_icon.jpg" alt="" title="" border="0"></td>
                    </tr>
                    <tr>
                      <td class="f_white" colspan="6" style="height: 5px;"></td>
                    </tr>
                    <tr>
                      <td class="lightgreeybg1">tanushrig</td>
                      <td class="lightgreeybg2">tanushri guin</td>
                      <td class="lightgreeybg3">9872347347</td>
                      <td class="lightgreeybg4">Mumbai </td>
                      <td class="lightgreeybg5">vaibhav.lende@accordfintech.com</td>
                      <td class="lightgreeybg6">True </td>
                      <td class="lightgreeybg7"><img src="images/nutritionist_action_icon.jpg" alt="" title="" border="0"></td>
                    </tr>
                  </table>
                </div>
                <div class="DvFloat">
                  <div style="text-align: center; padding: 10px 0px; width: 967px; float: left; border: solid 0px #000000;">
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

</body>
</html>
