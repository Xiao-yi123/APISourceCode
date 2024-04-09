
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="title" content="智云api-免费API接口调用平台" />
    <meta name="keywords" content="智云api,免费api,api,api接口,免费api接口,缥缈,随机二次元壁纸api,随机美女壁纸api,短网址生成api" />
    <meta name="description" content="智云api,免费api,api,api接口,免费api接口,缥缈,免费api接口调用" />
    <title>虎牙直播源解析-智云API</title>
    <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/4.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.staticfile.org/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="../main.css">
</head>

<body>
    <nav class="navbar navbar-expand-sm navbar-dark">
        <div class="container">
            <a href="http://zhiyunzz.simplesite.com" class="navbar-brand">智云API</a>
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
                        <a href="http://www.zy40.cn" class="nav-link" target="_blank">论坛</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <header class="jumbotron">
        <div class="container header">
            <div class="docTitle">
                虎牙直播解析            </div>
            <div>
                输出直播源接口播放地址            </div>
        </div>
    </header>
<main class="container">
    <div class="apiInfo">
        <p><strong>请求方式：</strong><span>get</span></p>
        <p><strong>请求地址：</strong><span><?php echo filter_input(INPUT_SERVER, "SERVER_NAME"); ?>/api/ya/huya.php</span></p>
        <p><strong>返回格式：</strong><span>m3u8</span></p>
        <p><strong>例如：</strong><span>虎牙直播地址为https://www.huya.com/11342412则取后面编号输入即可</span></p>
        <p><strong>请求示例：</strong><span><?php echo filter_input(INPUT_SERVER, "SERVER_NAME"); ?>/api/ya/huya.php?id=11342412</span></p>
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
                    <td class="url">id</td>
                    <td class="url">否</td>
                    <td class="url">string</td>
                    <td>请到虎牙官方直播间获取直播房间号</td>
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
                    <td class="url">m3u8</td>
                    <td class="url">string</td>
                    <td>返回的该直播间的直播源地址</td>
                </tr>
               
            </tbody>
        </table>
    </div>
    <div class="simpleTable">
        <p class="linep">返回示例：</p>
        <div class="prediv">
            <pre>输入房间号即可看到当前直播源播放地址</pre><p>在线解析直播源观看，请将解析好的直播源地址放在解析接口后面的（url=）观看<p>手机端上解析：<p>m.zy40.cn/zb/ck/?url=<p>电脑PC端解析：<p>m.zy40.cn/zb/player/m.php?url=<p>直播源解析接口通用其他的播放源
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
