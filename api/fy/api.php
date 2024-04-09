<?php 
   function tian(){
    $city=$_GET['city'];
    $url="http://fanyi.youdao.com/translate?&doctype=json&type=AUTO&i=".$city; 
    $str = file_get_contents($url);
    $result= gzdecode($str);
    //end
    echo  $result;
   }
   tian();  
?>
