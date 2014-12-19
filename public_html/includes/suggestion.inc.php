<script type="text/javascript" src="<?php echo $strHostName;?>/js/PopUp.js"></script>
<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
<?php
	
if(isset($_GET['patient_id'])){
	$patient_id=$converter->decode($_GET['patient_id']);
	/// for setting sesstion for user in iframe
	$_SESSION['UserID']=$patient_id;
	
}
else
{
	$patient_id=0;
}

if(isset($_SESSION['UserNutID']))
{
	$nutritionist_id=$_SESSION['UserNutID'];
}
else
{
	$nutritionist_id="0";
}




?>

<div class="dvFloat" style="border:solid 0px red; float:right; width:150px; text-align:center; margin-bottom:0px; margin-right:3px;">
	<a onClick="javascript:Popup.showModal('dvpopup-sendsuggestion',null,null,{'screenColor':'#333333','screenOpacity':.6});" style="cursor:pointer; font-size:13px; text-transform:none" class="button1">Give Suggestion</a>
    
</div>

<div id="dvpopup-sendsuggestion" style="text-align: center; width: 623px; display: none; position:absolute; margin-top:300px; margin-left:350px; background-color:#fff; padding:10px;">
      
             <div style="margin: 0px 0px 0px 600px; position: absolute; text-align:right; float: right"> <a href="javascript:Popup.hide('dvpopup-sendsuggestion');" target="_parent" style="text-decoration: none; color: #fff; border: solid 0px #993300;"> <img src="images/close.png" alt="" title="" border="0" /> </a> 
            </div>
              
              <div class="dvFloat">
              		
                    <div class="dvFloat" style="padding:4px; background-color:#99cc00; color:#fff; text-align:left;">
                    	Give Suggestion	
                    </div>
                    
                     <div class="dvFloat" style="padding:4px; text-align:left; margin-top:15px;">
                    	<div style="float:left; width:30%;">Comment</div>
                        <div style="float:left; width:50%;">
                           <textarea name="txtNutSuggestion" id="txtNutSuggestion" style="width:400px; height:250px;" rows="10" cols="100" ></textarea></div>
                         <input type="hidden" name="txtReplyTo" id="txtReplyTo" value="<?php echo $patient_id?>" />
                         <input type="hidden" name="txtNutritionistID" id="txtNutritionistID" value="<?php echo $nutritionist_id?>" />
                           <input type="hidden" name="txtCommentID" id="txtCommentID" value="0" />
                            <input type="hidden" name="txtComposeID" id="txtComposeID" value="999999" />
                             <input type="hidden" name="txtNutSubject" id="txtNutSubject" value="Alert from Nutritionist" />
                         
                    </div>
                    
                  
                    
                     <div class="dvFloat" style="padding:4px; text-align:left;">
                    	<div style="float:left; width:30%;">&nbsp;</div>
                        <div style="float:left; width:50%;"> <a class="button2" style="width:80px; cursor: pointer;" onclick="javascript:SendSuggestion(this);">Send</a></div>
                        
                    </div>
                
              
              </div>
              
              
            </div>