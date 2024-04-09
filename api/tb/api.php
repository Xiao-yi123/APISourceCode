<?php
 $size = readfile('http://suggest.taobao.com/sug?code=utf-8&q=' .$_GET['so']. '&callback=cb');
 echo $size;
?>
