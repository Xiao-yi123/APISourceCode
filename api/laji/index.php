<?php
header("Access-Control-Allow-Origin:*");
header('Content-type: application/json; charset=utf-8');
//来源：https://www.toolnb.com/tools/lajifenlei.html
$url="https://api3.toolnb.com/tools/lajifenlei.json";

$data = http_build_query(['input' => @$_GET['wd']]);
$options = [
    'http' => [
        'method' => 'POST',
        'header' => 'Content-type: application/x-www-form-urlencoded;charset=UTF-8',
        'content' => $data
    ]
];
$context = stream_context_create($options);
$response = file_get_contents($url, false, $context);
header('Content-type: application/json; charset=utf-8');
die($response);
