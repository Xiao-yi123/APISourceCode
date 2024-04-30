<?php

namespace app\index\controller;

use app\common\constants\IndexController;
use app\index\service\APIService;

class Api extends IndexController
{
    public function index($name)
    {

        $ApiS = new APIService();

        $result = $ApiS->run($name);
        if($result){
            return $result;
        }
    }

}