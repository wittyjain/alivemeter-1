<script type="text/javascript" src="<?php echo $strHostName?>/js/health_steup_validation.js"></script>
<script type="text/javascript" src="<?php echo $strHostName?>/js/health_steup_insert_retrive.js"></script>

<script type="text/javascript">
function UnAmbComment()
{
	
	if(confirm ("Are you sure want to unapprove selected comments?"))
	{
		var CmtCount=document.getElementById("txtCmtCount").value;
		var mail_type="";
		//var status=document.getElementById("txtStatus").value;
		//var mail_type=document.getElementById("txtMailType").value;
		
		//alert(status);
		//alert(document.getElementById("txtMailType").value);
		
		var cmtid="0";
		for (i=1;i < CmtCount; i++ )
		{
			if (document.getElementById("chkApproval"+i).checked==true)
			{
				//mail_type=document.getElementById("txtMailType"+i).value;
				cmtid=cmtid+","+document.getElementById("txtCommentid"+i).value;
				
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
				redirectURL(window.location.href);
				
			}
		}
		//document.write("<?php echo $strHostName; ?>/includes/move_mails.inc.php?type=User&cmtid="+cmtid+"&folderid="+folderid+"&foldername="+foldername, true);y
		xmlhttp.open("GET","<?php echo $strHostName; ?>/includes/approve_ambassador.inc.php?cmtid="+cmtid+"&type=Unapprove", true);
		xmlhttp.send();
	}
	else
	{
		//document.getElementById("chkApproval"+i).checked==false;
		redirectURL(window.location.href);
		//return false;
	}
	
}



function Delete_UnAmb_By_Id()
{
	
	if(confirm ("Are you sure want to delete selected comments?"))
	{
		var CmtCount=document.getElementById("txtCmtCount").value;
		//var mail_type="";
		//var status=document.getElementById("txtStatus").value;
		//var mail_type=document.getElementById("txtMailType").value;
		
		//alert(status);
		//alert(document.getElementById("txtMailType").value);
		
		var cmtid="0";
		//var artid="0";
		for (i=1;i < CmtCount; i++ )
		{
			if (document.getElementById("chkDelete"+i).checked==true)
			{
				//mail_type=document.getElementById("txtMailType"+i).value;
				cmtid=cmtid+","+document.getElementById("txtCommentid"+i).value;
			///	artid=artid+","+document.getElementById("txtArticleid"+i).value;
				
				
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
			//	document.getElementById("tr_post_comment_"+cmtid).style.display='none';
				redirectURL(window.location.href);
				
			}
		}
		//document.write("<?php echo $strHostName; ?>/includes/move_mails.inc.php?type=User&cmtid="+cmtid+"&folderid="+folderid+"&foldername="+foldername, true);y
		//alert("<?php echo $strHostName; ?>/includes/delete_comment.inc.php?cmtid="+cmtid+"&type=Approve");
		xmlhttp.open("GET","<?php echo $strHostName; ?>/includes/delete_ambassador.inc.php?cmtid="+cmtid+"&type=Unapprove", true);
		xmlhttp.send();
	}
	else
	{
		//document.getElementById("chkApproval"+i).checked==false;
		redirectURL(window.location.href);
		//return false;
	}
	
}

</script>
<section>
  <div class="top_ou">
    <div class="top_in" style="border: solid 0px #000066;">
      <div class="top">
        <div class="cal_12">
          &nbsp;
        </div>
        <div class="b_crumb">&nbsp;</div>
      </div>
    </div>
  </div>
</section>

<section>
	<form method="post">
	    <div class="cal_full_size" style="margin-top:-50px;">
<div class="cal_12 m_outo">
  <div class="dvFloat">
    <div class="dvWrapper">
      <div style=" padding:0px 0px 35px 0px">
         		<?php include "includes/master_left.inc.php";?>
        	<div class="health_dashboard_div_right">
    		<div class="DvFloat">
	<div  style="width:99%; border:solid 0px red;">
                 <div class="dvFloat formpadding1" style="padding-top:20px">
                    <div class="formcontrol2" style="padding-left:0px; padding-bottom:10px; ">
                      <label class="formcontrol2">
                      	 <h2 class="Tab_Title">View Be With Us</h2>
                     </label>
                    </div>
                   
                    <div class="formcontrol2" style="padding-left:0px; padding-bottom:10px; ">
                      <label class="formcontrol2">
                      	 <div style="float:left; width:200px; margin-right:5px;"><a href="<?php echo $strHostName;?>/page.php?dir=master/be_with_us/view" class="button2" style="width:180px; background-color:#009999;">Approved Be With Us</a></div>
                         <div style="float:left; width:200px;"><a href="<?php echo $strHostName;?>/page.php?dir=master/unapp_be_with_us/view" class="button2" style="width:180px;">Unapproved Be With Us</a></div>
                     </label>
                    </div>
                    
                    
                  </div>
                  		<table cellpadding="0" cellspacing="0"  style="width:100%;float:left;" >
                              <tr>
                                <td class="tbl_head" style="width:20%;">User Name </td>
                                <td class="tbl_head" style="width:40%;">Content</td>
                                <td class="tbl_head" style="width:20%;">Date</td>
                                <td class="tbl_head" style="width:10%; text-align:left;">Approval</td>
                                <td class="tbl_head" style="text-align:center; padding-left:0px; width:10%;">Actions</td>
                              </tr>
                               <?php $retrive_Array=$get_retrive->GetBeWithUs()  ?>
                              <?php  
							  $i=0;
							  $i=$i+1;
							  while($get_array = mysql_fetch_array( $retrive_Array )){?>
                              <tr id="tr_post_comment_<?php echo $get_array['be_with_us_id']*121?>">
                                <td class="tdborder" style="padding-left:20px;"><?php echo $username=GetValue("select name as col from tbl_users where user_id=".$get_array['user_id'], "col");?>
                                	<input type="hidden" name="txtUserID" id="txtUserID" value="<?php echo $get_array['user_id']; ?>" />
                                 </td>
                               <td class="tdborder" style="padding-left:20px;"><?php echo $get_array['title']?> </td>
                                 <td class="tdborder" style="padding-left:20px;"><?php echo date('d-M-Y',strtotime($get_array['created_date']))?></td>
                                 <td class="tdborder" style="padding-left:0px; text-align:center;">
                                 <?php /*?>	<input type="checkbox" name="chkApproval" id="chkApproval<?php echo $i?>" <?php if($get_array['approved']=="1") { echo "checked";}?> /><?php */?>
                                    
                                    <input type="checkbox" name="chkApproval" id="chkApproval<?php echo $i?>"/>
                                    
                                      <input type="hidden" id="txtCommentid<?php echo $i?>" name="txtCommentid<?php echo $i?>" value="<?php echo $get_array['be_with_us_id']?>" style="width:20px;"/>
                                 </td>
                                <td class="tdborder" style="padding-left:10px;">
                                <table cellpadding="0" cellspacing="0"  style="width:100%" >
                                    <tr>
                                     <td class="SubTd2"><a  style="cursor:pointer;" href="<?php echo $strHostName;?>/be_with_us.php?cid=<?php echo $converter->encode($get_array['be_with_us_id'])?>" target="_blank"><img src="images/register_steps/view_icon.jpg" alt=""></a></td>
                                         <td class="SubTd2"> <input type="checkbox" name="chkDelete" id="chkDelete<?php echo $i?>"/></td>
                                    </tr>
                                  </table></td>
                        
                              </tr>
                              <?php $i=$i+1; } ?>
                              <input type="hidden" id="txtCmtCount" name="txtCmtCount" value="<?php echo $i?>"/>
                               <div class="formcontrol2" style="width:400px; float:left; padding:15px 0;">   
                                  Total Approved Be With Us : 
                                  <?php 
								  	$total_app_cmt=GetValue("select Count(*) as col from  ".Be_With_Us." where approved=1", "col");
									echo $total_app_cmt;
								  ?>
                                </div>
                                
                                
                                  <div class="formcontrol2" style="width:300px; float:right; padding:15px 0;">   
                                    <a  onclick="javascript:Delete_UnAmb_By_Id()"  style="float:right; width:80px; font-size:14px; text-align:center;padding:5px 0px;" class="button">Delete</a>
                                    <a name="btnSubmit" id="btnSubmit" class="button" onclick="javascript:UnAmbComment();" style="float:right; width:80px; font-size:14px; text-align:center; padding:5px 0;  margin-right:10px; ">Submit </a>
                                  
                                </div>
                                
                                
                            
                              <tr>
                                <td colspan="4" style="display:none">
                                    <?php echo $pagingLink ?>
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
	</form>
</section>

