<!DOCTYPE html>
<html>
<head>
<meta charset="gbk" />
<meta name="MobileOptimized" content="240"/>
<meta name="applicable-device" content="mobile"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
<?php
 $size = readfile('http://api.douban.com/v2/movie/in_theaters?apikey=0df993c66c0c636e29ecbb5344252a4a&start=0&count=10');
 echo $size;
?>


