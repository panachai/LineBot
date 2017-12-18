<?php

$urlapibx = 'https://bx.in.th/api/';
'<br>';
//$urlapibx = 'https://bx.in.th/api/balance/';

$json1 = file_get_contents($urlapibx);

$jsonIterator = new RecursiveIteratorIterator(
    new RecursiveArrayIterator(json_decode($json1, TRUE)),
    RecursiveIteratorIterator::SELF_FIRST);
$arrayETH = array();

echo "test : ".$jsonIterator;

foreach ($jsonIterator as $key => $val) {
			if(is_array($val)) { //for ETH
        if($key == '21'){
          //echo "$key:<br>";
          // $val['pairing_id'];
          // $val['primary_currency'];
          // $val['secondary_currency'];
          // $val['change'];
          // $val['last_price'];
          // $val['volume_24hours'];
          $arrayETH = $val;
          //echo $val['orderbook']; //รอทำต่อ
        }else if ($key == '26'){
          $arrayOMG = $val;
        }
		} else {
			//echo "$key => $val<br>";
		}
}

 ?>
