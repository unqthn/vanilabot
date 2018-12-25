<?php
$access_token = 'Wg8cX84pYEcUEe5maa4P5HCb0Q5oHzmML+1f/5fehVj/6wk1yhRAOg9lQKAOqrGsA89IMA7VWS6QSy/pH5dssyb5onlRJdTTTqBMlPIb7WZoPpnGlJYQOjT4NsB5rxBjwD8Or1B+4LhBtlIs/xnHcwdB04t89/1O/w1cDnyilFU=
';
$url = 'https://api.line.me/v1/oauth/verify';
$headers = array('Authorization: Bearer ' . $access_token);
$ch = curl_init($url);curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);curl_close($ch);
echo $result;
?>