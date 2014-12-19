<?php
if(!isset($_SESSION['UserNutID']))
{
	Alertandredirect("Sorry! Session is expired.", 'index.php');
}
?>
<script type="text/javascript" src="<?php echo $strHostName?>/js/health_steup_validation.js"></script>
<script type="text/javascript" src="<?php echo $strHostName?>/js/health_steup_insert_retrive.js"></script>
<?php include "includes/dashboard_mainlinks.inc.php";?>
<script type="text/javascript">
function ValidateFolder()
{
	 var foldername=document.getElementById("foldername").value;
	 if(foldername=="")
 	{
		alert("Please Fill Folder Name To Create");
		return false;
	}	
}

function AddFolder() {
        var foldername=document.getElementById("foldername").value;
        var parentidhidd=document.getElementById("parentidhidd").value;
        if(foldername==""){
            alert("Please Fill Folder Name To Create");
            return false;
        }
        if (window.XMLHttpRequest) {
            xmlhttp = new XMLHttpRequest();
        } else {// code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
					
        xmlhttp.onreadystatechange=function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                var message = xmlhttp.responseText;
                // (message.indexOf("true") >= 0)
                if(message.indexOf("true") >= 0){
                    alert("Folder Already Exist");
                    return false;
                }else{
                    $('#runtimeadd').append(message);
					var  i = document.getElementById("ivalue").value;
					i=parseFloat(i);
					document.getElementById("ivalue").value=(i+1);
					//$('#foldername').value = "";
                }
                //$("#videosDv").append(addStr);
            }
        }
                                      
        url = "<?php echo $strHostName; ?>/includes/addnutfolder.inc.php?foldername="+foldername+"&parentidhidd="+parentidhidd;
        xmlhttp.open("GET", url, true);
        xmlhttp.send();
				
    }
	
	
	
function GetForm() {
        var MailCount=document.getElementById("txtMailCount").value;
		var mailsid=0;
		for (i=1;i < MailCount; i++ )
		{
			if (document.getElementById("chkTick"+i).checked==true)
			{
				mailsid=mailsid+","+document.getElementById("txtmailid"+i).value;
				alert (mailsid);
			}
		}
	
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
                document.getElementById("saveform").innerHTML = xmlhttp.responseText;
            }
        }
		
        xmlhttp.open("GET","<?php echo $strHostName; ?>/includes/addnutfolderevent.inc.php?mailsid="+mailsid,true);
        xmlhttp.send();
    }
	




		
</script>
<script type="text/javascript" language="javascript">
function DeleteMail()
{
	
	var MailCount=document.getElementById("txtMailCount").value;
	var mailsid=0;
	for (i=1;i < MailCount; i++ )
	{
		if (document.getElementById("chkTick"+i).checked==true)
		{
			mailsid=mailsid+","+document.getElementById("txtmailid"+i).value;
			//alert (mailsid);
		}
	}

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
		}
	}

	//xmlhttp.open("GET","<?php echo $strHostName; ?>/includes/search_profile.inc.php?mailsid="+mailsid, true);
	//xmlhttp.send();
	
}
	
function MoveTo(type)
{
	
	//alert (type);
	DeleteMail();
	
	var MailCount=document.getElementById("txtMailCount").value;
	var mailsid=0;
	for (i=1;i < MailCount; i++ )
	{
		if (document.getElementById("chkTick"+i).checked==true)
		{
			mailsid=mailsid+","+document.getElementById("txtmailid"+i).value;
			//alert (mailsid);
		}
		
	}

	if (window.XMLHttpRequest)
	{
		// code for IE7+, Firefox, Chrome, Opera, Safari
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
			//alert (message);
			 document.getElementById("tr_mail_"+i).style.display='none';
			
		}
	}

	xmlhttp.open("GET","<?php echo $strHostName; ?>/includes/nut_move_mails.inc.php?type="+type+"&mailsid="+mailsid, true);
	xmlhttp.send();
	///alert("Selected mail is moved successfully to "+type+" folder.");
	redirectURL("<?php echo $strHostName; ?>/page_doctor.php?dir=nutritionist/inbox&status="+type+"");
	//AlertandRedirect("Selected mail is moved successfully to ".$type."",$strHostName."/page_doctor.php?dir=nutritionist/inbox&status=".$type;
	
}

function Nut_Mail_Delete_By_Id()
{
		
	if (confirm("Are you sure you want to delete this record ?"))
	{
		var MailCount=document.getElementById("txtMailCount").value;
		var mailsid=0;
		for (i=1;i < MailCount; i++ )
		{
			if (document.getElementById("chkTick"+i).checked==true)
			{
				mailsid=mailsid+","+document.getElementById("txtmailid"+i).value;
				alert (mailsid);
			}
			else
			{
				alert ("Please select atleast one record to delete.");
				return;
			}
		}
	
		var message="";
		var day="";
		if (window.XMLHttpRequest)
		{// for IE7+, Firefox, Chrome, Opera, Safaricodes
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
				 alert(message);
				 document.getElementById("tr_mail_"+i).style.display='none';
			}
		}
		xmlhttp.open("GET",hostname+"/includes/delete_reocrds.inc.php?insert_type=Nut_Mails&cid="+mailsid,true);
		xmlhttp.send();
		
	}
	
}
				
</script>

<?php
if(isset($_POST['btnSubmitSave'])) {
   $selfolder = is_array($_POST['selfolder']) ? implode(',', $_POST['selfolder']) : $_POST['selfolder'];
   $parentidhidd = str_replace("'", "''", $_POST['parentidhidd']);
   $mailid = str_replace("'", "''", $_POST['mailid']);
   $parentid=$_SESSION['UserNutID'];
   
   
   $date = date("Y-m-d  h:i:s");
    $tblid = str_replace("'", "''", $_POST['tblid']);
    $data = array(
        'parentid' => $parentid,
        'folderid' => "0,".$selfolder,
        'mailid' => "$mailid",
        'date' => $date,
        'isdeleted' => 0
    );
    if (!$tblid) {
        $id = $db->insert_array(Nut_WishList, $data);
        //AlertandRedirect("Celebrity is saved successfully",$strHostName."/page.php?dir=".$_GET['dir']."&cid=".$_GET['cid']."&cname=".$_GET['cname']);
    } else {
        $id = $db->update_array(Nut_WishList, $data, "id = " . $tblid);
        // AlertandRedirect("Celebrity is saved successfully",$strHostName."/page.php?dir=".$_GET['dir']."&cid=".$_GET['cid']."&cname=".$_GET['cname']);
    }
}


?>

 


<?php
$status="";
if(isset($_GET['mail_id']))
{
	$mail_id=$converter->decode($_GET['mail_id']);
}
if(isset($_GET['status']))
{
	$status=$converter->decode($_GET['status']);
}
//Alert ($status);
$comment="";
$comment=GetValue("select comment as col from ".Nut_Comment." where compose_id=".$mail_id, "col");


if(isset($_GET['m'])) {
		$mode = $converter->decode($_GET['m']); 
		
		if($mode == "view_mail") {
			if(isset($_GET['mail_id'])) {
				$id = $converter->decode($_GET['mail_id']);
			//	Alert($id);
				if($id != "") {
				
					$query = "UPDATE ".Nutritionist." SET isread = 1 WHERE mail_id = $id ";
					$result = mysql_query($query);
					
				}
			}
		}
	}
?>
<section>
  <div class="top_ou">
    <div class="cal_12 m_outo">
      <div class="dvFloat">
        <div class="dvWrapper">
          <div style="float:left; padding:0px 0px 50px 0px; border:solid 0px red;">
            <div class="adviceonline_md">
             	<?php include "includes/nut_inbox_left.inc.php";?>
                <div class="Inbox_td_right" style="border: solid 0px #FF0000; padding-top:50px;">
                      <div class="DvFloat">
                        <table width="100%" border="0" cellpadding="0" cellspacing="0">
                          <tr>
                            
                            <td colspan="3" style=""><table width="30%" border="0" cellpadding="0" cellspacing="0">
                                <tr>
                                  <td style="padding:0px 5px 0px 0px;vertical-align:top"><div style="float:left; background-color:#666666; color:#FFFFFF; padding:5px 15px"> <a href="register_step1.html"  style="text-align:center; font-size:14px;text-transform:none;font-family: 'myriad_web_proregular'; color:#FFFFFF">Delete</a></div></td>
                                  <td style="padding:0px 5px; vertical-align:top"><div style="float:left; width:90px; border:solid 0px red;">
                                      <div style="float:left; width:90px; border:solid 0px red;">
                                        <ul id="dd_nav1">
                                          <li> <a style="background-color:#666666; font-weight:normal; padding:5px 10px; width:70px"> Move to&nbsp;<span class="ar">&#9660;</span> </a>
                                            <ul style="width: 90px; background-color: #666;line-height:25px">
                                              <li style="border-bottom: solid 0px #aac457;"><a onclick="javascript:MoveTo('spam');" style="cursor:pointer;">Spam</a></li>
                                              <li style="border-bottom: solid 0px #aac457;"><a onclick="javascript:MoveTo('trash');" style="cursor:pointer;">Trash</a></li>
                                              <li style="border-bottom: solid 0px #aac457; display:none;"><a onclick="javascript:MoveTo('sent');" style="cursor:pointer;">Sent</a></li>
                                              <?php $FolderArray=$get_retrive->GetNutFolders() ;  ?>	  
                              <?php  while($folder = mysql_fetch_array( $FolderArray )){?>
	                            <li style="border-bottom: solid 0px #aac457;"><a style="cursor:pointer;"  onclick="javascript:MoveTo('<?php echo $folder['name']?>');"><?php echo $folder['name']?></a></li>
                              <?php }?>
                                            </ul>
                                          </li>
                                        </ul>
                                      </div>
                                    </div></td>
                                  <td style="padding:0px 5px; vertical-align:top; text-align:left">
                                  	<div style="float:left; background-color:#666666; padding:4px 10px 2px 10px;width:90px;"> 
                          		 <input type="submit" name="savnbtn" id="savnbtn5" value="Create Folder" onClick="javascript:Popup.showModal('dvAdd1',null,null,{'screenColor':'#000','screenOpacity':.5});
									GetForm()" style="text-align:center; font-size:14px;text-transform:none;font-family: 'myriad_web_proregular'; color:#FFFFFF; background-color: #666; border:0px; padding:0px; cursor:pointer;"/>
                                
                            </div>
                                  </td>
                                </tr>
                              </table></td>
                            <td style="vertical-align:top; text-align:right"></td>
                          </tr>
                         
                          <tr>
                            <td colspan="2">
                            	<div class="DvFloat" style="float:right; text-align:right; margin-top:-20px;">
                                	<a onclick="javascript:history.go(-1)" style="cursor:pointer;"><img src="<?php echo $strHostName;?>/images/prev_md_paging.png" alt="" title="" border="0" /></a>
                                </div>
                                <div class="DvFloat">
                                	<div style="text-align: center; padding: 25px 0px 0px 0px; width: 770px; float: left; border-bottom: solid 1px #e1e1e1;">
                                    	<div class="pagination_md" style="display:none;">
                                        	<div style="width: 22px; float: left; border: solid 0px #0066FF; padding: 0px; margin:-5px 0px 0px 0px;"><a href="#"><img src="images/prev_md_paging.png" alt="" title="" border="0" /></a></div>
                                            <div style="width: 726px; float: left; border: solid 0px #006600;">&nbsp;</div>
                                            <div style="width: 22px;  float: left; border: solid 0px #0066FF; padding: 0px; margin:-5px 0px 0px 0px;"><a href="#"><img src="images/next_md_paging.png" alt="" title="" border="0" /></a></div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                          </tr>
                          <tr>
                            <td colspan="2">
                            	
                                <div class="DvFloat"> 
                                	 <?php
									$query = "SELECT * FROM  ".Nutritionist." where isactive=1 and isdeleted=0 and mail_id=".$mail_id;
									//echo $query;
									$result = mysql_query($query);							
									if($result != "") {	
										$rowcount  = mysql_num_rows($result);
										if($rowcount > 0) {
											while($row = mysql_fetch_assoc($result)) {
												extract($row);
									?> 
                                    <div class="DvFloat" style="padding-top: 10px; border: solid 0px #003366;">
                                    	<div class="DvFloat">
                                            <div class="inbox_detail_left f_grey">From:</div>
                                            <div class="inbox_detail_right">
                                            	<?php 
													echo $user_name=GetValue("select name as col from tbl_users where user_id=".$row['user_id'], "col");
												?>
                                                <input type="hidden" name="txtReplyTo" id="txtReplyTo" value="<?php echo $row['user_id'];?>" />
                                                 <input type="hidden" name="txtComposeID" id="txtComposeID" value="<?php echo $row['mail_id'];?>" />
                                            </div>
                                        </div>
                                        <div class="DvFloat" style="padding-top: 10px;">
                                            <div class="inbox_detail_left f_grey">To:</div>
                                            <div class="inbox_detail_right">
                                            	<?php echo $_SESSION['UserDocName']?> &lt;<?php echo $_SESSION['UserDocEmail'];?>&gt;
                                            </div>
                                        </div>
                                        <div class="DvFloat" style="padding-top: 10px;">
                                            <div class="inbox_detail_left f_grey">Date:</div>
                                            <div class="inbox_detail_right"><?php echo date('d-M-Y h:i:s', strtotime($row['created_date']))?></div>
                                        </div>
                                        <div class="DvFloat" style="padding-top: 10px;">
                                            <div class="inbox_detail_left f_grey">Subject:</div>
                                            <div class="inbox_detail_right"><?php echo $row['subject'];?></div>
                                        </div>
                                    </div>
                                    <div class="DvFloat" style="padding: 10px 0px 20px 0px; border-bottom: solid 1px #e1e1e1; font-size: 13px; line-height: 20px; color: #666666; text-align: justify;">
                                    	<?php echo $row['message'];?>
                                    </div>
                                    <input type="hidden" id="txtMailCount" name="txtMailCount" value=""/>
                                    <?php }}} ?>
                                    
                                    <div class="DvFloat" style="padding: 23px 0px 0px 0px; border-bottom: solid 0px #e1e1e1; font-size: 13px; line-height: 16px; color: #666666;">
                                    	<div class="DvFloat">Reply</div>
                                        <div class="DvFloat" style="padding: 20px 0px 8px 0px; border: solid 0px #000000;">
                                        <div style="width: 400px; float: left;">
                                        	 <div class="DvFloat">
                                             <?php 
										
										 	$comtout=GetValue("select compose_id as col from ".Nut_Comment." where compose_id=".$mail_id, "col");
										 ?>
                                            <form name="myform">
                          <div style="float:left; width:100%"> <textarea  name="comment" id="comment" onKeyUp="limiter()" <?php if($comtout!=""){ echo "disabled";}?>><?php echo $comment;?></textarea>
                          </div>
                          <div style="float:left; width:90px;text-align:left;padding:10px 0px 0px 0px; border:solid 0px red; display:none;">Character left:</div><div style="float:left; width:45px; border:solid 0px red;padding:7px 0px 0px 0px;  display:none;"> 
                            <script type="text/javascript">
           document.write("<input  style='border:solid 0px red; padding:0px;background-color:#fff;text-shadow:0px; width:50px;float:right;box-shadow: inset 0 0 0px 0px #d2d2d2;' type=text name=limit  readonly value="+count+">");
         </script>
                          </div>
                        </form>
                                            </div>
                                            
                                        <input type="hidden" name="txtCommentID" id="txtCommentID" value="" />
                                       
                                        <input type="hidden" name="txtNutritionistID" id="txtNutritionistID" value="<?php echo $_SESSION['UserNutID']?>" />
                                         
                                       <?php if($comtout=="" || $comtout=="0") { ?>
                                            <div class="DvFloat" style="padding: 10px 0px 0px 0px; border: solid 0px #e1e1e1; font-size: 12px; line-height: 16px; color: #666666;">
                                            <div style=" width: 95px; height:30px; float:left;"> <a class="buttoncancle">cancel</a></div>
                                            <div style=" width:95px; height:30px; float:left; margin-left: 10px;"> <a class="buttongreen" onclick="javascript:SendReply(this);">SUBMIT</a></div>
                                            
                                         <?php } ?>
                                            
                                        </div>
                                    
                                    </div>
                                </div>
                                </div>
                            </td>
                          </tr>
                        </table>
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
<center>
    <div id="dvAdd1" style="width: 100%; position: absolute;display: none;top: 0px;">
      <div id="saveform" style="width: 100%;top: 0px; position: absolute;"></div>
    </div>
</center>