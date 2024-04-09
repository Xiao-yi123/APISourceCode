<?php 
   function tian(){
    $city=$_GET['city'];
    $url="http://www.dutangapp.cn/u/toxic?date=".$city; 
    $str = file_get_contents($url);
    $result= gzdecode($str);
    //end
    echo  $result;
   }
   tian();  
?>
