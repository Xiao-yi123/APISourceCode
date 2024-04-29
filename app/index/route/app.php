<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
use think\facade\Route;

Route::group('/',function (){
//    首页
    Route::rule("",'Index/index');

    Route::rule('doc/:id','Index/doc');
    Route::rule('post/:id','Index/post');
    Route::rule('list','Index/postList');
    Route::rule("getCount",'Index/getCount');
    Route::rule('api/:name','Api/index');
});