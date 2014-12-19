<?php if($_SESSION['UserType']!="Doctor"  && $_SESSION['UserType']!="Nutritionist" && $_SESSION['UserType']!="MD"){ ?>
<div class="dvFloat" style="border-bottom:solid 1px #e4e4e4;">
                <div  style="padding:0px 0px 0px 0px; float:right;  ">
                  <table cellspacing="0" cellpadding="0" style="width:30%; border:solid 0px #000000">
                    <tr>
                      <td style="text-align:right; padding:0px 0px;vertical-align:middle"><a style="cursor: pointer;" target="_parent" href="<?php echo $strHostName;?>/page.php?dir=health/calendar"> <img src="images/nutritionist/daily_tracking_app.jpg" alt="" align="absmiddle"> </a> </td>
                      <td style="text-align:right; padding:0px 10px; vertical-align:middle; display:'';"><a href="<?php echo $strHostName;?>/page.php?dir=health/setup"><img src="images/nutritionist/health_setup.jpg" alt="" align="absmiddle"></a></td>
                    </tr>
                  </table>
                </div>
              </div>



<div id="dvpopup-form" style="text-align: center; width: 100%;position:absoulte;margin:0px; margin-top:15px;display:none;">
  <table cellpadding="0" cellspacing="0" border="0" width="100%" align="center">
    <tr>
      <td style="text-align:right; border:solid 0px red; float:right"><div style="margin: 5px 0px 0px -23px; position: absolute; text-align:right"> <a href="javascript:Popup.hide('dvpopup-form');" target="_parent" style="text-decoration: none; color: #fff;"> <img src="images/close.png" alt="" title="" border="0" /> </a> </div></td>
    </tr>
    <tr>
      <td valign="top" align="center" style="padding: 20px 10px 20px 10px; background-color:#FFFFFF"><div class="dvWrapper" >
          <div class="DvFloat" style="padding-bottom:5px;">
            <div style="width: 24%; float: left; text-align:left"><span class="f_green" style="font-size: 18px; font-weight: bold;font-size: 22px;font-family: 'myriad_web_proregular'; font-weight: bold; color:#FFFFFF">Your Daily Health app</span></div>
            <div style="width: 71.7%; float: right; text-align: right;position: absolute;
margin-top: -2px;"><img src="images/health_calender.jpg" alt="" />&nbsp;<img src="images/wealth_calender.jpg" alt="" /></div>
          </div>
          <div  style="background-color:#FFFFFF; float:left">
            <div class="DvFloat" style="padding: 20px; border-bottom: solid 0px #c5c5c5;">
              <div class="DvFloat">
                <div style="width: 22px; float: left; height: 22px; background-image: url(images/prev_md_paging.png); background-repeat: no-repeat;"></div>
                <div style="width: 904px; float: left; text-align: center; font-size: 28px;font-family: 'myriad_web_proregular'; font-weight: bold;" class="f_grey">January 2014</div>
                <div style="width: 22px; float: left; height: 22px; background-image: url(images/next_md_paging.png); background-repeat: no-repeat;"></div>
              </div>
            </div>
          </div>
          <div style="width:96.6%; float: left; text-align: right;border:solid 0px red;padding-bottom:10px; background-color:#FFFFFF;padding-right:22px;"> <a href="#"><img src="images/customize_data.jpg" alt="" /></a> </div>
          <div style="float:left; width:966px; height:auto; border:solid 1px #bababa">
            <div class="dvFloat">
              <div class="Calender_box_Head">Sunday </div>
              <div class="Calender_box_Head">Monday</div>
              <div class="Calender_box_Head">Tuesday</div>
              <div class="Calender_box_Head">Wednesday</div>
              <div class="Calender_box_Head">Thursday</div>
              <div class="Calender_box_Head">Friday</div>
              <div class="Calender_box_Head">Saturday</div>
            </div>
            <div class="dvFloat"> <a href="#"  onClick="javascript:Popup.showModal('dvpopup-form1',null,null,{'screenColor':'#333333','screenOpacity':.6});">
              <div class="Calender_box1">
                <div class="dvgreen_calender">26</div>
                <br>
                <table cellpadding="0" cellspacing="0" style="width:100%;line-height:17px;">
                  <tr>
                    <td class="Calender_left" style="padding-top:15px;">Diet </td>
                    <td class="Calender_right">1790 cal </td>
                  </tr>
                  <tr>
                    <td class="Calender_left">Water</td>
                    <td class="Calender_right">8 glasses</td>
                  </tr>
                  <tr>
                    <td class="Calender_left">Sleep</td>
                    <td class="Calender_right">8 hrs</td>
                  </tr>
                  <tr>
                    <td class="Calender_left">Excercise</td>
                    <td class="Calender_right">45 min</td>
                  </tr>
                </table>
              </div>
              </a>
              <div class="Calender_box">
                <div class="dvgreen_calender">27</div>
              </div>
              <div class="Calender_box">
                <div class="dvgreen_calender">28</div>
              </div>
              <div class="Calender_box">
                <div class="dvgreen_calender">29</div>
              </div>
              <div class="Calender_box">
                <div class="dvgreen_calender">30</div>
              </div>
              <div class="Calender_box">
                <div class="dvgreen_calender">31</div>
              </div>
              <div class="Calender_box">
                <div class="dvgreen_calender">1</div>
              </div>
            </div>
            <div class="dvFloat">
              <div class="Calender_box">
                <div class="dvgreen_calender">2</div>
              </div>
              <div class="Calender_box">
                <div class="dvgreen_calender">3</div>
              </div>
              <div class="Calender_box">
                <div class="dvgreen_calender">4</div>
              </div>
              <div class="Calender_box">
                <div class="dvgreen_calender">5</div>
              </div>
              <div class="Calender_box">
                <div class="dvgreen_calender">6</div>
              </div>
              <div class="Calender_box">
                <div class="dvgreen_calender">7</div>
              </div>
              <div class="Calender_box">
                <div class="dvgreen_calender">8</div>
              </div>
            </div>
            <div class="dvFloat">
              <div class="Calender_box">
                <div class="dvgreen_calender">9</div>
              </div>
              <div class="Calender_box">
                <div class="dvgreen_calender">10</div>
              </div>
              <div class="Calender_box">
                <div class="dvgreen_calender">11</div>
              </div>
              <div class="Calender_box">
                <div class="dvgreen_calender">12</div>
              </div>
              <div class="Calender_box">
                <div class="dvgreen_calender">13</div>
              </div>
              <div class="Calender_box">
                <div class="dvgreen_calender">14</div>
              </div>
              <div class="Calender_box">
                <div class="dvgreen_calender">15</div>
              </div>
            </div>
            <div class="dvFloat">
              <div class="Calender_box">
                <div class="dvgreen_calender">16</div>
              </div>
              <div class="Calender_box">
                <div class="dvgreen_calender">17</div>
              </div>
              <div class="Calender_box">
                <div class="dvgreen_calender">18</div>
              </div>
              <div class="Calender_box">
                <div class="dvgreen_calender">19</div>
              </div>
              <div class="Calender_box">
                <div class="dvgreen_calender">20</div>
              </div>
              <div class="Calender_box">
                <div class="dvgreen_calender">21</div>
              </div>
              <div class="Calender_box">
                <div class="dvgreen_calender">22</div>
              </div>
            </div>
            <div class="dvFloat">
              <div class="Calender_box">
                <div class="dvgreen_calender">23</div>
              </div>
              <div class="Calender_box">
                <div class="dvgreen_calender">24</div>
              </div>
              <div class="Calender_box">
                <div class="dvgreen_calender">25</div>
              </div>
              <div class="Calender_box">
                <div class="dvgreen_calender">26</div>
              </div>
              <div class="Calender_box">
                <div class="dvgreen_calender">27</div>
              </div>
              <div class="Calender_box">
                <div class="dvgreen_calender">28</div>
              </div>
              <div class="Calender_box">
                <div class="dvgreen_calender">29</div>
              </div>
            </div>
            <div class="dvFloat">
              <div class="Calender_box">
                <div class="dvgreen_calender">30</div>
              </div>
              <div class="Calender_box">
                <div class="dvgreen_calender">31</div>
              </div>
              <div class="Calender_box">
                <div class="dvgreen_calender">1</div>
              </div>
              <div class="Calender_box">
                <div class="dvgreen_calender">2</div>
              </div>
              <div class="Calender_box">
                <div class="dvgreen_calender">3</div>
              </div>
              <div class="Calender_box">
                <div class="dvgreen_calender">4</div>
              </div>
              <div class="Calender_box">
                <div class="dvgreen_calender">5</div>
              </div>
            </div>
          </div>
        </div></td>
    </tr>
  </table>
</div>
<?php } ?>


