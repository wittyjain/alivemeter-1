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
<link type="text/css" rel="stylesheet" href="css/style.css" />
<link href="style/bhupali.css" rel="stylesheet" type="text/css">

<link href="style/paging_md.css" rel="stylesheet" type="text/css" />
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
	background:#0;
}
#dd_nav1 {
	list-style:none;
	border:solid 0px red;
	float:right;
	width:247px;
	position:absolute;
	z-index:1;
	margin-top:0px;
	
	border:solid 0px red;
	line-height:20px;
}
#dd_nav1 li {
	float:left;
	position:relative;
}
#dd_nav1 a {
	display:block;
	padding: 0px 0px 0px 12px;
	color:#fff;
	background-color:#666666;
	text-decoration:none;
}
#dd_nav1 a:hover {
	color:#fff;
}
#dd_nav1 ul {
	list-style:none;
	position:absolute;
	left:-9999px;
}
#dd_nav1 ul li {
	padding-top:1px;
	float:none;
	padding-left:5px;
}
#dd_nav1 ul a {
	white-space:nowrap;
}
#dd_nav1 li:hover ul {
	left:0;
}
#dd_nav1 li:hover a {
	text-decoration:none;
}
#dd_nav1 li:hover ul a {
	text-decoration:none;
}
#dd_nav1 li:hover ul li a:hover {
}
#dd_nav2 {
	list-style:none;
	font-weight:normal;
	border:solid 0px red;
	float:right;
	width:108px;
	position:absolute;
	z-index:1;
}
#dd_nav2 li {
	float:left;
	position:relative;
}
#dd_nav2 a {
	display:block;
	padding: 6px 5px;
	color:#fff;
	text-decoration:none;
}
#dd_nav2 a:hover {
	color:#fff;
}
#dd_nav2 ul {
	list-style:none;
	position:absolute;
	left:-9999px;
}
#dd_nav2 ul li {
	float:none;
}
#dd_nav2 ul a {
	white-space:nowrap;
}
#dd_nav2 li:hover ul {
	left:0;
}
#dd_nav2 li:hover a {
	text-decoration:none;
}
#dd_nav2 li:hover ul a {
	text-decoration:none;
}
#dd_nav2 li:hover ul li a:hover {
}
</style>

</head>
<body>
<?php include 'includes/top.php'?>
<section>
  <div class="top_ou">
    <div class="top_in">
      <div class="top">
        <div class="cal_12" style="padding-top: 15px;">
          <h1 class="f_red" style="text-align: left; font-size: 18px; margin-bottom: 7px;">Inbox</h1>
          <div class="cal_12" style="border: solid 0px #0066CC;">
            <div class="dvFloat">
              <div class="dvWrapper">
                <div style="float:left; padding:0px 0px 50px 0px; border:solid 0px red;">
                  <div class="adviceonline_md">
                    <div class="Inbox_td_left">
                      <table cellpadding="0" cellspacing="0" style="width:100%">
                        <tr>
                          <td style="text-align:left; width:10%;padding:0px 10px 0px 0px"><img src="images/inbox_mail.jpg" alt="" align="absmiddle" /></td>
                          <td style="text-align:left; width:70%; vertical-align:middle">Inbox</td>
                          <td style="text-align:left; width:10%; vertical-align:middle "> (2) </td>
                        </tr>
                        <tr>
                          <td style="text-align:left; width:10%;padding:5px 0px"><img src="images/health_icon.jpg" alt="" align="absmiddle" /></td>
                          <td style="text-align:left; width:70%;vertical-align:middle; color:#7ca500">Health</td>
                          <td style="text-align:left; width:10%;vertical-align:middle ">(1)</td>
                        </tr>
                        <tr>
                          <td style="text-align:left; width:10%;padding:5px 0px"><img src="images/wealth_icon.jpg" alt="" align="absmiddle" /></td>
                          <td style="text-align:left; width:70%;vertical-align:middle; color:#009999">Wealth</td>
                          <td style="text-align:left; width:10%;vertical-align:middle ">(1)</td>
                        </tr>
                        <tr>
                          <td style="text-align:left; width:10%;padding:5px 0px"><img src="images/sent_item_icon.jpg" alt="" align="absmiddle" /></td>
                          <td style="text-align:left; width:70%;vertical-align:middle">Sent Items </td>
                          <td style="text-align:left; width:10%;vertical-align:middle "></td>
                        </tr>
                        <tr>
                          <td style="text-align:left; width:10%;padding:5px 0px"><img src="images/trash_icon.jpg" alt="" align="absmiddle" /></td>
                          <td style="text-align:left; width:7570;vertical-align:middle">Trash</td>
                          <td style="text-align:left; width:10%;vertical-align:middle "></td>
                        </tr>
                        <tr>
                          <td style="text-align:left; width:10%;padding:5px 0px"><img src="images/folder_icon.jpg" alt="" align="absmiddle" /></td>
                          <td style="text-align:left; width:70%;vertical-align:middle">My Folders</td>
                          <td style="text-align:left; width:10%;vertical-align:middle "></td>
                        </tr>
                        <tr>
                          <td style="text-align:left; width:10%;padding:5px 0px"></td>
                          <td style="text-align:left; width:70%;vertical-align:middle"><ul style="list-style-type:square; line-height:30px;">
                              <li>sdfdsf</li>
                              <li>sdfdsf</li>
                              <li>sdfdsf</li>
                              <li>sdfdsf</li>
                            </ul></td>
                          <td style="text-align:left; width:10%;vertical-align:middle "></td>
                        </tr>
                      </table>
                    </div>
                    <div class="Inbox_td_right">
                      <div class="DvFloat">
                        <table width="100%" border="0" cellpadding="0" cellspacing="0">
                          <tr>
                            <td style="padding-top:5px;vertical-align:top ;text-align:center"><input type="checkbox" id="chkMainTick" value="" /></td>
                            <td colspan="2" style=""><table width="30%" border="0" cellpadding="0" cellspacing="0">
                                <tr>
                                  <td style="padding:0px 5px;vertical-align:top"><div style="float:left; background-color:#666666; color:#FFFFFF; padding:5px 15px"> <a href="register_step1.html"  style="text-align:center; font-size:14px;text-transform:none;font-family: 'myriad_web_proregular'; color:#FFFFFF">Delete</a></div></td>
                                  <td style="padding:0px 5px; vertical-align:top"><div style="float:left; width:90px; border:solid 0px red;">
                                      <div style="float:left; width:90px; border:solid 0px red;">
                                        <ul id="dd_nav1">
                                          <li> <a href="#" style="background-color:#666666; font-weight:normal; padding:3px 10px; width:70px"> Move to&nbsp;<span class="ar">&#9660;</span> </a>
                                            <ul style="width: 90px; background-color: #666;line-height:25px">
                                              <li style="border-bottom: solid 0px #aac457;"><a href="#">Spam</a></li>
                                              <li style="border-bottom: solid 0px #aac457;"><a href="#">Trash</a></li>
                                              <li style="border-bottom: solid 0px #aac457;"><a href="#">Sent</a></li>
                                            </ul>
                                          </li>
                                        </ul>
                                      </div>
                                    </div></td>
                                  <td style="padding:0px 5px; vertical-align:top; text-align:left"><div style=" float:left; background-color:#666666; padding:5px 10px;width:82px;"> <a href="register_step1.html" style="text-align:center; font-size:14px;text-transform:none;font-family: 'myriad_web_proregular'; color:#FFFFFF">Create Folder</a></div></td>
                                </tr>
                              </table></td>
                            <td style="vertical-align:top; text-align:right"></td>
                          </tr>
                          <tr>
                            <td class="f_white" colspan="6" style="height: 5px;padding:15px 0px 0px 0px"></td>
                          </tr>
                          <tr>
                            <td class="lightInboxbg1"><input type="checkbox" id="chkTick" value="" /></td>
                            <td class="lightInboxbg21"><a href="nutritionist_06.html" style="font-size: 13px; color: #666;"> hi Take Painkiller Crocin Di </a> </td>
                            <td class="lightInboxbg3">Financer </td>
                            <td class="lightInboxbg4">14:39 </td>
                          </tr>
                          <tr>
                            <td class="f_white" colspan="5" style="height: 5px;"></td>
                          </tr>
                          <tr>
                            <td class="lightInboxbg1"><input type="checkbox" id="chkTick" value="" /></td>
                            <td class="lightInboxbg22"><a href="#" style="cursor: pointer; font-size: 13px; color: #666;"> apply cream named "XYZ"</a> </td>
                            <td class="lightInboxbg3">doctor </td>
                            <td class="lightInboxbg4">14:18 </td>
                          </tr>
                          <tr>
                            <td class="f_white" colspan="5" style="height: 5px;"></td>
                          </tr>
                          <tr>
                            <td class="lightInboxbg1"><input type="checkbox" id="chkTick" value="" /></td>
                            <td class="lightInboxbg21"><a href="#" style="cursor: pointer; font-size: 13px; color: #666; font-weight: normal;"> apply cream named "XYZ"</a> </td>
                            <td class="lightInboxbg3">md </td>
                            <td class="lightInboxbg4">14:18 </td>
                          </tr>
                          <tr>
                            <td class="f_white" colspan="5" style="height: 5px;"></td>
                          </tr>
                          <tr>
                            <td class="lightInboxbg1"><input type="checkbox" id="chkTick" value="" /></td>
                            <td class="lightInboxbg22"><a href="#" style="cursor: pointer; font-size: 13px; color: #666; font-weight: normal;"> hi Take Painkiller Crocin Di </a> </td>
                            <td class="lightInboxbg3">md </td>
                            <td class="lightInboxbg4">28 Jan </td>
                          </tr>
                          <tr>
                            <td class="f_white" colspan="5" style="height: 5px;"></td>
                          </tr>
                          <tr>
                            <td class="lightInboxbg1"><input type="checkbox" id="chkTick" value="" /></td>
                            <td class="lightInboxbg21"><a href="#" style="cursor: pointer; font-size: 13px; color: #666; font-weight: normal;"> apply cream named "XYZ"</a> </td>
                            <td class="lightInboxbg3">Financer </td>
                            <td class="lightInboxbg4">27 Jan </td>
                          </tr>
                          <tr>
                            <td class="f_white" colspan="5" style="height: 5px;"></td>
                          </tr>
                        </table>
                      </div>
                      <div class="DvFloat">
                        <div style="text-align: center; padding: 10px 0px; width: 967px; float: left; border: solid 0px #000000;">
                          <div class="pagination_md">
                            <div style="width: 22px; float: left; border: solid 0px #0066FF; padding: 0px; margin:-5px 0px 0px 0px;"><a href="#"><img src="images/prev_md_paging.png" alt="" title="" border="0" /></a></div>
                            <div style="width: 715px; float: left; border: solid 0px #006600;"><span class="selected">1</span> <a href="#">2</a> <a href="#">3</a> <a href="#">4</a> <a href="#">5</a> <a href="#">6</a> <a href="#">7</a> </div>
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
      </div>
    </div>
  </div>
</section>
</div>
</section>
<?php include 'includes/bottom.php'?>

</body>
</html>
