<?php include("common.inc.php");?>

<?php 

//$memid=4;
$folderid=0;
if(isset($_GET['folderid'])) {
	$folderid = ($_GET['folderid']);
	//Alert ($type);
}

if(isset($_SESSION['UserID']))
{
	$user_id=$_SESSION['UserID'];
}


$foldername=GetValue("select name as col from tbl_folder where id=".$folderid." and parentid=".$user_id, "col");



?>

<form name="formsel" id="formsel" method="post">
<table cellpadding="0" border="0" width="410px" align="center" style="background-color: #FFFFFF; border-radius:5px; font-size:15px; color:#a6a6a6; padding:0 15px 15px 15px;">
        <tr>
                <td align="center" style="padding: 0px 37px 10px 350px">
                    <div style="margin: 20px 0px 0px -12px; position: absolute;">
                        <a href="javascript:Popup.hide('dvAdd1');" target="_parent" style="text-decoration: none; color: #fff;">
                            <img src="images/close.png" alt="" title="" border="0" />
                        </a>
                    </div>
                </td>
            </tr>
        <tr style="">
        	<td style="padding:15px;" valign="top">
            	<span style="font-size:23px; font-weight:normal; color:#000;">Rename This Folder</span>
            </td>
         </tr>
         
        
        <tr>
            <td style="padding:5px 5px 15px 15px; border-top: solid 0px #cccccc; border-bottom: solid 0px #cccccc;" valign="top">
            	
                <input type="text" name="txtRename" id="txtRename" value="<?php echo $foldername;?>" maxlength="13" style="width:280px; height:33px; margin:0 5px 0 0; font-size:15px;"><br /><br />
                
                <input type="hidden" name="txtFolderId" id="txtFolderId" value="<?php echo $folderid;?>" style="width:280px; height:33px; margin:0 5px 0 0; font-size:15px;"><br /><br />
              
                <input type="submit" name="btnRename" id="btnRename" value="Rename" onclick="javascript:return ValidateRenameFolder();" style=" float:left; margin-top:22px;" class="button4"/>
         
                <a href="javascript:Popup.hide('dvAdd1');" style="text-decoration: none; color: #fff;"><input type="button" name="btnSubmitCancel" id="btnSubmitCancel" value="Cancel" class="button4" style="width:28%; float:left; margin-left:5px; margin-top:22px"/></a>
                
                
            </td>
        </tr>
        
         <tr>
            <td style="padding:5px 15px;" valign="top">
            	
            </td>
        </tr>
        
        
    </table></form>