<?php
//implement by :  koftkoft v1
//License GPL3



///// Just past your token here ///
$token = '<<< PUT YOUR API KEY HERE >>>';  // Get token from    https://notify-bot.line.me/my/









////////////// For programmer ///////////////////////
///////////////// For programmer ///////////////////////
/////////////////// For programmer ///////////////////////

include "vendor/autoload.php";

$ln = new KS\Line\LineNotify($token); // https://github.com/kittinan/php-line-notify 

$text = 'Hello Empty Text';




 ///http://thisinterestsme.com/receiving-json-post-data-via-php/
//Make sure that it is a POST request.
if(strcasecmp($_SERVER['REQUEST_METHOD'], 'POST') != 0){
    
    die( new Exception('Request method must be POST!') );
}

 
//Make sure that the content type of the POST request has been set to application/json
$contentType = isset($_SERVER["CONTENT_TYPE"]) ? trim($_SERVER["CONTENT_TYPE"]) : '';
if(strcasecmp($contentType, 'application/json') != 0){
    die( new Exception('Content type must be: application/json') );
    
}
 
//Receive the RAW post data.
$content = trim(file_get_contents("php://input"));
 
//Attempt to decode the incoming RAW post data from JSON.
$decoded = json_decode($content, true);
 
//If json_decode failed, the JSON is invalid.
if(!is_array($decoded)){
    die( new Exception('Received content contained invalid JSON!') );
    
}
 


$data  = $decoded['data'];
$time = $decoded['create'];

$event = strtoupper( $data["object"] );
$amount = $data["amount"] / 100 ;

$desc = $data["description"];
$title_pos  = strpos( $desc, "\n" );
$title = substr( $desc, 0, $title_pos);

$status = $data["status"];
$currency = $data["currency"];


if( $event == "CHARGE" ) {
	$text = "{$event} {$amount} {$currency} for {$title} with {$status}";
	$ln->send($text);
	//$image_path = '/YOUR/IMAGE/PATH'; //Line notify allow only jpeg and png file
	//$ln->send($text, $image_path);

	//echo $text;
}





