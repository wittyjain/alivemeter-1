<?php include("common.inc.php"); ?>
<?php
$type=0;  $user_id=""; $mail_id=""; $answer="";  $videolink="0"; $md_id="0";


//Alert($user_id); 
$created_date=date('Y-m-d h:i:s'); 
 

if(isset($_GET['user_id'])){$user_id=$_GET['user_id'];}


if(isset($_GET['common_id'])){$type=$_GET['common_id'];}

if(isset($_GET['mail_id'])){$mail_id=$_GET['mail_id'];}

if(isset($_GET['answer'])){$answer=$_GET['answer'];}

if(isset($_GET['md_id'])){$md_id=$_GET['md_id'];}


 
require '../videochat/videochat/vendor/autoload.php';

  use OpenTok\OpenTok;

  $config_array = parse_ini_file("../videochat/videochat/config.ini");
  $apiKey = getenv('OPENTOK_KEY') ? : $config_array['OPENTOK_KEY'];
  $apiSecret = getenv('OPENTOK_SECRET') ? : $config_array['OPENTOK_SECRET'];

  // opentok
  $opentok = new OpenTok($apiKey, $apiSecret);

  $session = $opentok->createSession();
  $sessionId = $session->getSessionId();
  $token = $opentok->generateToken($sessionId);

  $videolink = $strHostName."/videochat/videochat/web/chat.php?".$sessionId."?".$token;
  


$query = "update ".Compose." set accept=$answer, videolink='$videolink' where mail_id=".$mail_id;
mysql_query($query);
echo $query;

$query_md = "update ".Md_Appoint." set videolink='$videolink' where compose_id=".$mail_id." and md_id=".$md_id;
mysql_query($query_md);
echo $query_md;



//echo $query;

?>

