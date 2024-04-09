<?php 
header("Content-type: text/html; charset=utf-8"); //设置编码 utf-8 
$t1 = microtime(true);
$utime = date("Y-m-d");//api的尾缀时间
$translation = '0';//翻译语句，0不采集，1采集
$content = '1';//英语版，0不采集，1采集
//使用curl提高运行速度 不用动
function httpGet($url) {
	$curl = curl_init();
	$httpheader[] = "Accept:*/*";
	$httpheader[] = "Accept-Language:zh-CN,zh;q=0.8";
	$httpheader[] = "Connection:close";
	curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 5.1; rv:1.7.3) Gecko/20041001 Firefox/0.10.1" );
	curl_setopt($curl, CURLOPT_HTTPHEADER, $httpheader);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($curl, CURLOPT_TIMEOUT, 3);
	curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
	curl_setopt($curl, CURLOPT_URL, $url);
	$res = curl_exec($curl);
	curl_close($curl);
	return $res;
}
$myfile = fopen("iciba.txt", "a+");//创建文件保存抓取的句子
//循环次数 2018-7-31 至现在日期相差的天数 
for ($i=1; $i<100; $i++) { 
    $json_string =httpGet('http://sentence.iciba.com/index.php?c=dailysentence&m=getdetail&title='.$utime.'&_='.time());//curl 自定义函数访问api
 
    $data= json_decode($json_string,true);//解析json 转为php
    if (isset($data['note'])) {
    	$text1= $data['note']."\n"; 
    	fwrite($myfile, $text1);
    }
 
    if (isset($data['translation'])&&$translation==1) {
    	$text2= str_replace('小编的话：', '', $data['translation'])."\n";
    	fwrite($myfile, $text2);
    }
    if (isset($data['content'])&&$content==1) {
    	$text3= $data['content']."\n"; 
    	fwrite($myfile, $text3);
    }
    $utime= date("Y-m-d",strtotime("-".strval($i)." day")); //每循环一次 当前日期减去循环变量
} 
fclose($myfile);
$t2 = microtime(true);
echo 'ok，耗时'.round($t2-$t1,3).'秒';
 
?>