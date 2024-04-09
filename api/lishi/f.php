<?php
//www.zy40.cn
function showjson($json){
header("Access-Control-Allow-Origin:*");
header('Content-type: application/json');
 exit(json_encode($json,320));
}
function get_curl($url, $post = 0, $referer = 0, $cookie = 0, $header = 0, $ua = 0, $nobody = 0)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    $httpheader[] = "Accept:*/*";
    $httpheader[] = "Accept-Encoding:gzip,deflate,sdch";
    $httpheader[] = "Accept-Language:zh-CN,zh;q=0.8";
    $httpheader[] = "Connection:close";
    curl_setopt($ch, CURLOPT_HTTPHEADER, $httpheader);
    if ($post) {
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
    }
    if ($header) {
        curl_setopt($ch, CURLOPT_HEADER, 1);
    }
    if ($cookie) {
        curl_setopt($ch, CURLOPT_COOKIE, $cookie);
    }
    if ($referer) {
        curl_setopt($ch, CURLOPT_REFERER, $referer);
    }
    if ($ua) {
        curl_setopt($ch, CURLOPT_USERAGENT, $ua);
    } else {
        curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.89 Safari/537.36");
    }
    if ($nobody) {
        curl_setopt($ch, CURLOPT_NOBODY, 0);
    }
    curl_setopt($ch, CURLOPT_ENCODING, "gzip");
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $ret = curl_exec($ch);
    curl_close($ch);
    return $ret;
}
$res = get_curl('https://www.lssdjt.com/');
preg_match_all('/<i>(.*)<\/i><\/a><\/li>/',$res,$sj);
preg_match_all('/<em>(.*)<\/em>/',$res,$d);
 
for ($i=0; $i<count($sj[1]) ; $i++) { 
    $json1[$i]['data']=$sj[1][$i];
    $json1[$i]['day']=$d[1][$i];
    
}
if ($json1=="") {
    $json=[
        "code"=>"-1",
        "msg"=>"获取失败！"
    ]; 
}
$json=[
    "code"=>"1",
    "result"=>$json1,
    "msg"=>"获取成功！"
];  
showjson($json);
?>
