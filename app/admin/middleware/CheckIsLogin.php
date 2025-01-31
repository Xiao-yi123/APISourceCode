<?php
declare (strict_types = 1);

namespace app\admin\middleware;

use think\facade\Cache;
use think\facade\Session;

class CheckIsLogin
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
        $adminName = Cache::get('adminName');
        if (empty(Session::get('adminid')) || empty(Session::get('adminname'))) {
            return redirect("/{$adminName}/login/index");
        }

        return $next($request);
    }
}
