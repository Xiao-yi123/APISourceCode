<?php
declare (strict_types = 1);

namespace app\Index\service;

use think\App;
use think\facade\Db;
use think\Request;

class APIService
{

    protected function init()
    {
        ini_set('display_errors', (string)0);
        $file = '../api/black.data';
        $test = explode('/',request()->server("PHP_SELF"));
        $path = $test[count($test)-1];

        $Conunt = $this->getCount($path);
        if($Conunt['code'] == 201){
            $Json = json_encode($Conunt,JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE);
            echo stripslashes($Json);
            die;
        }

        $data = fopen($file, 'r');
        if(filesize($file) > 0){
            $data = fread($data, filesize($file));
            $data = json_decode($data,true);
            if(in_array($this->get_ip(),$data)){
                $Json = array(
                    'code' => 201,
                    'msg' => '您已被拉黑',
                );
                $Json = json_encode($Json,JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE);
                echo stripslashes($Json);
                die;
            }
            if(!empty($this->get_referer())){
                if(in_array($this->get_referer(),$data)){
                    $Json = array(
                        'code' => 201,
                        'msg' => '您已被拉黑',
                    );
                    $Json = json_encode($Json,JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE);
                    echo stripslashes($Json);
                    die;
                }
            }
        }
    }

    protected function getCount($id){
        $count = Db::name('info')->where("path='$id'")->update([
            'count' => Db::raw('count+1')
        ]);
        if($count){
            return [
                'code'  =>  200,
                'msg'   =>  'success'
            ];
        }else{
            return [
                'code'  =>  201,
                'msg'   =>  'error'
            ];
        }
    }

    protected function get_referer()
    {
        $referer = request()->server("HTTP_REFERER");
        $referer = str_replace('http://', '', $referer);
        $referer = str_replace('https://', '', $referer);
        $referer = str_replace('www.', '', $referer);
        $referer = str_replace('/', '', $referer);
        $referer = str_replace('.', '', $referer);
        return $referer;
    }

    protected function get_ip()
    {
        if(!empty(request()->server('HTTP_CLIENT_IP'))){
            $cip = request()->server('HTTP_CLIENT_IP');
        }else if(!empty(request()->server('HTTP_X_FORWARDED_FOR'))){
            $cip = request()->server('HTTP_X_FORWARDED_FOR');
        }else if(!empty(request()->server('REMOTE_ADDR'))){
            $cip = request()->server('REMOTE_ADDR');
        }else{
            $cip = '';
        }
        preg_match("/[\d\.]{7,15}/", $cip, $cips);
        $cip = isset($cips[0]) ? $cips[0] : 'unknown';
        unset($cips);
        return $cip;
    }

    protected function is_https() {
        if ( !empty(request()->server("HTTPS")) && strtolower(request()->server("HTTPS")) !== 'off') {
            return true;
        } elseif (request()->server("HTTP_X_FORWARDED_PROTO") === 'https' ) {
            return true;
        } elseif ( !empty($_SERVER['HTTP_FRONT_END_HTTPS']) && strtolower(request()->server("HTTP_FRONT_END_HTTPS")) !== 'off') {
            return true;
        }
        return false;
    }

    //暂时无用
    protected  function wCount($url){
        $ch = curl_init();
        curl_setopt($ch,CURLOPT_URL,$url);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
        curl_setopt($ch,CURLOPT_HEADER,0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        $output = curl_exec($ch);
        curl_close($ch);
    }

    public function run($name){
        $this->init();
        $path = base_path().'../api/'.$name.'/index.php';
        if(!file_exists($path)){
            return "API接口错误";
        }
        include $path;
    }
}
