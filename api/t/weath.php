<?php
$xmls=file_get_contents("http://flash.weather.com.cn/wmaps/xml/china.xml");
$xml =simplexml_load_string($xmls);
$xmljson= json_encode($xml);
$xml=json_decode($xmljson,true);
var_dump($xml);