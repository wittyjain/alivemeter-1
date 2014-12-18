<form  method="POST" id="frmLifeStyle" name="frmLifeStyle">
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

$query = "SELECT * FROM  ".Life_Style." where isactive=1 and isdeleted=0 and user_id=$user_id and life_style_date between '".$from_date_current."' and '".$to_date_current."' order by created_date";

//echo $query;
$j=1;$DateArray=array();$spirit=array(); $beer=array(); $cigarette=array(); $life_style_sleep=array();

$result = mysql_query($query);
if($result != "") {
$rowcount = mysql_num_rows($result);
	if($rowcount > 0) {
		while($row = mysql_fetch_assoc($result)) {
			$DateArray[$j]=date('d-M-Y',strtotime($row['life_style_date']));
			$spirit[$DateArray[$j]]=$row['spirit'];
			$beer[$DateArray[$j]]=$row['beer'];
			$cigarette[$DateArray[$j]]=$row['cigarette'];
			$life_style_sleep[$DateArray[$j]]=$row['life_style_sleep'];
			$life_style_id[$DateArray[$j]]=$row['life_style_id'];
			$j=$j+1;
		}
	}
 } ?>
<div class="DvFloat" style="padding:10px 0px 10px 0px; border-bottom:solid 1px #e4e4e4;text-align:left; font-size:14px;">
      <table cellpadding="0" cellspacing="0" style="width:105%;text-align:left; font-size:14px;">
    <!--<tr>
      <td class="whitebox_Td_DT" colspan="18" style="text-align:left;"><b>Spirit</b> </td>
    </tr>-->
     <?php for($m=1;$m < 2;$m++){?>
		 <tr>
             <td class="whitebox_Td_DT" colspan="18" style="text-align:left; vertical-align: middle;"><b>&nbsp;</b> </td>
			 <?php for($j=1;$j < 8;$j++){?>
              <?php $DateArray[$j]=$date_current;?>
                <input type="hidden" name="txtLife_Style_Day<?php echo $j?>" id="txtLife_Style_Day<?php echo $j?>" value="<?php echo  date('d', strtotime($date_current));?>" style="width:60px; text-align:center;"/>
                        <input type="hidden" name="txtLife_Style_Month<?php echo $j?>" id="txtLife_Style_Month<?php echo $j?>" value="<?php echo  date('m', strtotime($date_current));?>" style="width:60px; text-align:center;"/>
                       <input type="hidden" name="txtLife_Style_Year<?php echo $j?>" id="txtLife_Style_Year<?php echo $j?>" value="<?php echo  date('Y', strtotime($date_current));?>" style="width:60px; text-align:center;"/>
               <td class="WhiteSpace_Td2"></td>        
              <td class="whitebox_Td_DT1"> <?php  $dayname = date('l', strtotime($date_current));echo $dayname;?><br>
              <?php echo $date_current;?></td>
              	
                <?php $date_current = strtotime($date_current . " +1 day");?>
                <?php $date_current =date('d-M-Y',$date_current);?>
             <?php } ?>
               <!--<td class="whitebox_Td_DT"></td>
              <td class="WhiteSpace_Td2"></td>-->
        </tr>
         <tr>
             <td class="whitebox_Td_DT" colspan="18" style="text-align:left; vertical-align: middle; width: 12%; padding-left: 0px;"><b>Spirit</b></td>
			 <?php for($j=1;$j < 8;$j++){?>
			<td class="WhiteSpace_Td2"></td>
          <td class="LightGreybox_Td_DT1">	
          	<input type="text" id="txtSpirit<?php echo $j?>" name="txtSpirit<?php echo $j?>" value="<?php if(isset( $spirit[$DateArray[$j]])){echo $spirit[$DateArray[$j]];}?>" style="width:50px; text-align:center" placeholder="ml">
             
             <input type="hidden" id="txtSpiritID<?php echo $j?>" name="txtSpiritID<?php echo $j?>" value="<?php if(isset( $life_style_id[$DateArray[$j]])){echo $life_style_id[$DateArray[$j]];}?>" style="width:50px; text-align:center" placeholder="">
             
          </td>
          
          
            <?php } ?>
              <td class="LightGreybox_Td_DT"><input type="text" value="" id="txtSpirit<?php echo $j?>" name="txtSpirit<?php echo $j?>"  disabled style="width:50px; text-align:center; display:none;" placeholder=""></td>	
         <!-- <td class="WhiteSpace_Td2"></td>-->
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



<div class="DvFloat" style="padding:10px 0px 10px 0px; border-bottom:solid 1px #e4e4e4;text-align:left; font-size:14px;">
      <table cellpadding="0" cellspacing="0" style="width:105%;text-align:left; font-size:14px;">
    <!--<tr>
      <td class="whitebox_Td_DT" colspan="18" style="text-align:left; "><b>Beer </b> </td>
    </tr>-->
    <?php for($m=1;$m < 2;$m++){?>
    	
		 <tr>
             <td class="whitebox_Td_DT" colspan="18" style="text-align:left; vertical-align: middle; width: 12%; padding-left: 0px;"><b>&nbsp;</b> </td>
			 <?php for($j=1;$j < 8;$j++){?>
              <?php $DateArray[$j]=$date_current;?>
               <input type="hidden" name="txtLife_Style_Day<?php echo $j?>" id="txtLife_Style_Day<?php echo $j?>" value="<?php echo  date('d', strtotime($date_current));?>" style="width:60px; text-align:center;"/>
                        <input type="hidden" name="txtLife_Style_Month<?php echo $j?>" id="txtLife_Style_Month<?php echo $j?>" value="<?php echo  date('m', strtotime($date_current));?>" style="width:60px; text-align:center;"/>
                       <input type="hidden" name="txtLife_Style_Year<?php echo $j?>" id="txtLife_Style_Year<?php echo $j?>" value="<?php echo  date('Y', strtotime($date_current));?>" style="width:60px; text-align:center;"/>
              <td class="WhiteSpace_Td2"></td>
              <td class="whitebox_Td_DT1"> <?php  $dayname = date('l', strtotime($date_current));echo $dayname;?><br>
              <?php echo $date_current;?></td>
              
                <?php $date_current = strtotime($date_current . " +1 day");?>
                <?php $date_current =date('d-M-Y',$date_current);?>
             <?php } ?>
               <!--<td class="whitebox_Td_DT"></td>
              <td class="WhiteSpace_Td2"></td>-->
        </tr>
         <tr>
             <td class="whitebox_Td_DT" colspan="18" style="text-align:left; vertical-align: middle;"><b>Beer </b> </td>
			 <?php for($j=1;$j < 8;$j++){?>
			<td class="WhiteSpace_Td2"></td>
          <td class="LightGreybox_Td_DT1"><input type="text" id="txtBeer<?php echo $j?>" name="txtBeer<?php echo $j?>" value="<?php if(isset( $beer[$DateArray[$j]])){echo $beer[$DateArray[$j]];}?>" style="width:50px; text-align:center" placeholder="glasses">
          <input type="hidden" id="txtBeerID<?php echo $j?>" name="txtBeerID<?php echo $j?>" value="<?php if(isset( $life_style_id[$DateArray[$j]])){echo $life_style_id[$DateArray[$j]];}?>" style="width:50px; text-align:center" placeholder="">
             
          </td>
          
          
            <?php } ?>
              <td class="LightGreybox_Td_DT"><input type="text" value="" id="txtBeer<?php echo $j?>" name="txtBeer<?php echo $j?>"  disabled style="width:50px; text-align:center; display:none;" placeholder="glasses"></td>	
          <!--<td class="WhiteSpace_Td2"></td>-->
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
		$day=date('d'); $month=date('m'); $year=date('Y');
	}
	
	$to_date_current = strtotime($date_current . " +6 day");
	$to_date_current =date('Y-m-d',$to_date_current);

	 
?>	
<div class="DvFloat" style="padding:10px 0px 10px 0px; border-bottom:solid 1px #e4e4e4;text-align:left; font-size:14px;">
      <table cellpadding="0" cellspacing="0" style="width:105%;text-align:left; font-size:14px;">
    <!--<tr>
      <td class="whitebox_Td_DT" colspan="18" style="text-align:left; "><b>Cigarette</b> </td>
    </tr>-->
   <?php for($m=1;$m < 2;$m++){?>
		 <tr>
             	<td class="whitebox_Td_DT" colspan="18" style="text-align:left; "><b>&nbsp;</b> </td>
			 <?php for($j=1;$j < 8;$j++){?>
              <?php $DateArray[$j]=$date_current;?>
               <input type="hidden" name="txtLife_Style_Day<?php echo $j?>" id="txtLife_Style_Day<?php echo $j?>" value="<?php echo  date('d', strtotime($date_current));?>" style="width:60px; text-align:center;"/>
                        <input type="hidden" name="txtLife_Style_Month<?php echo $j?>" id="txtLife_Style_Month<?php echo $j?>" value="<?php echo  date('m', strtotime($date_current));?>" style="width:60px; text-align:center;"/>
                       <input type="hidden" name="txtLife_Style_Year<?php echo $j?>" id="txtLife_Style_Year<?php echo $j?>" value="<?php echo  date('Y', strtotime($date_current));?>" style="width:60px; text-align:center;"/>
              <td class="WhiteSpace_Td2"></td>
              <td class="whitebox_Td_DT1"> <?php  $dayname = date('l', strtotime($date_current));echo $dayname;?><br>
              <?php echo $date_current;?></td>
              
                <?php $date_current = strtotime($date_current . " +1 day");?>
                <?php $date_current =date('d-M-Y',$date_current);?>
             <?php } ?>
               <!--<td class="whitebox_Td_DT"></td>
              <td class="WhiteSpace_Td2"></td>-->
        </tr>
         <tr>
             <td class="whitebox_Td_DT" colspan="18" style="text-align:left; vertical-align: middle; width: 12%; padding-left: 0px;"><b>Cigarette</b> </td>
			 <?php for($j=1;$j < 8;$j++){?>
			<td class="WhiteSpace_Td2"></td>
          <td class="LightGreybox_Td_DT1"><input type="text" id="txtCigarette<?php echo $j?>" name="txtCigarette<?php echo $j?>" value="<?php if(isset( $cigarette[$DateArray[$j]])){echo $cigarette[$DateArray[$j]];}?>" style="width:50px; text-align:center" placeholder="daily">
          
          <input type="hidden" id="txtCigaretteID<?php echo $j?>" name="txtCigaretteID<?php echo $j?>" value="<?php if(isset( $life_style_id[$DateArray[$j]])){echo $life_style_id[$DateArray[$j]];}?>" style="width:50px; text-align:center" placeholder="daily">
          </td>
          
          
            <?php } ?>
              <td class="LightGreybox_Td_DT"><input type="text" value="" id="txtCigarette<?php echo $j?>" name="txtCigarette<?php echo $j?>"  disabled style="width:50px; text-align:center; display:none;" placeholder="daily"></td>	
         <!-- <td class="WhiteSpace_Td2"></td>-->
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
		$day=date('d'); $month=date('m'); $year=date('Y');
	}
	
	$to_date_current = strtotime($date_current . " +6 day");
	$to_date_current =date('Y-m-d',$to_date_current);

	 
?>	

<div class="DvFloat" style="padding:10px 0px 10px 0px; border-bottom:solid 1px #e4e4e4;text-align:left; font-size:14px;">
      <table cellpadding="0" cellspacing="0" style="width:105%;text-align:left; font-size:14px;">
    <!--<tr>
      <td class="whitebox_Td_DT" colspan="18" style="text-align:left; "><b>Sleep</b> </td>
    </tr>-->
   <?php for($m=1;$m < 2;$m++){?>
		 <tr>
             <td class="whitebox_Td_DT" colspan="18" style="text-align:left; vertical-align: middle;"><b>&nbsp; </b> </td>
			 <?php for($j=1;$j < 8;$j++){?>
              <?php $DateArray[$j]=$date_current;?>
               <input type="hidden" name="txtLife_Style_Day<?php echo $j?>" id="txtLife_Style_Day<?php echo $j?>" value="<?php echo  date('d', strtotime($date_current));?>" style="width:60px; text-align:center;"/>
                        <input type="hidden" name="txtLife_Style_Month<?php echo $j?>" id="txtLife_Style_Month<?php echo $j?>" value="<?php echo  date('m', strtotime($date_current));?>" style="width:60px; text-align:center;"/>
                       <input type="hidden" name="txtLife_Style_Year<?php echo $j?>" id="txtLife_Style_Year<?php echo $j?>" value="<?php echo  date('Y', strtotime($date_current));?>" style="width:60px; text-align:center;"/>
                       <td class="WhiteSpace_Td2"></td>
              <td class="whitebox_Td_DT1"> <?php  $dayname = date('l', strtotime($date_current));echo $dayname;?><br>
              <?php echo $date_current;?></td>
              
                <?php $date_current = strtotime($date_current . " +1 day");?>
                <?php $date_current =date('d-M-Y',$date_current);?>
             <?php } ?>
               <!--<td class="whitebox_Td_DT"></td>
              <td class="WhiteSpace_Td2"></td>-->
        </tr>
         <tr>
             <td class="whitebox_Td_DT" colspan="18" style="text-align:left; vertical-align: middle; width: 12%; padding-left: 0px;"><b>Sleep </b> </td>
			 <?php for($j=1;$j < 8;$j++){?>
			<td class="WhiteSpace_Td2"></td>
          <td class="LightGreybox_Td_DT1"><input type="text" id="txtSleep<?php echo $j?>" name="txtSleep<?php echo $j?>" value="<?php if(isset( $life_style_sleep[$DateArray[$j]])){echo $life_style_sleep[$DateArray[$j]];}?>" style="width:50px; text-align:center" placeholder="hh:mm">
          <input type="hidden" id="txtSleepID<?php echo $j?>" name="txtSleepID<?php echo $j?>" value="<?php if(isset( $life_style_id[$DateArray[$j]])){echo $life_style_id[$DateArray[$j]];}?>" style="width:50px; text-align:center" placeholder="hh:mm">
          
          </td>
          
          
            <?php } ?>
              <td class="LightGreybox_Td_DT"><input type="text" value="" id="txtSleep<?php echo $j?>" name="txtSleep<?php echo $j?>"  disabled style="width:50px; text-align:center; display:none;" placeholder="hh:mm"></td>	
          <!--<td class="WhiteSpace_Td2"></td>-->
        </tr>
    <?php } ?>
  </table>
</div>
<div style=" width:90px; height:30px; float:right; margin-top:20px;">
	<button type="submit" id="btnBloodPressureSubmit"name="btnBloodPressureSubmit" class="button4" style="cursor:pointer;">Submit</button>&nbsp;&nbsp;&nbsp;
</div>
      
</form>