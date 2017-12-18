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

if (!empty($bot->isEvents)) {

	//$bot->replyMessageNew($bot->replyToken, json_encode($bot->message));
	
	$bot->replyMessageNew($bot->replyToken, "2 ทดสอบ : ".$bot->isEvents." : ".$bot->tex);

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
