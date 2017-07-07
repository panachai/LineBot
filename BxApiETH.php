<?php

//https://bx.in.th/api/


$json = '{"a":1,"b":2,"c":3,"d":4,"e":5}';

$obj = json_decode($json);
print $obj->{'foo-bar'}; // 12345

 ?>
