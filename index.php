<?php
include('webhook.php');
$args = ['projectId' => 'chaichan-1d327'];
$wh = new Webhook($args);
$wh->respond_simpleMessage('Man 55555');
?>
