<?php
namespace app\store\controller;

/**
 * 后台首页
 * Class Index
 * @package app\store\controller
 */
class Article extends Controller
{
    public function index()
    {
        return $this->fetch('index');
    }

        public function insert()
    {
        return $this->fetch('insert');
    }

}
