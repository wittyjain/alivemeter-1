<?php 
$data='<?xml version="1.0" encoding="UTF-8"?>
<xmlapi>
<auth>
<apikey>12323u36d89yecnbp1546</apikey>
</auth>
<sendSMS>
<to>9323433359,9594998952</to>
<text>message from madhu getway</text>
<msgid>1,2,3,4,5</msgid>
<sender>KAPSYS</sender>
</sendSMS>
<response>Y</response>
<unicode>N</unicode>
<flash>N</flash>
</xmlapi>';

$url = "http://alerts.kapsystem.com/api/xmlapi.php?data="
       .urlencode($data);
$ch=curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$output=curl_exec($ch);
curl_close($ch);                                
echo $output;
return $output;
?> 