<html>
<body>
  <?php
  require '../vendor/autoload.php';
  use OpenTok\OpenTok;

  $config_array = parse_ini_file("../config.ini");
  $apiKey = getenv('OPENTOK_KEY') ? : $config_array['OPENTOK_KEY'];
  $apiSecret = getenv('OPENTOK_SECRET') ? : $config_array['OPENTOK_SECRET'];

  // opentok
  $opentok = new OpenTok($apiKey, $apiSecret);

  $session = $opentok->createSession();
  $sessionId = $session->getSessionId();
  $token = $opentok->generateToken($sessionId);

  //$videoLink = "localhost/PHP_Practise/alivemeter/videoChat/web/chat.php?".$sessionId."?".$token;
  $videoLink = "http://180.149.242.20/~alivemeter/videoChat/videochat/web/chat.php?".$sessionId."?".$token;
  echo "Your appointment is scheduled on the above mentioned date and time !!"."<br>";

  echo "Please go to ".$videoLink." to access the chat";

?>
</body>
</html>

