<script type="text/javascript">
function GetSearch()
{
	var stateid = document.getElementById("txtState").value;
	var cityid = document.getElementById("txtCity").value;
	var locid = document.getElementById("txtLocation").value;
	
	
	//alert(stateid);
	//alert(cityid);
	//alert(locid);
	
	
	if(stateid!= "" && cityid!= "" && locid!= "") {
		//	document.getElementById("loading").style.display='';
			if (window.XMLHttpRequest)
			{// code for IE7+, Firefox, Chrome, Opera, Safari
				xmlhttp = new XMLHttpRequest();
			}
			else
			{// code for IE6, IE5
				xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			}
			xmlhttp.onreadystatechange=function()
			{
				if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
				{
					message = xmlhttp.responseText;
					document.getElementById("DvDeals").innerHTML=message;
					//document.getElementById("dvPaginglink").innerHTML=message;
				}
				
			}
			
			//alert(hostname+"/includes/deals.inc.php?stateid="+stateid+"&cityid="+cityid+"&locid="+locid);
			xmlhttp.open("GET",hostname+"/includes/deals.inc.php?stateid="+stateid+"&cityid="+cityid+"&locid="+locid, true);
			xmlhttp.send();
		}
	
}


</script>

<div class="row_01" style="padding:0;background: #f0f0f0; border: solid 0px #0066FF; float: left; display:none;">
        <!--class="search_deals"--><div  style="width:289px; border: solid 0px #336699;float: left; margin: 10px 0px;">
          <label style="padding-top:10px; float:left; width: 50px; text-align:left;">State</label>
          <label style="position:absolute; z-index:1; border: solid 0px #996600; width: 172px;">
              <select name="ddlState" id="ddlState" tabindex="1"  class="existing_event" style="color:#fff; box-shadow: none; border:0px; background-color:#666666; color:#cacaca; width:206px; height:30px; " onChange="javascript:getdropdown('<?php echo $city_id?>','<?php echo $location_id?>');" disabled="disabled">
                     <option value="0">Select State</option>
						<?php
								$query = "SELECT * FROM ".State." WHERE isdeleted = 0";
								$result = mysql_query($query);
								if($result != "") {
									$rowcount = mysql_num_rows($result);
									if($rowcount > 0) {
										while($row = mysql_fetch_assoc($result)) {
										
										$id = $row['state_id'];
										$state_name = $row['state_name'];
										
							?>
							 <option value="<?php echo $id; ?>" <?php if ($state_id == $id) { echo "selected"; } ?> ><?php echo $state_name; ?></option>
							<?php
										}
									}
								}
							?>
              </select>
              
              <input type="hidden" name="txtState" id="txtState" value="" />
          </label>
        </div>
        <div class="search_deals" style="width:258px;">
          <label style="padding-top:5px; float:left; width: 50px; text-align:right;">City</label>
             <div id="dvCity" name="dvCity"> &nbsp; </div>
              <input type="hidden" name="txtCity" id="txtCity" value="" />
        </div>
        <div class="search_deals" style="width:305px; text-align:right;">
          <label style="padding-top:5px; float:left">Locality</label>
        	 <div id="dvLocation" name="dvLocation"> &nbsp; </div>
              <input type="hidden" name="txtLocation" id="txtLocation" value="" />
        </div>
        <div class="search_deals" style="width:90px; margin-left: 0px;">
        		<a  class=" button1" onClick="javascript: GetSearch();" style="cursor:pointer; text-decoration:none; width:62px; text-align:center; float:left;">Search</a>
          </div>	
      </div>