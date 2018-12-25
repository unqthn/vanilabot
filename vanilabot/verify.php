<?php
$access_token = 'y2TdYURBEZgHLBt/kSABaPtrnZmLm/fnZVpwR7vXjQJ722qcTxBE+uGatgo4oDI3A89IMA7VWS6QSy/pH5dssyb5onlRJdTTTqBMlPIb7WblOwdvANQVyrPfRN8rZef5S0tbfBtWWZuoo3516AgGfwdB04t89/1O/w1cDnyilFU=
';
$url = 'https://api.line.me/v1/oauth/verify';
$headers = array('Authorization: Bearer ' . $access_token);
$ch = curl_init($url);curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);curl_close($ch);
echo $result;
?>
