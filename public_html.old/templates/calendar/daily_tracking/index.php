<script type="text/javascript" src="<?php echo $strHostName?>/js/calories_steup3_validation.js"></script>
<script type="text/javascript" src="<?php echo $strHostName?>/js/other_dynamic.js"></script>
<script type="text/javascript" src="<?php echo $strHostName?>/js/health_steup_validation.js"></script>
<script type="text/javascript" src="<?php echo $strHostName?>/js/health_steup_insert_retrive.js"></script>
<script language="javascript" type="text/javascript">
function custom_data_validation(){


var totalCount=document.getElementById("totalDataCount").value;
//alert (totalCount);
var datacountid="";
for (i=1;i < totalCount; i++ )
{

if (document.getElementById("chkData"+i).checked==true)
{
datacountid=datacountid+","+document.getElementById("chkData"+i).value;
// alert (datacountid);
document.getElementById("totalDataCountLimit").value=datacountid;
totallength=datacountid.split(',').length;
//alert (totallength);
document.getElementById("totalLimit").value=totallength;
//return false;
// alert (totallength);
if(totallength > 5)
{
alert ("Please select only four parameters.");
return false;
}
}
/*else if (document.getElementById("chkData"+i).checked==false)
{
alert ("Please select atleast one parameter.");
return false;
}*/

}




}
</script>

<?php include "includes/dashboard_top.inc.php";?>
<?php
if(isset($_SESSION['UserID']))
	{
		$user_id=$_SESSION['UserID'];
	}
	
	
if(isset($_GET['alived']) || isset($_GET['alivem']) || isset($_GET['alivey']))
{
	$date=$_GET['alivey']."-".$_GET['alivem']."-".$_GET['alived'];
	//Alert ($date);
}
else
{
	$date=date("Y-m-d");
	//Alert ($date);
}
?>
<section>
<div class="cal_full_size">
<div class="cal_12 m_outo">
 
  <div class="dvFloat">
    <div class="dvWrapper">
    
      <div style=" padding:0px 0px 35px 0px">
            <div style="width:100%; float: left; text-align: right;border:solid 0px red;padding-bottom:10px; background-color:#FFFFFF;padding-right:0px;">

<a href="<?php echo $strHostName?>/page.php?dir=health/calendar" style="background-color:#dcdcdc; float:right; padding:7px; margin-left:10px;"> Back to calender view</a>
</div>

            
            
            <div style="text-align: center; width: 100%;position:absoulte;margin:0px; margin-top:15px;">
              <table cellpadding="0" cellspacing="0" border="0" width="100%" align="center">
                
                <tr>
                  <td valign="top" align="center" style="padding: 10px 0px 10px 10px;"><div class="DvFloat">
                      <div class="TabDv">
                        <div  style="background-color:#666666;padding:0px 5px;">
                          <ul id="tabstabs15" class="shadetabs15">
                            <li  class="selected" onclick="javascript:SetFrameHeight();"><a href="#" rel="tabs151" class="selected" >Food </a></li>
                            <li onclick="javascript:SetFrameHeightE();"><a href="#" rel="tabs152">Exercise</a></li>
                            <li><a href="#" rel="tabs158">Water </a></li>
                            <li><a href="#" rel="tabs153">Measurements</a></li>
                            <li><a href="#" rel="tabs154">Blood Pressure</a></li>
                            <li><a href="#" rel="tabs155">Sugar Profile</a></li>
                            <li><a href="#" rel="tabs156">Lifestyle</a></li>
                            <li><a href="#" rel="tabs157">Lipid Profile </a></li>
                          
                          </ul>
                        </div>
                        <div class="TabContentDetails15">
                          <div id="tabs151" class="tabcontent15">
                            <div  style="padding:0px 5px;display:none;">
								  <ul id="tabstabs" class="shadetabs" style="border-top:solid 0px #c5c5c5;border-bottom:solid 1px #c5c5c5; height:125px;padding:20px 0px">
									<li><a href="#" rel="tabs1"  class="tab-1"><span class="tab-img1"></span>
									  <div style=" font-size:20px;  color:#7ca500; text-align:center">234 Cal</div>
									  </a></li>
									<li><a href="#" rel="tabs2"  class="tab-3"><span class="tab-img3"></span>
									  <div style=" font-size:20px;  color:#7ca500; text-align:center">234 Cal</div>
									  </a></li>
									<li><a href="#" rel="tabs3" class="tab-2"><span class="tab-img2"></span>
									  <div style=" font-size:20px;  color:#7ca500; text-align:center">1234 Cal</div>
									  </a></li>
								  </ul>
								</div>
								<div class="tabs1" style="margin-bottom:0px" id="dvNutrition">
								  <div style="float:right; width:100%; text-align:right; border:solid 0px red;">
                                  <input type="text" name="txtCurDate" id="txtCurDate" value="<?php echo date('d-M-Y',strtotime($date))?>" readonly="readonly" style="width:100px;text-align:center;"/>
                                  </div>
								  <?php include 'includes/nutrition.inc.php' ?>
								 
								</div>
                          </div>
                          <div id="tabs152" class="tabcontent15" style="border:solid 0px red; width:71%; margin-left:122px;">
                           	<div style="float:right; width:100%; text-align:right; border:solid 0px red;">
                                  <input type="text" name="txtCurDate1" id="txtCurDate1" value="<?php echo date('d-M-Y',strtotime($date))?>" readonly="readonly" style="width:100px;text-align:center;"/>
                                  </div>
							<?php include "includes/excercise_daily_tracking.inc.php"; ?>
                          </div>
                           <div id="tabs158" class="tabcontent15">
                           	 	<?php include 'includes/water_daily_tracking.inc.php' ?>
                          </div>
                          <div id="tabs153" class="tabcontent15">
                            <?php include "includes/measurement_daily_tracking.inc.php"; ?>
                          </div>
                          <div id="tabs154" class="tabcontent15">
                           <?php include "includes/daily_blood_pressure.inc.php";?>
                          </div>
                          <div id="tabs155" class="tabcontent15">
                            <?php include "includes/sugar_profile_daily_tracking.inc.php";?>
                          </div>
                          <div id="tabs156" class="tabcontent15">
                           	<?php include "includes/life_style_daily_tracking.inc.php";?>
                          </div>
                          <div id="tabs157" class="tabcontent15">
                           	 <?php include "view_files/lipid_profile.inc.php";?>
                          </div>
                          
                        </div>
                      </div>
                    </div></td>
                </tr>
              </table>
            </div>	
       </div>
      </div>
   </div>
</div>
</div>

</section>
<div id="dvpopup-customizedata" style="text-align: center; width: 200px; display: none; position:absoulte; margin-top:65px; margin-left:550px; background-color:#fff; padding:10px;">

<?php include "includes/customize_data.inc.php";?>
</div>

<script type="text/javascript">
var countries15=new ddtabcontent("tabstabs15");
countries15.setpersist(true);
countries15.setselectedClassTarget("link"); //"link" or "linkparent"
countries15.init();

var countries16=new ddtabcontent("calorie_tab");
countries16.setpersist(true);
countries16.setselectedClassTarget("link"); //"link" or "linkparent"
countries16.init();

var countries=new ddtabcontent("tabstabs");
countries.setpersist(true);
countries.setselectedClassTarget("link"); //"link" or "linkparent"
countries.init();

var countries1=new ddtabcontent("tabstabs1");
countries1.setpersist(true);
countries1.setselectedClassTarget("link"); //"link" or "linkparent"
countries1.init();

var countriesa=new ddtabcontent("tabstabsa");
countriesa.setpersist(true);
countriesa.setselectedClassTarget("link"); //"link" or "linkparent"
countriesa.init();

var countries1a=new ddtabcontent("tabstabs1a");
countries1a.setpersist(true);
countries1a.setselectedClassTarget("link"); //"link" or "linkparent"
countries1a.init();

var countries=new ddtabcontent("tabstabs");
countries.setpersist(true);
countries.setselectedClassTarget("link"); //"link" or "linkparent"
countries.init();

var countries1=new ddtabcontent("tabstabs1");
countries1.setpersist(true);
countries1.setselectedClassTarget("link"); //"link" or "linkparent"
countries1.init();


var countries2=new ddtabcontent("tabstabs2");
countries2.setpersist(true);
countries2.setselectedClassTarget("link"); //"link" or "linkparent"
countries2.init();

var countries3=new ddtabcontent("tabstabs3");
countries3.setpersist(true);
countries3.setselectedClassTarget("link"); //"link" or "linkparent"
countries3.init();


var countries4=new ddtabcontent("tabstabs4");
countries4.setpersist(true);
countries4.setselectedClassTarget("link"); //"link" or "linkparent"
countries4.init();


var countries5=new ddtabcontent("tabstabs5");
countries5.setpersist(true);
countries5.setselectedClassTarget("link"); //"link" or "linkparent"
countries5.init();


var countries6=new ddtabcontent("tabstabs6");
countries6.setpersist(true);
countries6.setselectedClassTarget("link"); //"link" or "linkparent"
countries6.init();


var countries7=new ddtabcontent("tabstabs7");
countries7.setpersist(true);
countries7.setselectedClassTarget("link"); //"link" or "linkparent"
countries7.init();



var countries8=new ddtabcontent("tabstabs8");
countries8.setpersist(true);
countries8.setselectedClassTarget("link"); //"link" or "linkparent"
countries8.init();



var countries9=new ddtabcontent("tabstabs9");
countries9.setpersist(true);
countries9.setselectedClassTarget("link"); //"link" or "linkparent"
countries9.init();



var countries10=new ddtabcontent("tabstabs10");
countries10.setpersist(true);
countries10.setselectedClassTarget("link"); //"link" or "linkparent"
countries10.init();

var countries11=new ddtabcontent("tabstabs11");
countries11.setpersist(true);
countries11.setselectedClassTarget("link"); //"link" or "linkparent"
countries11.init();


var countries12=new ddtabcontent("tabstabs12");
countries12.setpersist(true);
countries12.setselectedClassTarget("link"); //"link" or "linkparent"
countries12.init();


var countries13=new ddtabcontent("tabstabs13");
countries13.setpersist(true);
countries13.setselectedClassTarget("link"); //"link" or "linkparent"
countries13.init();


var countries14=new ddtabcontent("tabstabs14");
countries14.setpersist(true);
countries14.setselectedClassTarget("link"); //"link" or "linkparent"
countries14.init();
</script>

<script>Lipid_Profile_Retrive_By_Id('Lipid_Profile','<?php echo $date;?>');</script>
