<script language="javascript" type="text/javascript">
function data_validation(){
	
	if(document.getElementByID("chkData").checked==false)
	{
		alert("false");
	}
	
	var totalCount=document.getElementById("totalDataCount").value;
	
	if(totalCount > 5)
	{
		alert("You cannot choose more than 4.");
	}
	
	if (document.getElementById("chkData").checked=false)
	{
		alert("Please select atleast 4 data.");
	}
	
	
}
</script>
<?php
$user_id="0";
if(isset($_SESSION['UserID'])){
	$user_id=$_SESSION['UserID'];
}
	
$date=date('Y-m-d');	
//Alert($user_id);
	if(isset($_POST['btnCustomizeData'])) {	
	
		
		if(isset($_POST['chkData']))
			{
			if (sizeof($_POST['chkData']) > 0) {
				$data_size=sizeof($_POST['chkData']);
				foreach ($_POST['chkData'] as $checkbox1) {
					$data_Check1[] = $checkbox1;
				}
			}
		}
		else
		{
			$data_Check1[]="0";
			$data_size=0;
		}
			
		////Alert($data_size);		
			
		if($data_size>0) 
		{
			$query="delete from tbl_customized_data where user_id=".$user_id;
			$result = mysql_query($query);			
			
			$data_custom = sizeof($data_Check1);
			if ($data_custom > 0) {
				for ($i = 0; $i < $data_custom; $i++) {
					$data = array(
						'user_id' => $user_id,
						'date' => $date,
						'dataid' =>$data_Check1[$i],
					);
					$id = $db->insert_array("tbl_customized_data", $data);
					if (!$id) {
						$db->print_last_error(false);
					}
				}
			}	
		}
}
				
?>

<div class="dvFloat" style="text-align:left; color:#000;">
    <form class="form-horizontal" method="post" enctype="multipart/form-data"  onSubmit="javascript:return data_validation()">
	 <?php
        $i=0;
        $i=$i+1;
        $query_c = "SELECT * FROM tbl_customize where isactive=1 and isdeleted=0";
        //echo $query_c;
        $result_c = mysql_query($query_c);							
        if($result_c != "") {	
            $rowcount  = mysql_num_rows($result_c);
            if($rowcount > 0) {
                while($row_c = mysql_fetch_assoc($result_c)) {
                    extract($row_c);
        ?>
              <input type="checkbox" name="chkData[]" id="chkData"  value="<?php echo $row_c['id'];?>"> <?php echo $row_c['name'];?><br>
            
        <?php
            $i=$i+1;
         }}} ?>
         
        <input type="text" name="totalDataCount" id="totalDataCount" value="<?php echo $i;?>" />
        
               <br>
               <br>                                 
        <input type="submit" name="btnCustomizeData" id="btnCustomizeData" class="button1"  style="width:100px;" value="Submit">    
    </form>                                  
</div>
