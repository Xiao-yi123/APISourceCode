<?php
/*
-----------------------------------
使用方法:xxxx/baian.com?url=查询域名
*/
error_reporting(0);
$url = $_GET['url'];
var_dump();
if(!isset($url)){
    echo '参数错误!';
    die;
}elseif($url==''){
    echo '未输入要查询的域名!';
}else{
    $str = file_get_contents('http://icp.chinaz.com/'.$url);
    $sitenames = getSubstr($str, '</a></p>', '>[');
    preg_match('/<a target="_blank" href=".*?">(.*?)<\/a>/',$str,$name);
    preg_match('/<p><strong class="fl fwnone">(.*?)<\/strong><\/p>/',$str,$nature);
    preg_match('/<p><font>(.*?)<\/font><a href="(.*?)" target="_blank" id="checkscreen" class="fz12 pl15">/',$str,$icp);
    preg_match('/<p>(.*?)<\/p>/',$sitenames,$sitename);
    preg_match('/<p class="Wzno">(.*?)<\/p>/',$str,$siteindex);
    $time = getSubstr($str, '审核时间', ' <p class="fz12">');
    //echo $time;
    preg_match('/<p>(.*?)<\/p>/',$time,$time);
    if(strpos($str,'未备案或备案取消') == 0){
        print_r(json_encode(array('name'=>$name[1],'siteindex'=>$siteindex[1],'nature'=>$nature[1],'icp'=>$icp[1],'sitename'=>$sitename[1],'img'=>'http://icp.chinaz.com'.$icp[2],'time'=>$time[1]),320));
    }else{
        print_r(json_encode(array('code'=> -1,'msg'=>'未查询到备案!'),320));
    }

}







function getSubstr($str, $leftStr, $rightStr){
    $left = strpos($str, $leftStr);
    $right = strpos($str, $rightStr,$left);
    if($left < 0 or $right < $left) return '';
    return substr($str, $left + strlen($leftStr), $right-$left-strlen($leftStr));
}
?>
