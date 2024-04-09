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
    <title>语录段子-<?php echo $aik['sitename']; ?></title>
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
                语录段子            </div>
            <div>
                随机按时间的语录            </div>
        </div>
    </header>
<main class="container">
    <div class="apiInfo">
        <p><strong>请求方式：</strong><span>get</span></p>
        <p><strong>请求地址：</strong><span><?php echo filter_input(INPUT_SERVER, "SERVER_NAME"); ?>/api/yan/yd.php</span></p>
        <p><strong>返回格式：</strong><span>json</span></p>
        <p><strong>请求示例：</strong><span><?php echo filter_input(INPUT_SERVER, "SERVER_NAME"); ?>/api/yan/yd.php?city=2019-6-18</span></p>
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
                    <td class="url">city</td>
                    <td class="url">否</td>
                    <td class="url">string</td>
                    <td>输出为当前时间的语录</td>
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
                    <td class="url">ID</td>
                    <td class="url">string</td>
                    <td>返回的该信息条ID号</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td class="url">data</td>
                    <td class="url">string</td>
                    <td>返回语录信息</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td class="url">nick</td>
                    <td class="url">string</td>
                    <td>返回发布作者</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td class="url">avatar</td>
                    <td class="url">string</td>
                    <td>返回该语录的配信的图片地址</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="simpleTable">
        <p class="linep">返回示例：</p>
        <div class="prediv">
            <pre>{"total":2,"data":[{"id":8421,"data":"坦然点，你虽然不会招蜂引蝶，但你招蚊子。","at":1560787200000,"by":44619,"from":null,"to":null,"type":null,"taste":1,"view":88334,"like":165,"say":4,"forward":40,"factor":null,"createTime":1560681802000,"audit":1,"status":1,"writer":{"id":44619,"nick":"糖瘾少年Zero_","avatar":"http://tvax4.sinaimg.cn/crop.0.0.996.996.50/6ed01424ly8frfv3imwj9j20ro0ro762.jpg","msgCount":null},"actions":[],"format":1,"viewStr":"几万人"},{"id":8412,"data":"知道流星为什么飞那么快吗？因为它，根本不想知道你的愿望。","at":1560787200000,"by":1212,"from":null,"to":null,"type":null,"taste":1,"view":89519,"like":344,"say":10,"forward":55,"factor":null,"createTime":1560656853000,"audit":1,"status":1,"writer":{"id":1212,"nick":"( ⊙ o ⊙ )~Tu ~","avatar":"http://thirdwx.qlogo.cn/mmopen/vi_32/4kF5cFK9MN5RoMNlznbI1XGA37hecl722ebDtbao3ic6Mdq1tEHymTicQ36PVh5GictSFf91nK9NjOn0rQceGcamg/132","msgCount":null},"actions":[],"format":1,"viewStr":"几万人"}]}</pre>
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
