<script type="text/javascript" src="<?php echo $strHostName?>/js/health_steup_validation.js"></script>
<script type="text/javascript" src="<?php echo $strHostName?>/js/other_dynamic.js"></script>
<script src="<?php echo $strHostName;?>/js/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo $strHostName;?>/js/health_steup_insert_retrive.js" type="text/javascript"></script>
<script type="text/javascript">
function ValidateFolder()
{
	 var foldername=document.getElementById("foldername").value;
	 if(foldername=="")
 	{
		alert("Please Fill Folder Name To Create");
		return false;
	}	
	AddFolder();
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
			//alert(xmlhttp.status);
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                var message = xmlhttp.responseText;
				//alert(message);
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
                                      
        url = "<?php echo $strHostName; ?>/includes/addfolder.inc.php?foldername="+foldername+"&parentidhidd="+parentidhidd;
	// alert (url);
		xmlhttp.open("GET", url, true);
        xmlhttp.send();
		alert ("Folder created successfully.");
        redirectURL(window.location.href);
	///	document.getElementById("foldername").value="";
				
    }
	
	
	
function GetForm() {
       // var MailCount=document.getElementById("txtMailCount").value;
		var mailsid=0;
		mailsid=mailsid+","+document.getElementById("txtmailid").value;
			
	
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
		
        xmlhttp.open("GET","<?php echo $strHostName; ?>/includes/addfolderevent.inc.php?mailsid="+mailsid,true);
        xmlhttp.send();
    }
	
function UnselecMain(source)
{
	if (source.checked==false)
	{
		 document.getElementById("chkAll").checked=false;
	}
	 
}	 


function selectAll(source)
{
	//alert("dff");
	var checkboxes =document.getElementsByName("chkTick");
	for(var i=0, n=checkboxes.length;i<n;i++) 
	{
		checkboxes[i].checked = source.checked;
  	}
	 
}	 

		
</script>
<script type="text/javascript" language="javascript">
function DeleteMail()
{
	
	var mailsid=0;
	mailsid=mailsid+","+document.getElementById("txtmailid").value;
		

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
	
function MoveTo(foldername, folderid)
{
	
	//alert (type);
	//DeleteMail();
folder=document.getElementById("txtFolderID").value;

	if (foldername=="Delete")
	{
		/*if (confirm("Are you sure you want to delete?")==false)
		{
			return false;
		}*/
		
	}
	
	//var MailCount=document.getElementById("txtMailCount").value;
	var mail_type="";
	//var status=document.getElementById("txtStatus").value;
	//var mail_type=document.getElementById("txtMailType1").value;
	
	//alert(status);
	//alert(document.getElementById("txtMailType1").value);
	
	var mailsid="0";
	mail_type=document.getElementById("txtMailType1").value;
	mailsid=mailsid+","+document.getElementById("txtmailid").value+"@@@"+mail_type;
			
	
	
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
			if (foldername=="Delete")
			{
				alert("Records deleted succesfully");
				
			}
			else
			{
				alert("Records moved succesfully to "+ foldername );
			
			}
			redirectURL("<?php echo $strHostName; ?>/page.php?dir=inbox/view_mails&status=inbox&folderid="+folder);
			
		}
	}
	//alert("<?php echo $strHostName; ?>/includes/move_mails.inc.php?type=User&mailsid="+mailsid+"&folderid="+folderid+"&foldername="+foldername, true);
	xmlhttp.open("GET","<?php echo $strHostName; ?>/includes/move_mails.inc.php?type=User&mailsid="+mailsid+"&folderid="+folderid+"&foldername="+foldername, true);
	xmlhttp.send();
	
	
}

function Mail_Delete_By_Id()
{
	//var status=document.getElementById("txtStatus").value;
	if (confirm("Are you sure you want to delete this record ?"))
	{
		///var MailCount=document.getElementById("txtMailCount").value;
		mailsid=mailsid+","+document.getElementById("txtmailid").value;
			
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
				// alert(message);
				/// document.getElementById("tr_mail_").style.display='none';
			}
		}
		xmlhttp.open("GET",hostname+"/includes/delete_reocrds.inc.php?insert_type=Compose_Ins&cid="+mailsid,true);
		xmlhttp.send();
		///redirectURL("<?php echo $strHostName; ?>/page.php?dir=inbox/view_mails&status="+status+"");
	}
	
}

function Mails_Retrive_By_Id(id, type)
{
	//document.getElementById("txtComDate").innerHTML=id;
	//document.getElementById("txt_Inbox_Message").innerHTML=type;
	//alert(id);
	///alert(type);
	
	document.getElementById("dvComposeSubmit" ).style.display="none";
	document.getElementById("dvDocNutDrop" ).style.display="none";
	
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
	//alert (message);
	xmlhttp.onreadystatechange=function()
	{
		if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
		{	
			// alert (xmlhttp.readyState); 
			 //message = xmlhttp.responseText;
			 
			
			 message = JSON.parse(xmlhttp.responseText);
			 data = {"records":message}; 
			 //alert(data);
			 for (var i = 0; i < data.records.length; ++i) {
			 		  
					//alert(document.getElementById("cmb_Day" ).value);
					document.getElementById("cmb_Day" ).value=data.records[i].last_occurrency_day;
					document.getElementById("cmb_Month" ).value=data.records[i].last_occurrency_month;
					document.getElementById("cmb_Year" ).value=data.records[i].last_occurrency_year;
					document.getElementById("txt_Inbox_Message").value=data.records[i].complaint;
					//document.getElementById("Consulted_of_problem" ).value=data.records[i].doctor_consulted;
					document.getElementById("cmb_Inbox_Query_Type" ).value=data.records[i].query_type;	
					document.getElementById("cmb_Inbox_Body_Area" ).value=data.records[i].body_area;
					document.getElementById("txt_Inbox_suffer_Medical_Problem" ).value=data.records[i].suffer_from;
					document.getElementById("ddl_Doc_Consulted" ).value=data.records[i].doctor_id;	
					document.getElementById("cmb_Inbox_Doctor_Comment" ).value=data.records[i].doc_comment;	
					//document.getElementById("Inbox_Video_Query" ).value=data.records[i].video_query_requirement;
					document.getElementById("txtmailid" ).value=data.records[i].mail_id;
					
					if (data.records[i].doctor_consulted=="Yes" )
				   {
						document.getElementById("Consulted_of_problem" ).checked=true
						
				   }
				   else
				   {
						document.getElementById("Consulted_of_problem" ).checked=true
						
				   }
				   
				   if (data.records[i].video_query_requirement=="Yes" )
				   {
						document.getElementById("Inbox_Video_Query" ).checked=true
						
				   }
				   else
				   {
						document.getElementById("Inbox_Video_Query" ).checked=true
						
				   }
				   
				  
				   
			}
		}
	}
	
	xmlhttp.open("GET",hostname+"/retrive_files/retrive_reocrds.inc.php?insert_type=Compose_Ins&cid="+id+"&type="+type,true);
	xmlhttp.send();
}					
</script>
<section>
  <?php if ($doc_consult_count > 0 && $medication_count > 0 && $allergies_count > 0  && $hospitalization_count > 0 && $immunization_count > 0 && $health_problem_count > 0 && $family_history_count > 0 && $blood_pressure_count > 0 && $sugar_profile_count > 0 && $life_style_count > 0 && $lipid_profile_count > 0) { ?>

    <?php include "includes/dashboard_top.inc.php";?>

  <?php } ?>
</section>
<?php

$check_followup_mail="0";




if(isset($_GET['mail_type']))
{
	$mail_type=$converter->decode($_GET['mail_type']);
	////Alert($mail_type);
}

if(isset($_GET['mail_id']))
{
	$mail_id=$converter->decode($_GET['mail_id']);
///	$review_mail_id=$converter->decode($_GET['mail_id']);
	
//	  Alert($mail_id);
}


if(isset($_GET['check_followup_mail']))
{
	$check_followup_mail=$converter->decode($_GET['check_followup_mail']);
///	$review_mail_id=$converter->decode($_GET['mail_id']);
	
 /// Alert($check_followup_mail);
}

if(isset($_GET['folder_id']))
{
	$folder_id=$converter->decode($_GET['folder_id']);
 ///	Alert($folder_id);
}

if(isset($_GET['doctor_id']))
{
	$doctor_id=$converter->decode($_GET['doctor_id']);
}

if(isset($_SESSION['UserID']))
{
	$user_id=$_SESSION['UserID'];
}


if(isset($_GET['folderid']))
	{
		$viewfolderid =$converter->decode($_GET['folderid']);
	}
	else
	{
		$viewfolderid="0";
	}



//Alert($user_id);
//Alert($doctor_id);

$review_count=GetValue("select count(*) as col from tbl_user_reviews where user_id=".$user_id." and common_id=".$doctor_id." and mail_id=".$mail_id, "col");

//Alert($review_count);
$user_total_mail_count="0"; $user_id="";

if(isset($_SESSION['UserID']))
{
	$user_id=$_SESSION['UserID'];	
}
$free_user_id=GetValue("select user_id as col from tbl_users where user_id=".$user_id." and isactive=1 and user_type='Free'","col");
$user_total_doc_mail_count=GetValue("select Count(*) as col from tbl_compose where user_id=".$free_user_id." and isactive=1 and mail_type='Doctor'","col");
$user_total_nut_mail_count=GetValue("select Count(*) as col from tbl_compose_nutritionist where user_id=".$free_user_id." and isactive=1 and mail_type='Nutritionist'","col");

?>
<section>
  <div class="cal_full_size">
    <div class="cal_12 m_outo">
      <div class="dvFloat">
        <div class="dvWrapper">
          <div style="float:left; padding:0px 0px 50px 0px; border:solid 0px red;">
            <div class="adviceonline_md">
             	<?php include "includes/inbox_left.inc.php";?>
                <div class="Inbox_td_right" style="border: solid 0px #FF0000; padding-top:0px; width:748px; padding-left: 0px;">
                      <div class="DvFloat">
                        <table width="100%" border="0" cellpadding="0" cellspacing="0">
                          <tr>
					
                <input type="hidden" id="txtmailid" name="txtmailid" value="<?php echo $converter->decode($_GET['mail_id']);?>" style="width:20px;"/>
                  <input type="hidden" name="txtMailType1" id="txtMailType1" value="<?php echo $converter->decode($_GET['mail_type']);?>" />
                   <input type="hidden" name="txtFolderID" id="txtFolderID" value="<?php echo $converter->encode($folder_id);?>" />
                  
                  
                  
                    <td class="Inboxbg2" colspan="2" style=" width: 640px; float: left;"><table width="150px" border="0" cellpadding="0" cellspacing="0">
                        <tr>
                    
                          <td style="padding:0px 5px;vertical-align:top">
                          	 
                                   <div style="float:left; background-color:#666666; color:#FFFFFF; padding:5px 15px"> <a onclick="javascript:MoveTo('Delete', '<?php echo $converter->encode("999999");?>');" style="text-align:center; font-size:14px;text-transform:none;font-family: 'myriad_web_proregular'; color:#FFFFFF; cursor:pointer;">Delete</a></div>
                            
                            
                          </td>
                          <td style="padding:0px 5px; vertical-align:top">
                          		
                                	<div style="float:left; width:90px; border:solid 0px red;">
                                        <div style="float:left; width:90px; border:solid 0px red;">
                                        <ul id="dd_nav1">
                                          <li> <a href="#" style="background-color:#666666; font-weight:normal; padding:5px 10px; width:70px"> Move to&nbsp;<span class="ar">&#9660;</span> </a>
                                            <ul style="width: 90px; background-color: #666;line-height:25px">
                                              <li style="border-bottom: solid 0px #aac457;"><a style="cursor:pointer;"  onclick="javascript:MoveTo('Trash', '<?php echo $converter->encode($get_retrive->RetriveUserTrashID($_SESSION['UserID']));?>');">Trash</a></li>
                                           
                                               <?php $FolderArray=$get_retrive->GetFolders($_SESSION['UserID']) ;  ?>	  
                                  <?php  while($folder = mysql_fetch_array( $FolderArray )){?>
                                    <li style="border-bottom: solid 0px #aac457;"><a style="cursor:pointer;"  onclick="javascript:MoveTo('<?php echo $folder['name']?>', '<?php echo $converter->encode($folder['id']);?>');"><?php echo $folder['name']?></a></li>
                                    
                                  <?php }?>
                                            </ul>
                                          </li>
                                        </ul>
                                      </div>
                             		</div>
                                     <input type="hidden" name="txtStatus" id="txtStatus" value="sent"  />
                                <input type="hidden" id="txtMailCount" name="txtMailCount" value="1"/>
                            </td>
                     
                          <td style="padding:0px 5px; vertical-align:top">
                            <div style="float:left; background-color:#666666; padding:5px 10px 5px 10px;width:90px;"> 
                          		 <input type="submit" name="savnbtn" id="savnbtn5" value="Create Folder" onClick="javascript:SetScroll(); Popup.showModal('dvAdd1',null,null,{'screenColor':'#000','screenOpacity':.5});
									GetForm()" style="text-align:center; font-size:14px;text-transform:none;font-family: 'myriad_web_proregular'; color:#FFFFFF; background-color: #666; border:0px; padding:0px; cursor:pointer;"/>
                                
                            </div>
                           </td>
                        </tr>
                      </table></td>
                    <td class="Inboxbg4" style="vertical-align:top; text-align:right; float: left;">
                    	  <?php if($_SESSION['UserType']!="Nutritionist") { ?>
                            <div style="float:right; width:87px; border:solid 0px red; text-align:right">
                            <ul id="dd_nav2">
                              <li> <a href="#" style="background-color:#666666; font-weight:normal;"><img src="images/compose_mail_icon.jpg" alt="" style="float:left" />&nbsp;Compose&nbsp;<span class="ar">&#9660;</span> </a>
                                <ul style="width: 100px;line-height:15px">
                                 
                                  <?php if($user_total_doc_mail_count==2)  { ?>
                                 	 <li style="background-color: #99cc00; text-align:center"><a onclick="javascript:alert('Sorry! you cannot send more than 2 mails. Please upgrade your account to premium to send unlimited mails.');" style="color:#FFFFFF;cursor: pointer;">Doctor </a></li>
                                  <?php } else { ?>
                                   <li style="background-color: #99cc00; text-align:center"><a target="_parent" href="<?php echo $strHostName;?>/page.php?dir=inbox/compose_doctor" style="color:#FFFFFF;cursor: pointer;">Doctor </a></li>
                                  <?php } ?>
                                  
                                  <?php if($user_total_nut_mail_count==2)  { ?>
                                 	 <li style="background-color: #009999; text-align:center"><a onclick="javascript:alert('Sorry! you cannot send more than 2 mails. Please upgrade your account to premium to send unlimited mails.');" style="color:#FFFFFF;cursor: pointer;">Nutritionist </a></li>
                                  <?php } else { ?>
                                    <li style="background-color: #009999; text-align:center; display:'';"><a href="<?php echo $strHostName;?>/page.php?dir=inbox/compose_nutritionist" style="color:#FFF;cursor: pointer;">Nutritionist</a></li>
                                  <?php } ?>
                                  
                                  
                                 
                                  
                                  
                                </ul>
                              </li>
                            </ul>
                          </div>
               			<?php } ?>
                  </td>
                  
                  </tr>
                         
                          <tr>
                            <td colspan="2">
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
                            	<?php if($mail_type=="Doctor") {?>
                                <div class="DvFloat">
                                	 <?php
									
									$query = "SELECT * FROM  ".Compose." where isactive=1 and isdeleted=0 and mail_id=".$mail_id." and folderid=".$folder_id;
									
									///echo $query;
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
                                             
												
                                            </div>
                                        </div>
                                        <div class="DvFloat" style="padding-top: 10px;">
                                            <div class="inbox_detail_left f_grey">To:</div>
                                            <div class="inbox_detail_right">
                                            	<?php 
													//echo $doc_name=GetValue("select doctor_name as col from tbl_doctor where doctor_id=".$doctor_id, "col");
													echo "Alivemeter Doctor";
												?>
                                             
                                            </div>
                                        </div>
                                        <div class="DvFloat" style="padding-top: 10px;">
                                            <div class="inbox_detail_left f_grey">Date:</div>
                                            <div class="inbox_detail_right"><?php echo date('d-M-Y h:i:s', strtotime($row['created_date']))?></div>
                                        </div>
                                        <div class="DvFloat" style="padding-top: 10px;">
                                            <div class="inbox_detail_left f_grey">Subject:</div>
                                            <div class="inbox_detail_right"><?php echo str_replace("\\","",$row['subject']);?></div>
                                        </div>
                                    </div>
                                    
                                    <?php }}} ?>
                                  
								
                                    
                                </div>
                                
                                <?php } else if($mail_type=="MD_Reply") {?>
                                	
                                <div class="DvFloat">
                                	 <?php
									 if($mail_type=="MD_Reply"){
										//Alert ($mail_id);
										$query_p = "SELECT * FROM  ".MD_Comment." where isactive=1 and isdeleted=0 and comment_id=".$mail_id;
									 }
									 else if($mail_type=="Doctor_Reply")
									 {
									 	$query_p = "SELECT * FROM  ".Doc_Comment." where isactive=1 and isdeleted=0 and comment_id=".$mail_id;
									 }
									 
									 
									 
								//	echo $query_p;
									$result_p = mysql_query($query_p);		
											
									if($result_p != "") {	
										$rowcount_p  = mysql_num_rows($result_p);
										if($rowcount_p > 0) {
											while($row_p = mysql_fetch_assoc($result_p)) {
												extract($row_p);
												//$complaint=GetValue("select complaint as col from tbl_compose where mail_id=".$row_p['comment_id'], "col");
												
												if($mail_type=="MD_Reply"){
													$compose_id=GetValue("select compose_id as col from tbl_md_comment where comment_id=".$mail_id, "col");	
												}
												else if($mail_type=="Doctor_Reply") {
													$compose_id=GetValue("select compose_id as col from tbl_doctor_comment where comment_id=".$mail_id, "col");	
												}
												
												$complaint=GetValue("select subject as col from tbl_compose where mail_id=".$compose_id, "col");
												
											

												
									?> 
                                    <div class="DvFloat" style="padding-top: 10px; border: solid 0px #003366;">
                                    	<div class="DvFloat">
                                            <div class="inbox_detail_left f_grey">From:</div>
                                            <div class="inbox_detail_right">
                                            	<?php 
													echo $doc_name=GetValue("select doctor_name as col from tbl_doctor where doctor_id=".$row_p['md_id'], "col");
												?>
                                             <input type="hidden" name="txtCommonID" id="txtCommonID" value="<?php echo $row_p['md_id'];?>" />
												<input type="hidden" name="txtCommonType" id="txtCommonType" value="MD" />
												
                                            </div>
                                        </div>
                                        <div class="DvFloat" style="padding-top: 10px;">
                                            <div class="inbox_detail_left f_grey">To:</div>
                                            <div class="inbox_detail_right">
                                            	<?php 
													echo $user_name=GetValue("select name as col from tbl_users where user_id=".$row_p['patient_id'], "col");
												?>
                                             
                                            </div>
                                        </div>
                                        <div class="DvFloat" style="padding-top: 10px;">
                                            <div class="inbox_detail_left f_grey">Date:</div>
                                            <div class="inbox_detail_right"><?php echo date('d-M-Y h:i:s', strtotime($row_p['created_date']))?></div>
                                        </div>
                                        <div class="DvFloat" style="padding-top: 10px;">
                                            <div class="inbox_detail_left f_grey">Subject:</div>
                                            <div class="inbox_detail_right"><?php echo str_replace("\\","",$complaint);?></div>
                                        </div>
                                        
                                        <div class="DvFloat" style="padding-top: 20px; font-size:13px; line-height:20px;">
                                            <strong style="font-weight:bold;">Reply :</strong><br />
											<?php echo $row_p['md_advice'];?>
                                        </div>
                                    </div>
                                    <div class="DvFloat" style="padding-top: 50px; border-bottom:dotted 1px #666666; padding-bottom:15px; font-size:13px;">
                                     	 <?php 
                                     			$doctor = "SELECT * FROM  ".Doctor." where isactive=1 and isdeleted=0 and doctor_id=".$row_p['md_id'];
												//echo $doctor;
												$doctor_result = mysql_query($doctor);							
												if($doctor_result != "") {	
													$rowcount_doc  = mysql_num_rows($doctor_result);
													if($rowcount_doc > 0) {
														while($row_doc = mysql_fetch_assoc($doctor_result)) {
														$hosp_name=GetValue("select hospital_name as col from tbl_hospital_master where hospital_id=".$row_doc['hospital_name'], "col");
										?> 
                                        	<div style="line-height:20px; color:#CCCCCC;">
                                                <?php echo $row_doc['doctor_name'];?><br />
                                                Designation : <?php echo $row_doc['type'];?>,<?php echo $hosp_name;?><br />
                                                Contact No.: 022-67676767<br />
                                                <?php if ($row_doc['licence_no']!="") { ?>
                                               		 Licence No. : <?php echo $row_doc['licence_no'];?><br />
                                                <?php } ?>
                                        	</div>
                                        <?php }}} ?>
                                     </div>
                                     
                                          <div class="DvFloat" style="padding-top: 20px; font-size:13px; line-height:20px;">
                                          <?php 
										  		$video_compose_id=GetValue("select compose_id as col from tbl_md_comment where comment_id=".$mail_id, "col");
												
												$query_md = "SELECT * FROM md_appointment where compose_id=".$video_compose_id;
												//echo $query_md;
												$result_md = mysql_query($query_md);							
												if($result_md != "") {	
													$rowcount_md  = mysql_num_rows($result_md);
													if($rowcount_md > 0) {
														while($row_md = mysql_fetch_assoc($result_md)) {
															extract($row_md);
															$accepted=GetValue("select accept as col from tbl_compose where mail_id=".$video_compose_id, "col");
														  ///Alert ($video_compose_id);
												//
										 ?>
                                       
                                          <strong style="font-weight:bold;">Appointment Details :</strong><br />
                                          Appointment Date: <?php echo date('d-M-Y',strtotime($row_md['app_date']))?><br />
                                           Appointment Time: <?php echo $row_md['time_from']?> - <?php echo $row_md['time_to']?> 
                                         <input type="hidden" name="txtVideoMailID" id="txtVideoMailID" value="<?php echo $video_compose_id;?>"/>
                                         <input type="hidden" name="txtMDAppID" id="txtMDAppID" value="<?php echo $row_md['md_id']?>"/>
                                         
                                         	<br /><br />
                                           <div id="DvAcceptApp" style="display:<?php if($accepted=="2") { echo "";} else { echo "none";} ?>">
                                           <a name="btnAccept" id="btnAccept" class="button2" style="width:80px; cursor:pointer; float:left; margin-right:15px;" onclick="javascript:AppAccept('1')">Accept</a>&nbsp;&nbsp;
                                           <a name="btnReject" id="btnReject" class="button2" style="width:80px; cursor:pointer; float:left;" onclick="javascript:AppAccept('0')">Reject</a>
                                           </div>
                                          
                                           		<div id="dvAcceptext" style="color:#009999; font-weight:bold; display:<?php if($accepted=="1") { echo "";} else { echo "none";} ?>">This Appointment is accepted by you.</div>
                                        
                                        		 <div id="dvRejectext" style="color:#009999; font-weight:bold; display:<?php if($accepted=="0") { echo "";} else { echo "none";} ?>">This Appointment is rejected by you.</div>
                                      
                                         
                                          <?php }}} ?>
                                        </div> 
                                    </div>
                                 
                                   
                                    
                                     
                                    
                                    
                                  <?php }}} ?>
								
                                    
                               
                                <?php } else if($mail_type=="Doctor_Reply") {?>
                                	
                                <div class="DvFloat">
                                	 <?php
									 
									 if($mail_type=="Doctor_Reply")
									 {
									 	$query_p = "SELECT * FROM  ".Doc_Comment." where isactive=1 and isdeleted=0 and comment_id=".$mail_id;
									 }
									 
									///echo $query_p;
									$result_p = mysql_query($query_p);							
									if($result_p != "") {	
										$rowcount_p  = mysql_num_rows($result_p);
										if($rowcount_p > 0) {
											while($row_p = mysql_fetch_assoc($result_p)) {
												extract($row_p);
												$mail_id=GetValue("select compose_id as col from tbl_doctor_comment where comment_id=".$mail_id, "col");	
												$complaint=GetValue("select subject as col from tbl_compose where mail_id=".$mail_id, "col");

												
									?> 
                                    <div class="DvFloat" style="padding-top: 10px; border: solid 0px #003366;">
                                    	<div class="DvFloat">
                                            <div class="inbox_detail_left f_grey">From:</div>
                                            <div class="inbox_detail_right">
                                            	<?php 
													echo $doc_name=GetValue("select doctor_name as col from tbl_doctor where doctor_id=".$row_p['doctor_id'], "col");
												?>
                                              <input type="hidden" name="txtCommonID" id="txtCommonID" value="<?php echo $row_p['doctor_id'];?>" />
												<input type="hidden" name="txtCommonType" id="txtCommonType" value="Doctor" />
												
                                            </div>
                                        </div>
                                        <div class="DvFloat" style="padding-top: 10px;">
                                            <div class="inbox_detail_left f_grey">To:</div>
                                            <div class="inbox_detail_right">
                                            	<?php 
													echo $user_name=GetValue("select name as col from tbl_users where user_id=".$row_p['patient_id'], "col");
												?>
                                             
                                            </div>
                                        </div>
                                        <div class="DvFloat" style="padding-top: 10px;">
                                            <div class="inbox_detail_left f_grey">Date:</div>
                                            <div class="inbox_detail_right"><?php echo date('d-M-Y h:i:s', strtotime($row_p['created_date']))?></div>
                                        </div>
                                        <div class="DvFloat" style="padding-top: 10px;">
                                            <div class="inbox_detail_left f_grey">Subject:</div>
                                            <div class="inbox_detail_right"><?php echo $complaint;?></div>
                                        </div>
                                        
                                        <div class="DvFloat" style="padding-top: 20px; font-size:13px; line-height:20px;">
                                            <strong style="font-weight:bold;">Reply :</strong><br />
											<?php echo str_replace("\\","",$row_p['doctor_advice']);?>
										
                                        </div>
                                    </div>
                                    
                                     <div class="DvFloat" style="padding-top: 50px; border-bottom:dotted 1px #666666; padding-bottom:15px; font-size:13px;">
                                     	 <?php 
                                     			$doctor = "SELECT * FROM  ".Doctor." where isactive=1 and isdeleted=0 and doctor_id=".$row_p['doctor_id'];
												$doctor_result = mysql_query($doctor);							
												if($doctor_result != "") {	
													$rowcount_doc  = mysql_num_rows($doctor_result);
													if($rowcount_doc > 0) {
														while($row_doc = mysql_fetch_assoc($doctor_result)) {
														$hosp_name=GetValue("select hospital_name as col from tbl_hospital_master where hospital_id=".$row_doc['hospital_name'], "col");
										?> 
                                        	<div style="line-height:25px; color:#CCCCCC;">
                                                <?php echo $row_doc['doctor_name'];?><br />
                                                Designation : <?php echo $row_doc['type'];?>,<?php echo $hosp_name;?><br />
                                                Contact No.: 022-67676767<br />
                                                 <?php if ($row_doc['licence_no']!="") { ?>
                                               		 Licence No. : <?php echo $row_doc['licence_no'];?><br />
                                                <?php } ?>
                                        	</div>
                                        <?php }}} ?>
                                     </div>
                                    
                                    
                                    <?php }}} ?>
                                  
								
                                    
                                </div>
                                <?php } else if($mail_type=="Nutritionist_Reply") {?>
                                 <div class="DvFloat">
                                	 <?php
									
									 	$query_p = "SELECT * FROM  tbl_nutritionist_comments where isactive=1 and isdeleted=0 and comment_id=".$mail_id;
										
									 
									//echo $query_p;
									$result_p = mysql_query($query_p);							
									if($result_p != "") {	
										$rowcount_p  = mysql_num_rows($result_p);
										if($rowcount_p > 0) {
											while($row_p = mysql_fetch_assoc($result_p)) {
												extract($row_p);

												
									?> 
                                    <div class="DvFloat" style="padding-top: 10px; border: solid 0px #003366;">
                                    	<div class="DvFloat">
                                            <div class="inbox_detail_left f_grey">From:</div>
                                            <div class="inbox_detail_right">
                                            	<?php 
													echo $doc_name=GetValue("select doctor_name as col from tbl_doctor where doctor_id=".$row_p['nutritionist_id'], "col");
												?>
                                             
												  <input type="hidden" name="txtCommonID" id="txtCommonID" value="<?php echo $row_p['nutritionist_id'];?>" />
												  <input type="hidden" name="txtCommonType" id="txtCommonType" value="Nutritionist" />
                                            </div>
                                        </div>
                                        <div class="DvFloat" style="padding-top: 10px;">
                                            <div class="inbox_detail_left f_grey">To:</div>
                                            <div class="inbox_detail_right">
                                            	<?php 
													echo $user_name=GetValue("select name as col from tbl_users where user_id=".$row_p['patient_id'], "col");
												?>
                                             
                                            </div>
                                        </div>
                                        <div class="DvFloat" style="padding-top: 10px;">
                                            <div class="inbox_detail_left f_grey">Date:</div>
                                            <div class="inbox_detail_right"><?php echo date('d-M-Y h:i:s', strtotime($row_p['created_date']))?></div>
                                        </div>
                                        <div class="DvFloat" style="padding-top: 10px;">
                                            <div class="inbox_detail_left f_grey">Subject:</div>
                                            <div class="inbox_detail_right"><?php echo str_replace("\\","",$row_p['subject']);?></div>
                                        </div>
                                        
                                        <div class="DvFloat" style="padding-top: 20px; font-size:13px; line-height:20px; border-bottom:dotted 1px #666666; padding-bottom:20px;">
                                            <strong style="font-weight:bold; display:none;">Comments :</strong>
											<?php echo str_replace("\\","",$row_p['comment']);?>
                                        </div>
                                         
                                    </div>
                                    
                                     <div class="DvFloat" style="padding-top: 50px; border-bottom:dotted 1px #666666; padding-bottom:15px; font-size:13px; display:none;">
                                     	 <?php 
                                     			$doctor = "SELECT * FROM  ".Doctor." where isactive=1 and isdeleted=0 and doctor_id=".$row_p['doctor_id'];
												$doctor_result = mysql_query($doctor);							
												if($doctor_result != "") {	
													$rowcount_doc  = mysql_num_rows($doctor_result);
													if($rowcount_doc > 0) {
														while($row_doc = mysql_fetch_assoc($doctor_result)) {
														$hosp_name=GetValue("select hospital_name as col from tbl_hospital_master where hospital_id=".$row_doc['hospital_name'], "col");
										?> 
                                        	<div style="line-height:25px; color:#CCCCCC;">
                                                <?php echo $row_doc['doctor_name'];?><br />
                                                Designation : <?php echo $row_doc['type'];?>,<?php echo $hosp_name;?><br />
                                                Contact No.: <?php echo $row_doc['contact'];?><br />
                                                 <?php if ($row_doc['licence_no']!="") { ?>
                                               		 Licence No. : <?php echo $row_doc['licence_no'];?><br />
                                                <?php } ?>
                                        	</div>
                                        <?php }}} ?>
                                     </div>
                                    
                                    
                                    <?php }}} ?>
                                  
								
                                    
                                </div>
                                
                                <?php } else if ($mail_type=="Nutritionist") {?>
                                <div class="DvFloat">
                                	 <?php
									
									$query = "SELECT * FROM  tbl_compose_nutritionist where isactive=1 and isdeleted=0 and mail_id=".$mail_id." and folderid=".$folder_id;
									
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
                                             
												
                                            </div>
                                        </div>
                                        <div class="DvFloat" style="padding-top: 10px;">
                                            <div class="inbox_detail_left f_grey">To:</div>
                                            <div class="inbox_detail_right">
                                            	<?php 
													echo $doc_name=GetValue("select doctor_name as col from tbl_doctor where doctor_id=".$doctor_id, "col");
												?>
                                             
                                            </div>
                                        </div>
                                        <div class="DvFloat" style="padding-top: 10px;">
                                            <div class="inbox_detail_left f_grey">Date:</div>
                                            <div class="inbox_detail_right"><?php echo date('d-M-Y h:i:s', strtotime($row['created_date']))?></div>
                                        </div>
                                        <div class="DvFloat" style="padding-top: 10px;">
                                            <div class="inbox_detail_left f_grey">Subject:</div>
                                            <div class="inbox_detail_right"><?php echo str_replace("\\","",$row['subject']);?></div>
                                        </div>
                                        
                                         <div class="DvFloat" style="padding-top: 10px;">
                                            <div class="inbox_detail_left f_grey">Mesasge:</div>
                                            <div class="inbox_detail_right"><?php echo str_replace("\\","",$row['message']);?></div>
                                        </div>
                                    </div>
                                    
                                    <?php }}} ?>
                                  
								
                                    
                                </div>
                                
                                <?php } ?>
                            </td>
                          </tr>
                        </table>
                      </div>
                      <?php if ($mail_type=="Doctor_Reply" ||  $mail_type=="MD_Reply" ||  $mail_type=="Nutritionist_Reply") { ?>  
                   			<div class="dvFloat" id="dvUserReviews">&nbsp;</div>
                    <?php 	if(isset($_GET['mail_id']))
							{
								$review_mail_id=$converter->decode($_GET['mail_id']);
								 //// Alert($review_mail_id);
							}?>
                     <div class="dvFloat" style="padding:25px 0; border: solid 0px #000; display:<?php if($review_count > 0 || $review_count!="0") echo "none"; ?>" id="divUserReviews">
                     	 <input type="hidden" name="txtUserID" id="txtUserID" value="<?php echo $user_id?>" />
                         <input type="hidden" name="txtReviewMailID" id="txtReviewMailID" value="<?php echo $review_mail_id?>" />
                         <input type="hidden" name="txtMailType" id="txtMailType" value="<?php echo $mail_type?>" />
                         <input type="hidden" name="txtUserReviewsID" id="txtUserReviewsID" value="" />
                     	 <div class="dvFloat"><textarea name="txtUserReviews" id="txtUserReviews" style="padding: 5px;" placeholder="Write your review here..."></textarea></div>
                         <div class="dvFloat" style="padding:10px 0;">
                         		<a name="btnUserReviews" id="btnUserReviews"  class="button2" style="width:150px; cursor:pointer;" onclick="javascript:Add_User_Reviews(this)">Send Your Reviews</a></div>
                     </div>
                     
                  <?php } ?>
                    
                     
                    <?php if ($mail_type=="Doctor_Reply" ||  $mail_type=="MD_Reply" ||  $mail_type=="Doctor") { ?>
                    
                      
                            <div class="DvFloat">
                             <div style="width: 70%; float: left; border: solid 0px #003399;"><h1 class="f_red" style="text-align: left; font-size: 18px; font-weight:bold;  margin-top: 35px; border: solid 0px #000033">Query Details</h1></div>
                                
                                
                                 <div style="width: 28%; float: left; border: solid 0px #003399; margin-top: 35px;"> <?php if ($mail_type=="Doctor_Reply" ||  $mail_type=="MD_Reply") { ?>  
                                 
                                 <?php
								 	 
									
									$fmail_id=GetValue("select mail_id as col from tbl_compose where mail_id=".$check_followup_mail." and query_type=1","col");
									
							///	 Alert ($fmail_id);
									if($fmail_id=="" || $fmail_id=="0")
									{
										$fmail_id=GetValue("select followup_id as col from tbl_compose where mail_id=".$check_followup_mail." and query_type=2","col");
									}
								//	Alert ($fmail_id);
								  ?>
                                 
                             <div style="float:right; border:solid 0px red; width:200px; margin-top:0px; border-bottom:dotted 0px #000; padding:5px; text-align:center; background-color: #767676; color: #FFF;"><a class="" style="width:100px; cursor:pointer; font-size:13px; color: #FFF;" href="<?php echo $strHostName;?>/page.php?dir=inbox/compose_doctor&squery=followup&fmail_id=<?php echo $converter->encode($fmail_id);?>">FOLLOW-UP THIS COMPLAINT</a></div>
                             <?php } ?></div>
                           
                          
                                
                             <div class="DvFloat" style="padding:20px 0;">
                            
                            
                             
                                    <?php
									$strSubCat=""; $strMainCat="";
                                        if(isset($_GET['mail_id']))
                                            {
                                                $md_mail_id=$converter->decode($_GET['mail_id']);
                                                
                                                //Alert($md_mail_id);
                                            }
        
                                        if($mail_type=="MD_Reply")
                                        {
                                            
        
                                            $mail_id=GetValue("select compose_id as col from tbl_md_comment where comment_id=".$md_mail_id, "col");
                                            //Alert ($mail_id);
                                        }
                                        
                                        
                                        if($mail_type=="Doctor_Reply")
                                        {
                                        //	Alert ($mail_id);
            
                                            $mail_id=GetValue("select compose_id as col from tbl_doctor_comment where compose_id=".$mail_id, "col");
                                        }
                                            
                                        $query_c = "SELECT * FROM  ".Compose." where isactive=1 and isdeleted=0 and mail_id=".$mail_id;
                          ///  echo $query_c;
                                    
                                    $result_c = mysql_query($query_c);							
									$strCheckCatName="";
									$strCheckSubCatName="";
                                    if($result_c != "") {	
                                        $rowcount_c  = mysql_num_rows($result_c);
                                        if($rowcount_c > 0) {
                                            while($row_c = mysql_fetch_assoc($result_c)) {
                                                extract($row_c);
                                                $strSymName="0";
                                               ?>
											   
											  
                                    
                                    <div  style="width:100%; border:solid 0px red;padding-top:10px;">
                                     
                                     
                                     
                             
                             
                <div class="dvFloat formpadding1">
                <div class="formlabel1">
                <div style="padding-left: 10px; float: left;">Query Type </div>
                </div>
                <div class="formlabel1">
                        <?php if($row_c['query_type']=="1") { ?>
                            <span><?php echo "Fresh Query"; ?></span>
                       <?php } else { ?>
                            <span><?php echo "Follow Up"; ?></span>
                       <?php } ?>
                </div>
                </div>
                <div class="dvFloat" id="dvPres_Report_Show_Hide1">
                <div class="dvFloat formpadding1">
                <div class="formlabel1">
                <div style="padding-left: 10px; float: left;">Body Area </div>
                </div>
                <div class="formlabel1"><?php echo $row_c['body_area'];?></div>
                </div>
                
                <div class="dvFloat formpadding1" >
					<div class="formlabel1">
						<div style="padding-left: 10px; float: left;">Complaint </div>
					</div>
					 <div class="formlabel1" style="border:solid 0px red;"><?php echo str_replace("\\","",$row_c['complaint']);?></div>
                </div>
				 <div class="dvFloat formpadding1" >
					<div class="formlabel1">
						<div style="padding-left: 10px; float: left;">Subject </div>
					</div>
					 <div class="formlabel1" style="border:solid 0px red;"><?php echo str_replace("\\","",$row_c['subject']);?></div>
                </div>
                
                <div class="dvFloat formpadding1">
                <div class="formlabel1">
                <div style="padding-left: 10px; float: left;">How often you suffer from this Medical Problem ?</div>
                </div>
                <div class="formlabel1">
                       <?php echo str_replace("\\","",$row_c['suffer_from']);?>
                         
                </div>
                </div>
                <div class="dvFloat formpadding1">
                <div class="formlabel1">
                <div style="padding-left: 10px; float: left;">Last Ocurrency of Problem ?</div>
                </div>
                <div class="formlabel1">
                <div style="float:left; padding:0px 14px 0px 0px; border: solid 0px #006633;">
                        
                        <?php
                        
                        if($row_c['last_occurrency_date']=="1999-11-30 00:00:00")
                            {
                                echo "--";
                            }
                            else
                            {
                                echo date('d-M-Y',strtotime($row_c['last_occurrency_date']));
                            }
                        ?>
                </div>
                </div>
                </div>
             <?php if($row_c['doctor_consulted']=="Yes") { ?>
                <div class="dvFloat formpadding1">
                <div class="formlabel1">
                <div style="padding-left: 10px; float: left;">Doctor Consulted of problem (if any?)</div>
                </div>
                <div class="formlabel1" style="float:left; text-align:left">
                <div style="float:left">
                        <?php echo $row_c['doctor_consulted'];?>
                </div>
                </div>
                </div>
                <div class="dvFloat formpadding1">
                <div class="formlabel1">
                <div style="padding-left: 10px; float: left;">Doctor Name</div>
                </div>
                <div class="formlabel1">
                        
                  <?php echo 
                            $doc_name=GetValue("select doctor_name  as col from tbl_doctor where doctor_id=".$row_c['doctor_id'],"col");
                        ?> 
                
                </div>
                </div>
                <div class="dvFloat formpadding1">
                <div class="formlabel1">
                <div style="padding-left: 10px; float: left;">Doctor Comment</div>
                </div>
                <div class="formlabel1">
                       <?php echo str_replace("\\","",$row_c['doc_comment']);?> 
                </div>
                </div>
                <?php } ?>
                </div>
                
                <div>
                <div class="dvFloat formpadding1">
                <div class="formlabel1">
                         <div style="padding-left: 10px; float: left;">Search Medical History</div>
                </div>
                   
                     <div class="formlabel1" style="width:347px">
                        <div class="dvFloat"> 
                            <?php
                            $query_r = "SELECT * FROM  tbl_medical_history where isactive=1 and isdeleted=0 and parent_mail_id=".$row_c['mail_id']."";
                         //   echo $query_r;
                            $result_r = mysql_query($query_r);							
                            if($result_r != "") {	
                                $rowcount  = mysql_num_rows($result_r);
                                if($rowcount > 0) {
                                    while($row_r = mysql_fetch_assoc($result_r)) {
                                        extract($row_r);
                            ?>
                                <?php if($row_r['prescription_report']!="") { ?>
	                      
						  <?php
								$query_p = "SELECT * FROM tbl_doc_consult_gallery where userid=$user_id and report_type=1 and id in (".$row_r['prescription_report'].")";
						 		///  echo $query_p;
								$result_p = mysql_query($query_p);							
								if($result_p != "") {	
									$rowcount  = mysql_num_rows($result_p);
									if($rowcount > 0) {
										while($row_p = mysql_fetch_assoc($result_p)) {
											extract($row_p);
											$pre_report=$row_p['file_path'];
											$pre_report_date=$row_p['report_date'];
											$health_prob=$row_p['health_problem'];
								?>
                           <a href="<?php echo $strHostName;?>/uploads/<?php echo $pre_report;?>" target="_blank"> <img src="images/action.jpg" alt="" align="absmiddle" />&nbsp;</a>   <?php echo date('d-M-Y',strtotime($pre_report_date)); ?> - <?php echo $health_prob;?> - Prescription<br>
                            
                            <?php }}} ?>
                            
                        <?php } ?>
                        
                   		<?php if($row_r['lab_test_report']!="") { ?>
							 <?php
								$query_l = "SELECT * FROM tbl_doc_consult_gallery where userid=$user_id and report_type=2 and id in (".$row_r['lab_test_report'].")";
						 		$result_l = mysql_query($query_l);							
								if($result_l != "") {	
									$rowcount  = mysql_num_rows($result_l);
									if($rowcount > 0) {
										while($row_l = mysql_fetch_assoc($result_l)) {
											extract($row_l);
											$lab_report=$row_l['file_path'];
											$lab_report_date=$row_l['report_date'];
											$health_prob=$row_l['health_problem'];
								?>
                            
                           	<a href="<?php echo $strHostName;?>/uploads/<?php echo $lab_report;?>" target="_blank">  <img src="images/action.jpg" alt="" align="absmiddle" />&nbsp;</a><?php echo date('d-M-Y',strtotime($lab_report_date)); ?> - <?php echo $health_prob;?> - Lab Report<br>
                      
                       <?php }}} ?>
                       <?php } ?>
                    
                        <?php if($row_r['radiology_report']!="") { ?>
	                       <?php
								$query_ra = "SELECT * FROM tbl_doc_consult_gallery where userid=$user_id and report_type=3 and id in (".$row_r['radiology_report'].")";
						 		$result_ra = mysql_query($query_ra);							
								if($result_ra != "") {	
									$rowcount  = mysql_num_rows($result_ra);
									if($rowcount > 0) {
										while($row_ra = mysql_fetch_assoc($result_ra)) {
											extract($row_ra);
											$rad_report=$row_ra['file_path'];
											$rad_report_date=$row_ra['report_date'];
											$health_prob=$row_ra['health_problem'];
								?>
                            <a href="<?php echo $strHostName;?>/uploads/<?php echo $rad_report;?>" target="_blank"><img src="images/action.jpg" alt="" align="absmiddle" />&nbsp;</a><?php echo date('d-M-Y',strtotime($rad_report_date)); ?> - <?php echo $health_prob;?> - Radiology Report<br />
                        <?php } ?>
                        <?php }}} ?>
                            <?php }}} ?>
                        </div>
                        
                        <div class="dvFloat"> 
                            <?php
                            $query_rr = "SELECT * FROM  tbl_medical_history where isactive=1 and isdeleted=0 and history_id in (select followup_id from tbl_compose where mail_id=".$row_c['mail_id'].")";
                           // echo $query_rr;
                            $result_rr = mysql_query($query_rr);							
                            if($result_rr != "") {	
                                $rowcount  = mysql_num_rows($result_rr);
                                if($rowcount > 0) {
                                    while($row_rr = mysql_fetch_assoc($result_rr)) {
                                        extract($row_rr);
                            ?>
                               <?php if($row_rr['prescription_report']!="") { ?>
	                      
						  <?php
								$query_p = "SELECT * FROM tbl_doc_consult_gallery where userid=$user_id and report_type=1 and id in (".$row_rr['prescription_report'].")";
						 		///  echo $query_p;
								$result_p = mysql_query($query_p);							
								if($result_p != "") {	
									$rowcount  = mysql_num_rows($result_p);
									if($rowcount > 0) {
										while($row_p = mysql_fetch_assoc($result_p)) {
											extract($row_p);
											$pre_report=$row_p['file_path'];
											$pre_report_date=$row_p['report_date'];
											$health_prob=$row_p['health_problem'];
								?>
                           <a href="<?php echo $strHostName;?>/uploads/<?php echo $pre_report;?>" target="_blank"> <img src="images/action.jpg" alt="" align="absmiddle" />&nbsp;</a>   <?php echo date('d-M-Y',strtotime($pre_report_date)); ?> - <?php echo $health_prob;?> - Prescription<br>
                            
                            <?php }}} ?>
                            
                        <?php } ?>
                        
                   		<?php if($row_rr['lab_test_report']!="") { ?>
							 <?php
								$query_l = "SELECT * FROM tbl_doc_consult_gallery where userid=$user_id and report_type=2 and id in (".$row_rr['lab_test_report'].")";
						 		$result_l = mysql_query($query_l);							
								if($result_l != "") {	
									$rowcount  = mysql_num_rows($result_l);
									if($rowcount > 0) {
										while($row_l = mysql_fetch_assoc($result_l)) {
											extract($row_l);
											$lab_report=$row_l['file_path'];
											$lab_report_date=$row_l['report_date'];
											$health_prob=$row_l['health_problem'];
								?>
                            
                           	<a href="<?php echo $strHostName;?>/uploads/<?php echo $lab_report;?>" target="_blank">  <img src="images/action.jpg" alt="" align="absmiddle" />&nbsp;</a><?php echo date('d-M-Y',strtotime($lab_report_date)); ?> - <?php echo $health_prob;?> - Lab Report<br>
                      
                       <?php }}} ?>
                       <?php } ?>
                    
                        <?php if($row_rr['radiology_report']!="") { ?>
	                       <?php
								$query_ra = "SELECT * FROM tbl_doc_consult_gallery where userid=$user_id and report_type=3 and id in (".$row_rr['radiology_report'].")";
						 		$result_ra = mysql_query($query_ra);							
								if($result_ra != "") {	
									$rowcount  = mysql_num_rows($result_ra);
									if($rowcount > 0) {
										while($row_ra = mysql_fetch_assoc($result_ra)) {
											extract($row_ra);
											$rad_report=$row_ra['file_path'];
											$rad_report_date=$row_ra['report_date'];
											$health_prob=$row_ra['health_problem'];
								?>
                            <a href="<?php echo $strHostName;?>/uploads/<?php echo $rad_report;?>" target="_blank"><img src="images/action.jpg" alt="" align="absmiddle" />&nbsp;</a><?php echo date('d-M-Y',strtotime($rad_report_date)); ?> - <?php echo $health_prob;?> - Radiology Report<br />
                        <?php } ?>
                        <?php }}} ?>
                            <?php }}} ?>
                        </div>
                        
                        
                     </div>	
                </div>
                <div class="dvFloat formpadding1" style="display:'';">
                <div class="formlabel1">
                <div style="padding-left: 10px; float: left;">Additional Medical Reports</div>
                </div>
                <div class="formlabel1">
                <div style=" width:480px; height:30px; float:left;padding-right:10px;"> 
                    <?php
                            $query_r = "SELECT * FROM  tbl_upload_compose where isactive=1 and isdeleted=0 and parent_mail_id=".$row_c['mail_id']."";
                           /// echo $query_r;
                            $result_r = mysql_query($query_r);							
                            if($result_r != "") {	
                                $rowcount  = mysql_num_rows($result_r);
                                if($rowcount > 0) {
                                    while($row_r = mysql_fetch_assoc($result_r)) {
                                        extract($row_r);
                            ?>
                            <?php if($row_r['upload_report']!="") { ?>
                             <a href="<?php echo $strHostName;?>/uploads/<?php echo $row_r['upload_report'];?>" target="_blank"> <img src="images/action.jpg" alt="" align="absmiddle" />&nbsp;</a>   <?php echo date('d-M-Y',strtotime($row_r['created_date'])); ?>
                             <?php } else { ?>
                                --
                             <?php } ?>
                            <?php }}} ?>
                            
                            
                </div>
                </div>
                </div>
                <div class="dvFloat formpadding1">
                <div class="formlabel1">
                <div style="padding-left: 10px; float: left;">Do You Require Video Query</div>
                </div>
                <div class="formlabel1" style="float:left; text-align:left">
                <div style="float:left">
                    <?php echo $row_c['video_query_requirement'];?> 
                  </div>
                </div>
                </div>
                
                <div class="dvFloat formpadding1" style="border:0px;">
                        <div class="formlabel1" >
                             <div style="padding-left: 10px; float: left;">Symptoms</div>
                        </div>
                            </div>
                 <div class="formpadding1" style="margin-left:15px;">       
              
				 
                
											   <?php
											   $itableCount="0";
											    
												
                                                
                                                $query_s = "SELECT symptom_name,cat_id, sub_cat_id FROM  tbl_symptom where isactive=1 and isdeleted=0 and symptom_id in (".$row_c['symptoms'].") order by cat_id, sub_cat_id,symptom_name ";
                                    
                                  // echo $query_s;
								  $iSymCount=0;
                                    $result_s = mysql_query($query_s);							
                                    if($result_s != "") {	
                                        $rowcount_s  = mysql_num_rows($result_s);
                                        if($rowcount_s > 0) {
                                            while($row_s = mysql_fetch_assoc($result_s)) {
                                           
                                                    $strSymName=$row_s['symptom_name'];
													$strCat=$row_s['cat_id'];
													$strCatName=GetValue("select cat_name as col from tbl_symp_categroy where cat_id=".$strCat,"col");
													$strSubCat=$row_s['sub_cat_id'];
													$strSubCat=GetValue("select sub_cat_name as col from tbl_symp_sub_categroy where sub_cat_id=".$strSubCat,"col");
                                                ?>
                                               
                                                <?php  if($itableCount==0) { ?>
                                                 
                                                
                                                <?php } ?>
                                                
                                                <?php if($strCheckCatName!=$strCatName){ ?>
                                               </td></tr>
											    <table  border="0" cellspacing="0" cellpadding="0" style="width:97%; border:solid 1px #666666; float:left; margin-right:8px; margin-bottom:10px;">
	                                                
													<?php $strCheckCatName=$strCatName; $itableCount=$itableCount+1;?>  
                                                	<tr style="background:#999999; color:#fff; padding:5px;">
														 <td style="padding:5px; height:20px;"><?php echo $strCatName?></td>
                                                    </tr> 
                                                <?php } ?>
                                                <?php if($strCheckSubCatName!=$strSubCat){?>
	                                                <?php $strCheckSubCatName=$strSubCat?>
                                                  </table><table  border="0" cellspacing="0" cellpadding="0" style="width:48%; border:solid 1px #666666; float:left; margin-right:8px; margin-bottom:10px;">
                                                	<tr style="background:#f1f1f1;">
														 <td style="padding:5px; height:20px; font-weight:bold;"><?php echo $strSubCat?></td>
                                                    </tr>  	<tr>
                                                  
                                                   <td style="padding:2px 5px;" id="tdSymtp<?php echo $iSymCount?>"><?php  $iSymCount= $iSymCount+1;?>
                                                   
                                                <?php } ?>
                                                 <?php echo $strSymName.",";?>
                           						
												 
                                                <?php 
                                                
                                                }}}
            
                                             
                                    ?>   </td></tr>
                                     </table>
                                     
                                    
                        
                
                </div>
                
                </div>
                </div>
                                <?php }}} ?>
                             </div>
                            
                            
                            </div>
                    <?php } ?>
               		               
               
                </div>
                    
                    
               
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  <center>
    <div id="dvAdd1" style="width: 100%; position: absolute;display: none;top: 0px;">
      <div id="saveform" style="width: 100%;top: 0px; position: absolute;"></div>
    </div>
</center>

</section> 
<input type="hidden" name="txtRetriveValue" id="txtRetriveValue" value="<?php echo $iSymCount?>"/>
<script>RetriveReocrds('User_Reviews','dvUserReviews');</script>

<script>
function RetriveComma()
{

iSymCount=document.getElementById("txtRetriveValue").value;
iSymCount=parseFloat(iSymCount);
iSymCount=iSymCount+1;
var str=""; var str1="";
	for(i=0;i<iSymCount;i++)
	{
		str=document.getElementById("tdSymtp"+i).innerHTML;
		str=removeLastComma(str);
		
		document.getElementById("tdSymtp"+i).innerHTML=str;
		///alert (document.getElementById("tdSymtp"+i).innerHTML);
	}
}

 function removeLastComma(strng){        
   var n=strng.lastIndexOf(",");
   var a=strng.substring(0,n) 
   return a;
}
</script>
<script>RetriveComma();</script>