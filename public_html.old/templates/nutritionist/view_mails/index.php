<?php
if(!isset($_SESSION['UserNutID']))
{
	Alertandredirect("Sorry! Session is expired.", 'index.php');
}
?>
<script type="text/javascript">
var count = "500";

function limiter()
{
var tex = document.myform.comment.value;
var len = tex.length;
var limit = count-len;

if(len > count)
{
        tex = tex.substring(0,count);
        document.myform.comment.value =tex;
        return false;
}

document.myform.limit.value =limit;
}
</script>
<script type="text/javascript">
var count = "125";

function limiter1()
{
var tex = document.myform1.comment.value;
var len = tex.length;
var limit = count-len;

if(len > count)
{
        tex = tex.substring(0,count);
        document.myform.comment.value =tex;
        return false;
}

document.myform1.limit.value =limit;
}
</script>
<script>

	function Pres_Report_Show_Hide()
	{
		 document.getElementById("dvPres_Report_Show_Hide1").style.display="";
		 document.getElementById("dvPres_Report_Show_Hide").style.display="none";
		if(document.getElementById("cmb_Inbox_Query_Type").value ==2){
			
			document.getElementById("dvPres_Report_Show_Hide").style.display="";
			document.getElementById("dvPres_Report_Show_Hide1").style.display="none";
			
		}
		else if(document.getElementById("cmb_Inbox_Query_Type").value ==3){
			
		document.getElementById("dvPres_Report_Show_Hide").style.display="none";
			document.getElementById("dvPres_Report_Show_Hide1").style.display="";
			
		}
		 
	}

</script>

<link href="style/paging_md.css" rel="stylesheet" type="text/css" />

<?php include "includes/dashboard_mainlinks.inc.php";?>
<section>
  <div class="top_ou" style="padding:40px 0;">
    <div class="cal_12 m_outo">
      <div class="dvFloat">
        <div class="dvWrapper">
          <div style="float:left; padding:0px 0px 50px 0px; border:solid 0px red;">
            <div class="adviceonline_md">
             	<?php include "includes/nut_inbox_left.inc.php";?>
                <?php include "retrive_files/retrive_nutritionist_view_mails.inc.php";?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
</section>
<div id="dvpopup-form" style="text-align: center; width: 780px;position:absoulte; margin:15px auto; display:none; margin-left:25%">
  <table cellpadding="0" cellspacing="0" border="0" width="400px" align="center">
    <tr>
      <td style="text-align:right; border:solid 0px red; float:right"><div style="margin: 5px 0px 0px -23px; position: absolute; text-align:right"> <a href="javascript:Popup.hide('dvpopup-form');" target="_parent" style="text-decoration: none; color: #fff;"> <img src="images/close.png" alt="" title="" border="0" /> </a> </div></td>
    </tr>
    <tr>
      <td valign="top" align="center" style="padding: 10px 10px 10px 10px;"><div class="DvFloat">
          <div class="dvWhitePopup_Box">
            <table cellpadding="0" cellspacing="0" style="width:90%; border:solid 0px #000000">
              <tr>
                <td colspan="4" style="padding-bottom:15px;padding-left:20px;text-align:center"><h2 class="Tab_Title" style="color:#333333"> Whom do you want to ask query? </h2></td>
              </tr>
              <tr>
                <td style="text-align:center; padding:0px 10px;vertical-align:middle"><a href="<?php echo $strHostName;?>/page.php?dir=inbox/compose_doctor"><img src="images/doctor_box.png" alt="" align="absmiddle" /></a></td>
                <td style="text-align:center; padding:0px 10px;vertical-align:middle"><a href="<?php echo $strHostName;?>/page.php?dir=inbox/compose_nutritionist"><img src="images/nutritionist_box.png" alt="" align="absmiddle" /></a> </td>
              </tr>
            </table>
          </div>
        </div></td>
    </tr>
  </table>
</div>
<div id="dvpopup-form1" style="text-align: center; width: 100%;position:absoulte;margin:0px; margin-top:15px; display:none">
  <table cellpadding="0" cellspacing="0" border="0" width="100%" align="center">
    <tr>
      <td style="text-align:right; border:solid 0px red; float:right"><div style="margin: 5px 0px 0px -23px; position: absolute; text-align:right"> <a href="javascript:Popup.hide('dvpopup-form1');" target="_parent" style="text-decoration: none; color: #fff;"> <img src="images/close.png" alt="" title="" border="0" /> </a> </div></td>
    </tr>
    <tr>
      <td valign="top" align="center" style="padding: 10px 10px 10px 10px;background-color:#FFFFFF">
      		<?php include "view_files/compose.inc.php";?>
      </td>
    </tr>
  </table>
</div>
<div id="dvpopup-form2" style="text-align: center; width: 100%;position:absoulte;margin:0px; margin-top:15px; display:none">
  <table cellpadding="0" cellspacing="0" border="0" width="100%" align="center">
    <tr>
      <td style="text-align:right; border:solid 0px red; float:right"><div style="margin: 5px 0px 0px -23px; position: absolute; text-align:right"> <a href="javascript:Popup.hide('dvpopup-form2');" target="_parent" style="text-decoration: none; color: #fff;"> <img src="images/close.png" alt="" title="" border="0" /> </a> </div></td>
    </tr>
    <tr>
      <td valign="top" align="center" style="padding: 10px 10px 10px 10px;background-color:#FFFFFF">
      		<?php include "view_files/ask_nutritionist.inc.php";?>
      </td>
    </tr>
  </table>
</div>
<div id="dvpopup-form3" style="text-align: center; width: 100%;position:absoulte;margin:0px; margin-top:15px;  display:none">
  <table cellpadding="0" cellspacing="0" border="0" width="100%" align="center">
    <tr>
      <td style="text-align:right; border:solid 0px red; float:right"><div style="margin: 5px 0px 0px -23px; position: absolute; text-align:right"> <a href="javascript:Popup.hide('dvpopup-form3');" target="_parent" style="text-decoration: none; color: #fff;"> <img src="images/close.png" alt="" title="" border="0" /> </a> </div></td>
    </tr>
    <tr>
      <td valign="top" align="center" style="padding: 10px 10px 30px 10px;background-color:#FFFFFF"><div  style="width:100%; border:solid 0px red;">
          <div class="dvFloat formpadding">
            <div class="formlabel1">
              <label class="formlabel1">
              <h2 class="Tab_Title" style="color:#000000; text-transform:none">What are the symptoms?</h2>
              </label>
            </div>
            <div class="formcontrol21"> &nbsp; </div>
          </div>
          <div class="dvFloat formpadding" style="padding-top:30px"></div>
          <div class="dvInbox_left"><img src="images/symtoms.jpg" alt="" /></div>
          <div class="dvInbox_middle">
            <div class="TabDv" style="margin:0 auto; width:390px;">
              <div  style="padding:0px 0px;">
                <ul id="calorie_tab" class="calorie_tab">
                  <li class="selected"><a href="#" rel="tabs1" >Common Symptoms</a></li>
                  <li><a href="#" rel="tabs2"  >General Symptoms</a></li>
                  <li><a href="#" rel="tabs3"> Behavioral & Mental Health Symptoms</a></li>
                </ul>
              </div>
              <div class="calorieTabContentDetails">
                <div id="tabs1" class="calorie_tabcontent">
                  <div style="width:415px; border:solid 0px red;overflow-x:hidden;hidden;background-color:#f0f0f0; height:400px;">
                    <table cellpadding="0" cellspacing="0" style="width:100%;">
                      <tr>
                        <td style="font-weight:bold; font-size:13px;padding:15px 0px 5px 10px" colspan="2">General Symptoms for Adult Male </td>
                      </tr>
                      <tr>
                        <td style="width:50%; vertical-align:top; text-align:left"><ul class="symtoms" >
                            <li>Chills or hot flashes</li>
                            <li>Chills, aches, and flu-like symptoms</li>
                            <li>Clumsiness</li>
                            <li>Cravings for non-nutritional items</li>
                            <li>Daytime sleepiness</li>
                            <li>Dehydration</li>
                            <li>Delayed ability to push up on arms, </li>
                            <li>sit up alone, or crawl</li>
                            <li>Delayed growth</li>
                            <li>Delayed puberty</li>
                            <li>Delayed reaction time</li>
                            <li>Delayed sexual development</li>
                            <li>Delayed speech and language</li>
                            <li>Developmental delays</li>
                            <li>Difficulty being understood</li>
                            <li>Disorganized</li>
                            <li>Early puberty</li>
                            <li>Easy bleeding and bruising</li>
                            <li>Erectile dysfunction</li>
                          </ul></td>
                        <td style="width:50%; vertical-align:top; text-align:left"><ul class="symtoms" >
                            <li>Chills or hot flashes</li>
                            <li>Chills, aches, and flu-like symptoms</li>
                            <li>Clumsiness</li>
                            <li>Cravings for non-nutritional items</li>
                            <li>Daytime sleepiness</li>
                            <li>Dehydration</li>
                            <li>Delayed ability to push up on arms, </li>
                            <li>sit up alone, or crawl</li>
                            <li>Delayed growth</li>
                            <li>Delayed puberty</li>
                            <li>Delayed reaction time</li>
                            <li>Delayed sexual development</li>
                            <li>Delayed speech and language</li>
                            <li>Developmental delays</li>
                            <li>Difficulty being understood</li>
                            <li>Disorganized</li>
                            <li>Early puberty</li>
                            <li>Easy bleeding and bruising</li>
                            <li>Erectile dysfunction</li>
                          </ul></td>
                      </tr>
                    </table>
                  </div>
                </div>
                <div id="tabs2" class="calorie_tabcontent">
                  <div style="width:415px; border:solid 0px red;overflow:scroll;background-color:#f0f0f0; height:400px;">General Symptoms</div>
                </div>
                <div id="tabs3" class="calorie_tabcontent">
                  <div style="width:415px; border:solid 0px red;overflow:scroll;background-color:#f0f0f0; height:400px;">Behavioral & Mental Health Symptoms</div>
                </div>
              </div>
            </div>
          </div>
          <div class="dvInbox_middle1">
            <table cellpadding="0" cellspacing="0" style="width:100%">
              <tr>
                <td style="vertical-align:middle;text-align:center;padding-top:200px;"><img src="images/inbox_symptoms_right_arrow.jpg" alt="" /></td>
              </tr>
            </table>
          </div>
          <div class="dvInbox_right">
            <div style="background-color:#f0f0f0; width:250px; height:405px; ">
              <div class="dvFloat" style="padding:10px 0px; background-color:#666; color:#FFFFFF"> My Selection </div>
              <div class="dvFloat">
                <div style="background-color:#f0f0f0; width:250px; height:405px; overflow-x:hidden;">
                  <table cellpadding="0" cellspacing="0" style="width:100%;">
                    <tr>
                      <td style="text-align:center;padding:5px 5px 0px 5px"><img src="images/minus.jpg" alt="" /></td>
                      <td> Fever </td>
                    </tr>
                    <tr>
                      <td style="text-align:center;padding:5px 5px 0px 5px"><img src="images/minus.jpg" alt="" /></td>
                      <td> Fussiness or irritability </td>
                    </tr>
                    <tr>
                      <td style="text-align:center;padding:5px 5px 0px 5px"><img src="images/minus.jpg" alt="" /></td>
                      <td> Headache </td>
                    </tr>
                    <tr>
                      <td style="text-align:center;padding:5px 5px 0px 5px"><img src="images/minus.jpg" alt="" /></td>
                      <td> Fatigue </td>
                    </tr>
                    <tr>
                      <td style="text-align:center;padding:5px 5px 0px 5px"><img src="images/minus.jpg" alt="" /></td>
                      <td> Feeding problems </td>
                    </tr>
                    <tr>
                      <td style="text-align:center;padding:5px 5px 0px 5px"><img src="images/minus.jpg" alt="" /></td>
                      <td> Feeling ill or malaise </td>
                    </tr>
                    <tr>
                      <td style="text-align:center;padding:5px 5px 0px 5px"><img src="images/minus.jpg" alt="" /></td>
                      <td> Fever </td>
                    </tr>
                    <tr>
                      <td style="text-align:center;padding:5px 5px 0px 5px"><img src="images/minus.jpg" alt="" /></td>
                      <td> Floppy muscles </td>
                    </tr>
                    <tr>
                      <td style="text-align:center;padding:5px 5px 0px 5px"><img src="images/minus.jpg" alt="" /></td>
                      <td> Food cravings </td>
                    </tr>
                    <tr>
                      <td style="text-align:center;padding:5px 5px 0px 5px"><img src="images/minus.jpg" alt="" /></td>
                      <td> Freezing in one posture </td>
                    </tr>
                    <tr>
                      <td style="text-align:center;padding:5px 5px 0px 5px"><img src="images/minus.jpg" alt="" /></td>
                      <td> Frequent falls </td>
                    </tr>
                    <tr>
                      <td style="text-align:center;padding:5px 5px 0px 5px"><img src="images/minus.jpg" alt="" /></td>
                      <td> Frequent infections </td>
                    </tr>
                    <tr>
                      <td style="text-align:center;padding:5px 5px 0px 5px"><img src="images/minus.jpg" alt="" /></td>
                      <td> Frequent or severe infections </td>
                    </tr>
                    <tr>
                      <td style="text-align:center;padding:5px 5px 0px 5px"><img src="images/minus.jpg" alt="" /></td>
                      <td> Fussiness or irritability </td>
                    </tr>
                    <tr>
                      <td style="text-align:center;padding:5px 5px 0px 5px"><img src="images/minus.jpg" alt="" /></td>
                      <td> Gradual loss of height </td>
                    </tr>
                    <tr>
                      <td style="text-align:center;padding:5px 5px 0px 5px"><img src="images/minus.jpg" alt="" /></td>
                      <td> Hard to awaken </td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div></td>
    </tr>
  </table>
</div>


<script>
	Pres_Report_Show_Hide();
</script>