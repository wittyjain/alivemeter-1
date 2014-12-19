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
			//	alert (mailsid);
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
				 //alert(message);
				 document.getElementById("tr_mail_"+i).style.display='none';
			}
		}
		xmlhttp.open("GET",hostname+"/includes/delete_reocrds.inc.php?insert_type=Nut_Sent_Mails&cid="+mailsid,true);
		xmlhttp.send();
		//alert("Selected mail is moved successfully to "+type+" folder.");
		//redirectURL("<?php echo $strHostName; ?>/page_doctor.php?dir=nutritionist/view_mails&status=sent");
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
	$page=1;$page_count=10;$newpagenumber="2";$retrive_Array=array();$get_array=array();
	if(isset($_GET['page'])){
		$page=$_GET['page'];
	}
	else
	{
		$page=1;
	}
	$retrive_Array=$get_retrive->GetNutSentMails($page_count,0);

	$nume=$get_retrive->GeNutMails_Count();

	if($nume !="0")
	{
		$newpagenumber=($nume/$page_count);
		if($newpagenumber==""){$newpagenumber="0";}else{$newpagenumber=$newpagenumber+1;}
		$newpagenumber=round($newpagenumber);
		if($page > $newpagenumber)
		{
			$newpagenumber=1;
		}
		else
		{
			$newpagenumber="";
		}
	}
	
	
	$pagingLink = getPagingLinkBackEndFrontEnd($nume,$page_count,'dir=nutritionist/inbox',$newpagenumber,$strHostName."/page_doctor.php");
	
	
?>

 <div class="Inbox_td_right">
               
                <table width="100%" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                  <?php if($inbox_count>0 || $sent_count>0 || $trash_count>0) { ?>	
                    <td class="Inboxbg1" style="padding-top:10px;vertical-align:top"><input type="checkbox" id="chkMainTick" value="" /></td>
                   <?php } ?>
                    <td class="Inboxbg2" colspan="2"><table width="30%" border="0" cellpadding="0" cellspacing="0">
                        <tr>
                          <?php if($inbox_count>0 || $sent_count>0 || $trash_count>0) { ?>	
                          <td style="padding:0px 5px;vertical-align:top">
                          	 
                                <div style="float:left; background-color:#666666; color:#FFFFFF; padding:5px 15px"> <a onclick="javascript:Nut_Mail_Delete_By_Id();" style="text-align:center; font-size:14px;text-transform:none;font-family: 'myriad_web_proregular'; color:#FFFFFF; cursor:pointer;">Delete</a></div>
                            
                          </td>
                          <td style="padding:0px 5px; vertical-align:top; display:none;">
                          		
                                	<div style="float:left; width:90px; border:solid 0px red;">
                                        <div style="float:left; width:90px; border:solid 0px red;">
                                        <ul id="dd_nav1">
                                          <li> <a style="background-color:#666666; font-weight:normal; padding:5px 10px; width:70px"> Move to&nbsp;<span class="ar">&#9660;</span> </a>
                                            <ul style="width: 90px; background-color: #666;line-height:25px">
                                              <li style="border-bottom: solid 0px #aac457;"><a onclick="javascript:MoveTo('spam');" style="cursor:pointer;">Spam</a></li>
                                              <li style="border-bottom: solid 0px #aac457;"><a onclick="javascript:MoveTo('trash');" style="cursor:pointer;">Trash</a></li>
                                              <li style="border-bottom: solid 0px #aac457;"><a onclick="javascript:MoveTo('sent');" style="cursor:pointer;">Sent</a></li>
                                              <?php $FolderArray=$get_retrive->GetNutFolders() ;  ?>	  
                              <?php  while($folder = mysql_fetch_array( $FolderArray )){?>
	                            <li style="border-bottom: solid 0px #aac457;"><a style="cursor:pointer;"  onclick="javascript:MoveTo('<?php echo $folder['name']?>');"><?php echo $folder['name']?></a></li>
                              <?php }?>
                                            </ul>
                                          </li>
                                        </ul>
                                      </div>
                             		</div>
                               
                            </td>
                          <?php } ?>
                          <td style="padding:0px 5px; vertical-align:top">
                            <div style="float:left; background-color:#666666; padding:4px 10px 2px 10px;width:90px;"> 
                          		 <input type="submit" name="savnbtn" id="savnbtn5" value="Create Folder" onClick="javascript:Popup.showModal('dvAdd1',null,null,{'screenColor':'#000','screenOpacity':.5});
									GetForm()" style="text-align:center; font-size:14px;text-transform:none;font-family: 'myriad_web_proregular'; color:#FFFFFF; background-color: #666; border:0px; padding:0px; cursor:pointer;"/>
                                
                            </div>
                           </td>
                        </tr>
                      </table></td>
                    
                  
                  </tr>
                  
                  <tr>
                    <td class="f_white" colspan="6" style="height: 5px;padding:15px 0px 0px 0px"></td>
                  </tr>
                  
                   <?php $i=0;
						$i=$i+1;
						while($get_array = mysql_fetch_array( $retrive_Array )){?>
	  				<tr id="tr_mail_<?php echo $i;?>" style="display:'';">
                        <td class="lightInboxbg1">
                        
                         <input type="checkbox" name="chkTick<?php echo $i?>" id="chkTick<?php echo $i?>" style="float:left; text-align:left; width:25px; margin-top:8px;" onchange="javascript:DeleteMail();">
                         
                        <input type="hidden" id="txtmailid<?php echo $i?>" name="txtmailid<?php echo $i?>" value="<?php echo $get_array['compose_id']?>" style="width:20px;"/>
                        </td>
                        
                            <td class="lightInboxbg21" style="font-weight:normal;"><a href="<?php echo $strHostName;?>/page_doctor.php?dir=nutritionist/detailed_mail&mail_id=<?php echo $converter->encode($get_array['compose_id']);?>&status=<?php echo $converter->encode("read")?>"><?php echo $get_array['comment'];?></a></td>
                        
                            
                            <td class="lightInboxbg3"> 
                                <a href="<?php echo $strHostName;?>/page_doctor.php?dir=nutritionist/details&patient_id=<?php echo $converter->encode($get_array['user_id']);?>&compose_id=<?php echo $converter->encode($get_array['mail_id']);?>&parent_id=<?php echo $converter->encode($get_array['user_id']);?>"><?php  
                                    echo $patient_name=GetValue("select name as col from tbl_users where user_id=".$get_array['patient_id'], "col");
                                ?> 
                                  </a> 
                            </td>
                            
                    
						
                        
                        
                        <td class="lightInboxbg4"><?php echo date('d-M-Y h:i:s',strtotime($get_array['created_date']))?> </td>
                       
                      </tr>
                      <tr>
                        <td class="f_white" colspan="6" style="height: 5px;"></td>
                      </tr>
                   <?php $i=$i+1; } ?>
                   <input type="hidden" id="txtMailCount" name="txtMailCount" value="<?php echo $i?>"/>
                 </table>
              </div>

            
 <div class="DvFloat">
                <div style="text-align: center; padding: 10px 0px; width: 967px; float: left; border: solid 0px #000000;">
                  <div class="pagination_md">
                  <?php echo $pagingLink ?>
                    <div style="width: 22px; float: left; border: solid 0px #0066FF; padding: 0px; margin:-5px 0px 0px 0px; display:none;"><a href="#"><img src="images/prev_md_paging.png" alt="" title="" border="0" /></a></div>
                    <div style="width: 740px; float: left; border: solid 0px #006600; display:none;"><span class="selected">1</span> <a href="#">2</a> <a href="#">3</a> <a href="#">4</a> <a href="#">5</a> <a href="#">6</a> <a href="#">7</a> </div>
                    <div style="width: 22px;  float: left; border: solid 0px #0066FF; padding: 0px; margin:-5px 0px 0px 0px; display:none;"><a href="#"><img src="images/next_md_paging.png" alt="" title="" border="0" /></a></div>
                  </div>
                </div>
              </div>
<center>
    <div id="dvAdd1" style="width: 100%; position: absolute;display: none;top: 0px;">
      <div id="saveform" style="width: 100%;top: 0px; position: absolute;"></div>
    </div>
</center>