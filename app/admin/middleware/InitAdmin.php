<?php
declare (strict_types = 1);

namespace app\admin\middleware;

use think\facade\Cache;
use think\facade\View;

class InitAdmin
{
    /**
     * 处理请求
     *
     * @param \think\Request $request
     * @param \Closure       $next
     * @return Response
     */
    public function handle($request, \Closure $next)
    {
        if (!Cache::get('adminName')) {
            $adminKeys = array_keys(config('app.app_map'), 'admin');
            Cache::set("adminName",$adminKeys[0]);
        }
        View::assign('adminName',Cache::get('adminName'));

        return $next($request);
    }
}
