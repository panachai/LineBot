<?php

echo $urlapibx = 'https://bx.in.th/api/';
echo '<br>';
//$urlapibx = 'https://bx.in.th/api/balance/';

$json1 = file_get_contents($urlapibx);

$jsonIterator = new RecursiveIteratorIterator(
    new RecursiveArrayIterator(json_decode($json1, TRUE)),
    RecursiveIteratorIterator::SELF_FIRST);

foreach ($jsonIterator as $key => $val) {
			if(is_array($val)) { //for ETH
        if($key == '21'){
          echo "$key:<br>";
          $val['pairing_id'];
          $val['primary_currency'];
          $val['secondary_currency'];
          $val['change'];
          $val['last_price'];
          $val['volume_24hours'];
          //echo $val['orderbook']; //รอทำต่อ
        }
		} else {
			//echo "$key => $val<br>";
		}
}


 ?>
