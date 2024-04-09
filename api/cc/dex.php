
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="title" content="智云api-免费API接口调用平台" />
    <meta name="keywords" content="智云api,免费api,api,api接口,免费api接口,缥缈,随机二次元壁纸api,随机美女壁纸api,短网址生成api" />
    <meta name="description" content="智云api,免费api,api,api接口,免费api接口,缥缈,免费api接口调用" />
    <title>CCTV官方直播解析-智云API</title>
    <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/4.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.staticfile.org/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="../main.css">
</head>

<body>
    <nav class="navbar navbar-expand-sm navbar-dark">
        <div class="container">
            <a href="http://zhiyun.ppdsw.xyz/w/" class="navbar-brand">智云API</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="Navbar">
                <div class="navbar-nav mr-auto">

                </div>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="https://zhiyun.wodemo.net/entry/455642" class="nav-link">官方</a>
                    </li>
                    <li class="nav-item">
                        <a href="https://jq.qq.com/?_wv=1027&k=5DSryHR" class="nav-link">QQ群</a>
                    </li>
                    <li class="nav-item">
                        <a href="http://zhiyun.ppdsw.xyz/w/" class="nav-link" target="_blank">论坛</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <header class="jumbotron">
        <div class="container header">
            <div class="docTitle">
                CCTV央视直播解析            </div>
            <div>
                官方API解析接口            </div>
        </div>
    </header>
<main class="container">
    <div class="apiInfo">
        <p><strong>请求方式：</strong><span>get</span></p>
        <p><strong>请求地址：</strong><span><?php echo filter_input(INPUT_SERVER, "SERVER_NAME"); ?>/api/cctv/api.php</span></p>
        <p><strong>返回格式：</strong><span>json</span></p>
        <p><strong>请求示例：</strong><span><?php echo filter_input(INPUT_SERVER, "SERVER_NAME"); ?>/api/cctv/api.php?url=http://tv.cctv.com/live/cctv1</span></p>
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
                    <td class="url">cctv</td>
                    <td class="url">Y</td>
                    <td class="url">m3u8</td>
                    <td>输出视频播放源</td>
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
                    <td class="url">URL</td>
                    <td class="url">m3u8</td>
                    <td>返回官方直播源</td>
                </tr>
               
            </tbody>
        </table>
    </div>
    <div class="simpleTable">
        <p class="linep">返回示例：</p>
        <div class="prediv">
            <pre>{"josn"}</pre>
        </div>
    </div>
</main>
<footer class="copyright mt-5">
        <div class="container">© 2019 智云API开放平台</div>
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

<script language="javascript" type="text/javascript" src="http://js.users.51.la/18759442.js"></script>
</html>
