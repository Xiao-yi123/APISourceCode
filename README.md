# 食用方法
此程序基于ThinkPHP6.1 PHP版本需`7.0-7.4`之间。

`Nginx`请设置如下`伪静态` `Apache`无需配置 运行目录`默认`即可
```
location / {
	if (!-e $request_filename){
		rewrite  ^(.*)$  /index.php?s=$1  last;   break;
	}
}
```

将程序上传至网站根目录,访问`域名/install`进行安装操作

# 操作指南请前往
程序安装过后请及时删除install目录和修改默认账号密码

# 接口添加
接口添加示例请参考系统内置的API接口，需要注意的一点，接口路径为相对路径

例如你添加了一个随机一言接口，接口文件路径为api/yiyan/index.php，yiyan即可

Bug反馈请提交`Issues`


# 免责声明

本仓库只为学习研究，如涉及侵犯个人或者团体利益，请与我取得联系，我将主动删除一切相关资料，谢谢！
