

<?php

// example: https://github.com/onlinetuts/line-bot-api/blob/master/php/example/chapter-02.php

include ('line-bot.php');

$channelSecret = '0d063d59744bc653dde526c51ad431db';
$access_token  = 'REu678+TOo+xbHA8QWYQCbQmPt5Sj4w1HKeC3wLvdzDlgKNM6RikwsMB79nMz6AlXQo8ozkIIUPbDbrnNH9OBuqJhXVATMopsukLWQV+FvmXsCpd1rubnXKLz/2ySBTZRttlRKNqAGEP1ceiMYajlwdB04t89/1O/w1cDnyilFU=';

$bot = new BOT_API($channelSecret, $access_token);

$bot->sendMessageNew('U291587c13144989597448437db2b8555', 'Hello World !!');

if ($bot->isSuccess()) {
	echo 'Succeeded!';
	exit();
}

// Failed
echo $bot->response->getHTTPStatus . ' ' . $bot->response->getRawBody();
exit();

//linux code : curl -X POST -H 'Content-Type: application/json; charser=UTF-8' -H 'Authorization: Bearer [Channel Access Token]' -d '{ "to" : "[Your userId / User Id]", "messages" : [{ "type": "text", "text": "Server 127.0.0.1 have SSH login" }]}' https://api.line.me/v2/bot/message/push
 ?>
