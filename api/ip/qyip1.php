<?
// 1. 初始化
$ch = curl_init();
// 2. 设置选项，包括URL
curl_setopt($ch, CURLOPT_URL, "http://ip.geo.iqiyi.com/cityjson?format=json");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 0);//改为0就不输出
curl_setopt($ch, CURLOPT_HEADER, 0);
// 3. 执行并获取HTML文档内容
$output = curl_exec($ch);
// 4. 释放curl句柄
curl_close($ch);
?>
