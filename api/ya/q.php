<?php
header("Access-Control-Allow-Origin:*");
header("Content-Type:application/json;charset=UTF-8");
date_default_timezone_set("PRC");
$url = $_GET['url'];
$result = file_get_contents("https://api.ooopn.com/qiang/api.php?url=".$url);
$arr = json_decode($result,true);
//输出被墙状态时，改成 $arr['msg']
echo json_encode($arr,JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
}
?>