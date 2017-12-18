<?php
//
// $access_token = 'REu678+TOo+xbHA8QWYQCbQmPt5Sj4w1HKeC3wLvdzDlgKNM6RikwsMB79nMz6AlXQo8ozkIIUPbDbrnNH9OBuqJhXVATMopsukLWQV+FvmXsCpd1rubnXKLz/2ySBTZRttlRKNqAGEP1ceiMYajlwdB04t89/1O/w1cDnyilFU=';
// $channelSecret = '0d063d59744bc653dde526c51ad431db';
//
// $httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
// $bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);
//
// $response = $bot->replyText('<reply token>', 'hello!');

// example: https://github.com/onlinetuts/line-bot-api/blob/master/php/example/chapter-01.php

// include ('line-bot-api/php/line-bot.php');
include ('line-bot.php');

$channelSecret = '0d063d59744bc653dde526c51ad431db';
$access_token  = 'REu678+TOo+xbHA8QWYQCbQmPt5Sj4w1HKeC3wLvdzDlgKNM6RikwsMB79nMz6AlXQo8ozkIIUPbDbrnNH9OBuqJhXVATMopsukLWQV+FvmXsCpd1rubnXKLz/2ySBTZRttlRKNqAGEP1ceiMYajlwdB04t89/1O/w1cDnyilFU=';

$bot = new BOT_API($channelSecret, $access_token);
$events = $bot->isEvents;

if (!empty($events)) {
 	//$bot->replyMessageNew($bot->replyToken, json_encode($bot->message));
 
	 // Loop through each event
	foreach ($events['events'] as $event) {
		// Reply only when message sent is in 'text' format
		if ($event['type'] == 'message' && $event['message']['type'] == 'text') {
			
			$bot->replyMessageNew($bot->replyToken, "ทดสอบ : ". $event['message']['text']);
			
			// // Get text sent
			// $text = $event['message']['text'];
			// // Get replyToken
			// $replyToken = $event['replyToken'];

			// // Build message to reply back
			// $messages = [
			// 	'type' => 'text',
			// 	'text' => $text
			// ];

			// // Make a POST Request to Messaging API to reply to sender
			// $url = 'https://api.line.me/v2/bot/message/reply';
			// $data = [
			// 	'replyToken' => $replyToken,
			// 	'messages' => [$messages],
			// ];
			// $post = json_encode($data);
			// $headers = array('Content-Type: application/json', 'Authorization: Bearer ' . $access_token);

			// $ch = curl_init($url);
			// curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
			// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			// curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
			// curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			// curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
			// $result = curl_exec($ch);
			// curl_close($ch);

			// echo $result . "\r\n";
		}
	}

	if ($bot->isSuccess()) {
		echo 'Succeeded!';
		exit();
	}

	// Failed
	echo $bot->response->getHTTPStatus . ' ' . $bot->response->getRawBody();
	exit();

}

echo "ok";
?>
