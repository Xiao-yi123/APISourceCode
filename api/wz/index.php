<html xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
<title>网址二维码生成图片</title>
<meta name="description" content="智云影音，智卓星网平台，网址二维码生成">
<meta name="keywords" content="智云影音，网址二维码生成">
<meta name="application-name" content="智云影音，网址二维码生成">
<link rel="stylesheet"  href="css/main.css" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<style>
 body{background-image:url(images/1.jpg);overflow-y: scroll;}
</style>
</head>
<body>
<div class="container">
<div class="api_logo">
</div>
<div class="input_url">
<input type="text" id="link" placeholder="输入你要生成的网址" value="">
<input type="submit" id="submit"  value=" 生成 " onclick="Jump()" >
</div>
<div class="div_box">
 <h2>使用注意</h2>
<p>API接口限制请求频率(3s/次)</p>
<p><span>例如生成：</span>http://zhiyun.ppdsw.xyz</p>   
</div>
</div>
<script type="text/javascript">
function Jump() {
var link = document.getElementById('link').value;
location.href = 'qrcode.php?url=' + link;
}
</script>
<script>
(function(){
    var bp = document.createElement('script');
    var curProtocol = window.location.protocol.split(':')[0];
    if (curProtocol === 'https') {
        bp.src = 'https://zz.bdstatic.com/linksubmit/push.js';        
    }
    else {
        bp.src = 'http://push.zhanzhang.baidu.com/push.js';
    }
    var s = document.getElementsByTagName("script")[0];
    s.parentNode.insertBefore(bp, s);
})();
</script>

<script language="javascript" type="text/javascript" src="http://js.users.51.la/18759442.js"></script>
</body>
</html>
