<?php     
/**
* 获取网址二维码
*/
$url = $_GET['url'];
$src = 'https://egame.qq.com/webapi/qrcode?content=' . $url.'';
$res = imagecreatefromstring(file_get_contents($src)); 
echo "
<html xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"zh-CN\">
<head>
<title>网址二维码生成</title>
<link rel=\"stylesheet\"  href=\"css/main.css\" type=\"text/css\" media=\"all\" />
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0\">
<link rel=\"shortcut icon\" href=\"favicon.ico\">
<meta http-equiv=\"Content-Type\" content=\"text/html;charset=utf-8\">
<style>
 body{background-image:url(images/1.jpg);overflow-y: scroll;}
</style>
</head>
<body>";
echo "<div class=\"container\">";	
echo "
<div class=\"api_logo\">
</div>
<div class=\"input_url\">
<input type=\"text\" id=\"link\" placeholder=\"输入你要生成的网址\" value=\"".$url."\">
<input type=\"submit\" id=\"submit\"  value=\" 生成\" onclick=\"Jump()\" >
</div>
";
echo "<div class=\"div_box\">
<h2>生成如下：</h2>
";	
echo "<img src=\"".$src."\" height=\"200\" width=\"200\"/>"; 
$time = date('YmdHis');
echo '
<h3>下载地址：</h3>
<p id="p_id"><a href="'.$src.'"target="_blank"style=" color:#666;"download="二维码_'.$name.'_'.$time.'">下载二维码</a></p>
</div>'; 
echo "</div>";
echo "<script type=\"text/javascript\">
function Jump() {
var link = document.getElementById('link').value;
location.href = 'qrcode.php?url=' + link;
}
</script>
</body>
</html>";
?>
