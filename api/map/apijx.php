<?php
 $size = readfile('https://ditu.amap.com/service/regeo?longitude=' .$_GET['lng']. '&latitude=' .$_GET['lat']. '');
 echo $size;
?>


