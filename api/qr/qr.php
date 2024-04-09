<?php
//获取网址二维码
if ($_GET['url']) {
    $url = $_GET['url'];
    if($url){ 
        $txUrl = 'https://www.kuaizhan.com/common/encode-png?large=true&data='.$url.'';
        $arr = array(
            'code' => 1,
            'imgurl' => $txUrl,
        );
      exit(stripslashes(urldecode(json_encode($arr))));
}else{
    $arr = array(
        'code' => -1,
        'msg' => 'Error'
    );
    exit(stripslashes(urldecode(json_encode($arr))));
}
}else{
    $arr = array(
        'code' => -1,
        'msg' => 'Error'
    );
    exit(stripslashes(urldecode(json_encode($arr))));
}
?>