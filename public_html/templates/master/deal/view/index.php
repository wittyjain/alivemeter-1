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
                      	 <h2 class="Tab_Title">View Deal</h2>
                     </label>
                    </div>
                    <div class="formcontrol2"> &nbsp; </div>
                  </div>
                  		<table cellpadding="0" cellspacing="0"  style="width:100%;float:left; text-align:center;" >
                              <tr>
                                <td class="tbl_head" > Vendor </td>
                                 <td class="tbl_head" > Deal Category </td>
                                 <td class="tbl_head" > Url Title </td>
                                  <td class="tbl_head"> Actual Price </td>
                                   <td class="tbl_head" > Owner Email ID </td>
                                    <td class="tbl_head" > Used Coupon </td>
                                    <td class="tbl_head" > Sort By</td>
                                <td class="tbl_head" style="text-align:center; padding-left:0px; ">Actions</td>
                              </tr>
                               <?php $retrive_Array=$get_retrive->GetDeal()  ?>
                              <?php  while($get_array = mysql_fetch_array( $retrive_Array )){?>
                              <tr id="tr_deal_id_<?php echo $get_array['deal_id']*121?>">
                                <td class="tdborder" ><?php echo $get_array['vendor']?> </td>
                                <td class="tdborder" ><?php echo $deal_name=GetValue("select deal_cat_name as col from tbl_deal_category where deal_cat_id=".$get_array['deal_category'], "col");?> </td>
                                <td class="tdborder" ><?php echo $get_array['url_title']?> </td>
                                <td class="tdborder" ><?php echo $get_array['actual_price']?> </td>
                                <td class="tdborder" ><?php echo $get_array['owner_email']?> </td>
                                <td class="tdborder" ><?php echo $used_points=GetValue("SELECT Count(coupon_id) as col from tbl_get_coupon where coupon_id=".$get_array['deal_id'], "col"); ?> </td>
                                 <td class="tdborder" ><?php echo $get_array['sortby']?> </td>
                                <td class="tdborder" style="padding-left:10px;">
                                <table cellpadding="0" cellspacing="0"  style="width:100%" >
                                    <tr>
                                      <td class="SubTd1" style="padding-left:0px;"><a href="<?php echo $strHostName;?>/page.php?dir=master/deal/add&cid=<?php echo $converter->encode($get_array['deal_id'])?>" style="cursor:pointer;"><img src="images/register_steps/edit_icon.jpg" alt=""></a></td>
                                      
                                      <td class="SubTd2"><a  style="cursor:pointer;" onclick="javascript:Deal_Delete_By_Id('<?php echo $converter->encode($get_array['deal_id'])?>','<?php echo $get_array['deal_id']*121?>')"><img src="images/register_steps/delete_icon.jpg" alt=""></a></td>
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

