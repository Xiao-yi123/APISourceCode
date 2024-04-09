<?php
 $size = readfile('http://news-at.zhihu.com/api/2/news/' .$_GET['id']. '');
 echo $size;
?>


