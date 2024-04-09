
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
    <title>百度天气预报接口查询-<?php echo $aik['sitename']; ?></title>
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
                百度天气            </div>
            <div>
                输出查询的当前天气预报            </div>
        </div>
    </header>
<main class="container">
    <div class="apiInfo">
        <p><strong>请求方式：</strong><span>get</span></p>
        <p><strong>请求地址：</strong><span><?php echo filter_input(INPUT_SERVER, "SERVER_NAME"); ?>/api/baidu/tq.php</span></p>
        <p><strong>返回格式：</strong><span>json</span></p>
        <p><strong>请求示例：</strong><span><?php echo filter_input(INPUT_SERVER, "SERVER_NAME"); ?>/api/baidu/tq.php?city=广州</span></p>
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
                    <td class="url">是</td>
                    <td class="url">string</td>
                    <td>输入城市地区名称查询</td>
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
                    <td class="url">city</td>
                    <td class="url">string</td>
                    <td>返回的当前查询的地区</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td class="url">week</td>
                    <td class="url">string</td>
                    <td>返回时间日期</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td class="url">date</td>
                    <td class="url">string</td>
                    <td>返回详细信息</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td class="url">ipcity</td>
                    <td class="url">string</td>
                    <td>返回本地地区</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="simpleTable">
        <p class="linep">返回示例：</p>
        <div class="prediv">
            <pre>{"city":"广州"},"content":{"week":"周日 04月19日","city":"广州","today":{"time":"周日 04月19日 (实时: 27℃)","date":"04月19日","img":["",""],"condition":"多云","wind":"东南风微风","temp":"27℃","link":"http:\/\/www.weather.com.cn\/weather\/101280101.shtml#7d","imgs":{"1":"a1","0":"a1"},"pm25":"56","pollution":"10","pm25url":"\/\/www.baidu.com\/s?wd=%E5%B9%BF%E5%B7%9E%E7%A9%BA%E6%B0%94%E8%B4%A8%E9%87%8F%E6%8C%87%E6%95%B0&tn=baidutop10&rsv_idx=2"},"tomorrow":{"time":"周一","date":"04月20日","img":["",""],"condition":"多云","wind":"南风3-4级","temp":"22 ~ 29","link":"http:\/\/www.weather.com.cn\/weather\/101280101.shtml#7d","imgs":{"1":"a1","0":"a1"},"pm25":"56","pollution":"10","pm25url":"\/\/www.baidu.com\/s?wd=%E5%B9%BF%E5%B7%9E%E7%A9%BA%E6%B0%94%E8%B4%A8%E9%87%8F%E6%8C%87%E6%95%B0&tn=baidutop10&rsv_idx=2"},"thirdday":{"time":"周二","date":"04月21日","img":["",""],"condition":"雷阵雨转中到大雨","wind":"南风3-4级","temp":"20 ~ 28","link":"http:\/\/www.weather.com.cn\/weather\/101280101.shtml#7d","imgs":{"1":"a4","0":"a4"},"pm25":"\/\/www.baidu.com\/s?wd=%E5%B9%BF%E5%B7%9E%E7%A9%BA%E6%B0%94%E8%B4%A8%E9%87%8F%E6%8C%87%E6%95%B0&tn=baidutop10&rsv_idx=2","pollution":"10","pm25url":""},"fourthday":{"time":"周三","date":"04月22日","img":["",""],"condition":"中到大雨转中雨","wind":"无持续风向微风","temp":"17 ~ 25","link":"http:\/\/www.weather.com.cn\/weather\/101280101.shtml#7d","imgs":{"1":"a1","0":"a1"}},"fifthday":{"time":"周四","date":"04月23日","img":["",""],"condition":"中雨转中到大雨","wind":"东北风3-4级","temp":"14 ~ 18","link":"http:\/\/www.weather.com.cn\/weather\/101280101.shtml#7d","imgs":{"1":"a8","0":"a8"}},"linkseven":"http:\/\/www.weather.com.cn\/weather\/101280101.shtml#7d","source":{"name":"中国气象频道","url":"http:\/\/www.mywtv.cn\/"},"cityname":"广州","calendar":{"time":"1587296402914","lunar":"三月廿七","festival":"谷雨","weatherSourceUrl":"http:\/\/www.weather.com.cn\/weather\/101280101.shtml#7d"},"currenttemp":"27℃","pslink":"\/\/www.baidu.com\/s?tn=baidutop10&rsv_idx=2&wd=深圳","weatherType":"aladdin","isauto":false,"ipcity":"深圳","province":"广东"}}} }</pre>
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
