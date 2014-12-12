<?php include("common.inc.php");?>

<?php 

//$memid=4;
$mailid=0;
if(isset($_GET['mailsid'])) {
	$mailid = ($_GET['mailsid']);
	//Alert ($type);
}

$parentid=$_SESSION['UserID'];


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
        <tr>
        	<td style="padding:15px;" valign="top">
            	<span style="font-size:23px; font-weight:normal; color:#000;">Create a folder</span>
            </td>
         </tr>
         <tr>
         	<td style="padding:15px 5px 0 15px; display:none;">
            	
                <div id="runtimeadd">
                    <?php 
               // $mailid=$_GET['qstring'];
			    //$mailid=3;
                //$listing_type=$_GET['type'];
                $chked="";
                $memid=$_SESSION['UserID'];
				//$memid=4;
                //$query_folder="select * from ".Folder." where parentid=$memid";
				$query_folder="select * from ".Folder." where parentid=$parentid";
				//echo $query_folder;
                $query_folder_exec=  mysql_query($query_folder);

				$nume = mysql_num_rows($query_folder_exec);
                $i=1;
				if($nume>0){
                while ($row_folder =  mysql_fetch_array($query_folder_exec)) { 
                ?>
                  <?php 
                 $folderid=GetValue("SELECT folderid FROM ".WishList." WHERE parentid = $parentid and mailid in (".$mailid.")", "folderid");
                
				
				 $folder_checked="select * from ".WishList." where mail_id in (".$mailid.") and user_id = $parentid and (folderid like '%,".$row_folder['id']."%' or folderid like '%".$row_folder['id'].",%' or folderid like '".$row_folder['id']."') ";

				// echo $folder_checked;
                 $folder_checked_exec=mysql_query($folder_checked);
                 $num_row= mysql_num_rows($folder_checked_exec);
                 if($num_row > 0){
                     $chked="checked";
                 }
                 else{
                     $chked="";
                 }
                ?>
               <!-- <input type="checkbox" <?php echo $chked; ?>  value="<?php echo $row_folder['id']; ?>" name="selfolder[]" id="selfolder<?php echo $i?>" style="width:30px; color:#000; line-height:25px;" /><span style="color:#000;"><?php echo $row_folder['name']; ?></span><br/>-->
                
                  <input type="checkbox" value="<?php echo $row_folder['id']; ?>" name="selfolder[]" id="selfolder<?php echo $i?>" style="width:30px; color:#000; line-height:25px;" /><span style="color:#000;"><?php echo $row_folder['name']; ?></span><br/>
                  <?php 
                $i++;                
                } }
                  $isavl=GetValue("SELECT id FROM ".WishList." WHERE parentid = $parentid and mailid in (".$mailid.")", "id");
                ?>
                 </div>
                <input type="hidden" name="tblid" id="tblid" value="<?php echo $isavl; ?>" >
                <input type="hidden" name="mailid" id="mailid" value="<?php echo $mailid; ?>" >
                <input type="hidden" name="parentidhidd" id="parentidhidd"<?php echo $i ?> value="<?php echo $parentid; ?>" >
				<input type="hidden" name="ivalue" id="ivalue" value="<?php echo $i; ?>">
            </td>
         </tr>
         <tr>
         	 <td style="padding:10px 15px; border-top: solid 0px #cccccc; border-bottom: solid 0px #cccccc; color:#000; display:none;" valign="top">
             	<p style="margin:0px;">Or</p>
             </td>
         </tr>
        <tr>
            <td style="padding:5px 5px 15px 15px; border-top: solid 0px #cccccc; border-bottom: solid 0px #cccccc;" valign="top">
            	<p style="padding:5px 0; margin:0px; color:#000;">Create a new folder</p>
                <input type="text" name="foldername" id="foldername" value="" maxlength="13" style="width:280px; height:33px; margin:0 5px 0 0;"><br /><br />
                <input type="button" name="btnSubmitCreate" onclick="javascript:AddFolder()" id="btnSubmit" class="button4" value="Add" style="margin-top:22px; width:20%; float:left;" >
                 <a href="javascript:Popup.hide('dvAdd1');" style="text-decoration: none; color: #fff;"><input type="button" name="btnSubmitCancel" id="btnSubmitCancel" value="Cancel" class="button4" style="width:28%; float:left; margin-left:10px; margin-top:22px;"/></a>
            </td>
        </tr>
         <tr>
            <td style="padding:5px 15px;" valign="top">
            	<input type="submit" name="btnSubmitSave" id="btnSubmitSave" value="Save" 
				onclick="javascript:return ValidateFolder();" style="width:20%; float:left; display:none" class="button4"/>
               
            </td>
        </tr>
        
        
    </table></form>

