<script type="text/javascript" src="<?php echo $strHostName?>/js/health_steup_validation.js"></script>
<script type="text/javascript" src="<?php echo $strHostName?>/js/health_steup_insert_retrive.js"></script>
<script type="text/javascript">
function showform(){ document.getElementById('divCalForm').style.display = 'block'; }
document.getElementById("txt_HD_Result_Triglyceride").focus();
function showCancel(){ document.getElementById('divCalForm').style.display = 'none'; }
</script>


</head>

<?php include "includes/dashboard_top.inc.php";?>
<section>
  <div class="cal_full_size">
    <div class="cal_12 m_outo">
     <?php include "includes/dashboard_links.inc.php";?>
      <div class="dvFloat">
        <div class="dvWrapper">
          <div style="padding:35px 0px 35px 0px">
            <div class="health_dashboard_div_left">
             	<?php include "includes/calorie_setup_left.inc.php";?>
            </div>
            <div class="health_dashboard_div_right">
              <div class="DvFloat">
                  <div class="DvFloat">
                    <div style="width: 80%; float: left; border: solid 0px #3300CC;"><div class="TabDv">
                              <div style="padding:0px 0px 0px 70px;">
                                <ul id="tabstabs10" class="shadetabs10">
                                  <li><a href="#" rel="tabs1a9" class="selected"> 1 WEEK </a></li>
                                  <li><a href="#" rel="tabs2b9" class="">1 MONTH</a></li>
                                  <li><a href="#" rel="tabs3c9" class="">1 year</a></li>
                                </ul>
                              </div>
                              <div class="TabContentDetails10" style="width: 100%;">
                                <div id="tabs1a9" class="tabcontent10" style="display: block;">
                                  <div style="width: 798px; border: solid 0px red;">
                                    <div class="DvFloat">
                                      <div class="DvFloat" style="padding: 15px 0px; border-bottom: solid 1px #c5c5c5;">
                                        <div class="DvFloat">
                                          <div style="width: 22px; float: left; height: 22px; background-image: url(images/prev_md_paging.png); background-repeat: no-repeat;"></div>
                                          <div style="width: 754px; float: left; text-align: center; font-size: 15px; font-weight: bold;" class="f_grey">27 Jan - 2 Feb 2014</div>
                                          <div style="width: 22px; float: left; height: 22px; background-image: url(images/next_md_paging.png); background-repeat: no-repeat;"></div>
                                        </div>
                                        <div class="DvFloat" style="padding-top: 5px;"> <img src="images/nutritionist/chart1.jpg" alt="" title="" border="0"></div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div id="tabs2b9" class="tabcontent10" style="display: none;">
                                  <div style="width:755px; border:solid 1px red;">sad</div>
                                </div>
                                <div id="tabs3c9" class="tabcontent10" style="display: none;">
                                  <div style="width:755px; border:solid 1px green;">sad</div>
                                </div>
                              </div>
                            </div></div>
                    <div style="width: 12%; float: right; border: solid 0px #999900;">
                    	<div class="DvFloat">
                        	<select id="lipid_Cholesterol_Year" name="lipid_Cholesterol_Year" tabindex="1" class="existing_event" style="width: 45px;">
                            	<option value="Weight">Weight</option>
                                <option value="Waist">Waist</option>
                                <option value="Hips">Hips</option>
                                <option value="Arms">Arms</option>
                            </select>
                        </div>
                    </div>
                  </div>
                  
                  <div class="DvFloat" style="border: solid 0px #00CC00;">
                    <div  style="width:99.6%; border:solid 0px red;">
                      <div class="dvFloat formpadding1" style="padding:0px 0px 5px 0px; border-bottom: solid 1px #e1e1e1;"> <a onClick="showform();" style="cursor:pointer"><img src="images/nutritionist/add_to_list.jpg" alt="" /></a> </div>
                      <div class="dvFloat" style="display: none;" id="divCalForm">
                     		<?php include "view_files/measurement.inc.php"; ?>
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
<script>RetriveReocrds('CalorieDet','dvCalorieDet');</script>