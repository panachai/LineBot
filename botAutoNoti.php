<?php

date_default_timezone_set('Asia/Bangkok');
if(!(date("H")<6 || date("H")>23)){ //control date
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

	$userId = 'U291587c13144989597448437db2b8555';
	// $lowerValue = $bar ?: $baz; // for database
	$lowerValue = 350;
	$higherValue = 430;

//ETH
// if($userId == 'U291587c13144989597448437db2b8555'){ //ตรวจ userId จาก database (เดี๋ยวทำ)
// 	if($arrayETH['last_price']<$lowerValue || $arrayETH['last_price']>$higherValue){
// 		$bot->sendMessageNew($userId,
// 		$arrayETH['primary_currency'].' : '.$arrayETH['secondary_currency'].'
// 		LastPrice : '.$arrayETH['last_price'].'
// 		volume_24hours : '.$arrayETH['volume_24hours']
// 		.PHP_EOL.$arrayOMG['primary_currency'].' : '.$arrayOMG['secondary_currency'].'
// 		LastPrice : '.$arrayOMG['last_price'].'
// 		volume_24hours : '.$arrayOMG['volume_24hours']);

		if($userId == 'U291587c13144989597448437db2b8555'){ //ตรวจ userId จาก database (เดี๋ยวทำ)
			if($arrayOMG['last_price']<$lowerValue || $arrayOMG['last_price']>$higherValue){
				$bot->sendMessageNew($userId,
				$arrayETH['primary_currency'].' : '.$arrayETH['secondary_currency'].'
				LastPrice : '.$arrayETH['last_price'].'
				volume_24hours : '.$arrayETH['volume_24hours']
				.PHP_EOL.$arrayOMG['primary_currency'].' : '.$arrayOMG['secondary_currency'].'
				LastPrice : '.$arrayOMG['last_price'].'
				volume_24hours : '.$arrayOMG['volume_24hours']);





//change : '.$arrayETH['change'].'

			if ($bot->isSuccess()) {
				echo 'Succeeded!';
				exit();
			}

			// Failed
			echo $bot->response->getHTTPStatus . ' ' . $bot->response->getRawBody();
			exit();
	}else{
echo 'Not match range Value';

	}

}

	// $bot->sendMessageNew('U291587c13144989597448437db2b8555', 'Hello World !!');
	// $bot->sendMessageNew('U291587c13144989597448437db2b8555', 'Hello World !!');
	// $bot->sendMessageNew('U291587c13144989597448437db2b8555', 'Hello World !!');


}else{

  echo 'out of time to send';
}


//linux code : curl -X POST -H 'Content-Type: application/json; charser=UTF-8' -H 'Authorization: Bearer [Channel Access Token]' -d '{ "to" : "[Your userId / User Id]", "messages" : [{ "type": "text", "text": "Server 127.0.0.1 have SSH login" }]}' https://api.line.me/v2/bot/message/push
 ?>
