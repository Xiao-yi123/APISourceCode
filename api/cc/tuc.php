
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
    <title>图虫接口-<?php echo $aik['sitename']; ?></title>
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
                图虫最新图片            </div>
            <div>
                输出当前最新图片分享信息            </div>
        </div>
    </header>
<main class="container">
    <div class="apiInfo">
        <p><strong>请求方式：</strong><span>get</span></p>
        <p><strong>请求地址：</strong><span><?php echo filter_input(INPUT_SERVER, "SERVER_NAME"); ?>/api/cc/tu.php</span></p>
        <p><strong>返回格式：</strong><span>json</span></p>
        <p><strong>请求示例：</strong><span><?php echo filter_input(INPUT_SERVER, "SERVER_NAME"); ?>/api/cc/tu.php</span></p>
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
                    <td class="url">PHP</td>
                    <td class="url">否</td>
                    <td class="url">string</td>
                    <td>刷新当前php页面输出当前最新图片信息</td>
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
                    <td class="url">url</td>
                    <td class="url">string</td>
                    <td>返回的连接地址</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td class="url">published_at</td>
                    <td class="url">string</td>
                    <td>返回分享时间</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td class="url">title</td>
                    <td class="url">string</td>
                    <td>返回简要信息</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td class="url">post_id</td>
                    <td class="url">string</td>
                    <td>返回作者主题ID</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="simpleTable">
        <p class="linep">返回示例：</p>
        <div class="prediv">
            <pre>{"is_history":false,"counts":11,"feedList":[{"post_id":63715405,"type":"multi-photo","url":"https:\/\/tuchong.com\/16368360\/63715405\/","site_id":"16368360","author_id":"16368360","published_at":"2020-03-14 15:00:47","passed_time":"03\u670814\u65e5","excerpt":"","favorites":21,"comments":0,"rewardable":true,"parent_comments":"0","rewards":"0","views":1024,"collected":false,"shares":0,"recommend":true,"delete":false,"update":false,"content":"","title":"\u94a5\u94a5\u4e8c","image_count":6,"images":[{"img_id":608749883,"img_id_str":"608749883","user_id":16368360,"title":"","excerpt":"","width":3840,"height":5760,"description":""},{"img_id":590924730,"img_id_str":"590924730","user_id":16368360,"title":"","excerpt":"","width":3840,"height":5760,"description":""},{"img_id":580111628,"img_id_str":"580111628","user_id":16368360,"title":"","excerpt":"","width":3840,"height":5760,"description":""},{"img_id":580111628,"img_id_str":"580111628","user_id":16368360,"title":"","excerpt":"","width":3840,"height":5760,"description":""},{"img_id":331205066,"img_id_str":"331205066","user_id":16368360,"title":"","excerpt":"","width":3840,"height":5760,"description":""},{"img_id":196790374,"img_id_str":"196790374","user_id":16368360,"title":"","excerpt":"","width":3840,"height":5760,"description":""}]</pre>
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
