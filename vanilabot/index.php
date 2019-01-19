<?php
require_once __DIR__ . '/lineBot.php';
$bot = new linebot();
$text = $bot->getMessageText();
$bot->reply($text);
echo "Hello Vanillasky";

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient(getChannelAccessToken());
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => getChannelSecret()]);
$userMessage = getMessageText();
if($userMessage == 'ผมยู'){
$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('helloyou');
$response = $bot->replyMessage(getChannelAccessToken(), $textMessageBuilder);
echo $response->getHTTPStatus() . ' ' . $response->getRawBody();
}
?>
