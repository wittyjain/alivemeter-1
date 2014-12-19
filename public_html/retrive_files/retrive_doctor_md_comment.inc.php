 <div class="dvFloat" style="padding:10px 0 0 0; font-weight:bold; font-size:15px; border-bottom:solid  1px #e4e4e4;">
 	 <h1 class="f_red" style="text-align: left; font-size: 18px; font-weight:bold;  margin: 7px;"> Client Query History</h1>
</div>
<center>
  <div class="DvFloat" style="border-bottom: solid 0px #e4e4e4;border-top: solid 0px #e4e4e4; margin:10px 0px 0px 0px">
    <h1 class="f_red" style="text-align: left; font-size: 18px; font-weight:bold;  margin: 7px;">doctor&rsquo;s comments</h1>
  </div>
  <div class="DvFloat" style="margin-bottom:30px;">
    <table class="tablecont" cellpadding="2" cellspacing="1" width="100%" border="0">
      <tbody>
        <tr>
          <td class="dargery" style="width:150px;"> Sent On </td>
          <td class="dargreen" style="width:150px;"> Referred By  </td>
          <td class="dargreen" style="width:250px;"> Advice </td>
          <td class="dargreen" style="width:250px;"> Internal Doctor Advice </td>
          <td class="dargreen" style="width:250px; display:none;"> Refer To MD </td>
        </tr>
        <?php  
		$page=1;$page_count=5;$newpagenumber="2"; $rowcount="";
		$query = "SELECT * FROM  ".Doc_Comment." where isactive=1 and isdeleted=0 and patient_id=$patient_id  order by created_date desc limit 5";
		//echo $query;
			$result = mysql_query($query);							
			if($result != "") {	
				$rowcount  = mysql_num_rows($result);
				if($rowcount > 0) {
					while($row = mysql_fetch_assoc($result)) {
						extract($row);
						$md_name=""; 
						if($row['md_id']>0){
							$md_name=GetValue("select doctor_name as col from tbl_doctor where doctor_id=".$row['md_id'], "col");
						}
						if($md_name=="" || $md_name=="0")
						{	
							$md_name="-";
						}
						
						$complaint=GetValue("select complaint as col from tbl_compose where mail_id=".$row['compose_id'],"col");
			$complaint_date=GetValue("select created_date as col from tbl_compose where mail_id=".$row['compose_id'],"col");
						//$referred_doc=GetValue("select doctor_name as col from tbl_doctor where doctor_id=".$row['doctor_id'], "col");
			$pagingLink = getPagingLinkBackEndFrontEnd_ajax($rowcount,$page_count,'',$newpagenumber, "Doctor_Comment_Ins");
			//Alert ($get_array['md_id']);
		?>
        <tr>
          <td class="ligery" style="text-align:left;"><?php echo date('d-M-Y h:i:s',strtotime($row['created_date']))?></td>
          <td class="ligreen" style="text-align:left;"><div class="LongText">
          	<a href="#" class="tooltip">
                            <?php echo $row['doc_name']?>
                            <span>
                                <img class="callout" src="<?php echo $strHostName;?>/images/callout.gif" />
                                 
                                 <table width="100%" border="0" cellspacing="0" cellpadding="0" style="line-height:20px;">
                                  <tr>
                                    <td style="font-size:12px;">Specialization</td>
                                    <td style="text-align:center; width:10%;">:</td>
                                    <td style="font-size:12px;"><?php echo $row['specialization'];?></td>
                                  </tr>
                                  <tr>
                                    <td style="font-size:12px;">Hospital Name</td>
                                    <td style="text-align:center; width:10%">:</td>
                                    <td style="font-size:12px;"><?php echo $row['hosp_name'];?></td>
                                  </tr>
                                  <tr>
                                    <td style="font-size:12px;">Licence No.</td>
                                    <td style="text-align:center; width:10%">:</td>
                                    <td style="font-size:12px;"><?php echo $row['licenceno'];?></td>
                                  </tr>
                                </table>
							</span>
                        </a>
					
          
          </div></td>
          <td class="ligreen" style="text-align:left;"><div class="LongText">
		  <a href="#" class="tooltip">
                            <?php echo $row['doctor_advice']?>
                            <span>
                                <img class="callout" src="<?php echo $strHostName;?>/images/callout.gif"  style="top:35px;"/>
                                 
                                 <table width="100%" border="0" cellspacing="0" cellpadding="0" style="line-height:20px;">
                                  <tr>
                                   <td style="font-size:12px;"><?php echo date('d-M-Y h:i:s',strtotime($complaint_date))?></td>
                                  </tr>
                                  <tr>
                                   <td style="font-size:12px;"><?php echo $complaint;?></td>
                                  </tr>
                                 
                                </table>
							</span>
                        </a>
		  
		  </div></td>
          <td class="ligreen" style="text-align:left;"><div class="LongText">
		  		
                            <?php echo $row['doctor_internal_advice']?>
                          
		  
		 </div></td>
          <td class="ligreen" style="text-align:left; display:none;"><div class="LongText"><?php echo $md_name;?></div></td>
        </tr>
        <?php }}} ?>
          <tr>
          <td colspan="6" style="text-align:right; padding:10px 0;"><a href="<?php echo $strHostName;?>/page_doctor.php?dir=md/doctor_comments&patient_id=<?php echo $_GET['patient_id'];?>" class="button4" style="width:230px; text-align:center; float:right;" target="_blank">View All Doctor's Comments </a></td>
        </tr>
        <tr>
          <td colspan="6" style="display:none;"><?php echo $pagingLink ?> </td>
        </tr>
      </tbody>
    </table>
  </div>
</center>
