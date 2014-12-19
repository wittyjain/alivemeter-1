<?php
	$date_current=date('d-m-Y');
	$from_date_current=date('Y-m-d');

	$day=date('d'); $month=date('m'); $year=date('Y');
	
	if(isset($_GET['alived']))
	{
		$date_current=$_GET['alived']."-".$_GET['alivem']."-".$_GET['alivey'];
		$from_date_current =date('Y-m-d',strtotime($date_current));
		$date_current =date('d-M-Y',strtotime($date_current));
		
		//$day=date('d'); $month=date('m'); $year=date('Y');
		$day=$_GET['alived']; $month=$_GET['alivem']; $year=$_GET['alivey'];
		
	}
	
	$to_date_current = strtotime($date_current . " +6 day");
	$to_date_current =date('Y-m-d',$to_date_current);

	 
?>	
<?php 
$user_id="0";
if(isset($_SESSION['UserID']))
{
	$user_id=$_SESSION['UserID'];
}

$query = "SELECT * FROM  ".Blood_Pressure." where isactive=1 and isdeleted=0 and user_id=$user_id and  del_track_date between '".$from_date_current."' and '".$to_date_current."' order by created_date ";

//echo $query;
$j=1;$DateArray=array();$blood_pressure=array();
$result = mysql_query($query);
if($result != "") {
$rowcount = mysql_num_rows($result);
	if($rowcount > 0) {
		while($row = mysql_fetch_assoc($result)) {
			$DateArray[$j]=date('d-M-Y',strtotime($row['del_track_date']));
			$blood_pressure[$DateArray[$j]]=$row['blood_pressure_systolic'];
			$blood_pressure_d[$DateArray[$j]]=$row['blood_pressure_diatolic'];
			$blood_pressure_id[$DateArray[$j]]=$row['blood_pressure_id'];
			$j=$j+1;
		}
	}
 } ?>

<form  method="POST" id="frmBloodPressure" name="frmBloodPressure">
<div class="DvFloat" style="padding:10px 0px 10px 0px; border-bottom:solid 1px #e4e4e4;text-align:left; font-size:14px;">
      <table cellpadding="0" cellspacing="0" style="width:105%;text-align:left; font-size:14px;">
                                <tr>
                                  <td class="whitebox_Td_DT" colspan="186" style="text-align:left; "><b style="display:none;">Bloood Pressure</b> </td>
                                </tr>
                        
                                 
								 <?php for($m=1;$m < 2;$m++){?>
								
                                	<tr>
                                    <td class="whitebox_Td_DT" colspan="18" style="text-align:left; width: 12%;"><b>&nbsp;</b> </td>
									 <?php for($j=1;$j < 8;$j++){?><td class="WhiteSpace_Td2"></td>
									  <?php $DateArray[$j]=$date_current;?>
                                      <input type="hidden" name="txtBPDay<?php echo $j?>" id="txtBPDay<?php echo $j?>" value="<?php echo  date('d', strtotime($date_current));?>" style="width:60px; text-align:center;"/>
                                 <input type="hidden" name="txtBPMonth<?php echo $j?>" id="txtBPMonth<?php echo $j?>" value="<?php echo  date('m', strtotime($date_current));?>" style="width:60px; text-align:center;"/>
                                 <input type="hidden" name="txtBPYear<?php echo $j?>" id="txtBPYear<?php echo $j?>" value="<?php echo  date('Y', strtotime($date_current));?>" style="width:60px; text-align:center;"/>
                                      <td class="whitebox_Td_DT1"> <?php  $dayname = date('l', strtotime($date_current));echo $dayname;?><br>
                                      <?php echo $date_current;?></td>
                                      
										<?php $date_current = strtotime($date_current . " +1 day");?>
										<?php $date_current =date('d-M-Y',$date_current);?>
									 <?php } ?>
									   
                                </tr>
                               	 	<tr>
                                    	<td class="whitebox_Td_DT" colspan="18" style="text-align:left; vertical-align: middle; padding-left: 0px;"><b>Bloood Pressure</b> </td>
									 <?php for($j=1;$j < 8;$j++){?>
<td class="WhiteSpace_Td2"></td>
                                  <td class="LightGreybox_Td_DT1">
                                  <input type="text" id="txtBloood_Pressure<?php echo $j?>" name="txtBloood_Pressure<?php echo $j?>" value="<?php if(isset( $blood_pressure[$DateArray[$j]])){echo $blood_pressure[$DateArray[$j]]."/". $blood_pressure_d[$DateArray[$j]] ;}?>" style="width:50px; text-align:center" placeholder="mmhg">
                                  
                                 <input type="hidden" name="txtBloodPressureID<?php echo $j?>" id="txtBloodPressureID<?php echo $j?>" value="<?php if(isset( $blood_pressure_id[$DateArray[$j]])){echo $blood_pressure_id[$DateArray[$j]];}?>" style="width:60px; text-align:center;"/>
                                  </td>
                                  
                                  
								    <?php } ?>
									  <td class="LightGreybox_Td_DT"><input type="text" value="" id="txtBloood_Pressure<?php echo $j?>" name="txtBloood_Pressure<?php echo $j?>"   style="width:60px; text-align:center; display:<?php if($j==8) { echo "none";}?>" placeholder="" ></td>
                                  <!--<td class="WhiteSpace_Td2"></td>-->
                                </tr>
                            <?php } ?>
                              </table>
        </div>                      <div style=" width:90px; height:30px; float:right; margin-top:20px;">
                              	<button type="submit" id="btnBloodPressureSubmit"name="btnBloodPressureSubmit" class="button4" style="cursor:pointer;">Submit</button>&nbsp;&nbsp;&nbsp;
                                           
                                 </div>
                            
</form>