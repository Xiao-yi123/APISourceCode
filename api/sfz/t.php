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
    <title>天气预报API接口-<?php echo $aik['sitename']; ?></title>
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
                天气预报            </div>
            <div>
                查询接口API            </div>
        </div>
    </header>
<main class="container">
    <div class="apiInfo">
        <p><strong>请求方式：</strong><span>get</span></p>
        <p><strong>请求地址：</strong><span><?php echo filter_input(INPUT_SERVER, "SERVER_NAME"); ?>/api/sfz/tq.php</span></p>
        <p><strong>返回格式：</strong><span>json</span></p>
        <p><strong>请求示例：</strong><span><?php echo filter_input(INPUT_SERVER, "SERVER_NAME"); ?>/api/sfz/tq.php?city=成都</span></p>
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
                    <td class="url">Y</td>
                    <td class="url">string</td>
                    <td>输出地区最新天气详细预报</td>
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
                    <td class="url">code</td>
                    <td class="url">string</td>
                    <td>返回的状态码</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td class="url">date</td>
                    <td class="url">string</td>
                    <td>返回温度信息</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td class="url">fl</td>
                    <td class="url">string</td>
                    <td>返回风向信息</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td class="url">date</td>
                    <td class="url">string</td>
                    <td>返回日期预报信息</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="simpleTable">
        <p class="linep">返回示例：</p>
        <div class="prediv">
            <pre>{"code":200,"msg":"成功!","data":{"yesterday":{"date":"17日星期六","high":"高温 35℃","fx":"无持续风向","low":"低温 25℃","fl":"\u003c![CDATA[\u003c3级]]\u003e","type":"晴"},"city":"成都","aqi":null,"forecast":[{"date":"18日星期天","high":"高温 35℃","fengli":"\u003c![CDATA[\u003c3级]]\u003e","low":"低温 25℃","fengxiang":"无持续风向","type":"晴"},{"date":"19日星期一","high":"高温 34℃","fengli":"\u003c![CDATA[\u003c3级]]\u003e","low":"低温 23℃","fengxiang":"无持续风向","type":"晴"},{"date":"20日星期二","high":"高温 27℃","fengli":"\u003c![CDATA[\u003c3级]]\u003e","low":"低温 23℃","fengxiang":"无持续风向","type":"大雨"},{"date":"21日星期三","high":"高温 28℃","fengli":"\u003c![CDATA[\u003c3级]]\u003e","low":"低温 23℃","fengxiang":"无持续风向","type":"阵雨"},{"date":"22日星期四","high":"高温 30℃","fengli":"\u003c![CDATA[\u003c3级]]\u003e","low":"低温 23℃","fengxiang":"无持续风向","type":"阵雨"}],"ganmao":"各项气象条件适宜，发生感冒机率较低。但请避免长期处于空调房间中，以防感冒。","wendu":"27"}}</pre>
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
