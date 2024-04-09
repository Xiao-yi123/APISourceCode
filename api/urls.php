
<?php


$urls = array(
    'http://www.zy40.cn/index.html',
    'http://m.zy40.cn/index.html',
);
$api = 'http://data.zz.baidu.com/urls?site=www.zy40.cn&token=ygjmmnRFCXeZKhoJ&type=mip';
$ch = curl_init();
$options =  array(
    CURLOPT_URL => $api,
    CURLOPT_POST => true,
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POSTFIELDS => implode("\n", $urls),
    CURLOPT_HTTPHEADER => array('Content-Type: text/plain'),
);
curl_setopt_array($ch, $options);
$result = curl_exec($ch);
echo $result;


?>
