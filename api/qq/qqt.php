<?php
 $res = readfile('http://p.qlogo.cn/gh/' .$_GET['qq']. '/' .$_GET['qq']. '/100/');
 header('Content-type: image/png');
$res=imagecreatefromstring(file_get_contents($src));
imagepng($res);
imagedestroy($res);
?>