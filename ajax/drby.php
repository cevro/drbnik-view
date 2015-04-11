<?php

header('Content-Type: text/html');
require_once '../drb_animate.php';
require_once 'JSON.php';

$drb = 'ahoj svet tu bude nejaký drb ktorý sa tam vykreslí!! a treba sem jebnut ešte nejaké dlašie pičoviny';
$new_drb = new drb_animate($drb);
$new_drb->parse_drb();





$request = '<div class="drb">' . $new_drb->split_drb() . '</div>';
$char = count($new_drb->parse_drb());



$json = new JSON();
$out = $json->encode(array('html' => $request, 'chars' => $char));
//echo $out;

$out = json_encode(array('html' => utf8_encode($request), 'chars' => $char));
echo $out;
//echo json_encode(array('html'=>$request,'chars'=>$char));



