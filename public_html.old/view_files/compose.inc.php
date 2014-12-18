<?php $iDay="0";$iMonth="0";$iYear="0"; $commondoctortype="ddl_Doc_Consulted"; $commondoctorID="dvDropdownDoctor"; $mail_id="0"; $iSelection="0";?>
<?php
if(isset($_SESSION['UserID'])){
	$user_id=$_SESSION['UserID'];	
}
else
{
	$user_id="0";
}

if(isset($_GET['squery'])){
	$squery=$_GET['squery'];	
}
else
{
	$squery="";
}


if(isset($_GET['fmail_id'])){
	$fmail_id=$_GET['fmail_id'];
	$fmail_id=$converter->decode($_GET['fmail_id']);	
	/// Alert ($fmail_id);
}
else
{
	$fmail_id="";
}




$folder_id=$get_retrive->RetriveUserInboxID($_SESSION['UserID']);
$folder_id=$converter->encode($folder_id);
$reports="";
//$reports=$_GET['txtReports'];	
$iYearcurrent=2014;

$total_fresh_queries=GetValue("select Count(*) as col from tbl_compose where user_id=".$_SESSION['UserID']." and status='sent' and folderid<>999999", "col");
//Alert ($total_fresh_queries);
?>
<script>
function AddSymptom(element)
{
	var sysDet=element.innerHTML;
	var SymCount=document.getElementById("txtSymCount").value;
	var sysID=element.id.replace("symp_name_", "");
	var ldet=document.getElementById("l_symp_name_"+sysID);
	var sysSelection=document.getElementById("ulMySymptoms").innerHTML;
	var sysSelected=document.getElementById("SelectedMySymptoms").innerHTML;
	
	var syssSelected=document.getElementById("txt_Inbox_Symptoms").innerHTML;
	
	var AddData="";
	var AddSData="";
	

	AddData="";

	AddData=sysSelection+"<li id=l_r_symp_name_"+sysID+"><a style=\"cursor:pointer\" onclick=\"RemoveSymptom(this)\" id=\"r_symp_name_" + sysID + "\" >"+sysDet+"</a>&nbsp;&nbsp;<span>X</span></li>";
	
	AddSData="";
	AddSData=sysSelected+"<div id=dl_r_symp_name_"+sysID+" style=\"width:180px; float:left; border:solid 0px red;\"><a style=\"cursor:pointer\" id=\"dr_symp_name_" + sysID + "\" >"+sysDet+"</a>&nbsp;&nbsp;<span>X</span></div>";
	
	
	AddSelectedData=syssSelected+""+sysDet+"";
	
	
	document.getElementById("ulMySymptoms").innerHTML=AddData;
	document.getElementById("SelectedMySymptoms").innerHTML=AddSData;

	ldet.innerHTML=sysDet;

	SymCount=SymCount+","+(sysID/121);
	document.getElementById("txtSymCount").value=SymCount;
	document.getElementById("DvSymptomsDet").style.display='';
	document.getElementById("txt_Inbox_Symptoms").value=SymCount;
	//document.getElementById("txt_Inbox_Symptoms").value=AddSelectedData;
	 
}

function RemoveSymptom(element)
{
	var sysDet=element.innerHTML;
	var SymCount=document.getElementById("txtSymCount").value;
	var sysID=element.id.replace("r_symp_name_", "");
	var ldet=document.getElementById("l_symp_name_"+sysID);
	var lrdet=document.getElementById("l_r_symp_name_"+sysID);
	var sysSelection=document.getElementById("ulMySymptoms");
	
	var dldet=document.getElementById("l_symp_name_"+sysID);
	var dlrdet=document.getElementById("dl_r_symp_name_"+sysID);
	var dsysSelection=document.getElementById("SelectedMySymptoms");
	
	
	var AddData="";

	AddData="<a style=\"cursor:pointer\" onclick=\"AddSymptom(this)\" id=\"symp_name_" + sysID + "\">"+sysDet+"&nbsp;&nbsp;</a>";
	
	//AddSData="<a style=\"cursor:pointer\" onclick=\"AddSymptom(this)\" id=\"symp_name_" + sysID + "\">"+sysDet+"&nbsp;&nbsp;</a>";

	ldet.innerHTML=AddData;	
	sysSelection.removeChild(lrdet);
	
	
	///dldet.innerHTML=AddSData;	
	//dsysSelection.removeChild(dlrdet);
	
	SymCount=SymCount.replace(","+sysID,"");
	document.getElementById("txtSymCount").value=SymCount;
	document.getElementById("txt_Inbox_Symptoms").value=SymCount;
	 
}


function AddSubCat(cat_new_id, MainTypeID)
{
	var message="";
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
			 document.getElementById("dvSymSubCat").innerHTML=message;
			 document.getElementById("dvcatTabs").style.display='';
			 document.getElementById("dvNormalTabs").style.display='none';
			/// document.getElementById("dvOtherTabs").style.display='none';
		}
	}

	 //alert(hostname+"/includes/get_symp_sub_cat.inc.php?MainType="+cat_new_id);
	xmlhttp.open("GET",hostname+"/includes/get_symp_sub_cat.inc.php?MainType="+cat_new_id+"&MainTypeID="+MainTypeID,true);
	xmlhttp.send();

	 
}



function ShowSymp()
{
	
	var vtype=document.getElementById("cmb_Inbox_Body_Area").value;
	if(vtype=="Abdomen and Pelvis")
	{
		ShowSympCatType(6*121);
	}
	
	if(vtype=="Arms and Hands")
	{
		ShowSympCatType(5*121);
	}
	if(vtype=="Behavioral and Mental")
	{
		//ShowSympCatType(1*121);
	}
	if(vtype=="Chest and Back")
	{
		 ShowSympCatType(4*121);
	}
	
	 if(vtype=="Common Symptoms")
	{
		ShowSympCatType(8*121);
	}
	
	
	if(vtype=="General Symptoms")
	{
		ShowSympCatType(9*121);
	}
	
	
	if(vtype=="Mental")
	{
		ShowSympCatType(10*121);
	} 
	
	if(vtype=="Ear, Nose and Throat")
	{
		ShowSympCatType(2*121);
	}
	
	if(vtype=="Eyes")
	{
		ShowSympCatType(1*121);
	}
	
	
	if(vtype=="Head and Neck")
	{
		ShowSympCatType(3*121);
	}
	if(vtype=="Legs and Feet")
	{
		ShowSympCatType(5*121);
	}
	
}

/*function RemoveSymptom(element)
{
	var sysDet=element.innerHTML;
	var SymCount=document.getElementById("txtSymCount").value;
	var sysID=element.id.replace("r_symp_name_", "");
	var ldet=document.getElementById("l_symp_name_"+sysID);
	var lrdet=document.getElementById("l_r_symp_name_"+sysID);
	var sysSelection=document.getElementById("ulMySymptoms");
	var sysMySelection=document.getElementById("SelectedMySymptoms");
	
	var AddData="";

	AddData="<a style=\"cursor:pointer\" onclick=\"AddSymptom(this)\" id=\"symp_name_" + sysID + "\">"+sysDet+"&nbsp;&nbsp;</a>";

	ldet.innerHTML=AddData;	
	sysSelection.removeChild(lrdet);
	
	//sysMySelection.removeChild(lrdet);
	
	
	SymCount=SymCount.replace(","+sysID,"");
	document.getElementById("txtSymCount").value=SymCount;
	document.getElementById("txt_Inbox_Symptoms").value=SymCount;
	 
}*/



function HideSubTabs()
{
	 document.getElementById("dvcatTabs").style.display='none';
	document.getElementById("dvNormalTabs").style.display='';
	document.getElementById("dvGeneralTabs").style.display='none';
		document.getElementById("dvMentalTabs").style.display='none';
}
function ShowSympCatType(cat_new_id)
{
	//alert (cat_new_id);
	var message="";
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
			 document.getElementById("dvSymCat").innerHTML=message;
			  document.getElementById("dvSymSubCat").innerHTML='';
			 document.getElementById("dvcatTabs").style.display='';
			 document.getElementById("dvNormalTabs").style.display='none';
			 document.getElementById("dvGeneralTabs").style.display='none';
			 document.getElementById("dvMentalTabs").style.display='none';
			 
			 
		}
	}

 	//alert(hostname+"/includes/get_symp_cat.inc.php?MainType="+cat_new_id);
	xmlhttp.open("GET",hostname+"/includes/get_symp_cat.inc.php?MainType="+cat_new_id,true);
	xmlhttp.send();
}


function GetSerarhProfiles()
{
	var SymCount=document.getElementById("txtSymCount").value;
	

		var symid=0;
		for (i=1;i < SymCount; i++ )
		{
			if (document.getElementById("txtSymtomId"+i).checked==true)
			{
				symid=symid+","+document.getElementById("txtSymtomId"+i).value;
			}
		}
	 //"<?php echo $strHostName; ?>/includes/product.inc.php?dir=products/product&symid="+symid;
}


function SelectFreshQueries()
{
	var freshqueries=document.getElementById("txtTotalFreshQueries").value;
	
	///alert (freshqueries);
	
	if(freshqueries=="0" || freshqueries=="")
	{
		if(document.getElementById("cmb_Inbox_Query_Type").value="2")
		{
			
			document.getElementById("dvPres_Report_Show_Hide").style.display="none";
			document.getElementById("dvPres_Report_Show_Hide1").style.display="";
			document.getElementById("cmb_Inbox_Query_Type").value="1";
			alert("There is no query for followup.");
			return false;
		}
	}
	
}


function ShowCommSymp(cat_new_id)
{
	 document.getElementById("dvcatTabs").style.display='none';
	 
	 if(cat_new_id=="1331")
	 {
	 	document.getElementById("dvNormalTabs").style.display='';
		document.getElementById("dvGeneralTabs").style.display='none';
		document.getElementById("dvMentalTabs").style.display='none';
	 }
	 
	 
	 if(cat_new_id=="1452")
	 {
	 	document.getElementById("dvNormalTabs").style.display='none';
		document.getElementById("dvGeneralTabs").style.display='';
		document.getElementById("dvMentalTabs").style.display='none';
	 }
	 
	 if(cat_new_id=="1573")
	 {
	 	document.getElementById("dvNormalTabs").style.display='none';
		document.getElementById("dvGeneralTabs").style.display='none';
		document.getElementById("dvMentalTabs").style.display='';
	 }
}





</script>

<script type="text/javascript">

function ShowReports(type)
{
	document.getElementById("dvReports").style.display="";
	document.getElementById("tbPrescription").style.display="";
	document.getElementById("dvPrescription").style.backgroundColor="#009999";
	
 	if(type=="1")
	{
		document.getElementById("txtReports").value="1";
		document.getElementById("dvPrescription").style.backgroundColor="#009999";
		document.getElementById("dvLabTest").style.backgroundColor="";
		document.getElementById("dvRadiology").style.backgroundColor="";
		document.getElementById("dvReports").style.display="";
		document.getElementById("tbPrescription").style.display="";
		document.getElementById("tbLabTest").style.display="none";
		document.getElementById("tbRadiology").style.display="none";
	}
	else if(type=="2")
	{
		document.getElementById("txtReports").value="2";
		document.getElementById("dvLabTest").style.backgroundColor="#009999";
		document.getElementById("dvPrescription").style.backgroundColor="";
		document.getElementById("dvRadiology").style.backgroundColor="";
		document.getElementById("dvReports").style.display="";
		document.getElementById("tbLabTest").style.display="";
		document.getElementById("tbPrescription").style.display="none";
		document.getElementById("tbRadiology").style.display="none";
		
	} 
	if(type=="3")
	{
		document.getElementById("txtReports").value="3";
		document.getElementById("dvRadiology").style.backgroundColor="#009999";
		document.getElementById("dvPrescription").style.backgroundColor="";
		document.getElementById("dvLabTest").style.backgroundColor="";
		document.getElementById("dvReports").style.display="";
		document.getElementById("tbRadiology").style.display="";
		document.getElementById("tbLabTest").style.display="none";
		document.getElementById("tbPrescription").style.display="none";
		
	}
}


function AddReports()
{
	
	//alert (type);
	//DeleteMail();
	
	var MailCount=document.getElementById("txtMailCount").value;
	var mailsid=0;
	for (i=1;i < MailCount; i++ )
	{
		if (document.getElementById("chkTick"+i).checked==true)
		{
			mailsid=mailsid+","+document.getElementById("txtpresid"+i).value;
		//	alert (mailsid);
			document.getElementById("totalreports").value=mailsid;
		}
	}
	
	
	var MailLabCount=document.getElementById("txtLabCount").value;
	var labreportid=0;
	for (j=1;j < MailLabCount; j++ )
	{
		if (document.getElementById("chkLabTick"+j).checked==true)
		{
			labreportid=labreportid+","+document.getElementById("txtlabid"+j).value;
		//	alert (labreportid);
			document.getElementById("totallabreports").value=labreportid;
		}
	}
	
	
	var RadiologyCount=document.getElementById("txtRadiologyCount").value;
	var radioreportid=0;
	for (k=1;k < RadiologyCount; k++ )
	{
		if (document.getElementById("chkradiologyTick"+k).checked==true)
		{
			radioreportid=radioreportid+","+document.getElementById("txtradiologyid"+k).value;
			//alert (radioreportid);
			document.getElementById("totalradreports").value=radioreportid;
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

</script>
<div class="Inbox_td_right" style="width:748px; border: solid 0px #006699; padding-left: 0px;">
	<div class="dvFloat">
      <div style="float:left; width:100%; border:solid 0px green;">
        <div class="dvFloat">
             <div style="width: 86%; float: left; border: solid 0px #00FFCC;"><h2 class="Tab_Title" style="color:#7ca500;padding:0px; margin:0px">ASK QUERIES - Doctor</h2></div>
             <div style="width: 13%; float: right; border: solid 0px #00CC99;"><div style="float:right; width:103px; border:solid 0px red; text-align:right"  id="dvDocNutDrop">
        <ul id="dd_nav2" style="width: 106px;">
        <li> <a href="#" style="background-color:#666666; font-weight:normal;"><img src="images/compose_mail_icon.jpg" alt="" style="float:left" />&nbsp;Compose&nbsp;<span class="ar">&#9660;</span> </a>
        <ul style="width: 101px;line-height:15px">
          <li style="background-color: #99cc00; text-align:center"><a  href="<?php echo $strHostName;?>/page.php?dir=inbox/compose_doctor" style="color:#FFFFFF;cursor: pointer;">Doctor </a></li>
          <li style="background-color: #009999; text-align:center;"><a href="<?php echo $strHostName;?>/page.php?dir=inbox/compose_nutritionist" style="color:#FFF;cursor: pointer;">Nutritionist</a></li>
        </ul>
        </li>
        </ul>
        </div></div>
         </div>
        <table width="100%" border="0" cellpadding="0" cellspacing="0" style="border:solid 0px red;">
        <tr>
        <td class="Inboxbg1" style="padding-top:0px;vertical-align:top; text-align:center; width:2%"><!--<input type="checkbox" id="chkMainTick" value="" />-->
        &nbsp;</td>
        <td class="Inboxbg2" colspan="2" style="text-align:left	">&nbsp; </td>
        <td class="Inboxbg4" style="vertical-align:top; text-align:right">&nbsp;</td>
        </tr>
        </table>
        <div class="DvFloat">
		<input type="hidden" name="txtFolderID" id="txtFolderID" value="<?php echo $folder_id;?>"/>
        <div  style="width:100%; border:solid 0px red;padding-top:10px;">
        <div class="dvFloat formpadding1">
        <div class="formlabel1" style="width: 200px; border: solid 0px #3300FF;">
        <div style="padding-left: 10px; float: left;">Query Type <span class="redtxt">*</span></div>
        </div>
        <div class="formcontrol21" style="width: 500px; border: solid 0px #3300FF;">
          <input type="hidden" name="txtTotalFreshQueries" id="txtTotalFreshQueries" value="<?php echo $total_fresh_queries?>" />
          
        <select  id="cmb_Inbox_Query_Type" name="cmb_Inbox_Query_Type" tabindex="1" onChange="javascript:Pres_Report_Show_Hide(); SelectFreshQueries();" class="existing_event" style="width: 150px;">
        <option value="1">Fresh</option>
        <option value="2" <?php if($squery=="followup") { echo "selected"; }?>>Follow Up</option>
        </select>
        <input type="hidden" name="txtMailID" id="txtMailID" value="" />
        <input type="hidden" name="txtStatus" id="txtStatus" value="Sent" />
       
        
        </div>
        </div>
        <div class="dvFloat" id="dvPres_Report_Show_Hide1">
        <div class="dvFloat formpadding1">
        <div class="formlabel1" style="width: 200px; border: solid 0px #3300FF;">
        <div style="padding-left: 10px; float: left;">Body Area <span class="redtxt">*</span></div>
        </div>
        <div class="formcontrol21" style="width: 500px; border: solid 0px #3300FF;">
        <select id="cmb_Inbox_Body_Area" name="cmb_Inbox_Body_Area" tabindex="1" class="existing_event" style="width: 150px;" onchange="javascript:ShowSymp();">
          <option value="0">Select</option>
          <option value="Abdomen and Pelvis">Abdomen and Pelvis</option>
          <option value="Arms and Hands">Arms and Hands</option>
          <option value="Chest and Back">Chest and Back</option>
          <option value="Common Symptoms">Common Symptoms</option>
          <option value="General Symptoms">General Symptoms</option>
          <option value="Mental"> Behavioural & Mental Symptoms</option>
          <option value="Ear, Nose and Throat">Ear, Nose and Throat</option>
          <option value="Eyes">Eyes</option>
          <option value="Head and Neck">Head and Neck</option>
          <option value="Legs and Feet">Legs and Feet</option>
        </select>
        </div>
        </div>
         <div class="dvFloat formpadding1">
        <div class="formlabel1" style="width: 200px; border: solid 0px #3300FF;">
        <div style="padding-left: 10px; float: left;">Subject <span class="redtxt">*</span></div>
        </div>
        <div class="formcontrol21" style="width: 500px; border: solid 0px #3300FF;">
        
        <input type="text" name="txt_Inbox_Subject" id="txt_Inbox_Subject" value="">
          <br>
          <div style="float:left; width:90px;text-align:left;padding:10px 0px 0px 5px; border:solid 0px red; display:none;">Character left:</div>
          <div style="float:left; width:45px; border:solid 0px red;padding:7px 0px 0px 0px; display:none;">
            <script type="text/javascript">
        document.write("<input  style='border:solid 0px red; padding:0px;background-color:#fff;text-shadow:0px; width:50px;float:right;box-shadow: inset 0 0 0px 0px #d2d2d2;' type=text name=limit  readonly value="+count+">");
        </script>
          </div>
        </form>
        </div>
        </div>
        <div class="dvFloat formpadding1">
        <div class="formlabel1" style="width: 200px; border: solid 0px #3300FF;">
        <div style="padding-left: 10px; float: left;">Complaint <span class="redtxt">*</span></div>
        </div>
        <div class="formcontrol21" style="width: 500px; border: solid 0px #3300FF;">
        
          <textarea name="txt_Inbox_Message" id="txt_Inbox_Message"></textarea>
          <br>
          <div style="float:left; width:90px;text-align:left;padding:10px 0px 0px 5px; border:solid 0px red; display:none;">Character left:</div>
          <div style="float:left; width:45px; border:solid 0px red;padding:7px 0px 0px 0px; display:none;">
            <script type="text/javascript">
        document.write("<input  style='border:solid 0px red; padding:0px;background-color:#fff;text-shadow:0px; width:50px;float:right;box-shadow: inset 0 0 0px 0px #d2d2d2;' type=text name=limit  readonly value="+count+">");
        </script>
          </div>
        </form>
        </div>
        </div>
        <div class="dvFloat formpadding1">
        <div class="formlabel1" style="width: 200px; border: solid 0px #3300FF;">
        <div style="padding-left: 10px; float: left;">Symptoms</div>
        </div>
        <div class="formcontrol21" style="width: 500px; border: solid 0px #3300FF;">
                <input type="hidden" name="txt_Inbox_Symptoms" id="txt_Inbox_Symptoms" value="0" style="width:190px;">
                <a style="cursor: pointer;color: #7ca500;" target="_parent" onClick="javascript:Popup.showModal('dvpopup-form3',null,null,{'screenColor':'#333333','screenOpacity':.6});"><img  src="images/pick_possible_symtoms.png" alt="" /></a>
        			<table style="display:none; font-size:12px; line-height:18px; font-family: 'myriad_web_proregular'; border:solid 0px green; width:610px;" id="DvSymptomsDet">
                        <tr>
                        	<td style="color:#fff;  background-color:#666666; padding:5px 5px;">Added Symptoms</td>
                        </tr>
                    	<tr>
                        	<td id="SelectedMySymptoms" style="font-size:12px; font-family: 'myriad_web_proregular';  background-color:#f0f0f0; padding:5px;">&nbsp;</td>
                        </tr>
                    </table>
        </div>
        </div>
        <div class="dvFloat formpadding1">
        <div class="formlabel1" style="width: 200px; border: solid 0px #3300FF;">
        <div style="padding-left: 10px; float: left;">How often you suffer from this Medical Problem ?<span class="redtxt">*</span></div>
        </div>
        <div class="formcontrol21" style="width: 500px; border: solid 0px #3300FF;">
        <input type="text" name="txt_Inbox_suffer_Medical_Problem" id="txt_Inbox_suffer_Medical_Problem" value="">
        </div>
        </div>
        <div class="dvFloat formpadding1">
        <div class="formlabel1" style="width: 200px; border: solid 0px #3300FF;">
        <div style="padding-left: 10px; float: left;">Last Ocurrency of Problem ?</div>
        </div>
        <div class="formcontrol21" style="width: 500px; border: solid 0px #3300FF;">
        <div style="float:left; padding:0px 14px 0px 0px; border: solid 0px #006633;">
          <select name="cmb_Day" id="cmb_Day" class="existing_event" tabindex="1" style="width:60px;">
            <option value="0" selected="selected">DD</option>
            <?php for($iDay=1;$iDay < 32;$iDay++){ ?>
             <option value="<?php echo $iDay?>"><?php echo $iDay?></option>
            <?php } ?>
          </select>
        </div>
        <div style="float:left; padding:0px 13px 0px 0px">
          <select id="cmb_Month" name="cmb_Month" tabindex="1" title="" class="existing_event" style="width:60px;">
           <option value="0" selected="selected">MM</option>
             <?php for($iMonth=1;$iMonth < 13;$iMonth++){ ?>
                <option value="<?php echo $iMonth?>"><?php echo $iMonth?></option>
            <?php } ?>
          </select>
        </div>
        <div style="float:left; padding:0px 0px 0px 0px">
          <select name="cmb_Year" id="cmb_Year"  title="" tabindex="1" class="existing_event" style="width:60px;">
            <option value="0" selected="selected"> YYYY</option>
               
                 <?php for($iYear=1;$iYear < 6;$iYear++){ ?>
					<option value="<?php echo $iYearcurrent?>" ><?php echo $iYearcurrent?></option>
                    <?php 
						$iYearcurrent=$iYearcurrent-1;
					?>
				 <?php } ?>
                 
                 
          </select>
        </div>
        </div>
        </div>
        <div class="dvFloat formpadding1">
        <div class="formlabel1" style="width: 200px; border: solid 0px #3300FF;">
        <div style="padding-left: 10px; float: left;">Doctor Consulted of problem (if any?)<span class="redtxt">*</span></div>
        </div>
        <div class="formcontrol21" style="float:left; text-align:left; width: 500px;">
        <div style="float:left">
          <input type="radio" id="Consulted_of_problem" name="Consulted_of_problem"  value="Yes" onclick="javascript:ShowDoctor()">
          <label for="Yes">Yes</label>
          &nbsp;&nbsp;
          <input type="radio" id="Consulted_of_problem1" name="Consulted_of_problem" value="No" onclick="javascript:ShowDoctor()">
          <label for="No">No</label>
          &nbsp;&nbsp; </div>
        </div>
        </div>
        <div class="dvFloat formpadding1" id="dvDocNameShow">
        <div class="formlabel1" style="width: 200px; border: solid 0px #3300FF;">
        <div style="padding-left: 10px; float: left;">Doctor Name</div>
        </div>
        <div class="formcontrol21" style="width: 500px; border: solid 0px #3300FF;">
        <?php $DoctorArray=$get_retrive->GetDoctor(999,0,'Doctor') ;  ?>	
          <select  id="ddl_Doc_Consulted" name="ddl_Doc_Consulted">
            <option value="0">Select Doctor</option>
             <?php  while($doctor = mysql_fetch_array( $DoctorArray )){?>
                <option value="<?php echo $doctor['doctor_id']?>"><?php echo $doctor['doctor_name']?></option>
             <?php }?>
          </select>
        <div class="div_input_text1" style="font-size: 12px;">Did not find your Doctor in List? <span style="text-decoration: underline;"><a class="btnclickhere" onclick="javascript:SetScroll(); ViewDoctor('dvDropdownDoctor');" style="cursor:pointer;">Click here</a></span> to Add One 
        </div>
        </div>
        </div>
        <div class="dvFloat formpadding1" id="dvDocCommentShow" >
        <div class="formlabel1" style="width: 200px; border: solid 0px #3300FF;">
        <div style="padding-left: 10px; float: left;">Doctor Comment</div>
        </div>
        <div class="formcontrol21" style="width: 500px; border: solid 0px #3300FF;">
        <textarea id="cmb_Inbox_Doctor_Comment" name="cmb_Inbox_Doctor_Comment"></textarea>
        </div>
        </div>
        
        </div>
        <div class="dvFloat" style="display: none;" id="dvPres_Report_Show_Hide">
        <div class="dvFloat formpadding1">
        <table cellpadding="0" cellspacing="0"  style="width:100%" >
          <tr>
            <td class="tbl_head" style="width:50px;"></td>
            <td class="tbl_head" style="width:100px;">Query Date</td>
            <td class="tbl_head" style="width:400px;">Subject</td>
            <td class="tbl_head">Query Type</td>
            <td class="tbl_head" style="display:none;">Doctor&rsquo;s Advice</td>
            <td class="tbl_head" style="display:none;">MD&rsquo;s Advice</td>
          </tr>
           <?php
		   	$i=1;
			$mail_id="0";
            $query = "SELECT * FROM  ".Compose." where isactive=1 and isdeleted=0 and user_id=".$user_id." and query_type=1 and folderid<>999999 order by created_date desc";
            //echo $query;
            $result = mysql_query($query);							
            if($result != "") {	
                $rowcount  = mysql_num_rows($result);
                if($rowcount > 0) {
                    while($row = mysql_fetch_assoc($result)) {
                        extract($row);
						$mail_id=$row['mail_id'];
						$query_type=$row['query_type'];
						
						
						$subject=$row['subject'];
						if($query_type=="1")
						{
							$query_type="Fresh";
						}
						else
						{	
							$query_type="Follow-up";
						}
					
						$strSymName="0";	
						$query_s = "SELECT symptom_name FROM  tbl_symptom where isactive=1 and isdeleted=0 and symptom_id in (".$row['symptoms'].")";
							
							//echo $query_s;
							$result_s = mysql_query($query_s);							
							if($result_s != "") {	
								$rowcount_s  = mysql_num_rows($result_s);
								if($rowcount_s > 0) {
									while($row_s = mysql_fetch_assoc($result_s)) {
									
											$strSymName=$strSymName.",".$row_s['symptom_name'];
										
										}}}
	
									if($strSymName=="0")	
									{
										$strSymName="";
									}
									else
									{
										$strSymName=substr($strSymName, 2);
									}
									
									
									$doc_comment=GetValue("select doctor_advice as col from tbl_doctor_comment where compose_id=".$mail_id, "col");
									
									if($doc_comment=="")
									{
										$doc_comment="---";
									}
									
									$md_comment=GetValue("select md_advice as col from tbl_md_comment where compose_id=".$mail_id, "col");
									
									if($md_comment=="")
									{
										$md_comment="---";
									}
									
									
									$followup_count=GetValue("select Count(*) as col from ".Compose." where followup_id=".$mail_id, "col");
									if($mail_id==$fmail_id) { $iSelection=$i;}
									
            ?> 
          <tr>
            <td class="tdborder" style="padding: 10px 0px 10px 20px;">
                <input type="radio" id="cbFollowup" name="cbFollowup" value="<?php echo $i; ?>" onclick="javascript:ChooseFollowUpValue('<?php echo $i; ?>');" <?php if($mail_id==$fmail_id) { echo "checked"; }?>  >
                 <input type="hidden" id="txtQueryNo" name="txtQueryNo" value="0" style="width:100px;" > 
                
                <input type="hidden" id="txtQueryID<?php echo $i?>" name="txtQueryID<?php echo $i?>" value="<?php echo $mail_id; ?>" style="width:100px;" > 
                
                   <input type="hidden" id="txtQueryComplaint<?php echo $i?>" name="txtQueryComplaint<?php echo $i?>" value="<?php echo $complaint; ?>" style="width:100px;">

				   <input type="hidden" id="txtQuerySubject<?php echo $i?>" name="txtQuerySubject<?php echo $i?>" value="Follow up: <?php echo $subject; ?>" style="width:100px;">
                <input type="hidden" id="txtQueryBodyArea<?php echo $i?>" name="txtQueryBodyArea<?php echo $i?>" value="<?php echo $body_area; ?>" style="width:100px;">
                <input type="hidden" id="txtQuerySym<?php echo $i?>" name="txtQuerySym<?php echo $i?>" value="<?php echo $symptoms; ?>" style="width:100px;">
                <input type="hidden" id="txtQuerySuffer<?php echo $i?>" name="txtQuerySuffer<?php echo $i?>" value="<?php echo $suffer_from; ?>" style="width:100px;">
                <input type="hidden" id="txtQueryLday<?php echo $i?>" name="txtQueryLday<?php echo $i?>" value="<?php echo $last_occurrency_day; ?>" style="width:100px;">
                <input type="hidden" id="txtQueryLMonth<?php echo $i?>" name="txtQueryLMonth<?php echo $i?>" value="<?php echo $last_occurrency_month; ?>" style="width:100px;">
                <input type="hidden" id="txtQueryLYear<?php echo $i?>" name="txtQueryLYear<?php echo $i?>" value="<?php echo $last_occurrency_year; ?>" style="width:100px;">
                <input type="hidden" id="txtQueryDId<?php echo $i?>" name="txtQueryDId<?php echo $i?>" value="<?php echo $doctor_id; ?>" style="width:100px;">
                <input type="hidden" id="txtQueryDCom<?php echo $i?>" name="txtQueryDCom<?php echo $i?>" value="<?php echo $doc_comment; ?>" style="width:100px;">
                <input type="hidden" id="txtQueryDConsult<?php echo $i?>" name="txtQueryDConsult<?php echo $i?>" value="<?php echo $doctor_consulted; ?>" style="width:100px;">
             
            </td>
            <td class="tdborder" style="padding: 10px 0px 10px 20px;"><?php echo date('d-M-Y',strtotime($row['created_date']))?></td>
            <td class="tdborder" style="padding: 10px 0px 10px 20px;"><?php echo truncate($row['subject'],100); ?></td>
             <td class="tdborder" style="padding: 10px 0px 10px 20px;"><?php echo $query_type; ?> (<?php echo $followup_count;?>)</td>
            <td class="tdborder" style="padding: 10px 0px 10px 20px; display:none;"><?php echo truncate($doc_comment,100); ?></td>
             <td class="tdborder" style="padding: 10px 0px 10px 20px; display:none;"><?php echo truncate($md_comment,100); ?></td>
          </tr>
          <?php 
		  	$i=$i+1;
		  }}} ?>
          
        </table>
        </div>                                        
        <div class="dvFloat formpadding1">
        <div class="formlabel1" style="width: 200px; border: solid 0px #3300FF;">
        
        <div style="padding-left: 10px; float: left;">User Query</div>
        </div>
        <div class="formcontrol21" style="width: 500px; border: solid 0px #3300FF;">
        <textarea id="cmb_Inbox_User_Query" name="cmb_Inbox_User_Query"></textarea>
          <input type="hidden" id="txtQueryIDFinal" name="txtQueryIDFinal" value="0" style="width:100px;" > 
        </div>
        </div>
        </div>
        <div>
        <div class="dvFloat formpadding1">
        <div class="formlabel1" style="width: 200px; border: solid 0px #3300FF;">
        <div style="padding-left: 10px; float: left;">Search Medical History</div>
        </div>
        <div class="formcontrol21" style="width: 500px; border: solid 0px #3300FF;">
        
        <div style=" width:114px; height:30px; float:left;padding-right:10px; font-size:13px;"> <a class="button2" style="font-size:13px; cursor:pointer; background-color:#009999;" id="dvPrescription" onclick="ShowReports('1')">PRESCRIPTION</a>
        
        </div>
        <div style=" width:100px; height:30px; float:left;padding-right:10px;"> <a class="button2" style="font-size:13px; cursor:pointer;" id="dvLabTest" onclick="ShowReports('2')">LAB TEST</a>
          
        </div>
        <div style=" width:100px; height:30px; float:left;padding-right:10px;"> <a class="button2" style="font-size:13px;cursor:pointer;" id="dvRadiology" onclick="ShowReports('3')">RADIOLOGY</a>
         
        </div>
         <input type="hidden" name="txtReports" id="txtReports" value="<?php echo $reports?>" />
         <div class="dvFloat" id="dvReports">
             <div class="dvFloat" id="tbPrescription" style="display:'';">
                 <div class="dvFloat" style="margin-left: -4px;">
                     <table cellpadding="4" cellspacing="4"  style="width:100%" >
                              <tr>
                                <td style="width: 5%;" class="nutri_tdgreybg1">Select</td>
                                <td style="width: 20%;" class="nutri_tdgreybg1">Report Date </td>
                                <td style="width: 25%;" class="nutri_tdgreybg3">Health Problem</td>
                                <td style="width: 10%;" class="nutri_tdgreybg4">actions </td>
                              </tr>
                     <?php
                        $i=0;
                        $i=$i+1;
                        $query = "SELECT * FROM  ".Doc_Consult_Gallery." where isactive=1 and isdelete=0 and userid=".$user_id." and report_type=1";
                        //echo $query;
                        $result = mysql_query($query);							
                        if($result != "") {	
                            $rowcount  = mysql_num_rows($result);
                            if($rowcount > 0) {
                                while($row = mysql_fetch_assoc($result)) {
                                    extract($row);
                        ?> 
                            <tr>
                                 <td class="nutri_tdlightgreybg1">
                                    <input type="checkbox" name="chkTick<?php echo $i?>" id="chkTick<?php echo $i?>" value=""  onchange="javascript:AddReports();">
                                       <input type="hidden" id="txtPrescription" name="txtPrescription" value="1"/>
                                    <input type="hidden" name="txtpresid<?php echo $i?>" id="txtpresid<?php echo $i?>" value="<?php echo $row['id'];?>" style="width:15px;" />
                                 </td>
                                <td class="nutri_tdlightgreybg1"><?php echo date('d-M-Y',strtotime($row['report_date']))?></td>
                                <td style="text-align: left; padding-left: 10px;" class="nutri_tdlightgreybg3"><?php echo $row['health_problem']?></td>
                                <td class="tdborder nutri_tdlightgreybg2">
                                <table cellpadding="0" cellspacing="0"  style="width:100%" >
                                    <?php $imageid=$row['file_path']; 
                                            if($imageid!="")
                                            {
                                                $imageid=$imageid;
                                            }
                                            else
                                            {
                                                $imageid="noimage.jpg";
                                            }
                                        ?>
                                    <tr>
                                      <td style="text-align:center;"><a class="fancybox-manual-c" style="cursor: pointer;" target="_blank" href="<?php echo $strHostName;?>/uploads/<?php echo $imageid;?>"><img src="images/nutritionist_action_icon.jpg" alt="" title="" border="0"></a></td>
                                     
                                    </tr>
                                  </table></td>
                        
                              </tr>
                       <?php  $i=$i+1;}}} ?>
                        <input type="hidden" id="txtMailCount" name="txtMailCount" value="<?php echo $i?>"/>
                        </table>
                       <input type="hidden" id="totalreports" name="totalreports" value=""/>
                 </div>
            </div>
            
             <div class="dvFloat" id="tbLabTest" style="display:none;">
                 <div class="dvFloat" style="margin-left: -4px;">
                     <table cellpadding="4" cellspacing="4"  style="width:100%">
                              <tr>
                                <td style="width: 5%; text-align: center; padding: 7px 5px 5px 5px;" class="nutri_tdgreybg1">Select</td>
                                <td style="width: 20%;" class="nutri_tdgreybg1">Report Date </td>
                                <td style="width: 25%;" class="nutri_tdgreybg2">Test Name</td>
                                <td style="width: 25%;" class="nutri_tdgreybg3">Health Problem</td>
                                <td style="width: 10%;" class="nutri_tdgreybg4">actions </td>
                              </tr>
                     <?php
                       $j=0;
                        $j=$j+1;
                        $query = "SELECT * FROM  ".Doc_Consult_Gallery." where isactive=1 and isdelete=0 and userid=".$user_id." and report_type=2";
                        //echo $query;
                        $result = mysql_query($query);							
                        if($result != "") {	
                            $rowcount  = mysql_num_rows($result);
                            if($rowcount > 0) {
                                while($row = mysql_fetch_assoc($result)) {
                                    extract($row);
                        ?> 
                            <tr>
                            <td class="nutri_tdlightgreybg1">
                                    <input type="checkbox" name="chkLabTick<?php echo $j?>" id="chkLabTick<?php echo $j?>" value=""  onchange="javascript:AddReports();">
                                    <input type="hidden" id="txtLabReport" name="txtLabReport" value="2"/>  
                                    <input type="hidden" name="txtlabid<?php echo $j?>" id="txtlabid<?php echo $j?>" value="<?php echo $row['id'];?>" style="width:15px;" />
                                 </td>
                                <td class="nutri_tdlightgreybg1"><?php echo date('d-M-Y',strtotime($row['report_date']))?></td>
                                <td style="text-align: left; padding-left: 10px;" class="nutri_tdlightgreybg2"><?php echo $row['test_name']?> </td>
                                <td style="text-align: left; padding-left: 10px;" class="nutri_tdlightgreybg3"><?php echo $row['health_problem']?></td>
                                <td class="tdborder nutri_tdlightgreybg2">
                                <table cellpadding="0" cellspacing="0"  style="width:100%" >
                                    <?php $imageid=$row['file_path']; 
                                            if($imageid!="")
                                            {
                                                $imageid=$imageid;
                                            }
                                            else
                                            {
                                                $imageid="noimage.jpg";
                                            }
                                        ?>
                                    <tr>
                                      <td style="text-align:center;"><a class="fancybox-manual-c" style="cursor: pointer;" target="_blank" href="<?php echo $strHostName;?>/uploads/<?php echo $imageid;?>"><img src="images/nutritionist_action_icon.jpg" alt="" title="" border="0"></a></td>
                                     
                                    </tr>
                                  </table></td>
                        
                              </tr>
                        <?php  $j=$j+1;}}} ?>
                         <input type="hidden" id="txtLabCount" name="txtLabCount" value="<?php echo $j?>"/>
                       </table>
                           <input type="hidden" id="totallabreports" name="totallabreports" value=""/>
                 </div>
            </div>
            
             <div class="dvFloat" id="tbRadiology" style="display:none;">
                 <div class="dvFloat" style="margin-left: -4px;">
                     <table cellpadding="4" cellspacing="4"  style="width:100%">
                              <tr>
                                <td style="width: 5%; text-align: center; padding: 7px 5px 5px 5px;" class="nutri_tdgreybg1">Select</td>
                                <td style="width: 20%;" class="nutri_tdgreybg1">Report Date </td>
                                <td style="width: 25%;" class="nutri_tdgreybg2">Test Name</td>
                                <td style="width: 25%;" class="nutri_tdgreybg3">Health Problem</td>
                                <td style="width: 10%;" class="nutri_tdgreybg4">actions </td>
                              </tr>
                     <?php
                       $k=0;
                        $k=$k+1;
                        $query = "SELECT * FROM  ".Doc_Consult_Gallery." where isactive=1 and isdelete=0 and userid=".$user_id." and report_type=3";
                        //echo $query;
                        $result = mysql_query($query);							
                        if($result != "") {	
                            $rowcount  = mysql_num_rows($result);
                            if($rowcount > 0) {
                                while($row = mysql_fetch_assoc($result)) {
                                    extract($row);
                        ?> 
                            <tr>
                                <td class="nutri_tdlightgreybg1">
                                 <input type="checkbox" name="chkradiologyTick<?php echo $k?>" id="chkradiologyTick<?php echo $k?>" value=""  onchange="javascript:AddReports();">
                                   <input type="hidden" id="txtRadiology" name="txtRadiology" value="3"/>  
                                    
                                    <input type="hidden" name="txtradiologyid<?php echo $k?>" id="txtradiologyid<?php echo $k?>" value="<?php echo $row['id'];?>" style="width:15px;" />
                                 </td>
                                <td class="nutri_tdlightgreybg1"><?php echo date('d-M-Y',strtotime($row['report_date']))?></td>
                                <td style="text-align: left; padding-left: 10px;" class="nutri_tdlightgreybg2"><?php echo $row['test_name']?> </td>
                                <td style="text-align: left; padding-left: 10px;" class="nutri_tdlightgreybg3"><?php echo $row['health_problem']?></td>
                                <td class="tdborder nutri_tdlightgreybg2">
                                <table cellpadding="0" cellspacing="0"  style="width:100%" >
                                    <?php $imageid=$row['file_path']; 
                                            if($imageid!="")
                                            {
                                                $imageid=$imageid;
                                            }
                                            else
                                            {
                                                $imageid="noimage.jpg";
                                            }
                                        ?>
                                    <tr>
                                      <td style="text-align:center;"><a class="fancybox-manual-c" style="cursor: pointer;" target="_blank" href="<?php echo $strHostName;?>/uploads/<?php echo $imageid;?>"><img src="images/nutritionist_action_icon.jpg" alt="" title="" border="0"></a></td>
                                     
                                    </tr>
                                  </table></td>
                        
                              </tr>
                         <?php  $k=$k+1;}}} ?>
                           <input type="hidden" id="txtRadiologyCount" name="txtRadiologyCount" value="<?php echo $k?>"/>
                       </table>
                       <input type="hidden" id="totalradreports" name="totalradreports" value=""/>
                 </div>
                 
            </div>
            
         </div>
        </div>
        </div>
        <div class="dvFloat formpadding1">
        <div class="formlabel1" style="width: 200px; border: solid 0px #3300FF;">
        <div style="padding-left: 10px; float: left;">Additional Medical Reports</div>
        </div>
        <div class="formcontrol21" style="width: 500px; border: solid 0px #3300FF;">
        <div style=" width:80px; height:30px; float:left;padding-right:10px;"> 
            	<input type="file" id="flPhoto" class="button1" name="flPhoto" style="width:75px;display:none;" onchange="javascript:ShowFileName();"/>
        		<a style="cursor:pointer" class="button2" onclick="javascript:SetFileClick();">UPLOAD</a>
        </div>
        <div id="dvViewFile" name="dvViewFile" style="display:none; float:left; width:100px; padding-top:8px;"><a id="aViewFile" name="aViewFile" target="_blank">View File</a></div>
        </div>
        </div>
        <div class="dvFloat formpadding1">
        <div class="formlabel1" style="width: 200px; border: solid 0px #3300FF;">
        <div style="padding-left: 10px; float: left;">Do You Require Video Query</div>
        </div>
        <div class="formcontrol21" style="float:left; text-align:left; width: 500px;">
        <div style="float:left">
          <input type="radio" id="Inbox_Video_Query" name="Inbox_Video_Query" value="Yes">
          <label for="Yes">Yes</label>
          &nbsp;&nbsp;
          <input type="radio" id="Inbox_Video_Query" name="Inbox_Video_Query" value="No" checked="checked">
          <label for="No">No</label>
          &nbsp;&nbsp; </div>
        </div>
        </div>
        <div class="dvFloat formpadding1"  style="padding:10px 0px 25px 0px" id="dvComposeSubmit">
        <div class="formlabel1" style="width: 200px; border: solid 0px #3300FF;"> &nbsp; </div>
        <div class="formcontrol21" style="width: 500px; border: solid 0px #3300FF;">
        <div style="width:90px; height:30px; float:left;padding-right:10px;"> <a onclick="javascript:Compose_Ins(this);" class="button4" style="cursor:pointer;">SUBMIT</a></div>
        <div style="width:90px; height:30px; float:left;padding-right:10px;"> <a class="button2">CANCEL</a></div>
        </div>
        </div>
        </div>
        </div>
        
        </div>
      </div>
      
   </div>
</div>

<div id="dvpopup-form3" style="text-align: center; width: 100%;position:absoulte;margin:0px; margin-top:15px; display:none">      
  <table cellpadding="0" cellspacing="0" border="0" width="100%" align="center">
    <tr>
      <td style="text-align:right; border:solid 0px red; float:right"><div style="margin: 5px 0px 0px -23px; position: absolute; text-align:right">
       <a href="javascript:Popup.hide('dvpopup-form3');" target="_parent" style="text-decoration: none; color: #fff;"> <img src="images/close.png" alt="" title="" border="0" /> </a> </div></td>
    </tr>
    <tr>
      <td valign="top" align="center" style="padding: 10px 10px 30px 10px;background-color:#FFFFFF"><div  style="width:100%; border:solid 0px red;">
          <div class="dvFloat formpadding">
            <div class="formlabel1">
              <label class="formlabel1">
              <h2 class="Tab_Title" style="color:#000000; text-transform:none">What are the symptoms?</h2>
              </label>
            </div>
            <div class="formcontrol21" style="width: 500px; border: solid 0px #3300FF;"> &nbsp; </div>
          </div>
          <div class="dvFloat formpadding" style="padding-top:30px"></div>
          <div class="dvInbox_left">
			<div class="dvFloat">
            	<div style="float:left; width:50%;"> <img src="images/human.jpg" alt="" /></div>
                 <div style="float:left; width:45%; line-height:30px; padding-top:5px;">
                 			<a style="cursor:pointer" onclick="javascript:ShowSympCatType('<?php echo 8*121;?>')" title="Common Symptoms"> <img src="images/common_symptoms.jpg" alt="Common Symptoms" /></a><br />
                            <a style="cursor:pointer" onclick="javascript:ShowSympCatType('<?php echo 9*121;?>')" title="General Symptoms"> <img src="images/general_symptoms.jpg" alt="General Symptoms" /></a><br />
                            <a style="cursor:pointer" onclick="javascript:ShowSympCatType('<?php echo 10*121;?>')" title="Behavioural & Mental Symptoms"> <img src="images/behavioural_symptom.jpg" alt="Behavioural & Mental Symptoms" /></a><br />
                            <a style="cursor:pointer" onclick="javascript:ShowSympCatType('<?php echo 1*121;?>')" title="Eyes"> <img src="images/eye.jpg" alt="Eyes" /></a><br />
                            <a style="cursor:pointer" onclick="javascript:ShowSympCatType('<?php echo 2*121;?>')" title="Ear, Nose & Throat"> <img src="images/ear.jpg" alt="Ear, Nose & Throat" /></a><br />
                            <a style="cursor:pointer" onclick="javascript:ShowSympCatType('<?php echo 3*121;?>')" title="Head & Neck"> <img src="images/head.jpg" alt="Head & Neck" /></a><br />
                            <a style="cursor:pointer" onclick="javascript:ShowSympCatType('<?php echo 4*121;?>')" title="Chest & Back"> <img src="images/throat.jpg" alt="Chest & Back" /></a><br />
                            <a style="cursor:pointer" onclick="javascript:ShowSympCatType('<?php echo 5*121;?>')" title="Arms & Hands"> <img src="images/hand.jpg" alt="Arms & Hands" /></a><br />
                            <a style="cursor:pointer" onclick="javascript:ShowSympCatType('<?php echo 6*121;?>')" title="Abdomen & Pelvis"> <img src="images/abdomen.jpg" alt="Abdomen & Pelvis" /></a><br />
                            <a style="cursor:pointer" onclick="javascript:ShowSympCatType('<?php echo 7*121;?>')" title="Legs & Feet"> <img src="images/leg.jpg" alt="Legs & Feet" /></a><br />
                            
                        
                 </div>
            </div>
            
           </div>
          <div class="dvInbox_middle">
			<div class="TabDv" style="margin:0 auto; width:390px;display:none;" id="dvcatTabs">
				<div class="dvFL">
					<div style="position: absolute; margin: -40px 0px 0px 705px;">
						<a href="#" onclick="javascript:HideSubTabs();" style="border: 0px;">
							
						</a>
					</div>
				</div>
				<div style="float:left; width:500px; border:solid 0px green; ">
                     <div style="width:240px; border:solid 0px red;overflow-x:hidden;background-color:#f0f0f0; height:400px; float:left; margin-right:20px;" id="dvSymCat">
                        &nbsp;
                     </div>
                     <div style="width:240px; border:solid 0px red;overflow-x:hidden;background-color:#f0f0f0; height:400px; float:left;" id="dvSymSubCat">
                        &nbsp;
                     </div>
                </div>
			</div>
            
            
            
                <div class="TabDv" style="margin:0 auto; width:390px; display:none;" id="dvNormalTabs">
              <div  style="padding:0px 0px;">
                <ul id="calorie_tab" class="calorie_tab">
                  <li class="" style="width:100%;"><a href="#" rel="tabs1">Common Symptoms</a></li>
                  
                </ul>
              </div>
              <div class="calorieTabContentDetails">
                <div id="tabs1" class="calorie_tabcontent">
                  <div style="width:415px; border:solid 0px red;overflow-x:hidden;hidden;background-color:#f0f0f0; height:400px;">
                    <table cellpadding="0" cellspacing="0" style="width:100%;">
                      <tr>
                        <td style="font-weight:bold; font-size:13px;padding:15px 0px 5px 10px" colspan="2" >Common Symptoms for Adult Male </td>
                      </tr>
                      <tr>
                        <td style="width:50%; vertical-align:top; text-align:left">
                        <ul class="symtoms1" >
                            <?php 
							$query = "SELECT * FROM tbl_symptom WHERE symptom_id <> 0 and isactive=1 and cat_id=8";
						//	echo $query;
							$result = mysql_query($query);
							if($result != "") {
								$rowcount = mysql_num_rows($result);
								if($rowcount > 0) {
									while($row = mysql_fetch_assoc($result)) {
										extract($row);		
							 ?>
							
                         
                            	<li id="l_symp_name_<?php echo $row['symptom_id']*121;?>"><a style="cursor:pointer" id="symp_name_<?php echo $row['symptom_id']*121;?>" onclick="javascript:AddSymptom(this)"><?php echo $row['symptom_name'];?></a></li>
							   
							<?php }}} ?>
                          </ul>
                         </td>
                        
                      </tr>
                    </table>
                  </div>
                </div>
                
                
                
                </div>
                
                </div>
                
                <div   style="margin:0 auto; width:390px; display:none;" id="dvGeneralTabs">
              <div  style="padding:0px 0px;">
                <div class="dvFloat" style="padding:10px 15px; background-color:#666; color:#FFFFFF">General Symptoms </a></div>
              </div>
              <div class="calorieTabContentDetails">
               
                 <div style="width:415px; border:solid 0px red;overflow-x:hidden;hidden;background-color:#f0f0f0; height:400px;">
                    <table cellpadding="0" cellspacing="0" style="width:100%;">
                      <tr>
                        <td style="font-weight:bold; font-size:13px;padding:15px 0px 5px 10px" colspan="2">General Symptoms for Adult Male </td>
                      </tr>
                      <tr>
                        <td style="width:50%; vertical-align:top; text-align:left">
                        <ul class="symtoms1" >
                            <?php 
							$query = "SELECT * FROM tbl_symptom WHERE symptom_id <> 0 and isactive=1 and cat_id=9'";
							//echo $query;
							$result = mysql_query($query);
							if($result != "") {
								$rowcount = mysql_num_rows($result);
								if($rowcount > 0) {
									while($row = mysql_fetch_assoc($result)) {
										extract($row);		
							 ?>
								<li><?php echo $row['symptom_name'];?></li>
							   
							<?php }}} ?>
                          </ul>
                         </td>
                        
                      </tr>
                    </table>
                  </div>
                </div>
                </div>
                
                
                
                <div   style="margin:0 auto; width:390px; display:none;" id="dvMentalTabs">
              <div  style="padding:0px 0px;">
                <div class="dvFloat" style="padding:10px 15px; background-color:#666; color:#FFFFFF">Behavioral & Mental Health Symptoms  for Adult Male </a></div>
              </div>
              <div class="calorieTabContentDetails">
               
                 <div style="width:415px; border:solid 0px red;overflow-x:hidden;hidden;background-color:#f0f0f0; height:400px;">
                    <table cellpadding="0" cellspacing="0" style="width:100%;">
                      <tr>
                        <td style="font-weight:bold; font-size:13px;padding:15px 0px 5px 10px" colspan="2">Behavioral & Mental Health Symptoms  for Adult Male </td>
                      </tr>
                      <tr>
                        <td style="width:50%; vertical-align:top; text-align:left">
                        <ul class="symtoms1" >
                            <?php 
							$query = "SELECT * FROM tbl_symptom WHERE symptom_id <> 0 and isactive=1 and cat_id=10";
							//echo $query;
							$result = mysql_query($query);
							if($result != "") {
								$rowcount = mysql_num_rows($result);
								if($rowcount > 0) {
									while($row = mysql_fetch_assoc($result)) {
										extract($row);		
							 ?>
								<li><?php echo $row['symptom_name'];?></li>
							   
							<?php }}} ?>
                          </ul>
                         </td>
                        
                      </tr>
                    </table>
                  </div>
                </div>
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
            <div style="background-color:#f0f0f0; width:250px; height:399px; ">
              <div class="dvFloat" style="padding:10px 0px; background-color:#666; color:#FFFFFF"> My Selection </div>
              <div class="dvFloat">
                <div style="background-color:#f0f0f0; width:250px; height:360px; overflow-x:hidden;">
                  <table cellpadding="0" cellspacing="0" style="width:100%;">
                   <tr>
					<td>
						<ul class="symtoms1" id="ulMySymptoms" >
							&nbsp;
						</ul>
					  </td>
                    </tr>
					<input type="hidden" id="txtSymCount" name="txtSymCount" value="0"/>
                   
                  </table>
                </div>
              </div>
              <div style="width:250px; text-align:right; margin:15px 0; float:right;">
              	 <a href="javascript:Popup.hide('dvpopup-form3');" target="_parent" style="text-decoration: none; color: #fff; background-color:#009999; padding:5px 10px;"> 
                 		Submit
                 </a> 
              </div>
            </div>
          </div>
        </div></td>
    </tr>
  </table>
</div>
<script type="text/javascript">
var countries=new ddtabcontent("calorie_tab")
countries.setpersist(true)
countries.setselectedClassTarget("link") //"link" or "linkparent"
countries.init();


ShowReports('1');


</script>

<script type="text/javascript"> $.noConflict();</script>

<?php if(isset($_GET['fmail_id'])) { ?>

	<script type="text/javascript">
		//alert ('<?php echo $iSelection;?>');
		ChooseFollowUpValue('<?php echo $iSelection;?>');
	
    </script>

<?php } ?>