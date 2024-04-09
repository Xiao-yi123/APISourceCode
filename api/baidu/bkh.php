
<?php 
error_reporting(0);
require_once '../config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="title" content="智云api-免费API接口调用平台" />
    <meta name="keywords" content="<?php echo $aik['keywords']; ?>" />
    <meta name="description" content="<?php echo $aik['description']; ?>" />
    <title>百度百科搜索-<?php echo $aik['sitename']; ?></title>
    <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/4.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.staticfile.org/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="../main.css">
</head>

<body>
    <nav class="navbar navbar-expand-sm navbar-dark">
        <div class="container">
            <a href="<?php echo $aik['pcdomain']; ?>" class="navbar-brand"><?php echo $aik['sitename']; ?></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="Navbar">
                <div class="navbar-nav mr-auto">

                </div>
                <ul class="navbar-nav">
                 <?php echo $aik['youlian']; ?>   
                </ul>
            </div>
        </div>
    </nav>
    <header class="jumbotron">
        <div class="container header">
            <div class="docTitle">
                百度百科搜索            </div>
            <div>
                输出搜索信息内容            </div>
        </div>
    </header>
<main class="container">
    <div class="apiInfo">
        <p><strong>请求方式：</strong><span>get</span></p>
        <p><strong>请求地址：</strong><span><?php echo filter_input(INPUT_SERVER, "SERVER_NAME"); ?>/api/baidu/bkh.php</span></p>
        <p><strong>返回格式：</strong><span>json</span></p>
        <p><strong>请求示例：</strong><span><?php echo filter_input(INPUT_SERVER, "SERVER_NAME"); ?>/api/baidu/bkh.php?key=关键字</span></p>
    </div>
    <div class="simpleTable">
        <p class="linep">请求参数：</p>
        <table class="api-table" border="0" cellspacing="0" cellpadding="0">
            <tbody>
                <tr class="title">
                    <th width="20"></th>
                    <th width="100">名称</th>
                    <th width="60">必填</th>
                    <th width="80">类型</th>
                    <th>说明</th>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td class="url">key</td>
                    <td class="url">是</td>
                    <td class="url">string</td>
                    <td>输出搜索内容信息</td>
                </tr>
   
            </tbody>
        </table>
    </div>
    <div class="simpleTable">
        <p class="linep">返回参数：</p>
        <table class="api-table" border="0" cellspacing="0" cellpadding="0">
            <tbody>
                <tr class="title">
                    <th width="20"></th>
                    <th width="100">名称</th>
                    <th width="80">类型</th>
                    <th>说明</th>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td class="url">abstract</td>
                    <td class="url">string</td>
                    <td>返回的搜索内容</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td class="url">url</td>
                    <td class="url">string</td>
                    <td>返回百科搜索详情地址</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td class="url">wapUrl</td>
                    <td class="url">string</td>
                    <td>返回百科词条地址</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td class="url">name</td>
                    <td class="url">string</td>
                    <td>返回文译</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="simpleTable">
        <p class="linep">返回示例：</p>
        <div class="prediv">
            <pre>{"key":"m25_ext_3","name":"\u522b\u540d","value":["\u5f55\u50cf\uff0c\u5f71\u50cf"],"format":["\u5f55\u50cf\uff0c\u5f71\u50cf"]},{"key":"m25_ext_4","name":"\u6e2f\u6fb3\u53f0\u7ffb\u8bd1","value":["\u5f71\u7247(video\uff09"],"format":["\u5f71\u7247(video\uff09"]},{"key":"m25_ext_5","name":"\u6ce8\u97f3","value":["\u3127\u3125\u02c7\u3106\u3127\u3122\u02cb"],"format":["\u3127\u3125\u02c7\u3106\u3127\u3122\u02cb"]}],"image":"https:\/\/bkimg.cdn.bcebos.com\/pic\/b2de9c82d158ccbf0fb6c68319d8bc3eb1354104","src":"b2de9c82d158ccbf0fb6c68319d8bc3eb1354104","imageHeight":496,"imageWidth":620,"isSummaryPic":"y","abstract":"\u89c6\u9891\uff08Video\uff09\u6cdb\u6307\u5c06\u4e00\u7cfb\u5217\u9759\u6001\u5f71\u50cf\u4ee5\u7535\u4fe1\u53f7\u7684\u65b9\u5f0f\u52a0\u4ee5\u6355\u6349\u3001\u7eaa\u5f55\u3001\u5904\u7406\u3001\u50a8\u5b58\u3001\u4f20\u9001\u4e0e\u91cd\u73b0\u7684\u5404\u79cd\u6280\u672f\u3002\u8fde\u7eed\u7684\u56fe\u50cf\u53d8\u5316\u6bcf\u79d2\u8d85\u8fc724\u5e27\uff08frame\uff09\u753b\u9762\u4ee5\u4e0a\u65f6\uff0c\u6839\u636e\u89c6\u89c9\u6682\u7559\u539f\u7406\uff0c\u4eba\u773c\u65e0\u6cd5\u8fa8\u522b\u5355\u5e45\u7684\u9759\u6001\u753b\u9762\uff1b\u770b\u4e0a\u53bb\u662f\u5e73\u6ed1\u8fde\u7eed\u7684\u89c6\u89c9\u6548\u679c\uff0c\u8fd9\u6837\u8fde\u7eed\u7684\u753b\u9762\u53eb\u505a\u89c6\u9891\u3002\u89c6\u9891\u6280\u672f\u6700\u65e9\u662f\u4e3a\u4e86\u7535\u89c6\u7cfb\u7edf\u800c\u53d1\u5c55\uff0c\u4f46\u73b0\u5728\u5df2\u7ecf\u53d1\u5c55\u4e3a\u5404\u79cd\u4e0d\u540c\u7684\u683c\u5f0f\u4ee5\u5229\u6d88\u8d39\u8005\u5c06\u89c6\u9891\u8bb0\u5f55\u4e0b\u6765\u3002\u7f51\u7edc\u6280\u672f\u7684\u53d1\u8fbe\u4e5f\u4fc3\u4f7f\u89c6\u9891\u7684\u7eaa\u5f55\u7247\u6bb5\u4ee5\u4e32\u6d41\u5a92\u4f53\u7684\u5f62\u5f0f\u5b58\u5728\u4e8e\u56e0\u7279\u7f51\u4e4b\u4e0a\u5e76\u53ef\u88ab\u7535\u8111\u63a5\u6536\u4e0e\u64ad\u653e\u3002\u89c6\u9891\u4e0e\u7535\u5f71\u5c5e\u4e8e\u4e0d\u540c\u7684\u6280\u672f\uff0c\u540e\u8005\u662f\u5229\u7528\u7167\u76f8\u672f\u5c06\u52a8\u6001\u7684\u5f71\u50cf\u6355\u6349\u4e3a\u4e00\u7cfb\u5217\u7684\u9759\u6001\u7167\u7247\u3002","moduleIds":[287347542],"url":"http:\/\/baike.baidu.com\/view\/16215.htm","wapUrl":"http:\/\/wapbaike.baidu.com\/item\/%E8%A7%86%E9%A2%91\/321962","hasOther":0,","logo":"http:\/\/img.baidu.com\/img\/baike\/logo-baike.gif","copyrights":"\u4ee5\u4e0a\u5185\u5bb9\u6765\u81ea\u767e\u5ea6\u767e\u79d1\u5e73\u53f0\uff0c\u7531\u767e\u5ea6\u767e\u79d1\u7f51\u53cb\u521b\u4f5c\u3002","customImg":"","redirect":[]}</pre>
        </div>
    </div>
</main>
<footer class="copyright mt-5">
        <div class="container">© <?php echo $aik['foot']; ?></div>
    </footer>
</body>
<script src="https://cdn.staticfile.org/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdn.staticfile.org/popper.js/1.12.5/umd/popper.min.js"></script>
<script src="https://cdn.staticfile.org/twitter-bootstrap/4.1.0/js/bootstrap.min.js"></script>
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
