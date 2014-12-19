<form  method="POST" id="frmMeasurement" name="frmMeasurement">
<div class="DvFloat" style="text-align:left; font-size:14px;">

<?php
	$date_current=date('d-m-Y');
	$from_date_current=date('Y-m-d');
	$day=date('d'); $month=date('m'); $year=date('Y');
	
	if(isset($_GET['alived']))
	{
		$date_current=$_GET['alived']."-".$_GET['alivem']."-".$_GET['alivey'];
		$from_date_current =date('Y-m-d',strtotime($date_current));
		$date_current =date('d-M-Y',strtotime($date_current));
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
$j=1;$DateArray=array();$curr_wgt=array(); $current_waist=array(); $current_hips=array(); $current_arm=array();

$query = "SELECT * FROM  ".Calorie_Det." where isactive=1 and isdeleted=0 and user_id=$user_id and weight_date between '".$from_date_current."' and '".$to_date_current."' order by created_date";

//echo $query;
$result = mysql_query($query);
if($result != "") {
$rowcount = mysql_num_rows($result);
	if($rowcount > 0) {
		while($row = mysql_fetch_assoc($result)) {
			$DateArray[$j]=date('d-M-Y',strtotime($row['weight_date']));
			$curr_wgt[$DateArray[$j]]=$row['curr_wgt'];
			$curr_wgt_id[$DateArray[$j]]=$row['id'];
			$j=$j+1;
		}
	}
 } ?>
  <div class="DvFloat" style="padding:10px 0px 10px 0px; border-bottom:solid 1px #e4e4e4;text-align:left; font-size:14px;">
      <table cellpadding="0" cellspacing="0" style="width:105%;text-align:left; font-size:14px;">
        <!--<tr>
          <td class="whitebox_Td_DT" colspan="18" style="text-align:left;"><b>Current Weight</b> </td>
        </tr>-->
         <?php for($m=1;$m < 2;$m++){?>
             <tr>
                <td class="whitebox_Td_DT" colspan="18" style="text-align:left;"><b>&nbsp;</b> </td>
                 
				 <?php for($j=1;$j < 8;$j++){?>
                  <?php $DateArray[$j]=$date_current;?>
                      <input type="hidden" name="txtCWgtDay<?php echo $j?>" id="txtCWgtDay<?php echo $j?>" value="<?php echo  date('d', strtotime($date_current));?>" style="width:60px; text-align:center;"/>
                        <input type="hidden" name="txtCWgtMonth<?php echo $j?>" id="txtCWgtMonth<?php echo $j?>" value="<?php echo  date('m', strtotime($date_current));?>" style="width:60px; text-align:center;"/>
                       <input type="hidden" name="txtCWgtYear<?php echo $j?>" id="txtCWgtYear<?php echo $j?>" value="<?php echo  date('Y', strtotime($date_current));?>" style="width:60px; text-align:center;"/>
                 <td class="WhiteSpace_Td2"></td>
                  <td class="whitebox_Td_DT1"> <?php  $dayname = date('l', strtotime($date_current));echo $dayname;?><br>
                  <?php echo $date_current;?></td>
                  
                    <?php $date_current = strtotime($date_current . " +1 day");?>
                    <?php $date_current =date('d-M-Y',$date_current);?>
                 <?php } ?>
                   <!--<td class="whitebox_Td_DT"></td>
                  <td class="WhiteSpace_Td2"></td> -->
            </tr>
             <tr>
                <td class="whitebox_Td_DT" colspan="18" style="text-align:left; vertical-align: middle; padding-left: 0px;"><b>Current Weight</b> </td>
                 <?php for($j=1;$j < 8;$j++){?>
    			<td class="WhiteSpace_Td2"></td>	
              	<td class="LightGreybox_Td_DT1">
              <input type="text" id="txtCurrWgt<?php echo $j?>" name="txtCurrWgt<?php echo $j?>" value="<?php if(isset( $curr_wgt[$DateArray[$j]])){echo $curr_wgt[$DateArray[$j]];}?>" style="width:50px; text-align:center" placeholder="Kg">
           
              <input type="hidden" id="txtCurrWgtId<?php echo $j?>" name="txtCurrWgtId<?php echo $j?>" value="<?php if(isset( $curr_wgt_id[$DateArray[$j]])){echo $curr_wgt_id[$DateArray[$j]];}?>" style="width:50px; text-align:center" placeholder="">
              </td>
              
              
                <?php } ?>
                 <!--<td class="whitebox_Td_DT"></td>
                  <td class="WhiteSpace_Td2"></td> -->
            </tr>
        <?php } ?>
      </table>
    </div>
  
  <?php
	$date_current=date('d-m-Y');
	$from_date_current=date('Y-m-d');
	$day=date('d'); $month=date('m'); $year=date('Y');
	
	if(isset($_GET['alived']))
	{
		$date_current=$_GET['alived']."-".$_GET['alivem']."-".$_GET['alivey'];
		$from_date_current =date('Y-m-d',strtotime($date_current));
		$date_current =date('d-M-Y',strtotime($date_current));
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
$j=1;$DateArray=array();$curr_wgt=array(); $current_waist=array(); $current_hips=array(); $current_arm=array();

$query = "SELECT * FROM  ".Calorie_Det." where isactive=1 and isdeleted=0 and user_id=$user_id and waist_date between '".$from_date_current."' and '".$to_date_current."' order by created_date";

//echo $query;
$result = mysql_query($query);
if($result != "") {
$rowcount = mysql_num_rows($result);
	if($rowcount > 0) {
		while($row = mysql_fetch_assoc($result)) {
			$DateArray[$j]=date('d-M-Y',strtotime($row['waist_date']));
			$current_waist[$DateArray[$j]]=$row['current_waist'];
			$current_waist_id[$DateArray[$j]]=$row['id'];
			$j=$j+1;
		}
	}
 } ?>
<div class="DvFloat" style="padding:10px 0px 10px 0px; border-bottom:solid 1px #e4e4e4;text-align:left; font-size:14px;">
      <table cellpadding="0" cellspacing="0" style="width:105%;text-align:left; font-size:14px;">
        <!--<tr>
          <td class="whitebox_Td_DT" colspan="18" style="text-align:left;"><b>Current Waist</b> </td>
        </tr>-->
         <?php for($m=1;$m < 2;$m++){?>
             <tr>
                <td class="whitebox_Td_DT" colspan="18" style="text-align:left;"><b>&nbsp;</b> </td>
                 <?php for($j=1;$j < 8;$j++){?>
                  <?php $DateArray[$j]=$date_current;?>
                      <input type="hidden" name="txtCWaistDay<?php echo $j?>" id="txtCWaistDay<?php echo $j?>" value="<?php echo  date('d', strtotime($date_current));?>" style="width:60px; text-align:center;"/>
                        <input type="hidden" name="txtCWaistMonth<?php echo $j?>" id="txtCWaistMonth<?php echo $j?>" value="<?php echo  date('m', strtotime($date_current));?>" style="width:60px; text-align:center;"/>
                       <input type="hidden" name="txtCWaistYear<?php echo $j?>" id="txtCWaistYear<?php echo $j?>" value="<?php echo  date('Y', strtotime($date_current));?>" style="width:60px; text-align:center;"/>
                       <td class="WhiteSpace_Td2">&nbsp;</td>
                  <td class="whitebox_Td_DT1"> <?php  $dayname = date('l', strtotime($date_current));echo $dayname;?><br>
                  <?php echo $date_current;?></td>
                  
                    <?php $date_current = strtotime($date_current . " +1 day");?>
                    <?php $date_current =date('d-M-Y',$date_current);?>
                 <?php } ?>
                   <!--<td class="whitebox_Td_DT"></td>
                  <td class="WhiteSpace_Td2"></td> -->
            </tr>
             <tr>
               <td class="whitebox_Td_DT" colspan="18" style="text-align:left; vertical-align: middle; padding-right: 14px; padding-left: 0px;"><b>Current Waist</b> </td>
                 <?php for($j=1;$j < 8;$j++){?>
    <td class="WhiteSpace_Td2"></td>
              <td class="LightGreybox_Td_DT1">
              <input type="text" id="txtCurrWaist<?php echo $j?>" name="txtCurrWaist<?php echo $j?>" value="<?php if(isset( $current_waist[$DateArray[$j]])){echo $current_waist[$DateArray[$j]];}?>" style="width:50px; text-align:center" placeholder="CM">
           
              <input type="hidden" id="txtCurrWaistId<?php echo $j?>" name="txtCurrWaistId<?php echo $j?>" value="<?php if(isset( $current_waist_id[$DateArray[$j]])){echo $current_waist_id[$DateArray[$j]];}?>" style="width:50px; text-align:center" placeholder="">
              </td>
              
              
                <?php } ?>
                 
             <!--<td class="whitebox_Td_DT"></td>
                  <td class="WhiteSpace_Td2"></td> -->
            </tr>
        <?php } ?>
      </table>
    </div>
    
<?php
	$date_current=date('d-m-Y');
	$from_date_current=date('Y-m-d');
	$day=date('d'); $month=date('m'); $year=date('Y');
	
	if(isset($_GET['alived']))
	{
		$date_current=$_GET['alived']."-".$_GET['alivem']."-".$_GET['alivey'];
		$from_date_current =date('Y-m-d',strtotime($date_current));
		$date_current =date('d-M-Y',strtotime($date_current));
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
$j=1;$DateArray=array();$curr_wgt=array(); $current_waist=array(); $current_hips=array(); $current_arm=array();

$query = "SELECT * FROM  ".Calorie_Det." where isactive=1 and isdeleted=0 and user_id=$user_id and hips_date between '".$from_date_current."' and '".$to_date_current."' order by created_date";

//echo $query;
$result = mysql_query($query);
if($result != "") {
$rowcount = mysql_num_rows($result);
	if($rowcount > 0) {
		while($row = mysql_fetch_assoc($result)) {
			$DateArray[$j]=date('d-M-Y',strtotime($row['hips_date']));
			$current_hips[$DateArray[$j]]=$row['current_hips'];
			$current_hips_id[$DateArray[$j]]=$row['id'];
			$j=$j+1;
		}
	}
 } ?>
  <div class="DvFloat" style="padding:10px 0px 10px 0px; border-bottom:solid 1px #e4e4e4;text-align:left; font-size:14px;">
      <table cellpadding="0" cellspacing="0" style="width:105%;text-align:left; font-size:14px;">
        <!--<tr>
          <td class="whitebox_Td_DT" colspan="18" style="text-align:left;"><b>Current Hips</b> </td>
        </tr>-->
         <?php for($m=1;$m < 2;$m++){?>
             <tr>
                <td class="whitebox_Td_DT" colspan="18" style="text-align:left;"><b>&nbsp;</b> </td>
                 <?php for($j=1;$j < 8;$j++){?>
                  <?php $DateArray[$j]=$date_current;?>
                      <input type="hidden" name="txtCHipsDay<?php echo $j?>" id="txtCHipsDay<?php echo $j?>" value="<?php echo  date('d', strtotime($date_current));?>" style="width:60px; text-align:center;"/>
                        <input type="hidden" name="txtCHipsMonth<?php echo $j?>" id="txtCHipsMonth<?php echo $j?>" value="<?php echo  date('m', strtotime($date_current));?>" style="width:60px; text-align:center;"/>
                       <input type="hidden" name="txtCHipsYear<?php echo $j?>" id="txtCHipsYear<?php echo $j?>" value="<?php echo  date('Y', strtotime($date_current));?>" style="width:60px; text-align:center;"/>
                       <td class="WhiteSpace_Td2">&nbsp;</td>
                  <td class="whitebox_Td_DT1"> <?php  $dayname = date('l', strtotime($date_current));echo $dayname;?><br>
                  <?php echo $date_current;?></td>
                  
                    <?php $date_current = strtotime($date_current . " +1 day");?>
                    <?php $date_current =date('d-M-Y',$date_current);?>
                 <?php } ?>
                   <!--<td class="whitebox_Td_DT"></td>
                  <td class="WhiteSpace_Td2"></td> -->
            </tr>
             <tr>
                <td class="whitebox_Td_DT" colspan="18" style="text-align:left; vertical-align: middle; padding-right: 19px; padding-left: 0px;"><b>Current Hips</b> </td>
                 <?php for($j=1;$j < 8;$j++){?>
    			<td class="WhiteSpace_Td2"></td>
              <td class="LightGreybox_Td_DT1">
              <input type="text" id="txtCurrHips<?php echo $j?>" name="txtCurrHips<?php echo $j?>" value="<?php if(isset( $current_hips[$DateArray[$j]])){echo $current_hips[$DateArray[$j]];}?>" style="width:50px; text-align:center" placeholder="CM">
           
              <input type="hidden" id="txtCurrHipsId<?php echo $j?>" name="txtCurrHipsId<?php echo $j?>" value="<?php if(isset( $current_hips_id[$DateArray[$j]])){echo $current_hips_id[$DateArray[$j]];}?>" style="width:50px; text-align:center" placeholder="">
              </td>
              
              
                <?php } ?>
                 	
              <!--<td class="whitebox_Td_DT"></td>
                  <td class="WhiteSpace_Td2"></td> -->
            </tr>
        <?php } ?>
      </table>
    </div>  
  
<?php
	$date_current=date('d-m-Y');
	$from_date_current=date('Y-m-d');
	$day=date('d'); $month=date('m'); $year=date('Y');
	
	if(isset($_GET['alived']))
	{
		$date_current=$_GET['alived']."-".$_GET['alivem']."-".$_GET['alivey'];
		$from_date_current =date('Y-m-d',strtotime($date_current));
		$date_current =date('d-M-Y',strtotime($date_current));
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
$j=1;$DateArray=array();$curr_wgt=array(); $current_waist=array(); $current_hips=array(); $current_arm=array();

$query = "SELECT * FROM  ".Calorie_Det." where isactive=1 and isdeleted=0 and user_id=$user_id and arms_date between '".$from_date_current."' and '".$to_date_current."' order by created_date";

//echo $query;
$result = mysql_query($query);
if($result != "") {
$rowcount = mysql_num_rows($result);
	if($rowcount > 0) {
		while($row = mysql_fetch_assoc($result)) {
			$DateArray[$j]=date('d-M-Y',strtotime($row['arms_date']));
			$current_arm[$DateArray[$j]]=$row['current_arm'];
			$current_arm_id[$DateArray[$j]]=$row['id'];
			$j=$j+1;
		}
	}
 } ?>
  <div class="DvFloat" style="padding:10px 0px 10px 0px; border-bottom:solid 1px #e4e4e4;text-align:left; font-size:14px;">
      <table cellpadding="0" cellspacing="0" style="width:105%;text-align:left; font-size:14px;">
        <!--<tr>
          <td class="whitebox_Td_DT" colspan="18" style="text-align:left;"><b>Current Arms</b> </td>
        </tr>-->
         <?php for($m=1;$m < 2;$m++){?>
             <tr>
                <td class="whitebox_Td_DT" colspan="18" style="text-align:left;"><b>&nbsp;</b> </td>
                 <?php for($j=1;$j < 8;$j++){?>
                  <?php $DateArray[$j]=$date_current;?>
                      <input type="hidden" name="txtCArmsDay<?php echo $j?>" id="txtCArmsDay<?php echo $j?>" value="<?php echo  date('d', strtotime($date_current));?>" style="width:60px; text-align:center;"/>
                        <input type="hidden" name="txtCArmsMonth<?php echo $j?>" id="txtCArmsMonth<?php echo $j?>" value="<?php echo  date('m', strtotime($date_current));?>" style="width:60px; text-align:center;"/>
                       <input type="hidden" name="txtCArmsYear<?php echo $j?>" id="txtCArmsYear<?php echo $j?>" value="<?php echo  date('Y', strtotime($date_current));?>" style="width:60px; text-align:center;"/>
                       <td class="WhiteSpace_Td2"></td>
                  <td class="whitebox_Td_DT1"> <?php  $dayname = date('l', strtotime($date_current));echo $dayname;?><br>
                  <?php echo $date_current;?></td>
                  
                    <?php $date_current = strtotime($date_current . " +1 day");?>
                    <?php $date_current =date('d-M-Y',$date_current);?>
                 <?php } ?>
                   <!--<td class="whitebox_Td_DT"></td>
                  <td class="WhiteSpace_Td2"></td> -->
            </tr>
             <tr>
               <td class="whitebox_Td_DT" colspan="18" style="text-align:left; vertical-align: middle; padding-right: 15px; padding-left: 0px;"><b>Current Arms</b> </td>
                 <?php for($j=1;$j < 8;$j++){?>
    			<td class="WhiteSpace_Td2"></td>
              <td class="LightGreybox_Td_DT1">
              <input type="text" id="txtCurrArms<?php echo $j?>" name="txtCurrArms<?php echo $j?>" value="<?php if(isset( $current_arm[$DateArray[$j]])){echo $current_arm[$DateArray[$j]];}?>" style="width:50px; text-align:center" placeholder="CM">
           
              <input type="hidden" id="txtCurrArmsId<?php echo $j?>" name="txtCurrArmsId<?php echo $j?>" value="<?php if(isset( $current_arm_id[$DateArray[$j]])){echo $current_arm_id[$DateArray[$j]];}?>" style="width:50px; text-align:center" placeholder="">
              </td>
              
              
                <?php } ?>
               	
              <!--<td class="whitebox_Td_DT"></td>
                  <td class="WhiteSpace_Td2"></td> -->
            </tr>
        <?php } ?>
      </table>
    </div>
    
	<div style=" width:90px; height:30px; float:right; margin-top:20px;">
	<button type="submit" id="btnBloodPressureSubmit"name="btnBloodPressureSubmit" class="button4" style="cursor:pointer;">Submit</button>&nbsp;&nbsp;&nbsp;
</div>
</div>
</form>
