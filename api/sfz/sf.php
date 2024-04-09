<?php
$url="http://qq.ip138.com/idsearch/index.asp?userid=" . $_GET["v"] . "&action=idcard";  
//1.初始化curl
$ch=curl_init($url);
//第一步，我们通过函数curl_init()创建一个新的curl会话
//2.设置传输选项（向服务器端发送请求）

curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);

//3.执行curl请求（接收服务器端发送的数据）
$output=curl_exec($ch);

//4.关闭curl
curl_close($ch);
//匹配标题 
preg_match('/<tbody>([\s\S]*?)<\/table>/i', $output, $m);

echo $m[1];
?>

