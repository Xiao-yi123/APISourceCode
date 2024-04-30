<?php
declare (strict_types = 1);

namespace app\admin\middleware;

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
        if (empty(Session::get('adminid')) || empty(Session::get('adminname'))) {
            return redirect('/admin.php/login/index');
        }

        return $next($request);
    }
}
