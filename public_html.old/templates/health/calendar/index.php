<?php include "includes/dashboard_top.inc.php";?>
<script type="text/javascript" src="<?php echo $strHostName?>/js/get_calender.js"></script>
<script type="text/javascript" src="<?php echo $strHostName?>/js/health_steup_insert_retrive.js"></script>
<script language="javascript" type="text/javascript">
function custom_data_validation(){
	
	
	var totalCount=document.getElementById("totalDataCount").value;
	//alert (totalCount);
	var datacountid="";
	for (i=1;i < totalCount; i++ )
	{
		
		if (document.getElementById("chkData"+i).checked==true)
		{
			datacountid=datacountid+","+document.getElementById("chkData"+i).value;
		//	alert (datacountid);
			document.getElementById("totalDataCountLimit").value=datacountid;
			totallength=datacountid.split(',').length;
			//alert (totallength);
			document.getElementById("totalLimit").value=totallength;
			//return false;
		//	alert (totallength);
			if(totallength > 5)
			{
				alert ("Please select only four parameters.");
				return false;
			}
		}
		/*else if (document.getElementById("chkData"+i).checked==false)
		{
			alert ("Please select atleast one parameter.");
			return false;
		}*/
		
	}
	
	
	
	
}
</script>
<?php
$user_id="0";
if(isset($_SESSION['UserID'])){
	$user_id=$_SESSION['UserID'];
}
	
$date=date('Y-m-d');	
//Alert($user_id);
	if(isset($_POST['btnCustomizeData'])) {	
	
		
		if(isset($_POST['chkData']))
			{
			if (sizeof($_POST['chkData']) > 0) {
				$data_size=sizeof($_POST['chkData']);
				foreach ($_POST['chkData'] as $checkbox1) {
					$data_Check1[] = $checkbox1;
				}
			}
		}
		else
		{
			$data_Check1[]="0";
			$data_size=0;
		}
			
		////Alert($data_size);		
			
		if($data_size>0) 
		{
			$query="delete from tbl_customized_data where user_id=".$user_id;
			$result = mysql_query($query);			
			
			$data_custom = sizeof($data_Check1);
			if ($data_custom > 0) {
				for ($i = 0; $i < $data_custom; $i++) {
					$data = array(
						'user_id' => $user_id,
						'date' => $date,
						'dataid' =>$data_Check1[$i],
					);
					$id = $db->insert_array("tbl_customized_data", $data);
					if (!$id) {
						$db->print_last_error(false);
					}
				}
			}	
		}
}
				
?>

<section>
<div class="cal_full_size">
<div class="cal_12 m_outo">

  <div class="dvFloat">
    <div class="dvWrapper">
      <div style=" padding:0px 0px 35px 0px">
      <div style="width:98%; float: left; text-align: right;border:solid 0px red;padding-bottom:10px; background-color:#FFFFFF;padding-right:0px;"> 
  				<a onClick="javascript:SetScroll(); Popup.showModal('dvpopup-customizedata',null,null,{'screenColor':'#333333','screenOpacity':.6}); " style="cursor:pointer;"><img src="images/customize_data.jpg" alt="" /></a>
  </div>
            <div style="text-align: center; width: 100%;position:absoulte;margin:0px; margin-top:15px;">
              <table cellpadding="0" cellspacing="0" border="0" width="100%" align="center">
                <tr>
                  <td style="text-align:right; border:solid 0px red; float:right"><div style="margin: 5px 0px 0px -23px; position: absolute; text-align:right"></div></td>
                </tr>
					<?php
						$date=date('d-m-Y');
					    $timestamp = strtotime($date);
						$MonthNo= date('m', $timestamp);
						$YearName = date('Y', $timestamp);
					?>
					<input type="hidden" id="txtCalMonthNo" name="txtCalMonthNo" value="<?php echo $MonthNo?>"/>
					<input type="hidden" id="txtCalYearNo" name="txtCalYearNo" value="<?php echo $YearName?>"/>
                    
                    <input type="hidden" id="txtMDID" name="txtMDID" value="0"/>
                <tr>
                  <td valign="top" align="center" style="padding: 20px 10px 20px 10px; background-color:#FFFFFF" id="dvGetMonth">
				  
				  </td>
                </tr>
              </table>
            </div>
            	
       </div>
      </div>
   </div>
</div>
</div>
</section>
<div id="dvpopup-customizedata" style="text-align: center; width: 200px; display: none; position:absoulte; margin-top:65px; margin-left:550px; background-color:#fff; padding:10px;">
      
          <?php include "includes/customize_data.inc.php";?>
</div>
<script>
	Retrive_Calender_Months('','User');
</script>