<?php

	include ('line-bot.php');
	include ('apibx/BxApiETH.php');

	$channelSecret = '0d063d59744bc653dde526c51ad431db';
	$access_token  = 'REu678+TOo+xbHA8QWYQCbQmPt5Sj4w1HKeC3wLvdzDlgKNM6RikwsMB79nMz6AlXQo8ozkIIUPbDbrnNH9OBuqJhXVATMopsukLWQV+FvmXsCpd1rubnXKLz/2ySBTZRttlRKNqAGEP1ceiMYajlwdB04t89/1O/w1cDnyilFU=';

	$bot = new BOT_API($channelSecret, $access_token);
	//$arrayETH
	// $val['pairing_id'];
	// $val['primary_currency'];
	// $val['secondary_currency'];
	// $val['change'];
	// $val['last_price'];
	// $val['volume_24hours'];

	$bot->sendMessageNew('U291587c13144989597448437db2b8555',
	$arrayETH['primary_currency'].' : '.$arrayETH['secondary_currency'].'
	LastPrice : '.$arrayETH['last_price'].'
	volume_24hours : '.$arrayETH['volume_24hours']
	.PHP_EOL.$arrayOMG['primary_currency'].' : '.$arrayOMG['secondary_currency'].'
	LastPrice : '.$arrayOMG['last_price'].'
	volume_24hours : '.$arrayOMG['volume_24hours']);

	//change : '.$arrayETH['change'].'
	// $bot->sendMessageNew('U291587c13144989597448437db2b8555', 'Hello World !!');
	// $bot->sendMessageNew('U291587c13144989597448437db2b8555', 'Hello World !!');
	// $bot->sendMessageNew('U291587c13144989597448437db2b8555', 'Hello World !!');

	if ($bot->isSuccess()) {
		echo 'Succeeded!';
		exit();
	}

	// Failed
	echo $bot->response->getHTTPStatus . ' ' . $bot->response->getRawBody();
	exit();



//linux code : curl -X POST -H 'Content-Type: application/json; charser=UTF-8' -H 'Authorization: Bearer [Channel Access Token]' -d '{ "to" : "[Your userId / User Id]", "messages" : [{ "type": "text", "text": "Server 127.0.0.1 have SSH login" }]}' https://api.line.me/v2/bot/message/push
 ?>
