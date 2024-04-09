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
    <title>皮皮虾视频无水印解析-<?php echo $aik['sitename']; ?></title>
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
                皮皮虾视频解析            </div>
            <div>
                输出无水印播放地址            </div>
        </div>
    </header>
<main class="container">
    <div class="apiInfo">
        <p><strong>请求方式：</strong><span>get</span></p>
        <p><strong>请求地址：</strong><span><?php echo filter_input(INPUT_SERVER, "SERVER_NAME"); ?>/api/pp/api.php</span></p>
        <p><strong>返回格式：</strong><span>json/mp4</span></p>
        <p><strong>请求示例1：</strong><span><?php echo filter_input(INPUT_SERVER, "SERVER_NAME"); ?>/api/pp/api.php?url=https://h5.pipix.com/s/hukXsy</span></p>
    <p><strong>请求示例2：</strong><span><?php echo filter_input(INPUT_SERVER, "SERVER_NAME"); ?>/api/pp/api.php?url=https://h5.hulushequ.com/item/6562792949205358861</span></p>
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
                    <td>输出为视频播放地址</td>
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
                    <td class="url">mp4</td>
                    <td class="url">string</td>
                    <td>返回的播放地址</td>
                </tr>
                          </tbody>
        </table>
    </div>
    <div class="simpleTable">
        <p class="linep">返回示例：</p>
        <div class="prediv">
            <pre>直接显示播放源</pre>
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
