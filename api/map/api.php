<?php
 $size = readfile('http://api.map.baidu.com/geocoder/v2/?address=' .$_GET['url']. '&output=json&ak=E2K1op0zCyU7P8z8P5NqvEI2');
 echo $size;
?>
