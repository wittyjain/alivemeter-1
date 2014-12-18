<?php
if(!isset($_SESSION['UserNutID']))
{
	Alertandredirect("Sorry! Session is expired.", 'index.php');
}
?>
<script type="text/javascript">
function View_Reviews(memberid,message)
{
	document.getElementById("txtMemberIDSMS").value=memberid;
	document.getElementById("dvCommentsNut").innerHTML=message;
	
	Popup.showModal('dvpopup-senssms',null,null,{'screenColor':'#333333','screenOpacity':.6});
}

</script>
<section>
  <div class="top_ou">
    <div class="top_in">
      <div class="top">
        <div class="cal_12" style="padding-top: 45px; padding-bottom:60px;">
            <div class="cal_12" style="border: solid 0px #0066CC;">
            	<div class="adviceonline_md">
                 <h1 class="f_red" style="text-align: left; font-size: 20px; margin-bottom: 7px; text-transform:uppercase">User Reviews</h1>
                	  <div class="DvFloat">
                        <table border="0" cellpadding="0" cellspacing="0" style="width:1000px;">
                            <tr>
                            <td class="lightInboxbg21" style="border-bottom:solid 1px #fff; width:100px;">Review Date</td>
                            <td class="lightInboxbg21" style="border-bottom:solid 1px #fff; width:100px;">Patient Name</td>
                            <td class="lightInboxbg21" style="border-bottom:solid 1px #fff; width:250px;">Comment</td>
                           
                            
                          </tr>

                             <?php $retrive_Array=$get_retrive->Get_Doctor_Reviews();
							  $nume=$get_retrive->Get_Doctor_Reviews_Count($user_id);
								?>
                              <?php  while($get_array = mysql_fetch_array( $retrive_Array )){
							   	 $md_name="-";
							  	 
								$patient_name=GetValue("select name as col from tbl_users where user_id=".$get_array['user_id'], "col");
								
								
							  ?>
                           <tr>
                            <td class="lightInboxbg5"><?php echo  date('d-M-Y h:i:s',strtotime($get_array['created_date']));?></td>
                            <td class="lightInboxbg5"><?php echo $patient_name;?></td>
                            <td class="lightInboxbg5">
                            	
                                	<a onClick="javascript:View_Reviews('<?php echo $get_array['user_id']; ?>','<?php echo $get_array['comment']; ?>');" style="cursor:pointer; font-size:13px; text-transform:none" > <?php echo truncate($get_array['comment'],50);?> </a>
                                
                            
                           
                            </td>
                             
                          </tr>
                          <tr>
                            <td class="f_white" colspan="5" style="height: 5px;"></td>
                          </tr>
                          
                            <?php  } ?>
                      <?php if ($nume=="0" || $nume=="") { ?>
                     	<tr>
                      <td class="f_white" colspan="6" style="height: 5px; color:red; text-align:center; padding-top:15px; display:none;">Sorry! No clients are available.</td>
                    </tr>
                     <?php } ?>
                     
                     
                         </table>
                         
                      </div>
                      
                   
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>
</section>

<div id="dvpopup-senssms" style="text-align: center; width: 623px; display: none; position:absolute; margin-top:65px; margin-left:350px; background-color:#fff; padding:10px;">
      
             <div style="margin: 0px 0px 0px 600px; position: absolute; text-align:right; float: right"> <a href="javascript:Popup.hide('dvpopup-senssms');" target="_parent" style="text-decoration: none; color: #fff; border: solid 0px #993300;"> <img src="images/close.png" alt="" title="" border="0" /> </a> 
            </div>
              
              <div class="dvFloat">
              		
                    <div class="dvFloat" style="padding:4px; background-color:#99cc00; color:#fff; text-align:left;">
                    	View Reviews
                    </div>
                    
                     <div class="dvFloat" style="padding:4px; text-align:left; margin-top:15px;">
                    		<input type="hidden" name="txtMemberIDSMS" id="txtMemberIDSMS" value="<?php echo $memberid?>" />
					
                        <div style="float:left; width:100%;">
                        <span id="dvCommentsNut"></span>     
                      </div>
                        
                  </div>
 </div>
    
            </div>