<?php
/**
 * @Author: Fly
 * @Date:   2020-05-04 00:30:55
 * @Last Modified by:   Fly
 * @Last Modified time: 2020-05-04 00:53:59
 * @github:http://www.zy40.cn
 */
error_reporting(0);
$url = $_GET['url'];
/**
 * [curl_gets description]
 * @param  [type] $url [description]
 * @return [type]      [description]
 */
function curl_gets($urls){
	$curl = curl_init();
	curl_setopt($curl,CURLOPT_URL,$urls);
	curl_setopt($curl,CURLOPT_RETURNTRANSFER,1);
	curl_setopt($curl,CURLOPT_ENCODING,"");
	curl_setopt($curl,CURLOPT_MAXREDIRS,10);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
	curl_setopt($curl,CURLOPT_TIMEOUT,0);
	curl_setopt($curl,CURLOPT_FOLLOWLOCATION,true);
	curl_setopt($curl,CURLOPT_RETURNTRANSFER,1);
	curl_setopt($curl,CURLOPT_CUSTOMREQUEST,"GET");
	$res = curl_exec($curl);
	curl_close($curl);
	return $res;
}

$s = curl_gets($url);

$p = '/g\.msg_link = \"(.*?)\";/is';
preg_match($p,$s,$m);
// print_r($m);
preg_match('/\?(.*?)#/',$m[1],$m4);
$jx_link = curl_gets($m[1]);
$p1 = '/vid: \'(.*?)\'/';
preg_match($p1,$jx_link,$m1);
$p2 = '/biz: \'(.*?)\'/';
preg_match($p2,$jx_link,$m2);
$url_p = 'https://mp.weixin.qq.com/mp/videoplayer?action=get_mp_video_play_url&preview=0&&__biz='.$m2[1].'&mid=&idx=&vid='.$m1[1].'&uin=&key=&pass_ticket=&wxtoken=&devicetype=&clientversion='.$m4[1].'&f=json';
echo file_get_contents($url_p);
