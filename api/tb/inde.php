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
    <title>爱奇艺视频搜索-<?php echo $aik['sitename']; ?></title>
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
                爱奇艺视频搜索            </div>
            <div>
                输出影片相关信息            </div>
        </div>
    </header>
<main class="container">
    <div class="apiInfo">
        <p><strong>请求方式：</strong><span>get</span></p>
        <p><strong>请求地址：</strong><span><?php echo filter_input(INPUT_SERVER, "SERVER_NAME"); ?>/api/tb/qy.php</span></p>
        <p><strong>返回格式：</strong><span>json</span></p>
        <p><strong>请求示例：</strong><span><?php echo filter_input(INPUT_SERVER, "SERVER_NAME"); ?>/api/tb/qy.php?s=破冰行动</span></p>
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
                    <td class="url">s</td>
                    <td class="url">否</td>
                    <td class="url">string</td>
                    <td>输出影片名称相关信息</td>
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
                    <td>返回的片名</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td class="url">image_url</td>
                    <td class="url">string</td>
                    <td>返回图片地址</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td class="url">link</td>
                    <td class="url">string</td>
                    <td>返回地址连接</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td class="url">vid</td>
                    <td class="url">string</td>
                    <td>返回视频vid参数</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="simpleTable">
        <p class="linep">返回示例：</p>
        <div class="prediv">
            <pre>{"code":"A00000","site_id":"iqiyi","name":"破冰行动","image_url":"http://pic3.iqiyipic.com/image/20190531/58/77/a_100147602_m_601_m30_120_160.jpg","link":"http://www.iqiyi.com/v_19rsjr50nw.html","tvid":2256822000,"vid":"b97d2d10d8b4d8d36b3b93288cf7c6c9","item_total_number":48,"item_latest_number":48,"duration":2519,"third_id":218052014,"publish_date":"20190507","third_docid":"808efcb4a8b62faac8b03349a7310524","description":"李飞夜袭塔寨","album_id":226128201,"is_charge":false,"current_item_number":1,"channel_id":2,"qisu_url":"qisu://tvid=2256822000;vid=b97d2d10d8b4d8d36b3b93288cf7c6c9;ischange=false;tvname=%E7%A0%B4%E5%86%B0%E8%A1%8C%E5%8A%A8;albumid=226128201;"}</pre>
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
