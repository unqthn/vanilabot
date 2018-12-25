<?php

class Setting {
	public static function getChannelAccessToken(){
		$channelAccessToken = "y2TdYURBEZgHLBt/kSABaPtrnZmLm/fnZVpwR7vXjQJ722qcTxBE+uGatgo4oDI3A89IMA7VWS6QSy/pH5dssyb5onlRJdTTTqBMlPIb7WblOwdvANQVyrPfRN8rZef5S0tbfBtWWZuoo3516AgGfwdB04t89/1O/w1cDnyilFU=";
		return $channelAccessToken;
	}
	public static function getChannelSecret(){
		$channelSecret = "70a4d773d5a07cec1bf4b5fe2ad2b989";
		return $channelSecret;
	}
	public static function getApiReply(){
		$api = "https://api.line.me/v2/bot/message/reply";
		return $api;
	}
	public static function getApiPush(){
		$api = "https://api.line.me/v2/bot/message/push";
		return $api;
	}
}
?>
