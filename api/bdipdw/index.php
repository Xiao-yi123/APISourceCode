
<?php 
error_reporting(0);
require_once '../config.php';
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>百度IP定位 - <?php echo $aik['sitename']; ?></title>
    <meta name="keywords" content="<?php echo $aik['keywords']; ?>">
	<meta name="description" content="<?php echo $aik['description']; ?>">
    <meta name="author" content="智云影音">
    <link href="css/api_bootstrap.min.css" rel="stylesheet">
    <link href="css/api_font-awesome.min.css" rel="stylesheet">
    <link href="css/api_site.min.css" rel="stylesheet">
</head>
<body class="home-template">
    <header class="site-header">
        <nav class="navbar navbar-static-top main-navbar" id="top">
            <div class="container">
                <div class="navbar-header">
                    <h3>百度IP查询</h3>	
                </div>
                <nav id="bs-navbar" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                       <li><a href="../../">首页</a></li>
                       <li><a href="#about" onclick="_hmt.push(['_trackEvent', 'main-navbar', 'click', 'about'])">关于</a></li>
                    </ul>
                </nav>
            </div>
        </nav>
        <div class="container jumbotron">
            <div class="row">
                <div class="col-xs-12">
                    <h1>百度IP定位<img src="static/picture/uomgapi.svg" alt="APIlogo" class="hidden"></h1>
                    <p>百度IP定位</p>
                </div>
            </div>
        </div>
        <div class="package-info well well-md text-center">
            <div class="container">
                <ul class="list-inline">
                    <li><a href="#api" data-toggle="tab">API文档</a></li>
                    <li><a href="#code" data-toggle="tab">错误码参照</a></li>
                    <li><a href="#demo" data-toggle="tab">示例代码</a></li>
                </ul>
            </div>
        </div>
    </header>
    <main class="container tab-content" id="myTabContent">
        <article class="markdown-body tab-pane fade in active" id="api">
            <div class="api-sub-content">
                <div class="simpleline"><strong>接口地址：</strong><span class="url"><?php echo filter_input(INPUT_SERVER, "SERVER_NAME"); ?>/api/bdipdw/api.php</span></div>
                <div class="simpleline"><strong>返回格式：</strong><span class="url">json</span></div>
                <div class="simpleline"><strong>请求方式：</strong><span class="url">get/post</span></div>
                <div class="simpleline"><strong>请求示例：</strong><span class="url"><?php echo filter_input(INPUT_SERVER, "SERVER_NAME"); ?>/api/bdipdw/api.php?ip=182.97.65.188</span></div>
                <div class="simpleTable">
                    <p class="linep">请求参数说明：</p>
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
		                  <td class="url">ip</td>
		                  <td class="url">是</td>
		                  <td class="url">string</td>
		                  <td>请输入IP，如：182.97.65.188</td>
		              </tr>
		              		          </tbody>
		          </table>
		          </div>
		          <div class="simpleTable">
		              <p class="linep">返回参数说明：</p>
		               <table class="api-table" border="0" cellspacing="0" cellpadding="0">
		              <tbody><tr class="title">
		                  <th width="20"></th>
		                  <th width="100">名称</th>
		                  <th width="80">类型</th>
		                  <th>说明</th>
		              </tr>
		              		            <tr>
		                  <td>&nbsp;</td>
		                  <td class="url">code</td>
		                  <td class="url">string</td>
		                  <td>返回状态码</td>
		              </tr>
		              		            <tr>
		                  <td>&nbsp;</td>
		                  <td class="url">msg</td>
		                  <td class="url">string</td>
		                  <td>返回状态信息</td>
		              </tr>
		          	<tr>
		          	    <td>&nbsp;</td>
		          	    <td class="url">ascription</td>
		          	    <td class="url">string</td>
		          	    <td>返回IP归属</td>
		          	</tr>
							          	<tr>
					    <td>&nbsp;</td>
					    <td class="url">lonlat</td>
					    <td class="url">string</td>
					    <td>返回IP经纬度</td>
					</tr>
							          	<tr>
					    <td>&nbsp;</td>
					    <td class="url">address</td>
					    <td class="url">string</td>
					    <td>返回IP详细地址</td>
					</tr>
		              		            </tbody>
		        </table>
                </div>
                <div class="simpleTable">
                   <p class="linep">返回示例：</p><div class="prediv"><pre>{
    "code": 10001,
    "msg": "ok",
    "ascription": "江西省|南昌市|东湖区",
    "lonlat": "28.68957800|115.89352755",
    "address": "江西省南昌市东湖区叠山路535号"
}</pre></div>		    </div>
		</div>
        </article>
        <article class="markdown-body tab-pane fade" id="code">
            <div class="api-sub-content">
                <div class="simpleTable">
                <p class="linep"> 服务级错误码参照(error_code)： </p> 
		    <table class="api-table" border="0" cellspacing="0" cellpadding="0"> 
		     <tbody> 
		      <tr> 
		       <th width="20"> &nbsp; </th> 
		       <th width="200"> 错误码 </th> 
		       <th> 说明 </th> 
		      </tr> 
		      		      <tr>
		          <td>&nbsp;</td>
		          <td class="url">20011</td>
			      <td class="text">无效的请求</td> 
		      </tr>
		      		     </tbody> 
		      </table> 
		     </div> 
                <div class="simpleTable">
                    <p class="linep"> 系统级错误码参照： </p> 
		    <table class="api-table" border="0" cellspacing="0" cellpadding="0"> 
		     <tbody> 
		      <tr> 
		       <th width="20"> &nbsp; </th> 
		       <th width="200"> 错误码 </th> 
		       <th> 说明 </th> 
		      </tr> 
		      <tr> 
		       <td> &nbsp; </td> 
		       <td class="url"> 10011 </td> 
		       <td class="text"> 无效的请求 </td> 
		      </tr> 
		     </tbody> 
		    </table> 
		   </div> 
                <div class="simpleTable">
                    <p class="linep"> 错误码格式说明（示例：20011）： </p> 
		    <table class="api-table" border="0" cellspacing="0" cellpadding="0"> 
		     <tbody> 
		      <tr> 
		       <th width="20"> &nbsp; </th> 
		       <th width="200"> 2 </th> 
		       <th width="200"> 001 </th> 
		       <th> 1 </th> 
		      </tr> 
		      <tr> 
		       <td> &nbsp; </td> 
		       <td> 服务级错误（1为系统级错误） </td> 
		       <td> 服务模块代码(即数据ID) </td> 
		       <td> 具体错误代码 </td> 
		      </tr> 
		     </tbody> 
		    </table> 
		   </div> 
		  </div>
	</article>
        <article class="markdown-body tab-pane fade" id="demo">
            <div class="simpleTable">
                <p class="linep">PHP演示：</p>
		    <div class="prediv">
		    	<pre>&lt;?php
header("Content-Type:text/html;charset=UTF-8");
date_default_timezone_set("PRC");
$请求参数名 = "内容";
$result = file_get_contents("API网址".请求参数名);
$arr=json_decode($result,true);
if ($arr['json参数名']==1) {
    echo "返回信息：",$arr['返回信息'];
} else {
    echo $arr['返回信息'];
}
?&gt;</pre>
		    </div>
		</div>
	</article>
</main>
    <footer id="footer" class="footer hidden-print">
        <div class="container">
            <div class="row">
                <div class="footer-about col-md-6 col-sm-12" id="about">
                    <h4>关于 百度IP地址查询，输入IP即可查询地址位置</h4>
			<p>
			API接口开发平台 是 <a href=".." target="_blank" onclick="_hmt.push(['_trackEvent', 'footer', 'click', 'footer-bootcss.com'])">百度IP查询平台</a> 支持并维护的 API 接口项目，致力于为用户提供稳定、快速的免费 API 接口服务平台。
			</p>
			<p>
				反馈或建议请发送邮件至：2248186422@qq.com
			</p>
		</div>
                <div class="footer-links col-md-4 col-sm-12">
                    <h4>友情链接</h4>
    <ul class=\"list-unstyled list-inline\">
				<li><a href=\"https://jq.qq.com/?_wv=1027&k=5DSryHR\" target=\"_blank\" onclick=\"_hmt.push(['_trackEvent', 'footer', 'click', 'footer-xviste'])\">查询接口</a></li>
			</ul>
		</div>
                <div class="footer-techs col-md-2 col-sm-12">
                    <h4>赞助我们</h4>
                     <img src="http://q1.qlogo.cn/g?b=qq&nk=1455112844&s=100" style="width: 100%;">
                </div>
            </div>
        </div>
       <div class="copy-right">
            <span>&copy; 2019-2021</span><a href="<?php echo $aik['pcdomain']; ?>" target="_blank"><?php echo $aik['sitename']; ?></a><span></span>
        </div>
  </footer><a href="#" id="back-to-top"><i class="fa fa-angle-up"></i></a>
    <script src="js/api_jquery.min.js"></script>
    <script src="js/api_bootstrap.min.js"></script>
    <?php echo $aik['tongji']; ?>
</body>
</html>
