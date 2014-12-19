<?php

if(isset($_GET['status']))
{
	$status =$_GET['status'];
}
else
{
	$status="";
}

if(isset($_GET['folderid']))
{
	$folderid =$converter->decode($_GET['folderid']);
}
else
{
	$folderid="0";
}


if(isset($_SESSION['UserID']))
{
	$UserID=$_SESSION['UserID'];
}

$inbox_id=$get_retrive->RetriveUserInboxID($UserID);
$sent_id=$get_retrive->RetriveUserSentID($UserID);
$trash_id=$get_retrive->RetriveUserTrashID($UserID);


$inbox_count = $get_retrive->GetMails_Count($inbox_id,$UserID);
$sent_count = $get_retrive->GetMails_Count($sent_id,$UserID);
$trash_count = $get_retrive->GetMails_Count($trash_id,$UserID); 


	
?>


<script type="text/javascript">

function ValidateRenameFolder()
{
	var foldername=document.getElementById("txtRename").value;
	if(foldername==""){
		alert("Please fill folder name to rename.");
		return false;
	}
}


function RenameFolder(id)
{
	Popup.showModal('dvAdd1',null,null,{'screenColor':'#000','screenOpacity':.6});
	
	if(id!= "" ) {
	//	document.getElementById("loading").style.display='';
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
				document.getElementById("saveform").innerHTML = xmlhttp.responseText;
				//alert ("Folder renamed successfully.");
				//redirectURL(window.location.href);
			}
			
		}
		
		//alert("<?php echo $strHostName; ?>/includes/rename_folder.inc.php?folderid="+id);
		 xmlhttp.open("GET","<?php echo $strHostName; ?>/includes/rename_folder.inc.php?folderid="+id,true);
		xmlhttp.send();
		
		
		
	}
}


function DeleteFolder(id)
{
	//Popup.showModal('dvAdd1',null,null,{'screenColor':'#000','screenOpacity':.6});
	
	if(id!= "" ) {
	    if(confirm("Do you want to delete selected folder? You may loss your saved mails after deleting this folder."))
		{
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
					//document.getElementById("saveform").innerHTML = xmlhttp.responseText;
					
				}
				
			}
			
		//	alert("<?php echo $strHostName; ?>/includes/delete_folder.inc.php?folderid="+id);
			 xmlhttp.open("GET","<?php echo $strHostName; ?>/includes/delete_folder.inc.php?folderid="+id,true);
			xmlhttp.send();
			
			alert ("Folder deleted successfully.");
			redirectURL(window.location.href);
		
		}
		else
		{
			
		}
		
	}
}
</script>

<?php
if(isset($_POST['btnRename']))
{
	$name= trim(str_replace("'", "''", $_POST['txtRename']));
	$folderid= trim(str_replace("'", "''", $_POST['txtFolderId']));
	
	
	$data1 = array(
		'parentid'=> $user_id,
		'name'=>$name,
		'isdeleted'=>0,
		
	);
	
	
	$id = $db->update_array(Folder, $data1, "id = $folderid");
}

?>
<div class="Inbox_td_left" style="width: 215px; border: solid 0px #0000FF;">
                <table cellpadding="0" cellspacing="0" style="width:100%">
                  <tr>
                    <td style="text-align:left; width:10%; padding:0px 10px 0px 0px"><img src="images/inbox_mail.jpg" alt="" align="absmiddle" /></td>
                    <td style="text-align:left; width:70%; vertical-align:middle; "><a href="<?php echo $strHostName;?>/page.php?dir=inbox/view_mails&status=inbox&folderid=<?php echo $converter->encode($inbox_id)?>" style="color:<?php if($status=="inbox") { echo "#009999"; } ?>;">Inbox &nbsp; (<?php echo $inbox_count;?>) </a></td>
                    <td style="text-align:left; width:10%; vertical-align:middle "></td>
                  </tr>
                  
                  <tr>
                    <td style="text-align:left; width:10%;padding:5px 0px"><img src="images/sent_item_icon.jpg" alt="" align="absmiddle" /></td>
                    <td style="text-align:left; width:70%;vertical-align:middle"><a href="<?php echo $strHostName;?>/page.php?dir=inbox/view_mails&status=sent&folderid=<?php echo $converter->encode($sent_id)?>" style="color:<?php if($status=="sent") { echo "#009999"; } ?>;">Sent Items (<?php echo $sent_count;?>)</a></td>
                    <td style="text-align:left; width:10%;vertical-align:middle "></td>
                  </tr>
                  <tr>
                    <td style="text-align:left; width:10%;padding:5px 0px"><img src="images/trash_icon.jpg" alt="" align="absmiddle" /></td>
                    <td style="text-align:left; width:7570;vertical-align:middle"><a href="<?php echo $strHostName;?>/page.php?dir=inbox/view_mails&status=trash&folderid=<?php echo $converter->encode($trash_id)?>" style="color:<?php if($status=="trash") { echo "#009999"; } ?>;">Trash (<?php echo $trash_count;?>)</a></td>
                    <td style="text-align:left; width:10%;vertical-align:middle "></td>
                  </tr>
                  <tr>
                    <td style="text-align:left; width:10%;padding:5px 0px"><img src="images/folder_icon.jpg" alt="" align="absmiddle" /></td>
                    <td style="text-align:left; width:70%;vertical-align:middle">My Folders</td>
                    <td style="text-align:left; width:10%;vertical-align:middle "></td>
                  </tr>
                  <tr>
                    <td style="text-align:left; width:10%;padding:5px 0px"></td>
                    <td style="text-align:left; width:70%;vertical-align:middle">
                          <ul style="list-style-type:square; line-height:30px;">
                          <?php $FolderArray=$get_retrive->GetFolders($UserID) ;  ?>	  
                              <?php  while($folder = mysql_fetch_array( $FolderArray )){?>
	                            <li><a href="<?php echo $strHostName;?>/page.php?dir=inbox/view_mails&status=<?php echo $folder['name'];?>&folderid=<?php echo $converter->encode($folder['id'])?>" style="cursor:pointer; color:<?php if($status==$folder['name']) { echo "#009999"; } ?>;"><?php echo $folder['name']?>
								
								<?php 
									$folder_count =  $get_retrive->GetMails_Count($folder['id'],$UserID); 
								?>
								(<?php echo $folder_count;?>)</a>&nbsp;
                                <a onclick="javascript: RenameFolder('<?php echo $folder['id'];?>')" style="cursor:pointer;"><img src="<?php echo $strHostName;?>/images/register_steps/edit_icon.jpg" style="width:12px;" /></a>
                                
                                 <a onclick="javascript: DeleteFolder('<?php echo $folder['id'];?>')" style="cursor:pointer;"><img src="<?php echo $strHostName;?>/images/register_steps/delete_icon.jpg" style="width:12px;" /></a>
								</li>
                              <?php }?>
                          </ul>
                          
                           
                      </td>
                    <td style="text-align:left; width:10%;vertical-align:middle "></td>
                  </tr>
                </table>
              </div>
              
<center>
    <div id="dvRenameFolder" style="width: 100%; position: absolute;display: none;top: 0px;">
      <div id="renamefolder" style="width: 100%;top: 0px; position: absolute;"></div>
    </div>
</center>
