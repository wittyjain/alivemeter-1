<form  method="POST" id="frmWater" name="frmWater">
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
$j=1;$DateArray=array();

$query = "SELECT * FROM  tbl_daily_water where user_id=$user_id and date between '".$from_date_current."' and '".$to_date_current."' order by date";

///echo $query;
$result = mysql_query($query);
if($result != "") {
$rowcount = mysql_num_rows($result);
	if($rowcount > 0) {
		while($row = mysql_fetch_assoc($result)) {
			$DateArray[$j]=date('d-M-Y',strtotime($row['date']));
			$water[$DateArray[$j]]=$row['no_of_glass'];
			$water_id[$DateArray[$j]]=$row['id'];
			$j=$j+1;
		}
	}
 } ?>
  <div class="DvFloat" style="padding:10px 0px 10px 0px; border-bottom:solid 1px #e4e4e4;text-align:left; font-size:14px;">
      <table cellpadding="0" cellspacing="0" style="width:105%;text-align:left; font-size:14px;">
      
         <?php for($m=1;$m < 2;$m++){?>
             <tr>
                <td class="whitebox_Td_DT" colspan="18" style="text-align:left; width: 12%;"><b>&nbsp;</b> </td>
                 <?php for($j=1;$j < 8;$j++){?>
                 <td class="WhiteSpace_Td2"></td>
                  <?php $DateArray[$j]=$date_current;?>
                      <input type="hidden" name="txtCWgtDay<?php echo $j?>" id="txtCWgtDay<?php echo $j?>" value="<?php echo  date('d', strtotime($date_current));?>" style="width:60px; text-align:center;"/>
                        <input type="hidden" name="txtCWgtMonth<?php echo $j?>" id="txtCWgtMonth<?php echo $j?>" value="<?php echo  date('m', strtotime($date_current));?>" style="width:60px; text-align:center;"/>
                       <input type="hidden" name="txtCWgtYear<?php echo $j?>" id="txtCWgtYear<?php echo $j?>" value="<?php echo  date('Y', strtotime($date_current));?>" style="width:60px; text-align:center;"/>
                  <td class="whitebox_Td_DT1"> <?php  $dayname = date('l', strtotime($date_current));echo $dayname;?><br>
                  <?php echo $date_current;?></td>
                  
                    <?php $date_current = strtotime($date_current . " +1 day");?>
                    <?php $date_current =date('d-M-Y',$date_current);?>
                 <?php } ?>
                   <!--<td class="whitebox_Td_DT"></td>
                  <td class="WhiteSpace_Td2"></td>-->
            </tr>
             <tr>
             	<td class="whitebox_Td_DT" colspan="18" style="text-align:left; vertical-align: middle; padding-left: 0px;"><b>Water Consumption</b>&nbsp;&nbsp;&nbsp;&nbsp; </td>
                 <?php for($j=1;$j < 8;$j++){?>
    <td class="WhiteSpace_Td2"></td>
              <td class="LightGreybox_Td_DT1">
              <input type="text" id="txtWater<?php echo $j?>" name="txtWater<?php echo $j?>" value="<?php if(isset( $water[$DateArray[$j]])){echo $water[$DateArray[$j]];}?>" style="width:50px; text-align:center" placeholder="Glass">
           
              <input type="hidden" id="txtWaterId<?php echo $j?>" name="txtWaterId<?php echo $j?>" value="<?php if(isset( $water_id[$DateArray[$j]])){echo $water_id[$DateArray[$j]];}?>" style="width:50px; text-align:center" placeholder="">
              </td>
              
              
                <?php } ?>
                 
              <!--<td class="whitebox_Td_DT"></td>
                  <td class="WhiteSpace_Td2"></td>-->
            </tr>
        <?php } ?>
      </table>
    </div>



  
    
	<div style=" width:90px; height:30px; float:right; margin-top:20px;">
	<button type="submit" id="btnBloodPressureSubmit"name="btnBloodPressureSubmit" class="button4" style="cursor:pointer;">Submit</button>&nbsp;&nbsp;&nbsp;
</div>
</div>
</form>
