<?php
require_once __DIR__ . '/lineBot.php';
$bot = new linebot();
$text = $bot->getMessageText();
$bot->reply($text);
echo "Hello Vanillasky";

$userid = $bot->getUserId();
$text2 = $bot->getMessageText();
$bot->reply($text2);
?>
