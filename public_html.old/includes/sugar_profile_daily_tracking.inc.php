<form  method="POST" id="frmFastingBlood" name="frmFastingBlood">
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
$j=1;$DateArray=array();$fasting_blood_sugar_result=array(); $post_parandial_result=array(); $urine_blood_result=array(); $random_blood_sugar_unit=array();

$query = "SELECT * FROM  ".Sugar_Profile." where isactive=1 and isdeleted=0 and user_id=$user_id and fasting_blood_sugar_date between '".$from_date_current."' and '".$to_date_current."' order by created_date";

//echo $query;
$result = mysql_query($query);
if($result != "") {
$rowcount = mysql_num_rows($result);
	if($rowcount > 0) {
		while($row = mysql_fetch_assoc($result)) {
			$DateArray[$j]=date('d-M-Y',strtotime($row['fasting_blood_sugar_date']));
			$fasting_blood_sugar_result[$DateArray[$j]]=$row['fasting_blood_sugar_result'];
			$fasting_blood_sugar_id[$DateArray[$j]]=$row['sugar_profile_id'];
			$j=$j+1;
		}
	}
 } ?>

    <div class="DvFloat" style="padding:10px 0px 10px 0px; border-bottom:solid 1px #e4e4e4;text-align:left; font-size:14px;">
      <table cellpadding="0" cellspacing="0" style="width:105%;text-align:left; font-size:14px;">
        <tr>
          <td class="whitebox_Td_DT" colspan="18" style="text-align:left; display: none;"><b>Fasting Blood Sugar </b> </td>
        </tr>
         <?php for($m=1;$m < 2;$m++){?>
             <tr>
                 <td class="whitebox_Td_DT" style="padding-left: 0px; vertical-align: middle; width: 13%;"><b>Fasting Blood Sugar </b></td>
                  <td class="WhiteSpace_Td2"></td>
                 <?php for($j=1;$j < 8;$j++){?>
                  <?php $DateArray[$j]=$date_current;?>
                      <input type="hidden" name="txtFBDay<?php echo $j?>" id="txtFBDay<?php echo $j?>" value="<?php echo  date('d', strtotime($date_current));?>" style="width:60px; text-align:center;"/>
                        <input type="hidden" name="txtFBMonth<?php echo $j?>" id="txtFBMonth<?php echo $j?>" value="<?php echo  date('m', strtotime($date_current));?>" style="width:60px; text-align:center;"/>
                       <input type="hidden" name="txtFBYear<?php echo $j?>" id="txtFBYear<?php echo $j?>" value="<?php echo  date('Y', strtotime($date_current));?>" style="width:60px; text-align:center;"/>
                  <td class="WhiteSpace_Td2"></td>
                  <td class="whitebox_Td_DT1"> <?php  $dayname = date('l', strtotime($date_current));echo $dayname;?><br>
                  <?php echo $date_current;?></td>
                  
                    <?php $date_current = strtotime($date_current . " +1 day");?>
                    <?php $date_current =date('d-M-Y',$date_current);?>
                 <?php } ?>
                   <!--<td class="whitebox_Td_DT">&nbsp;</td>
                  <td class="WhiteSpace_Td2"></td>-->
            </tr>
             <tr>
                 <td class="whitebox_Td_DT" style="padding-left: 0px;"><input type="text" value="" id="txtCurrent_Waist1" name="txtCurrent_Waist1" placeholder="Results" style="width:50px; text-align:center" readonly="readonly"> </td>
          <td class="WhiteSpace_Td2"></td>
                 <?php for($j=1;$j < 8;$j++){?>
    <td class="WhiteSpace_Td2"></td>
              <td class="LightGreybox_Td_DT1">
              <input type="text" id="txtFasting_Blood_Sugar<?php echo $j?>" name="txtFasting_Blood_Sugar<?php echo $j?>" value="<?php if(isset( $fasting_blood_sugar_result[$DateArray[$j]])){echo $fasting_blood_sugar_result[$DateArray[$j]];}?>" style="width:50px; text-align:center" placeholder="mg/dl">
           
              <input type="hidden" id="txtFasting_Blood_SugarId<?php echo $j?>" name="txtFasting_Blood_SugarId<?php echo $j?>" value="<?php if(isset( $fasting_blood_sugar_id[$DateArray[$j]])){echo $fasting_blood_sugar_id[$DateArray[$j]];}?>" style="width:50px; text-align:center" placeholder="">
              </td>
              
              
                <?php } ?>
                  <td class="LightGreybox_Td_DT"><input type="text" value="" id="txtFasting_Blood_Sugar<?php echo $j?>" name="txtFasting_Blood_Sugar<?php echo $j?>"  disabled style="width:50px; text-align:center; display:none;" placeholder="mg/dl" readonly="readonly"></td>	
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
	    $day=$_GET['alived']; $month=$_GET['alivem']; $year=$_GET['alivey'];
	}
	
	$to_date_current = strtotime($date_current . " +6 day");
	$to_date_current =date('Y-m-d',$to_date_current);

	 $query = "SELECT * FROM  ".Sugar_Profile." where isactive=1 and isdeleted=0 and user_id=$user_id and post_parandial_date between '".$from_date_current."' and '".$to_date_current."' order by created_date";
$j=1;
//echo $query;
$result = mysql_query($query);
if($result != "") {
$rowcount = mysql_num_rows($result);
	if($rowcount > 0) {
		while($row = mysql_fetch_assoc($result)) {
			$DateArray[$j]=date('d-M-Y',strtotime($row['post_parandial_date']));
			$post_parandial_result[$DateArray[$j]]=$row['post_parandial_result'];
			$post_parandial_id[$DateArray[$j]]=$row['sugar_profile_id'];
			
			$j=$j+1;
		}
	}
 }
?>	



<div class="DvFloat" style="padding:10px 0px 10px 0px; border-bottom:solid 1px #e4e4e4; text-align:left; font-size:14px;">
  <table cellpadding="0" cellspacing="0" style="width:105%; text-align: left; font-size: 14px;">
    <tr>
      <td class="whitebox_Td_DT" colspan="18" style="text-align:left; display: none;"><b>PPBS </b> </td>
    </tr>
    <?php for($m=1;$m < 2;$m++){?>
		 <tr>
             <td class="whitebox_Td_DT" style="padding-left: 0px; vertical-align: middle; width: 13%;"><b>PPBS</b></td>
      		  <td class="WhiteSpace_Td2"></td>
			 <?php for($j=1;$j < 8;$j++){?>
              <?php $DateArray[$j]=$date_current;?>
              <input type="hidden" name="txtPBBSDay<?php echo $j?>" id="txtPBBSDay<?php echo $j?>" value="<?php echo  date('d', strtotime($date_current));?>" style="width:60px; text-align:center;"/>
                    <input type="hidden" name="txtPBBSMonth<?php echo $j?>" id="txtPBBSMonth<?php echo $j?>" value="<?php echo  date('m', strtotime($date_current));?>" style="width:60px; text-align:center;"/>
                   <input type="hidden" name="txtPBBSYear<?php echo $j?>" id="txtPBBSYear<?php echo $j?>" value="<?php echo  date('Y', strtotime($date_current));?>" style="width:60px; text-align:center;"/>
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
             <td class="whitebox_Td_DT" style="padding-left: 0px;"><input type="text" value="" id="txtCurrent_Waist1" name="txtCurrent_Waist1" placeholder="Results" style="width:50px; text-align:center" readonly="readonly"></td>
      <td class="WhiteSpace_Td2"></td>
			 <?php for($j=1;$j < 8;$j++){?>
			<td class="WhiteSpace_Td2"></td>
          <td class="LightGreybox_Td_DT1"><input type="text" id="txtPPBS<?php echo $j?>" name="txtPPBS<?php echo $j?>" value="<?php if(isset( $post_parandial_result[$DateArray[$j]])){echo $post_parandial_result[$DateArray[$j]];}?>" style="width:50px; text-align:center" placeholder="mg/dl">
           <input type="hidden" id="txtPPBSId<?php echo $j?>" name="txtPPBSId<?php echo $j?>" value="<?php if(isset( $post_parandial_id[$DateArray[$j]])){echo $post_parandial_id[$DateArray[$j]];}?>" style="width:50px; text-align:center" placeholder="">
          </td>
          
          
          
            <?php } ?>
              <td class="LightGreybox_Td_DT"><input type="text" value="" id="txtPPBS<?php echo $j?>" name="txtPPBS<?php echo $j?>"  disabled style="width:50px; text-align:center; display:none;" placeholder="mg/dl"></td>	
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
		$day=$_GET['alived']; $month=$_GET['alivem']; $year=$_GET['alivey'];
	}
	
	$to_date_current = strtotime($date_current . " +6 day");
	$to_date_current =date('Y-m-d',$to_date_current);
	
	
$query = "SELECT * FROM  ".Sugar_Profile." where isactive=1 and isdeleted=0 and user_id=$user_id and urine_blood_date between '".$from_date_current."' and '".$to_date_current."' order by created_date";
$j=1;
//echo $query;
$result = mysql_query($query);
if($result != "") {
$rowcount = mysql_num_rows($result);
	if($rowcount > 0) {
		while($row = mysql_fetch_assoc($result)) {
			$DateArray[$j]=date('d-M-Y',strtotime($row['urine_blood_date']));
			$urine_blood_result[$DateArray[$j]]=$row['urine_blood_result'];
			$urine_blood_id[$DateArray[$j]]=$row['sugar_profile_id'];
			
			$j=$j+1;
		}
	}
 }
	 
?>	
<div class="DvFloat" style="padding:10px 0px 10px 0px; border-bottom:solid 1px #e4e4e4;text-align:left; font-size:14px;">
  <table cellpadding="0" cellspacing="0" style="width:105%;">
    <tr>
      <td class="whitebox_Td_DT" colspan="18" style="text-align:left; display: none; "><b> Urine Blood Sugar </b></td>
    </tr>
   <?php for($m=1;$m < 2;$m++){?>
		 <tr>
             <td class="whitebox_Td_DT" style="padding-left: 0px; vertical-align: middle; width: 13%;">Urine Blood Sugar </b></td>
      		  <td class="WhiteSpace_Td2"></td>
			 <?php for($j=1;$j < 8;$j++){?>
              <?php $DateArray[$j]=$date_current;?>
               <input type="hidden" name="txtUBDay<?php echo $j?>" id="txtUBDay<?php echo $j?>" value="<?php echo  date('d', strtotime($date_current));?>" style="width:60px; text-align:center;"/>
                    <input type="hidden" name="txtUBMonth<?php echo $j?>" id="txtUBMonth<?php echo $j?>" value="<?php echo  date('m', strtotime($date_current));?>" style="width:60px; text-align:center;"/>
                   <input type="hidden" name="txtUBYear<?php echo $j?>" id="txtUBYear<?php echo $j?>" value="<?php echo  date('Y', strtotime($date_current));?>" style="width:60px; text-align:center;"/>
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
             <td class="whitebox_Td_DT" style="padding-left: 0px;"><input type="text" value="" id="txtCurrent_Waist1" name="txtCurrent_Waist1" placeholder="Results" style="width:50px; text-align:center" readonly="readonly"></td>
      <td class="WhiteSpace_Td2"></td>
			 <?php for($j=1;$j < 8;$j++){?>
			<td class="WhiteSpace_Td2"></td>
          <td class="LightGreybox_Td_DT1">
          <input type="text" id="txtUB<?php echo $j?>" name="txtUB<?php echo $j?>" value="<?php if(isset( $urine_blood_result[$DateArray[$j]])){echo $urine_blood_result[$DateArray[$j]];}?>" style="width:50px; text-align:center" placeholder="mg/dl">
            <input type="hidden" id="txtUBId<?php echo $j?>" name="txtUBId<?php echo $j?>" value="<?php if(isset( $urine_blood_id[$DateArray[$j]])){echo $urine_blood_id[$DateArray[$j]];}?>" style="width:50px; text-align:center;" placeholder="">
          </td>
          
          
            <?php } ?>
              <td class="LightGreybox_Td_DT"><input type="text" value="" id="txtUB<?php echo $j?>" name="txtUB<?php echo $j?>"  disabled style="width:50px; text-align:center; display:none;" placeholder="mg/dl"></td>	
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
		$day=$_GET['alived']; $month=$_GET['alivem']; $year=$_GET['alivey'];
	}
	
	$to_date_current = strtotime($date_current . " +6 day");
	$to_date_current =date('Y-m-d',$to_date_current);
	
	
$query = "SELECT * FROM  ".Sugar_Profile." where isactive=1 and isdeleted=0 and user_id=$user_id and random_blood_sugar_date between '".$from_date_current."' and '".$to_date_current."' order by created_date";
$j=1;
//echo $query;
$result = mysql_query($query);
if($result != "") {
$rowcount = mysql_num_rows($result);
	if($rowcount > 0) {
		while($row = mysql_fetch_assoc($result)) {
			$DateArray[$j]=date('d-M-Y',strtotime($row['random_blood_sugar_date']));
			$random_blood_sugar_result[$DateArray[$j]]=$row['random_blood_sugar_result'];
			$random_blood_sugar_id[$DateArray[$j]]=$row['sugar_profile_id'];
			
			$j=$j+1;
		}
	}
 } 
?>	

<div class="DvFloat" style="padding:10px 0px 10px 0px; border-bottom:solid 1px #e4e4e4;text-align:left; font-size:14px;">
  <table cellpadding="0" cellspacing="0" style="width:105%;">
    <tr>
      <td class="whitebox_Td_DT" colspan="18" style="text-align:left; display: none; "><b>Random Blood Sugar </b> </td>
    </tr>
   <?php for($m=1;$m < 2;$m++){?>
		 <tr>
             <td class="whitebox_Td_DT" style="padding-left: 0px; vertical-align: middle; width: 13%;">Random Blood Sugar</td>
      		  <td class="WhiteSpace_Td2"></td>
			 <?php for($j=1;$j < 8;$j++){?>
              <?php $DateArray[$j]=$date_current;?>
              <input type="hidden" name="txtRBSDay<?php echo $j?>" id="txtRBSDay<?php echo $j?>" value="<?php echo  date('d', strtotime($date_current));?>" style="width:60px; text-align:center;"/>
                    <input type="hidden" name="txtRBSMonth<?php echo $j?>" id="txtRBSMonth<?php echo $j?>" value="<?php echo  date('m', strtotime($date_current));?>" style="width:60px; text-align:center;"/>
                   <input type="hidden" name="txtRBSYear<?php echo $j?>" id="txtRBSYear<?php echo $j?>" value="<?php echo  date('Y', strtotime($date_current));?>" style="width:60px; text-align:center;"/>
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
             <td class="whitebox_Td_DT" style="padding-left: 0px;"><input type="text" value="" id="txtCurrent_Waist1" name="txtCurrent_Waist1" placeholder="Results" style="width:50px; text-align:center" readonly="readonly"></td>
      <td class="WhiteSpace_Td2"></td>
			 <?php for($j=1;$j < 8;$j++){?>
			<td class="WhiteSpace_Td2"></td>
          <td class="LightGreybox_Td_DT1"><input type="text" id="txtRandom_Blood_Sugar<?php echo $j?>" name="txtRandom_Blood_Sugar<?php echo $j?>" value="<?php if(isset( $random_blood_sugar_result[$DateArray[$j]])){echo $random_blood_sugar_result[$DateArray[$j]];}?>" style="width:50px; text-align:center" placeholder="mg/dl">
          <input type="hidden" id="txtRandom_Blood_SugarId<?php echo $j?>" name="txtRandom_Blood_SugarId<?php echo $j?>" value="<?php if(isset( $random_blood_sugar_id[$DateArray[$j]])){echo $random_blood_sugar_id[$DateArray[$j]];}?>" style="width:50px; text-align:center;" placeholder="">
          </td>
           
           
          
          
            <?php } ?>
              <td class="LightGreybox_Td_DT"><input type="text" value="" id="txtRandom_Blood_Sugar<?php echo $j?>" name="txtRandom_Blood_Sugar<?php echo $j?>"  disabled style="width:50px; text-align:center; display:none;" placeholder="mg/dl"></td>	
          <!--<td class="WhiteSpace_Td2"></td>-->
        </tr>
    <?php } ?>
  </table>
</div>
<div style=" width:90px; height:30px; float:right; margin-top:20px;">
	<button type="submit" id="btnBloodPressureSubmit" name="btnBloodPressureSubmit" class="button4" style="cursor:pointer;">Submit</button>&nbsp;&nbsp;&nbsp;
</div>
                            </div>

</form>
