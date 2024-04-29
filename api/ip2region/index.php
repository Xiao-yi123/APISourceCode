<?php
$ip = @$_GET['ip'];
if(!$ip){
    die(json_encode([
        'code'  =>  201,
        'msg'   =>  'Ip does not exist'
    ]));
}
$ip2region = new \Ip2Region();
$result = $ip2region->simple($ip);
die(json_encode([
    'code'  =>  201,
    'msg'   =>  'Ip定位于'.$result
]));