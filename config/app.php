<?php
// +----------------------------------------------------------------------
// | 应用设置
// +----------------------------------------------------------------------

use think\facade\Env;

return [
    // 应用名称
    'app_name'               => 'API-Admin',
    // 应用地址
    'app_host'         => Env::get('app.host', ''),
    // 应用版本
    'app_version'            => '1.0',
    // 应用的命名空间
    'app_namespace'    => '',
    // 是否启用路由
    'with_route'       => true,
    // 是否启用事件
    'with_event'       => true,
    // 默认应用
    'default_app'      => 'index',
    //开启自动多应用
    'auto_multi_app'    =>  true,
    // 开启应用快速访问
    'app_express'      => true,
    // 默认时区
    'default_timezone' => 'Asia/Shanghai',
    // 应用映射（自动多应用模式有效）
    'app_map'          => [
        Env::get('app.adminName', 'admin')=>  'admin',
    ],
    // 后台别名
    'admin_alias_name' => 'admin',
    // 域名绑定（自动多应用模式有效）
    'domain_bind'      => ['common'],
    // 禁止URL访问的应用列表（自动多应用模式有效）
    'deny_app_list'    => [],

    // 异常页面的模板文件
    'exception_tmpl'         => 'app/404.html',

    // 错误显示信息,非调试模式有效
    'error_message'          => '页面错误！请稍后再试～',
    // 显示错误信息
    'show_error_msg'         => false,
    // 异常处理handle类 留空使用 \think\exception\Handle
    'exception_handle'       => '',

];
