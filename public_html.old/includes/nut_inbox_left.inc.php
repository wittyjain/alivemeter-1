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


if(isset($_SESSION['UserNutID']))
{
	$userid=$_SESSION['UserNutID'];
}

$inbox_id=$get_retrive->RetriveNutInboxID($userid);
$sent_id=$get_retrive->RetriveNutSentID($userid);
$trash_id=$get_retrive->RetriveNutTrashID($userid);


$inbox_count = $get_retrive->GetMails_NutCount($inbox_id,$userid);
$sent_count = $get_retrive->GetMails_NutCount($sent_id,$userid);
$trash_count = $get_retrive->GetMails_NutCount($trash_id,$userid); 

		
	$dir=""; $menus_sel=""; 
if(isset($_GET['dir']))
{
	$dir=$_GET['dir'];
}

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
	  ///alert (id);
	
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
				// alert ("Folder renamed successfully.");
				 //redirectURL(window.location.href);
			}
			
		}
		
		/// alert("<?php echo $strHostName; ?>/includes/rename_folder.inc.php?folderid="+id);
		 xmlhttp.open("GET","<?php echo $strHostName; ?>/includes/rename_nut_folder.inc.php?folderid="+id,true);
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
			 xmlhttp.open("GET","<?php echo $strHostName; ?>/includes/delete_nut_folder.inc.php?folderid="+id,true);
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
		'parentid'=> $userid,
		'name'=>$name,
		'isdeleted'=>0,
		
	);
	
	
	$id = $db->update_array(Nut_Folder, $data1, "id = $folderid");
}

?>

<div class="Inbox_td_left">
                <table cellpadding="0" cellspacing="0" style="width:100%">
                  <tr>
                    <td style="text-align:left; width:10%;padding:0px 10px 0px 0px"><img src="images/inbox_mail.jpg" alt="" align="absmiddle" /></td>
                    <td style="text-align:left; width:70%; vertical-align:middle"><a href="<?php echo $strHostName;?>/page_doctor.php?dir=nutritionist/inbox&status=inbox&folderid=<?php echo $converter->encode($inbox_id)?>" style="color:<?php if($status=="inbox") { echo "red"; } ?>;">Inbox &nbsp; (<?php echo $inbox_count;?>) </a></td>
                    <td style="text-align:left; width:10%; vertical-align:middle "></td>
                  </tr>
                  
                  <tr>
                    <td style="text-align:left; width:10%;padding:5px 0px"><img src="images/sent_item_icon.jpg" alt="" align="absmiddle" /></td>
                    <td style="text-align:left; width:70%;vertical-align:middle"><a href="<?php echo $strHostName;?>/page_doctor.php?dir=nutritionist/view_mails&status=sent&folderid=<?php echo $converter->encode($sent_id)?>" style="color:<?php if($status=="sent") { echo "red"; } ?>;">Sent Items (<?php echo $sent_count;?>)</a></td>
                    <td style="text-align:left; width:10%;vertical-align:middle "></td>
                  </tr>
                  
                  <tr>
                    <td style="text-align:left; width:10%;padding:5px 0px"><img src="images/trash_icon.jpg" alt="" align="absmiddle" /></td>
                    <td style="text-align:left; width:7570;vertical-align:middle"><a href="<?php echo $strHostName;?>/page_doctor.php?dir=nutritionist/inbox&status=trash&folderid=<?php echo $converter->encode($trash_id)?>" style="color:<?php if($status=="trash") { echo "red"; } ?>;">Trash (<?php echo $trash_count;?>)</a></td>
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
                          <?php $FolderArray=$get_retrive->GetNutFolders($userid) ;  ?>	  
                              <?php  while($folder = mysql_fetch_array( $FolderArray )){?>
	                            <li><a href="<?php echo $strHostName;?>/page_doctor.php?dir=nutritionist/inbox&status=<?php echo $folder['name'];?>&folderid=<?php echo $converter->encode($folder['id'])?>" style="cursor:pointer; color:<?php if($status==$folder['name']) { echo "red"; } ?>;"><?php echo $folder['name']?>
								
								<?php 
									$folder_count =  $get_retrive->GetMails_NutCount($folder['id'],$userid); 
								?>
								(<?php echo $folder_count;?>)</a>&nbsp;
                                <a onclick="javascript: SetScroll();RenameFolder('<?php echo $folder['id'];?>')" style="cursor:pointer;"><img src="<?php echo $strHostName;?>/images/register_steps/edit_icon.jpg" style="width:12px;" /></a>
                                
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