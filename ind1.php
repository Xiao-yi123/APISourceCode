
<?php 
error_reporting(0);
require_once 'api/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="title" content="智云集合api-更多精品资源下载地址www.zy40.cn" />
    <meta name="keywords" content="<?php echo $aik['keywords']; ?>" />
    <meta name="description" content="<?php echo $aik['description']; ?>" />
    <title><?php echo $aik['title']; ?></title>
    <link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/4.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.staticfile.org/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="./api/main.css">
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
            <div class="title">
                高速稳定免费APi接口调用平台
            </div>
            <div>
                APi接口调用及工具查询平台
            </div>
            <div>
                在线工具大全开发平台
            </div>
            <div class="search-wraper" role="search">
                <div class="form-group">
                    
                </div>
            </div>
        </div>
    </header>
    <main class="container">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>接口名称</th>
                    <th>接口说明</th>
                    <th>接口排序</th>
                </tr>
            </thead>

            <tbody id="list">
              
  <tr class="pack"><td class="title"><a href="./api/bing/" target="_blank">必应每日一图  </a></td><td><a href="./api/bing/" target="_blank">随机美图接口</a></td><td><a href="./api/bing/" target="_blank"><i class="fa fa-star"></i> 1</a></td></tr>
  <tr class="pack"><td class="title"><a href="./api/who/" target="_blank">在线域名WHOIS查询  </a></td><td><a href="./api/who/" target="_blank">在线域名WHOIS查询API接口</a></td><td><a href="./api/who/" target="_blank"><i class="fa fa-star"></i> 2</a></td></tr>
  
  <tr class="pack"><td class="title"><a href="./api/ypjx/test.html" target="_blank">好看视频及网易音乐解析接口  </a></td><td><a href="./api/ypjx/test.html" target="_blank">好看视频及网易云音乐解析API</a></td><td><a href="./api/ypjx/test.html" target="_blank"><i class="fa fa-star"></i> 3</a></td></tr>
  <tr class="pack"><td class="title"><a href="./api/ypjx/index.html" target="_blank">优酷视频解析接口  </a></td><td><a href="./api/ypjx/index.html" target="_blank">优酷视频无广告解析</a></td><td><a href="./api/ypjx/index.html" target="_blank"><i class="fa fa-star"></i> 4</a></td></tr>
  <tr class="pack"><td class="title"><a href="./api/baidu/bkh.php" target="_blank">百度百科搜索接口  </a></td><td><a href="./api/baidu/bkh.php" target="_blank">百度百科搜索解析接口</a></td><td><a href="./api/baidu/bkh.php" target="_blank"><i class="fa fa-star"></i> 5</a></td></tr>
<tr class="pack"><td class="title"><a href="./api/ya/szlive.php" target="_blank">苏州直播源获取接口  </a></td><td><a href="./api/ya/szlive.php" target="_blank">苏州电视台直播源获取接口</a></td><td><a href="./api/ya/szlive.php" target="_blank"><i class="fa fa-star"></i> 6</a></td></tr>  
 <tr class="pack"><td class="title"><a href="./api/phone/inde.php" target="_blank">骚扰电话在线查询接口  </a></td><td><a href="./api/phone/inde.php" target="_blank">骚扰电话在线查询解析接口</a></td><td><a href="./api/phone/inde.php" target="_blank"><i class="fa fa-star"></i> 7</a></td></tr>  
  
  <tr class="pack"><td class="title"><a href="./api/douyin/" target="_blank">抖音无水印解析  </a></td><td><a href="./api/douyin/" target="_blank">无水印解析接口</a></td><td><a href="./api/douyin/" target="_blank"><i class="fa fa-star"></i> 8</a></td></tr>
  <tr class="pack"><td class="title"><a href="./api/key/" target="_blank">百度关键词排名批量查询  </a></td><td><a href="./api/key/" target="_blank">百度关键词排名批量查询接口</a></td><td><a href="./api/key/" target="_blank"><i class="fa fa-star"></i> 9</a></td></tr>
  <tr class="pack"><td class="title"><a href="./api/bilibili/" target="_blank">哔哩哔哩直播源解析获取  </a></td><td><a href="./api/bilibili/" target="_blank">哔哩Live直播间解析接口</a></td><td><a href="./api/bilibili/" target="_blank"><i class="fa fa-star"></i> 10</a></td></tr>
  <tr class="pack"><td class="title"><a href="./api/bilibili/inde.php" target="_blank">bilibili封面图api调用  </a></td><td><a href="./api/bilibili/inde.php" target="_blank">bilibili封面图api解析接口</a></td><td><a href="./api/bilibili/inde.php" target="_blank"><i class="fa fa-star"></i> 11</a></td></tr>
  <tr class="pack"><td class="title"><a href="./api/ximalaya/" target="_blank">喜马拉雅FM主播信息采集  </a></td><td><a href="./api/ximalaya/" target="_blank">喜马拉雅FM主播信息接口</a></td><td><a href="./api/ximalaya/" target="_blank"><i class="fa fa-star"></i> 12</a></td></tr>
  <tr class="pack"><td class="title"><a href="./api/wyy/" target="_blank">网易云音乐接口  </a></td><td><a href="./api/wyy/" target="_blank">在线音乐解析接口</a></td><td><a href="./api/wyy/" target="_blank"><i class="fa fa-star"></i> 13</a></td></tr>
<tr class="pack"><td class="title"><a href="./api/yiyan/" target="_blank">一言接口  </a></td><td><a href="./api/yiyan/" target="_blank">随机一言</a></td><td><a href="./api/yiyan/" target="_blank"><i class="fa fa-star"></i> 14</a></td></tr>
<tr class="pack"><td class="title"><a href="./api/ACG/" target="_blank">随机生成图片接口  </a></td><td><a href="./api/ACG/" target="_blank">随机生成二次元图片</a></td><td><a href="./api/ACG/" target="_blank"><i class="fa fa-star"></i> 15</a></td></tr>  
  <tr class="pack"><td class="title"><a href="./api/mail/" target="_blank">发送邮件API接口  </a></td><td><a href="./api/mail/" target="_blank">邮件发送接口</a></td><td><a href="./api/mail/" target="_blank"><i class="fa fa-star"></i> 16</a></td></tr>  
<tr class="pack"><td class="title"><a href="./api/dwz/" target="_blank">新浪短网址生成API接口  </a></td><td><a href="./api/dwz/" target="_blank">新浪短网址生成接口</a></td><td><a href="./api/dwz/" target="_blank"><i class="fa fa-star"></i> 17</a></td></tr>
<tr class="pack"><td class="title"><a href="./api/qq/" target="_blank">QQ头像及呢称接口  </a></td><td><a href="./api/qq/" target="_blank">QQ头像呢称获取接口</a></td><td><a href="./api/qq/" target="_blank"><i class="fa fa-star"></i> 18</a></td></tr>
<tr class="pack"><td class="title"><a href="./api/yuv.php" target="_blank">域名绿V生成接口  </a></td><td><a href="./api/yuv.php" target="_blank">域名生成绿V接口</a></td><td><a href="./api/yuv.php" target="_blank"><i class="fa fa-star"></i> 19</a></td></tr>
<tr class="pack"><td class="title"><a href="./api/icp/" target="_blank">ICP备案查询接口  </a></td><td><a href="./api/icp/" target="_blank">ICP备案查询接口调用</a></td><td><a href="./api/icp/" target="_blank"><i class="fa fa-star"></i> 20</a></td></tr>
<tr class="pack"><td class="title"><a href="./api/qrcode/" target="_blank">二维码生成接口  </a></td><td><a href="./api/qrcode/" target="_blank">二维码生成接口</a></td><td><a href="./api/qrcode/" target="_blank"><i class="fa fa-star"></i> 21</a></td></tr>
<tr class="pack"><td class="title"><a href="./api/yan/inde.php" target="_blank">随机古诗词接口  </a></td><td><a href="./api/yan/inde.php" target="_blank">随机获取古诗词句API接口</a></td><td><a href="./api/yan/inde.php" target="_blank"><i class="fa fa-star"></i> 22</a></td></tr>
<tr class="pack"><td class="title"><a href="./api/yan/sjc.php" target="_blank">手机号归属地API  </a></td><td><a href="./api/yan/sjc.php" target="_blank">手机号归属地查询接口</a></td><td><a href="./api/yan/sjc.php" target="_blank"><i class="fa fa-star"></i> 23</a></td></tr>
<tr class="pack"><td class="title"><a href="./api/qr/" target="_blank">二维码图片生成  </a></td><td><a href="./api/qr/" target="_blank">二维码图片生成接口</a></td><td><a href="./api/qr/" target="_blank"><i class="fa fa-star"></i> 24</a></td></tr>
<tr class="pack"><td class="title"><a href="./api/ip/pp.php" target="_blank">本地IP查询接口  </a></td><td><a href="./api/ip/pp.php" target="_blank">本地IP查询API接口</a></td><td><a href="./api/ip/pp.php" target="_blank"><i class="fa fa-star"></i> 25</a></td></tr>
<tr class="pack"><td class="title"><a href="./api/baidu/" target="_blank">百度收录查询  </a></td><td><a href="./api/baidu/" target="_blank">百度收录查询接口</a></td><td><a href="./api/baidu/" target="_blank"><i class="fa fa-star"></i> 26</a></td></tr>
<tr class="pack"><td class="title"><a href="./api/wy/inde.php" target="_blank">网易最新资讯发布  </a></td><td><a href="./api/wy/inde.php" target="_blank">网易最新资讯发布API接口</a></td><td><a href="./api/wy/inde.php" target="_blank"><i class="fa fa-star"></i> 27</a></td></tr>
<tr class="pack"><td class="title"><a href="./api/ip/sg.php" target="_blank">搜狗随机壁纸接口  </a></td><td><a href="./api/ip/sg.php" target="_blank">搜狗随机图片API接口</a></td><td><a href="./api/ip/sg.php" target="_blank"><i class="fa fa-star"></i> 28</a></td></tr>
<tr class="pack"><td class="title"><a href="./api/cc/" target="_blank">集成版IP查询接口  </a></td><td><a href="./api/cc/" target="_blank">集成各大IP查询接口API</a></td><td><a href="./api/cc/" target="_blank"><i class="fa fa-star"></i> 29</a></td></tr>
<tr class="pack"><td class="title"><a href="./api/baidu/y.php" target="_blank">域名是否已注册查询  </a></td><td><a href="./api/baidu/y.php" target="_blank">查询域名是否已经被注册API接口</a></td><td><a href="./api/baidu/y.php" target="_blank"><i class="fa fa-star"></i> 30</a></td></tr>
<tr class="pack"><td class="title"><a href="./api/sfz/t.php" target="_blank">天气预报查询  </a></td><td><a href="./api/sfz/t.php" target="_blank">天气预报查询API接口</a></td><td><a href="./api/sfz/t.php" target="_blank"><i class="fa fa-star"></i> 31</a></td></tr>        
<tr class="pack"><td class="title"><a href="./api/k/" target="_blank">全民K歌解析  </a></td><td><a href="./api/k/" target="_blank">全民K歌API接口</a></td><td><a href="./api/k/" target="_blank"><i class="fa fa-star"></i> 32</a></td></tr>        
<tr class="pack"><td class="title"><a href="./api/bd/" target="_blank">ICP备案查询  </a></td><td><a href="./api/bd/" target="_blank">ICP备案查询</a></td><td><a href="./api/bd/" target="_blank"><i class="fa fa-star"></i> 33</a></td></tr>        
<tr class="pack"><td class="title"><a href="./api/wz/" target="_blank">域名生成二维码图片  </a></td><td><a href="./api/wz/" target="_blank">腾讯官方二维码图片生成API接口</a></td><td><a href="./api/wz/" target="_blank"><i class="fa fa-star"></i> 34</a></td></tr>        
<tr class="pack"><td class="title"><a href="./api/sfz/z.php" target="_blank">龙珠直播解析接口  </a></td><td><a href="./api/sfz/z.php" target="_blank">龙珠直播API解析直播源信息</a></td><td><a href="./api/sfz/z.php" target="_blank"><i class="fa fa-star"></i> 35</a></td></tr>        
<tr class="pack"><td class="title"><a href="./api/baidu/z.php" target="_blank">网站重权限查询 </a></td><td><a href="./api/baidu/z.php" target="_blank">域名重权限API接口查询</a></td><td><a href="./api/baidu/z.php" target="_blank"><i class="fa fa-star"></i> 36</a></td></tr>        
<tr class="pack"><td class="title"><a href="./api/lanzou/index.php" target="_blank">知乎最新新闻资讯接口 </a></td><td><a href="./api/lanzou/index.php" target="_blank">知乎新闻资讯API解析接口</a></td><td><a href="./api/lanzou/index.php" target="_blank"><i class="fa fa-star"></i> 37</a></td></tr>
<tr class="pack"><td class="title"><a href="./api/bdipdw/" target="_blank">百度IP地址查询 </a></td><td><a href="./api/bdipdw/" target="_blank">百度IP地址位置API接口</a></td><td><a href="./api/bdipdw/" target="_blank"><i class="fa fa-star"></i> 38</a></td></tr>        
<tr class="pack"><td class="title"><a href="./api/fy/" target="_blank">语言翻译接口 </a></td><td><a href="./api/fy/" target="_blank">在线翻译接口API</a></td><td><a href="./api/fy/" target="_blank"><i class="fa fa-star"></i> 39</a></td></tr> 
<tr class="pack"><td class="title"><a href="./api/wy/" target="_blank">网易音乐解析 </a></td><td><a href="./api/wy/" target="_blank">网易音乐API解析接口</a></td><td><a href="./api/wy/" target="_blank"><i class="fa fa-star"></i> 40</a></td></tr>
<tr class="pack"><td class="title"><a href="./api/ya/" target="_blank">检测域名是否被墙 </a></td><td><a href="./api/ya/" target="_blank">查看域名是否已被墙API接口</a></td><td><a href="./api/ya/" target="_blank"><i class="fa fa-star"></i> 41</a></td></tr>
<tr class="pack"><td class="title"><a href="./api/t/" target="_blank">检测域名是否已被拦截 </a></td><td><a href="./api/t/" target="_blank">腾讯官方域名检测拦截API接口</a></td><td><a href="./api/t/" target="_blank"><i class="fa fa-star"></i> 42</a></td></tr>
<tr class="pack"><td class="title"><a href="./api/zy/" target="_blank">检测子域名 </a></td><td><a href="./api/zy/" target="_blank">检测子域名有多少接口</a></td><td><a href="./api/zy/" target="_blank"><i class="fa fa-star"></i> 43</a></td></tr>
<tr class="pack"><td class="title"><a href="./api/wp/" target="_blank">360高清随机壁纸 </a></td><td><a href="./api/wp/" target="_blank">360高清壁纸接口</a></td><td><a href="./api/wp/" target="_blank"><i class="fa fa-star"></i> 44</a></td></tr>
<tr class="pack"><td class="title"><a href="./api/pgx/" target="_blank">皮皮搞笑视频解析 </a></td><td><a href="./api/pgx/" target="_blank">皮皮搞笑视频无水印接口API</a></td><td><a href="./api/pgx/" target="_blank"><i class="fa fa-star"></i> 45</a></td></tr>
<tr class="pack"><td class="title"><a href="./api/pp/" target="_blank">皮皮虾短视频无水印解析 </a></td><td><a href="./api/pp/" target="_blank">皮皮虾短视频无水印解析接口API</a></td><td><a href="./api/pp/" target="_blank"><i class="fa fa-star"></i> 46</a></td></tr>
<tr class="pack"><td class="title"><a href="./api/hs/" target="_blank">火山小视频无水印解析 </a></td><td><a href="./api/hs/" target="_blank">火山小视频无水印解析接口API</a></td><td><a href="./api/hs/" target="_blank"><i class="fa fa-star"></i> 47</a></td></tr>
<tr class="pack"><td class="title"><a href="./api/weath/start.php" target="_blank">最近七天气候预报 </a></td><td><a href="./api/weath/start.php" target="_blank">最近本地天气七天预报接口</a></td><td><a href="./api/weath/start.php" target="_blank"><i class="fa fa-star"></i> 48</a></td></tr>
<tr class="pack"><td class="title"><a href="./api/yan/y.php" target="_blank">语录段子信息API  </a></td><td><a href="./api/yan/y.php" target="_blank">按时间输出的语录段子接口</a></td><td><a href="./api/yan/y.php" target="_blank"><i class="fa fa-star"></i> 49</a></td></tr>
<tr class="pack"><td class="title"><a href="./api/wsh/" target="_blank">微视去水印解析  </a></td><td><a href="./api/wsh/" target="_blank">微视无水印解析API接口</a></td><td><a href="./api/wsh/" target="_blank"><i class="fa fa-star"></i> 50</a></td></tr>
<tr class="pack"><td class="title"><a href="./api/bparse/inde.php" target="_blank">哔哩视频网AV视频解析  </a></td><td><a href="./api/bparse/inde.php" target="_blank">B站-flv视频解析接口</a></td><td><a href="./api/bparse/inde.php" target="_blank"><i class="fa fa-star"></i> 51</a></td></tr>
<tr class="pack"><td class="title"><a href="./api/map/" target="_blank">经纬度解析及位置名称 </a></td><td><a href="./api/map/" target="_blank">获取经纬度以及附近建筑物名API接口</a></td><td><a href="./api/map/" target="_blank"><i class="fa fa-star"></i> 52</a></td></tr>
<tr class="pack"><td class="title"><a href="./api/tb/" target="_blank">淘宝商品搜索 </a></td><td><a href="./api/tb/" target="_blank">淘宝商城产品搜索API接口</a></td><td><a href="./api/tb/" target="_blank"><i class="fa fa-star"></i> 53</a></td></tr>
<tr class="pack"><td class="title"><a href="./api/tb/inde.php" target="_blank">爱奇艺影片搜索 </a></td><td><a href="./api/tb/inde.php" target="_blank">爱奇艺视频搜索API接口</a></td><td><a href="./api/tb/inde.php" target="_blank"><i class="fa fa-star"></i> 54</a></td></tr> 
<tr class="pack"><td class="title"><a href="./api/tb/qyg.php" target="_blank">爱奇艺热门搜索关键词 </a></td><td><a href="./api/tb/qyg.php" target="_blank">爱奇艺视频热门搜索关键词API接口</a></td><td><a href="./api/tb/qyg.php" target="_blank"><i class="fa fa-star"></i> 55</a></td></tr>
<tr class="pack"><td class="title"><a href="./api/rm/" target="_blank">搜狗百度热搜排行榜 </a></td><td><a href="./api/rm/" target="_blank">搜狗百度热搜排行榜API接口</a></td><td><a href="./api/rm/" target="_blank"><i class="fa fa-star"></i> 56</a></td></tr>
<tr class="pack"><td class="title"><a href="./api/txt/" target="_blank">文字转语音合成接口 </a></td><td><a href="./api/txt/" target="_blank">在线文字转语音合成接口API</a></td><td><a href="./api/txt/" target="_blank"><i class="fa fa-star"></i> 57</a></td></tr>
<tr class="pack"><td class="title"><a href="./api/qq/inde.php" target="_blank">QQ群号头像图片接口  </a></td><td><a href="./api/qq/inde.php" target="_blank">QQ群号头像图片获取接口</a></td><td><a href="./api/qq/inde.php" target="_blank"><i class="fa fa-star"></i> 58</a></td></tr>
<tr class="pack"><td class="title"><a href="./api/douyin/inde.php" target="_blank">抖音实时最新热搜  </a></td><td><a href="./api/douyin/inde.php" target="_blank">最新即时热门搜索词接口</a></td><td><a href="./api/douyin/inde.php" target="_blank"><i class="fa fa-star"></i> 59</a></td></tr>
  <tr class="pack"><td class="title"><a href="./api/58pic/inde.php" target="_blank">千图网无水印解析  </a></td><td><a href="./api/58pic/inde.php" target="_blank">无水印解析接口</a></td><td><a href="./api/58pic/inde.php" target="_blank"><i class="fa fa-star"></i> 60</a></td></tr>
  <tr class="pack"><td class="title"><a href="./api/m3u8/" target="_blank">m3u8视频解析接口  </a></td><td><a href="./api/m3u8/" target="_blank">在线m3u8视频格式解析</a></td><td><a href="./api/m3u8/" target="_blank"><i class="fa fa-star"></i> 61</a></td></tr>
  <tr class="pack"><td class="title"><a href="./api/kuaidi/" target="_blank">快递查询接口  </a></td><td><a href="./api/kuaidi/" target="_blank">支持国内百家快递</a></td><td><a href="./api/kuaidi/" target="_blank"><i class="fa fa-star"></i> 62</a></td></tr>
  <tr class="pack"><td class="title"><a href="./api/lanzou/inde.php" target="_blank">蓝奏云盘直连解析接口 </a></td><td><a href="./api/lanzou/inde.php" target="_blank">蓝奏网盘直连下载API解析接口</a></td><td><a href="./api/lanzou/inde.php" target="_blank"><i class="fa fa-star"></i> 63</a></td></tr>
  <tr class="pack"><td class="title"><a href="./api/ip/" target="_blank">ip和地理位置所在地地名查询  </a></td><td><a href="./api/ip/" target="_blank">在线IP查询和地理位置API接口</a></td><td><a href="./api/ip/" target="_blank"><i class="fa fa-star"></i> 64</a></td></tr>
  <tr class="pack"><td class="title"><a href="./api/netcard/" target="_blank">IP签名档API接口  </a></td><td><a href="./api/netcard/" target="_blank">IP签名档API接口调用</a></td><td><a href="./api/netcard/" target="_blank"><i class="fa fa-star"></i> 65</a></td></tr>
  <tr class="pack"><td class="title"><a href="./api/RandPic/" target="_blank">随机显示图片  </a></td><td><a href="./api/RandPic/" target="_blank">随机显示美图接口</a></td><td><a href="./api/RandPic/" target="_blank"><i class="fa fa-star"></i> 66</a></td></tr>
   <tr class="pack"><td class="title"><a href="./api/cc/inde.php" target="_blank">吉日信息查询  </a></td><td><a href="./api/cc/inde.php" target="_blank">吉日信息查询API接口</a></td><td><a href="./api/cc/inde.php" target="_blank"><i class="fa fa-star"></i> 67</a></td></tr> 
    <tr class="pack"><td class="title"><a href="./api/cc/tuc.php" target="_blank">图虫最新分享接口  </a></td><td><a href="./api/cc/tuc.php" target="_blank">获取图虫最新分享API接口</a></td><td><a href="./api/cc/tuc.php" target="_blank"><i class="fa fa-star"></i> 68</a></td></tr> 
     <tr class="pack"><td class="title"><a href="./api/wy/db.php" target="_blank">豆瓣影片最新热门接口  </a></td><td><a href="./api/wy/db.php" target="_blank">获取豆瓣影片最新热门资讯接口</a></td><td><a href="./api/wy/db.php" target="_blank"><i class="fa fa-star"></i> 69</a></td></tr>
      <tr class="pack"><td class="title"><a href="./api/nf/" target="_blank">查看当前操作系统其他信息  </a></td><td><a href="./api/nf/" target="_blank">获取当前操作系统及其他信息内容</a></td><td><a href="./api/nf/" target="_blank"><i class="fa fa-star"></i> 70</a></td></tr>
       <tr class="pack"><td class="title"><a href="./api/baidu/tqw.php" target="_blank">百度天气查询接口  </a></td><td><a href="./api/baidu/tqw.php" target="_blank">百度天气预报信息API接口调用</a></td><td><a href="./api/baidu/tqw.php" target="_blank"><i class="fa fa-star"></i> 71</a></td></tr>
       <tr class="pack"><td class="title"><a href="./api/api/azw.php" target="_blank">爱站网权重获取接口  </a></td><td><a href="./api/api/azw.php" target="_blank">爱站平台权重查询API接口调用</a></td><td><a href="./api/api/azw.php" target="_blank"><i class="fa fa-star"></i> 72</a></td></tr>
       <tr class="pack"><td class="title"><a href="./api/api/qhw.php" target="_blank">一键加QQ群接口  </a></td><td><a href="./api/api/qhw.php" target="_blank">一键加QQ群号API接口调用</a></td><td><a href="./api/api/qhw.php" target="_blank"><i class="fa fa-star"></i> 73</a></td></tr>
       <tr class="pack"><td class="title"><a href="./api/api/tlew.php" target="_blank">网站标题获取接口  </a></td><td><a href="./api/api/tlew.php" target="_blank">网站标题获取API接口调用</a></td><td><a href="./api/api/tlew.php" target="_blank"><i class="fa fa-star"></i> 74</a></td></tr>
       <tr class="pack"><td class="title"><a href="./api/api/tqw.php" target="_blank">天气网查询接口  </a></td><td><a href="./api/api/tqw.php" target="_blank">天气网API接口调用</a></td><td><a href="./api/api/tqw.php" target="_blank"><i class="fa fa-star"></i> 75</a></td></tr>
       <tr class="pack"><td class="title"><a href="./api/lishi/inde.php" target="_blank">今日的历史接口  </a></td><td><a href="./api/lishi/inde.php" target="_blank">今日历史的API接口调用</a></td><td><a href="./api/lishi/inde.php" target="_blank"><i class="fa fa-star"></i> 76</a></td></tr>
       <tr class="pack"><td class="title"><a href="./api/ping/" target="_blank">ping域名接口  </a></td><td><a href="./api/ping/" target="_blank">ping域名查询API接口调用</a></td><td><a href="./api/ping/" target="_blank"><i class="fa fa-star"></i> 77</a></td></tr>
       <tr class="pack"><td class="title"><a href="./api/bd/inde.php" target="_blank">腾讯短网址接口  </a></td><td><a href="./api/bd/inde.php" target="_blank">腾讯短网址API接口调用</a></td><td><a href="./api/bd/inde.php" target="_blank"><i class="fa fa-star"></i> 78</a></td></tr> 
       <tr class="pack"><td class="title"><a href="./api/qq/wx.php" target="_blank">微信视频解析接口  </a></td><td><a href="./api/qq/wx.php" target="_blank">微信视频解析API接口调用</a></td><td><a href="./api/qq/wx.php" target="_blank"><i class="fa fa-star"></i> 79</a></td></tr>
       <tr class="pack"><td class="title"><a href="./api/resou/index.php" target="_blank">新浪微博热搜榜  </a></td><td><a href="./api/resou/index.php" target="_blank">最新新浪微博热搜榜API接口</a></td><td><a href="./api/resou/index.php" target="_blank"><i class="fa fa-star"></i> 80</a></td></tr>  
       <tr class="pack"><td class="title"><a href="./api/bd/dou.php" target="_blank">豆瓣影片资源搜索接口  </a></td><td><a href="./api/bd/dou.php" target="_blank">豆瓣影片资源搜索详情API接口</a></td><td><a href="./api/bd/dou.php" target="_blank"><i class="fa fa-star"></i> 81</a></td></tr>
       <tr class="pack"><td class="title"><a href="./api/ag/" target="_blank">自判断随机二次元API </a></td><td><a href="./api/ag/" target="_blank">随机二次元图片API接口</a></td><td><a href="./api/ag/" target="_blank"><i class="fa fa-star"></i> 82</a></td></tr>
          
            </tbody>
        </table>
    </main>

    <footer class="copyright mt-5">
        <div class="container">© <?php echo $aik['foot']; ?></div>
    </footer>

</body>

<script src="https://cdn.staticfile.org/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdn.staticfile.org/popper.js/1.12.5/umd/popper.min.js"></script>
<script src="https://cdn.staticfile.org/twitter-bootstrap/4.1.0/js/bootstrap.min.js"></script>
<script src="./api/main.js"></script>
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
</html>


