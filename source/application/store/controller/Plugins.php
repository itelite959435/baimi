<?php

namespace app\store\controller;



/**
 * 小程序导航栏设置
 * Class  Plugins
 * @package app\store\controller
 */
class Plugins extends Controller
{
    /**
     * 导航栏设置
     * @return mixed
     * @throws \think\exception\DbException
     */
    public function index()
    {
        return $this->fetch('index');
    }

}