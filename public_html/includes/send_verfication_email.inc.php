<?php include("../includes/common.inc.php"); ?>
<?php

$random_no_db ="";
$tbl="";
$user_id_db="0";
if(isset($_GET['tbl']))
{
	$tbl=$_GET['tbl'];
}

if(isset($_GET['user_id']))
{
	$user_id_db=$converter->decode($_GET['user_id']);
}


$strMsg="";
$checkPassSql = "SELECT * FROM " . Users . " WHERE user_id =".$user_id_db;
//echo $checkPassSql;
$checkQuery = mysql_query($checkPassSql);
$user = mysql_fetch_array($checkQuery);
$user_name= $user['name'];
$user_email = $user['user_email'];
$random_no_db = $user['verification'];
$strMsg="Welcome to Alivemeter. Enjoy premium benefits FREE upto 31st Jan 2015. Reach us on our social media handles!";
if($tbl=="Mobile")
{
	$checkPassSql = "SELECT * FROM " . Mobile . " WHERE user_id =".$user_id_db." order by mobile_id desc limit 1" ;
	$checkQuery = mysql_query($checkPassSql);
	$user = mysql_fetch_array($checkQuery);
	$random_no_db =$user['randomno'];
	$strMsg="We have received mobile number change request for your registered account";
}



$to = $user_email;
$strSubject="New Mobile Verification in Alivemeter.com";
$string=""; 
$string=$string."<table width='780px' border='0' cellpadding='0' cellspacing='0'>";
$string=$string."<tr>";
$string=$string."<td style='border: solid 12px #4ec8c8;'>";
$string=$string."<table width='757px' border='0' cellpadding='0' cellspacing='0'>";
$string=$string."<tr>";
$string=$string."<td style='background-color: #FFF; height: 70px; border-bottom: solid 2px #4ec8c8;'>";
$string=$string."<table width='757px' border='0' cellpadding='0' cellspacing='0'>";
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

$string=$string."<table width='757px' border='0' cellpadding='0' cellspacing='0'>";
$string=$string."<tr>";
$string=$string."<td style='padding: 20px 11px 10px 11px; text-align: justify; margin: 0px;'>";
$string=$string."<p style='font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 13px; color: #99cc00; font-weight: bold; line-height: 20px; margin: 0px;'>Dear ".$user_name.",</p>";
$string=$string."<p style='font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 13px; color: #666666; line-height: 20px; padding-top: 10px; margin: 0px;'>".$strMsg."</p>";                         

				   
$string=$string."</td>";
$string=$string."</tr>";
$string=$string."<tr>";
$string=$string."<td style='padding: 5px 11px 0px 11px; text-align: justify; margin: 0px;'>";
$string=$string."<table width='100%' border='0' cellspacing='0' cellpadding='0'>";
$string=$string."<tr>";
$string=$string."</tr>";
$string=$string."<tr>";
$string=$string."<td>";


$string=$string."<p style='font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 13px; color: #666666; line-height: 20px; padding-top: 10px; margin: 0px;'>&bull; Your verification Code is ".$random_no_db."</p>";

				
$string=$string."<p style='font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 13px; color: #666666; line-height: 20px; padding-top: 10px; margin: 0px;'>We believe that our services will add value to you and your family. We would like to hear from you about your experiences, which will help us serve you better. Please write to us at support@alivemeter.com.</p>";


$string=$string."</td>";				
$string=$string."</tr>";
$string=$string."<tr>";
$string=$string."<td>";
$string=$string."<p style='font-family: Verdana, Arial, Helvetica, sans-serif; font-size: 13px; color: #666666; line-height: 20px; padding-top: 10px; margin: 0px;'>We wish you Health.Wealth.Happiness.</p>";
$string=$string."</td>";
$string=$string."</tr>";
$string=$string."</table>";
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
//echo $user_email."<br/>".$strBody;

SendEmail("Alivemeter Team", "support@alivemeter.com", $user_email, $strSubject, $strBody);
?>