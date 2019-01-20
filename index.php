<?php
//require_once __DIR__ . '/lineBot.php';
//$bot = new Linebot();
$method = $_SERVER['REQUEST_METHOD'];

//process only when method is POST
if($method == "POST"){
    $requestBody = file_get_contents('php://input');
    $json = json_decode($requestBody);

    $text = $json->queryResult->parameters->text;
    //$text = $json->results->metadata->intentName;
    switch($text){
        case 'hi':
            $speech = "Hi , I am chatbot";
            break;
        case 'bye':
            $speech = "Bye, good chatbot";
            break;
        case 'ยูเอง':
            $speech = "chatbot";
            break;
        default:
            $speech = "chatbot nottt";
            break;
    }


    $response = new \stdClass();
    $response->speech = $speech;
    $response->displayText = $speech;
    $response->source = "webhook";
    echo json_encode($response);

}
else
{
    echo "Method not allowed";
}
/*
require_once __DIR__ . '/lineBot.php';
$bot = new Linebot();
$text = $bot->getMessageText();
if($text = 'HelloTest'){
$userid = $bot->getUserId();
$bot->pushText($userId, 'HelloTest');
$bot->reply($userid);
$bot->reply($text);

}
/////
use Dialogflow\WebhookClient;

$agent = new WebhookClient(json_decode(file_get_contents('php://input'),true));

echo "Hello Vanillasky";

function processMessage($update) {
    if($update["result"]["action"] == "sayHello"){
        sendMessage(array(
            "source" => $update["result"]["source"],
            "speech" => "Hello from webhook",
            "displayText" => "Hello from webhook",
            "contextOut" => array()
        ));
    }
}

function sendMessage($parameters) {
    echo json_encode($parameters);
}

$update_response = file_get_contents("php://input");
$update = json_decode($update_response, true);
if (isset($update["result"]["action"])) {
    processMessage($update);
}

//////
$method = $_SERVER['REQUEST_METHOD'];

if($method == 'POST'){
    $requestBody = file_get_contents('php://input');
    $json = json_decode($requestBody);

    $text = $json->results->metadata->intentName;
    switch ($text) {
        case 'Name':
            $speech = "This question is too personal";
            break;    
        default:
            $speech = "Sorry, I didnt get that.";
            break;
    }

    $response = new \stdClass();
    $response->speech = $speech;
    $response->displayText = $speech;
    $response->source = "webhook";
    echo json_encode($response);
}
else
{
    echo "Method not allowed";
}
*/

?>
