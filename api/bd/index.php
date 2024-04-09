
<?php 
error_reporting(0);
require_once '../config.php';
?>
<html lang="zh-cn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ICP备案查询-<?php echo $aik['sitename']; ?></title>
    <meta name="keywords" content="<?php echo $aik['keywords']; ?>">
    <meta name="description" content="<?php echo $aik['description']; ?>">
	<link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="//lib.baomitu.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://cdn.bootcss.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  </head><style>
	body{
		margin: 0 auto;
		text-align: center;
	}
	.container {
	  max-width: 700px;
	  padding: 30px;
	  margin: 0 auto;
	}
</style>
  <body style="background-image: url(http://www.pptbz.com/pptpic/UploadFiles_6909/201406/2014061415430467.jpg);background-attachment: fixed;background-repeat: no-repeat;background-size: cover;-moz-background-size: cover;">
    <div class="container">
      <hr>
       <div class="panel panel-primary" style="margin:1% 1% 1% 1%;background: rgba(255, 251, 251, 0.7)">
        <div class="panel-heading bk-bg-primary">
          <h6>       
             <nav class="navbar navbar-default navbar-fixed-top">
  <div class="navbar-header">
      <a class="navbar-brand" href="/">ICP备案查询</a>
        </div>
           </nav>
            <span class="panel-title">ICP备案查询查询</span></h6>
        </div>
        <div class="panel-body">
          <form action="?url=" method="GET">
            <input type="text" style="background: rgba(255, 251, 251, 0.7)" class="form-control" name="url" placeholder="请输入需要查询的域名">
            <br>
            <input type="submit" class="input_group_addon btn btn-primary" value="开始查询"></form>
<?php
$res = @$_GET['url'];

if(strstr($res,"."))	
{
$json = file_get_contents('http://icp.chinaz.com/'.$res); 
    //echo $json;
    function GetBetween($content,$start,$end){
    $r = explode($start, $content);
    if (isset($r[1])){
        $r = explode($end, $r[1]);
        return $r[0];
    }
    return '';
  }
// 获取主办单位名称
  $b ='主办单位名称</span><p>';
  $c ='<';
  
$name = GetBetween($json,$b,$c);

// 获取性质
  $b ='主办单位性质</span><p><strong class="fl fwnone">';
  $c ='<';
  
$nature = GetBetween($json,$b,$c); 

// 获取备案号
  $b ='网站备案/许可证号</span><p><font>';
  $c ='<';
  
$icp = GetBetween($json,$b,$c);

// 获取网站名称
  $b ='网站名称</span><p>';
  $c ='<';
  
$sitename = GetBetween($json,$b,$c);

// 获取网站首页地址
  $b ='网站首页网址</span><p class="Wzno">';
  $c ='<';
  
$index = GetBetween($json,$b,$c);

// 获取审核时间
  $b ='审核时间</span><p>';
  $c ='<';
  
$time = GetBetween($json,$b,$c);

if(strstr($index,"."))	
{ 	
          echo '		<div class="icp-main">
		<div class="icp-infos box" id="icp-html">
		<div class="title">
		<i class="ico-bar-vertical"></i>
		<h4></h4>
		<td class="thead">当前查询：</td><td>'.$res.'</td></tr><tr>
        </div>
		<div id="icp-table">
		<table class="table">
		<tbody>
		<tr>
		<td class="thead">主办名称</td><td>'. $name.'</td></tr><tr>
		<td class="thead">个人企业</td><td>'.$nature.'</td></tr><tr>
		<td class="thead">备案单号</td><td><span>'.$icp.'</span></td></tr><tr>
		<td class="thead">网站名称</td><td>'.$sitename.'</td></tr><tr>
		<td class="thead">网站首页</td><td>'.$index.'</td></tr><tr>
		<td class="thead">网站域名</td><td>'.$res.'</td></tr><tr>
		<td class="thead">审核时间</td><td><span>'.$time.'</span></td></tr>
		<td class="thead">数据来源</td><td><span>'.数据来源于站长工具.'</span></td></tr>
        </tbody>
		</table>
		</div>
		</div>
		<div class="icp-content box">
		<div class="title">
		<i class="ico-bar-vertical"></i>
		</table>
		</div>
		</div>
		</div>';
}
else 
{ echo '		<div class="cha-default">未备案或备案缓存没有更新</div>';}}
else 
{ echo '		<div class="cha-default">请输入要查询的域名</div>';}                    
//echo "<script>alert('请输入要查询的域名')</script>";
?>            
     <p style="box-sizing:border-box;margin-top:0px;margin-bottom:1em;padding:0px;color:#888888;font-family:&quot;HanHei SC&quot;, PingHei, &quot;PingFang SC&quot;, 微软雅黑, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;font-size:13px;letter-spacing:0.1px;text-align:center;white-space:normal;background-color:#FFFFFF;">
     <a href="http://www.zy40.cn" style="letter-spacing:0.1px;box-sizing:border-box;margin:0px;padding:0px;background-color:transparent;color:#009688;text-decoration:none;transition:all 0.2s;">我的博客</a><span style="letter-spacing:0.1px;">&nbsp;|&nbsp;</span>
     <a href="http://h.zy40.cn" style="letter-spacing:0.1px;box-sizing:border-box;margin:0px;padding:0px;background-color:transparent;color:#009688;text-decoration:none;transition:all 0.2s;">更多</a><span style="letter-spacing:0.1px;">&nbsp;|&nbsp;</span>
     <a href="<?php echo $aik['pcdomain']; ?>" style="letter-spacing:0.1px;box-sizing:border-box;margin:0px;padding:0px;background-color:transparent;color:#009688;text-decoration:none;transition:all 0.2s;">官方</a><span style="letter-spacing:0.1px;">&nbsp;|&nbsp;</span>
     <a href="../../" style="letter-spacing:0.1px;box-sizing:border-box;margin:0px;padding:0px;background-color:transparent;color:#009688;text-decoration:none;transition:all 0.2s;">首页</a>
   </p>            
 <center><a href="<?php echo $aik['pcdomain']; ?>" target="_blank"><?php echo $aik['sitename']; ?></a><center>
</div>
</style>
</footer>
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
</body>
</html> 
