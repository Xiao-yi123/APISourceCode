<?php
$url="http://qq.ip138.com/idsearch/index.asp?userid=" . $_GET["v"] . "&action=idcard";  
//1.��ʼ��curl
$ch=curl_init($url);
//��һ��������ͨ������curl_init()����һ���µ�curl�Ự
//2.���ô���ѡ���������˷�������

curl_setopt($ch,CURLOPT_URL,$url);
curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);

//3.ִ��curl���󣨽��շ������˷��͵����ݣ�
$output=curl_exec($ch);

//4.�ر�curl
curl_close($ch);
//ƥ����� 
preg_match('/<tbody>([\s\S]*?)<\/table>/i', $output, $m);

echo $m[1];
?>

