<?php
/**
*³¬¼¶Ping
*/
$url = $_GET['url'];
$result = file_get_contents("https://tcc.taobao.com/cc/json/mobile_tel_segment.htm?tel=".$url);
header("Content-Type:text/html;charset=GBK");
print_r($result);
if ($arr['code']==1) {
}
?>
