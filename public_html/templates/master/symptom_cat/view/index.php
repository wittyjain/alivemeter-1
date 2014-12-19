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
                      	 <h2 class="Tab_Title">View Symptom Category</h2>
                     </label>
                    </div>
                    <div class="formcontrol2"> &nbsp; </div>
                  </div>
                  		<table cellpadding="0" cellspacing	="0"  style="width:100%;float:left;" >
                              <tr>
                                <td class="tbl_head" style="width:80%;">Title </td>
                                <td class="tbl_head" style="text-align:center; padding-left:0px;">Actions</td>
                              </tr>
                               <?php $retrive_Array=$get_retrive->GetSymptomCat()  ?>
                              <?php  while($get_array = mysql_fetch_array( $retrive_Array )){?>
                              <tr id="tr_symptom_cat_<?php echo $get_array['cat_id']*121?>">
                                <td class="tdborder" style="padding-left:20px;"><?php echo $get_array['cat_name']?> </td>
                                <td class="tdborder" style="padding-left:10px;">
									<table cellpadding="0" cellspacing="0"  style="width:100%" >
										<tr>
										  <td class="SubTd1" style="padding-left:0px;"><a href="<?php echo $strHostName;?>/page.php?dir=master/symptom_cat/add&cid=<?php echo $converter->encode($get_array['cat_id'])?>" style="cursor:pointer;"><img src="images/register_steps/edit_icon.jpg" alt=""></a></td>										  
										  <td class="SubTd2"><a  style="cursor:pointer;" onclick="javascript:Symptom_Cat_Delete_By_Id('<?php echo $get_array['cat_id']?>','<?php echo $get_array['cat_id']*121?>')"><img src="images/register_steps/delete_icon.jpg" alt=""></a></td>
										</tr>
									 </table>
								 </td>
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

