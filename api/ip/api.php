<?php
$ip = $_GET['ip'];
if(empty($ip)){
$ip = get_ip();
}
//获得访客真实ip
function get_ip(){
if(getenv('HTTP_CLIENT_IP')) {
$ip = getenv('HTTP_CLIENT_IP');
} elseif(getenv('HTTP_X_FORWARDED_FOR')) {
$ip = getenv('HTTP_X_FORWARDED_FOR');
} elseif(getenv('REMOTE_ADDR')) {
$ip = getenv('REMOTE_ADDR');
} else {
$ip = $HTTP_SERVER_VARS['REMOTE_ADDR'];
}return $ip;
}
/**
//根据ip获得访客所在地地名
$mip = file_get_contents("http://whois.pconline.com.cn/ip.jsp?ip=".$ip); //太平洋电脑网接口
$mip = iconv("gbk","utf-8",$mip);
$str = str_replace(PHP_EOL, '', $mip); 
*/
//淘宝接口
function get_local($ip){
$url="http://ip.taobao.com/service/getIpInfo.php?ip=".$ip;
$ipinfo=json_decode(file_get_contents($url)); 
if($ipinfo->code=='1'){
return false;
}
$city = $ipinfo->data->country.' '.$ipinfo->data->region.' '.$ipinfo->data->city.' '.$ipinfo->data->county.' '.$ipinfo->data->isp;
return str_replace('XX','',$city); 
}
echo json_encode(['ip'=>$ip,'local'=>get_local($ip)]);
?>
