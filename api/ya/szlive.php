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
    <title>苏州电视台直播解析-<?php echo $aik['sitename']; ?></title>
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
                苏州电视台直播源            </div>
            <div>
                输出直播源地址            </div>
        </div>
    </header>
<main class="container">
    <div class="apiInfo">
        <p><strong>请求方式：</strong><span>get</span></p>
        <p><strong>请求地址：</strong><span><?php echo filter_input(INPUT_SERVER, "SERVER_NAME"); ?>/api/ya/live.php</span></p>
        <p><strong>返回格式：</strong><span>json</span></p>
        <p><strong>请求示例：</strong><span><?php echo filter_input(INPUT_SERVER, "SERVER_NAME"); ?>/api/ya/live.php?channel=sztv1</span></p>
        <p><strong>提示：</strong><span>一共5个直播频道（sztv1至sztv5）</span></p>
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
                    <td class="url">channel</td>
                    <td class="url">否</td>
                    <td class="url">string</td>
                    <td>一共为5个直播频道，可任意选择输入sztv（后面加数字1到5）</td>
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
                    <td class="url">name</td>
                    <td class="url">string</td>
                    <td>返回的直播名称</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td class="url">m3u8</td>
                    <td class="url">string</td>
                    <td>返回m3u8格式直播源</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td class="url">dir</td>
                    <td class="url">string</td>
                    <td>返回卫视图标</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td class="url">url_rtmp</td>
                    <td class="url">string</td>
                    <td>返回rtmp格式直播源</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="simpleTable">
        <p class="linep">返回示例：</p>
        <div class="prediv">
            <pre>[{"id":"60","name":"\u82cf\u5dde\u65b0\u95fb\u7efc\u5408\u9891\u9053","logo":{"rectangle":{"host":"http:\/\/img.kan0512.com\/","dir":"material\/live\/img\/","filepath":"2016\/11\/","filename":"20161108103644ZgaK.jpg"},"square":{"host":"http:\/\/img.kan0512.com\/","dir":"material\/live\/img\/","filepath":"2016\/11\/","filename":"20161108103644ZgaK.jpg"}},"snap":[],"m3u8":"http:\/\/show.kan0512.com\/ncsztv1\/playlist.m3u8?_upt=1a5dcc9e1586935648","cur_program":{"start_time":"11:50","program":"\u98ce\u4e91\u5267\u573a"},"save_time":"168","next_program":{"start_time":"15:40","program":"\u8054\u64ad\u82cf\u5dde"},"audio_only":"0","aspect":"16:9","content_url":"http:\/\/html.kan0512.com","channel_stream":[{"url":"http:\/\/show.kan0512.com\/ncsztv1\/playlist.m3u8?_upt=1a5dcc9e1586935648","name":"","stream_name":"sd","m3u8":"http:\/\/show.kan0512.com\/ncsztv1\/sd\/live.m3u8?_upt=7a4bc32c1586935648","bitrate":"500","url_rtmp":"rtmp:\/\/livetv.kan0512.com\/live\/ncsztv1_sd?wsSecret=a5b40b28c1249f86db22b585755ae063&wsTime=5e969b40"}],"url_rtmp":"rtmp:\/\/livetv.kan0512.com\/live\/ncsztv1_sd?wsSecret=a5b40b28c1249f86db22b585755ae063&wsTime=5e969b40","ad":{"launch":[{"title":"415","ad_id":"2288","brief":"","link":"","material":{"host":"https:\/\/img.kan0512.com\/","dir":"material\/adv\/img\/","filepath":"2020\/04\/","filename":"f910c396a22706123b732ddbcea8ee2b.jpg"},"type":"image","clktracker":"","imptracker":"","m3u8":null,"param":{"time":"5000","is_over":"","forceShowAdImage":""}}]},"share_url":"http:\/\/html.kan0512.com"}]</pre>
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
