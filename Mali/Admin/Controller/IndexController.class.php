<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index()
    {
        $this->display("Index/index");
    }

    /*
     * 分类添加
     * */
    public function addType()
    {
        $this->display('index/addType');
    }

    /*
     * 执行添加动作
     * */
    public function doAddType()
    {
        dump($_POST);
    }
}