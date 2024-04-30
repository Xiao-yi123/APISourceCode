# 项目介绍
APISourceCode 本项目是一个 API 管理接口管理,带有后台管理功能,内置十多个 API 接口使用。

如果你有任何疑问，可以通过个人网站 http://blog.yiyunt.cn/ 中的联系方式找到我，欢迎与我交流分享。

# 环境要求
此程序基于ThinkPHP6.1 PHP版本需`7.0-7.4`之间。

# 伪静态
`Nginx`请设置如下`伪静态` `Apache`无需配置 运行目录`默认`即可
```
location / {
	if (!-e $request_filename){
		rewrite  ^(.*)$  /index.php?s=$1  last;   break;
	}
}
```
# 食用方法
## 通过通过git下载安装包，composer安装依赖包，install安装
```shell
第一步：下载安装包
git clone git@github.com:Xiao-yi123/APISourceCode.git

第二步：安装依赖包
composer install

第三步：install安装
将程序上传至网站根目录,访问`域名/install`进行安装操作
```

# 安装提示
运行网站地址, 会自动进入安装界面, 请根据提示进行设置, 然后点击安装。
安装完成后会自动生成安装锁 public/install/install.lock, 如需重新安装, 删掉该文件即可。

# 操作指南请前往
程序安装过后请及时删除install目录和修改默认账号密码
默认帐号：admin
默认密码：123456

# 接口添加
接口添加示例请参考系统内置的API接口，需要注意的一点，接口路径为相对路径

例如你添加了一个随机一言接口，接口文件路径为api/yiyan/index.php，yiyan即可

# 代码仓库
GitHub 地址：https://github.com/Xiao-yi123/APISourceCode

# Bug
如果安装后无法使用，请查看 config 下的 database.php 是否正确
Bug反馈请提交`Issues`

# 版权信息
APISourceCode 遵循MIT开源协议发布，并提供免费使用。

# 免责声明
本仓库只为学习研究，如涉及侵犯个人或者团体利益，请与我取得联系，我将主动删除一切相关资料，谢谢！
