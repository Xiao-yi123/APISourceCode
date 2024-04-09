<?php
header("Access-Control-Allow-Origin:*");
header('Content-type: application/json');
if(isset($_GET['id'])){
//读取全民K歌接口//
$html=http_curl('https://kg.qq.com/cgi/kg_ugc_getdetail?v=4&format=json&inCharset=utf8&outCharset=utf-8&shareid='.$_GET['id']);
$r=json_decode($html,true);
//获取歌曲链接//
$mp3=$r['data']['playurl'];
//获取歌曲名称//
$user=$r['data']['song_name'];
//获取作者昵称//
$kg_nick=$r['data']['kg_nick'];
//获取作品图//
$img=$r['data']['cover'];
//获取作者头像//
$userimg=$r['data']['avatar'];
//打包JSON//
$result=array("code"=>1,"uesr_name"=>$user,"user_img"=>$userimg,"kg_nick"=>$kg_nick,"mp3img"=>$img,"mp3url"=>$mp3);
//输出JSON数据//
echo json_encode($result);
}
function http_curl($url){
    $curl = curl_init();
    curl_setopt($curl,CURLOPT_URL,$url);
    curl_setopt($curl,CURLOPT_CONNECTTIMEOUT,30);
    curl_setopt($curl,CURLOPT_RETURNTRANSFER,1);
    $data=curl_exec($curl);
    curl_close($curl);
    return $data;
}
?>