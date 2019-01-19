<?php
require_once __DIR__ . '/lineBot.php';
$bot = new Linebot();
$text = $bot->getMessageText();
$bot->reply('ไงงงงงงงงวะ');
if($text = 'HelloTest'){
$userid = $bot->getUserId();
$bot->pushText($userId, 'HelloTest');
$bot->reply($userid);
$bot->reply($text);

}
echo "Hello Vanillasky";
?>
