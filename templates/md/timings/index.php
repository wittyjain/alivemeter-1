
<script type="text/javascript" src="<?php echo $strHostName?>/js/get_calender.js"></script>
<?php
$user_id="0";
if(isset($_SESSION['UserMDID']))
{
	$user_id=$_SESSION['UserMDID'];
}
else if (isset($_GET['UserMDID']))
{
	$user_id=$_GET['UserMDID'];
}

	
?>

<?php
if(!isset($_SESSION['UserMDID']))
{
	Alertandredirect("Sorry! Session is expired.", 'index.php');
}
?>

<section>
  <div class="top_ou">
    <div class="top_in">
      <div class="top">
        <div class="cal_12" style="padding-top: 45px; padding-bottom:60px;">
            <div class="cal_12" style="border: solid 0px #0066CC;">
            	<div class="adviceonline_md">
                 <h1 class="f_red" style="text-align: left; font-size: 20px; margin-bottom: 7px; text-transform:uppercase">Visit Timings</h1>
				  <div style="text-align: left; width: 100%;float:left">
					<table>
						<tr>
							<td style="width:30px;background:#989125">&nbsp;
								
							</td>
							<td>
								Video Query
							</td>
						</tr>
						<tr>
							<td style="width:30px;background:#545481">&nbsp;
								
							</td>
							<td>
								Other Appointments
							</td>
						</tr>
					</table>
				  </div>
                  <div style="text-align: center; width: 100%;position:absoulte;margin:0px; margin-top:15px; border:solid 1px #fff;">
						<table cellpadding="0" cellspacing="0" border="0" width="100%" align="center">
						<tr>
						  <td style="text-align:right; border:solid 0px red; float:right"><div style="margin: 5px 0px 0px -23px; position: absolute; text-align:right"></div></td>
						</tr>
							<?php
								$date=date('d-m-Y');
								$timestamp = strtotime($date);
								$MonthNo= date('m', $timestamp);
								$YearName = date('Y', $timestamp);
							?>
							<input type="hidden" id="txtCalMonthNo" name="txtCalMonthNo" value="<?php echo $MonthNo?>"/>
							<input type="hidden" id="txtCalYearNo" name="txtCalYearNo" value="<?php echo $YearName?>"/>
                            <input type="hidden" id="txtMDID" name="txtMDID" value="<?php echo $user_id?>"/>
						<tr>
						  <td valign="top" align="center" style="padding: 20px 10px 20px 10px; background-color:#FFFFFF" id="dvGetMonth">
						  
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
</section>
<script>
	Retrive_Calender_Months('','MD');
</script>