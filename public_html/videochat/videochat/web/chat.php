<!DOCTYPE html>
<html lang="en">
<body>
  <div id="subscriberContainer"></div>
  <div id="publisherContainer"></div>
  <link rel="stylesheet" href="./css/chat.css">
  <script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
  <!-- OpenTok -->
  <script src="http://static.opentok.com/webrtc/v2.2/js/opentok.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/handlebars.js/2.0.0-alpha.4/handlebars.js"></script>
  <!-- Moment: date lib -->
  <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.8.2/moment-with-locales.min.js"></script>
  <!-- Bootstrap 3.2.0 -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
  <!-- Optional theme for Bootstrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
  <!-- Latest compiled and minified JavaScript for Bootstrap-->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  <script>
    
  <?php 
      $queryString = $_SERVER['QUERY_STRING'];
      $words = explode( '?', $queryString);
      $config_array = parse_ini_file("../config.ini");
      $apiKey = getenv('OPENTOK_KEY') ? : $config_array['OPENTOK_KEY'];
      $apiSecret = getenv('OPENTOK_SECRET') ? : $config_array['OPENTOK_SECRET'];
  ?>
  session_id = "<?php echo $words[0] ?>"
  token = "<?php echo $words[1] ?>",
  apiKey = "<?php echo $apiKey ?>",
  property = { width: "100%", height: "100%", insertMode: "append" },
  publisher = OT.initPublisher("publisherContainer", property),
  session = OT.initSession(apiKey, session_id);
  session.connect( token, function(err){
    if(!err){ session.publish(publisher); }
  });
  session.on("streamCreated", function(event){
    session.subscribe(event.stream, "subscriberContainer",  property);
  });

</script>
</body>
</html>
