<?php
/**
 * @package 备案查询
 * @author 5ime
 * @version 1.0.0
 * @link http://github.com/5ime/api-admin/api/icp
 */
header("Access-Control-Allow-Origin:*");
header('Content-type: application/json');
$url = @$_GET['url']?$_GET['url']:"chinaz.com";
$json = file_get_contents('https://icp.chinaz.com/'.$url); //调用的站长工具

//主办单位名称
preg_match('/<a\s+id=\"companyName\"[^>]*>(.*?)<\/a>/', $json, $mingcheng);
//主办单位性质  网站名称  审核日期
preg_match_all('/<td width="37%">(.*?)<\/td>/', $json, $xingzhi);
//网站备案/许可证号
preg_match_all('/<li data-value="(.*?)">备案号<\/li>/', $json, $beianhao);


if(strpos($beianhao[1][0],'--') !== false){
    $Json = array(
        'code' => 202,
        'msg' => '未查询到备案信息',
    );
}else{
    $Json = array(
        "code" => 200,
        "data" => array(
            "name" => $mingcheng[1],
            "nature" => $xingzhi[1][0],
            "icp" => $beianhao[1][0],
            "sitename" => $xingzhi[1][2],
            "time" => $xingzhi[1][1],
        )
    );
}
$Json = json_encode($Json,JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE);
echo stripslashes($Json);
return $Json;
?>