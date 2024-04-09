<?php
/**
*喜马拉雅解析
*智卓星网联系QQ号1455112844
*官方发布
*zhiyunzz.simplesite.com
*/
$url = $_GET['url'];
$result = file_get_contents("http://www.ximalaya.com/tracks/".$url.json);
header("Content-Type:text/html;charset=UTF-8");
print_r($result);
if ($arr['code']==1) {
}
?>
