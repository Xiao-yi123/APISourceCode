<?php
/**
 * 百度Site查询接口
 * code    200->正常;201->没有请求参数;202->未收录
 */
header("Access-Control-Allow-Origin:*");
header('Content-type: application/json');
if(!isset($_GET['url'])||empty($_GET['url'])||$_GET['url']==''){
	echo json_encode(array('code'=>'201','msg'=>'请填写请求参数'));
	exit();
}

$url = $_GET['url'];

$baidu='http://www.baidu.com/s?wd=site:'.$url;
 
$curl=curl_init();
curl_setopt($curl,CURLOPT_URL,$baidu);
curl_setopt($curl,CURLOPT_RETURNTRANSFER,1);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER,false);curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 30);
$rs=curl_exec($curl);
curl_close($curl);
 
$str = preg_match_all('/<b>找到相关结果数约(.*?)个<\/b>/',$rs,$baidu);
 
if(!empty($str)){
	// 没有站点信息
	echo json_encode(array('code'=>'已收录','num'=>$baidu['1']['0']));
}else{
	// 有站点信息
	$str = preg_match_all('/<b style="color:#333">(.*?)<\/b>/',$rs,$baidu);
	if($str){
		echo json_encode(array('code'=>'已收录','num'=>$baidu['1']['0']));
	}else{
		echo json_encode(array('code'=>'未收录','msg'=>'该域名暂时未收录'));
	}
	
}
			?>