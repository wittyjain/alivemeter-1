<script type="text/javascript" src="<?php echo $strHostName?>/js/health_steup_validation.js"></script>
<script type="text/javascript" src="<?php echo $strHostName?>/js/health_steup_insert_retrive.js"></script>
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
                    <div class="formlabel1" style="padding-left:0px; padding-bottom:10px;">
                      <label class="formlabel1">
                      	 <h2 class="Tab_Title">View Blood Pressure Range</h2>
                     </label>
                    </div>
                    <div class="formcontrol2"> &nbsp; </div>
                  </div>
                  		<table cellpadding="0" cellspacing="0"  style="width:100%;float:left;">
                              <tr>
                               <td class="tbl_head" >Age</td>
                                <td class="tbl_head" >Minimum <br />(Diastolic/Systolic )</td>
                                <td class="tbl_head" >Average <br />(Diastolic/Systolic )</td>
                                <td class="tbl_head" >Maximum <br />(Diastolic/Systolic )</td>
                                <td class="tbl_head" style="text-align:center; padding-left:0px;">Actions</td>
                              </tr>
                               <?php $retrive_Array=$get_retrive->GetBlood_Pressure_Range()  ?>
                              <?php  while($get_array = mysql_fetch_array( $retrive_Array )){?>
                              <tr id="tr_bp_<?php echo $get_array['id']*121?>">
                                <td class="tdborder" style="padding-left:20px;"><?php echo $get_array['min_age']?> - <?php echo $get_array['max_age']?></td>
                                <td class="tdborder" style="padding-left:20px;"><?php echo $get_array['dia_min']?>/<?php echo $get_array['sys_min']?></td>
                                <td class="tdborder" style="padding-left:20px;"><?php echo $get_array['dia_ave']?>/<?php echo $get_array['sys_ave']?></td>
                                <td class="tdborder" style="padding-left:20px;"><?php echo $get_array['dia_max']?>/<?php echo $get_array['sys_max']?></td>
                                <td class="tdborder" style="padding-left:10px;">
                                <table cellpadding="0" cellspacing="0"  style="width:100%" >
                                    <tr>
                                      <td class="SubTd1" style="padding-left:0px;"><a href="<?php echo $strHostName;?>/page.php?dir=master/blood_pressure/add&cid=<?php echo $converter->encode($get_array['id'])?>" style="cursor:pointer;"><img src="images/register_steps/edit_icon.jpg" alt=""></a></td>
                                      
                                      <td class="SubTd2"><a  style="cursor:pointer;" onclick="javascript:BP_Delete_By_Id('<?php echo $converter->encode($get_array['id'])?>','<?php echo $get_array['id']*121?>')"><img src="images/register_steps/delete_icon.jpg" alt=""></a></td>
                                    </tr>
                                  </table></td>
                        
                              </tr>
                              <?php  } ?>
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
</div></div>
</section>

