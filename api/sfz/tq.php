<?php 
   function tian(){
    $city=$_GET['city'];
    $url="https://www.apiopen.top/weatherApi?city=".$city; 
    $str = file_get_contents($url);
    $result= gzdecode($str);
    //end
    echo  $result;
   }
   tian();  
?>
