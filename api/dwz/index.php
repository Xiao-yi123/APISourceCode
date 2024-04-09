<?php 
error_reporting(0);
require_once '../config.php';
?>
<!doctype html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="<?php echo $aik['description']; ?>">
<meta name="keywords" content="<?php echo $aik['keywords']; ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="theme-color" content="#fd4b5c">
<title>新浪短网址 - <?php echo $aik['sitename']; ?></title>
</head>
<style type="text/css">
h3:hover {box-shadow:0px 0px 8px #D1D1D1;}
</style>
<div style="box-shadow: 5px 5px 25px 0 rgba(46,61,73,.2);border-radius:15px;font-size:13px;width:950px;font-family:微软雅黑,'Helvetica Neue',Arial,sans-serif;margin:10px auto 0px;border:0px solid #eee;max-width:100%;">
    <div style="width:100%;background-color: #3174ed;background-image: linear-gradient(90deg, #3174ed 0%, #FA8BFF 35%, #3fd9fb 88%);color:#FFFFFF;border-radius:15px 15px 0 0;">
        <h2 style="font-size:15px;word-break:break-all;padding:20px 32px;margin:0;text-align:center">新浪短网址 - API</h2>
    </div>
    <div style="margin:0px auto;width:90%">
        <h3 style="-webkit-transition: all .2s cubic-bezier(0, 0, 0, 0.48);-moz-transition: all .2s ease;border:.0625rem solid #fafafa;background:#fafafa repeating-linear-gradient(-45deg,#fff,#fff 1.125rem,transparent 1.125rem,transparent 2.25rem);margin:15px 0px;padding:20px;border-radius:5px;font-size:14px;color:#333;">
		# 新浪短网址API请求方式 #
		<ul>
		<li>Method: Get</li>
		</ul>
		<hr>
		# 请求地址 #<br/>
		<a style="color:#fd4b5c;text-decoration:none;"><?php echo filter_input(INPUT_SERVER, "SERVER_NAME"); ?>/api/dwz/api.php</a><br/>
		# 参数 #<br/>
		<li>type//类型（long(短网址还原)/srt（网址缩短，默认，可不填））</li>
        <li>encode//返回类型（json/js/text）</li>
		<hr>
		# 返回数据 #<br/>
		<div style="width:100%;background-color: #000;background-image: linear-gradient(90deg, #6694ed 0%,);color:#FFFFFF;border-radius:5px;word-wrap:break-word;word-break:break-all;">
             js输出：function dwz(){document.write('https://url.cn/569l0iB');}<br/>
             json输出：{"url":"http:\/\/t.cn\/A6v54351"}
        </div>
		<hr>
		# 备注 #<br/>
		js调用举例:&lt;script src="<?php echo filter_input(INPUT_SERVER, "SERVER_NAME"); ?>/api/dwz/api.php?encode=js">&lt;/script><br/>
        js输出举例:&lt;div>&lt;script>dwz()&lt;/script>&lt;/div><br/>
        短网址还原:<?php echo '<?php echo filter_input(INPUT_SERVER, "SERVER_NAME"); ?>/api/dwz/api.php?type=long&url=http://t.cn/A6v54351
		<hr>
		# 示例 #<br/>
		<a style="color:#fd4b5c;text-decoration:none；" target="_blank"><?php echo filter_input(INPUT_SERVER, "SERVER_NAME"); ?>/api/api.php?url=http://www.zy40.cn</a><br>
        <a style="color:#fd4b5c;text-decoration:none；" target="_blank"><?php echo filter_input(INPUT_SERVER, "SERVER_NAME"); ?>/api/dwz/api.php?url=http://www.zy40.cn&encode=json</a>
		</h3>
          </div>
</div>
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
<?php echo $aik['tongji']; ?>
<script language="javascript" type="text/javascript" src="http://js.users.51.la/18759442.js"></script>
</html>