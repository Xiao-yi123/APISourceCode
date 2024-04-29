SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;


CREATE TABLE IF NOT EXISTS `api_black` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `value` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `api_info` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `sort` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `desc` varchar(255) NOT NULL,
  `doc` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL,
  `request` varchar(255) NOT NULL,
  `demo` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `count` int(11) NOT NULL DEFAULT '0',
  `info` text NOT NULL,
  `detail` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=14 ;

INSERT INTO `api_info` (`id`, `sort`, `name`, `type`, `desc`, `doc`, `path`, `request`, `demo`, `icon`, `time`, `count`, `info`, `detail`) VALUES
    (1, 1, '网站ICP备案', 'GET', '', 'icp', 'icp', '', '', 'desktop_mac', '1714390545', 45688, '{\n  \"code\": 200,\n  \"data\": {\n    \"name\": \"北京百度网讯科技有限公司\",\n    \"nature\": \"企业\",\n    \"icp\": \"京ICP证030173号-1\",\n    \"sitename\": \"百度\",\n    \"index\": \"baidu.com\",\n    \"time\": \"2020-08-05\"\n  }\n}', '<table class=\"mdui-table\">\n          <thead>\n            <tr>\n              <th>参数名称</th>\n              <th>类型</th>\n              <th>参数值</th>\n              <th>描述</th>\n            </tr>\n          </thead>\n          <tbody>\n            <tr>\n              <td><code>url</code></td>\n              <td>必填</td>\n              <td>url</td>\n              <td>即需要查询的网站</td>\n            </tr>\n\n          </tbody>\n        </table>'),
    (2, 1, 'QQ在线状态', 'GET', '', 'qqzx', 'qqzx', 'qq=QQ帐号', '', 'camera', '1714316210', 123127, '{\"code\":\"20\",\"msg\":\"电脑离线\"}', '<table class=\"mdui-table\"><thead><tr>\n<th>参数名称</th><th>类型</th><th>参数值</th><th>描述</th></tr></thead><tbody>\n<tr><td><code>qq</code></td>\n<td>必选</td><td>QQ号</td>\n<td>需要查询的QQ号</tr>\n</tbody></table>'),
    (3, 3, 'QQ头像获取', 'GET', '', 'qqimg', 'qqimg', 'qq=QQ帐号', '<img src=\"https://tenapi.cn/qqimg?qq=123456\" >', 'camera', '1714316313', 80898, 'https://q2.qlogo.cn/headimg_dl?bs=123456&dst_uin=123456&dst_uin=123456&;dst_uin=123456&spec=100&url_enc=0&referer=bu_interface&term_type=PC', '<table class=\"mdui-table\">\n          <thead>\n            <tr>\n              <th>参数名称</th>\n              <th>类型</th>\n              <th>参数值</th>\n              <th>描述</th>\n            </tr>\n          </thead>\n          <tbody>\n            <tr>\n              <td><code>qq</code></td>\n              <td>必选</td>\n              <td>qq</td>\n              <td>即需要查询的qq </td>\n            </tr>\n          </tbody>\n        </table>'),
    (4, 1, '历史上的今天', 'GET', '', 'lishi', 'lishi', '', '', 'schedule', '1714315534', 45677, '俄国名将库图佐夫逝世', '<table class=\"mdui-table\">\n          <thead>\n            <tr>\n              <th>参数名称</th>\n              <th>类型</th>\n              <th>参数值</th>\n              <th>描述</th>\n            </tr>\n          </thead>\n          <tbody>\n		  <tr>\n              <td><code>num</code></td>\n              <td>可选</td>\n              <td>1</td>\n              <td>获取的数据</td>\n            </tr>\n            <tr>\n              <td><code>format</code></td>\n              <td>可选</td>\n              <td>json｜text｜js</td>\n              <td>获取全部历史上的今天</td>\n            </tr>\n\n          </tbody>\n        </table>'),
    (5, 1, 'ICO站标获', 'GET', '', 'ico', 'ico', '', '<img src=\"https://tenapi.cn/ico/?url=www.baidu.com\" >', 'desktop_mac', '1714395472', 87897, 'https://tenapi.cn/ico/?url=www.baidu.com', '<table class=\"mdui-table\">\n          <thead>\n            <tr>\n              <th>参数名称</th>\n              <th>类型</th>\n              <th>参数值</th>\n              <th>描述</th>\n            </tr>\n          </thead>\n          <tbody>\n            <tr>\n              <td><code>url</code></td>\n              <td>必填</td>\n              <td>url</td>\n              <td>即需要获取ico的网站</td>\n            </tr>\n          </tbody>\n        </table>'),
    (6, 1, '随机动漫图', 'GET', '', 'img', 'img', '', '<img src=\"https://tenapi.cn/img/acg.php\" >', 'dvr', '1714391389', 78990, 'https://tva1.sinaimg.cn/large/0072Vf1pgy1foxk76lzl8j31hc0u0dxk.jpg', '<table class=\"mdui-table\"><thead><tr>\n<th>参数名称</th><th>类型</th><th>参数值</th><th>描述</th></tr></thead><tbody><tr>\n<td><code>type</code></td>\n<td>可选</td><td>json</td>\n<td>即返回内容</td>\n</tr></tbody></table>'),
    (7, 1, '网站标题获取', 'GET', '', 'title', 'title', 'url=https://www.baidu.com/', '', 'desktop_mac', '1714315751', 13224, '{\n    \"code\": 200,\n    \"data\": {\n        \"title\": \"百度一下，你就知道\",\n        \"description\": \"全球领先的中文搜索引擎、致力于让网民更便捷地获取信息，找到所求。百度超过千亿的中文网页数据库，可以瞬间找到相关的搜索结果。\",\n        \"keywords\": null\n    }\n}', '<table class=\"mdui-table\"><thead><tr>\n<th>参数名称</th><th>类型</th><th>参数值</th><th>描述</th></tr></thead><tbody>\n<tr><td><code>url</code></td>\n<td>必填</td><td>https://www.baidu.com/</td>\n<td>需要获取的URL</tr>\n</tbody></table>'),
    (8, 1, '爱站权重获取', 'GET', '', 'web', 'web', '', '<img src=\"https://tenapi.cn/web/?url=www.baidu.com\" >', 'pets', '1714390867', 89911, 'https://statics.aizhan.com/images/br/10.png', '<table class=\"mdui-table\">\n          <thead>\n            <tr>\n              <th>参数名称</th>\n              <th>类型</th>\n              <th>参数值</th>\n              <th>描述</th>\n            </tr>\n          </thead>\n          <tbody>\n            <tr>\n              <td><code>url</code></td>\n              <td>必选</td>\n              <td>url</td>\n              <td>即需要查询权重的网址</td>\n            </tr>\n\n          </tbody>\n          <tbody>\n            <tr>\n              <td><code>json</code></td>\n              <td>可选</td>\n              <td>json</td>\n              <td>输出所有权重</td>\n            </tr>\n\n          </tbody>\n        </table>'),
    (9, 1, '随机一言', 'GET', '', 'yiyan', 'yiyan', 'code=json', '<script src=\"https://tenapi.cn/yiyan/?format=js\"></script>', 'border_color', '1714390075', 37, '脑子里都是圣诞节的铃声了，那是头痛。', '<table class=\"mdui-table\">\n          <thead>\n            <tr>\n              <th>参数名称</th>\n              <th>类型</th>\n              <th>参数值</th>\n              <th>描述</th>\n            </tr>\n          </thead>\n          <tbody>\n            <tr>\n              <td><code>charset</code></td>\n              <td>可选</td>\n              <td>GBK</td>\n              <td>返回字符集(默认UTF8)</td>\n            </tr>\n            <tr>\n              <td><code>code</code></td>\n              <td>可选</td>\n              <td>text｜js｜array｜json｜xml</td>\n              <td>返回格式(默认text)</td>\n            </tr>\n          </tbody>\n        </table>'),
    (10, 1, '每日Bing美', 'GET', '', 'bing', 'bing', '', '<img src=\"http://cn.bing.com/th?id=OHR.LeucisticHummingbird_ZH-CN2921653789_1920x1080.jpg&amp;rf=LaDigue_1920x1080.jpg&amp;pid=hp\" >', 'dvr', '1714311734', 5, 'https://tenapi.cn/bing', '<table class=\"mdui-table\">\n          <thead>\n            <tr>\n              <th>参数名称</th>\n              <th>类型</th>\n              <th>参数值</th>\n              <th>描述</th>\n            </tr>\n          </thead>\n          <tbody>\n            <tr>\n              <td><code>暂无</code></td>\n              <td>暂无</td>\n              <td>暂无</td>\n              <td>暂无</td>\n            </tr>\n\n          </tbody>\n        </table>'),
    (11, 1, '垃圾分类查询', 'GET', '', 'laji', 'laji', '{\"code\":1,\"msg\":\"查询成功！\",\"data\":\"可回收垃圾\"}', '', 'delete', '1714393495', 58, '', '<table class=\"mdui-table\">\n          <thead>\n            <tr>\n              <th>参数名称</th>\n              <th>类型</th>\n              <th>参数值</th>\n              <th>描述</th>\n            </tr>\n          </thead>\n          <tbody>\n            <tr>\n              <td><code>keyword</code></td>\n              <td>必填</td>\n              <td>wd</td>\n              <td>即你所需要查询的垃圾</td>\n            </tr>\n\n          </tbody>\n        </table>'),
    (12, 1, '手机号归属地', 'GET', '', 'tel', 'tel', 'tel=18888888888', '', 'call', '1714315972', 6, '{ \"code\": 200, \"tel\": \"18888888888\", \"local\": \"归属地：北京市\", \"duan\": \"号码段：1888888\", \"type\": \"卡类型：北京移动TD-SCDMA卡 (3G)\", \"yys\": \"运营商：中国移动\", \"bz\": \"通信标准：TD-SCDMA (时分同步码分多址)\" }', '<table class=\"mdui-table\">\n          <thead>\n            <tr>\n              <th>参数名称</th>\n              <th>类型</th>\n              <th>参数值</th>\n              <th>描述</th>\n            </tr>\n          </thead>\n          <tbody>\n            <tr>\n              <td><code>tel</code></td>\n              <td>必选</td>\n              <td>手机号</td>\n              <td>即需要查询的手机号</td>\n            </tr>\n\n          </tbody>\n        </table>'),
    (13, 1, 'IP定位', 'GET', '', 'ip2region', 'ip2region', 'ip=8.8.8.8', '', 'dvr', '1714394603', 9, '{\"code\":201,\"msg\":\"Ip\\u5b9a\\u4f4d\\u4e8e\\u7f8e\\u56fd\\u3010Level3\\u3011\"}', '<table class=\"mdui-table\"><thead><tr>\n<th>参数名称</th><th>类型</th><th>参数值</th><th>描述</th></tr></thead><tbody>\n<tr><td><code>ip</code></td>\n<td>必填</td><td>8.8.8.8</td>\n<td>需要定位的IP</tr>\n</tbody></table>');

CREATE TABLE IF NOT EXISTS `api_post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `sort` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `time` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `api_setup` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `domain` varchar(255) NOT NULL,
  `keywords` varchar(255) NOT NULL,
  `desc` varchar(255) NOT NULL,
  `server` varchar(255) NOT NULL,
  `baidu` varchar(255) NOT NULL,
  `css` text NOT NULL,
  `js` text NOT NULL,
  `log` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

INSERT INTO `api_setup` (`id`, `title`, `domain`, `keywords`, `desc`, `server`, `baidu`, `css`, `js`, `log`) VALUES
(1, '刀客源码网', 'https://www.dkewl.com/', '刀客源码网', '刀客源码网', '', 'd3b3b1b968a56124689d1366adeacf8f', '', '', '');

CREATE TABLE IF NOT EXISTS `api_sort` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=4 ;

INSERT INTO `api_sort` (`id`, `name`, `icon`, `type`, `time`) VALUES
(1, '默认分类', 'crop_din', '0', '1639479976'),
(3, 'QQ类', 'dvr', '0', '1640775825'),
(2, '站点公告', 'dvr', '1', '1640776774');

CREATE TABLE IF NOT EXISTS `api_user` (
  `uid` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `time` char(20) NOT NULL,
  PRIMARY KEY (`uid`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

INSERT INTO `api_user` (`uid`, `username`, `email`, `password`, `time`) VALUES
(1, 'admin', '123@qq.com', '###0918d318d77a701b5c3ad7aee135265c', '1639479976');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
