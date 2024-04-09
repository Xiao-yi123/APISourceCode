
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="title" content="智云api-免费API接口调用平台" />
    <meta name="keywords" content="智云api,免费api,api,api接口,免费api接口,缥缈,随机二次元壁纸api,随机美女壁纸api,短网址生成api" />
    <meta name="description" content="智云api,免费api,api,api接口,免费api接口,缥缈,免费api接口调用" />
    <title>蓝奏云盘解析-智云API</title>
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
                        <a href="https://jq.qq.com/?_wv=1027&k=5FUWGEu" class="nav-link">QQ群</a>
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
                蓝奏云盘直连解析            </div>
            <div>
                输出直连下载地址            </div>
        </div>
    </header>
<main class="container">
    <div class="apiInfo">
        <p><strong>请求方式：</strong><span>get</span></p>
        <p><strong>请求地址：</strong><span><?php echo filter_input(INPUT_SERVER, "SERVER_NAME"); ?>/api/lanzou/lanzou.php</span></p>
        <p><strong>返回格式：</strong><span>json/images</span></p>
        <p><strong>请求示例：</strong><span><?php echo filter_input(INPUT_SERVER, "SERVER_NAME"); ?>/api/lanzou/lanzou.php?url=https://zhiyun.lanzous.com/i8fclgh</span></p>
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
                    <td class="url">URL</td>
                    <td class="url">否</td>
                    <td class="url">string</td>
                    <td>输出直连下载地址</td>
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
                    <td>返回的文件名称</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td class="url">size</td>
                    <td class="url">string</td>
                    <td>返回文件大小</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td class="url">url</td>
                    <td class="url">string</td>
                    <td>返回直连高速下载地址</td>
                </tr>
                            </tbody>
        </table>
    </div>
    <div class="simpleTable">
        <p class="linep">返回示例：</p>
        <div class="prediv">
            <pre>{"code":1,"msg":"成功","name":"智云影音V3.7.3.3清爽特别版.apk ","size":" 7.9 M","url":"https://vip.d2.baidupan.com/file/?VzFQblxtVWRTWgI6ATQAbFVqAzsAuVDLBLkG5FawVMRTtgftAe1X6lSdULUDAQEzUSUENlIjCjsCKwE0Vuxa41fSUOBciVW8U+IC3QHsAORVhwOtALhQ2wSLBi5Wa1QlUzgHdgE6V2pUblBjAwgBaVFvBDxSPAo9Aj0BP1Y6Wm1XblAwXCdVZ1N2AmkBbQAyVT4DNwBnUGIENQYmVnpUJVNuB2IBbFcxVDJQKQNnATFRJAQxUj4KJwI8AWVWaFpvV2JQPlw4VTJTYwJtAW0AZVU4Az4AalAzBDMGN1Y9VGBTZAdlAWhXMVQxUDADNgE4UWoENVI4CjkCKwFmVnpaMFdxUHJcclVkU3cCPQExADxVPgMxAGlQagQxBjhWLFQhUzoHPQE5V2VUP1A3A2IBOFE8BDFSPAo+AjYBM1Y/Wn1XMVBrXHZVPFM0AmEBbQA3VTYDMABsUGYENAY1VixUIFMjBycBYVcyVDdQMQNvATBROQQyUjQKOQIwASFWf1oyVydQOlwyVTdTKwJiAWQAL1U+Az4AbVB8BDIGNVY+"}</pre>
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
