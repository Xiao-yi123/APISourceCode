<?php
namespace app\admin\controller;

use app\common\constants\AdminController;
use think\facade\Db;
use think\facade\Session;

/**
 *后台 index
 */
class Index extends AdminController
{
    /**首页
     * @return mixed
     */
    public function index()
    {
        $title = '仪表盘';
        return $this->fetch('index', [
            'title' => $title,
        ]);
    }

    /**退出登录
     * @return \think\response\Json
     */
    public function logout()
    {
        Session::delete('adminid');
        Session::delete('adminname');
        return returnJsonData(200,'正在退出',null);
    }

    /**检测更新
     * @return \think\response\Json
     */
    public function siteUpdate()
    {
        $title = '检测更新';
        $version = file_get_contents('https://tenapi.cn/version');
        $version = json_decode($version, true);
        if ($version['version'] > config('app_version')) {
            return returnJsonData(200,'发现新版本，请更新', $version);
        } else {
            return returnJsonData(201,'当前已是最新版本', null);
        }
    }

    /**站点设置
     * @return mixed
     */
    public function setup()
    {
        $title = '站点设置';

        return $this->fetch('setup', ['title' => $title]);
    }

    /**获取站点设置
     * @return \think\response\Json
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\DbException
     * @throws \think\db\exception\ModelNotFoundException
     */
    function getSetup()
    {
        $data = Db::name('setup')->select()[0];
        return returnJsonData(200, '获取成功', $data);
    }

    /**设置设点设置
     * @return \think\response\Json
     * @throws \think\db\exception\DbException
     */
    function setSetup()
    {
        $data = input('post.');
        $res = Db::name('setup')->where('id',1)->update($data);
        if ($res) {
            return returnJsonData(200, '更新成功', null);
        } else {
            return returnJsonData(201, '更新失败', null);
        }
    }

    /**获取相关信息的数量
     * @return \think\response\Json
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\DbException
     * @throws \think\db\exception\ModelNotFoundException
     */
    public function getCount()
    {
        $info = Db::name('info')->count();
        $sort = Db::name('sort')->count();
        $post = Db::name('post')->count();
        $count = Db::name('info')->sum('count');
        $data = Db::name('info')->order('count desc')->limit(10)->field('id,name,count')->select();
        $data = [
            'info' => $info,
            'sort' => $sort,
            'post' => $post,
            'count' => $count,
            'top10' => $data,
        ];
        return returnJsonData(200, '获取成功', $data);
    }

    /**获取日志信息
     * @return \think\response\Json
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\DbException
     * @throws \think\db\exception\ModelNotFoundException
     */
    public function getNew10()
    {
        $log = Db::name('setup')->field('log')->select()->toArray()[0];
        $file = $log["log"];
        if (empty($file)) {
            return returnJsonData(404, '暂无数据', null);
        }

        $fp = @fopen($file,"r");
        if(!$fp){
            return returnJsonData(201, '获取失败', null);
        }
        $data = [];
        while(!feof($fp)){
            $line = fgets($fp);
            if(strpos($line,'/api/') !== false && strpos($line,'/admin/') === false){
                if(count($data) < 10){
                    $data[] = $line;
                }
            }
        }
        fclose($fp);
        $data = array_reverse($data);
        $data = array_map(function ($item) {
            $item = explode(' ', $item);

            $item = [
                'time' => substr($item[3], 1),
                'status' => $item[8],
                'path' => $item[6],
                'ip' => $item[0],
                'type' => substr($item[5], 1)
            ];
            return $item;
        }, $data);
        return returnJsonData(200, '获取成功', $data);
    }

    /**编辑用户信息
     * @return \think\response\Json
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\DbException
     * @throws \think\db\exception\ModelNotFoundException
     */
    public function editUserinfo()
    {
        if(\request()->isPost()){
            $data = input('post.');
            $data = [
                'username' => $data['username'],
                'password' => hashPwd($data['password']),
                'email' => $data['email'],
            ];
            $res = Db::name('user')->where('uid', 1)->update(array_filter($data));
            if($res){
                return returnJsonData(200, '修改成功');
            }else{
                return returnJsonData(201, '修改失败');
            }
        }else{
            $info = Db::name('user')->where('uid', 1)->find();
            $data = [
                'username' => $info['username'],
                'email' => $info['email'],
                'time' => $info['time'],
            ];
            return returnJsonData(200, '获取成功', $data);
        }
    }

    /**接口搜索
     * @return mixed
     */
    public function apiSearch()
    {
        $title = '接口搜索';
        return $this->fetch('search', ['title' => $title]);
    }

    /**接口搜索列表
     * @return \think\response\Json
     * @throws \think\db\exception\DbException
     */
    public function apiSearchlist()
    {
        $keyword = input('keyword');
        if (!empty($keyword)) {
            $data = Db::name('info')->where('name', 'like', '%' . $keyword . '%')->order('id asc')->paginate(10);
            if (count($data) > 0) {
                return returnJsonData(200, '搜索成功', $data);
            } else {
                return returnJsonData(201, '没有检索到您输入的关键字', null);
            }
        } else {
            return returnJsonData(201, '请输入关键词', null);
        }

    }

    /**请求限制
     * @return mixed
     */
    public function black()
    {
        $title = '请求限制';
        return $this->fetch('black', ['title' => $title]);
    }

    /**添加请求限制
     * @return \think\response\Json
     */
    public function postBlack()
    {
        $data = input('post.');
        if (!empty($data['value'])) {
            $data['time'] = time();
            $res = Db::name('black')->insert($data);
            if ($res) {
                $this->insertData();
                return returnJsonData(200, '添加成功', null);
            } else {
                return returnJsonData(201, '添加失败', null);
            }
        } else {
            return returnJsonData(201, '请输入限制目标', null);
        }
    }

    /**展示请求限制
     * @return \think\response\Json
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\DbException
     * @throws \think\db\exception\ModelNotFoundException
     */
    public function blackOper()
    {
        $id = input('id');
        if(\request()->isPost()){
            $data = Db::name('black')->where('id', $id)->delete();
            if ($data) {
                $this->insertData();
                return returnJsonData(200, '删除成功', null);
            } else {
                return returnJsonData(201, '删除失败', null);
            }
        }else{
            $data = Db::name('black')->where('id', $id)->find();
            if ($data) {
                return returnJsonData(200, '获取成功', $data);
            } else {
                return returnJsonData(201, '获取失败', null);
            }
        }
    }


    /**获取请求限制
     * @return \think\response\Json
     * @throws \think\db\exception\DbException
     */
    public function getList()
    {
        $data = Db::name('black')->order('id asc')->paginate(10);
        if (count($data) > 0) {
            return returnJsonData(200, '获取成功', $data);
        } else {
            return returnJsonData(201, '没有数据', null);
        }
    }

    /**编辑请求限制
     * @return mixed
     */
    public function blackEdit()
    {
        $title = '编辑限制';
        return $this->fetch('blackEdit', ['title' => $title]);
    }

    /**更新请求限制
     * @return \think\response\Json
     * @throws \think\db\exception\DbException
     */
    public function blackUpdate()
    {
        $data = input('post.');
        if(!empty($data['id'])){
            $data['time'] = time();
            $res = Db::name('black')->where('id',$data['id'])->update($data);
            if($res){
                return returnJsonData(200, '更新成功',null);
            }else{
                return returnJsonData(201, '更新失败',null);
            }
        }else{
            return returnJsonData(201, '参数错误',null);
        }
    }

    /**插入数据
     * @return void
     * @throws \think\db\exception\DataNotFoundException
     * @throws \think\db\exception\DbException
     * @throws \think\db\exception\ModelNotFoundException
     */
    public function insertData(){
        $config=base_path().'../api/black.data';
        $ilist = Db::name('black')->where('type',1)->field('value')->select();
        $rlist = Db::name('black')->where('type',0)->field('value')->select();
        $fp=fopen($config,'w');
        $data=[
            'ip'=>[$ilist],
            're'=>[$rlist]
            ];
        fwrite($fp,json_encode($data));
        fclose($fp);
    }
}
