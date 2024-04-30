<?php

namespace app\common\constants;

class AdminController extends Controller
{
    /**
     * 控制器中间件
     * @var array
     */
    protected $middleware = [
        \app\admin\middleware\CheckIsLogin::class  =>  []
    ];

    /**
     * 模板布局, false取消
     * @var string|bool
     */
    protected $layout = 'layout/index';

}