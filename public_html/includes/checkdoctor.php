<?php include("common.inc.php"); ?>
<?php
	$strValue = $strSeparator;
	$condition = ""; $value="";
	
	
	if(isset($_GET['obj'])) {
		$obj = $_GET['obj'];
	}
				
				$query = "SELECT * FROM tbl_doctor WHERE email = '".$obj."' ";
				
				//echo $query;
				if($query != "") {
					//echo $query;
					$result = mysql_query($query);
					if ($result != "") {
						$rowcount = mysql_num_rows($result);
						if ($rowcount > 0) {
							//Alert ($rowcount);
							while ($row = mysql_fetch_assoc($result)) {
								extract($row);
								//$otp_password=$row['otp_password'];
								$strValue = "true###";
								
								
								
							}
						}
					}
			
					else 
					{
						$strValue .= "false";
					}

			}	 	
			else {
				$strValue .= "false";
			}
					
					echo $strValue;
?>