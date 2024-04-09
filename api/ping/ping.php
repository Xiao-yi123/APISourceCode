<?php
$host=$_GET['host'];
//提交参数
echo "查询域名:$host";
echo "\r";
$host = "$host";
$port = '80';
$num = 1; //Ping次数
//获取时间
function mt_f ()
{
list($usec,$sec) = explode(" ",microtime());
return ((float)$usec + (float)$sec);
//微秒加秒
}
function ping_f($host,$port)
{
$time_s = mt_f();
$ip = gethostbyname($host);
$fp = @fsockopen($host,$port);
if(!$fp)
return 'reply time out!';
$get = "GET / HTTP/1.1\r\nHost:".$host."\r\nConnect:".$port."Close\r\n";
fputs($fp,$get);
fclose($fp);
$time_e = mt_f();
$time = $time_e - $time_s;
$time = ceil($time * 1000);
return '测试端口:'.$port."\n".'IP:'.$ip."\n".'延迟:'.$time.'ms';
}
echo ping_f($host,$port);
//输出 端口 ip 延迟
$url=file_get_contents("http://mip.chinaz.com/?query=$host");
//获取源码
$Quantity=substr_count($url,'result');
//获取签名数量
preg_match_all("/<td class=\"z-tc ww-5\">(.*?)<\/td>/",$url,$url);
echo $url[1][0];
echo "\r";
$ip = $_SERVER['REMOTE_ADDR'];
$url=file_get_contents("http://mip.chinaz.com/?query=$ip");
//获取源码
$Quantity=substr_count($url,'result');
//获取签名数量
preg_match_all("/<td class=\"z-tc ww-5\">(.*?)<\/td>/",$url,$url);
echo  "监控地址:";
echo $url[1][0];
?>