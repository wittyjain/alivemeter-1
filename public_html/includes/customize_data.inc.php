 <div style="margin: 0px 0px 0px 170px; position: absolute; text-align:right; float: right"> <a href="javascript:Popup.hide('dvpopup-customizedata');" target="_parent" style="text-decoration: none; color: #fff; border: solid 0px #993300;"> <img src="images/close.png" alt="" title="" border="0" /> </a> 
            </div>
            <div class="dvFloat" style="text-align:left; color:#000;">
    <form class="form-horizontal" method="post" enctype="multipart/form-data"  onSubmit="javascript:return custom_data_validation()">
	 
	 
         
         
	 <?php
        if(isset($_SESSION['UserID'])){
		$user_id=$_SESSION['UserID'];
		}
		else
		{
			$user_id=0;
		}
		
		$i=0;
        $i=$i+1;
        $query_c = "SELECT *, (select dataid from tbl_customized_data b where b.user_id=$user_id and b.dataid=a.id) as isdone FROM tbl_customize a where a.isactive=1 and a.isdeleted=0";
     //   echo $query_c;
		$strChecked="";
        $result_c = mysql_query($query_c);							
        if($result_c != "") {	
            $rowcount  = mysql_num_rows($result_c);
            if($rowcount > 0) {
                while($row_c = mysql_fetch_assoc($result_c)) {
                    extract($row_c);
					$strChecked="";
					if($isdone > 0 && $isdone!="" && $isdone!=null )
					{
						$strChecked="checked";
					}
        ?>
      <input type="checkbox" name="chkData[]" id="chkData<?php echo $i;?>"  value="<?php echo $row_c['id'];?>" <?php echo $strChecked;?>> <?php echo $row_c['name'];?><br>
            
        <?php
            $i=$i+1;
         }}} ?>
         
        <input type="hidden" name="totalDataCount" id="totalDataCount" value="<?php echo $i;?>" />
            <input type="hidden" name="totalDataCountLimit" id="totalDataCountLimit" value="" />
          <input type="hidden" name="totalLimit" id="totalLimit" value="" />
               <br>
               <br>                                 
        <input type="submit" name="btnCustomizeData" id="btnCustomizeData" class="button1"  style="width:100px;" value="Submit">    
    </form>                                  
</div>
           