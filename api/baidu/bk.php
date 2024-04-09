<?php
 $size = readfile('http://baike.baidu.com/api/openapi/BaikeLemmaCardApi?scope=103&format=json&appid=379020&bk_key=' .$_GET['key']. '&bk_length=600');
 echo $size;
?>
