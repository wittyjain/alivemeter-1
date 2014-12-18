<?php include("common.inc.php"); ?>
<style>
p
{
	font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 13px; color: #666666; line-height: 20px;
}
</style>
<?php
$value=0; 

//Alert($user_id); 
$created_date=date('Y-m-d h:i:s'); 
 
if(isset($_GET['value'])){$value=$_GET['value'];}


if(isset($_SESSION['UserID'])){$user_id=$_SESSION['UserID'];}

$user_mail=GetValue("select user_email as col from tbl_users where user_id=".$user_id, "col");

$register_name=GetValue("select name as col from tbl_users where user_id=".$user_id, "col");
$cpn_name=GetValue("select title as col from  tbl_deal  where deal_id=".$value."", "col");
$cpn_code=GetValue("select coupon as col from  tbl_deal  where deal_id=".$value."", "col");
$vendor_name=GetValue("select vendor as col from  tbl_deal  where deal_id=".$value."", "col");

$description=GetValue("select description as col from  tbl_deal  where deal_id=".$value."", "col");
$deal_terms1=GetValue("select deal_terms1 as col from  tbl_deal  where deal_id=".$value."", "col");
$deal_terms2=GetValue("select deal_terms2 as col from  tbl_deal  where deal_id=".$value."", "col");
$deal_terms3=GetValue("select deal_terms3 as col from  tbl_deal  where deal_id=".$value."", "col");
$deal_terms4=GetValue("select deal_terms4 as col from  tbl_deal  where deal_id=".$value."", "col");
$deal_terms5=GetValue("select deal_terms5 as col from  tbl_deal  where deal_id=".$value."", "col");
$deal_terms6=GetValue("select deal_terms6 as col from  tbl_deal  where deal_id=".$value."", "col");
$deal_terms7=GetValue("select deal_terms7 as col from  tbl_deal  where deal_id=".$value."", "col");
$deal_terms8=GetValue("select deal_terms8 as col from  tbl_deal  where deal_id=".$value."", "col");
$deal_terms9=GetValue("select deal_terms9 as col from  tbl_deal  where deal_id=".$value."", "col");

$highlights1=GetValue("select highlights1 as col from  tbl_deal  where deal_id=".$value."", "col");
$highlights2=GetValue("select highlights2 as col from  tbl_deal  where deal_id=".$value."", "col");
$highlights3=GetValue("select highlights3 as col from  tbl_deal  where deal_id=".$value."", "col");
$highlights4=GetValue("select highlights4 as col from  tbl_deal  where deal_id=".$value."", "col");
$highlights5=GetValue("select highlights5 as col from  tbl_deal  where deal_id=".$value."", "col");
$highlights6=GetValue("select highlights6 as col from  tbl_deal  where deal_id=".$value."", "col");
$highlights7=GetValue("select highlights7 as col from  tbl_deal  where deal_id=".$value."", "col");
$highlights8=GetValue("select highlights8 as col from  tbl_deal  where deal_id=".$value."", "col");
$highlights9=GetValue("select highlights9 as col from  tbl_deal  where deal_id=".$value."", "col");

$fine_print=GetValue("select fine_prints as col from  tbl_deal  where deal_id=".$value."", "col");


$rowcount=GetValue("select Count(*) as col from ".Get_Coupon."  where coupon_id=".$value." and user_id=".$user_id."", "col");
//Alert ($rowcount);

	if ($value > 0) {
			//Alert($rowcount);
			if ($rowcount <= 0) {
				
				$data1 = array(
					'user_id'=> $user_id,
					'coupon_id'=>$value,
					'created_date'=>$created_date,
					'isactive'=>1,
					'isdeleted'=>0,
					
				);
				$cpn_id =$db->insert_array(Get_Coupon, $data1);
				
				$to = $user_mail;
				$from = "Alivemeter";
				$strSubject = "Your Alivemeter Coupon - ".$cpn_name;
				
				$string=$string."<table width='780px' border='0' cellpadding='0' cellspacing='0' style='font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 13px; color: #666666; line-height: 20px; margin: 0px;'>";
				$string=$string."<tr>";
				$string=$string."<td style='border: solid 12px #4ec8c8;'>";
				$string=$string."<table width='757px' border='0' cellpadding='0' cellspacing='0' style='font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 13px; color: #666666; line-height: 20px; margin: 0px;'>";
				$string=$string."<tr>";
				$string=$string."<td style='background-color: #FFF; height: 70px; border-bottom: solid 2px #4ec8c8;'>";
				$string=$string."<table width='757px' border='0' cellpadding='0' cellspacing='0' style='font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 13px; color: #666666; line-height: 20px; margin: 0px;'>";
				$string=$string."<tr>";
				$string=$string."<td style='padding-left: 17px; width: 159px; padding-bottom: 5px;'>";
				$string=$string."<a href='http://www.alivemeter.com/' target='_blank' style='color: #666666; text-decoration: underline;'><img src='$strHostName/images/brandnew.png' alt='' title='' border='0' /></a>";
				$string=$string."</td>";
				$string=$string."<td style='padding-right: 20px; padding-top: 10px; text-align: right; display: none;'>";
				$string=$string."<a href='https://www.facebook.com/pages/Alivemeter/687872857994981' target='_blank' style='color: #666666; text-decoration: underline;'><img src='http://www.alivemeter.com/images/socialmedia/facebook.png' alt='' title='' border='0' /></a>&nbsp;<a href='https://twitter.com/@alivemeter' target='_blank' style='color: #666666; text-decoration: underline;'><img src='http://www.alivemeter.com/images/socialmedia/twitter.png' alt='' title='' border='0' /></a>&nbsp;";
				$string=$string."</td>";
				$string=$string."</tr>";
				$string=$string."</table>";
				$string=$string."</td>";
				$string=$string."</tr>";
				$string=$string."<tr>";
				$string=$string."<td style='background-color: #f0f0f0;'>";
				
				$string=$string."<table width='757px' border='0' cellpadding='0' cellspacing='0' style='font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 13px; color: #666666; line-height: 20px; margin: 0px;'>";
				$string=$string."<tr>";
				$string=$string."<td style='padding: 20px 11px 10px 11px; text-align: justify; margin: 0px; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 13px; color: #666666; '>";
				$string=$string."<p style='font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 13px; color: #99cc00; font-weight: bold; line-height: 20px; margin: 0px;'>Dear ".$register_name.",</p>";
				
				$string=$string."<p style='font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 13px; color: #666666; line-height: 20px; padding-top: 10px; margin: 0px;'>Your coupon details have been listed below. Please note, the coupons can be redeemed at store outlet by submitting the physical copy.</p>";
				
				$string=$string."<p style='font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 13px; color: #666666; line-height: 20px; padding-top: 10px; margin: 0px;'>If there's anything else we can do to make you smile, please don't hesitate to get in touch with us.</p>";
				
				$string=$string."<p style='font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 13px; color: #666666; line-height: 20px; padding-top: 10px; margin: 0px;'><span style='font-weight:bold;'>Store:</span> ".$vendor_name."</p>";
				
				$string=$string."<p style='font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 13px; color: #666666; line-height: 20px; padding-top: 10px; margin: 0px;'><span style='font-weight:bold;'>Coupon Code:</span> ".$cpn_code."</p>";
				
				$string=$string."<p style='font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 13px; color: #666666; line-height: 20px; padding-top: 10px; margin: 0px;'><span style='font-weight:bold;'>Description:</span> ".$description."</p>";
				
				$string=$string."<p style='font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 13px; color: #666666; line-height: 20px; padding-top: 10px; margin: 0px;'><span style='font-weight:bold;'>Deal Terms:</span><br> "; 
				if($deal_terms1!="")
				{
					$string=$string.$deal_terms1."<br>";
				}
				if($deal_terms2!="")
				{
					$string=$string.$deal_terms2."<br>";
				}
				if($deal_terms3!="")
				{
					$string=$string.$deal_terms3."<br>";
				}
				if($deal_terms4!="")
				{
					$string=$string.$deal_terms4."<br>";
				}
				if($deal_terms5!="")
				{
					$string=$string.$deal_terms5."<br>";
				}
				if($deal_terms6!="")
				{
					$string=$string.$deal_terms6."<br>";
				}
				if($deal_terms7!="")
				{
					$string=$string.$deal_terms7."<br>";
				}
				if($deal_terms8!="")
				{
					$string=$string.$deal_terms8."<br>";
				}
				if($deal_terms9!="")
				{
					$string=$string.$deal_terms9."<br>";
				}
		
				$string=$string."</p>";
				
				
				
				$string=$string."<p style='font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 13px; color: #666666; line-height: 20px; padding-top: 10px; margin: 0px;'><span style='font-weight:bold;'>Highlights:</span> <br> "; 
				if($highlights1!="")
				{
					$string=$string.$highlights1."<br>";
				}
				if($highlights2!="")
				{
					$string=$string.$highlights2."<br>";
				}
				if($highlights3!="")
				{
					$string=$string.$highlights3."<br>";
				}
				if($highlights4!="")
				{
					$string=$string.$highlights4."<br>";
				}
				if($highlights5!="")
				{
					$string=$string.$highlights5."<br>";
				}
				if($highlights6!="")
				{
					$string=$string.$highlights6."<br>";
				}
				if($highlights7!="")
				{
					$string=$string.$highlights7."<br>";
				}
				if($highlights8!="")
				{
					$string=$string.$highlights8."<br>";
				}
				if($highlights9!="")
				{
					$string=$string.$highlights9."<br>";
				}
		
				$string=$string."</p>";
				
				
				
				$string=$string."<p style='font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 13px; color: #666666; line-height: 20px; padding-top: 10px; margin: 0px;'><span style='font-weight:bold;'>Fine print: </span>".$fine_print.".</p>";
				
				$string=$string."</td>";
				$string=$string."</tr>";
				$string=$string."<tr>";
				$string=$string."<td style='padding: 25px 11px 25px 11px; text-align: left; margin: 0px; font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 13px; color: #666666; line-height: 20px; vertical-align: top;'>";
				$string=$string."<span style='color: #666666; font-weight: bold; font-size: 13px;'>- The Alivemeter Team</span><br />";
				
				$string=$string."</td>";
				$string=$string."</tr>";
				$string=$string."</table>";
				$string=$string."</td>";
				$string=$string."</tr>";
				$string=$string."</table>";
				$string=$string."</td>";
				$string=$string."</tr>";
				$string=$string."</table>"; 
				
				$strBody=$string;
			///	 echo $strBody;
				//return;
			SendEmail("Alivemeter Team", "support@alivemeter.com", $user_mail, $strSubject, $strBody);
				
				
				
			}
		
	}
	
	
	
	

?>

