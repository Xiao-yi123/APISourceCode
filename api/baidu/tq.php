<?php
 $size = readfile('https://www.baidu.com/home/other/data/weatherInfo?city=' .$_GET['city']. '');
 echo $size;
?>
