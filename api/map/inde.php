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
    <title>获取经纬度以及附近建筑物名-<?php echo $aik['sitename']; ?></title>
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
                获取经纬度以及附近建筑物名            </div>
            <div>
                输出指定经纬度地址详细信息            </div>
        </div>
    </header>
<main class="container">
    <div class="apiInfo">
        <p><strong>请求方式：</strong><span>get</span></p>
        <p><strong>请求地址：</strong><span><?php echo filter_input(INPUT_SERVER, "SERVER_NAME"); ?>/api/map/apijx.php</span></p>
        <p><strong>返回格式：</strong><span>json</span></p>
        <p><strong>请求示例：</strong><span><?php echo filter_input(INPUT_SERVER, "SERVER_NAME"); ?>/api/map/apijx.php?lng=113.63141920733915&lat=34.75343885045448</span></p>
        
        <p><strong>提示：</strong><span>获取解析的<u>（lng及lat）</u>经纬度信息请到<a href="index.php">〈点击此处查看〉</a></span></p>
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
                    <td class="url">lng</td>
                    <td class="url">否</td>
                    <td class="url">string</td>
                    <td>输出当前位置信息</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td class="url">lat</td>
                    <td class="url">否</td>
                    <td class="url">string</td>
                    <td>输出当前位置地理名称</td>
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
                    <td>返回城市名称</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td class="url">desc</td>
                    <td class="url">string</td>
                    <td>返回当前位置名称</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td class="url">name</td>
                    <td class="url">string</td>
                    <td>返回附近建筑物名称</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td class="url">tel</td>
                    <td class="url">string</td>
                    <td>返回编号信息</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="simpleTable">
        <p class="linep">返回示例：</p>
        <div class="prediv">
            <pre>{"status":"1","data":{"adcode":"410102","areacode":"0371","city":"郑州市","cityadcode":"410100","code":"1","country":"中国","countrycode":"CN","cross_list":[{"distance":"338.71","level":"44000, 44000","latitude":"34.75466306","crossid":"0371I49F015045189--0371I49F015045191","name":"建设东路--嵩山北路","width":"20, 20","weight":"140","direction":"East","longitude":"113.6280244"},{"distance":"338.71","level":"42000, 44000","latitude":"34.75466306","crossid":"0371I49F015045101--0371I49F015045191","name":"建设西路--嵩山北路","width":"24, 20","weight":"160","direction":"East","longitude":"113.6280244"},{"distance":"338.71","level":"42000, 44000","latitude":"34.75466306","crossid":"0371I49F015045101--0371I49F015045189","name":"建设西路--建设东路","width":"24, 20","weight":"160","direction":"East","longitude":"113.6280244"}],"desc":"河南省,郑州市,中原区","district":"中原区","districtadcode":"410102","hn":"26号院","message":"Successful.","poi_list":[{"parent":"B01730799J","address":"嵩山北路与建设东路交叉口","distance":"62","latitude":"34.753675","weight":"0.0","type":"风景名胜;公园广场;植物园","typecode":"110103","f_nona":"","childtype":"301","name":"碧沙岗-木兰园","tel":"0371-67882871","towards_angle":"","poiid":"B0FFFRD3C0","entrances":[{"latitude":"34.753867","longitude":"113.63203"}],"end_poi_extension":"2","direction":"East","longitude":"113.632041"},{"parent":"","address":"建设路31号碧沙岗公园内","distance":"197","latitude":"34.751749","weight":"0.0","type":"科教文化服务;科研机构;科研机构","typecode":"141300","f_nona":"","childtype":"","name":"郑州市文物考古研究院(建设东路)","tel":"0371-67974250","towards_angle":"","poiid":"B017316JAM","entrances":[{"latitude":"34.751847","longitude":"113.630801"}],"end_poi_extension":"2","direction":"South","longitude":"113.630759"}</pre>
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
