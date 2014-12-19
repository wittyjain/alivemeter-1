<?php include "../includes/common.inc.php";?>
<?php
	$page=1;$page_count=100;$newpagenumber="2";$retrive_Array=array();$get_array=array();
	if(isset($_GET['page'])){
		$page=$_GET['page'];
	}
	else
	{
		$page=1;
	}
	if(isset($_SESSION['UserNutID']))
	{
		$nutritionist_id=$_SESSION['UserNutID'];
	}
	else
	{
		$nutritionist_id=0;
	}
	
	if(isset($_GET['patient_id'])) 
	{	
		$patient_id=$_GET['patient_id'];
	}
	
	if(isset($_GET['nutritionist_id'])) 
	{	
		$patient_id=$_GET['nutritionist_id'];
	}
	
	//Alert ($nutritionist_id);
		
	$retrive_Array=$get_retrive->GetDietPlan($page_count,$patient_id,$nutritionist_id);
	$nume=$get_retrive->GetDietPlan_Count();
	
	if($nume !="0")
	{
		$newpagenumber=($nume/$page_count);
		if($newpagenumber==""){$newpagenumber="0";}else{$newpagenumber=$newpagenumber+1;}
		$newpagenumber=round($newpagenumber);
		if($page > $newpagenumber)
		{
			$newpagenumber=1;
		}
		else
		{
			$newpagenumber="";
		}
	}
	$pagingLink = getPagingLinkBackEndFrontEnd($nume,$page_count,'dir=listing/grid_view',$newpagenumber,$strHostName."/page.php");
?>

<center>
  <div class="DvFloat"> 
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <?php  while($get_array = mysql_fetch_array( $retrive_Array )){?>
        <tr id="tr_diet_plan_<?php echo $get_array['id']*121?>">
        <td  style="width: 22%; background-color: #f0f0f0; padding: 5px 0px 5px 12px; font-size: 13px"><?php echo date('d-M-Y',strtotime($get_array['selected_date']))?></td>
        <td style="width: 60%; background-color: #f0f0f0; font-size: 13px"> <?php echo str_replace("\\","",$get_array['note']);?></td>
        <td style="width:5%; background-color: #f0f0f0; text-align: center; font-size: 13px; border:solid 0px red; padding-top:5px;">
        <a style="cursor: pointer;" target="_parent" onClick="javascript:Popup.showModal('dvpopup-sendnewdietplan<?php echo $get_array['id']?>',null,null,{'screenColor':'#333333','screenOpacity':.6});" class="buttontext" ><img src="images/nutritionist_action_icon.jpg" alt="" title="" border="0"></a>
        </td>
         <td style="width:5%; background-color: #f0f0f0; text-align: center; font-size: 13px; border:solid 0px red; padding-top:5px;" valign="middle">
        <a  style="cursor:pointer;" onClick="javascript:Diet_Plan_Delete_By_Id('<?php echo $converter->encode($get_array['id'])?>','<?php echo $get_array['id']*121?>')"><img src="images/delete_icon.png" alt=""></a>
        </td>
      </tr>
      <tr>
        <td style="background-color: #fff; height: 5px;" colspan="2"></td>
      </tr>
      
     
   <div id="dvpopup-sendnewdietplan<?php echo $get_array['id']?>" style="text-align: center; width: 623px; display: none; position:absoulte; margin-top:65px; margin-left:350px; background-color:#fff; padding:10px;">
      <!--<table cellpadding="0" cellspacing="0" border="0" width="623px" align="center">
        <tr>
          <td style="text-align:right; border:solid 0px red; float:right;"><div class="DvFloat">
              <div style="margin: 5px 0px 0px -30px; position: absolute; text-align:right; float: right"> <a href="javascript:Popup.hide('dvpopup-sendnewdietplan<?php echo $get_array['id']?>');" target="_parent" style="text-decoration: none; color: #fff; border: solid 0px #993300;"> <img src="images/close.png" alt="" title="" border="0" /> </a> </div>
            </div></td>
        </tr>
        <tr>
          <td valign="top" align="center" style="padding: 10px 10px 10px 10px;background-color:#FFFFFF"><div style="width:100%; float: left; border:solid 0px red;">-->
            
             <div style="margin: 5px 0px 0px 600px; position: absolute; text-align:right; float: right"> <a href="javascript:Popup.hide('dvpopup-sendnewdietplan<?php echo $get_array['id']?>');" target="_parent" style="text-decoration: none; color: #fff; border: solid 0px #993300;"> <img src="images/close.png" alt="" title="" border="0" /> </a> 
            </div>
              <div class="DvFloat f_grey" style="border-bottom: solid 1px #cccccc; font-size: 13px; text-align: left;"> <span style="font-weight: bold;">Sent on :</span> <?php echo date('d-M-Y',strtotime($get_array['selected_date']))?> &nbsp;&nbsp; </div>
              <div class="DvFloat f_grey" style="border-bottom: solid 1px #cccccc; font-size: 13px; text-align: left; padding-bottom: 5px; padding-top:10px;">
                <div class="DvFloat">
                  <div class="DvFloat f_green" style="font-weight: bold; font-size: 13px; padding-bottom: 5px;">Food</div>
                  <div class="DvFloat">
                    <div class="nutri_popup_box1 f_grey" style="font-weight: bold; width:150px;">Time</div>
                    <div class="nutri_popup_box1 f_grey" style="font-weight: bold; width:150px;">Food</div>
                    <div class="nutri_popup_box3 f_grey" style="font-weight: bold;">Portion</div>
                    <div class="nutri_popup_box3 f_grey" style="font-weight: bold;">Quantity</div>
                    <div class="nutri_popup_box3 f_grey" style="font-weight: bold;">Calories</div>
                  </div>
                  
                   <?php  
						$query = "SELECT * FROM  ".Diet_Food." where isactive=1 and isdeleted=0 and diet_plan_id=".$get_array['id']." order by type,time";
						//echo $query;
							$result = mysql_query($query);							
							if($result != "") {	
								$rowcount  = mysql_num_rows($result);
								if($rowcount > 0) {
									while($row = mysql_fetch_assoc($result)) {
										extract($row);
										$time=$row['time'];
										$qty=$row['qty'];
										$type=$row['type'];
										$receipe_id=$row['receipe_id'];
										$total_cal=$row['total_cal'];
										$portion=$row['portion'];
										$receipe_name=GetValue("select name as col from tbl_recipe where id=".$receipe_id, "col");
							//Alert ($get_array['md_id']);
						?>
                  <div class="DvFloat" style="padding-top: 3px;">
                    <div class="nutri_popup_box1 f_grey" style=" width:150px;">
                      <div class="DvFloat">
                        <div style="float:left; padding:0px 5px 0px 0px"><?php echo $time;?> - <?php echo $type;?> </div>
                      
                      </div>
                    </div>
                    <div class="nutri_popup_box1 f_grey" style="width:150px;"> <?php echo $receipe_name;?> </div>
                    <div class="nutri_popup_box3 f_grey"> <?php echo $portion;?> </div>
                    <div class="nutri_popup_box3 f_grey"> <?php echo $qty;?> </div>
                    <div class="nutri_popup_box3 f_grey"> <?php echo $total_cal;?> </div>
                  </div>
				<?php }}} ?>                  
                  
                  <div class="DvFloat" style="padding-top:15px;">
                    <div class="nutri_popup_box1 f_grey">
                      <div class="DvFloat">
                        <div style="float:left; padding:0px 5px 0px 0px">&nbsp; </div>
                      
                      </div>
                    </div>
                    <div class="nutri_popup_box3 f_grey" style="width:362px; text-align:right;"> Total Consumed Calories : </div>
                    <div class="nutri_popup_box3 f_grey"> <?php echo 
						$total_day_cal=GetValue("select sum(total_cal) as col from tbl_diet_food_plan where diet_plan_id=".$get_array['id']."", "col");?> 
                        cal</div>
                  </div>
                  
                  
                </div>
              </div>
              <div class="DvFloat f_grey" style="border-bottom: solid 0px #cccccc; font-size: 13px; text-align: left; padding-top: 8px;">
                <div class="DvFloat">
                  <div class="DvFloat f_green" style="font-weight: bold; font-size: 13px; padding-bottom: 5px;">Exercise</div>
                  <div class="DvFloat">
                    <div class="nutri_popup_box1 f_grey" style="font-weight: bold;">Time</div>
                    <div class="nutri_popup_box2 f_grey" style="font-weight: bold; width:160px;">Exercise</div>
                    <div class="nutri_popup_box3 f_grey" style="font-weight: bold; width:90px;">Total Mins</div>
                    <div class="nutri_popup_box3 f_grey" style="font-weight: bold; width:100px;">Calories</div>
                    <div class="nutri_popup_box3 f_grey" style="font-weight: bold; width:80px; display:none;">Duration</div>
                  </div>
                   <?php  
				   $total_cal_exe_1="";
						$query = "SELECT * FROM  ".Diet_Exercise." where isactive=1 and isdeleted=0 and diet_plan_id=".$get_array['id']." and time_period='Morning'";

						$query .= "Union All SELECT * FROM  ".Diet_Exercise." where isactive=1 and isdeleted=0 and diet_plan_id=".$get_array['id']." and time_period='Afternoon' ";

						$query .= "Union All SELECT * FROM  ".Diet_Exercise." where isactive=1 and isdeleted=0 and diet_plan_id=".$get_array['id']." and time_period='Evening'";
						//echo $query;
							$result = mysql_query($query);							
							if($result != "") {	
								$rowcount  = mysql_num_rows($result);
								if($rowcount > 0) {
									while($row = mysql_fetch_assoc($result)) {
										extract($row);
										$time=$row['time'];
										$time_period=$row['time_period'];
										$duration=$row['duration'];
										$cal=$row['cal'];
										$min=$row['min'];
										if($cal=="")
										{
											$cal="0";
										}
										
										$total_cal_exe=($cal*$min);
										$exercise_id=$row['exercise_id'];
										$total_cal_exe_1=$total_cal_exe_1+$total_cal_exe;
										$exercise_name=GetValue("select name as col from tbl_exercise where id=".$exercise_id, "col");
							//Alert ($get_array['md_id']);
						?>
                  <div class="DvFloat" style="padding-top: 3px;">
                    <div class="nutri_popup_box1 f_grey">
                      <div class="DvFloat">
                        <div style="float:left; padding:0px 5px 0px 0px"> <?php echo $time_period;?></div>
                       
                      </div>
                    </div>
                    <div class="nutri_popup_box2 f_grey" style="width:160px;">  <?php echo $exercise_name;?> </div>
                    <div class="nutri_popup_box3 f_grey" style=" text-align: center; width:90px;">
                      <div class="DvFloat"> <?php echo $min;?></div>
                    </div>
                    <div class="nutri_popup_box3 f_grey" style="text-align: center; width:100px;">
                      <div class="DvFloat"> <?php echo $total_cal_exe;?></div>
                    </div>
                    <div class="nutri_popup_box3 f_grey" style=" text-align: center; width:80px; display:none;">
                      <div class="DvFloat"> <?php echo $duration;?></div>
                    </div>
                  </div>
                  <?php }}} ?>   
                  <div class="DvFloat" style="padding-top:15px;">
                    <div class="nutri_popup_box1 f_grey">
                      <div class="DvFloat">
                        <div style="float:left; padding:0px 5px 0px 0px">&nbsp; </div>
                      
                      </div>
                    </div>
                    <div class="nutri_popup_box2 f_grey"> &nbsp; </div>
                    <div class="nutri_popup_box3 f_grey" style="width:120px;"> Total Burnt Calories : </div>
                    <div class="nutri_popup_box3 f_grey"> <?php echo 
						$total_cal_exe_1?> 
                        cal</div>
                  </div> 
                </div>
              </div>
               <div class="DvFloat f_grey" style="border:solid 0px red; text-align:left; padding:10px 0; font-weight:bold;">
            	<span class="f_green">Message :</span> <?php echo str_replace("\\","",$get_array['message']);?>
            </div>
            </div>
            
           
        
    </div>  
     <?php } ?>
       
      <?php if($nume=="" || $nume=="0")  { ?>
	  <div style="text-align:left; width:100%; background-color: #f0f0f0; padding:10px;">
      	<span style="text-align:left; color:red;"><?php echo "Sorry! No Plan is available."; ?></span>
	 </div>
	 <?php } ?>
    </table>

        
    
    
  </div>
</center>
