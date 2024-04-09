<?php
$id=$_GET['id'];
$reg = '/^[0-9][0-9]*$/';
if(preg_match($reg,$id)){
$url_cxk = getrealurl('https://music.163.com/song/media/outer/url?id=' . $id . '.mp3');
$neturl = str_replace("http://","https://",$url_cxk);
  if($neturl=="https://music.163.com/404"){
  header("Location: https://music.163.com/song/media/outer/url?id=".$id.".mp3");
exit;
  }else{
header("Location: ".$neturl."");
exit;
  }
}else{
echo "非法参数";
}
function getrealurl($url){
$header = get_headers($url,1);
if (strpos($header[0],'301') || strpos($header[0],'302')) {
    if(is_array($header['Location'])) {
        return $header['Location'][count($header['Location'])-1];
    }else{
        return $header['Location'];
    }
}else {
    return $url;
}
}
exit;
?>