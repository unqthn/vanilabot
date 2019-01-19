<?php
require_once __DIR__ . '/lineBot.php';
$bot = new linebot();
$text = $bot->getMessageText();
$userid = $bot->getUserId();
$bot->pushText($userId, 'HelloTest');
$bot->reply($userid);
echo "Hello Vanillasky";
?>
