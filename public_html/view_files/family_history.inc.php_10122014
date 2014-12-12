<script>
function showfform()
{ 
	document.getElementById('ShowFDiv').style.display = 'block'; 
	 
	if(document.getElementById("HideFDivLink")!=null)
	{
		document.getElementById('HideFDivLink').style.display = ''; 
	}
	 
	 
	if(document.getElementById("ShowFDivLink")!=null)
	{
		document.getElementById('ShowFDivLink').style.display = 'none'; 
	}
	
	
}
function showFCancel()
{ 
	document.getElementById('ShowFDiv').style.display = 'none'; 
	
	
	if(document.getElementById("ShowFDivLink")!=null)
	{
		document.getElementById('ShowFDivLink').style.display = ''; 
	}
	
	if(document.getElementById("HideFDivLink")!=null)
	{
		document.getElementById('HideFDivLink').style.display = 'none'; 
	}
	

}
</script>
<?php
$family_history_count =GetValue("select Count(*)  as col from tbl_family_history  where user_id=".$_SESSION['UserID']." and isactive=1 and isdeleted=0 ","col");
				$family_history_count_na=GetValue("select Count(*) as col from tbl_user_not_applicable where user_id=".$_SESSION['UserID']." and isactive=1 and isdeleted=0 and type='Family_History'","col");
$family_history_count=$family_history_count+$family_history_count_na;				
				
?>
<div style="width:99%; border:solid 0px red;">
                  <div class="dvFloat formpadding">
                    <div class="formlabel1" style="width: 500px;">
                      <label class="formlabel1">
                      	<?php if($dir=="health/family_history") { ?>
                        	<h2 class="Tab_Title">Family History</h2>
                        <?php } else { ?>
                        	<h2 class="Tab_Title">LIST</h2>
                        <?php } ?>    
                      </label>
                    </div>
                    <div class="formcontrol2"> &nbsp; </div>
                  </div>
                  <div class="dvFloat formpadding1" id="dvFamily_History" name="dvFamily_History" style="border-bottom:0px;">
                    &nbsp;
                  </div>
                  <div class="dvFloat formpadding1" style="padding-top:0px;">
                    <div class="formlabel1" style="width: 500px;">
                     <label class="formlabel1" style="border:solid 0px red; width:500px; padding:15px 13px 0px 13px;">
                      		 <?php if($dir=="health/family_history") { ?>
                        	<a  onClick="showfform();" style="cursor:pointer"><img src="images/nutritionist/add_to_list.jpg" alt="" title="" border="0" style="float:left; margin-right:10px;" id="ShowFDivLink"></a>
                            
                             <a  onClick="showFCancel();" style="cursor:pointer">
                    	<img src="images/nutritionist/add_minus.jpg" alt="" title="" border="0" style="float:left; margin-right:10px; display:none;"  id="HideFDivLink">
                    </a>
                    
                    
                        <?php } else { ?>
                        	 <h2 class="Tab_Title" style="border:solid 0px green; width:110px; float:left;">Add to list</h2>
                        <?php } ?>
                        <h5 style="color:red; display:none;  width:200px; float:left; font-size:13px;" id="dvEditFamily"> (You are editing selected list.)</h5>
                      </label>
                    </div>
                    <div class="formcontrol2" style="display: none;"> &nbsp; </div>
                  </div>
                  <?php if($dir=="health/family_history") { ?>
     <div class="dvFloat" id="ShowFDiv" style="display:none;">
     <?php } else { ?>
      <div class="dvFloat" id="ShowFDiv">
     <?php } ?>
                  <div class="dvFloat formpadding1">
                    <div class="formlabel1" style="width: 358px;">
                      <label class="formlabel1">Relation<span class="redtxt">*</span> </label>
                       <input id="txt_Family_History_ID" name="txt_Family_History_ID" value="" type="hidden"/>
                    </div>
                    <div class="formcontrol2" style="width: 420px;">
                    
                      
                      <input type="text" name="txt_FamilyHistory_Relation" id="txt_FamilyHistory_Relation" value="" style="width:400px;" />
                      
                      
                    </div>
                  </div>
                  <div class="dvFloat formpadding1">
                    <div class="formlabel1" style="width: 358px;">
                      <label class="formlabel1">Medical Condition<span class="redtxt">*</span> </label>
                    </div>
                    <div class="formcontrol2" style="width: 420px;">
                      <textarea id="txt_FamilyHistory_MedicalCondition" name="txt_FamilyHistory_MedicalCondition"></textarea>
                    </div>
                  </div>
                  <div class="dvFloat formpadding1">
                    <div class="formlabel1" style="width: 358px;">
                      <label class="formlabel1" style="width:500px; border:solid 0px red;">Below field is relevant only if the person is no more</label>
                    </div>
                    <div class="formcontrol2" style="width: 420px;"> &nbsp; </div>
                  </div>
                  <div class="dvFloat formpadding1">
                    <div class="formlabel1" style="width: 358px;">
                      <label class="formlabel1">Cause of Death</label>
                    </div>
                    <div class="formcontrol2" style="width: 420px;">
                      <textarea id="txt_FamilyHistory_CauseDeath" name="txt_FamilyHistory_CauseDeath"></textarea>
                    </div>
                  </div>
                  <div class="dvFloat formpadding1"  style="padding:10px 0px 25px 0px">
                    <div class="formlabel1" style="width: 358px;"> &nbsp; </div>
                    <div class="formcontrol2" style="width: 420px;">
                      <div style=" width:84px; height:30px; float:left;padding-right:10px;"> <a class="button4"  onclick="javascript:Family_History_Ins(this);" style="cursor:pointer;">SUBMIT</a></div>
                      <?php if($dir!="health/family_history") { ?>
                          
                           <?php if ($family_history_count>0) { ?> 
                              <div style="width:156px; height:30px; float:left;padding-right:10px;" id="dvFamilyNA"> <a class="button2" style="background-color:#767676;">NOT APPLICABLE</a></div>
                              <?php } else { ?>
                              <div style=" width:156px; height:30px; float:left;padding-right:10px;" id="dvFamilyNA1"> <a class="button2" onclick="javascript:Not_Applicable_Record('Family_History','7','Yes','dvFamilyNA1');" style="cursor:pointer">NOT APPLICABLE</a></div>
                          <?php } ?>
                          
                    <div class="dvFloat" style="font-size:12px; padding-top:10px;  color:#666666; text-align:left;">(<span style="font-weight: bold;">Note:</span> If you don&lsquo;t have the data now, you can<br />submit it later by clicking Not Applicable button.)</div>
                          
                          
                          <div style=" width:156px; height:30px; float:left;padding-right:10px; display:none;"> <a class="button2" >SKIP FOR NOW</a></div>
                      <?php } else { ?>
                      		<div style=" width:85px; height:30px; float:left;padding-right:10px; display:none;"> <a class="button2" onClick="showFCancel();" style="cursor:pointer;" >Cancel</a></div>
                      <?php } ?>
                    </div>
                  </div>
                     <?php if($dir!="health/family_history") { ?>
                       <div class="dvFloat formpadding1"  style="padding:15px 0px">
						<div style=" width:156px; height:30px; float:left;padding-right:20px;"> <a href="#"  onclick="javascript:countries.expandit(10)" ><img src="images/register_steps/healthproblems_strip_dis.jpg" alt="" /></a></div>
						<div style=" width:156px; height:30px; float:right;padding-right:75px;">
							
                            
                              <a href="#" onclick="javascript:OpenTab('7','true')" id="aDNextTab_7" style="cursor:text;display:<?php if($family_history_count > 0) {echo "none" ;}?>"><img src="images/register_steps/dailytracking_strip_g.jpg" alt="" /></a>
             
             <a href="#" onclick="javascript:OpenTab('7','true')" id="aENextTab_7" style="cursor:pointer;display:<?php if($family_history_count== 0) {echo "none" ;}?>"><img src="images/register_steps/dailytracking_strip.jpg" alt="" /></a> 
             
             
                         <!--   <a href="#" onclick="javascript:OpenTab('7','true')"><img src="images/register_steps/dailytracking_strip.jpg" alt="" /></a>-->
							<a  onclick="javascript:countries.expandit(14)" id="dvNextTabOn_7" style="display:none"  href="#"><img src="images/register_steps/dailytracking_strip.jpg" alt="" /></a>
						</div>
					 </div>
                  <?php } ?>
                  
                  </div>
                </div>
                
