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
    <title>搜狗百度热搜排行榜-<?php echo $aik['sitename']; ?></title>
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
                搜狗百度热搜排行榜            </div>
            <div>
                输出最新热门搜索关键词            </div>
        </div>
    </header>
<main class="container">
    <div class="apiInfo">
        <p><strong>请求方式：</strong><span>get</span></p>
        <p><strong>请求地址：</strong><span><?php echo filter_input(INPUT_SERVER, "SERVER_NAME"); ?>/api/rm/api.php</span></p>
        <p><strong>返回格式：</strong><span>json/utf8</span></p>
        <p><strong>请求示例：</strong><span><?php echo filter_input(INPUT_SERVER, "SERVER_NAME"); ?>/api/rm/api.php</span></p>
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
                    <td class="url">php</td>
                    <td class="url">否</td>
                    <td class="url">string</td>
                    <td>输出最新热门搜索关键词</td>
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
                    <td class="url">keyword</td>
                    <td class="url">string</td>
                    <td>返回的关键词</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td class="url">gentime</td>
                    <td class="url">string</td>
                    <td>返回时间参数</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td class="url">searches</td>
                    <td class="url">string</td>
                    <td>返回热度参数</td>
                </tr>
       
            </tbody>
        </table>
    </div>
    <div class="simpleTable">
        <p class="linep">返回示例：</p>
        <div class="prediv">
            <pre>{"updateTime":"2019-08-22 20:41:05","keywords":[{"keyword":"\u6613\u70ca\u5343\u73ba\u53c2\u52a0\u519b\u8bad","searches":10120951,"changeRate":6601209,"isNew":0,"trend":"rise","gentime":"2019-08-22 20:41:05","interfere":0,"srchCalcu":10120951,"eventid":"1a5a28a324713cc557d49521257091f3"},{"keyword":"\u8d35\u5dde\u8305\u53f0\u80a1\u4ef7\u65b0\u9ad8","searches":8382385,"changeRate":-180302,"isNew":0,"trend":"fall","interfere":0,"srchCalcu":8382385,"eventid":"76dfc09c33eb2f83f64936ab28aa7e77"},{"keyword":"\u5b5f\u665a\u821f\u88ab\u6355\u753b\u9762","searches":6638903,"changeRate":2614499,"isNew":0,"trend":"rise","interfere":0,"srchCalcu":6638903,"eventid":"88913dc1410003c00dd47558dd8ca713"},{"keyword":"\u8377\u5170\u5f1f\u53d6\u5173\u8fea\u58eb\u5c3c","searches":6204825,"changeRate":3603340,"isNew":0,"trend":"rise","interfere":0,"srchCalcu":6204825,"eventid":"f088648120e18d97d26535e7e1e7a3da"},{"keyword":"\u738b\u6e90\u8096\u6218\u662f\u90bb\u5c45","searches":5632590,"changeRate":2996022,"isNew":0,"trend":"rise","interfere":0,"srchCalcu":5632590,"eventid":"b7f3313ff7b81831b716d1fc771642ad"},{"keyword":"\u533b\u5b66\u751f\u88ab\u8feb\u5243\u5149\u5934","searches":5629737,"changeRate":1451930,"isNew":0,"trend":"rise","interfere":0,"srchCalcu":5629737,"eventid":"16466d57041f23c35e19e69035abc08d"},{"keyword":"\u8521\u4f9d\u6797\u7248\u6731\u78a7\u77f3","searches":5474491,"changeRate":2948483,"isNew":0,"trend":"rise","interfere":0,"srchCalcu":5474491,"eventid":"9973733e9e6c8702737476f5df7eef73"},{"keyword":"\u6e2f\u94c1\u5458\u5de5\u906d\u6b3a\u51cc","searches":5125449,"changeRate":1933070,"isNew":1,"trend":"rise","interfere":0,"srchCalcu":5125449,"eventid":"cb4bab9b86c4b490cb6bf095d0d5c480"}</pre>
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
