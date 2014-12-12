<?php
$folder_id=$get_retrive->RetriveUserInboxID($_SESSION['UserID']);
$folder_id=$converter->encode($folder_id);
?>
<div class="Inbox_td_right" style="width:748px; border: solid 0px #006699; padding-left: 0px;">
                <div class="dvFloat">
                  <h2 class="Tab_Title" style="color:#7ca500;padding:0px; margin:0px">ASK QUERIES - NUTRITIONIST</h2>
                </div>
                <table width="100%" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td class="Inboxbg1" style="padding-top:0px;vertical-align:top; text-align:center; width:2%"><!--<input type="checkbox" id="chkMainTick" value="" />-->
                      &nbsp;</td>
                    <td class="Inboxbg2" colspan="2" style="text-align:left	">&nbsp;
                      </td>
                    <td class="Inboxbg4" style="vertical-align:top; text-align:right"><div style="float:right; width:87px; border:solid 0px red; text-align:right">
                        <ul id="dd_nav2">
                          <li> <a href="#" style="background-color:#666666; font-weight:normal;"><img src="images/compose_mail_icon.jpg" alt="" style="float:left" />&nbsp;Compose&nbsp;<span class="ar">&#9660;</span> </a>
                            <ul style="width: 98px;line-height:15px">
                              <li style="background-color: #99cc00; text-align:center"><a  href="<?php echo $strHostName;?>/page.php?dir=inbox/compose_doctor" style="color:#FFFFFF;cursor: pointer;">Doctor </a></li>
                              <li style="background-color: #009999; text-align:center;"><a href="<?php echo $strHostName;?>/page.php?dir=inbox/compose_nutritionist" style="color:#FFF;cursor: pointer;">Nutritionist</a></li>
                            </ul>
                          </li>
                        </ul>
                      </div></td>
                  </tr>
                </table>
                <div class="DvFloat">
                  <div  style="width:100%; border:solid 0px red;padding-top:10px;">
                    <div class="dvFloat formpadding1">
                      <div class="formlabel1" style="width: 200px; border: solid 0px #3300FF;">
                        <label class="formlabel1">Subject <span class="redtxt">*</span></label>
                      </div>
                      <div class="formcontrol21" style="width: 500px; border: solid 0px #3300FF;">
                        <input type="text" name="txt_Inbox_Subject" id="txt_Inbox_Subject" value="">
                        <input type="hidden" name="txtSubjectID" id="txtSubjectID" value="">
                         <input type="hidden" name="txtFolderID" id="txtFolderID" value="<?php echo $folder_id;?>"/>
                       
                      </div>
                    </div>
                    <div class="dvFloat formpadding1">
                      <div class="formlabel1" style="width: 200px; border: solid 0px #3300FF;">
                        <label class="formlabel1">Message <span class="redtxt">*</span></label>
                      </div>
                      <div class="formcontrol21" style="width: 500px; border: solid 0px #3300FF;">
                        <form name="myform" METHOD="POST">
                          <div style="float:left; width:100%"> <textarea name="txt_Inbox_Message" id="txt_Inbox_Message"></textarea>
                          </div>
                          <div style="float:left; width:90px;text-align:left;padding:10px 0px 0px 0px; border:solid 0px red; display:none;">Character left:</div><div style="float:left; width:45px; border:solid 0px red;padding:7px 0px 0px 0px"> 
                            
                          </div>
                        </form>
                      </div>
                    </div>
                    
                    <div class="dvFloat formpadding1"  style="padding:10px 0px 25px 0px">
                      <div class="formlabel1" style="width: 200px; border: solid 0px #3300FF;"> &nbsp; </div>
                      <div class="formcontrol21" style="width: 500px; border: solid 0px #3300FF;">
                        <div style=" width:90px; height:30px; float:left;padding-right:10px;"> <a onclick="javascript:Nutritionist_Ins(this);" class="button4" style="cursor:pointer;">SUBMIT</a></div>
                        <div style=" width:90px; height:30px; float:left;padding-right:10px;"> <a class="button2">CANCEL</a></div>
                      </div>
                    </div>
                 </div>
              </div>
            </div>